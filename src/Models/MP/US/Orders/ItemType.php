<?php

/**
 * ItemType
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

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * ItemType Class Doc Comment
 *
 * @category Class

 * @description The information for the item on the orderLine

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ItemType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ItemType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'productName' => 'string',
        'sku' => 'string',
        'imageUrl' => 'string',
        'weight' => '\Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItemWeight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'productName' => null,
        'sku' => null,
        'imageUrl' => null,
        'weight' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'productName' => false,
        'sku' => false,
        'imageUrl' => false,
        'weight' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'productName' => 'productName',
        'sku' => 'sku',
        'imageUrl' => 'imageUrl',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'productName' => 'setProductName',
        'sku' => 'setSku',
        'imageUrl' => 'setImageUrl',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'productName' => 'getProductName',
        'sku' => 'getSku',
        'imageUrl' => 'getImageUrl',
        'weight' => 'getWeight'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('productName', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('imageUrl', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets productName
     *
     * @return string
    
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName The name of the product associated with the line item. Example: 'Kenmore CF1' or '2086883 Canister Secondary Filter Generic 2 Pack'
     *
     * @return self
    
     */
    public function setProductName($productName)
    {
        if (is_null($productName)) {
            throw new \InvalidArgumentException('non-nullable productName cannot be null');
        }

        $this->container['productName'] = $productName;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku An arbitrary alphanumeric unique ID, assigned to each item in the item file
     *
     * @return self
    
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }

        $this->container['sku'] = $sku;
        return $this;
    }

    /**
     * Gets imageUrl
     *
     * @return string|null
    
     */
    public function getImageUrl()
    {
        return $this->container['imageUrl'];
    }

    /**
     * Sets imageUrl
     *
     * @param string|null $imageUrl Optional. Web URL for the image of the item.
     *
     * @return self
    
     */
    public function setImageUrl($imageUrl)
    {
        if (is_null($imageUrl)) {
            throw new \InvalidArgumentException('non-nullable imageUrl cannot be null');
        }

        $this->container['imageUrl'] = $imageUrl;
        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItemWeight|null
    
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Walmart\Models\MP\US\Orders\ShippingUpdates200ResponseOrderOrderLinesOrderLineInnerItemWeight|null $weight weight
     *
     * @return self
    
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }

        $this->container['weight'] = $weight;
        return $this;
    }
}


