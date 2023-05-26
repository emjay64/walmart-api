<?php

/**
 * TrackingInfoType
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

namespace Walmart\Models\MP\CA\Orders;

use Walmart\Models\BaseModel;

/**
 * TrackingInfoType Class Doc Comment
 *
 * @category Class

 * @description List of information about the package shipment and tracking updates

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class TrackingInfoType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TrackingInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'shipDateTime' => '\DateTime',
        'carrierName' => '\Walmart\Models\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfoCarrierName',
        'methodCode' => 'string',
        'trackingNumber' => 'string',
        'trackingURL' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'shipDateTime' => 'date-time',
        'carrierName' => null,
        'methodCode' => null,
        'trackingNumber' => null,
        'trackingURL' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'shipDateTime' => false,
        'carrierName' => false,
        'methodCode' => false,
        'trackingNumber' => false,
        'trackingURL' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'shipDateTime' => 'shipDateTime',
        'carrierName' => 'carrierName',
        'methodCode' => 'methodCode',
        'trackingNumber' => 'trackingNumber',
        'trackingURL' => 'trackingURL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'shipDateTime' => 'setShipDateTime',
        'carrierName' => 'setCarrierName',
        'methodCode' => 'setMethodCode',
        'trackingNumber' => 'setTrackingNumber',
        'trackingURL' => 'setTrackingURL'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'shipDateTime' => 'getShipDateTime',
        'carrierName' => 'getCarrierName',
        'methodCode' => 'getMethodCode',
        'trackingNumber' => 'getTrackingNumber',
        'trackingURL' => 'getTrackingURL'
    ];


    public const METHOD_CODE_STANDARD = 'STANDARD';

    public const METHOD_CODE_EXPRESS = 'EXPRESS';

    public const METHOD_CODE_ONE_DAY = 'ONE_DAY';

    public const METHOD_CODE_FREIGHT = 'FREIGHT';

    public const METHOD_CODE_WHITE_GLOVE = 'WHITE_GLOVE';

    public const METHOD_CODE_VALUE = 'VALUE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMethodCodeAllowableValues()
    {
        return [
            self::METHOD_CODE_STANDARD,
            self::METHOD_CODE_EXPRESS,
            self::METHOD_CODE_ONE_DAY,
            self::METHOD_CODE_FREIGHT,
            self::METHOD_CODE_WHITE_GLOVE,
            self::METHOD_CODE_VALUE,
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
        $this->setIfExists('shipDateTime', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('methodCode', $data ?? [], null);
        $this->setIfExists('trackingNumber', $data ?? [], null);
        $this->setIfExists('trackingURL', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipDateTime'] === null) {
            $invalidProperties[] = "'shipDateTime' can't be null";
        }
        if ($this->container['carrierName'] === null) {
            $invalidProperties[] = "'carrierName' can't be null";
        }
        if ($this->container['methodCode'] === null) {
            $invalidProperties[] = "'methodCode' can't be null";
        }
        $allowedValues = $this->getMethodCodeAllowableValues();
        if (!is_null($this->container['methodCode']) && !in_array($this->container['methodCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'methodCode', must be one of '%s'",
                $this->container['methodCode'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['trackingNumber'] === null) {
            $invalidProperties[] = "'trackingNumber' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets shipDateTime
     *
     * @return \DateTime
    
     */
    public function getShipDateTime()
    {
        return $this->container['shipDateTime'];
    }

    /**
     * Sets shipDateTime
     *
     * @param \DateTime $shipDateTime The date the package was shipped
     *
     * @return self
    
     */
    public function setShipDateTime($shipDateTime)
    {
        if (is_null($shipDateTime)) {
            throw new \InvalidArgumentException('non-nullable shipDateTime cannot be null');
        }

        $this->container['shipDateTime'] = $shipDateTime;
        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return \Walmart\Models\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfoCarrierName
    
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param \Walmart\Models\MP\CA\Orders\ShippingUpdatesCARequestOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerTrackingInfoCarrierName $carrierName carrierName
     *
     * @return self
    
     */
    public function setCarrierName($carrierName)
    {
        if (is_null($carrierName)) {
            throw new \InvalidArgumentException('non-nullable carrierName cannot be null');
        }

        $this->container['carrierName'] = $carrierName;
        return $this;
    }

    /**
     * Gets methodCode
     *
     * @return string
    
     */
    public function getMethodCode()
    {
        return $this->container['methodCode'];
    }

    /**
     * Sets methodCode
     *
     * @param string $methodCode The shipping method. Can be one of the following: Standard, Express, Oneday, or Freight
     *
     * @return self
    
     */
    public function setMethodCode($methodCode)
    {
        if (is_null($methodCode)) {
            throw new \InvalidArgumentException('non-nullable methodCode cannot be null');
        }
        $allowedValues = $this->getMethodCodeAllowableValues();
        if (!in_array($methodCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'methodCode', must be one of '%s'",
                    $methodCode,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['methodCode'] = $methodCode;
        return $this;
    }

    /**
     * Gets trackingNumber
     *
     * @return string
    
     */
    public function getTrackingNumber()
    {
        return $this->container['trackingNumber'];
    }

    /**
     * Sets trackingNumber
     *
     * @param string $trackingNumber The shipment tracking number required for all non-Lettermail shipments
     *
     * @return self
    
     */
    public function setTrackingNumber($trackingNumber)
    {
        if (is_null($trackingNumber)) {
            throw new \InvalidArgumentException('non-nullable trackingNumber cannot be null');
        }

        $this->container['trackingNumber'] = $trackingNumber;
        return $this;
    }

    /**
     * Gets trackingURL
     *
     * @return string|null
    
     */
    public function getTrackingURL()
    {
        return $this->container['trackingURL'];
    }

    /**
     * Sets trackingURL
     *
     * @param string|null $trackingURL The URL for tracking the shipment
     *
     * @return self
    
     */
    public function setTrackingURL($trackingURL)
    {
        if (is_null($trackingURL)) {
            throw new \InvalidArgumentException('non-nullable trackingURL cannot be null');
        }

        $this->container['trackingURL'] = $trackingURL;
        return $this;
    }
}


