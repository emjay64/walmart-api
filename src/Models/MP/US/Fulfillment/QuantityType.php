<?php

/**
 * QuantityType
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
 * QuantityType Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class QuantityType extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'QuantityType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unitOfMeasure' => 'string',
        'measurementValue' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unitOfMeasure' => null,
        'measurementValue' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'unitOfMeasure' => false,
        'measurementValue' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'unitOfMeasure' => 'unitOfMeasure',
        'measurementValue' => 'measurementValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unitOfMeasure' => 'setUnitOfMeasure',
        'measurementValue' => 'setMeasurementValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unitOfMeasure' => 'getUnitOfMeasure',
        'measurementValue' => 'getMeasurementValue'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('unitOfMeasure', $data ?? [], null);
        $this->setIfExists('measurementValue', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['unitOfMeasure'] === null) {
            $invalidProperties[] = "'unitOfMeasure' can't be null";
        }
        if ((mb_strlen($this->container['unitOfMeasure']) > 32)) {
            $invalidProperties[] = "invalid value for 'unitOfMeasure', the character length must be smaller than or equal to 32.";
        }


        if ((mb_strlen($this->container['unitOfMeasure']) < 1)) {
            $invalidProperties[] = "invalid value for 'unitOfMeasure', the character length must be bigger than or equal to 1.";
        }






        if ($this->container['measurementValue'] === null) {
            $invalidProperties[] = "'measurementValue' can't be null";
        }



        if (($this->container['measurementValue'] < 1)) {
            $invalidProperties[] = "invalid value for 'measurementValue', must be bigger than or equal to 1.";
        }





        return $invalidProperties;
    }

    /**
     * Gets unitOfMeasure
     *
     * @return string
    
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unitOfMeasure'];
    }

    /**
     * Sets unitOfMeasure
     *
     * @param string $unitOfMeasure unitOfMeasure
     *
     * @return self
    
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        if (is_null($unitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasure cannot be null');
        }
        if ((mb_strlen($unitOfMeasure) > 32)) {
            throw new \InvalidArgumentException('invalid length for $unitOfMeasure when calling QuantityType., must be smaller than or equal to 32.');
        }
        if ((mb_strlen($unitOfMeasure) < 1)) {
            throw new \InvalidArgumentException('invalid length for $unitOfMeasure when calling QuantityType., must be bigger than or equal to 1.');
        }






        $this->container['unitOfMeasure'] = $unitOfMeasure;
        return $this;
    }

    /**
     * Gets measurementValue
     *
     * @return float
    
     */
    public function getMeasurementValue()
    {
        return $this->container['measurementValue'];
    }

    /**
     * Sets measurementValue
     *
     * @param float $measurementValue measurementValue
     *
     * @return self
    
     */
    public function setMeasurementValue($measurementValue)
    {
        if (is_null($measurementValue)) {
            throw new \InvalidArgumentException('non-nullable measurementValue cannot be null');
        }



        if (($measurementValue < 1)) {
            throw new \InvalidArgumentException('invalid value for $measurementValue when calling QuantityType., must be bigger than or equal to 1.');
        }




        $this->container['measurementValue'] = $measurementValue;
        return $this;
    }
}


