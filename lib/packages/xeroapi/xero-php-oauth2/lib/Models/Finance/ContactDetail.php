<?php
/**
 * ContactDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 19-August-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Finance API
 *
 * The Finance API is a collection of endpoints which customers can use in the course of a loan application, which may assist lenders to gain the confidence they need to provide capital.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\FinanceObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ContactDetail Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContactDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contact_id' => 'string',
        'name' => 'string',
        'total' => 'double',
        'total_detail' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalDetail',
        'total_other' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalOther',
        'account_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contact_id' => 'uuid',
        'name' => null,
        'total' => 'double',
        'total_detail' => null,
        'total_other' => null,
        'account_codes' => null
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
        'contact_id' => 'contactId',
        'name' => 'name',
        'total' => 'total',
        'total_detail' => 'totalDetail',
        'total_other' => 'totalOther',
        'account_codes' => 'accountCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_id' => 'setContactId',
        'name' => 'setName',
        'total' => 'setTotal',
        'total_detail' => 'setTotalDetail',
        'total_other' => 'setTotalOther',
        'account_codes' => 'setAccountCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_id' => 'getContactId',
        'name' => 'getName',
        'total' => 'getTotal',
        'total_detail' => 'getTotalDetail',
        'total_other' => 'getTotalOther',
        'account_codes' => 'getAccountCodes'
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
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['total_detail'] = isset($data['total_detail']) ? $data['total_detail'] : null;
        $this->container['total_other'] = isset($data['total_other']) ? $data['total_other'] : null;
        $this->container['account_codes'] = isset($data['account_codes']) ? $data['account_codes'] : null;
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
     * @param string|null $contact_id ID of the contact associated with the transactions.    Transactions with no contact will be grouped under the special ID: 86793108-198C-46D8-90A3-43C1D12686CE.    Transactions that are receive or spend bank transfers will be grouped under the special ID: 207322B3-6A58-4BE7-80F1-430123914AD6
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        $this->container['contact_id'] = $contact_id;

        return $this;
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
     * @param string|null $name Name of the contact associated with the transactions.    If no contact is associated with the transactions this will appear as “None Provided”,    For receive or spend bank transfer transactions, this will appear as “Bank Transfer”.
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

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
     * @param double|null $total Total value for the contact
     *
     * @return $this
     */
    public function setTotal($total)
    {

        $this->container['total'] = $total;

        return $this;
    }



    /**
     * Gets total_detail
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalDetail|null
     */
    public function getTotalDetail()
    {
        return $this->container['total_detail'];
    }

    /**
     * Sets total_detail
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalDetail|null $total_detail total_detail
     *
     * @return $this
     */
    public function setTotalDetail($total_detail)
    {

        $this->container['total_detail'] = $total_detail;

        return $this;
    }



    /**
     * Gets total_other
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalOther|null
     */
    public function getTotalOther()
    {
        return $this->container['total_other'];
    }

    /**
     * Sets total_other
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\ContactTotalOther|null $total_other total_other
     *
     * @return $this
     */
    public function setTotalOther($total_other)
    {

        $this->container['total_other'] = $total_other;

        return $this;
    }



    /**
     * Gets account_codes
     *
     * @return string[]|null
     */
    public function getAccountCodes()
    {
        return $this->container['account_codes'];
    }

    /**
     * Sets account_codes
     *
     * @param string[]|null $account_codes A list of account codes involved in transactions.
     *
     * @return $this
     */
    public function setAccountCodes($account_codes)
    {

        $this->container['account_codes'] = $account_codes;

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
            FinanceObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


