<?php
/**
 * ZMGOSettlementConfig
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
 * ZMGOSettlementConfig Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZMGOSettlementConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZMGOSettlementConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customFeeName' => 'string',
        'cycleFlexWithholdConfig' => '\Alipay\OpenAPISDK\Model\ZMGOCycleFlexConfig',
        'cycleWithholdConfig' => '\Alipay\OpenAPISDK\Model\ZMGOCycleWithholdConfig',
        'expStopDelayDays' => 'int',
        'expStopTime' => 'string',
        'expStopTimeMode' => 'string',
        'fulfilltimesCustomSettlementPlan' => 'string',
        'settlementType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customFeeName' => null,
        'cycleFlexWithholdConfig' => null,
        'cycleWithholdConfig' => null,
        'expStopDelayDays' => null,
        'expStopTime' => null,
        'expStopTimeMode' => null,
        'fulfilltimesCustomSettlementPlan' => null,
        'settlementType' => null
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
        'customFeeName' => 'custom_fee_name',
        'cycleFlexWithholdConfig' => 'cycle_flex_withhold_config',
        'cycleWithholdConfig' => 'cycle_withhold_config',
        'expStopDelayDays' => 'exp_stop_delay_days',
        'expStopTime' => 'exp_stop_time',
        'expStopTimeMode' => 'exp_stop_time_mode',
        'fulfilltimesCustomSettlementPlan' => 'fulfilltimes_custom_settlement_plan',
        'settlementType' => 'settlement_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customFeeName' => 'setCustomFeeName',
        'cycleFlexWithholdConfig' => 'setCycleFlexWithholdConfig',
        'cycleWithholdConfig' => 'setCycleWithholdConfig',
        'expStopDelayDays' => 'setExpStopDelayDays',
        'expStopTime' => 'setExpStopTime',
        'expStopTimeMode' => 'setExpStopTimeMode',
        'fulfilltimesCustomSettlementPlan' => 'setFulfilltimesCustomSettlementPlan',
        'settlementType' => 'setSettlementType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customFeeName' => 'getCustomFeeName',
        'cycleFlexWithholdConfig' => 'getCycleFlexWithholdConfig',
        'cycleWithholdConfig' => 'getCycleWithholdConfig',
        'expStopDelayDays' => 'getExpStopDelayDays',
        'expStopTime' => 'getExpStopTime',
        'expStopTimeMode' => 'getExpStopTimeMode',
        'fulfilltimesCustomSettlementPlan' => 'getFulfilltimesCustomSettlementPlan',
        'settlementType' => 'getSettlementType'
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
        $this->container['customFeeName'] = $data['customFeeName'] ?? null;
        $this->container['cycleFlexWithholdConfig'] = $data['cycleFlexWithholdConfig'] ?? null;
        $this->container['cycleWithholdConfig'] = $data['cycleWithholdConfig'] ?? null;
        $this->container['expStopDelayDays'] = $data['expStopDelayDays'] ?? null;
        $this->container['expStopTime'] = $data['expStopTime'] ?? null;
        $this->container['expStopTimeMode'] = $data['expStopTimeMode'] ?? null;
        $this->container['fulfilltimesCustomSettlementPlan'] = $data['fulfilltimesCustomSettlementPlan'] ?? null;
        $this->container['settlementType'] = $data['settlementType'] ?? null;
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
     * Gets customFeeName
     *
     * @return string|null
     */
    public function getCustomFeeName()
    {
        return $this->container['customFeeName'];
    }

    /**
     * Sets customFeeName
     *
     * @param string|null $customFeeName 会员费扣费名称
     *
     * @return self
     */
    public function setCustomFeeName($customFeeName)
    {
        $this->container['customFeeName'] = $customFeeName;

        return $this;
    }

    /**
     * Gets cycleFlexWithholdConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOCycleFlexConfig|null
     */
    public function getCycleFlexWithholdConfig()
    {
        return $this->container['cycleFlexWithholdConfig'];
    }

    /**
     * Sets cycleFlexWithholdConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOCycleFlexConfig|null $cycleFlexWithholdConfig cycleFlexWithholdConfig
     *
     * @return self
     */
    public function setCycleFlexWithholdConfig($cycleFlexWithholdConfig)
    {
        $this->container['cycleFlexWithholdConfig'] = $cycleFlexWithholdConfig;

        return $this;
    }

    /**
     * Gets cycleWithholdConfig
     *
     * @return \Alipay\OpenAPISDK\Model\ZMGOCycleWithholdConfig|null
     */
    public function getCycleWithholdConfig()
    {
        return $this->container['cycleWithholdConfig'];
    }

    /**
     * Sets cycleWithholdConfig
     *
     * @param \Alipay\OpenAPISDK\Model\ZMGOCycleWithholdConfig|null $cycleWithholdConfig cycleWithholdConfig
     *
     * @return self
     */
    public function setCycleWithholdConfig($cycleWithholdConfig)
    {
        $this->container['cycleWithholdConfig'] = $cycleWithholdConfig;

        return $this;
    }

    /**
     * Gets expStopDelayDays
     *
     * @return int|null
     */
    public function getExpStopDelayDays()
    {
        return $this->container['expStopDelayDays'];
    }

    /**
     * Sets expStopDelayDays
     *
     * @param int|null $expStopDelayDays 预计结算延迟天数，当exp_stop_time_mode取值RELATIVE_DATE、ABSOLATE_DATE、ABSOLUTE_PLUS_1_DATE时，必传
     *
     * @return self
     */
    public function setExpStopDelayDays($expStopDelayDays)
    {
        $this->container['expStopDelayDays'] = $expStopDelayDays;

        return $this;
    }

    /**
     * Gets expStopTime
     *
     * @return string|null
     */
    public function getExpStopTime()
    {
        return $this->container['expStopTime'];
    }

    /**
     * Sets expStopTime
     *
     * @param string|null $expStopTime 预期结算时间，当exp_stop_time_mode取值APPOINT_DATE时，必传
     *
     * @return self
     */
    public function setExpStopTime($expStopTime)
    {
        $this->container['expStopTime'] = $expStopTime;

        return $this;
    }

    /**
     * Gets expStopTimeMode
     *
     * @return string|null
     */
    public function getExpStopTimeMode()
    {
        return $this->container['expStopTimeMode'];
    }

    /**
     * Sets expStopTimeMode
     *
     * @param string|null $expStopTimeMode 预计结算时间模式，取值：（1）RELATIVE_DATE(\"RELATIVE_DATE\", \"相对日期\"), （2）ABSOLATE_DATE(\"ABSOLATE_DATE\", \"绝对日期(当日开始计算)\"), （3）ABSOLUTE_PLUS_1_DATE(\"ABSOLUTE_PLUS_1_DATE\", \"绝对日期(次日开始计算)\"), （4）APPOINT_DATE(\"APPOINT_DATE\", \"指定日期\")
     *
     * @return self
     */
    public function setExpStopTimeMode($expStopTimeMode)
    {
        $this->container['expStopTimeMode'] = $expStopTimeMode;

        return $this;
    }

    /**
     * Gets fulfilltimesCustomSettlementPlan
     *
     * @return string|null
     */
    public function getFulfilltimesCustomSettlementPlan()
    {
        return $this->container['fulfilltimesCustomSettlementPlan'];
    }

    /**
     * Sets fulfilltimesCustomSettlementPlan
     *
     * @param string|null $fulfilltimesCustomSettlementPlan 按履约次数灵活扣款计划。当settlement_type取值为fulfillTimesCustomSettlement时，此属性必传
     *
     * @return self
     */
    public function setFulfilltimesCustomSettlementPlan($fulfilltimesCustomSettlementPlan)
    {
        $this->container['fulfilltimesCustomSettlementPlan'] = $fulfilltimesCustomSettlementPlan;

        return $this;
    }

    /**
     * Gets settlementType
     *
     * @return string|null
     */
    public function getSettlementType()
    {
        return $this->container['settlementType'];
    }

    /**
     * Sets settlementType
     *
     * @param string|null $settlementType 结算类型，取值：     BENEFIT_SETTLEMENT(\"benefitSettlement\", \"按权益金额结算\"),     FULFILL_TIMES_CUSTOM_SETTLEMENT(\"fulfillTimesCustomSettlement\",\"按履约次数扣款\")
     *
     * @return self
     */
    public function setSettlementType($settlementType)
    {
        $this->container['settlementType'] = $settlementType;

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


