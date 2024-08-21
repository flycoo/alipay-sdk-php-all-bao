<?php
/**
 * SubServiceKeyWordInfo
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
 * SubServiceKeyWordInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubServiceKeyWordInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubServiceKeyWordInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appName' => 'string',
        'keywordInfo' => '\Alipay\OpenAPISDK\Model\KeyWordInfo[]',
        'miniAppId' => 'string',
        'subServiceCode' => 'string',
        'subServiceDesc' => 'string',
        'subServiceName' => 'string',
        'subServiceStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appName' => null,
        'keywordInfo' => null,
        'miniAppId' => null,
        'subServiceCode' => null,
        'subServiceDesc' => null,
        'subServiceName' => null,
        'subServiceStatus' => null
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
        'appName' => 'app_name',
        'keywordInfo' => 'keyword_info',
        'miniAppId' => 'mini_app_id',
        'subServiceCode' => 'sub_service_code',
        'subServiceDesc' => 'sub_service_desc',
        'subServiceName' => 'sub_service_name',
        'subServiceStatus' => 'sub_service_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appName' => 'setAppName',
        'keywordInfo' => 'setKeywordInfo',
        'miniAppId' => 'setMiniAppId',
        'subServiceCode' => 'setSubServiceCode',
        'subServiceDesc' => 'setSubServiceDesc',
        'subServiceName' => 'setSubServiceName',
        'subServiceStatus' => 'setSubServiceStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appName' => 'getAppName',
        'keywordInfo' => 'getKeywordInfo',
        'miniAppId' => 'getMiniAppId',
        'subServiceCode' => 'getSubServiceCode',
        'subServiceDesc' => 'getSubServiceDesc',
        'subServiceName' => 'getSubServiceName',
        'subServiceStatus' => 'getSubServiceStatus'
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
        $this->container['appName'] = $data['appName'] ?? null;
        $this->container['keywordInfo'] = $data['keywordInfo'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['subServiceCode'] = $data['subServiceCode'] ?? null;
        $this->container['subServiceDesc'] = $data['subServiceDesc'] ?? null;
        $this->container['subServiceName'] = $data['subServiceName'] ?? null;
        $this->container['subServiceStatus'] = $data['subServiceStatus'] ?? null;
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
     * Gets appName
     *
     * @return string|null
     */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
     * Sets appName
     *
     * @param string|null $appName 小程序名称
     *
     * @return self
     */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;

        return $this;
    }

    /**
     * Gets keywordInfo
     *
     * @return \Alipay\OpenAPISDK\Model\KeyWordInfo[]|null
     */
    public function getKeywordInfo()
    {
        return $this->container['keywordInfo'];
    }

    /**
     * Sets keywordInfo
     *
     * @param \Alipay\OpenAPISDK\Model\KeyWordInfo[]|null $keywordInfo 此服务下的关键词
     *
     * @return self
     */
    public function setKeywordInfo($keywordInfo)
    {
        $this->container['keywordInfo'] = $keywordInfo;

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
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets subServiceCode
     *
     * @return string|null
     */
    public function getSubServiceCode()
    {
        return $this->container['subServiceCode'];
    }

    /**
     * Sets subServiceCode
     *
     * @param string|null $subServiceCode 子服务code
     *
     * @return self
     */
    public function setSubServiceCode($subServiceCode)
    {
        $this->container['subServiceCode'] = $subServiceCode;

        return $this;
    }

    /**
     * Gets subServiceDesc
     *
     * @return string|null
     */
    public function getSubServiceDesc()
    {
        return $this->container['subServiceDesc'];
    }

    /**
     * Sets subServiceDesc
     *
     * @param string|null $subServiceDesc 子服务简单描述
     *
     * @return self
     */
    public function setSubServiceDesc($subServiceDesc)
    {
        $this->container['subServiceDesc'] = $subServiceDesc;

        return $this;
    }

    /**
     * Gets subServiceName
     *
     * @return string|null
     */
    public function getSubServiceName()
    {
        return $this->container['subServiceName'];
    }

    /**
     * Sets subServiceName
     *
     * @param string|null $subServiceName 子服务名
     *
     * @return self
     */
    public function setSubServiceName($subServiceName)
    {
        $this->container['subServiceName'] = $subServiceName;

        return $this;
    }

    /**
     * Gets subServiceStatus
     *
     * @return string|null
     */
    public function getSubServiceStatus()
    {
        return $this->container['subServiceStatus'];
    }

    /**
     * Sets subServiceStatus
     *
     * @param string|null $subServiceStatus 子服务状态， INITIAL：初始化：VALID:已生效；INVALID：已失效
     *
     * @return self
     */
    public function setSubServiceStatus($subServiceStatus)
    {
        $this->container['subServiceStatus'] = $subServiceStatus;

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


