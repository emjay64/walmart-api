<?php

/**
 * PostPurchaseQuality
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
 * Insights Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Insights;

use Walmart\Models\BaseModel;

/**
 * PostPurchaseQuality Class Doc Comment
 *
 * @category Class

 * @description Post Purchase Quality

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class PostPurchaseQuality extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PostPurchaseQuality';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'defectRatio' => 'int',
        'itemDefectCnt' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'defectRatio' => 'int32',
        'itemDefectCnt' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'defectRatio' => false,
        'itemDefectCnt' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'defectRatio' => 'defectRatio',
        'itemDefectCnt' => 'itemDefectCnt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'defectRatio' => 'setDefectRatio',
        'itemDefectCnt' => 'setItemDefectCnt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'defectRatio' => 'getDefectRatio',
        'itemDefectCnt' => 'getItemDefectCnt'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('defectRatio', $data ?? [], null);
        $this->setIfExists('itemDefectCnt', $data ?? [], null);
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
     * Gets defectRatio
     *
     * @return int|null
    
     */
    public function getDefectRatio()
    {
        return $this->container['defectRatio'];
    }

    /**
     * Sets defectRatio
     *
     * @param int|null $defectRatio Defect Ratio
     *
     * @return self
    
     */
    public function setDefectRatio($defectRatio)
    {
        if (is_null($defectRatio)) {
            throw new \InvalidArgumentException('non-nullable defectRatio cannot be null');
        }

        $this->container['defectRatio'] = $defectRatio;
        return $this;
    }

    /**
     * Gets itemDefectCnt
     *
     * @return int|null
    
     */
    public function getItemDefectCnt()
    {
        return $this->container['itemDefectCnt'];
    }

    /**
     * Sets itemDefectCnt
     *
     * @param int|null $itemDefectCnt Item Defect Count
     *
     * @return self
    
     */
    public function setItemDefectCnt($itemDefectCnt)
    {
        if (is_null($itemDefectCnt)) {
            throw new \InvalidArgumentException('non-nullable itemDefectCnt cannot be null');
        }

        $this->container['itemDefectCnt'] = $itemDefectCnt;
        return $this;
    }
}


