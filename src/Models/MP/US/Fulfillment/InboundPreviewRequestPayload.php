<?php

/**
 * InboundPreviewRequestPayload
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
 * Fulfillment Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Fulfillment;

use Walmart\Models\BaseModel;

/**
 * InboundPreviewRequestPayload Class Doc Comment
 *
 * @category Class

 * @description Request Payload

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class InboundPreviewRequestPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'inboundPreview_request_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inboundOrderId' => 'string',
        'returnAddress' => '\Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress',
        'orderItems' => '\Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inboundOrderId' => null,
        'returnAddress' => null,
        'orderItems' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inboundOrderId' => false,
        'returnAddress' => false,
        'orderItems' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inboundOrderId' => 'inboundOrderId',
        'returnAddress' => 'returnAddress',
        'orderItems' => 'orderItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inboundOrderId' => 'setInboundOrderId',
        'returnAddress' => 'setReturnAddress',
        'orderItems' => 'setOrderItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inboundOrderId' => 'getInboundOrderId',
        'returnAddress' => 'getReturnAddress',
        'orderItems' => 'getOrderItems'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('inboundOrderId', $data ?? [], null);
        $this->setIfExists('returnAddress', $data ?? [], null);
        $this->setIfExists('orderItems', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['inboundOrderId'] === null) {
            $invalidProperties[] = "'inboundOrderId' can't be null";
        }
        if ((mb_strlen($this->container['inboundOrderId']) > 50)) {
            $invalidProperties[] = "invalid value for 'inboundOrderId', the character length must be smaller than or equal to 50.";
        }







        if ($this->container['returnAddress'] === null) {
            $invalidProperties[] = "'returnAddress' can't be null";
        }
        if ($this->container['orderItems'] === null) {
            $invalidProperties[] = "'orderItems' can't be null";
        }





        if ((count($this->container['orderItems']) > 5000)) {
            $invalidProperties[] = "invalid value for 'orderItems', number of items must be less than or equal to 5000.";
        }


        if ((count($this->container['orderItems']) < 1)) {
            $invalidProperties[] = "invalid value for 'orderItems', number of items must be greater than or equal to 1.";
        }
        return $invalidProperties;
    }

    /**
     * Gets inboundOrderId
     *
     * @return string
    
     */
    public function getInboundOrderId()
    {
        return $this->container['inboundOrderId'];
    }

    /**
     * Sets inboundOrderId
     *
     * @param string $inboundOrderId Unique identifier used for shipments
     *
     * @return self
    
     */
    public function setInboundOrderId($inboundOrderId)
    {
        if (is_null($inboundOrderId)) {
            throw new \InvalidArgumentException('non-nullable inboundOrderId cannot be null');
        }
        if ((mb_strlen($inboundOrderId) > 50)) {
            throw new \InvalidArgumentException('invalid length for $inboundOrderId when calling InboundPreviewRequestPayload., must be smaller than or equal to 50.');
        }






        $this->container['inboundOrderId'] = $inboundOrderId;
        return $this;
    }

    /**
     * Gets returnAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress
    
     */
    public function getReturnAddress()
    {
        return $this->container['returnAddress'];
    }

    /**
     * Sets returnAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress $returnAddress returnAddress
     *
     * @return self
    
     */
    public function setReturnAddress($returnAddress)
    {
        if (is_null($returnAddress)) {
            throw new \InvalidArgumentException('non-nullable returnAddress cannot be null');
        }

        $this->container['returnAddress'] = $returnAddress;
        return $this;
    }

    /**
     * Gets orderItems
     *
     * @return \Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[]
    
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[] $orderItems List of Order Items
     *
     * @return self
    
     */
    public function setOrderItems($orderItems)
    {
        if (is_null($orderItems)) {
            throw new \InvalidArgumentException('non-nullable orderItems cannot be null');
        }





        if ((count($orderItems) > 5000)) {
            throw new \InvalidArgumentException('invalid value for $orderItems when calling InboundPreviewRequestPayload., number of items must be less than or equal to 5000.');
        }
        if ((count($orderItems) < 1)) {
            throw new \InvalidArgumentException('invalid length for $orderItems when calling InboundPreviewRequestPayload., number of items must be greater than or equal to 1.');
        }

        $this->container['orderItems'] = $orderItems;
        return $this;
    }
}


