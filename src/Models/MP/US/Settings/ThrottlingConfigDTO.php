<?php

/**
 * ThrottlingConfigDTO
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
 * ThrottlingConfigDTO Class Doc Comment
 *
 * @category Class

 * @description Details of throttling configurations

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ThrottlingConfigDTO extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ThrottlingConfigDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'type' => 'string',
        'rate' => '\Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRate',
        'fileSize' => '\Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerFileSize'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'rate' => null,
        'fileSize' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'rate' => false,
        'fileSize' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'type' => 'type',
        'rate' => 'rate',
        'fileSize' => 'fileSize'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'type' => 'setType',
        'rate' => 'setRate',
        'fileSize' => 'setFileSize'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'type' => 'getType',
        'rate' => 'getRate',
        'fileSize' => 'getFileSize'
    ];


    public const TYPE_SELLER = 'SELLER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SELLER,
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('rate', $data ?? [], null);
        $this->setIfExists('fileSize', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets type
     *
     * @return string|null
    
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the throttling configuration. Example 'SELLER' means throttling configurations at Seller level only.
     *
     * @return self
    
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;
        return $this;
    }

    /**
     * Gets rate
     *
     * @return \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRate|null
    
     */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
     * Sets rate
     *
     * @param \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerRate|null $rate rate
     *
     * @return self
    
     */
    public function setRate($rate)
    {
        if (is_null($rate)) {
            throw new \InvalidArgumentException('non-nullable rate cannot be null');
        }

        $this->container['rate'] = $rate;
        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerFileSize|null
    
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param \Walmart\Models\MP\US\Settings\GetPartnerConfigurations200ResponseConfigurationsInnerAnyOf1ConfigurationValuesInnerThrottleConfigurationsInnerFileSize|null $fileSize fileSize
     *
     * @return self
    
     */
    public function setFileSize($fileSize)
    {
        if (is_null($fileSize)) {
            throw new \InvalidArgumentException('non-nullable fileSize cannot be null');
        }

        $this->container['fileSize'] = $fileSize;
        return $this;
    }
}


