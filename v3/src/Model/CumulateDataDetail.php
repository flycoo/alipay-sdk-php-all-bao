<?php
/**
 * CumulateDataDetail
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
 * CumulateDataDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CumulateDataDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CumulateDataDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionType' => 'string',
        'bizTime' => 'string',
        'dataType' => 'string',
        'discountAmount' => 'string',
        'discountDesc' => 'string',
        'outBizNo' => 'string',
        'referOutBizNo' => 'string',
        'subDataType' => 'string',
        'taskAmount' => 'string',
        'taskDesc' => 'string',
        'taskTimes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionType' => null,
        'bizTime' => null,
        'dataType' => null,
        'discountAmount' => null,
        'discountDesc' => null,
        'outBizNo' => null,
        'referOutBizNo' => null,
        'subDataType' => null,
        'taskAmount' => null,
        'taskDesc' => null,
        'taskTimes' => null
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
        'actionType' => 'action_type',
        'bizTime' => 'biz_time',
        'dataType' => 'data_type',
        'discountAmount' => 'discount_amount',
        'discountDesc' => 'discount_desc',
        'outBizNo' => 'out_biz_no',
        'referOutBizNo' => 'refer_out_biz_no',
        'subDataType' => 'sub_data_type',
        'taskAmount' => 'task_amount',
        'taskDesc' => 'task_desc',
        'taskTimes' => 'task_times'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionType' => 'setActionType',
        'bizTime' => 'setBizTime',
        'dataType' => 'setDataType',
        'discountAmount' => 'setDiscountAmount',
        'discountDesc' => 'setDiscountDesc',
        'outBizNo' => 'setOutBizNo',
        'referOutBizNo' => 'setReferOutBizNo',
        'subDataType' => 'setSubDataType',
        'taskAmount' => 'setTaskAmount',
        'taskDesc' => 'setTaskDesc',
        'taskTimes' => 'setTaskTimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionType' => 'getActionType',
        'bizTime' => 'getBizTime',
        'dataType' => 'getDataType',
        'discountAmount' => 'getDiscountAmount',
        'discountDesc' => 'getDiscountDesc',
        'outBizNo' => 'getOutBizNo',
        'referOutBizNo' => 'getReferOutBizNo',
        'subDataType' => 'getSubDataType',
        'taskAmount' => 'getTaskAmount',
        'taskDesc' => 'getTaskDesc',
        'taskTimes' => 'getTaskTimes'
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
        $this->container['actionType'] = $data['actionType'] ?? null;
        $this->container['bizTime'] = $data['bizTime'] ?? null;
        $this->container['dataType'] = $data['dataType'] ?? null;
        $this->container['discountAmount'] = $data['discountAmount'] ?? null;
        $this->container['discountDesc'] = $data['discountDesc'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['referOutBizNo'] = $data['referOutBizNo'] ?? null;
        $this->container['subDataType'] = $data['subDataType'] ?? null;
        $this->container['taskAmount'] = $data['taskAmount'] ?? null;
        $this->container['taskDesc'] = $data['taskDesc'] ?? null;
        $this->container['taskTimes'] = $data['taskTimes'] ?? null;
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
     * Gets actionType
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string|null $actionType 数据回传的动作类型，正向或逆向。
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets bizTime
     *
     * @return string|null
     */
    public function getBizTime()
    {
        return $this->container['bizTime'];
    }

    /**
     * Sets bizTime
     *
     * @param string|null $bizTime 回传数据发生的实际时间
     *
     * @return self
     */
    public function setBizTime($bizTime)
    {
        $this->container['bizTime'] = $bizTime;

        return $this;
    }

    /**
     * Gets dataType
     *
     * @return string|null
     */
    public function getDataType()
    {
        return $this->container['dataType'];
    }

    /**
     * Sets dataType
     *
     * @param string|null $dataType 回传数据类型。
     *
     * @return self
     */
    public function setDataType($dataType)
    {
        $this->container['dataType'] = $dataType;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return string|null
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param string|null $discountAmount 优惠金额
     *
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountDesc
     *
     * @return string|null
     */
    public function getDiscountDesc()
    {
        return $this->container['discountDesc'];
    }

    /**
     * Sets discountDesc
     *
     * @param string|null $discountDesc 优惠描述
     *
     * @return self
     */
    public function setDiscountDesc($discountDesc)
    {
        $this->container['discountDesc'] = $discountDesc;

        return $this;
    }

    /**
     * Gets outBizNo
     *
     * @return string|null
     */
    public function getOutBizNo()
    {
        return $this->container['outBizNo'];
    }

    /**
     * Sets outBizNo
     *
     * @param string|null $outBizNo 数据回传时传入的外部业务号。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets referOutBizNo
     *
     * @return string|null
     */
    public function getReferOutBizNo()
    {
        return $this->container['referOutBizNo'];
    }

    /**
     * Sets referOutBizNo
     *
     * @param string|null $referOutBizNo 数据回传时逆向单据记录的对应正向单据的外部业务号。
     *
     * @return self
     */
    public function setReferOutBizNo($referOutBizNo)
    {
        $this->container['referOutBizNo'] = $referOutBizNo;

        return $this;
    }

    /**
     * Gets subDataType
     *
     * @return string|null
     */
    public function getSubDataType()
    {
        return $this->container['subDataType'];
    }

    /**
     * Sets subDataType
     *
     * @param string|null $subDataType 回传数据子类型。
     *
     * @return self
     */
    public function setSubDataType($subDataType)
    {
        $this->container['subDataType'] = $subDataType;

        return $this;
    }

    /**
     * Gets taskAmount
     *
     * @return string|null
     */
    public function getTaskAmount()
    {
        return $this->container['taskAmount'];
    }

    /**
     * Sets taskAmount
     *
     * @param string|null $taskAmount 任务金额
     *
     * @return self
     */
    public function setTaskAmount($taskAmount)
    {
        $this->container['taskAmount'] = $taskAmount;

        return $this;
    }

    /**
     * Gets taskDesc
     *
     * @return string|null
     */
    public function getTaskDesc()
    {
        return $this->container['taskDesc'];
    }

    /**
     * Sets taskDesc
     *
     * @param string|null $taskDesc 任务描述
     *
     * @return self
     */
    public function setTaskDesc($taskDesc)
    {
        $this->container['taskDesc'] = $taskDesc;

        return $this;
    }

    /**
     * Gets taskTimes
     *
     * @return int|null
     */
    public function getTaskTimes()
    {
        return $this->container['taskTimes'];
    }

    /**
     * Sets taskTimes
     *
     * @param int|null $taskTimes 任务次数
     *
     * @return self
     */
    public function setTaskTimes($taskTimes)
    {
        $this->container['taskTimes'] = $taskTimes;

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


