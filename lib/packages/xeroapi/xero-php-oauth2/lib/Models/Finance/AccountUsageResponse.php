<?php
/**
 * AccountUsageResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 10-February-2025 using Strauss.
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

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\FinanceObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * AccountUsageResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountUsageResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountUsageResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'organisation_id' => 'string',
        'start_month' => 'string',
        'end_month' => 'string',
        'account_usage' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\AccountUsage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'organisation_id' => 'uuid',
        'start_month' => null,
        'end_month' => null,
        'account_usage' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'organisation_id' => 'organisationId',
        'start_month' => 'startMonth',
        'end_month' => 'endMonth',
        'account_usage' => 'accountUsage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organisation_id' => 'setOrganisationId',
        'start_month' => 'setStartMonth',
        'end_month' => 'setEndMonth',
        'account_usage' => 'setAccountUsage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organisation_id' => 'getOrganisationId',
        'start_month' => 'getStartMonth',
        'end_month' => 'getEndMonth',
        'account_usage' => 'getAccountUsage'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['organisation_id'] = isset($data['organisation_id']) ? $data['organisation_id'] : null;
        $this->container['start_month'] = isset($data['start_month']) ? $data['start_month'] : null;
        $this->container['end_month'] = isset($data['end_month']) ? $data['end_month'] : null;
        $this->container['account_usage'] = isset($data['account_usage']) ? $data['account_usage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets organisation_id
     *
     * @return string|null
     */
    public function getOrganisationId()
    {
        return $this->container['organisation_id'];
    }

    /**
     * Sets organisation_id
     *
     * @param string|null $organisation_id The requested Organisation to which the data pertains
     *
     * @return $this
     */
    public function setOrganisationId($organisation_id)
    {

        $this->container['organisation_id'] = $organisation_id;

        return $this;
    }



    /**
     * Gets start_month
     *
     * @return string|null
     */
    public function getStartMonth()
    {
        return $this->container['start_month'];
    }

    /**
     * Sets start_month
     *
     * @param string|null $start_month The start month of the report
     *
     * @return $this
     */
    public function setStartMonth($start_month)
    {

        $this->container['start_month'] = $start_month;

        return $this;
    }



    /**
     * Gets end_month
     *
     * @return string|null
     */
    public function getEndMonth()
    {
        return $this->container['end_month'];
    }

    /**
     * Sets end_month
     *
     * @param string|null $end_month The end month of the report
     *
     * @return $this
     */
    public function setEndMonth($end_month)
    {

        $this->container['end_month'] = $end_month;

        return $this;
    }



    /**
     * Gets account_usage
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\AccountUsage[]|null
     */
    public function getAccountUsage()
    {
        return $this->container['account_usage'];
    }

    /**
     * Sets account_usage
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\AccountUsage[]|null $account_usage account_usage
     *
     * @return $this
     */
    public function setAccountUsage($account_usage)
    {

        $this->container['account_usage'] = $account_usage;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


