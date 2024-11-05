<?php
/**
 * EarningsRate
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 04-November-2024 using Strauss.
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
 * EarningsRate Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningsRate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'account_code' => 'string',
        'type_of_units' => 'string',
        'is_exempt_from_tax' => 'bool',
        'is_exempt_from_super' => 'bool',
        'is_reportable_as_w1' => 'bool',
        'allowance_contributes_to_annual_leave_rate' => 'bool',
        'allowance_contributes_to_overtime_rate' => 'bool',
        'earnings_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EarningsType',
        'earnings_rate_id' => 'string',
        'rate_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\RateType',
        'rate_per_unit' => 'string',
        'multiplier' => 'double',
        'accrue_leave' => 'bool',
        'amount' => 'double',
        'employment_termination_payment_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType',
        'updated_date_utc' => 'string',
        'current_record' => 'bool',
        'allowance_type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceType',
        'allowance_category' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceCategory'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'account_code' => null,
        'type_of_units' => null,
        'is_exempt_from_tax' => null,
        'is_exempt_from_super' => null,
        'is_reportable_as_w1' => null,
        'allowance_contributes_to_annual_leave_rate' => null,
        'allowance_contributes_to_overtime_rate' => null,
        'earnings_type' => null,
        'earnings_rate_id' => 'uuid',
        'rate_type' => null,
        'rate_per_unit' => null,
        'multiplier' => 'double',
        'accrue_leave' => null,
        'amount' => 'double',
        'employment_termination_payment_type' => null,
        'updated_date_utc' => null,
        'current_record' => null,
        'allowance_type' => null,
        'allowance_category' => null
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
        'name' => 'Name',
        'account_code' => 'AccountCode',
        'type_of_units' => 'TypeOfUnits',
        'is_exempt_from_tax' => 'IsExemptFromTax',
        'is_exempt_from_super' => 'IsExemptFromSuper',
        'is_reportable_as_w1' => 'IsReportableAsW1',
        'allowance_contributes_to_annual_leave_rate' => 'AllowanceContributesToAnnualLeaveRate',
        'allowance_contributes_to_overtime_rate' => 'AllowanceContributesToOvertimeRate',
        'earnings_type' => 'EarningsType',
        'earnings_rate_id' => 'EarningsRateID',
        'rate_type' => 'RateType',
        'rate_per_unit' => 'RatePerUnit',
        'multiplier' => 'Multiplier',
        'accrue_leave' => 'AccrueLeave',
        'amount' => 'Amount',
        'employment_termination_payment_type' => 'EmploymentTerminationPaymentType',
        'updated_date_utc' => 'UpdatedDateUTC',
        'current_record' => 'CurrentRecord',
        'allowance_type' => 'AllowanceType',
        'allowance_category' => 'AllowanceCategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'account_code' => 'setAccountCode',
        'type_of_units' => 'setTypeOfUnits',
        'is_exempt_from_tax' => 'setIsExemptFromTax',
        'is_exempt_from_super' => 'setIsExemptFromSuper',
        'is_reportable_as_w1' => 'setIsReportableAsW1',
        'allowance_contributes_to_annual_leave_rate' => 'setAllowanceContributesToAnnualLeaveRate',
        'allowance_contributes_to_overtime_rate' => 'setAllowanceContributesToOvertimeRate',
        'earnings_type' => 'setEarningsType',
        'earnings_rate_id' => 'setEarningsRateId',
        'rate_type' => 'setRateType',
        'rate_per_unit' => 'setRatePerUnit',
        'multiplier' => 'setMultiplier',
        'accrue_leave' => 'setAccrueLeave',
        'amount' => 'setAmount',
        'employment_termination_payment_type' => 'setEmploymentTerminationPaymentType',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'current_record' => 'setCurrentRecord',
        'allowance_type' => 'setAllowanceType',
        'allowance_category' => 'setAllowanceCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'account_code' => 'getAccountCode',
        'type_of_units' => 'getTypeOfUnits',
        'is_exempt_from_tax' => 'getIsExemptFromTax',
        'is_exempt_from_super' => 'getIsExemptFromSuper',
        'is_reportable_as_w1' => 'getIsReportableAsW1',
        'allowance_contributes_to_annual_leave_rate' => 'getAllowanceContributesToAnnualLeaveRate',
        'allowance_contributes_to_overtime_rate' => 'getAllowanceContributesToOvertimeRate',
        'earnings_type' => 'getEarningsType',
        'earnings_rate_id' => 'getEarningsRateId',
        'rate_type' => 'getRateType',
        'rate_per_unit' => 'getRatePerUnit',
        'multiplier' => 'getMultiplier',
        'accrue_leave' => 'getAccrueLeave',
        'amount' => 'getAmount',
        'employment_termination_payment_type' => 'getEmploymentTerminationPaymentType',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'current_record' => 'getCurrentRecord',
        'allowance_type' => 'getAllowanceType',
        'allowance_category' => 'getAllowanceCategory'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['type_of_units'] = isset($data['type_of_units']) ? $data['type_of_units'] : null;
        $this->container['is_exempt_from_tax'] = isset($data['is_exempt_from_tax']) ? $data['is_exempt_from_tax'] : null;
        $this->container['is_exempt_from_super'] = isset($data['is_exempt_from_super']) ? $data['is_exempt_from_super'] : null;
        $this->container['is_reportable_as_w1'] = isset($data['is_reportable_as_w1']) ? $data['is_reportable_as_w1'] : null;
        $this->container['allowance_contributes_to_annual_leave_rate'] = isset($data['allowance_contributes_to_annual_leave_rate']) ? $data['allowance_contributes_to_annual_leave_rate'] : null;
        $this->container['allowance_contributes_to_overtime_rate'] = isset($data['allowance_contributes_to_overtime_rate']) ? $data['allowance_contributes_to_overtime_rate'] : null;
        $this->container['earnings_type'] = isset($data['earnings_type']) ? $data['earnings_type'] : null;
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['rate_type'] = isset($data['rate_type']) ? $data['rate_type'] : null;
        $this->container['rate_per_unit'] = isset($data['rate_per_unit']) ? $data['rate_per_unit'] : null;
        $this->container['multiplier'] = isset($data['multiplier']) ? $data['multiplier'] : null;
        $this->container['accrue_leave'] = isset($data['accrue_leave']) ? $data['accrue_leave'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['employment_termination_payment_type'] = isset($data['employment_termination_payment_type']) ? $data['employment_termination_payment_type'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
        $this->container['allowance_type'] = isset($data['allowance_type']) ? $data['allowance_type'] : null;
        $this->container['allowance_category'] = isset($data['allowance_category']) ? $data['allowance_category'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['type_of_units']) && (mb_strlen($this->container['type_of_units']) > 50)) {
            $invalidProperties[] = "invalid value for 'type_of_units', the character length must be smaller than or equal to 50.";
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the earnings rate (max length = 100)
     *
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (mb_strlen($name) > 100)) {
            throw new \InvalidArgumentException('invalid length for $name when calling EarningsRate., must be smaller than or equal to 100.');
        }


        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code See Accounts
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {

        $this->container['account_code'] = $account_code;

        return $this;
    }



    /**
     * Gets type_of_units
     *
     * @return string|null
     */
    public function getTypeOfUnits()
    {
        return $this->container['type_of_units'];
    }

    /**
     * Sets type_of_units
     *
     * @param string|null $type_of_units Type of units used to record earnings (max length = 50). Only When RateType is RATEPERUNIT
     *
     * @return $this
     */
    public function setTypeOfUnits($type_of_units)
    {
        if (!is_null($type_of_units) && (mb_strlen($type_of_units) > 50)) {
            throw new \InvalidArgumentException('invalid length for $type_of_units when calling EarningsRate., must be smaller than or equal to 50.');
        }


        $this->container['type_of_units'] = $type_of_units;

        return $this;
    }



    /**
     * Gets is_exempt_from_tax
     *
     * @return bool|null
     */
    public function getIsExemptFromTax()
    {
        return $this->container['is_exempt_from_tax'];
    }

    /**
     * Sets is_exempt_from_tax
     *
     * @param bool|null $is_exempt_from_tax Most payments are subject to tax, so you should only set this value if you are sure that a payment is exempt from PAYG withholding
     *
     * @return $this
     */
    public function setIsExemptFromTax($is_exempt_from_tax)
    {

        $this->container['is_exempt_from_tax'] = $is_exempt_from_tax;

        return $this;
    }



    /**
     * Gets is_exempt_from_super
     *
     * @return bool|null
     */
    public function getIsExemptFromSuper()
    {
        return $this->container['is_exempt_from_super'];
    }

    /**
     * Sets is_exempt_from_super
     *
     * @param bool|null $is_exempt_from_super See the ATO website for details of which payments are exempt from SGC
     *
     * @return $this
     */
    public function setIsExemptFromSuper($is_exempt_from_super)
    {

        $this->container['is_exempt_from_super'] = $is_exempt_from_super;

        return $this;
    }



    /**
     * Gets is_reportable_as_w1
     *
     * @return bool|null
     */
    public function getIsReportableAsW1()
    {
        return $this->container['is_reportable_as_w1'];
    }

    /**
     * Sets is_reportable_as_w1
     *
     * @param bool|null $is_reportable_as_w1 Boolean to determine if the earnings rate is reportable or exempt from W1
     *
     * @return $this
     */
    public function setIsReportableAsW1($is_reportable_as_w1)
    {

        $this->container['is_reportable_as_w1'] = $is_reportable_as_w1;

        return $this;
    }



    /**
     * Gets allowance_contributes_to_annual_leave_rate
     *
     * @return bool|null
     */
    public function getAllowanceContributesToAnnualLeaveRate()
    {
        return $this->container['allowance_contributes_to_annual_leave_rate'];
    }

    /**
     * Sets allowance_contributes_to_annual_leave_rate
     *
     * @param bool|null $allowance_contributes_to_annual_leave_rate Boolean to determine if the allowance earnings rate contributes towards annual leave rate. Only applicable if EarningsType is ALLOWANCE and RateType is RATEPERUNIT
     *
     * @return $this
     */
    public function setAllowanceContributesToAnnualLeaveRate($allowance_contributes_to_annual_leave_rate)
    {

        $this->container['allowance_contributes_to_annual_leave_rate'] = $allowance_contributes_to_annual_leave_rate;

        return $this;
    }



    /**
     * Gets allowance_contributes_to_overtime_rate
     *
     * @return bool|null
     */
    public function getAllowanceContributesToOvertimeRate()
    {
        return $this->container['allowance_contributes_to_overtime_rate'];
    }

    /**
     * Sets allowance_contributes_to_overtime_rate
     *
     * @param bool|null $allowance_contributes_to_overtime_rate Boolean to determine if the allowance earnings rate contributes towards overtime allowance rate. Only applicable if EarningsType is ALLOWANCE and RateType is RATEPERUNIT
     *
     * @return $this
     */
    public function setAllowanceContributesToOvertimeRate($allowance_contributes_to_overtime_rate)
    {

        $this->container['allowance_contributes_to_overtime_rate'] = $allowance_contributes_to_overtime_rate;

        return $this;
    }



    /**
     * Gets earnings_type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EarningsType|null
     */
    public function getEarningsType()
    {
        return $this->container['earnings_type'];
    }

    /**
     * Sets earnings_type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EarningsType|null $earnings_type earnings_type
     *
     * @return $this
     */
    public function setEarningsType($earnings_type)
    {

        $this->container['earnings_type'] = $earnings_type;

        return $this;
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
     * @param string|null $earnings_rate_id Xero identifier
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets rate_type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\RateType|null
     */
    public function getRateType()
    {
        return $this->container['rate_type'];
    }

    /**
     * Sets rate_type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\RateType|null $rate_type rate_type
     *
     * @return $this
     */
    public function setRateType($rate_type)
    {

        $this->container['rate_type'] = $rate_type;

        return $this;
    }



    /**
     * Gets rate_per_unit
     *
     * @return string|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param string|null $rate_per_unit Default rate per unit (optional). Only applicable if RateType is RATEPERUNIT.
     *
     * @return $this
     */
    public function setRatePerUnit($rate_per_unit)
    {

        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }



    /**
     * Gets multiplier
     *
     * @return double|null
     */
    public function getMultiplier()
    {
        return $this->container['multiplier'];
    }

    /**
     * Sets multiplier
     *
     * @param double|null $multiplier This is the multiplier used to calculate the rate per unit, based on the employee’s ordinary earnings rate. For example, for time and a half enter 1.5. Only applicable if RateType is MULTIPLE
     *
     * @return $this
     */
    public function setMultiplier($multiplier)
    {

        $this->container['multiplier'] = $multiplier;

        return $this;
    }



    /**
     * Gets accrue_leave
     *
     * @return bool|null
     */
    public function getAccrueLeave()
    {
        return $this->container['accrue_leave'];
    }

    /**
     * Sets accrue_leave
     *
     * @param bool|null $accrue_leave Indicates that this earnings rate should accrue leave. Only applicable if RateType is MULTIPLE
     *
     * @return $this
     */
    public function setAccrueLeave($accrue_leave)
    {

        $this->container['accrue_leave'] = $accrue_leave;

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
     * @param double|null $amount Optional Amount for FIXEDAMOUNT RateType EarningsRate
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets employment_termination_payment_type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType|null
     */
    public function getEmploymentTerminationPaymentType()
    {
        return $this->container['employment_termination_payment_type'];
    }

    /**
     * Sets employment_termination_payment_type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\EmploymentTerminationPaymentType|null $employment_termination_payment_type employment_termination_payment_type
     *
     * @return $this
     */
    public function setEmploymentTerminationPaymentType($employment_termination_payment_type)
    {

        $this->container['employment_termination_payment_type'] = $employment_termination_payment_type;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets current_record
     *
     * @return bool|null
     */
    public function getCurrentRecord()
    {
        return $this->container['current_record'];
    }

    /**
     * Sets current_record
     *
     * @param bool|null $current_record Is the current record
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

        return $this;
    }



    /**
     * Gets allowance_type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceType|null
     */
    public function getAllowanceType()
    {
        return $this->container['allowance_type'];
    }

    /**
     * Sets allowance_type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceType|null $allowance_type allowance_type
     *
     * @return $this
     */
    public function setAllowanceType($allowance_type)
    {

        $this->container['allowance_type'] = $allowance_type;

        return $this;
    }



    /**
     * Gets allowance_category
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceCategory|null
     */
    public function getAllowanceCategory()
    {
        return $this->container['allowance_category'];
    }

    /**
     * Sets allowance_category
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\AllowanceCategory|null $allowance_category allowance_category
     *
     * @return $this
     */
    public function setAllowanceCategory($allowance_category)
    {

        $this->container['allowance_category'] = $allowance_category;

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


