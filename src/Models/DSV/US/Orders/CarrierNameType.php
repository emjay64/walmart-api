<?php

/**
 * CarrierNameType
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
 * CarrierNameType Class Doc Comment
 *
 * @category Class

 * @description Information about the package carrier(s)

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CarrierNameType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierNameType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'otherCarrier' => 'string',
        'carrier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'otherCarrier' => null,
        'carrier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'otherCarrier' => false,
        'carrier' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'otherCarrier' => 'otherCarrier',
        'carrier' => 'carrier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'otherCarrier' => 'setOtherCarrier',
        'carrier' => 'setCarrier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'otherCarrier' => 'getOtherCarrier',
        'carrier' => 'getCarrier'
    ];


    public const CARRIER_UPS = 'UPS';

    public const CARRIER_USPS = 'USPS';

    public const CARRIER_FED_EX = 'FedEx';

    public const CARRIER_AIRBORNE = 'Airborne';

    public const CARRIER_ON_TRAC = 'OnTrac';

    public const CARRIER_DHL_ECOMMERCE___US = 'DHL Ecommerce - US';

    public const CARRIER_LS = 'LS';

    public const CARRIER_UDS = 'UDS';

    public const CARRIER_UPSMI = 'UPSMI';

    public const CARRIER_FDX = 'FDX';

    public const CARRIER_PILOT = 'PILOT';

    public const CARRIER_ESTES = 'ESTES';

    public const CARRIER_SAIA = 'SAIA';

    public const CARRIER_FEDEXSP = 'FEDEXSP';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCarrierAllowableValues()
    {
        return [
            self::CARRIER_UPS,
            self::CARRIER_USPS,
            self::CARRIER_FED_EX,
            self::CARRIER_AIRBORNE,
            self::CARRIER_ON_TRAC,
            self::CARRIER_DHL_ECOMMERCE___US,
            self::CARRIER_LS,
            self::CARRIER_UDS,
            self::CARRIER_UPSMI,
            self::CARRIER_FDX,
            self::CARRIER_PILOT,
            self::CARRIER_ESTES,
            self::CARRIER_SAIA,
            self::CARRIER_FEDEXSP,
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
        $this->setIfExists('otherCarrier', $data ?? [], null);
        $this->setIfExists('carrier', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCarrierAllowableValues();
        if (!is_null($this->container['carrier']) && !in_array($this->container['carrier'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'carrier', must be one of '%s'",
                $this->container['carrier'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets otherCarrier
     *
     * @return string|null
    
     */
    public function getOtherCarrier()
    {
        return $this->container['otherCarrier'];
    }

    /**
     * Sets otherCarrier
     *
     * @param string|null $otherCarrier Other carrier name, When otherCarrier is used, trackingUrl must also be provided
     *
     * @return self
    
     */
    public function setOtherCarrier($otherCarrier)
    {
        if (is_null($otherCarrier)) {
            throw new \InvalidArgumentException('non-nullable otherCarrier cannot be null');
        }

        $this->container['otherCarrier'] = $otherCarrier;
        return $this;
    }

    /**
     * Gets carrier
     *
     * @return string|null
    
     */
    public function getCarrier()
    {
        return $this->container['carrier'];
    }

    /**
     * Sets carrier
     *
     * @param string|null $carrier The package shipment carrier. Valid entries are: UPS, USPS, FedEx, Airborne, OnTrac, DHL, LS (LaserShip), UDS (United Delivery Service), UPSMI (UPS Mail Innovations), FDX, FEDEXSP (FedEx SmartPost).
     *
     * @return self
    
     */
    public function setCarrier($carrier)
    {
        if (is_null($carrier)) {
            throw new \InvalidArgumentException('non-nullable carrier cannot be null');
        }
        $allowedValues = $this->getCarrierAllowableValues();
        if (!in_array($carrier, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'carrier', must be one of '%s'",
                    $carrier,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['carrier'] = $carrier;
        return $this;
    }
}


