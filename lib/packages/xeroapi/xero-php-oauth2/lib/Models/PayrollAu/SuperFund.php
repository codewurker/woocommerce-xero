<?php
/**
 * SuperFund
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
 * Xero Payroll AU API
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * SuperFund Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SuperFund implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SuperFund';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'super_fund_id' => 'string',
        'type' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SuperFundType',
        'name' => 'string',
        'abn' => 'string',
        'bsb' => 'string',
        'account_number' => 'string',
        'account_name' => 'string',
        'electronic_service_address' => 'string',
        'employer_number' => 'string',
        'spin' => 'string',
        'usi' => 'string',
        'updated_date_utc' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'super_fund_id' => 'uuid',
        'type' => null,
        'name' => null,
        'abn' => null,
        'bsb' => null,
        'account_number' => null,
        'account_name' => null,
        'electronic_service_address' => null,
        'employer_number' => null,
        'spin' => null,
        'usi' => null,
        'updated_date_utc' => null,
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
        'super_fund_id' => 'SuperFundID',
        'type' => 'Type',
        'name' => 'Name',
        'abn' => 'ABN',
        'bsb' => 'BSB',
        'account_number' => 'AccountNumber',
        'account_name' => 'AccountName',
        'electronic_service_address' => 'ElectronicServiceAddress',
        'employer_number' => 'EmployerNumber',
        'spin' => 'SPIN',
        'usi' => 'USI',
        'updated_date_utc' => 'UpdatedDateUTC',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'super_fund_id' => 'setSuperFundId',
        'type' => 'setType',
        'name' => 'setName',
        'abn' => 'setAbn',
        'bsb' => 'setBsb',
        'account_number' => 'setAccountNumber',
        'account_name' => 'setAccountName',
        'electronic_service_address' => 'setElectronicServiceAddress',
        'employer_number' => 'setEmployerNumber',
        'spin' => 'setSpin',
        'usi' => 'setUsi',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'super_fund_id' => 'getSuperFundId',
        'type' => 'getType',
        'name' => 'getName',
        'abn' => 'getAbn',
        'bsb' => 'getBsb',
        'account_number' => 'getAccountNumber',
        'account_name' => 'getAccountName',
        'electronic_service_address' => 'getElectronicServiceAddress',
        'employer_number' => 'getEmployerNumber',
        'spin' => 'getSpin',
        'usi' => 'getUsi',
        'updated_date_utc' => 'getUpdatedDateUtc',
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
        $this->container['super_fund_id'] = isset($data['super_fund_id']) ? $data['super_fund_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['abn'] = isset($data['abn']) ? $data['abn'] : null;
        $this->container['bsb'] = isset($data['bsb']) ? $data['bsb'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['electronic_service_address'] = isset($data['electronic_service_address']) ? $data['electronic_service_address'] : null;
        $this->container['employer_number'] = isset($data['employer_number']) ? $data['employer_number'] : null;
        $this->container['spin'] = isset($data['spin']) ? $data['spin'] : null;
        $this->container['usi'] = isset($data['usi']) ? $data['usi'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets super_fund_id
     *
     * @return string|null
     */
    public function getSuperFundId()
    {
        return $this->container['super_fund_id'];
    }

    /**
     * Sets super_fund_id
     *
     * @param string|null $super_fund_id Xero identifier for a super fund
     *
     * @return $this
     */
    public function setSuperFundId($super_fund_id)
    {

        $this->container['super_fund_id'] = $super_fund_id;

        return $this;
    }



    /**
     * Gets type
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SuperFundType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\SuperFundType $type type
     *
     * @return $this
     */
    public function setType($type)
    {

        $this->container['type'] = $type;

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
     * @param string|null $name Name of the super fund
     *
     * @return $this
     */
    public function setName($name)
    {

        $this->container['name'] = $name;

        return $this;
    }



    /**
     * Gets abn
     *
     * @return string|null
     */
    public function getAbn()
    {
        return $this->container['abn'];
    }

    /**
     * Sets abn
     *
     * @param string|null $abn ABN of the self managed super fund
     *
     * @return $this
     */
    public function setAbn($abn)
    {

        $this->container['abn'] = $abn;

        return $this;
    }



    /**
     * Gets bsb
     *
     * @return string|null
     */
    public function getBsb()
    {
        return $this->container['bsb'];
    }

    /**
     * Sets bsb
     *
     * @param string|null $bsb BSB of the self managed super fund
     *
     * @return $this
     */
    public function setBsb($bsb)
    {

        $this->container['bsb'] = $bsb;

        return $this;
    }



    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number The account number for the self managed super fund.
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        $this->container['account_number'] = $account_number;

        return $this;
    }



    /**
     * Gets account_name
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     *
     * @param string|null $account_name The account name for the self managed super fund.
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {

        $this->container['account_name'] = $account_name;

        return $this;
    }



    /**
     * Gets electronic_service_address
     *
     * @return string|null
     */
    public function getElectronicServiceAddress()
    {
        return $this->container['electronic_service_address'];
    }

    /**
     * Sets electronic_service_address
     *
     * @param string|null $electronic_service_address The electronic service address for the self managed super fund.
     *
     * @return $this
     */
    public function setElectronicServiceAddress($electronic_service_address)
    {

        $this->container['electronic_service_address'] = $electronic_service_address;

        return $this;
    }



    /**
     * Gets employer_number
     *
     * @return string|null
     */
    public function getEmployerNumber()
    {
        return $this->container['employer_number'];
    }

    /**
     * Sets employer_number
     *
     * @param string|null $employer_number Some funds assign a unique number to each employer
     *
     * @return $this
     */
    public function setEmployerNumber($employer_number)
    {

        $this->container['employer_number'] = $employer_number;

        return $this;
    }



    /**
     * Gets spin
     *
     * @return string|null
     */
    public function getSpin()
    {
        return $this->container['spin'];
    }

    /**
     * Sets spin
     *
     * @param string|null $spin The SPIN of the Regulated SuperFund. This field has been deprecated. It will only be present for legacy superfunds. New superfunds will not have a SPIN value. The USI field should be used instead of SPIN.
     *
     * @return $this
     */
    public function setSpin($spin)
    {

        $this->container['spin'] = $spin;

        return $this;
    }



    /**
     * Gets usi
     *
     * @return string|null
     */
    public function getUsi()
    {
        return $this->container['usi'];
    }

    /**
     * Sets usi
     *
     * @param string|null $usi The USI of the Regulated SuperFund
     *
     * @return $this
     */
    public function setUsi($usi)
    {

        $this->container['usi'] = $usi;

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
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets validation_errors
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


