<?php
/**
 * AlipayOpenMiniMiniappBrandSubmitModel
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
 * AlipayOpenMiniMiniappBrandSubmitModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniMiniappBrandSubmitModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniMiniappBrandSubmitModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyType' => 'string',
        'authorizeInfo' => '\Alipay\OpenAPISDK\Model\AuthorizeInfo',
        'brandId' => 'string',
        'brandName' => 'string',
        'brandRegistrationInfo' => '\Alipay\OpenAPISDK\Model\BrandRegistrationInfo',
        'idMaterials' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyType' => null,
        'authorizeInfo' => null,
        'brandId' => null,
        'brandName' => null,
        'brandRegistrationInfo' => null,
        'idMaterials' => null
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
        'applyType' => 'apply_type',
        'authorizeInfo' => 'authorize_info',
        'brandId' => 'brand_id',
        'brandName' => 'brand_name',
        'brandRegistrationInfo' => 'brand_registration_info',
        'idMaterials' => 'id_materials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyType' => 'setApplyType',
        'authorizeInfo' => 'setAuthorizeInfo',
        'brandId' => 'setBrandId',
        'brandName' => 'setBrandName',
        'brandRegistrationInfo' => 'setBrandRegistrationInfo',
        'idMaterials' => 'setIdMaterials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyType' => 'getApplyType',
        'authorizeInfo' => 'getAuthorizeInfo',
        'brandId' => 'getBrandId',
        'brandName' => 'getBrandName',
        'brandRegistrationInfo' => 'getBrandRegistrationInfo',
        'idMaterials' => 'getIdMaterials'
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
        $this->container['applyType'] = $data['applyType'] ?? null;
        $this->container['authorizeInfo'] = $data['authorizeInfo'] ?? null;
        $this->container['brandId'] = $data['brandId'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['brandRegistrationInfo'] = $data['brandRegistrationInfo'] ?? null;
        $this->container['idMaterials'] = $data['idMaterials'] ?? null;
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
     * Gets applyType
     *
     * @return string|null
     */
    public function getApplyType()
    {
        return $this->container['applyType'];
    }

    /**
     * Sets applyType
     *
     * @param string|null $applyType 申请的资质类型 SELF_BRAND_APPLY 自有品牌申请(当需要一个新的品牌时选择此项) AUTHORIZE_BRAND_APPLY 授权品牌申请(当需要授权一个已有的品牌给商户时选择此项) EXIST_BRAND_BIND 品牌绑定，适用于品牌已申请成功的情况(当需要将已有品牌绑定到无品牌小程序时选择此项)
     *
     * @return self
     */
    public function setApplyType($applyType)
    {
        $this->container['applyType'] = $applyType;

        return $this;
    }

    /**
     * Gets authorizeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\AuthorizeInfo|null
     */
    public function getAuthorizeInfo()
    {
        return $this->container['authorizeInfo'];
    }

    /**
     * Sets authorizeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\AuthorizeInfo|null $authorizeInfo authorizeInfo
     *
     * @return self
     */
    public function setAuthorizeInfo($authorizeInfo)
    {
        $this->container['authorizeInfo'] = $authorizeInfo;

        return $this;
    }

    /**
     * Gets brandId
     *
     * @return string|null
     */
    public function getBrandId()
    {
        return $this->container['brandId'];
    }

    /**
     * Sets brandId
     *
     * @param string|null $brandId 商户已有品牌Id(只有申请的资质类型为EXIST_BRAND_BIND 时需要填写)
     *
     * @return self
     */
    public function setBrandId($brandId)
    {
        $this->container['brandId'] = $brandId;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 品牌名称
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets brandRegistrationInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BrandRegistrationInfo|null
     */
    public function getBrandRegistrationInfo()
    {
        return $this->container['brandRegistrationInfo'];
    }

    /**
     * Sets brandRegistrationInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BrandRegistrationInfo|null $brandRegistrationInfo brandRegistrationInfo
     *
     * @return self
     */
    public function setBrandRegistrationInfo($brandRegistrationInfo)
    {
        $this->container['brandRegistrationInfo'] = $brandRegistrationInfo;

        return $this;
    }

    /**
     * Gets idMaterials
     *
     * @return string[]|null
     */
    public function getIdMaterials()
    {
        return $this->container['idMaterials'];
    }

    /**
     * Sets idMaterials
     *
     * @param string[]|null $idMaterials 申请人身份证明材料(当前只支持图片类型，请调用alipay.open.mini.miniapp.brand.upload接口上传图片，可以上传多个身份证明材料)
     *
     * @return self
     */
    public function setIdMaterials($idMaterials)
    {
        $this->container['idMaterials'] = $idMaterials;

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


