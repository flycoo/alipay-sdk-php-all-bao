<?php
/**
 * AlipayFundAuthOperationCancelModel
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
 * AlipayFundAuthOperationCancelModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundAuthOperationCancelModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundAuthOperationCancelModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'authNo' => 'string',
        'notifyUrl' => 'string',
        'operationId' => 'string',
        'outOrderNo' => 'string',
        'outRequestNo' => 'string',
        'remark' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'authNo' => null,
        'notifyUrl' => null,
        'operationId' => null,
        'outOrderNo' => null,
        'outRequestNo' => null,
        'remark' => null
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
        'authNo' => 'auth_no',
        'notifyUrl' => 'notify_url',
        'operationId' => 'operation_id',
        'outOrderNo' => 'out_order_no',
        'outRequestNo' => 'out_request_no',
        'remark' => 'remark'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'authNo' => 'setAuthNo',
        'notifyUrl' => 'setNotifyUrl',
        'operationId' => 'setOperationId',
        'outOrderNo' => 'setOutOrderNo',
        'outRequestNo' => 'setOutRequestNo',
        'remark' => 'setRemark'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'authNo' => 'getAuthNo',
        'notifyUrl' => 'getNotifyUrl',
        'operationId' => 'getOperationId',
        'outOrderNo' => 'getOutOrderNo',
        'outRequestNo' => 'getOutRequestNo',
        'remark' => 'getRemark'
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
        $this->container['authNo'] = $data['authNo'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['operationId'] = $data['operationId'] ?? null;
        $this->container['outOrderNo'] = $data['outOrderNo'] ?? null;
        $this->container['outRequestNo'] = $data['outRequestNo'] ?? null;
        $this->container['remark'] = $data['remark'] ?? null;
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
     * Gets authNo
     *
     * @return string|null
     */
    public function getAuthNo()
    {
        return $this->container['authNo'];
    }

    /**
     * Sets authNo
     *
     * @param string|null $authNo 支付宝授权资金订单号。 与商户的授权资金订单号不能同时为空，二者都传入时，以支付宝资金授权订单号为准，该参数与支付宝授权资金操作流水号配对使用。
     *
     * @return self
     */
    public function setAuthNo($authNo)
    {
        $this->container['authNo'] = $authNo;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl 通知地址
     *
     * @return self
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets operationId
     *
     * @return string|null
     */
    public function getOperationId()
    {
        return $this->container['operationId'];
    }

    /**
     * Sets operationId
     *
     * @param string|null $operationId 支付宝的授权资金操作流水号。 与商户的授权资金操作流水号不能同时为空，二者都传入时，以支付宝的授权资金操作流水号为准，该参数与支付宝授权资金订单号配对使用。
     *
     * @return self
     */
    public function setOperationId($operationId)
    {
        $this->container['operationId'] = $operationId;

        return $this;
    }

    /**
     * Gets outOrderNo
     *
     * @return string|null
     */
    public function getOutOrderNo()
    {
        return $this->container['outOrderNo'];
    }

    /**
     * Sets outOrderNo
     *
     * @param string|null $outOrderNo 商户的授权资金订单号。 与支付宝的授权资金订单号不能同时为空，二者都传入时，以支付宝的授权资金订单号为准，该参数与商户的授权资金操作流水号配对使用。 该值与资金冻结时 out_order_no一致。
     *
     * @return self
     */
    public function setOutOrderNo($outOrderNo)
    {
        $this->container['outOrderNo'] = $outOrderNo;

        return $this;
    }

    /**
     * Gets outRequestNo
     *
     * @return string|null
     */
    public function getOutRequestNo()
    {
        return $this->container['outRequestNo'];
    }

    /**
     * Sets outRequestNo
     *
     * @param string|null $outRequestNo 商户的授权资金操作流水号。 与支付宝的授权资金操作流水号不能同时为空，二者都传入时，以支付宝的授权资金操作流水号为准，该参数与商户的授权资金订单号配对使用。 该值与资金冻结时out_request_no一致
     *
     * @return self
     */
    public function setOutRequestNo($outRequestNo)
    {
        $this->container['outRequestNo'] = $outRequestNo;

        return $this;
    }

    /**
     * Gets remark
     *
     * @return string|null
     */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
     * Sets remark
     *
     * @param string|null $remark 商户对本次撤销操作的附言描述。 长度不超过100个字母或50个汉字。
     *
     * @return self
     */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;

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


