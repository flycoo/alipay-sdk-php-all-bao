<?php
/**
 * ZhimaMerchantZmgoCumulateSyncModel
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
 * ZhimaMerchantZmgoCumulateSyncModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaMerchantZmgoCumulateSyncModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaMerchantZmgoCumulateSyncModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementId' => 'string',
        'amountTypeSyncData' => '\Alipay\OpenAPISDK\Model\AmountTypeSyncData',
        'bizAction' => 'string',
        'bizTime' => 'string',
        'dataType' => 'string',
        'discountTypeSyncData' => '\Alipay\OpenAPISDK\Model\DiscountTypeSyncData',
        'openId' => 'string',
        'outBizNo' => 'string',
        'providerPid' => 'string',
        'referOutBizNo' => 'string',
        'subBizAction' => 'string',
        'timesTypeSyncData' => '\Alipay\OpenAPISDK\Model\TimesTypeSyncData',
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
        'agreementId' => null,
        'amountTypeSyncData' => null,
        'bizAction' => null,
        'bizTime' => null,
        'dataType' => null,
        'discountTypeSyncData' => null,
        'openId' => null,
        'outBizNo' => null,
        'providerPid' => null,
        'referOutBizNo' => null,
        'subBizAction' => null,
        'timesTypeSyncData' => null,
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
        'agreementId' => 'agreement_id',
        'amountTypeSyncData' => 'amount_type_sync_data',
        'bizAction' => 'biz_action',
        'bizTime' => 'biz_time',
        'dataType' => 'data_type',
        'discountTypeSyncData' => 'discount_type_sync_data',
        'openId' => 'open_id',
        'outBizNo' => 'out_biz_no',
        'providerPid' => 'provider_pid',
        'referOutBizNo' => 'refer_out_biz_no',
        'subBizAction' => 'sub_biz_action',
        'timesTypeSyncData' => 'times_type_sync_data',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementId' => 'setAgreementId',
        'amountTypeSyncData' => 'setAmountTypeSyncData',
        'bizAction' => 'setBizAction',
        'bizTime' => 'setBizTime',
        'dataType' => 'setDataType',
        'discountTypeSyncData' => 'setDiscountTypeSyncData',
        'openId' => 'setOpenId',
        'outBizNo' => 'setOutBizNo',
        'providerPid' => 'setProviderPid',
        'referOutBizNo' => 'setReferOutBizNo',
        'subBizAction' => 'setSubBizAction',
        'timesTypeSyncData' => 'setTimesTypeSyncData',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementId' => 'getAgreementId',
        'amountTypeSyncData' => 'getAmountTypeSyncData',
        'bizAction' => 'getBizAction',
        'bizTime' => 'getBizTime',
        'dataType' => 'getDataType',
        'discountTypeSyncData' => 'getDiscountTypeSyncData',
        'openId' => 'getOpenId',
        'outBizNo' => 'getOutBizNo',
        'providerPid' => 'getProviderPid',
        'referOutBizNo' => 'getReferOutBizNo',
        'subBizAction' => 'getSubBizAction',
        'timesTypeSyncData' => 'getTimesTypeSyncData',
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
        $this->container['agreementId'] = $data['agreementId'] ?? null;
        $this->container['amountTypeSyncData'] = $data['amountTypeSyncData'] ?? null;
        $this->container['bizAction'] = $data['bizAction'] ?? null;
        $this->container['bizTime'] = $data['bizTime'] ?? null;
        $this->container['dataType'] = $data['dataType'] ?? null;
        $this->container['discountTypeSyncData'] = $data['discountTypeSyncData'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['providerPid'] = $data['providerPid'] ?? null;
        $this->container['referOutBizNo'] = $data['referOutBizNo'] ?? null;
        $this->container['subBizAction'] = $data['subBizAction'] ?? null;
        $this->container['timesTypeSyncData'] = $data['timesTypeSyncData'] ?? null;
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
     * Gets agreementId
     *
     * @return string|null
     */
    public function getAgreementId()
    {
        return $this->container['agreementId'];
    }

    /**
     * Sets agreementId
     *
     * @param string|null $agreementId 芝麻go协议号，唯一标识一个芝麻go协议。
     *
     * @return self
     */
    public function setAgreementId($agreementId)
    {
        $this->container['agreementId'] = $agreementId;

        return $this;
    }

    /**
     * Gets amountTypeSyncData
     *
     * @return \Alipay\OpenAPISDK\Model\AmountTypeSyncData|null
     */
    public function getAmountTypeSyncData()
    {
        return $this->container['amountTypeSyncData'];
    }

    /**
     * Sets amountTypeSyncData
     *
     * @param \Alipay\OpenAPISDK\Model\AmountTypeSyncData|null $amountTypeSyncData amountTypeSyncData
     *
     * @return self
     */
    public function setAmountTypeSyncData($amountTypeSyncData)
    {
        $this->container['amountTypeSyncData'] = $amountTypeSyncData;

        return $this;
    }

    /**
     * Gets bizAction
     *
     * @return string|null
     */
    public function getBizAction()
    {
        return $this->container['bizAction'];
    }

    /**
     * Sets bizAction
     *
     * @param string|null $bizAction 数据回传的动作类型。枚举如下： * POSITIVE：正向回传，即订单金额累加，优惠累加，任务次数累加。 * REVERSE：逆向回传，即订单金额退款，优惠退款，任务次数回退。
     *
     * @return self
     */
    public function setBizAction($bizAction)
    {
        $this->container['bizAction'] = $bizAction;

        return $this;
    }

    /**
     * Gets bizTime
     *
     * @return string|null
     */
    public function getBizTime()
    {
        return $this->container['bizTime'];
    }

    /**
     * Sets bizTime
     *
     * @param string|null $bizTime 回传数据发生的实际时间，包括：订单交易时间，优惠核销时间，以及任务完成时间。为必传入参。 如：用户在【2019-03-08 00:00:00】核销了一个红包，但是【2019-03-10 00:00:00】才进行数据回传，此时biz_time取值红包核销的时间，也就是【2019-03-08 00:00:00】。
     *
     * @return self
     */
    public function setBizTime($bizTime)
    {
        $this->container['bizTime'] = $bizTime;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string|null $dataType 回传数据类型，枚举： TASK - 进度型，影响进度 DISCOUNT - 优惠型
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets discountTypeSyncData
     *
     * @return \Alipay\OpenAPISDK\Model\DiscountTypeSyncData|null
     */
    public function getDiscountTypeSyncData()
    {
        return $this->container['discountTypeSyncData'];
    }

    /**
     * Sets discountTypeSyncData
     *
     * @param \Alipay\OpenAPISDK\Model\DiscountTypeSyncData|null $discountTypeSyncData discountTypeSyncData
     *
     * @return self
     */
    public function setDiscountTypeSyncData($discountTypeSyncData)
    {
        $this->container['discountTypeSyncData'] = $discountTypeSyncData;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 外部业务号，唯一标识一笔回传数据。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets providerPid
     *
     * @return string|null
     */
    public function getProviderPid()
    {
        return $this->container['providerPid'];
    }

    /**
     * Sets providerPid
     *
     * @param string|null $providerPid 数据回传的商户 ID，即和用户发生业务来往的 PID 主体。商户账号在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
     *
     * @return self
     */
    public function setProviderPid($providerPid)
    {
        $this->container['providerPid'] = $providerPid;

        return $this;
    }

    /**
     * Gets referOutBizNo
     *
     * @return string|null
     */
    public function getReferOutBizNo()
    {
        return $this->container['referOutBizNo'];
    }

    /**
     * Sets referOutBizNo
     *
     * @param string|null $referOutBizNo 逆向对应的正向外部业务号。逆向场景为必传入参。也就是biz_action为REVERSE时为必传入参。 逆向时需通过此字段明确对应的正向的外部业务号。
     *
     * @return self
     */
    public function setReferOutBizNo($referOutBizNo)
    {
        $this->container['referOutBizNo'] = $referOutBizNo;

        return $this;
    }

    /**
     * Gets subBizAction
     *
     * @return string|null
     */
    public function getSubBizAction()
    {
        return $this->container['subBizAction'];
    }

    /**
     * Sets subBizAction
     *
     * @param string|null $subBizAction 数据回传动作子类型，枚举值，为必传入参。 ADD - 新增数据 UPDATE - 修改数据 备注：UPDATE只能更新金额信息。
     *
     * @return self
     */
    public function setSubBizAction($subBizAction)
    {
        $this->container['subBizAction'] = $subBizAction;

        return $this;
    }

    /**
     * Gets timesTypeSyncData
     *
     * @return \Alipay\OpenAPISDK\Model\TimesTypeSyncData|null
     */
    public function getTimesTypeSyncData()
    {
        return $this->container['timesTypeSyncData'];
    }

    /**
     * Sets timesTypeSyncData
     *
     * @param \Alipay\OpenAPISDK\Model\TimesTypeSyncData|null $timesTypeSyncData timesTypeSyncData
     *
     * @return self
     */
    public function setTimesTypeSyncData($timesTypeSyncData)
    {
        $this->container['timesTypeSyncData'] = $timesTypeSyncData;

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
     * @param string|null $userId 用户 id，用户在支付宝的唯一标识，以 2088 开头的 16 位纯数字组成。
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


