<?php
/**
 * ChargeType
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 22-July-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Projects API
 *
 * This is the Xero Projects API
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\ProjectObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ChargeType Class Doc Comment
 *
 * @category Class
 * @description Can be &#x60;TIME&#x60;, &#x60;FIXED&#x60; or &#x60;NON_CHARGEABLE&#x60;, defines how the task will be charged. Use &#x60;TIME&#x60; when you want to charge per hour and &#x60;FIXED&#x60; to charge as a fixed amount. If the task will not be charged use &#x60;NON_CHARGEABLE&#x60;.
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChargeType
{
    /**
     * Possible values of this enum
     */
    const TIME = 'TIME';
    const FIXED = 'FIXED';
    const NON_CHARGEABLE = 'NON_CHARGEABLE';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::TIME,
            self::FIXED,
            self::NON_CHARGEABLE,
        ];
    }
}


