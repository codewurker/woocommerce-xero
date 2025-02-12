<?php
/**
 * PracticeResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 10-February-2025 using Strauss.
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
 * PracticeResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PracticeResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PracticeResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'xero_partner_since' => 'int',
        'tier' => 'string',
        'location' => 'string',
        'organisation_count' => 'int',
        'staff_certified' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'xero_partner_since' => 'int32',
        'tier' => null,
        'location' => null,
        'organisation_count' => 'int32',
        'staff_certified' => null
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
        'xero_partner_since' => 'xeroPartnerSince',
        'tier' => 'tier',
        'location' => 'location',
        'organisation_count' => 'organisationCount',
        'staff_certified' => 'staffCertified'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'xero_partner_since' => 'setXeroPartnerSince',
        'tier' => 'setTier',
        'location' => 'setLocation',
        'organisation_count' => 'setOrganisationCount',
        'staff_certified' => 'setStaffCertified'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'xero_partner_since' => 'getXeroPartnerSince',
        'tier' => 'getTier',
        'location' => 'getLocation',
        'organisation_count' => 'getOrganisationCount',
        'staff_certified' => 'getStaffCertified'
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
        $this->container['xero_partner_since'] = isset($data['xero_partner_since']) ? $data['xero_partner_since'] : null;
        $this->container['tier'] = isset($data['tier']) ? $data['tier'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['organisation_count'] = isset($data['organisation_count']) ? $data['organisation_count'] : null;
        $this->container['staff_certified'] = isset($data['staff_certified']) ? $data['staff_certified'] : null;
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
     * Gets xero_partner_since
     *
     * @return int|null
     */
    public function getXeroPartnerSince()
    {
        return $this->container['xero_partner_since'];
    }

    /**
     * Sets xero_partner_since
     *
     * @param int|null $xero_partner_since Year of becoming a partner.
     *
     * @return $this
     */
    public function setXeroPartnerSince($xero_partner_since)
    {

        $this->container['xero_partner_since'] = $xero_partner_since;

        return $this;
    }



    /**
     * Gets tier
     *
     * @return string|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string|null $tier Customer tier e.g. Silver
     *
     * @return $this
     */
    public function setTier($tier)
    {

        $this->container['tier'] = $tier;

        return $this;
    }



    /**
     * Gets location
     *
     * @return string|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string|null $location Country of location.
     *
     * @return $this
     */
    public function setLocation($location)
    {

        $this->container['location'] = $location;

        return $this;
    }



    /**
     * Gets organisation_count
     *
     * @return int|null
     */
    public function getOrganisationCount()
    {
        return $this->container['organisation_count'];
    }

    /**
     * Sets organisation_count
     *
     * @param int|null $organisation_count Organisation count.
     *
     * @return $this
     */
    public function setOrganisationCount($organisation_count)
    {

        $this->container['organisation_count'] = $organisation_count;

        return $this;
    }



    /**
     * Gets staff_certified
     *
     * @return bool|null
     */
    public function getStaffCertified()
    {
        return $this->container['staff_certified'];
    }

    /**
     * Sets staff_certified
     *
     * @param bool|null $staff_certified Staff certified (true/false).
     *
     * @return $this
     */
    public function setStaffCertified($staff_certified)
    {

        $this->container['staff_certified'] = $staff_certified;

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


