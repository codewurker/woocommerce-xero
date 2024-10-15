<?php
/**
 * LeaveEarningsLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 14-October-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Payroll UK
 *
 * This is the Xero Payroll API for orgs in the UK region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollUk;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollUkObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * LeaveEarningsLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeaveEarningsLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeaveEarningsLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_rate_id' => 'string',
        'rate_per_unit' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double',
        'amount' => 'double',
        'is_linked_to_timesheet' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_rate_id' => 'uuid',
        'rate_per_unit' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double',
        'amount' => 'double',
        'is_linked_to_timesheet' => null
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
        'earnings_rate_id' => 'earningsRateID',
        'rate_per_unit' => 'ratePerUnit',
        'number_of_units' => 'numberOfUnits',
        'fixed_amount' => 'fixedAmount',
        'amount' => 'amount',
        'is_linked_to_timesheet' => 'isLinkedToTimesheet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_rate_id' => 'setEarningsRateId',
        'rate_per_unit' => 'setRatePerUnit',
        'number_of_units' => 'setNumberOfUnits',
        'fixed_amount' => 'setFixedAmount',
        'amount' => 'setAmount',
        'is_linked_to_timesheet' => 'setIsLinkedToTimesheet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_rate_id' => 'getEarningsRateId',
        'rate_per_unit' => 'getRatePerUnit',
        'number_of_units' => 'getNumberOfUnits',
        'fixed_amount' => 'getFixedAmount',
        'amount' => 'getAmount',
        'is_linked_to_timesheet' => 'getIsLinkedToTimesheet'
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
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['rate_per_unit'] = isset($data['rate_per_unit']) ? $data['rate_per_unit'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['is_linked_to_timesheet'] = isset($data['is_linked_to_timesheet']) ? $data['is_linked_to_timesheet'] : null;
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
     * Gets earnings_rate_id
     *
     * @return string|null
     */
    public function getEarningsRateId()
    {
        return $this->container['earnings_rate_id'];
    }

    /**
     * Sets earnings_rate_id
     *
     * @param string|null $earnings_rate_id Xero identifier for payroll leave earnings rate
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets rate_per_unit
     *
     * @return double|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param double|null $rate_per_unit Rate per unit for leave earnings line
     *
     * @return $this
     */
    public function setRatePerUnit($rate_per_unit)
    {

        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }



    /**
     * Gets number_of_units
     *
     * @return double|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param double|null $number_of_units Leave earnings number of units
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }



    /**
     * Gets fixed_amount
     *
     * @return double|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param double|null $fixed_amount Leave earnings fixed amount. Only applicable if the EarningsRate RateType is Fixed
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {

        $this->container['fixed_amount'] = $fixed_amount;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount The amount of the earnings line.
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets is_linked_to_timesheet
     *
     * @return bool|null
     */
    public function getIsLinkedToTimesheet()
    {
        return $this->container['is_linked_to_timesheet'];
    }

    /**
     * Sets is_linked_to_timesheet
     *
     * @param bool|null $is_linked_to_timesheet Identifies if the leave earnings is taken from the timesheet. False for leave earnings line
     *
     * @return $this
     */
    public function setIsLinkedToTimesheet($is_linked_to_timesheet)
    {

        $this->container['is_linked_to_timesheet'] = $is_linked_to_timesheet;

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
            PayrollUkObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


