<?php
/**
 * EmployeeTax
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 *
 * @license MIT
 * Modified by woocommerce on 20-May-2024 using Strauss.
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
 * EmployeeTax Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EmployeeTax implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmployeeTax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ird_number' => 'string',
        'tax_code' => '\Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\TaxCode',
        'special_tax_rate_percentage' => 'double',
        'has_special_student_loan_rate' => 'bool',
        'special_student_loan_rate_percentage' => 'double',
        'is_eligible_for_kiwi_saver' => 'bool',
        'esct_rate_percentage' => 'double',
        'kiwi_saver_contributions' => 'string',
        'kiwi_saver_employee_contribution_rate_percentage' => 'double',
        'kiwi_saver_employer_contribution_rate_percentage' => 'double',
        'kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage' => 'double',
        'kiwi_saver_opt_out_date' => '\DateTime',
        'kiwi_saver_contribution_holiday_end_date' => '\DateTime',
        'has_student_loan_balance' => 'bool',
        'student_loan_balance' => 'double',
        'student_loan_as_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ird_number' => null,
        'tax_code' => null,
        'special_tax_rate_percentage' => 'double',
        'has_special_student_loan_rate' => null,
        'special_student_loan_rate_percentage' => 'double',
        'is_eligible_for_kiwi_saver' => null,
        'esct_rate_percentage' => 'double',
        'kiwi_saver_contributions' => null,
        'kiwi_saver_employee_contribution_rate_percentage' => 'double',
        'kiwi_saver_employer_contribution_rate_percentage' => 'double',
        'kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage' => 'double',
        'kiwi_saver_opt_out_date' => 'date',
        'kiwi_saver_contribution_holiday_end_date' => 'date',
        'has_student_loan_balance' => null,
        'student_loan_balance' => 'double',
        'student_loan_as_at' => 'date'
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
        'ird_number' => 'irdNumber',
        'tax_code' => 'taxCode',
        'special_tax_rate_percentage' => 'specialTaxRatePercentage',
        'has_special_student_loan_rate' => 'hasSpecialStudentLoanRate',
        'special_student_loan_rate_percentage' => 'specialStudentLoanRatePercentage',
        'is_eligible_for_kiwi_saver' => 'isEligibleForKiwiSaver',
        'esct_rate_percentage' => 'esctRatePercentage',
        'kiwi_saver_contributions' => 'kiwiSaverContributions',
        'kiwi_saver_employee_contribution_rate_percentage' => 'kiwiSaverEmployeeContributionRatePercentage',
        'kiwi_saver_employer_contribution_rate_percentage' => 'kiwiSaverEmployerContributionRatePercentage',
        'kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage' => 'kiwiSaverEmployerSalarySacrificeContributionRatePercentage',
        'kiwi_saver_opt_out_date' => 'kiwiSaverOptOutDate',
        'kiwi_saver_contribution_holiday_end_date' => 'kiwiSaverContributionHolidayEndDate',
        'has_student_loan_balance' => 'hasStudentLoanBalance',
        'student_loan_balance' => 'studentLoanBalance',
        'student_loan_as_at' => 'studentLoanAsAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ird_number' => 'setIrdNumber',
        'tax_code' => 'setTaxCode',
        'special_tax_rate_percentage' => 'setSpecialTaxRatePercentage',
        'has_special_student_loan_rate' => 'setHasSpecialStudentLoanRate',
        'special_student_loan_rate_percentage' => 'setSpecialStudentLoanRatePercentage',
        'is_eligible_for_kiwi_saver' => 'setIsEligibleForKiwiSaver',
        'esct_rate_percentage' => 'setEsctRatePercentage',
        'kiwi_saver_contributions' => 'setKiwiSaverContributions',
        'kiwi_saver_employee_contribution_rate_percentage' => 'setKiwiSaverEmployeeContributionRatePercentage',
        'kiwi_saver_employer_contribution_rate_percentage' => 'setKiwiSaverEmployerContributionRatePercentage',
        'kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage' => 'setKiwiSaverEmployerSalarySacrificeContributionRatePercentage',
        'kiwi_saver_opt_out_date' => 'setKiwiSaverOptOutDate',
        'kiwi_saver_contribution_holiday_end_date' => 'setKiwiSaverContributionHolidayEndDate',
        'has_student_loan_balance' => 'setHasStudentLoanBalance',
        'student_loan_balance' => 'setStudentLoanBalance',
        'student_loan_as_at' => 'setStudentLoanAsAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ird_number' => 'getIrdNumber',
        'tax_code' => 'getTaxCode',
        'special_tax_rate_percentage' => 'getSpecialTaxRatePercentage',
        'has_special_student_loan_rate' => 'getHasSpecialStudentLoanRate',
        'special_student_loan_rate_percentage' => 'getSpecialStudentLoanRatePercentage',
        'is_eligible_for_kiwi_saver' => 'getIsEligibleForKiwiSaver',
        'esct_rate_percentage' => 'getEsctRatePercentage',
        'kiwi_saver_contributions' => 'getKiwiSaverContributions',
        'kiwi_saver_employee_contribution_rate_percentage' => 'getKiwiSaverEmployeeContributionRatePercentage',
        'kiwi_saver_employer_contribution_rate_percentage' => 'getKiwiSaverEmployerContributionRatePercentage',
        'kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage' => 'getKiwiSaverEmployerSalarySacrificeContributionRatePercentage',
        'kiwi_saver_opt_out_date' => 'getKiwiSaverOptOutDate',
        'kiwi_saver_contribution_holiday_end_date' => 'getKiwiSaverContributionHolidayEndDate',
        'has_student_loan_balance' => 'getHasStudentLoanBalance',
        'student_loan_balance' => 'getStudentLoanBalance',
        'student_loan_as_at' => 'getStudentLoanAsAt'
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

    const KIWI_SAVER_CONTRIBUTIONS_MAKE_CONTRIBUTIONS = 'MakeContributions';
    const KIWI_SAVER_CONTRIBUTIONS_OPT_OUT = 'OptOut';
    const KIWI_SAVER_CONTRIBUTIONS_ON_A_CONTRIBUTIONS_HOLIDAY = 'OnAContributionsHoliday';
    const KIWI_SAVER_CONTRIBUTIONS_ON_A_SAVINGS_SUSPENSION = 'OnASavingsSuspension';
    const KIWI_SAVER_CONTRIBUTIONS_NOT_CURRENTLY_A_KIWI_SAVER_MEMBER = 'NotCurrentlyAKiwiSaverMember';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getKiwiSaverContributionsAllowableValues()
    {
        return [
            self::KIWI_SAVER_CONTRIBUTIONS_MAKE_CONTRIBUTIONS,
            self::KIWI_SAVER_CONTRIBUTIONS_OPT_OUT,
            self::KIWI_SAVER_CONTRIBUTIONS_ON_A_CONTRIBUTIONS_HOLIDAY,
            self::KIWI_SAVER_CONTRIBUTIONS_ON_A_SAVINGS_SUSPENSION,
            self::KIWI_SAVER_CONTRIBUTIONS_NOT_CURRENTLY_A_KIWI_SAVER_MEMBER,
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
        $this->container['ird_number'] = isset($data['ird_number']) ? $data['ird_number'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['special_tax_rate_percentage'] = isset($data['special_tax_rate_percentage']) ? $data['special_tax_rate_percentage'] : null;
        $this->container['has_special_student_loan_rate'] = isset($data['has_special_student_loan_rate']) ? $data['has_special_student_loan_rate'] : null;
        $this->container['special_student_loan_rate_percentage'] = isset($data['special_student_loan_rate_percentage']) ? $data['special_student_loan_rate_percentage'] : null;
        $this->container['is_eligible_for_kiwi_saver'] = isset($data['is_eligible_for_kiwi_saver']) ? $data['is_eligible_for_kiwi_saver'] : null;
        $this->container['esct_rate_percentage'] = isset($data['esct_rate_percentage']) ? $data['esct_rate_percentage'] : null;
        $this->container['kiwi_saver_contributions'] = isset($data['kiwi_saver_contributions']) ? $data['kiwi_saver_contributions'] : null;
        $this->container['kiwi_saver_employee_contribution_rate_percentage'] = isset($data['kiwi_saver_employee_contribution_rate_percentage']) ? $data['kiwi_saver_employee_contribution_rate_percentage'] : null;
        $this->container['kiwi_saver_employer_contribution_rate_percentage'] = isset($data['kiwi_saver_employer_contribution_rate_percentage']) ? $data['kiwi_saver_employer_contribution_rate_percentage'] : null;
        $this->container['kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage'] = isset($data['kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage']) ? $data['kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage'] : null;
        $this->container['kiwi_saver_opt_out_date'] = isset($data['kiwi_saver_opt_out_date']) ? $data['kiwi_saver_opt_out_date'] : null;
        $this->container['kiwi_saver_contribution_holiday_end_date'] = isset($data['kiwi_saver_contribution_holiday_end_date']) ? $data['kiwi_saver_contribution_holiday_end_date'] : null;
        $this->container['has_student_loan_balance'] = isset($data['has_student_loan_balance']) ? $data['has_student_loan_balance'] : null;
        $this->container['student_loan_balance'] = isset($data['student_loan_balance']) ? $data['student_loan_balance'] : null;
        $this->container['student_loan_as_at'] = isset($data['student_loan_as_at']) ? $data['student_loan_as_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getKiwiSaverContributionsAllowableValues();
        if (!is_null($this->container['kiwi_saver_contributions']) && !in_array($this->container['kiwi_saver_contributions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'kiwi_saver_contributions', must be one of '%s'",
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
     * Gets ird_number
     *
     * @return string|null
     */
    public function getIrdNumber()
    {
        return $this->container['ird_number'];
    }

    /**
     * Sets ird_number
     *
     * @param string|null $ird_number The IRD Number.
     *
     * @return $this
     */
    public function setIrdNumber($ird_number)
    {

        $this->container['ird_number'] = $ird_number;

        return $this;
    }



    /**
     * Gets tax_code
     *
     * @return \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\TaxCode|null
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     *
     * @param \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\Models\PayrollNz\TaxCode|null $tax_code tax_code
     *
     * @return $this
     */
    public function setTaxCode($tax_code)
    {

        $this->container['tax_code'] = $tax_code;

        return $this;
    }



    /**
     * Gets special_tax_rate_percentage
     *
     * @return double|null
     */
    public function getSpecialTaxRatePercentage()
    {
        return $this->container['special_tax_rate_percentage'];
    }

    /**
     * Sets special_tax_rate_percentage
     *
     * @param double|null $special_tax_rate_percentage Special tax rate percentage.
     *
     * @return $this
     */
    public function setSpecialTaxRatePercentage($special_tax_rate_percentage)
    {

        $this->container['special_tax_rate_percentage'] = $special_tax_rate_percentage;

        return $this;
    }



    /**
     * Gets has_special_student_loan_rate
     *
     * @return bool|null
     */
    public function getHasSpecialStudentLoanRate()
    {
        return $this->container['has_special_student_loan_rate'];
    }

    /**
     * Sets has_special_student_loan_rate
     *
     * @param bool|null $has_special_student_loan_rate Does the employee has a special student loan rate?
     *
     * @return $this
     */
    public function setHasSpecialStudentLoanRate($has_special_student_loan_rate)
    {

        $this->container['has_special_student_loan_rate'] = $has_special_student_loan_rate;

        return $this;
    }



    /**
     * Gets special_student_loan_rate_percentage
     *
     * @return double|null
     */
    public function getSpecialStudentLoanRatePercentage()
    {
        return $this->container['special_student_loan_rate_percentage'];
    }

    /**
     * Sets special_student_loan_rate_percentage
     *
     * @param double|null $special_student_loan_rate_percentage The employee student loan rate percentage.
     *
     * @return $this
     */
    public function setSpecialStudentLoanRatePercentage($special_student_loan_rate_percentage)
    {

        $this->container['special_student_loan_rate_percentage'] = $special_student_loan_rate_percentage;

        return $this;
    }



    /**
     * Gets is_eligible_for_kiwi_saver
     *
     * @return bool|null
     */
    public function getIsEligibleForKiwiSaver()
    {
        return $this->container['is_eligible_for_kiwi_saver'];
    }

    /**
     * Sets is_eligible_for_kiwi_saver
     *
     * @param bool|null $is_eligible_for_kiwi_saver The employee eligibility for KiwiSaver.
     *
     * @return $this
     */
    public function setIsEligibleForKiwiSaver($is_eligible_for_kiwi_saver)
    {

        $this->container['is_eligible_for_kiwi_saver'] = $is_eligible_for_kiwi_saver;

        return $this;
    }



    /**
     * Gets esct_rate_percentage
     *
     * @return double|null
     */
    public function getEsctRatePercentage()
    {
        return $this->container['esct_rate_percentage'];
    }

    /**
     * Sets esct_rate_percentage
     *
     * @param double|null $esct_rate_percentage Employer superannuation contribution tax rate.
     *
     * @return $this
     */
    public function setEsctRatePercentage($esct_rate_percentage)
    {

        $this->container['esct_rate_percentage'] = $esct_rate_percentage;

        return $this;
    }



    /**
     * Gets kiwi_saver_contributions
     *
     * @return string|null
     */
    public function getKiwiSaverContributions()
    {
        return $this->container['kiwi_saver_contributions'];
    }

    /**
     * Sets kiwi_saver_contributions
     *
     * @param string|null $kiwi_saver_contributions Contribution Option which can be 'MakeContributions' 'OptOut', 'OnAContributionsHoliday', 'OnASavingsSuspension', 'NotCurrentlyAKiwiSaverMember' for employees without a KiwiSaver membership
     *
     * @return $this
     */
    public function setKiwiSaverContributions($kiwi_saver_contributions)
    {
        $allowedValues = $this->getKiwiSaverContributionsAllowableValues();
        if (!is_null($kiwi_saver_contributions) && !in_array($kiwi_saver_contributions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'kiwi_saver_contributions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['kiwi_saver_contributions'] = $kiwi_saver_contributions;

        return $this;
    }



    /**
     * Gets kiwi_saver_employee_contribution_rate_percentage
     *
     * @return double|null
     */
    public function getKiwiSaverEmployeeContributionRatePercentage()
    {
        return $this->container['kiwi_saver_employee_contribution_rate_percentage'];
    }

    /**
     * Sets kiwi_saver_employee_contribution_rate_percentage
     *
     * @param double|null $kiwi_saver_employee_contribution_rate_percentage Employee Contribution percentage.
     *
     * @return $this
     */
    public function setKiwiSaverEmployeeContributionRatePercentage($kiwi_saver_employee_contribution_rate_percentage)
    {

        $this->container['kiwi_saver_employee_contribution_rate_percentage'] = $kiwi_saver_employee_contribution_rate_percentage;

        return $this;
    }



    /**
     * Gets kiwi_saver_employer_contribution_rate_percentage
     *
     * @return double|null
     */
    public function getKiwiSaverEmployerContributionRatePercentage()
    {
        return $this->container['kiwi_saver_employer_contribution_rate_percentage'];
    }

    /**
     * Sets kiwi_saver_employer_contribution_rate_percentage
     *
     * @param double|null $kiwi_saver_employer_contribution_rate_percentage Employer Contribution percentage.
     *
     * @return $this
     */
    public function setKiwiSaverEmployerContributionRatePercentage($kiwi_saver_employer_contribution_rate_percentage)
    {

        $this->container['kiwi_saver_employer_contribution_rate_percentage'] = $kiwi_saver_employer_contribution_rate_percentage;

        return $this;
    }



    /**
     * Gets kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage
     *
     * @return double|null
     */
    public function getKiwiSaverEmployerSalarySacrificeContributionRatePercentage()
    {
        return $this->container['kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage'];
    }

    /**
     * Sets kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage
     *
     * @param double|null $kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage Employer Contribution through Salary Sacrifice percentage.
     *
     * @return $this
     */
    public function setKiwiSaverEmployerSalarySacrificeContributionRatePercentage($kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage)
    {

        $this->container['kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage'] = $kiwi_saver_employer_salary_sacrifice_contribution_rate_percentage;

        return $this;
    }



    /**
     * Gets kiwi_saver_opt_out_date
     *
     * @return \DateTime|null
     */
    public function getKiwiSaverOptOutDate()
    {
        return $this->container['kiwi_saver_opt_out_date'];
    }

    /**
     * Sets kiwi_saver_opt_out_date
     *
     * @param \DateTime|null $kiwi_saver_opt_out_date Opt Out Date.
     *
     * @return $this
     */
    public function setKiwiSaverOptOutDate($kiwi_saver_opt_out_date)
    {

        $this->container['kiwi_saver_opt_out_date'] = $kiwi_saver_opt_out_date;

        return $this;
    }



    /**
     * Gets kiwi_saver_contribution_holiday_end_date
     *
     * @return \DateTime|null
     */
    public function getKiwiSaverContributionHolidayEndDate()
    {
        return $this->container['kiwi_saver_contribution_holiday_end_date'];
    }

    /**
     * Sets kiwi_saver_contribution_holiday_end_date
     *
     * @param \DateTime|null $kiwi_saver_contribution_holiday_end_date Contribution holiday expiry date or end date.
     *
     * @return $this
     */
    public function setKiwiSaverContributionHolidayEndDate($kiwi_saver_contribution_holiday_end_date)
    {

        $this->container['kiwi_saver_contribution_holiday_end_date'] = $kiwi_saver_contribution_holiday_end_date;

        return $this;
    }



    /**
     * Gets has_student_loan_balance
     *
     * @return bool|null
     */
    public function getHasStudentLoanBalance()
    {
        return $this->container['has_student_loan_balance'];
    }

    /**
     * Sets has_student_loan_balance
     *
     * @param bool|null $has_student_loan_balance Does the employee have a remaining student loan balance? Set a remaining balance if you have received a letter from IR.
     *
     * @return $this
     */
    public function setHasStudentLoanBalance($has_student_loan_balance)
    {

        $this->container['has_student_loan_balance'] = $has_student_loan_balance;

        return $this;
    }



    /**
     * Gets student_loan_balance
     *
     * @return double|null
     */
    public function getStudentLoanBalance()
    {
        return $this->container['student_loan_balance'];
    }

    /**
     * Sets student_loan_balance
     *
     * @param double|null $student_loan_balance The employee's student loan balance shown on the letter from IR.
     *
     * @return $this
     */
    public function setStudentLoanBalance($student_loan_balance)
    {

        $this->container['student_loan_balance'] = $student_loan_balance;

        return $this;
    }



    /**
     * Gets student_loan_as_at
     *
     * @return \DateTime|null
     */
    public function getStudentLoanAsAt()
    {
        return $this->container['student_loan_as_at'];
    }

    /**
     * Sets student_loan_as_at
     *
     * @param \DateTime|null $student_loan_as_at The date of the letter from IR.
     *
     * @return $this
     */
    public function setStudentLoanAsAt($student_loan_as_at)
    {

        $this->container['student_loan_as_at'] = $student_loan_as_at;

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


