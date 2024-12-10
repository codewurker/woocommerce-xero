<?php
/**
 * BalanceSheetResponse
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
 * BalanceSheetResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BalanceSheetResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BalanceSheetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'balance_date' => '\DateTime',
        'asset' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup',
        'liability' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup',
        'equity' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'balance_date' => 'date',
        'asset' => null,
        'liability' => null,
        'equity' => null
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
        'balance_date' => 'balanceDate',
        'asset' => 'asset',
        'liability' => 'liability',
        'equity' => 'equity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'balance_date' => 'setBalanceDate',
        'asset' => 'setAsset',
        'liability' => 'setLiability',
        'equity' => 'setEquity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'balance_date' => 'getBalanceDate',
        'asset' => 'getAsset',
        'liability' => 'getLiability',
        'equity' => 'getEquity'
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
        $this->container['balance_date'] = isset($data['balance_date']) ? $data['balance_date'] : null;
        $this->container['asset'] = isset($data['asset']) ? $data['asset'] : null;
        $this->container['liability'] = isset($data['liability']) ? $data['liability'] : null;
        $this->container['equity'] = isset($data['equity']) ? $data['equity'] : null;
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
     * Gets balance_date
     *
     * @return \DateTime|null
     */
    public function getBalanceDate()
    {
        return $this->container['balance_date'];
    }

    /**
     * Sets balance_date
     *
     * @param \DateTime|null $balance_date Balance date of the report
     *
     * @return $this
     */
    public function setBalanceDate($balance_date)
    {

        $this->container['balance_date'] = $balance_date;

        return $this;
    }



    /**
     * Gets asset
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null $asset asset
     *
     * @return $this
     */
    public function setAsset($asset)
    {

        $this->container['asset'] = $asset;

        return $this;
    }



    /**
     * Gets liability
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null
     */
    public function getLiability()
    {
        return $this->container['liability'];
    }

    /**
     * Sets liability
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null $liability liability
     *
     * @return $this
     */
    public function setLiability($liability)
    {

        $this->container['liability'] = $liability;

        return $this;
    }



    /**
     * Gets equity
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null
     */
    public function getEquity()
    {
        return $this->container['equity'];
    }

    /**
     * Sets equity
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BalanceSheetAccountGroup|null $equity equity
     *
     * @return $this
     */
    public function setEquity($equity)
    {

        $this->container['equity'] = $equity;

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


