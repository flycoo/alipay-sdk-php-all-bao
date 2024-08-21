<?php
/**
 * AlipayFundEnterprisepaySignModel
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
 * AlipayFundEnterprisepaySignModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayFundEnterprisepaySignModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayFundEnterprisepaySignModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountName' => 'string',
        'appointSignTerminal' => 'string',
        'bizScene' => 'string',
        'extParams' => 'string',
        'identity' => 'string',
        'identityName' => 'string',
        'identityType' => 'string',
        'outBizNo' => 'string',
        'outEntityId' => 'string',
        'outSource' => 'string',
        'productCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountName' => null,
        'appointSignTerminal' => null,
        'bizScene' => null,
        'extParams' => null,
        'identity' => null,
        'identityName' => null,
        'identityType' => null,
        'outBizNo' => null,
        'outEntityId' => null,
        'outSource' => null,
        'productCode' => null
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
        'accountName' => 'account_name',
        'appointSignTerminal' => 'appoint_sign_terminal',
        'bizScene' => 'biz_scene',
        'extParams' => 'ext_params',
        'identity' => 'identity',
        'identityName' => 'identity_name',
        'identityType' => 'identity_type',
        'outBizNo' => 'out_biz_no',
        'outEntityId' => 'out_entity_id',
        'outSource' => 'out_source',
        'productCode' => 'product_code'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountName' => 'setAccountName',
        'appointSignTerminal' => 'setAppointSignTerminal',
        'bizScene' => 'setBizScene',
        'extParams' => 'setExtParams',
        'identity' => 'setIdentity',
        'identityName' => 'setIdentityName',
        'identityType' => 'setIdentityType',
        'outBizNo' => 'setOutBizNo',
        'outEntityId' => 'setOutEntityId',
        'outSource' => 'setOutSource',
        'productCode' => 'setProductCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountName' => 'getAccountName',
        'appointSignTerminal' => 'getAppointSignTerminal',
        'bizScene' => 'getBizScene',
        'extParams' => 'getExtParams',
        'identity' => 'getIdentity',
        'identityName' => 'getIdentityName',
        'identityType' => 'getIdentityType',
        'outBizNo' => 'getOutBizNo',
        'outEntityId' => 'getOutEntityId',
        'outSource' => 'getOutSource',
        'productCode' => 'getProductCode'
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
        $this->container['accountName'] = $data['accountName'] ?? null;
        $this->container['appointSignTerminal'] = $data['appointSignTerminal'] ?? null;
        $this->container['bizScene'] = $data['bizScene'] ?? null;
        $this->container['extParams'] = $data['extParams'] ?? null;
        $this->container['identity'] = $data['identity'] ?? null;
        $this->container['identityName'] = $data['identityName'] ?? null;
        $this->container['identityType'] = $data['identityType'] ?? null;
        $this->container['outBizNo'] = $data['outBizNo'] ?? null;
        $this->container['outEntityId'] = $data['outEntityId'] ?? null;
        $this->container['outSource'] = $data['outSource'] ?? null;
        $this->container['productCode'] = $data['productCode'] ?? null;
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
     * Gets accountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string|null $accountName 企业简称，传空采用默认规则命名，使用公司名称
     *
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets appointSignTerminal
     *
     * @return string|null
     */
    public function getAppointSignTerminal()
    {
        return $this->container['appointSignTerminal'];
    }

    /**
     * Sets appointSignTerminal
     *
     * @param string|null $appointSignTerminal 指定签约终端类型 PC-电脑浏览器 MOBILE-手机端
     *
     * @return self
     */
    public function setAppointSignTerminal($appointSignTerminal)
    {
        $this->container['appointSignTerminal'] = $appointSignTerminal;

        return $this;
    }

    /**
     * Gets bizScene
     *
     * @return string|null
     */
    public function getBizScene()
    {
        return $this->container['bizScene'];
    }

    /**
     * Sets bizScene
     *
     * @param string|null $bizScene 业务场景，联系支付宝分配
     *
     * @return self
     */
    public function setBizScene($bizScene)
    {
        $this->container['bizScene'] = $bizScene;

        return $this;
    }

    /**
     * Gets extParams
     *
     * @return string|null
     */
    public function getExtParams()
    {
        return $this->container['extParams'];
    }

    /**
     * Sets extParams
     *
     * @param string|null $extParams 特殊场景下扩展字段
     *
     * @return self
     */
    public function setExtParams($extParams)
    {
        $this->container['extParams'] = $extParams;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return string|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param string|null $identity 开户账号： 当identity_type是ALIPAY_USER_ID时填支付宝会员ID（2088开头）； 当identity_type是ALIPAY_LOGON_ID 时填支付宝登录号； 当identity_type是OUT_USER_ID时填外部平台的用户uid; 当identity_type是ALIPAY_OPEN_ID时填用户openId
     *
     * @return self
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

        return $this;
    }

    /**
     * Gets identityName
     *
     * @return string|null
     */
    public function getIdentityName()
    {
        return $this->container['identityName'];
    }

    /**
     * Sets identityName
     *
     * @param string|null $identityName 开户用户名称，identity_type为ALIPAY_LOGON_ID时必填
     *
     * @return self
     */
    public function setIdentityName($identityName)
    {
        $this->container['identityName'] = $identityName;

        return $this;
    }

    /**
     * Gets identityType
     *
     * @return string|null
     */
    public function getIdentityType()
    {
        return $this->container['identityType'];
    }

    /**
     * Sets identityType
     *
     * @param string|null $identityType 账号类型，目前支持如下类型： 1、ALIPAY_USER_ID 支付宝的会员ID 2、ALIPAY_LOGON_ID：支付宝登录号，支持邮箱和手机号格式 3、OUT_USER_ID：外部用户uid
     *
     * @return self
     */
    public function setIdentityType($identityType)
    {
        $this->container['identityType'] = $identityType;

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
     * @param string|null $outBizNo 商户侧单号（幂等字段） ，补充说明：幂等逻辑（商户appid+out_biz_no），商户集成时需注意，如换号重复发起，则认为是一笔新的请求
     *
     * @return self
     */
    public function setOutBizNo($outBizNo)
    {
        $this->container['outBizNo'] = $outBizNo;

        return $this;
    }

    /**
     * Gets outEntityId
     *
     * @return string|null
     */
    public function getOutEntityId()
    {
        return $this->container['outEntityId'];
    }

    /**
     * Sets outEntityId
     *
     * @param string|null $outEntityId 外部实体ID，一般表述为外部操作人操作某个外部实体。比如企业码2284号
     *
     * @return self
     */
    public function setOutEntityId($outEntityId)
    {
        $this->container['outEntityId'] = $outEntityId;

        return $this;
    }

    /**
     * Gets outSource
     *
     * @return string|null
     */
    public function getOutSource()
    {
        return $this->container['outSource'];
    }

    /**
     * Sets outSource
     *
     * @param string|null $outSource ISV平台定义的共同账户开户来源
     *
     * @return self
     */
    public function setOutSource($outSource)
    {
        $this->container['outSource'] = $outSource;

        return $this;
    }

    /**
     * Gets productCode
     *
     * @return string|null
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     *
     * @param string|null $productCode 产品码
     *
     * @return self
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

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


