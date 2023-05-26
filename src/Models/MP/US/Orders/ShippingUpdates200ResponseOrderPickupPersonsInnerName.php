<?php

/**
 * ShippingUpdates200ResponseOrderPickupPersonsInnerName
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
 * Order Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Orders;

use Walmart\Models\BaseModel;

/**
 * ShippingUpdates200ResponseOrderPickupPersonsInnerName Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdates200ResponseOrderPickupPersonsInnerName extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_200_response_order_pickupPersons_inner_name';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'completeName' => 'string',
        'firstName' => 'string',
        'middleName' => 'string',
        'lastName' => 'string',
        'generalSuffix' => 'string',
        'maturitySuffix' => 'string',
        'titleOfRespect' => 'string',
        'empty' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'completeName' => null,
        'firstName' => null,
        'middleName' => null,
        'lastName' => null,
        'generalSuffix' => null,
        'maturitySuffix' => null,
        'titleOfRespect' => null,
        'empty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'completeName' => false,
        'firstName' => false,
        'middleName' => false,
        'lastName' => false,
        'generalSuffix' => false,
        'maturitySuffix' => false,
        'titleOfRespect' => false,
        'empty' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'completeName' => 'completeName',
        'firstName' => 'firstName',
        'middleName' => 'middleName',
        'lastName' => 'lastName',
        'generalSuffix' => 'generalSuffix',
        'maturitySuffix' => 'maturitySuffix',
        'titleOfRespect' => 'titleOfRespect',
        'empty' => 'empty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'completeName' => 'setCompleteName',
        'firstName' => 'setFirstName',
        'middleName' => 'setMiddleName',
        'lastName' => 'setLastName',
        'generalSuffix' => 'setGeneralSuffix',
        'maturitySuffix' => 'setMaturitySuffix',
        'titleOfRespect' => 'setTitleOfRespect',
        'empty' => 'setEmpty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'completeName' => 'getCompleteName',
        'firstName' => 'getFirstName',
        'middleName' => 'getMiddleName',
        'lastName' => 'getLastName',
        'generalSuffix' => 'getGeneralSuffix',
        'maturitySuffix' => 'getMaturitySuffix',
        'titleOfRespect' => 'getTitleOfRespect',
        'empty' => 'getEmpty'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('completeName', $data ?? [], null);
        $this->setIfExists('firstName', $data ?? [], null);
        $this->setIfExists('middleName', $data ?? [], null);
        $this->setIfExists('lastName', $data ?? [], null);
        $this->setIfExists('generalSuffix', $data ?? [], null);
        $this->setIfExists('maturitySuffix', $data ?? [], null);
        $this->setIfExists('titleOfRespect', $data ?? [], null);
        $this->setIfExists('empty', $data ?? [], null);
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
     * Gets completeName
     *
     * @return string|null
    
     */
    public function getCompleteName()
    {
        return $this->container['completeName'];
    }

    /**
     * Sets completeName
     *
     * @param string|null $completeName completeName
     *
     * @return self
    
     */
    public function setCompleteName($completeName)
    {
        if (is_null($completeName)) {
            throw new \InvalidArgumentException('non-nullable completeName cannot be null');
        }

        $this->container['completeName'] = $completeName;
        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string|null
    
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string|null $firstName firstName
     *
     * @return self
    
     */
    public function setFirstName($firstName)
    {
        if (is_null($firstName)) {
            throw new \InvalidArgumentException('non-nullable firstName cannot be null');
        }

        $this->container['firstName'] = $firstName;
        return $this;
    }

    /**
     * Gets middleName
     *
     * @return string|null
    
     */
    public function getMiddleName()
    {
        return $this->container['middleName'];
    }

    /**
     * Sets middleName
     *
     * @param string|null $middleName middleName
     *
     * @return self
    
     */
    public function setMiddleName($middleName)
    {
        if (is_null($middleName)) {
            throw new \InvalidArgumentException('non-nullable middleName cannot be null');
        }

        $this->container['middleName'] = $middleName;
        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string|null
    
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string|null $lastName lastName
     *
     * @return self
    
     */
    public function setLastName($lastName)
    {
        if (is_null($lastName)) {
            throw new \InvalidArgumentException('non-nullable lastName cannot be null');
        }

        $this->container['lastName'] = $lastName;
        return $this;
    }

    /**
     * Gets generalSuffix
     *
     * @return string|null
    
     */
    public function getGeneralSuffix()
    {
        return $this->container['generalSuffix'];
    }

    /**
     * Sets generalSuffix
     *
     * @param string|null $generalSuffix generalSuffix
     *
     * @return self
    
     */
    public function setGeneralSuffix($generalSuffix)
    {
        if (is_null($generalSuffix)) {
            throw new \InvalidArgumentException('non-nullable generalSuffix cannot be null');
        }

        $this->container['generalSuffix'] = $generalSuffix;
        return $this;
    }

    /**
     * Gets maturitySuffix
     *
     * @return string|null
    
     */
    public function getMaturitySuffix()
    {
        return $this->container['maturitySuffix'];
    }

    /**
     * Sets maturitySuffix
     *
     * @param string|null $maturitySuffix maturitySuffix
     *
     * @return self
    
     */
    public function setMaturitySuffix($maturitySuffix)
    {
        if (is_null($maturitySuffix)) {
            throw new \InvalidArgumentException('non-nullable maturitySuffix cannot be null');
        }

        $this->container['maturitySuffix'] = $maturitySuffix;
        return $this;
    }

    /**
     * Gets titleOfRespect
     *
     * @return string|null
    
     */
    public function getTitleOfRespect()
    {
        return $this->container['titleOfRespect'];
    }

    /**
     * Sets titleOfRespect
     *
     * @param string|null $titleOfRespect titleOfRespect
     *
     * @return self
    
     */
    public function setTitleOfRespect($titleOfRespect)
    {
        if (is_null($titleOfRespect)) {
            throw new \InvalidArgumentException('non-nullable titleOfRespect cannot be null');
        }

        $this->container['titleOfRespect'] = $titleOfRespect;
        return $this;
    }

    /**
     * Gets empty
     *
     * @return bool|null
    
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
     * Sets empty
     *
     * @param bool|null $empty empty
     *
     * @return self
    
     */
    public function setEmpty($empty)
    {
        if (is_null($empty)) {
            throw new \InvalidArgumentException('non-nullable empty cannot be null');
        }

        $this->container['empty'] = $empty;
        return $this;
    }
}


