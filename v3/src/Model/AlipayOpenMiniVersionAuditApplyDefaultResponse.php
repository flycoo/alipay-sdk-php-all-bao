<?php
/**
 * AlipayOpenMiniVersionAuditApplyDefaultResponse
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
 * AlipayOpenMiniVersionAuditApplyDefaultResponse Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniVersionAuditApplyDefaultResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_open_mini_version_audit_apply_default_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'code' => 'string',
        'links' => 'string',
        'message' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'code' => null,
        'links' => null,
        'message' => null
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
        'code' => 'code',
        'links' => 'links',
        'message' => 'message'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'links' => 'setLinks',
        'message' => 'setMessage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'links' => 'getLinks',
        'message' => 'getMessage'
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

    public const CODE_SYSTEM_ERROR = 'SYSTEM_ERROR';
    public const CODE_APP_NAME_IS_BLANK = 'APP_NAME_IS_BLANK';
    public const CODE_INVALID_MINI_APP_NAME_LENGTH = 'INVALID_MINI_APP_NAME_LENGTH';
    public const CODE_INVALID_MINI_APP_NAME = 'INVALID_MINI_APP_NAME';
    public const CODE_ENGLISH_NAME_IS_BLANK = 'ENGLISH_NAME_IS_BLANK';
    public const CODE_INVALID_MINI_APP_EN_NAME = 'INVALID_MINI_APP_EN_NAME';
    public const CODE_INVALID_MINI_APP_EN_NAME_LENGTH = 'INVALID_MINI_APP_EN_NAME_LENGTH';
    public const CODE_SLOGAN_IS_BLANK = 'SLOGAN_IS_BLANK';
    public const CODE_INVALID_MINI_APP_SLOGAN_LENGTH = 'INVALID_MINI_APP_SLOGAN_LENGTH';
    public const CODE_INVALID_MINI_APP_SLOGAN = 'INVALID_MINI_APP_SLOGAN';
    public const CODE_SERVICE_TEL_AND_MAIL_BOTH_BLANK = 'SERVICE_TEL_AND_MAIL_BOTH_BLANK';
    public const CODE_INVALID_MINI_APP_SERVICE_TEL = 'INVALID_MINI_APP_SERVICE_TEL';
    public const CODE_INVALID_MINI_APP_SERVICE_MAIL = 'INVALID_MINI_APP_SERVICE_MAIL';
    public const CODE_CATEGORY_IS_BLANK = 'CATEGORY_IS_BLANK';
    public const CODE_CATEGORY_NUM_IS_INVALID = 'CATEGORY_NUM_IS_INVALID';
    public const CODE_APP_DESC_IS_BLANK = 'APP_DESC_IS_BLANK';
    public const CODE_INVALID_MINI_APP_DESC_LENGTH = 'INVALID_MINI_APP_DESC_LENGTH';
    public const CODE_INVALID_MINI_APP_DESC = 'INVALID_MINI_APP_DESC';
    public const CODE_REGION_TYPE_IS_BLANK = 'REGION_TYPE_IS_BLANK';
    public const CODE_REGION_TYPE_IS_INVALID = 'REGION_TYPE_IS_INVALID';
    public const CODE_REGION_CODE_IS_BLANK = 'REGION_CODE_IS_BLANK';
    public const CODE_APP_VERSION_IS_BLANK = 'APP_VERSION_IS_BLANK';
    public const CODE_VERSION_DESC_IS_BLANK = 'VERSION_DESC_IS_BLANK';
    public const CODE_INVALID_VERSION_DESC_LENGTH = 'INVALID_VERSION_DESC_LENGTH';
    public const CODE_INVALID_MINI_APP_VERSION_DESC = 'INVALID_MINI_APP_VERSION_DESC';
    public const CODE_SCREEN_SHOTS_ARE_BLANK = 'SCREEN_SHOTS_ARE_BLANK';
    public const CODE_SCREEN_SHOT_NUM_IS_INVALID = 'SCREEN_SHOT_NUM_IS_INVALID';
    public const CODE_INVALID_MINI_APP_MEMO_LENGTH = 'INVALID_MINI_APP_MEMO_LENGTH';
    public const CODE_APPLICATION_TYPE_NOT_MINIAPP = 'APPLICATION_TYPE_NOT_MINIAPP';
    public const CODE_INVALID_MINI_APP_SAFE_DOMAIN = 'INVALID_MINI_APP_SAFE_DOMAIN';
    public const CODE_CAN_NOT_SUBMIT_WITH_ALI_CLOUD = 'CAN_NOT_SUBMIT_WITH_ALI_CLOUD';
    public const CODE_MINI_APP_NAME_DUPLICATE = 'MINI_APP_NAME_DUPLICATE';
    public const CODE_MINI_APP_EN_NAME_DUPLICATE = 'MINI_APP_EN_NAME_DUPLICATE';
    public const CODE_INVALID_CATEGORY = 'INVALID_CATEGORY';
    public const CODE_INVALID_REGION = 'INVALID_REGION';
    public const CODE_MINI_APP_NAME_SENSITIVE = 'MINI_APP_NAME_SENSITIVE';
    public const CODE_MINI_APP_EN_NAME_SENSITIVE = 'MINI_APP_EN_NAME_SENSITIVE';
    public const CODE_MINI_APP_SLOGAN_SENSITIVE = 'MINI_APP_SLOGAN_SENSITIVE';
    public const CODE_MINI_APP_MEMO_SENSITIVE = 'MINI_APP_MEMO_SENSITIVE';
    public const CODE_MINI_APP_DESC_SENSITIVE = 'MINI_APP_DESC_SENSITIVE';
    public const CODE_MINI_APP_SERVICE_MAIL_SENSITIVE = 'MINI_APP_SERVICE_MAIL_SENSITIVE';
    public const CODE_MINI_APP_VERSION_DESC_SENSITIVE = 'MINI_APP_VERSION_DESC_SENSITIVE';
    public const CODE_MINI_APP_PACKAGE_INFO_NOT_EXIST = 'MINI_APP_PACKAGE_INFO_NOT_EXIST';
    public const CODE_CAN_NOT_MODIFY_NAME_ONCE_ONLINE = 'CAN_NOT_MODIFY_NAME_ONCE_ONLINE';
    public const CODE_CAN_NOT_MODIFY_EN_ONCE_ONLINE = 'CAN_NOT_MODIFY_EN_ONCE_ONLINE';
    public const CODE_MODIFY_SLOGAN_EXCEED_COUNT = 'MODIFY_SLOGAN_EXCEED_COUNT';
    public const CODE_MODIFY_CATEGORY_ID_EXCEED_COUNT = 'MODIFY_CATEGORY_ID_EXCEED_COUNT';
    public const CODE_MODIFY_DESC_EXCEED_COUNT = 'MODIFY_DESC_EXCEED_COUNT';
    public const CODE_CAN_NOT_SUBMIT_WITH_AUDIT = 'CAN_NOT_SUBMIT_WITH_AUDIT';
    public const CODE_CAN_NOT_SUBMIT_WITHOUT_INIT = 'CAN_NOT_SUBMIT_WITHOUT_INIT';
    public const CODE_CAN_NOT_SUBMIT_WITHOUT_SCAN_PASS = 'CAN_NOT_SUBMIT_WITHOUT_SCAN_PASS';
    public const CODE_CAN_NOT_SUBMIT_WITH_AUDIT_GRAY = 'CAN_NOT_SUBMIT_WITH_AUDIT_GRAY';
    public const CODE_EXIST_LARGER_ONLINED_VERSION = 'EXIST_LARGER_ONLINED_VERSION';
    public const CODE_LICENSE_NO_IS_BLANK = 'LICENSE_NO_IS_BLANK';
    public const CODE_LICENSE_VALID_DATE_IS_BLANK = 'LICENSE_VALID_DATE_IS_BLANK';
    public const CODE_LICENSE_VALID_DATE_IS_INVALID = 'LICENSE_VALID_DATE_IS_INVALID';
    public const CODE_OUT_DOOR_PIC_IS_BLANK = 'OUT_DOOR_PIC_IS_BLANK';
    public const CODE_LICENSE_PICS_ARE_BLANK = 'LICENSE_PICS_ARE_BLANK';
    public const CODE_LICENSE_PIC_NUM_IS_INVALID = 'LICENSE_PIC_NUM_IS_INVALID';
    public const CODE_LICENSE_CHECK_FAIL = 'LICENSE_CHECK_FAIL';
    public const CODE_LOGO_HEIGHT_NOT_EQUAL_WIDTH = 'LOGO_HEIGHT_NOT_EQUAL_WIDTH';
    public const CODE_INVALID_SCREEN_SHOT_EXT = 'INVALID_SCREEN_SHOT_EXT';
    public const CODE_SCREEN_SHOT_EXCEED_MAX_SIZE = 'SCREEN_SHOT_EXCEED_MAX_SIZE';
    public const CODE_INVALID_PARAMETER = 'INVALID_PARAMETER';
    public const CODE_LOGO_EXCEED_MAX_SIZE = 'LOGO_EXCEED_MAX_SIZE';
    public const CODE_INVALID_LOGO_EXT = 'INVALID_LOGO_EXT';
    public const CODE_INVALID_PARAMS = 'INVALID_PARAMS';
    public const CODE_INVALID_LOGO = 'INVALID_LOGO';
    public const CODE_RISK_DECISION_CHECK_FAIL = 'RISK_DECISION_CHECK_FAIL';
    public const CODE_TINY_APP_AUDIT_NOT_PERMIT = 'TINY_APP_AUDIT_NOT_PERMIT';
    public const CODE_RISK_DECISION_HIT_BRAND = 'RISK_DECISION_HIT_BRAND';
    public const CODE_BRAND_TORT_NOT_END = 'BRAND_TORT_NOT_END';
    public const CODE_SPECIAL_LICENSE_PICS_ARE_BLANK = 'SPECIAL_LICENSE_PICS_ARE_BLANK';
    public const CODE_FILE_IS_BLANK = 'FILE_IS_BLANK';
    public const CODE_INVALID_FILE_EXT = 'INVALID_FILE_EXT';
    public const CODE_FILE_SIZE_EXCEED = 'FILE_SIZE_EXCEED';
    public const CODE_INVALID_SPECIAL_LICENSE_NUM = 'INVALID_SPECIAL_LICENSE_NUM';
    public const CODE_BUNDLE_ID_NOT_EXIST = 'BUNDLE_ID_NOT_EXIST';
    public const CODE_DEFAULT_LOGO = 'DEFAULT_LOGO';
    public const CODE_SUBMIT_REPEAT = 'SUBMIT_REPEAT';
    public const CODE_PRIVATE_NOT_ALLOW_CATEGORY = 'PRIVATE_NOT_ALLOW_CATEGORY';
    public const CODE_MINI_APP_INFO_AUDIT_CONTAINS = 'MINI_APP_INFO_AUDIT_CONTAINS';
    public const CODE_MINI_VERSION_NAME_DUPLICATE = 'MINI_VERSION_NAME_DUPLICATE';
    public const CODE_LOGO_SIZE_EXCEED = 'LOGO_SIZE_EXCEED';
    public const CODE_APP_INFO_NOT_EXIST = 'APP_INFO_NOT_EXIST';
    public const CODE_USER_NOT_EXIST = 'USER_NOT_EXIST';
    public const CODE_REGION_CODE_IS_INVALID = 'REGION_CODE_IS_INVALID';
    public const CODE_SERVICE_TEL_IS_BLANK = 'SERVICE_TEL_IS_BLANK';
    public const CODE_INVALID_MINI_APP_NAME_PREFIX = 'INVALID_MINI_APP_NAME_PREFIX';
    public const CODE_SYSTEM_LIMIT = 'SYSTEM_LIMIT';
    public const CODE_LOGO_IS_BLANK = 'LOGO_IS_BLANK';
    public const CODE_HAS_NO_MODIFY_CNT = 'HAS_NO_MODIFY_CNT';
    public const CODE_INVALID_TEST_PWD_LENGTH = 'INVALID_TEST_PWD_LENGTH';
    public const CODE_SUB_APPLICATION_TYPE_ERROR = 'SUB_APPLICATION_TYPE_ERROR';
    public const CODE_LICENSE_NAME_IS_BLANK = 'LICENSE_NAME_IS_BLANK';
    public const CODE_RISK_DECISION_HIT_BROAD = 'RISK_DECISION_HIT_BROAD';
    public const CODE_INVALID_TEST_ACCOUNT_LENGTH = 'INVALID_TEST_ACCOUNT_LENGTH';
    public const CODE_DEVELOPER_INFO_NOT_EXIST = 'DEVELOPER_INFO_NOT_EXIST';
    public const CODE_INVALIID_MEMO_TRADENO = 'INVALIID_MEMO_TRADENO';
    public const CODE_MEMO_TRADENO_CHECK_FAIL = 'MEMO_TRADENO_CHECK_FAIL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCodeAllowableValues()
    {
        return [
            self::CODE_SYSTEM_ERROR,
            self::CODE_APP_NAME_IS_BLANK,
            self::CODE_INVALID_MINI_APP_NAME_LENGTH,
            self::CODE_INVALID_MINI_APP_NAME,
            self::CODE_ENGLISH_NAME_IS_BLANK,
            self::CODE_INVALID_MINI_APP_EN_NAME,
            self::CODE_INVALID_MINI_APP_EN_NAME_LENGTH,
            self::CODE_SLOGAN_IS_BLANK,
            self::CODE_INVALID_MINI_APP_SLOGAN_LENGTH,
            self::CODE_INVALID_MINI_APP_SLOGAN,
            self::CODE_SERVICE_TEL_AND_MAIL_BOTH_BLANK,
            self::CODE_INVALID_MINI_APP_SERVICE_TEL,
            self::CODE_INVALID_MINI_APP_SERVICE_MAIL,
            self::CODE_CATEGORY_IS_BLANK,
            self::CODE_CATEGORY_NUM_IS_INVALID,
            self::CODE_APP_DESC_IS_BLANK,
            self::CODE_INVALID_MINI_APP_DESC_LENGTH,
            self::CODE_INVALID_MINI_APP_DESC,
            self::CODE_REGION_TYPE_IS_BLANK,
            self::CODE_REGION_TYPE_IS_INVALID,
            self::CODE_REGION_CODE_IS_BLANK,
            self::CODE_APP_VERSION_IS_BLANK,
            self::CODE_VERSION_DESC_IS_BLANK,
            self::CODE_INVALID_VERSION_DESC_LENGTH,
            self::CODE_INVALID_MINI_APP_VERSION_DESC,
            self::CODE_SCREEN_SHOTS_ARE_BLANK,
            self::CODE_SCREEN_SHOT_NUM_IS_INVALID,
            self::CODE_INVALID_MINI_APP_MEMO_LENGTH,
            self::CODE_APPLICATION_TYPE_NOT_MINIAPP,
            self::CODE_INVALID_MINI_APP_SAFE_DOMAIN,
            self::CODE_CAN_NOT_SUBMIT_WITH_ALI_CLOUD,
            self::CODE_MINI_APP_NAME_DUPLICATE,
            self::CODE_MINI_APP_EN_NAME_DUPLICATE,
            self::CODE_INVALID_CATEGORY,
            self::CODE_INVALID_REGION,
            self::CODE_MINI_APP_NAME_SENSITIVE,
            self::CODE_MINI_APP_EN_NAME_SENSITIVE,
            self::CODE_MINI_APP_SLOGAN_SENSITIVE,
            self::CODE_MINI_APP_MEMO_SENSITIVE,
            self::CODE_MINI_APP_DESC_SENSITIVE,
            self::CODE_MINI_APP_SERVICE_MAIL_SENSITIVE,
            self::CODE_MINI_APP_VERSION_DESC_SENSITIVE,
            self::CODE_MINI_APP_PACKAGE_INFO_NOT_EXIST,
            self::CODE_CAN_NOT_MODIFY_NAME_ONCE_ONLINE,
            self::CODE_CAN_NOT_MODIFY_EN_ONCE_ONLINE,
            self::CODE_MODIFY_SLOGAN_EXCEED_COUNT,
            self::CODE_MODIFY_CATEGORY_ID_EXCEED_COUNT,
            self::CODE_MODIFY_DESC_EXCEED_COUNT,
            self::CODE_CAN_NOT_SUBMIT_WITH_AUDIT,
            self::CODE_CAN_NOT_SUBMIT_WITHOUT_INIT,
            self::CODE_CAN_NOT_SUBMIT_WITHOUT_SCAN_PASS,
            self::CODE_CAN_NOT_SUBMIT_WITH_AUDIT_GRAY,
            self::CODE_EXIST_LARGER_ONLINED_VERSION,
            self::CODE_LICENSE_NO_IS_BLANK,
            self::CODE_LICENSE_VALID_DATE_IS_BLANK,
            self::CODE_LICENSE_VALID_DATE_IS_INVALID,
            self::CODE_OUT_DOOR_PIC_IS_BLANK,
            self::CODE_LICENSE_PICS_ARE_BLANK,
            self::CODE_LICENSE_PIC_NUM_IS_INVALID,
            self::CODE_LICENSE_CHECK_FAIL,
            self::CODE_LOGO_HEIGHT_NOT_EQUAL_WIDTH,
            self::CODE_INVALID_SCREEN_SHOT_EXT,
            self::CODE_SCREEN_SHOT_EXCEED_MAX_SIZE,
            self::CODE_INVALID_PARAMETER,
            self::CODE_LOGO_EXCEED_MAX_SIZE,
            self::CODE_INVALID_LOGO_EXT,
            self::CODE_INVALID_PARAMS,
            self::CODE_INVALID_LOGO,
            self::CODE_RISK_DECISION_CHECK_FAIL,
            self::CODE_TINY_APP_AUDIT_NOT_PERMIT,
            self::CODE_RISK_DECISION_HIT_BRAND,
            self::CODE_BRAND_TORT_NOT_END,
            self::CODE_SPECIAL_LICENSE_PICS_ARE_BLANK,
            self::CODE_FILE_IS_BLANK,
            self::CODE_INVALID_FILE_EXT,
            self::CODE_FILE_SIZE_EXCEED,
            self::CODE_INVALID_SPECIAL_LICENSE_NUM,
            self::CODE_BUNDLE_ID_NOT_EXIST,
            self::CODE_DEFAULT_LOGO,
            self::CODE_SUBMIT_REPEAT,
            self::CODE_PRIVATE_NOT_ALLOW_CATEGORY,
            self::CODE_MINI_APP_INFO_AUDIT_CONTAINS,
            self::CODE_MINI_VERSION_NAME_DUPLICATE,
            self::CODE_LOGO_SIZE_EXCEED,
            self::CODE_APP_INFO_NOT_EXIST,
            self::CODE_USER_NOT_EXIST,
            self::CODE_REGION_CODE_IS_INVALID,
            self::CODE_SERVICE_TEL_IS_BLANK,
            self::CODE_INVALID_MINI_APP_NAME_PREFIX,
            self::CODE_SYSTEM_LIMIT,
            self::CODE_LOGO_IS_BLANK,
            self::CODE_HAS_NO_MODIFY_CNT,
            self::CODE_INVALID_TEST_PWD_LENGTH,
            self::CODE_SUB_APPLICATION_TYPE_ERROR,
            self::CODE_LICENSE_NAME_IS_BLANK,
            self::CODE_RISK_DECISION_HIT_BROAD,
            self::CODE_INVALID_TEST_ACCOUNT_LENGTH,
            self::CODE_DEVELOPER_INFO_NOT_EXIST,
            self::CODE_INVALIID_MEMO_TRADENO,
            self::CODE_MEMO_TRADENO_CHECK_FAIL,
        ];
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['links'] = $data['links'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        //if ($this->container['code'] === null) {
        //    $invalidProperties[] = "'code' can't be null";
        //}
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($this->container['code']) && !in_array($this->container['code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'code', must be one of '%s'",
                $this->container['code'],
                implode("', '", $allowedValues)
            );
        }

        //if ($this->container['message'] === null) {
        //    $invalidProperties[] = "'message' can't be null";
        //}
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
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code 错误码
     *
     * @return self
     */
    public function setCode($code)
    {
        $allowedValues = $this->getCodeAllowableValues();
        if (!is_null($code) && !in_array($code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'code', must be one of '%s'",
                    $code,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets links
     *
     * @return string|null
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param string|null $links 解决方案链接
     *
     * @return self
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message 错误描述
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

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


