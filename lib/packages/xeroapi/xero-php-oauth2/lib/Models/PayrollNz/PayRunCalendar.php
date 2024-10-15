<?php
/**
 * PayRunCalendar
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
 * PayRunCalendar Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PayRunCalendar implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PayRunCalendar';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payroll_calendar_id' => 'string',
        'name' => 'string',
        'calendar_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\CalendarType',
        'period_start_date' => '\DateTime',
        'period_end_date' => '\DateTime',
        'payment_date' => '\DateTime',
        'updated_date_utc' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payroll_calendar_id' => 'uuid',
        'name' => null,
        'calendar_type' => null,
        'period_start_date' => 'date',
        'period_end_date' => 'date',
        'payment_date' => 'date',
        'updated_date_utc' => 'date-time'
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
        'payroll_calendar_id' => 'payrollCalendarID',
        'name' => 'name',
        'calendar_type' => 'calendarType',
        'period_start_date' => 'periodStartDate',
        'period_end_date' => 'periodEndDate',
        'payment_date' => 'paymentDate',
        'updated_date_utc' => 'updatedDateUTC'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'name' => 'setName',
        'calendar_type' => 'setCalendarType',
        'period_start_date' => 'setPeriodStartDate',
        'period_end_date' => 'setPeriodEndDate',
        'payment_date' => 'setPaymentDate',
        'updated_date_utc' => 'setUpdatedDateUtc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'name' => 'getName',
        'calendar_type' => 'getCalendarType',
        'period_start_date' => 'getPeriodStartDate',
        'period_end_date' => 'getPeriodEndDate',
        'payment_date' => 'getPaymentDate',
        'updated_date_utc' => 'getUpdatedDateUtc'
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
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['calendar_type'] = isset($data['calendar_type']) ? $data['calendar_type'] : null;
        $this->container['period_start_date'] = isset($data['period_start_date']) ? $data['period_start_date'] : null;
        $this->container['period_end_date'] = isset($data['period_end_date']) ? $data['period_end_date'] : null;
        $this->container['payment_date'] = isset($data['payment_date']) ? $data['payment_date'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['calendar_type'] === null) {
            $invalidProperties[] = "'calendar_type' can't be null";
        }
        if ($this->container['period_start_date'] === null) {
            $invalidProperties[] = "'period_start_date' can't be null";
        }
        if ($this->container['payment_date'] === null) {
            $invalidProperties[] = "'payment_date' can't be null";
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
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero unique identifier for the payroll calendar
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of the calendar
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets calendar_type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\CalendarType
     */
    public function getCalendarType()
    {
        return $this->container['calendar_type'];
    }

    /**
     * Sets calendar_type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\CalendarType $calendar_type calendar_type
     *
     * @return $this
     */
    public function setCalendarType($calendar_type)
    {

        $this->container['calendar_type'] = $calendar_type;

        return $this;
    }



    /**
     * Gets period_start_date
     *
     * @return \DateTime
     */
    public function getPeriodStartDate()
    {
        return $this->container['period_start_date'];
    }

    /**
     * Sets period_start_date
     *
     * @param \DateTime $period_start_date Period start date of the calendar
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
     * @param \DateTime|null $period_end_date Period end date of the calendar
     *
     * @return $this
     */
    public function setPeriodEndDate($period_end_date)
    {

        $this->container['period_end_date'] = $period_end_date;

        return $this;
    }



    /**
     * Gets payment_date
     *
     * @return \DateTime
     */
    public function getPaymentDate()
    {
        return $this->container['payment_date'];
    }

    /**
     * Sets payment_date
     *
     * @param \DateTime $payment_date Payment date of the calendar
     *
     * @return $this
     */
    public function setPaymentDate($payment_date)
    {

        $this->container['payment_date'] = $payment_date;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return \DateTime|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }

    /**
     * Sets updated_date_utc
     *
     * @param \DateTime|null $updated_date_utc UTC timestamp of the last update to the pay run calendar
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

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


