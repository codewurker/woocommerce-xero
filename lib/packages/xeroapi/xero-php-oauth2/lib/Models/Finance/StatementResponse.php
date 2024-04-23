<?php
/**
 * StatementResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 25-March-2024 using Strauss.
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
 * StatementResponse Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StatementResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatementResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'statement_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'imported_date_time_utc' => '\DateTime',
        'import_source' => 'string',
        'start_balance' => 'double',
        'end_balance' => 'double',
        'indicative_start_balance' => 'double',
        'indicative_end_balance' => 'double',
        'statement_lines' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementLineResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'statement_id' => 'uuid',
        'start_date' => 'date',
        'end_date' => 'date',
        'imported_date_time_utc' => 'date-time',
        'import_source' => null,
        'start_balance' => 'double',
        'end_balance' => 'double',
        'indicative_start_balance' => 'double',
        'indicative_end_balance' => 'double',
        'statement_lines' => null
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
        'statement_id' => 'statementId',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'imported_date_time_utc' => 'importedDateTimeUtc',
        'import_source' => 'importSource',
        'start_balance' => 'startBalance',
        'end_balance' => 'endBalance',
        'indicative_start_balance' => 'indicativeStartBalance',
        'indicative_end_balance' => 'indicativeEndBalance',
        'statement_lines' => 'statementLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statement_id' => 'setStatementId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'imported_date_time_utc' => 'setImportedDateTimeUtc',
        'import_source' => 'setImportSource',
        'start_balance' => 'setStartBalance',
        'end_balance' => 'setEndBalance',
        'indicative_start_balance' => 'setIndicativeStartBalance',
        'indicative_end_balance' => 'setIndicativeEndBalance',
        'statement_lines' => 'setStatementLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statement_id' => 'getStatementId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'imported_date_time_utc' => 'getImportedDateTimeUtc',
        'import_source' => 'getImportSource',
        'start_balance' => 'getStartBalance',
        'end_balance' => 'getEndBalance',
        'indicative_start_balance' => 'getIndicativeStartBalance',
        'indicative_end_balance' => 'getIndicativeEndBalance',
        'statement_lines' => 'getStatementLines'
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
        $this->container['statement_id'] = isset($data['statement_id']) ? $data['statement_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['imported_date_time_utc'] = isset($data['imported_date_time_utc']) ? $data['imported_date_time_utc'] : null;
        $this->container['import_source'] = isset($data['import_source']) ? $data['import_source'] : null;
        $this->container['start_balance'] = isset($data['start_balance']) ? $data['start_balance'] : null;
        $this->container['end_balance'] = isset($data['end_balance']) ? $data['end_balance'] : null;
        $this->container['indicative_start_balance'] = isset($data['indicative_start_balance']) ? $data['indicative_start_balance'] : null;
        $this->container['indicative_end_balance'] = isset($data['indicative_end_balance']) ? $data['indicative_end_balance'] : null;
        $this->container['statement_lines'] = isset($data['statement_lines']) ? $data['statement_lines'] : null;
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
     * Gets statement_id
     *
     * @return string|null
     */
    public function getStatementId()
    {
        return $this->container['statement_id'];
    }

    /**
     * Sets statement_id
     *
     * @param string|null $statement_id Xero Identifier of statement
     *
     * @return $this
     */
    public function setStatementId($statement_id)
    {

        $this->container['statement_id'] = $statement_id;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Start date of statement
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }



    /**
     * Gets end_date
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime|null $end_date End date of statement
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {

        $this->container['end_date'] = $end_date;

        return $this;
    }



    /**
     * Gets imported_date_time_utc
     *
     * @return \DateTime|null
     */
    public function getImportedDateTimeUtc()
    {
        return $this->container['imported_date_time_utc'];
    }

    /**
     * Sets imported_date_time_utc
     *
     * @param \DateTime|null $imported_date_time_utc Utc date time of when the statement was imported in Xero
     *
     * @return $this
     */
    public function setImportedDateTimeUtc($imported_date_time_utc)
    {

        $this->container['imported_date_time_utc'] = $imported_date_time_utc;

        return $this;
    }



    /**
     * Gets import_source
     *
     * @return string|null
     */
    public function getImportSource()
    {
        return $this->container['import_source'];
    }

    /**
     * Sets import_source
     *
     * @param string|null $import_source Indicates the source of the statement data. Either imported from 1) direct bank feed OR 2) manual customer entry or upload. Manual import sources are STMTIMPORTSRC/MANUAL, STMTIMPORTSRC/CSV, STMTIMPORTSRC/OFX, Ofx or STMTIMPORTSRC/QIF. All other import sources are direct and, depending on the direct solution, may contain the name of the financial institution.
     *
     * @return $this
     */
    public function setImportSource($import_source)
    {

        $this->container['import_source'] = $import_source;

        return $this;
    }



    /**
     * Gets start_balance
     *
     * @return double|null
     */
    public function getStartBalance()
    {
        return $this->container['start_balance'];
    }

    /**
     * Sets start_balance
     *
     * @param double|null $start_balance Opening balance sourced from imported bank statements (if supplied). Note, for manually uploaded statements, this balance is also manual and usually not supplied. Where not supplied, the value will be 0.
     *
     * @return $this
     */
    public function setStartBalance($start_balance)
    {

        $this->container['start_balance'] = $start_balance;

        return $this;
    }



    /**
     * Gets end_balance
     *
     * @return double|null
     */
    public function getEndBalance()
    {
        return $this->container['end_balance'];
    }

    /**
     * Sets end_balance
     *
     * @param double|null $end_balance Closing balance sourced from imported bank statements (if supplied). Note, for manually uploaded statements, this balance is also manual and usually not supplied. Where not supplied, the value will be 0.
     *
     * @return $this
     */
    public function setEndBalance($end_balance)
    {

        $this->container['end_balance'] = $end_balance;

        return $this;
    }



    /**
     * Gets indicative_start_balance
     *
     * @return double|null
     */
    public function getIndicativeStartBalance()
    {
        return $this->container['indicative_start_balance'];
    }

    /**
     * Sets indicative_start_balance
     *
     * @param double|null $indicative_start_balance Opening statement balance calculated in Xero (= bank account conversion balance plus sum of imported bank statement lines). Note: If indicative statement balance doesn't match imported statement balance for the same date, either the conversion (opening at inception) balance in Xero is wrong or there's an error in the bank statement lines in Xero. Ref: https://central.xero.com/s/article/Compare-the-statement-balance-in-Xero-to-your-actual-bank-balance?userregion=true
     *
     * @return $this
     */
    public function setIndicativeStartBalance($indicative_start_balance)
    {

        $this->container['indicative_start_balance'] = $indicative_start_balance;

        return $this;
    }



    /**
     * Gets indicative_end_balance
     *
     * @return double|null
     */
    public function getIndicativeEndBalance()
    {
        return $this->container['indicative_end_balance'];
    }

    /**
     * Sets indicative_end_balance
     *
     * @param double|null $indicative_end_balance Closing statement balance calculated in Xero (= bank account conversion balance plus sum of imported bank statement lines). Note: If indicative statement balance doesn't match imported statement balance for the same date, either the conversion (opening at inception) balance in Xero is wrong or there's an error in the bank statement lines in Xero. Ref: https://central.xero.com/s/article/Compare-the-statement-balance-in-Xero-to-your-actual-bank-balance?userregion=true
     *
     * @return $this
     */
    public function setIndicativeEndBalance($indicative_end_balance)
    {

        $this->container['indicative_end_balance'] = $indicative_end_balance;

        return $this;
    }



    /**
     * Gets statement_lines
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementLineResponse[]|null
     */
    public function getStatementLines()
    {
        return $this->container['statement_lines'];
    }

    /**
     * Sets statement_lines
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\Finance\StatementLineResponse[]|null $statement_lines List of statement lines
     *
     * @return $this
     */
    public function setStatementLines($statement_lines)
    {

        $this->container['statement_lines'] = $statement_lines;

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


