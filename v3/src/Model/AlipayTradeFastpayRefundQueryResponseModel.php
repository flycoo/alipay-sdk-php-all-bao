<?php
/**
 * AlipayTradeFastpayRefundQueryResponseModel
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
 * AlipayTradeFastpayRefundQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeFastpayRefundQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeFastpayRefundQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'depositBackInfo' => '\Alipay\OpenAPISDK\Model\DepositBackInfo',
        'depositBackInfoList' => '\Alipay\OpenAPISDK\Model\DepositBackInfo[]',
        'enterprisePayInfo' => '\Alipay\OpenAPISDK\Model\EnterprisePayInfo',
        'errorCode' => 'string',
        'gmtRefundPay' => 'string',
        'industrySepcDetail' => 'string',
        'outRequestNo' => 'string',
        'outTradeNo' => 'string',
        'presentRefundBuyerAmount' => 'string',
        'presentRefundDiscountAmount' => 'string',
        'presentRefundMdiscountAmount' => 'string',
        'refundAmount' => 'string',
        'refundChannelList' => 'string',
        'refundChannelStatus' => 'string',
        'refundChargeAmount' => 'string',
        'refundChargeInfoList' => '\Alipay\OpenAPISDK\Model\RefundChargeInfo[]',
        'refundDetailItemList' => '\Alipay\OpenAPISDK\Model\TradeFundBill[]',
        'refundHybAmount' => 'string',
        'refundReason' => 'string',
        'refundRoyaltys' => '\Alipay\OpenAPISDK\Model\RefundRoyaltyResult[]',
        'refundSettlementId' => 'string',
        'refundStatus' => 'string',
        'refundVoucherDetailList' => '\Alipay\OpenAPISDK\Model\VoucherDetail[]',
        'sendBackFee' => 'string',
        'totalAmount' => 'string',
        'tradeNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'depositBackInfo' => null,
        'depositBackInfoList' => null,
        'enterprisePayInfo' => null,
        'errorCode' => null,
        'gmtRefundPay' => null,
        'industrySepcDetail' => null,
        'outRequestNo' => null,
        'outTradeNo' => null,
        'presentRefundBuyerAmount' => null,
        'presentRefundDiscountAmount' => null,
        'presentRefundMdiscountAmount' => null,
        'refundAmount' => null,
        'refundChannelList' => null,
        'refundChannelStatus' => null,
        'refundChargeAmount' => null,
        'refundChargeInfoList' => null,
        'refundDetailItemList' => null,
        'refundHybAmount' => null,
        'refundReason' => null,
        'refundRoyaltys' => null,
        'refundSettlementId' => null,
        'refundStatus' => null,
        'refundVoucherDetailList' => null,
        'sendBackFee' => null,
        'totalAmount' => null,
        'tradeNo' => null
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
        'depositBackInfo' => 'deposit_back_info',
        'depositBackInfoList' => 'deposit_back_info_list',
        'enterprisePayInfo' => 'enterprise_pay_info',
        'errorCode' => 'error_code',
        'gmtRefundPay' => 'gmt_refund_pay',
        'industrySepcDetail' => 'industry_sepc_detail',
        'outRequestNo' => 'out_request_no',
        'outTradeNo' => 'out_trade_no',
        'presentRefundBuyerAmount' => 'present_refund_buyer_amount',
        'presentRefundDiscountAmount' => 'present_refund_discount_amount',
        'presentRefundMdiscountAmount' => 'present_refund_mdiscount_amount',
        'refundAmount' => 'refund_amount',
        'refundChannelList' => 'refund_channel_list',
        'refundChannelStatus' => 'refund_channel_status',
        'refundChargeAmount' => 'refund_charge_amount',
        'refundChargeInfoList' => 'refund_charge_info_list',
        'refundDetailItemList' => 'refund_detail_item_list',
        'refundHybAmount' => 'refund_hyb_amount',
        'refundReason' => 'refund_reason',
        'refundRoyaltys' => 'refund_royaltys',
        'refundSettlementId' => 'refund_settlement_id',
        'refundStatus' => 'refund_status',
        'refundVoucherDetailList' => 'refund_voucher_detail_list',
        'sendBackFee' => 'send_back_fee',
        'totalAmount' => 'total_amount',
        'tradeNo' => 'trade_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'depositBackInfo' => 'setDepositBackInfo',
        'depositBackInfoList' => 'setDepositBackInfoList',
        'enterprisePayInfo' => 'setEnterprisePayInfo',
        'errorCode' => 'setErrorCode',
        'gmtRefundPay' => 'setGmtRefundPay',
        'industrySepcDetail' => 'setIndustrySepcDetail',
        'outRequestNo' => 'setOutRequestNo',
        'outTradeNo' => 'setOutTradeNo',
        'presentRefundBuyerAmount' => 'setPresentRefundBuyerAmount',
        'presentRefundDiscountAmount' => 'setPresentRefundDiscountAmount',
        'presentRefundMdiscountAmount' => 'setPresentRefundMdiscountAmount',
        'refundAmount' => 'setRefundAmount',
        'refundChannelList' => 'setRefundChannelList',
        'refundChannelStatus' => 'setRefundChannelStatus',
        'refundChargeAmount' => 'setRefundChargeAmount',
        'refundChargeInfoList' => 'setRefundChargeInfoList',
        'refundDetailItemList' => 'setRefundDetailItemList',
        'refundHybAmount' => 'setRefundHybAmount',
        'refundReason' => 'setRefundReason',
        'refundRoyaltys' => 'setRefundRoyaltys',
        'refundSettlementId' => 'setRefundSettlementId',
        'refundStatus' => 'setRefundStatus',
        'refundVoucherDetailList' => 'setRefundVoucherDetailList',
        'sendBackFee' => 'setSendBackFee',
        'totalAmount' => 'setTotalAmount',
        'tradeNo' => 'setTradeNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'depositBackInfo' => 'getDepositBackInfo',
        'depositBackInfoList' => 'getDepositBackInfoList',
        'enterprisePayInfo' => 'getEnterprisePayInfo',
        'errorCode' => 'getErrorCode',
        'gmtRefundPay' => 'getGmtRefundPay',
        'industrySepcDetail' => 'getIndustrySepcDetail',
        'outRequestNo' => 'getOutRequestNo',
        'outTradeNo' => 'getOutTradeNo',
        'presentRefundBuyerAmount' => 'getPresentRefundBuyerAmount',
        'presentRefundDiscountAmount' => 'getPresentRefundDiscountAmount',
        'presentRefundMdiscountAmount' => 'getPresentRefundMdiscountAmount',
        'refundAmount' => 'getRefundAmount',
        'refundChannelList' => 'getRefundChannelList',
        'refundChannelStatus' => 'getRefundChannelStatus',
        'refundChargeAmount' => 'getRefundChargeAmount',
        'refundChargeInfoList' => 'getRefundChargeInfoList',
        'refundDetailItemList' => 'getRefundDetailItemList',
        'refundHybAmount' => 'getRefundHybAmount',
        'refundReason' => 'getRefundReason',
        'refundRoyaltys' => 'getRefundRoyaltys',
        'refundSettlementId' => 'getRefundSettlementId',
        'refundStatus' => 'getRefundStatus',
        'refundVoucherDetailList' => 'getRefundVoucherDetailList',
        'sendBackFee' => 'getSendBackFee',
        'totalAmount' => 'getTotalAmount',
        'tradeNo' => 'getTradeNo'
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
        $this->container['depositBackInfo'] = $data['depositBackInfo'] ?? null;
        $this->container['depositBackInfoList'] = $data['depositBackInfoList'] ?? null;
        $this->container['enterprisePayInfo'] = $data['enterprisePayInfo'] ?? null;
        $this->container['errorCode'] = $data['errorCode'] ?? null;
        $this->container['gmtRefundPay'] = $data['gmtRefundPay'] ?? null;
        $this->container['industrySepcDetail'] = $data['industrySepcDetail'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['outTradeNo'] = $data['outTradeNo'] ?? null;
        $this->container['presentRefundBuyerAmount'] = $data['presentRefundBuyerAmount'] ?? null;
        $this->container['presentRefundDiscountAmount'] = $data['presentRefundDiscountAmount'] ?? null;
        $this->container['presentRefundMdiscountAmount'] = $data['presentRefundMdiscountAmount'] ?? null;
        $this->container['refundAmount'] = $data['refundAmount'] ?? null;
        $this->container['refundChannelList'] = $data['refundChannelList'] ?? null;
        $this->container['refundChannelStatus'] = $data['refundChannelStatus'] ?? null;
        $this->container['refundChargeAmount'] = $data['refundChargeAmount'] ?? null;
        $this->container['refundChargeInfoList'] = $data['refundChargeInfoList'] ?? null;
        $this->container['refundDetailItemList'] = $data['refundDetailItemList'] ?? null;
        $this->container['refundHybAmount'] = $data['refundHybAmount'] ?? null;
        $this->container['refundReason'] = $data['refundReason'] ?? null;
        $this->container['refundRoyaltys'] = $data['refundRoyaltys'] ?? null;
        $this->container['refundSettlementId'] = $data['refundSettlementId'] ?? null;
        $this->container['refundStatus'] = $data['refundStatus'] ?? null;
        $this->container['refundVoucherDetailList'] = $data['refundVoucherDetailList'] ?? null;
        $this->container['sendBackFee'] = $data['sendBackFee'] ?? null;
        $this->container['totalAmount'] = $data['totalAmount'] ?? null;
        $this->container['tradeNo'] = $data['tradeNo'] ?? null;
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
     * Gets depositBackInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DepositBackInfo|null
     */
    public function getDepositBackInfo()
    {
        return $this->container['depositBackInfo'];
    }

    /**
     * Sets depositBackInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DepositBackInfo|null $depositBackInfo depositBackInfo
     *
     * @return self
     */
    public function setDepositBackInfo($depositBackInfo)
    {
        $this->container['depositBackInfo'] = $depositBackInfo;

        return $this;
    }

    /**
     * Gets depositBackInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\DepositBackInfo[]|null
     */
    public function getDepositBackInfoList()
    {
        return $this->container['depositBackInfoList'];
    }

    /**
     * Sets depositBackInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\DepositBackInfo[]|null $depositBackInfoList 银行卡冲退信息列表。 默认不返回该信息，需要在入参的query_options中指定\"deposit_back_info_list\"值时才返回该字段信息。
     *
     * @return self
     */
    public function setDepositBackInfoList($depositBackInfoList)
    {
        $this->container['depositBackInfoList'] = $depositBackInfoList;

        return $this;
    }

    /**
     * Gets enterprisePayInfo
     *
     * @return \Alipay\OpenAPISDK\Model\EnterprisePayInfo|null
     */
    public function getEnterprisePayInfo()
    {
        return $this->container['enterprisePayInfo'];
    }

    /**
     * Sets enterprisePayInfo
     *
     * @param \Alipay\OpenAPISDK\Model\EnterprisePayInfo|null $enterprisePayInfo enterprisePayInfo
     *
     * @return self
     */
    public function setEnterprisePayInfo($enterprisePayInfo)
    {
        $this->container['enterprisePayInfo'] = $enterprisePayInfo;

        return $this;
    }

    /**
     * Gets errorCode
     *
     * @return string|null
     */
    public function getErrorCode()
    {
        return $this->container['errorCode'];
    }

    /**
     * Sets errorCode
     *
     * @param string|null $errorCode 退款失败错误码。只在使用异步退款接口情况下才会返回该字段
     *
     * @return self
     */
    public function setErrorCode($errorCode)
    {
        $this->container['errorCode'] = $errorCode;

        return $this;
    }

    /**
     * Gets gmtRefundPay
     *
     * @return string|null
     */
    public function getGmtRefundPay()
    {
        return $this->container['gmtRefundPay'];
    }

    /**
     * Sets gmtRefundPay
     *
     * @param string|null $gmtRefundPay 退款时间。默认不返回该信息，需要在入参的query_options中指定\"gmt_refund_pay\"值时才返回该字段信息。
     *
     * @return self
     */
    public function setGmtRefundPay($gmtRefundPay)
    {
        $this->container['gmtRefundPay'] = $gmtRefundPay;

        return $this;
    }

    /**
     * Gets industrySepcDetail
     *
     * @return string|null
     */
    public function getIndustrySepcDetail()
    {
        return $this->container['industrySepcDetail'];
    }

    /**
     * Sets industrySepcDetail
     *
     * @param string|null $industrySepcDetail 行业特殊信息（例如在医保卡支付退款中，医保局向商户返回医疗信息）。
     *
     * @return self
     */
    public function setIndustrySepcDetail($industrySepcDetail)
    {
        $this->container['industrySepcDetail'] = $industrySepcDetail;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 本笔退款对应的退款请求号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets outTradeNo
     *
     * @return string|null
     */
    public function getOutTradeNo()
    {
        return $this->container['outTradeNo'];
    }

    /**
     * Sets outTradeNo
     *
     * @param string|null $outTradeNo 创建交易传入的商户订单号
     *
     * @return self
     */
    public function setOutTradeNo($outTradeNo)
    {
        $this->container['outTradeNo'] = $outTradeNo;

        return $this;
    }

    /**
     * Gets presentRefundBuyerAmount
     *
     * @return string|null
     */
    public function getPresentRefundBuyerAmount()
    {
        return $this->container['presentRefundBuyerAmount'];
    }

    /**
     * Sets presentRefundBuyerAmount
     *
     * @param string|null $presentRefundBuyerAmount 本次退款金额中买家退款金额。单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundBuyerAmount($presentRefundBuyerAmount)
    {
        $this->container['presentRefundBuyerAmount'] = $presentRefundBuyerAmount;

        return $this;
    }

    /**
     * Gets presentRefundDiscountAmount
     *
     * @return string|null
     */
    public function getPresentRefundDiscountAmount()
    {
        return $this->container['presentRefundDiscountAmount'];
    }

    /**
     * Sets presentRefundDiscountAmount
     *
     * @param string|null $presentRefundDiscountAmount 本次退款金额中平台优惠退款金额。单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundDiscountAmount($presentRefundDiscountAmount)
    {
        $this->container['presentRefundDiscountAmount'] = $presentRefundDiscountAmount;

        return $this;
    }

    /**
     * Gets presentRefundMdiscountAmount
     *
     * @return string|null
     */
    public function getPresentRefundMdiscountAmount()
    {
        return $this->container['presentRefundMdiscountAmount'];
    }

    /**
     * Sets presentRefundMdiscountAmount
     *
     * @param string|null $presentRefundMdiscountAmount 本次退款金额中商家优惠退款金额。单位：元。 该字段默认不返回；
     *
     * @return self
     */
    public function setPresentRefundMdiscountAmount($presentRefundMdiscountAmount)
    {
        $this->container['presentRefundMdiscountAmount'] = $presentRefundMdiscountAmount;

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
     * @param string|null $refundAmount 本次退款请求，对应的退款金额。单位：元。
     *
     * @return self
     */
    public function setRefundAmount($refundAmount)
    {
        $this->container['refundAmount'] = $refundAmount;

        return $this;
    }

    /**
     * Gets refundChannelList
     *
     * @return string|null
     */
    public function getRefundChannelList()
    {
        return $this->container['refundChannelList'];
    }

    /**
     * Sets refundChannelList
     *
     * @param string|null $refundChannelList 若支付渠道包含医保统筹、个账，则显示退款的渠道信息。如统筹OUTSIDEGOVCARD，个账OUTSIDEACCCARD
     *
     * @return self
     */
    public function setRefundChannelList($refundChannelList)
    {
        $this->container['refundChannelList'] = $refundChannelList;

        return $this;
    }

    /**
     * Gets refundChannelStatus
     *
     * @return string|null
     */
    public function getRefundChannelStatus()
    {
        return $this->container['refundChannelStatus'];
    }

    /**
     * Sets refundChannelStatus
     *
     * @param string|null $refundChannelStatus 若支付渠道包含医保统筹、个账，全渠道退款成功时返回SUCCESS，全失败时返回FAIL，部分成功时返回PART_SUCCESS
     *
     * @return self
     */
    public function setRefundChannelStatus($refundChannelStatus)
    {
        $this->container['refundChannelStatus'] = $refundChannelStatus;

        return $this;
    }

    /**
     * Gets refundChargeAmount
     *
     * @return string|null
     */
    public function getRefundChargeAmount()
    {
        return $this->container['refundChargeAmount'];
    }

    /**
     * Sets refundChargeAmount
     *
     * @param string|null $refundChargeAmount 本次退款针对收款方的退收费金额；单位：元。 只在机构间联模式下返回，其它场景下不返回该字段；
     *
     * @return self
     */
    public function setRefundChargeAmount($refundChargeAmount)
    {
        $this->container['refundChargeAmount'] = $refundChargeAmount;

        return $this;
    }

    /**
     * Gets refundChargeInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\RefundChargeInfo[]|null
     */
    public function getRefundChargeInfoList()
    {
        return $this->container['refundChargeInfoList'];
    }

    /**
     * Sets refundChargeInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\RefundChargeInfo[]|null $refundChargeInfoList 退费信息
     *
     * @return self
     */
    public function setRefundChargeInfoList($refundChargeInfoList)
    {
        $this->container['refundChargeInfoList'] = $refundChargeInfoList;

        return $this;
    }

    /**
     * Gets refundDetailItemList
     *
     * @return \Alipay\OpenAPISDK\Model\TradeFundBill[]|null
     */
    public function getRefundDetailItemList()
    {
        return $this->container['refundDetailItemList'];
    }

    /**
     * Sets refundDetailItemList
     *
     * @param \Alipay\OpenAPISDK\Model\TradeFundBill[]|null $refundDetailItemList 本次退款使用的资金渠道； 默认不返回该信息，需要在入参的query_options中指定\"refund_detail_item_list\"值时才返回该字段信息。
     *
     * @return self
     */
    public function setRefundDetailItemList($refundDetailItemList)
    {
        $this->container['refundDetailItemList'] = $refundDetailItemList;

        return $this;
    }

    /**
     * Gets refundHybAmount
     *
     * @return string|null
     */
    public function getRefundHybAmount()
    {
        return $this->container['refundHybAmount'];
    }

    /**
     * Sets refundHybAmount
     *
     * @param string|null $refundHybAmount 本次退款金额中退惠营宝的金额。单位：元。
     *
     * @return self
     */
    public function setRefundHybAmount($refundHybAmount)
    {
        $this->container['refundHybAmount'] = $refundHybAmount;

        return $this;
    }

    /**
     * Gets refundReason
     *
     * @return string|null
     */
    public function getRefundReason()
    {
        return $this->container['refundReason'];
    }

    /**
     * Sets refundReason
     *
     * @param string|null $refundReason 发起退款时，传入的退款原因
     *
     * @return self
     */
    public function setRefundReason($refundReason)
    {
        $this->container['refundReason'] = $refundReason;

        return $this;
    }

    /**
     * Gets refundRoyaltys
     *
     * @return \Alipay\OpenAPISDK\Model\RefundRoyaltyResult[]|null
     */
    public function getRefundRoyaltys()
    {
        return $this->container['refundRoyaltys'];
    }

    /**
     * Sets refundRoyaltys
     *
     * @param \Alipay\OpenAPISDK\Model\RefundRoyaltyResult[]|null $refundRoyaltys 退分账明细信息，当前仅在直付通产品中返回。
     *
     * @return self
     */
    public function setRefundRoyaltys($refundRoyaltys)
    {
        $this->container['refundRoyaltys'] = $refundRoyaltys;

        return $this;
    }

    /**
     * Gets refundSettlementId
     *
     * @return string|null
     */
    public function getRefundSettlementId()
    {
        return $this->container['refundSettlementId'];
    }

    /**
     * Sets refundSettlementId
     *
     * @param string|null $refundSettlementId 退款清算编号，用于清算对账使用； 只在机构间联模式下返回，其它场景下不返回该字段；
     *
     * @return self
     */
    public function setRefundSettlementId($refundSettlementId)
    {
        $this->container['refundSettlementId'] = $refundSettlementId;

        return $this;
    }

    /**
     * Gets refundStatus
     *
     * @return string|null
     */
    public function getRefundStatus()
    {
        return $this->container['refundStatus'];
    }

    /**
     * Sets refundStatus
     *
     * @param string|null $refundStatus 退款状态。枚举值： REFUND_SUCCESS 退款处理成功； 未返回该字段表示退款请求未收到或者退款失败； 注：如果退款查询发起时间早于退款时间，或者间隔退款发起时间太短，可能出现退款查询时还没处理成功，后面又处理成功的情况，建议商户在退款发起后间隔10秒以上再发起退款查询请求。
     *
     * @return self
     */
    public function setRefundStatus($refundStatus)
    {
        $this->container['refundStatus'] = $refundStatus;

        return $this;
    }

    /**
     * Gets refundVoucherDetailList
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherDetail[]|null
     */
    public function getRefundVoucherDetailList()
    {
        return $this->container['refundVoucherDetailList'];
    }

    /**
     * Sets refundVoucherDetailList
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherDetail[]|null $refundVoucherDetailList 本交易支付时使用的所有优惠券信息。 只有在query_options中指定refund_voucher_detail_list时才返回该字段信息。
     *
     * @return self
     */
    public function setRefundVoucherDetailList($refundVoucherDetailList)
    {
        $this->container['refundVoucherDetailList'] = $refundVoucherDetailList;

        return $this;
    }

    /**
     * Gets sendBackFee
     *
     * @return string|null
     */
    public function getSendBackFee()
    {
        return $this->container['sendBackFee'];
    }

    /**
     * Sets sendBackFee
     *
     * @param string|null $sendBackFee 本次商户实际退回金额；单位：元。 默认不返回该信息，需要在入参的query_options中指定\"refund_detail_item_list\"值时才返回该字段信息。
     *
     * @return self
     */
    public function setSendBackFee($sendBackFee)
    {
        $this->container['sendBackFee'] = $sendBackFee;

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
     * @param string|null $totalAmount 该笔退款所对应的交易的订单金额。单位：元。
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
     * @param string|null $tradeNo 支付宝交易号
     *
     * @return self
     */
    public function setTradeNo($tradeNo)
    {
        $this->container['tradeNo'] = $tradeNo;

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


