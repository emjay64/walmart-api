<?php

/**
 * FulfillmentDate
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
 * FulfillmentDate Class Doc Comment
 *
 * @category Class

 * @description Fulfillment date details.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FulfillmentDate extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentDate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'minPromiseDate' => '\DateTime',
        'fulfillmentMaximumPromiseDateDetail' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'minPromiseDate' => 'date-time',
        'fulfillmentMaximumPromiseDateDetail' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'minPromiseDate' => false,
        'fulfillmentMaximumPromiseDateDetail' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'minPromiseDate' => 'minPromiseDate',
        'fulfillmentMaximumPromiseDateDetail' => 'Fulfillment maximum promise date detail.'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'minPromiseDate' => 'setMinPromiseDate',
        'fulfillmentMaximumPromiseDateDetail' => 'setFulfillmentMaximumPromiseDateDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'minPromiseDate' => 'getMinPromiseDate',
        'fulfillmentMaximumPromiseDateDetail' => 'getFulfillmentMaximumPromiseDateDetail'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('minPromiseDate', $data ?? [], null);
        $this->setIfExists('fulfillmentMaximumPromiseDateDetail', $data ?? [], null);
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
     * Gets minPromiseDate
     *
     * @return \DateTime|null
    
     */
    public function getMinPromiseDate()
    {
        return $this->container['minPromiseDate'];
    }

    /**
     * Sets minPromiseDate
     *
     * @param \DateTime|null $minPromiseDate Fulfillment minimum promise date detail.
     *
     * @return self
    
     */
    public function setMinPromiseDate($minPromiseDate)
    {
        if (is_null($minPromiseDate)) {
            throw new \InvalidArgumentException('non-nullable minPromiseDate cannot be null');
        }

        $this->container['minPromiseDate'] = $minPromiseDate;
        return $this;
    }

    /**
     * Gets fulfillmentMaximumPromiseDateDetail
     *
     * @return \DateTime|null
    
     */
    public function getFulfillmentMaximumPromiseDateDetail()
    {
        return $this->container['fulfillmentMaximumPromiseDateDetail'];
    }

    /**
     * Sets fulfillmentMaximumPromiseDateDetail
     *
     * @param \DateTime|null $fulfillmentMaximumPromiseDateDetail fulfillmentMaximumPromiseDateDetail
     *
     * @return self
    
     */
    public function setFulfillmentMaximumPromiseDateDetail($fulfillmentMaximumPromiseDateDetail)
    {
        if (is_null($fulfillmentMaximumPromiseDateDetail)) {
            throw new \InvalidArgumentException('non-nullable fulfillmentMaximumPromiseDateDetail cannot be null');
        }

        $this->container['fulfillmentMaximumPromiseDateDetail'] = $fulfillmentMaximumPromiseDateDetail;
        return $this;
    }
}


