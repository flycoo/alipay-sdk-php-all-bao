<?php
/**
 * AlipayOfflineMarketApplyorderBatchqueryModel
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
 * AlipayOfflineMarketApplyorderBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketApplyorderBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketApplyorderBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'action' => 'string',
        'applyIds' => 'string[]',
        'bizId' => 'string',
        'bizType' => 'string',
        'endTime' => 'string',
        'opId' => 'string',
        'opRole' => 'string',
        'pageNo' => 'int',
        'pageSize' => 'int',
        'requestIds' => 'string[]',
        'startTime' => 'string',
        'status' => 'string'
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
        'applyIds' => null,
        'bizId' => null,
        'bizType' => null,
        'endTime' => null,
        'opId' => null,
        'opRole' => null,
        'pageNo' => null,
        'pageSize' => null,
        'requestIds' => null,
        'startTime' => null,
        'status' => null
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
        'applyIds' => 'apply_ids',
        'bizId' => 'biz_id',
        'bizType' => 'biz_type',
        'endTime' => 'end_time',
        'opId' => 'op_id',
        'opRole' => 'op_role',
        'pageNo' => 'page_no',
        'pageSize' => 'page_size',
        'requestIds' => 'request_ids',
        'startTime' => 'start_time',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'action' => 'setAction',
        'applyIds' => 'setApplyIds',
        'bizId' => 'setBizId',
        'bizType' => 'setBizType',
        'endTime' => 'setEndTime',
        'opId' => 'setOpId',
        'opRole' => 'setOpRole',
        'pageNo' => 'setPageNo',
        'pageSize' => 'setPageSize',
        'requestIds' => 'setRequestIds',
        'startTime' => 'setStartTime',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'action' => 'getAction',
        'applyIds' => 'getApplyIds',
        'bizId' => 'getBizId',
        'bizType' => 'getBizType',
        'endTime' => 'getEndTime',
        'opId' => 'getOpId',
        'opRole' => 'getOpRole',
        'pageNo' => 'getPageNo',
        'pageSize' => 'getPageSize',
        'requestIds' => 'getRequestIds',
        'startTime' => 'getStartTime',
        'status' => 'getStatus'
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
        $this->container['applyIds'] = $data['applyIds'] ?? null;
        $this->container['bizId'] = $data['bizId'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['opId'] = $data['opId'] ?? null;
        $this->container['opRole'] = $data['opRole'] ?? null;
        $this->container['pageNo'] = $data['pageNo'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['requestIds'] = $data['requestIds'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets applyIds
     *
     * @return string[]|null
     */
    public function getApplyIds()
    {
        return $this->container['applyIds'];
    }

    /**
     * Sets applyIds
     *
     * @param string[]|null $applyIds 支付宝流水ID列表，最大不超过100个
     *
     * @return self
     */
    public function setApplyIds($applyIds)
    {
        $this->container['applyIds'] = $applyIds;

        return $this;
    }

    /**
     * Gets bizId
     *
     * @return string|null
     */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
     * Sets bizId
     *
     * @param string|null $bizId 业务主体ID。根据biz_type不同可能对应shop_id或item_id。
     *
     * @return self
     */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 业务类型：SHOP-店铺，ITEM-商品。
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 查询的流水创建时间最后值。格式：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets opId
     *
     * @return string|null
     */
    public function getOpId()
    {
        return $this->container['opId'];
    }

    /**
     * Sets opId
     *
     * @param string|null $opId 操作用户的支付账号id
     *
     * @return self
     */
    public function setOpId($opId)
    {
        $this->container['opId'] = $opId;

        return $this;
    }

    /**
     * Gets opRole
     *
     * @return string|null
     */
    public function getOpRole()
    {
        return $this->container['opRole'];
    }

    /**
     * Sets opRole
     *
     * @param string|null $opRole 系统集成商统一传入ISV
     *
     * @return self
     */
    public function setOpRole($opRole)
    {
        $this->container['opRole'] = $opRole;

        return $this;
    }

    /**
     * Gets pageNo
     *
     * @return int|null
     */
    public function getPageNo()
    {
        return $this->container['pageNo'];
    }

    /**
     * Sets pageNo
     *
     * @param int|null $pageNo 页码，留空标示第一页，默认20个结果为一页
     *
     * @return self
     */
    public function setPageNo($pageNo)
    {
        $this->container['pageNo'] = $pageNo;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 每页记录数。默认20，最大100。
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets requestIds
     *
     * @return string[]|null
     */
    public function getRequestIds()
    {
        return $this->container['requestIds'];
    }

    /**
     * Sets requestIds
     *
     * @param string[]|null $requestIds 请求ID列表，最大不超过100个。  注意：暂时不支持此字段查询。
     *
     * @return self
     */
    public function setRequestIds($requestIds)
    {
        $this->container['requestIds'] = $requestIds;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 查询的流水创建时间起始值，只能查询近3个月数据。格式：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param string|null $status 流水状态：INIT-初始，PROCESS-处理中，SUCCESS-成功，FAIL-失败。
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


