<?php

/**
 * RequestsStatusResponse
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
 * On-request Report Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\OnRequestReports;

use Walmart\Models\BaseModel;

/**
 * RequestsStatusResponse Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RequestsStatusResponse extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RequestsStatusResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'page' => 'int',
        'totalCount' => 'int',
        'limit' => 'int',
        'nextCursor' => 'string',
        'requests' => '\Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'page' => 'int32',
        'totalCount' => 'int64',
        'limit' => 'int32',
        'nextCursor' => null,
        'requests' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'page' => false,
        'totalCount' => false,
        'limit' => false,
        'nextCursor' => false,
        'requests' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'page' => 'page',
        'totalCount' => 'totalCount',
        'limit' => 'limit',
        'nextCursor' => 'nextCursor',
        'requests' => 'requests'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'page' => 'setPage',
        'totalCount' => 'setTotalCount',
        'limit' => 'setLimit',
        'nextCursor' => 'setNextCursor',
        'requests' => 'setRequests'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'page' => 'getPage',
        'totalCount' => 'getTotalCount',
        'limit' => 'getLimit',
        'nextCursor' => 'getNextCursor',
        'requests' => 'getRequests'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('page', $data ?? [], null);
        $this->setIfExists('totalCount', $data ?? [], null);
        $this->setIfExists('limit', $data ?? [], null);
        $this->setIfExists('nextCursor', $data ?? [], null);
        $this->setIfExists('requests', $data ?? [], null);
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
     * Gets page
     *
     * @return int|null
    
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page Current page
     *
     * @return self
    
     */
    public function setPage($page)
    {
        if (is_null($page)) {
            throw new \InvalidArgumentException('non-nullable page cannot be null');
        }

        $this->container['page'] = $page;
        return $this;
    }

    /**
     * Gets totalCount
     *
     * @return int|null
    
     */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
     * Sets totalCount
     *
     * @param int|null $totalCount Number of records fetched.
     *
     * @return self
    
     */
    public function setTotalCount($totalCount)
    {
        if (is_null($totalCount)) {
            throw new \InvalidArgumentException('non-nullable totalCount cannot be null');
        }

        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
    
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit Number of records to be returned. Default is 10.
     *
     * @return self
    
     */
    public function setLimit($limit)
    {
        if (is_null($limit)) {
            throw new \InvalidArgumentException('non-nullable limit cannot be null');
        }

        $this->container['limit'] = $limit;
        return $this;
    }

    /**
     * Gets nextCursor
     *
     * @return string|null
    
     */
    public function getNextCursor()
    {
        return $this->container['nextCursor'];
    }

    /**
     * Sets nextCursor
     *
     * @param string|null $nextCursor Used for pagination when more than specified limit (or default 10) records are found. Use this param for next API call. Just have to use this value as query param. Need to pass only the cursor value and not the initial API call query params. For e.g. if ['nextCursor'='reportType=ITEM&requestStatus=ERROR&requestSubmissionStartDate=2021-08-20T10:52:59Z&requestSubmissionEndDate=2021-09-14T10:52:59Z&page=2&limit=1'] then subsequent call to will be [marketplace.walmartapis.com/v3/reports/reportRequests?reportType=ITEM&requestStatus=ERROR&requestSubmissionStartDate=2021-08-20T10:52:59Z&requestSubmissionEndDate=2021-09-14T10:52:59Z&page=2&limit=1]. Just have to use nextCursor value instead of query params
     *
     * @return self
    
     */
    public function setNextCursor($nextCursor)
    {
        if (is_null($nextCursor)) {
            throw new \InvalidArgumentException('non-nullable nextCursor cannot be null');
        }

        $this->container['nextCursor'] = $nextCursor;
        return $this;
    }

    /**
     * Gets requests
     *
     * @return \Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInner[]|null
    
     */
    public function getRequests()
    {
        return $this->container['requests'];
    }

    /**
     * Sets requests
     *
     * @param \Walmart\Models\MP\US\OnRequestReports\GetRequestsStatus200ResponseRequestsInner[]|null $requests List of requests
     *
     * @return self
    
     */
    public function setRequests($requests)
    {
        if (is_null($requests)) {
            throw new \InvalidArgumentException('non-nullable requests cannot be null');
        }

        $this->container['requests'] = $requests;
        return $this;
    }
}


