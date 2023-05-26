<?php

/**
 * GetInboundOrderErrors200ResponsePayloadInner
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
 * GetInboundOrderErrors200ResponsePayloadInner Class Doc Comment
 *
 * @category Class

 * @description response payload

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetInboundOrderErrors200ResponsePayloadInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getInboundOrderErrors_200_response_payload_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inboundOrderId' => 'string',
        'createdDate' => '\DateTime',
        'returnAddress' => '\Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress',
        'orderItems' => '\Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[]',
        'errors' => '\Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]'
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
        'createdDate' => 'date-time',
        'returnAddress' => null,
        'orderItems' => null,
        'errors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'inboundOrderId' => false,
        'createdDate' => false,
        'returnAddress' => false,
        'orderItems' => false,
        'errors' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'inboundOrderId' => 'inboundOrderId',
        'createdDate' => 'createdDate',
        'returnAddress' => 'returnAddress',
        'orderItems' => 'orderItems',
        'errors' => 'errors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inboundOrderId' => 'setInboundOrderId',
        'createdDate' => 'setCreatedDate',
        'returnAddress' => 'setReturnAddress',
        'orderItems' => 'setOrderItems',
        'errors' => 'setErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inboundOrderId' => 'getInboundOrderId',
        'createdDate' => 'getCreatedDate',
        'returnAddress' => 'getReturnAddress',
        'orderItems' => 'getOrderItems',
        'errors' => 'getErrors'
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
        $this->setIfExists('createdDate', $data ?? [], null);
        $this->setIfExists('returnAddress', $data ?? [], null);
        $this->setIfExists('orderItems', $data ?? [], null);
        $this->setIfExists('errors', $data ?? [], null);
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
     * Gets inboundOrderId
     *
     * @return string|null
    
     */
    public function getInboundOrderId()
    {
        return $this->container['inboundOrderId'];
    }

    /**
     * Sets inboundOrderId
     *
     * @param string|null $inboundOrderId Unique ID identifying inbound shipment requests
     *
     * @return self
    
     */
    public function setInboundOrderId($inboundOrderId)
    {
        if (is_null($inboundOrderId)) {
            throw new \InvalidArgumentException('non-nullable inboundOrderId cannot be null');
        }

        $this->container['inboundOrderId'] = $inboundOrderId;
        return $this;
    }

    /**
     * Gets createdDate
     *
     * @return \DateTime|null
    
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
     * Sets createdDate
     *
     * @param \DateTime|null $createdDate created date for the request
     *
     * @return self
    
     */
    public function setCreatedDate($createdDate)
    {
        if (is_null($createdDate)) {
            throw new \InvalidArgumentException('non-nullable createdDate cannot be null');
        }

        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
     * Gets returnAddress
     *
     * @return \Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress|null
    
     */
    public function getReturnAddress()
    {
        return $this->container['returnAddress'];
    }

    /**
     * Sets returnAddress
     *
     * @param \Walmart\Models\MP\US\Fulfillment\GetInboundShipments200ResponsePayloadInnerReturnAddress|null $returnAddress returnAddress
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
     * @return \Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[]|null
    
     */
    public function getOrderItems()
    {
        return $this->container['orderItems'];
    }

    /**
     * Sets orderItems
     *
     * @param \Walmart\Models\MP\US\Fulfillment\CreateFulfillmentRequestPayloadOrderItemsInner[]|null $orderItems inbound shipment request line items
     *
     * @return self
    
     */
    public function setOrderItems($orderItems)
    {
        if (is_null($orderItems)) {
            throw new \InvalidArgumentException('non-nullable orderItems cannot be null');
        }

        $this->container['orderItems'] = $orderItems;
        return $this;
    }

    /**
     * Gets errors
     *
     * @return \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null
    
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param \Walmart\Models\MP\US\Fulfillment\UpdateShipmentQuantity200ResponseErrorsInner[]|null $errors Error in inbound shipment creation
     *
     * @return self
    
     */
    public function setErrors($errors)
    {
        if (is_null($errors)) {
            throw new \InvalidArgumentException('non-nullable errors cannot be null');
        }

        $this->container['errors'] = $errors;
        return $this;
    }
}


