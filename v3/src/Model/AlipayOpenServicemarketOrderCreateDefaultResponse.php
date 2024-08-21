<?php
/**
 * AlipayOpenServicemarketOrderCreateDefaultResponse
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
 * AlipayOpenServicemarketOrderCreateDefaultResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenServicemarketOrderCreateDefaultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_open_servicemarket_order_create_default_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_BIZ_ERROR = 'BIZ_ERROR';
    public const CODE_AGENT_AUTH_FAIL = 'AGENT_AUTH_FAIL';
    public const CODE_NOT_SUPPORT_ORDER_BY_OPENAPI = 'NOT_SUPPORT_ORDER_BY_OPENAPI';
    public const CODE_USER_INVALID_STATUS = 'USER_INVALID_STATUS';
    public const CODE_USER_NOT_EXIST = 'USER_NOT_EXIST';
    public const CODE_SIGN_AGREEMENT_FAILED = 'SIGN_AGREEMENT_FAILED';
    public const CODE_MINI_APP_NAME_DUPLICATE = 'MINI_APP_NAME_DUPLICATE';
    public const CODE_ENGLISH_NAME_IS_BLANK = 'ENGLISH_NAME_IS_BLANK';
    public const CODE_INVALID_MINI_APP_EN_NAME = 'INVALID_MINI_APP_EN_NAME';
    public const CODE_MINI_APP_NAME_SENSITIVE = 'MINI_APP_NAME_SENSITIVE';
    public const CODE_INVALID_MINI_APP_EN_NAME_LENGTH = 'INVALID_MINI_APP_EN_NAME_LENGTH';
    public const CODE_APP_NAME_IS_BLANK = 'APP_NAME_IS_BLANK';
    public const CODE_INVALID_MINI_APP_NAME = 'INVALID_MINI_APP_NAME';
    public const CODE_INVALID_MINI_APP_NAME_LENGTH = 'INVALID_MINI_APP_NAME_LENGTH';
    public const CODE_CREATE_MINI_APP_EXCEED_MAX_COUNT = 'CREATE_MINI_APP_EXCEED_MAX_COUNT';
    public const CODE_INVALID_CATEGORY = 'INVALID_CATEGORY';
    public const CODE_RISK_DECISION_CHECK_FAIL = 'RISK_DECISION_CHECK_FAIL';
    public const CODE_BLACK_LIST_CHECK_FAIL = 'BLACK_LIST_CHECK_FAIL';
    public const CODE_MINI_APP_EN_NAME_SENSITIVE = 'MINI_APP_EN_NAME_SENSITIVE';
    public const CODE_MINI_APP_SLOGAN_SENSITIVE = 'MINI_APP_SLOGAN_SENSITIVE';
    public const CODE_MINI_APP_DESC_SENSITIVE = 'MINI_APP_DESC_SENSITIVE';
    public const CODE_MINI_APP_SERVICE_MAIL_SENSITIVE = 'MINI_APP_SERVICE_MAIL_SENSITIVE';
    public const CODE_CREATE_MINI_APP_PID_PUNISH = 'CREATE_MINI_APP_PID_PUNISH';
    public const CODE_MINI_APP_EN_NAME_DUPLICATE = 'MINI_APP_EN_NAME_DUPLICATE';
    public const CODE_APP_ID_EXIST = 'APP_ID_EXIST';
    public const CODE_APP_ID_ILLEGAL = 'APP_ID_ILLEGAL';
    public const CODE_INVALID_MINI_APP_DESC_LENGTH = 'INVALID_MINI_APP_DESC_LENGTH';
    public const CODE_RISK_DECISION_HIT_BRAND = 'RISK_DECISION_HIT_BRAND';
    public const CODE_INVALID_MINI_APP_SLOGAN_LENGTH = 'INVALID_MINI_APP_SLOGAN_LENGTH';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_INVALID_PARAMETER,
            self::CODE_SYSTEM_ERROR,
            self::CODE_BIZ_ERROR,
            self::CODE_AGENT_AUTH_FAIL,
            self::CODE_NOT_SUPPORT_ORDER_BY_OPENAPI,
            self::CODE_USER_INVALID_STATUS,
            self::CODE_USER_NOT_EXIST,
            self::CODE_SIGN_AGREEMENT_FAILED,
            self::CODE_MINI_APP_NAME_DUPLICATE,
            self::CODE_ENGLISH_NAME_IS_BLANK,
            self::CODE_INVALID_MINI_APP_EN_NAME,
            self::CODE_MINI_APP_NAME_SENSITIVE,
            self::CODE_INVALID_MINI_APP_EN_NAME_LENGTH,
            self::CODE_APP_NAME_IS_BLANK,
            self::CODE_INVALID_MINI_APP_NAME,
            self::CODE_INVALID_MINI_APP_NAME_LENGTH,
            self::CODE_CREATE_MINI_APP_EXCEED_MAX_COUNT,
            self::CODE_INVALID_CATEGORY,
            self::CODE_RISK_DECISION_CHECK_FAIL,
            self::CODE_BLACK_LIST_CHECK_FAIL,
            self::CODE_MINI_APP_EN_NAME_SENSITIVE,
            self::CODE_MINI_APP_SLOGAN_SENSITIVE,
            self::CODE_MINI_APP_DESC_SENSITIVE,
            self::CODE_MINI_APP_SERVICE_MAIL_SENSITIVE,
            self::CODE_CREATE_MINI_APP_PID_PUNISH,
            self::CODE_MINI_APP_EN_NAME_DUPLICATE,
            self::CODE_APP_ID_EXIST,
            self::CODE_APP_ID_ILLEGAL,
            self::CODE_INVALID_MINI_APP_DESC_LENGTH,
            self::CODE_RISK_DECISION_HIT_BRAND,
            self::CODE_INVALID_MINI_APP_SLOGAN_LENGTH,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        //if ($this->container['code'] === null) {
        //    $invalidProperties[] = "'code' can't be null";
        //}
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        //if ($this->container['message'] === null) {
        //    $invalidProperties[] = "'message' can't be null";
        //}
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


