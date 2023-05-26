<?php

/**
 * ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerReturnCenterAddress
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
 * ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerReturnCenterAddress Class Doc Comment
 *
 * @category Class

 * @description Gives Sellers the ability to specify the RC center address during fulfillment; any returns created for the PO will always be returned to the RC address specified

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class ShippingUpdatesRequestOrderShipmentOrderLinesOrderLineInnerOrderLineStatusesOrderLineStatusInnerReturnCenterAddress extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'shippingUpdates_request_orderShipment_orderLines_orderLine_inner_orderLineStatuses_orderLineStatus_inner_returnCenterAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postalCode' => 'string',
        'country' => 'string',
        'dayPhone' => 'string',
        'emailId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'postalCode' => null,
        'country' => null,
        'dayPhone' => null,
        'emailId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'address1' => false,
        'address2' => false,
        'city' => false,
        'state' => false,
        'postalCode' => false,
        'country' => false,
        'dayPhone' => false,
        'emailId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'state' => 'state',
        'postalCode' => 'postalCode',
        'country' => 'country',
        'dayPhone' => 'dayPhone',
        'emailId' => 'emailId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'postalCode' => 'setPostalCode',
        'country' => 'setCountry',
        'dayPhone' => 'setDayPhone',
        'emailId' => 'setEmailId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'postalCode' => 'getPostalCode',
        'country' => 'getCountry',
        'dayPhone' => 'getDayPhone',
        'emailId' => 'getEmailId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('address1', $data ?? [], null);
        $this->setIfExists('address2', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('dayPhone', $data ?? [], null);
        $this->setIfExists('emailId', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address1'] === null) {
            $invalidProperties[] = "'address1' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }

        return $invalidProperties;
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
     * @param string|null $name The name for the person/place of return address
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
     * Gets address1
     *
     * @return string
    
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 The first line of the return address
     *
     * @return self
    
     */
    public function setAddress1($address1)
    {
        if (is_null($address1)) {
            throw new \InvalidArgumentException('non-nullable address1 cannot be null');
        }

        $this->container['address1'] = $address1;
        return $this;
    }

    /**
     * Gets address2
     *
     * @return string|null
    
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string|null $address2 The second line of the return address
     *
     * @return self
    
     */
    public function setAddress2($address2)
    {
        if (is_null($address2)) {
            throw new \InvalidArgumentException('non-nullable address2 cannot be null');
        }

        $this->container['address2'] = $address2;
        return $this;
    }

    /**
     * Gets city
     *
     * @return string
    
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city of the return address
     *
     * @return self
    
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }

        $this->container['city'] = $city;
        return $this;
    }

    /**
     * Gets state
     *
     * @return string
    
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state of the return address
     *
     * @return self
    
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        $this->container['state'] = $state;
        return $this;
    }

    /**
     * Gets postalCode
     *
     * @return string
    
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode The zip code of the return address
     *
     * @return self
    
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        $this->container['postalCode'] = $postalCode;
        return $this;
    }

    /**
     * Gets country
     *
     * @return string
    
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country The country of the return address
     *
     * @return self
    
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        $this->container['country'] = $country;
        return $this;
    }

    /**
     * Gets dayPhone
     *
     * @return string|null
    
     */
    public function getDayPhone()
    {
        return $this->container['dayPhone'];
    }

    /**
     * Sets dayPhone
     *
     * @param string|null $dayPhone Phone of the center where the package shipment is returned
     *
     * @return self
    
     */
    public function setDayPhone($dayPhone)
    {
        if (is_null($dayPhone)) {
            throw new \InvalidArgumentException('non-nullable dayPhone cannot be null');
        }

        $this->container['dayPhone'] = $dayPhone;
        return $this;
    }

    /**
     * Gets emailId
     *
     * @return string|null
    
     */
    public function getEmailId()
    {
        return $this->container['emailId'];
    }

    /**
     * Sets emailId
     *
     * @param string|null $emailId Email of the center where the package shipment is returned
     *
     * @return self
    
     */
    public function setEmailId($emailId)
    {
        if (is_null($emailId)) {
            throw new \InvalidArgumentException('non-nullable emailId cannot be null');
        }

        $this->container['emailId'] = $emailId;
        return $this;
    }
}


