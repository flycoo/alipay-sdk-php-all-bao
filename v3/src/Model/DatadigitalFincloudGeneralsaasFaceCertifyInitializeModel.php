<?php
/**
 * DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel
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
 * DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DatadigitalFincloudGeneralsaasFaceCertifyInitializeModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bizCode' => 'string',
        'faceContrastPicture' => 'string',
        'identityParam' => '\Alipay\OpenAPISDK\Model\OpenCertifyIdentifyInfo',
        'merchantConfig' => '\Alipay\OpenAPISDK\Model\OpenCertifyMerchantConfigs',
        'outerOrderNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bizCode' => null,
        'faceContrastPicture' => null,
        'identityParam' => null,
        'merchantConfig' => null,
        'outerOrderNo' => null
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
        'bizCode' => 'biz_code',
        'faceContrastPicture' => 'face_contrast_picture',
        'identityParam' => 'identity_param',
        'merchantConfig' => 'merchant_config',
        'outerOrderNo' => 'outer_order_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bizCode' => 'setBizCode',
        'faceContrastPicture' => 'setFaceContrastPicture',
        'identityParam' => 'setIdentityParam',
        'merchantConfig' => 'setMerchantConfig',
        'outerOrderNo' => 'setOuterOrderNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bizCode' => 'getBizCode',
        'faceContrastPicture' => 'getFaceContrastPicture',
        'identityParam' => 'getIdentityParam',
        'merchantConfig' => 'getMerchantConfig',
        'outerOrderNo' => 'getOuterOrderNo'
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
        $this->container['bizCode'] = $data['bizCode'] ?? null;
        $this->container['faceContrastPicture'] = $data['faceContrastPicture'] ?? null;
        $this->container['identityParam'] = $data['identityParam'] ?? null;
        $this->container['merchantConfig'] = $data['merchantConfig'] ?? null;
        $this->container['outerOrderNo'] = $data['outerOrderNo'] ?? null;
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
     * Gets bizCode
     *
     * @return string|null
     */
    public function getBizCode()
    {
        return $this->container['bizCode'];
    }

    /**
     * Sets bizCode
     *
     * @param string|null $bizCode H5人脸核身场景码。入参支持的场景码。
     *
     * @return self
     */
    public function setBizCode($bizCode)
    {
        $this->container['bizCode'] = $bizCode;

        return $this;
    }

    /**
     * Gets faceContrastPicture
     *
     * @return string|null
     */
    public function getFaceContrastPicture()
    {
        return $this->container['faceContrastPicture'];
    }

    /**
     * Sets faceContrastPicture
     *
     * @param string|null $faceContrastPicture 自定义人脸比对图片的base64编码格式的string字符串
     *
     * @return self
     */
    public function setFaceContrastPicture($faceContrastPicture)
    {
        $this->container['faceContrastPicture'] = $faceContrastPicture;

        return $this;
    }

    /**
     * Gets identityParam
     *
     * @return \Alipay\OpenAPISDK\Model\OpenCertifyIdentifyInfo|null
     */
    public function getIdentityParam()
    {
        return $this->container['identityParam'];
    }

    /**
     * Sets identityParam
     *
     * @param \Alipay\OpenAPISDK\Model\OpenCertifyIdentifyInfo|null $identityParam identityParam
     *
     * @return self
     */
    public function setIdentityParam($identityParam)
    {
        $this->container['identityParam'] = $identityParam;

        return $this;
    }

    /**
     * Gets merchantConfig
     *
     * @return \Alipay\OpenAPISDK\Model\OpenCertifyMerchantConfigs|null
     */
    public function getMerchantConfig()
    {
        return $this->container['merchantConfig'];
    }

    /**
     * Sets merchantConfig
     *
     * @param \Alipay\OpenAPISDK\Model\OpenCertifyMerchantConfigs|null $merchantConfig merchantConfig
     *
     * @return self
     */
    public function setMerchantConfig($merchantConfig)
    {
        $this->container['merchantConfig'] = $merchantConfig;

        return $this;
    }

    /**
     * Gets outerOrderNo
     *
     * @return string|null
     */
    public function getOuterOrderNo()
    {
        return $this->container['outerOrderNo'];
    }

    /**
     * Sets outerOrderNo
     *
     * @param string|null $outerOrderNo 商户请求的唯一标识，商户要保证其唯一性，值为32位长度的字母数字组合。建议：前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列
     *
     * @return self
     */
    public function setOuterOrderNo($outerOrderNo)
    {
        $this->container['outerOrderNo'] = $outerOrderNo;

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


