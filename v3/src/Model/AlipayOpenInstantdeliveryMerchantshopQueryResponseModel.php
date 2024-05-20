<?php
/**
 * AlipayOpenInstantdeliveryMerchantshopQueryResponseModel
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
 * AlipayOpenInstantdeliveryMerchantshopQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenInstantdeliveryMerchantshopQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenInstantdeliveryMerchantshopQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contactName' => 'string',
        'detailAddress' => 'string',
        'enterpriseCity' => 'string',
        'enterpriseDistrict' => 'string',
        'enterpriseProvince' => 'string',
        'latitude' => 'string',
        'logisticsShopStatus' => '\Alipay\OpenAPISDK\Model\LogisticsShopStatusDTO[]',
        'longitude' => 'string',
        'phone' => 'string',
        'poiid' => 'string',
        'shopCategory' => 'string',
        'shopName' => 'string',
        'shopNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contactName' => null,
        'detailAddress' => null,
        'enterpriseCity' => null,
        'enterpriseDistrict' => null,
        'enterpriseProvince' => null,
        'latitude' => null,
        'logisticsShopStatus' => null,
        'longitude' => null,
        'phone' => null,
        'poiid' => null,
        'shopCategory' => null,
        'shopName' => null,
        'shopNo' => null
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
        'contactName' => 'contact_name',
        'detailAddress' => 'detail_address',
        'enterpriseCity' => 'enterprise_city',
        'enterpriseDistrict' => 'enterprise_district',
        'enterpriseProvince' => 'enterprise_province',
        'latitude' => 'latitude',
        'logisticsShopStatus' => 'logistics_shop_status',
        'longitude' => 'longitude',
        'phone' => 'phone',
        'poiid' => 'poiid',
        'shopCategory' => 'shop_category',
        'shopName' => 'shop_name',
        'shopNo' => 'shop_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contactName' => 'setContactName',
        'detailAddress' => 'setDetailAddress',
        'enterpriseCity' => 'setEnterpriseCity',
        'enterpriseDistrict' => 'setEnterpriseDistrict',
        'enterpriseProvince' => 'setEnterpriseProvince',
        'latitude' => 'setLatitude',
        'logisticsShopStatus' => 'setLogisticsShopStatus',
        'longitude' => 'setLongitude',
        'phone' => 'setPhone',
        'poiid' => 'setPoiid',
        'shopCategory' => 'setShopCategory',
        'shopName' => 'setShopName',
        'shopNo' => 'setShopNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contactName' => 'getContactName',
        'detailAddress' => 'getDetailAddress',
        'enterpriseCity' => 'getEnterpriseCity',
        'enterpriseDistrict' => 'getEnterpriseDistrict',
        'enterpriseProvince' => 'getEnterpriseProvince',
        'latitude' => 'getLatitude',
        'logisticsShopStatus' => 'getLogisticsShopStatus',
        'longitude' => 'getLongitude',
        'phone' => 'getPhone',
        'poiid' => 'getPoiid',
        'shopCategory' => 'getShopCategory',
        'shopName' => 'getShopName',
        'shopNo' => 'getShopNo'
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
        $this->container['contactName'] = $data['contactName'] ?? null;
        $this->container['detailAddress'] = $data['detailAddress'] ?? null;
        $this->container['enterpriseCity'] = $data['enterpriseCity'] ?? null;
        $this->container['enterpriseDistrict'] = $data['enterpriseDistrict'] ?? null;
        $this->container['enterpriseProvince'] = $data['enterpriseProvince'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['logisticsShopStatus'] = $data['logisticsShopStatus'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
        $this->container['poiid'] = $data['poiid'] ?? null;
        $this->container['shopCategory'] = $data['shopCategory'] ?? null;
        $this->container['shopName'] = $data['shopName'] ?? null;
        $this->container['shopNo'] = $data['shopNo'] ?? null;
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
     * Gets contactName
     *
     * @return string|null
     */
    public function getContactName()
    {
        return $this->container['contactName'];
    }

    /**
     * Sets contactName
     *
     * @param string|null $contactName 联系人姓名
     *
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->container['contactName'] = $contactName;

        return $this;
    }

    /**
     * Gets detailAddress
     *
     * @return string|null
     */
    public function getDetailAddress()
    {
        return $this->container['detailAddress'];
    }

    /**
     * Sets detailAddress
     *
     * @param string|null $detailAddress 地址。商户详细经营地址或人员所在地点。
     *
     * @return self
     */
    public function setDetailAddress($detailAddress)
    {
        $this->container['detailAddress'] = $detailAddress;

        return $this;
    }

    /**
     * Gets enterpriseCity
     *
     * @return string|null
     */
    public function getEnterpriseCity()
    {
        return $this->container['enterpriseCity'];
    }

    /**
     * Sets enterpriseCity
     *
     * @param string|null $enterpriseCity 城市编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setEnterpriseCity($enterpriseCity)
    {
        $this->container['enterpriseCity'] = $enterpriseCity;

        return $this;
    }

    /**
     * Gets enterpriseDistrict
     *
     * @return string|null
     */
    public function getEnterpriseDistrict()
    {
        return $this->container['enterpriseDistrict'];
    }

    /**
     * Sets enterpriseDistrict
     *
     * @param string|null $enterpriseDistrict 区县编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setEnterpriseDistrict($enterpriseDistrict)
    {
        $this->container['enterpriseDistrict'] = $enterpriseDistrict;

        return $this;
    }

    /**
     * Gets enterpriseProvince
     *
     * @return string|null
     */
    public function getEnterpriseProvince()
    {
        return $this->container['enterpriseProvince'];
    }

    /**
     * Sets enterpriseProvince
     *
     * @param string|null $enterpriseProvince 省份编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setEnterpriseProvince($enterpriseProvince)
    {
        $this->container['enterpriseProvince'] = $enterpriseProvince;

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
     * @param string|null $latitude 纬度，浮点型,小数点后最多保留6位 如需要录入经纬度，请以高德坐标系为准，录入时请确保经纬度参数准确。高德经纬度查询：http://lbs.amap.com/console/show/picker
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets logisticsShopStatus
     *
     * @return \Alipay\OpenAPISDK\Model\LogisticsShopStatusDTO[]|null
     */
    public function getLogisticsShopStatus()
    {
        return $this->container['logisticsShopStatus'];
    }

    /**
     * Sets logisticsShopStatus
     *
     * @param \Alipay\OpenAPISDK\Model\LogisticsShopStatusDTO[]|null $logisticsShopStatus 在配送公司的门店状态。
     *
     * @return self
     */
    public function setLogisticsShopStatus($logisticsShopStatus)
    {
        $this->container['logisticsShopStatus'] = $logisticsShopStatus;

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
     * @param string|null $longitude 经度，浮点型, 小数点后最多保留6位。 如需要录入经纬度，请以高德坐标系为准，录入时请确保经纬度参数准确。高德经纬度查询：http://lbs.amap.com/console/show/picker
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone 联系人电话/手机号。
     *
     * @return self
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets poiid
     *
     * @return string|null
     */
    public function getPoiid()
    {
        return $this->container['poiid'];
    }

    /**
     * Sets poiid
     *
     * @param string|null $poiid 高德poiid
     *
     * @return self
     */
    public function setPoiid($poiid)
    {
        $this->container['poiid'] = $poiid;

        return $this;
    }

    /**
     * Gets shopCategory
     *
     * @return string|null
     */
    public function getShopCategory()
    {
        return $this->container['shopCategory'];
    }

    /**
     * Sets shopCategory
     *
     * @param string|null $shopCategory 店铺类目，取值参见文件https://mif-pub.alipayobjects.com/ShopCategory.xlsx 中的三级门店类目
     *
     * @return self
     */
    public function setShopCategory($shopCategory)
    {
        $this->container['shopCategory'] = $shopCategory;

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
     * @param string|null $shopName 门店名称，最长不超过256个字符
     *
     * @return self
     */
    public function setShopName($shopName)
    {
        $this->container['shopName'] = $shopName;

        return $this;
    }

    /**
     * Gets shopNo
     *
     * @return string|null
     */
    public function getShopNo()
    {
        return $this->container['shopNo'];
    }

    /**
     * Sets shopNo
     *
     * @param string|null $shopNo 商家门店编码。
     *
     * @return self
     */
    public function setShopNo($shopNo)
    {
        $this->container['shopNo'] = $shopNo;

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


