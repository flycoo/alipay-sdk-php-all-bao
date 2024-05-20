<?php
/**
 * CloudResumeCertificateInfo
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
 * CloudResumeCertificateInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CloudResumeCertificateInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CloudResumeCertificateInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'certificateCertLevel' => 'string',
        'certificateName' => 'string',
        'certificateSendCardAddress' => 'string',
        'certificateVerifyStatus' => 'string',
        'inValidityPeriod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'certificateCertLevel' => null,
        'certificateName' => null,
        'certificateSendCardAddress' => null,
        'certificateVerifyStatus' => null,
        'inValidityPeriod' => null
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
        'certificateCertLevel' => 'certificate_cert_level',
        'certificateName' => 'certificate_name',
        'certificateSendCardAddress' => 'certificate_send_card_address',
        'certificateVerifyStatus' => 'certificate_verify_status',
        'inValidityPeriod' => 'in_validity_period'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'certificateCertLevel' => 'setCertificateCertLevel',
        'certificateName' => 'setCertificateName',
        'certificateSendCardAddress' => 'setCertificateSendCardAddress',
        'certificateVerifyStatus' => 'setCertificateVerifyStatus',
        'inValidityPeriod' => 'setInValidityPeriod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'certificateCertLevel' => 'getCertificateCertLevel',
        'certificateName' => 'getCertificateName',
        'certificateSendCardAddress' => 'getCertificateSendCardAddress',
        'certificateVerifyStatus' => 'getCertificateVerifyStatus',
        'inValidityPeriod' => 'getInValidityPeriod'
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
        $this->container['certificateCertLevel'] = $data['certificateCertLevel'] ?? null;
        $this->container['certificateName'] = $data['certificateName'] ?? null;
        $this->container['certificateSendCardAddress'] = $data['certificateSendCardAddress'] ?? null;
        $this->container['certificateVerifyStatus'] = $data['certificateVerifyStatus'] ?? null;
        $this->container['inValidityPeriod'] = $data['inValidityPeriod'] ?? null;
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
     * Gets certificateCertLevel
     *
     * @return string|null
     */
    public function getCertificateCertLevel()
    {
        return $this->container['certificateCertLevel'];
    }

    /**
     * Sets certificateCertLevel
     *
     * @param string|null $certificateCertLevel 证书等级
     *
     * @return self
     */
    public function setCertificateCertLevel($certificateCertLevel)
    {
        $this->container['certificateCertLevel'] = $certificateCertLevel;

        return $this;
    }

    /**
     * Gets certificateName
     *
     * @return string|null
     */
    public function getCertificateName()
    {
        return $this->container['certificateName'];
    }

    /**
     * Sets certificateName
     *
     * @param string|null $certificateName 证书名称
     *
     * @return self
     */
    public function setCertificateName($certificateName)
    {
        $this->container['certificateName'] = $certificateName;

        return $this;
    }

    /**
     * Gets certificateSendCardAddress
     *
     * @return string|null
     */
    public function getCertificateSendCardAddress()
    {
        return $this->container['certificateSendCardAddress'];
    }

    /**
     * Sets certificateSendCardAddress
     *
     * @param string|null $certificateSendCardAddress 发证机构
     *
     * @return self
     */
    public function setCertificateSendCardAddress($certificateSendCardAddress)
    {
        $this->container['certificateSendCardAddress'] = $certificateSendCardAddress;

        return $this;
    }

    /**
     * Gets certificateVerifyStatus
     *
     * @return string|null
     */
    public function getCertificateVerifyStatus()
    {
        return $this->container['certificateVerifyStatus'];
    }

    /**
     * Sets certificateVerifyStatus
     *
     * @param string|null $certificateVerifyStatus UNPROMISED=未承诺 PROMISED=已承诺 VERFIED=已验真 UNVERIFIED=验证未通过
     *
     * @return self
     */
    public function setCertificateVerifyStatus($certificateVerifyStatus)
    {
        $this->container['certificateVerifyStatus'] = $certificateVerifyStatus;

        return $this;
    }

    /**
     * Gets inValidityPeriod
     *
     * @return string|null
     */
    public function getInValidityPeriod()
    {
        return $this->container['inValidityPeriod'];
    }

    /**
     * Sets inValidityPeriod
     *
     * @param string|null $inValidityPeriod VALID=有效 INVALID=失效 UNKNOWN=未知
     *
     * @return self
     */
    public function setInValidityPeriod($inValidityPeriod)
    {
        $this->container['inValidityPeriod'] = $inValidityPeriod;

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


