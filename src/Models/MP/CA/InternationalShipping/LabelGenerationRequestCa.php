<?php

/**
 * LabelGenerationRequestCa
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\InternationalShipping;

use Walmart\Models\BaseModel;

/**
 * LabelGenerationRequestCa Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class LabelGenerationRequestCa extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LabelGenerationRequestCa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'packageType' => 'string',
        'boxDimensions' => '\Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxDimensions',
        'boxItems' => '\Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxItemsInner[]',
        'fromAddress' => '\Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestFromAddress',
        'purchaseOrderId' => 'string',
        'carrierName' => 'string',
        'carrierServiceType' => 'string',
        'labelSize' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'packageType' => null,
        'boxDimensions' => null,
        'boxItems' => null,
        'fromAddress' => null,
        'purchaseOrderId' => null,
        'carrierName' => null,
        'carrierServiceType' => null,
        'labelSize' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'packageType' => false,
        'boxDimensions' => false,
        'boxItems' => false,
        'fromAddress' => false,
        'purchaseOrderId' => false,
        'carrierName' => false,
        'carrierServiceType' => false,
        'labelSize' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'packageType' => 'packageType',
        'boxDimensions' => 'boxDimensions',
        'boxItems' => 'boxItems',
        'fromAddress' => 'fromAddress',
        'purchaseOrderId' => 'purchaseOrderId',
        'carrierName' => 'carrierName',
        'carrierServiceType' => 'carrierServiceType',
        'labelSize' => 'labelSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'packageType' => 'setPackageType',
        'boxDimensions' => 'setBoxDimensions',
        'boxItems' => 'setBoxItems',
        'fromAddress' => 'setFromAddress',
        'purchaseOrderId' => 'setPurchaseOrderId',
        'carrierName' => 'setCarrierName',
        'carrierServiceType' => 'setCarrierServiceType',
        'labelSize' => 'setLabelSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'packageType' => 'getPackageType',
        'boxDimensions' => 'getBoxDimensions',
        'boxItems' => 'getBoxItems',
        'fromAddress' => 'getFromAddress',
        'purchaseOrderId' => 'getPurchaseOrderId',
        'carrierName' => 'getCarrierName',
        'carrierServiceType' => 'getCarrierServiceType',
        'labelSize' => 'getLabelSize'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('packageType', $data ?? [], null);
        $this->setIfExists('boxDimensions', $data ?? [], null);
        $this->setIfExists('boxItems', $data ?? [], null);
        $this->setIfExists('fromAddress', $data ?? [], null);
        $this->setIfExists('purchaseOrderId', $data ?? [], null);
        $this->setIfExists('carrierName', $data ?? [], null);
        $this->setIfExists('carrierServiceType', $data ?? [], null);
        $this->setIfExists('labelSize', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['packageType'] === null) {
            $invalidProperties[] = "'packageType' can't be null";
        }
        if ($this->container['boxDimensions'] === null) {
            $invalidProperties[] = "'boxDimensions' can't be null";
        }
        if ($this->container['boxItems'] === null) {
            $invalidProperties[] = "'boxItems' can't be null";
        }
        if ($this->container['fromAddress'] === null) {
            $invalidProperties[] = "'fromAddress' can't be null";
        }
        if ($this->container['purchaseOrderId'] === null) {
            $invalidProperties[] = "'purchaseOrderId' can't be null";
        }
        if ($this->container['carrierName'] === null) {
            $invalidProperties[] = "'carrierName' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets packageType
     *
     * @return string
    
     */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
     * Sets packageType
     *
     * @param string $packageType Package Type. Supported Package Types are - 'CUSTOM_PACKAGE', 'FEDEX_ENVELOPE', 'FEDEX_PAK'
     *
     * @return self
    
     */
    public function setPackageType($packageType)
    {
        if (is_null($packageType)) {
            throw new \InvalidArgumentException('non-nullable packageType cannot be null');
        }

        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
     * Gets boxDimensions
     *
     * @return \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxDimensions
    
     */
    public function getBoxDimensions()
    {
        return $this->container['boxDimensions'];
    }

    /**
     * Sets boxDimensions
     *
     * @param \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxDimensions $boxDimensions boxDimensions
     *
     * @return self
    
     */
    public function setBoxDimensions($boxDimensions)
    {
        if (is_null($boxDimensions)) {
            throw new \InvalidArgumentException('non-nullable boxDimensions cannot be null');
        }

        $this->container['boxDimensions'] = $boxDimensions;
        return $this;
    }

    /**
     * Gets boxItems
     *
     * @return \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxItemsInner[]
    
     */
    public function getBoxItems()
    {
        return $this->container['boxItems'];
    }

    /**
     * Sets boxItems
     *
     * @param \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestBoxItemsInner[] $boxItems Box Items
     *
     * @return self
    
     */
    public function setBoxItems($boxItems)
    {
        if (is_null($boxItems)) {
            throw new \InvalidArgumentException('non-nullable boxItems cannot be null');
        }

        $this->container['boxItems'] = $boxItems;
        return $this;
    }

    /**
     * Gets fromAddress
     *
     * @return \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestFromAddress
    
     */
    public function getFromAddress()
    {
        return $this->container['fromAddress'];
    }

    /**
     * Sets fromAddress
     *
     * @param \Walmart\Models\MP\CA\InternationalShipping\CreateLabelRequestFromAddress $fromAddress fromAddress
     *
     * @return self
    
     */
    public function setFromAddress($fromAddress)
    {
        if (is_null($fromAddress)) {
            throw new \InvalidArgumentException('non-nullable fromAddress cannot be null');
        }

        $this->container['fromAddress'] = $fromAddress;
        return $this;
    }

    /**
     * Gets purchaseOrderId
     *
     * @return string
    
     */
    public function getPurchaseOrderId()
    {
        return $this->container['purchaseOrderId'];
    }

    /**
     * Sets purchaseOrderId
     *
     * @param string $purchaseOrderId Purchase Order Id
     *
     * @return self
    
     */
    public function setPurchaseOrderId($purchaseOrderId)
    {
        if (is_null($purchaseOrderId)) {
            throw new \InvalidArgumentException('non-nullable purchaseOrderId cannot be null');
        }

        $this->container['purchaseOrderId'] = $purchaseOrderId;
        return $this;
    }

    /**
     * Gets carrierName
     *
     * @return string
    
     */
    public function getCarrierName()
    {
        return $this->container['carrierName'];
    }

    /**
     * Sets carrierName
     *
     * @param string $carrierName Carrier Name. For now, supported carriers are - 'FedEx' and 'PUROLATOR'
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
     * Gets carrierServiceType
     *
     * @return string|null
    
     */
    public function getCarrierServiceType()
    {
        return $this->container['carrierServiceType'];
    }

    /**
     * Sets carrierServiceType
     *
     * @param string|null $carrierServiceType Carrier Service Type. For now, supported values for FedEx are - 'FEDEX_INTERNATIONAL_PRIORITY' for fedExPak/fedExEnvelope package types, 'FEDEX_INTERNATIONAL_ECONOMY' and 'FEDEX_INTERNATIONAL_GROUND'. Not required for PUROLATOR.
     *
     * @return self
    
     */
    public function setCarrierServiceType($carrierServiceType)
    {
        if (is_null($carrierServiceType)) {
            throw new \InvalidArgumentException('non-nullable carrierServiceType cannot be null');
        }

        $this->container['carrierServiceType'] = $carrierServiceType;
        return $this;
    }

    /**
     * Gets labelSize
     *
     * @return string|null
    
     */
    public function getLabelSize()
    {
        return $this->container['labelSize'];
    }

    /**
     * Sets labelSize
     *
     * @param string|null $labelSize Label Size e.g. A6, LETTER_SIZE or A4 for PDF response
     *
     * @return self
    
     */
    public function setLabelSize($labelSize)
    {
        if (is_null($labelSize)) {
            throw new \InvalidArgumentException('non-nullable labelSize cannot be null');
        }

        $this->container['labelSize'] = $labelSize;
        return $this;
    }
}


