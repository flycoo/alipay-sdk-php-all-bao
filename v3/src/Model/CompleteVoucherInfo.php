<?php
/**
 * CompleteVoucherInfo
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
 * CompleteVoucherInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CompleteVoucherInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompleteVoucherInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'antiFakeCode' => 'string',
        'checkSum' => 'string',
        'deviceNo' => 'string',
        'fileDownloadUrl' => 'string',
        'fileType' => 'string',
        'invoiceAmount' => 'int',
        'invoiceCode' => 'string',
        'invoiceContentList' => '\Alipay\OpenAPISDK\Model\InvoiceContentInfo[]',
        'invoiceDate' => 'string',
        'invoiceKind' => 'int',
        'invoiceMemo' => 'string',
        'invoiceNo' => 'string',
        'invoiceSource' => 'string',
        'invoiceTitle' => 'string',
        'invoiceType' => 'string',
        'payeeAddress' => 'string',
        'payeeBankAccount' => 'string',
        'payeeBankName' => 'string',
        'payeeChecker' => 'string',
        'payeeMobile' => 'string',
        'payeeName' => 'string',
        'payeeOperator' => 'string',
        'payeeReceiver' => 'string',
        'payeeRegisterNo' => 'string',
        'payerAddress' => 'string',
        'payerBankAccount' => 'string',
        'payerBankName' => 'string',
        'payerMobile' => 'string',
        'payerName' => 'string',
        'payerRegisterNo' => 'string',
        'sumPrice' => 'int',
        'sumTax' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'antiFakeCode' => null,
        'checkSum' => null,
        'deviceNo' => null,
        'fileDownloadUrl' => null,
        'fileType' => null,
        'invoiceAmount' => null,
        'invoiceCode' => null,
        'invoiceContentList' => null,
        'invoiceDate' => null,
        'invoiceKind' => null,
        'invoiceMemo' => null,
        'invoiceNo' => null,
        'invoiceSource' => null,
        'invoiceTitle' => null,
        'invoiceType' => null,
        'payeeAddress' => null,
        'payeeBankAccount' => null,
        'payeeBankName' => null,
        'payeeChecker' => null,
        'payeeMobile' => null,
        'payeeName' => null,
        'payeeOperator' => null,
        'payeeReceiver' => null,
        'payeeRegisterNo' => null,
        'payerAddress' => null,
        'payerBankAccount' => null,
        'payerBankName' => null,
        'payerMobile' => null,
        'payerName' => null,
        'payerRegisterNo' => null,
        'sumPrice' => null,
        'sumTax' => null
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
        'antiFakeCode' => 'anti_fake_code',
        'checkSum' => 'check_sum',
        'deviceNo' => 'device_no',
        'fileDownloadUrl' => 'file_download_url',
        'fileType' => 'file_type',
        'invoiceAmount' => 'invoice_amount',
        'invoiceCode' => 'invoice_code',
        'invoiceContentList' => 'invoice_content_list',
        'invoiceDate' => 'invoice_date',
        'invoiceKind' => 'invoice_kind',
        'invoiceMemo' => 'invoice_memo',
        'invoiceNo' => 'invoice_no',
        'invoiceSource' => 'invoice_source',
        'invoiceTitle' => 'invoice_title',
        'invoiceType' => 'invoice_type',
        'payeeAddress' => 'payee_address',
        'payeeBankAccount' => 'payee_bank_account',
        'payeeBankName' => 'payee_bank_name',
        'payeeChecker' => 'payee_checker',
        'payeeMobile' => 'payee_mobile',
        'payeeName' => 'payee_name',
        'payeeOperator' => 'payee_operator',
        'payeeReceiver' => 'payee_receiver',
        'payeeRegisterNo' => 'payee_register_no',
        'payerAddress' => 'payer_address',
        'payerBankAccount' => 'payer_bank_account',
        'payerBankName' => 'payer_bank_name',
        'payerMobile' => 'payer_mobile',
        'payerName' => 'payer_name',
        'payerRegisterNo' => 'payer_register_no',
        'sumPrice' => 'sum_price',
        'sumTax' => 'sum_tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antiFakeCode' => 'setAntiFakeCode',
        'checkSum' => 'setCheckSum',
        'deviceNo' => 'setDeviceNo',
        'fileDownloadUrl' => 'setFileDownloadUrl',
        'fileType' => 'setFileType',
        'invoiceAmount' => 'setInvoiceAmount',
        'invoiceCode' => 'setInvoiceCode',
        'invoiceContentList' => 'setInvoiceContentList',
        'invoiceDate' => 'setInvoiceDate',
        'invoiceKind' => 'setInvoiceKind',
        'invoiceMemo' => 'setInvoiceMemo',
        'invoiceNo' => 'setInvoiceNo',
        'invoiceSource' => 'setInvoiceSource',
        'invoiceTitle' => 'setInvoiceTitle',
        'invoiceType' => 'setInvoiceType',
        'payeeAddress' => 'setPayeeAddress',
        'payeeBankAccount' => 'setPayeeBankAccount',
        'payeeBankName' => 'setPayeeBankName',
        'payeeChecker' => 'setPayeeChecker',
        'payeeMobile' => 'setPayeeMobile',
        'payeeName' => 'setPayeeName',
        'payeeOperator' => 'setPayeeOperator',
        'payeeReceiver' => 'setPayeeReceiver',
        'payeeRegisterNo' => 'setPayeeRegisterNo',
        'payerAddress' => 'setPayerAddress',
        'payerBankAccount' => 'setPayerBankAccount',
        'payerBankName' => 'setPayerBankName',
        'payerMobile' => 'setPayerMobile',
        'payerName' => 'setPayerName',
        'payerRegisterNo' => 'setPayerRegisterNo',
        'sumPrice' => 'setSumPrice',
        'sumTax' => 'setSumTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antiFakeCode' => 'getAntiFakeCode',
        'checkSum' => 'getCheckSum',
        'deviceNo' => 'getDeviceNo',
        'fileDownloadUrl' => 'getFileDownloadUrl',
        'fileType' => 'getFileType',
        'invoiceAmount' => 'getInvoiceAmount',
        'invoiceCode' => 'getInvoiceCode',
        'invoiceContentList' => 'getInvoiceContentList',
        'invoiceDate' => 'getInvoiceDate',
        'invoiceKind' => 'getInvoiceKind',
        'invoiceMemo' => 'getInvoiceMemo',
        'invoiceNo' => 'getInvoiceNo',
        'invoiceSource' => 'getInvoiceSource',
        'invoiceTitle' => 'getInvoiceTitle',
        'invoiceType' => 'getInvoiceType',
        'payeeAddress' => 'getPayeeAddress',
        'payeeBankAccount' => 'getPayeeBankAccount',
        'payeeBankName' => 'getPayeeBankName',
        'payeeChecker' => 'getPayeeChecker',
        'payeeMobile' => 'getPayeeMobile',
        'payeeName' => 'getPayeeName',
        'payeeOperator' => 'getPayeeOperator',
        'payeeReceiver' => 'getPayeeReceiver',
        'payeeRegisterNo' => 'getPayeeRegisterNo',
        'payerAddress' => 'getPayerAddress',
        'payerBankAccount' => 'getPayerBankAccount',
        'payerBankName' => 'getPayerBankName',
        'payerMobile' => 'getPayerMobile',
        'payerName' => 'getPayerName',
        'payerRegisterNo' => 'getPayerRegisterNo',
        'sumPrice' => 'getSumPrice',
        'sumTax' => 'getSumTax'
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
        $this->container['antiFakeCode'] = $data['antiFakeCode'] ?? null;
        $this->container['checkSum'] = $data['checkSum'] ?? null;
        $this->container['deviceNo'] = $data['deviceNo'] ?? null;
        $this->container['fileDownloadUrl'] = $data['fileDownloadUrl'] ?? null;
        $this->container['fileType'] = $data['fileType'] ?? null;
        $this->container['invoiceAmount'] = $data['invoiceAmount'] ?? null;
        $this->container['invoiceCode'] = $data['invoiceCode'] ?? null;
        $this->container['invoiceContentList'] = $data['invoiceContentList'] ?? null;
        $this->container['invoiceDate'] = $data['invoiceDate'] ?? null;
        $this->container['invoiceKind'] = $data['invoiceKind'] ?? null;
        $this->container['invoiceMemo'] = $data['invoiceMemo'] ?? null;
        $this->container['invoiceNo'] = $data['invoiceNo'] ?? null;
        $this->container['invoiceSource'] = $data['invoiceSource'] ?? null;
        $this->container['invoiceTitle'] = $data['invoiceTitle'] ?? null;
        $this->container['invoiceType'] = $data['invoiceType'] ?? null;
        $this->container['payeeAddress'] = $data['payeeAddress'] ?? null;
        $this->container['payeeBankAccount'] = $data['payeeBankAccount'] ?? null;
        $this->container['payeeBankName'] = $data['payeeBankName'] ?? null;
        $this->container['payeeChecker'] = $data['payeeChecker'] ?? null;
        $this->container['payeeMobile'] = $data['payeeMobile'] ?? null;
        $this->container['payeeName'] = $data['payeeName'] ?? null;
        $this->container['payeeOperator'] = $data['payeeOperator'] ?? null;
        $this->container['payeeReceiver'] = $data['payeeReceiver'] ?? null;
        $this->container['payeeRegisterNo'] = $data['payeeRegisterNo'] ?? null;
        $this->container['payerAddress'] = $data['payerAddress'] ?? null;
        $this->container['payerBankAccount'] = $data['payerBankAccount'] ?? null;
        $this->container['payerBankName'] = $data['payerBankName'] ?? null;
        $this->container['payerMobile'] = $data['payerMobile'] ?? null;
        $this->container['payerName'] = $data['payerName'] ?? null;
        $this->container['payerRegisterNo'] = $data['payerRegisterNo'] ?? null;
        $this->container['sumPrice'] = $data['sumPrice'] ?? null;
        $this->container['sumTax'] = $data['sumTax'] ?? null;
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
     * Gets antiFakeCode
     *
     * @return string|null
     */
    public function getAntiFakeCode()
    {
        return $this->container['antiFakeCode'];
    }

    /**
     * Sets antiFakeCode
     *
     * @param string|null $antiFakeCode 防伪码
     *
     * @return self
     */
    public function setAntiFakeCode($antiFakeCode)
    {
        $this->container['antiFakeCode'] = $antiFakeCode;

        return $this;
    }

    /**
     * Gets checkSum
     *
     * @return string|null
     */
    public function getCheckSum()
    {
        return $this->container['checkSum'];
    }

    /**
     * Sets checkSum
     *
     * @param string|null $checkSum 校验码
     *
     * @return self
     */
    public function setCheckSum($checkSum)
    {
        $this->container['checkSum'] = $checkSum;

        return $this;
    }

    /**
     * Gets deviceNo
     *
     * @return string|null
     */
    public function getDeviceNo()
    {
        return $this->container['deviceNo'];
    }

    /**
     * Sets deviceNo
     *
     * @param string|null $deviceNo 开票机器码
     *
     * @return self
     */
    public function setDeviceNo($deviceNo)
    {
        $this->container['deviceNo'] = $deviceNo;

        return $this;
    }

    /**
     * Gets fileDownloadUrl
     *
     * @return string|null
     */
    public function getFileDownloadUrl()
    {
        return $this->container['fileDownloadUrl'];
    }

    /**
     * Sets fileDownloadUrl
     *
     * @param string|null $fileDownloadUrl 板式文件下载地址
     *
     * @return self
     */
    public function setFileDownloadUrl($fileDownloadUrl)
    {
        $this->container['fileDownloadUrl'] = $fileDownloadUrl;

        return $this;
    }

    /**
     * Gets fileType
     *
     * @return string|null
     */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /**
     * Sets fileType
     *
     * @param string|null $fileType 板式文件的类型
     *
     * @return self
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /**
     * Gets invoiceAmount
     *
     * @return int|null
     */
    public function getInvoiceAmount()
    {
        return $this->container['invoiceAmount'];
    }

    /**
     * Sets invoiceAmount
     *
     * @param int|null $invoiceAmount 发票金额（元）
     *
     * @return self
     */
    public function setInvoiceAmount($invoiceAmount)
    {
        $this->container['invoiceAmount'] = $invoiceAmount;

        return $this;
    }

    /**
     * Gets invoiceCode
     *
     * @return string|null
     */
    public function getInvoiceCode()
    {
        return $this->container['invoiceCode'];
    }

    /**
     * Sets invoiceCode
     *
     * @param string|null $invoiceCode 发票代码
     *
     * @return self
     */
    public function setInvoiceCode($invoiceCode)
    {
        $this->container['invoiceCode'] = $invoiceCode;

        return $this;
    }

    /**
     * Gets invoiceContentList
     *
     * @return \Alipay\OpenAPISDK\Model\InvoiceContentInfo[]|null
     */
    public function getInvoiceContentList()
    {
        return $this->container['invoiceContentList'];
    }

    /**
     * Sets invoiceContentList
     *
     * @param \Alipay\OpenAPISDK\Model\InvoiceContentInfo[]|null $invoiceContentList 汇总发票详细信息(目前该字段为空)
     *
     * @return self
     */
    public function setInvoiceContentList($invoiceContentList)
    {
        $this->container['invoiceContentList'] = $invoiceContentList;

        return $this;
    }

    /**
     * Gets invoiceDate
     *
     * @return string|null
     */
    public function getInvoiceDate()
    {
        return $this->container['invoiceDate'];
    }

    /**
     * Sets invoiceDate
     *
     * @param string|null $invoiceDate 发票日期
     *
     * @return self
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->container['invoiceDate'] = $invoiceDate;

        return $this;
    }

    /**
     * Gets invoiceKind
     *
     * @return int|null
     */
    public function getInvoiceKind()
    {
        return $this->container['invoiceKind'];
    }

    /**
     * Sets invoiceKind
     *
     * @param int|null $invoiceKind 发票类型 0：增值税普通电子发票 1：增值税普通发票 2：增值税专用发票 3：增值税专用电子发票 4：财政电子发票
     *
     * @return self
     */
    public function setInvoiceKind($invoiceKind)
    {
        $this->container['invoiceKind'] = $invoiceKind;

        return $this;
    }

    /**
     * Gets invoiceMemo
     *
     * @return string|null
     */
    public function getInvoiceMemo()
    {
        return $this->container['invoiceMemo'];
    }

    /**
     * Sets invoiceMemo
     *
     * @param string|null $invoiceMemo 备注
     *
     * @return self
     */
    public function setInvoiceMemo($invoiceMemo)
    {
        $this->container['invoiceMemo'] = $invoiceMemo;

        return $this;
    }

    /**
     * Gets invoiceNo
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoiceNo'];
    }

    /**
     * Sets invoiceNo
     *
     * @param string|null $invoiceNo 发票号码
     *
     * @return self
     */
    public function setInvoiceNo($invoiceNo)
    {
        $this->container['invoiceNo'] = $invoiceNo;

        return $this;
    }

    /**
     * Gets invoiceSource
     *
     * @return string|null
     */
    public function getInvoiceSource()
    {
        return $this->container['invoiceSource'];
    }

    /**
     * Sets invoiceSource
     *
     * @param string|null $invoiceSource 发票来源，取值范围 SUMMARY_INVOICE_AUTO_OPEN 汇总开票系统自动开票，SUMMARY_INVOICE_MERCHANT_UPLOAD 汇总开票商户手动上传
     *
     * @return self
     */
    public function setInvoiceSource($invoiceSource)
    {
        $this->container['invoiceSource'] = $invoiceSource;

        return $this;
    }

    /**
     * Gets invoiceTitle
     *
     * @return string|null
     */
    public function getInvoiceTitle()
    {
        return $this->container['invoiceTitle'];
    }

    /**
     * Sets invoiceTitle
     *
     * @param string|null $invoiceTitle 发票抬头
     *
     * @return self
     */
    public function setInvoiceTitle($invoiceTitle)
    {
        $this->container['invoiceTitle'] = $invoiceTitle;

        return $this;
    }

    /**
     * Gets invoiceType
     *
     * @return string|null
     */
    public function getInvoiceType()
    {
        return $this->container['invoiceType'];
    }

    /**
     * Sets invoiceType
     *
     * @param string|null $invoiceType 发票类型(红、蓝)
     *
     * @return self
     */
    public function setInvoiceType($invoiceType)
    {
        $this->container['invoiceType'] = $invoiceType;

        return $this;
    }

    /**
     * Gets payeeAddress
     *
     * @return string|null
     */
    public function getPayeeAddress()
    {
        return $this->container['payeeAddress'];
    }

    /**
     * Sets payeeAddress
     *
     * @param string|null $payeeAddress 销售方地址
     *
     * @return self
     */
    public function setPayeeAddress($payeeAddress)
    {
        $this->container['payeeAddress'] = $payeeAddress;

        return $this;
    }

    /**
     * Gets payeeBankAccount
     *
     * @return string|null
     */
    public function getPayeeBankAccount()
    {
        return $this->container['payeeBankAccount'];
    }

    /**
     * Sets payeeBankAccount
     *
     * @param string|null $payeeBankAccount 销售方银行账号
     *
     * @return self
     */
    public function setPayeeBankAccount($payeeBankAccount)
    {
        $this->container['payeeBankAccount'] = $payeeBankAccount;

        return $this;
    }

    /**
     * Gets payeeBankName
     *
     * @return string|null
     */
    public function getPayeeBankName()
    {
        return $this->container['payeeBankName'];
    }

    /**
     * Sets payeeBankName
     *
     * @param string|null $payeeBankName 销售方银行名称
     *
     * @return self
     */
    public function setPayeeBankName($payeeBankName)
    {
        $this->container['payeeBankName'] = $payeeBankName;

        return $this;
    }

    /**
     * Gets payeeChecker
     *
     * @return string|null
     */
    public function getPayeeChecker()
    {
        return $this->container['payeeChecker'];
    }

    /**
     * Sets payeeChecker
     *
     * @param string|null $payeeChecker 复核人
     *
     * @return self
     */
    public function setPayeeChecker($payeeChecker)
    {
        $this->container['payeeChecker'] = $payeeChecker;

        return $this;
    }

    /**
     * Gets payeeMobile
     *
     * @return string|null
     */
    public function getPayeeMobile()
    {
        return $this->container['payeeMobile'];
    }

    /**
     * Sets payeeMobile
     *
     * @param string|null $payeeMobile 销售方电话
     *
     * @return self
     */
    public function setPayeeMobile($payeeMobile)
    {
        $this->container['payeeMobile'] = $payeeMobile;

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
     * @param string|null $payeeName 销售方名称
     *
     * @return self
     */
    public function setPayeeName($payeeName)
    {
        $this->container['payeeName'] = $payeeName;

        return $this;
    }

    /**
     * Gets payeeOperator
     *
     * @return string|null
     */
    public function getPayeeOperator()
    {
        return $this->container['payeeOperator'];
    }

    /**
     * Sets payeeOperator
     *
     * @param string|null $payeeOperator 开票人
     *
     * @return self
     */
    public function setPayeeOperator($payeeOperator)
    {
        $this->container['payeeOperator'] = $payeeOperator;

        return $this;
    }

    /**
     * Gets payeeReceiver
     *
     * @return string|null
     */
    public function getPayeeReceiver()
    {
        return $this->container['payeeReceiver'];
    }

    /**
     * Sets payeeReceiver
     *
     * @param string|null $payeeReceiver 收款人
     *
     * @return self
     */
    public function setPayeeReceiver($payeeReceiver)
    {
        $this->container['payeeReceiver'] = $payeeReceiver;

        return $this;
    }

    /**
     * Gets payeeRegisterNo
     *
     * @return string|null
     */
    public function getPayeeRegisterNo()
    {
        return $this->container['payeeRegisterNo'];
    }

    /**
     * Sets payeeRegisterNo
     *
     * @param string|null $payeeRegisterNo 销售方税号
     *
     * @return self
     */
    public function setPayeeRegisterNo($payeeRegisterNo)
    {
        $this->container['payeeRegisterNo'] = $payeeRegisterNo;

        return $this;
    }

    /**
     * Gets payerAddress
     *
     * @return string|null
     */
    public function getPayerAddress()
    {
        return $this->container['payerAddress'];
    }

    /**
     * Sets payerAddress
     *
     * @param string|null $payerAddress 购买方地址
     *
     * @return self
     */
    public function setPayerAddress($payerAddress)
    {
        $this->container['payerAddress'] = $payerAddress;

        return $this;
    }

    /**
     * Gets payerBankAccount
     *
     * @return string|null
     */
    public function getPayerBankAccount()
    {
        return $this->container['payerBankAccount'];
    }

    /**
     * Sets payerBankAccount
     *
     * @param string|null $payerBankAccount 购买方银行账号
     *
     * @return self
     */
    public function setPayerBankAccount($payerBankAccount)
    {
        $this->container['payerBankAccount'] = $payerBankAccount;

        return $this;
    }

    /**
     * Gets payerBankName
     *
     * @return string|null
     */
    public function getPayerBankName()
    {
        return $this->container['payerBankName'];
    }

    /**
     * Sets payerBankName
     *
     * @param string|null $payerBankName 购买方银行名称
     *
     * @return self
     */
    public function setPayerBankName($payerBankName)
    {
        $this->container['payerBankName'] = $payerBankName;

        return $this;
    }

    /**
     * Gets payerMobile
     *
     * @return string|null
     */
    public function getPayerMobile()
    {
        return $this->container['payerMobile'];
    }

    /**
     * Sets payerMobile
     *
     * @param string|null $payerMobile 购买方电话
     *
     * @return self
     */
    public function setPayerMobile($payerMobile)
    {
        $this->container['payerMobile'] = $payerMobile;

        return $this;
    }

    /**
     * Gets payerName
     *
     * @return string|null
     */
    public function getPayerName()
    {
        return $this->container['payerName'];
    }

    /**
     * Sets payerName
     *
     * @param string|null $payerName 购买方名称
     *
     * @return self
     */
    public function setPayerName($payerName)
    {
        $this->container['payerName'] = $payerName;

        return $this;
    }

    /**
     * Gets payerRegisterNo
     *
     * @return string|null
     */
    public function getPayerRegisterNo()
    {
        return $this->container['payerRegisterNo'];
    }

    /**
     * Sets payerRegisterNo
     *
     * @param string|null $payerRegisterNo 购买方税号
     *
     * @return self
     */
    public function setPayerRegisterNo($payerRegisterNo)
    {
        $this->container['payerRegisterNo'] = $payerRegisterNo;

        return $this;
    }

    /**
     * Gets sumPrice
     *
     * @return int|null
     */
    public function getSumPrice()
    {
        return $this->container['sumPrice'];
    }

    /**
     * Sets sumPrice
     *
     * @param int|null $sumPrice 不含税金额（元）
     *
     * @return self
     */
    public function setSumPrice($sumPrice)
    {
        $this->container['sumPrice'] = $sumPrice;

        return $this;
    }

    /**
     * Gets sumTax
     *
     * @return int|null
     */
    public function getSumTax()
    {
        return $this->container['sumTax'];
    }

    /**
     * Sets sumTax
     *
     * @param int|null $sumTax 合计税额（元）
     *
     * @return self
     */
    public function setSumTax($sumTax)
    {
        $this->container['sumTax'] = $sumTax;

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


