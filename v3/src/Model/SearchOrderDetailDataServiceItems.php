<?php
/**
 * SearchOrderDetailDataServiceItems
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
 * SearchOrderDetailDataServiceItems Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchOrderDetailDataServiceItems implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchOrderDetailDataServiceItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'areaCodes' => 'string',
        'carrierCode' => 'string',
        'carrierList' => 'string',
        'categoryAttributeValue' => 'string',
        'categoryCode' => 'string',
        'categoryIds' => 'string',
        'channelType' => 'string',
        'desc' => 'string',
        'img' => 'string',
        'keyWord' => 'string',
        'keyWordList' => 'string',
        'logo' => 'string',
        'name' => 'string',
        'parentServiceCode' => 'string',
        'region' => 'string',
        'servSearchCatalogs' => 'string',
        'servSearchKeywords' => 'string',
        'serviceCode' => 'string',
        'serviceName' => 'string',
        'serviceTimeEnd' => 'string',
        'serviceTimeStart' => 'string',
        'shortDesc' => 'string',
        'specCode' => 'string',
        'templateId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'areaCodes' => null,
        'carrierCode' => null,
        'carrierList' => null,
        'categoryAttributeValue' => null,
        'categoryCode' => null,
        'categoryIds' => null,
        'channelType' => null,
        'desc' => null,
        'img' => null,
        'keyWord' => null,
        'keyWordList' => null,
        'logo' => null,
        'name' => null,
        'parentServiceCode' => null,
        'region' => null,
        'servSearchCatalogs' => null,
        'servSearchKeywords' => null,
        'serviceCode' => null,
        'serviceName' => null,
        'serviceTimeEnd' => null,
        'serviceTimeStart' => null,
        'shortDesc' => null,
        'specCode' => null,
        'templateId' => null
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
        'areaCodes' => 'area_codes',
        'carrierCode' => 'carrier_code',
        'carrierList' => 'carrier_list',
        'categoryAttributeValue' => 'category_attribute_value',
        'categoryCode' => 'category_code',
        'categoryIds' => 'category_ids',
        'channelType' => 'channel_type',
        'desc' => 'desc',
        'img' => 'img',
        'keyWord' => 'key_word',
        'keyWordList' => 'key_word_list',
        'logo' => 'logo',
        'name' => 'name',
        'parentServiceCode' => 'parent_service_code',
        'region' => 'region',
        'servSearchCatalogs' => 'serv_search_catalogs',
        'servSearchKeywords' => 'serv_search_keywords',
        'serviceCode' => 'service_code',
        'serviceName' => 'service_name',
        'serviceTimeEnd' => 'service_time_end',
        'serviceTimeStart' => 'service_time_start',
        'shortDesc' => 'short_desc',
        'specCode' => 'spec_code',
        'templateId' => 'template_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areaCodes' => 'setAreaCodes',
        'carrierCode' => 'setCarrierCode',
        'carrierList' => 'setCarrierList',
        'categoryAttributeValue' => 'setCategoryAttributeValue',
        'categoryCode' => 'setCategoryCode',
        'categoryIds' => 'setCategoryIds',
        'channelType' => 'setChannelType',
        'desc' => 'setDesc',
        'img' => 'setImg',
        'keyWord' => 'setKeyWord',
        'keyWordList' => 'setKeyWordList',
        'logo' => 'setLogo',
        'name' => 'setName',
        'parentServiceCode' => 'setParentServiceCode',
        'region' => 'setRegion',
        'servSearchCatalogs' => 'setServSearchCatalogs',
        'servSearchKeywords' => 'setServSearchKeywords',
        'serviceCode' => 'setServiceCode',
        'serviceName' => 'setServiceName',
        'serviceTimeEnd' => 'setServiceTimeEnd',
        'serviceTimeStart' => 'setServiceTimeStart',
        'shortDesc' => 'setShortDesc',
        'specCode' => 'setSpecCode',
        'templateId' => 'setTemplateId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areaCodes' => 'getAreaCodes',
        'carrierCode' => 'getCarrierCode',
        'carrierList' => 'getCarrierList',
        'categoryAttributeValue' => 'getCategoryAttributeValue',
        'categoryCode' => 'getCategoryCode',
        'categoryIds' => 'getCategoryIds',
        'channelType' => 'getChannelType',
        'desc' => 'getDesc',
        'img' => 'getImg',
        'keyWord' => 'getKeyWord',
        'keyWordList' => 'getKeyWordList',
        'logo' => 'getLogo',
        'name' => 'getName',
        'parentServiceCode' => 'getParentServiceCode',
        'region' => 'getRegion',
        'servSearchCatalogs' => 'getServSearchCatalogs',
        'servSearchKeywords' => 'getServSearchKeywords',
        'serviceCode' => 'getServiceCode',
        'serviceName' => 'getServiceName',
        'serviceTimeEnd' => 'getServiceTimeEnd',
        'serviceTimeStart' => 'getServiceTimeStart',
        'shortDesc' => 'getShortDesc',
        'specCode' => 'getSpecCode',
        'templateId' => 'getTemplateId'
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
        $this->container['areaCodes'] = $data['areaCodes'] ?? null;
        $this->container['carrierCode'] = $data['carrierCode'] ?? null;
        $this->container['carrierList'] = $data['carrierList'] ?? null;
        $this->container['categoryAttributeValue'] = $data['categoryAttributeValue'] ?? null;
        $this->container['categoryCode'] = $data['categoryCode'] ?? null;
        $this->container['categoryIds'] = $data['categoryIds'] ?? null;
        $this->container['channelType'] = $data['channelType'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['img'] = $data['img'] ?? null;
        $this->container['keyWord'] = $data['keyWord'] ?? null;
        $this->container['keyWordList'] = $data['keyWordList'] ?? null;
        $this->container['logo'] = $data['logo'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['parentServiceCode'] = $data['parentServiceCode'] ?? null;
        $this->container['region'] = $data['region'] ?? null;
        $this->container['servSearchCatalogs'] = $data['servSearchCatalogs'] ?? null;
        $this->container['servSearchKeywords'] = $data['servSearchKeywords'] ?? null;
        $this->container['serviceCode'] = $data['serviceCode'] ?? null;
        $this->container['serviceName'] = $data['serviceName'] ?? null;
        $this->container['serviceTimeEnd'] = $data['serviceTimeEnd'] ?? null;
        $this->container['serviceTimeStart'] = $data['serviceTimeStart'] ?? null;
        $this->container['shortDesc'] = $data['shortDesc'] ?? null;
        $this->container['specCode'] = $data['specCode'] ?? null;
        $this->container['templateId'] = $data['templateId'] ?? null;
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
     * Gets areaCodes
     *
     * @return string|null
     */
    public function getAreaCodes()
    {
        return $this->container['areaCodes'];
    }

    /**
     * Sets areaCodes
     *
     * @param string|null $areaCodes 服务工单详情area_codes
     *
     * @return self
     */
    public function setAreaCodes($areaCodes)
    {
        $this->container['areaCodes'] = $areaCodes;

        return $this;
    }

    /**
     * Gets carrierCode
     *
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->container['carrierCode'];
    }

    /**
     * Sets carrierCode
     *
     * @param string|null $carrierCode carrier_code
     *
     * @return self
     */
    public function setCarrierCode($carrierCode)
    {
        $this->container['carrierCode'] = $carrierCode;

        return $this;
    }

    /**
     * Gets carrierList
     *
     * @return string|null
     */
    public function getCarrierList()
    {
        return $this->container['carrierList'];
    }

    /**
     * Sets carrierList
     *
     * @param string|null $carrierList 服务工单数据carrier_list
     *
     * @return self
     */
    public function setCarrierList($carrierList)
    {
        $this->container['carrierList'] = $carrierList;

        return $this;
    }

    /**
     * Gets categoryAttributeValue
     *
     * @return string|null
     */
    public function getCategoryAttributeValue()
    {
        return $this->container['categoryAttributeValue'];
    }

    /**
     * Sets categoryAttributeValue
     *
     * @param string|null $categoryAttributeValue 服务工单category_attribute_value
     *
     * @return self
     */
    public function setCategoryAttributeValue($categoryAttributeValue)
    {
        $this->container['categoryAttributeValue'] = $categoryAttributeValue;

        return $this;
    }

    /**
     * Gets categoryCode
     *
     * @return string|null
     */
    public function getCategoryCode()
    {
        return $this->container['categoryCode'];
    }

    /**
     * Sets categoryCode
     *
     * @param string|null $categoryCode 类目编码
     *
     * @return self
     */
    public function setCategoryCode($categoryCode)
    {
        $this->container['categoryCode'] = $categoryCode;

        return $this;
    }

    /**
     * Gets categoryIds
     *
     * @return string|null
     */
    public function getCategoryIds()
    {
        return $this->container['categoryIds'];
    }

    /**
     * Sets categoryIds
     *
     * @param string|null $categoryIds 类目id
     *
     * @return self
     */
    public function setCategoryIds($categoryIds)
    {
        $this->container['categoryIds'] = $categoryIds;

        return $this;
    }

    /**
     * Gets channelType
     *
     * @return string|null
     */
    public function getChannelType()
    {
        return $this->container['channelType'];
    }

    /**
     * Sets channelType
     *
     * @param string|null $channelType 渠道类型
     *
     * @return self
     */
    public function setChannelType($channelType)
    {
        $this->container['channelType'] = $channelType;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 描述信息
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets img
     *
     * @return string|null
     */
    public function getImg()
    {
        return $this->container['img'];
    }

    /**
     * Sets img
     *
     * @param string|null $img img地址
     *
     * @return self
     */
    public function setImg($img)
    {
        $this->container['img'] = $img;

        return $this;
    }

    /**
     * Gets keyWord
     *
     * @return string|null
     */
    public function getKeyWord()
    {
        return $this->container['keyWord'];
    }

    /**
     * Sets keyWord
     *
     * @param string|null $keyWord 关键词
     *
     * @return self
     */
    public function setKeyWord($keyWord)
    {
        $this->container['keyWord'] = $keyWord;

        return $this;
    }

    /**
     * Gets keyWordList
     *
     * @return string|null
     */
    public function getKeyWordList()
    {
        return $this->container['keyWordList'];
    }

    /**
     * Sets keyWordList
     *
     * @param string|null $keyWordList 关键词列表
     *
     * @return self
     */
    public function setKeyWordList($keyWordList)
    {
        $this->container['keyWordList'] = $keyWordList;

        return $this;
    }

    /**
     * Gets logo
     *
     * @return string|null
     */
    public function getLogo()
    {
        return $this->container['logo'];
    }

    /**
     * Sets logo
     *
     * @param string|null $logo logo图片地址
     *
     * @return self
     */
    public function setLogo($logo)
    {
        $this->container['logo'] = $logo;

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
     * @param string|null $name 应用名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets parentServiceCode
     *
     * @return string|null
     */
    public function getParentServiceCode()
    {
        return $this->container['parentServiceCode'];
    }

    /**
     * Sets parentServiceCode
     *
     * @param string|null $parentServiceCode 服务编码
     *
     * @return self
     */
    public function setParentServiceCode($parentServiceCode)
    {
        $this->container['parentServiceCode'] = $parentServiceCode;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region 服务工单详情region
     *
     * @return self
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets servSearchCatalogs
     *
     * @return string|null
     */
    public function getServSearchCatalogs()
    {
        return $this->container['servSearchCatalogs'];
    }

    /**
     * Sets servSearchCatalogs
     *
     * @param string|null $servSearchCatalogs serv_search_catalogs
     *
     * @return self
     */
    public function setServSearchCatalogs($servSearchCatalogs)
    {
        $this->container['servSearchCatalogs'] = $servSearchCatalogs;

        return $this;
    }

    /**
     * Gets servSearchKeywords
     *
     * @return string|null
     */
    public function getServSearchKeywords()
    {
        return $this->container['servSearchKeywords'];
    }

    /**
     * Sets servSearchKeywords
     *
     * @param string|null $servSearchKeywords 关键词
     *
     * @return self
     */
    public function setServSearchKeywords($servSearchKeywords)
    {
        $this->container['servSearchKeywords'] = $servSearchKeywords;

        return $this;
    }

    /**
     * Gets serviceCode
     *
     * @return string|null
     */
    public function getServiceCode()
    {
        return $this->container['serviceCode'];
    }

    /**
     * Sets serviceCode
     *
     * @param string|null $serviceCode 2020112321000021082348
     *
     * @return self
     */
    public function setServiceCode($serviceCode)
    {
        $this->container['serviceCode'] = $serviceCode;

        return $this;
    }

    /**
     * Gets serviceName
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['serviceName'];
    }

    /**
     * Sets serviceName
     *
     * @param string|null $serviceName 服务名称
     *
     * @return self
     */
    public function setServiceName($serviceName)
    {
        $this->container['serviceName'] = $serviceName;

        return $this;
    }

    /**
     * Gets serviceTimeEnd
     *
     * @return string|null
     */
    public function getServiceTimeEnd()
    {
        return $this->container['serviceTimeEnd'];
    }

    /**
     * Sets serviceTimeEnd
     *
     * @param string|null $serviceTimeEnd 服务结束时间
     *
     * @return self
     */
    public function setServiceTimeEnd($serviceTimeEnd)
    {
        $this->container['serviceTimeEnd'] = $serviceTimeEnd;

        return $this;
    }

    /**
     * Gets serviceTimeStart
     *
     * @return string|null
     */
    public function getServiceTimeStart()
    {
        return $this->container['serviceTimeStart'];
    }

    /**
     * Sets serviceTimeStart
     *
     * @param string|null $serviceTimeStart 服务开始时间
     *
     * @return self
     */
    public function setServiceTimeStart($serviceTimeStart)
    {
        $this->container['serviceTimeStart'] = $serviceTimeStart;

        return $this;
    }

    /**
     * Gets shortDesc
     *
     * @return string|null
     */
    public function getShortDesc()
    {
        return $this->container['shortDesc'];
    }

    /**
     * Sets shortDesc
     *
     * @param string|null $shortDesc 服务短描述
     *
     * @return self
     */
    public function setShortDesc($shortDesc)
    {
        $this->container['shortDesc'] = $shortDesc;

        return $this;
    }

    /**
     * Gets specCode
     *
     * @return string|null
     */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
     * Sets specCode
     *
     * @param string|null $specCode 应用标识
     *
     * @return self
     */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param string|null $templateId 模板id
     *
     * @return self
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

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


