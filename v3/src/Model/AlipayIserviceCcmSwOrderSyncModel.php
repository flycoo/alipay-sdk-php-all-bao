<?php
/**
 * AlipayIserviceCcmSwOrderSyncModel
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
 * AlipayIserviceCcmSwOrderSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmSwOrderSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmSwOrderSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'linkUrl' => 'string',
        'logisticCount' => 'int',
        'logistics' => '\Alipay\OpenAPISDK\Model\LogisticInfo[]',
        'orderCreateTime' => 'string',
        'orderId' => 'string',
        'orderType' => 'string',
        'spuCount' => 'int',
        'spus' => '\Alipay\OpenAPISDK\Model\SpuInfo[]',
        'status' => 'string',
        'subStatus' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'linkUrl' => null,
        'logisticCount' => null,
        'logistics' => null,
        'orderCreateTime' => null,
        'orderId' => null,
        'orderType' => null,
        'spuCount' => null,
        'spus' => null,
        'status' => null,
        'subStatus' => null,
        'userId' => null
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
        'amount' => 'amount',
        'linkUrl' => 'link_url',
        'logisticCount' => 'logistic_count',
        'logistics' => 'logistics',
        'orderCreateTime' => 'order_create_time',
        'orderId' => 'order_id',
        'orderType' => 'order_type',
        'spuCount' => 'spu_count',
        'spus' => 'spus',
        'status' => 'status',
        'subStatus' => 'sub_status',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'linkUrl' => 'setLinkUrl',
        'logisticCount' => 'setLogisticCount',
        'logistics' => 'setLogistics',
        'orderCreateTime' => 'setOrderCreateTime',
        'orderId' => 'setOrderId',
        'orderType' => 'setOrderType',
        'spuCount' => 'setSpuCount',
        'spus' => 'setSpus',
        'status' => 'setStatus',
        'subStatus' => 'setSubStatus',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'linkUrl' => 'getLinkUrl',
        'logisticCount' => 'getLogisticCount',
        'logistics' => 'getLogistics',
        'orderCreateTime' => 'getOrderCreateTime',
        'orderId' => 'getOrderId',
        'orderType' => 'getOrderType',
        'spuCount' => 'getSpuCount',
        'spus' => 'getSpus',
        'status' => 'getStatus',
        'subStatus' => 'getSubStatus',
        'userId' => 'getUserId'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['linkUrl'] = $data['linkUrl'] ?? null;
        $this->container['logisticCount'] = $data['logisticCount'] ?? null;
        $this->container['logistics'] = $data['logistics'] ?? null;
        $this->container['orderCreateTime'] = $data['orderCreateTime'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['orderType'] = $data['orderType'] ?? null;
        $this->container['spuCount'] = $data['spuCount'] ?? null;
        $this->container['spus'] = $data['spus'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subStatus'] = $data['subStatus'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 订单金额
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets linkUrl
     *
     * @return string|null
     */
    public function getLinkUrl()
    {
        return $this->container['linkUrl'];
    }

    /**
     * Sets linkUrl
     *
     * @param string|null $linkUrl 订单链接
     *
     * @return self
     */
    public function setLinkUrl($linkUrl)
    {
        $this->container['linkUrl'] = $linkUrl;

        return $this;
    }

    /**
     * Gets logisticCount
     *
     * @return int|null
     */
    public function getLogisticCount()
    {
        return $this->container['logisticCount'];
    }

    /**
     * Sets logisticCount
     *
     * @param int|null $logisticCount 订单物流数量
     *
     * @return self
     */
    public function setLogisticCount($logisticCount)
    {
        $this->container['logisticCount'] = $logisticCount;

        return $this;
    }

    /**
     * Gets logistics
     *
     * @return \Alipay\OpenAPISDK\Model\LogisticInfo[]|null
     */
    public function getLogistics()
    {
        return $this->container['logistics'];
    }

    /**
     * Sets logistics
     *
     * @param \Alipay\OpenAPISDK\Model\LogisticInfo[]|null $logistics 物流信息列表
     *
     * @return self
     */
    public function setLogistics($logistics)
    {
        $this->container['logistics'] = $logistics;

        return $this;
    }

    /**
     * Gets orderCreateTime
     *
     * @return string|null
     */
    public function getOrderCreateTime()
    {
        return $this->container['orderCreateTime'];
    }

    /**
     * Sets orderCreateTime
     *
     * @param string|null $orderCreateTime 订单创建时间
     *
     * @return self
     */
    public function setOrderCreateTime($orderCreateTime)
    {
        $this->container['orderCreateTime'] = $orderCreateTime;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId 订单id
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return string|null
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param string|null $orderType 普通订单：NORMAL 预售订单：PRE_SALE
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

        return $this;
    }

    /**
     * Gets spuCount
     *
     * @return int|null
     */
    public function getSpuCount()
    {
        return $this->container['spuCount'];
    }

    /**
     * Sets spuCount
     *
     * @param int|null $spuCount 订单商品种类
     *
     * @return self
     */
    public function setSpuCount($spuCount)
    {
        $this->container['spuCount'] = $spuCount;

        return $this;
    }

    /**
     * Gets spus
     *
     * @return \Alipay\OpenAPISDK\Model\SpuInfo[]|null
     */
    public function getSpus()
    {
        return $this->container['spus'];
    }

    /**
     * Sets spus
     *
     * @param \Alipay\OpenAPISDK\Model\SpuInfo[]|null $spus 订单商品信息
     *
     * @return self
     */
    public function setSpus($spus)
    {
        $this->container['spus'] = $spus;

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
     * @param string|null $status 订单状态，目前支持以下几种状态 下单未支付 WAIT_PAY 支付未发货 PAIED 已发货 IN_DELIVERY 售后中 IN_AFTER_SALE 订单完成 FINISHED
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subStatus
     *
     * @return string|null
     */
    public function getSubStatus()
    {
        return $this->container['subStatus'];
    }

    /**
     * Sets subStatus
     *
     * @param string|null $subStatus 订单子状态
     *
     * @return self
     */
    public function setSubStatus($subStatus)
    {
        $this->container['subStatus'] = $subStatus;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 下单用户id(外部系统ID)
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


