<?php
/**
 * Receipt
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
 * Receipt Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Receipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Receipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => 'string',
        'contact' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Contact',
        'line_items' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineItem[]',
        'user' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\User',
        'reference' => 'string',
        'line_amount_types' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineAmountTypes',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'receipt_id' => 'string',
        'status' => 'string',
        'receipt_number' => 'string',
        'updated_date_utc' => 'string',
        'has_attachments' => 'bool',
        'url' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'warnings' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'attachments' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Attachment[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'date' => null,
        'contact' => null,
        'line_items' => null,
        'user' => null,
        'reference' => null,
        'line_amount_types' => null,
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'receipt_id' => 'uuid',
        'status' => null,
        'receipt_number' => null,
        'updated_date_utc' => null,
        'has_attachments' => null,
        'url' => null,
        'validation_errors' => null,
        'warnings' => null,
        'attachments' => null
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
        'date' => 'Date',
        'contact' => 'Contact',
        'line_items' => 'LineItems',
        'user' => 'User',
        'reference' => 'Reference',
        'line_amount_types' => 'LineAmountTypes',
        'sub_total' => 'SubTotal',
        'total_tax' => 'TotalTax',
        'total' => 'Total',
        'receipt_id' => 'ReceiptID',
        'status' => 'Status',
        'receipt_number' => 'ReceiptNumber',
        'updated_date_utc' => 'UpdatedDateUTC',
        'has_attachments' => 'HasAttachments',
        'url' => 'Url',
        'validation_errors' => 'ValidationErrors',
        'warnings' => 'Warnings',
        'attachments' => 'Attachments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'contact' => 'setContact',
        'line_items' => 'setLineItems',
        'user' => 'setUser',
        'reference' => 'setReference',
        'line_amount_types' => 'setLineAmountTypes',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'receipt_id' => 'setReceiptId',
        'status' => 'setStatus',
        'receipt_number' => 'setReceiptNumber',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'has_attachments' => 'setHasAttachments',
        'url' => 'setUrl',
        'validation_errors' => 'setValidationErrors',
        'warnings' => 'setWarnings',
        'attachments' => 'setAttachments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'contact' => 'getContact',
        'line_items' => 'getLineItems',
        'user' => 'getUser',
        'reference' => 'getReference',
        'line_amount_types' => 'getLineAmountTypes',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'receipt_id' => 'getReceiptId',
        'status' => 'getStatus',
        'receipt_number' => 'getReceiptNumber',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'has_attachments' => 'getHasAttachments',
        'url' => 'getUrl',
        'validation_errors' => 'getValidationErrors',
        'warnings' => 'getWarnings',
        'attachments' => 'getAttachments'
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

    const STATUS_DRAFT = 'DRAFT';
    const STATUS_SUBMITTED = 'SUBMITTED';
    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_DECLINED = 'DECLINED';
    const STATUS_VOIDED = 'VOIDED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_SUBMITTED,
            self::STATUS_AUTHORISED,
            self::STATUS_DECLINED,
            self::STATUS_VOIDED,
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['receipt_id'] = isset($data['receipt_id']) ? $data['receipt_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['has_attachments'] = isset($data['has_attachments']) ? $data['has_attachments'] : false;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
        $this->container['attachments'] = isset($data['attachments']) ? $data['attachments'] : null;
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
     * @param string|null $date Date of receipt – YYYY-MM-DD
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
     * @param \DateTime |null $date Date of receipt – YYYY-MM-DD
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
     * Gets contact
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Contact|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Contact|null $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {

        $this->container['contact'] = $contact;

        return $this;
    }



    /**
     * Gets line_items
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null $line_items line_items
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {

        $this->container['line_items'] = $line_items;

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
     * @param string|null $reference Additional reference number
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets line_amount_types
     *
     * @return string|null
     */
    public function getLineAmountTypes()
    {
        return $this->container['line_amount_types'];
    }

    /**
     * Sets line_amount_types
     *
     * @param string|null $line_amount_types line_amount_types
     *
     * @return $this
     */
    public function setLineAmountTypes($line_amount_types)
    {

        $this->container['line_amount_types'] = $line_amount_types;

        return $this;
    }



    /**
     * Gets sub_total
     *
     * @return double|null
     */
    public function getSubTotal()
    {
        return $this->container['sub_total'];
    }

    /**
     * Sets sub_total
     *
     * @param double|null $sub_total Total of receipt excluding taxes
     *
     * @return $this
     */
    public function setSubTotal($sub_total)
    {

        $this->container['sub_total'] = $sub_total;

        return $this;
    }



    /**
     * Gets total_tax
     *
     * @return double|null
     */
    public function getTotalTax()
    {
        return $this->container['total_tax'];
    }

    /**
     * Sets total_tax
     *
     * @param double|null $total_tax Total tax on receipt
     *
     * @return $this
     */
    public function setTotalTax($total_tax)
    {

        $this->container['total_tax'] = $total_tax;

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
     * @param double|null $total Total of receipt tax inclusive (i.e. SubTotal + TotalTax)
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

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
     * @param string|null $receipt_id Xero generated unique identifier for receipt
     *
     * @return $this
     */
    public function setReceiptId($receipt_id)
    {

        $this->container['receipt_id'] = $receipt_id;

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
     * @param string|null $status Current status of receipt – see status types
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
     * Gets receipt_number
     *
     * @return string|null
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     *
     * @param string|null $receipt_number Xero generated sequence number for receipt in current claim for a given user
     *
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {

        $this->container['receipt_number'] = $receipt_number;

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
     * @param bool|null $has_attachments boolean to indicate if a receipt has an attachment
     *
     * @return $this
     */
    public function setHasAttachments($has_attachments)
    {

        $this->container['has_attachments'] = $has_attachments;

        return $this;
    }


    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url URL link to a source document – shown as “Go to [appName]” in the Xero app
     *
     * @return $this
     */
    public function setUrl($url)
    {

        $this->container['url'] = $url;

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
     * Gets warnings
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $warnings Displays array of warning messages from the API
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {

        $this->container['warnings'] = $warnings;

        return $this;
    }



    /**
     * Gets attachments
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Attachment[]|null $attachments Displays array of attachments from the API
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {

        $this->container['attachments'] = $attachments;

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


