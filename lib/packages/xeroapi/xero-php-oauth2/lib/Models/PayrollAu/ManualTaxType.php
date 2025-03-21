<?php
/**
 * ManualTaxType
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
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ManualTaxType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualTaxType
{
    /**
     * Possible values of this enum
     */
    const PAYGMANUAL = 'PAYGMANUAL';
    const ETPOMANUAL = 'ETPOMANUAL';
    const ETPRMANUAL = 'ETPRMANUAL';
    const SCHEDULE5_MANUAL = 'SCHEDULE5MANUAL';
    const SCHEDULE5_STSLMANUAL = 'SCHEDULE5STSLMANUAL';
    const SCHEDULE4_MANUAL = 'SCHEDULE4MANUAL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PAYGMANUAL,
            self::ETPOMANUAL,
            self::ETPRMANUAL,
            self::SCHEDULE5_MANUAL,
            self::SCHEDULE5_STSLMANUAL,
            self::SCHEDULE4_MANUAL,
        ];
    }
}


