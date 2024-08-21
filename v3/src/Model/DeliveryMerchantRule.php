<?php
/**
 * DeliveryMerchantRule
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
 * The version of the OpenAPI document: 2024-08-21
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
 * DeliveryMerchantRule Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DeliveryMerchantRule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DeliveryMerchantRule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'brandIdList' => 'string[]',
        'deliveryMerchantInfos' => '\Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]',
        'deliveryMerchantMode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'brandIdList' => null,
        'deliveryMerchantInfos' => null,
        'deliveryMerchantMode' => null
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
        'brandIdList' => 'brand_id_list',
        'deliveryMerchantInfos' => 'delivery_merchant_infos',
        'deliveryMerchantMode' => 'delivery_merchant_mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'brandIdList' => 'setBrandIdList',
        'deliveryMerchantInfos' => 'setDeliveryMerchantInfos',
        'deliveryMerchantMode' => 'setDeliveryMerchantMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'brandIdList' => 'getBrandIdList',
        'deliveryMerchantInfos' => 'getDeliveryMerchantInfos',
        'deliveryMerchantMode' => 'getDeliveryMerchantMode'
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
        $this->container['brandIdList'] = $data['brandIdList'] ?? null;
        $this->container['deliveryMerchantInfos'] = $data['deliveryMerchantInfos'] ?? null;
        $this->container['deliveryMerchantMode'] = $data['deliveryMerchantMode'] ?? null;
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
     * Gets brandIdList
     *
     * @return string[]|null
     */
    public function getBrandIdList()
    {
        return $this->container['brandIdList'];
    }

    /**
     * Sets brandIdList
     *
     * @param string[]|null $brandIdList 指定品牌id。 说明：如商户需选择某个品牌下维护的收款账号，请上传相关品牌id
     *
     * @return self
     */
    public function setBrandIdList($brandIdList)
    {
        $this->container['brandIdList'] = $brandIdList;

        return $this;
    }

    /**
     * Gets deliveryMerchantInfos
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]|null
     */
    public function getDeliveryMerchantInfos()
    {
        return $this->container['deliveryMerchantInfos'];
    }

    /**
     * Sets deliveryMerchantInfos
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryMerchantInfo[]|null $deliveryMerchantInfos 曝光商户选取列表。 说明：需要传入您期望曝光的商户的商户号，传入为空时默认使用投放优惠券活动的适用范围。 限制：曝光商户号需与投放归属商户号相同，或传入有跨主体授权关系的商户号或有弱绑定关系的M3账号
     *
     * @return self
     */
    public function setDeliveryMerchantInfos($deliveryMerchantInfos)
    {
        $this->container['deliveryMerchantInfos'] = $deliveryMerchantInfos;

        return $this;
    }

    /**
     * Gets deliveryMerchantMode
     *
     * @return string|null
     */
    public function getDeliveryMerchantMode()
    {
        return $this->container['deliveryMerchantMode'];
    }

    /**
     * Sets deliveryMerchantMode
     *
     * @param string|null $deliveryMerchantMode 指定支付成功页模式。
     *
     * @return self
     */
    public function setDeliveryMerchantMode($deliveryMerchantMode)
    {
        $this->container['deliveryMerchantMode'] = $deliveryMerchantMode;

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


