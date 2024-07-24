<?php
/**
 * ExpenseClaim
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
 * Xero Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\AccountingObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ExpenseClaim Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ExpenseClaim implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseClaim';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expense_claim_id' => 'string',
        'status' => 'string',
        'payments' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Payment[]',
        'user' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\User',
        'receipts' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Receipt[]',
        'updated_date_utc' => 'string',
        'total' => 'double',
        'amount_due' => 'double',
        'amount_paid' => 'double',
        'payment_due_date' => 'string',
        'reporting_date' => 'string',
        'receipt_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'expense_claim_id' => 'uuid',
        'status' => null,
        'payments' => null,
        'user' => null,
        'receipts' => null,
        'updated_date_utc' => null,
        'total' => 'double',
        'amount_due' => 'double',
        'amount_paid' => 'double',
        'payment_due_date' => null,
        'reporting_date' => null,
        'receipt_id' => 'uuid'
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
        'expense_claim_id' => 'ExpenseClaimID',
        'status' => 'Status',
        'payments' => 'Payments',
        'user' => 'User',
        'receipts' => 'Receipts',
        'updated_date_utc' => 'UpdatedDateUTC',
        'total' => 'Total',
        'amount_due' => 'AmountDue',
        'amount_paid' => 'AmountPaid',
        'payment_due_date' => 'PaymentDueDate',
        'reporting_date' => 'ReportingDate',
        'receipt_id' => 'ReceiptID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expense_claim_id' => 'setExpenseClaimId',
        'status' => 'setStatus',
        'payments' => 'setPayments',
        'user' => 'setUser',
        'receipts' => 'setReceipts',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'total' => 'setTotal',
        'amount_due' => 'setAmountDue',
        'amount_paid' => 'setAmountPaid',
        'payment_due_date' => 'setPaymentDueDate',
        'reporting_date' => 'setReportingDate',
        'receipt_id' => 'setReceiptId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expense_claim_id' => 'getExpenseClaimId',
        'status' => 'getStatus',
        'payments' => 'getPayments',
        'user' => 'getUser',
        'receipts' => 'getReceipts',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'total' => 'getTotal',
        'amount_due' => 'getAmountDue',
        'amount_paid' => 'getAmountPaid',
        'payment_due_date' => 'getPaymentDueDate',
        'reporting_date' => 'getReportingDate',
        'receipt_id' => 'getReceiptId'
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

    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_PAID = 'PAID';
    const STATUS_VOIDED = 'VOIDED';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUBMITTED,
            self::STATUS_AUTHORISED,
            self::STATUS_PAID,
            self::STATUS_VOIDED,
            self::STATUS_DELETED,
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
        $this->container['expense_claim_id'] = isset($data['expense_claim_id']) ? $data['expense_claim_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['receipts'] = isset($data['receipts']) ? $data['receipts'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['amount_due'] = isset($data['amount_due']) ? $data['amount_due'] : null;
        $this->container['amount_paid'] = isset($data['amount_paid']) ? $data['amount_paid'] : null;
        $this->container['payment_due_date'] = isset($data['payment_due_date']) ? $data['payment_due_date'] : null;
        $this->container['reporting_date'] = isset($data['reporting_date']) ? $data['reporting_date'] : null;
        $this->container['receipt_id'] = isset($data['receipt_id']) ? $data['receipt_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets expense_claim_id
     *
     * @return string|null
     */
    public function getExpenseClaimId()
    {
        return $this->container['expense_claim_id'];
    }

    /**
     * Sets expense_claim_id
     *
     * @param string|null $expense_claim_id Xero generated unique identifier for an expense claim
     *
     * @return $this
     */
    public function setExpenseClaimId($expense_claim_id)
    {

        $this->container['expense_claim_id'] = $expense_claim_id;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of an expense claim – see status types
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets payments
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Payment[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Payment[]|null $payments See Payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {

        $this->container['payments'] = $payments;

        return $this;
    }



    /**
     * Gets user
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\User|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\User|null $user user
     *
     * @return $this
     */
    public function setUser($user)
    {

        $this->container['user'] = $user;

        return $this;
    }



    /**
     * Gets receipts
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Receipt[]|null
     */
    public function getReceipts()
    {
        return $this->container['receipts'];
    }

    /**
     * Sets receipts
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Receipt[]|null $receipts receipts
     *
     * @return $this
     */
    public function setReceipts($receipts)
    {

        $this->container['receipts'] = $receipts;

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
     * @param string|null $updated_date_utc Last modified date UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total The total of an expense claim being paid
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }


    /**
     * Gets amount_due
     *
     * @return double|null
     */
    public function getAmountDue()
    {
        return $this->container['amount_due'];
    }

    /**
     * Sets amount_due
     *
     * @param double|null $amount_due The amount due to be paid for an expense claim
     *
     * @return $this
     */
    public function setAmountDue($amount_due)
    {

        $this->container['amount_due'] = $amount_due;

        return $this;
    }


    /**
     * Gets amount_paid
     *
     * @return double|null
     */
    public function getAmountPaid()
    {
        return $this->container['amount_paid'];
    }

    /**
     * Sets amount_paid
     *
     * @param double|null $amount_paid The amount still to pay for an expense claim
     *
     * @return $this
     */
    public function setAmountPaid($amount_paid)
    {

        $this->container['amount_paid'] = $amount_paid;

        return $this;
    }


    /**
     * Gets payment_due_date
     *
     * @return string|null
     */
    public function getPaymentDueDate()
    {
        return $this->container['payment_due_date'];
    }
    public function getPaymentDueDateAsDate()
    {
      if ($this->getPaymentDueDate() != null) {
        return StringUtil::convertStringToDate($this->getPaymentDueDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets payment_due_date
     *
     * @param string|null $payment_due_date The date when the expense claim is due to be paid YYYY-MM-DD
     *
     * @return $this
     */
    public function setPaymentDueDate($payment_due_date)
    {

        $this->container['payment_due_date'] = $payment_due_date;

        return $this;
    }


    /**
     * Gets reporting_date
     *
     * @return string|null
     */
    public function getReportingDate()
    {
        return $this->container['reporting_date'];
    }
    public function getReportingDateAsDate()
    {
      if ($this->getReportingDate() != null) {
        return StringUtil::convertStringToDate($this->getReportingDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets reporting_date
     *
     * @param string|null $reporting_date The date the expense claim will be reported in Xero YYYY-MM-DD
     *
     * @return $this
     */
    public function setReportingDate($reporting_date)
    {

        $this->container['reporting_date'] = $reporting_date;

        return $this;
    }


    /**
     * Gets receipt_id
     *
     * @return string|null
     */
    public function getReceiptId()
    {
        return $this->container['receipt_id'];
    }

    /**
     * Sets receipt_id
     *
     * @param string|null $receipt_id The Xero identifier for the Receipt e.g. e59a2c7f-1306-4078-a0f3-73537afcbba9
     *
     * @return $this
     */
    public function setReceiptId($receipt_id)
    {

        $this->container['receipt_id'] = $receipt_id;

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
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


