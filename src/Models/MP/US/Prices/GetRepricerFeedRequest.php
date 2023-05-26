<?php

/**
 * GetRepricerFeedRequest
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
 * Price Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Prices;

use Walmart\Models\BaseModel;

/**
 * GetRepricerFeedRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetRepricerFeedRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getRepricerFeed_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'itemFeedHeader' => '\Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemFeedHeader',
        'item' => '\Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'itemFeedHeader' => null,
        'item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'itemFeedHeader' => false,
        'item' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'itemFeedHeader' => 'ItemFeedHeader',
        'item' => 'Item'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'itemFeedHeader' => 'setItemFeedHeader',
        'item' => 'setItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'itemFeedHeader' => 'getItemFeedHeader',
        'item' => 'getItem'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('itemFeedHeader', $data ?? [], null);
        $this->setIfExists('item', $data ?? [], null);
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
     * Gets itemFeedHeader
     *
     * @return \Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemFeedHeader|null
    
     */
    public function getItemFeedHeader()
    {
        return $this->container['itemFeedHeader'];
    }

    /**
     * Sets itemFeedHeader
     *
     * @param \Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemFeedHeader|null $itemFeedHeader itemFeedHeader
     *
     * @return self
    
     */
    public function setItemFeedHeader($itemFeedHeader)
    {
        if (is_null($itemFeedHeader)) {
            throw new \InvalidArgumentException('non-nullable itemFeedHeader cannot be null');
        }

        $this->container['itemFeedHeader'] = $itemFeedHeader;
        return $this;
    }

    /**
     * Gets item
     *
     * @return \Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemInner[]|null
    
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     *
     * @param \Walmart\Models\MP\US\Prices\GetRepricerFeedRequestItemInner[]|null $item item
     *
     * @return self
    
     */
    public function setItem($item)
    {
        if (is_null($item)) {
            throw new \InvalidArgumentException('non-nullable item cannot be null');
        }

        $this->container['item'] = $item;
        return $this;
    }
}


