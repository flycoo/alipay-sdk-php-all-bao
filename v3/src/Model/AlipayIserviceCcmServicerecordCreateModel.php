<?php
/**
 * AlipayIserviceCcmServicerecordCreateModel
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
 * AlipayIserviceCcmServicerecordCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmServicerecordCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmServicerecordCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'acid' => 'string',
        'aid' => 'string',
        'ani' => 'string',
        'asid' => 'string',
        'categoryList' => '\Alipay\OpenAPISDK\Model\ServiceRecordCatRequest[]',
        'chatBeginTime' => 'string',
        'chatEndTime' => 'string',
        'city' => 'string',
        'creatorId' => 'string',
        'disconSymbol' => 'string',
        'dnis' => 'string',
        'fileSize' => 'int',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'memo' => 'string',
        'modifierId' => 'string',
        'outboundTaskId' => 'string',
        'satisfaction' => 'string',
        'satisfactionMemo' => 'string',
        'serviceSource' => 'string',
        'serviceTime' => 'int',
        'skillgroupId' => 'string',
        'skillgroupName' => 'string',
        'tntInstId' => 'string',
        'userId' => 'string',
        'verifyResult' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'acid' => null,
        'aid' => null,
        'ani' => null,
        'asid' => null,
        'categoryList' => null,
        'chatBeginTime' => null,
        'chatEndTime' => null,
        'city' => null,
        'creatorId' => null,
        'disconSymbol' => null,
        'dnis' => null,
        'fileSize' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'memo' => null,
        'modifierId' => null,
        'outboundTaskId' => null,
        'satisfaction' => null,
        'satisfactionMemo' => null,
        'serviceSource' => null,
        'serviceTime' => null,
        'skillgroupId' => null,
        'skillgroupName' => null,
        'tntInstId' => null,
        'userId' => null,
        'verifyResult' => null
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
        'acid' => 'acid',
        'aid' => 'aid',
        'ani' => 'ani',
        'asid' => 'asid',
        'categoryList' => 'category_list',
        'chatBeginTime' => 'chat_begin_time',
        'chatEndTime' => 'chat_end_time',
        'city' => 'city',
        'creatorId' => 'creator_id',
        'disconSymbol' => 'discon_symbol',
        'dnis' => 'dnis',
        'fileSize' => 'file_size',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'memo' => 'memo',
        'modifierId' => 'modifier_id',
        'outboundTaskId' => 'outbound_task_id',
        'satisfaction' => 'satisfaction',
        'satisfactionMemo' => 'satisfaction_memo',
        'serviceSource' => 'service_source',
        'serviceTime' => 'service_time',
        'skillgroupId' => 'skillgroup_id',
        'skillgroupName' => 'skillgroup_name',
        'tntInstId' => 'tnt_inst_id',
        'userId' => 'user_id',
        'verifyResult' => 'verify_result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'acid' => 'setAcid',
        'aid' => 'setAid',
        'ani' => 'setAni',
        'asid' => 'setAsid',
        'categoryList' => 'setCategoryList',
        'chatBeginTime' => 'setChatBeginTime',
        'chatEndTime' => 'setChatEndTime',
        'city' => 'setCity',
        'creatorId' => 'setCreatorId',
        'disconSymbol' => 'setDisconSymbol',
        'dnis' => 'setDnis',
        'fileSize' => 'setFileSize',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'memo' => 'setMemo',
        'modifierId' => 'setModifierId',
        'outboundTaskId' => 'setOutboundTaskId',
        'satisfaction' => 'setSatisfaction',
        'satisfactionMemo' => 'setSatisfactionMemo',
        'serviceSource' => 'setServiceSource',
        'serviceTime' => 'setServiceTime',
        'skillgroupId' => 'setSkillgroupId',
        'skillgroupName' => 'setSkillgroupName',
        'tntInstId' => 'setTntInstId',
        'userId' => 'setUserId',
        'verifyResult' => 'setVerifyResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'acid' => 'getAcid',
        'aid' => 'getAid',
        'ani' => 'getAni',
        'asid' => 'getAsid',
        'categoryList' => 'getCategoryList',
        'chatBeginTime' => 'getChatBeginTime',
        'chatEndTime' => 'getChatEndTime',
        'city' => 'getCity',
        'creatorId' => 'getCreatorId',
        'disconSymbol' => 'getDisconSymbol',
        'dnis' => 'getDnis',
        'fileSize' => 'getFileSize',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'memo' => 'getMemo',
        'modifierId' => 'getModifierId',
        'outboundTaskId' => 'getOutboundTaskId',
        'satisfaction' => 'getSatisfaction',
        'satisfactionMemo' => 'getSatisfactionMemo',
        'serviceSource' => 'getServiceSource',
        'serviceTime' => 'getServiceTime',
        'skillgroupId' => 'getSkillgroupId',
        'skillgroupName' => 'getSkillgroupName',
        'tntInstId' => 'getTntInstId',
        'userId' => 'getUserId',
        'verifyResult' => 'getVerifyResult'
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
        $this->container['acid'] = $data['acid'] ?? null;
        $this->container['aid'] = $data['aid'] ?? null;
        $this->container['ani'] = $data['ani'] ?? null;
        $this->container['asid'] = $data['asid'] ?? null;
        $this->container['categoryList'] = $data['categoryList'] ?? null;
        $this->container['chatBeginTime'] = $data['chatBeginTime'] ?? null;
        $this->container['chatEndTime'] = $data['chatEndTime'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['creatorId'] = $data['creatorId'] ?? null;
        $this->container['disconSymbol'] = $data['disconSymbol'] ?? null;
        $this->container['dnis'] = $data['dnis'] ?? null;
        $this->container['fileSize'] = $data['fileSize'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['modifierId'] = $data['modifierId'] ?? null;
        $this->container['outboundTaskId'] = $data['outboundTaskId'] ?? null;
        $this->container['satisfaction'] = $data['satisfaction'] ?? null;
        $this->container['satisfactionMemo'] = $data['satisfactionMemo'] ?? null;
        $this->container['serviceSource'] = $data['serviceSource'] ?? null;
        $this->container['serviceTime'] = $data['serviceTime'] ?? null;
        $this->container['skillgroupId'] = $data['skillgroupId'] ?? null;
        $this->container['skillgroupName'] = $data['skillgroupName'] ?? null;
        $this->container['tntInstId'] = $data['tntInstId'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['verifyResult'] = $data['verifyResult'] ?? null;
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
     * Gets acid
     *
     * @return string|null
     */
    public function getAcid()
    {
        return $this->container['acid'];
    }

    /**
     * Sets acid
     *
     * @param string|null $acid 来电唯一标识
     *
     * @return self
     */
    public function setAcid($acid)
    {
        $this->container['acid'] = $acid;

        return $this;
    }

    /**
     * Gets aid
     *
     * @return string|null
     */
    public function getAid()
    {
        return $this->container['aid'];
    }

    /**
     * Sets aid
     *
     * @param string|null $aid 客服坐席号(软电话中定义的)
     *
     * @return self
     */
    public function setAid($aid)
    {
        $this->container['aid'] = $aid;

        return $this;
    }

    /**
     * Gets ani
     *
     * @return string|null
     */
    public function getAni()
    {
        return $this->container['ani'];
    }

    /**
     * Sets ani
     *
     * @param string|null $ani 主叫号码
     *
     * @return self
     */
    public function setAni($ani)
    {
        $this->container['ani'] = $ani;

        return $this;
    }

    /**
     * Gets asid
     *
     * @return string|null
     */
    public function getAsid()
    {
        return $this->container['asid'];
    }

    /**
     * Sets asid
     *
     * @param string|null $asid 恒生专用来电唯一标识
     *
     * @return self
     */
    public function setAsid($asid)
    {
        $this->container['asid'] = $asid;

        return $this;
    }

    /**
     * Gets categoryList
     *
     * @return \Alipay\OpenAPISDK\Model\ServiceRecordCatRequest[]|null
     */
    public function getCategoryList()
    {
        return $this->container['categoryList'];
    }

    /**
     * Sets categoryList
     *
     * @param \Alipay\OpenAPISDK\Model\ServiceRecordCatRequest[]|null $categoryList 类目信息(详细信息请参考具体类型描述)
     *
     * @return self
     */
    public function setCategoryList($categoryList)
    {
        $this->container['categoryList'] = $categoryList;

        return $this;
    }

    /**
     * Gets chatBeginTime
     *
     * @return string|null
     */
    public function getChatBeginTime()
    {
        return $this->container['chatBeginTime'];
    }

    /**
     * Sets chatBeginTime
     *
     * @param string|null $chatBeginTime 标准时间格式：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setChatBeginTime($chatBeginTime)
    {
        $this->container['chatBeginTime'] = $chatBeginTime;

        return $this;
    }

    /**
     * Gets chatEndTime
     *
     * @return string|null
     */
    public function getChatEndTime()
    {
        return $this->container['chatEndTime'];
    }

    /**
     * Sets chatEndTime
     *
     * @param string|null $chatEndTime 标准时间格式：yyyy-MM-dd HH:mm:ss
     *
     * @return self
     */
    public function setChatEndTime($chatEndTime)
    {
        $this->container['chatEndTime'] = $chatEndTime;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city 来电地址
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets creatorId
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
     * Sets creatorId
     *
     * @param string|null $creatorId 创建者ID
     *
     * @return self
     */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;

        return $this;
    }

    /**
     * Gets disconSymbol
     *
     * @return string|null
     */
    public function getDisconSymbol()
    {
        return $this->container['disconSymbol'];
    }

    /**
     * Sets disconSymbol
     *
     * @param string|null $disconSymbol 先挂断方 AGENT:客服 CUSTOMER:客户
     *
     * @return self
     */
    public function setDisconSymbol($disconSymbol)
    {
        $this->container['disconSymbol'] = $disconSymbol;

        return $this;
    }

    /**
     * Gets dnis
     *
     * @return string|null
     */
    public function getDnis()
    {
        return $this->container['dnis'];
    }

    /**
     * Sets dnis
     *
     * @param string|null $dnis 被叫号码
     *
     * @return self
     */
    public function setDnis($dnis)
    {
        $this->container['dnis'] = $dnis;

        return $this;
    }

    /**
     * Gets fileSize
     *
     * @return int|null
     */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
     * Sets fileSize
     *
     * @param int|null $fileSize 文件大小
     *
     * @return self
     */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间(yyyy-MM-dd HH:mm:ss)
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 修改时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 服务记录备注信息
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets modifierId
     *
     * @return string|null
     */
    public function getModifierId()
    {
        return $this->container['modifierId'];
    }

    /**
     * Sets modifierId
     *
     * @param string|null $modifierId 修改人ID
     *
     * @return self
     */
    public function setModifierId($modifierId)
    {
        $this->container['modifierId'] = $modifierId;

        return $this;
    }

    /**
     * Gets outboundTaskId
     *
     * @return string|null
     */
    public function getOutboundTaskId()
    {
        return $this->container['outboundTaskId'];
    }

    /**
     * Sets outboundTaskId
     *
     * @param string|null $outboundTaskId 外呼任务ID
     *
     * @return self
     */
    public function setOutboundTaskId($outboundTaskId)
    {
        $this->container['outboundTaskId'] = $outboundTaskId;

        return $this;
    }

    /**
     * Gets satisfaction
     *
     * @return string|null
     */
    public function getSatisfaction()
    {
        return $this->container['satisfaction'];
    }

    /**
     * Sets satisfaction
     *
     * @param string|null $satisfaction 满意度 0:非常满意 1:满意 2:一般 3:不满意 4:非常不满意
     *
     * @return self
     */
    public function setSatisfaction($satisfaction)
    {
        $this->container['satisfaction'] = $satisfaction;

        return $this;
    }

    /**
     * Gets satisfactionMemo
     *
     * @return string|null
     */
    public function getSatisfactionMemo()
    {
        return $this->container['satisfactionMemo'];
    }

    /**
     * Sets satisfactionMemo
     *
     * @param string|null $satisfactionMemo 满意度补充信息
     *
     * @return self
     */
    public function setSatisfactionMemo($satisfactionMemo)
    {
        $this->container['satisfactionMemo'] = $satisfactionMemo;

        return $this;
    }

    /**
     * Gets serviceSource
     *
     * @return string|null
     */
    public function getServiceSource()
    {
        return $this->container['serviceSource'];
    }

    /**
     * Sets serviceSource
     *
     * @param string|null $serviceSource 1:客户来电 4:电话回访 5:网点服务 6:在线服务 7:外呼任务 8:手动外呼 9:在线离线留言
     *
     * @return self
     */
    public function setServiceSource($serviceSource)
    {
        $this->container['serviceSource'] = $serviceSource;

        return $this;
    }

    /**
     * Gets serviceTime
     *
     * @return int|null
     */
    public function getServiceTime()
    {
        return $this->container['serviceTime'];
    }

    /**
     * Sets serviceTime
     *
     * @param int|null $serviceTime 服务时长(单位:秒)
     *
     * @return self
     */
    public function setServiceTime($serviceTime)
    {
        $this->container['serviceTime'] = $serviceTime;

        return $this;
    }

    /**
     * Gets skillgroupId
     *
     * @return string|null
     */
    public function getSkillgroupId()
    {
        return $this->container['skillgroupId'];
    }

    /**
     * Sets skillgroupId
     *
     * @param string|null $skillgroupId 技能组ID
     *
     * @return self
     */
    public function setSkillgroupId($skillgroupId)
    {
        $this->container['skillgroupId'] = $skillgroupId;

        return $this;
    }

    /**
     * Gets skillgroupName
     *
     * @return string|null
     */
    public function getSkillgroupName()
    {
        return $this->container['skillgroupName'];
    }

    /**
     * Sets skillgroupName
     *
     * @param string|null $skillgroupName 技能组名称(技能组ID对应的技能组名称)
     *
     * @return self
     */
    public function setSkillgroupName($skillgroupName)
    {
        $this->container['skillgroupName'] = $skillgroupName;

        return $this;
    }

    /**
     * Gets tntInstId
     *
     * @return string|null
     */
    public function getTntInstId()
    {
        return $this->container['tntInstId'];
    }

    /**
     * Sets tntInstId
     *
     * @param string|null $tntInstId 业务租户
     *
     * @return self
     */
    public function setTntInstId($tntInstId)
    {
        $this->container['tntInstId'] = $tntInstId;

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
     * @param string|null $userId 来访用户唯一标识ID
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets verifyResult
     *
     * @return string|null
     */
    public function getVerifyResult()
    {
        return $this->container['verifyResult'];
    }

    /**
     * Sets verifyResult
     *
     * @param string|null $verifyResult IVR验证结果 ROLE_N:未定位到用户 CERTNO_Y_PWD_Y:证件号码+交易密码验证通过 CERTNO_Y_PWD_N:证件号码验证通过+交易密码不通过 CERTNO_Y_PWD_UNKNOW:证件号码验证通过 PHONE_Y_PWD_Y:来电手机+交易密码验证通过 PHONE_Y_PWD_N:来电手机+交易密码未通过 PHONE_Y_PWD_UNKNOW:来电手机账户 SEARCH_Y_PWD_Y:搜索定位用户+推屏交易密码通过 SEARCH_Y_PWD_N:搜索定位用户+推屏交易密码未通过 SEARCH_Y_PWD_UNKNOW:搜索定位用户
     *
     * @return self
     */
    public function setVerifyResult($verifyResult)
    {
        $this->container['verifyResult'] = $verifyResult;

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


