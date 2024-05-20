<?php
/**
 * AlipayOfflineMarketShopModifyErrorResponseModel
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
 * AlipayOfflineMarketShopModifyErrorResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketShopModifyErrorResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketShopModifyErrorResponseModel';

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

    public const CODE_SHOP_MODIFY_SYSTEM_ERROR = 'SHOP_MODIFY_SYSTEM_ERROR';
    public const CODE_SHOP_MODIFY_INVALID_PARAM = 'SHOP_MODIFY_INVALID_PARAM';
    public const CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_SHOP_ERROR = 'SHOP_MODIFY_UNIQUE_CONSTRAINT_SHOP_ERROR';
    public const CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_IMPLEMENTID_ERROR = 'SHOP_MODIFY_UNIQUE_CONSTRAINT_IMPLEMENTID_ERROR';
    public const CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_OUTSHOPID_ERROR = 'SHOP_MODIFY_UNIQUE_CONSTRAINT_OUTSHOPID_ERROR';
    public const CODE_SHOP_MODIFY_CATOGORY_NOT_EXISTS = 'SHOP_MODIFY_CATOGORY_NOT_EXISTS';
    public const CODE_SHOP_MODIFY_NO_CONTRACT = 'SHOP_MODIFY_NO_CONTRACT';
    public const CODE_SHOP_MODIFY_NO_PROVIDER_CONTRACT = 'SHOP_MODIFY_NO_PROVIDER_CONTRACT';
    public const CODE_SHOP_MODIFY_NO_PROVIDER_MERCHANT_RELATION = 'SHOP_MODIFY_NO_PROVIDER_MERCHANT_RELATION';
    public const CODE_SHOP_MODIFY_SHOP_JUDGE_FAIL = 'SHOP_MODIFY_SHOP_JUDGE_FAIL';
    public const CODE_SHOP_MODIFY_NO_PROVIDER_SHOP_RELATION = 'SHOP_MODIFY_NO_PROVIDER_SHOP_RELATION';
    public const CODE_SHOP_MODIFY_LICENSE_EXPIRES = 'SHOP_MODIFY_LICENSE_EXPIRES';
    public const CODE_SHOP_MODIFY_SHOP_NOT_EXISTS = 'SHOP_MODIFY_SHOP_NOT_EXISTS';
    public const CODE_LICENSE_IS_REQUIRED = 'LICENSE_IS_REQUIRED';
    public const CODE_CERTIFICATE_IS_REQUIRED = 'CERTIFICATE_IS_REQUIRED';
    public const CODE_SHOP_CATEGORY_NOT_MATCH_CITY = 'SHOP_CATEGORY_NOT_MATCH_CITY';
    public const CODE_BRAND_CATEGORY_NOT_MATCH = 'BRAND_CATEGORY_NOT_MATCH';
    public const CODE_IMPLEMENT_ID_INVALID = 'IMPLEMENT_ID_INVALID';
    public const CODE_EXIST_FORBIDDEN_WORD = 'EXIST_FORBIDDEN_WORD';
    public const CODE_MERCHANT_NOT_EXIST = 'MERCHANT_NOT_EXIST';
    public const CODE_LICENSE_CODE_REPEAT_ERROR = 'LICENSE_CODE_REPEAT_ERROR';
    public const CODE_SHOP_CTU_RISK = 'SHOP_CTU_RISK';
    public const CODE_SHOP_STATUS_CANOT_MODIFY = 'SHOP_STATUS_CANOT_MODIFY';
    public const CODE_SHOP_BRAND_PROTECTED = 'SHOP_BRAND_PROTECTED';
    public const CODE_PROVINCE_CITY_CANOT_MODIFY = 'PROVINCE_CITY_CANOT_MODIFY';
    public const CODE_CATEGORY_CANOT_MODIFY = 'CATEGORY_CANOT_MODIFY';
    public const CODE_NOT_ALLOWED_CONCURRENT_MODIFY = 'NOT_ALLOWED_CONCURRENT_MODIFY';
    public const CODE_SHOP_MODIFY_LICENSE_PRINCIPAL_NOT_MATCH = 'SHOP_MODIFY_LICENSE_PRINCIPAL_NOT_MATCH';
    public const CODE_SHOP_MODIFY_LOCATION_VALIDATE_FAIL = 'SHOP_MODIFY_LOCATION_VALIDATE_FAIL';
    public const CODE_AREA_CAN_NOT_NULL = 'AREA_CAN_NOT_NULL';
    public const CODE_AREA_NOT_LEGALITY = 'AREA_NOT_LEGALITY';
    public const CODE_LICENSE_NO_RULE_ERROR = 'LICENSE_NO_RULE_ERROR';
    public const CODE_BUSINESS_TIME_RULE_ERROR = 'BUSINESS_TIME_RULE_ERROR';
    public const CODE_OUT_SHOP_ID_RULE_ERROR = 'OUT_SHOP_ID_RULE_ERROR';
    public const CODE_VALIDITYDATE_RULE_ERROR = 'VALIDITYDATE_RULE_ERROR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_SHOP_MODIFY_SYSTEM_ERROR,
            self::CODE_SHOP_MODIFY_INVALID_PARAM,
            self::CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_SHOP_ERROR,
            self::CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_IMPLEMENTID_ERROR,
            self::CODE_SHOP_MODIFY_UNIQUE_CONSTRAINT_OUTSHOPID_ERROR,
            self::CODE_SHOP_MODIFY_CATOGORY_NOT_EXISTS,
            self::CODE_SHOP_MODIFY_NO_CONTRACT,
            self::CODE_SHOP_MODIFY_NO_PROVIDER_CONTRACT,
            self::CODE_SHOP_MODIFY_NO_PROVIDER_MERCHANT_RELATION,
            self::CODE_SHOP_MODIFY_SHOP_JUDGE_FAIL,
            self::CODE_SHOP_MODIFY_NO_PROVIDER_SHOP_RELATION,
            self::CODE_SHOP_MODIFY_LICENSE_EXPIRES,
            self::CODE_SHOP_MODIFY_SHOP_NOT_EXISTS,
            self::CODE_LICENSE_IS_REQUIRED,
            self::CODE_CERTIFICATE_IS_REQUIRED,
            self::CODE_SHOP_CATEGORY_NOT_MATCH_CITY,
            self::CODE_BRAND_CATEGORY_NOT_MATCH,
            self::CODE_IMPLEMENT_ID_INVALID,
            self::CODE_EXIST_FORBIDDEN_WORD,
            self::CODE_MERCHANT_NOT_EXIST,
            self::CODE_LICENSE_CODE_REPEAT_ERROR,
            self::CODE_SHOP_CTU_RISK,
            self::CODE_SHOP_STATUS_CANOT_MODIFY,
            self::CODE_SHOP_BRAND_PROTECTED,
            self::CODE_PROVINCE_CITY_CANOT_MODIFY,
            self::CODE_CATEGORY_CANOT_MODIFY,
            self::CODE_NOT_ALLOWED_CONCURRENT_MODIFY,
            self::CODE_SHOP_MODIFY_LICENSE_PRINCIPAL_NOT_MATCH,
            self::CODE_SHOP_MODIFY_LOCATION_VALIDATE_FAIL,
            self::CODE_AREA_CAN_NOT_NULL,
            self::CODE_AREA_NOT_LEGALITY,
            self::CODE_LICENSE_NO_RULE_ERROR,
            self::CODE_BUSINESS_TIME_RULE_ERROR,
            self::CODE_OUT_SHOP_ID_RULE_ERROR,
            self::CODE_VALIDITYDATE_RULE_ERROR,
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


