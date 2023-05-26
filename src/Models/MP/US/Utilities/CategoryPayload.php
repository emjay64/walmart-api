<?php

/**
 * CategoryPayload
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
 * Utilities Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Utilities;

use Walmart\Models\BaseModel;

/**
 * CategoryPayload Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CategoryPayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CategoryPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'category' => 'string',
        'subcategory' => '\Walmart\Models\MP\US\Utilities\GetTaxonomyResponse200ResponsePayloadInnerSubcategoryInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'category' => null,
        'subcategory' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'category' => false,
        'subcategory' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'category' => 'category',
        'subcategory' => 'subcategory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'category' => 'setCategory',
        'subcategory' => 'setSubcategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'category' => 'getCategory',
        'subcategory' => 'getSubcategory'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('subcategory', $data ?? [], null);
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
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Type of item
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets subcategory
     *
     * @return \Walmart\Models\MP\US\Utilities\GetTaxonomyResponse200ResponsePayloadInnerSubcategoryInner[]|null
    
     */
    public function getSubcategory()
    {
        return $this->container['subcategory'];
    }

    /**
     * Sets subcategory
     *
     * @param \Walmart\Models\MP\US\Utilities\GetTaxonomyResponse200ResponsePayloadInnerSubcategoryInner[]|null $subcategory Specific kind of category
     *
     * @return self
    
     */
    public function setSubcategory($subcategory)
    {
        if (is_null($subcategory)) {
            throw new \InvalidArgumentException('non-nullable subcategory cannot be null');
        }

        $this->container['subcategory'] = $subcategory;
        return $this;
    }
}


