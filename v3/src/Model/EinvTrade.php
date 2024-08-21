<?php
/**
 * EinvTrade
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
 * EinvTrade Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EinvTrade implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EinvTrade';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'billNo' => 'string',
        'billTime' => 'string',
        'cityName' => 'string',
        'detailJson' => 'string',
        'downloadUrl' => 'string',
        'extendMap' => 'string',
        'merchantName' => 'string',
        'outJson' => 'string',
        'payeeName' => 'string',
        'paymentAmount' => 'string',
        'paymentTime' => 'string',
        'souce' => 'string',
        'tradeType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'billNo' => null,
        'billTime' => null,
        'cityName' => null,
        'detailJson' => null,
        'downloadUrl' => null,
        'extendMap' => null,
        'merchantName' => null,
        'outJson' => null,
        'payeeName' => null,
        'paymentAmount' => null,
        'paymentTime' => null,
        'souce' => null,
        'tradeType' => null
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
        'billNo' => 'bill_no',
        'billTime' => 'bill_time',
        'cityName' => 'city_name',
        'detailJson' => 'detail_json',
        'downloadUrl' => 'download_url',
        'extendMap' => 'extend_map',
        'merchantName' => 'merchant_name',
        'outJson' => 'out_json',
        'payeeName' => 'payee_name',
        'paymentAmount' => 'payment_amount',
        'paymentTime' => 'payment_time',
        'souce' => 'souce',
        'tradeType' => 'trade_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billNo' => 'setBillNo',
        'billTime' => 'setBillTime',
        'cityName' => 'setCityName',
        'detailJson' => 'setDetailJson',
        'downloadUrl' => 'setDownloadUrl',
        'extendMap' => 'setExtendMap',
        'merchantName' => 'setMerchantName',
        'outJson' => 'setOutJson',
        'payeeName' => 'setPayeeName',
        'paymentAmount' => 'setPaymentAmount',
        'paymentTime' => 'setPaymentTime',
        'souce' => 'setSouce',
        'tradeType' => 'setTradeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billNo' => 'getBillNo',
        'billTime' => 'getBillTime',
        'cityName' => 'getCityName',
        'detailJson' => 'getDetailJson',
        'downloadUrl' => 'getDownloadUrl',
        'extendMap' => 'getExtendMap',
        'merchantName' => 'getMerchantName',
        'outJson' => 'getOutJson',
        'payeeName' => 'getPayeeName',
        'paymentAmount' => 'getPaymentAmount',
        'paymentTime' => 'getPaymentTime',
        'souce' => 'getSouce',
        'tradeType' => 'getTradeType'
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
        $this->container['billNo'] = $data['billNo'] ?? null;
        $this->container['billTime'] = $data['billTime'] ?? null;
        $this->container['cityName'] = $data['cityName'] ?? null;
        $this->container['detailJson'] = $data['detailJson'] ?? null;
        $this->container['downloadUrl'] = $data['downloadUrl'] ?? null;
        $this->container['extendMap'] = $data['extendMap'] ?? null;
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['outJson'] = $data['outJson'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
        $this->container['paymentAmount'] = $data['paymentAmount'] ?? null;
        $this->container['paymentTime'] = $data['paymentTime'] ?? null;
        $this->container['souce'] = $data['souce'] ?? null;
        $this->container['tradeType'] = $data['tradeType'] ?? null;
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
     * Gets billNo
     *
     * @return string|null
     */
    public function getBillNo()
    {
        return $this->container['billNo'];
    }

    /**
     * Sets billNo
     *
     * @param string|null $billNo 订单编号
     *
     * @return self
     */
    public function setBillNo($billNo)
    {
        $this->container['billNo'] = $billNo;

        return $this;
    }

    /**
     * Gets billTime
     *
     * @return string|null
     */
    public function getBillTime()
    {
        return $this->container['billTime'];
    }

    /**
     * Sets billTime
     *
     * @param string|null $billTime 下单时间
     *
     * @return self
     */
    public function setBillTime($billTime)
    {
        $this->container['billTime'] = $billTime;

        return $this;
    }

    /**
     * Gets cityName
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->container['cityName'];
    }

    /**
     * Sets cityName
     *
     * @param string|null $cityName 商户所在城市(经营地址)
     *
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets detailJson
     *
     * @return string|null
     */
    public function getDetailJson()
    {
        return $this->container['detailJson'];
    }

    /**
     * Sets detailJson
     *
     * @param string|null $detailJson 账单明细信息，酒店水单信息，行程单信息，餐饮小票信息
     *
     * @return self
     */
    public function setDetailJson($detailJson)
    {
        $this->container['detailJson'] = $detailJson;

        return $this;
    }

    /**
     * Gets downloadUrl
     *
     * @return string|null
     */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
     * Sets downloadUrl
     *
     * @param string|null $downloadUrl 账单明细信息，酒店水单，行程单，餐饮小票等pdf原件链接
     *
     * @return self
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;

        return $this;
    }

    /**
     * Gets extendMap
     *
     * @return string|null
     */
    public function getExtendMap()
    {
        return $this->container['extendMap'];
    }

    /**
     * Sets extendMap
     *
     * @param string|null $extendMap 扩展参数  不同组的k-v通过换行符区分
     *
     * @return self
     */
    public function setExtendMap($extendMap)
    {
        $this->container['extendMap'] = $extendMap;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 商家名称（显示名称，非企业名称，餐饮店、酒店、打车平台名称）
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets outJson
     *
     * @return string|null
     */
    public function getOutJson()
    {
        return $this->container['outJson'];
    }

    /**
     * Sets outJson
     *
     * @param string|null $outJson 透传字段，不做处理，用于isv向后续报销税控方传递特殊信息标记
     *
     * @return self
     */
    public function setOutJson($outJson)
    {
        $this->container['outJson'] = $outJson;

        return $this;
    }

    /**
     * Gets payeeName
     *
     * @return string|null
     */
    public function getPayeeName()
    {
        return $this->container['payeeName'];
    }

    /**
     * Sets payeeName
     *
     * @param string|null $payeeName 销方名称
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets paymentAmount
     *
     * @return string|null
     */
    public function getPaymentAmount()
    {
        return $this->container['paymentAmount'];
    }

    /**
     * Sets paymentAmount
     *
     * @param string|null $paymentAmount 支付金额，单位（元）， 对应账单中的交易金额
     *
     * @return self
     */
    public function setPaymentAmount($paymentAmount)
    {
        $this->container['paymentAmount'] = $paymentAmount;

        return $this;
    }

    /**
     * Gets paymentTime
     *
     * @return string|null
     */
    public function getPaymentTime()
    {
        return $this->container['paymentTime'];
    }

    /**
     * Sets paymentTime
     *
     * @param string|null $paymentTime 支付时间  对应账单中的账单日期
     *
     * @return self
     */
    public function setPaymentTime($paymentTime)
    {
        $this->container['paymentTime'] = $paymentTime;

        return $this;
    }

    /**
     * Gets souce
     *
     * @return string|null
     */
    public function getSouce()
    {
        return $this->container['souce'];
    }

    /**
     * Sets souce
     *
     * @param string|null $souce 交易类型来源 需要按照枚举映射  consume 账单  hotel 酒店水单  itinerary 打车行程单  catering 餐饮小票
     *
     * @return self
     */
    public function setSouce($souce)
    {
        $this->container['souce'] = $souce;

        return $this;
    }

    /**
     * Gets tradeType
     *
     * @return string|null
     */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
     * Sets tradeType
     *
     * @param string|null $tradeType 交易类型/账单分类
     *
     * @return self
     */
    public function setTradeType($tradeType)
    {
        $this->container['tradeType'] = $tradeType;

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


