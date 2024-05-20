<?php
/**
 * VoucherSendModeInfo
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
 * VoucherSendModeInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherSendModeInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherSendModeInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'voucherPackageModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherPackageModeInfo',
        'voucherSaleModeInfo' => '\Alipay\OpenAPISDK\Model\VoucherSaleModeInfo',
        'voucherSendMode' => 'string',
        'voucherSendRuleInfo' => '\Alipay\OpenAPISDK\Model\VoucherSendRuleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'voucherPackageModeInfo' => null,
        'voucherSaleModeInfo' => null,
        'voucherSendMode' => null,
        'voucherSendRuleInfo' => null
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
        'voucherPackageModeInfo' => 'voucher_package_mode_info',
        'voucherSaleModeInfo' => 'voucher_sale_mode_info',
        'voucherSendMode' => 'voucher_send_mode',
        'voucherSendRuleInfo' => 'voucher_send_rule_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'voucherPackageModeInfo' => 'setVoucherPackageModeInfo',
        'voucherSaleModeInfo' => 'setVoucherSaleModeInfo',
        'voucherSendMode' => 'setVoucherSendMode',
        'voucherSendRuleInfo' => 'setVoucherSendRuleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'voucherPackageModeInfo' => 'getVoucherPackageModeInfo',
        'voucherSaleModeInfo' => 'getVoucherSaleModeInfo',
        'voucherSendMode' => 'getVoucherSendMode',
        'voucherSendRuleInfo' => 'getVoucherSendRuleInfo'
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
        $this->container['voucherPackageModeInfo'] = $data['voucherPackageModeInfo'] ?? null;
        $this->container['voucherSaleModeInfo'] = $data['voucherSaleModeInfo'] ?? null;
        $this->container['voucherSendMode'] = $data['voucherSendMode'] ?? null;
        $this->container['voucherSendRuleInfo'] = $data['voucherSendRuleInfo'] ?? null;
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
     * Gets voucherPackageModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherPackageModeInfo|null
     */
    public function getVoucherPackageModeInfo()
    {
        return $this->container['voucherPackageModeInfo'];
    }

    /**
     * Sets voucherPackageModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherPackageModeInfo|null $voucherPackageModeInfo voucherPackageModeInfo
     *
     * @return self
     */
    public function setVoucherPackageModeInfo($voucherPackageModeInfo)
    {
        $this->container['voucherPackageModeInfo'] = $voucherPackageModeInfo;

        return $this;
    }

    /**
     * Gets voucherSaleModeInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSaleModeInfo|null
     */
    public function getVoucherSaleModeInfo()
    {
        return $this->container['voucherSaleModeInfo'];
    }

    /**
     * Sets voucherSaleModeInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSaleModeInfo|null $voucherSaleModeInfo voucherSaleModeInfo
     *
     * @return self
     */
    public function setVoucherSaleModeInfo($voucherSaleModeInfo)
    {
        $this->container['voucherSaleModeInfo'] = $voucherSaleModeInfo;

        return $this;
    }

    /**
     * Gets voucherSendMode
     *
     * @return string|null
     */
    public function getVoucherSendMode()
    {
        return $this->container['voucherSendMode'];
    }

    /**
     * Sets voucherSendMode
     *
     * @param string|null $voucherSendMode 券发放模式。
     *
     * @return self
     */
    public function setVoucherSendMode($voucherSendMode)
    {
        $this->container['voucherSendMode'] = $voucherSendMode;

        return $this;
    }

    /**
     * Gets voucherSendRuleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\VoucherSendRuleInfo|null
     */
    public function getVoucherSendRuleInfo()
    {
        return $this->container['voucherSendRuleInfo'];
    }

    /**
     * Sets voucherSendRuleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\VoucherSendRuleInfo|null $voucherSendRuleInfo voucherSendRuleInfo
     *
     * @return self
     */
    public function setVoucherSendRuleInfo($voucherSendRuleInfo)
    {
        $this->container['voucherSendRuleInfo'] = $voucherSendRuleInfo;

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


