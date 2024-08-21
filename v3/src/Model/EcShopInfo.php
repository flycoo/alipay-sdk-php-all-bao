<?php
/**
 * EcShopInfo
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
 * EcShopInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EcShopInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EcShopInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'cityId' => 'string',
        'cityName' => 'string',
        'districtId' => 'string',
        'districtName' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'mccCode1' => 'string',
        'mccCode2' => 'string',
        'mccName1' => 'string',
        'mccName2' => 'string',
        'outdoorImgUrl' => 'string',
        'poiId' => 'string',
        'provinceId' => 'string',
        'provinceName' => 'string',
        'shopName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'cityId' => null,
        'cityName' => null,
        'districtId' => null,
        'districtName' => null,
        'latitude' => null,
        'longitude' => null,
        'mccCode1' => null,
        'mccCode2' => null,
        'mccName1' => null,
        'mccName2' => null,
        'outdoorImgUrl' => null,
        'poiId' => null,
        'provinceId' => null,
        'provinceName' => null,
        'shopName' => null
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
        'address' => 'address',
        'cityId' => 'city_id',
        'cityName' => 'city_name',
        'districtId' => 'district_id',
        'districtName' => 'district_name',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'mccCode1' => 'mcc_code_1',
        'mccCode2' => 'mcc_code_2',
        'mccName1' => 'mcc_name_1',
        'mccName2' => 'mcc_name_2',
        'outdoorImgUrl' => 'outdoor_img_url',
        'poiId' => 'poi_id',
        'provinceId' => 'province_id',
        'provinceName' => 'province_name',
        'shopName' => 'shop_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'cityId' => 'setCityId',
        'cityName' => 'setCityName',
        'districtId' => 'setDistrictId',
        'districtName' => 'setDistrictName',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'mccCode1' => 'setMccCode1',
        'mccCode2' => 'setMccCode2',
        'mccName1' => 'setMccName1',
        'mccName2' => 'setMccName2',
        'outdoorImgUrl' => 'setOutdoorImgUrl',
        'poiId' => 'setPoiId',
        'provinceId' => 'setProvinceId',
        'provinceName' => 'setProvinceName',
        'shopName' => 'setShopName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'cityId' => 'getCityId',
        'cityName' => 'getCityName',
        'districtId' => 'getDistrictId',
        'districtName' => 'getDistrictName',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'mccCode1' => 'getMccCode1',
        'mccCode2' => 'getMccCode2',
        'mccName1' => 'getMccName1',
        'mccName2' => 'getMccName2',
        'outdoorImgUrl' => 'getOutdoorImgUrl',
        'poiId' => 'getPoiId',
        'provinceId' => 'getProvinceId',
        'provinceName' => 'getProvinceName',
        'shopName' => 'getShopName'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['cityId'] = $data['cityId'] ?? null;
        $this->container['cityName'] = $data['cityName'] ?? null;
        $this->container['districtId'] = $data['districtId'] ?? null;
        $this->container['districtName'] = $data['districtName'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['mccCode1'] = $data['mccCode1'] ?? null;
        $this->container['mccCode2'] = $data['mccCode2'] ?? null;
        $this->container['mccName1'] = $data['mccName1'] ?? null;
        $this->container['mccName2'] = $data['mccName2'] ?? null;
        $this->container['outdoorImgUrl'] = $data['outdoorImgUrl'] ?? null;
        $this->container['poiId'] = $data['poiId'] ?? null;
        $this->container['provinceId'] = $data['provinceId'] ?? null;
        $this->container['provinceName'] = $data['provinceName'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 门店地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets cityId
     *
     * @return string|null
     */
    public function getCityId()
    {
        return $this->container['cityId'];
    }

    /**
     * Sets cityId
     *
     * @param string|null $cityId 城市编码
     *
     * @return self
     */
    public function setCityId($cityId)
    {
        $this->container['cityId'] = $cityId;

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
     * @param string|null $cityName 城市名称
     *
     * @return self
     */
    public function setCityName($cityName)
    {
        $this->container['cityName'] = $cityName;

        return $this;
    }

    /**
     * Gets districtId
     *
     * @return string|null
     */
    public function getDistrictId()
    {
        return $this->container['districtId'];
    }

    /**
     * Sets districtId
     *
     * @param string|null $districtId 区编码
     *
     * @return self
     */
    public function setDistrictId($districtId)
    {
        $this->container['districtId'] = $districtId;

        return $this;
    }

    /**
     * Gets districtName
     *
     * @return string|null
     */
    public function getDistrictName()
    {
        return $this->container['districtName'];
    }

    /**
     * Sets districtName
     *
     * @param string|null $districtName 区名称
     *
     * @return self
     */
    public function setDistrictName($districtName)
    {
        $this->container['districtName'] = $districtName;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 纬度
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 经度
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets mccCode1
     *
     * @return string|null
     */
    public function getMccCode1()
    {
        return $this->container['mccCode1'];
    }

    /**
     * Sets mccCode1
     *
     * @param string|null $mccCode1 一级mcc编码
     *
     * @return self
     */
    public function setMccCode1($mccCode1)
    {
        $this->container['mccCode1'] = $mccCode1;

        return $this;
    }

    /**
     * Gets mccCode2
     *
     * @return string|null
     */
    public function getMccCode2()
    {
        return $this->container['mccCode2'];
    }

    /**
     * Sets mccCode2
     *
     * @param string|null $mccCode2 二级mcc编码
     *
     * @return self
     */
    public function setMccCode2($mccCode2)
    {
        $this->container['mccCode2'] = $mccCode2;

        return $this;
    }

    /**
     * Gets mccName1
     *
     * @return string|null
     */
    public function getMccName1()
    {
        return $this->container['mccName1'];
    }

    /**
     * Sets mccName1
     *
     * @param string|null $mccName1 一级mcc名称
     *
     * @return self
     */
    public function setMccName1($mccName1)
    {
        $this->container['mccName1'] = $mccName1;

        return $this;
    }

    /**
     * Gets mccName2
     *
     * @return string|null
     */
    public function getMccName2()
    {
        return $this->container['mccName2'];
    }

    /**
     * Sets mccName2
     *
     * @param string|null $mccName2 二级mcc名称
     *
     * @return self
     */
    public function setMccName2($mccName2)
    {
        $this->container['mccName2'] = $mccName2;

        return $this;
    }

    /**
     * Gets outdoorImgUrl
     *
     * @return string|null
     */
    public function getOutdoorImgUrl()
    {
        return $this->container['outdoorImgUrl'];
    }

    /**
     * Sets outdoorImgUrl
     *
     * @param string|null $outdoorImgUrl 门头照地址
     *
     * @return self
     */
    public function setOutdoorImgUrl($outdoorImgUrl)
    {
        $this->container['outdoorImgUrl'] = $outdoorImgUrl;

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
     * @param string|null $poiId 高德poiId
     *
     * @return self
     */
    public function setPoiId($poiId)
    {
        $this->container['poiId'] = $poiId;

        return $this;
    }

    /**
     * Gets provinceId
     *
     * @return string|null
     */
    public function getProvinceId()
    {
        return $this->container['provinceId'];
    }

    /**
     * Sets provinceId
     *
     * @param string|null $provinceId 省份编码
     *
     * @return self
     */
    public function setProvinceId($provinceId)
    {
        $this->container['provinceId'] = $provinceId;

        return $this;
    }

    /**
     * Gets provinceName
     *
     * @return string|null
     */
    public function getProvinceName()
    {
        return $this->container['provinceName'];
    }

    /**
     * Sets provinceName
     *
     * @param string|null $provinceName 省份名称
     *
     * @return self
     */
    public function setProvinceName($provinceName)
    {
        $this->container['provinceName'] = $provinceName;

        return $this;
    }

    /**
     * Gets shopName
     *
     * @return string|null
     */
    public function getShopName()
    {
        return $this->container['shopName'];
    }

    /**
     * Sets shopName
     *
     * @param string|null $shopName 门店名称
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

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


