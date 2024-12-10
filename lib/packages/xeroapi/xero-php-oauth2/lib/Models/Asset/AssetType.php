<?php
/**
 * AssetType
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
 * Xero Assets API
 *
 * The Assets API exposes fixed asset related functions of the Xero Accounting application and can be used for a variety of purposes such as creating assets, retrieving asset valuations etc.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Asset;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\AssetObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * AssetType Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AssetType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AssetType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'asset_type_id' => 'string',
        'asset_type_name' => 'string',
        'fixed_asset_account_id' => 'string',
        'depreciation_expense_account_id' => 'string',
        'accumulated_depreciation_account_id' => 'string',
        'book_depreciation_setting' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Asset\BookDepreciationSetting',
        'locks' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'asset_type_id' => 'uuid',
        'asset_type_name' => null,
        'fixed_asset_account_id' => 'uuid',
        'depreciation_expense_account_id' => 'uuid',
        'accumulated_depreciation_account_id' => 'uuid',
        'book_depreciation_setting' => null,
        'locks' => null
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
        'asset_type_id' => 'assetTypeId',
        'asset_type_name' => 'assetTypeName',
        'fixed_asset_account_id' => 'fixedAssetAccountId',
        'depreciation_expense_account_id' => 'depreciationExpenseAccountId',
        'accumulated_depreciation_account_id' => 'accumulatedDepreciationAccountId',
        'book_depreciation_setting' => 'bookDepreciationSetting',
        'locks' => 'locks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'asset_type_id' => 'setAssetTypeId',
        'asset_type_name' => 'setAssetTypeName',
        'fixed_asset_account_id' => 'setFixedAssetAccountId',
        'depreciation_expense_account_id' => 'setDepreciationExpenseAccountId',
        'accumulated_depreciation_account_id' => 'setAccumulatedDepreciationAccountId',
        'book_depreciation_setting' => 'setBookDepreciationSetting',
        'locks' => 'setLocks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'asset_type_id' => 'getAssetTypeId',
        'asset_type_name' => 'getAssetTypeName',
        'fixed_asset_account_id' => 'getFixedAssetAccountId',
        'depreciation_expense_account_id' => 'getDepreciationExpenseAccountId',
        'accumulated_depreciation_account_id' => 'getAccumulatedDepreciationAccountId',
        'book_depreciation_setting' => 'getBookDepreciationSetting',
        'locks' => 'getLocks'
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
        $this->container['asset_type_id'] = isset($data['asset_type_id']) ? $data['asset_type_id'] : null;
        $this->container['asset_type_name'] = isset($data['asset_type_name']) ? $data['asset_type_name'] : null;
        $this->container['fixed_asset_account_id'] = isset($data['fixed_asset_account_id']) ? $data['fixed_asset_account_id'] : null;
        $this->container['depreciation_expense_account_id'] = isset($data['depreciation_expense_account_id']) ? $data['depreciation_expense_account_id'] : null;
        $this->container['accumulated_depreciation_account_id'] = isset($data['accumulated_depreciation_account_id']) ? $data['accumulated_depreciation_account_id'] : null;
        $this->container['book_depreciation_setting'] = isset($data['book_depreciation_setting']) ? $data['book_depreciation_setting'] : null;
        $this->container['locks'] = isset($data['locks']) ? $data['locks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['asset_type_name'] === null) {
            $invalidProperties[] = "'asset_type_name' can't be null";
        }
        if ($this->container['book_depreciation_setting'] === null) {
            $invalidProperties[] = "'book_depreciation_setting' can't be null";
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
     * Gets asset_type_id
     *
     * @return string|null
     */
    public function getAssetTypeId()
    {
        return $this->container['asset_type_id'];
    }

    /**
     * Sets asset_type_id
     *
     * @param string|null $asset_type_id Xero generated unique identifier for asset types
     *
     * @return $this
     */
    public function setAssetTypeId($asset_type_id)
    {

        $this->container['asset_type_id'] = $asset_type_id;

        return $this;
    }



    /**
     * Gets asset_type_name
     *
     * @return string
     */
    public function getAssetTypeName()
    {
        return $this->container['asset_type_name'];
    }

    /**
     * Sets asset_type_name
     *
     * @param string $asset_type_name The name of the asset type
     *
     * @return $this
     */
    public function setAssetTypeName($asset_type_name)
    {

        $this->container['asset_type_name'] = $asset_type_name;

        return $this;
    }



    /**
     * Gets fixed_asset_account_id
     *
     * @return string|null
     */
    public function getFixedAssetAccountId()
    {
        return $this->container['fixed_asset_account_id'];
    }

    /**
     * Sets fixed_asset_account_id
     *
     * @param string|null $fixed_asset_account_id The asset account for fixed assets of this type
     *
     * @return $this
     */
    public function setFixedAssetAccountId($fixed_asset_account_id)
    {

        $this->container['fixed_asset_account_id'] = $fixed_asset_account_id;

        return $this;
    }



    /**
     * Gets depreciation_expense_account_id
     *
     * @return string|null
     */
    public function getDepreciationExpenseAccountId()
    {
        return $this->container['depreciation_expense_account_id'];
    }

    /**
     * Sets depreciation_expense_account_id
     *
     * @param string|null $depreciation_expense_account_id The expense account for the depreciation of fixed assets of this type
     *
     * @return $this
     */
    public function setDepreciationExpenseAccountId($depreciation_expense_account_id)
    {

        $this->container['depreciation_expense_account_id'] = $depreciation_expense_account_id;

        return $this;
    }



    /**
     * Gets accumulated_depreciation_account_id
     *
     * @return string|null
     */
    public function getAccumulatedDepreciationAccountId()
    {
        return $this->container['accumulated_depreciation_account_id'];
    }

    /**
     * Sets accumulated_depreciation_account_id
     *
     * @param string|null $accumulated_depreciation_account_id The account for accumulated depreciation of fixed assets of this type
     *
     * @return $this
     */
    public function setAccumulatedDepreciationAccountId($accumulated_depreciation_account_id)
    {

        $this->container['accumulated_depreciation_account_id'] = $accumulated_depreciation_account_id;

        return $this;
    }



    /**
     * Gets book_depreciation_setting
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Asset\BookDepreciationSetting
     */
    public function getBookDepreciationSetting()
    {
        return $this->container['book_depreciation_setting'];
    }

    /**
     * Sets book_depreciation_setting
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Asset\BookDepreciationSetting $book_depreciation_setting book_depreciation_setting
     *
     * @return $this
     */
    public function setBookDepreciationSetting($book_depreciation_setting)
    {

        $this->container['book_depreciation_setting'] = $book_depreciation_setting;

        return $this;
    }



    /**
     * Gets locks
     *
     * @return int|null
     */
    public function getLocks()
    {
        return $this->container['locks'];
    }

    /**
     * Sets locks
     *
     * @param int|null $locks All asset types that have accumulated depreciation for any assets that use them are deemed ‘locked’ and cannot be removed.
     *
     * @return $this
     */
    public function setLocks($locks)
    {

        $this->container['locks'] = $locks;

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
            AssetObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


