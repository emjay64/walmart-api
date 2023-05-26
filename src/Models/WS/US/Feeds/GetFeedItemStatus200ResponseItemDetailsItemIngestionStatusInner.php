<?php

/**
 * GetFeedItemStatus200ResponseItemDetailsItemIngestionStatusInner
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
 * Warehouse Feed Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\WS\US\Feeds;

use Walmart\Models\BaseModel;

/**
 * GetFeedItemStatus200ResponseItemDetailsItemIngestionStatusInner Class Doc Comment
 *
 * @category Class

 * @description The ingestion status of an individual item

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetFeedItemStatus200ResponseItemDetailsItemIngestionStatusInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getFeedItemStatus_200_response_itemDetails_itemIngestionStatus_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'martId' => 'int',
        'sku' => 'string',
        'wpid' => 'string',
        'index' => 'int',
        'ingestionStatus' => 'string',
        'ingestionErrors' => '\Walmart\Models\WS\US\Feeds\GetFeedItemStatus200ResponseIngestionErrors'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'martId' => 'int32',
        'sku' => null,
        'wpid' => null,
        'index' => 'int32',
        'ingestionStatus' => null,
        'ingestionErrors' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'martId' => false,
        'sku' => false,
        'wpid' => false,
        'index' => false,
        'ingestionStatus' => false,
        'ingestionErrors' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'martId' => 'martId',
        'sku' => 'sku',
        'wpid' => 'wpid',
        'index' => 'index',
        'ingestionStatus' => 'ingestionStatus',
        'ingestionErrors' => 'ingestionErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'martId' => 'setMartId',
        'sku' => 'setSku',
        'wpid' => 'setWpid',
        'index' => 'setIndex',
        'ingestionStatus' => 'setIngestionStatus',
        'ingestionErrors' => 'setIngestionErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'martId' => 'getMartId',
        'sku' => 'getSku',
        'wpid' => 'getWpid',
        'index' => 'getIndex',
        'ingestionStatus' => 'getIngestionStatus',
        'ingestionErrors' => 'getIngestionErrors'
    ];


    public const INGESTION_STATUS_INPROGRESS = 'INPROGRESS';

    public const INGESTION_STATUS_SUCCESS = 'SUCCESS';

    public const INGESTION_STATUS_DATA_ERROR = 'DATA_ERROR';

    public const INGESTION_STATUS_SYSTEM_ERROR = 'SYSTEM_ERROR';

    public const INGESTION_STATUS_TIMEOUT_ERROR = 'TIMEOUT_ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIngestionStatusAllowableValues()
    {
        return [
            self::INGESTION_STATUS_INPROGRESS,
            self::INGESTION_STATUS_SUCCESS,
            self::INGESTION_STATUS_DATA_ERROR,
            self::INGESTION_STATUS_SYSTEM_ERROR,
            self::INGESTION_STATUS_TIMEOUT_ERROR,
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
        $this->setIfExists('martId', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
        $this->setIfExists('wpid', $data ?? [], null);
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('ingestionStatus', $data ?? [], null);
        $this->setIfExists('ingestionErrors', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ingestionStatus'] === null) {
            $invalidProperties[] = "'ingestionStatus' can't be null";
        }
        $allowedValues = $this->getIngestionStatusAllowableValues();
        if (!is_null($this->container['ingestionStatus']) && !in_array($this->container['ingestionStatus'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'ingestionStatus', must be one of '%s'",
                $this->container['ingestionStatus'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets martId
     *
     * @return int|null
    
     */
    public function getMartId()
    {
        return $this->container['martId'];
    }

    /**
     * Sets martId
     *
     * @param int|null $martId Mart ID that a user or seller uses for a marketplace
     *
     * @return self
    
     */
    public function setMartId($martId)
    {
        if (is_null($martId)) {
            throw new \InvalidArgumentException('non-nullable martId cannot be null');
        }

        $this->container['martId'] = $martId;
        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
    
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku An arbitrary alphanumeric unique ID, seller-specified, identifying each item.
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
     * Gets wpid
     *
     * @return string|null
    
     */
    public function getWpid()
    {
        return $this->container['wpid'];
    }

    /**
     * Sets wpid
     *
     * @param string|null $wpid An alphanumeric product ID, generated by Walmart
     *
     * @return self
    
     */
    public function setWpid($wpid)
    {
        if (is_null($wpid)) {
            throw new \InvalidArgumentException('non-nullable wpid cannot be null');
        }

        $this->container['wpid'] = $wpid;
        return $this;
    }

    /**
     * Gets index
     *
     * @return int|null
    
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index index of items in the feed
     *
     * @return self
    
     */
    public function setIndex($index)
    {
        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }

        $this->container['index'] = $index;
        return $this;
    }

    /**
     * Gets ingestionStatus
     *
     * @return string
    
     */
    public function getIngestionStatus()
    {
        return $this->container['ingestionStatus'];
    }

    /**
     * Sets ingestionStatus
     *
     * @param string $ingestionStatus Can be one of the following: DATA_ERROR, SYSTEM_ERROR, TIMEOUT_ERROR, or INPROGRESS
     *
     * @return self
    
     */
    public function setIngestionStatus($ingestionStatus)
    {
        if (is_null($ingestionStatus)) {
            throw new \InvalidArgumentException('non-nullable ingestionStatus cannot be null');
        }
        $allowedValues = $this->getIngestionStatusAllowableValues();
        if (!in_array($ingestionStatus, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'ingestionStatus', must be one of '%s'",
                    $ingestionStatus,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['ingestionStatus'] = $ingestionStatus;
        return $this;
    }

    /**
     * Gets ingestionErrors
     *
     * @return \Walmart\Models\WS\US\Feeds\GetFeedItemStatus200ResponseIngestionErrors|null
    
     */
    public function getIngestionErrors()
    {
        return $this->container['ingestionErrors'];
    }

    /**
     * Sets ingestionErrors
     *
     * @param \Walmart\Models\WS\US\Feeds\GetFeedItemStatus200ResponseIngestionErrors|null $ingestionErrors ingestionErrors
     *
     * @return self
    
     */
    public function setIngestionErrors($ingestionErrors)
    {
        if (is_null($ingestionErrors)) {
            throw new \InvalidArgumentException('non-nullable ingestionErrors cannot be null');
        }

        $this->container['ingestionErrors'] = $ingestionErrors;
        return $this;
    }
}


