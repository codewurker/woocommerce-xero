<?php
/**
 * TenNinetyNineContact
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
 * TenNinetyNineContact Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TenNinetyNineContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TenNinetyNineContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'box1' => 'double',
        'box2' => 'double',
        'box3' => 'double',
        'box4' => 'double',
        'box5' => 'double',
        'box6' => 'double',
        'box7' => 'double',
        'box8' => 'double',
        'box9' => 'double',
        'box10' => 'double',
        'box11' => 'double',
        'box13' => 'double',
        'box14' => 'double',
        'name' => 'string',
        'federal_tax_id_type' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'state' => 'string',
        'email' => 'string',
        'street_address' => 'string',
        'tax_id' => 'string',
        'contact_id' => 'string',
        'legal_name' => 'string',
        'business_name' => 'string',
        'federal_tax_classification' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'box1' => 'double',
        'box2' => 'double',
        'box3' => 'double',
        'box4' => 'double',
        'box5' => 'double',
        'box6' => 'double',
        'box7' => 'double',
        'box8' => 'double',
        'box9' => 'double',
        'box10' => 'double',
        'box11' => 'double',
        'box13' => 'double',
        'box14' => 'double',
        'name' => null,
        'federal_tax_id_type' => null,
        'city' => null,
        'zip' => null,
        'state' => null,
        'email' => null,
        'street_address' => null,
        'tax_id' => null,
        'contact_id' => 'uuid',
        'legal_name' => null,
        'business_name' => null,
        'federal_tax_classification' => null
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
        'box1' => 'Box1',
        'box2' => 'Box2',
        'box3' => 'Box3',
        'box4' => 'Box4',
        'box5' => 'Box5',
        'box6' => 'Box6',
        'box7' => 'Box7',
        'box8' => 'Box8',
        'box9' => 'Box9',
        'box10' => 'Box10',
        'box11' => 'Box11',
        'box13' => 'Box13',
        'box14' => 'Box14',
        'name' => 'Name',
        'federal_tax_id_type' => 'FederalTaxIDType',
        'city' => 'City',
        'zip' => 'Zip',
        'state' => 'State',
        'email' => 'Email',
        'street_address' => 'StreetAddress',
        'tax_id' => 'TaxID',
        'contact_id' => 'ContactId',
        'legal_name' => 'LegalName',
        'business_name' => 'BusinessName',
        'federal_tax_classification' => 'FederalTaxClassification'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'box1' => 'setBox1',
        'box2' => 'setBox2',
        'box3' => 'setBox3',
        'box4' => 'setBox4',
        'box5' => 'setBox5',
        'box6' => 'setBox6',
        'box7' => 'setBox7',
        'box8' => 'setBox8',
        'box9' => 'setBox9',
        'box10' => 'setBox10',
        'box11' => 'setBox11',
        'box13' => 'setBox13',
        'box14' => 'setBox14',
        'name' => 'setName',
        'federal_tax_id_type' => 'setFederalTaxIdType',
        'city' => 'setCity',
        'zip' => 'setZip',
        'state' => 'setState',
        'email' => 'setEmail',
        'street_address' => 'setStreetAddress',
        'tax_id' => 'setTaxId',
        'contact_id' => 'setContactId',
        'legal_name' => 'setLegalName',
        'business_name' => 'setBusinessName',
        'federal_tax_classification' => 'setFederalTaxClassification'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'box1' => 'getBox1',
        'box2' => 'getBox2',
        'box3' => 'getBox3',
        'box4' => 'getBox4',
        'box5' => 'getBox5',
        'box6' => 'getBox6',
        'box7' => 'getBox7',
        'box8' => 'getBox8',
        'box9' => 'getBox9',
        'box10' => 'getBox10',
        'box11' => 'getBox11',
        'box13' => 'getBox13',
        'box14' => 'getBox14',
        'name' => 'getName',
        'federal_tax_id_type' => 'getFederalTaxIdType',
        'city' => 'getCity',
        'zip' => 'getZip',
        'state' => 'getState',
        'email' => 'getEmail',
        'street_address' => 'getStreetAddress',
        'tax_id' => 'getTaxId',
        'contact_id' => 'getContactId',
        'legal_name' => 'getLegalName',
        'business_name' => 'getBusinessName',
        'federal_tax_classification' => 'getFederalTaxClassification'
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

    const FEDERAL_TAX_CLASSIFICATION_SOLE_PROPRIETOR = 'SOLE_PROPRIETOR';
    const FEDERAL_TAX_CLASSIFICATION_PARTNERSHIP = 'PARTNERSHIP';
    const FEDERAL_TAX_CLASSIFICATION_TRUST_OR_ESTATE = 'TRUST_OR_ESTATE';
    const FEDERAL_TAX_CLASSIFICATION_NONPROFIT = 'NONPROFIT';
    const FEDERAL_TAX_CLASSIFICATION_C_CORP = 'C_CORP';
    const FEDERAL_TAX_CLASSIFICATION_S_CORP = 'S_CORP';
    const FEDERAL_TAX_CLASSIFICATION_OTHER = 'OTHER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFederalTaxClassificationAllowableValues()
    {
        return [
            self::FEDERAL_TAX_CLASSIFICATION_SOLE_PROPRIETOR,
            self::FEDERAL_TAX_CLASSIFICATION_PARTNERSHIP,
            self::FEDERAL_TAX_CLASSIFICATION_TRUST_OR_ESTATE,
            self::FEDERAL_TAX_CLASSIFICATION_NONPROFIT,
            self::FEDERAL_TAX_CLASSIFICATION_C_CORP,
            self::FEDERAL_TAX_CLASSIFICATION_S_CORP,
            self::FEDERAL_TAX_CLASSIFICATION_OTHER,
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
        $this->container['box1'] = isset($data['box1']) ? $data['box1'] : null;
        $this->container['box2'] = isset($data['box2']) ? $data['box2'] : null;
        $this->container['box3'] = isset($data['box3']) ? $data['box3'] : null;
        $this->container['box4'] = isset($data['box4']) ? $data['box4'] : null;
        $this->container['box5'] = isset($data['box5']) ? $data['box5'] : null;
        $this->container['box6'] = isset($data['box6']) ? $data['box6'] : null;
        $this->container['box7'] = isset($data['box7']) ? $data['box7'] : null;
        $this->container['box8'] = isset($data['box8']) ? $data['box8'] : null;
        $this->container['box9'] = isset($data['box9']) ? $data['box9'] : null;
        $this->container['box10'] = isset($data['box10']) ? $data['box10'] : null;
        $this->container['box11'] = isset($data['box11']) ? $data['box11'] : null;
        $this->container['box13'] = isset($data['box13']) ? $data['box13'] : null;
        $this->container['box14'] = isset($data['box14']) ? $data['box14'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['federal_tax_id_type'] = isset($data['federal_tax_id_type']) ? $data['federal_tax_id_type'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['street_address'] = isset($data['street_address']) ? $data['street_address'] : null;
        $this->container['tax_id'] = isset($data['tax_id']) ? $data['tax_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['legal_name'] = isset($data['legal_name']) ? $data['legal_name'] : null;
        $this->container['business_name'] = isset($data['business_name']) ? $data['business_name'] : null;
        $this->container['federal_tax_classification'] = isset($data['federal_tax_classification']) ? $data['federal_tax_classification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFederalTaxClassificationAllowableValues();
        if (!is_null($this->container['federal_tax_classification']) && !in_array($this->container['federal_tax_classification'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'federal_tax_classification', must be one of '%s'",
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
     * Gets box1
     *
     * @return double|null
     */
    public function getBox1()
    {
        return $this->container['box1'];
    }

    /**
     * Sets box1
     *
     * @param double|null $box1 Box 1 on 1099 Form
     *
     * @return $this
     */
    public function setBox1($box1)
    {

        $this->container['box1'] = $box1;

        return $this;
    }



    /**
     * Gets box2
     *
     * @return double|null
     */
    public function getBox2()
    {
        return $this->container['box2'];
    }

    /**
     * Sets box2
     *
     * @param double|null $box2 Box 2 on 1099 Form
     *
     * @return $this
     */
    public function setBox2($box2)
    {

        $this->container['box2'] = $box2;

        return $this;
    }



    /**
     * Gets box3
     *
     * @return double|null
     */
    public function getBox3()
    {
        return $this->container['box3'];
    }

    /**
     * Sets box3
     *
     * @param double|null $box3 Box 3 on 1099 Form
     *
     * @return $this
     */
    public function setBox3($box3)
    {

        $this->container['box3'] = $box3;

        return $this;
    }



    /**
     * Gets box4
     *
     * @return double|null
     */
    public function getBox4()
    {
        return $this->container['box4'];
    }

    /**
     * Sets box4
     *
     * @param double|null $box4 Box 4 on 1099 Form
     *
     * @return $this
     */
    public function setBox4($box4)
    {

        $this->container['box4'] = $box4;

        return $this;
    }



    /**
     * Gets box5
     *
     * @return double|null
     */
    public function getBox5()
    {
        return $this->container['box5'];
    }

    /**
     * Sets box5
     *
     * @param double|null $box5 Box 5 on 1099 Form
     *
     * @return $this
     */
    public function setBox5($box5)
    {

        $this->container['box5'] = $box5;

        return $this;
    }



    /**
     * Gets box6
     *
     * @return double|null
     */
    public function getBox6()
    {
        return $this->container['box6'];
    }

    /**
     * Sets box6
     *
     * @param double|null $box6 Box 6 on 1099 Form
     *
     * @return $this
     */
    public function setBox6($box6)
    {

        $this->container['box6'] = $box6;

        return $this;
    }



    /**
     * Gets box7
     *
     * @return double|null
     */
    public function getBox7()
    {
        return $this->container['box7'];
    }

    /**
     * Sets box7
     *
     * @param double|null $box7 Box 7 on 1099 Form
     *
     * @return $this
     */
    public function setBox7($box7)
    {

        $this->container['box7'] = $box7;

        return $this;
    }



    /**
     * Gets box8
     *
     * @return double|null
     */
    public function getBox8()
    {
        return $this->container['box8'];
    }

    /**
     * Sets box8
     *
     * @param double|null $box8 Box 8 on 1099 Form
     *
     * @return $this
     */
    public function setBox8($box8)
    {

        $this->container['box8'] = $box8;

        return $this;
    }



    /**
     * Gets box9
     *
     * @return double|null
     */
    public function getBox9()
    {
        return $this->container['box9'];
    }

    /**
     * Sets box9
     *
     * @param double|null $box9 Box 9 on 1099 Form
     *
     * @return $this
     */
    public function setBox9($box9)
    {

        $this->container['box9'] = $box9;

        return $this;
    }



    /**
     * Gets box10
     *
     * @return double|null
     */
    public function getBox10()
    {
        return $this->container['box10'];
    }

    /**
     * Sets box10
     *
     * @param double|null $box10 Box 10 on 1099 Form
     *
     * @return $this
     */
    public function setBox10($box10)
    {

        $this->container['box10'] = $box10;

        return $this;
    }



    /**
     * Gets box11
     *
     * @return double|null
     */
    public function getBox11()
    {
        return $this->container['box11'];
    }

    /**
     * Sets box11
     *
     * @param double|null $box11 Box 11 on 1099 Form
     *
     * @return $this
     */
    public function setBox11($box11)
    {

        $this->container['box11'] = $box11;

        return $this;
    }



    /**
     * Gets box13
     *
     * @return double|null
     */
    public function getBox13()
    {
        return $this->container['box13'];
    }

    /**
     * Sets box13
     *
     * @param double|null $box13 Box 13 on 1099 Form
     *
     * @return $this
     */
    public function setBox13($box13)
    {

        $this->container['box13'] = $box13;

        return $this;
    }



    /**
     * Gets box14
     *
     * @return double|null
     */
    public function getBox14()
    {
        return $this->container['box14'];
    }

    /**
     * Sets box14
     *
     * @param double|null $box14 Box 14 on 1099 Form
     *
     * @return $this
     */
    public function setBox14($box14)
    {

        $this->container['box14'] = $box14;

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
     * @param string|null $name Contact name on 1099 Form
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets federal_tax_id_type
     *
     * @return string|null
     */
    public function getFederalTaxIdType()
    {
        return $this->container['federal_tax_id_type'];
    }

    /**
     * Sets federal_tax_id_type
     *
     * @param string|null $federal_tax_id_type Contact Fed Tax ID type
     *
     * @return $this
     */
    public function setFederalTaxIdType($federal_tax_id_type)
    {

        $this->container['federal_tax_id_type'] = $federal_tax_id_type;

        return $this;
    }



    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city Contact city on 1099 Form
     *
     * @return $this
     */
    public function setCity($city)
    {

        $this->container['city'] = $city;

        return $this;
    }



    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip Contact zip on 1099 Form
     *
     * @return $this
     */
    public function setZip($zip)
    {

        $this->container['zip'] = $zip;

        return $this;
    }



    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state Contact State on 1099 Form
     *
     * @return $this
     */
    public function setState($state)
    {

        $this->container['state'] = $state;

        return $this;
    }



    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Contact email on 1099 Form
     *
     * @return $this
     */
    public function setEmail($email)
    {

        $this->container['email'] = $email;

        return $this;
    }



    /**
     * Gets street_address
     *
     * @return string|null
     */
    public function getStreetAddress()
    {
        return $this->container['street_address'];
    }

    /**
     * Sets street_address
     *
     * @param string|null $street_address Contact address on 1099 Form
     *
     * @return $this
     */
    public function setStreetAddress($street_address)
    {

        $this->container['street_address'] = $street_address;

        return $this;
    }



    /**
     * Gets tax_id
     *
     * @return string|null
     */
    public function getTaxId()
    {
        return $this->container['tax_id'];
    }

    /**
     * Sets tax_id
     *
     * @param string|null $tax_id Contact tax id on 1099 Form
     *
     * @return $this
     */
    public function setTaxId($tax_id)
    {

        $this->container['tax_id'] = $tax_id;

        return $this;
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
     * @param string|null $contact_id Contact contact id
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        $this->container['contact_id'] = $contact_id;

        return $this;
    }



    /**
     * Gets legal_name
     *
     * @return string|null
     */
    public function getLegalName()
    {
        return $this->container['legal_name'];
    }

    /**
     * Sets legal_name
     *
     * @param string|null $legal_name Contact legal name
     *
     * @return $this
     */
    public function setLegalName($legal_name)
    {

        $this->container['legal_name'] = $legal_name;

        return $this;
    }



    /**
     * Gets business_name
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['business_name'];
    }

    /**
     * Sets business_name
     *
     * @param string|null $business_name Contact business name
     *
     * @return $this
     */
    public function setBusinessName($business_name)
    {

        $this->container['business_name'] = $business_name;

        return $this;
    }



    /**
     * Gets federal_tax_classification
     *
     * @return string|null
     */
    public function getFederalTaxClassification()
    {
        return $this->container['federal_tax_classification'];
    }

    /**
     * Sets federal_tax_classification
     *
     * @param string|null $federal_tax_classification Contact federal tax classification
     *
     * @return $this
     */
    public function setFederalTaxClassification($federal_tax_classification)
    {
        $allowedValues = $this->getFederalTaxClassificationAllowableValues();
        if (!is_null($federal_tax_classification) && !in_array($federal_tax_classification, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'federal_tax_classification', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['federal_tax_classification'] = $federal_tax_classification;

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


