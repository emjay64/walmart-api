<?php

/**
 * ShipmentItem
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
 * ShipmentItem Class Doc Comment
 *
 * @category Class

 * @description The items which needs to be send in the shipment

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShipmentItem extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'vendorSku' => 'string',
        'itemQty' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'vendorSku' => null,
        'itemQty' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vendorSku' => false,
        'itemQty' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'vendorSku' => 'vendorSku',
        'itemQty' => 'itemQty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'vendorSku' => 'setVendorSku',
        'itemQty' => 'setItemQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'vendorSku' => 'getVendorSku',
        'itemQty' => 'getItemQty'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('vendorSku', $data ?? [], null);
        $this->setIfExists('itemQty', $data ?? [], null);
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
     * Gets vendorSku
     *
     * @return string|null
    
     */
    public function getVendorSku()
    {
        return $this->container['vendorSku'];
    }

    /**
     * Sets vendorSku
     *
     * @param string|null $vendorSku Seller Item ID
     *
     * @return self
    
     */
    public function setVendorSku($vendorSku)
    {
        if (is_null($vendorSku)) {
            throw new \InvalidArgumentException('non-nullable vendorSku cannot be null');
        }

        $this->container['vendorSku'] = $vendorSku;
        return $this;
    }

    /**
     * Gets itemQty
     *
     * @return int|null
    
     */
    public function getItemQty()
    {
        return $this->container['itemQty'];
    }

    /**
     * Sets itemQty
     *
     * @param int|null $itemQty Total number of sellable units
     *
     * @return self
    
     */
    public function setItemQty($itemQty)
    {
        if (is_null($itemQty)) {
            throw new \InvalidArgumentException('non-nullable itemQty cannot be null');
        }

        $this->container['itemQty'] = $itemQty;
        return $this;
    }
}


