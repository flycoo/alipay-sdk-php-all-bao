<?php
/**
 * ConversionData
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
 * ConversionData Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConversionData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConversionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'adId' => 'string',
        'attributeList' => '\Alipay\OpenAPISDK\Model\ConversionProperty[]',
        'attributes' => '\Alipay\OpenAPISDK\Model\ConversionProperty',
        'bizNo' => 'string',
        'callbackExtInfo' => 'string',
        'cid' => 'string',
        'conversionAmount' => 'string',
        'conversionId' => 'string',
        'conversionTime' => 'int',
        'conversionType' => 'string',
        'creativeId' => 'string',
        'dataId' => 'string',
        'dataSrcType' => 'string',
        'groupId' => 'string',
        'joinChannel' => 'string',
        'planId' => 'string',
        'principalId' => 'string',
        'principalTag' => 'string',
        'propertyList' => '\Alipay\OpenAPISDK\Model\ConversionProperty[]',
        'source' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
        'uuid' => 'string',
        'uuidOpenId' => 'string',
        'uuidType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'adId' => null,
        'attributeList' => null,
        'attributes' => null,
        'bizNo' => null,
        'callbackExtInfo' => null,
        'cid' => null,
        'conversionAmount' => null,
        'conversionId' => null,
        'conversionTime' => null,
        'conversionType' => null,
        'creativeId' => null,
        'dataId' => null,
        'dataSrcType' => null,
        'groupId' => null,
        'joinChannel' => null,
        'planId' => null,
        'principalId' => null,
        'principalTag' => null,
        'propertyList' => null,
        'source' => null,
        'targetId' => null,
        'targetType' => null,
        'uuid' => null,
        'uuidOpenId' => null,
        'uuidType' => null
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
        'adId' => 'ad_id',
        'attributeList' => 'attribute_list',
        'attributes' => 'attributes',
        'bizNo' => 'biz_no',
        'callbackExtInfo' => 'callback_ext_info',
        'cid' => 'cid',
        'conversionAmount' => 'conversion_amount',
        'conversionId' => 'conversion_id',
        'conversionTime' => 'conversion_time',
        'conversionType' => 'conversion_type',
        'creativeId' => 'creative_id',
        'dataId' => 'data_id',
        'dataSrcType' => 'data_src_type',
        'groupId' => 'group_id',
        'joinChannel' => 'join_channel',
        'planId' => 'plan_id',
        'principalId' => 'principal_id',
        'principalTag' => 'principal_tag',
        'propertyList' => 'property_list',
        'source' => 'source',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'uuid' => 'uuid',
        'uuidOpenId' => 'uuid_open_id',
        'uuidType' => 'uuid_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'adId' => 'setAdId',
        'attributeList' => 'setAttributeList',
        'attributes' => 'setAttributes',
        'bizNo' => 'setBizNo',
        'callbackExtInfo' => 'setCallbackExtInfo',
        'cid' => 'setCid',
        'conversionAmount' => 'setConversionAmount',
        'conversionId' => 'setConversionId',
        'conversionTime' => 'setConversionTime',
        'conversionType' => 'setConversionType',
        'creativeId' => 'setCreativeId',
        'dataId' => 'setDataId',
        'dataSrcType' => 'setDataSrcType',
        'groupId' => 'setGroupId',
        'joinChannel' => 'setJoinChannel',
        'planId' => 'setPlanId',
        'principalId' => 'setPrincipalId',
        'principalTag' => 'setPrincipalTag',
        'propertyList' => 'setPropertyList',
        'source' => 'setSource',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'uuid' => 'setUuid',
        'uuidOpenId' => 'setUuidOpenId',
        'uuidType' => 'setUuidType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'adId' => 'getAdId',
        'attributeList' => 'getAttributeList',
        'attributes' => 'getAttributes',
        'bizNo' => 'getBizNo',
        'callbackExtInfo' => 'getCallbackExtInfo',
        'cid' => 'getCid',
        'conversionAmount' => 'getConversionAmount',
        'conversionId' => 'getConversionId',
        'conversionTime' => 'getConversionTime',
        'conversionType' => 'getConversionType',
        'creativeId' => 'getCreativeId',
        'dataId' => 'getDataId',
        'dataSrcType' => 'getDataSrcType',
        'groupId' => 'getGroupId',
        'joinChannel' => 'getJoinChannel',
        'planId' => 'getPlanId',
        'principalId' => 'getPrincipalId',
        'principalTag' => 'getPrincipalTag',
        'propertyList' => 'getPropertyList',
        'source' => 'getSource',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
        'uuid' => 'getUuid',
        'uuidOpenId' => 'getUuidOpenId',
        'uuidType' => 'getUuidType'
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
        $this->container['adId'] = $data['adId'] ?? null;
        $this->container['attributeList'] = $data['attributeList'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['bizNo'] = $data['bizNo'] ?? null;
        $this->container['callbackExtInfo'] = $data['callbackExtInfo'] ?? null;
        $this->container['cid'] = $data['cid'] ?? null;
        $this->container['conversionAmount'] = $data['conversionAmount'] ?? null;
        $this->container['conversionId'] = $data['conversionId'] ?? null;
        $this->container['conversionTime'] = $data['conversionTime'] ?? null;
        $this->container['conversionType'] = $data['conversionType'] ?? null;
        $this->container['creativeId'] = $data['creativeId'] ?? null;
        $this->container['dataId'] = $data['dataId'] ?? null;
        $this->container['dataSrcType'] = $data['dataSrcType'] ?? null;
        $this->container['groupId'] = $data['groupId'] ?? null;
        $this->container['joinChannel'] = $data['joinChannel'] ?? null;
        $this->container['planId'] = $data['planId'] ?? null;
        $this->container['principalId'] = $data['principalId'] ?? null;
        $this->container['principalTag'] = $data['principalTag'] ?? null;
        $this->container['propertyList'] = $data['propertyList'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['uuid'] = $data['uuid'] ?? null;
        $this->container['uuidOpenId'] = $data['uuidOpenId'] ?? null;
        $this->container['uuidType'] = $data['uuidType'] ?? null;
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
     * Gets adId
     *
     * @return string|null
     */
    public function getAdId()
    {
        return $this->container['adId'];
    }

    /**
     * Sets adId
     *
     * @param string|null $adId 广告创意id，来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__AD_ID__宏参发生用户点击替换后的值
     *
     * @return self
     */
    public function setAdId($adId)
    {
        $this->container['adId'] = $adId;

        return $this;
    }

    /**
     * Gets attributeList
     *
     * @return \Alipay\OpenAPISDK\Model\ConversionProperty[]|null
     */
    public function getAttributeList()
    {
        return $this->container['attributeList'];
    }

    /**
     * Sets attributeList
     *
     * @param \Alipay\OpenAPISDK\Model\ConversionProperty[]|null $attributeList 转化事件属性信息，用于转化事件类型相关属性规则上传。 可支持上传属性的转化事件类型及属性规则请参考该文档：<a href='https://adpub.alipay.com/adrlark/ivdktpyh511x9r6i'>转化事件类型属性规则</a>
     *
     * @return self
     */
    public function setAttributeList($attributeList)
    {
        $this->container['attributeList'] = $attributeList;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return \Alipay\OpenAPISDK\Model\ConversionProperty|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Alipay\OpenAPISDK\Model\ConversionProperty|null $attributes attributes
     *
     * @return self
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets bizNo
     *
     * @return string|null
     */
    public function getBizNo()
    {
        return $this->container['bizNo'];
    }

    /**
     * Sets bizNo
     *
     * @param string|null $bizNo 转化流水号：由用户自定义，用于幂等
     *
     * @return self
     */
    public function setBizNo($bizNo)
    {
        $this->container['bizNo'] = $bizNo;

        return $this;
    }

    /**
     * Gets callbackExtInfo
     *
     * @return string|null
     */
    public function getCallbackExtInfo()
    {
        return $this->container['callbackExtInfo'];
    }

    /**
     * Sets callbackExtInfo
     *
     * @param string|null $callbackExtInfo 来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__CALLBACK_EXT_INFO__宏参发生用户点击替换后的值，需url decode后传回。
     *
     * @return self
     */
    public function setCallbackExtInfo($callbackExtInfo)
    {
        $this->container['callbackExtInfo'] = $callbackExtInfo;

        return $this;
    }

    /**
     * Gets cid
     *
     * @return string|null
     */
    public function getCid()
    {
        return $this->container['cid'];
    }

    /**
     * Sets cid
     *
     * @param string|null $cid 用于精准归因，来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__CID__宏参发生用户点击替换后的值。<br> 支持cid上报的转化事件类型请参见：<br> <a href='https://adpub.alipay.com/lark/adrlark/pg4vb1c0g0u6fx7b'>app推广类转化事件类型</a><br> <a href='https://adpub.alipay.com/lark/adrlark/rvzylhryxh37yplt'>通用类转化事件类型</a>
     *
     * @return self
     */
    public function setCid($cid)
    {
        $this->container['cid'] = $cid;

        return $this;
    }

    /**
     * Gets conversionAmount
     *
     * @return string|null
     */
    public function getConversionAmount()
    {
        return $this->container['conversionAmount'];
    }

    /**
     * Sets conversionAmount
     *
     * @param string|null $conversionAmount 转化金额，单位分。 金额类转化事件必传
     *
     * @return self
     */
    public function setConversionAmount($conversionAmount)
    {
        $this->container['conversionAmount'] = $conversionAmount;

        return $this;
    }

    /**
     * Gets conversionId
     *
     * @return string|null
     */
    public function getConversionId()
    {
        return $this->container['conversionId'];
    }

    /**
     * Sets conversionId
     *
     * @param string|null $conversionId 转化事件id，当source=COMMON_CONVERSION_ID需上传该字段，其他情况无需上传。
     *
     * @return self
     */
    public function setConversionId($conversionId)
    {
        $this->container['conversionId'] = $conversionId;

        return $this;
    }

    /**
     * Gets conversionTime
     *
     * @return int|null
     */
    public function getConversionTime()
    {
        return $this->container['conversionTime'];
    }

    /**
     * Sets conversionTime
     *
     * @param int|null $conversionTime 转化时间，UTC 时间戳，单位：秒
     *
     * @return self
     */
    public function setConversionTime($conversionTime)
    {
        $this->container['conversionTime'] = $conversionTime;

        return $this;
    }

    /**
     * Gets conversionType
     *
     * @return string|null
     */
    public function getConversionType()
    {
        return $this->container['conversionType'];
    }

    /**
     * Sets conversionType
     *
     * @param string|null $conversionType 转化事件类型数字
     *
     * @return self
     */
    public function setConversionType($conversionType)
    {
        $this->container['conversionType'] = $conversionType;

        return $this;
    }

    /**
     * Gets creativeId
     *
     * @return string|null
     */
    public function getCreativeId()
    {
        return $this->container['creativeId'];
    }

    /**
     * Sets creativeId
     *
     * @param string|null $creativeId 广告创意id，来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__AD_ID__宏参发生用户点击替换后的值
     *
     * @return self
     */
    public function setCreativeId($creativeId)
    {
        $this->container['creativeId'] = $creativeId;

        return $this;
    }

    /**
     * Gets dataId
     *
     * @return string|null
     * @deprecated
     */
    public function getDataId()
    {
        return $this->container['dataId'];
    }

    /**
     * Sets dataId
     *
     * @param string|null $dataId 当source=XLIGHT或者DATASET时使用：  数据集id(接口升级，该参数已不再使用，故废弃该参数，但不影响历史数据使用。)
     *
     * @return self
     * @deprecated
     */
    public function setDataId($dataId)
    {
        $this->container['dataId'] = $dataId;

        return $this;
    }

    /**
     * Gets dataSrcType
     *
     * @return string|null
     * @deprecated
     */
    public function getDataSrcType()
    {
        return $this->container['dataSrcType'];
    }

    /**
     * Sets dataSrcType
     *
     * @param string|null $dataSrcType 当source=OTHER时使用:  数据类型： KR_MEMBER - 客如云入会 KR_TRADE - 客如云交易 TB_LIVE -  淘宝直播(接口升级，该参数已不再使用，故废弃该参数，但不影响历史数据使用。)
     *
     * @return self
     * @deprecated
     */
    public function setDataSrcType($dataSrcType)
    {
        $this->container['dataSrcType'] = $dataSrcType;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 广告单元id，来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__GROUP_ID__宏参发生用户点击替换后的值
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets joinChannel
     *
     * @return string|null
     */
    public function getJoinChannel()
    {
        return $this->container['joinChannel'];
    }

    /**
     * Sets joinChannel
     *
     * @param string|null $joinChannel XLIGHT - 灯火归因 MERCHANT -商家自主归因 该字段若为空则默认为XLIGHT
     *
     * @return self
     */
    public function setJoinChannel($joinChannel)
    {
        $this->container['joinChannel'] = $joinChannel;

        return $this;
    }

    /**
     * Gets planId
     *
     * @return string|null
     */
    public function getPlanId()
    {
        return $this->container['planId'];
    }

    /**
     * Sets planId
     *
     * @param string|null $planId 广告计划id，来自：<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的__PLAN_ID__宏参发生用户点击替换后的值
     *
     * @return self
     */
    public function setPlanId($planId)
    {
        $this->container['planId'] = $planId;

        return $this;
    }

    /**
     * Gets principalId
     *
     * @return string|null
     */
    public function getPrincipalId()
    {
        return $this->container['principalId'];
    }

    /**
     * Sets principalId
     *
     * @param string|null $principalId 商户在灯火pb端的id, 可代替principal_tag。
     *
     * @return self
     */
    public function setPrincipalId($principalId)
    {
        $this->container['principalId'] = $principalId;

        return $this;
    }

    /**
     * Gets principalTag
     *
     * @return string|null
     */
    public function getPrincipalTag()
    {
        return $this->container['principalTag'];
    }

    /**
     * Sets principalTag
     *
     * @param string|null $principalTag 商家标志，可代替principal_id。获取方法： <a href='https://adpub.alipay.com/lark/adrlark/sbk3vetg6ki5m4r8'>principal_tag获取sop</a><br>
     *
     * @return self
     */
    public function setPrincipalTag($principalTag)
    {
        $this->container['principalTag'] = $principalTag;

        return $this;
    }

    /**
     * Gets propertyList
     *
     * @return \Alipay\OpenAPISDK\Model\ConversionProperty[]|null
     */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
     * Sets propertyList
     *
     * @param \Alipay\OpenAPISDK\Model\ConversionProperty[]|null $propertyList 转化归因字段列表。不同转化事件类型回传property_list不同。请参见回传示例：<br> <a href=\"https://adpub.alipay.com/lark/adrlark/pvbgwf72ea090877\">通用类转化事件回传示例</a><br> <a href=\"https://adpub.alipay.com/lark/adrlark/kgnnk94p0p1mwbgp\">APP推广类转化事件回传示例</a><br>
     *
     * @return self
     */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source <br> COMMON_TARGET：<a href='https://adpub.alipay.com/lark/adrlark/rvzylhryxh37yplt'>通用类转化事件类型</a>适用<br> CALLBACK：<a href='https://adpub.alipay.com/lark/adrlark/pg4vb1c0g0u6fx7b'>APP推广类转化事件类型</a>适用<br> 不同source的参数回传规则请参考： COMMON_TARGET：<a href='https://adpub.alipay.com/lark/adrlark/dxw7fkkdnhm45spm'>通用转化回传参数说明</a><br> CALLBACK： <a href='https://adpub.alipay.com/lark/adrlark/wxou6agg3z1o6wyn'>APP推广类转化回传参数说明</a>
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     * @deprecated
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 当source=OTHER时使用： 主体id，例如品牌id(接口升级，该参数已不再使用，故废弃该参数，但不影响历史数据使用。)
     *
     * @return self
     * @deprecated
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     * @deprecated
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 当source=OTHER时使用：  主体类型： BRAND - 品牌 STORE - 店铺 LIVE - 直播 等等(接口升级，该参数已不再使用，故废弃该参数，但不影响历史数据使用。)
     *
     * @return self
     * @deprecated
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid 发生转化用户的唯一标识。 uuid_type不同，uuid传值不同：<br> 1. 若uuid_type=【PID】：uuid为发生转化用户的2088id。若获取不到，可固定一个值后，上传callback_ext_info参数。<br> 2. 若uuid_type=【OAID_MD5】【IDFA_MD5】【IP_UA】【CAID】【MEI】: uuid传的值为<a href='https://adpub.alipay.com/lark/adrlark/qm1v2gtpvcftele4'>监测上报</a>或<a href='https://adpub.alipay.com/lark/adrlark/gw3740rggm4n5gar'>落地页宏替换</a>配置的对应宏参下发的值<br> 其中当uuid_type=IP_UA时：__IP__、__UA__宏参需用\"_\"拼接上传<br>
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets uuidOpenId
     *
     * @return string|null
     */
    public function getUuidOpenId()
    {
        return $this->container['uuidOpenId'];
    }

    /**
     * Sets uuidOpenId
     *
     * @param string|null $uuidOpenId 支付宝用户在应用维度下的唯一标识
     *
     * @return self
     */
    public function setUuidOpenId($uuidOpenId)
    {
        $this->container['uuidOpenId'] = $uuidOpenId;

        return $this;
    }

    /**
     * Gets uuidType
     *
     * @return string|null
     */
    public function getUuidType()
    {
        return $this->container['uuidType'];
    }

    /**
     * Sets uuidType
     *
     * @param string|null $uuidType <a href='https://adpub.alipay.com/lark/adrlark/rvzylhryxh37yplt'>通用类转化事件类型：</a><br> uuid_type固定为PID：表示转化用户唯一标识<br> <a href='https://adpub.alipay.com/lark/adrlark/pg4vb1c0g0u6fx7b'>APP推广类转化事件类型：</a><br> OAID_MD5：表示OAID原值MD5加密后的值<br> IDFA_MD5：表示IDFA原值MD5加密后的值<br> IP_UA：表示IP_UA拼接值，以下划线拼接<br> CAID：表示CAID原值<br> IMEI：表示IMEI原值<br>
     *
     * @return self
     */
    public function setUuidType($uuidType)
    {
        $this->container['uuidType'] = $uuidType;

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


