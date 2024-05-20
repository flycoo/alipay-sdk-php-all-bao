<?php
/**
 * ExpenseCtrRuleGroupInfo
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
 * ExpenseCtrRuleGroupInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ExpenseCtrRuleGroupInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ExpenseCtrRuleGroupInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'expenseCtrlRuleInfoList' => '\Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo[]',
        'expenseType' => 'string',
        'groupId' => 'string',
        'groupName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'expenseCtrlRuleInfoList' => null,
        'expenseType' => null,
        'groupId' => null,
        'groupName' => null
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
        'expenseCtrlRuleInfoList' => 'expense_ctrl_rule_info_list',
        'expenseType' => 'expense_type',
        'groupId' => 'group_id',
        'groupName' => 'group_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'expenseCtrlRuleInfoList' => 'setExpenseCtrlRuleInfoList',
        'expenseType' => 'setExpenseType',
        'groupId' => 'setGroupId',
        'groupName' => 'setGroupName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'expenseCtrlRuleInfoList' => 'getExpenseCtrlRuleInfoList',
        'expenseType' => 'getExpenseType',
        'groupId' => 'getGroupId',
        'groupName' => 'getGroupName'
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
        $this->container['expenseCtrlRuleInfoList'] = $data['expenseCtrlRuleInfoList'] ?? null;
        $this->container['expenseType'] = $data['expenseType'] ?? null;
        $this->container['groupId'] = $data['groupId'] ?? null;
        $this->container['groupName'] = $data['groupName'] ?? null;
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
     * Gets expenseCtrlRuleInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo[]|null
     */
    public function getExpenseCtrlRuleInfoList()
    {
        return $this->container['expenseCtrlRuleInfoList'];
    }

    /**
     * Sets expenseCtrlRuleInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\ExpenseCtrRuleInfo[]|null $expenseCtrlRuleInfoList 费控条件列表
     *
     * @return self
     */
    public function setExpenseCtrlRuleInfoList($expenseCtrlRuleInfoList)
    {
        $this->container['expenseCtrlRuleInfoList'] = $expenseCtrlRuleInfoList;

        return $this;
    }

    /**
     * Gets expenseType
     *
     * @return string|null
     */
    public function getExpenseType()
    {
        return $this->container['expenseType'];
    }

    /**
     * Sets expenseType
     *
     * @param string|null $expenseType 费用类型 特殊说明：仅支持费用类型DEFAULT
     *
     * @return self
     */
    public function setExpenseType($expenseType)
    {
        $this->container['expenseType'] = $expenseType;

        return $this;
    }

    /**
     * Gets groupId
     *
     * @return string|null
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string|null $groupId 费控规则ID
     *
     * @return self
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets groupName
     *
     * @return string|null
     */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
     * Sets groupName
     *
     * @param string|null $groupName 费控规则名称 约束： 1）敏感词校验 2）不能重复
     *
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;

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


