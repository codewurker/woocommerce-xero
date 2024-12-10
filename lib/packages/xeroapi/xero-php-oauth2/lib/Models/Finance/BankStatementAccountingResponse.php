<?php
/**
 * BankStatementAccountingResponse
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
 * BankStatementAccountingResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankStatementAccountingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankStatementAccountingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bank_account_id' => 'string',
        'bank_account_name' => 'string',
        'bank_account_currency_code' => 'string',
        'statements' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bank_account_id' => 'uuid',
        'bank_account_name' => null,
        'bank_account_currency_code' => null,
        'statements' => null
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
        'bank_account_id' => 'bankAccountId',
        'bank_account_name' => 'bankAccountName',
        'bank_account_currency_code' => 'bankAccountCurrencyCode',
        'statements' => 'statements'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bank_account_id' => 'setBankAccountId',
        'bank_account_name' => 'setBankAccountName',
        'bank_account_currency_code' => 'setBankAccountCurrencyCode',
        'statements' => 'setStatements'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bank_account_id' => 'getBankAccountId',
        'bank_account_name' => 'getBankAccountName',
        'bank_account_currency_code' => 'getBankAccountCurrencyCode',
        'statements' => 'getStatements'
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
        $this->container['bank_account_id'] = isset($data['bank_account_id']) ? $data['bank_account_id'] : null;
        $this->container['bank_account_name'] = isset($data['bank_account_name']) ? $data['bank_account_name'] : null;
        $this->container['bank_account_currency_code'] = isset($data['bank_account_currency_code']) ? $data['bank_account_currency_code'] : null;
        $this->container['statements'] = isset($data['statements']) ? $data['statements'] : null;
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
     * Gets bank_account_id
     *
     * @return string|null
     */
    public function getBankAccountId()
    {
        return $this->container['bank_account_id'];
    }

    /**
     * Sets bank_account_id
     *
     * @param string|null $bank_account_id Xero Identifier of bank account
     *
     * @return $this
     */
    public function setBankAccountId($bank_account_id)
    {

        $this->container['bank_account_id'] = $bank_account_id;

        return $this;
    }



    /**
     * Gets bank_account_name
     *
     * @return string|null
     */
    public function getBankAccountName()
    {
        return $this->container['bank_account_name'];
    }

    /**
     * Sets bank_account_name
     *
     * @param string|null $bank_account_name Name of bank account
     *
     * @return $this
     */
    public function setBankAccountName($bank_account_name)
    {

        $this->container['bank_account_name'] = $bank_account_name;

        return $this;
    }



    /**
     * Gets bank_account_currency_code
     *
     * @return string|null
     */
    public function getBankAccountCurrencyCode()
    {
        return $this->container['bank_account_currency_code'];
    }

    /**
     * Sets bank_account_currency_code
     *
     * @param string|null $bank_account_currency_code Currency code of the bank account
     *
     * @return $this
     */
    public function setBankAccountCurrencyCode($bank_account_currency_code)
    {

        $this->container['bank_account_currency_code'] = $bank_account_currency_code;

        return $this;
    }



    /**
     * Gets statements
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementResponse[]|null
     */
    public function getStatements()
    {
        return $this->container['statements'];
    }

    /**
     * Sets statements
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementResponse[]|null $statements List of bank statements and linked accounting data for the requested period
     *
     * @return $this
     */
    public function setStatements($statements)
    {

        $this->container['statements'] = $statements;

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


