== Installation ==

 * Purchase the extension and download the zip file from WooCommerce.com
 * Login to your WordPress dashboard. Click on Plugins | Add New from the left hand menu
 * Click on the "Upload" option, then click "Browse" to select the zip file from your computer.
 * After the zip file has been selected press the "Install Now" button.
 * On the Plugins page, find the Xero for "WooCommerce Xero Integration" plugin and press "Activate"


== Configuring A Connection to Xero ==
1. Sign up for a Xero account (https://www.xero.com/signup/developers/).
2. Go to https://developer.xero.com/app/manage (you’ll be prompted to log in to Xero first).
3. Click on “New App” to create a new application.
4. Fill out the required fields:
   * App Name: WooCommerce
   * Company or Application URL: Your website URL
   * OAuth 2.0 Redirect URI: https://YOUR_WEBSITE_DOMAIN/wp-admin/admin.php?page=woocommerce_xero_oauth
   * Check the box for “I have read and agree to the terms and conditions.”
5. Click on “Create App” to create the application.
6. Copy the “Client ID” and “Client Secret” from the Configuration tab and save them for later.
7. Go to WooCommerce > Xero.
8. Fill out the "Client ID" and "Client Secret" fields with the OAuth credentials we copied in Step 6.
9. Click on the "Save" button to save the configuration.
10. Click on the "Sign in with Xero" button to connect your WooCommerce store to Xero.
11. You will be redirected to Xero to authorize the connection. Follow the steps to authorize the connection.
12. After the connection is authorized, you will be redirected back to your WooCommerce store.

== Configuring Xero for WooCommerce ==

-- Setup Default Account Numbers --

The invoices and payments sent to Xero need to be associated with accounts in your company’s Chart of Accounts.  Use the Account fields in the admin dashboard to specify the account number for each type of account.  Note: The Tax Rate associated with the Xero account needs to match the tax rate setup in WooCommerce.

  * Sales Account – This account will collect all sales of items in your store
  * Sales Tax Account – This account will collect tax associated with purchase
  * Discount Account – This account will collect all discounts given through coupons
  * Shipping Account – This account will collect all shipping charges
  * Payment Account – This account will collect all payments made.  This account either needs to be Account Type "Bank" or have "Enable Payments to this account" checked in the Edit Account Details popup.


== Miscellaneous Settings ==

-- Orders with zero total --
  * Check the box for Orders with zero total to enable export of invoices for orders that have a grand total of zero

-- Debug --
  * Check the box for the Debug option to enable logging for this extension
  * The log file is located at: /wp-logs/







== Processing ==
Orders made in your WooCommerce store will be copied to your Xero account as an approved invoice.  When payment is completed (normally immediately) then a payment is added to the invoice making the invoice paid in full.

A note is added to each order in WooCommerce for the invoice including the Xero invoice reference number (Invoice ID).


== FAQ ==

1. When are orders sent to Xero?

Completed orders are sent to Xero during the checkout process when the customer completes checkout successfully.  This is tied to the action "woocommerce_checkout_order_processed".

2. When are payments sent to Xero?

Payments are sent to Xero when the payment is complete.  This is tied to the action "woocommerce_payment_complete".

3. How do I know if an invoice has been sent to Xero?

Entries are added to the Order Notes area of the order page.  There will be one message for invoice and one for payment.

4. What happens if the tax rate is not setup correctly?

If tax is charged in WooCommerce, and the Xero default payment account does not have tax associated with it then the invoice will still be created, but  there will be an adjustment added to the Invoice in the amount of the tax.

5. What happens if an invoice fails?

If creating the Xero invoice fails for any reason there will be a note added to Order Notes section with text “XERO Error” and the error message.

6. How do I see debug information?

To view debug information make sure the Debug checkbox option is checked in the Xero settings page.  The log file is located at /wp-content/plugins/woocommerce/logs/xero.txt

7. Why aren’t payments being exported?

If invoices are being created, but payments are not being created, make sure that the Xero account that is used for “Payment Account”  has “Enable payments to this account” checked in the Edit Account Details popup.

== Compatibility ==

* [WooCommerce Blocks](https://woo.com/products/woocommerce-gutenberg-products-block)
* [WooPayments](https://woo.com/products/woopayments/)
* Product Block Editor