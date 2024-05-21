<?php
/**
 * Benefit
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
 * Benefit Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Benefit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Benefit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'category' => 'string',
        'liability_account_id' => 'string',
        'expense_account_id' => 'string',
        'standard_amount' => 'double',
        'percentage' => 'double',
        'calculation_type' => 'string',
        'current_record' => 'bool',
        'subject_to_nic' => 'bool',
        'subject_to_pension' => 'bool',
        'subject_to_tax' => 'bool',
        'is_calculating_on_qualifying_earnings' => 'bool',
        'show_balance_to_employee' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'category' => null,
        'liability_account_id' => 'uuid',
        'expense_account_id' => 'uuid',
        'standard_amount' => 'double',
        'percentage' => 'double',
        'calculation_type' => null,
        'current_record' => null,
        'subject_to_nic' => null,
        'subject_to_pension' => null,
        'subject_to_tax' => null,
        'is_calculating_on_qualifying_earnings' => null,
        'show_balance_to_employee' => null
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
        'id' => 'id',
        'name' => 'name',
        'category' => 'category',
        'liability_account_id' => 'liabilityAccountId',
        'expense_account_id' => 'expenseAccountId',
        'standard_amount' => 'standardAmount',
        'percentage' => 'percentage',
        'calculation_type' => 'calculationType',
        'current_record' => 'currentRecord',
        'subject_to_nic' => 'subjectToNIC',
        'subject_to_pension' => 'subjectToPension',
        'subject_to_tax' => 'subjectToTax',
        'is_calculating_on_qualifying_earnings' => 'isCalculatingOnQualifyingEarnings',
        'show_balance_to_employee' => 'showBalanceToEmployee'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'category' => 'setCategory',
        'liability_account_id' => 'setLiabilityAccountId',
        'expense_account_id' => 'setExpenseAccountId',
        'standard_amount' => 'setStandardAmount',
        'percentage' => 'setPercentage',
        'calculation_type' => 'setCalculationType',
        'current_record' => 'setCurrentRecord',
        'subject_to_nic' => 'setSubjectToNic',
        'subject_to_pension' => 'setSubjectToPension',
        'subject_to_tax' => 'setSubjectToTax',
        'is_calculating_on_qualifying_earnings' => 'setIsCalculatingOnQualifyingEarnings',
        'show_balance_to_employee' => 'setShowBalanceToEmployee'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'category' => 'getCategory',
        'liability_account_id' => 'getLiabilityAccountId',
        'expense_account_id' => 'getExpenseAccountId',
        'standard_amount' => 'getStandardAmount',
        'percentage' => 'getPercentage',
        'calculation_type' => 'getCalculationType',
        'current_record' => 'getCurrentRecord',
        'subject_to_nic' => 'getSubjectToNic',
        'subject_to_pension' => 'getSubjectToPension',
        'subject_to_tax' => 'getSubjectToTax',
        'is_calculating_on_qualifying_earnings' => 'getIsCalculatingOnQualifyingEarnings',
        'show_balance_to_employee' => 'getShowBalanceToEmployee'
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

    const CATEGORY_STAKEHOLDER_PENSION = 'StakeholderPension';
    const CATEGORY_OTHER = 'Other';
    const CALCULATION_TYPE_FIXED_AMOUNT = 'FixedAmount';
    const CALCULATION_TYPE_PERCENTAGE_OF_GROSS = 'PercentageOfGross';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_STAKEHOLDER_PENSION,
            self::CATEGORY_OTHER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalculationTypeAllowableValues()
    {
        return [
            self::CALCULATION_TYPE_FIXED_AMOUNT,
            self::CALCULATION_TYPE_PERCENTAGE_OF_GROSS,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['liability_account_id'] = isset($data['liability_account_id']) ? $data['liability_account_id'] : null;
        $this->container['expense_account_id'] = isset($data['expense_account_id']) ? $data['expense_account_id'] : null;
        $this->container['standard_amount'] = isset($data['standard_amount']) ? $data['standard_amount'] : null;
        $this->container['percentage'] = isset($data['percentage']) ? $data['percentage'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['current_record'] = isset($data['current_record']) ? $data['current_record'] : null;
        $this->container['subject_to_nic'] = isset($data['subject_to_nic']) ? $data['subject_to_nic'] : null;
        $this->container['subject_to_pension'] = isset($data['subject_to_pension']) ? $data['subject_to_pension'] : null;
        $this->container['subject_to_tax'] = isset($data['subject_to_tax']) ? $data['subject_to_tax'] : null;
        $this->container['is_calculating_on_qualifying_earnings'] = isset($data['is_calculating_on_qualifying_earnings']) ? $data['is_calculating_on_qualifying_earnings'] : null;
        $this->container['show_balance_to_employee'] = isset($data['show_balance_to_employee']) ? $data['show_balance_to_employee'] : null;
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
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['liability_account_id'] === null) {
            $invalidProperties[] = "'liability_account_id' can't be null";
        }
        if ($this->container['expense_account_id'] === null) {
            $invalidProperties[] = "'expense_account_id' can't be null";
        }
        if ($this->container['percentage'] === null) {
            $invalidProperties[] = "'percentage' can't be null";
        }
        if ($this->container['calculation_type'] === null) {
            $invalidProperties[] = "'calculation_type' can't be null";
        }
        $allowedValues = $this->getCalculationTypeAllowableValues();
        if (!is_null($this->container['calculation_type']) && !in_array($this->container['calculation_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calculation_type', must be one of '%s'",
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id unique identifier in Xero
     *
     * @return $this
     */
    public function setId($id)
    {

        $this->container['id'] = $id;

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
     * @param string $name Name of the employer pension
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category Category type of the employer pension
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['category'] = $category;

        return $this;
    }



    /**
     * Gets liability_account_id
     *
     * @return string
     */
    public function getLiabilityAccountId()
    {
        return $this->container['liability_account_id'];
    }

    /**
     * Sets liability_account_id
     *
     * @param string $liability_account_id Xero identifier for Liability Account
     *
     * @return $this
     */
    public function setLiabilityAccountId($liability_account_id)
    {

        $this->container['liability_account_id'] = $liability_account_id;

        return $this;
    }



    /**
     * Gets expense_account_id
     *
     * @return string
     */
    public function getExpenseAccountId()
    {
        return $this->container['expense_account_id'];
    }

    /**
     * Sets expense_account_id
     *
     * @param string $expense_account_id Xero identifier for Expense Account
     *
     * @return $this
     */
    public function setExpenseAccountId($expense_account_id)
    {

        $this->container['expense_account_id'] = $expense_account_id;

        return $this;
    }



    /**
     * Gets standard_amount
     *
     * @return double|null
     */
    public function getStandardAmount()
    {
        return $this->container['standard_amount'];
    }

    /**
     * Sets standard_amount
     *
     * @param double|null $standard_amount Standard amount of the employer pension
     *
     * @return $this
     */
    public function setStandardAmount($standard_amount)
    {

        $this->container['standard_amount'] = $standard_amount;

        return $this;
    }



    /**
     * Gets percentage
     *
     * @return double
     */
    public function getPercentage()
    {
        return $this->container['percentage'];
    }

    /**
     * Sets percentage
     *
     * @param double $percentage Percentage of gross of the employer pension
     *
     * @return $this
     */
    public function setPercentage($percentage)
    {

        $this->container['percentage'] = $percentage;

        return $this;
    }



    /**
     * Gets calculation_type
     *
     * @return string
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param string $calculation_type Calculation Type of the employer pension (FixedAmount or PercentageOfGross).
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {
        $allowedValues = $this->getCalculationTypeAllowableValues();
        if (!in_array($calculation_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calculation_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['calculation_type'] = $calculation_type;

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
     * @param bool|null $current_record Identifier of a record is active or not.
     *
     * @return $this
     */
    public function setCurrentRecord($current_record)
    {

        $this->container['current_record'] = $current_record;

        return $this;
    }



    /**
     * Gets subject_to_nic
     *
     * @return bool|null
     */
    public function getSubjectToNic()
    {
        return $this->container['subject_to_nic'];
    }

    /**
     * Sets subject_to_nic
     *
     * @param bool|null $subject_to_nic Identifier of subject To NIC
     *
     * @return $this
     */
    public function setSubjectToNic($subject_to_nic)
    {

        $this->container['subject_to_nic'] = $subject_to_nic;

        return $this;
    }



    /**
     * Gets subject_to_pension
     *
     * @return bool|null
     */
    public function getSubjectToPension()
    {
        return $this->container['subject_to_pension'];
    }

    /**
     * Sets subject_to_pension
     *
     * @param bool|null $subject_to_pension Identifier of subject To pension
     *
     * @return $this
     */
    public function setSubjectToPension($subject_to_pension)
    {

        $this->container['subject_to_pension'] = $subject_to_pension;

        return $this;
    }



    /**
     * Gets subject_to_tax
     *
     * @return bool|null
     */
    public function getSubjectToTax()
    {
        return $this->container['subject_to_tax'];
    }

    /**
     * Sets subject_to_tax
     *
     * @param bool|null $subject_to_tax Identifier of subject To Tax
     *
     * @return $this
     */
    public function setSubjectToTax($subject_to_tax)
    {

        $this->container['subject_to_tax'] = $subject_to_tax;

        return $this;
    }



    /**
     * Gets is_calculating_on_qualifying_earnings
     *
     * @return bool|null
     */
    public function getIsCalculatingOnQualifyingEarnings()
    {
        return $this->container['is_calculating_on_qualifying_earnings'];
    }

    /**
     * Sets is_calculating_on_qualifying_earnings
     *
     * @param bool|null $is_calculating_on_qualifying_earnings Identifier of calculating on qualifying earnings
     *
     * @return $this
     */
    public function setIsCalculatingOnQualifyingEarnings($is_calculating_on_qualifying_earnings)
    {

        $this->container['is_calculating_on_qualifying_earnings'] = $is_calculating_on_qualifying_earnings;

        return $this;
    }



    /**
     * Gets show_balance_to_employee
     *
     * @return bool|null
     */
    public function getShowBalanceToEmployee()
    {
        return $this->container['show_balance_to_employee'];
    }

    /**
     * Sets show_balance_to_employee
     *
     * @param bool|null $show_balance_to_employee display the balance to employee
     *
     * @return $this
     */
    public function setShowBalanceToEmployee($show_balance_to_employee)
    {

        $this->container['show_balance_to_employee'] = $show_balance_to_employee;

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


