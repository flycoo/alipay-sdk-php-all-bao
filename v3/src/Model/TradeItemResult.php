<?php
/**
 * TradeItemResult
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
 * The version of the OpenAPI document: 2024-05-20
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
 * TradeItemResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TradeItemResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradeItemResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'alipayOrderNo' => 'string',
        'gmtCreate' => 'string',
        'gmtPay' => 'string',
        'gmtRefund' => 'string',
        'goodsMemo' => 'string',
        'goodsTitle' => 'string',
        'merchantOrderNo' => 'string',
        'netMdiscount' => 'string',
        'otherAccount' => 'string',
        'refundAmount' => 'string',
        'serviceFee' => 'string',
        'storeName' => 'string',
        'storeNo' => 'string',
        'totalAmount' => 'string',
        'tradeStatus' => 'string',
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
        'alipayOrderNo' => null,
        'gmtCreate' => null,
        'gmtPay' => null,
        'gmtRefund' => null,
        'goodsMemo' => null,
        'goodsTitle' => null,
        'merchantOrderNo' => null,
        'netMdiscount' => null,
        'otherAccount' => null,
        'refundAmount' => null,
        'serviceFee' => null,
        'storeName' => null,
        'storeNo' => null,
        'totalAmount' => null,
        'tradeStatus' => null,
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
        'alipayOrderNo' => 'alipay_order_no',
        'gmtCreate' => 'gmt_create',
        'gmtPay' => 'gmt_pay',
        'gmtRefund' => 'gmt_refund',
        'goodsMemo' => 'goods_memo',
        'goodsTitle' => 'goods_title',
        'merchantOrderNo' => 'merchant_order_no',
        'netMdiscount' => 'net_mdiscount',
        'otherAccount' => 'other_account',
        'refundAmount' => 'refund_amount',
        'serviceFee' => 'service_fee',
        'storeName' => 'store_name',
        'storeNo' => 'store_no',
        'totalAmount' => 'total_amount',
        'tradeStatus' => 'trade_status',
        'tradeType' => 'trade_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'alipayOrderNo' => 'setAlipayOrderNo',
        'gmtCreate' => 'setGmtCreate',
        'gmtPay' => 'setGmtPay',
        'gmtRefund' => 'setGmtRefund',
        'goodsMemo' => 'setGoodsMemo',
        'goodsTitle' => 'setGoodsTitle',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'netMdiscount' => 'setNetMdiscount',
        'otherAccount' => 'setOtherAccount',
        'refundAmount' => 'setRefundAmount',
        'serviceFee' => 'setServiceFee',
        'storeName' => 'setStoreName',
        'storeNo' => 'setStoreNo',
        'totalAmount' => 'setTotalAmount',
        'tradeStatus' => 'setTradeStatus',
        'tradeType' => 'setTradeType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'alipayOrderNo' => 'getAlipayOrderNo',
        'gmtCreate' => 'getGmtCreate',
        'gmtPay' => 'getGmtPay',
        'gmtRefund' => 'getGmtRefund',
        'goodsMemo' => 'getGoodsMemo',
        'goodsTitle' => 'getGoodsTitle',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'netMdiscount' => 'getNetMdiscount',
        'otherAccount' => 'getOtherAccount',
        'refundAmount' => 'getRefundAmount',
        'serviceFee' => 'getServiceFee',
        'storeName' => 'getStoreName',
        'storeNo' => 'getStoreNo',
        'totalAmount' => 'getTotalAmount',
        'tradeStatus' => 'getTradeStatus',
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
        $this->container['alipayOrderNo'] = $data['alipayOrderNo'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtPay'] = $data['gmtPay'] ?? null;
        $this->container['gmtRefund'] = $data['gmtRefund'] ?? null;
        $this->container['goodsMemo'] = $data['goodsMemo'] ?? null;
        $this->container['goodsTitle'] = $data['goodsTitle'] ?? null;
        $this->container['merchantOrderNo'] = $data['merchantOrderNo'] ?? null;
        $this->container['netMdiscount'] = $data['netMdiscount'] ?? null;
        $this->container['otherAccount'] = $data['otherAccount'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['serviceFee'] = $data['serviceFee'] ?? null;
        $this->container['storeName'] = $data['storeName'] ?? null;
        $this->container['storeNo'] = $data['storeNo'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['tradeStatus'] = $data['tradeStatus'] ?? null;
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
     * Gets alipayOrderNo
     *
     * @return string|null
     */
    public function getAlipayOrderNo()
    {
        return $this->container['alipayOrderNo'];
    }

    /**
     * Sets alipayOrderNo
     *
     * @param string|null $alipayOrderNo 支付宝订单号。对账使用，不脱敏
     *
     * @return self
     */
    public function setAlipayOrderNo($alipayOrderNo)
    {
        $this->container['alipayOrderNo'] = $alipayOrderNo;

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
     * @param string|null $gmtCreate 交易创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtPay
     *
     * @return string|null
     */
    public function getGmtPay()
    {
        return $this->container['gmtPay'];
    }

    /**
     * Sets gmtPay
     *
     * @param string|null $gmtPay 交易支付时间
     *
     * @return self
     */
    public function setGmtPay($gmtPay)
    {
        $this->container['gmtPay'] = $gmtPay;

        return $this;
    }

    /**
     * Gets gmtRefund
     *
     * @return string|null
     */
    public function getGmtRefund()
    {
        return $this->container['gmtRefund'];
    }

    /**
     * Sets gmtRefund
     *
     * @param string|null $gmtRefund 交易退款时间
     *
     * @return self
     */
    public function setGmtRefund($gmtRefund)
    {
        $this->container['gmtRefund'] = $gmtRefund;

        return $this;
    }

    /**
     * Gets goodsMemo
     *
     * @return string|null
     */
    public function getGoodsMemo()
    {
        return $this->container['goodsMemo'];
    }

    /**
     * Sets goodsMemo
     *
     * @param string|null $goodsMemo 商品备注信息
     *
     * @return self
     */
    public function setGoodsMemo($goodsMemo)
    {
        $this->container['goodsMemo'] = $goodsMemo;

        return $this;
    }

    /**
     * Gets goodsTitle
     *
     * @return string|null
     */
    public function getGoodsTitle()
    {
        return $this->container['goodsTitle'];
    }

    /**
     * Sets goodsTitle
     *
     * @param string|null $goodsTitle 商品名称
     *
     * @return self
     */
    public function setGoodsTitle($goodsTitle)
    {
        $this->container['goodsTitle'] = $goodsTitle;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string|null
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string|null $merchantOrderNo 商户订单号，创建支付宝交易时传入的信息。对账使用，不脱敏
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets netMdiscount
     *
     * @return string|null
     */
    public function getNetMdiscount()
    {
        return $this->container['netMdiscount'];
    }

    /**
     * Sets netMdiscount
     *
     * @param string|null $netMdiscount 商家优惠金额
     *
     * @return self
     */
    public function setNetMdiscount($netMdiscount)
    {
        $this->container['netMdiscount'] = $netMdiscount;

        return $this;
    }

    /**
     * Gets otherAccount
     *
     * @return string|null
     */
    public function getOtherAccount()
    {
        return $this->container['otherAccount'];
    }

    /**
     * Sets otherAccount
     *
     * @param string|null $otherAccount 对方账户
     *
     * @return self
     */
    public function setOtherAccount($otherAccount)
    {
        $this->container['otherAccount'] = $otherAccount;

        return $this;
    }

    /**
     * Gets refundAmount
     *
     * @return string|null
     */
    public function getRefundAmount()
    {
        return $this->container['refundAmount'];
    }

    /**
     * Sets refundAmount
     *
     * @param string|null $refundAmount 订单退款金额
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets serviceFee
     *
     * @return string|null
     */
    public function getServiceFee()
    {
        return $this->container['serviceFee'];
    }

    /**
     * Sets serviceFee
     *
     * @param string|null $serviceFee 服务费金额
     *
     * @return self
     */
    public function setServiceFee($serviceFee)
    {
        $this->container['serviceFee'] = $serviceFee;

        return $this;
    }

    /**
     * Gets storeName
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->container['storeName'];
    }

    /**
     * Sets storeName
     *
     * @param string|null $storeName 门店名称
     *
     * @return self
     */
    public function setStoreName($storeName)
    {
        $this->container['storeName'] = $storeName;

        return $this;
    }

    /**
     * Gets storeNo
     *
     * @return string|null
     */
    public function getStoreNo()
    {
        return $this->container['storeNo'];
    }

    /**
     * Sets storeNo
     *
     * @param string|null $storeNo 门店编号
     *
     * @return self
     */
    public function setStoreNo($storeNo)
    {
        $this->container['storeNo'] = $storeNo;

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
     * @param string|null $totalAmount 订单金额
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets tradeStatus
     *
     * @return string|null
     */
    public function getTradeStatus()
    {
        return $this->container['tradeStatus'];
    }

    /**
     * Sets tradeStatus
     *
     * @param string|null $tradeStatus 订单状态(待付款,成功,关闭,待发货,待确认收货,已预付,进行中)
     *
     * @return self
     */
    public function setTradeStatus($tradeStatus)
    {
        $this->container['tradeStatus'] = $tradeStatus;

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
     * @param string|null $tradeType 业务类型，帮助商户作为对账参考
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


