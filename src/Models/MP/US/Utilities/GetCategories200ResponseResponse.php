<?php

/**
 * GetCategories200ResponseResponse
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
 * GetCategories200ResponseResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetCategories200ResponseResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getCategories_200_response_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'departmentName' => 'string',
        'departmentId' => 'string',
        'category' => '\Walmart\Models\MP\US\Utilities\GetCategories200ResponseResponseCategoryInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'departmentName' => null,
        'departmentId' => null,
        'category' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'departmentName' => false,
        'departmentId' => false,
        'category' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'departmentName' => 'departmentName',
        'departmentId' => 'departmentId',
        'category' => 'category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'departmentName' => 'setDepartmentName',
        'departmentId' => 'setDepartmentId',
        'category' => 'setCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'departmentName' => 'getDepartmentName',
        'departmentId' => 'getDepartmentId',
        'category' => 'getCategory'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('departmentName', $data ?? [], null);
        $this->setIfExists('departmentId', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
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
     * Gets departmentName
     *
     * @return string|null
    
     */
    public function getDepartmentName()
    {
        return $this->container['departmentName'];
    }

    /**
     * Sets departmentName
     *
     * @param string|null $departmentName The department name for which the categories have to be fetched
     *
     * @return self
    
     */
    public function setDepartmentName($departmentName)
    {
        if (is_null($departmentName)) {
            throw new \InvalidArgumentException('non-nullable departmentName cannot be null');
        }

        $this->container['departmentName'] = $departmentName;
        return $this;
    }

    /**
     * Gets departmentId
     *
     * @return string|null
    
     */
    public function getDepartmentId()
    {
        return $this->container['departmentId'];
    }

    /**
     * Sets departmentId
     *
     * @param string|null $departmentId The department id for which the categories have to be fetched
     *
     * @return self
    
     */
    public function setDepartmentId($departmentId)
    {
        if (is_null($departmentId)) {
            throw new \InvalidArgumentException('non-nullable departmentId cannot be null');
        }

        $this->container['departmentId'] = $departmentId;
        return $this;
    }

    /**
     * Gets category
     *
     * @return \Walmart\Models\MP\US\Utilities\GetCategories200ResponseResponseCategoryInner[]|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param \Walmart\Models\MP\US\Utilities\GetCategories200ResponseResponseCategoryInner[]|null $category category
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
}


