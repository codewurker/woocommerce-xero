<?php
/**
 * ObjectGroup
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 17-March-2025 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Files API
 *
 * These endpoints are specific to Xero Files API
 *
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\File;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\FileObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ObjectGroup Class Doc Comment
 *
 * @category Class
 * @description The Object Group that the object is in. These roughly correlate to the endpoints that can be used to retrieve the object via the core accounting API.
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ObjectGroup
{
    /**
     * Possible values of this enum
     */
    const ACCOUNT = 'Account';
    const BANK_TRANSACTION = 'BankTransaction';
    const CONTACT = 'Contact';
    const CREDIT_NOTE = 'CreditNote';
    const INVOICE = 'Invoice';
    const ITEM = 'Item';
    const MANUAL_JOURNAL = 'ManualJournal';
    const OVERPAYMENT = 'Overpayment';
    const PAYMENT = 'Payment';
    const PREPAYMENT = 'Prepayment';
    const QUOTE = 'Quote';
    const RECEIPT = 'Receipt';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACCOUNT,
            self::BANK_TRANSACTION,
            self::CONTACT,
            self::CREDIT_NOTE,
            self::INVOICE,
            self::ITEM,
            self::MANUAL_JOURNAL,
            self::OVERPAYMENT,
            self::PAYMENT,
            self::PREPAYMENT,
            self::QUOTE,
            self::RECEIPT,
        ];
    }
}


