<?php
/**
 * ExpenseCtrlEmployeeRuleInfo
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
 * ExpenseCtrlEmployeeRuleInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseCtrlEmployeeRuleInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseCtrlEmployeeRuleInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'effective' => 'int',
        'effectiveEndDate' => 'string',
        'effectiveStartDate' => 'string',
        'ownerType' => 'string',
        'standardId' => 'string',
        'standardName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'effective' => null,
        'effectiveEndDate' => null,
        'effectiveStartDate' => null,
        'ownerType' => null,
        'standardId' => null,
        'standardName' => null
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
        'effective' => 'effective',
        'effectiveEndDate' => 'effective_end_date',
        'effectiveStartDate' => 'effective_start_date',
        'ownerType' => 'owner_type',
        'standardId' => 'standard_id',
        'standardName' => 'standard_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'effective' => 'setEffective',
        'effectiveEndDate' => 'setEffectiveEndDate',
        'effectiveStartDate' => 'setEffectiveStartDate',
        'ownerType' => 'setOwnerType',
        'standardId' => 'setStandardId',
        'standardName' => 'setStandardName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'effective' => 'getEffective',
        'effectiveEndDate' => 'getEffectiveEndDate',
        'effectiveStartDate' => 'getEffectiveStartDate',
        'ownerType' => 'getOwnerType',
        'standardId' => 'getStandardId',
        'standardName' => 'getStandardName'
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
        $this->container['effective'] = $data['effective'] ?? null;
        $this->container['effectiveEndDate'] = $data['effectiveEndDate'] ?? null;
        $this->container['effectiveStartDate'] = $data['effectiveStartDate'] ?? null;
        $this->container['ownerType'] = $data['ownerType'] ?? null;
        $this->container['standardId'] = $data['standardId'] ?? null;
        $this->container['standardName'] = $data['standardName'] ?? null;
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
     * Gets effective
     *
     * @return int|null
     */
    public function getEffective()
    {
        return $this->container['effective'];
    }

    /**
     * Sets effective
     *
     * @param int|null $effective 费控规则状态，1表示有效，0表示无效
     *
     * @return self
     */
    public function setEffective($effective)
    {
        $this->container['effective'] = $effective;

        return $this;
    }

    /**
     * Gets effectiveEndDate
     *
     * @return string|null
     */
    public function getEffectiveEndDate()
    {
        return $this->container['effectiveEndDate'];
    }

    /**
     * Sets effectiveEndDate
     *
     * @param string|null $effectiveEndDate 费控规则有效期截止
     *
     * @return self
     */
    public function setEffectiveEndDate($effectiveEndDate)
    {
        $this->container['effectiveEndDate'] = $effectiveEndDate;

        return $this;
    }

    /**
     * Gets effectiveStartDate
     *
     * @return string|null
     */
    public function getEffectiveStartDate()
    {
        return $this->container['effectiveStartDate'];
    }

    /**
     * Sets effectiveStartDate
     *
     * @param string|null $effectiveStartDate 费控规则有效期起始
     *
     * @return self
     */
    public function setEffectiveStartDate($effectiveStartDate)
    {
        $this->container['effectiveStartDate'] = $effectiveStartDate;

        return $this;
    }

    /**
     * Gets ownerType
     *
     * @return string|null
     */
    public function getOwnerType()
    {
        return $this->container['ownerType'];
    }

    /**
     * Sets ownerType
     *
     * @param string|null $ownerType 费控规则作用范围， EMPLOYEE表示员工，ENTERPRISE表示企业
     *
     * @return self
     */
    public function setOwnerType($ownerType)
    {
        $this->container['ownerType'] = $ownerType;

        return $this;
    }

    /**
     * Gets standardId
     *
     * @return string|null
     */
    public function getStandardId()
    {
        return $this->container['standardId'];
    }

    /**
     * Sets standardId
     *
     * @param string|null $standardId 费控规则ID
     *
     * @return self
     */
    public function setStandardId($standardId)
    {
        $this->container['standardId'] = $standardId;

        return $this;
    }

    /**
     * Gets standardName
     *
     * @return string|null
     */
    public function getStandardName()
    {
        return $this->container['standardName'];
    }

    /**
     * Sets standardName
     *
     * @param string|null $standardName 费控规则名称
     *
     * @return self
     */
    public function setStandardName($standardName)
    {
        $this->container['standardName'] = $standardName;

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


