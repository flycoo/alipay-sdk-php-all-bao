<?php
/**
 * AlipayMerchantOrderSyncDefaultResponse
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
 * AlipayMerchantOrderSyncDefaultResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMerchantOrderSyncDefaultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_merchant_order_sync_default_response';

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

    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_MATERIAL_ID_ILLEGAL = 'MATERIAL_ID_ILLEGAL';
    public const CODE_CONTENT_ILLEGAL = 'CONTENT_ILLEGAL';
    public const CODE_TINY_APP_ID_NULL = 'TINY_APP_ID_NULL';
    public const CODE_TINY_APP_ID_ILLEGAL = 'TINY_APP_ID_ILLEGAL';
    public const CODE_LOGISTICS_INFO_EXIST = 'LOGISTICS_INFO_EXIST';
    public const CODE_TRADE_NOT_EXIST = 'TRADE_NOT_EXIST';
    public const CODE_ITEM_INFO_NOT_COMPLETE = 'ITEM_INFO_NOT_COMPLETE';
    public const CODE_NO_PERMISSOON = 'NO_PERMISSOON';
    public const CODE_ORDER_ERROR_STATUS = 'ORDER_ERROR_STATUS';
    public const CODE_LOGISTICS_SIZE_LARGE = 'LOGISTICS_SIZE_LARGE';
    public const CODE_ITEM_HAS_EXIST = 'ITEM_HAS_EXIST';
    public const CODE_AMOUNT_ILLEGAL = 'AMOUNT_ILLEGAL';
    public const CODE_RECORD_NOT_EXIST = 'RECORD_NOT_EXIST';
    public const CODE_DATA_INCONSISTENT = 'DATA_INCONSISTENT';
    public const CODE_ITEM_DUPLICATED = 'ITEM_DUPLICATED';
    public const CODE_BUYER_STATUS_ERROR = 'BUYER_STATUS_ERROR';
    public const CODE_RECORD_ID_IS_NULL = 'RECORD_ID_IS_NULL';
    public const CODE_OUT_BIZ_NO_IS_NULL = 'OUT_BIZ_NO_IS_NULL';
    public const CODE_BUYER_ID_IS_NULL = 'BUYER_ID_IS_NULL';
    public const CODE_BUYER_INFO_IS_NULL = 'BUYER_INFO_IS_NULL';
    public const CODE_BUYER_NAME_IS_NULL = 'BUYER_NAME_IS_NULL';
    public const CODE_BUYER_MOBILE_ILLEGAL = 'BUYER_MOBILE_ILLEGAL';
    public const CODE_BUYER_MOBILE_IS_NULL = 'BUYER_MOBILE_IS_NULL';
    public const CODE_BUYER_CERT_NO_IS_NULL = 'BUYER_CERT_NO_IS_NULL';
    public const CODE_SELLER_ID_IS_NULL = 'SELLER_ID_IS_NULL';
    public const CODE_AMOUNT_IS_NULL = 'AMOUNT_IS_NULL';
    public const CODE_PAY_AMOUNT_IS_NULL = 'PAY_AMOUNT_IS_NULL';
    public const CODE_PAY_TIMEOUT_EXPRESS_ILLEGAL = 'PAY_TIMEOUT_EXPRESS_ILLEGAL';
    public const CODE_MERCHANT_ORDER_STATUS_ILLEGAL = 'MERCHANT_ORDER_STATUS_ILLEGAL';
    public const CODE_BUYER_NOT_FOUND = 'BUYER_NOT_FOUND';
    public const CODE_BUYER_INFO_ERROR = 'BUYER_INFO_ERROR';
    public const CODE_RECORD_ID_ILLEGAL = 'RECORD_ID_ILLEGAL';
    public const CODE_MINICENTER_INVOKE_ERROR = 'MINICENTER_INVOKE_ERROR';
    public const CODE_MERCHANT_LINK_EXIST = 'MERCHANT_LINK_EXIST';
    public const CODE_ARGUMENT_NULL = 'ARGUMENT_NULL';
    public const CODE_PAY_CHANNEL_IS_NULL = 'PAY_CHANNEL_IS_NULL';
    public const CODE_PAY_CHANNEL_ERROR = 'PAY_CHANNEL_ERROR';
    public const CODE_TRADE_NO_NOT_MATCH = 'TRADE_NO_NOT_MATCH';
    public const CODE_INFO_SEC_ERROR = 'INFO_SEC_ERROR';
    public const CODE_ITEM_NOT_MATCH = 'ITEM_NOT_MATCH';
    public const CODE_TINY_APP_IS_NOT_ONLINE = 'TINY_APP_IS_NOT_ONLINE';
    public const CODE_TINY_APP_ID_NOT_SYNC_EQUAL_TRADE = 'TINY_APP_ID_NOT_SYNC_EQUAL_TRADE';
    public const CODE_DATA_ACCESS_EXCEPTION = 'DATA_ACCESS_EXCEPTION';
    public const CODE_INVALID_ORDER_AUTH_CODE = 'INVALID_ORDER_AUTH_CODE';
    public const CODE_SERVICE_REFUSED = 'SERVICE_REFUSED';
    public const CODE_DUPLICATE_REQUEST = 'DUPLICATE_REQUEST';
    public const CODE_NO_NEED_RETRY_ERROR = 'NO_NEED_RETRY_ERROR';
    public const CODE_SERVICE_CODE_STATUS_ERROR = 'SERVICE_CODE_STATUS_ERROR';
    public const CODE_USER_NOT_AUTHORIZED = 'USER_NOT_AUTHORIZED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_SYSTEM_ERROR,
            self::CODE_INVALID_PARAMETER,
            self::CODE_MATERIAL_ID_ILLEGAL,
            self::CODE_CONTENT_ILLEGAL,
            self::CODE_TINY_APP_ID_NULL,
            self::CODE_TINY_APP_ID_ILLEGAL,
            self::CODE_LOGISTICS_INFO_EXIST,
            self::CODE_TRADE_NOT_EXIST,
            self::CODE_ITEM_INFO_NOT_COMPLETE,
            self::CODE_NO_PERMISSOON,
            self::CODE_ORDER_ERROR_STATUS,
            self::CODE_LOGISTICS_SIZE_LARGE,
            self::CODE_ITEM_HAS_EXIST,
            self::CODE_AMOUNT_ILLEGAL,
            self::CODE_RECORD_NOT_EXIST,
            self::CODE_DATA_INCONSISTENT,
            self::CODE_ITEM_DUPLICATED,
            self::CODE_BUYER_STATUS_ERROR,
            self::CODE_RECORD_ID_IS_NULL,
            self::CODE_OUT_BIZ_NO_IS_NULL,
            self::CODE_BUYER_ID_IS_NULL,
            self::CODE_BUYER_INFO_IS_NULL,
            self::CODE_BUYER_NAME_IS_NULL,
            self::CODE_BUYER_MOBILE_ILLEGAL,
            self::CODE_BUYER_MOBILE_IS_NULL,
            self::CODE_BUYER_CERT_NO_IS_NULL,
            self::CODE_SELLER_ID_IS_NULL,
            self::CODE_AMOUNT_IS_NULL,
            self::CODE_PAY_AMOUNT_IS_NULL,
            self::CODE_PAY_TIMEOUT_EXPRESS_ILLEGAL,
            self::CODE_MERCHANT_ORDER_STATUS_ILLEGAL,
            self::CODE_BUYER_NOT_FOUND,
            self::CODE_BUYER_INFO_ERROR,
            self::CODE_RECORD_ID_ILLEGAL,
            self::CODE_MINICENTER_INVOKE_ERROR,
            self::CODE_MERCHANT_LINK_EXIST,
            self::CODE_ARGUMENT_NULL,
            self::CODE_PAY_CHANNEL_IS_NULL,
            self::CODE_PAY_CHANNEL_ERROR,
            self::CODE_TRADE_NO_NOT_MATCH,
            self::CODE_INFO_SEC_ERROR,
            self::CODE_ITEM_NOT_MATCH,
            self::CODE_TINY_APP_IS_NOT_ONLINE,
            self::CODE_TINY_APP_ID_NOT_SYNC_EQUAL_TRADE,
            self::CODE_DATA_ACCESS_EXCEPTION,
            self::CODE_INVALID_ORDER_AUTH_CODE,
            self::CODE_SERVICE_REFUSED,
            self::CODE_DUPLICATE_REQUEST,
            self::CODE_NO_NEED_RETRY_ERROR,
            self::CODE_SERVICE_CODE_STATUS_ERROR,
            self::CODE_USER_NOT_AUTHORIZED,
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


