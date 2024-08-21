<?php
/**
 * ZhimaCreditPayafteruseCreditbizorderQueryResponseModel
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
 * ZhimaCreditPayafteruseCreditbizorderQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZhimaCreditPayafteruseCreditbizorderQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZhimaCreditPayafteruseCreditbizorderQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'createTime' => 'string',
        'creditAgreementId' => 'string',
        'creditBizOrderId' => 'string',
        'orderStatus' => 'string',
        'productCode' => 'string',
        'totalAmount' => 'string',
        'tradeNo' => 'string',
        'zmServiceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'createTime' => null,
        'creditAgreementId' => null,
        'creditBizOrderId' => null,
        'orderStatus' => null,
        'productCode' => null,
        'totalAmount' => null,
        'tradeNo' => null,
        'zmServiceId' => null
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
        'createTime' => 'create_time',
        'creditAgreementId' => 'credit_agreement_id',
        'creditBizOrderId' => 'credit_biz_order_id',
        'orderStatus' => 'order_status',
        'productCode' => 'product_code',
        'totalAmount' => 'total_amount',
        'tradeNo' => 'trade_no',
        'zmServiceId' => 'zm_service_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createTime' => 'setCreateTime',
        'creditAgreementId' => 'setCreditAgreementId',
        'creditBizOrderId' => 'setCreditBizOrderId',
        'orderStatus' => 'setOrderStatus',
        'productCode' => 'setProductCode',
        'totalAmount' => 'setTotalAmount',
        'tradeNo' => 'setTradeNo',
        'zmServiceId' => 'setZmServiceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createTime' => 'getCreateTime',
        'creditAgreementId' => 'getCreditAgreementId',
        'creditBizOrderId' => 'getCreditBizOrderId',
        'orderStatus' => 'getOrderStatus',
        'productCode' => 'getProductCode',
        'totalAmount' => 'getTotalAmount',
        'tradeNo' => 'getTradeNo',
        'zmServiceId' => 'getZmServiceId'
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
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['creditAgreementId'] = $data['creditAgreementId'] ?? null;
        $this->container['creditBizOrderId'] = $data['creditBizOrderId'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
        $this->container['zmServiceId'] = $data['zmServiceId'] ?? null;
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
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 订单创建时间
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets creditAgreementId
     *
     * @return string|null
     */
    public function getCreditAgreementId()
    {
        return $this->container['creditAgreementId'];
    }

    /**
     * Sets creditAgreementId
     *
     * @param string|null $creditAgreementId 芝麻开通协议号
     *
     * @return self
     */
    public function setCreditAgreementId($creditAgreementId)
    {
        $this->container['creditAgreementId'] = $creditAgreementId;

        return $this;
    }

    /**
     * Gets creditBizOrderId
     *
     * @return string|null
     */
    public function getCreditBizOrderId()
    {
        return $this->container['creditBizOrderId'];
    }

    /**
     * Sets creditBizOrderId
     *
     * @param string|null $creditBizOrderId 信用服务订单号
     *
     * @return self
     */
    public function setCreditBizOrderId($creditBizOrderId)
    {
        $this->container['creditBizOrderId'] = $creditBizOrderId;

        return $this;
    }

    /**
     * Gets orderStatus
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus
     *
     * @param string|null $orderStatus 信用服务订单状态，区分不同产品： （1）针对产品「先用后付」，涉及状态如下：INIT: 下单状态；TRADE_CLOSED: 订单取消或者交易全额退款； TRADE_FINISHED：扣款成功状态。  （2）针对产品「芝麻风险评估与召回」，状态定义如下： [INIT: 下单状态]；[WAIT_FULFILL：待守约]；[OVERDUE：已逾期]；[TRADE_FINISHED:已守约]； [TRADE_CLOSED：已取消]。
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return string|null
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param string|null $totalAmount 信用服务订单金额
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets tradeNo
     *
     * @return string|null
     */
    public function getTradeNo()
    {
        return $this->container['tradeNo'];
    }

    /**
     * Sets tradeNo
     *
     * @param string|null $tradeNo 支付宝交易号。 先用后付产品下必传；芝麻风险评估与召回产品下不传。
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

        return $this;
    }

    /**
     * Gets zmServiceId
     *
     * @return string|null
     */
    public function getZmServiceId()
    {
        return $this->container['zmServiceId'];
    }

    /**
     * Sets zmServiceId
     *
     * @param string|null $zmServiceId 芝麻信用服务ID
     *
     * @return self
     */
    public function setZmServiceId($zmServiceId)
    {
        $this->container['zmServiceId'] = $zmServiceId;

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


