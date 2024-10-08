<?php
/**
 * AlipayOpenMiniInnerappPluginservicePublishModel
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
 * AlipayOpenMiniInnerappPluginservicePublishModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerappPluginservicePublishModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerappPluginservicePublishModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'abilityTypeList' => 'string[]',
        'appLogo' => 'string',
        'appOrigin' => 'string',
        'description' => 'string',
        'detailForClient' => 'string',
        'detailForPc' => 'string',
        'miniAppId' => 'string',
        'sellCrowd' => 'string',
        'showType' => 'string',
        'title' => 'string',
        'visitUrlForPc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'abilityTypeList' => null,
        'appLogo' => null,
        'appOrigin' => null,
        'description' => null,
        'detailForClient' => null,
        'detailForPc' => null,
        'miniAppId' => null,
        'sellCrowd' => null,
        'showType' => null,
        'title' => null,
        'visitUrlForPc' => null
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
        'abilityTypeList' => 'ability_type_list',
        'appLogo' => 'app_logo',
        'appOrigin' => 'app_origin',
        'description' => 'description',
        'detailForClient' => 'detail_for_client',
        'detailForPc' => 'detail_for_pc',
        'miniAppId' => 'mini_app_id',
        'sellCrowd' => 'sell_crowd',
        'showType' => 'show_type',
        'title' => 'title',
        'visitUrlForPc' => 'visit_url_for_pc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abilityTypeList' => 'setAbilityTypeList',
        'appLogo' => 'setAppLogo',
        'appOrigin' => 'setAppOrigin',
        'description' => 'setDescription',
        'detailForClient' => 'setDetailForClient',
        'detailForPc' => 'setDetailForPc',
        'miniAppId' => 'setMiniAppId',
        'sellCrowd' => 'setSellCrowd',
        'showType' => 'setShowType',
        'title' => 'setTitle',
        'visitUrlForPc' => 'setVisitUrlForPc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abilityTypeList' => 'getAbilityTypeList',
        'appLogo' => 'getAppLogo',
        'appOrigin' => 'getAppOrigin',
        'description' => 'getDescription',
        'detailForClient' => 'getDetailForClient',
        'detailForPc' => 'getDetailForPc',
        'miniAppId' => 'getMiniAppId',
        'sellCrowd' => 'getSellCrowd',
        'showType' => 'getShowType',
        'title' => 'getTitle',
        'visitUrlForPc' => 'getVisitUrlForPc'
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
        $this->container['abilityTypeList'] = $data['abilityTypeList'] ?? null;
        $this->container['appLogo'] = $data['appLogo'] ?? null;
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['detailForClient'] = $data['detailForClient'] ?? null;
        $this->container['detailForPc'] = $data['detailForPc'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['sellCrowd'] = $data['sellCrowd'] ?? null;
        $this->container['showType'] = $data['showType'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['visitUrlForPc'] = $data['visitUrlForPc'] ?? null;
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
     * Gets abilityTypeList
     *
     * @return string[]|null
     */
    public function getAbilityTypeList()
    {
        return $this->container['abilityTypeList'];
    }

    /**
     * Sets abilityTypeList
     *
     * @param string[]|null $abilityTypeList 功能类型，目前支持的有：1039支付, 1040会员, 1041基础, 1056资金, 1058信用, 1111口碑, 330120安全, 360101营销
     *
     * @return self
     */
    public function setAbilityTypeList($abilityTypeList)
    {
        $this->container['abilityTypeList'] = $abilityTypeList;

        return $this;
    }

    /**
     * Gets appLogo
     *
     * @return string|null
     */
    public function getAppLogo()
    {
        return $this->container['appLogo'];
    }

    /**
     * Sets appLogo
     *
     * @param string|null $appLogo 服务发布logo
     *
     * @return self
     */
    public function setAppLogo($appLogo)
    {
        $this->container['appLogo'] = $appLogo;

        return $this;
    }

    /**
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 业务来源
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 服务描述
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets detailForClient
     *
     * @return string|null
     */
    public function getDetailForClient()
    {
        return $this->container['detailForClient'];
    }

    /**
     * Sets detailForClient
     *
     * @param string|null $detailForClient 移动端详情，用于能力中心展示
     *
     * @return self
     */
    public function setDetailForClient($detailForClient)
    {
        $this->container['detailForClient'] = $detailForClient;

        return $this;
    }

    /**
     * Gets detailForPc
     *
     * @return string|null
     */
    public function getDetailForPc()
    {
        return $this->container['detailForPc'];
    }

    /**
     * Sets detailForPc
     *
     * @param string|null $detailForPc pc端详情，用于能力中心展示
     *
     * @return self
     */
    public function setDetailForPc($detailForPc)
    {
        $this->container['detailForPc'] = $detailForPc;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 插件id
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets sellCrowd
     *
     * @return string|null
     */
    public function getSellCrowd()
    {
        return $this->container['sellCrowd'];
    }

    /**
     * Sets sellCrowd
     *
     * @param string|null $sellCrowd 可订购人群，1003个人, 1004企业，-1无限制
     *
     * @return self
     */
    public function setSellCrowd($sellCrowd)
    {
        $this->container['sellCrowd'] = $sellCrowd;

        return $this;
    }

    /**
     * Gets showType
     *
     * @return string|null
     */
    public function getShowType()
    {
        return $this->container['showType'];
    }

    /**
     * Sets showType
     *
     * @param string|null $showType 发布后是否展示，01展示（默认）、02隐藏
     *
     * @return self
     */
    public function setShowType($showType)
    {
        $this->container['showType'] = $showType;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 服务标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets visitUrlForPc
     *
     * @return string|null
     */
    public function getVisitUrlForPc()
    {
        return $this->container['visitUrlForPc'];
    }

    /**
     * Sets visitUrlForPc
     *
     * @param string|null $visitUrlForPc pc端url地址，不需要则为空
     *
     * @return self
     */
    public function setVisitUrlForPc($visitUrlForPc)
    {
        $this->container['visitUrlForPc'] = $visitUrlForPc;

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


