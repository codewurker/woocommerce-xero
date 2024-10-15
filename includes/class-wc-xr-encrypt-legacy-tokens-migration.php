<?php
/**
 * Handles encryption of stored tokens.
 *
 * @package    WooCommerce Xero
 * @since      1.7.51
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Class WC_XR_Encrypt_Legacy_Tokens_Migration.
 *
 * @since 1.7.51
 */
class WC_XR_Encrypt_Legacy_Tokens_Migration {

	/**
	 * Token data option name.
	 *
	 * @var string
	 */
	private $token_data_option_name = 'xero_oauth_options';

	/**
	 * Migration id.
	 *
	 * @since 1.7.51
	 * @var string
	 */
	private $migration_id = 'wc_xr_encrypt_legacy_tokens_migration';

	/**
	 * Encryption migration id.
	 *
	 * @var string
	 */
	private $encryption_migration_id = 'wc_xr_legacy_encrypted_tokens_migration';

	/**
	 * Register migration.
	 *
	 * @since 1.7.51
	 * @return void
	 */
	public function setup_hook() {
		add_action( 'init', array( $this, 'run' ) );
		add_action( 'init', array( $this, 'migrate_legacy_encrypted_tokens' ), 20 );
	}

	/**
	 * Should run migration.
	 *
	 * @since 1.7.51
	 * @return void
	 */
	public function run() {
		// Exit if migration completed.
		if ( $this->is_completed() ) {
			return;
		}

		$tokens_data = get_option( $this->token_data_option_name, false );

		// Encrypt token only if token data exist.
		if ( $tokens_data ) {
			$wc_xr_data_encryption = new WC_XR_Data_Encryption();

			// Encrypt token only if value is non-empty. Default value of token is NULL.
			if ( $tokens_data['token'] ) {
				$tokens_data['token'] = $wc_xr_data_encryption->encrypt( $tokens_data['token'] );
			}

			// Encrypt refresh_token only if value is non-empty. Default value of refresh_token is NULL.
			if ( $tokens_data['refresh_token'] ) {
				$tokens_data['refresh_token'] = $wc_xr_data_encryption->encrypt( $tokens_data['refresh_token'] );
			}

			// Store token data with encrypted token values.
			update_option( $this->token_data_option_name, $tokens_data, false );
		}

		// Complete migration.
		update_option( $this->migration_id, 1, true );
	}

	/**
	 * Migrate legacy encrypted tokens to new encryption.
	 *
	 * @since 1.9.0
	 * @return void
	 */
	public function migrate_legacy_encrypted_tokens() {
		// Exit if migration completed.
		if ( get_option( $this->encryption_migration_id, false ) ) {
			return;
		}

		$tokens_data = get_option( $this->token_data_option_name, false );

		/*
		 * Migrate encrypted tokens only if token data exist and openssl extension is loaded,
		 * openssl extension is required for the decryption of legacy encrypted tokens.
		 */
		if ( $tokens_data && extension_loaded( 'openssl' ) ) {
			$wc_xr_data_encryption = new WC_XR_Data_Encryption();

			// Encrypt token only if value is non-empty after the legacy decryption.
			if ( $tokens_data['token'] ) {
				$token = $wc_xr_data_encryption->legacy_decrypt( $tokens_data['token'] );
				if ( $token ) {
					$tokens_data['token'] = $wc_xr_data_encryption->encrypt( $token );
				}
			}

			// Encrypt refresh_token only if value is non-empty after the legacy decryption.
			if ( $tokens_data['refresh_token'] ) {
				$refresh_token = $wc_xr_data_encryption->legacy_decrypt( $tokens_data['refresh_token'] );
				if ( $refresh_token ) {
					$tokens_data['refresh_token'] = $wc_xr_data_encryption->encrypt( $refresh_token );
				}
			}

			// Store token data with encrypted token values.
			update_option( $this->token_data_option_name, $tokens_data, false );
		} elseif ( $tokens_data && ! extension_loaded( 'openssl' ) ) {
			/*
			 * Handle token encryption for the sites where openssl extension is not installed.
			 *
			 * Legacy encryption was dependent on openssl extension and if openssl extension is not installed
			 * there is a possibility that the tokens are not encrypted, so this migration will encrypt the tokens.
			 */
			$wc_xr_data_encryption = new WC_XR_Data_Encryption();

			// Encrypt token only if it is not-empty and not already encrypted.
			if ( $tokens_data['token'] ) {
				$decrypted_token = $wc_xr_data_encryption->decrypt( $tokens_data['token'] );
				if ( $tokens_data['token'] === $decrypted_token || ! $decrypted_token ) {
					$tokens_data['token'] = $wc_xr_data_encryption->encrypt( $tokens_data['token'] );
				}
			}

			// Encrypt token only if it is not-empty and not already encrypted.
			if ( $tokens_data['refresh_token'] ) {
				$decrypted_refresh_token = $wc_xr_data_encryption->decrypt( $tokens_data['refresh_token'] );
				if ( $tokens_data['refresh_token'] === $decrypted_refresh_token || ! $decrypted_refresh_token ) {
					$tokens_data['refresh_token'] = $wc_xr_data_encryption->encrypt( $tokens_data['refresh_token'] );
				}
			}

			// Store token data with encrypted token values.
			update_option( $this->token_data_option_name, $tokens_data, false );
		}

		// Complete migration.
		update_option( $this->encryption_migration_id, 1, true );
	}

	/**
	 * Should return result whether migration completed or not.
	 *
	 * @since 1.7.51
	 */
	private function is_completed(): bool {
		return (bool) get_option( $this->migration_id, 0 );
	}
}
