<?php
/**
 * AlipayEbppInvoiceInstitutionCreateResponseModel
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
 * AlipayEbppInvoiceInstitutionCreateResponseModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayEbppInvoiceInstitutionCreateResponseModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayEbppInvoiceInstitutionCreateResponseModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'institutionId' => 'string',
        'issueRuleIdInfoList' => '\Alipay\OpenAPISDK\Model\IssueRuleIdInfo[]',
        'standardIdInfoList' => '\Alipay\OpenAPISDK\Model\StandardIdInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'institutionId' => null,
        'issueRuleIdInfoList' => null,
        'standardIdInfoList' => null
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
        'institutionId' => 'institution_id',
        'issueRuleIdInfoList' => 'issue_rule_id_info_list',
        'standardIdInfoList' => 'standard_id_info_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'institutionId' => 'setInstitutionId',
        'issueRuleIdInfoList' => 'setIssueRuleIdInfoList',
        'standardIdInfoList' => 'setStandardIdInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'institutionId' => 'getInstitutionId',
        'issueRuleIdInfoList' => 'getIssueRuleIdInfoList',
        'standardIdInfoList' => 'getStandardIdInfoList'
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
        $this->container['institutionId'] = $data['institutionId'] ?? null;
        $this->container['issueRuleIdInfoList'] = $data['issueRuleIdInfoList'] ?? null;
        $this->container['standardIdInfoList'] = $data['standardIdInfoList'] ?? null;
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
     * Gets institutionId
     *
     * @return string|null
     */
    public function getInstitutionId()
    {
        return $this->container['institutionId'];
    }

    /**
     * Sets institutionId
     *
     * @param string|null $institutionId 制度id
     *
     * @return self
     */
    public function setInstitutionId($institutionId)
    {
        $this->container['institutionId'] = $institutionId;

        return $this;
    }

    /**
     * Gets issueRuleIdInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\IssueRuleIdInfo[]|null
     */
    public function getIssueRuleIdInfoList()
    {
        return $this->container['issueRuleIdInfoList'];
    }

    /**
     * Sets issueRuleIdInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\IssueRuleIdInfo[]|null $issueRuleIdInfoList 发放规则id列表
     *
     * @return self
     */
    public function setIssueRuleIdInfoList($issueRuleIdInfoList)
    {
        $this->container['issueRuleIdInfoList'] = $issueRuleIdInfoList;

        return $this;
    }

    /**
     * Gets standardIdInfoList
     *
     * @return \Alipay\OpenAPISDK\Model\StandardIdInfo[]|null
     */
    public function getStandardIdInfoList()
    {
        return $this->container['standardIdInfoList'];
    }

    /**
     * Sets standardIdInfoList
     *
     * @param \Alipay\OpenAPISDK\Model\StandardIdInfo[]|null $standardIdInfoList 使用规则id列表
     *
     * @return self
     */
    public function setStandardIdInfoList($standardIdInfoList)
    {
        $this->container['standardIdInfoList'] = $standardIdInfoList;

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


