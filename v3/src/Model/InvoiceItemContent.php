<?php
/**
 * InvoiceItemContent
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
 * InvoiceItemContent Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoiceItemContent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoiceItemContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemAmount' => 'string',
        'itemName' => 'string',
        'itemNo' => 'string',
        'itemPrice' => 'string',
        'itemQuantity' => 'int',
        'itemSumPrice' => 'string',
        'itemTaxPrice' => 'string',
        'itemTaxRate' => 'string',
        'itemUnit' => 'string',
        'rowType' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemAmount' => null,
        'itemName' => null,
        'itemNo' => null,
        'itemPrice' => null,
        'itemQuantity' => null,
        'itemSumPrice' => null,
        'itemTaxPrice' => null,
        'itemTaxRate' => null,
        'itemUnit' => null,
        'rowType' => null
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
        'itemAmount' => 'item_amount',
        'itemName' => 'item_name',
        'itemNo' => 'item_no',
        'itemPrice' => 'item_price',
        'itemQuantity' => 'item_quantity',
        'itemSumPrice' => 'item_sum_price',
        'itemTaxPrice' => 'item_tax_price',
        'itemTaxRate' => 'item_tax_rate',
        'itemUnit' => 'item_unit',
        'rowType' => 'row_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemAmount' => 'setItemAmount',
        'itemName' => 'setItemName',
        'itemNo' => 'setItemNo',
        'itemPrice' => 'setItemPrice',
        'itemQuantity' => 'setItemQuantity',
        'itemSumPrice' => 'setItemSumPrice',
        'itemTaxPrice' => 'setItemTaxPrice',
        'itemTaxRate' => 'setItemTaxRate',
        'itemUnit' => 'setItemUnit',
        'rowType' => 'setRowType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemAmount' => 'getItemAmount',
        'itemName' => 'getItemName',
        'itemNo' => 'getItemNo',
        'itemPrice' => 'getItemPrice',
        'itemQuantity' => 'getItemQuantity',
        'itemSumPrice' => 'getItemSumPrice',
        'itemTaxPrice' => 'getItemTaxPrice',
        'itemTaxRate' => 'getItemTaxRate',
        'itemUnit' => 'getItemUnit',
        'rowType' => 'getRowType'
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
        $this->container['itemAmount'] = $data['itemAmount'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
        $this->container['itemNo'] = $data['itemNo'] ?? null;
        $this->container['itemPrice'] = $data['itemPrice'] ?? null;
        $this->container['itemQuantity'] = $data['itemQuantity'] ?? null;
        $this->container['itemSumPrice'] = $data['itemSumPrice'] ?? null;
        $this->container['itemTaxPrice'] = $data['itemTaxPrice'] ?? null;
        $this->container['itemTaxRate'] = $data['itemTaxRate'] ?? null;
        $this->container['itemUnit'] = $data['itemUnit'] ?? null;
        $this->container['rowType'] = $data['rowType'] ?? null;
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
     * Gets itemAmount
     *
     * @return string|null
     */
    public function getItemAmount()
    {
        return $this->container['itemAmount'];
    }

    /**
     * Sets itemAmount
     *
     * @param string|null $itemAmount 价税合计。(等于sumPrice和tax之和)
     *
     * @return self
     */
    public function setItemAmount($itemAmount)
    {
        $this->container['itemAmount'] = $itemAmount;

        return $this;
    }

    /**
     * Gets itemName
     *
     * @return string|null
     */
    public function getItemName()
    {
        return $this->container['itemName'];
    }

    /**
     * Sets itemName
     *
     * @param string|null $itemName 发票项目名称（或商品名称）
     *
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

        return $this;
    }

    /**
     * Gets itemNo
     *
     * @return string|null
     */
    public function getItemNo()
    {
        return $this->container['itemNo'];
    }

    /**
     * Sets itemNo
     *
     * @param string|null $itemNo 商品编号
     *
     * @return self
     */
    public function setItemNo($itemNo)
    {
        $this->container['itemNo'] = $itemNo;

        return $this;
    }

    /**
     * Gets itemPrice
     *
     * @return string|null
     */
    public function getItemPrice()
    {
        return $this->container['itemPrice'];
    }

    /**
     * Sets itemPrice
     *
     * @param string|null $itemPrice 单价，格式：100.00。新版电子发票，折扣行此参数不能传，非折扣行必传
     *
     * @return self
     */
    public function setItemPrice($itemPrice)
    {
        $this->container['itemPrice'] = $itemPrice;

        return $this;
    }

    /**
     * Gets itemQuantity
     *
     * @return int|null
     */
    public function getItemQuantity()
    {
        return $this->container['itemQuantity'];
    }

    /**
     * Sets itemQuantity
     *
     * @param int|null $itemQuantity 数量。新版电子发票，折扣行此参数不能传，非折扣行必传
     *
     * @return self
     */
    public function setItemQuantity($itemQuantity)
    {
        $this->container['itemQuantity'] = $itemQuantity;

        return $this;
    }

    /**
     * Gets itemSumPrice
     *
     * @return string|null
     */
    public function getItemSumPrice()
    {
        return $this->container['itemSumPrice'];
    }

    /**
     * Sets itemSumPrice
     *
     * @param string|null $itemSumPrice 单项总价，格式：100.00
     *
     * @return self
     */
    public function setItemSumPrice($itemSumPrice)
    {
        $this->container['itemSumPrice'] = $itemSumPrice;

        return $this;
    }

    /**
     * Gets itemTaxPrice
     *
     * @return string|null
     */
    public function getItemTaxPrice()
    {
        return $this->container['itemTaxPrice'];
    }

    /**
     * Sets itemTaxPrice
     *
     * @param string|null $itemTaxPrice 税额
     *
     * @return self
     */
    public function setItemTaxPrice($itemTaxPrice)
    {
        $this->container['itemTaxPrice'] = $itemTaxPrice;

        return $this;
    }

    /**
     * Gets itemTaxRate
     *
     * @return string|null
     */
    public function getItemTaxRate()
    {
        return $this->container['itemTaxRate'];
    }

    /**
     * Sets itemTaxRate
     *
     * @param string|null $itemTaxRate 税率
     *
     * @return self
     */
    public function setItemTaxRate($itemTaxRate)
    {
        $this->container['itemTaxRate'] = $itemTaxRate;

        return $this;
    }

    /**
     * Gets itemUnit
     *
     * @return string|null
     */
    public function getItemUnit()
    {
        return $this->container['itemUnit'];
    }

    /**
     * Sets itemUnit
     *
     * @param string|null $itemUnit 台
     *
     * @return self
     */
    public function setItemUnit($itemUnit)
    {
        $this->container['itemUnit'] = $itemUnit;

        return $this;
    }

    /**
     * Gets rowType
     *
     * @return int|null
     */
    public function getRowType()
    {
        return $this->container['rowType'];
    }

    /**
     * Sets rowType
     *
     * @param int|null $rowType 发票行性质。0表示正常行，1表示折扣行，2表示被折扣行。比如充电器单价100元，折扣10元，则明细为2行，充电器行性质为2，折扣行性质为1。如果充电器没有折扣，则值应为0
     *
     * @return self
     */
    public function setRowType($rowType)
    {
        $this->container['rowType'] = $rowType;

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


