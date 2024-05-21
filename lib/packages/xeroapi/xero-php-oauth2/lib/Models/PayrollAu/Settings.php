<?php
/**
 * Settings
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
 * Settings Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Settings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Settings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accounts' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\Account[]',
        'tracking_categories' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategories',
        'days_in_payroll_year' => 'int',
        'employees_are_stp2' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'accounts' => null,
        'tracking_categories' => null,
        'days_in_payroll_year' => 'int32',
        'employees_are_stp2' => null
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
        'accounts' => 'Accounts',
        'tracking_categories' => 'TrackingCategories',
        'days_in_payroll_year' => 'DaysInPayrollYear',
        'employees_are_stp2' => 'EmployeesAreSTP2'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounts' => 'setAccounts',
        'tracking_categories' => 'setTrackingCategories',
        'days_in_payroll_year' => 'setDaysInPayrollYear',
        'employees_are_stp2' => 'setEmployeesAreStp2'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounts' => 'getAccounts',
        'tracking_categories' => 'getTrackingCategories',
        'days_in_payroll_year' => 'getDaysInPayrollYear',
        'employees_are_stp2' => 'getEmployeesAreStp2'
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
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
        $this->container['tracking_categories'] = isset($data['tracking_categories']) ? $data['tracking_categories'] : null;
        $this->container['days_in_payroll_year'] = isset($data['days_in_payroll_year']) ? $data['days_in_payroll_year'] : null;
        $this->container['employees_are_stp2'] = isset($data['employees_are_stp2']) ? $data['employees_are_stp2'] : null;
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
     * Gets accounts
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\Account[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\Account[]|null $accounts Payroll Account details for SuperExpense, SuperLiabilty, WagesExpense, PAYGLiability & WagesPayable.
     *
     * @return $this
     */
    public function setAccounts($accounts)
    {

        $this->container['accounts'] = $accounts;

        return $this;
    }



    /**
     * Gets tracking_categories
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategories|null
     */
    public function getTrackingCategories()
    {
        return $this->container['tracking_categories'];
    }

    /**
     * Sets tracking_categories
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SettingsTrackingCategories|null $tracking_categories tracking_categories
     *
     * @return $this
     */
    public function setTrackingCategories($tracking_categories)
    {

        $this->container['tracking_categories'] = $tracking_categories;

        return $this;
    }



    /**
     * Gets days_in_payroll_year
     *
     * @return int|null
     */
    public function getDaysInPayrollYear()
    {
        return $this->container['days_in_payroll_year'];
    }

    /**
     * Sets days_in_payroll_year
     *
     * @param int|null $days_in_payroll_year Number of days in the Payroll year
     *
     * @return $this
     */
    public function setDaysInPayrollYear($days_in_payroll_year)
    {

        $this->container['days_in_payroll_year'] = $days_in_payroll_year;

        return $this;
    }



    /**
     * Gets employees_are_stp2
     *
     * @return bool|null
     */
    public function getEmployeesAreStp2()
    {
        return $this->container['employees_are_stp2'];
    }

    /**
     * Sets employees_are_stp2
     *
     * @param bool|null $employees_are_stp2 Indicates if the organisation has been enabled for STP Phase 2 editing of employees.
     *
     * @return $this
     */
    public function setEmployeesAreStp2($employees_are_stp2)
    {

        $this->container['employees_are_stp2'] = $employees_are_stp2;

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


