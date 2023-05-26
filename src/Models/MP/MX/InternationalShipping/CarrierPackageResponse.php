<?php

/**
 * CarrierPackageResponse
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\InternationalShipping;

use Walmart\Models\BaseModel;

/**
 * CarrierPackageResponse Class Doc Comment
 *
 * @category Class

 * @description data

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CarrierPackageResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CarrierPackageResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'packageTypeShortName' => 'string',
        'packageTypeDisplayName' => 'string',
        'length' => 'int',
        'width' => 'int',
        'height' => 'int',
        'dimensionUnit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'packageTypeShortName' => null,
        'packageTypeDisplayName' => null,
        'length' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'dimensionUnit' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'packageTypeShortName' => false,
        'packageTypeDisplayName' => false,
        'length' => false,
        'width' => false,
        'height' => false,
        'dimensionUnit' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'packageTypeShortName' => 'packageTypeShortName',
        'packageTypeDisplayName' => 'packageTypeDisplayName',
        'length' => 'length',
        'width' => 'width',
        'height' => 'height',
        'dimensionUnit' => 'dimensionUnit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'packageTypeShortName' => 'setPackageTypeShortName',
        'packageTypeDisplayName' => 'setPackageTypeDisplayName',
        'length' => 'setLength',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dimensionUnit' => 'setDimensionUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'packageTypeShortName' => 'getPackageTypeShortName',
        'packageTypeDisplayName' => 'getPackageTypeDisplayName',
        'length' => 'getLength',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dimensionUnit' => 'getDimensionUnit'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('packageTypeShortName', $data ?? [], null);
        $this->setIfExists('packageTypeDisplayName', $data ?? [], null);
        $this->setIfExists('length', $data ?? [], null);
        $this->setIfExists('width', $data ?? [], null);
        $this->setIfExists('height', $data ?? [], null);
        $this->setIfExists('dimensionUnit', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
    
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The carrier package Id
     *
     * @return self
    
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets packageTypeShortName
     *
     * @return string|null
    
     */
    public function getPackageTypeShortName()
    {
        return $this->container['packageTypeShortName'];
    }

    /**
     * Sets packageTypeShortName
     *
     * @param string|null $packageTypeShortName The carrier package short name
     *
     * @return self
    
     */
    public function setPackageTypeShortName($packageTypeShortName)
    {
        if (is_null($packageTypeShortName)) {
            throw new \InvalidArgumentException('non-nullable packageTypeShortName cannot be null');
        }

        $this->container['packageTypeShortName'] = $packageTypeShortName;
        return $this;
    }

    /**
     * Gets packageTypeDisplayName
     *
     * @return string|null
    
     */
    public function getPackageTypeDisplayName()
    {
        return $this->container['packageTypeDisplayName'];
    }

    /**
     * Sets packageTypeDisplayName
     *
     * @param string|null $packageTypeDisplayName The carrier package display name
     *
     * @return self
    
     */
    public function setPackageTypeDisplayName($packageTypeDisplayName)
    {
        if (is_null($packageTypeDisplayName)) {
            throw new \InvalidArgumentException('non-nullable packageTypeDisplayName cannot be null');
        }

        $this->container['packageTypeDisplayName'] = $packageTypeDisplayName;
        return $this;
    }

    /**
     * Gets length
     *
     * @return int|null
    
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param int|null $length The package length
     *
     * @return self
    
     */
    public function setLength($length)
    {
        if (is_null($length)) {
            throw new \InvalidArgumentException('non-nullable length cannot be null');
        }

        $this->container['length'] = $length;
        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
    
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width The package width
     *
     * @return self
    
     */
    public function setWidth($width)
    {
        if (is_null($width)) {
            throw new \InvalidArgumentException('non-nullable width cannot be null');
        }

        $this->container['width'] = $width;
        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
    
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height The package height
     *
     * @return self
    
     */
    public function setHeight($height)
    {
        if (is_null($height)) {
            throw new \InvalidArgumentException('non-nullable height cannot be null');
        }

        $this->container['height'] = $height;
        return $this;
    }

    /**
     * Gets dimensionUnit
     *
     * @return string|null
    
     */
    public function getDimensionUnit()
    {
        return $this->container['dimensionUnit'];
    }

    /**
     * Sets dimensionUnit
     *
     * @param string|null $dimensionUnit The package dimension unit
     *
     * @return self
    
     */
    public function setDimensionUnit($dimensionUnit)
    {
        if (is_null($dimensionUnit)) {
            throw new \InvalidArgumentException('non-nullable dimensionUnit cannot be null');
        }

        $this->container['dimensionUnit'] = $dimensionUnit;
        return $this;
    }
}


