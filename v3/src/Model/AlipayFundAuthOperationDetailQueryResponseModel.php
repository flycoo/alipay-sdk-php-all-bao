<?php
/**
 * AlipayFundAuthOperationDetailQueryResponseModel
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
 * The version of the OpenAPI document: 2024-10-08
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
 * AlipayFundAuthOperationDetailQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAuthOperationDetailQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAuthOperationDetailQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'authNo' => 'string',
        'creditAmount' => 'string',
        'creditMerchantExt' => 'string',
        'creditRiskInfo' => '\Alipay\OpenAPISDK\Model\CreditRiskInfo',
        'enterprisePayInfo' => 'string',
        'extraParam' => 'string',
        'fundAmount' => 'string',
        'gmtCreate' => 'string',
        'gmtTrans' => 'string',
        'operationId' => 'string',
        'operationType' => 'string',
        'orderStatus' => 'string',
        'orderTitle' => 'string',
        'outOrderNo' => 'string',
        'outRequestNo' => 'string',
        'payerLogonId' => 'string',
        'payerOpenId' => 'string',
        'payerUserId' => 'string',
        'preAuthType' => 'string',
        'remark' => 'string',
        'restAmount' => 'string',
        'restCreditAmount' => 'string',
        'restFundAmount' => 'string',
        'status' => 'string',
        'totalFreezeAmount' => 'string',
        'totalFreezeCreditAmount' => 'string',
        'totalFreezeFundAmount' => 'string',
        'totalPayAmount' => 'string',
        'totalPayCreditAmount' => 'string',
        'totalPayFundAmount' => 'string',
        'transCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'authNo' => null,
        'creditAmount' => null,
        'creditMerchantExt' => null,
        'creditRiskInfo' => null,
        'enterprisePayInfo' => null,
        'extraParam' => null,
        'fundAmount' => null,
        'gmtCreate' => null,
        'gmtTrans' => null,
        'operationId' => null,
        'operationType' => null,
        'orderStatus' => null,
        'orderTitle' => null,
        'outOrderNo' => null,
        'outRequestNo' => null,
        'payerLogonId' => null,
        'payerOpenId' => null,
        'payerUserId' => null,
        'preAuthType' => null,
        'remark' => null,
        'restAmount' => null,
        'restCreditAmount' => null,
        'restFundAmount' => null,
        'status' => null,
        'totalFreezeAmount' => null,
        'totalFreezeCreditAmount' => null,
        'totalFreezeFundAmount' => null,
        'totalPayAmount' => null,
        'totalPayCreditAmount' => null,
        'totalPayFundAmount' => null,
        'transCurrency' => null
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
        'amount' => 'amount',
        'authNo' => 'auth_no',
        'creditAmount' => 'credit_amount',
        'creditMerchantExt' => 'credit_merchant_ext',
        'creditRiskInfo' => 'credit_risk_info',
        'enterprisePayInfo' => 'enterprise_pay_info',
        'extraParam' => 'extra_param',
        'fundAmount' => 'fund_amount',
        'gmtCreate' => 'gmt_create',
        'gmtTrans' => 'gmt_trans',
        'operationId' => 'operation_id',
        'operationType' => 'operation_type',
        'orderStatus' => 'order_status',
        'orderTitle' => 'order_title',
        'outOrderNo' => 'out_order_no',
        'outRequestNo' => 'out_request_no',
        'payerLogonId' => 'payer_logon_id',
        'payerOpenId' => 'payer_open_id',
        'payerUserId' => 'payer_user_id',
        'preAuthType' => 'pre_auth_type',
        'remark' => 'remark',
        'restAmount' => 'rest_amount',
        'restCreditAmount' => 'rest_credit_amount',
        'restFundAmount' => 'rest_fund_amount',
        'status' => 'status',
        'totalFreezeAmount' => 'total_freeze_amount',
        'totalFreezeCreditAmount' => 'total_freeze_credit_amount',
        'totalFreezeFundAmount' => 'total_freeze_fund_amount',
        'totalPayAmount' => 'total_pay_amount',
        'totalPayCreditAmount' => 'total_pay_credit_amount',
        'totalPayFundAmount' => 'total_pay_fund_amount',
        'transCurrency' => 'trans_currency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'authNo' => 'setAuthNo',
        'creditAmount' => 'setCreditAmount',
        'creditMerchantExt' => 'setCreditMerchantExt',
        'creditRiskInfo' => 'setCreditRiskInfo',
        'enterprisePayInfo' => 'setEnterprisePayInfo',
        'extraParam' => 'setExtraParam',
        'fundAmount' => 'setFundAmount',
        'gmtCreate' => 'setGmtCreate',
        'gmtTrans' => 'setGmtTrans',
        'operationId' => 'setOperationId',
        'operationType' => 'setOperationType',
        'orderStatus' => 'setOrderStatus',
        'orderTitle' => 'setOrderTitle',
        'outOrderNo' => 'setOutOrderNo',
        'outRequestNo' => 'setOutRequestNo',
        'payerLogonId' => 'setPayerLogonId',
        'payerOpenId' => 'setPayerOpenId',
        'payerUserId' => 'setPayerUserId',
        'preAuthType' => 'setPreAuthType',
        'remark' => 'setRemark',
        'restAmount' => 'setRestAmount',
        'restCreditAmount' => 'setRestCreditAmount',
        'restFundAmount' => 'setRestFundAmount',
        'status' => 'setStatus',
        'totalFreezeAmount' => 'setTotalFreezeAmount',
        'totalFreezeCreditAmount' => 'setTotalFreezeCreditAmount',
        'totalFreezeFundAmount' => 'setTotalFreezeFundAmount',
        'totalPayAmount' => 'setTotalPayAmount',
        'totalPayCreditAmount' => 'setTotalPayCreditAmount',
        'totalPayFundAmount' => 'setTotalPayFundAmount',
        'transCurrency' => 'setTransCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'authNo' => 'getAuthNo',
        'creditAmount' => 'getCreditAmount',
        'creditMerchantExt' => 'getCreditMerchantExt',
        'creditRiskInfo' => 'getCreditRiskInfo',
        'enterprisePayInfo' => 'getEnterprisePayInfo',
        'extraParam' => 'getExtraParam',
        'fundAmount' => 'getFundAmount',
        'gmtCreate' => 'getGmtCreate',
        'gmtTrans' => 'getGmtTrans',
        'operationId' => 'getOperationId',
        'operationType' => 'getOperationType',
        'orderStatus' => 'getOrderStatus',
        'orderTitle' => 'getOrderTitle',
        'outOrderNo' => 'getOutOrderNo',
        'outRequestNo' => 'getOutRequestNo',
        'payerLogonId' => 'getPayerLogonId',
        'payerOpenId' => 'getPayerOpenId',
        'payerUserId' => 'getPayerUserId',
        'preAuthType' => 'getPreAuthType',
        'remark' => 'getRemark',
        'restAmount' => 'getRestAmount',
        'restCreditAmount' => 'getRestCreditAmount',
        'restFundAmount' => 'getRestFundAmount',
        'status' => 'getStatus',
        'totalFreezeAmount' => 'getTotalFreezeAmount',
        'totalFreezeCreditAmount' => 'getTotalFreezeCreditAmount',
        'totalFreezeFundAmount' => 'getTotalFreezeFundAmount',
        'totalPayAmount' => 'getTotalPayAmount',
        'totalPayCreditAmount' => 'getTotalPayCreditAmount',
        'totalPayFundAmount' => 'getTotalPayFundAmount',
        'transCurrency' => 'getTransCurrency'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['authNo'] = $data['authNo'] ?? null;
        $this->container['creditAmount'] = $data['creditAmount'] ?? null;
        $this->container['creditMerchantExt'] = $data['creditMerchantExt'] ?? null;
        $this->container['creditRiskInfo'] = $data['creditRiskInfo'] ?? null;
        $this->container['enterprisePayInfo'] = $data['enterprisePayInfo'] ?? null;
        $this->container['extraParam'] = $data['extraParam'] ?? null;
        $this->container['fundAmount'] = $data['fundAmount'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtTrans'] = $data['gmtTrans'] ?? null;
        $this->container['operationId'] = $data['operationId'] ?? null;
        $this->container['operationType'] = $data['operationType'] ?? null;
        $this->container['orderStatus'] = $data['orderStatus'] ?? null;
        $this->container['orderTitle'] = $data['orderTitle'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['payerLogonId'] = $data['payerLogonId'] ?? null;
        $this->container['payerOpenId'] = $data['payerOpenId'] ?? null;
        $this->container['payerUserId'] = $data['payerUserId'] ?? null;
        $this->container['preAuthType'] = $data['preAuthType'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
        $this->container['restAmount'] = $data['restAmount'] ?? null;
        $this->container['restCreditAmount'] = $data['restCreditAmount'] ?? null;
        $this->container['restFundAmount'] = $data['restFundAmount'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['totalFreezeAmount'] = $data['totalFreezeAmount'] ?? null;
        $this->container['totalFreezeCreditAmount'] = $data['totalFreezeCreditAmount'] ?? null;
        $this->container['totalFreezeFundAmount'] = $data['totalFreezeFundAmount'] ?? null;
        $this->container['totalPayAmount'] = $data['totalPayAmount'] ?? null;
        $this->container['totalPayCreditAmount'] = $data['totalPayCreditAmount'] ?? null;
        $this->container['totalPayFundAmount'] = $data['totalPayFundAmount'] ?? null;
        $this->container['transCurrency'] = $data['transCurrency'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 该笔资金操作流水operation_id对应的操作金额，单位为：元（人民币）
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets authNo
     *
     * @return string|null
     */
    public function getAuthNo()
    {
        return $this->container['authNo'];
    }

    /**
     * Sets authNo
     *
     * @param string|null $authNo 支付宝资金授权订单号
     *
     * @return self
     */
    public function setAuthNo($authNo)
    {
        $this->container['authNo'] = $authNo;

        return $this;
    }

    /**
     * Gets creditAmount
     *
     * @return string|null
     */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
     * Sets creditAmount
     *
     * @param string|null $creditAmount 该笔资金操作流水operation_id对应的操作信用金额
     *
     * @return self
     */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;

        return $this;
    }

    /**
     * Gets creditMerchantExt
     *
     * @return string|null
     */
    public function getCreditMerchantExt()
    {
        return $this->container['creditMerchantExt'];
    }

    /**
     * Sets creditMerchantExt
     *
     * @param string|null $creditMerchantExt 芝麻透出给商户的信息，具体内容由商户与芝麻约定后返回
     *
     * @return self
     */
    public function setCreditMerchantExt($creditMerchantExt)
    {
        $this->container['creditMerchantExt'] = $creditMerchantExt;

        return $this;
    }

    /**
     * Gets creditRiskInfo
     *
     * @return \Alipay\OpenAPISDK\Model\CreditRiskInfo|null
     */
    public function getCreditRiskInfo()
    {
        return $this->container['creditRiskInfo'];
    }

    /**
     * Sets creditRiskInfo
     *
     * @param \Alipay\OpenAPISDK\Model\CreditRiskInfo|null $creditRiskInfo creditRiskInfo
     *
     * @return self
     */
    public function setCreditRiskInfo($creditRiskInfo)
    {
        $this->container['creditRiskInfo'] = $creditRiskInfo;

        return $this;
    }

    /**
     * Gets enterprisePayInfo
     *
     * @return string|null
     */
    public function getEnterprisePayInfo()
    {
        return $this->container['enterprisePayInfo'];
    }

    /**
     * Sets enterprisePayInfo
     *
     * @param string|null $enterprisePayInfo 因公付业务信息
     *
     * @return self
     */
    public function setEnterprisePayInfo($enterprisePayInfo)
    {
        $this->container['enterprisePayInfo'] = $enterprisePayInfo;

        return $this;
    }

    /**
     * Gets extraParam
     *
     * @return string|null
     */
    public function getExtraParam()
    {
        return $this->container['extraParam'];
    }

    /**
     * Sets extraParam
     *
     * @param string|null $extraParam 商户请求创建预授权订单时传入的扩展参数，仅返回商户自定义的扩展信息（merchantExt）
     *
     * @return self
     */
    public function setExtraParam($extraParam)
    {
        $this->container['extraParam'] = $extraParam;

        return $this;
    }

    /**
     * Gets fundAmount
     *
     * @return string|null
     */
    public function getFundAmount()
    {
        return $this->container['fundAmount'];
    }

    /**
     * Sets fundAmount
     *
     * @param string|null $fundAmount 该笔资金操作流水operation_id对应的操作自有资金金额
     *
     * @return self
     */
    public function setFundAmount($fundAmount)
    {
        $this->container['fundAmount'] = $fundAmount;

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
     * @param string|null $gmtCreate 资金授权单据操作流水创建时间，  格式：YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtTrans
     *
     * @return string|null
     */
    public function getGmtTrans()
    {
        return $this->container['gmtTrans'];
    }

    /**
     * Sets gmtTrans
     *
     * @param string|null $gmtTrans 支付宝账务处理成功时间，  格式：YYYY-MM-DD HH:MM:SS
     *
     * @return self
     */
    public function setGmtTrans($gmtTrans)
    {
        $this->container['gmtTrans'] = $gmtTrans;

        return $this;
    }

    /**
     * Gets operationId
     *
     * @return string|null
     */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
     * Sets operationId
     *
     * @param string|null $operationId 支付宝资金操作流水号
     *
     * @return self
     */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param string|null $operationType 支付宝资金操作类型，表示当前查询到的这笔明细的操作类型。
     *
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

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
     * @param string|null $orderStatus 授权单状态：INIT（初始状态：已创建未授权）、AUTHORIZED（已授权状态：授权成功，可以进行转支付或解冻操作）、FINISH（完成状态：转支付完成且无剩余冻结资金）、CLOSED（关闭状态：授权未完成超时关闭或冻结资金全额解冻）
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets orderTitle
     *
     * @return string|null
     */
    public function getOrderTitle()
    {
        return $this->container['orderTitle'];
    }

    /**
     * Sets orderTitle
     *
     * @param string|null $orderTitle 业务订单的简单描述，如商品名称等
     *
     * @return self
     */
    public function setOrderTitle($orderTitle)
    {
        $this->container['orderTitle'] = $orderTitle;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商户的授权资金订单号
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

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
     * @param string|null $outRequestNo 商户资金操作的请求流水号
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets payerLogonId
     *
     * @return string|null
     */
    public function getPayerLogonId()
    {
        return $this->container['payerLogonId'];
    }

    /**
     * Sets payerLogonId
     *
     * @param string|null $payerLogonId 付款方支付宝账号（Email或手机号），仅作展示使用，默认会加“*”号处理
     *
     * @return self
     */
    public function setPayerLogonId($payerLogonId)
    {
        $this->container['payerLogonId'] = $payerLogonId;

        return $this;
    }

    /**
     * Gets payerOpenId
     *
     * @return string|null
     */
    public function getPayerOpenId()
    {
        return $this->container['payerOpenId'];
    }

    /**
     * Sets payerOpenId
     *
     * @param string|null $payerOpenId 支付宝openId，用户（userId）在应用（appId）下的唯一标识。
     *
     * @return self
     */
    public function setPayerOpenId($payerOpenId)
    {
        $this->container['payerOpenId'] = $payerOpenId;

        return $this;
    }

    /**
     * Gets payerUserId
     *
     * @return string|null
     */
    public function getPayerUserId()
    {
        return $this->container['payerUserId'];
    }

    /**
     * Sets payerUserId
     *
     * @param string|null $payerUserId 付款方支付宝账号对应的支付宝唯一用户号，以2088开头的16位纯数字组成
     *
     * @return self
     */
    public function setPayerUserId($payerUserId)
    {
        $this->container['payerUserId'] = $payerUserId;

        return $this;
    }

    /**
     * Gets preAuthType
     *
     * @return string|null
     */
    public function getPreAuthType()
    {
        return $this->container['preAuthType'];
    }

    /**
     * Sets preAuthType
     *
     * @param string|null $preAuthType 预授权类型，信用预授权情况下值为 CREDIT_AUTH，表示该笔预授权为信用预授权，实际没有冻结用户资金；其它情况均不返回该字段。
     *
     * @return self
     */
    public function setPreAuthType($preAuthType)
    {
        $this->container['preAuthType'] = $preAuthType;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 商户对本次操作的附言描述，长度不超过100个字母或50个汉字
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

        return $this;
    }

    /**
     * Gets restAmount
     *
     * @return string|null
     */
    public function getRestAmount()
    {
        return $this->container['restAmount'];
    }

    /**
     * Sets restAmount
     *
     * @param string|null $restAmount 订单当前剩余冻结金额，单位为：元（人民币）。
     *
     * @return self
     */
    public function setRestAmount($restAmount)
    {
        $this->container['restAmount'] = $restAmount;

        return $this;
    }

    /**
     * Gets restCreditAmount
     *
     * @return string|null
     */
    public function getRestCreditAmount()
    {
        return $this->container['restCreditAmount'];
    }

    /**
     * Sets restCreditAmount
     *
     * @param string|null $restCreditAmount 剩余冻结信用金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setRestCreditAmount($restCreditAmount)
    {
        $this->container['restCreditAmount'] = $restCreditAmount;

        return $this;
    }

    /**
     * Gets restFundAmount
     *
     * @return string|null
     */
    public function getRestFundAmount()
    {
        return $this->container['restFundAmount'];
    }

    /**
     * Sets restFundAmount
     *
     * @param string|null $restFundAmount 剩余冻结自有资金金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setRestFundAmount($restFundAmount)
    {
        $this->container['restFundAmount'] = $restFundAmount;

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
     * @param string|null $status 资金操作流水的状态，  目前支持：   INIT：初始  SUCCESS：成功  CLOSED：关闭
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totalFreezeAmount
     *
     * @return string|null
     */
    public function getTotalFreezeAmount()
    {
        return $this->container['totalFreezeAmount'];
    }

    /**
     * Sets totalFreezeAmount
     *
     * @param string|null $totalFreezeAmount 订单累计的冻结金额，单位为：元（人民币）
     *
     * @return self
     */
    public function setTotalFreezeAmount($totalFreezeAmount)
    {
        $this->container['totalFreezeAmount'] = $totalFreezeAmount;

        return $this;
    }

    /**
     * Gets totalFreezeCreditAmount
     *
     * @return string|null
     */
    public function getTotalFreezeCreditAmount()
    {
        return $this->container['totalFreezeCreditAmount'];
    }

    /**
     * Sets totalFreezeCreditAmount
     *
     * @param string|null $totalFreezeCreditAmount 累计冻结信用金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setTotalFreezeCreditAmount($totalFreezeCreditAmount)
    {
        $this->container['totalFreezeCreditAmount'] = $totalFreezeCreditAmount;

        return $this;
    }

    /**
     * Gets totalFreezeFundAmount
     *
     * @return string|null
     */
    public function getTotalFreezeFundAmount()
    {
        return $this->container['totalFreezeFundAmount'];
    }

    /**
     * Sets totalFreezeFundAmount
     *
     * @param string|null $totalFreezeFundAmount 累计冻结自有资金金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setTotalFreezeFundAmount($totalFreezeFundAmount)
    {
        $this->container['totalFreezeFundAmount'] = $totalFreezeFundAmount;

        return $this;
    }

    /**
     * Gets totalPayAmount
     *
     * @return string|null
     */
    public function getTotalPayAmount()
    {
        return $this->container['totalPayAmount'];
    }

    /**
     * Sets totalPayAmount
     *
     * @param string|null $totalPayAmount 订单累计用于支付的金额，单位为：元（人民币）
     *
     * @return self
     */
    public function setTotalPayAmount($totalPayAmount)
    {
        $this->container['totalPayAmount'] = $totalPayAmount;

        return $this;
    }

    /**
     * Gets totalPayCreditAmount
     *
     * @return string|null
     */
    public function getTotalPayCreditAmount()
    {
        return $this->container['totalPayCreditAmount'];
    }

    /**
     * Sets totalPayCreditAmount
     *
     * @param string|null $totalPayCreditAmount 累计支付信用金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setTotalPayCreditAmount($totalPayCreditAmount)
    {
        $this->container['totalPayCreditAmount'] = $totalPayCreditAmount;

        return $this;
    }

    /**
     * Gets totalPayFundAmount
     *
     * @return string|null
     */
    public function getTotalPayFundAmount()
    {
        return $this->container['totalPayFundAmount'];
    }

    /**
     * Sets totalPayFundAmount
     *
     * @param string|null $totalPayFundAmount 累计支付自有资金金额，单位为：元（人民币），精确到小数点后两位
     *
     * @return self
     */
    public function setTotalPayFundAmount($totalPayFundAmount)
    {
        $this->container['totalPayFundAmount'] = $totalPayFundAmount;

        return $this;
    }

    /**
     * Gets transCurrency
     *
     * @return string|null
     */
    public function getTransCurrency()
    {
        return $this->container['transCurrency'];
    }

    /**
     * Sets transCurrency
     *
     * @param string|null $transCurrency 标价币种,  amount 对应的币种单位。支持澳元：AUD, 新西兰元：NZD, 台币：TWD, 美元：USD, 欧元：EUR, 英镑：GBP
     *
     * @return self
     */
    public function setTransCurrency($transCurrency)
    {
        $this->container['transCurrency'] = $transCurrency;

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


