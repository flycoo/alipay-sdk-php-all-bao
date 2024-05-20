<?php
/**
 * AlipayTradeRefundErrorResponseModel
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
 * AlipayTradeRefundErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayTradeRefundErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayTradeRefundErrorResponseModel';

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

    public const CODE_SYSTEM_ERROR = 'ACQ.SYSTEM_ERROR';
    public const CODE_INVALID_PARAMETER = 'ACQ.INVALID_PARAMETER';
    public const CODE_SELLER_BALANCE_NOT_ENOUGH = 'ACQ.SELLER_BALANCE_NOT_ENOUGH';
    public const CODE_REFUND_AMT_NOT_EQUAL_TOTAL = 'ACQ.REFUND_AMT_NOT_EQUAL_TOTAL';
    public const CODE_REASON_TRADE_BEEN_FREEZEN = 'ACQ.REASON_TRADE_BEEN_FREEZEN';
    public const CODE_TRADE_NOT_EXIST = 'ACQ.TRADE_NOT_EXIST';
    public const CODE_TRADE_HAS_FINISHED = 'ACQ.TRADE_HAS_FINISHED';
    public const CODE_TRADE_STATUS_ERROR = 'ACQ.TRADE_STATUS_ERROR';
    public const CODE_DISCORDANT_REPEAT_REQUEST = 'ACQ.DISCORDANT_REPEAT_REQUEST';
    public const CODE_REASON_TRADE_REFUND_FEE_ERR = 'ACQ.REASON_TRADE_REFUND_FEE_ERR';
    public const CODE_TRADE_NOT_ALLOW_REFUND = 'ACQ.TRADE_NOT_ALLOW_REFUND';
    public const CODE_REFUND_FEE_ERROR = 'ACQ.REFUND_FEE_ERROR';
    public const CODE_TRADE_HAS_CLOSE = 'ACQ.TRADE_HAS_CLOSE';
    public const CODE_BUYER_NOT_EXIST = 'ACQ.BUYER_NOT_EXIST';
    public const CODE_BUYER_ENABLE_STATUS_FORBID = 'ACQ.BUYER_ENABLE_STATUS_FORBID';
    public const CODE_REASON_TRADE_STATUS_INVALID = 'ACQ.REASON_TRADE_STATUS_INVALID';
    public const CODE_NOT_ALLOW_PARTIAL_REFUND = 'ACQ.NOT_ALLOW_PARTIAL_REFUND';
    public const CODE_ONLINE_TRADE_VOUCHER_NOT_ALLOW_REFUND = 'ACQ.ONLINE_TRADE_VOUCHER_NOT_ALLOW_REFUND';
    public const CODE_BUYER_ERROR = 'ACQ.BUYER_ERROR';
    public const CODE_CURRENCY_NOT_SUPPORT = 'ACQ.CURRENCY_NOT_SUPPORT';
    public const CODE_ALLOC_AMOUNT_VALIDATE_ERROR = 'ACQ.ALLOC_AMOUNT_VALIDATE_ERROR';
    public const CODE_USER_NOT_MATCH_ERR = 'ACQ.USER_NOT_MATCH_ERR';
    public const CODE_TRADE_SETTLE_ERROR = 'ACQ.TRADE_SETTLE_ERROR';
    public const CODE_REFUND_CHARGE_ERROR = 'ACQ.REFUND_CHARGE_ERROR';
    public const CODE_ENTERPRISE_PAY_BIZ_ERROR = 'ACQ.ENTERPRISE_PAY_BIZ_ERROR';
    public const CODE_OVERDRAFT_ASSIGN_ACCOUNT_INVALID = 'ACQ.OVERDRAFT_ASSIGN_ACCOUNT_INVALID';
    public const CODE_OVERDRAFT_AGREEMENT_NOT_MATCH = 'ACQ.OVERDRAFT_AGREEMENT_NOT_MATCH';
    public const CODE_REFUND_ACCOUNT_NOT_EXIST = 'ACQ.REFUND_ACCOUNT_NOT_EXIST';
    public const CODE_CUSTOMER_VALIDATE_ERROR = 'ACQ.CUSTOMER_VALIDATE_ERROR';
    public const CODE_REFUND_ROYALTY_PAYEE_ACCOUNT_NOT_EXIST = 'ACQ.REFUND_ROYALTY_PAYEE_ACCOUNT_NOT_EXIST';

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
            self::CODE_SELLER_BALANCE_NOT_ENOUGH,
            self::CODE_REFUND_AMT_NOT_EQUAL_TOTAL,
            self::CODE_REASON_TRADE_BEEN_FREEZEN,
            self::CODE_TRADE_NOT_EXIST,
            self::CODE_TRADE_HAS_FINISHED,
            self::CODE_TRADE_STATUS_ERROR,
            self::CODE_DISCORDANT_REPEAT_REQUEST,
            self::CODE_REASON_TRADE_REFUND_FEE_ERR,
            self::CODE_TRADE_NOT_ALLOW_REFUND,
            self::CODE_REFUND_FEE_ERROR,
            self::CODE_TRADE_HAS_CLOSE,
            self::CODE_BUYER_NOT_EXIST,
            self::CODE_BUYER_ENABLE_STATUS_FORBID,
            self::CODE_REASON_TRADE_STATUS_INVALID,
            self::CODE_NOT_ALLOW_PARTIAL_REFUND,
            self::CODE_ONLINE_TRADE_VOUCHER_NOT_ALLOW_REFUND,
            self::CODE_BUYER_ERROR,
            self::CODE_CURRENCY_NOT_SUPPORT,
            self::CODE_ALLOC_AMOUNT_VALIDATE_ERROR,
            self::CODE_USER_NOT_MATCH_ERR,
            self::CODE_TRADE_SETTLE_ERROR,
            self::CODE_REFUND_CHARGE_ERROR,
            self::CODE_ENTERPRISE_PAY_BIZ_ERROR,
            self::CODE_OVERDRAFT_ASSIGN_ACCOUNT_INVALID,
            self::CODE_OVERDRAFT_AGREEMENT_NOT_MATCH,
            self::CODE_REFUND_ACCOUNT_NOT_EXIST,
            self::CODE_CUSTOMER_VALIDATE_ERROR,
            self::CODE_REFUND_ROYALTY_PAYEE_ACCOUNT_NOT_EXIST,
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


