<?php
/**
 * InvoicePDFSynModel
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
 * InvoicePDFSynModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class InvoicePDFSynModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InvoicePDFSynModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applyId' => 'string',
        'extendFields' => 'string',
        'fileBase' => 'string',
        'fileDownloadType' => 'string',
        'fileDownloadUrl' => 'string',
        'loginId' => 'string',
        'openId' => 'string',
        'outInvoiceId' => 'string',
        'userId' => 'string',
        'zip' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'applyId' => null,
        'extendFields' => null,
        'fileBase' => null,
        'fileDownloadType' => null,
        'fileDownloadUrl' => null,
        'loginId' => null,
        'openId' => null,
        'outInvoiceId' => null,
        'userId' => null,
        'zip' => null
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
        'applyId' => 'apply_id',
        'extendFields' => 'extend_fields',
        'fileBase' => 'file_base',
        'fileDownloadType' => 'file_download_type',
        'fileDownloadUrl' => 'file_download_url',
        'loginId' => 'login_id',
        'openId' => 'open_id',
        'outInvoiceId' => 'out_invoice_id',
        'userId' => 'user_id',
        'zip' => 'zip'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applyId' => 'setApplyId',
        'extendFields' => 'setExtendFields',
        'fileBase' => 'setFileBase',
        'fileDownloadType' => 'setFileDownloadType',
        'fileDownloadUrl' => 'setFileDownloadUrl',
        'loginId' => 'setLoginId',
        'openId' => 'setOpenId',
        'outInvoiceId' => 'setOutInvoiceId',
        'userId' => 'setUserId',
        'zip' => 'setZip'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applyId' => 'getApplyId',
        'extendFields' => 'getExtendFields',
        'fileBase' => 'getFileBase',
        'fileDownloadType' => 'getFileDownloadType',
        'fileDownloadUrl' => 'getFileDownloadUrl',
        'loginId' => 'getLoginId',
        'openId' => 'getOpenId',
        'outInvoiceId' => 'getOutInvoiceId',
        'userId' => 'getUserId',
        'zip' => 'getZip'
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
        $this->container['applyId'] = $data['applyId'] ?? null;
        $this->container['extendFields'] = $data['extendFields'] ?? null;
        $this->container['fileBase'] = $data['fileBase'] ?? null;
        $this->container['fileDownloadType'] = $data['fileDownloadType'] ?? null;
        $this->container['fileDownloadUrl'] = $data['fileDownloadUrl'] ?? null;
        $this->container['loginId'] = $data['loginId'] ?? null;
        $this->container['openId'] = $data['openId'] ?? null;
        $this->container['outInvoiceId'] = $data['outInvoiceId'] ?? null;
        $this->container['userId'] = $data['userId'] ?? null;
        $this->container['zip'] = $data['zip'] ?? null;
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
     * Gets applyId
     *
     * @return string|null
     */
    public function getApplyId()
    {
        return $this->container['applyId'];
    }

    /**
     * Sets applyId
     *
     * @param string|null $applyId 支付宝开票申请id
     *
     * @return self
     */
    public function setApplyId($applyId)
    {
        $this->container['applyId'] = $applyId;

        return $this;
    }

    /**
     * Gets extendFields
     *
     * @return string|null
     */
    public function getExtendFields()
    {
        return $this->container['extendFields'];
    }

    /**
     * Sets extendFields
     *
     * @param string|null $extendFields 预留的扩展字段，格式如：key1=value1\\nkey2=value2\\nkey3=value3，字段之间以\\n(换行符)分隔。
     *
     * @return self
     */
    public function setExtendFields($extendFields)
    {
        $this->container['extendFields'] = $extendFields;

        return $this;
    }

    /**
     * Gets fileBase
     *
     * @return string|null
     */
    public function getFileBase()
    {
        return $this->container['fileBase'];
    }

    /**
     * Sets fileBase
     *
     * @param string|null $fileBase base64化的字符串，与file_download_url不可同时为空。
     *
     * @return self
     */
    public function setFileBase($fileBase)
    {
        $this->container['fileBase'] = $fileBase;

        return $this;
    }

    /**
     * Gets fileDownloadType
     *
     * @return string|null
     */
    public function getFileDownloadType()
    {
        return $this->container['fileDownloadType'];
    }

    /**
     * Sets fileDownloadType
     *
     * @param string|null $fileDownloadType 文件类型，必填。 PDF类型文件填写PDF， OFD类型文件填写ofd， JPG类型文件填写JPG(JPG文件请先询问对接人当前是否支持)
     *
     * @return self
     */
    public function setFileDownloadType($fileDownloadType)
    {
        $this->container['fileDownloadType'] = $fileDownloadType;

        return $this;
    }

    /**
     * Gets fileDownloadUrl
     *
     * @return string|null
     */
    public function getFileDownloadUrl()
    {
        return $this->container['fileDownloadUrl'];
    }

    /**
     * Sets fileDownloadUrl
     *
     * @param string|null $fileDownloadUrl 发票文件下载地址，和file_base不可同时为空。
     *
     * @return self
     */
    public function setFileDownloadUrl($fileDownloadUrl)
    {
        $this->container['fileDownloadUrl'] = $fileDownloadUrl;

        return $this;
    }

    /**
     * Gets loginId
     *
     * @return string|null
     */
    public function getLoginId()
    {
        return $this->container['loginId'];
    }

    /**
     * Sets loginId
     *
     * @param string|null $loginId 支付宝登录账号
     *
     * @return self
     */
    public function setLoginId($loginId)
    {
        $this->container['loginId'] = $loginId;

        return $this;
    }

    /**
     * Gets openId
     *
     * @return string|null
     */
    public function getOpenId()
    {
        return $this->container['openId'];
    }

    /**
     * Sets openId
     *
     * @param string|null $openId 支付宝用户id，当apply_id为空时，open_id必填
     *
     * @return self
     */
    public function setOpenId($openId)
    {
        $this->container['openId'] = $openId;

        return $this;
    }

    /**
     * Gets outInvoiceId
     *
     * @return string|null
     */
    public function getOutInvoiceId()
    {
        return $this->container['outInvoiceId'];
    }

    /**
     * Sets outInvoiceId
     *
     * @param string|null $outInvoiceId 外部ISV的唯一发票标识
     *
     * @return self
     */
    public function setOutInvoiceId($outInvoiceId)
    {
        $this->container['outInvoiceId'] = $outInvoiceId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return string|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param string|null $userId 支付宝用户userId
     *
     * @return self
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip 压缩方式
     *
     * @return self
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

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


