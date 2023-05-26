<?php

/**
 * OrderLineStatusType
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\Returns;

use Walmart\Models\BaseModel;

/**
 * OrderLineStatusType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class OrderLineStatusType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderLineStatusType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'status' => 'string',
        'statusQuantity' => '\Walmart\Models\MP\MX\Returns\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusStatusQuantity'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'statusQuantity' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'statusQuantity' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'status' => 'status',
        'statusQuantity' => 'statusQuantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'statusQuantity' => 'setStatusQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'statusQuantity' => 'getStatusQuantity'
    ];


    public const STATUS_PROCUREMENT_PURCHASE_ORDER_SHIPPED = 'PROCUREMENT_PURCHASE_ORDER_SHIPPED';

    public const STATUS_PROCUREMENT_TRANSFER_ORDER_SHIPPED = 'PROCUREMENT_TRANSFER_ORDER_SHIPPED';

    public const STATUS_BACK_ORDERED_FROM_NODE = 'BACK_ORDERED_FROM_NODE';

    public const STATUS_RESERVED_AWAITING_ACCEPTANCE = 'RESERVED_AWAITING_ACCEPTANCE';

    public const STATUS_HELD = 'HELD';

    public const STATUS_DRAFT_ORDER_RESERVED_AWAITING_ACCEPTANCE = 'DRAFT_ORDER_RESERVED_AWAITING_ACCEPTANCE';

    public const STATUS_RECEIPT_CLOSED = 'RECEIPT_CLOSED';

    public const STATUS_CARRIED = 'CARRIED';

    public const STATUS_RECEIVED_AS_COMPONENTS = 'RECEIVED_AS_COMPONENTS';

    public const STATUS_SHIPMENT_DELAYED = 'SHIPMENT_DELAYED';

    public const STATUS_SHORTED = 'SHORTED';

    public const STATUS_WORK_ORDER_COMPLETED = 'WORK_ORDER_COMPLETED';

    public const STATUS_AWAITING_SHIPMENT_CONSOLIDATION = 'AWAITING_SHIPMENT_CONSOLIDATION';

    public const STATUS_AWAITING_WMS_INTERFACE = 'AWAITING_WMS_INTERFACE';

    public const STATUS_RETURN_RECEIVED = 'RETURN_RECEIVED';

    public const STATUS_ORDER_DELIVERED = 'ORDER_DELIVERED';

    public const STATUS_PROCUREMENT_TRANSFER_ORDER_RECEIVED = 'PROCUREMENT_TRANSFER_ORDER_RECEIVED';

    public const STATUS_CUSTOMER_PICKED_UP = 'CUSTOMER_PICKED_UP';

    public const STATUS_MEMBERSHIP_PICKED_UP = 'MEMBERSHIP_PICKED_UP';

    public const STATUS_SHIPPED = 'SHIPPED';

    public const STATUS_DELIVERED = 'DELIVERED';

    public const STATUS_READY_FOR_CUSTOMER = 'READY_FOR_CUSTOMER';

    public const STATUS_PACK_COMPLETE = 'PACK_COMPLETE';

    public const STATUS_READY_FOR_PACKING = 'READY_FOR_PACKING';

    public const STATUS_SYNCHED = 'SYNCHED';

    public const STATUS_RETURN_CREATED = 'RETURN_CREATED';

    public const STATUS_SENT_FOR_FULFILLMENT = 'SENT_FOR_FULFILLMENT';

    public const STATUS_PROCUREMENT_TRANSFER_ORDER_DELIVERED = 'PROCUREMENT_TRANSFER_ORDER_DELIVERED';

    public const STATUS_PICKED_UP_BY_CUSTOMER = 'PICKED_UP_BY_CUSTOMER';

    public const STATUS_DRAFT_ORDER_CREATED = 'DRAFT_ORDER_CREATED';

    public const STATUS_DRAFT_ORDER_RESERVED = 'DRAFT_ORDER_RESERVED';

    public const STATUS_CREATED = 'CREATED';

    public const STATUS_RESERVED = 'RESERVED';

    public const STATUS_BEING_NEGOTIATED = 'BEING_NEGOTIATED';

    public const STATUS_ACCEPTED = 'ACCEPTED';

    public const STATUS_BACK_ORDERED = 'BACK_ORDERED';

    public const STATUS_UNSCHEDULED = 'UNSCHEDULED';

    public const STATUS_SCHEDULED = 'SCHEDULED';

    public const STATUS_AWAITING_CHAINED_ORDER_CREATION = 'AWAITING_CHAINED_ORDER_CREATION';

    public const STATUS_CHAINED_ORDER_CREATED = 'CHAINED_ORDER_CREATED';

    public const STATUS_PROCUREMENT_PURCHASE_ORDER_CREATED = 'PROCUREMENT_PURCHASE_ORDER_CREATED';

    public const STATUS_WORK_ORDER_CREATED = 'WORK_ORDER_CREATED';

    public const STATUS_PROCUREMENT_TRANSFER_ORDER_CREATED = 'PROCUREMENT_TRANSFER_ORDER_CREATED';

    public const STATUS_RELEASED = 'RELEASED';

    public const STATUS_SENT_TO_NODE = 'SENT_TO_NODE';

    public const STATUS_INCLUDED_IN_SHIPMENT = 'INCLUDED_IN_SHIPMENT';

    public const STATUS_CANCELLED = 'CANCELLED';

    public const STATUS_AWAITING_PROCUREMENT_PURCHASE_ORDER_CREATION = 'AWAITING_PROCUREMENT_PURCHASE_ORDER_CREATION';

    public const STATUS_AWAITING_PROCUREMENT_TRANSFER_ORDER_CREATION = 'AWAITING_PROCUREMENT_TRANSFER_ORDER_CREATION';

    public const STATUS_RECEIVED = 'RECEIVED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PROCUREMENT_PURCHASE_ORDER_SHIPPED,
            self::STATUS_PROCUREMENT_TRANSFER_ORDER_SHIPPED,
            self::STATUS_BACK_ORDERED_FROM_NODE,
            self::STATUS_RESERVED_AWAITING_ACCEPTANCE,
            self::STATUS_HELD,
            self::STATUS_DRAFT_ORDER_RESERVED_AWAITING_ACCEPTANCE,
            self::STATUS_RECEIPT_CLOSED,
            self::STATUS_CARRIED,
            self::STATUS_RECEIVED_AS_COMPONENTS,
            self::STATUS_SHIPMENT_DELAYED,
            self::STATUS_SHORTED,
            self::STATUS_WORK_ORDER_COMPLETED,
            self::STATUS_AWAITING_SHIPMENT_CONSOLIDATION,
            self::STATUS_AWAITING_WMS_INTERFACE,
            self::STATUS_RETURN_RECEIVED,
            self::STATUS_ORDER_DELIVERED,
            self::STATUS_PROCUREMENT_TRANSFER_ORDER_RECEIVED,
            self::STATUS_CUSTOMER_PICKED_UP,
            self::STATUS_MEMBERSHIP_PICKED_UP,
            self::STATUS_SHIPPED,
            self::STATUS_DELIVERED,
            self::STATUS_READY_FOR_CUSTOMER,
            self::STATUS_PACK_COMPLETE,
            self::STATUS_READY_FOR_PACKING,
            self::STATUS_SYNCHED,
            self::STATUS_RETURN_CREATED,
            self::STATUS_SENT_FOR_FULFILLMENT,
            self::STATUS_PROCUREMENT_TRANSFER_ORDER_DELIVERED,
            self::STATUS_PICKED_UP_BY_CUSTOMER,
            self::STATUS_DRAFT_ORDER_CREATED,
            self::STATUS_DRAFT_ORDER_RESERVED,
            self::STATUS_CREATED,
            self::STATUS_RESERVED,
            self::STATUS_BEING_NEGOTIATED,
            self::STATUS_ACCEPTED,
            self::STATUS_BACK_ORDERED,
            self::STATUS_UNSCHEDULED,
            self::STATUS_SCHEDULED,
            self::STATUS_AWAITING_CHAINED_ORDER_CREATION,
            self::STATUS_CHAINED_ORDER_CREATED,
            self::STATUS_PROCUREMENT_PURCHASE_ORDER_CREATED,
            self::STATUS_WORK_ORDER_CREATED,
            self::STATUS_PROCUREMENT_TRANSFER_ORDER_CREATED,
            self::STATUS_RELEASED,
            self::STATUS_SENT_TO_NODE,
            self::STATUS_INCLUDED_IN_SHIPMENT,
            self::STATUS_CANCELLED,
            self::STATUS_AWAITING_PROCUREMENT_PURCHASE_ORDER_CREATION,
            self::STATUS_AWAITING_PROCUREMENT_TRANSFER_ORDER_CREATION,
            self::STATUS_RECEIVED,
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('statusQuantity', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['statusQuantity'] === null) {
            $invalidProperties[] = "'statusQuantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets status
     *
     * @return string
    
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return self
    
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;
        return $this;
    }

    /**
     * Gets statusQuantity
     *
     * @return \Walmart\Models\MP\MX\Returns\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusStatusQuantity
    
     */
    public function getStatusQuantity()
    {
        return $this->container['statusQuantity'];
    }

    /**
     * Sets statusQuantity
     *
     * @param \Walmart\Models\MP\MX\Returns\RefundOrderLinesRequestOrderRefundOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusStatusQuantity $statusQuantity statusQuantity
     *
     * @return self
    
     */
    public function setStatusQuantity($statusQuantity)
    {
        if (is_null($statusQuantity)) {
            throw new \InvalidArgumentException('non-nullable statusQuantity cannot be null');
        }

        $this->container['statusQuantity'] = $statusQuantity;
        return $this;
    }
}


