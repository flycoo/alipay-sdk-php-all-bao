<?php
/**
 * ZolozAuthenticationCustomerFacemanageDeleteModel
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
 * ZolozAuthenticationCustomerFacemanageDeleteModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ZolozAuthenticationCustomerFacemanageDeleteModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ZolozAuthenticationCustomerFacemanageDeleteModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'areacode' => 'string',
        'bizType' => 'string',
        'bizscale' => 'string',
        'brandcode' => 'string',
        'devicenum' => 'string',
        'extinfo' => 'string',
        'facetype' => 'string',
        'faceval' => 'string',
        'group' => 'string',
        'storecode' => 'string',
        'validtimes' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'areacode' => null,
        'bizType' => null,
        'bizscale' => null,
        'brandcode' => null,
        'devicenum' => null,
        'extinfo' => null,
        'facetype' => null,
        'faceval' => null,
        'group' => null,
        'storecode' => null,
        'validtimes' => null
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
        'areacode' => 'areacode',
        'bizType' => 'biz_type',
        'bizscale' => 'bizscale',
        'brandcode' => 'brandcode',
        'devicenum' => 'devicenum',
        'extinfo' => 'extinfo',
        'facetype' => 'facetype',
        'faceval' => 'faceval',
        'group' => 'group',
        'storecode' => 'storecode',
        'validtimes' => 'validtimes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'areacode' => 'setAreacode',
        'bizType' => 'setBizType',
        'bizscale' => 'setBizscale',
        'brandcode' => 'setBrandcode',
        'devicenum' => 'setDevicenum',
        'extinfo' => 'setExtinfo',
        'facetype' => 'setFacetype',
        'faceval' => 'setFaceval',
        'group' => 'setGroup',
        'storecode' => 'setStorecode',
        'validtimes' => 'setValidtimes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'areacode' => 'getAreacode',
        'bizType' => 'getBizType',
        'bizscale' => 'getBizscale',
        'brandcode' => 'getBrandcode',
        'devicenum' => 'getDevicenum',
        'extinfo' => 'getExtinfo',
        'facetype' => 'getFacetype',
        'faceval' => 'getFaceval',
        'group' => 'getGroup',
        'storecode' => 'getStorecode',
        'validtimes' => 'getValidtimes'
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
        $this->container['areacode'] = $data['areacode'] ?? null;
        $this->container['bizType'] = $data['bizType'] ?? null;
        $this->container['bizscale'] = $data['bizscale'] ?? null;
        $this->container['brandcode'] = $data['brandcode'] ?? null;
        $this->container['devicenum'] = $data['devicenum'] ?? null;
        $this->container['extinfo'] = $data['extinfo'] ?? null;
        $this->container['facetype'] = $data['facetype'] ?? null;
        $this->container['faceval'] = $data['faceval'] ?? null;
        $this->container['group'] = $data['group'] ?? null;
        $this->container['storecode'] = $data['storecode'] ?? null;
        $this->container['validtimes'] = $data['validtimes'] ?? null;
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
     * Gets areacode
     *
     * @return string|null
     */
    public function getAreacode()
    {
        return $this->container['areacode'];
    }

    /**
     * Sets areacode
     *
     * @param string|null $areacode 地域编码
     *
     * @return self
     */
    public function setAreacode($areacode)
    {
        $this->container['areacode'] = $areacode;

        return $this;
    }

    /**
     * Gets bizType
     *
     * @return string|null
     */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
     * Sets bizType
     *
     * @param string|null $bizType 人脸产品能力
     *
     * @return self
     */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;

        return $this;
    }

    /**
     * Gets bizscale
     *
     * @return string|null
     */
    public function getBizscale()
    {
        return $this->container['bizscale'];
    }

    /**
     * Sets bizscale
     *
     * @param string|null $bizscale 业务量
     *
     * @return self
     */
    public function setBizscale($bizscale)
    {
        $this->container['bizscale'] = $bizscale;

        return $this;
    }

    /**
     * Gets brandcode
     *
     * @return string|null
     */
    public function getBrandcode()
    {
        return $this->container['brandcode'];
    }

    /**
     * Sets brandcode
     *
     * @param string|null $brandcode 商户品牌
     *
     * @return self
     */
    public function setBrandcode($brandcode)
    {
        $this->container['brandcode'] = $brandcode;

        return $this;
    }

    /**
     * Gets devicenum
     *
     * @return string|null
     */
    public function getDevicenum()
    {
        return $this->container['devicenum'];
    }

    /**
     * Sets devicenum
     *
     * @param string|null $devicenum 商户机具唯一编码，关键参数
     *
     * @return self
     */
    public function setDevicenum($devicenum)
    {
        $this->container['devicenum'] = $devicenum;

        return $this;
    }

    /**
     * Gets extinfo
     *
     * @return string|null
     */
    public function getExtinfo()
    {
        return $this->container['extinfo'];
    }

    /**
     * Sets extinfo
     *
     * @param string|null $extinfo 拓展参数
     *
     * @return self
     */
    public function setExtinfo($extinfo)
    {
        $this->container['extinfo'] = $extinfo;

        return $this;
    }

    /**
     * Gets facetype
     *
     * @return string|null
     */
    public function getFacetype()
    {
        return $this->container['facetype'];
    }

    /**
     * Sets facetype
     *
     * @param string|null $facetype 入库类型 IDCARD:身份证 ALIPAY_USER:支付宝用户id, ALIPAY_TEL:手机号入库 CUSTOMER:自定义
     *
     * @return self
     */
    public function setFacetype($facetype)
    {
        $this->container['facetype'] = $facetype;

        return $this;
    }

    /**
     * Gets faceval
     *
     * @return string|null
     */
    public function getFaceval()
    {
        return $this->container['faceval'];
    }

    /**
     * Sets faceval
     *
     * @param string|null $faceval 入库用户信息
     *
     * @return self
     */
    public function setFaceval($faceval)
    {
        $this->container['faceval'] = $faceval;

        return $this;
    }

    /**
     * Gets group
     *
     * @return string|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param string|null $group 分组
     *
     * @return self
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets storecode
     *
     * @return string|null
     */
    public function getStorecode()
    {
        return $this->container['storecode'];
    }

    /**
     * Sets storecode
     *
     * @param string|null $storecode 门店编码
     *
     * @return self
     */
    public function setStorecode($storecode)
    {
        $this->container['storecode'] = $storecode;

        return $this;
    }

    /**
     * Gets validtimes
     *
     * @return string|null
     */
    public function getValidtimes()
    {
        return $this->container['validtimes'];
    }

    /**
     * Sets validtimes
     *
     * @param string|null $validtimes 有效期天数，如7天、30天、365天
     *
     * @return self
     */
    public function setValidtimes($validtimes)
    {
        $this->container['validtimes'] = $validtimes;

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


