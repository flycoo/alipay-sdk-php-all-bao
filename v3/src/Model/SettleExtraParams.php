<?php
/**
 * SettleExtraParams
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
 * SettleExtraParams Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SettleExtraParams implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SettleExtraParams';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'quitType' => 'string',
        'scenePayLinkInfo' => 'string',
        'settleAdjustReason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'quitType' => null,
        'scenePayLinkInfo' => null,
        'settleAdjustReason' => null
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
        'quitType' => 'quit_type',
        'scenePayLinkInfo' => 'scene_pay_link_info',
        'settleAdjustReason' => 'settle_adjust_reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'quitType' => 'setQuitType',
        'scenePayLinkInfo' => 'setScenePayLinkInfo',
        'settleAdjustReason' => 'setSettleAdjustReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'quitType' => 'getQuitType',
        'scenePayLinkInfo' => 'getScenePayLinkInfo',
        'settleAdjustReason' => 'getSettleAdjustReason'
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
        $this->container['quitType'] = $data['quitType'] ?? null;
        $this->container['scenePayLinkInfo'] = $data['scenePayLinkInfo'] ?? null;
        $this->container['settleAdjustReason'] = $data['settleAdjustReason'] ?? null;
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
     * Gets quitType
     *
     * @return string|null
     */
    public function getQuitType()
    {
        return $this->container['quitType'];
    }

    /**
     * Sets quitType
     *
     * @param string|null $quitType quit_type为USER_CANCEL_QUIT或者SETTLE_APPLY_QUIT
     *
     * @return self
     */
    public function setQuitType($quitType)
    {
        $this->container['quitType'] = $quitType;

        return $this;
    }

    /**
     * Gets scenePayLinkInfo
     *
     * @return string|null
     */
    public function getScenePayLinkInfo()
    {
        return $this->container['scenePayLinkInfo'];
    }

    /**
     * Sets scenePayLinkInfo
     *
     * @param string|null $scenePayLinkInfo 商链通权益抵扣信息,  当前只有运营商使用,  未使用权益抵扣忽略该字段  fundRuleList为对应的出资信息，目前该列表不支持多对象，长度限制为1。其中fundAgreementNo为本笔交易实际出资的协议，由(商链通二方通用版本接入文档)2.3.2获取，fundAmount为该出资协议出资的金额。  bizScene和subBizScene为(商链通二方通用版本接入文档)2.1.3中支付宝侧分配的信息。  bizMode=MERCHANT_ORDER为固定值。
     *
     * @return self
     */
    public function setScenePayLinkInfo($scenePayLinkInfo)
    {
        $this->container['scenePayLinkInfo'] = $scenePayLinkInfo;

        return $this;
    }

    /**
     * Gets settleAdjustReason
     *
     * @return string|null
     */
    public function getSettleAdjustReason()
    {
        return $this->container['settleAdjustReason'];
    }

    /**
     * Sets settleAdjustReason
     *
     * @param string|null $settleAdjustReason action_type选择PAY_TO_ZERO时必填， \"SERVICE_CANCELED\":\"服务已取消\", \"OTHER_CHANNEL_PERFORMANCE\":\"户已通过其他方式履约\"
     *
     * @return self
     */
    public function setSettleAdjustReason($settleAdjustReason)
    {
        $this->container['settleAdjustReason'] = $settleAdjustReason;

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


