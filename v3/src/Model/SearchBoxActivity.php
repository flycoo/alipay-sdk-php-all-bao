<?php
/**
 * SearchBoxActivity
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
 * SearchBoxActivity Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchBoxActivity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchBoxActivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'boxActivityId' => 'string',
        'boxId' => 'string',
        'endTime' => 'string',
        'failReason' => 'string',
        'materialType' => 'string',
        'materialUrl' => 'string',
        'runStatus' => 'string',
        'startTime' => 'string',
        'status' => 'string',
        'targetAppid' => 'string',
        'targetAppname' => 'string',
        'targetRegions' => '\Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]',
        'title' => 'string',
        'videoInfo' => '\Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'boxActivityId' => null,
        'boxId' => null,
        'endTime' => null,
        'failReason' => null,
        'materialType' => null,
        'materialUrl' => null,
        'runStatus' => null,
        'startTime' => null,
        'status' => null,
        'targetAppid' => null,
        'targetAppname' => null,
        'targetRegions' => null,
        'title' => null,
        'videoInfo' => null
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
        'boxActivityId' => 'box_activity_id',
        'boxId' => 'box_id',
        'endTime' => 'end_time',
        'failReason' => 'fail_reason',
        'materialType' => 'material_type',
        'materialUrl' => 'material_url',
        'runStatus' => 'run_status',
        'startTime' => 'start_time',
        'status' => 'status',
        'targetAppid' => 'target_appid',
        'targetAppname' => 'target_appname',
        'targetRegions' => 'target_regions',
        'title' => 'title',
        'videoInfo' => 'video_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'boxActivityId' => 'setBoxActivityId',
        'boxId' => 'setBoxId',
        'endTime' => 'setEndTime',
        'failReason' => 'setFailReason',
        'materialType' => 'setMaterialType',
        'materialUrl' => 'setMaterialUrl',
        'runStatus' => 'setRunStatus',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'targetAppid' => 'setTargetAppid',
        'targetAppname' => 'setTargetAppname',
        'targetRegions' => 'setTargetRegions',
        'title' => 'setTitle',
        'videoInfo' => 'setVideoInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'boxActivityId' => 'getBoxActivityId',
        'boxId' => 'getBoxId',
        'endTime' => 'getEndTime',
        'failReason' => 'getFailReason',
        'materialType' => 'getMaterialType',
        'materialUrl' => 'getMaterialUrl',
        'runStatus' => 'getRunStatus',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'targetAppid' => 'getTargetAppid',
        'targetAppname' => 'getTargetAppname',
        'targetRegions' => 'getTargetRegions',
        'title' => 'getTitle',
        'videoInfo' => 'getVideoInfo'
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
        $this->container['boxActivityId'] = $data['boxActivityId'] ?? null;
        $this->container['boxId'] = $data['boxId'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['failReason'] = $data['failReason'] ?? null;
        $this->container['materialType'] = $data['materialType'] ?? null;
        $this->container['materialUrl'] = $data['materialUrl'] ?? null;
        $this->container['runStatus'] = $data['runStatus'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['targetAppid'] = $data['targetAppid'] ?? null;
        $this->container['targetAppname'] = $data['targetAppname'] ?? null;
        $this->container['targetRegions'] = $data['targetRegions'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['videoInfo'] = $data['videoInfo'] ?? null;
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
     * Gets boxActivityId
     *
     * @return string|null
     */
    public function getBoxActivityId()
    {
        return $this->container['boxActivityId'];
    }

    /**
     * Sets boxActivityId
     *
     * @param string|null $boxActivityId 活动id
     *
     * @return self
     */
    public function setBoxActivityId($boxActivityId)
    {
        $this->container['boxActivityId'] = $boxActivityId;

        return $this;
    }

    /**
     * Gets boxId
     *
     * @return string|null
     */
    public function getBoxId()
    {
        return $this->container['boxId'];
    }

    /**
     * Sets boxId
     *
     * @param string|null $boxId 搜索直达id
     *
     * @return self
     */
    public function setBoxId($boxId)
    {
        $this->container['boxId'] = $boxId;

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
     * @param string|null $endTime 活动结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets failReason
     *
     * @return string|null
     */
    public function getFailReason()
    {
        return $this->container['failReason'];
    }

    /**
     * Sets failReason
     *
     * @param string|null $failReason 审核失败原因
     *
     * @return self
     */
    public function setFailReason($failReason)
    {
        $this->container['failReason'] = $failReason;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return string|null
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param string|null $materialType IMAGE-图片/VIDEO-视频
     *
     * @return self
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets materialUrl
     *
     * @return string|null
     */
    public function getMaterialUrl()
    {
        return $this->container['materialUrl'];
    }

    /**
     * Sets materialUrl
     *
     * @param string|null $materialUrl 当material_type=\"IMAGE\"时，为图片url；当material_type=\"VIDEO\"时，为视频url
     *
     * @return self
     */
    public function setMaterialUrl($materialUrl)
    {
        $this->container['materialUrl'] = $materialUrl;

        return $this;
    }

    /**
     * Gets runStatus
     *
     * @return string|null
     */
    public function getRunStatus()
    {
        return $this->container['runStatus'];
    }

    /**
     * Sets runStatus
     *
     * @param string|null $runStatus 运行状态，INITIAL-初始，ONLINE-已上架，EXPIRE-已失效，OFFLINE-已下架
     *
     * @return self
     */
    public function setRunStatus($runStatus)
    {
        $this->container['runStatus'] = $runStatus;

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
     * @param string|null $startTime 活动开始时间
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
     * @param string|null $status 配置状态，INITIAL-初始/AUDIT-审核中/CANCEL-已取消/ONLINE-已上架/REJECT-驳回/OFFLINE-已下架/EXPIRE-已失效
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets targetAppid
     *
     * @return string|null
     */
    public function getTargetAppid()
    {
        return $this->container['targetAppid'];
    }

    /**
     * Sets targetAppid
     *
     * @param string|null $targetAppid 跳转应用ID
     *
     * @return self
     */
    public function setTargetAppid($targetAppid)
    {
        $this->container['targetAppid'] = $targetAppid;

        return $this;
    }

    /**
     * Gets targetAppname
     *
     * @return string|null
     */
    public function getTargetAppname()
    {
        return $this->container['targetAppname'];
    }

    /**
     * Sets targetAppname
     *
     * @param string|null $targetAppname 目标小程序名称
     *
     * @return self
     */
    public function setTargetAppname($targetAppname)
    {
        $this->container['targetAppname'] = $targetAppname;

        return $this;
    }

    /**
     * Gets targetRegions
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null
     */
    public function getTargetRegions()
    {
        return $this->container['targetRegions'];
    }

    /**
     * Sets targetRegions
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryTargetRegion[]|null $targetRegions 投放目标区域
     *
     * @return self
     */
    public function setTargetRegions($targetRegions)
    {
        $this->container['targetRegions'] = $targetRegions;

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
     * @param string|null $title 活动标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets videoInfo
     *
     * @return \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null
     */
    public function getVideoInfo()
    {
        return $this->container['videoInfo'];
    }

    /**
     * Sets videoInfo
     *
     * @param \Alipay\OpenAPISDK\Model\SearchBoxActivityVideoInfo|null $videoInfo videoInfo
     *
     * @return self
     */
    public function setVideoInfo($videoInfo)
    {
        $this->container['videoInfo'] = $videoInfo;

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


