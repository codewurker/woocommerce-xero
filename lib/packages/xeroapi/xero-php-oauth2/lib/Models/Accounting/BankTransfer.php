<?php
/**
 * BankTransfer
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 13-January-2025 using Strauss.
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
 * BankTransfer Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankTransfer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankTransfer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'from_bank_account' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account',
        'to_bank_account' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account',
        'amount' => 'double',
        'date' => 'string',
        'bank_transfer_id' => 'string',
        'currency_rate' => 'double',
        'from_bank_transaction_id' => 'string',
        'to_bank_transaction_id' => 'string',
        'from_is_reconciled' => 'bool',
        'to_is_reconciled' => 'bool',
        'reference' => 'string',
        'has_attachments' => 'bool',
        'created_date_utc' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'from_bank_account' => null,
        'to_bank_account' => null,
        'amount' => 'double',
        'date' => null,
        'bank_transfer_id' => 'uuid',
        'currency_rate' => 'double',
        'from_bank_transaction_id' => 'uuid',
        'to_bank_transaction_id' => 'uuid',
        'from_is_reconciled' => null,
        'to_is_reconciled' => null,
        'reference' => null,
        'has_attachments' => null,
        'created_date_utc' => null,
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
        'from_bank_account' => 'FromBankAccount',
        'to_bank_account' => 'ToBankAccount',
        'amount' => 'Amount',
        'date' => 'Date',
        'bank_transfer_id' => 'BankTransferID',
        'currency_rate' => 'CurrencyRate',
        'from_bank_transaction_id' => 'FromBankTransactionID',
        'to_bank_transaction_id' => 'ToBankTransactionID',
        'from_is_reconciled' => 'FromIsReconciled',
        'to_is_reconciled' => 'ToIsReconciled',
        'reference' => 'Reference',
        'has_attachments' => 'HasAttachments',
        'created_date_utc' => 'CreatedDateUTC',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'from_bank_account' => 'setFromBankAccount',
        'to_bank_account' => 'setToBankAccount',
        'amount' => 'setAmount',
        'date' => 'setDate',
        'bank_transfer_id' => 'setBankTransferId',
        'currency_rate' => 'setCurrencyRate',
        'from_bank_transaction_id' => 'setFromBankTransactionId',
        'to_bank_transaction_id' => 'setToBankTransactionId',
        'from_is_reconciled' => 'setFromIsReconciled',
        'to_is_reconciled' => 'setToIsReconciled',
        'reference' => 'setReference',
        'has_attachments' => 'setHasAttachments',
        'created_date_utc' => 'setCreatedDateUtc',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'from_bank_account' => 'getFromBankAccount',
        'to_bank_account' => 'getToBankAccount',
        'amount' => 'getAmount',
        'date' => 'getDate',
        'bank_transfer_id' => 'getBankTransferId',
        'currency_rate' => 'getCurrencyRate',
        'from_bank_transaction_id' => 'getFromBankTransactionId',
        'to_bank_transaction_id' => 'getToBankTransactionId',
        'from_is_reconciled' => 'getFromIsReconciled',
        'to_is_reconciled' => 'getToIsReconciled',
        'reference' => 'getReference',
        'has_attachments' => 'getHasAttachments',
        'created_date_utc' => 'getCreatedDateUtc',
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
        $this->container['from_bank_account'] = isset($data['from_bank_account']) ? $data['from_bank_account'] : null;
        $this->container['to_bank_account'] = isset($data['to_bank_account']) ? $data['to_bank_account'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['bank_transfer_id'] = isset($data['bank_transfer_id']) ? $data['bank_transfer_id'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['from_bank_transaction_id'] = isset($data['from_bank_transaction_id']) ? $data['from_bank_transaction_id'] : null;
        $this->container['to_bank_transaction_id'] = isset($data['to_bank_transaction_id']) ? $data['to_bank_transaction_id'] : null;
        $this->container['from_is_reconciled'] = isset($data['from_is_reconciled']) ? $data['from_is_reconciled'] : false;
        $this->container['to_is_reconciled'] = isset($data['to_is_reconciled']) ? $data['to_is_reconciled'] : false;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : false;
        $this->container['created_date_utc'] = isset($data['created_date_utc']) ? $data['created_date_utc'] : null;
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

        if ($this->container['from_bank_account'] === null) {
            $invalidProperties[] = "'from_bank_account' can't be null";
        }
        if ($this->container['to_bank_account'] === null) {
            $invalidProperties[] = "'to_bank_account' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets from_bank_account
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account
     */
    public function getFromBankAccount()
    {
        return $this->container['from_bank_account'];
    }

    /**
     * Sets from_bank_account
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account $from_bank_account from_bank_account
     *
     * @return $this
     */
    public function setFromBankAccount($from_bank_account)
    {

        $this->container['from_bank_account'] = $from_bank_account;

        return $this;
    }



    /**
     * Gets to_bank_account
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account
     */
    public function getToBankAccount()
    {
        return $this->container['to_bank_account'];
    }

    /**
     * Sets to_bank_account
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account $to_bank_account to_bank_account
     *
     * @return $this
     */
    public function setToBankAccount($to_bank_account)
    {

        $this->container['to_bank_account'] = $to_bank_account;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount of the transaction
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

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
     * @param string|null $date The date of the Transfer YYYY-MM-DD
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
     * @param \DateTime |null $date The date of the Transfer YYYY-MM-DD
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
     * Gets bank_transfer_id
     *
     * @return string|null
     */
    public function getBankTransferId()
    {
        return $this->container['bank_transfer_id'];
    }

    /**
     * Sets bank_transfer_id
     *
     * @param string|null $bank_transfer_id The identifier of the Bank Transfer
     *
     * @return $this
     */
    public function setBankTransferId($bank_transfer_id)
    {

        $this->container['bank_transfer_id'] = $bank_transfer_id;

        return $this;
    }


    /**
     * Gets currency_rate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param double|null $currency_rate The currency rate
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {

        $this->container['currency_rate'] = $currency_rate;

        return $this;
    }


    /**
     * Gets from_bank_transaction_id
     *
     * @return string|null
     */
    public function getFromBankTransactionId()
    {
        return $this->container['from_bank_transaction_id'];
    }

    /**
     * Sets from_bank_transaction_id
     *
     * @param string|null $from_bank_transaction_id The Bank Transaction ID for the source account
     *
     * @return $this
     */
    public function setFromBankTransactionId($from_bank_transaction_id)
    {

        $this->container['from_bank_transaction_id'] = $from_bank_transaction_id;

        return $this;
    }


    /**
     * Gets to_bank_transaction_id
     *
     * @return string|null
     */
    public function getToBankTransactionId()
    {
        return $this->container['to_bank_transaction_id'];
    }

    /**
     * Sets to_bank_transaction_id
     *
     * @param string|null $to_bank_transaction_id The Bank Transaction ID for the destination account
     *
     * @return $this
     */
    public function setToBankTransactionId($to_bank_transaction_id)
    {

        $this->container['to_bank_transaction_id'] = $to_bank_transaction_id;

        return $this;
    }


    /**
     * Gets from_is_reconciled
     *
     * @return bool|null
     */
    public function getFromIsReconciled()
    {
        return $this->container['from_is_reconciled'];
    }

    /**
     * Sets from_is_reconciled
     *
     * @param bool|null $from_is_reconciled The Bank Transaction boolean to show if it is reconciled for the source account
     *
     * @return $this
     */
    public function setFromIsReconciled($from_is_reconciled)
    {

        $this->container['from_is_reconciled'] = $from_is_reconciled;

        return $this;
    }



    /**
     * Gets to_is_reconciled
     *
     * @return bool|null
     */
    public function getToIsReconciled()
    {
        return $this->container['to_is_reconciled'];
    }

    /**
     * Sets to_is_reconciled
     *
     * @param bool|null $to_is_reconciled The Bank Transaction boolean to show if it is reconciled for the destination account
     *
     * @return $this
     */
    public function setToIsReconciled($to_is_reconciled)
    {

        $this->container['to_is_reconciled'] = $to_is_reconciled;

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
     * @param string|null $reference Reference for the transactions.
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets has_attachments
     *
     * @return bool|null
     */
    public function getHasAttachments()
    {
        return $this->container['has_attachments'];
    }

    /**
     * Sets has_attachments
     *
     * @param bool|null $has_attachments Boolean to indicate if a Bank Transfer has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {

        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }


    /**
     * Gets created_date_utc
     *
     * @return string|null
     */
    public function getCreatedDateUtc()
    {
        return $this->container['created_date_utc'];
    }
    public function getCreatedDateUtcAsDate()
    {
      if ($this->getCreatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getCreatedDateUtc());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets created_date_utc
     *
     * @param string|null $created_date_utc UTC timestamp of creation date of bank transfer
     *
     * @return $this
     */
    public function setCreatedDateUtc($created_date_utc)
    {

        $this->container['created_date_utc'] = $created_date_utc;

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


