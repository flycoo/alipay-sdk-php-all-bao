<?php
/**
 * AlipayUserAgreementMigrateModel
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
 * AlipayUserAgreementMigrateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayUserAgreementMigrateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayUserAgreementMigrateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'agreementNo' => 'string',
        'targetAppId' => 'string',
        'targetInvokeAppId' => 'string',
        'targetPartnerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'agreementNo' => null,
        'targetAppId' => null,
        'targetInvokeAppId' => null,
        'targetPartnerId' => null
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
        'agreementNo' => 'agreement_no',
        'targetAppId' => 'target_app_id',
        'targetInvokeAppId' => 'target_invoke_app_id',
        'targetPartnerId' => 'target_partner_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreementNo' => 'setAgreementNo',
        'targetAppId' => 'setTargetAppId',
        'targetInvokeAppId' => 'setTargetInvokeAppId',
        'targetPartnerId' => 'setTargetPartnerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreementNo' => 'getAgreementNo',
        'targetAppId' => 'getTargetAppId',
        'targetInvokeAppId' => 'getTargetInvokeAppId',
        'targetPartnerId' => 'getTargetPartnerId'
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
        $this->container['agreementNo'] = $data['agreementNo'] ?? null;
        $this->container['targetAppId'] = $data['targetAppId'] ?? null;
        $this->container['targetInvokeAppId'] = $data['targetInvokeAppId'] ?? null;
        $this->container['targetPartnerId'] = $data['targetPartnerId'] ?? null;
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
     * Gets agreementNo
     *
     * @return string|null
     */
    public function getAgreementNo()
    {
        return $this->container['agreementNo'];
    }

    /**
     * Sets agreementNo
     *
     * @param string|null $agreementNo 支付宝系统中用以唯一标识用户签约记录的编号（用户签约成功后的协议号 ）
     *
     * @return self
     */
    public function setAgreementNo($agreementNo)
    {
        $this->container['agreementNo'] = $agreementNo;

        return $this;
    }

    /**
     * Gets targetAppId
     *
     * @return string|null
     */
    public function getTargetAppId()
    {
        return $this->container['targetAppId'];
    }

    /**
     * Sets targetAppId
     *
     * @param string|null $targetAppId 需要迁移的目标商户应用id
     *
     * @return self
     */
    public function setTargetAppId($targetAppId)
    {
        $this->container['targetAppId'] = $targetAppId;

        return $this;
    }

    /**
     * Gets targetInvokeAppId
     *
     * @return string|null
     */
    public function getTargetInvokeAppId()
    {
        return $this->container['targetInvokeAppId'];
    }

    /**
     * Sets targetInvokeAppId
     *
     * @param string|null $targetInvokeAppId 需要迁移的目标商户调用应用id
     *
     * @return self
     */
    public function setTargetInvokeAppId($targetInvokeAppId)
    {
        $this->container['targetInvokeAppId'] = $targetInvokeAppId;

        return $this;
    }

    /**
     * Gets targetPartnerId
     *
     * @return string|null
     */
    public function getTargetPartnerId()
    {
        return $this->container['targetPartnerId'];
    }

    /**
     * Sets targetPartnerId
     *
     * @param string|null $targetPartnerId 需要迁移的目标商户id
     *
     * @return self
     */
    public function setTargetPartnerId($targetPartnerId)
    {
        $this->container['targetPartnerId'] = $targetPartnerId;

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


