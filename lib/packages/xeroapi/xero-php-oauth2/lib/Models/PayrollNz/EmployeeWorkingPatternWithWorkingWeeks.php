<?php
/**
 * EmployeeWorkingPatternWithWorkingWeeks
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
 * Xero Payroll NZ
 *
 * This is the Xero Payroll API for orgs in the NZ region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollNzObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * EmployeeWorkingPatternWithWorkingWeeks Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeWorkingPatternWithWorkingWeeks implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeWorkingPatternWithWorkingWeeks';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'payee_working_pattern_id' => 'string',
        'effective_from' => '\DateTime',
        'working_weeks' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\WorkingWeek[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'payee_working_pattern_id' => 'uuid',
        'effective_from' => 'date',
        'working_weeks' => null
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
        'payee_working_pattern_id' => 'payeeWorkingPatternID',
        'effective_from' => 'effectiveFrom',
        'working_weeks' => 'workingWeeks'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payee_working_pattern_id' => 'setPayeeWorkingPatternId',
        'effective_from' => 'setEffectiveFrom',
        'working_weeks' => 'setWorkingWeeks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payee_working_pattern_id' => 'getPayeeWorkingPatternId',
        'effective_from' => 'getEffectiveFrom',
        'working_weeks' => 'getWorkingWeeks'
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
        $this->container['payee_working_pattern_id'] = isset($data['payee_working_pattern_id']) ? $data['payee_working_pattern_id'] : null;
        $this->container['effective_from'] = isset($data['effective_from']) ? $data['effective_from'] : null;
        $this->container['working_weeks'] = isset($data['working_weeks']) ? $data['working_weeks'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['payee_working_pattern_id'] === null) {
            $invalidProperties[] = "'payee_working_pattern_id' can't be null";
        }
        if ($this->container['effective_from'] === null) {
            $invalidProperties[] = "'effective_from' can't be null";
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
     * Gets payee_working_pattern_id
     *
     * @return string
     */
    public function getPayeeWorkingPatternId()
    {
        return $this->container['payee_working_pattern_id'];
    }

    /**
     * Sets payee_working_pattern_id
     *
     * @param string $payee_working_pattern_id The Xero identifier for for Employee working pattern
     *
     * @return $this
     */
    public function setPayeeWorkingPatternId($payee_working_pattern_id)
    {

        $this->container['payee_working_pattern_id'] = $payee_working_pattern_id;

        return $this;
    }



    /**
     * Gets effective_from
     *
     * @return \DateTime
     */
    public function getEffectiveFrom()
    {
        return $this->container['effective_from'];
    }

    /**
     * Sets effective_from
     *
     * @param \DateTime $effective_from The effective date of the corresponding salary and wages
     *
     * @return $this
     */
    public function setEffectiveFrom($effective_from)
    {

        $this->container['effective_from'] = $effective_from;

        return $this;
    }



    /**
     * Gets working_weeks
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\WorkingWeek[]|null
     */
    public function getWorkingWeeks()
    {
        return $this->container['working_weeks'];
    }

    /**
     * Sets working_weeks
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\WorkingWeek[]|null $working_weeks working_weeks
     *
     * @return $this
     */
    public function setWorkingWeeks($working_weeks)
    {

        $this->container['working_weeks'] = $working_weeks;

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
            PayrollNzObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


