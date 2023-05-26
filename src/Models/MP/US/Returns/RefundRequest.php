<?php

/**
 * RefundRequest
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
 * Returns Management
 *
 * This class is auto-generated by the OpenAPI generator v6.6.0 (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace Walmart\Models\MP\US\Returns;

use Walmart\Models\BaseModel;

/**
 * RefundRequest Class Doc Comment
 *
 * @category Class

 * @package  Walmart
 * @author   Jesse Evers
 * @link     https://highsidelabs.co
 * @email    jesse@highsidelabs.co
 */
class RefundRequest extends BaseModel
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'RefundRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'customerOrderId' => 'string',
        'refundLines' => '\Walmart\Models\MP\US\Returns\IssueRefundRequestRefundLinesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'customerOrderId' => null,
        'refundLines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customerOrderId' => false,
        'refundLines' => false
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'customerOrderId' => 'customerOrderId',
        'refundLines' => 'refundLines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'customerOrderId' => 'setCustomerOrderId',
        'refundLines' => 'setRefundLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'customerOrderId' => 'getCustomerOrderId',
        'refundLines' => 'getRefundLines'
    ];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('customerOrderId', $data ?? [], null);
        $this->setIfExists('refundLines', $data ?? [], null);
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerOrderId'] === null) {
            $invalidProperties[] = "'customerOrderId' can't be null";
        }
        if ($this->container['refundLines'] === null) {
            $invalidProperties[] = "'refundLines' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Gets customerOrderId
     *
     * @return string
    
     */
    public function getCustomerOrderId()
    {
        return $this->container['customerOrderId'];
    }

    /**
     * Sets customerOrderId
     *
     * @param string $customerOrderId A unique ID associated with the sales order for specified customer
     *
     * @return self
    
     */
    public function setCustomerOrderId($customerOrderId)
    {
        if (is_null($customerOrderId)) {
            throw new \InvalidArgumentException('non-nullable customerOrderId cannot be null');
        }

        $this->container['customerOrderId'] = $customerOrderId;
        return $this;
    }

    /**
     * Gets refundLines
     *
     * @return \Walmart\Models\MP\US\Returns\IssueRefundRequestRefundLinesInner[]
    
     */
    public function getRefundLines()
    {
        return $this->container['refundLines'];
    }

    /**
     * Sets refundLines
     *
     * @param \Walmart\Models\MP\US\Returns\IssueRefundRequestRefundLinesInner[] $refundLines Array of refund lines.
     *
     * @return self
    
     */
    public function setRefundLines($refundLines)
    {
        if (is_null($refundLines)) {
            throw new \InvalidArgumentException('non-nullable refundLines cannot be null');
        }

        $this->container['refundLines'] = $refundLines;
        return $this;
    }
}


