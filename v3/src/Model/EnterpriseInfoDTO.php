<?php
/**
 * EnterpriseInfoDTO
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
 * EnterpriseInfoDTO Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EnterpriseInfoDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EnterpriseInfoDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'accountId' => 'string',
        'activate' => 'string',
        'authLevel' => 'string',
        'authStatus' => 'string',
        'authTime' => 'string',
        'enterpriseAlias' => 'string',
        'enterpriseCode' => 'string',
        'enterpriseEmail' => 'string',
        'enterpriseId' => 'string',
        'enterpriseName' => 'string',
        'gmtCreate' => 'string',
        'gmtModified' => 'string',
        'iotGroupId' => 'string',
        'iotLogicGroupId' => 'string',
        'platformCode' => 'string',
        'platformOutId' => 'string',
        'signStatus' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'accountId' => null,
        'activate' => null,
        'authLevel' => null,
        'authStatus' => null,
        'authTime' => null,
        'enterpriseAlias' => null,
        'enterpriseCode' => null,
        'enterpriseEmail' => null,
        'enterpriseId' => null,
        'enterpriseName' => null,
        'gmtCreate' => null,
        'gmtModified' => null,
        'iotGroupId' => null,
        'iotLogicGroupId' => null,
        'platformCode' => null,
        'platformOutId' => null,
        'signStatus' => null,
        'status' => null
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
        'accountId' => 'account_id',
        'activate' => 'activate',
        'authLevel' => 'auth_level',
        'authStatus' => 'auth_status',
        'authTime' => 'auth_time',
        'enterpriseAlias' => 'enterprise_alias',
        'enterpriseCode' => 'enterprise_code',
        'enterpriseEmail' => 'enterprise_email',
        'enterpriseId' => 'enterprise_id',
        'enterpriseName' => 'enterprise_name',
        'gmtCreate' => 'gmt_create',
        'gmtModified' => 'gmt_modified',
        'iotGroupId' => 'iot_group_id',
        'iotLogicGroupId' => 'iot_logic_group_id',
        'platformCode' => 'platform_code',
        'platformOutId' => 'platform_out_id',
        'signStatus' => 'sign_status',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountId' => 'setAccountId',
        'activate' => 'setActivate',
        'authLevel' => 'setAuthLevel',
        'authStatus' => 'setAuthStatus',
        'authTime' => 'setAuthTime',
        'enterpriseAlias' => 'setEnterpriseAlias',
        'enterpriseCode' => 'setEnterpriseCode',
        'enterpriseEmail' => 'setEnterpriseEmail',
        'enterpriseId' => 'setEnterpriseId',
        'enterpriseName' => 'setEnterpriseName',
        'gmtCreate' => 'setGmtCreate',
        'gmtModified' => 'setGmtModified',
        'iotGroupId' => 'setIotGroupId',
        'iotLogicGroupId' => 'setIotLogicGroupId',
        'platformCode' => 'setPlatformCode',
        'platformOutId' => 'setPlatformOutId',
        'signStatus' => 'setSignStatus',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountId' => 'getAccountId',
        'activate' => 'getActivate',
        'authLevel' => 'getAuthLevel',
        'authStatus' => 'getAuthStatus',
        'authTime' => 'getAuthTime',
        'enterpriseAlias' => 'getEnterpriseAlias',
        'enterpriseCode' => 'getEnterpriseCode',
        'enterpriseEmail' => 'getEnterpriseEmail',
        'enterpriseId' => 'getEnterpriseId',
        'enterpriseName' => 'getEnterpriseName',
        'gmtCreate' => 'getGmtCreate',
        'gmtModified' => 'getGmtModified',
        'iotGroupId' => 'getIotGroupId',
        'iotLogicGroupId' => 'getIotLogicGroupId',
        'platformCode' => 'getPlatformCode',
        'platformOutId' => 'getPlatformOutId',
        'signStatus' => 'getSignStatus',
        'status' => 'getStatus'
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
        $this->container['accountId'] = $data['accountId'] ?? null;
        $this->container['activate'] = $data['activate'] ?? null;
        $this->container['authLevel'] = $data['authLevel'] ?? null;
        $this->container['authStatus'] = $data['authStatus'] ?? null;
        $this->container['authTime'] = $data['authTime'] ?? null;
        $this->container['enterpriseAlias'] = $data['enterpriseAlias'] ?? null;
        $this->container['enterpriseCode'] = $data['enterpriseCode'] ?? null;
        $this->container['enterpriseEmail'] = $data['enterpriseEmail'] ?? null;
        $this->container['enterpriseId'] = $data['enterpriseId'] ?? null;
        $this->container['enterpriseName'] = $data['enterpriseName'] ?? null;
        $this->container['gmtCreate'] = $data['gmtCreate'] ?? null;
        $this->container['gmtModified'] = $data['gmtModified'] ?? null;
        $this->container['iotGroupId'] = $data['iotGroupId'] ?? null;
        $this->container['iotLogicGroupId'] = $data['iotLogicGroupId'] ?? null;
        $this->container['platformCode'] = $data['platformCode'] ?? null;
        $this->container['platformOutId'] = $data['platformOutId'] ?? null;
        $this->container['signStatus'] = $data['signStatus'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * Gets accountId
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param string|null $accountId 共同账户id
     *
     * @return self
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets activate
     *
     * @return string|null
     */
    public function getActivate()
    {
        return $this->container['activate'];
    }

    /**
     * Sets activate
     *
     * @param string|null $activate 因公签约状态
     *
     * @return self
     */
    public function setActivate($activate)
    {
        $this->container['activate'] = $activate;

        return $this;
    }

    /**
     * Gets authLevel
     *
     * @return string|null
     */
    public function getAuthLevel()
    {
        return $this->container['authLevel'];
    }

    /**
     * Sets authLevel
     *
     * @param string|null $authLevel 企业认证等级
     *
     * @return self
     */
    public function setAuthLevel($authLevel)
    {
        $this->container['authLevel'] = $authLevel;

        return $this;
    }

    /**
     * Gets authStatus
     *
     * @return string|null
     */
    public function getAuthStatus()
    {
        return $this->container['authStatus'];
    }

    /**
     * Sets authStatus
     *
     * @param string|null $authStatus 认证状态
     *
     * @return self
     */
    public function setAuthStatus($authStatus)
    {
        $this->container['authStatus'] = $authStatus;

        return $this;
    }

    /**
     * Gets authTime
     *
     * @return string|null
     */
    public function getAuthTime()
    {
        return $this->container['authTime'];
    }

    /**
     * Sets authTime
     *
     * @param string|null $authTime 认证时间
     *
     * @return self
     */
    public function setAuthTime($authTime)
    {
        $this->container['authTime'] = $authTime;

        return $this;
    }

    /**
     * Gets enterpriseAlias
     *
     * @return string|null
     */
    public function getEnterpriseAlias()
    {
        return $this->container['enterpriseAlias'];
    }

    /**
     * Sets enterpriseAlias
     *
     * @param string|null $enterpriseAlias 企业简称
     *
     * @return self
     */
    public function setEnterpriseAlias($enterpriseAlias)
    {
        $this->container['enterpriseAlias'] = $enterpriseAlias;

        return $this;
    }

    /**
     * Gets enterpriseCode
     *
     * @return string|null
     */
    public function getEnterpriseCode()
    {
        return $this->container['enterpriseCode'];
    }

    /**
     * Sets enterpriseCode
     *
     * @param string|null $enterpriseCode 统一社会信用码
     *
     * @return self
     */
    public function setEnterpriseCode($enterpriseCode)
    {
        $this->container['enterpriseCode'] = $enterpriseCode;

        return $this;
    }

    /**
     * Gets enterpriseEmail
     *
     * @return string|null
     */
    public function getEnterpriseEmail()
    {
        return $this->container['enterpriseEmail'];
    }

    /**
     * Sets enterpriseEmail
     *
     * @param string|null $enterpriseEmail 企业邮箱
     *
     * @return self
     */
    public function setEnterpriseEmail($enterpriseEmail)
    {
        $this->container['enterpriseEmail'] = $enterpriseEmail;

        return $this;
    }

    /**
     * Gets enterpriseId
     *
     * @return string|null
     */
    public function getEnterpriseId()
    {
        return $this->container['enterpriseId'];
    }

    /**
     * Sets enterpriseId
     *
     * @param string|null $enterpriseId 企业id
     *
     * @return self
     */
    public function setEnterpriseId($enterpriseId)
    {
        $this->container['enterpriseId'] = $enterpriseId;

        return $this;
    }

    /**
     * Gets enterpriseName
     *
     * @return string|null
     */
    public function getEnterpriseName()
    {
        return $this->container['enterpriseName'];
    }

    /**
     * Sets enterpriseName
     *
     * @param string|null $enterpriseName 企业名称
     *
     * @return self
     */
    public function setEnterpriseName($enterpriseName)
    {
        $this->container['enterpriseName'] = $enterpriseName;

        return $this;
    }

    /**
     * Gets gmtCreate
     *
     * @return string|null
     */
    public function getGmtCreate()
    {
        return $this->container['gmtCreate'];
    }

    /**
     * Sets gmtCreate
     *
     * @param string|null $gmtCreate 创建时间
     *
     * @return self
     */
    public function setGmtCreate($gmtCreate)
    {
        $this->container['gmtCreate'] = $gmtCreate;

        return $this;
    }

    /**
     * Gets gmtModified
     *
     * @return string|null
     */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
     * Sets gmtModified
     *
     * @param string|null $gmtModified 更新时间
     *
     * @return self
     */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;

        return $this;
    }

    /**
     * Gets iotGroupId
     *
     * @return string|null
     */
    public function getIotGroupId()
    {
        return $this->container['iotGroupId'];
    }

    /**
     * Sets iotGroupId
     *
     * @param string|null $iotGroupId 封闭场景（如班车）的人脸库id
     *
     * @return self
     */
    public function setIotGroupId($iotGroupId)
    {
        $this->container['iotGroupId'] = $iotGroupId;

        return $this;
    }

    /**
     * Gets iotLogicGroupId
     *
     * @return string|null
     */
    public function getIotLogicGroupId()
    {
        return $this->container['iotLogicGroupId'];
    }

    /**
     * Sets iotLogicGroupId
     *
     * @param string|null $iotLogicGroupId 开放场景（如团餐）的人脸库id
     *
     * @return self
     */
    public function setIotLogicGroupId($iotLogicGroupId)
    {
        $this->container['iotLogicGroupId'] = $iotLogicGroupId;

        return $this;
    }

    /**
     * Gets platformCode
     *
     * @return string|null
     */
    public function getPlatformCode()
    {
        return $this->container['platformCode'];
    }

    /**
     * Sets platformCode
     *
     * @param string|null $platformCode 外部平台code
     *
     * @return self
     */
    public function setPlatformCode($platformCode)
    {
        $this->container['platformCode'] = $platformCode;

        return $this;
    }

    /**
     * Gets platformOutId
     *
     * @return string|null
     */
    public function getPlatformOutId()
    {
        return $this->container['platformOutId'];
    }

    /**
     * Sets platformOutId
     *
     * @param string|null $platformOutId 外部平台id
     *
     * @return self
     */
    public function setPlatformOutId($platformOutId)
    {
        $this->container['platformOutId'] = $platformOutId;

        return $this;
    }

    /**
     * Gets signStatus
     *
     * @return string|null
     */
    public function getSignStatus()
    {
        return $this->container['signStatus'];
    }

    /**
     * Sets signStatus
     *
     * @param string|null $signStatus 企业码服务协议签约状态
     *
     * @return self
     */
    public function setSignStatus($signStatus)
    {
        $this->container['signStatus'] = $signStatus;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status 企业当前状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


