<?php
/**
 * StatementLineResponse
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
 * StatementLineResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatementLineResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatementLineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statement_line_id' => 'string',
        'posted_date' => '\DateTime',
        'payee' => 'string',
        'reference' => 'string',
        'notes' => 'string',
        'cheque_no' => 'string',
        'amount' => 'double',
        'transaction_date' => '\DateTime',
        'type' => 'string',
        'is_reconciled' => 'bool',
        'is_duplicate' => 'bool',
        'is_deleted' => 'bool',
        'payments' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\PaymentResponse[]',
        'bank_transactions' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BankTransactionResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statement_line_id' => 'uuid',
        'posted_date' => 'date',
        'payee' => null,
        'reference' => null,
        'notes' => null,
        'cheque_no' => null,
        'amount' => 'double',
        'transaction_date' => 'date',
        'type' => null,
        'is_reconciled' => null,
        'is_duplicate' => null,
        'is_deleted' => null,
        'payments' => null,
        'bank_transactions' => null
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
        'statement_line_id' => 'statementLineId',
        'posted_date' => 'postedDate',
        'payee' => 'payee',
        'reference' => 'reference',
        'notes' => 'notes',
        'cheque_no' => 'chequeNo',
        'amount' => 'amount',
        'transaction_date' => 'transactionDate',
        'type' => 'type',
        'is_reconciled' => 'isReconciled',
        'is_duplicate' => 'isDuplicate',
        'is_deleted' => 'isDeleted',
        'payments' => 'payments',
        'bank_transactions' => 'bankTransactions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statement_line_id' => 'setStatementLineId',
        'posted_date' => 'setPostedDate',
        'payee' => 'setPayee',
        'reference' => 'setReference',
        'notes' => 'setNotes',
        'cheque_no' => 'setChequeNo',
        'amount' => 'setAmount',
        'transaction_date' => 'setTransactionDate',
        'type' => 'setType',
        'is_reconciled' => 'setIsReconciled',
        'is_duplicate' => 'setIsDuplicate',
        'is_deleted' => 'setIsDeleted',
        'payments' => 'setPayments',
        'bank_transactions' => 'setBankTransactions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statement_line_id' => 'getStatementLineId',
        'posted_date' => 'getPostedDate',
        'payee' => 'getPayee',
        'reference' => 'getReference',
        'notes' => 'getNotes',
        'cheque_no' => 'getChequeNo',
        'amount' => 'getAmount',
        'transaction_date' => 'getTransactionDate',
        'type' => 'getType',
        'is_reconciled' => 'getIsReconciled',
        'is_duplicate' => 'getIsDuplicate',
        'is_deleted' => 'getIsDeleted',
        'payments' => 'getPayments',
        'bank_transactions' => 'getBankTransactions'
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
        $this->container['statement_line_id'] = isset($data['statement_line_id']) ? $data['statement_line_id'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['payee'] = isset($data['payee']) ? $data['payee'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['cheque_no'] = isset($data['cheque_no']) ? $data['cheque_no'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['is_reconciled'] = isset($data['is_reconciled']) ? $data['is_reconciled'] : null;
        $this->container['is_duplicate'] = isset($data['is_duplicate']) ? $data['is_duplicate'] : null;
        $this->container['is_deleted'] = isset($data['is_deleted']) ? $data['is_deleted'] : null;
        $this->container['payments'] = isset($data['payments']) ? $data['payments'] : null;
        $this->container['bank_transactions'] = isset($data['bank_transactions']) ? $data['bank_transactions'] : null;
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
     * Gets statement_line_id
     *
     * @return string|null
     */
    public function getStatementLineId()
    {
        return $this->container['statement_line_id'];
    }

    /**
     * Sets statement_line_id
     *
     * @param string|null $statement_line_id Xero Identifier of statement line
     *
     * @return $this
     */
    public function setStatementLineId($statement_line_id)
    {

        $this->container['statement_line_id'] = $statement_line_id;

        return $this;
    }



    /**
     * Gets posted_date
     *
     * @return \DateTime|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTime|null $posted_date Date of when statement line was posted
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {

        $this->container['posted_date'] = $posted_date;

        return $this;
    }



    /**
     * Gets payee
     *
     * @return string|null
     */
    public function getPayee()
    {
        return $this->container['payee'];
    }

    /**
     * Sets payee
     *
     * @param string|null $payee Payee description of statement line
     *
     * @return $this
     */
    public function setPayee($payee)
    {

        $this->container['payee'] = $payee;

        return $this;
    }



    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Reference description of statement line
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

        return $this;
    }



    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes description of statement line
     *
     * @return $this
     */
    public function setNotes($notes)
    {

        $this->container['notes'] = $notes;

        return $this;
    }



    /**
     * Gets cheque_no
     *
     * @return string|null
     */
    public function getChequeNo()
    {
        return $this->container['cheque_no'];
    }

    /**
     * Sets cheque_no
     *
     * @param string|null $cheque_no Cheque number of statement line
     *
     * @return $this
     */
    public function setChequeNo($cheque_no)
    {

        $this->container['cheque_no'] = $cheque_no;

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
     * @param double|null $amount Amount of statement line
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets transaction_date
     *
     * @return \DateTime|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime|null $transaction_date Transaction date of statement line
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {

        $this->container['transaction_date'] = $transaction_date;

        return $this;
    }



    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of statement line
     *
     * @return $this
     */
    public function setType($type)
    {

        $this->container['type'] = $type;

        return $this;
    }



    /**
     * Gets is_reconciled
     *
     * @return bool|null
     */
    public function getIsReconciled()
    {
        return $this->container['is_reconciled'];
    }

    /**
     * Sets is_reconciled
     *
     * @param bool|null $is_reconciled Boolean to show if statement line is reconciled
     *
     * @return $this
     */
    public function setIsReconciled($is_reconciled)
    {

        $this->container['is_reconciled'] = $is_reconciled;

        return $this;
    }



    /**
     * Gets is_duplicate
     *
     * @return bool|null
     */
    public function getIsDuplicate()
    {
        return $this->container['is_duplicate'];
    }

    /**
     * Sets is_duplicate
     *
     * @param bool|null $is_duplicate Boolean to show if statement line is duplicate
     *
     * @return $this
     */
    public function setIsDuplicate($is_duplicate)
    {

        $this->container['is_duplicate'] = $is_duplicate;

        return $this;
    }



    /**
     * Gets is_deleted
     *
     * @return bool|null
     */
    public function getIsDeleted()
    {
        return $this->container['is_deleted'];
    }

    /**
     * Sets is_deleted
     *
     * @param bool|null $is_deleted Boolean to show if statement line is deleted
     *
     * @return $this
     */
    public function setIsDeleted($is_deleted)
    {

        $this->container['is_deleted'] = $is_deleted;

        return $this;
    }



    /**
     * Gets payments
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\PaymentResponse[]|null
     */
    public function getPayments()
    {
        return $this->container['payments'];
    }

    /**
     * Sets payments
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\PaymentResponse[]|null $payments List of payments associated with reconciled statement lines
     *
     * @return $this
     */
    public function setPayments($payments)
    {

        $this->container['payments'] = $payments;

        return $this;
    }



    /**
     * Gets bank_transactions
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BankTransactionResponse[]|null
     */
    public function getBankTransactions()
    {
        return $this->container['bank_transactions'];
    }

    /**
     * Sets bank_transactions
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\BankTransactionResponse[]|null $bank_transactions List of bank transactions associated with reconciled statement lines
     *
     * @return $this
     */
    public function setBankTransactions($bank_transactions)
    {

        $this->container['bank_transactions'] = $bank_transactions;

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


