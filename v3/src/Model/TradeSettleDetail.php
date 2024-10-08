<?php
/**
 * TradeSettleDetail
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
 * TradeSettleDetail Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TradeSettleDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TradeSettleDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'operationDt' => 'string',
        'operationSerialNo' => 'string',
        'operationType' => 'string',
        'oriTransIn' => 'string',
        'oriTransOut' => 'string',
        'transIn' => 'string',
        'transOut' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'operationDt' => null,
        'operationSerialNo' => null,
        'operationType' => null,
        'oriTransIn' => null,
        'oriTransOut' => null,
        'transIn' => null,
        'transOut' => null
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
        'amount' => 'amount',
        'operationDt' => 'operation_dt',
        'operationSerialNo' => 'operation_serial_no',
        'operationType' => 'operation_type',
        'oriTransIn' => 'ori_trans_in',
        'oriTransOut' => 'ori_trans_out',
        'transIn' => 'trans_in',
        'transOut' => 'trans_out'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'operationDt' => 'setOperationDt',
        'operationSerialNo' => 'setOperationSerialNo',
        'operationType' => 'setOperationType',
        'oriTransIn' => 'setOriTransIn',
        'oriTransOut' => 'setOriTransOut',
        'transIn' => 'setTransIn',
        'transOut' => 'setTransOut'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'operationDt' => 'getOperationDt',
        'operationSerialNo' => 'getOperationSerialNo',
        'operationType' => 'getOperationType',
        'oriTransIn' => 'getOriTransIn',
        'oriTransOut' => 'getOriTransOut',
        'transIn' => 'getTransIn',
        'transOut' => 'getTransOut'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['operationDt'] = $data['operationDt'] ?? null;
        $this->container['operationSerialNo'] = $data['operationSerialNo'] ?? null;
        $this->container['operationType'] = $data['operationType'] ?? null;
        $this->container['oriTransIn'] = $data['oriTransIn'] ?? null;
        $this->container['oriTransOut'] = $data['oriTransOut'] ?? null;
        $this->container['transIn'] = $data['transIn'] ?? null;
        $this->container['transOut'] = $data['transOut'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 实际操作金额，单位为元，两位小数。该参数的值为分账或补差或结算时传入
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets operationDt
     *
     * @return string|null
     */
    public function getOperationDt()
    {
        return $this->container['operationDt'];
    }

    /**
     * Sets operationDt
     *
     * @param string|null $operationDt 操作日期
     *
     * @return self
     */
    public function setOperationDt($operationDt)
    {
        $this->container['operationDt'] = $operationDt;

        return $this;
    }

    /**
     * Gets operationSerialNo
     *
     * @return string|null
     */
    public function getOperationSerialNo()
    {
        return $this->container['operationSerialNo'];
    }

    /**
     * Sets operationSerialNo
     *
     * @param string|null $operationSerialNo 商户操作序列号。商户发起请求的外部请求号。
     *
     * @return self
     */
    public function setOperationSerialNo($operationSerialNo)
    {
        $this->container['operationSerialNo'] = $operationSerialNo;

        return $this;
    }

    /**
     * Gets operationType
     *
     * @return string|null
     */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
     * Sets operationType
     *
     * @param string|null $operationType 结算操作类型。有以下几种类型： replenish(补差)、replenish_refund(退补差)、transfer(分账)、transfer_refund(退分账)、settle(结算)、settle_refund(退结算)、on_settle(待结算)。
     *
     * @return self
     */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;

        return $this;
    }

    /**
     * Gets oriTransIn
     *
     * @return string|null
     */
    public function getOriTransIn()
    {
        return $this->container['oriTransIn'];
    }

    /**
     * Sets oriTransIn
     *
     * @param string|null $oriTransIn 商户请求的转入账号
     *
     * @return self
     */
    public function setOriTransIn($oriTransIn)
    {
        $this->container['oriTransIn'] = $oriTransIn;

        return $this;
    }

    /**
     * Gets oriTransOut
     *
     * @return string|null
     */
    public function getOriTransOut()
    {
        return $this->container['oriTransOut'];
    }

    /**
     * Sets oriTransOut
     *
     * @param string|null $oriTransOut 商户请求的转出账号
     *
     * @return self
     */
    public function setOriTransOut($oriTransOut)
    {
        $this->container['oriTransOut'] = $oriTransOut;

        return $this;
    }

    /**
     * Gets transIn
     *
     * @return string|null
     */
    public function getTransIn()
    {
        return $this->container['transIn'];
    }

    /**
     * Sets transIn
     *
     * @param string|null $transIn 转入账号
     *
     * @return self
     */
    public function setTransIn($transIn)
    {
        $this->container['transIn'] = $transIn;

        return $this;
    }

    /**
     * Gets transOut
     *
     * @return string|null
     */
    public function getTransOut()
    {
        return $this->container['transOut'];
    }

    /**
     * Sets transOut
     *
     * @param string|null $transOut 转出账号
     *
     * @return self
     */
    public function setTransOut($transOut)
    {
        $this->container['transOut'] = $transOut;

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


