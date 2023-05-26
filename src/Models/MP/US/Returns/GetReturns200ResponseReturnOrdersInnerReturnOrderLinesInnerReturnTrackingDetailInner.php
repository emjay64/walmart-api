<?php

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerReturnTrackingDetailInner
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

namespace Walmart\Models\MP\US\Returns;

use Walmart\Models\BaseModel;

/**
 * GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerReturnTrackingDetailInner Class Doc Comment
 *
 * @category Class

 * @description Informational blocks added as the return order completes its journey from return creation to received and refunded.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerReturnTrackingDetailInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getReturns_200_response_returnOrders_inner_returnOrderLines_inner_returnTrackingDetail_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sequenceNo' => 'int',
        'eventTag' => 'string',
        'eventDescription' => 'string',
        'eventTime' => '\DateTime',
        'references' => '\Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sequenceNo' => 'int64',
        'eventTag' => null,
        'eventDescription' => null,
        'eventTime' => 'date-time',
        'references' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sequenceNo' => false,
        'eventTag' => false,
        'eventDescription' => false,
        'eventTime' => false,
        'references' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sequenceNo' => 'sequenceNo',
        'eventTag' => 'eventTag',
        'eventDescription' => 'eventDescription',
        'eventTime' => 'eventTime',
        'references' => 'references'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sequenceNo' => 'setSequenceNo',
        'eventTag' => 'setEventTag',
        'eventDescription' => 'setEventDescription',
        'eventTime' => 'setEventTime',
        'references' => 'setReferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sequenceNo' => 'getSequenceNo',
        'eventTag' => 'getEventTag',
        'eventDescription' => 'getEventDescription',
        'eventTime' => 'getEventTime',
        'references' => 'getReferences'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('sequenceNo', $data ?? [], null);
        $this->setIfExists('eventTag', $data ?? [], null);
        $this->setIfExists('eventDescription', $data ?? [], null);
        $this->setIfExists('eventTime', $data ?? [], null);
        $this->setIfExists('references', $data ?? [], null);
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
     * Gets sequenceNo
     *
     * @return int|null
    
     */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
     * Sets sequenceNo
     *
     * @param int|null $sequenceNo The stage the return is in. (e.g., '1' is an initiated return)
     *
     * @return self
    
     */
    public function setSequenceNo($sequenceNo)
    {
        if (is_null($sequenceNo)) {
            throw new \InvalidArgumentException('non-nullable sequenceNo cannot be null');
        }

        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
     * Gets eventTag
     *
     * @return string|null
    
     */
    public function getEventTag()
    {
        return $this->container['eventTag'];
    }

    /**
     * Sets eventTag
     *
     * @param string|null $eventTag The last completed return event. (e.g., 'RETURN_IN_TRANSIT')
     *
     * @return self
    
     */
    public function setEventTag($eventTag)
    {
        if (is_null($eventTag)) {
            throw new \InvalidArgumentException('non-nullable eventTag cannot be null');
        }

        $this->container['eventTag'] = $eventTag;
        return $this;
    }

    /**
     * Gets eventDescription
     *
     * @return string|null
    
     */
    public function getEventDescription()
    {
        return $this->container['eventDescription'];
    }

    /**
     * Sets eventDescription
     *
     * @param string|null $eventDescription Description of current return status event. (e.g., 'A MARKET_PLACE Return in Transit')
     *
     * @return self
    
     */
    public function setEventDescription($eventDescription)
    {
        if (is_null($eventDescription)) {
            throw new \InvalidArgumentException('non-nullable eventDescription cannot be null');
        }

        $this->container['eventDescription'] = $eventDescription;
        return $this;
    }

    /**
     * Gets eventTime
     *
     * @return \DateTime|null
    
     */
    public function getEventTime()
    {
        return $this->container['eventTime'];
    }

    /**
     * Sets eventTime
     *
     * @param \DateTime|null $eventTime Timestamp of listed event
     *
     * @return self
    
     */
    public function setEventTime($eventTime)
    {
        if (is_null($eventTime)) {
            throw new \InvalidArgumentException('non-nullable eventTime cannot be null');
        }

        $this->container['eventTime'] = $eventTime;
        return $this;
    }

    /**
     * Gets references
     *
     * @return \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]|null
    
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Walmart\Models\MP\US\Returns\GetReturns200ResponseReturnOrdersInnerReturnOrderLinesInnerChargesInnerReferencesInner[]|null $references Used only for 1P
     *
     * @return self
    
     */
    public function setReferences($references)
    {
        if (is_null($references)) {
            throw new \InvalidArgumentException('non-nullable references cannot be null');
        }

        $this->container['references'] = $references;
        return $this;
    }
}


