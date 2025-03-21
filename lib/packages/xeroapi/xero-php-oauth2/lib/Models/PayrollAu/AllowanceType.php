<?php
/**
 * AllowanceType
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
 * AllowanceType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AllowanceType
{
    /**
     * Possible values of this enum
     */
    const CAR = 'CAR';
    const TRANSPORT = 'TRANSPORT';
    const LAUNDRY = 'LAUNDRY';
    const MEALS = 'MEALS';
    const TRAVEL = 'TRAVEL';
    const OTHER = 'OTHER';
    const TOOLS = 'TOOLS';
    const TASKS = 'TASKS';
    const QUALIFICATIONS = 'QUALIFICATIONS';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CAR,
            self::TRANSPORT,
            self::LAUNDRY,
            self::MEALS,
            self::TRAVEL,
            self::OTHER,
            self::TOOLS,
            self::TASKS,
            self::QUALIFICATIONS,
        ];
    }
}


