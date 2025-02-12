<?php
/**
 * BankAccount
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
 * BankAccount Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BankAccount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankAccount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statement_text' => 'string',
        'account_name' => 'string',
        'bsb' => 'string',
        'account_number' => 'string',
        'remainder' => 'bool',
        'amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statement_text' => null,
        'account_name' => null,
        'bsb' => null,
        'account_number' => null,
        'remainder' => null,
        'amount' => 'double'
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
        'statement_text' => 'StatementText',
        'account_name' => 'AccountName',
        'bsb' => 'BSB',
        'account_number' => 'AccountNumber',
        'remainder' => 'Remainder',
        'amount' => 'Amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statement_text' => 'setStatementText',
        'account_name' => 'setAccountName',
        'bsb' => 'setBsb',
        'account_number' => 'setAccountNumber',
        'remainder' => 'setRemainder',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statement_text' => 'getStatementText',
        'account_name' => 'getAccountName',
        'bsb' => 'getBsb',
        'account_number' => 'getAccountNumber',
        'remainder' => 'getRemainder',
        'amount' => 'getAmount'
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
        $this->container['statement_text'] = isset($data['statement_text']) ? $data['statement_text'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['bsb'] = isset($data['bsb']) ? $data['bsb'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['remainder'] = isset($data['remainder']) ? $data['remainder'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
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
     * Gets statement_text
     *
     * @return string|null
     */
    public function getStatementText()
    {
        return $this->container['statement_text'];
    }

    /**
     * Sets statement_text
     *
     * @param string|null $statement_text The text that will appear on your employee's bank statement when they receive payment
     *
     * @return $this
     */
    public function setStatementText($statement_text)
    {

        $this->container['statement_text'] = $statement_text;

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
     * @param string|null $account_name The name of the account
     *
     * @return $this
     */
    public function setAccountName($account_name)
    {

        $this->container['account_name'] = $account_name;

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
     * @param string|null $bsb The BSB number of the account
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
     * @param string|null $account_number The account number
     *
     * @return $this
     */
    public function setAccountNumber($account_number)
    {

        $this->container['account_number'] = $account_number;

        return $this;
    }



    /**
     * Gets remainder
     *
     * @return bool|null
     */
    public function getRemainder()
    {
        return $this->container['remainder'];
    }

    /**
     * Sets remainder
     *
     * @param bool|null $remainder If this account is the Remaining bank account
     *
     * @return $this
     */
    public function setRemainder($remainder)
    {

        $this->container['remainder'] = $remainder;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount Fixed amounts (for example, if an employee wants to have $100 of their salary transferred to one account, and the remaining amount to another)
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

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


