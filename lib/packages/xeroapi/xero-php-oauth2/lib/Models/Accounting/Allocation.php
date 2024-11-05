<?php
/**
 * Allocation
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
 * Allocation Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Allocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Allocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allocation_id' => 'string',
        'invoice' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice',
        'overpayment' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment',
        'prepayment' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment',
        'credit_note' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote',
        'amount' => 'double',
        'date' => 'string',
        'is_deleted' => 'bool',
        'status_attribute_string' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allocation_id' => 'uuid',
        'invoice' => null,
        'overpayment' => null,
        'prepayment' => null,
        'credit_note' => null,
        'amount' => 'double',
        'date' => null,
        'is_deleted' => null,
        'status_attribute_string' => null,
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
        'allocation_id' => 'AllocationID',
        'invoice' => 'Invoice',
        'overpayment' => 'Overpayment',
        'prepayment' => 'Prepayment',
        'credit_note' => 'CreditNote',
        'amount' => 'Amount',
        'date' => 'Date',
        'is_deleted' => 'IsDeleted',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocation_id' => 'setAllocationId',
        'invoice' => 'setInvoice',
        'overpayment' => 'setOverpayment',
        'prepayment' => 'setPrepayment',
        'credit_note' => 'setCreditNote',
        'amount' => 'setAmount',
        'date' => 'setDate',
        'is_deleted' => 'setIsDeleted',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocation_id' => 'getAllocationId',
        'invoice' => 'getInvoice',
        'overpayment' => 'getOverpayment',
        'prepayment' => 'getPrepayment',
        'credit_note' => 'getCreditNote',
        'amount' => 'getAmount',
        'date' => 'getDate',
        'is_deleted' => 'getIsDeleted',
        'status_attribute_string' => 'getStatusAttributeString',
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
        $this->container['allocation_id'] = isset($data['allocation_id']) ? $data['allocation_id'] : null;
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['overpayment'] = isset($data['overpayment']) ? $data['overpayment'] : null;
        $this->container['prepayment'] = isset($data['prepayment']) ? $data['prepayment'] : null;
        $this->container['credit_note'] = isset($data['credit_note']) ? $data['credit_note'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
        $this->container['status_attribute_string'] = isset($data['status_attribute_string']) ? $data['status_attribute_string'] : null;
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

        if ($this->container['invoice'] === null) {
            $invalidProperties[] = "'invoice' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
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
     * Gets allocation_id
     *
     * @return string|null
     */
    public function getAllocationId()
    {
        return $this->container['allocation_id'];
    }

    /**
     * Sets allocation_id
     *
     * @param string|null $allocation_id Xero generated unique identifier
     *
     * @return $this
     */
    public function setAllocationId($allocation_id)
    {

        $this->container['allocation_id'] = $allocation_id;

        return $this;
    }



    /**
     * Gets invoice
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice $invoice invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {

        $this->container['invoice'] = $invoice;

        return $this;
    }



    /**
     * Gets overpayment
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment|null
     */
    public function getOverpayment()
    {
        return $this->container['overpayment'];
    }

    /**
     * Sets overpayment
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment|null $overpayment overpayment
     *
     * @return $this
     */
    public function setOverpayment($overpayment)
    {

        $this->container['overpayment'] = $overpayment;

        return $this;
    }



    /**
     * Gets prepayment
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment|null
     */
    public function getPrepayment()
    {
        return $this->container['prepayment'];
    }

    /**
     * Sets prepayment
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment|null $prepayment prepayment
     *
     * @return $this
     */
    public function setPrepayment($prepayment)
    {

        $this->container['prepayment'] = $prepayment;

        return $this;
    }



    /**
     * Gets credit_note
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote|null
     */
    public function getCreditNote()
    {
        return $this->container['credit_note'];
    }

    /**
     * Sets credit_note
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote|null $credit_note credit_note
     *
     * @return $this
     */
    public function setCreditNote($credit_note)
    {

        $this->container['credit_note'] = $credit_note;

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
     * @param double $amount the amount being applied to the invoice
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
     * @return string
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
     * @param string $date the date the allocation is applied YYYY-MM-DD.
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
     * @param \DateTime  $date the date the allocation is applied YYYY-MM-DD.
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
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted A flag that returns true when the allocation is succesfully deleted
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {

        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }


    /**
     * Gets status_attribute_string
     *
     * @return string|null
     */
    public function getStatusAttributeString()
    {
        return $this->container['status_attribute_string'];
    }

    /**
     * Sets status_attribute_string
     *
     * @param string|null $status_attribute_string A string to indicate if a invoice status
     *
     * @return $this
     */
    public function setStatusAttributeString($status_attribute_string)
    {

        $this->container['status_attribute_string'] = $status_attribute_string;

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


