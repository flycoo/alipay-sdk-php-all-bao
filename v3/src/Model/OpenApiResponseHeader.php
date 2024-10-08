<?php
/**
 * OpenApiResponseHeader
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
 * OpenApiResponseHeader Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OpenApiResponseHeader implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpenApiResponseHeader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'conversationId' => 'string',
        'responseId' => 'string',
        'statusCode' => 'string',
        'statusMessage' => 'string',
        'subStatusCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'conversationId' => null,
        'responseId' => null,
        'statusCode' => null,
        'statusMessage' => null,
        'subStatusCode' => null
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
        'conversationId' => 'conversation_id',
        'responseId' => 'response_id',
        'statusCode' => 'status_code',
        'statusMessage' => 'status_message',
        'subStatusCode' => 'sub_status_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'conversationId' => 'setConversationId',
        'responseId' => 'setResponseId',
        'statusCode' => 'setStatusCode',
        'statusMessage' => 'setStatusMessage',
        'subStatusCode' => 'setSubStatusCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'conversationId' => 'getConversationId',
        'responseId' => 'getResponseId',
        'statusCode' => 'getStatusCode',
        'statusMessage' => 'getStatusMessage',
        'subStatusCode' => 'getSubStatusCode'
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
        $this->container['conversationId'] = $data['conversationId'] ?? null;
        $this->container['responseId'] = $data['responseId'] ?? null;
        $this->container['statusCode'] = $data['statusCode'] ?? null;
        $this->container['statusMessage'] = $data['statusMessage'] ?? null;
        $this->container['subStatusCode'] = $data['subStatusCode'] ?? null;
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
     * Gets conversationId
     *
     * @return string|null
     */
    public function getConversationId()
    {
        return $this->container['conversationId'];
    }

    /**
     * Sets conversationId
     *
     * @param string|null $conversationId 会话id，对应请求中的conversation_id，若请求中conversation_id非空，则该值非空
     *
     * @return self
     */
    public function setConversationId($conversationId)
    {
        $this->container['conversationId'] = $conversationId;

        return $this;
    }

    /**
     * Gets responseId
     *
     * @return string|null
     */
    public function getResponseId()
    {
        return $this->container['responseId'];
    }

    /**
     * Sets responseId
     *
     * @param string|null $responseId 响应id，对应请求中的request_id。如果请求中request_id非空，则response_id非空。
     *
     * @return self
     */
    public function setResponseId($responseId)
    {
        $this->container['responseId'] = $responseId;

        return $this;
    }

    /**
     * Gets statusCode
     *
     * @return string|null
     */
    public function getStatusCode()
    {
        return $this->container['statusCode'];
    }

    /**
     * Sets statusCode
     *
     * @param string|null $statusCode 自定义状态码
     *
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->container['statusCode'] = $statusCode;

        return $this;
    }

    /**
     * Gets statusMessage
     *
     * @return string|null
     */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
     * Sets statusMessage
     *
     * @param string|null $statusMessage 状态信息
     *
     * @return self
     */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;

        return $this;
    }

    /**
     * Gets subStatusCode
     *
     * @return string|null
     */
    public function getSubStatusCode()
    {
        return $this->container['subStatusCode'];
    }

    /**
     * Sets subStatusCode
     *
     * @param string|null $subStatusCode 子状态码
     *
     * @return self
     */
    public function setSubStatusCode($subStatusCode)
    {
        $this->container['subStatusCode'] = $subStatusCode;

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


