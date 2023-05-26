<?php

/**
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */

/**
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\DSV\US\Orders;

use Walmart\Models\BaseModel;

/**
 * ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount Class Doc Comment
 *
 * @category Class

 * @description The details for the amount of the tax charge

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipOrderLines200ResponseOrderLinesOrderLineInnerChargesChargeInnerChargeAmount extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shipOrderLines_200_response_orderLines_orderLine_inner_charges_charge_inner_chargeAmount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'currency' => 'string',
        'amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'currency' => null,
        'amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'currency' => false,
        'amount' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'currency' => 'currency',
        'amount' => 'amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'currency' => 'setCurrency',
        'amount' => 'setAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'currency' => 'getCurrency',
        'amount' => 'getAmount'
    ];


    public const CURRENCY_AED = 'AED';

    public const CURRENCY_AFN = 'AFN';

    public const CURRENCY_ALL = 'ALL';

    public const CURRENCY_AMD = 'AMD';

    public const CURRENCY_ANG = 'ANG';

    public const CURRENCY_AOA = 'AOA';

    public const CURRENCY_ARS = 'ARS';

    public const CURRENCY_AUD = 'AUD';

    public const CURRENCY_AWG = 'AWG';

    public const CURRENCY_AZN = 'AZN';

    public const CURRENCY_BAM = 'BAM';

    public const CURRENCY_BBD = 'BBD';

    public const CURRENCY_BDT = 'BDT';

    public const CURRENCY_BGN = 'BGN';

    public const CURRENCY_BHD = 'BHD';

    public const CURRENCY_BIF = 'BIF';

    public const CURRENCY_BMD = 'BMD';

    public const CURRENCY_BND = 'BND';

    public const CURRENCY_BOB = 'BOB';

    public const CURRENCY_BRL = 'BRL';

    public const CURRENCY_BSD = 'BSD';

    public const CURRENCY_BTN = 'BTN';

    public const CURRENCY_BWP = 'BWP';

    public const CURRENCY_BYR = 'BYR';

    public const CURRENCY_BZD = 'BZD';

    public const CURRENCY_CAD = 'CAD';

    public const CURRENCY_CDF = 'CDF';

    public const CURRENCY_CHF = 'CHF';

    public const CURRENCY_CLP = 'CLP';

    public const CURRENCY_CNY = 'CNY';

    public const CURRENCY_COP = 'COP';

    public const CURRENCY_CRC = 'CRC';

    public const CURRENCY_CUP = 'CUP';

    public const CURRENCY_CVE = 'CVE';

    public const CURRENCY_CZK = 'CZK';

    public const CURRENCY_DJF = 'DJF';

    public const CURRENCY_DKK = 'DKK';

    public const CURRENCY_DOP = 'DOP';

    public const CURRENCY_DZD = 'DZD';

    public const CURRENCY_EGP = 'EGP';

    public const CURRENCY_ERN = 'ERN';

    public const CURRENCY_ETB = 'ETB';

    public const CURRENCY_EUR = 'EUR';

    public const CURRENCY_FJD = 'FJD';

    public const CURRENCY_FKP = 'FKP';

    public const CURRENCY_GBP = 'GBP';

    public const CURRENCY_GEL = 'GEL';

    public const CURRENCY_GHS = 'GHS';

    public const CURRENCY_GIP = 'GIP';

    public const CURRENCY_GMD = 'GMD';

    public const CURRENCY_GNF = 'GNF';

    public const CURRENCY_GTQ = 'GTQ';

    public const CURRENCY_GYD = 'GYD';

    public const CURRENCY_HKD = 'HKD';

    public const CURRENCY_HNL = 'HNL';

    public const CURRENCY_HRK = 'HRK';

    public const CURRENCY_HTG = 'HTG';

    public const CURRENCY_HUF = 'HUF';

    public const CURRENCY_IDR = 'IDR';

    public const CURRENCY_ILS = 'ILS';

    public const CURRENCY_INR = 'INR';

    public const CURRENCY_IQD = 'IQD';

    public const CURRENCY_IRR = 'IRR';

    public const CURRENCY_ISK = 'ISK';

    public const CURRENCY_JMD = 'JMD';

    public const CURRENCY_JOD = 'JOD';

    public const CURRENCY_JPY = 'JPY';

    public const CURRENCY_KES = 'KES';

    public const CURRENCY_KGS = 'KGS';

    public const CURRENCY_KHR = 'KHR';

    public const CURRENCY_KMF = 'KMF';

    public const CURRENCY_KPW = 'KPW';

    public const CURRENCY_KRW = 'KRW';

    public const CURRENCY_KWD = 'KWD';

    public const CURRENCY_KYD = 'KYD';

    public const CURRENCY_KZT = 'KZT';

    public const CURRENCY_LAK = 'LAK';

    public const CURRENCY_LBP = 'LBP';

    public const CURRENCY_LKR = 'LKR';

    public const CURRENCY_LRD = 'LRD';

    public const CURRENCY_LSL = 'LSL';

    public const CURRENCY_LTL = 'LTL';

    public const CURRENCY_LVL = 'LVL';

    public const CURRENCY_LYD = 'LYD';

    public const CURRENCY_MAD = 'MAD';

    public const CURRENCY_MDL = 'MDL';

    public const CURRENCY_MGA = 'MGA';

    public const CURRENCY_MKD = 'MKD';

    public const CURRENCY_MMK = 'MMK';

    public const CURRENCY_MNT = 'MNT';

    public const CURRENCY_MOP = 'MOP';

    public const CURRENCY_MRO = 'MRO';

    public const CURRENCY_MUR = 'MUR';

    public const CURRENCY_MVR = 'MVR';

    public const CURRENCY_MWK = 'MWK';

    public const CURRENCY_MXN = 'MXN';

    public const CURRENCY_MYR = 'MYR';

    public const CURRENCY_MZN = 'MZN';

    public const CURRENCY_NAD = 'NAD';

    public const CURRENCY_NGN = 'NGN';

    public const CURRENCY_NIO = 'NIO';

    public const CURRENCY_NOK = 'NOK';

    public const CURRENCY_NPR = 'NPR';

    public const CURRENCY_NZD = 'NZD';

    public const CURRENCY_OMR = 'OMR';

    public const CURRENCY_PAB = 'PAB';

    public const CURRENCY_PEN = 'PEN';

    public const CURRENCY_PGK = 'PGK';

    public const CURRENCY_PHP = 'PHP';

    public const CURRENCY_PKR = 'PKR';

    public const CURRENCY_PLN = 'PLN';

    public const CURRENCY_PYG = 'PYG';

    public const CURRENCY_QAR = 'QAR';

    public const CURRENCY_RON = 'RON';

    public const CURRENCY_RSD = 'RSD';

    public const CURRENCY_RUB = 'RUB';

    public const CURRENCY_RUR = 'RUR';

    public const CURRENCY_RWF = 'RWF';

    public const CURRENCY_SAR = 'SAR';

    public const CURRENCY_SBD = 'SBD';

    public const CURRENCY_SCR = 'SCR';

    public const CURRENCY_SDG = 'SDG';

    public const CURRENCY_SEK = 'SEK';

    public const CURRENCY_SGD = 'SGD';

    public const CURRENCY_SHP = 'SHP';

    public const CURRENCY_SLL = 'SLL';

    public const CURRENCY_SOS = 'SOS';

    public const CURRENCY_SRD = 'SRD';

    public const CURRENCY_STD = 'STD';

    public const CURRENCY_SYP = 'SYP';

    public const CURRENCY_SZL = 'SZL';

    public const CURRENCY_THB = 'THB';

    public const CURRENCY_TJS = 'TJS';

    public const CURRENCY_TMT = 'TMT';

    public const CURRENCY_TND = 'TND';

    public const CURRENCY_TOP = 'TOP';

    public const CURRENCY__TRY = 'TRY';

    public const CURRENCY_TTD = 'TTD';

    public const CURRENCY_TWD = 'TWD';

    public const CURRENCY_TZS = 'TZS';

    public const CURRENCY_UAH = 'UAH';

    public const CURRENCY_UGX = 'UGX';

    public const CURRENCY_USD = 'USD';

    public const CURRENCY_UYU = 'UYU';

    public const CURRENCY_UZS = 'UZS';

    public const CURRENCY_VEF = 'VEF';

    public const CURRENCY_VND = 'VND';

    public const CURRENCY_VUV = 'VUV';

    public const CURRENCY_WST = 'WST';

    public const CURRENCY_XAF = 'XAF';

    public const CURRENCY_XAG = 'XAG';

    public const CURRENCY_XAU = 'XAU';

    public const CURRENCY_XBA = 'XBA';

    public const CURRENCY_XBB = 'XBB';

    public const CURRENCY_XBC = 'XBC';

    public const CURRENCY_XBD = 'XBD';

    public const CURRENCY_XCD = 'XCD';

    public const CURRENCY_XDR = 'XDR';

    public const CURRENCY_XFU = 'XFU';

    public const CURRENCY_XOF = 'XOF';

    public const CURRENCY_XPD = 'XPD';

    public const CURRENCY_XPF = 'XPF';

    public const CURRENCY_XPT = 'XPT';

    public const CURRENCY_XTS = 'XTS';

    public const CURRENCY_XXX = 'XXX';

    public const CURRENCY_YER = 'YER';

    public const CURRENCY_ZAR = 'ZAR';

    public const CURRENCY_ZMK = 'ZMK';

    public const CURRENCY_ZWL = 'ZWL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_AED,
            self::CURRENCY_AFN,
            self::CURRENCY_ALL,
            self::CURRENCY_AMD,
            self::CURRENCY_ANG,
            self::CURRENCY_AOA,
            self::CURRENCY_ARS,
            self::CURRENCY_AUD,
            self::CURRENCY_AWG,
            self::CURRENCY_AZN,
            self::CURRENCY_BAM,
            self::CURRENCY_BBD,
            self::CURRENCY_BDT,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BIF,
            self::CURRENCY_BMD,
            self::CURRENCY_BND,
            self::CURRENCY_BOB,
            self::CURRENCY_BRL,
            self::CURRENCY_BSD,
            self::CURRENCY_BTN,
            self::CURRENCY_BWP,
            self::CURRENCY_BYR,
            self::CURRENCY_BZD,
            self::CURRENCY_CAD,
            self::CURRENCY_CDF,
            self::CURRENCY_CHF,
            self::CURRENCY_CLP,
            self::CURRENCY_CNY,
            self::CURRENCY_COP,
            self::CURRENCY_CRC,
            self::CURRENCY_CUP,
            self::CURRENCY_CVE,
            self::CURRENCY_CZK,
            self::CURRENCY_DJF,
            self::CURRENCY_DKK,
            self::CURRENCY_DOP,
            self::CURRENCY_DZD,
            self::CURRENCY_EGP,
            self::CURRENCY_ERN,
            self::CURRENCY_ETB,
            self::CURRENCY_EUR,
            self::CURRENCY_FJD,
            self::CURRENCY_FKP,
            self::CURRENCY_GBP,
            self::CURRENCY_GEL,
            self::CURRENCY_GHS,
            self::CURRENCY_GIP,
            self::CURRENCY_GMD,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HKD,
            self::CURRENCY_HNL,
            self::CURRENCY_HRK,
            self::CURRENCY_HTG,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_INR,
            self::CURRENCY_IQD,
            self::CURRENCY_IRR,
            self::CURRENCY_ISK,
            self::CURRENCY_JMD,
            self::CURRENCY_JOD,
            self::CURRENCY_JPY,
            self::CURRENCY_KES,
            self::CURRENCY_KGS,
            self::CURRENCY_KHR,
            self::CURRENCY_KMF,
            self::CURRENCY_KPW,
            self::CURRENCY_KRW,
            self::CURRENCY_KWD,
            self::CURRENCY_KYD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_LKR,
            self::CURRENCY_LRD,
            self::CURRENCY_LSL,
            self::CURRENCY_LTL,
            self::CURRENCY_LVL,
            self::CURRENCY_LYD,
            self::CURRENCY_MAD,
            self::CURRENCY_MDL,
            self::CURRENCY_MGA,
            self::CURRENCY_MKD,
            self::CURRENCY_MMK,
            self::CURRENCY_MNT,
            self::CURRENCY_MOP,
            self::CURRENCY_MRO,
            self::CURRENCY_MUR,
            self::CURRENCY_MVR,
            self::CURRENCY_MWK,
            self::CURRENCY_MXN,
            self::CURRENCY_MYR,
            self::CURRENCY_MZN,
            self::CURRENCY_NAD,
            self::CURRENCY_NGN,
            self::CURRENCY_NIO,
            self::CURRENCY_NOK,
            self::CURRENCY_NPR,
            self::CURRENCY_NZD,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PGK,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RSD,
            self::CURRENCY_RUB,
            self::CURRENCY_RUR,
            self::CURRENCY_RWF,
            self::CURRENCY_SAR,
            self::CURRENCY_SBD,
            self::CURRENCY_SCR,
            self::CURRENCY_SDG,
            self::CURRENCY_SEK,
            self::CURRENCY_SGD,
            self::CURRENCY_SHP,
            self::CURRENCY_SLL,
            self::CURRENCY_SOS,
            self::CURRENCY_SRD,
            self::CURRENCY_STD,
            self::CURRENCY_SYP,
            self::CURRENCY_SZL,
            self::CURRENCY_THB,
            self::CURRENCY_TJS,
            self::CURRENCY_TMT,
            self::CURRENCY_TND,
            self::CURRENCY_TOP,
            self::CURRENCY__TRY,
            self::CURRENCY_TTD,
            self::CURRENCY_TWD,
            self::CURRENCY_TZS,
            self::CURRENCY_UAH,
            self::CURRENCY_UGX,
            self::CURRENCY_USD,
            self::CURRENCY_UYU,
            self::CURRENCY_UZS,
            self::CURRENCY_VEF,
            self::CURRENCY_VND,
            self::CURRENCY_VUV,
            self::CURRENCY_WST,
            self::CURRENCY_XAF,
            self::CURRENCY_XAG,
            self::CURRENCY_XAU,
            self::CURRENCY_XBA,
            self::CURRENCY_XBB,
            self::CURRENCY_XBC,
            self::CURRENCY_XBD,
            self::CURRENCY_XCD,
            self::CURRENCY_XDR,
            self::CURRENCY_XFU,
            self::CURRENCY_XOF,
            self::CURRENCY_XPD,
            self::CURRENCY_XPF,
            self::CURRENCY_XPT,
            self::CURRENCY_XTS,
            self::CURRENCY_XXX,
            self::CURRENCY_YER,
            self::CURRENCY_ZAR,
            self::CURRENCY_ZMK,
            self::CURRENCY_ZWL,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets currency
     *
     * @return string
    
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency The type of currency for the charge. Example: USD for US Dollars
     *
     * @return self
    
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['currency'] = $currency;
        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
    
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The numerical amount for that charge. Example: 9.99
     *
     * @return self
    
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }

        $this->container['amount'] = $amount;
        return $this;
    }
}


