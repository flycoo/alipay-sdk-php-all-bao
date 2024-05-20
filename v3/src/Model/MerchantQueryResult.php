<?php
/**
 * MerchantQueryResult
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
 * MerchantQueryResult Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class MerchantQueryResult implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantQueryResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aliasName' => 'string',
        'certNo' => 'string',
        'city' => 'string',
        'detailAddress' => 'string',
        'distinct' => 'string',
        'mccCode' => 'string',
        'merchantType' => 'string',
        'name' => 'string',
        'province' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aliasName' => null,
        'certNo' => null,
        'city' => null,
        'detailAddress' => null,
        'distinct' => null,
        'mccCode' => null,
        'merchantType' => null,
        'name' => null,
        'province' => null
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
        'aliasName' => 'alias_name',
        'certNo' => 'cert_no',
        'city' => 'city',
        'detailAddress' => 'detail_address',
        'distinct' => 'distinct',
        'mccCode' => 'mcc_code',
        'merchantType' => 'merchant_type',
        'name' => 'name',
        'province' => 'province'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aliasName' => 'setAliasName',
        'certNo' => 'setCertNo',
        'city' => 'setCity',
        'detailAddress' => 'setDetailAddress',
        'distinct' => 'setDistinct',
        'mccCode' => 'setMccCode',
        'merchantType' => 'setMerchantType',
        'name' => 'setName',
        'province' => 'setProvince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aliasName' => 'getAliasName',
        'certNo' => 'getCertNo',
        'city' => 'getCity',
        'detailAddress' => 'getDetailAddress',
        'distinct' => 'getDistinct',
        'mccCode' => 'getMccCode',
        'merchantType' => 'getMerchantType',
        'name' => 'getName',
        'province' => 'getProvince'
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
        $this->container['aliasName'] = $data['aliasName'] ?? null;
        $this->container['certNo'] = $data['certNo'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['detailAddress'] = $data['detailAddress'] ?? null;
        $this->container['distinct'] = $data['distinct'] ?? null;
        $this->container['mccCode'] = $data['mccCode'] ?? null;
        $this->container['merchantType'] = $data['merchantType'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['province'] = $data['province'] ?? null;
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
     * Gets aliasName
     *
     * @return string|null
     */
    public function getAliasName()
    {
        return $this->container['aliasName'];
    }

    /**
     * Sets aliasName
     *
     * @param string|null $aliasName 商户的别名，用户商户对客展示的名称
     *
     * @return self
     */
    public function setAliasName($aliasName)
    {
        $this->container['aliasName'] = $aliasName;

        return $this;
    }

    /**
     * Gets certNo
     *
     * @return string|null
     */
    public function getCertNo()
    {
        return $this->container['certNo'];
    }

    /**
     * Sets certNo
     *
     * @param string|null $certNo 商户认证证件号，企业营业执照号
     *
     * @return self
     */
    public function setCertNo($certNo)
    {
        $this->container['certNo'] = $certNo;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city 市名称
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets detailAddress
     *
     * @return string|null
     */
    public function getDetailAddress()
    {
        return $this->container['detailAddress'];
    }

    /**
     * Sets detailAddress
     *
     * @param string|null $detailAddress 商户经营详细地址
     *
     * @return self
     */
    public function setDetailAddress($detailAddress)
    {
        $this->container['detailAddress'] = $detailAddress;

        return $this;
    }

    /**
     * Gets distinct
     *
     * @return string|null
     */
    public function getDistinct()
    {
        return $this->container['distinct'];
    }

    /**
     * Sets distinct
     *
     * @param string|null $distinct 区县名称
     *
     * @return self
     */
    public function setDistinct($distinct)
    {
        $this->container['distinct'] = $distinct;

        return $this;
    }

    /**
     * Gets mccCode
     *
     * @return string|null
     */
    public function getMccCode()
    {
        return $this->container['mccCode'];
    }

    /**
     * Sets mccCode
     *
     * @param string|null $mccCode 商户新版mcc code
     *
     * @return self
     */
    public function setMccCode($mccCode)
    {
        $this->container['mccCode'] = $mccCode;

        return $this;
    }

    /**
     * Gets merchantType
     *
     * @return string|null
     */
    public function getMerchantType()
    {
        return $this->container['merchantType'];
    }

    /**
     * Sets merchantType
     *
     * @param string|null $merchantType 描述商户类型，个人-P/企业-B
     *
     * @return self
     */
    public function setMerchantType($merchantType)
    {
        $this->container['merchantType'] = $merchantType;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 商户认证名称信息
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets province
     *
     * @return string|null
     */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
     * Sets province
     *
     * @param string|null $province 省名称
     *
     * @return self
     */
    public function setProvince($province)
    {
        $this->container['province'] = $province;

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


