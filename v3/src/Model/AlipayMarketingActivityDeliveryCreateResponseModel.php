<?php
/**
 * AlipayMarketingActivityDeliveryCreateResponseModel
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
 * AlipayMarketingActivityDeliveryCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityDeliveryCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityDeliveryCreateResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deliveryGuidePreviewUrl' => 'string',
        'deliveryId' => 'string',
        'errorDeliveryConfigList' => '\Alipay\OpenAPISDK\Model\ErrorDeliveryConfig[]',
        'outBizNo' => 'string',
        'successDeliveryConfigList' => '\Alipay\OpenAPISDK\Model\SuccessDeliveryConfig[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deliveryGuidePreviewUrl' => null,
        'deliveryId' => null,
        'errorDeliveryConfigList' => null,
        'outBizNo' => null,
        'successDeliveryConfigList' => null
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
        'deliveryGuidePreviewUrl' => 'delivery_guide_preview_url',
        'deliveryId' => 'delivery_id',
        'errorDeliveryConfigList' => 'error_delivery_config_list',
        'outBizNo' => 'out_biz_no',
        'successDeliveryConfigList' => 'success_delivery_config_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deliveryGuidePreviewUrl' => 'setDeliveryGuidePreviewUrl',
        'deliveryId' => 'setDeliveryId',
        'errorDeliveryConfigList' => 'setErrorDeliveryConfigList',
        'outBizNo' => 'setOutBizNo',
        'successDeliveryConfigList' => 'setSuccessDeliveryConfigList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deliveryGuidePreviewUrl' => 'getDeliveryGuidePreviewUrl',
        'deliveryId' => 'getDeliveryId',
        'errorDeliveryConfigList' => 'getErrorDeliveryConfigList',
        'outBizNo' => 'getOutBizNo',
        'successDeliveryConfigList' => 'getSuccessDeliveryConfigList'
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
        $this->container['deliveryGuidePreviewUrl'] = $data['deliveryGuidePreviewUrl'] ?? null;
        $this->container['deliveryId'] = $data['deliveryId'] ?? null;
        $this->container['errorDeliveryConfigList'] = $data['errorDeliveryConfigList'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['successDeliveryConfigList'] = $data['successDeliveryConfigList'] ?? null;
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
     * Gets deliveryGuidePreviewUrl
     *
     * @return string|null
     */
    public function getDeliveryGuidePreviewUrl()
    {
        return $this->container['deliveryGuidePreviewUrl'];
    }

    /**
     * Sets deliveryGuidePreviewUrl
     *
     * @param string|null $deliveryGuidePreviewUrl 预览链接。 可用于预览用户在承接页面领券的流程。
     *
     * @return self
     */
    public function setDeliveryGuidePreviewUrl($deliveryGuidePreviewUrl)
    {
        $this->container['deliveryGuidePreviewUrl'] = $deliveryGuidePreviewUrl;

        return $this;
    }

    /**
     * Gets deliveryId
     *
     * @return string|null
     */
    public function getDeliveryId()
    {
        return $this->container['deliveryId'];
    }

    /**
     * Sets deliveryId
     *
     * @param string|null $deliveryId 推广计划id
     *
     * @return self
     */
    public function setDeliveryId($deliveryId)
    {
        $this->container['deliveryId'] = $deliveryId;

        return $this;
    }

    /**
     * Gets errorDeliveryConfigList
     *
     * @return \Alipay\OpenAPISDK\Model\ErrorDeliveryConfig[]|null
     */
    public function getErrorDeliveryConfigList()
    {
        return $this->container['errorDeliveryConfigList'];
    }

    /**
     * Sets errorDeliveryConfigList
     *
     * @param \Alipay\OpenAPISDK\Model\ErrorDeliveryConfig[]|null $errorDeliveryConfigList [已废弃] 创建失败的投放信息列表  失败的投放配置列表中，会返回对应的deliveryConfig对象。
     *
     * @return self
     */
    public function setErrorDeliveryConfigList($errorDeliveryConfigList)
    {
        $this->container['errorDeliveryConfigList'] = $errorDeliveryConfigList;

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
     * @param string|null $outBizNo 外部业务单号，用作该请求唯一标识。  创建推广计划的结果，会通过异步消息方式通知，消息体包含外部业务单号，来判断该请求创建结果。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets successDeliveryConfigList
     *
     * @return \Alipay\OpenAPISDK\Model\SuccessDeliveryConfig[]|null
     */
    public function getSuccessDeliveryConfigList()
    {
        return $this->container['successDeliveryConfigList'];
    }

    /**
     * Sets successDeliveryConfigList
     *
     * @param \Alipay\OpenAPISDK\Model\SuccessDeliveryConfig[]|null $successDeliveryConfigList [已废弃] 创建成功的投放信息列表  成功的投放配置列表中，会返回对应的deliveryConfig对象。
     *
     * @return self
     */
    public function setSuccessDeliveryConfigList($successDeliveryConfigList)
    {
        $this->container['successDeliveryConfigList'] = $successDeliveryConfigList;

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


