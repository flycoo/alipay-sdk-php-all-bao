<?php
/**
 * AppVersionInfo
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
 * AppVersionInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AppVersionInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AppVersionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appVersion' => 'string',
        'baseAudit' => 'string',
        'bundleId' => 'string',
        'canRelease' => 'string',
        'createTime' => 'string',
        'promoteAudit' => 'string',
        'versionDescription' => 'string',
        'versionStatus' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appVersion' => null,
        'baseAudit' => null,
        'bundleId' => null,
        'canRelease' => null,
        'createTime' => null,
        'promoteAudit' => null,
        'versionDescription' => null,
        'versionStatus' => null
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
        'appVersion' => 'app_version',
        'baseAudit' => 'base_audit',
        'bundleId' => 'bundle_id',
        'canRelease' => 'can_release',
        'createTime' => 'create_time',
        'promoteAudit' => 'promote_audit',
        'versionDescription' => 'version_description',
        'versionStatus' => 'version_status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appVersion' => 'setAppVersion',
        'baseAudit' => 'setBaseAudit',
        'bundleId' => 'setBundleId',
        'canRelease' => 'setCanRelease',
        'createTime' => 'setCreateTime',
        'promoteAudit' => 'setPromoteAudit',
        'versionDescription' => 'setVersionDescription',
        'versionStatus' => 'setVersionStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appVersion' => 'getAppVersion',
        'baseAudit' => 'getBaseAudit',
        'bundleId' => 'getBundleId',
        'canRelease' => 'getCanRelease',
        'createTime' => 'getCreateTime',
        'promoteAudit' => 'getPromoteAudit',
        'versionDescription' => 'getVersionDescription',
        'versionStatus' => 'getVersionStatus'
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
        $this->container['appVersion'] = $data['appVersion'] ?? null;
        $this->container['baseAudit'] = $data['baseAudit'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['canRelease'] = $data['canRelease'] ?? null;
        $this->container['createTime'] = $data['createTime'] ?? null;
        $this->container['promoteAudit'] = $data['promoteAudit'] ?? null;
        $this->container['versionDescription'] = $data['versionDescription'] ?? null;
        $this->container['versionStatus'] = $data['versionStatus'] ?? null;
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
     * Gets appVersion
     *
     * @return string|null
     */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
     * Sets appVersion
     *
     * @param string|null $appVersion 版本号，一般为x.y.x格式，其中x、y、z都是数字
     *
     * @return self
     */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;

        return $this;
    }

    /**
     * Gets baseAudit
     *
     * @return string|null
     */
    public function getBaseAudit()
    {
        return $this->container['baseAudit'];
    }

    /**
     * Sets baseAudit
     *
     * @param string|null $baseAudit 准入审核结果 （提审时 audit_rule 传 BASE_PROMOTE 时有该字段）
     *
     * @return self
     */
    public function setBaseAudit($baseAudit)
    {
        $this->container['baseAudit'] = $baseAudit;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 小程序客户端类型，默认为支付宝端。常见支持如下客户端： com.alipay.alipaywallet：支付宝端； com.alibaba.android.rimet：DINGDING端； com.amap.app：高德端； com.alibaba.ailabs.genie.webapps：天猫精灵端； com.alipay.iot.xpaas：支付宝IoT端。 如需更多端投放，请联系业务BD。
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets canRelease
     *
     * @return string|null
     */
    public function getCanRelease()
    {
        return $this->container['canRelease'];
    }

    /**
     * Sets canRelease
     *
     * @param string|null $canRelease 是否可上架 true：可上架 false：不可上架 （version_status 为PROMOTE_AUDIT_REJECT有值） （提审时 audit_rule 传 BASE_PROMOTE 时有该字段）
     *
     * @return self
     */
    public function setCanRelease($canRelease)
    {
        $this->container['canRelease'] = $canRelease;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string|null
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string|null $createTime 版本创建时间，精确到秒
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets promoteAudit
     *
     * @return string|null
     */
    public function getPromoteAudit()
    {
        return $this->container['promoteAudit'];
    }

    /**
     * Sets promoteAudit
     *
     * @param string|null $promoteAudit 营销审核结果： PASS：通过 REJECT：驳回 （提审时 audit_rule 传 BASE_PROMOTE 时有该字段）
     *
     * @return self
     */
    public function setPromoteAudit($promoteAudit)
    {
        $this->container['promoteAudit'] = $promoteAudit;

        return $this;
    }

    /**
     * Gets versionDescription
     *
     * @return string|null
     */
    public function getVersionDescription()
    {
        return $this->container['versionDescription'];
    }

    /**
     * Sets versionDescription
     *
     * @param string|null $versionDescription 小程序版本描述，介绍此版本的主要变更和功能，5-500个字符。
     *
     * @return self
     */
    public function setVersionDescription($versionDescription)
    {
        $this->container['versionDescription'] = $versionDescription;

        return $this;
    }

    /**
     * Gets versionStatus
     *
     * @return string|null
     */
    public function getVersionStatus()
    {
        return $this->container['versionStatus'];
    }

    /**
     * Sets versionStatus
     *
     * @param string|null $versionStatus 版本状态，可选值为：INIT: 开发中, AUDITING: 审核中, AUDIT_REJECT: 审核驳回, WAIT_RELEASE: 待上架, BASE_AUDIT_PASS: 准入不可营销, GRAY: 灰度中, RELEASE: 已上架, OFFLINE: 已下架, AUDIT_OFFLINE: 被强制下架;
     *
     * @return self
     */
    public function setVersionStatus($versionStatus)
    {
        $this->container['versionStatus'] = $versionStatus;

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


