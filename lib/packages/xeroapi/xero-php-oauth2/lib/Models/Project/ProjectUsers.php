<?php
/**
 * ProjectUsers
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 20-May-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

/**
 * Xero Projects API
 *
 * This is the Xero Projects API
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\ProjectObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * ProjectUsers Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProjectUsers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProjectUsers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pagination' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Pagination',
        'items' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\ProjectUser[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pagination' => null,
        'items' => null
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
        'pagination' => 'pagination',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pagination' => 'setPagination',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pagination' => 'getPagination',
        'items' => 'getItems'
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
        $this->container['pagination'] = isset($data['pagination']) ? $data['pagination'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets pagination
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Pagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\Pagination|null $pagination pagination
     *
     * @return $this
     */
    public function setPagination($pagination)
    {

        $this->container['pagination'] = $pagination;

        return $this;
    }



    /**
     * Gets items
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\ProjectUser[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Project\ProjectUser[]|null $items items
     *
     * @return $this
     */
    public function setItems($items)
    {

        $this->container['items'] = $items;

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
            ProjectObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


