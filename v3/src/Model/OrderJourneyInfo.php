<?php
/**
 * OrderJourneyInfo
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * 支付宝开放平台API
 *
 * 支付宝开放平台v3协议文档
 *
 * The version of the OpenAPI document: 2024-08-21
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Alipay\OpenAPISDK\Model;

use \ArrayAccess;
use \Alipay\OpenAPISDK\ObjectSerializer;

/**
 * OrderJourneyInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OrderJourneyInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderJourneyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\OrderExtInfo[]',
        'journeyCreateTime' => 'string',
        'journeyDesc' => 'string',
        'journeyElements' => '\Alipay\OpenAPISDK\Model\OrderJourneyElement[]',
        'journeyIndex' => 'string',
        'journeyModifyTime' => 'string',
        'merchantJourneyNo' => 'string',
        'status' => 'string',
        'statusDesc' => 'string',
        'subType' => 'string',
        'title' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'action' => null,
        'extInfo' => null,
        'journeyCreateTime' => null,
        'journeyDesc' => null,
        'journeyElements' => null,
        'journeyIndex' => null,
        'journeyModifyTime' => null,
        'merchantJourneyNo' => null,
        'status' => null,
        'statusDesc' => null,
        'subType' => null,
        'title' => null,
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'action' => 'action',
        'extInfo' => 'ext_info',
        'journeyCreateTime' => 'journey_create_time',
        'journeyDesc' => 'journey_desc',
        'journeyElements' => 'journey_elements',
        'journeyIndex' => 'journey_index',
        'journeyModifyTime' => 'journey_modify_time',
        'merchantJourneyNo' => 'merchant_journey_no',
        'status' => 'status',
        'statusDesc' => 'status_desc',
        'subType' => 'sub_type',
        'title' => 'title',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'extInfo' => 'setExtInfo',
        'journeyCreateTime' => 'setJourneyCreateTime',
        'journeyDesc' => 'setJourneyDesc',
        'journeyElements' => 'setJourneyElements',
        'journeyIndex' => 'setJourneyIndex',
        'journeyModifyTime' => 'setJourneyModifyTime',
        'merchantJourneyNo' => 'setMerchantJourneyNo',
        'status' => 'setStatus',
        'statusDesc' => 'setStatusDesc',
        'subType' => 'setSubType',
        'title' => 'setTitle',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'extInfo' => 'getExtInfo',
        'journeyCreateTime' => 'getJourneyCreateTime',
        'journeyDesc' => 'getJourneyDesc',
        'journeyElements' => 'getJourneyElements',
        'journeyIndex' => 'getJourneyIndex',
        'journeyModifyTime' => 'getJourneyModifyTime',
        'merchantJourneyNo' => 'getMerchantJourneyNo',
        'status' => 'getStatus',
        'statusDesc' => 'getStatusDesc',
        'subType' => 'getSubType',
        'title' => 'getTitle',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['action'] = $data['action'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['journeyCreateTime'] = $data['journeyCreateTime'] ?? null;
        $this->container['journeyDesc'] = $data['journeyDesc'] ?? null;
        $this->container['journeyElements'] = $data['journeyElements'] ?? null;
        $this->container['journeyIndex'] = $data['journeyIndex'] ?? null;
        $this->container['journeyModifyTime'] = $data['journeyModifyTime'] ?? null;
        $this->container['merchantJourneyNo'] = $data['merchantJourneyNo'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['statusDesc'] = $data['statusDesc'] ?? null;
        $this->container['subType'] = $data['subType'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets action
     *
     * @return string|null
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string|null $action 操作动作
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null $extInfo 扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets journeyCreateTime
     *
     * @return string|null
     */
    public function getJourneyCreateTime()
    {
        return $this->container['journeyCreateTime'];
    }

    /**
     * Sets journeyCreateTime
     *
     * @param string|null $journeyCreateTime 行程创建时间
     *
     * @return self
     */
    public function setJourneyCreateTime($journeyCreateTime)
    {
        $this->container['journeyCreateTime'] = $journeyCreateTime;

        return $this;
    }

    /**
     * Gets journeyDesc
     *
     * @return string|null
     */
    public function getJourneyDesc()
    {
        return $this->container['journeyDesc'];
    }

    /**
     * Sets journeyDesc
     *
     * @param string|null $journeyDesc 行程描述
     *
     * @return self
     */
    public function setJourneyDesc($journeyDesc)
    {
        $this->container['journeyDesc'] = $journeyDesc;

        return $this;
    }

    /**
     * Gets journeyElements
     *
     * @return \Alipay\OpenAPISDK\Model\OrderJourneyElement[]|null
     */
    public function getJourneyElements()
    {
        return $this->container['journeyElements'];
    }

    /**
     * Sets journeyElements
     *
     * @param \Alipay\OpenAPISDK\Model\OrderJourneyElement[]|null $journeyElements 行程元素列表
     *
     * @return self
     */
    public function setJourneyElements($journeyElements)
    {
        $this->container['journeyElements'] = $journeyElements;

        return $this;
    }

    /**
     * Gets journeyIndex
     *
     * @return string|null
     */
    public function getJourneyIndex()
    {
        return $this->container['journeyIndex'];
    }

    /**
     * Sets journeyIndex
     *
     * @param string|null $journeyIndex 描述本行程为整个行程中的第几程
     *
     * @return self
     */
    public function setJourneyIndex($journeyIndex)
    {
        $this->container['journeyIndex'] = $journeyIndex;

        return $this;
    }

    /**
     * Gets journeyModifyTime
     *
     * @return string|null
     */
    public function getJourneyModifyTime()
    {
        return $this->container['journeyModifyTime'];
    }

    /**
     * Sets journeyModifyTime
     *
     * @param string|null $journeyModifyTime 行程修改时间
     *
     * @return self
     */
    public function setJourneyModifyTime($journeyModifyTime)
    {
        $this->container['journeyModifyTime'] = $journeyModifyTime;

        return $this;
    }

    /**
     * Gets merchantJourneyNo
     *
     * @return string|null
     */
    public function getMerchantJourneyNo()
    {
        return $this->container['merchantJourneyNo'];
    }

    /**
     * Sets merchantJourneyNo
     *
     * @param string|null $merchantJourneyNo 商户行程单号
     *
     * @return self
     */
    public function setMerchantJourneyNo($merchantJourneyNo)
    {
        $this->container['merchantJourneyNo'] = $merchantJourneyNo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 行程状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets statusDesc
     *
     * @return string|null
     */
    public function getStatusDesc()
    {
        return $this->container['statusDesc'];
    }

    /**
     * Sets statusDesc
     *
     * @param string|null $statusDesc 行程状态描述
     *
     * @return self
     */
    public function setStatusDesc($statusDesc)
    {
        $this->container['statusDesc'] = $statusDesc;

        return $this;
    }

    /**
     * Gets subType
     *
     * @return string|null
     */
    public function getSubType()
    {
        return $this->container['subType'];
    }

    /**
     * Sets subType
     *
     * @param string|null $subType 行程子类型
     *
     * @return self
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

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
     * @param string|null $title 行程标题
     *
     * @return self
     */
    public function setTitle($title)
    {
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
     * @param string|null $type 行程类型
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


