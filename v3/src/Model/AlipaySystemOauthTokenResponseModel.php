<?php
/**
 * AlipaySystemOauthTokenResponseModel
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
 * AlipaySystemOauthTokenResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipaySystemOauthTokenResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipaySystemOauthTokenResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accessToken' => 'string',
        'alipayUserId' => 'string',
        'authStart' => 'string',
        'authTokenType' => 'string',
        'expiresIn' => 'string',
        'openId' => 'string',
        'reExpiresIn' => 'string',
        'refreshToken' => 'string',
        'unionId' => 'string',
        'userId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accessToken' => null,
        'alipayUserId' => null,
        'authStart' => null,
        'authTokenType' => null,
        'expiresIn' => null,
        'openId' => null,
        'reExpiresIn' => null,
        'refreshToken' => null,
        'unionId' => null,
        'userId' => null
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
        'accessToken' => 'access_token',
        'alipayUserId' => 'alipay_user_id',
        'authStart' => 'auth_start',
        'authTokenType' => 'auth_token_type',
        'expiresIn' => 'expires_in',
        'openId' => 'open_id',
        'reExpiresIn' => 're_expires_in',
        'refreshToken' => 'refresh_token',
        'unionId' => 'union_id',
        'userId' => 'user_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accessToken' => 'setAccessToken',
        'alipayUserId' => 'setAlipayUserId',
        'authStart' => 'setAuthStart',
        'authTokenType' => 'setAuthTokenType',
        'expiresIn' => 'setExpiresIn',
        'openId' => 'setOpenId',
        'reExpiresIn' => 'setReExpiresIn',
        'refreshToken' => 'setRefreshToken',
        'unionId' => 'setUnionId',
        'userId' => 'setUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accessToken' => 'getAccessToken',
        'alipayUserId' => 'getAlipayUserId',
        'authStart' => 'getAuthStart',
        'authTokenType' => 'getAuthTokenType',
        'expiresIn' => 'getExpiresIn',
        'openId' => 'getOpenId',
        'reExpiresIn' => 'getReExpiresIn',
        'refreshToken' => 'getRefreshToken',
        'unionId' => 'getUnionId',
        'userId' => 'getUserId'
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
        $this->container['accessToken'] = $data['accessToken'] ?? null;
        $this->container['alipayUserId'] = $data['alipayUserId'] ?? null;
        $this->container['authStart'] = $data['authStart'] ?? null;
        $this->container['authTokenType'] = $data['authTokenType'] ?? null;
        $this->container['expiresIn'] = $data['expiresIn'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['reExpiresIn'] = $data['reExpiresIn'] ?? null;
        $this->container['refreshToken'] = $data['refreshToken'] ?? null;
        $this->container['unionId'] = $data['unionId'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
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
     * Gets accessToken
     *
     * @return string|null
     */
    public function getAccessToken()
    {
        return $this->container['accessToken'];
    }

    /**
     * Sets accessToken
     *
     * @param string|null $accessToken 访问令牌。通过该令牌调用需要授权类接口
     *
     * @return self
     */
    public function setAccessToken($accessToken)
    {
        $this->container['accessToken'] = $accessToken;

        return $this;
    }

    /**
     * Gets alipayUserId
     *
     * @return string|null
     */
    public function getAlipayUserId()
    {
        return $this->container['alipayUserId'];
    }

    /**
     * Sets alipayUserId
     *
     * @param string|null $alipayUserId 已废弃，请勿使用
     *
     * @return self
     */
    public function setAlipayUserId($alipayUserId)
    {
        $this->container['alipayUserId'] = $alipayUserId;

        return $this;
    }

    /**
     * Gets authStart
     *
     * @return string|null
     */
    public function getAuthStart()
    {
        return $this->container['authStart'];
    }

    /**
     * Sets authStart
     *
     * @param string|null $authStart 授权token开始时间，作为有效期计算的起点
     *
     * @return self
     */
    public function setAuthStart($authStart)
    {
        $this->container['authStart'] = $authStart;

        return $this;
    }

    /**
     * Gets authTokenType
     *
     * @return string|null
     */
    public function getAuthTokenType()
    {
        return $this->container['authTokenType'];
    }

    /**
     * Sets authTokenType
     *
     * @param string|null $authTokenType 令牌类型，permanent表示返回的access_token和refresh_token永久有效，非永久令牌不返回该字段
     *
     * @return self
     */
    public function setAuthTokenType($authTokenType)
    {
        $this->container['authTokenType'] = $authTokenType;

        return $this;
    }

    /**
     * Gets expiresIn
     *
     * @return string|null
     */
    public function getExpiresIn()
    {
        return $this->container['expiresIn'];
    }

    /**
     * Sets expiresIn
     *
     * @param string|null $expiresIn 访问令牌的有效时间，单位是秒。
     *
     * @return self
     */
    public function setExpiresIn($expiresIn)
    {
        $this->container['expiresIn'] = $expiresIn;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 支付宝用户唯一标识
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets reExpiresIn
     *
     * @return string|null
     */
    public function getReExpiresIn()
    {
        return $this->container['reExpiresIn'];
    }

    /**
     * Sets reExpiresIn
     *
     * @param string|null $reExpiresIn 刷新令牌的有效时间，单位是秒。
     *
     * @return self
     */
    public function setReExpiresIn($reExpiresIn)
    {
        $this->container['reExpiresIn'] = $reExpiresIn;

        return $this;
    }

    /**
     * Gets refreshToken
     *
     * @return string|null
     */
    public function getRefreshToken()
    {
        return $this->container['refreshToken'];
    }

    /**
     * Sets refreshToken
     *
     * @param string|null $refreshToken 刷新令牌。通过该令牌可以刷新access_token
     *
     * @return self
     */
    public function setRefreshToken($refreshToken)
    {
        $this->container['refreshToken'] = $refreshToken;

        return $this;
    }

    /**
     * Gets unionId
     *
     * @return string|null
     */
    public function getUnionId()
    {
        return $this->container['unionId'];
    }

    /**
     * Sets unionId
     *
     * @param string|null $unionId union_id是支付宝用户在开放平台的唯一标识符，在配置应用分组后会返回该值。 同一用户的union_id在同一分组内应用保持一致。
     *
     * @return self
     */
    public function setUnionId($unionId)
    {
        $this->container['unionId'] = $unionId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 支付宝用户的唯一标识。以2088开头的16位数字。
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

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


