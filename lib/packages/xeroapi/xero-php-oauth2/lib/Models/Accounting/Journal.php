<?php
/**
 * Journal
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 01-July-2024 using Strauss.
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
 * Journal Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Journal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Journal';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'journal_id' => 'string',
        'journal_date' => 'string',
        'journal_number' => 'int',
        'created_date_utc' => 'string',
        'reference' => 'string',
        'source_id' => 'string',
        'source_type' => 'string',
        'journal_lines' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\JournalLine[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'journal_id' => 'uuid',
        'journal_date' => null,
        'journal_number' => null,
        'created_date_utc' => null,
        'reference' => null,
        'source_id' => 'uuid',
        'source_type' => null,
        'journal_lines' => null
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
        'journal_id' => 'JournalID',
        'journal_date' => 'JournalDate',
        'journal_number' => 'JournalNumber',
        'created_date_utc' => 'CreatedDateUTC',
        'reference' => 'Reference',
        'source_id' => 'SourceID',
        'source_type' => 'SourceType',
        'journal_lines' => 'JournalLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'journal_id' => 'setJournalId',
        'journal_date' => 'setJournalDate',
        'journal_number' => 'setJournalNumber',
        'created_date_utc' => 'setCreatedDateUtc',
        'reference' => 'setReference',
        'source_id' => 'setSourceId',
        'source_type' => 'setSourceType',
        'journal_lines' => 'setJournalLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'journal_id' => 'getJournalId',
        'journal_date' => 'getJournalDate',
        'journal_number' => 'getJournalNumber',
        'created_date_utc' => 'getCreatedDateUtc',
        'reference' => 'getReference',
        'source_id' => 'getSourceId',
        'source_type' => 'getSourceType',
        'journal_lines' => 'getJournalLines'
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

    const SOURCE_TYPE_ACCREC = 'ACCREC';
    const SOURCE_TYPE_ACCPAY = 'ACCPAY';
    const SOURCE_TYPE_ACCRECCREDIT = 'ACCRECCREDIT';
    const SOURCE_TYPE_ACCPAYCREDIT = 'ACCPAYCREDIT';
    const SOURCE_TYPE_ACCRECPAYMENT = 'ACCRECPAYMENT';
    const SOURCE_TYPE_ACCPAYPAYMENT = 'ACCPAYPAYMENT';
    const SOURCE_TYPE_ARCREDITPAYMENT = 'ARCREDITPAYMENT';
    const SOURCE_TYPE_APCREDITPAYMENT = 'APCREDITPAYMENT';
    const SOURCE_TYPE_CASHREC = 'CASHREC';
    const SOURCE_TYPE_CASHPAID = 'CASHPAID';
    const SOURCE_TYPE_TRANSFER = 'TRANSFER';
    const SOURCE_TYPE_ARPREPAYMENT = 'ARPREPAYMENT';
    const SOURCE_TYPE_APPREPAYMENT = 'APPREPAYMENT';
    const SOURCE_TYPE_AROVERPAYMENT = 'AROVERPAYMENT';
    const SOURCE_TYPE_APOVERPAYMENT = 'APOVERPAYMENT';
    const SOURCE_TYPE_EXPCLAIM = 'EXPCLAIM';
    const SOURCE_TYPE_EXPPAYMENT = 'EXPPAYMENT';
    const SOURCE_TYPE_MANJOURNAL = 'MANJOURNAL';
    const SOURCE_TYPE_PAYSLIP = 'PAYSLIP';
    const SOURCE_TYPE_WAGEPAYABLE = 'WAGEPAYABLE';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPE = 'INTEGRATEDPAYROLLPE';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPT = 'INTEGRATEDPAYROLLPT';
    const SOURCE_TYPE_EXTERNALSPENDMONEY = 'EXTERNALSPENDMONEY';
    const SOURCE_TYPE_INTEGRATEDPAYROLLPTPAYMENT = 'INTEGRATEDPAYROLLPTPAYMENT';
    const SOURCE_TYPE_INTEGRATEDPAYROLLCN = 'INTEGRATEDPAYROLLCN';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_ACCREC,
            self::SOURCE_TYPE_ACCPAY,
            self::SOURCE_TYPE_ACCRECCREDIT,
            self::SOURCE_TYPE_ACCPAYCREDIT,
            self::SOURCE_TYPE_ACCRECPAYMENT,
            self::SOURCE_TYPE_ACCPAYPAYMENT,
            self::SOURCE_TYPE_ARCREDITPAYMENT,
            self::SOURCE_TYPE_APCREDITPAYMENT,
            self::SOURCE_TYPE_CASHREC,
            self::SOURCE_TYPE_CASHPAID,
            self::SOURCE_TYPE_TRANSFER,
            self::SOURCE_TYPE_ARPREPAYMENT,
            self::SOURCE_TYPE_APPREPAYMENT,
            self::SOURCE_TYPE_AROVERPAYMENT,
            self::SOURCE_TYPE_APOVERPAYMENT,
            self::SOURCE_TYPE_EXPCLAIM,
            self::SOURCE_TYPE_EXPPAYMENT,
            self::SOURCE_TYPE_MANJOURNAL,
            self::SOURCE_TYPE_PAYSLIP,
            self::SOURCE_TYPE_WAGEPAYABLE,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPE,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPT,
            self::SOURCE_TYPE_EXTERNALSPENDMONEY,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLPTPAYMENT,
            self::SOURCE_TYPE_INTEGRATEDPAYROLLCN,
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
        $this->container['journal_id'] = isset($data['journal_id']) ? $data['journal_id'] : null;
        $this->container['journal_date'] = isset($data['journal_date']) ? $data['journal_date'] : null;
        $this->container['journal_number'] = isset($data['journal_number']) ? $data['journal_number'] : null;
        $this->container['created_date_utc'] = isset($data['created_date_utc']) ? $data['created_date_utc'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['journal_lines'] = isset($data['journal_lines']) ? $data['journal_lines'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($this->container['source_type']) && !in_array($this->container['source_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source_type', must be one of '%s'",
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
     * Gets journal_id
     *
     * @return string|null
     */
    public function getJournalId()
    {
        return $this->container['journal_id'];
    }

    /**
     * Sets journal_id
     *
     * @param string|null $journal_id Xero identifier
     *
     * @return $this
     */
    public function setJournalId($journal_id)
    {

        $this->container['journal_id'] = $journal_id;

        return $this;
    }



    /**
     * Gets journal_date
     *
     * @return string|null
     */
    public function getJournalDate()
    {
        return $this->container['journal_date'];
    }
    public function getJournalDateAsDate()
    {
      if ($this->getJournalDate() != null) {
        return StringUtil::convertStringToDate($this->getJournalDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets journal_date
     *
     * @param string|null $journal_date Date the journal was posted
     *
     * @return $this
     */
    public function setJournalDate($journal_date)
    {

        $this->container['journal_date'] = $journal_date;

        return $this;
    }
    /**
     * Sets journal_date
     *
     * @param \DateTime |null $journal_date Date the journal was posted
     *
     * @return $this
     */
    public function setJournalDateAsDate($journal_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($journal_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($journal_date->format('Y-m-d')." UTC") * 1000;
        $journal_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['journal_date'] = $journal_date;
      return $this;
    }



    /**
     * Gets journal_number
     *
     * @return int|null
     */
    public function getJournalNumber()
    {
        return $this->container['journal_number'];
    }

    /**
     * Sets journal_number
     *
     * @param int|null $journal_number Xero generated journal number
     *
     * @return $this
     */
    public function setJournalNumber($journal_number)
    {

        $this->container['journal_number'] = $journal_number;

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
     * @param string|null $created_date_utc Created date UTC format
     *
     * @return $this
     */
    public function setCreatedDateUtc($created_date_utc)
    {

        $this->container['created_date_utc'] = $created_date_utc;

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
     * @param string|null $reference reference field for additional indetifying information
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets source_id
     *
     * @return string|null
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     *
     * @param string|null $source_id The identifier for the source transaction (e.g. InvoiceID)
     *
     * @return $this
     */
    public function setSourceId($source_id)
    {

        $this->container['source_id'] = $source_id;

        return $this;
    }



    /**
     * Gets source_type
     *
     * @return string|null
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string|null $source_type The journal source type. The type of transaction that created the journal
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $allowedValues = $this->getSourceTypeAllowableValues();
        if (!is_null($source_type) && !in_array($source_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['source_type'] = $source_type;

        return $this;
    }



    /**
     * Gets journal_lines
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\JournalLine[]|null
     */
    public function getJournalLines()
    {
        return $this->container['journal_lines'];
    }

    /**
     * Sets journal_lines
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\JournalLine[]|null $journal_lines See JournalLines
     *
     * @return $this
     */
    public function setJournalLines($journal_lines)
    {

        $this->container['journal_lines'] = $journal_lines;

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


