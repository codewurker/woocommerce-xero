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
 * Modified by woocommerce on 01-July-2024 using Strauss.
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

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollAuObjectSerializer;
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
        'number_of_units' => 'double',
        'pay_period_end_date' => 'string',
        'pay_period_start_date' => 'string',
        'leave_period_status' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriodStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'number_of_units' => 'double',
        'pay_period_end_date' => null,
        'pay_period_start_date' => null,
        'leave_period_status' => null
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
        'number_of_units' => 'NumberOfUnits',
        'pay_period_end_date' => 'PayPeriodEndDate',
        'pay_period_start_date' => 'PayPeriodStartDate',
        'leave_period_status' => 'LeavePeriodStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'number_of_units' => 'setNumberOfUnits',
        'pay_period_end_date' => 'setPayPeriodEndDate',
        'pay_period_start_date' => 'setPayPeriodStartDate',
        'leave_period_status' => 'setLeavePeriodStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'number_of_units' => 'getNumberOfUnits',
        'pay_period_end_date' => 'getPayPeriodEndDate',
        'pay_period_start_date' => 'getPayPeriodStartDate',
        'leave_period_status' => 'getLeavePeriodStatus'
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
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['pay_period_end_date'] = isset($data['pay_period_end_date']) ? $data['pay_period_end_date'] : null;
        $this->container['pay_period_start_date'] = isset($data['pay_period_start_date']) ? $data['pay_period_start_date'] : null;
        $this->container['leave_period_status'] = isset($data['leave_period_status']) ? $data['leave_period_status'] : null;
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
     * Gets pay_period_end_date
     *
     * @return string|null
     */
    public function getPayPeriodEndDate()
    {
        return $this->container['pay_period_end_date'];
    }
    public function getPayPeriodEndDateAsDate()
    {
      if ($this->getPayPeriodEndDate() != null) {
        return StringUtil::convertStringToDate($this->getPayPeriodEndDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets pay_period_end_date
     *
     * @param string|null $pay_period_end_date The Pay Period End Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayPeriodEndDate($pay_period_end_date)
    {

        $this->container['pay_period_end_date'] = $pay_period_end_date;

        return $this;
    }
    /**
     * Sets pay_period_end_date
     *
     * @param \DateTime |null $pay_period_end_date The Pay Period End Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayPeriodEndDateAsDate($pay_period_end_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($pay_period_end_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($pay_period_end_date->format('Y-m-d')." UTC") * 1000;
        $pay_period_end_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['pay_period_end_date'] = $pay_period_end_date;
      return $this;
    }



    /**
     * Gets pay_period_start_date
     *
     * @return string|null
     */
    public function getPayPeriodStartDate()
    {
        return $this->container['pay_period_start_date'];
    }
    public function getPayPeriodStartDateAsDate()
    {
      if ($this->getPayPeriodStartDate() != null) {
        return StringUtil::convertStringToDate($this->getPayPeriodStartDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets pay_period_start_date
     *
     * @param string|null $pay_period_start_date The Pay Period Start Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayPeriodStartDate($pay_period_start_date)
    {

        $this->container['pay_period_start_date'] = $pay_period_start_date;

        return $this;
    }
    /**
     * Sets pay_period_start_date
     *
     * @param \DateTime |null $pay_period_start_date The Pay Period Start Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setPayPeriodStartDateAsDate($pay_period_start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($pay_period_start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($pay_period_start_date->format('Y-m-d')." UTC") * 1000;
        $pay_period_start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['pay_period_start_date'] = $pay_period_start_date;
      return $this;
    }



    /**
     * Gets leave_period_status
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriodStatus|null
     */
    public function getLeavePeriodStatus()
    {
        return $this->container['leave_period_status'];
    }

    /**
     * Sets leave_period_status
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\LeavePeriodStatus|null $leave_period_status leave_period_status
     *
     * @return $this
     */
    public function setLeavePeriodStatus($leave_period_status)
    {

        $this->container['leave_period_status'] = $leave_period_status;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


