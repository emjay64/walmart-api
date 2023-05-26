<?php

/**
 * GetEvent200Response
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
 * Event Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\CA\Events;

use Walmart\Models\BaseModel;
use Walmart\Traits\HasResponseHeaders;

/**
 * GetEvent200Response Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class GetEvent200Response extends BaseModel
{
    use HasResponseHeaders;

    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'getEvent_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'title' => 'string',
        'type' => 'string',
        'submissionStartDate' => '\DateTime',
        'submissionEndDate' => '\DateTime',
        'eventStartDate' => '\DateTime',
        'eventEndDate' => '\DateTime',
        'description' => 'string',
        'lastUpdatedDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => null,
        'title' => null,
        'type' => null,
        'submissionStartDate' => 'date-time',
        'submissionEndDate' => 'date-time',
        'eventStartDate' => 'date-time',
        'eventEndDate' => 'date-time',
        'description' => null,
        'lastUpdatedDate' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'title' => false,
        'type' => false,
        'submissionStartDate' => false,
        'submissionEndDate' => false,
        'eventStartDate' => false,
        'eventEndDate' => false,
        'description' => false,
        'lastUpdatedDate' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'id' => 'id',
        'title' => 'title',
        'type' => 'type',
        'submissionStartDate' => 'submissionStartDate',
        'submissionEndDate' => 'submissionEndDate',
        'eventStartDate' => 'eventStartDate',
        'eventEndDate' => 'eventEndDate',
        'description' => 'description',
        'lastUpdatedDate' => 'lastUpdatedDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'id' => 'setId',
        'title' => 'setTitle',
        'type' => 'setType',
        'submissionStartDate' => 'setSubmissionStartDate',
        'submissionEndDate' => 'setSubmissionEndDate',
        'eventStartDate' => 'setEventStartDate',
        'eventEndDate' => 'setEventEndDate',
        'description' => 'setDescription',
        'lastUpdatedDate' => 'setLastUpdatedDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'id' => 'getId',
        'title' => 'getTitle',
        'type' => 'getType',
        'submissionStartDate' => 'getSubmissionStartDate',
        'submissionEndDate' => 'getSubmissionEndDate',
        'eventStartDate' => 'getEventStartDate',
        'eventEndDate' => 'getEventEndDate',
        'description' => 'getDescription',
        'lastUpdatedDate' => 'getLastUpdatedDate'
    ];


    public const TYPE_FLASH = 'Flash';

    public const TYPE_DAILY = 'Daily';

    public const TYPE_WEEKLY = 'Weekly';

    public const TYPE_SEASONAL = 'Seasonal';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FLASH,
            self::TYPE_DAILY,
            self::TYPE_WEEKLY,
            self::TYPE_SEASONAL,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('submissionStartDate', $data ?? [], null);
        $this->setIfExists('submissionEndDate', $data ?? [], null);
        $this->setIfExists('eventStartDate', $data ?? [], null);
        $this->setIfExists('eventEndDate', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('lastUpdatedDate', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
    
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The Event ID
     *
     * @return self
    
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;
        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
    
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The Event Name
     *
     * @return self
    
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }

        $this->container['title'] = $title;
        return $this;
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
     * @param string|null $type The Event Type
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
     * Gets submissionStartDate
     *
     * @return \DateTime|null
    
     */
    public function getSubmissionStartDate()
    {
        return $this->container['submissionStartDate'];
    }

    /**
     * Sets submissionStartDate
     *
     * @param \DateTime|null $submissionStartDate Start date from when a seller can submit their item details for participating in the event
     *
     * @return self
    
     */
    public function setSubmissionStartDate($submissionStartDate)
    {
        if (is_null($submissionStartDate)) {
            throw new \InvalidArgumentException('non-nullable submissionStartDate cannot be null');
        }

        $this->container['submissionStartDate'] = $submissionStartDate;
        return $this;
    }

    /**
     * Gets submissionEndDate
     *
     * @return \DateTime|null
    
     */
    public function getSubmissionEndDate()
    {
        return $this->container['submissionEndDate'];
    }

    /**
     * Sets submissionEndDate
     *
     * @param \DateTime|null $submissionEndDate Last date for sellers to submit their items
     *
     * @return self
    
     */
    public function setSubmissionEndDate($submissionEndDate)
    {
        if (is_null($submissionEndDate)) {
            throw new \InvalidArgumentException('non-nullable submissionEndDate cannot be null');
        }

        $this->container['submissionEndDate'] = $submissionEndDate;
        return $this;
    }

    /**
     * Gets eventStartDate
     *
     * @return \DateTime|null
    
     */
    public function getEventStartDate()
    {
        return $this->container['eventStartDate'];
    }

    /**
     * Sets eventStartDate
     *
     * @param \DateTime|null $eventStartDate The day when the event will go live on the ecommerce website
     *
     * @return self
    
     */
    public function setEventStartDate($eventStartDate)
    {
        if (is_null($eventStartDate)) {
            throw new \InvalidArgumentException('non-nullable eventStartDate cannot be null');
        }

        $this->container['eventStartDate'] = $eventStartDate;
        return $this;
    }

    /**
     * Gets eventEndDate
     *
     * @return \DateTime|null
    
     */
    public function getEventEndDate()
    {
        return $this->container['eventEndDate'];
    }

    /**
     * Sets eventEndDate
     *
     * @param \DateTime|null $eventEndDate Last day of the live event.
     *
     * @return self
    
     */
    public function setEventEndDate($eventEndDate)
    {
        if (is_null($eventEndDate)) {
            throw new \InvalidArgumentException('non-nullable eventEndDate cannot be null');
        }

        $this->container['eventEndDate'] = $eventEndDate;
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
     * @param string|null $description The overall description of the event
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
     * Gets lastUpdatedDate
     *
     * @return \DateTime|null
    
     */
    public function getLastUpdatedDate()
    {
        return $this->container['lastUpdatedDate'];
    }

    /**
     * Sets lastUpdatedDate
     *
     * @param \DateTime|null $lastUpdatedDate Last Updated date
     *
     * @return self
    
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        if (is_null($lastUpdatedDate)) {
            throw new \InvalidArgumentException('non-nullable lastUpdatedDate cannot be null');
        }

        $this->container['lastUpdatedDate'] = $lastUpdatedDate;
        return $this;
    }
}


