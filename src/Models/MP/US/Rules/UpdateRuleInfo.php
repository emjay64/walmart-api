<?php

/**
 * UpdateRuleInfo
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
 * Rules Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Rules;

use Walmart\Models\BaseModel;

/**
 * UpdateRuleInfo Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateRuleInfo extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'UpdateRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'ruleId' => 'string',
        'ruleStatus' => 'string',
        'name' => 'string',
        'description' => 'string',
        'priority' => 'string',
        'conditions' => '\Walmart\Models\MP\US\Rules\UpdateShippingAreaToRule200ResponseRulesInnerConditionsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'ruleId' => null,
        'ruleStatus' => null,
        'name' => null,
        'description' => null,
        'priority' => null,
        'conditions' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'ruleId' => false,
        'ruleStatus' => false,
        'name' => false,
        'description' => false,
        'priority' => false,
        'conditions' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'ruleId' => 'ruleId',
        'ruleStatus' => 'ruleStatus',
        'name' => 'name',
        'description' => 'description',
        'priority' => 'priority',
        'conditions' => 'conditions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'ruleId' => 'setRuleId',
        'ruleStatus' => 'setRuleStatus',
        'name' => 'setName',
        'description' => 'setDescription',
        'priority' => 'setPriority',
        'conditions' => 'setConditions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'ruleId' => 'getRuleId',
        'ruleStatus' => 'getRuleStatus',
        'name' => 'getName',
        'description' => 'getDescription',
        'priority' => 'getPriority',
        'conditions' => 'getConditions'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('ruleId', $data ?? [], null);
        $this->setIfExists('ruleStatus', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('priority', $data ?? [], null);
        $this->setIfExists('conditions', $data ?? [], null);
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
     * Gets ruleId
     *
     * @return string|null
    
     */
    public function getRuleId()
    {
        return $this->container['ruleId'];
    }

    /**
     * Sets ruleId
     *
     * @param string|null $ruleId Unique identifier of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setRuleId($ruleId)
    {
        if (is_null($ruleId)) {
            throw new \InvalidArgumentException('non-nullable ruleId cannot be null');
        }

        $this->container['ruleId'] = $ruleId;
        return $this;
    }

    /**
     * Gets ruleStatus
     *
     * @return string|null
    
     */
    public function getRuleStatus()
    {
        return $this->container['ruleStatus'];
    }

    /**
     * Sets ruleStatus
     *
     * @param string|null $ruleStatus Status of the rule post the rule creation. Allowed values are Active, Inactive, Submitted.
     *
     * @return self
    
     */
    public function setRuleStatus($ruleStatus)
    {
        if (is_null($ruleStatus)) {
            throw new \InvalidArgumentException('non-nullable ruleStatus cannot be null');
        }

        $this->container['ruleStatus'] = $ruleStatus;
        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
    
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }

        $this->container['name'] = $name;
        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
    
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }

        $this->container['description'] = $description;
        return $this;
    }

    /**
     * Gets priority
     *
     * @return string|null
    
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string|null $priority Priority of the rule created for custom rule assortment.
     *
     * @return self
    
     */
    public function setPriority($priority)
    {
        if (is_null($priority)) {
            throw new \InvalidArgumentException('non-nullable priority cannot be null');
        }

        $this->container['priority'] = $priority;
        return $this;
    }

    /**
     * Gets conditions
     *
     * @return \Walmart\Models\MP\US\Rules\UpdateShippingAreaToRule200ResponseRulesInnerConditionsInner[]|null
    
     */
    public function getConditions()
    {
        return $this->container['conditions'];
    }

    /**
     * Sets conditions
     *
     * @param \Walmart\Models\MP\US\Rules\UpdateShippingAreaToRule200ResponseRulesInnerConditionsInner[]|null $conditions Seller creates conditions while defining the custom rule assortment.There are three condition which a seller can use : subCategories, price, weight.
     *
     * @return self
    
     */
    public function setConditions($conditions)
    {
        if (is_null($conditions)) {
            throw new \InvalidArgumentException('non-nullable conditions cannot be null');
        }

        $this->container['conditions'] = $conditions;
        return $this;
    }
}


