<?php
/**
 * Main request class
 *
 * @package WooCommerce Xero
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

/**
 * Main request class
 */
abstract class WC_XR_Request {

	/**
	 * API URL
	 *
	 * @var String
	 */
	const API_URL = 'https://api.xero.com/api.xro/2.0/';

	/**
	 * The request endpoint
	 *
	 * @var String
	 */
	private $endpoint = '';

	/**
	 * The request method
	 *
	 * @var string
	 */
	private $method = 'PUT';

	/**
	 * The request body
	 *
	 * @var string
	 */
	private $body = '';

	/**
	 * The query string
	 *
	 * @var string
	 */
	private $query = array();

	/**
	 * The request response
	 *
	 * @var array
	 */
	private $response = null;

	/**
	 * Settings
	 *
	 * @var WC_XR_Settings
	 */
	private $settings;

	/**
	 * WC_XR_Request constructor.
	 *
	 * @param WC_XR_Settings $settings Settings.
	 */
	public function __construct( WC_XR_Settings $settings ) {
		$this->settings = $settings;
	}

	/**
	 * Fires before cache set
	 *
	 * @return void
	 */
	protected function before_cache_set() {
	}

	/**
	 * Method to set endpoint
	 *
	 * @param string $endpoint Endpoint.
	 */
	protected function set_endpoint( $endpoint ) {
		$this->endpoint = $endpoint;
	}

	/**
	 * Get the endpoint
	 *
	 * @return string
	 */
	protected function get_endpoint() {
		return $this->endpoint;
	}

	/**
	 * Get the method
	 *
	 * @return string
	 */
	protected function get_method() {
		return $this->method;
	}

	/**
	 * Set the method
	 *
	 * @param string $method Method.
	 */
	protected function set_method( $method ) {
		$this->method = $method;
	}

	/**
	 * Get the body
	 *
	 * @return string
	 */
	protected function get_body() {
		return $this->body;
	}

	/**
	 * Set the body
	 *
	 * @param string $body Body.
	 */
	protected function set_body( $body ) {
		$this->body = $body;
	}

	/**
	 * Get the query
	 *
	 * @return array
	 */
	protected function get_query() {
		return $this->query;
	}


	/**
	 * Set the query
	 *
	 * @param string $query Query.
	 */
	protected function set_query( $query ) {
		$this->query = $query;
	}

	/**
	 * Get response
	 *
	 * @return array
	 */
	public function get_response() {
		return $this->response;
	}

	/**
	 * Return the response body in XML object
	 *
	 * @return SimpleXMLElement|null
	 */
	public function get_response_body_xml() {
		if ( ! is_null( $this->response ) ) {
			return new SimpleXMLElement( $this->response['body'] );
		}

		return null;
	}

	/**
	 * Return the response body
	 *
	 * @return string
	 */
	public function get_response_body() {
		if ( ! is_null( $this->response ) ) {
			return $this->response['body'];
		}

		return '';
	}

	/**
	 * Clear the response
	 *
	 * @return bool
	 */
	private function clear_response() {
		$this->response = null;

		return true;
	}

	/**
	 * Decide which authorization method to use.
	 */
	public function do_request() {
		$this->do_request_oauth20();
	}

	/**
	 * Do the request, legacy style OAuth1
	 *
	 * @deprecated 1.9.0
	 * @return WP_Error
	 */
	public function do_request_legacy() {
		wc_deprecated_function( __METHOD__, '1.9.0', 'WC_XR_Request::do_request' );
		return new WP_Error( 'deprecated', 'This method is deprecated, please use WC_XR_Request::do_request instead.' );
	}

	/**
	 * Get API url.
	 */
	private function get_url() {
		// nosemgrep:audit.php.wp.security.xss.query-arg -- this URL is only used for a wp_remote_request() below, which uses esc_url_raw().
		return add_query_arg( $this->get_query(), self::API_URL . $this->get_endpoint() . '/' );
	}

	/**
	 * Do the request, new way OAuth2.0
	 *
	 * @throws Exception If unable to perform a request.
	 *
	 * @return bool
	 */
	public function do_request_oauth20() {

		$logger = new WC_XR_Logger( $this->settings );
		$logger->write( 'NEW API REQUEST ' . $this->get_endpoint() );

		/**
		 * Cache key is built using the URL and Body.
		 */
		$cache_key = 'api_' . $this->get_endpoint();
		if ( $this->get_query() || $this->get_body() ) {
			$cache_key .= '_' . wp_hash( http_build_query( $this->get_query() ) . $this->get_body() );
		}

		$maybe_cached = wp_cache_get( $cache_key, 'wc_xero' );

		if ( 'GET' === $this->get_method() && $maybe_cached ) {
			$this->response = $maybe_cached;
			$logger->write( 'Return response from cache' );
		} else {
			$client_id     = get_option( 'wc_xero_client_id', '' );
			$client_secret = get_option( 'wc_xero_client_secret', '' );
			$xero_oauth    = WC_XR_OAuth20::get_instance( $client_id, $client_secret );

			// Check if required settings are set.
			if ( ! $xero_oauth->is_api_ready() ) {
				throw new Exception( "Can't do XERO API request because not all required settings are entered or the connection has not been made." );
			}

			// Do the request.
			$this->response = wp_remote_request(
				$this->get_url(),
				array(
					'method'     => $this->get_method(),
					'headers'    => array(
						'Authorization'  => 'Bearer ' . $xero_oauth->get_access_token(),
						'Xero-tenant-id' => $xero_oauth->get_xero_tenant_id(),
						'Accept'         => 'application/xml',
						'Content-Type'   => 'application/binary',
						'Content-Length' => strlen( $this->get_body() ),
					),
					'timeout'    => 70,
					'body'       => $this->get_body(),
					'user-agent' => 'WooCommerce ' . WC()->version,
				)
			);

			$this->before_cache_set();

			/**
			 * Cache TTL 60 seconds is enough to prevent duplicating
			 * requests during bulk operations but not too large
			 */
			if ( 'GET' === $this->get_method() ) {
				wp_cache_set( $cache_key, $this->response, 'wc_xero', MINUTE_IN_SECONDS );
			}
		}

		// Check if request is an error.
		if ( is_wp_error( $this->response ) ) {
			$this->clear_response();
			throw new Exception( 'There was a problem connecting to the API.' );
		}

		// Check for OAuth error.
		if ( isset( $this->response['body'] ) && 0 === strpos( $this->response['body'], 'oauth_problem=' ) ) {

			// Parse error string.
			parse_str( $this->response['body'], $oauth_error );

			// Find OAuth advise.
			$oauth_advise = ( ( isset( $oauth_error['oauth_problem_advice'] ) ) ? $oauth_error['oauth_problem_advice'] : '' );

			// Throw new exception.
			throw new Exception( sprintf( 'Request failed due OAuth error: %s | %s', $oauth_error['oauth_problem'], $oauth_advise ) ); // phpcs:ignore WordPress.Security.EscapeOutput
		}

		// Check for 401 (Unauthorized), 403 (Forbidden) and 429 (too many requests) error.
		$response_code = wp_remote_retrieve_response_code( $this->response );
		if ( in_array( $response_code, array( 401, 403, 429 ), true ) ) {
			$response_message = wp_remote_retrieve_response_message( $this->response );

			// Throw new exception.
			// translators: %1$d - response code, %2$s - response message.
			throw new Exception( sprintf( __( 'Xero request failed due to error: %1$d (%2$s)', 'woocommerce-xero' ), absint( $response_code ), esc_attr( $response_message ) ) ); // phpcs:ignore WordPress.Security.EscapeOutput
		}

		return true;
	}
}
