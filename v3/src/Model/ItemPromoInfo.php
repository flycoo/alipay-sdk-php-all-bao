<?php
/**
 * ItemPromoInfo
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
 * ItemPromoInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemPromoInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ItemPromoInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'itemConsultList' => '\Alipay\OpenAPISDK\Model\ItemConsultInfo[]',
        'itemCoverPic' => 'string',
        'itemDesc' => 'string',
        'itemDetailPicList' => 'string[]',
        'itemName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'itemConsultList' => null,
        'itemCoverPic' => null,
        'itemDesc' => null,
        'itemDetailPicList' => null,
        'itemName' => null
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
        'itemConsultList' => 'item_consult_list',
        'itemCoverPic' => 'item_cover_pic',
        'itemDesc' => 'item_desc',
        'itemDetailPicList' => 'item_detail_pic_list',
        'itemName' => 'item_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemConsultList' => 'setItemConsultList',
        'itemCoverPic' => 'setItemCoverPic',
        'itemDesc' => 'setItemDesc',
        'itemDetailPicList' => 'setItemDetailPicList',
        'itemName' => 'setItemName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemConsultList' => 'getItemConsultList',
        'itemCoverPic' => 'getItemCoverPic',
        'itemDesc' => 'getItemDesc',
        'itemDetailPicList' => 'getItemDetailPicList',
        'itemName' => 'getItemName'
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
        $this->container['itemConsultList'] = $data['itemConsultList'] ?? null;
        $this->container['itemCoverPic'] = $data['itemCoverPic'] ?? null;
        $this->container['itemDesc'] = $data['itemDesc'] ?? null;
        $this->container['itemDetailPicList'] = $data['itemDetailPicList'] ?? null;
        $this->container['itemName'] = $data['itemName'] ?? null;
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
     * Gets itemConsultList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemConsultInfo[]|null
     */
    public function getItemConsultList()
    {
        return $this->container['itemConsultList'];
    }

    /**
     * Sets itemConsultList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemConsultInfo[]|null $itemConsultList 商品咨询列表
     *
     * @return self
     */
    public function setItemConsultList($itemConsultList)
    {
        $this->container['itemConsultList'] = $itemConsultList;

        return $this;
    }

    /**
     * Gets itemCoverPic
     *
     * @return string|null
     */
    public function getItemCoverPic()
    {
        return $this->container['itemCoverPic'];
    }

    /**
     * Sets itemCoverPic
     *
     * @param string|null $itemCoverPic 单品封面图
     *
     * @return self
     */
    public function setItemCoverPic($itemCoverPic)
    {
        $this->container['itemCoverPic'] = $itemCoverPic;

        return $this;
    }

    /**
     * Gets itemDesc
     *
     * @return string|null
     */
    public function getItemDesc()
    {
        return $this->container['itemDesc'];
    }

    /**
     * Sets itemDesc
     *
     * @param string|null $itemDesc 单品描述
     *
     * @return self
     */
    public function setItemDesc($itemDesc)
    {
        $this->container['itemDesc'] = $itemDesc;

        return $this;
    }

    /**
     * Gets itemDetailPicList
     *
     * @return string[]|null
     */
    public function getItemDetailPicList()
    {
        return $this->container['itemDetailPicList'];
    }

    /**
     * Sets itemDetailPicList
     *
     * @param string[]|null $itemDetailPicList 单品详情图列表
     *
     * @return self
     */
    public function setItemDetailPicList($itemDetailPicList)
    {
        $this->container['itemDetailPicList'] = $itemDetailPicList;

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
     * @param string|null $itemName 单品名称
     *
     * @return self
     */
    public function setItemName($itemName)
    {
        $this->container['itemName'] = $itemName;

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


