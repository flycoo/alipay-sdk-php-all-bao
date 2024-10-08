<?php
/**
 * AlipayOpenSpBlueseaactivityQueryResponseModel
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
 * AlipayOpenSpBlueseaactivityQueryResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenSpBlueseaactivityQueryResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenSpBlueseaactivityQueryResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'bizScene' => 'string',
        'businessLic' => 'string',
        'cityCode' => 'string',
        'districtCode' => 'string',
        'foodBusinessLic' => 'string',
        'foodCirculateLic' => 'string',
        'foodHealthLic' => 'string',
        'foodProductionLic' => 'string',
        'foodServiceLic' => 'string',
        'indoorPic' => 'string',
        'memo' => 'string',
        'merchantLogon' => 'string',
        'provinceCode' => 'string',
        'shopEntrancePic' => 'string',
        'status' => 'string',
        'subMerchantId' => 'string',
        'tobaccoLic' => 'string'
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
        'bizScene' => null,
        'businessLic' => null,
        'cityCode' => null,
        'districtCode' => null,
        'foodBusinessLic' => null,
        'foodCirculateLic' => null,
        'foodHealthLic' => null,
        'foodProductionLic' => null,
        'foodServiceLic' => null,
        'indoorPic' => null,
        'memo' => null,
        'merchantLogon' => null,
        'provinceCode' => null,
        'shopEntrancePic' => null,
        'status' => null,
        'subMerchantId' => null,
        'tobaccoLic' => null
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
        'bizScene' => 'biz_scene',
        'businessLic' => 'business_lic',
        'cityCode' => 'city_code',
        'districtCode' => 'district_code',
        'foodBusinessLic' => 'food_business_lic',
        'foodCirculateLic' => 'food_circulate_lic',
        'foodHealthLic' => 'food_health_lic',
        'foodProductionLic' => 'food_production_lic',
        'foodServiceLic' => 'food_service_lic',
        'indoorPic' => 'indoor_pic',
        'memo' => 'memo',
        'merchantLogon' => 'merchant_logon',
        'provinceCode' => 'province_code',
        'shopEntrancePic' => 'shop_entrance_pic',
        'status' => 'status',
        'subMerchantId' => 'sub_merchant_id',
        'tobaccoLic' => 'tobacco_lic'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'bizScene' => 'setBizScene',
        'businessLic' => 'setBusinessLic',
        'cityCode' => 'setCityCode',
        'districtCode' => 'setDistrictCode',
        'foodBusinessLic' => 'setFoodBusinessLic',
        'foodCirculateLic' => 'setFoodCirculateLic',
        'foodHealthLic' => 'setFoodHealthLic',
        'foodProductionLic' => 'setFoodProductionLic',
        'foodServiceLic' => 'setFoodServiceLic',
        'indoorPic' => 'setIndoorPic',
        'memo' => 'setMemo',
        'merchantLogon' => 'setMerchantLogon',
        'provinceCode' => 'setProvinceCode',
        'shopEntrancePic' => 'setShopEntrancePic',
        'status' => 'setStatus',
        'subMerchantId' => 'setSubMerchantId',
        'tobaccoLic' => 'setTobaccoLic'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'bizScene' => 'getBizScene',
        'businessLic' => 'getBusinessLic',
        'cityCode' => 'getCityCode',
        'districtCode' => 'getDistrictCode',
        'foodBusinessLic' => 'getFoodBusinessLic',
        'foodCirculateLic' => 'getFoodCirculateLic',
        'foodHealthLic' => 'getFoodHealthLic',
        'foodProductionLic' => 'getFoodProductionLic',
        'foodServiceLic' => 'getFoodServiceLic',
        'indoorPic' => 'getIndoorPic',
        'memo' => 'getMemo',
        'merchantLogon' => 'getMerchantLogon',
        'provinceCode' => 'getProvinceCode',
        'shopEntrancePic' => 'getShopEntrancePic',
        'status' => 'getStatus',
        'subMerchantId' => 'getSubMerchantId',
        'tobaccoLic' => 'getTobaccoLic'
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
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['businessLic'] = $data['businessLic'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['districtCode'] = $data['districtCode'] ?? null;
        $this->container['foodBusinessLic'] = $data['foodBusinessLic'] ?? null;
        $this->container['foodCirculateLic'] = $data['foodCirculateLic'] ?? null;
        $this->container['foodHealthLic'] = $data['foodHealthLic'] ?? null;
        $this->container['foodProductionLic'] = $data['foodProductionLic'] ?? null;
        $this->container['foodServiceLic'] = $data['foodServiceLic'] ?? null;
        $this->container['indoorPic'] = $data['indoorPic'] ?? null;
        $this->container['memo'] = $data['memo'] ?? null;
        $this->container['merchantLogon'] = $data['merchantLogon'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
        $this->container['shopEntrancePic'] = $data['shopEntrancePic'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['subMerchantId'] = $data['subMerchantId'] ?? null;
        $this->container['tobaccoLic'] = $data['tobaccoLic'] ?? null;
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
     * @param string|null $address 详细地址
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 蓝海活动的场景，包括直连餐饮（BLUE_SEA_FOOD_APPLY）、直连快消（BLUE_SEA_FMCG_APPLY）、间连餐饮（BLUE_SEA_FOOD_INDIRECT_APPLY）、间连快消（BLUE_SEA_FMCG_INDIRECT_APPLY）场景
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets businessLic
     *
     * @return string|null
     */
    public function getBusinessLic()
    {
        return $this->container['businessLic'];
    }

    /**
     * Sets businessLic
     *
     * @param string|null $businessLic 营业执照，要求证件文本信息清晰可见。 资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setBusinessLic($businessLic)
    {
        $this->container['businessLic'] = $businessLic;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 城市编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets districtCode
     *
     * @return string|null
     */
    public function getDistrictCode()
    {
        return $this->container['districtCode'];
    }

    /**
     * Sets districtCode
     *
     * @param string|null $districtCode 区县编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setDistrictCode($districtCode)
    {
        $this->container['districtCode'] = $districtCode;

        return $this;
    }

    /**
     * Gets foodBusinessLic
     *
     * @return string|null
     */
    public function getFoodBusinessLic()
    {
        return $this->container['foodBusinessLic'];
    }

    /**
     * Sets foodBusinessLic
     *
     * @param string|null $foodBusinessLic 食品经营许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setFoodBusinessLic($foodBusinessLic)
    {
        $this->container['foodBusinessLic'] = $foodBusinessLic;

        return $this;
    }

    /**
     * Gets foodCirculateLic
     *
     * @return string|null
     */
    public function getFoodCirculateLic()
    {
        return $this->container['foodCirculateLic'];
    }

    /**
     * Sets foodCirculateLic
     *
     * @param string|null $foodCirculateLic 食品流通许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setFoodCirculateLic($foodCirculateLic)
    {
        $this->container['foodCirculateLic'] = $foodCirculateLic;

        return $this;
    }

    /**
     * Gets foodHealthLic
     *
     * @return string|null
     */
    public function getFoodHealthLic()
    {
        return $this->container['foodHealthLic'];
    }

    /**
     * Sets foodHealthLic
     *
     * @param string|null $foodHealthLic 食品卫生许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setFoodHealthLic($foodHealthLic)
    {
        $this->container['foodHealthLic'] = $foodHealthLic;

        return $this;
    }

    /**
     * Gets foodProductionLic
     *
     * @return string|null
     */
    public function getFoodProductionLic()
    {
        return $this->container['foodProductionLic'];
    }

    /**
     * Sets foodProductionLic
     *
     * @param string|null $foodProductionLic 食品生产许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setFoodProductionLic($foodProductionLic)
    {
        $this->container['foodProductionLic'] = $foodProductionLic;

        return $this;
    }

    /**
     * Gets foodServiceLic
     *
     * @return string|null
     */
    public function getFoodServiceLic()
    {
        return $this->container['foodServiceLic'];
    }

    /**
     * Sets foodServiceLic
     *
     * @param string|null $foodServiceLic 餐饮服务许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setFoodServiceLic($foodServiceLic)
    {
        $this->container['foodServiceLic'] = $foodServiceLic;

        return $this;
    }

    /**
     * Gets indoorPic
     *
     * @return string|null
     */
    public function getIndoorPic()
    {
        return $this->container['indoorPic'];
    }

    /**
     * Sets indoorPic
     *
     * @param string|null $indoorPic 门头照，要求内景照片清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setIndoorPic($indoorPic)
    {
        $this->container['indoorPic'] = $indoorPic;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|null
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|null $memo 审核驳回原因，在订单状态为失败时有效
     *
     * @return self
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets merchantLogon
     *
     * @return string|null
     */
    public function getMerchantLogon()
    {
        return $this->container['merchantLogon'];
    }

    /**
     * Sets merchantLogon
     *
     * @param string|null $merchantLogon 参与蓝海活动的商户支付宝账号，只有当参与直连蓝海活动场景（BLUE_SEA_FOOD_APPLY/BLUE_SEA_FMCG_APPLY）时才返回
     *
     * @return self
     */
    public function setMerchantLogon($merchantLogon)
    {
        $this->container['merchantLogon'] = $merchantLogon;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份编码。请按照https://gw.alipayobjects.com/os/basement_prod/253c4dcb-b8a4-4a1e-8be2-79e191a9b6db.xlsx 表格中内容填写。 （参考资料： http://www.stats.gov.cn/tjsj/tjbz/tjyqhdmhcxhfdm/）
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

        return $this;
    }

    /**
     * Gets shopEntrancePic
     *
     * @return string|null
     */
    public function getShopEntrancePic()
    {
        return $this->container['shopEntrancePic'];
    }

    /**
     * Sets shopEntrancePic
     *
     * @param string|null $shopEntrancePic 门头照，要求店铺外观照片清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setShopEntrancePic($shopEntrancePic)
    {
        $this->container['shopEntrancePic'] = $shopEntrancePic;

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
     * @param string|null $status 申请单状态，状态机参考（AUDITING:审核中，FAIL:报名失败，PASS:报名成功）
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets subMerchantId
     *
     * @return string|null
     */
    public function getSubMerchantId()
    {
        return $this->container['subMerchantId'];
    }

    /**
     * Sets subMerchantId
     *
     * @param string|null $subMerchantId 参与蓝海活动的间连商户账号，只有当参与间连蓝海活动场景（BLUE_SEA_FOOD_INDIRECT_APPLY/BLUE_SEA_FMCG_INDIRECT_APPLY）时才返回
     *
     * @return self
     */
    public function setSubMerchantId($subMerchantId)
    {
        $this->container['subMerchantId'] = $subMerchantId;

        return $this;
    }

    /**
     * Gets tobaccoLic
     *
     * @return string|null
     */
    public function getTobaccoLic()
    {
        return $this->container['tobaccoLic'];
    }

    /**
     * Sets tobaccoLic
     *
     * @param string|null $tobaccoLic 烟草专卖零售许可证，要求证件文本信息清晰可见。资质信息请参见<a href=\"https://opendocs.alipay.com/open/01hd83\">报名资质要求</a>
     *
     * @return self
     */
    public function setTobaccoLic($tobaccoLic)
    {
        $this->container['tobaccoLic'] = $tobaccoLic;

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


