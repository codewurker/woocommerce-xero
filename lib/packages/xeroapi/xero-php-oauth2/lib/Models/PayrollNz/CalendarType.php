<?php
/**
 * CalendarType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 09-December-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * CalendarType Class Doc Comment
 *
 * @category Class
 * @description Calendar type of the pay run
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CalendarType
{
    /**
     * Possible values of this enum
     */
    const WEEKLY = 'Weekly';
    const FORTNIGHTLY = 'Fortnightly';
    const FOUR_WEEKLY = 'FourWeekly';
    const MONTHLY = 'Monthly';
    const ANNUAL = 'Annual';
    const QUARTERLY = 'Quarterly';
    const TWICE_MONTHLY = 'TwiceMonthly';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEEKLY,
            self::FORTNIGHTLY,
            self::FOUR_WEEKLY,
            self::MONTHLY,
            self::ANNUAL,
            self::QUARTERLY,
            self::TWICE_MONTHLY,
        ];
    }
}


