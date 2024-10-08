<?php
/**
 * ParkingLotChargingRuleInfo
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
 * ParkingLotChargingRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ParkingLotChargingRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ParkingLotChargingRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'chargingPeriod' => 'string',
        'chargingStrategy' => 'string',
        'chargingUnitFee' => 'string',
        'chargingUnitMinutes' => 'string',
        'enableRolloverChargePeriod' => 'bool',
        'firstChargingSpanMinutes' => 'string',
        'firstChargingUnitFee' => 'string',
        'firstChargingUnitMinutes' => 'string',
        'freeEnterMinutes' => 'string',
        'freeExitMinutes' => 'string',
        'maxFeePerDay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'chargingPeriod' => null,
        'chargingStrategy' => null,
        'chargingUnitFee' => null,
        'chargingUnitMinutes' => null,
        'enableRolloverChargePeriod' => null,
        'firstChargingSpanMinutes' => null,
        'firstChargingUnitFee' => null,
        'firstChargingUnitMinutes' => null,
        'freeEnterMinutes' => null,
        'freeExitMinutes' => null,
        'maxFeePerDay' => null
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
        'chargingPeriod' => 'charging_period',
        'chargingStrategy' => 'charging_strategy',
        'chargingUnitFee' => 'charging_unit_fee',
        'chargingUnitMinutes' => 'charging_unit_minutes',
        'enableRolloverChargePeriod' => 'enable_rollover_charge_period',
        'firstChargingSpanMinutes' => 'first_charging_span_minutes',
        'firstChargingUnitFee' => 'first_charging_unit_fee',
        'firstChargingUnitMinutes' => 'first_charging_unit_minutes',
        'freeEnterMinutes' => 'free_enter_minutes',
        'freeExitMinutes' => 'free_exit_minutes',
        'maxFeePerDay' => 'max_fee_per_day'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'chargingPeriod' => 'setChargingPeriod',
        'chargingStrategy' => 'setChargingStrategy',
        'chargingUnitFee' => 'setChargingUnitFee',
        'chargingUnitMinutes' => 'setChargingUnitMinutes',
        'enableRolloverChargePeriod' => 'setEnableRolloverChargePeriod',
        'firstChargingSpanMinutes' => 'setFirstChargingSpanMinutes',
        'firstChargingUnitFee' => 'setFirstChargingUnitFee',
        'firstChargingUnitMinutes' => 'setFirstChargingUnitMinutes',
        'freeEnterMinutes' => 'setFreeEnterMinutes',
        'freeExitMinutes' => 'setFreeExitMinutes',
        'maxFeePerDay' => 'setMaxFeePerDay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'chargingPeriod' => 'getChargingPeriod',
        'chargingStrategy' => 'getChargingStrategy',
        'chargingUnitFee' => 'getChargingUnitFee',
        'chargingUnitMinutes' => 'getChargingUnitMinutes',
        'enableRolloverChargePeriod' => 'getEnableRolloverChargePeriod',
        'firstChargingSpanMinutes' => 'getFirstChargingSpanMinutes',
        'firstChargingUnitFee' => 'getFirstChargingUnitFee',
        'firstChargingUnitMinutes' => 'getFirstChargingUnitMinutes',
        'freeEnterMinutes' => 'getFreeEnterMinutes',
        'freeExitMinutes' => 'getFreeExitMinutes',
        'maxFeePerDay' => 'getMaxFeePerDay'
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
        $this->container['chargingPeriod'] = $data['chargingPeriod'] ?? null;
        $this->container['chargingStrategy'] = $data['chargingStrategy'] ?? null;
        $this->container['chargingUnitFee'] = $data['chargingUnitFee'] ?? null;
        $this->container['chargingUnitMinutes'] = $data['chargingUnitMinutes'] ?? null;
        $this->container['enableRolloverChargePeriod'] = $data['enableRolloverChargePeriod'] ?? null;
        $this->container['firstChargingSpanMinutes'] = $data['firstChargingSpanMinutes'] ?? null;
        $this->container['firstChargingUnitFee'] = $data['firstChargingUnitFee'] ?? null;
        $this->container['firstChargingUnitMinutes'] = $data['firstChargingUnitMinutes'] ?? null;
        $this->container['freeEnterMinutes'] = $data['freeEnterMinutes'] ?? null;
        $this->container['freeExitMinutes'] = $data['freeExitMinutes'] ?? null;
        $this->container['maxFeePerDay'] = $data['maxFeePerDay'] ?? null;
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
     * Gets chargingPeriod
     *
     * @return string|null
     */
    public function getChargingPeriod()
    {
        return $this->container['chargingPeriod'];
    }

    /**
     * Sets chargingPeriod
     *
     * @param string|null $chargingPeriod 停车收费时间段，输入24小时制的小时时间段格式:  开始时间-结束时间, 结束时间必须大于开始时间 时间取值范围：0到24
     *
     * @return self
     */
    public function setChargingPeriod($chargingPeriod)
    {
        $this->container['chargingPeriod'] = $chargingPeriod;

        return $this;
    }

    /**
     * Gets chargingStrategy
     *
     * @return string|null
     */
    public function getChargingStrategy()
    {
        return $this->container['chargingStrategy'];
    }

    /**
     * Sets chargingStrategy
     *
     * @param string|null $chargingStrategy 计费策略； UP：向上取整 DOMN：向下取整
     *
     * @return self
     */
    public function setChargingStrategy($chargingStrategy)
    {
        $this->container['chargingStrategy'] = $chargingStrategy;

        return $this;
    }

    /**
     * Gets chargingUnitFee
     *
     * @return string|null
     */
    public function getChargingUnitFee()
    {
        return $this->container['chargingUnitFee'];
    }

    /**
     * Sets chargingUnitFee
     *
     * @param string|null $chargingUnitFee 跳费金额 单位元
     *
     * @return self
     */
    public function setChargingUnitFee($chargingUnitFee)
    {
        $this->container['chargingUnitFee'] = $chargingUnitFee;

        return $this;
    }

    /**
     * Gets chargingUnitMinutes
     *
     * @return string|null
     */
    public function getChargingUnitMinutes()
    {
        return $this->container['chargingUnitMinutes'];
    }

    /**
     * Sets chargingUnitMinutes
     *
     * @param string|null $chargingUnitMinutes 跳费间隔分钟数
     *
     * @return self
     */
    public function setChargingUnitMinutes($chargingUnitMinutes)
    {
        $this->container['chargingUnitMinutes'] = $chargingUnitMinutes;

        return $this;
    }

    /**
     * Gets enableRolloverChargePeriod
     *
     * @return bool|null
     */
    public function getEnableRolloverChargePeriod()
    {
        return $this->container['enableRolloverChargePeriod'];
    }

    /**
     * Sets enableRolloverChargePeriod
     *
     * @param bool|null $enableRolloverChargePeriod 超时是否顺延到下个计费区间
     *
     * @return self
     */
    public function setEnableRolloverChargePeriod($enableRolloverChargePeriod)
    {
        $this->container['enableRolloverChargePeriod'] = $enableRolloverChargePeriod;

        return $this;
    }

    /**
     * Gets firstChargingSpanMinutes
     *
     * @return string|null
     */
    public function getFirstChargingSpanMinutes()
    {
        return $this->container['firstChargingSpanMinutes'];
    }

    /**
     * Sets firstChargingSpanMinutes
     *
     * @param string|null $firstChargingSpanMinutes 首段计费周期分钟数
     *
     * @return self
     */
    public function setFirstChargingSpanMinutes($firstChargingSpanMinutes)
    {
        $this->container['firstChargingSpanMinutes'] = $firstChargingSpanMinutes;

        return $this;
    }

    /**
     * Gets firstChargingUnitFee
     *
     * @return string|null
     */
    public function getFirstChargingUnitFee()
    {
        return $this->container['firstChargingUnitFee'];
    }

    /**
     * Sets firstChargingUnitFee
     *
     * @param string|null $firstChargingUnitFee 首段计费周期跳费金额 单位: 元
     *
     * @return self
     */
    public function setFirstChargingUnitFee($firstChargingUnitFee)
    {
        $this->container['firstChargingUnitFee'] = $firstChargingUnitFee;

        return $this;
    }

    /**
     * Gets firstChargingUnitMinutes
     *
     * @return string|null
     */
    public function getFirstChargingUnitMinutes()
    {
        return $this->container['firstChargingUnitMinutes'];
    }

    /**
     * Sets firstChargingUnitMinutes
     *
     * @param string|null $firstChargingUnitMinutes 首段计费周期跳费间隔 单位分钟
     *
     * @return self
     */
    public function setFirstChargingUnitMinutes($firstChargingUnitMinutes)
    {
        $this->container['firstChargingUnitMinutes'] = $firstChargingUnitMinutes;

        return $this;
    }

    /**
     * Gets freeEnterMinutes
     *
     * @return string|null
     */
    public function getFreeEnterMinutes()
    {
        return $this->container['freeEnterMinutes'];
    }

    /**
     * Sets freeEnterMinutes
     *
     * @param string|null $freeEnterMinutes 入场免费时间 单位:分钟
     *
     * @return self
     */
    public function setFreeEnterMinutes($freeEnterMinutes)
    {
        $this->container['freeEnterMinutes'] = $freeEnterMinutes;

        return $this;
    }

    /**
     * Gets freeExitMinutes
     *
     * @return string|null
     */
    public function getFreeExitMinutes()
    {
        return $this->container['freeExitMinutes'];
    }

    /**
     * Sets freeExitMinutes
     *
     * @param string|null $freeExitMinutes 离场免费时间 单位:分钟
     *
     * @return self
     */
    public function setFreeExitMinutes($freeExitMinutes)
    {
        $this->container['freeExitMinutes'] = $freeExitMinutes;

        return $this;
    }

    /**
     * Gets maxFeePerDay
     *
     * @return string|null
     */
    public function getMaxFeePerDay()
    {
        return $this->container['maxFeePerDay'];
    }

    /**
     * Sets maxFeePerDay
     *
     * @param string|null $maxFeePerDay 日封顶金额 单位: 元
     *
     * @return self
     */
    public function setMaxFeePerDay($maxFeePerDay)
    {
        $this->container['maxFeePerDay'] = $maxFeePerDay;

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


