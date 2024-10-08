<?php
/**
 * AlipayEbppInvoiceTaxnoBatchqueryModel
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
 * AlipayEbppInvoiceTaxnoBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceTaxnoBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceTaxnoBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enableTradeOut' => 'string',
        'endInvoiceDate' => 'string',
        'invoiceKindList' => 'string[]',
        'limitSize' => 'int',
        'pageNum' => 'int',
        'scene' => 'string',
        'startInvoiceDate' => 'string',
        'taxNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enableTradeOut' => null,
        'endInvoiceDate' => null,
        'invoiceKindList' => null,
        'limitSize' => null,
        'pageNum' => null,
        'scene' => null,
        'startInvoiceDate' => null,
        'taxNo' => null
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
        'enableTradeOut' => 'enable_trade_out',
        'endInvoiceDate' => 'end_invoice_date',
        'invoiceKindList' => 'invoice_kind_list',
        'limitSize' => 'limit_size',
        'pageNum' => 'page_num',
        'scene' => 'scene',
        'startInvoiceDate' => 'start_invoice_date',
        'taxNo' => 'tax_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enableTradeOut' => 'setEnableTradeOut',
        'endInvoiceDate' => 'setEndInvoiceDate',
        'invoiceKindList' => 'setInvoiceKindList',
        'limitSize' => 'setLimitSize',
        'pageNum' => 'setPageNum',
        'scene' => 'setScene',
        'startInvoiceDate' => 'setStartInvoiceDate',
        'taxNo' => 'setTaxNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enableTradeOut' => 'getEnableTradeOut',
        'endInvoiceDate' => 'getEndInvoiceDate',
        'invoiceKindList' => 'getInvoiceKindList',
        'limitSize' => 'getLimitSize',
        'pageNum' => 'getPageNum',
        'scene' => 'getScene',
        'startInvoiceDate' => 'getStartInvoiceDate',
        'taxNo' => 'getTaxNo'
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
        $this->container['enableTradeOut'] = $data['enableTradeOut'] ?? null;
        $this->container['endInvoiceDate'] = $data['endInvoiceDate'] ?? null;
        $this->container['invoiceKindList'] = $data['invoiceKindList'] ?? null;
        $this->container['limitSize'] = $data['limitSize'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['startInvoiceDate'] = $data['startInvoiceDate'] ?? null;
        $this->container['taxNo'] = $data['taxNo'] ?? null;
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
     * Gets enableTradeOut
     *
     * @return string|null
     */
    public function getEnableTradeOut()
    {
        return $this->container['enableTradeOut'];
    }

    /**
     * Sets enableTradeOut
     *
     * @param string|null $enableTradeOut 默认值为false。true为输出交易信息，false为不输出交易信息。
     *
     * @return self
     */
    public function setEnableTradeOut($enableTradeOut)
    {
        $this->container['enableTradeOut'] = $enableTradeOut;

        return $this;
    }

    /**
     * Gets endInvoiceDate
     *
     * @return string|null
     */
    public function getEndInvoiceDate()
    {
        return $this->container['endInvoiceDate'];
    }

    /**
     * Sets endInvoiceDate
     *
     * @param string|null $endInvoiceDate 查询结束时间，精确到天（按开票日期查询） start_invoice_date和end_invoice_date传值要求 1.同时为空时，返回最近半年200条数据 2.必须同时为空 或 同时不为空 3.结束日期不能大于当前日期 4.开始时间和结束时间跨度不能超过6个月
     *
     * @return self
     */
    public function setEndInvoiceDate($endInvoiceDate)
    {
        $this->container['endInvoiceDate'] = $endInvoiceDate;

        return $this;
    }

    /**
     * Gets invoiceKindList
     *
     * @return string[]|null
     */
    public function getInvoiceKindList()
    {
        return $this->container['invoiceKindList'];
    }

    /**
     * Sets invoiceKindList
     *
     * @param string[]|null $invoiceKindList 查询票种列表。枚举值如下： *PLAIN：增值税电子普通发票； *SPECIAL：增值税专用发票； *ALL_ELECTRONIC_GENERAL： \"电子发票（普通发票）; *ALL_ELECTRONIC_SPECIAL： \"电子发票（专用发票）; *PLAIN_INVOICE：增值税普通发票； *PAPER_INVOICE：增值税普通发票（卷式）； *SALSE_INVOICE：机动车销售统一发票。
     *
     * @return self
     */
    public function setInvoiceKindList($invoiceKindList)
    {
        $this->container['invoiceKindList'] = $invoiceKindList;

        return $this;
    }

    /**
     * Gets limitSize
     *
     * @return int|null
     */
    public function getLimitSize()
    {
        return $this->container['limitSize'];
    }

    /**
     * Sets limitSize
     *
     * @param int|null $limitSize 查询结果上限笔数，最大值20
     *
     * @return self
     */
    public function setLimitSize($limitSize)
    {
        $this->container['limitSize'] = $limitSize;

        return $this;
    }

    /**
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 当前页码，为空时默认第一页
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets scene
     *
     * @return string|null
     */
    public function getScene()
    {
        return $this->container['scene'];
    }

    /**
     * Sets scene
     *
     * @param string|null $scene 发票要素获取应用场景。<a href=\"https://opendocs.alipay.com/open/10691/bv8s88\">\"拉\"模式报销</a> 固定为 INVOICE_EXPENSE 表示发票报销。
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets startInvoiceDate
     *
     * @return string|null
     */
    public function getStartInvoiceDate()
    {
        return $this->container['startInvoiceDate'];
    }

    /**
     * Sets startInvoiceDate
     *
     * @param string|null $startInvoiceDate 查询起始时间，精确到天（按开票日期查询） start_invoice_date和end_invoice_date传值要求 1.同时为空时，返回最近半年200条数据 2.必须同时为空 或 同时不为空 3.结束日期不能大于当前日期 4.开始时间和结束时间跨度不能超过6个月
     *
     * @return self
     */
    public function setStartInvoiceDate($startInvoiceDate)
    {
        $this->container['startInvoiceDate'] = $startInvoiceDate;

        return $this;
    }

    /**
     * Gets taxNo
     *
     * @return string|null
     */
    public function getTaxNo()
    {
        return $this->container['taxNo'];
    }

    /**
     * Sets taxNo
     *
     * @param string|null $taxNo 企业税号
     *
     * @return self
     */
    public function setTaxNo($taxNo)
    {
        $this->container['taxNo'] = $taxNo;

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


