<?php
/**
 * AlipayEcoEduKtStudentModifyModel
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
 * AlipayEcoEduKtStudentModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEcoEduKtStudentModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEcoEduKtStudentModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'childName' => 'string',
        'isvPid' => 'string',
        'schoolNo' => 'string',
        'schoolPid' => 'string',
        'status' => 'string',
        'studentCode' => 'string',
        'studentIdentify' => 'string',
        'studentNo' => 'string',
        'users' => '\Alipay\OpenAPISDK\Model\UserDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'childName' => null,
        'isvPid' => null,
        'schoolNo' => null,
        'schoolPid' => null,
        'status' => null,
        'studentCode' => null,
        'studentIdentify' => null,
        'studentNo' => null,
        'users' => null
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
        'childName' => 'child_name',
        'isvPid' => 'isv_pid',
        'schoolNo' => 'school_no',
        'schoolPid' => 'school_pid',
        'status' => 'status',
        'studentCode' => 'student_code',
        'studentIdentify' => 'student_identify',
        'studentNo' => 'student_no',
        'users' => 'users'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'childName' => 'setChildName',
        'isvPid' => 'setIsvPid',
        'schoolNo' => 'setSchoolNo',
        'schoolPid' => 'setSchoolPid',
        'status' => 'setStatus',
        'studentCode' => 'setStudentCode',
        'studentIdentify' => 'setStudentIdentify',
        'studentNo' => 'setStudentNo',
        'users' => 'setUsers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'childName' => 'getChildName',
        'isvPid' => 'getIsvPid',
        'schoolNo' => 'getSchoolNo',
        'schoolPid' => 'getSchoolPid',
        'status' => 'getStatus',
        'studentCode' => 'getStudentCode',
        'studentIdentify' => 'getStudentIdentify',
        'studentNo' => 'getStudentNo',
        'users' => 'getUsers'
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
        $this->container['childName'] = $data['childName'] ?? null;
        $this->container['isvPid'] = $data['isvPid'] ?? null;
        $this->container['schoolNo'] = $data['schoolNo'] ?? null;
        $this->container['schoolPid'] = $data['schoolPid'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['studentCode'] = $data['studentCode'] ?? null;
        $this->container['studentIdentify'] = $data['studentIdentify'] ?? null;
        $this->container['studentNo'] = $data['studentNo'] ?? null;
        $this->container['users'] = $data['users'] ?? null;
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
     * Gets childName
     *
     * @return string|null
     */
    public function getChildName()
    {
        return $this->container['childName'];
    }

    /**
     * Sets childName
     *
     * @param string|null $childName 修改后的学生姓名  本接口调用时，child_name、student_code、student_identify、users这几个参数至少需要填写其中一个，不能同时为空
     *
     * @return self
     */
    public function setChildName($childName)
    {
        $this->container['childName'] = $childName;

        return $this;
    }

    /**
     * Gets isvPid
     *
     * @return string|null
     */
    public function getIsvPid()
    {
        return $this->container['isvPid'];
    }

    /**
     * Sets isvPid
     *
     * @param string|null $isvPid 已经签约教育缴费的isv的支付宝PID
     *
     * @return self
     */
    public function setIsvPid($isvPid)
    {
        $this->container['isvPid'] = $isvPid;

        return $this;
    }

    /**
     * Gets schoolNo
     *
     * @return string|null
     */
    public function getSchoolNo()
    {
        return $this->container['schoolNo'];
    }

    /**
     * Sets schoolNo
     *
     * @param string|null $schoolNo 学校编号，调用alipay.eco.edu.kt.schoolinfo.modify接口录入学校信息时，接口返回的编号
     *
     * @return self
     */
    public function setSchoolNo($schoolNo)
    {
        $this->container['schoolNo'] = $schoolNo;

        return $this;
    }

    /**
     * Gets schoolPid
     *
     * @return string|null
     */
    public function getSchoolPid()
    {
        return $this->container['schoolPid'];
    }

    /**
     * Sets schoolPid
     *
     * @param string|null $schoolPid 学校用来签约支付宝教育缴费的支付宝PID
     *
     * @return self
     */
    public function setSchoolPid($schoolPid)
    {
        $this->container['schoolPid'] = $schoolPid;

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
     * @param string|null $status 区分ISV操作，“D”表示删除，“U”表示更新，区分大小写。  如果为U，则学生名字，学号，身份证至少填写一项
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets studentCode
     *
     * @return string|null
     */
    public function getStudentCode()
    {
        return $this->container['studentCode'];
    }

    /**
     * Sets studentCode
     *
     * @param string|null $studentCode 修改后的学号  本接口调用时，child_name、student_code、student_identify、users这几个参数至少需要填写其中一个，不能同时为空
     *
     * @return self
     */
    public function setStudentCode($studentCode)
    {
        $this->container['studentCode'] = $studentCode;

        return $this;
    }

    /**
     * Gets studentIdentify
     *
     * @return string|null
     */
    public function getStudentIdentify()
    {
        return $this->container['studentIdentify'];
    }

    /**
     * Sets studentIdentify
     *
     * @param string|null $studentIdentify 修改后的身份证号码  本接口调用时，child_name、student_code、student_identify、users这几个参数至少需要填写其中一个，不能同时为空
     *
     * @return self
     */
    public function setStudentIdentify($studentIdentify)
    {
        $this->container['studentIdentify'] = $studentIdentify;

        return $this;
    }

    /**
     * Gets studentNo
     *
     * @return string|null
     */
    public function getStudentNo()
    {
        return $this->container['studentNo'];
    }

    /**
     * Sets studentNo
     *
     * @param string|null $studentNo 支付宝-中小学-教育缴费生成的学生唯一编号
     *
     * @return self
     */
    public function setStudentNo($studentNo)
    {
        $this->container['studentNo'] = $studentNo;

        return $this;
    }

    /**
     * Gets users
     *
     * @return \Alipay\OpenAPISDK\Model\UserDetails[]|null
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param \Alipay\OpenAPISDK\Model\UserDetails[]|null $users 孩子的家长信息，最多一次输入20个家长。如果输入的家长信息不存在，则该改学生增加家长信息  本接口调用时，child_name、student_code、student_identify、users这几个参数至少需要填写其中一个，不能同时为空
     *
     * @return self
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

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


