<?php

/**
 * CreateLabel200ResponseErrorsInner
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
 * International Shipping
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\MX\InternationalShipping;

use Walmart\Models\BaseModel;

/**
 * CreateLabel200ResponseErrorsInner Class Doc Comment
 *
 * @category Class

 * @description errors

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class CreateLabel200ResponseErrorsInner extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'createLabel_200_response_errors_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'info' => 'string',
        'code' => 'string',
        'field' => 'string',
        'description' => 'string',
        'severity' => 'string',
        'category' => 'string',
        'httpStatus' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'info' => null,
        'code' => null,
        'field' => null,
        'description' => null,
        'severity' => null,
        'category' => null,
        'httpStatus' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'info' => false,
        'code' => false,
        'field' => false,
        'description' => false,
        'severity' => false,
        'category' => false,
        'httpStatus' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'info' => 'info',
        'code' => 'code',
        'field' => 'field',
        'description' => 'description',
        'severity' => 'severity',
        'category' => 'category',
        'httpStatus' => 'httpStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'info' => 'setInfo',
        'code' => 'setCode',
        'field' => 'setField',
        'description' => 'setDescription',
        'severity' => 'setSeverity',
        'category' => 'setCategory',
        'httpStatus' => 'setHttpStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'info' => 'getInfo',
        'code' => 'getCode',
        'field' => 'getField',
        'description' => 'getDescription',
        'severity' => 'getSeverity',
        'category' => 'getCategory',
        'httpStatus' => 'getHttpStatus'
    ];


    public const SEVERITY_EMERG = 'EMERG';

    public const SEVERITY_ALERT = 'ALERT';

    public const SEVERITY_CRITICAL = 'CRITICAL';

    public const SEVERITY_ERROR = 'ERROR';

    public const SEVERITY_WARN = 'WARN';

    public const CATEGORY_APPLICATION = 'APPLICATION';

    public const CATEGORY_SERVICE = 'SERVICE';

    public const CATEGORY_REQUEST = 'REQUEST';

    public const CATEGORY_DATA = 'DATA';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSeverityAllowableValues()
    {
        return [
            self::SEVERITY_EMERG,
            self::SEVERITY_ALERT,
            self::SEVERITY_CRITICAL,
            self::SEVERITY_ERROR,
            self::SEVERITY_WARN,
        ];
    }


    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_APPLICATION,
            self::CATEGORY_SERVICE,
            self::CATEGORY_REQUEST,
            self::CATEGORY_DATA,
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
        $this->setIfExists('info', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('field', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('severity', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('httpStatus', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSeverityAllowableValues();
        if (!is_null($this->container['severity']) && !in_array($this->container['severity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'severity', must be one of '%s'",
                $this->container['severity'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'category', must be one of '%s'",
                $this->container['category'],
                implode("', '", $allowedValues)
            );
        }


        return $invalidProperties;
    }

    /**
     * Gets info
     *
     * @return string|null
    
     */
    public function getInfo()
    {
        return $this->container['info'];
    }

    /**
     * Sets info
     *
     * @param string|null $info error info
     *
     * @return self
    
     */
    public function setInfo($info)
    {
        if (is_null($info)) {
            throw new \InvalidArgumentException('non-nullable info cannot be null');
        }

        $this->container['info'] = $info;
        return $this;
    }

    /**
     * Gets code
     *
     * @return string|null
    
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string|null $code error code
     *
     * @return self
    
     */
    public function setCode($code)
    {
        if (is_null($code)) {
            throw new \InvalidArgumentException('non-nullable code cannot be null');
        }

        $this->container['code'] = $code;
        return $this;
    }

    /**
     * Gets field
     *
     * @return string|null
    
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param string|null $field field
     *
     * @return self
    
     */
    public function setField($field)
    {
        if (is_null($field)) {
            throw new \InvalidArgumentException('non-nullable field cannot be null');
        }

        $this->container['field'] = $field;
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
     * @param string|null $description error description
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
     * Gets severity
     *
     * @return string|null
    
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param string|null $severity error severity
     *
     * @return self
    
     */
    public function setSeverity($severity)
    {
        if (is_null($severity)) {
            throw new \InvalidArgumentException('non-nullable severity cannot be null');
        }
        $allowedValues = $this->getSeverityAllowableValues();
        if (!in_array($severity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'severity', must be one of '%s'",
                    $severity,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['severity'] = $severity;
        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
    
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category error category
     *
     * @return self
    
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $allowedValues = $this->getCategoryAllowableValues();
        if (!in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'category', must be one of '%s'",
                    $category,
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['category'] = $category;
        return $this;
    }

    /**
     * Gets httpStatus
     *
     * @return int|null
    
     */
    public function getHttpStatus()
    {
        return $this->container['httpStatus'];
    }

    /**
     * Sets httpStatus
     *
     * @param int|null $httpStatus error http status
     *
     * @return self
    
     */
    public function setHttpStatus($httpStatus)
    {
        if (is_null($httpStatus)) {
            throw new \InvalidArgumentException('non-nullable httpStatus cannot be null');
        }

        $this->container['httpStatus'] = $httpStatus;
        return $this;
    }
}


