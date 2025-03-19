<?php
/**
 * LeavePeriod
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

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * LeavePeriod Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LeavePeriod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LeavePeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'period_start_date' => '\DateTime',
        'period_end_date' => '\DateTime',
        'number_of_units' => 'double',
        'period_status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'period_start_date' => 'date',
        'period_end_date' => 'date',
        'number_of_units' => 'double',
        'period_status' => null
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
        'period_start_date' => 'periodStartDate',
        'period_end_date' => 'periodEndDate',
        'number_of_units' => 'numberOfUnits',
        'period_status' => 'periodStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'period_start_date' => 'setPeriodStartDate',
        'period_end_date' => 'setPeriodEndDate',
        'number_of_units' => 'setNumberOfUnits',
        'period_status' => 'setPeriodStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'period_start_date' => 'getPeriodStartDate',
        'period_end_date' => 'getPeriodEndDate',
        'number_of_units' => 'getNumberOfUnits',
        'period_status' => 'getPeriodStatus'
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

    const PERIOD_STATUS_APPROVED = 'Approved';
    const PERIOD_STATUS_COMPLETED = 'Completed';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPeriodStatusAllowableValues()
    {
        return [
            self::PERIOD_STATUS_APPROVED,
            self::PERIOD_STATUS_COMPLETED,
        ];
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
        $this->container['period_start_date'] = isset($data['period_start_date']) ? $data['period_start_date'] : null;
        $this->container['period_end_date'] = isset($data['period_end_date']) ? $data['period_end_date'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['period_status'] = isset($data['period_status']) ? $data['period_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPeriodStatusAllowableValues();
        if (!is_null($this->container['period_status']) && !in_array($this->container['period_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets period_start_date
     *
     * @return \DateTime|null
     */
    public function getPeriodStartDate()
    {
        return $this->container['period_start_date'];
    }

    /**
     * Sets period_start_date
     *
     * @param \DateTime|null $period_start_date The Pay Period Start Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPeriodStartDate($period_start_date)
    {

        $this->container['period_start_date'] = $period_start_date;

        return $this;
    }



    /**
     * Gets period_end_date
     *
     * @return \DateTime|null
     */
    public function getPeriodEndDate()
    {
        return $this->container['period_end_date'];
    }

    /**
     * Sets period_end_date
     *
     * @param \DateTime|null $period_end_date The Pay Period End Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPeriodEndDate($period_end_date)
    {

        $this->container['period_end_date'] = $period_end_date;

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
     * @param double|null $number_of_units The Number of Units for the leave
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }



    /**
     * Gets period_status
     *
     * @return string|null
     */
    public function getPeriodStatus()
    {
        return $this->container['period_status'];
    }

    /**
     * Sets period_status
     *
     * @param string|null $period_status Period Status
     *
     * @return $this
     */
    public function setPeriodStatus($period_status)
    {
        $allowedValues = $this->getPeriodStatusAllowableValues();
        if (!is_null($period_status) && !in_array($period_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'period_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['period_status'] = $period_status;

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
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


