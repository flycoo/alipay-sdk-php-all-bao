<?php
/**
 * JourneyLocation
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
 * JourneyLocation Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class JourneyLocation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'JourneyLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aoiId' => 'string',
        'city' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\OrderExtInfo[]',
        'locationId' => 'string',
        'locationIdType' => 'string',
        'merchantDivisionId' => 'string',
        'merchantId' => 'string',
        'merchantPoi' => 'string',
        'name' => 'string',
        'poiId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aoiId' => null,
        'city' => null,
        'extInfo' => null,
        'locationId' => null,
        'locationIdType' => null,
        'merchantDivisionId' => null,
        'merchantId' => null,
        'merchantPoi' => null,
        'name' => null,
        'poiId' => null
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
        'aoiId' => 'aoi_id',
        'city' => 'city',
        'extInfo' => 'ext_info',
        'locationId' => 'location_id',
        'locationIdType' => 'location_id_type',
        'merchantDivisionId' => 'merchant_division_id',
        'merchantId' => 'merchant_id',
        'merchantPoi' => 'merchant_poi',
        'name' => 'name',
        'poiId' => 'poi_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aoiId' => 'setAoiId',
        'city' => 'setCity',
        'extInfo' => 'setExtInfo',
        'locationId' => 'setLocationId',
        'locationIdType' => 'setLocationIdType',
        'merchantDivisionId' => 'setMerchantDivisionId',
        'merchantId' => 'setMerchantId',
        'merchantPoi' => 'setMerchantPoi',
        'name' => 'setName',
        'poiId' => 'setPoiId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aoiId' => 'getAoiId',
        'city' => 'getCity',
        'extInfo' => 'getExtInfo',
        'locationId' => 'getLocationId',
        'locationIdType' => 'getLocationIdType',
        'merchantDivisionId' => 'getMerchantDivisionId',
        'merchantId' => 'getMerchantId',
        'merchantPoi' => 'getMerchantPoi',
        'name' => 'getName',
        'poiId' => 'getPoiId'
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
        $this->container['aoiId'] = $data['aoiId'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['locationId'] = $data['locationId'] ?? null;
        $this->container['locationIdType'] = $data['locationIdType'] ?? null;
        $this->container['merchantDivisionId'] = $data['merchantDivisionId'] ?? null;
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['merchantPoi'] = $data['merchantPoi'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['poiId'] = $data['poiId'] ?? null;
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
     * Gets aoiId
     *
     * @return string|null
     */
    public function getAoiId()
    {
        return $this->container['aoiId'];
    }

    /**
     * Sets aoiId
     *
     * @param string|null $aoiId 支付宝域内aoiId
     *
     * @return self
     */
    public function setAoiId($aoiId)
    {
        $this->container['aoiId'] = $aoiId;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city 城市名
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null $extInfo 扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets locationId
     *
     * @return string|null
     */
    public function getLocationId()
    {
        return $this->container['locationId'];
    }

    /**
     * Sets locationId
     *
     * @param string|null $locationId 支付宝侧地点id
     *
     * @return self
     */
    public function setLocationId($locationId)
    {
        $this->container['locationId'] = $locationId;

        return $this;
    }

    /**
     * Gets locationIdType
     *
     * @return string|null
     */
    public function getLocationIdType()
    {
        return $this->container['locationIdType'];
    }

    /**
     * Sets locationIdType
     *
     * @param string|null $locationIdType 地点id类型
     *
     * @return self
     */
    public function setLocationIdType($locationIdType)
    {
        $this->container['locationIdType'] = $locationIdType;

        return $this;
    }

    /**
     * Gets merchantDivisionId
     *
     * @return string|null
     */
    public function getMerchantDivisionId()
    {
        return $this->container['merchantDivisionId'];
    }

    /**
     * Sets merchantDivisionId
     *
     * @param string|null $merchantDivisionId 商户侧行政区划代码
     *
     * @return self
     */
    public function setMerchantDivisionId($merchantDivisionId)
    {
        $this->container['merchantDivisionId'] = $merchantDivisionId;

        return $this;
    }

    /**
     * Gets merchantId
     *
     * @return string|null
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string|null $merchantId (废弃)商户侧地点id
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets merchantPoi
     *
     * @return string|null
     */
    public function getMerchantPoi()
    {
        return $this->container['merchantPoi'];
    }

    /**
     * Sets merchantPoi
     *
     * @param string|null $merchantPoi 商户侧poi信息
     *
     * @return self
     */
    public function setMerchantPoi($merchantPoi)
    {
        $this->container['merchantPoi'] = $merchantPoi;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 地点名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets poiId
     *
     * @return string|null
     */
    public function getPoiId()
    {
        return $this->container['poiId'];
    }

    /**
     * Sets poiId
     *
     * @param string|null $poiId 支付宝域内poiId
     *
     * @return self
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

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


