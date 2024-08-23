<?php
/**
 * BookDepreciationSetting
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
 * BookDepreciationSetting Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BookDepreciationSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BookDepreciationSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'depreciation_method' => 'string',
        'averaging_method' => 'string',
        'depreciation_rate' => 'double',
        'effective_life_years' => 'int',
        'depreciation_calculation_method' => 'string',
        'depreciable_object_id' => 'string',
        'depreciable_object_type' => 'string',
        'book_effective_date_of_change_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'depreciation_method' => null,
        'averaging_method' => null,
        'depreciation_rate' => 'double',
        'effective_life_years' => null,
        'depreciation_calculation_method' => null,
        'depreciable_object_id' => 'uuid',
        'depreciable_object_type' => null,
        'book_effective_date_of_change_id' => 'uuid'
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
        'depreciation_method' => 'depreciationMethod',
        'averaging_method' => 'averagingMethod',
        'depreciation_rate' => 'depreciationRate',
        'effective_life_years' => 'effectiveLifeYears',
        'depreciation_calculation_method' => 'depreciationCalculationMethod',
        'depreciable_object_id' => 'depreciableObjectId',
        'depreciable_object_type' => 'depreciableObjectType',
        'book_effective_date_of_change_id' => 'bookEffectiveDateOfChangeId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'depreciation_method' => 'setDepreciationMethod',
        'averaging_method' => 'setAveragingMethod',
        'depreciation_rate' => 'setDepreciationRate',
        'effective_life_years' => 'setEffectiveLifeYears',
        'depreciation_calculation_method' => 'setDepreciationCalculationMethod',
        'depreciable_object_id' => 'setDepreciableObjectId',
        'depreciable_object_type' => 'setDepreciableObjectType',
        'book_effective_date_of_change_id' => 'setBookEffectiveDateOfChangeId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'depreciation_method' => 'getDepreciationMethod',
        'averaging_method' => 'getAveragingMethod',
        'depreciation_rate' => 'getDepreciationRate',
        'effective_life_years' => 'getEffectiveLifeYears',
        'depreciation_calculation_method' => 'getDepreciationCalculationMethod',
        'depreciable_object_id' => 'getDepreciableObjectId',
        'depreciable_object_type' => 'getDepreciableObjectType',
        'book_effective_date_of_change_id' => 'getBookEffectiveDateOfChangeId'
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

    const DEPRECIATION_METHOD_NO_DEPRECIATION = 'NoDepreciation';
    const DEPRECIATION_METHOD_STRAIGHT_LINE = 'StraightLine';
    const DEPRECIATION_METHOD_DIMINISHING_VALUE100 = 'DiminishingValue100';
    const DEPRECIATION_METHOD_DIMINISHING_VALUE150 = 'DiminishingValue150';
    const DEPRECIATION_METHOD_DIMINISHING_VALUE200 = 'DiminishingValue200';
    const DEPRECIATION_METHOD_FULL_DEPRECIATION = 'FullDepreciation';
    const AVERAGING_METHOD_FULL_MONTH = 'FullMonth';
    const AVERAGING_METHOD_ACTUAL_DAYS = 'ActualDays';
    const DEPRECIATION_CALCULATION_METHOD_RATE = 'Rate';
    const DEPRECIATION_CALCULATION_METHOD_LIFE = 'Life';
    const DEPRECIATION_CALCULATION_METHOD_NONE = 'None';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepreciationMethodAllowableValues()
    {
        return [
            self::DEPRECIATION_METHOD_NO_DEPRECIATION,
            self::DEPRECIATION_METHOD_STRAIGHT_LINE,
            self::DEPRECIATION_METHOD_DIMINISHING_VALUE100,
            self::DEPRECIATION_METHOD_DIMINISHING_VALUE150,
            self::DEPRECIATION_METHOD_DIMINISHING_VALUE200,
            self::DEPRECIATION_METHOD_FULL_DEPRECIATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAveragingMethodAllowableValues()
    {
        return [
            self::AVERAGING_METHOD_FULL_MONTH,
            self::AVERAGING_METHOD_ACTUAL_DAYS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDepreciationCalculationMethodAllowableValues()
    {
        return [
            self::DEPRECIATION_CALCULATION_METHOD_RATE,
            self::DEPRECIATION_CALCULATION_METHOD_LIFE,
            self::DEPRECIATION_CALCULATION_METHOD_NONE,
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
        $this->container['depreciation_method'] = isset($data['depreciation_method']) ? $data['depreciation_method'] : null;
        $this->container['averaging_method'] = isset($data['averaging_method']) ? $data['averaging_method'] : null;
        $this->container['depreciation_rate'] = isset($data['depreciation_rate']) ? $data['depreciation_rate'] : null;
        $this->container['effective_life_years'] = isset($data['effective_life_years']) ? $data['effective_life_years'] : null;
        $this->container['depreciation_calculation_method'] = isset($data['depreciation_calculation_method']) ? $data['depreciation_calculation_method'] : null;
        $this->container['depreciable_object_id'] = isset($data['depreciable_object_id']) ? $data['depreciable_object_id'] : null;
        $this->container['depreciable_object_type'] = isset($data['depreciable_object_type']) ? $data['depreciable_object_type'] : null;
        $this->container['book_effective_date_of_change_id'] = isset($data['book_effective_date_of_change_id']) ? $data['book_effective_date_of_change_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDepreciationMethodAllowableValues();
        if (!is_null($this->container['depreciation_method']) && !in_array($this->container['depreciation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'depreciation_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAveragingMethodAllowableValues();
        if (!is_null($this->container['averaging_method']) && !in_array($this->container['averaging_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'averaging_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDepreciationCalculationMethodAllowableValues();
        if (!is_null($this->container['depreciation_calculation_method']) && !in_array($this->container['depreciation_calculation_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'depreciation_calculation_method', must be one of '%s'",
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
     * Gets depreciation_method
     *
     * @return string|null
     */
    public function getDepreciationMethod()
    {
        return $this->container['depreciation_method'];
    }

    /**
     * Sets depreciation_method
     *
     * @param string|null $depreciation_method The method of depreciation applied to this asset. See Depreciation Methods
     *
     * @return $this
     */
    public function setDepreciationMethod($depreciation_method)
    {
        $allowedValues = $this->getDepreciationMethodAllowableValues();
        if (!is_null($depreciation_method) && !in_array($depreciation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'depreciation_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['depreciation_method'] = $depreciation_method;

        return $this;
    }



    /**
     * Gets averaging_method
     *
     * @return string|null
     */
    public function getAveragingMethod()
    {
        return $this->container['averaging_method'];
    }

    /**
     * Sets averaging_method
     *
     * @param string|null $averaging_method The method of averaging applied to this asset. See Averaging Methods
     *
     * @return $this
     */
    public function setAveragingMethod($averaging_method)
    {
        $allowedValues = $this->getAveragingMethodAllowableValues();
        if (!is_null($averaging_method) && !in_array($averaging_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'averaging_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['averaging_method'] = $averaging_method;

        return $this;
    }



    /**
     * Gets depreciation_rate
     *
     * @return double|null
     */
    public function getDepreciationRate()
    {
        return $this->container['depreciation_rate'];
    }

    /**
     * Sets depreciation_rate
     *
     * @param double|null $depreciation_rate The rate of depreciation (e.g. 0.05)
     *
     * @return $this
     */
    public function setDepreciationRate($depreciation_rate)
    {

        $this->container['depreciation_rate'] = $depreciation_rate;

        return $this;
    }



    /**
     * Gets effective_life_years
     *
     * @return int|null
     */
    public function getEffectiveLifeYears()
    {
        return $this->container['effective_life_years'];
    }

    /**
     * Sets effective_life_years
     *
     * @param int|null $effective_life_years Effective life of the asset in years (e.g. 5)
     *
     * @return $this
     */
    public function setEffectiveLifeYears($effective_life_years)
    {

        $this->container['effective_life_years'] = $effective_life_years;

        return $this;
    }



    /**
     * Gets depreciation_calculation_method
     *
     * @return string|null
     */
    public function getDepreciationCalculationMethod()
    {
        return $this->container['depreciation_calculation_method'];
    }

    /**
     * Sets depreciation_calculation_method
     *
     * @param string|null $depreciation_calculation_method See Depreciation Calculation Methods
     *
     * @return $this
     */
    public function setDepreciationCalculationMethod($depreciation_calculation_method)
    {
        $allowedValues = $this->getDepreciationCalculationMethodAllowableValues();
        if (!is_null($depreciation_calculation_method) && !in_array($depreciation_calculation_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'depreciation_calculation_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['depreciation_calculation_method'] = $depreciation_calculation_method;

        return $this;
    }



    /**
     * Gets depreciable_object_id
     *
     * @return string|null
     */
    public function getDepreciableObjectId()
    {
        return $this->container['depreciable_object_id'];
    }

    /**
     * Sets depreciable_object_id
     *
     * @param string|null $depreciable_object_id Unique Xero identifier for the depreciable object
     *
     * @return $this
     */
    public function setDepreciableObjectId($depreciable_object_id)
    {

        $this->container['depreciable_object_id'] = $depreciable_object_id;

        return $this;
    }



    /**
     * Gets depreciable_object_type
     *
     * @return string|null
     */
    public function getDepreciableObjectType()
    {
        return $this->container['depreciable_object_type'];
    }

    /**
     * Sets depreciable_object_type
     *
     * @param string|null $depreciable_object_type The type of asset object
     *
     * @return $this
     */
    public function setDepreciableObjectType($depreciable_object_type)
    {

        $this->container['depreciable_object_type'] = $depreciable_object_type;

        return $this;
    }



    /**
     * Gets book_effective_date_of_change_id
     *
     * @return string|null
     */
    public function getBookEffectiveDateOfChangeId()
    {
        return $this->container['book_effective_date_of_change_id'];
    }

    /**
     * Sets book_effective_date_of_change_id
     *
     * @param string|null $book_effective_date_of_change_id Unique Xero identifier for the effective date change
     *
     * @return $this
     */
    public function setBookEffectiveDateOfChangeId($book_effective_date_of_change_id)
    {

        $this->container['book_effective_date_of_change_id'] = $book_effective_date_of_change_id;

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


