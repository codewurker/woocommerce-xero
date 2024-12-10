<?php
/**
 * ProblemType
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
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\FinanceObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ProblemType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProblemType
{
    /**
     * Possible values of this enum
     */
    const NOT_SET = 'NotSet';
    const BANK_ACCOUNT_NOT_FOUND = 'bank-account-not-found';
    const INTERNAL_ERROR = 'internal-error';
    const INVALID_APPLICATION = 'invalid-application';
    const INVALID_REQUEST = 'invalid-request';
    const ORGANISATION_NOT_FOUND = 'organisation-not-found';
    const ORGANISATION_OFFLINE = 'organisation-offline';
    const REQUEST_TIMEOUT = 'request-timeout';
    const SERVICE_UNAVAILABLE = 'service-unavailable';
    const UNAUTHORIZED = 'unauthorized';
    const RATE_LIMIT_ERROR = 'rate-limit-error';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_SET,
            self::BANK_ACCOUNT_NOT_FOUND,
            self::INTERNAL_ERROR,
            self::INVALID_APPLICATION,
            self::INVALID_REQUEST,
            self::ORGANISATION_NOT_FOUND,
            self::ORGANISATION_OFFLINE,
            self::REQUEST_TIMEOUT,
            self::SERVICE_UNAVAILABLE,
            self::UNAUTHORIZED,
            self::RATE_LIMIT_ERROR,
        ];
    }
}


