<?php

/**
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInner
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
 * PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInner Class Doc Comment
 *
 * @category Class

 * @description Fulfillment options details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'promiseFulfillments_200_response_payload_fulfillmentPlans_inner_fulfillmentModules_inner_fulfillmentGroups_inner_fulfillmentOptions_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fulfillmentMode' => 'string',
        'accessType' => 'string',
        'fulfillments' => '\Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner[]',
        'fulfillmentType' => 'string',
        'default' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fulfillmentMode' => null,
        'accessType' => null,
        'fulfillments' => null,
        'fulfillmentType' => null,
        'default' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fulfillmentMode' => false,
        'accessType' => false,
        'fulfillments' => false,
        'fulfillmentType' => false,
        'default' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'fulfillmentMode' => 'fulfillmentMode',
        'accessType' => 'accessType',
        'fulfillments' => 'fulfillments',
        'fulfillmentType' => 'fulfillmentType',
        'default' => 'default'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fulfillmentMode' => 'setFulfillmentMode',
        'accessType' => 'setAccessType',
        'fulfillments' => 'setFulfillments',
        'fulfillmentType' => 'setFulfillmentType',
        'default' => 'setDefault'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fulfillmentMode' => 'getFulfillmentMode',
        'accessType' => 'getAccessType',
        'fulfillments' => 'getFulfillments',
        'fulfillmentType' => 'getFulfillmentType',
        'default' => 'getDefault'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('fulfillmentMode', $data ?? [], null);
        $this->setIfExists('accessType', $data ?? [], null);
        $this->setIfExists('fulfillments', $data ?? [], null);
        $this->setIfExists('fulfillmentType', $data ?? [], null);
        $this->setIfExists('default', $data ?? [], null);
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
     * Gets fulfillmentMode
     *
     * @return string|null
    
     */
    public function getFulfillmentMode()
    {
        return $this->container['fulfillmentMode'];
    }

    /**
     * Sets fulfillmentMode
     *
     * @param string|null $fulfillmentMode Fulfillment mode detail. For example : 'UNSCHEDULED'
     *
     * @return self
    
     */
    public function setFulfillmentMode($fulfillmentMode)
    {
        if (is_null($fulfillmentMode)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentMode cannot be null');
        }

        $this->container['fulfillmentMode'] = $fulfillmentMode;
        return $this;
    }

    /**
     * Gets accessType
     *
     * @return string|null
    
     */
    public function getAccessType()
    {
        return $this->container['accessType'];
    }

    /**
     * Sets accessType
     *
     * @param string|null $accessType Fulfillment access type. For example : 'DELIVERY_ADDRESS'
     *
     * @return self
    
     */
    public function setAccessType($accessType)
    {
        if (is_null($accessType)) {
            throw new \InvalidArgumentException('non-nullable accessType cannot be null');
        }

        $this->container['accessType'] = $accessType;
        return $this;
    }

    /**
     * Gets fulfillments
     *
     * @return \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner[]|null
    
     */
    public function getFulfillments()
    {
        return $this->container['fulfillments'];
    }

    /**
     * Sets fulfillments
     *
     * @param \Walmart\Models\MP\US\Fulfillment\PromiseFulfillments200ResponsePayloadFulfillmentPlansInnerFulfillmentModulesInnerFulfillmentGroupsInnerFulfillmentOptionsInnerFulfillmentsInner[]|null $fulfillments Fulfillment details.
     *
     * @return self
    
     */
    public function setFulfillments($fulfillments)
    {
        if (is_null($fulfillments)) {
            throw new \InvalidArgumentException('non-nullable fulfillments cannot be null');
        }

        $this->container['fulfillments'] = $fulfillments;
        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return string|null
    
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string|null $fulfillmentType Fulfillment type detail. For example : 'DELIVERY'
     *
     * @return self
    
     */
    public function setFulfillmentType($fulfillmentType)
    {
        if (is_null($fulfillmentType)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentType cannot be null');
        }

        $this->container['fulfillmentType'] = $fulfillmentType;
        return $this;
    }

    /**
     * Gets default
     *
     * @return bool|null
    
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param bool|null $default default
     *
     * @return self
    
     */
    public function setDefault($default)
    {
        if (is_null($default)) {
            throw new \InvalidArgumentException('non-nullable default cannot be null');
        }

        $this->container['default'] = $default;
        return $this;
    }
}


