<?php
/**
 * TaxCode
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 20-May-2024 using Strauss.
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
 * TaxCode Class Doc Comment
 *
 * @category Class
 * @description Tax codes used for employee tax
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxCode
{
    /**
     * Possible values of this enum
     */
    const ND = 'ND';
    const M = 'M';
    const ME = 'ME';
    const MSL = 'MSL';
    const MESL = 'MESL';
    const SB = 'SB';
    const S = 'S';
    const SH = 'SH';
    const ST = 'ST';
    const SBSL = 'SBSL';
    const SSL = 'SSL';
    const SHSL = 'SHSL';
    const STSL = 'STSL';
    const WT = 'WT';
    const CAE = 'CAE';
    const EDW = 'EDW';
    const NSW = 'NSW';
    const STC = 'STC';
    const STCSL = 'STCSL';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ND,
            self::M,
            self::ME,
            self::MSL,
            self::MESL,
            self::SB,
            self::S,
            self::SH,
            self::ST,
            self::SBSL,
            self::SSL,
            self::SHSL,
            self::STSL,
            self::WT,
            self::CAE,
            self::EDW,
            self::NSW,
            self::STC,
            self::STCSL,
        ];
    }
}


