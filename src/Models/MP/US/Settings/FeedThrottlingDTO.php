<?php

/**
 * FeedThrottlingDTO
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
 * Settings Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Settings;

use Walmart\Models\BaseModel;

/**
 * FeedThrottlingDTO Class Doc Comment
 *
 * @category Class

 * @description List of feed throttling configurations

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class FeedThrottlingDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FeedThrottlingDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'feedType' => 'string',
        'throttleConfigurations' => '\Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'feedType' => null,
        'throttleConfigurations' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'feedType' => false,
        'throttleConfigurations' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'feedType' => 'feedType',
        'throttleConfigurations' => 'throttleConfigurations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'feedType' => 'setFeedType',
        'throttleConfigurations' => 'setThrottleConfigurations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'feedType' => 'getFeedType',
        'throttleConfigurations' => 'getThrottleConfigurations'
    ];


    public const FEED_TYPE_ITEM = 'item';

    public const FEED_TYPE_RETIRE_ITEM = 'RETIRE_ITEM';

    public const FEED_TYPE_MP_ITEM = 'MP_ITEM';

    public const FEED_TYPE_MP_WFS_ITEM = 'MP_WFS_ITEM';

    public const FEED_TYPE_MP_MAINTENANCE = 'MP_MAINTENANCE';

    public const FEED_TYPE_SKU_TEMPLATE_MAP = 'SKU_TEMPLATE_MAP';

    public const FEED_TYPE_SHIPPING_OVERRIDES = 'SHIPPING_OVERRIDES';

    public const FEED_TYPE_PRICE = 'price';

    public const FEED_TYPE_CPT_SELLER_ELIGIBILITY = 'CPT_SELLER_ELIGIBILITY';

    public const FEED_TYPE_PROMO = 'promo';

    public const FEED_TYPE_RETURNS_OVERRIDES = 'RETURNS_OVERRIDES';

    public const FEED_TYPE_INVENTORY = 'inventory';

    public const FEED_TYPE_LAGTIME = 'lagtime';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeedTypeAllowableValues()
    {
        return [
            self::FEED_TYPE_ITEM,
            self::FEED_TYPE_RETIRE_ITEM,
            self::FEED_TYPE_MP_ITEM,
            self::FEED_TYPE_MP_WFS_ITEM,
            self::FEED_TYPE_MP_MAINTENANCE,
            self::FEED_TYPE_SKU_TEMPLATE_MAP,
            self::FEED_TYPE_SHIPPING_OVERRIDES,
            self::FEED_TYPE_PRICE,
            self::FEED_TYPE_CPT_SELLER_ELIGIBILITY,
            self::FEED_TYPE_PROMO,
            self::FEED_TYPE_RETURNS_OVERRIDES,
            self::FEED_TYPE_INVENTORY,
            self::FEED_TYPE_LAGTIME,
        ];
    }

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('feedType', $data ?? [], null);
        $this->setIfExists('throttleConfigurations', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFeedTypeAllowableValues();
        if (!is_null($this->container['feedType']) && !in_array($this->container['feedType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'feedType', must be one of '%s'",
                $this->container['feedType'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets feedType
     *
     * @return string|null
    
     */
    public function getFeedType()
    {
        return $this->container['feedType'];
    }

    /**
     * Sets feedType
     *
     * @param string|null $feedType The feed Type
     *
     * @return self
    
     */
    public function setFeedType($feedType)
    {
        if (is_null($feedType)) {
            throw new \InvalidArgumentException('non-nullable feedType cannot be null');
        }
        $allowedValues = $this->getFeedTypeAllowableValues();
        if (!in_array($feedType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'feedType', must be one of '%s'",
                    $feedType,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['feedType'] = $feedType;
        return $this;
    }

    /**
     * Gets throttleConfigurations
     *
     * @return \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInner[]|null
    
     */
    public function getThrottleConfigurations()
    {
        return $this->container['throttleConfigurations'];
    }

    /**
     * Sets throttleConfigurations
     *
     * @param \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInner[]|null $throttleConfigurations Details of throttling configurations
     *
     * @return self
    
     */
    public function setThrottleConfigurations($throttleConfigurations)
    {
        if (is_null($throttleConfigurations)) {
            throw new \InvalidArgumentException('non-nullable throttleConfigurations cannot be null');
        }

        $this->container['throttleConfigurations'] = $throttleConfigurations;
        return $this;
    }
}


