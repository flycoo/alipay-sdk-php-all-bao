<?php
/**
 * AlipayMarketingActivityDeliveryCreateModel
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
 * AlipayMarketingActivityDeliveryCreateModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayMarketingActivityDeliveryCreateModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayMarketingActivityDeliveryCreateModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'belongMerchantInfo' => '\Alipay\OpenAPISDK\Model\DeliveryAgencyMerchantInfo',
        'deliveryBaseInfo' => '\Alipay\OpenAPISDK\Model\DeliveryBaseInfo',
        'deliveryBoothCode' => 'string',
        'deliveryConfigList' => '\Alipay\OpenAPISDK\Model\DeliveryConfig[]',
        'deliveryPlayConfig' => '\Alipay\OpenAPISDK\Model\DeliveryPlayConfig',
        'deliveryTargetRule' => '\Alipay\OpenAPISDK\Model\DeliveryTargetRule',
        'idemNo' => 'string',
        'merchantAccessMode' => 'string',
        'outBizNo' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'belongMerchantInfo' => null,
        'deliveryBaseInfo' => null,
        'deliveryBoothCode' => null,
        'deliveryConfigList' => null,
        'deliveryPlayConfig' => null,
        'deliveryTargetRule' => null,
        'idemNo' => null,
        'merchantAccessMode' => null,
        'outBizNo' => null
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
        'belongMerchantInfo' => 'belong_merchant_info',
        'deliveryBaseInfo' => 'delivery_base_info',
        'deliveryBoothCode' => 'delivery_booth_code',
        'deliveryConfigList' => 'delivery_config_list',
        'deliveryPlayConfig' => 'delivery_play_config',
        'deliveryTargetRule' => 'delivery_target_rule',
        'idemNo' => 'idem_no',
        'merchantAccessMode' => 'merchant_access_mode',
        'outBizNo' => 'out_biz_no'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'belongMerchantInfo' => 'setBelongMerchantInfo',
        'deliveryBaseInfo' => 'setDeliveryBaseInfo',
        'deliveryBoothCode' => 'setDeliveryBoothCode',
        'deliveryConfigList' => 'setDeliveryConfigList',
        'deliveryPlayConfig' => 'setDeliveryPlayConfig',
        'deliveryTargetRule' => 'setDeliveryTargetRule',
        'idemNo' => 'setIdemNo',
        'merchantAccessMode' => 'setMerchantAccessMode',
        'outBizNo' => 'setOutBizNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'belongMerchantInfo' => 'getBelongMerchantInfo',
        'deliveryBaseInfo' => 'getDeliveryBaseInfo',
        'deliveryBoothCode' => 'getDeliveryBoothCode',
        'deliveryConfigList' => 'getDeliveryConfigList',
        'deliveryPlayConfig' => 'getDeliveryPlayConfig',
        'deliveryTargetRule' => 'getDeliveryTargetRule',
        'idemNo' => 'getIdemNo',
        'merchantAccessMode' => 'getMerchantAccessMode',
        'outBizNo' => 'getOutBizNo'
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
        $this->container['belongMerchantInfo'] = $data['belongMerchantInfo'] ?? null;
        $this->container['deliveryBaseInfo'] = $data['deliveryBaseInfo'] ?? null;
        $this->container['deliveryBoothCode'] = $data['deliveryBoothCode'] ?? null;
        $this->container['deliveryConfigList'] = $data['deliveryConfigList'] ?? null;
        $this->container['deliveryPlayConfig'] = $data['deliveryPlayConfig'] ?? null;
        $this->container['deliveryTargetRule'] = $data['deliveryTargetRule'] ?? null;
        $this->container['idemNo'] = $data['idemNo'] ?? null;
        $this->container['merchantAccessMode'] = $data['merchantAccessMode'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
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
     * Gets belongMerchantInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryAgencyMerchantInfo|null
     */
    public function getBelongMerchantInfo()
    {
        return $this->container['belongMerchantInfo'];
    }

    /**
     * Sets belongMerchantInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryAgencyMerchantInfo|null $belongMerchantInfo belongMerchantInfo
     *
     * @return self
     */
    public function setBelongMerchantInfo($belongMerchantInfo)
    {
        $this->container['belongMerchantInfo'] = $belongMerchantInfo;

        return $this;
    }

    /**
     * Gets deliveryBaseInfo
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryBaseInfo|null
     */
    public function getDeliveryBaseInfo()
    {
        return $this->container['deliveryBaseInfo'];
    }

    /**
     * Sets deliveryBaseInfo
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryBaseInfo|null $deliveryBaseInfo deliveryBaseInfo
     *
     * @return self
     */
    public function setDeliveryBaseInfo($deliveryBaseInfo)
    {
        $this->container['deliveryBaseInfo'] = $deliveryBaseInfo;

        return $this;
    }

    /**
     * Gets deliveryBoothCode
     *
     * @return string|null
     */
    public function getDeliveryBoothCode()
    {
        return $this->container['deliveryBoothCode'];
    }

    /**
     * Sets deliveryBoothCode
     *
     * @param string|null $deliveryBoothCode 投放的展位编码。
     *
     * @return self
     */
    public function setDeliveryBoothCode($deliveryBoothCode)
    {
        $this->container['deliveryBoothCode'] = $deliveryBoothCode;

        return $this;
    }

    /**
     * Gets deliveryConfigList
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryConfig[]|null
     */
    public function getDeliveryConfigList()
    {
        return $this->container['deliveryConfigList'];
    }

    /**
     * Sets deliveryConfigList
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryConfig[]|null $deliveryConfigList [已废弃] 待创建的投放配置列表。 最大数量限制20个。
     *
     * @return self
     */
    public function setDeliveryConfigList($deliveryConfigList)
    {
        $this->container['deliveryConfigList'] = $deliveryConfigList;

        return $this;
    }

    /**
     * Gets deliveryPlayConfig
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryPlayConfig|null
     */
    public function getDeliveryPlayConfig()
    {
        return $this->container['deliveryPlayConfig'];
    }

    /**
     * Sets deliveryPlayConfig
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryPlayConfig|null $deliveryPlayConfig deliveryPlayConfig
     *
     * @return self
     */
    public function setDeliveryPlayConfig($deliveryPlayConfig)
    {
        $this->container['deliveryPlayConfig'] = $deliveryPlayConfig;

        return $this;
    }

    /**
     * Gets deliveryTargetRule
     *
     * @return \Alipay\OpenAPISDK\Model\DeliveryTargetRule|null
     */
    public function getDeliveryTargetRule()
    {
        return $this->container['deliveryTargetRule'];
    }

    /**
     * Sets deliveryTargetRule
     *
     * @param \Alipay\OpenAPISDK\Model\DeliveryTargetRule|null $deliveryTargetRule deliveryTargetRule
     *
     * @return self
     */
    public function setDeliveryTargetRule($deliveryTargetRule)
    {
        $this->container['deliveryTargetRule'] = $deliveryTargetRule;

        return $this;
    }

    /**
     * Gets idemNo
     *
     * @return string|null
     */
    public function getIdemNo()
    {
        return $this->container['idemNo'];
    }

    /**
     * Sets idemNo
     *
     * @param string|null $idemNo 商品卖货推广创建幂等号，用作幂等控制。 幂等作用：请求返回与上一次相同的结果。 外部接入方需保证幂等号唯一。
     *
     * @return self
     */
    public function setIdemNo($idemNo)
    {
        $this->container['idemNo'] = $idemNo;

        return $this;
    }

    /**
     * Gets merchantAccessMode
     *
     * @return string|null
     */
    public function getMerchantAccessMode()
    {
        return $this->container['merchantAccessMode'];
    }

    /**
     * Sets merchantAccessMode
     *
     * @param string|null $merchantAccessMode 商户接入模式
     *
     * @return self
     */
    public function setMerchantAccessMode($merchantAccessMode)
    {
        $this->container['merchantAccessMode'] = $merchantAccessMode;

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
     * @param string|null $outBizNo 外部业务单号，用作幂等控制。 幂等作用：请求返回与上一次相同的结果。 外部接入方需保证业务单号唯一。
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

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


