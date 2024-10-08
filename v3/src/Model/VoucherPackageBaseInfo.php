<?php
/**
 * VoucherPackageBaseInfo
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
 * VoucherPackageBaseInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class VoucherPackageBaseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VoucherPackageBaseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'purchaseEndTime' => 'string',
        'purchaseStartTime' => 'string',
        'voucherPackageId' => 'string',
        'voucherPackageName' => 'string',
        'voucherPackageStatus' => 'string',
        'voucherTotalAmount' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'purchaseEndTime' => null,
        'purchaseStartTime' => null,
        'voucherPackageId' => null,
        'voucherPackageName' => null,
        'voucherPackageStatus' => null,
        'voucherTotalAmount' => null
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
        'purchaseEndTime' => 'purchase_end_time',
        'purchaseStartTime' => 'purchase_start_time',
        'voucherPackageId' => 'voucher_package_id',
        'voucherPackageName' => 'voucher_package_name',
        'voucherPackageStatus' => 'voucher_package_status',
        'voucherTotalAmount' => 'voucher_total_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaseEndTime' => 'setPurchaseEndTime',
        'purchaseStartTime' => 'setPurchaseStartTime',
        'voucherPackageId' => 'setVoucherPackageId',
        'voucherPackageName' => 'setVoucherPackageName',
        'voucherPackageStatus' => 'setVoucherPackageStatus',
        'voucherTotalAmount' => 'setVoucherTotalAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaseEndTime' => 'getPurchaseEndTime',
        'purchaseStartTime' => 'getPurchaseStartTime',
        'voucherPackageId' => 'getVoucherPackageId',
        'voucherPackageName' => 'getVoucherPackageName',
        'voucherPackageStatus' => 'getVoucherPackageStatus',
        'voucherTotalAmount' => 'getVoucherTotalAmount'
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
        $this->container['purchaseEndTime'] = $data['purchaseEndTime'] ?? null;
        $this->container['purchaseStartTime'] = $data['purchaseStartTime'] ?? null;
        $this->container['voucherPackageId'] = $data['voucherPackageId'] ?? null;
        $this->container['voucherPackageName'] = $data['voucherPackageName'] ?? null;
        $this->container['voucherPackageStatus'] = $data['voucherPackageStatus'] ?? null;
        $this->container['voucherTotalAmount'] = $data['voucherTotalAmount'] ?? null;
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
     * Gets purchaseEndTime
     *
     * @return string|null
     */
    public function getPurchaseEndTime()
    {
        return $this->container['purchaseEndTime'];
    }

    /**
     * Sets purchaseEndTime
     *
     * @param string|null $purchaseEndTime 券包购买结束时间
     *
     * @return self
     */
    public function setPurchaseEndTime($purchaseEndTime)
    {
        $this->container['purchaseEndTime'] = $purchaseEndTime;

        return $this;
    }

    /**
     * Gets purchaseStartTime
     *
     * @return string|null
     */
    public function getPurchaseStartTime()
    {
        return $this->container['purchaseStartTime'];
    }

    /**
     * Sets purchaseStartTime
     *
     * @param string|null $purchaseStartTime 券包购买开始时间
     *
     * @return self
     */
    public function setPurchaseStartTime($purchaseStartTime)
    {
        $this->container['purchaseStartTime'] = $purchaseStartTime;

        return $this;
    }

    /**
     * Gets voucherPackageId
     *
     * @return string|null
     */
    public function getVoucherPackageId()
    {
        return $this->container['voucherPackageId'];
    }

    /**
     * Sets voucherPackageId
     *
     * @param string|null $voucherPackageId 券包id
     *
     * @return self
     */
    public function setVoucherPackageId($voucherPackageId)
    {
        $this->container['voucherPackageId'] = $voucherPackageId;

        return $this;
    }

    /**
     * Gets voucherPackageName
     *
     * @return string|null
     */
    public function getVoucherPackageName()
    {
        return $this->container['voucherPackageName'];
    }

    /**
     * Sets voucherPackageName
     *
     * @param string|null $voucherPackageName 券包名称
     *
     * @return self
     */
    public function setVoucherPackageName($voucherPackageName)
    {
        $this->container['voucherPackageName'] = $voucherPackageName;

        return $this;
    }

    /**
     * Gets voucherPackageStatus
     *
     * @return string|null
     */
    public function getVoucherPackageStatus()
    {
        return $this->container['voucherPackageStatus'];
    }

    /**
     * Sets voucherPackageStatus
     *
     * @param string|null $voucherPackageStatus 券包状态
     *
     * @return self
     */
    public function setVoucherPackageStatus($voucherPackageStatus)
    {
        $this->container['voucherPackageStatus'] = $voucherPackageStatus;

        return $this;
    }

    /**
     * Gets voucherTotalAmount
     *
     * @return string|null
     */
    public function getVoucherTotalAmount()
    {
        return $this->container['voucherTotalAmount'];
    }

    /**
     * Sets voucherTotalAmount
     *
     * @param string|null $voucherTotalAmount 券包总价值（单位是元）： 券包下券的优惠总额（满减券指优惠面额，折扣券指优惠上限，特价券指原价减去特价）
     *
     * @return self
     */
    public function setVoucherTotalAmount($voucherTotalAmount)
    {
        $this->container['voucherTotalAmount'] = $voucherTotalAmount;

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


