<?php
/**
 * Element
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 25-March-2024 using Strauss.
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
 * Element Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Element implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Element';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'batch_payment_id' => 'string',
        'bank_transaction_id' => 'string',
        'credit_note_id' => 'string',
        'contact_id' => 'string',
        'invoice_id' => 'string',
        'item_id' => 'string',
        'purchase_order_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'validation_errors' => null,
        'batch_payment_id' => 'uuid',
        'bank_transaction_id' => 'uuid',
        'credit_note_id' => 'uuid',
        'contact_id' => 'uuid',
        'invoice_id' => 'uuid',
        'item_id' => 'uuid',
        'purchase_order_id' => 'uuid'
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
        'validation_errors' => 'ValidationErrors',
        'batch_payment_id' => 'BatchPaymentID',
        'bank_transaction_id' => 'BankTransactionID',
        'credit_note_id' => 'CreditNoteID',
        'contact_id' => 'ContactID',
        'invoice_id' => 'InvoiceID',
        'item_id' => 'ItemID',
        'purchase_order_id' => 'PurchaseOrderID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'validation_errors' => 'setValidationErrors',
        'batch_payment_id' => 'setBatchPaymentId',
        'bank_transaction_id' => 'setBankTransactionId',
        'credit_note_id' => 'setCreditNoteId',
        'contact_id' => 'setContactId',
        'invoice_id' => 'setInvoiceId',
        'item_id' => 'setItemId',
        'purchase_order_id' => 'setPurchaseOrderId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'validation_errors' => 'getValidationErrors',
        'batch_payment_id' => 'getBatchPaymentId',
        'bank_transaction_id' => 'getBankTransactionId',
        'credit_note_id' => 'getCreditNoteId',
        'contact_id' => 'getContactId',
        'invoice_id' => 'getInvoiceId',
        'item_id' => 'getItemId',
        'purchase_order_id' => 'getPurchaseOrderId'
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
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
        $this->container['batch_payment_id'] = isset($data['batch_payment_id']) ? $data['batch_payment_id'] : null;
        $this->container['bank_transaction_id'] = isset($data['bank_transaction_id']) ? $data['bank_transaction_id'] : null;
        $this->container['credit_note_id'] = isset($data['credit_note_id']) ? $data['credit_note_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['item_id'] = isset($data['item_id']) ? $data['item_id'] : null;
        $this->container['purchase_order_id'] = isset($data['purchase_order_id']) ? $data['purchase_order_id'] : null;
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
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Array of Validation Error message
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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
     * @param string|null $batch_payment_id Unique ID for batch payment object with validation error
     *
     * @return $this
     */
    public function setBatchPaymentId($batch_payment_id)
    {

        $this->container['batch_payment_id'] = $batch_payment_id;

        return $this;
    }



    /**
     * Gets bank_transaction_id
     *
     * @return string|null
     */
    public function getBankTransactionId()
    {
        return $this->container['bank_transaction_id'];
    }

    /**
     * Sets bank_transaction_id
     *
     * @param string|null $bank_transaction_id bank_transaction_id
     *
     * @return $this
     */
    public function setBankTransactionId($bank_transaction_id)
    {

        $this->container['bank_transaction_id'] = $bank_transaction_id;

        return $this;
    }



    /**
     * Gets credit_note_id
     *
     * @return string|null
     */
    public function getCreditNoteId()
    {
        return $this->container['credit_note_id'];
    }

    /**
     * Sets credit_note_id
     *
     * @param string|null $credit_note_id credit_note_id
     *
     * @return $this
     */
    public function setCreditNoteId($credit_note_id)
    {

        $this->container['credit_note_id'] = $credit_note_id;

        return $this;
    }



    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id contact_id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        $this->container['contact_id'] = $contact_id;

        return $this;
    }



    /**
     * Gets invoice_id
     *
     * @return string|null
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string|null $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {

        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }



    /**
     * Gets item_id
     *
     * @return string|null
     */
    public function getItemId()
    {
        return $this->container['item_id'];
    }

    /**
     * Sets item_id
     *
     * @param string|null $item_id item_id
     *
     * @return $this
     */
    public function setItemId($item_id)
    {

        $this->container['item_id'] = $item_id;

        return $this;
    }



    /**
     * Gets purchase_order_id
     *
     * @return string|null
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchase_order_id'];
    }

    /**
     * Sets purchase_order_id
     *
     * @param string|null $purchase_order_id purchase_order_id
     *
     * @return $this
     */
    public function setPurchaseOrderId($purchase_order_id)
    {

        $this->container['purchase_order_id'] = $purchase_order_id;

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


