<?php
/**
 * BatchPayment
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
 * BatchPayment Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BatchPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account',
        'reference' => 'string',
        'particulars' => 'string',
        'code' => 'string',
        'details' => 'string',
        'narrative' => 'string',
        'batch_payment_id' => 'string',
        'date_string' => 'string',
        'date' => 'string',
        'amount' => 'double',
        'payments' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Payment[]',
        'type' => 'string',
        'status' => 'string',
        'total_amount' => 'double',
        'updated_date_utc' => 'string',
        'is_reconciled' => 'bool',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'account' => null,
        'reference' => null,
        'particulars' => null,
        'code' => null,
        'details' => null,
        'narrative' => null,
        'batch_payment_id' => 'uuid',
        'date_string' => null,
        'date' => null,
        'amount' => 'double',
        'payments' => null,
        'type' => null,
        'status' => null,
        'total_amount' => 'double',
        'updated_date_utc' => null,
        'is_reconciled' => null,
        'validation_errors' => null
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
        'account' => 'Account',
        'reference' => 'Reference',
        'particulars' => 'Particulars',
        'code' => 'Code',
        'details' => 'Details',
        'narrative' => 'Narrative',
        'batch_payment_id' => 'BatchPaymentID',
        'date_string' => 'DateString',
        'date' => 'Date',
        'amount' => 'Amount',
        'payments' => 'Payments',
        'type' => 'Type',
        'status' => 'Status',
        'total_amount' => 'TotalAmount',
        'updated_date_utc' => 'UpdatedDateUTC',
        'is_reconciled' => 'IsReconciled',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'reference' => 'setReference',
        'particulars' => 'setParticulars',
        'code' => 'setCode',
        'details' => 'setDetails',
        'narrative' => 'setNarrative',
        'batch_payment_id' => 'setBatchPaymentId',
        'date_string' => 'setDateString',
        'date' => 'setDate',
        'amount' => 'setAmount',
        'payments' => 'setPayments',
        'type' => 'setType',
        'status' => 'setStatus',
        'total_amount' => 'setTotalAmount',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'is_reconciled' => 'setIsReconciled',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'reference' => 'getReference',
        'particulars' => 'getParticulars',
        'code' => 'getCode',
        'details' => 'getDetails',
        'narrative' => 'getNarrative',
        'batch_payment_id' => 'getBatchPaymentId',
        'date_string' => 'getDateString',
        'date' => 'getDate',
        'amount' => 'getAmount',
        'payments' => 'getPayments',
        'type' => 'getType',
        'status' => 'getStatus',
        'total_amount' => 'getTotalAmount',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'is_reconciled' => 'getIsReconciled',
        'validation_errors' => 'getValidationErrors'
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

    const TYPE_PAYBATCH = 'PAYBATCH';
    const TYPE_RECBATCH = 'RECBATCH';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_DELETED = 'DELETED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PAYBATCH,
            self::TYPE_RECBATCH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORISED,
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['particulars'] = isset($data['particulars']) ? $data['particulars'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['narrative'] = isset($data['narrative']) ? $data['narrative'] : null;
        $this->container['batch_payment_id'] = isset($data['batch_payment_id']) ? $data['batch_payment_id'] : null;
        $this->container['date_string'] = isset($data['date_string']) ? $data['date_string'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['is_reconciled'] = isset($data['is_reconciled']) ? $data['is_reconciled'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['particulars']) && (mb_strlen($this->container['particulars']) > 12)) {
            $invalidProperties[] = "invalid value for 'particulars', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['code']) && (mb_strlen($this->container['code']) > 12)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['narrative']) && (mb_strlen($this->container['narrative']) > 18)) {
            $invalidProperties[] = "invalid value for 'narrative', the character length must be smaller than or equal to 18.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets account
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account|null $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {

        $this->container['account'] = $account;

        return $this;
    }



    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling BatchPayment., must be smaller than or equal to 255.');
        }


        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets particulars
     *
     * @return string|null
     */
    public function getParticulars()
    {
        return $this->container['particulars'];
    }

    /**
     * Sets particulars
     *
     * @param string|null $particulars (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setParticulars($particulars)
    {
        if (!is_null($particulars) && (mb_strlen($particulars) > 12)) {
            throw new \InvalidArgumentException('invalid length for $particulars when calling BatchPayment., must be smaller than or equal to 12.');
        }


        $this->container['particulars'] = $particulars;

        return $this;
    }



    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code (NZ Only) Optional references for the batch payment transaction. It will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement you import into Xero.
     *
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (mb_strlen($code) > 12)) {
            throw new \InvalidArgumentException('invalid length for $code when calling BatchPayment., must be smaller than or equal to 12.');
        }


        $this->container['code'] = $code;

        return $this;
    }



    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details (Non-NZ Only) These details are sent to the org’s bank as a reference for the batch payment transaction. They will also show with the batch payment transaction in the bank reconciliation Find & Match screen. Depending on your individual bank, the detail may also show on the bank statement imported into Xero. Maximum field length = 18
     *
     * @return $this
     */
    public function setDetails($details)
    {

        $this->container['details'] = $details;

        return $this;
    }



    /**
     * Gets narrative
     *
     * @return string|null
     */
    public function getNarrative()
    {
        return $this->container['narrative'];
    }

    /**
     * Sets narrative
     *
     * @param string|null $narrative (UK Only) Only shows on the statement line in Xero. Max length =18
     *
     * @return $this
     */
    public function setNarrative($narrative)
    {
        if (!is_null($narrative) && (mb_strlen($narrative) > 18)) {
            throw new \InvalidArgumentException('invalid length for $narrative when calling BatchPayment., must be smaller than or equal to 18.');
        }


        $this->container['narrative'] = $narrative;

        return $this;
    }



    /**
     * Gets batch_payment_id
     *
     * @return string|null
     */
    public function getBatchPaymentId()
    {
        return $this->container['batch_payment_id'];
    }

    /**
     * Sets batch_payment_id
     *
     * @param string|null $batch_payment_id The Xero generated unique identifier for the bank transaction (read-only)
     *
     * @return $this
     */
    public function setBatchPaymentId($batch_payment_id)
    {

        $this->container['batch_payment_id'] = $batch_payment_id;

        return $this;
    }


    /**
     * Gets date_string
     *
     * @return string|null
     */
    public function getDateString()
    {
        return $this->container['date_string'];
    }

    /**
     * Sets date_string
     *
     * @param string|null $date_string Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDateString($date_string)
    {

        $this->container['date_string'] = $date_string;

        return $this;
    }



    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }
    public function getDateAsDate()
    {
      if ($this->getDate() != null) {
        return StringUtil::convertStringToDate($this->getDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets date
     *
     * @param string|null $date Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDate($date)
    {

        $this->container['date'] = $date;

        return $this;
    }
    /**
     * Sets date
     *
     * @param \DateTime |null $date Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDateAsDate($date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($date->format('Y-m-d')." UTC") * 1000;
        $date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['date'] = $date;
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
     * @param double|null $amount The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

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
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Payment[]|null $payments An array of payments
     *
     * @return $this
     */
    public function setPayments($payments)
    {

        $this->container['payments'] = $payments;

        return $this;
    }



    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type PAYBATCH for bill payments or RECBATCH for sales invoice payments (read-only)
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;

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
     * @param string|null $status AUTHORISED or DELETED (read-only). New batch payments will have a status of AUTHORISED. It is not possible to delete batch payments via the API.
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
     * Gets total_amount
     *
     * @return double|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double|null $total_amount The total of the payments that make up the batch (read-only)
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {

        $this->container['total_amount'] = $total_amount;

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
     * @param string|null $updated_date_utc UTC timestamp of last update to the payment
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets is_reconciled
     *
     * @return bool|null
     */
    public function getIsReconciled()
    {
        return $this->container['is_reconciled'];
    }

    /**
     * Sets is_reconciled
     *
     * @param bool|null $is_reconciled Booelan that tells you if the batch payment has been reconciled (read-only)
     *
     * @return $this
     */
    public function setIsReconciled($is_reconciled)
    {

        $this->container['is_reconciled'] = $is_reconciled;

        return $this;
    }


    /**
     * Gets validation_errors
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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


