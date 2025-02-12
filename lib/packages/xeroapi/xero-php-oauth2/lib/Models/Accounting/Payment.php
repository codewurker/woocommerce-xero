<?php
/**
 * Payment
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
 * Payment Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Payment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Payment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice',
        'credit_note' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote',
        'prepayment' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment',
        'overpayment' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment',
        'invoice_number' => 'string',
        'credit_note_number' => 'string',
        'batch_payment' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\BatchPayment',
        'account' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account',
        'code' => 'string',
        'date' => 'string',
        'currency_rate' => 'double',
        'amount' => 'double',
        'bank_amount' => 'double',
        'reference' => 'string',
        'is_reconciled' => 'bool',
        'status' => 'string',
        'payment_type' => 'string',
        'updated_date_utc' => 'string',
        'payment_id' => 'string',
        'batch_payment_id' => 'string',
        'bank_account_number' => 'string',
        'particulars' => 'string',
        'details' => 'string',
        'has_account' => 'bool',
        'has_validation_errors' => 'bool',
        'status_attribute_string' => 'string',
        'validation_errors' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]',
        'warnings' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'invoice' => null,
        'credit_note' => null,
        'prepayment' => null,
        'overpayment' => null,
        'invoice_number' => null,
        'credit_note_number' => null,
        'batch_payment' => null,
        'account' => null,
        'code' => null,
        'date' => null,
        'currency_rate' => 'double',
        'amount' => 'double',
        'bank_amount' => 'double',
        'reference' => null,
        'is_reconciled' => null,
        'status' => null,
        'payment_type' => null,
        'updated_date_utc' => null,
        'payment_id' => 'uuid',
        'batch_payment_id' => 'uuid',
        'bank_account_number' => null,
        'particulars' => null,
        'details' => null,
        'has_account' => null,
        'has_validation_errors' => null,
        'status_attribute_string' => null,
        'validation_errors' => null,
        'warnings' => null
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
        'invoice' => 'Invoice',
        'credit_note' => 'CreditNote',
        'prepayment' => 'Prepayment',
        'overpayment' => 'Overpayment',
        'invoice_number' => 'InvoiceNumber',
        'credit_note_number' => 'CreditNoteNumber',
        'batch_payment' => 'BatchPayment',
        'account' => 'Account',
        'code' => 'Code',
        'date' => 'Date',
        'currency_rate' => 'CurrencyRate',
        'amount' => 'Amount',
        'bank_amount' => 'BankAmount',
        'reference' => 'Reference',
        'is_reconciled' => 'IsReconciled',
        'status' => 'Status',
        'payment_type' => 'PaymentType',
        'updated_date_utc' => 'UpdatedDateUTC',
        'payment_id' => 'PaymentID',
        'batch_payment_id' => 'BatchPaymentID',
        'bank_account_number' => 'BankAccountNumber',
        'particulars' => 'Particulars',
        'details' => 'Details',
        'has_account' => 'HasAccount',
        'has_validation_errors' => 'HasValidationErrors',
        'status_attribute_string' => 'StatusAttributeString',
        'validation_errors' => 'ValidationErrors',
        'warnings' => 'Warnings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice' => 'setInvoice',
        'credit_note' => 'setCreditNote',
        'prepayment' => 'setPrepayment',
        'overpayment' => 'setOverpayment',
        'invoice_number' => 'setInvoiceNumber',
        'credit_note_number' => 'setCreditNoteNumber',
        'batch_payment' => 'setBatchPayment',
        'account' => 'setAccount',
        'code' => 'setCode',
        'date' => 'setDate',
        'currency_rate' => 'setCurrencyRate',
        'amount' => 'setAmount',
        'bank_amount' => 'setBankAmount',
        'reference' => 'setReference',
        'is_reconciled' => 'setIsReconciled',
        'status' => 'setStatus',
        'payment_type' => 'setPaymentType',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'payment_id' => 'setPaymentId',
        'batch_payment_id' => 'setBatchPaymentId',
        'bank_account_number' => 'setBankAccountNumber',
        'particulars' => 'setParticulars',
        'details' => 'setDetails',
        'has_account' => 'setHasAccount',
        'has_validation_errors' => 'setHasValidationErrors',
        'status_attribute_string' => 'setStatusAttributeString',
        'validation_errors' => 'setValidationErrors',
        'warnings' => 'setWarnings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice' => 'getInvoice',
        'credit_note' => 'getCreditNote',
        'prepayment' => 'getPrepayment',
        'overpayment' => 'getOverpayment',
        'invoice_number' => 'getInvoiceNumber',
        'credit_note_number' => 'getCreditNoteNumber',
        'batch_payment' => 'getBatchPayment',
        'account' => 'getAccount',
        'code' => 'getCode',
        'date' => 'getDate',
        'currency_rate' => 'getCurrencyRate',
        'amount' => 'getAmount',
        'bank_amount' => 'getBankAmount',
        'reference' => 'getReference',
        'is_reconciled' => 'getIsReconciled',
        'status' => 'getStatus',
        'payment_type' => 'getPaymentType',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'payment_id' => 'getPaymentId',
        'batch_payment_id' => 'getBatchPaymentId',
        'bank_account_number' => 'getBankAccountNumber',
        'particulars' => 'getParticulars',
        'details' => 'getDetails',
        'has_account' => 'getHasAccount',
        'has_validation_errors' => 'getHasValidationErrors',
        'status_attribute_string' => 'getStatusAttributeString',
        'validation_errors' => 'getValidationErrors',
        'warnings' => 'getWarnings'
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

    const STATUS_AUTHORISED = 'AUTHORISED';
    const STATUS_DELETED = 'DELETED';
    const PAYMENT_TYPE_ACCRECPAYMENT = 'ACCRECPAYMENT';
    const PAYMENT_TYPE_ACCPAYPAYMENT = 'ACCPAYPAYMENT';
    const PAYMENT_TYPE_ARCREDITPAYMENT = 'ARCREDITPAYMENT';
    const PAYMENT_TYPE_APCREDITPAYMENT = 'APCREDITPAYMENT';
    const PAYMENT_TYPE_AROVERPAYMENTPAYMENT = 'AROVERPAYMENTPAYMENT';
    const PAYMENT_TYPE_ARPREPAYMENTPAYMENT = 'ARPREPAYMENTPAYMENT';
    const PAYMENT_TYPE_APPREPAYMENTPAYMENT = 'APPREPAYMENTPAYMENT';
    const PAYMENT_TYPE_APOVERPAYMENTPAYMENT = 'APOVERPAYMENTPAYMENT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_AUTHORISED,
            self::STATUS_DELETED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentTypeAllowableValues()
    {
        return [
            self::PAYMENT_TYPE_ACCRECPAYMENT,
            self::PAYMENT_TYPE_ACCPAYPAYMENT,
            self::PAYMENT_TYPE_ARCREDITPAYMENT,
            self::PAYMENT_TYPE_APCREDITPAYMENT,
            self::PAYMENT_TYPE_AROVERPAYMENTPAYMENT,
            self::PAYMENT_TYPE_ARPREPAYMENTPAYMENT,
            self::PAYMENT_TYPE_APPREPAYMENTPAYMENT,
            self::PAYMENT_TYPE_APOVERPAYMENTPAYMENT,
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
        $this->container['invoice'] = isset($data['invoice']) ? $data['invoice'] : null;
        $this->container['credit_note'] = isset($data['credit_note']) ? $data['credit_note'] : null;
        $this->container['prepayment'] = isset($data['prepayment']) ? $data['prepayment'] : null;
        $this->container['overpayment'] = isset($data['overpayment']) ? $data['overpayment'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['credit_note_number'] = isset($data['credit_note_number']) ? $data['credit_note_number'] : null;
        $this->container['batch_payment'] = isset($data['batch_payment']) ? $data['batch_payment'] : null;
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['currency_rate'] = isset($data['currency_rate']) ? $data['currency_rate'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['bank_amount'] = isset($data['bank_amount']) ? $data['bank_amount'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['is_reconciled'] = isset($data['is_reconciled']) ? $data['is_reconciled'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['payment_id'] = isset($data['payment_id']) ? $data['payment_id'] : null;
        $this->container['batch_payment_id'] = isset($data['batch_payment_id']) ? $data['batch_payment_id'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['particulars'] = isset($data['particulars']) ? $data['particulars'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['has_account'] = isset($data['has_account']) ? $data['has_account'] : false;
        $this->container['has_validation_errors'] = isset($data['has_validation_errors']) ? $data['has_validation_errors'] : false;
        $this->container['status_attribute_string'] = isset($data['status_attribute_string']) ? $data['status_attribute_string'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
        $this->container['warnings'] = isset($data['warnings']) ? $data['warnings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($this->container['payment_type']) && !in_array($this->container['payment_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_type', must be one of '%s'",
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
     * Gets invoice
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice|null
     */
    public function getInvoice()
    {
        return $this->container['invoice'];
    }

    /**
     * Sets invoice
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Invoice|null $invoice invoice
     *
     * @return $this
     */
    public function setInvoice($invoice)
    {

        $this->container['invoice'] = $invoice;

        return $this;
    }



    /**
     * Gets credit_note
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote|null
     */
    public function getCreditNote()
    {
        return $this->container['credit_note'];
    }

    /**
     * Sets credit_note
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\CreditNote|null $credit_note credit_note
     *
     * @return $this
     */
    public function setCreditNote($credit_note)
    {

        $this->container['credit_note'] = $credit_note;

        return $this;
    }



    /**
     * Gets prepayment
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment|null
     */
    public function getPrepayment()
    {
        return $this->container['prepayment'];
    }

    /**
     * Sets prepayment
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Prepayment|null $prepayment prepayment
     *
     * @return $this
     */
    public function setPrepayment($prepayment)
    {

        $this->container['prepayment'] = $prepayment;

        return $this;
    }



    /**
     * Gets overpayment
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment|null
     */
    public function getOverpayment()
    {
        return $this->container['overpayment'];
    }

    /**
     * Sets overpayment
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Overpayment|null $overpayment overpayment
     *
     * @return $this
     */
    public function setOverpayment($overpayment)
    {

        $this->container['overpayment'] = $overpayment;

        return $this;
    }



    /**
     * Gets invoice_number
     *
     * @return string|null
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string|null $invoice_number Number of invoice or credit note you are applying payment to e.g.INV-4003
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {

        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }



    /**
     * Gets credit_note_number
     *
     * @return string|null
     */
    public function getCreditNoteNumber()
    {
        return $this->container['credit_note_number'];
    }

    /**
     * Sets credit_note_number
     *
     * @param string|null $credit_note_number Number of invoice or credit note you are applying payment to e.g. INV-4003
     *
     * @return $this
     */
    public function setCreditNoteNumber($credit_note_number)
    {

        $this->container['credit_note_number'] = $credit_note_number;

        return $this;
    }



    /**
     * Gets batch_payment
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\BatchPayment|null
     */
    public function getBatchPayment()
    {
        return $this->container['batch_payment'];
    }

    /**
     * Sets batch_payment
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\BatchPayment|null $batch_payment batch_payment
     *
     * @return $this
     */
    public function setBatchPayment($batch_payment)
    {

        $this->container['batch_payment'] = $batch_payment;

        return $this;
    }



    /**
     * Gets account
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account|null
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\Account|null $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {

        $this->container['account'] = $account;

        return $this;
    }



    /**
     * Gets code
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code Code of account you are using to make the payment e.g. 001 (note- not all accounts have a code value)
     *
     * @return $this
     */
    public function setCode($code)
    {

        $this->container['code'] = $code;

        return $this;
    }



    /**
     * Gets date
     *
     * @return string|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }
    public function getDateAsDate()
    {
      if ($this->getDate() != null) {
        return StringUtil::convertStringToDate($this->getDate());
      } else {
        throw new \Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets date
     *
     * @param string|null $date Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDate($date)
    {

        $this->container['date'] = $date;

        return $this;
    }
    /**
     * Sets date
     *
     * @param \DateTime |null $date Date the payment is being made (YYYY-MM-DD) e.g. 2009-09-06
     *
     * @return $this
     */
    public function setDateAsDate($date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($date->format('Y-m-d')." UTC") * 1000;
        $date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['date'] = $date;
      return $this;
    }



    /**
     * Gets currency_rate
     *
     * @return double|null
     */
    public function getCurrencyRate()
    {
        return $this->container['currency_rate'];
    }

    /**
     * Sets currency_rate
     *
     * @param double|null $currency_rate Exchange rate when payment is received. Only used for non base currency invoices and credit notes e.g. 0.7500
     *
     * @return $this
     */
    public function setCurrencyRate($currency_rate)
    {

        $this->container['currency_rate'] = $currency_rate;

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
     * @param double|null $amount The amount of the payment. Must be less than or equal to the outstanding amount owing on the invoice e.g. 200.00
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets bank_amount
     *
     * @return double|null
     */
    public function getBankAmount()
    {
        return $this->container['bank_amount'];
    }

    /**
     * Sets bank_amount
     *
     * @param double|null $bank_amount The amount of the payment in the currency of the bank account.
     *
     * @return $this
     */
    public function setBankAmount($bank_amount)
    {

        $this->container['bank_amount'] = $bank_amount;

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
     * @param string|null $reference An optional description for the payment e.g. Direct Debit
     *
     * @return $this
     */
    public function setReference($reference)
    {

        $this->container['reference'] = $reference;

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
     * @param bool|null $is_reconciled An optional parameter for the payment. A boolean indicating whether you would like the payment to be created as reconciled when using PUT, or whether a payment has been reconciled when using GET
     *
     * @return $this
     */
    public function setIsReconciled($is_reconciled)
    {

        $this->container['is_reconciled'] = $is_reconciled;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of the payment.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets payment_type
     *
     * @return string|null
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string|null $payment_type See Payment Types.
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $allowedValues = $this->getPaymentTypeAllowableValues();
        if (!is_null($payment_type) && !in_array($payment_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['payment_type'] = $payment_type;

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
     * @param string|null $updated_date_utc UTC timestamp of last update to the payment
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets payment_id
     *
     * @return string|null
     */
    public function getPaymentId()
    {
        return $this->container['payment_id'];
    }

    /**
     * Sets payment_id
     *
     * @param string|null $payment_id The Xero identifier for an Payment e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setPaymentId($payment_id)
    {

        $this->container['payment_id'] = $payment_id;

        return $this;
    }



    /**
     * Gets batch_payment_id
     *
     * @return string|null
     */
    public function getBatchPaymentId()
    {
        return $this->container['batch_payment_id'];
    }

    /**
     * Sets batch_payment_id
     *
     * @param string|null $batch_payment_id Present if the payment was created as part of a batch.
     *
     * @return $this
     */
    public function setBatchPaymentId($batch_payment_id)
    {

        $this->container['batch_payment_id'] = $batch_payment_id;

        return $this;
    }



    /**
     * Gets bank_account_number
     *
     * @return string|null
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string|null $bank_account_number The suppliers bank account number the payment is being made to
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {

        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }



    /**
     * Gets particulars
     *
     * @return string|null
     */
    public function getParticulars()
    {
        return $this->container['particulars'];
    }

    /**
     * Sets particulars
     *
     * @param string|null $particulars The suppliers bank account number the payment is being made to
     *
     * @return $this
     */
    public function setParticulars($particulars)
    {

        $this->container['particulars'] = $particulars;

        return $this;
    }



    /**
     * Gets details
     *
     * @return string|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param string|null $details The information to appear on the supplier's bank account
     *
     * @return $this
     */
    public function setDetails($details)
    {

        $this->container['details'] = $details;

        return $this;
    }



    /**
     * Gets has_account
     *
     * @return bool|null
     */
    public function getHasAccount()
    {
        return $this->container['has_account'];
    }

    /**
     * Sets has_account
     *
     * @param bool|null $has_account A boolean to indicate if a contact has an validation errors
     *
     * @return $this
     */
    public function setHasAccount($has_account)
    {

        $this->container['has_account'] = $has_account;

        return $this;
    }



    /**
     * Gets has_validation_errors
     *
     * @return bool|null
     */
    public function getHasValidationErrors()
    {
        return $this->container['has_validation_errors'];
    }

    /**
     * Sets has_validation_errors
     *
     * @param bool|null $has_validation_errors A boolean to indicate if a contact has an validation errors
     *
     * @return $this
     */
    public function setHasValidationErrors($has_validation_errors)
    {

        $this->container['has_validation_errors'] = $has_validation_errors;

        return $this;
    }



    /**
     * Gets status_attribute_string
     *
     * @return string|null
     */
    public function getStatusAttributeString()
    {
        return $this->container['status_attribute_string'];
    }

    /**
     * Sets status_attribute_string
     *
     * @param string|null $status_attribute_string A string to indicate if a invoice status
     *
     * @return $this
     */
    public function setStatusAttributeString($status_attribute_string)
    {

        $this->container['status_attribute_string'] = $status_attribute_string;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }



    /**
     * Gets warnings
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getWarnings()
    {
        return $this->container['warnings'];
    }

    /**
     * Sets warnings
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $warnings Displays array of warning messages from the API
     *
     * @return $this
     */
    public function setWarnings($warnings)
    {

        $this->container['warnings'] = $warnings;

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


