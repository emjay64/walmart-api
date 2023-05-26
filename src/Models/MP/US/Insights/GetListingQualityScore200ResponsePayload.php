<?php

/**
 * GetListingQualityScore200ResponsePayload
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
 * GetListingQualityScore200ResponsePayload Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetListingQualityScore200ResponsePayload extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getListingQualityScore_200_response_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'overAllQuality' => 'float',
        'score' => '\Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadScore',
        'postPurchaseQuality' => '\Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadPostPurchaseQuality'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'overAllQuality' => 'double',
        'score' => null,
        'postPurchaseQuality' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'overAllQuality' => false,
        'score' => false,
        'postPurchaseQuality' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'overAllQuality' => 'overAllQuality',
        'score' => 'score',
        'postPurchaseQuality' => 'postPurchaseQuality'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'overAllQuality' => 'setOverAllQuality',
        'score' => 'setScore',
        'postPurchaseQuality' => 'setPostPurchaseQuality'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'overAllQuality' => 'getOverAllQuality',
        'score' => 'getScore',
        'postPurchaseQuality' => 'getPostPurchaseQuality'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('overAllQuality', $data ?? [], null);
        $this->setIfExists('score', $data ?? [], null);
        $this->setIfExists('postPurchaseQuality', $data ?? [], null);
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
     * Gets overAllQuality
     *
     * @return float|null
    
     */
    public function getOverAllQuality()
    {
        return $this->container['overAllQuality'];
    }

    /**
     * Sets overAllQuality
     *
     * @param float|null $overAllQuality Over All Quality
     *
     * @return self
    
     */
    public function setOverAllQuality($overAllQuality)
    {
        if (is_null($overAllQuality)) {
            throw new \InvalidArgumentException('non-nullable overAllQuality cannot be null');
        }

        $this->container['overAllQuality'] = $overAllQuality;
        return $this;
    }

    /**
     * Gets score
     *
     * @return \Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadScore|null
    
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param \Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadScore|null $score score
     *
     * @return self
    
     */
    public function setScore($score)
    {
        if (is_null($score)) {
            throw new \InvalidArgumentException('non-nullable score cannot be null');
        }

        $this->container['score'] = $score;
        return $this;
    }

    /**
     * Gets postPurchaseQuality
     *
     * @return \Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadPostPurchaseQuality|null
    
     */
    public function getPostPurchaseQuality()
    {
        return $this->container['postPurchaseQuality'];
    }

    /**
     * Sets postPurchaseQuality
     *
     * @param \Walmart\Models\MP\US\Insights\GetListingQualityScore200ResponsePayloadPostPurchaseQuality|null $postPurchaseQuality postPurchaseQuality
     *
     * @return self
    
     */
    public function setPostPurchaseQuality($postPurchaseQuality)
    {
        if (is_null($postPurchaseQuality)) {
            throw new \InvalidArgumentException('non-nullable postPurchaseQuality cannot be null');
        }

        $this->container['postPurchaseQuality'] = $postPurchaseQuality;
        return $this;
    }
}


