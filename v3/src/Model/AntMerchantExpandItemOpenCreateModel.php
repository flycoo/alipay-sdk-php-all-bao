<?php
/**
 * AntMerchantExpandItemOpenCreateModel
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
 * AntMerchantExpandItemOpenCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AntMerchantExpandItemOpenCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AntMerchantExpandItemOpenCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'description' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\ItemExtInfo[]',
        'materialList' => '\Alipay\OpenAPISDK\Model\MaterialCreateInfo[]',
        'name' => 'string',
        'propertyList' => '\Alipay\OpenAPISDK\Model\ItemPropertyInfo[]',
        'scene' => 'string',
        'skuList' => '\Alipay\OpenAPISDK\Model\SkuCreateInfo[]',
        'standardCategoryId' => 'string',
        'targetId' => 'string',
        'targetType' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'description' => null,
        'extInfo' => null,
        'materialList' => null,
        'name' => null,
        'propertyList' => null,
        'scene' => null,
        'skuList' => null,
        'standardCategoryId' => null,
        'targetId' => null,
        'targetType' => null,
        'type' => null
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
        'description' => 'description',
        'extInfo' => 'ext_info',
        'materialList' => 'material_list',
        'name' => 'name',
        'propertyList' => 'property_list',
        'scene' => 'scene',
        'skuList' => 'sku_list',
        'standardCategoryId' => 'standard_category_id',
        'targetId' => 'target_id',
        'targetType' => 'target_type',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'extInfo' => 'setExtInfo',
        'materialList' => 'setMaterialList',
        'name' => 'setName',
        'propertyList' => 'setPropertyList',
        'scene' => 'setScene',
        'skuList' => 'setSkuList',
        'standardCategoryId' => 'setStandardCategoryId',
        'targetId' => 'setTargetId',
        'targetType' => 'setTargetType',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'extInfo' => 'getExtInfo',
        'materialList' => 'getMaterialList',
        'name' => 'getName',
        'propertyList' => 'getPropertyList',
        'scene' => 'getScene',
        'skuList' => 'getSkuList',
        'standardCategoryId' => 'getStandardCategoryId',
        'targetId' => 'getTargetId',
        'targetType' => 'getTargetType',
        'type' => 'getType'
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
        $this->container['description'] = $data['description'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['materialList'] = $data['materialList'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['propertyList'] = $data['propertyList'] ?? null;
        $this->container['scene'] = $data['scene'] ?? null;
        $this->container['skuList'] = $data['skuList'] ?? null;
        $this->container['standardCategoryId'] = $data['standardCategoryId'] ?? null;
        $this->container['targetId'] = $data['targetId'] ?? null;
        $this->container['targetType'] = $data['targetType'] ?? null;
        $this->container['type'] = $data['type'] ?? null;
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
     * @param string|null $description 商品描述
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\ItemExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\ItemExtInfo[]|null $extInfo 商品扩展信息（具体KEY请参见产品文档）。 小程序订单中心场景接入参见 <a href=\"https://opendocs.alipay.com/mini/024hj4\">接入指南</a>。
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets materialList
     *
     * @return \Alipay\OpenAPISDK\Model\MaterialCreateInfo[]|null
     */
    public function getMaterialList()
    {
        return $this->container['materialList'];
    }

    /**
     * Sets materialList
     *
     * @param \Alipay\OpenAPISDK\Model\MaterialCreateInfo[]|null $materialList 素材列表（最多3个），素材内容为素材key（素材key为<a href=\"https://opendocs.alipay.com/apis/api_4/alipay.merchant.item.file.upload\">alipay.merchant.item.file.upload</a> 接口返回的 material_key）
     *
     * @return self
     */
    public function setMaterialList($materialList)
    {
        $this->container['materialList'] = $materialList;

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
     * @param string|null $name 商品名称
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets propertyList
     *
     * @return \Alipay\OpenAPISDK\Model\ItemPropertyInfo[]|null
     */
    public function getPropertyList()
    {
        return $this->container['propertyList'];
    }

    /**
     * Sets propertyList
     *
     * @param \Alipay\OpenAPISDK\Model\ItemPropertyInfo[]|null $propertyList 商品属性列表
     *
     * @return self
     */
    public function setPropertyList($propertyList)
    {
        $this->container['propertyList'] = $propertyList;

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
     * @param string|null $scene 业务场景码。
     *
     * @return self
     */
    public function setScene($scene)
    {
        $this->container['scene'] = $scene;

        return $this;
    }

    /**
     * Gets skuList
     *
     * @return \Alipay\OpenAPISDK\Model\SkuCreateInfo[]|null
     */
    public function getSkuList()
    {
        return $this->container['skuList'];
    }

    /**
     * Sets skuList
     *
     * @param \Alipay\OpenAPISDK\Model\SkuCreateInfo[]|null $skuList 商品SKU列表（至少1个，最多20个）
     *
     * @return self
     */
    public function setSkuList($skuList)
    {
        $this->container['skuList'] = $skuList;

        return $this;
    }

    /**
     * Gets standardCategoryId
     *
     * @return string|null
     */
    public function getStandardCategoryId()
    {
        return $this->container['standardCategoryId'];
    }

    /**
     * Sets standardCategoryId
     *
     * @param string|null $standardCategoryId 商品所属标准类目ID，标品及非标品都需传入。 请填入 <a href=\"https://opendocs.alipay.com/mini/011lxt\">小程序商品类目表</a> 中三级类目ID。
     *
     * @return self
     */
    public function setStandardCategoryId($standardCategoryId)
    {
        $this->container['standardCategoryId'] = $standardCategoryId;

        return $this;
    }

    /**
     * Gets targetId
     *
     * @return string|null
     */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
     * Sets targetId
     *
     * @param string|null $targetId 商品归属主体ID 例：商品归属主体类型target_type为店铺，则商品归属主体ID为店铺ID（支付宝侧店铺ID）；归属主体类型target_type为小程序，则归属主体ID为小程序ID
     *
     * @return self
     */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;

        return $this;
    }

    /**
     * Gets targetType
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
     * Sets targetType
     *
     * @param string|null $targetType 商品归属主体类型。枚举如下： 5：店铺。 8：小程序。
     *
     * @return self
     */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 商品类型。枚举支持： STANDARD_GOODS：标品，一般是具有明确、标准规格、型号、参数的商品，如：手机、数码产品、大多数的家电 。 NON_STANDARD_GOODS：非标品，则是在这些方面没有统一的行业标准和参数规格的商品，如：服装、鞋袜等。
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


