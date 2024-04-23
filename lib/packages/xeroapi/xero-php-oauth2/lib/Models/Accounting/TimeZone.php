<?php
/**
 * TimeZone
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
 * TimeZone Class Doc Comment
 *
 * @category Class
 * @description Timezone specifications
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TimeZone
{
    /**
     * Possible values of this enum
     */
    const AFGHANISTANSTANDARDTIME = 'AFGHANISTANSTANDARDTIME';
    const ALASKANSTANDARDTIME = 'ALASKANSTANDARDTIME';
    const ALEUTIANSTANDARDTIME = 'ALEUTIANSTANDARDTIME';
    const ALTAISTANDARDTIME = 'ALTAISTANDARDTIME';
    const ARABIANSTANDARDTIME = 'ARABIANSTANDARDTIME';
    const ARABICSTANDARDTIME = 'ARABICSTANDARDTIME';
    const ARABSTANDARDTIME = 'ARABSTANDARDTIME';
    const ARGENTINASTANDARDTIME = 'ARGENTINASTANDARDTIME';
    const ASTRAKHANSTANDARDTIME = 'ASTRAKHANSTANDARDTIME';
    const ATLANTICSTANDARDTIME = 'ATLANTICSTANDARDTIME';
    const AUSCENTRALSTANDARDTIME = 'AUSCENTRALSTANDARDTIME';
    const AUSCENTRALWSTANDARDTIME = 'AUSCENTRALWSTANDARDTIME';
    const AUSEASTERNSTANDARDTIME = 'AUSEASTERNSTANDARDTIME';
    const AZERBAIJANSTANDARDTIME = 'AZERBAIJANSTANDARDTIME';
    const AZORESSTANDARDTIME = 'AZORESSTANDARDTIME';
    const BAHIASTANDARDTIME = 'BAHIASTANDARDTIME';
    const BANGLADESHSTANDARDTIME = 'BANGLADESHSTANDARDTIME';
    const BELARUSSTANDARDTIME = 'BELARUSSTANDARDTIME';
    const BOUGAINVILLESTANDARDTIME = 'BOUGAINVILLESTANDARDTIME';
    const CANADACENTRALSTANDARDTIME = 'CANADACENTRALSTANDARDTIME';
    const CAPEVERDESTANDARDTIME = 'CAPEVERDESTANDARDTIME';
    const CAUCASUSSTANDARDTIME = 'CAUCASUSSTANDARDTIME';
    const CENAUSTRALIASTANDARDTIME = 'CENAUSTRALIASTANDARDTIME';
    const CENTRALAMERICASTANDARDTIME = 'CENTRALAMERICASTANDARDTIME';
    const CENTRALASIASTANDARDTIME = 'CENTRALASIASTANDARDTIME';
    const CENTRALBRAZILIANSTANDARDTIME = 'CENTRALBRAZILIANSTANDARDTIME';
    const CENTRALEUROPEANSTANDARDTIME = 'CENTRALEUROPEANSTANDARDTIME';
    const CENTRALEUROPESTANDARDTIME = 'CENTRALEUROPESTANDARDTIME';
    const CENTRALPACIFICSTANDARDTIME = 'CENTRALPACIFICSTANDARDTIME';
    const CENTRALSTANDARDTIME = 'CENTRALSTANDARDTIME';
    const CENTRALSTANDARDTIME_MEXICO = 'CENTRALSTANDARDTIME(MEXICO)';
    const CHATHAMISLANDSSTANDARDTIME = 'CHATHAMISLANDSSTANDARDTIME';
    const CHINASTANDARDTIME = 'CHINASTANDARDTIME';
    const CUBASTANDARDTIME = 'CUBASTANDARDTIME';
    const DATELINESTANDARDTIME = 'DATELINESTANDARDTIME';
    const EAFRICASTANDARDTIME = 'EAFRICASTANDARDTIME';
    const EASTERISLANDSTANDARDTIME = 'EASTERISLANDSTANDARDTIME';
    const EASTERNSTANDARDTIME = 'EASTERNSTANDARDTIME';
    const EASTERNSTANDARDTIME_MEXICO = 'EASTERNSTANDARDTIME(MEXICO)';
    const EAUSTRALIASTANDARDTIME = 'EAUSTRALIASTANDARDTIME';
    const EEUROPESTANDARDTIME = 'EEUROPESTANDARDTIME';
    const EGYPTSTANDARDTIME = 'EGYPTSTANDARDTIME';
    const EKATERINBURGSTANDARDTIME = 'EKATERINBURGSTANDARDTIME';
    const ESOUTHAMERICASTANDARDTIME = 'ESOUTHAMERICASTANDARDTIME';
    const FIJISTANDARDTIME = 'FIJISTANDARDTIME';
    const FLESTANDARDTIME = 'FLESTANDARDTIME';
    const GEORGIANSTANDARDTIME = 'GEORGIANSTANDARDTIME';
    const GMTSTANDARDTIME = 'GMTSTANDARDTIME';
    const GREENLANDSTANDARDTIME = 'GREENLANDSTANDARDTIME';
    const GREENWICHSTANDARDTIME = 'GREENWICHSTANDARDTIME';
    const GTBSTANDARDTIME = 'GTBSTANDARDTIME';
    const HAITISTANDARDTIME = 'HAITISTANDARDTIME';
    const HAWAIIANSTANDARDTIME = 'HAWAIIANSTANDARDTIME';
    const INDIASTANDARDTIME = 'INDIASTANDARDTIME';
    const IRANSTANDARDTIME = 'IRANSTANDARDTIME';
    const ISRAELSTANDARDTIME = 'ISRAELSTANDARDTIME';
    const JORDANSTANDARDTIME = 'JORDANSTANDARDTIME';
    const KALININGRADSTANDARDTIME = 'KALININGRADSTANDARDTIME';
    const KAMCHATKASTANDARDTIME = 'KAMCHATKASTANDARDTIME';
    const KOREASTANDARDTIME = 'KOREASTANDARDTIME';
    const LIBYASTANDARDTIME = 'LIBYASTANDARDTIME';
    const LINEISLANDSSTANDARDTIME = 'LINEISLANDSSTANDARDTIME';
    const LORDHOWESTANDARDTIME = 'LORDHOWESTANDARDTIME';
    const MAGADANSTANDARDTIME = 'MAGADANSTANDARDTIME';
    const MAGALLANESSTANDARDTIME = 'MAGALLANESSTANDARDTIME';
    const MARQUESASSTANDARDTIME = 'MARQUESASSTANDARDTIME';
    const MAURITIUSSTANDARDTIME = 'MAURITIUSSTANDARDTIME';
    const MIDATLANTICSTANDARDTIME = 'MIDATLANTICSTANDARDTIME';
    const MIDDLEEASTSTANDARDTIME = 'MIDDLEEASTSTANDARDTIME';
    const MONTEVIDEOSTANDARDTIME = 'MONTEVIDEOSTANDARDTIME';
    const MOROCCOSTANDARDTIME = 'MOROCCOSTANDARDTIME';
    const MOUNTAINSTANDARDTIME = 'MOUNTAINSTANDARDTIME';
    const MOUNTAINSTANDARDTIME_MEXICO = 'MOUNTAINSTANDARDTIME(MEXICO)';
    const MYANMARSTANDARDTIME = 'MYANMARSTANDARDTIME';
    const NAMIBIASTANDARDTIME = 'NAMIBIASTANDARDTIME';
    const NCENTRALASIASTANDARDTIME = 'NCENTRALASIASTANDARDTIME';
    const NEPALSTANDARDTIME = 'NEPALSTANDARDTIME';
    const NEWFOUNDLANDSTANDARDTIME = 'NEWFOUNDLANDSTANDARDTIME';
    const NEWZEALANDSTANDARDTIME = 'NEWZEALANDSTANDARDTIME';
    const NORFOLKSTANDARDTIME = 'NORFOLKSTANDARDTIME';
    const NORTHASIAEASTSTANDARDTIME = 'NORTHASIAEASTSTANDARDTIME';
    const NORTHASIASTANDARDTIME = 'NORTHASIASTANDARDTIME';
    const NORTHKOREASTANDARDTIME = 'NORTHKOREASTANDARDTIME';
    const OMSKSTANDARDTIME = 'OMSKSTANDARDTIME';
    const PACIFICSASTANDARDTIME = 'PACIFICSASTANDARDTIME';
    const PACIFICSTANDARDTIME = 'PACIFICSTANDARDTIME';
    const PACIFICSTANDARDTIME_MEXICO = 'PACIFICSTANDARDTIME(MEXICO)';
    const PAKISTANSTANDARDTIME = 'PAKISTANSTANDARDTIME';
    const PARAGUAYSTANDARDTIME = 'PARAGUAYSTANDARDTIME';
    const QYZYLORDASTANDARDTIME = 'QYZYLORDASTANDARDTIME';
    const ROMANCESTANDARDTIME = 'ROMANCESTANDARDTIME';
    const RUSSIANSTANDARDTIME = 'RUSSIANSTANDARDTIME';
    const RUSSIATIMEZONE10 = 'RUSSIATIMEZONE10';
    const RUSSIATIMEZONE11 = 'RUSSIATIMEZONE11';
    const RUSSIATIMEZONE3 = 'RUSSIATIMEZONE3';
    const SAEASTERNSTANDARDTIME = 'SAEASTERNSTANDARDTIME';
    const SAINTPIERRESTANDARDTIME = 'SAINTPIERRESTANDARDTIME';
    const SAKHALINSTANDARDTIME = 'SAKHALINSTANDARDTIME';
    const SAMOASTANDARDTIME = 'SAMOASTANDARDTIME';
    const SAOTOMESTANDARDTIME = 'SAOTOMESTANDARDTIME';
    const SAPACIFICSTANDARDTIME = 'SAPACIFICSTANDARDTIME';
    const SARATOVSTANDARDTIME = 'SARATOVSTANDARDTIME';
    const SAWESTERNSTANDARDTIME = 'SAWESTERNSTANDARDTIME';
    const SEASIASTANDARDTIME = 'SEASIASTANDARDTIME';
    const SINGAPORESTANDARDTIME = 'SINGAPORESTANDARDTIME';
    const SOUTHAFRICASTANDARDTIME = 'SOUTHAFRICASTANDARDTIME';
    const SOUTHSUDANSTANDARDTIME = 'SOUTHSUDANSTANDARDTIME';
    const SRILANKASTANDARDTIME = 'SRILANKASTANDARDTIME';
    const SUDANSTANDARDTIME = 'SUDANSTANDARDTIME';
    const SYRIASTANDARDTIME = 'SYRIASTANDARDTIME';
    const TAIPEISTANDARDTIME = 'TAIPEISTANDARDTIME';
    const TASMANIASTANDARDTIME = 'TASMANIASTANDARDTIME';
    const TOCANTINSSTANDARDTIME = 'TOCANTINSSTANDARDTIME';
    const TOKYOSTANDARDTIME = 'TOKYOSTANDARDTIME';
    const TOMSKSTANDARDTIME = 'TOMSKSTANDARDTIME';
    const TONGASTANDARDTIME = 'TONGASTANDARDTIME';
    const TRANSBAIKALSTANDARDTIME = 'TRANSBAIKALSTANDARDTIME';
    const TURKEYSTANDARDTIME = 'TURKEYSTANDARDTIME';
    const TURKSANDCAICOSSTANDARDTIME = 'TURKSANDCAICOSSTANDARDTIME';
    const ULAANBAATARSTANDARDTIME = 'ULAANBAATARSTANDARDTIME';
    const USEASTERNSTANDARDTIME = 'USEASTERNSTANDARDTIME';
    const USMOUNTAINSTANDARDTIME = 'USMOUNTAINSTANDARDTIME';
    const UTC = 'UTC';
    const UTC12 = 'UTC+12';
    const UTC13 = 'UTC+13';
    const UTC02 = 'UTC02';
    const UTC08 = 'UTC08';
    const UTC09 = 'UTC09';
    const UTC11 = 'UTC11';
    const VENEZUELASTANDARDTIME = 'VENEZUELASTANDARDTIME';
    const VLADIVOSTOKSTANDARDTIME = 'VLADIVOSTOKSTANDARDTIME';
    const VOLGOGRADSTANDARDTIME = 'VOLGOGRADSTANDARDTIME';
    const WAUSTRALIASTANDARDTIME = 'WAUSTRALIASTANDARDTIME';
    const WCENTRALAFRICASTANDARDTIME = 'WCENTRALAFRICASTANDARDTIME';
    const WESTASIASTANDARDTIME = 'WESTASIASTANDARDTIME';
    const WESTBANKSTANDARDTIME = 'WESTBANKSTANDARDTIME';
    const WESTPACIFICSTANDARDTIME = 'WESTPACIFICSTANDARDTIME';
    const WEUROPESTANDARDTIME = 'WEUROPESTANDARDTIME';
    const WMONGOLIASTANDARDTIME = 'WMONGOLIASTANDARDTIME';
    const YAKUTSKSTANDARDTIME = 'YAKUTSKSTANDARDTIME';
    const YUKONSTANDARDTIME = 'YUKONSTANDARDTIME';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AFGHANISTANSTANDARDTIME,
            self::ALASKANSTANDARDTIME,
            self::ALEUTIANSTANDARDTIME,
            self::ALTAISTANDARDTIME,
            self::ARABIANSTANDARDTIME,
            self::ARABICSTANDARDTIME,
            self::ARABSTANDARDTIME,
            self::ARGENTINASTANDARDTIME,
            self::ASTRAKHANSTANDARDTIME,
            self::ATLANTICSTANDARDTIME,
            self::AUSCENTRALSTANDARDTIME,
            self::AUSCENTRALWSTANDARDTIME,
            self::AUSEASTERNSTANDARDTIME,
            self::AZERBAIJANSTANDARDTIME,
            self::AZORESSTANDARDTIME,
            self::BAHIASTANDARDTIME,
            self::BANGLADESHSTANDARDTIME,
            self::BELARUSSTANDARDTIME,
            self::BOUGAINVILLESTANDARDTIME,
            self::CANADACENTRALSTANDARDTIME,
            self::CAPEVERDESTANDARDTIME,
            self::CAUCASUSSTANDARDTIME,
            self::CENAUSTRALIASTANDARDTIME,
            self::CENTRALAMERICASTANDARDTIME,
            self::CENTRALASIASTANDARDTIME,
            self::CENTRALBRAZILIANSTANDARDTIME,
            self::CENTRALEUROPEANSTANDARDTIME,
            self::CENTRALEUROPESTANDARDTIME,
            self::CENTRALPACIFICSTANDARDTIME,
            self::CENTRALSTANDARDTIME,
            self::CENTRALSTANDARDTIME_MEXICO,
            self::CHATHAMISLANDSSTANDARDTIME,
            self::CHINASTANDARDTIME,
            self::CUBASTANDARDTIME,
            self::DATELINESTANDARDTIME,
            self::EAFRICASTANDARDTIME,
            self::EASTERISLANDSTANDARDTIME,
            self::EASTERNSTANDARDTIME,
            self::EASTERNSTANDARDTIME_MEXICO,
            self::EAUSTRALIASTANDARDTIME,
            self::EEUROPESTANDARDTIME,
            self::EGYPTSTANDARDTIME,
            self::EKATERINBURGSTANDARDTIME,
            self::ESOUTHAMERICASTANDARDTIME,
            self::FIJISTANDARDTIME,
            self::FLESTANDARDTIME,
            self::GEORGIANSTANDARDTIME,
            self::GMTSTANDARDTIME,
            self::GREENLANDSTANDARDTIME,
            self::GREENWICHSTANDARDTIME,
            self::GTBSTANDARDTIME,
            self::HAITISTANDARDTIME,
            self::HAWAIIANSTANDARDTIME,
            self::INDIASTANDARDTIME,
            self::IRANSTANDARDTIME,
            self::ISRAELSTANDARDTIME,
            self::JORDANSTANDARDTIME,
            self::KALININGRADSTANDARDTIME,
            self::KAMCHATKASTANDARDTIME,
            self::KOREASTANDARDTIME,
            self::LIBYASTANDARDTIME,
            self::LINEISLANDSSTANDARDTIME,
            self::LORDHOWESTANDARDTIME,
            self::MAGADANSTANDARDTIME,
            self::MAGALLANESSTANDARDTIME,
            self::MARQUESASSTANDARDTIME,
            self::MAURITIUSSTANDARDTIME,
            self::MIDATLANTICSTANDARDTIME,
            self::MIDDLEEASTSTANDARDTIME,
            self::MONTEVIDEOSTANDARDTIME,
            self::MOROCCOSTANDARDTIME,
            self::MOUNTAINSTANDARDTIME,
            self::MOUNTAINSTANDARDTIME_MEXICO,
            self::MYANMARSTANDARDTIME,
            self::NAMIBIASTANDARDTIME,
            self::NCENTRALASIASTANDARDTIME,
            self::NEPALSTANDARDTIME,
            self::NEWFOUNDLANDSTANDARDTIME,
            self::NEWZEALANDSTANDARDTIME,
            self::NORFOLKSTANDARDTIME,
            self::NORTHASIAEASTSTANDARDTIME,
            self::NORTHASIASTANDARDTIME,
            self::NORTHKOREASTANDARDTIME,
            self::OMSKSTANDARDTIME,
            self::PACIFICSASTANDARDTIME,
            self::PACIFICSTANDARDTIME,
            self::PACIFICSTANDARDTIME_MEXICO,
            self::PAKISTANSTANDARDTIME,
            self::PARAGUAYSTANDARDTIME,
            self::QYZYLORDASTANDARDTIME,
            self::ROMANCESTANDARDTIME,
            self::RUSSIANSTANDARDTIME,
            self::RUSSIATIMEZONE10,
            self::RUSSIATIMEZONE11,
            self::RUSSIATIMEZONE3,
            self::SAEASTERNSTANDARDTIME,
            self::SAINTPIERRESTANDARDTIME,
            self::SAKHALINSTANDARDTIME,
            self::SAMOASTANDARDTIME,
            self::SAOTOMESTANDARDTIME,
            self::SAPACIFICSTANDARDTIME,
            self::SARATOVSTANDARDTIME,
            self::SAWESTERNSTANDARDTIME,
            self::SEASIASTANDARDTIME,
            self::SINGAPORESTANDARDTIME,
            self::SOUTHAFRICASTANDARDTIME,
            self::SOUTHSUDANSTANDARDTIME,
            self::SRILANKASTANDARDTIME,
            self::SUDANSTANDARDTIME,
            self::SYRIASTANDARDTIME,
            self::TAIPEISTANDARDTIME,
            self::TASMANIASTANDARDTIME,
            self::TOCANTINSSTANDARDTIME,
            self::TOKYOSTANDARDTIME,
            self::TOMSKSTANDARDTIME,
            self::TONGASTANDARDTIME,
            self::TRANSBAIKALSTANDARDTIME,
            self::TURKEYSTANDARDTIME,
            self::TURKSANDCAICOSSTANDARDTIME,
            self::ULAANBAATARSTANDARDTIME,
            self::USEASTERNSTANDARDTIME,
            self::USMOUNTAINSTANDARDTIME,
            self::UTC,
            self::UTC12,
            self::UTC13,
            self::UTC02,
            self::UTC08,
            self::UTC09,
            self::UTC11,
            self::VENEZUELASTANDARDTIME,
            self::VLADIVOSTOKSTANDARDTIME,
            self::VOLGOGRADSTANDARDTIME,
            self::WAUSTRALIASTANDARDTIME,
            self::WCENTRALAFRICASTANDARDTIME,
            self::WESTASIASTANDARDTIME,
            self::WESTBANKSTANDARDTIME,
            self::WESTPACIFICSTANDARDTIME,
            self::WEUROPESTANDARDTIME,
            self::WMONGOLIASTANDARDTIME,
            self::YAKUTSKSTANDARDTIME,
            self::YUKONSTANDARDTIME,
        ];
    }
}


