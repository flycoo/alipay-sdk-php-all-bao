<?php
/**
 * UserDetails
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
 * UserDetails Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UserDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userChangeMobile' => 'string',
        'userMobile' => 'string',
        'userName' => 'string',
        'userRelation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'userChangeMobile' => null,
        'userMobile' => null,
        'userName' => null,
        'userRelation' => null
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
        'userChangeMobile' => 'user_change_mobile',
        'userMobile' => 'user_mobile',
        'userName' => 'user_name',
        'userRelation' => 'user_relation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userChangeMobile' => 'setUserChangeMobile',
        'userMobile' => 'setUserMobile',
        'userName' => 'setUserName',
        'userRelation' => 'setUserRelation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userChangeMobile' => 'getUserChangeMobile',
        'userMobile' => 'getUserMobile',
        'userName' => 'getUserName',
        'userRelation' => 'getUserRelation'
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
        $this->container['userChangeMobile'] = $data['userChangeMobile'] ?? null;
        $this->container['userMobile'] = $data['userMobile'] ?? null;
        $this->container['userName'] = $data['userName'] ?? null;
        $this->container['userRelation'] = $data['userRelation'] ?? null;
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
     * Gets userChangeMobile
     *
     * @return string|null
     */
    public function getUserChangeMobile()
    {
        return $this->container['userChangeMobile'];
    }

    /**
     * Sets userChangeMobile
     *
     * @param string|null $userChangeMobile 用户变更手机号，替换旧的手机号
     *
     * @return self
     */
    public function setUserChangeMobile($userChangeMobile)
    {
        $this->container['userChangeMobile'] = $userChangeMobile;

        return $this;
    }

    /**
     * Gets userMobile
     *
     * @return string|null
     */
    public function getUserMobile()
    {
        return $this->container['userMobile'];
    }

    /**
     * Sets userMobile
     *
     * @param string|null $userMobile 孩子家长的手机号
     *
     * @return self
     */
    public function setUserMobile($userMobile)
    {
        $this->container['userMobile'] = $userMobile;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string|null
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string|null $userName 张三
     *
     * @return self
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets userRelation
     *
     * @return string|null
     */
    public function getUserRelation()
    {
        return $this->container['userRelation'];
    }

    /**
     * Sets userRelation
     *
     * @param string|null $userRelation 孩子与家长的关系： 1、爸爸  2、妈妈  3、爷爷  4、奶奶  5、外公  6、外婆  7、家长
     *
     * @return self
     */
    public function setUserRelation($userRelation)
    {
        $this->container['userRelation'] = $userRelation;

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


