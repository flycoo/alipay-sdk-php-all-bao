<?php
/**
 * PaymentVoucherValidPeriod
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
 * PaymentVoucherValidPeriod Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentVoucherValidPeriod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentVoucherValidPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'validBeginTime' => 'string',
        'validDaysAfterReceive' => 'int',
        'validEndTime' => 'string',
        'waitDaysAfterReceive' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'validBeginTime' => null,
        'validDaysAfterReceive' => null,
        'validEndTime' => null,
        'waitDaysAfterReceive' => null
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
        'type' => 'type',
        'validBeginTime' => 'valid_begin_time',
        'validDaysAfterReceive' => 'valid_days_after_receive',
        'validEndTime' => 'valid_end_time',
        'waitDaysAfterReceive' => 'wait_days_after_receive'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'validBeginTime' => 'setValidBeginTime',
        'validDaysAfterReceive' => 'setValidDaysAfterReceive',
        'validEndTime' => 'setValidEndTime',
        'waitDaysAfterReceive' => 'setWaitDaysAfterReceive'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'validBeginTime' => 'getValidBeginTime',
        'validDaysAfterReceive' => 'getValidDaysAfterReceive',
        'validEndTime' => 'getValidEndTime',
        'waitDaysAfterReceive' => 'getWaitDaysAfterReceive'
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['validBeginTime'] = $data['validBeginTime'] ?? null;
        $this->container['validDaysAfterReceive'] = $data['validDaysAfterReceive'] ?? null;
        $this->container['validEndTime'] = $data['validEndTime'] ?? null;
        $this->container['waitDaysAfterReceive'] = $data['waitDaysAfterReceive'] ?? null;
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type 券有效期类型
     *
     * @return self
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets validBeginTime
     *
     * @return string|null
     */
    public function getValidBeginTime()
    {
        return $this->container['validBeginTime'];
    }

    /**
     * Sets validBeginTime
     *
     * @param string|null $validBeginTime 券可使用的开始时间。  格式为：yyyy-MM-dd HH:mm:ss  限制： type为ABSOLUTE时该字段必填。
     *
     * @return self
     */
    public function setValidBeginTime($validBeginTime)
    {
        $this->container['validBeginTime'] = $validBeginTime;

        return $this;
    }

    /**
     * Gets validDaysAfterReceive
     *
     * @return int|null
     */
    public function getValidDaysAfterReceive()
    {
        return $this->container['validDaysAfterReceive'];
    }

    /**
     * Sets validDaysAfterReceive
     *
     * @param int|null $validDaysAfterReceive 券生效后N天内可以使用。  可以配合wait_days_after_receive字段使用。  限制： 1.type为RELATIVE时必填。 2.valid_days_after_receive必须大于0。
     *
     * @return self
     */
    public function setValidDaysAfterReceive($validDaysAfterReceive)
    {
        $this->container['validDaysAfterReceive'] = $validDaysAfterReceive;

        return $this;
    }

    /**
     * Gets validEndTime
     *
     * @return string|null
     */
    public function getValidEndTime()
    {
        return $this->container['validEndTime'];
    }

    /**
     * Sets validEndTime
     *
     * @param string|null $validEndTime 券可使用的结束时间。  格式为yyyy-MM-dd HH:mm:ss  限制： 1、type为ABSOLUTE必填。 2、券可使用的结束时间valid_end_time必须大于券的发放结束时间publish_end_time
     *
     * @return self
     */
    public function setValidEndTime($validEndTime)
    {
        $this->container['validEndTime'] = $validEndTime;

        return $this;
    }

    /**
     * Gets waitDaysAfterReceive
     *
     * @return int|null
     */
    public function getWaitDaysAfterReceive()
    {
        return $this->container['waitDaysAfterReceive'];
    }

    /**
     * Sets waitDaysAfterReceive
     *
     * @param int|null $waitDaysAfterReceive 用户领券后需要等待N天，券才可以生效。默认用户领券后立刻生效。  限制： 1、type为RELATIVE时可选。
     *
     * @return self
     */
    public function setWaitDaysAfterReceive($waitDaysAfterReceive)
    {
        $this->container['waitDaysAfterReceive'] = $waitDaysAfterReceive;

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


