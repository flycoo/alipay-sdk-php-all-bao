<?php
/**
 * AlipayEcoMycarParkingParkinglotinfoUpdateModel
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
 * AlipayEcoMycarParkingParkinglotinfoUpdateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingParkinglotinfoUpdateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingParkinglotinfoUpdateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agentId' => 'string',
        'businessIsv' => '\Alipay\OpenAPISDK\Model\BusinessItem[]',
        'chargingRule' => '\Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]',
        'cityId' => 'string',
        'contactAlipay' => 'string',
        'contactEmail' => 'string',
        'contactMobile' => 'string',
        'contactName' => 'string',
        'contactTel' => 'string',
        'contactWeixin' => 'string',
        'equipmentName' => 'string',
        'isSupportInvoice' => 'string',
        'isvMobile' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'mchntId' => 'string',
        'originalIsvAppid' => 'string',
        'originalIsvMobile' => 'string',
        'originalIsvName' => 'string',
        'originalIsvPid' => 'string',
        'outParkingId' => 'string',
        'parkingAddress' => 'string',
        'parkingEndTime' => 'string',
        'parkingFeeDescription' => 'string',
        'parkingFeeDescriptionImg' => 'string',
        'parkingId' => 'string',
        'parkingLotType' => 'string',
        'parkingMobile' => 'string',
        'parkingName' => 'string',
        'parkingNumber' => 'string',
        'parkingPoiid' => 'string',
        'parkingStartTime' => 'string',
        'parkingType' => 'string',
        'payType' => 'string',
        'paymentMode' => 'string',
        'serviceList' => '\Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]',
        'shopingmallId' => 'string',
        'sumSpace' => 'string',
        'supportAfterPay' => 'string',
        'timeOut' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agentId' => null,
        'businessIsv' => null,
        'chargingRule' => null,
        'cityId' => null,
        'contactAlipay' => null,
        'contactEmail' => null,
        'contactMobile' => null,
        'contactName' => null,
        'contactTel' => null,
        'contactWeixin' => null,
        'equipmentName' => null,
        'isSupportInvoice' => null,
        'isvMobile' => null,
        'latitude' => null,
        'longitude' => null,
        'mchntId' => null,
        'originalIsvAppid' => null,
        'originalIsvMobile' => null,
        'originalIsvName' => null,
        'originalIsvPid' => null,
        'outParkingId' => null,
        'parkingAddress' => null,
        'parkingEndTime' => null,
        'parkingFeeDescription' => null,
        'parkingFeeDescriptionImg' => null,
        'parkingId' => null,
        'parkingLotType' => null,
        'parkingMobile' => null,
        'parkingName' => null,
        'parkingNumber' => null,
        'parkingPoiid' => null,
        'parkingStartTime' => null,
        'parkingType' => null,
        'payType' => null,
        'paymentMode' => null,
        'serviceList' => null,
        'shopingmallId' => null,
        'sumSpace' => null,
        'supportAfterPay' => null,
        'timeOut' => null
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
        'agentId' => 'agent_id',
        'businessIsv' => 'business_isv',
        'chargingRule' => 'charging_rule',
        'cityId' => 'city_id',
        'contactAlipay' => 'contact_alipay',
        'contactEmail' => 'contact_email',
        'contactMobile' => 'contact_mobile',
        'contactName' => 'contact_name',
        'contactTel' => 'contact_tel',
        'contactWeixin' => 'contact_weixin',
        'equipmentName' => 'equipment_name',
        'isSupportInvoice' => 'is_support_invoice',
        'isvMobile' => 'isv_mobile',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'mchntId' => 'mchnt_id',
        'originalIsvAppid' => 'original_isv_appid',
        'originalIsvMobile' => 'original_isv_mobile',
        'originalIsvName' => 'original_isv_name',
        'originalIsvPid' => 'original_isv_pid',
        'outParkingId' => 'out_parking_id',
        'parkingAddress' => 'parking_address',
        'parkingEndTime' => 'parking_end_time',
        'parkingFeeDescription' => 'parking_fee_description',
        'parkingFeeDescriptionImg' => 'parking_fee_description_img',
        'parkingId' => 'parking_id',
        'parkingLotType' => 'parking_lot_type',
        'parkingMobile' => 'parking_mobile',
        'parkingName' => 'parking_name',
        'parkingNumber' => 'parking_number',
        'parkingPoiid' => 'parking_poiid',
        'parkingStartTime' => 'parking_start_time',
        'parkingType' => 'parking_type',
        'payType' => 'pay_type',
        'paymentMode' => 'payment_mode',
        'serviceList' => 'service_list',
        'shopingmallId' => 'shopingmall_id',
        'sumSpace' => 'sum_space',
        'supportAfterPay' => 'support_after_pay',
        'timeOut' => 'time_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agentId' => 'setAgentId',
        'businessIsv' => 'setBusinessIsv',
        'chargingRule' => 'setChargingRule',
        'cityId' => 'setCityId',
        'contactAlipay' => 'setContactAlipay',
        'contactEmail' => 'setContactEmail',
        'contactMobile' => 'setContactMobile',
        'contactName' => 'setContactName',
        'contactTel' => 'setContactTel',
        'contactWeixin' => 'setContactWeixin',
        'equipmentName' => 'setEquipmentName',
        'isSupportInvoice' => 'setIsSupportInvoice',
        'isvMobile' => 'setIsvMobile',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'mchntId' => 'setMchntId',
        'originalIsvAppid' => 'setOriginalIsvAppid',
        'originalIsvMobile' => 'setOriginalIsvMobile',
        'originalIsvName' => 'setOriginalIsvName',
        'originalIsvPid' => 'setOriginalIsvPid',
        'outParkingId' => 'setOutParkingId',
        'parkingAddress' => 'setParkingAddress',
        'parkingEndTime' => 'setParkingEndTime',
        'parkingFeeDescription' => 'setParkingFeeDescription',
        'parkingFeeDescriptionImg' => 'setParkingFeeDescriptionImg',
        'parkingId' => 'setParkingId',
        'parkingLotType' => 'setParkingLotType',
        'parkingMobile' => 'setParkingMobile',
        'parkingName' => 'setParkingName',
        'parkingNumber' => 'setParkingNumber',
        'parkingPoiid' => 'setParkingPoiid',
        'parkingStartTime' => 'setParkingStartTime',
        'parkingType' => 'setParkingType',
        'payType' => 'setPayType',
        'paymentMode' => 'setPaymentMode',
        'serviceList' => 'setServiceList',
        'shopingmallId' => 'setShopingmallId',
        'sumSpace' => 'setSumSpace',
        'supportAfterPay' => 'setSupportAfterPay',
        'timeOut' => 'setTimeOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agentId' => 'getAgentId',
        'businessIsv' => 'getBusinessIsv',
        'chargingRule' => 'getChargingRule',
        'cityId' => 'getCityId',
        'contactAlipay' => 'getContactAlipay',
        'contactEmail' => 'getContactEmail',
        'contactMobile' => 'getContactMobile',
        'contactName' => 'getContactName',
        'contactTel' => 'getContactTel',
        'contactWeixin' => 'getContactWeixin',
        'equipmentName' => 'getEquipmentName',
        'isSupportInvoice' => 'getIsSupportInvoice',
        'isvMobile' => 'getIsvMobile',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'mchntId' => 'getMchntId',
        'originalIsvAppid' => 'getOriginalIsvAppid',
        'originalIsvMobile' => 'getOriginalIsvMobile',
        'originalIsvName' => 'getOriginalIsvName',
        'originalIsvPid' => 'getOriginalIsvPid',
        'outParkingId' => 'getOutParkingId',
        'parkingAddress' => 'getParkingAddress',
        'parkingEndTime' => 'getParkingEndTime',
        'parkingFeeDescription' => 'getParkingFeeDescription',
        'parkingFeeDescriptionImg' => 'getParkingFeeDescriptionImg',
        'parkingId' => 'getParkingId',
        'parkingLotType' => 'getParkingLotType',
        'parkingMobile' => 'getParkingMobile',
        'parkingName' => 'getParkingName',
        'parkingNumber' => 'getParkingNumber',
        'parkingPoiid' => 'getParkingPoiid',
        'parkingStartTime' => 'getParkingStartTime',
        'parkingType' => 'getParkingType',
        'payType' => 'getPayType',
        'paymentMode' => 'getPaymentMode',
        'serviceList' => 'getServiceList',
        'shopingmallId' => 'getShopingmallId',
        'sumSpace' => 'getSumSpace',
        'supportAfterPay' => 'getSupportAfterPay',
        'timeOut' => 'getTimeOut'
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
        $this->container['agentId'] = $data['agentId'] ?? null;
        $this->container['businessIsv'] = $data['businessIsv'] ?? null;
        $this->container['chargingRule'] = $data['chargingRule'] ?? null;
        $this->container['cityId'] = $data['cityId'] ?? null;
        $this->container['contactAlipay'] = $data['contactAlipay'] ?? null;
        $this->container['contactEmail'] = $data['contactEmail'] ?? null;
        $this->container['contactMobile'] = $data['contactMobile'] ?? null;
        $this->container['contactName'] = $data['contactName'] ?? null;
        $this->container['contactTel'] = $data['contactTel'] ?? null;
        $this->container['contactWeixin'] = $data['contactWeixin'] ?? null;
        $this->container['equipmentName'] = $data['equipmentName'] ?? null;
        $this->container['isSupportInvoice'] = $data['isSupportInvoice'] ?? null;
        $this->container['isvMobile'] = $data['isvMobile'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['mchntId'] = $data['mchntId'] ?? null;
        $this->container['originalIsvAppid'] = $data['originalIsvAppid'] ?? null;
        $this->container['originalIsvMobile'] = $data['originalIsvMobile'] ?? null;
        $this->container['originalIsvName'] = $data['originalIsvName'] ?? null;
        $this->container['originalIsvPid'] = $data['originalIsvPid'] ?? null;
        $this->container['outParkingId'] = $data['outParkingId'] ?? null;
        $this->container['parkingAddress'] = $data['parkingAddress'] ?? null;
        $this->container['parkingEndTime'] = $data['parkingEndTime'] ?? null;
        $this->container['parkingFeeDescription'] = $data['parkingFeeDescription'] ?? null;
        $this->container['parkingFeeDescriptionImg'] = $data['parkingFeeDescriptionImg'] ?? null;
        $this->container['parkingId'] = $data['parkingId'] ?? null;
        $this->container['parkingLotType'] = $data['parkingLotType'] ?? null;
        $this->container['parkingMobile'] = $data['parkingMobile'] ?? null;
        $this->container['parkingName'] = $data['parkingName'] ?? null;
        $this->container['parkingNumber'] = $data['parkingNumber'] ?? null;
        $this->container['parkingPoiid'] = $data['parkingPoiid'] ?? null;
        $this->container['parkingStartTime'] = $data['parkingStartTime'] ?? null;
        $this->container['parkingType'] = $data['parkingType'] ?? null;
        $this->container['payType'] = $data['payType'] ?? null;
        $this->container['paymentMode'] = $data['paymentMode'] ?? null;
        $this->container['serviceList'] = $data['serviceList'] ?? null;
        $this->container['shopingmallId'] = $data['shopingmallId'] ?? null;
        $this->container['sumSpace'] = $data['sumSpace'] ?? null;
        $this->container['supportAfterPay'] = $data['supportAfterPay'] ?? null;
        $this->container['timeOut'] = $data['timeOut'] ?? null;
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
     * Gets agentId
     *
     * @return string|null
     */
    public function getAgentId()
    {
        return $this->container['agentId'];
    }

    /**
     * Sets agentId
     *
     * @param string|null $agentId 服务商ID（2088开头的16位纯数字），由服务商提供给ISV
     *
     * @return self
     */
    public function setAgentId($agentId)
    {
        $this->container['agentId'] = $agentId;

        return $this;
    }

    /**
     * Gets businessIsv
     *
     * @return \Alipay\OpenAPISDK\Model\BusinessItem[]|null
     */
    public function getBusinessIsv()
    {
        return $this->container['businessIsv'];
    }

    /**
     * Sets businessIsv
     *
     * @param \Alipay\OpenAPISDK\Model\BusinessItem[]|null $businessIsv 车场业务归属列表
     *
     * @return self
     */
    public function setBusinessIsv($businessIsv)
    {
        $this->container['businessIsv'] = $businessIsv;

        return $this;
    }

    /**
     * Gets chargingRule
     *
     * @return \Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]|null
     */
    public function getChargingRule()
    {
        return $this->container['chargingRule'];
    }

    /**
     * Sets chargingRule
     *
     * @param \Alipay\OpenAPISDK\Model\ParkingLotChargingRuleInfo[]|null $chargingRule 停车场详细计费规则详细说明
     *
     * @return self
     */
    public function setChargingRule($chargingRule)
    {
        $this->container['chargingRule'] = $chargingRule;

        return $this;
    }

    /**
     * Gets cityId
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->container['cityId'];
    }

    /**
     * Sets cityId
     *
     * @param string|null $cityId 该参数废弃
     *
     * @return self
     */
    public function setCityId($cityId)
    {
        $this->container['cityId'] = $cityId;

        return $this;
    }

    /**
     * Gets contactAlipay
     *
     * @return string|null
     */
    public function getContactAlipay()
    {
        return $this->container['contactAlipay'];
    }

    /**
     * Sets contactAlipay
     *
     * @param string|null $contactAlipay 该参数废弃
     *
     * @return self
     */
    public function setContactAlipay($contactAlipay)
    {
        $this->container['contactAlipay'] = $contactAlipay;

        return $this;
    }

    /**
     * Gets contactEmail
     *
     * @return string|null
     */
    public function getContactEmail()
    {
        return $this->container['contactEmail'];
    }

    /**
     * Sets contactEmail
     *
     * @param string|null $contactEmail 该参数废弃
     *
     * @return self
     */
    public function setContactEmail($contactEmail)
    {
        $this->container['contactEmail'] = $contactEmail;

        return $this;
    }

    /**
     * Gets contactMobile
     *
     * @return string|null
     */
    public function getContactMobile()
    {
        return $this->container['contactMobile'];
    }

    /**
     * Sets contactMobile
     *
     * @param string|null $contactMobile 该参数废弃
     *
     * @return self
     */
    public function setContactMobile($contactMobile)
    {
        $this->container['contactMobile'] = $contactMobile;

        return $this;
    }

    /**
     * Gets contactName
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName 该参数废弃
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets contactTel
     *
     * @return string|null
     */
    public function getContactTel()
    {
        return $this->container['contactTel'];
    }

    /**
     * Sets contactTel
     *
     * @param string|null $contactTel 该参数废弃
     *
     * @return self
     */
    public function setContactTel($contactTel)
    {
        $this->container['contactTel'] = $contactTel;

        return $this;
    }

    /**
     * Gets contactWeixin
     *
     * @return string|null
     */
    public function getContactWeixin()
    {
        return $this->container['contactWeixin'];
    }

    /**
     * Sets contactWeixin
     *
     * @param string|null $contactWeixin 该参数废弃
     *
     * @return self
     */
    public function setContactWeixin($contactWeixin)
    {
        $this->container['contactWeixin'] = $contactWeixin;

        return $this;
    }

    /**
     * Gets equipmentName
     *
     * @return string|null
     */
    public function getEquipmentName()
    {
        return $this->container['equipmentName'];
    }

    /**
     * Sets equipmentName
     *
     * @param string|null $equipmentName 该参数废弃
     *
     * @return self
     */
    public function setEquipmentName($equipmentName)
    {
        $this->container['equipmentName'] = $equipmentName;

        return $this;
    }

    /**
     * Gets isSupportInvoice
     *
     * @return string|null
     */
    public function getIsSupportInvoice()
    {
        return $this->container['isSupportInvoice'];
    }

    /**
     * Sets isSupportInvoice
     *
     * @param string|null $isSupportInvoice 是否支持电子发票。枚举支持：  *0：表示不支持。  *1：表示支持。
     *
     * @return self
     */
    public function setIsSupportInvoice($isSupportInvoice)
    {
        $this->container['isSupportInvoice'] = $isSupportInvoice;

        return $this;
    }

    /**
     * Gets isvMobile
     *
     * @return string|null
     */
    public function getIsvMobile()
    {
        return $this->container['isvMobile'];
    }

    /**
     * Sets isvMobile
     *
     * @param string|null $isvMobile ISV电话，传入original_isv_pid、original_isv_appid时，此处为服务商电话
     *
     * @return self
     */
    public function setIsvMobile($isvMobile)
    {
        $this->container['isvMobile'] = $isvMobile;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 纬度，单位:度
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 经度 单位:度
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets mchntId
     *
     * @return string|null
     */
    public function getMchntId()
    {
        return $this->container['mchntId'];
    }

    /**
     * Sets mchntId
     *
     * @param string|null $mchntId 收款方ID（2088开头的16位纯数字），由停车场收款的业主方提供给ISV，该字段暂用于机具和物料申领，更新时不影响交易接口中的收款方值。
     *
     * @return self
     */
    public function setMchntId($mchntId)
    {
        $this->container['mchntId'] = $mchntId;

        return $this;
    }

    /**
     * Gets originalIsvAppid
     *
     * @return string|null
     */
    public function getOriginalIsvAppid()
    {
        return $this->container['originalIsvAppid'];
    }

    /**
     * Sets originalIsvAppid
     *
     * @param string|null $originalIsvAppid ISV的APPID,服务商调用必传，由ISV提供给服务商
     *
     * @return self
     */
    public function setOriginalIsvAppid($originalIsvAppid)
    {
        $this->container['originalIsvAppid'] = $originalIsvAppid;

        return $this;
    }

    /**
     * Gets originalIsvMobile
     *
     * @return string|null
     */
    public function getOriginalIsvMobile()
    {
        return $this->container['originalIsvMobile'];
    }

    /**
     * Sets originalIsvMobile
     *
     * @param string|null $originalIsvMobile ISV电话，此值与isv_mobile组合使用
     *
     * @return self
     */
    public function setOriginalIsvMobile($originalIsvMobile)
    {
        $this->container['originalIsvMobile'] = $originalIsvMobile;

        return $this;
    }

    /**
     * Gets originalIsvName
     *
     * @return string|null
     */
    public function getOriginalIsvName()
    {
        return $this->container['originalIsvName'];
    }

    /**
     * Sets originalIsvName
     *
     * @param string|null $originalIsvName ISV的名称，服务商调用必传，由ISV提供给服务商
     *
     * @return self
     */
    public function setOriginalIsvName($originalIsvName)
    {
        $this->container['originalIsvName'] = $originalIsvName;

        return $this;
    }

    /**
     * Gets originalIsvPid
     *
     * @return string|null
     */
    public function getOriginalIsvPid()
    {
        return $this->container['originalIsvPid'];
    }

    /**
     * Sets originalIsvPid
     *
     * @param string|null $originalIsvPid ISV的PID，服务商调用必传,由ISV提供给服务商
     *
     * @return self
     */
    public function setOriginalIsvPid($originalIsvPid)
    {
        $this->container['originalIsvPid'] = $originalIsvPid;

        return $this;
    }

    /**
     * Gets outParkingId
     *
     * @return string|null
     */
    public function getOutParkingId()
    {
        return $this->container['outParkingId'];
    }

    /**
     * Sets outParkingId
     *
     * @param string|null $outParkingId 该参数废弃
     *
     * @return self
     */
    public function setOutParkingId($outParkingId)
    {
        $this->container['outParkingId'] = $outParkingId;

        return $this;
    }

    /**
     * Gets parkingAddress
     *
     * @return string|null
     */
    public function getParkingAddress()
    {
        return $this->container['parkingAddress'];
    }

    /**
     * Sets parkingAddress
     *
     * @param string|null $parkingAddress 停车场地址
     *
     * @return self
     */
    public function setParkingAddress($parkingAddress)
    {
        $this->container['parkingAddress'] = $parkingAddress;

        return $this;
    }

    /**
     * Gets parkingEndTime
     *
     * @return string|null
     */
    public function getParkingEndTime()
    {
        return $this->container['parkingEndTime'];
    }

    /**
     * Sets parkingEndTime
     *
     * @param string|null $parkingEndTime 该参数废弃
     *
     * @return self
     */
    public function setParkingEndTime($parkingEndTime)
    {
        $this->container['parkingEndTime'] = $parkingEndTime;

        return $this;
    }

    /**
     * Gets parkingFeeDescription
     *
     * @return string|null
     */
    public function getParkingFeeDescription()
    {
        return $this->container['parkingFeeDescription'];
    }

    /**
     * Sets parkingFeeDescription
     *
     * @param string|null $parkingFeeDescription 收费说明
     *
     * @return self
     */
    public function setParkingFeeDescription($parkingFeeDescription)
    {
        $this->container['parkingFeeDescription'] = $parkingFeeDescription;

        return $this;
    }

    /**
     * Gets parkingFeeDescriptionImg
     *
     * @return string|null
     */
    public function getParkingFeeDescriptionImg()
    {
        return $this->container['parkingFeeDescriptionImg'];
    }

    /**
     * Sets parkingFeeDescriptionImg
     *
     * @param string|null $parkingFeeDescriptionImg 商户在停车平台露出的停车价格图片；注意：该图片为PNG格式内容为BASE64的字符串，大小不要超过1MB
     *
     * @return self
     */
    public function setParkingFeeDescriptionImg($parkingFeeDescriptionImg)
    {
        $this->container['parkingFeeDescriptionImg'] = $parkingFeeDescriptionImg;

        return $this;
    }

    /**
     * Gets parkingId
     *
     * @return string|null
     */
    public function getParkingId()
    {
        return $this->container['parkingId'];
    }

    /**
     * Sets parkingId
     *
     * @param string|null $parkingId 支付宝返回停车场id，系统唯一
     *
     * @return self
     */
    public function setParkingId($parkingId)
    {
        $this->container['parkingId'] = $parkingId;

        return $this;
    }

    /**
     * Gets parkingLotType
     *
     * @return string|null
     */
    public function getParkingLotType()
    {
        return $this->container['parkingLotType'];
    }

    /**
     * Sets parkingLotType
     *
     * @param string|null $parkingLotType 停车场类型，COMMUNITY为居民小区、BUSINESS_AREA为商圈停车场（购物中心商业广场商场等）、ROADSIDE为路侧停车、PARK_SCENIC为公园景点（景点乐园公园老街古镇等）、OFFICE_BUILDING为商务楼宇（酒店写字楼商务楼园区等）、OTHER为其他、TRANSPORTATION为交通枢纽（机场火车站汽车站码头港口等）、PUBLIC_FACILITIES为市政设施（体育场博物图书馆医院学校等）、TERRITORY独立园区（办公工业物流园区等）、BUSINESS_PLACE经营场所（4S店、门市餐饮等
     *
     * @return self
     */
    public function setParkingLotType($parkingLotType)
    {
        $this->container['parkingLotType'] = $parkingLotType;

        return $this;
    }

    /**
     * Gets parkingMobile
     *
     * @return string|null
     */
    public function getParkingMobile()
    {
        return $this->container['parkingMobile'];
    }

    /**
     * Sets parkingMobile
     *
     * @param string|null $parkingMobile 停车场客服电话
     *
     * @return self
     */
    public function setParkingMobile($parkingMobile)
    {
        $this->container['parkingMobile'] = $parkingMobile;

        return $this;
    }

    /**
     * Gets parkingName
     *
     * @return string|null
     */
    public function getParkingName()
    {
        return $this->container['parkingName'];
    }

    /**
     * Sets parkingName
     *
     * @param string|null $parkingName 停车场名称，由ISV定义，尽量与高德地图上的一致
     *
     * @return self
     */
    public function setParkingName($parkingName)
    {
        $this->container['parkingName'] = $parkingName;

        return $this;
    }

    /**
     * Gets parkingNumber
     *
     * @return string|null
     */
    public function getParkingNumber()
    {
        return $this->container['parkingNumber'];
    }

    /**
     * Sets parkingNumber
     *
     * @param string|null $parkingNumber 该参数废弃
     *
     * @return self
     */
    public function setParkingNumber($parkingNumber)
    {
        $this->container['parkingNumber'] = $parkingNumber;

        return $this;
    }

    /**
     * Gets parkingPoiid
     *
     * @return string|null
     */
    public function getParkingPoiid()
    {
        return $this->container['parkingPoiid'];
    }

    /**
     * Sets parkingPoiid
     *
     * @param string|null $parkingPoiid 如何获取parking_poiid（高德地图唯一标标识）参考文档 <a href=\"https://opendocs.alipay.com/support/01rghx\">https://opendocs.alipay.com/support/01rghx</a> ；若无法成功获取高德POI时，也可选用经纬度的方式注册。
     *
     * @return self
     */
    public function setParkingPoiid($parkingPoiid)
    {
        $this->container['parkingPoiid'] = $parkingPoiid;

        return $this;
    }

    /**
     * Gets parkingStartTime
     *
     * @return string|null
     */
    public function getParkingStartTime()
    {
        return $this->container['parkingStartTime'];
    }

    /**
     * Sets parkingStartTime
     *
     * @param string|null $parkingStartTime 该参数废弃
     *
     * @return self
     */
    public function setParkingStartTime($parkingStartTime)
    {
        $this->container['parkingStartTime'] = $parkingStartTime;

        return $this;
    }

    /**
     * Gets parkingType
     *
     * @return string|null
     */
    public function getParkingType()
    {
        return $this->container['parkingType'];
    }

    /**
     * Sets parkingType
     *
     * @param string|null $parkingType 该参数废弃
     *
     * @return self
     */
    public function setParkingType($parkingType)
    {
        $this->container['parkingType'] = $parkingType;

        return $this;
    }

    /**
     * Gets payType
     *
     * @return string|null
     */
    public function getPayType()
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType
     *
     * @param string|null $payType 支付方式。枚举支持： *1：表示支付宝在线缴费。  *2：表示支付宝代扣缴费。  *3：表示当面付。  *4：表示现金。   说明：如支持多种方式以 ',' 进行分隔。
     *
     * @return self
     */
    public function setPayType($payType)
    {
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets paymentMode
     *
     * @return string|null
     */
    public function getPaymentMode()
    {
        return $this->container['paymentMode'];
    }

    /**
     * Sets paymentMode
     *
     * @param string|null $paymentMode 该参数废弃
     *
     * @return self
     */
    public function setPaymentMode($paymentMode)
    {
        $this->container['paymentMode'] = $paymentMode;

        return $this;
    }

    /**
     * Gets serviceList
     *
     * @return \Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]|null
     */
    public function getServiceList()
    {
        return $this->container['serviceList'];
    }

    /**
     * Sets serviceList
     *
     * @param \Alipay\OpenAPISDK\Model\ParkingLotServiceInfo[]|null $serviceList 停车场场内服务信息
     *
     * @return self
     */
    public function setServiceList($serviceList)
    {
        $this->container['serviceList'] = $serviceList;

        return $this;
    }

    /**
     * Gets shopingmallId
     *
     * @return string|null
     */
    public function getShopingmallId()
    {
        return $this->container['shopingmallId'];
    }

    /**
     * Sets shopingmallId
     *
     * @param string|null $shopingmallId 商圈id
     *
     * @return self
     */
    public function setShopingmallId($shopingmallId)
    {
        $this->container['shopingmallId'] = $shopingmallId;

        return $this;
    }

    /**
     * Gets sumSpace
     *
     * @return string|null
     */
    public function getSumSpace()
    {
        return $this->container['sumSpace'];
    }

    /**
     * Sets sumSpace
     *
     * @param string|null $sumSpace 停车场车位数 ，单位:个
     *
     * @return self
     */
    public function setSumSpace($sumSpace)
    {
        $this->container['sumSpace'] = $sumSpace;

        return $this;
    }

    /**
     * Gets supportAfterPay
     *
     * @return string|null
     */
    public function getSupportAfterPay()
    {
        return $this->container['supportAfterPay'];
    }

    /**
     * Sets supportAfterPay
     *
     * @param string|null $supportAfterPay 是否支持先离后付。枚举支持：  *Y：支持。  *N：不支持。  说明：默认为空不支持，此参数适用于签约信用代扣的商户。
     *
     * @return self
     */
    public function setSupportAfterPay($supportAfterPay)
    {
        $this->container['supportAfterPay'] = $supportAfterPay;

        return $this;
    }

    /**
     * Gets timeOut
     *
     * @return string|null
     */
    public function getTimeOut()
    {
        return $this->container['timeOut'];
    }

    /**
     * Sets timeOut
     *
     * @param string|null $timeOut 用户支付未离场的超时时间(以分钟为单位)
     *
     * @return self
     */
    public function setTimeOut($timeOut)
    {
        $this->container['timeOut'] = $timeOut;

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


