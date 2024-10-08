<?php
/**
 * AlipayEcoMycarParkingConfigSetModel
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
 * AlipayEcoMycarParkingConfigSetModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoMycarParkingConfigSetModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoMycarParkingConfigSetModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountNo' => 'string',
        'interfaceInfoList' => '\Alipay\OpenAPISDK\Model\InterfaceInfoList[]',
        'merchantLogo' => 'string',
        'merchantName' => 'string',
        'merchantServicePhone' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountNo' => null,
        'interfaceInfoList' => null,
        'merchantLogo' => null,
        'merchantName' => null,
        'merchantServicePhone' => null
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
        'accountNo' => 'account_no',
        'interfaceInfoList' => 'interface_info_list',
        'merchantLogo' => 'merchant_logo',
        'merchantName' => 'merchant_name',
        'merchantServicePhone' => 'merchant_service_phone'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountNo' => 'setAccountNo',
        'interfaceInfoList' => 'setInterfaceInfoList',
        'merchantLogo' => 'setMerchantLogo',
        'merchantName' => 'setMerchantName',
        'merchantServicePhone' => 'setMerchantServicePhone'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountNo' => 'getAccountNo',
        'interfaceInfoList' => 'getInterfaceInfoList',
        'merchantLogo' => 'getMerchantLogo',
        'merchantName' => 'getMerchantName',
        'merchantServicePhone' => 'getMerchantServicePhone'
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
        $this->container['accountNo'] = $data['accountNo'] ?? null;
        $this->container['interfaceInfoList'] = $data['interfaceInfoList'] ?? null;
        $this->container['merchantLogo'] = $data['merchantLogo'] ?? null;
        $this->container['merchantName'] = $data['merchantName'] ?? null;
        $this->container['merchantServicePhone'] = $data['merchantServicePhone'] ?? null;
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
     * Gets accountNo
     *
     * @return string|null
     */
    public function getAccountNo()
    {
        return $this->container['accountNo'];
    }

    /**
     * Sets accountNo
     *
     * @param string|null $accountNo 签约支付宝账号
     *
     * @return self
     */
    public function setAccountNo($accountNo)
    {
        $this->container['accountNo'] = $accountNo;

        return $this;
    }

    /**
     * Gets interfaceInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\InterfaceInfoList[]|null
     */
    public function getInterfaceInfoList()
    {
        return $this->container['interfaceInfoList'];
    }

    /**
     * Sets interfaceInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\InterfaceInfoList[]|null $interfaceInfoList 接口信息列表，停车业务需要配置的接口列表，该值为JSON数据格式的LIST对象，现阶段只需要配置一个页面接口即可 。每次请将所有的接口配置信息都传入，未传的接口信息将会被置空。
     *
     * @return self
     */
    public function setInterfaceInfoList($interfaceInfoList)
    {
        $this->container['interfaceInfoList'] = $interfaceInfoList;

        return $this;
    }

    /**
     * Gets merchantLogo
     *
     * @return string|null
     */
    public function getMerchantLogo()
    {
        return $this->container['merchantLogo'];
    }

    /**
     * Sets merchantLogo
     *
     * @param string|null $merchantLogo 商户在停车平台首页露出的LOGO。 注意： *该图片为PNG格式，内容为BASE64的字符串，建议图片尺寸27px*27px，大小不要超过60K。 *若为空则停车平台首页将不露出商户LOGO。
     *
     * @return self
     */
    public function setMerchantLogo($merchantLogo)
    {
        $this->container['merchantLogo'] = $merchantLogo;

        return $this;
    }

    /**
     * Gets merchantName
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchantName'];
    }

    /**
     * Sets merchantName
     *
     * @param string|null $merchantName 商户简称，由开发者提供
     *
     * @return self
     */
    public function setMerchantName($merchantName)
    {
        $this->container['merchantName'] = $merchantName;

        return $this;
    }

    /**
     * Gets merchantServicePhone
     *
     * @return string|null
     */
    public function getMerchantServicePhone()
    {
        return $this->container['merchantServicePhone'];
    }

    /**
     * Sets merchantServicePhone
     *
     * @param string|null $merchantServicePhone 商户客服电话
     *
     * @return self
     */
    public function setMerchantServicePhone($merchantServicePhone)
    {
        $this->container['merchantServicePhone'] = $merchantServicePhone;

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


