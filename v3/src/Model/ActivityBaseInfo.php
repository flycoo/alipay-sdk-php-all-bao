<?php
/**
 * ActivityBaseInfo
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
 * ActivityBaseInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ActivityBaseInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivityBaseInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activityId' => 'string',
        'activityName' => 'string',
        'activityOperationStatus' => 'string',
        'activityProductType' => 'string',
        'activityStatus' => 'string',
        'belongMerchantInfo' => '\Alipay\OpenAPISDK\Model\BelongMerchantInfo',
        'codeMode' => 'string',
        'outActivityId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'activityId' => null,
        'activityName' => null,
        'activityOperationStatus' => null,
        'activityProductType' => null,
        'activityStatus' => null,
        'belongMerchantInfo' => null,
        'codeMode' => null,
        'outActivityId' => null
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
        'activityId' => 'activity_id',
        'activityName' => 'activity_name',
        'activityOperationStatus' => 'activity_operation_status',
        'activityProductType' => 'activity_product_type',
        'activityStatus' => 'activity_status',
        'belongMerchantInfo' => 'belong_merchant_info',
        'codeMode' => 'code_mode',
        'outActivityId' => 'out_activity_id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activityId' => 'setActivityId',
        'activityName' => 'setActivityName',
        'activityOperationStatus' => 'setActivityOperationStatus',
        'activityProductType' => 'setActivityProductType',
        'activityStatus' => 'setActivityStatus',
        'belongMerchantInfo' => 'setBelongMerchantInfo',
        'codeMode' => 'setCodeMode',
        'outActivityId' => 'setOutActivityId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activityId' => 'getActivityId',
        'activityName' => 'getActivityName',
        'activityOperationStatus' => 'getActivityOperationStatus',
        'activityProductType' => 'getActivityProductType',
        'activityStatus' => 'getActivityStatus',
        'belongMerchantInfo' => 'getBelongMerchantInfo',
        'codeMode' => 'getCodeMode',
        'outActivityId' => 'getOutActivityId'
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
        $this->container['activityId'] = $data['activityId'] ?? null;
        $this->container['activityName'] = $data['activityName'] ?? null;
        $this->container['activityOperationStatus'] = $data['activityOperationStatus'] ?? null;
        $this->container['activityProductType'] = $data['activityProductType'] ?? null;
        $this->container['activityStatus'] = $data['activityStatus'] ?? null;
        $this->container['belongMerchantInfo'] = $data['belongMerchantInfo'] ?? null;
        $this->container['codeMode'] = $data['codeMode'] ?? null;
        $this->container['outActivityId'] = $data['outActivityId'] ?? null;
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
     * Gets activityId
     *
     * @return string|null
     */
    public function getActivityId()
    {
        return $this->container['activityId'];
    }

    /**
     * Sets activityId
     *
     * @param string|null $activityId 活动id
     *
     * @return self
     */
    public function setActivityId($activityId)
    {
        $this->container['activityId'] = $activityId;

        return $this;
    }

    /**
     * Gets activityName
     *
     * @return string|null
     */
    public function getActivityName()
    {
        return $this->container['activityName'];
    }

    /**
     * Sets activityName
     *
     * @param string|null $activityName 活动名称。
     *
     * @return self
     */
    public function setActivityName($activityName)
    {
        $this->container['activityName'] = $activityName;

        return $this;
    }

    /**
     * Gets activityOperationStatus
     *
     * @return string|null
     */
    public function getActivityOperationStatus()
    {
        return $this->container['activityOperationStatus'];
    }

    /**
     * Sets activityOperationStatus
     *
     * @param string|null $activityOperationStatus 活动操作状态。
     *
     * @return self
     */
    public function setActivityOperationStatus($activityOperationStatus)
    {
        $this->container['activityOperationStatus'] = $activityOperationStatus;

        return $this;
    }

    /**
     * Gets activityProductType
     *
     * @return string|null
     */
    public function getActivityProductType()
    {
        return $this->container['activityProductType'];
    }

    /**
     * Sets activityProductType
     *
     * @param string|null $activityProductType 券活动产品类型
     *
     * @return self
     */
    public function setActivityProductType($activityProductType)
    {
        $this->container['activityProductType'] = $activityProductType;

        return $this;
    }

    /**
     * Gets activityStatus
     *
     * @return string|null
     */
    public function getActivityStatus()
    {
        return $this->container['activityStatus'];
    }

    /**
     * Sets activityStatus
     *
     * @param string|null $activityStatus 活动状态 。 ACTIVE:活动已激活，表示活动已经生效，等到活动开始(publish_start_time)之后用户就可以参与活动。  PAUSE:活动已暂停，表示商户临时暂停该活动，该状态下用户不能参与活动。
     *
     * @return self
     */
    public function setActivityStatus($activityStatus)
    {
        $this->container['activityStatus'] = $activityStatus;

        return $this;
    }

    /**
     * Gets belongMerchantInfo
     *
     * @return \Alipay\OpenAPISDK\Model\BelongMerchantInfo|null
     */
    public function getBelongMerchantInfo()
    {
        return $this->container['belongMerchantInfo'];
    }

    /**
     * Sets belongMerchantInfo
     *
     * @param \Alipay\OpenAPISDK\Model\BelongMerchantInfo|null $belongMerchantInfo belongMerchantInfo
     *
     * @return self
     */
    public function setBelongMerchantInfo($belongMerchantInfo)
    {
        $this->container['belongMerchantInfo'] = $belongMerchantInfo;

        return $this;
    }

    /**
     * Gets codeMode
     *
     * @return string|null
     */
    public function getCodeMode()
    {
        return $this->container['codeMode'];
    }

    /**
     * Sets codeMode
     *
     * @param string|null $codeMode 码模式。   MERCHANT_UPLOAD：商户上传自定义code，发券时系统随机选取上传的券code发放  MERCHANT_API：发奖时指定券码发奖，此模式无须提前上传券码。
     *
     * @return self
     */
    public function setCodeMode($codeMode)
    {
        $this->container['codeMode'] = $codeMode;

        return $this;
    }

    /**
     * Gets outActivityId
     *
     * @return string|null
     */
    public function getOutActivityId()
    {
        return $this->container['outActivityId'];
    }

    /**
     * Sets outActivityId
     *
     * @param string|null $outActivityId 外部活动ID
     *
     * @return self
     */
    public function setOutActivityId($outActivityId)
    {
        $this->container['outActivityId'] = $outActivityId;

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


