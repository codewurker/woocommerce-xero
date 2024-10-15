<?php
/**
 * Handle sensitive data encryption and decryption.
 *
 * @package    WooCommerce Xero
 * @since      1.7.51
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WC_XR_Data_Encryption.
 *
 * @since 1.7.51
 */
class WC_XR_Data_Encryption {

	/**
	 * Encryption Key.
	 *
	 * @since 1.7.51
	 * @var string
	 */
	private $key;

	/**
	 * Encryption Salt.
	 *
	 * @since 1.7.51
	 * @var string
	 */
	private $salt;

	/**
	 * Class constructor.
	 *
	 * @since 1.7.51
	 */
	public function __construct() {
		$this->key  = $this->get_default_key();
		$this->salt = $this->get_default_salt();
	}

	/**
	 * Returns true if `XERO_ENCRYPTION_KEY` constant is set.
	 *
	 * @since 1.8.2
	 *
	 * @return boolean
	 */
	public function is_custom_xero_enc_key_set() {
		return defined( 'XERO_ENCRYPTION_KEY' ) && '' !== XERO_ENCRYPTION_KEY;
	}

	/**
	 * Returns true if `XERO_ENCRYPTION_SALT` constant is set.
	 *
	 * @since 1.8.2
	 *
	 * @return boolean
	 */
	public function is_custom_xero_salt_key_set() {
		return defined( 'XERO_ENCRYPTION_SALT' ) && '' !== XERO_ENCRYPTION_SALT;
	}

	/**
	 * Returns true if both `XERO_ENCRYPTION_KEY` and `XERO_ENCRYPTION_SALT` constants are set.
	 *
	 * @since 1.8.2
	 *
	 * @return boolean
	 */
	public function are_custom_xero_auth_keys_set() {
		return $this->is_custom_xero_enc_key_set() && $this->is_custom_xero_salt_key_set();
	}

	/**
	 * Get the Logged-in key for encryption.
	 *
	 * @since 1.7.51
	 */
	private function get_default_key(): string {
		if ( $this->is_custom_xero_enc_key_set() ) {
			return XERO_ENCRYPTION_KEY;
		}

		if ( '' !== wp_salt( 'logged_in' ) ) {
			return wp_salt( 'logged_in' );
		}

		// If this is reached, you're either not on a live site or have a serious security issue.
		return 'das-ist-kein-geheimer-schluessel';
	}

	/**
	 * Get the SALT key for encryption.
	 *
	 * @since 1.7.51
	 */
	private function get_default_salt(): string {
		if ( $this->is_custom_xero_salt_key_set() ) {
			return XERO_ENCRYPTION_SALT;
		}

		if ( defined( 'LOGGED_IN_SALT' ) && '' !== LOGGED_IN_SALT ) {
			return LOGGED_IN_SALT;
		}

		// If this is reached, you're either not on a live site or have a serious security issue.
		return 'das-ist-kein-geheimes-salz';
	}

	/**
	 * The encryption method.
	 *
	 * @param string $value Value to encryption.
	 *
	 * @since 1.9.0 Updated to use sodium_crypto_secretbox.
	 * @since 1.7.51
	 *
	 * @return string|bool Encrypted value. If encryption fails, returns the original value or false under certain conditions.
	 */
	public function encrypt( string $value ): string {
		try {
			$key   = sodium_crypto_generichash( $this->key, '', SODIUM_CRYPTO_SECRETBOX_KEYBYTES );
			$nonce = random_bytes( SODIUM_CRYPTO_SECRETBOX_NONCEBYTES );
		} catch ( Exception $e ) {
			// Return the original value if fail to generate nonce and key.
			return $value;
		}

		try {
			$encrypted = sodium_crypto_secretbox( $value . $this->salt, $nonce, $key );
			return sodium_bin2base64( $nonce . $encrypted, SODIUM_BASE64_VARIANT_ORIGINAL );
		} catch ( Exception $e ) {
			// Return false if encryption fails.
			return false;
		}
	}

	/**
	 * The decryption method.
	 *
	 * @param string $encrypted Encrypted value for decryption.
	 *
	 * @since 1.9.0 Updated to use sodium_crypto_secretbox_open.
	 * @since 1.7.51
	 *
	 * @return string|false Decrypted value. If decryption fails, returns the original value or false under certain conditions.
	 */
	public function decrypt( string $encrypted ): string {
		try {
			$decoded = sodium_base642bin( $encrypted, SODIUM_BASE64_VARIANT_ORIGINAL );
			$key     = sodium_crypto_generichash( $this->key, '', SODIUM_CRYPTO_SECRETBOX_KEYBYTES );

			$nonce            = mb_substr( $decoded, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, '8bit' );
			$encrypted_result = mb_substr( $decoded, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES, null, '8bit' );
		} catch ( Exception $e ) {
			// Return the original value if fail to get decoded value or nonce and key.
			return $encrypted;
		}

		try {
			$value = sodium_crypto_secretbox_open( $encrypted_result, $nonce, $key );
			if ( ! $value || substr( $value, - strlen( $this->salt ) ) !== $this->salt ) {
				return false;
			}
			return substr( $value, 0, - strlen( $this->salt ) );
		} catch ( Exception $e ) {
			return false;
		}
	}

	/**
	 * The Legacy decryption method.
	 *
	 * @param string $raw_value Encrypted value for decryption.
	 *
	 * @since 1.9.0
	 *
	 * @return string|false
	 */
	public function legacy_decrypt( string $raw_value ): string {
		if ( ! extension_loaded( 'openssl' ) ) {
			return $raw_value;
		}

		$raw_value = base64_decode( $raw_value, true ); // phpcs:ignore WordPress.PHP.DiscouragedPHPFunctions.obfuscation_base64_decode

		$method = 'aes-256-ctr';
		$ivlen  = openssl_cipher_iv_length( $method );
		$iv     = substr( $raw_value, 0, $ivlen );

		$raw_value = substr( $raw_value, $ivlen );

		$value = openssl_decrypt( $raw_value, $method, $this->key, 0, $iv );
		if ( ! $value || substr( $value, - strlen( $this->salt ) ) !== $this->salt ) {
			return false;
		}

		return substr( $value, 0, - strlen( $this->salt ) );
	}
}
