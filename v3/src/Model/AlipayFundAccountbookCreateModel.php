<?php
/**
 * AlipayFundAccountbookCreateModel
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
 * AlipayFundAccountbookCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAccountbookCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAccountbookCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'extInfo' => 'string',
        'merchantUserId' => 'string',
        'merchantUserType' => 'string',
        'sceneCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'extInfo' => null,
        'merchantUserId' => null,
        'merchantUserType' => null,
        'sceneCode' => null
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
        'extInfo' => 'ext_info',
        'merchantUserId' => 'merchant_user_id',
        'merchantUserType' => 'merchant_user_type',
        'sceneCode' => 'scene_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'extInfo' => 'setExtInfo',
        'merchantUserId' => 'setMerchantUserId',
        'merchantUserType' => 'setMerchantUserType',
        'sceneCode' => 'setSceneCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'extInfo' => 'getExtInfo',
        'merchantUserId' => 'getMerchantUserId',
        'merchantUserType' => 'getMerchantUserType',
        'sceneCode' => 'getSceneCode'
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
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['merchantUserId'] = $data['merchantUserId'] ?? null;
        $this->container['merchantUserType'] = $data['merchantUserType'] ?? null;
        $this->container['sceneCode'] = $data['sceneCode'] ?? null;
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
     * Gets extInfo
     *
     * @return string|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param string|null $extInfo JSON格式，传递业务扩展参数
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets merchantUserId
     *
     * @return string|null
     */
    public function getMerchantUserId()
    {
        return $this->container['merchantUserId'];
    }

    /**
     * Sets merchantUserId
     *
     * @param string|null $merchantUserId 外部商户系统会员的唯一标识，自定义传入
     *
     * @return self
     */
    public function setMerchantUserId($merchantUserId)
    {
        $this->container['merchantUserId'] = $merchantUserId;

        return $this;
    }

    /**
     * Gets merchantUserType
     *
     * @return string|null
     */
    public function getMerchantUserType()
    {
        return $this->container['merchantUserType'];
    }

    /**
     * Sets merchantUserType
     *
     * @param string|null $merchantUserType 外部商户用户类型:BUSINESS_EMPLOYEE
     *
     * @return self
     */
    public function setMerchantUserType($merchantUserType)
    {
        $this->container['merchantUserType'] = $merchantUserType;

        return $this;
    }

    /**
     * Gets sceneCode
     *
     * @return string|null
     */
    public function getSceneCode()
    {
        return $this->container['sceneCode'];
    }

    /**
     * Sets sceneCode
     *
     * @param string|null $sceneCode 资金记账本的业务场景
     *
     * @return self
     */
    public function setSceneCode($sceneCode)
    {
        $this->container['sceneCode'] = $sceneCode;

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


