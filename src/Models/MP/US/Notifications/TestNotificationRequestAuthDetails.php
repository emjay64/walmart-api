<?php

/**
 * TestNotificationRequestAuthDetails
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
 * Notifications Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Notifications;

use Walmart\Models\BaseModel;

/**
 * TestNotificationRequestAuthDetails Class Doc Comment
 *
 * @category Class

 * @description Authentication details for accessing the destination URL, if URL is protected

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class TestNotificationRequestAuthDetails extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'testNotification_request_authDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'authMethod' => 'string',
        'userName' => 'string',
        'password' => 'string',
        'authHeaderName' => 'string',
        'authUrl' => 'string',
        'clientSecret' => 'string',
        'clientId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'authMethod' => null,
        'userName' => null,
        'password' => null,
        'authHeaderName' => null,
        'authUrl' => null,
        'clientSecret' => null,
        'clientId' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'authMethod' => false,
        'userName' => false,
        'password' => false,
        'authHeaderName' => false,
        'authUrl' => false,
        'clientSecret' => false,
        'clientId' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'authMethod' => 'authMethod',
        'userName' => 'userName',
        'password' => 'password',
        'authHeaderName' => 'authHeaderName',
        'authUrl' => 'authUrl',
        'clientSecret' => 'clientSecret',
        'clientId' => 'clientId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'authMethod' => 'setAuthMethod',
        'userName' => 'setUserName',
        'password' => 'setPassword',
        'authHeaderName' => 'setAuthHeaderName',
        'authUrl' => 'setAuthUrl',
        'clientSecret' => 'setClientSecret',
        'clientId' => 'setClientId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'authMethod' => 'getAuthMethod',
        'userName' => 'getUserName',
        'password' => 'getPassword',
        'authHeaderName' => 'getAuthHeaderName',
        'authUrl' => 'getAuthUrl',
        'clientSecret' => 'getClientSecret',
        'clientId' => 'getClientId'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('authMethod', $data ?? [], null);
        $this->setIfExists('userName', $data ?? [], null);
        $this->setIfExists('password', $data ?? [], null);
        $this->setIfExists('authHeaderName', $data ?? [], null);
        $this->setIfExists('authUrl', $data ?? [], null);
        $this->setIfExists('clientSecret', $data ?? [], null);
        $this->setIfExists('clientId', $data ?? [], null);
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
     * Gets authMethod
     *
     * @return string|null
    
     */
    public function getAuthMethod()
    {
        return $this->container['authMethod'];
    }

    /**
     * Sets authMethod
     *
     * @param string|null $authMethod enumeration: BASIC_AUTH,OAUTH,HMAC
     *
     * @return self
    
     */
    public function setAuthMethod($authMethod)
    {
        if (is_null($authMethod)) {
            throw new \InvalidArgumentException('non-nullable authMethod cannot be null');
        }

        $this->container['authMethod'] = $authMethod;
        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
    
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName UserName to access destination URL
     *
     * @return self
    
     */
    public function setUserName($userName)
    {
        if (is_null($userName)) {
            throw new \InvalidArgumentException('non-nullable userName cannot be null');
        }

        $this->container['userName'] = $userName;
        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
    
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password Password to access destination URL
     *
     * @return self
    
     */
    public function setPassword($password)
    {
        if (is_null($password)) {
            throw new \InvalidArgumentException('non-nullable password cannot be null');
        }

        $this->container['password'] = $password;
        return $this;
    }

    /**
     * Gets authHeaderName
     *
     * @return string|null
    
     */
    public function getAuthHeaderName()
    {
        return $this->container['authHeaderName'];
    }

    /**
     * Sets authHeaderName
     *
     * @param string|null $authHeaderName authHeaderName , using which authorization header will be passed
     *
     * @return self
    
     */
    public function setAuthHeaderName($authHeaderName)
    {
        if (is_null($authHeaderName)) {
            throw new \InvalidArgumentException('non-nullable authHeaderName cannot be null');
        }

        $this->container['authHeaderName'] = $authHeaderName;
        return $this;
    }

    /**
     * Gets authUrl
     *
     * @return string|null
    
     */
    public function getAuthUrl()
    {
        return $this->container['authUrl'];
    }

    /**
     * Sets authUrl
     *
     * @param string|null $authUrl OAUTH URL
     *
     * @return self
    
     */
    public function setAuthUrl($authUrl)
    {
        if (is_null($authUrl)) {
            throw new \InvalidArgumentException('non-nullable authUrl cannot be null');
        }

        $this->container['authUrl'] = $authUrl;
        return $this;
    }

    /**
     * Gets clientSecret
     *
     * @return string|null
    
     */
    public function getClientSecret()
    {
        return $this->container['clientSecret'];
    }

    /**
     * Sets clientSecret
     *
     * @param string|null $clientSecret Client Secret for OAUTH URL / HMAC
     *
     * @return self
    
     */
    public function setClientSecret($clientSecret)
    {
        if (is_null($clientSecret)) {
            throw new \InvalidArgumentException('non-nullable clientSecret cannot be null');
        }

        $this->container['clientSecret'] = $clientSecret;
        return $this;
    }

    /**
     * Gets clientId
     *
     * @return string|null
    
     */
    public function getClientId()
    {
        return $this->container['clientId'];
    }

    /**
     * Sets clientId
     *
     * @param string|null $clientId ClientId for OAUTH URL
     *
     * @return self
    
     */
    public function setClientId($clientId)
    {
        if (is_null($clientId)) {
            throw new \InvalidArgumentException('non-nullable clientId cannot be null');
        }

        $this->container['clientId'] = $clientId;
        return $this;
    }
}


