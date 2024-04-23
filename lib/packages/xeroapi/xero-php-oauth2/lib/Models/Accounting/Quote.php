<?php
/**
 * Quote
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
 * Quote Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Quote implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Quote';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quote_id' => 'string',
        'quote_number' => 'string',
        'reference' => 'string',
        'terms' => 'string',
        'contact' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Contact',
        'line_items' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineItem[]',
        'date' => 'string',
        'date_string' => 'string',
        'expiry_date' => 'string',
        'expiry_date_string' => 'string',
        'status' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\QuoteStatusCodes',
        'currency_code' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CurrencyCode',
        'currency_rate' => 'double',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'total_discount' => 'double',
        'title' => 'string',
        'summary' => 'string',
        'branding_theme_id' => 'string',
        'updated_date_utc' => 'string',
        'line_amount_types' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\QuoteLineAmountTypes',
        'status_attribute_string' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'quote_id' => 'uuid',
        'quote_number' => null,
        'reference' => null,
        'terms' => null,
        'contact' => null,
        'line_items' => null,
        'date' => null,
        'date_string' => null,
        'expiry_date' => null,
        'expiry_date_string' => null,
        'status' => null,
        'currency_code' => null,
        'currency_rate' => 'double',
        'sub_total' => 'double',
        'total_tax' => 'double',
        'total' => 'double',
        'total_discount' => 'double',
        'title' => null,
        'summary' => null,
        'branding_theme_id' => 'uuid',
        'updated_date_utc' => null,
        'line_amount_types' => null,
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
        'quote_id' => 'QuoteID',
        'quote_number' => 'QuoteNumber',
        'reference' => 'Reference',
        'terms' => 'Terms',
        'contact' => 'Contact',
        'line_items' => 'LineItems',
        'date' => 'Date',
        'date_string' => 'DateString',
        'expiry_date' => 'ExpiryDate',
        'expiry_date_string' => 'ExpiryDateString',
        'status' => 'Status',
        'currency_code' => 'CurrencyCode',
        'currency_rate' => 'CurrencyRate',
        'sub_total' => 'SubTotal',
        'total_tax' => 'TotalTax',
        'total' => 'Total',
        'total_discount' => 'TotalDiscount',
        'title' => 'Title',
        'summary' => 'Summary',
        'branding_theme_id' => 'BrandingThemeID',
        'updated_date_utc' => 'UpdatedDateUTC',
        'line_amount_types' => 'LineAmountTypes',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quote_id' => 'setQuoteId',
        'quote_number' => 'setQuoteNumber',
        'reference' => 'setReference',
        'terms' => 'setTerms',
        'contact' => 'setContact',
        'line_items' => 'setLineItems',
        'date' => 'setDate',
        'date_string' => 'setDateString',
        'expiry_date' => 'setExpiryDate',
        'expiry_date_string' => 'setExpiryDateString',
        'status' => 'setStatus',
        'currency_code' => 'setCurrencyCode',
        'currency_rate' => 'setCurrencyRate',
        'sub_total' => 'setSubTotal',
        'total_tax' => 'setTotalTax',
        'total' => 'setTotal',
        'total_discount' => 'setTotalDiscount',
        'title' => 'setTitle',
        'summary' => 'setSummary',
        'branding_theme_id' => 'setBrandingThemeId',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'line_amount_types' => 'setLineAmountTypes',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quote_id' => 'getQuoteId',
        'quote_number' => 'getQuoteNumber',
        'reference' => 'getReference',
        'terms' => 'getTerms',
        'contact' => 'getContact',
        'line_items' => 'getLineItems',
        'date' => 'getDate',
        'date_string' => 'getDateString',
        'expiry_date' => 'getExpiryDate',
        'expiry_date_string' => 'getExpiryDateString',
        'status' => 'getStatus',
        'currency_code' => 'getCurrencyCode',
        'currency_rate' => 'getCurrencyRate',
        'sub_total' => 'getSubTotal',
        'total_tax' => 'getTotalTax',
        'total' => 'getTotal',
        'total_discount' => 'getTotalDiscount',
        'title' => 'getTitle',
        'summary' => 'getSummary',
        'branding_theme_id' => 'getBrandingThemeId',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'line_amount_types' => 'getLineAmountTypes',
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
        $this->container['quote_id'] = isset($data['quote_id']) ? $data['quote_id'] : null;
        $this->container['quote_number'] = isset($data['quote_number']) ? $data['quote_number'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['date_string'] = isset($data['date_string']) ? $data['date_string'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['expiry_date_string'] = isset($data['expiry_date_string']) ? $data['expiry_date_string'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['sub_total'] = isset($data['sub_total']) ? $data['sub_total'] : null;
        $this->container['total_tax'] = isset($data['total_tax']) ? $data['total_tax'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_discount'] = isset($data['total_discount']) ? $data['total_discount'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['branding_theme_id'] = isset($data['branding_theme_id']) ? $data['branding_theme_id'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['line_amount_types'] = isset($data['line_amount_types']) ? $data['line_amount_types'] : null;
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

        if (!is_null($this->container['quote_number']) && (mb_strlen($this->container['quote_number']) > 255)) {
            $invalidProperties[] = "invalid value for 'quote_number', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 4000)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['terms']) && (mb_strlen($this->container['terms']) > 4000)) {
            $invalidProperties[] = "invalid value for 'terms', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['summary']) && (mb_strlen($this->container['summary']) > 3000)) {
            $invalidProperties[] = "invalid value for 'summary', the character length must be smaller than or equal to 3000.";
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
     * Gets quote_id
     *
     * @return string|null
     */
    public function getQuoteId()
    {
        return $this->container['quote_id'];
    }

    /**
     * Sets quote_id
     *
     * @param string|null $quote_id QuoteID GUID is automatically generated and is returned after create or GET.
     *
     * @return $this
     */
    public function setQuoteId($quote_id)
    {

        $this->container['quote_id'] = $quote_id;

        return $this;
    }



    /**
     * Gets quote_number
     *
     * @return string|null
     */
    public function getQuoteNumber()
    {
        return $this->container['quote_number'];
    }

    /**
     * Sets quote_number
     *
     * @param string|null $quote_number Unique alpha numeric code identifying a quote (Max Length = 255)
     *
     * @return $this
     */
    public function setQuoteNumber($quote_number)
    {
        if (!is_null($quote_number) && (mb_strlen($quote_number) > 255)) {
            throw new \InvalidArgumentException('invalid length for $quote_number when calling Quote., must be smaller than or equal to 255.');
        }


        $this->container['quote_number'] = $quote_number;

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
        if (!is_null($reference) && (mb_strlen($reference) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Quote., must be smaller than or equal to 4000.');
        }


        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms Terms of the quote
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        if (!is_null($terms) && (mb_strlen($terms) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $terms when calling Quote., must be smaller than or equal to 4000.');
        }


        $this->container['terms'] = $terms;

        return $this;
    }



    /**
     * Gets contact
     *
     * @return string|null
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param string|null $contact contact
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
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\LineItem[]|null $line_items See LineItems
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {

        $this->container['line_items'] = $line_items;

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
     * @param string|null $date Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
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
     * @param \DateTime |null $date Date quote was issued – YYYY-MM-DD. If the Date element is not specified it will default to the current date based on the timezone setting of the organisation
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
     * @param string|null $date_string Date the quote was issued (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setDateString($date_string)
    {

        $this->container['date_string'] = $date_string;

        return $this;
    }



    /**
     * Gets expiry_date
     *
     * @return string|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }
    public function getExpiryDateAsDate()
    {
      if ($this->getExpiryDate() != null) {
        return StringUtil::convertStringToDate($this->getExpiryDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets expiry_date
     *
     * @param string|null $expiry_date Date the quote expires – YYYY-MM-DD.
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {

        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }
    /**
     * Sets expiry_date
     *
     * @param \DateTime |null $expiry_date Date the quote expires – YYYY-MM-DD.
     *
     * @return $this
     */
    public function setExpiryDateAsDate($expiry_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($expiry_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($expiry_date->format('Y-m-d')." UTC") * 1000;
        $expiry_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['expiry_date'] = $expiry_date;
      return $this;
    }



    /**
     * Gets expiry_date_string
     *
     * @return string|null
     */
    public function getExpiryDateString()
    {
        return $this->container['expiry_date_string'];
    }

    /**
     * Sets expiry_date_string
     *
     * @param string|null $expiry_date_string Date the quote expires – YYYY-MM-DD.
     *
     * @return $this
     */
    public function setExpiryDateString($expiry_date_string)
    {

        $this->container['expiry_date_string'] = $expiry_date_string;

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
     * @param string|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets currency_code
     *
     * @return string|null
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string|null $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {

        $this->container['currency_code'] = $currency_code;

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
     * @param double|null $currency_rate The currency rate for a multicurrency quote
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {

        $this->container['currency_rate'] = $currency_rate;

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
     * @param double|null $sub_total Total of quote excluding taxes.
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
     * @param double|null $total_tax Total tax on quote
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
     * @param double|null $total Total of Quote tax inclusive (i.e. SubTotal + TotalTax). This will be ignored if it doesn’t equal the sum of the LineAmounts
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }


    /**
     * Gets total_discount
     *
     * @return double|null
     */
    public function getTotalDiscount()
    {
        return $this->container['total_discount'];
    }

    /**
     * Sets total_discount
     *
     * @param double|null $total_discount Total of discounts applied on the quote line items
     *
     * @return $this
     */
    public function setTotalDiscount($total_discount)
    {

        $this->container['total_discount'] = $total_discount;

        return $this;
    }


    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title text for the quote
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if (!is_null($title) && (mb_strlen($title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Quote., must be smaller than or equal to 100.');
        }


        $this->container['title'] = $title;

        return $this;
    }



    /**
     * Gets summary
     *
     * @return string|null
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param string|null $summary Summary text for the quote
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        if (!is_null($summary) && (mb_strlen($summary) > 3000)) {
            throw new \InvalidArgumentException('invalid length for $summary when calling Quote., must be smaller than or equal to 3000.');
        }


        $this->container['summary'] = $summary;

        return $this;
    }



    /**
     * Gets branding_theme_id
     *
     * @return string|null
     */
    public function getBrandingThemeId()
    {
        return $this->container['branding_theme_id'];
    }

    /**
     * Sets branding_theme_id
     *
     * @param string|null $branding_theme_id See BrandingThemes
     *
     * @return $this
     */
    public function setBrandingThemeId($branding_theme_id)
    {

        $this->container['branding_theme_id'] = $branding_theme_id;

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


