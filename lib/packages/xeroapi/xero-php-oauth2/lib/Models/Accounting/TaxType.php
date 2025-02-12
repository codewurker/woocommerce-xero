<?php
/**
 * TaxType
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
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\AccountingObjectSerializer;
use \Automattic\WooCommerce\Xero\Vendor\XeroAPI\XeroPHP\StringUtil;
use ReturnTypeWillChange;

/**
 * TaxType Class Doc Comment
 *
 * @category Class
 * @description See Tax Types – can only be used on update calls
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TaxType
{
    /**
     * Possible values of this enum
     */
    const OUTPUT = 'OUTPUT';
    const INPUT = 'INPUT';
    const CAPEXINPUT = 'CAPEXINPUT';
    const EXEMPTEXPORT = 'EXEMPTEXPORT';
    const EXEMPTEXPENSES = 'EXEMPTEXPENSES';
    const EXEMPTCAPITAL = 'EXEMPTCAPITAL';
    const EXEMPTOUTPUT = 'EXEMPTOUTPUT';
    const INPUTTAXED = 'INPUTTAXED';
    const BASEXCLUDED = 'BASEXCLUDED';
    const GSTONCAPIMPORTS = 'GSTONCAPIMPORTS';
    const GSTONIMPORTS = 'GSTONIMPORTS';
    const NONE = 'NONE';
    const INPUT2 = 'INPUT2';
    const ZERORATED = 'ZERORATED';
    const OUTPUT2 = 'OUTPUT2';
    const CAPEXINPUT2 = 'CAPEXINPUT2';
    const CAPEXOUTPUT = 'CAPEXOUTPUT';
    const CAPEXOUTPUT2 = 'CAPEXOUTPUT2';
    const CAPEXSRINPUT = 'CAPEXSRINPUT';
    const CAPEXSROUTPUT = 'CAPEXSROUTPUT';
    const ECACQUISITIONS = 'ECACQUISITIONS';
    const ECZRINPUT = 'ECZRINPUT';
    const ECZROUTPUT = 'ECZROUTPUT';
    const ECZROUTPUTSERVICES = 'ECZROUTPUTSERVICES';
    const EXEMPTINPUT = 'EXEMPTINPUT';
    const REVERSECHARGES = 'REVERSECHARGES';
    const RRINPUT = 'RRINPUT';
    const RROUTPUT = 'RROUTPUT';
    const SRINPUT = 'SRINPUT';
    const SROUTPUT = 'SROUTPUT';
    const ZERORATEDINPUT = 'ZERORATEDINPUT';
    const ZERORATEDOUTPUT = 'ZERORATEDOUTPUT';
    const BLINPUT = 'BLINPUT';
    const DSOUTPUT = 'DSOUTPUT';
    const EPINPUT = 'EPINPUT';
    const ES33_OUTPUT = 'ES33OUTPUT';
    const ESN33_OUTPUT = 'ESN33OUTPUT';
    const IGDSINPUT2 = 'IGDSINPUT2';
    const IMINPUT2 = 'IMINPUT2';
    const MEINPUT = 'MEINPUT';
    const NRINPUT = 'NRINPUT';
    const OPINPUT = 'OPINPUT';
    const OSOUTPUT = 'OSOUTPUT';
    const TXESSINPUT = 'TXESSINPUT';
    const TXN33_INPUT = 'TXN33INPUT';
    const TXPETINPUT = 'TXPETINPUT';
    const TXREINPUT = 'TXREINPUT';
    const INPUT3 = 'INPUT3';
    const INPUT4 = 'INPUT4';
    const OUTPUT3 = 'OUTPUT3';
    const OUTPUT4 = 'OUTPUT4';
    const SROUTPUT2 = 'SROUTPUT2';
    const TXCA = 'TXCA';
    const SRCAS = 'SRCAS';
    const BLINPUT2 = 'BLINPUT2';
    const DRCHARGESUPPLY20 = 'DRCHARGESUPPLY20';
    const DRCHARGE20 = 'DRCHARGE20';
    const DRCHARGESUPPLY5 = 'DRCHARGESUPPLY5';
    const DRCHARGE5 = 'DRCHARGE5';
    const BADDEBTRELIEF = 'BADDEBTRELIEF';
    const IGDSINPUT3 = 'IGDSINPUT3';
    const SROVR = 'SROVR';
    const TOURISTREFUND = 'TOURISTREFUND';
    const TXRCN33 = 'TXRCN33';
    const TXRCRE = 'TXRCRE';
    const TXRCESS = 'TXRCESS';
    const TXRCTS = 'TXRCTS';
    const OUTPUTY23 = 'OUTPUTY23';
    const DSOUTPUTY23 = 'DSOUTPUTY23';
    const INPUTY23 = 'INPUTY23';
    const IMINPUT2_Y23 = 'IMINPUT2Y23';
    const IGDSINPUT2_Y23 = 'IGDSINPUT2Y23';
    const TXPETINPUTY23 = 'TXPETINPUTY23';
    const TXESSINPUTY23 = 'TXESSINPUTY23';
    const TXN33_INPUTY23 = 'TXN33INPUTY23';
    const TXREINPUTY23 = 'TXREINPUTY23';
    const TXCAY23 = 'TXCAY23';
    const BADDEBTRELIEFY23 = 'BADDEBTRELIEFY23';
    const IGDSINPUT3_Y23 = 'IGDSINPUT3Y23';
    const SROVRRSY23 = 'SROVRRSY23';
    const SROVRLVGY23 = 'SROVRLVGY23';
    const SRLVGY23 = 'SRLVGY23';
    const TXRCN33_Y23 = 'TXRCN33Y23';
    const TXRCREY23 = 'TXRCREY23';
    const TXRCESSY23 = 'TXRCESSY23';
    const TXRCTSY23 = 'TXRCTSY23';
    const IM = 'IM';
    const IMY23 = 'IMY23';
    const IMESS = 'IMESS';
    const IMESSY23 = 'IMESSY23';
    const IMN33 = 'IMN33';
    const IMN33_Y23 = 'IMN33Y23';
    const IMRE = 'IMRE';
    const IMREY23 = 'IMREY23';
    const BADDEBTRECOVERY = 'BADDEBTRECOVERY';
    const BADDEBTRECOVERYY23 = 'BADDEBTRECOVERYY23';
    const OUTPUTY24 = 'OUTPUTY24';
    const DSOUTPUTY24 = 'DSOUTPUTY24';
    const INPUTY24 = 'INPUTY24';
    const IGDSINPUT2_Y24 = 'IGDSINPUT2Y24';
    const TXPETINPUTY24 = 'TXPETINPUTY24';
    const TXESSINPUTY24 = 'TXESSINPUTY24';
    const TXN33_INPUTY24 = 'TXN33INPUTY24';
    const TXREINPUTY24 = 'TXREINPUTY24';
    const TXCAY24 = 'TXCAY24';
    const BADDEBTRELIEFY24 = 'BADDEBTRELIEFY24';
    const IGDSINPUT3_Y24 = 'IGDSINPUT3Y24';
    const SROVRRSY24 = 'SROVRRSY24';
    const SROVRLVGY24 = 'SROVRLVGY24';
    const SRLVGY24 = 'SRLVGY24';
    const TXRCTSY24 = 'TXRCTSY24';
    const TXRCESSY24 = 'TXRCESSY24';
    const TXRCN33_Y24 = 'TXRCN33Y24';
    const TXRCREY24 = 'TXRCREY24';
    const IMY24 = 'IMY24';
    const IMESSY24 = 'IMESSY24';
    const IMN33_Y24 = 'IMN33Y24';
    const IMREY24 = 'IMREY24';
    const BADDEBTRECOVERYY24 = 'BADDEBTRECOVERYY24';
    const OSOUTPUT2 = 'OSOUTPUT2';
    const BLINPUT3 = 'BLINPUT3';
    const BLINPUT3_Y23 = 'BLINPUT3Y23';
    const BLINPUT3_Y24 = 'BLINPUT3Y24';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::OUTPUT,
            self::INPUT,
            self::CAPEXINPUT,
            self::EXEMPTEXPORT,
            self::EXEMPTEXPENSES,
            self::EXEMPTCAPITAL,
            self::EXEMPTOUTPUT,
            self::INPUTTAXED,
            self::BASEXCLUDED,
            self::GSTONCAPIMPORTS,
            self::GSTONIMPORTS,
            self::NONE,
            self::INPUT2,
            self::ZERORATED,
            self::OUTPUT2,
            self::CAPEXINPUT2,
            self::CAPEXOUTPUT,
            self::CAPEXOUTPUT2,
            self::CAPEXSRINPUT,
            self::CAPEXSROUTPUT,
            self::ECACQUISITIONS,
            self::ECZRINPUT,
            self::ECZROUTPUT,
            self::ECZROUTPUTSERVICES,
            self::EXEMPTINPUT,
            self::REVERSECHARGES,
            self::RRINPUT,
            self::RROUTPUT,
            self::SRINPUT,
            self::SROUTPUT,
            self::ZERORATEDINPUT,
            self::ZERORATEDOUTPUT,
            self::BLINPUT,
            self::DSOUTPUT,
            self::EPINPUT,
            self::ES33_OUTPUT,
            self::ESN33_OUTPUT,
            self::IGDSINPUT2,
            self::IMINPUT2,
            self::MEINPUT,
            self::NRINPUT,
            self::OPINPUT,
            self::OSOUTPUT,
            self::TXESSINPUT,
            self::TXN33_INPUT,
            self::TXPETINPUT,
            self::TXREINPUT,
            self::INPUT3,
            self::INPUT4,
            self::OUTPUT3,
            self::OUTPUT4,
            self::SROUTPUT2,
            self::TXCA,
            self::SRCAS,
            self::BLINPUT2,
            self::DRCHARGESUPPLY20,
            self::DRCHARGE20,
            self::DRCHARGESUPPLY5,
            self::DRCHARGE5,
            self::BADDEBTRELIEF,
            self::IGDSINPUT3,
            self::SROVR,
            self::TOURISTREFUND,
            self::TXRCN33,
            self::TXRCRE,
            self::TXRCESS,
            self::TXRCTS,
            self::OUTPUTY23,
            self::DSOUTPUTY23,
            self::INPUTY23,
            self::IMINPUT2_Y23,
            self::IGDSINPUT2_Y23,
            self::TXPETINPUTY23,
            self::TXESSINPUTY23,
            self::TXN33_INPUTY23,
            self::TXREINPUTY23,
            self::TXCAY23,
            self::BADDEBTRELIEFY23,
            self::IGDSINPUT3_Y23,
            self::SROVRRSY23,
            self::SROVRLVGY23,
            self::SRLVGY23,
            self::TXRCN33_Y23,
            self::TXRCREY23,
            self::TXRCESSY23,
            self::TXRCTSY23,
            self::IM,
            self::IMY23,
            self::IMESS,
            self::IMESSY23,
            self::IMN33,
            self::IMN33_Y23,
            self::IMRE,
            self::IMREY23,
            self::BADDEBTRECOVERY,
            self::BADDEBTRECOVERYY23,
            self::OUTPUTY24,
            self::DSOUTPUTY24,
            self::INPUTY24,
            self::IGDSINPUT2_Y24,
            self::TXPETINPUTY24,
            self::TXESSINPUTY24,
            self::TXN33_INPUTY24,
            self::TXREINPUTY24,
            self::TXCAY24,
            self::BADDEBTRELIEFY24,
            self::IGDSINPUT3_Y24,
            self::SROVRRSY24,
            self::SROVRLVGY24,
            self::SRLVGY24,
            self::TXRCTSY24,
            self::TXRCESSY24,
            self::TXRCN33_Y24,
            self::TXRCREY24,
            self::IMY24,
            self::IMESSY24,
            self::IMN33_Y24,
            self::IMREY24,
            self::BADDEBTRECOVERYY24,
            self::OSOUTPUT2,
            self::BLINPUT3,
            self::BLINPUT3_Y23,
            self::BLINPUT3_Y24,
        ];
    }
}


