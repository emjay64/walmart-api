<?php

/**
 * UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration
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
 * UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration Class Doc Comment
 *
 * @category Class

 * @description Calendar day promise details. For examples, please refer to 'Sample 2 - Calendar Day Configurations' in request & response samples.

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class UpdateFulfillmentCenterRequestShipNodeCalendarDayConfiguration extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'updateFulfillmentCenter_request_shipNode_calendarDayConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'standardProcessingSchedule' => '\Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfigurationStandardProcessingSchedule',
        'additionalDaysOff' => 'string[]',
        'carrierWeekendCalendar' => '\Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendar'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'standardProcessingSchedule' => null,
        'additionalDaysOff' => 'yyyy-MM-dd',
        'carrierWeekendCalendar' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'standardProcessingSchedule' => false,
        'additionalDaysOff' => false,
        'carrierWeekendCalendar' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'standardProcessingSchedule' => 'standardProcessingSchedule',
        'additionalDaysOff' => 'additionalDaysOff',
        'carrierWeekendCalendar' => 'carrierWeekendCalendar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'standardProcessingSchedule' => 'setStandardProcessingSchedule',
        'additionalDaysOff' => 'setAdditionalDaysOff',
        'carrierWeekendCalendar' => 'setCarrierWeekendCalendar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'standardProcessingSchedule' => 'getStandardProcessingSchedule',
        'additionalDaysOff' => 'getAdditionalDaysOff',
        'carrierWeekendCalendar' => 'getCarrierWeekendCalendar'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('standardProcessingSchedule', $data ?? [], null);
        $this->setIfExists('additionalDaysOff', $data ?? [], null);
        $this->setIfExists('carrierWeekendCalendar', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['standardProcessingSchedule'] === null) {
            $invalidProperties[] = "'standardProcessingSchedule' can't be null";
        }
        if ($this->container['additionalDaysOff'] === null) {
            $invalidProperties[] = "'additionalDaysOff' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets standardProcessingSchedule
     *
     * @return \Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfigurationStandardProcessingSchedule
    
     */
    public function getStandardProcessingSchedule()
    {
        return $this->container['standardProcessingSchedule'];
    }

    /**
     * Sets standardProcessingSchedule
     *
     * @param \Walmart\Models\MP\US\Settings\UpdateFulfillmentCenterRequestShipNodeCalendarDayConfigurationStandardProcessingSchedule $standardProcessingSchedule standardProcessingSchedule
     *
     * @return self
    
     */
    public function setStandardProcessingSchedule($standardProcessingSchedule)
    {
        if (is_null($standardProcessingSchedule)) {
            throw new \InvalidArgumentException('non-nullable standardProcessingSchedule cannot be null');
        }

        $this->container['standardProcessingSchedule'] = $standardProcessingSchedule;
        return $this;
    }

    /**
     * Gets additionalDaysOff
     *
     * @return string[]
    
     */
    public function getAdditionalDaysOff()
    {
        return $this->container['additionalDaysOff'];
    }

    /**
     * Sets additionalDaysOff
     *
     * @param string[] $additionalDaysOff List of additional days on which the fulfillment center is closed. For example, if the fulfillment center is closed on New Year’s Day, then add the date in the list. If there are no additional off days, then this list will be empty. Use ISO 8601 format for date. For example: '2021-07-16'(yyyy-MM-dd)
     *
     * @return self
    
     */
    public function setAdditionalDaysOff($additionalDaysOff)
    {
        if (is_null($additionalDaysOff)) {
            throw new \InvalidArgumentException('non-nullable additionalDaysOff cannot be null');
        }

        $this->container['additionalDaysOff'] = $additionalDaysOff;
        return $this;
    }

    /**
     * Gets carrierWeekendCalendar
     *
     * @return \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendar|null
    
     */
    public function getCarrierWeekendCalendar()
    {
        return $this->container['carrierWeekendCalendar'];
    }

    /**
     * Sets carrierWeekendCalendar
     *
     * @param \Walmart\Models\MP\US\Settings\GetAllFulfillmentCenters200ResponseInnerCalendarDayConfigurationCarrierWeekendCalendar|null $carrierWeekendCalendar carrierWeekendCalendar
     *
     * @return self
    
     */
    public function setCarrierWeekendCalendar($carrierWeekendCalendar)
    {
        if (is_null($carrierWeekendCalendar)) {
            throw new \InvalidArgumentException('non-nullable carrierWeekendCalendar cannot be null');
        }

        $this->container['carrierWeekendCalendar'] = $carrierWeekendCalendar;
        return $this;
    }
}


