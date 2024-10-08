<?php
/**
 * OpenApiRoyaltyDetailInfoPojo
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
 * OpenApiRoyaltyDetailInfoPojo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class OpenApiRoyaltyDetailInfoPojo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OpenApiRoyaltyDetailInfoPojo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'string',
        'amountPercentage' => 'int',
        'desc' => 'string',
        'royaltyScene' => 'string',
        'royaltyType' => 'string',
        'transIn' => 'string',
        'transInName' => 'string',
        'transInType' => 'string',
        'transOut' => 'string',
        'transOutType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'amountPercentage' => null,
        'desc' => null,
        'royaltyScene' => null,
        'royaltyType' => null,
        'transIn' => null,
        'transInName' => null,
        'transInType' => null,
        'transOut' => null,
        'transOutType' => null
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
        'amount' => 'amount',
        'amountPercentage' => 'amount_percentage',
        'desc' => 'desc',
        'royaltyScene' => 'royalty_scene',
        'royaltyType' => 'royalty_type',
        'transIn' => 'trans_in',
        'transInName' => 'trans_in_name',
        'transInType' => 'trans_in_type',
        'transOut' => 'trans_out',
        'transOutType' => 'trans_out_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'amountPercentage' => 'setAmountPercentage',
        'desc' => 'setDesc',
        'royaltyScene' => 'setRoyaltyScene',
        'royaltyType' => 'setRoyaltyType',
        'transIn' => 'setTransIn',
        'transInName' => 'setTransInName',
        'transInType' => 'setTransInType',
        'transOut' => 'setTransOut',
        'transOutType' => 'setTransOutType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'amountPercentage' => 'getAmountPercentage',
        'desc' => 'getDesc',
        'royaltyScene' => 'getRoyaltyScene',
        'royaltyType' => 'getRoyaltyType',
        'transIn' => 'getTransIn',
        'transInName' => 'getTransInName',
        'transInType' => 'getTransInType',
        'transOut' => 'getTransOut',
        'transOutType' => 'getTransOutType'
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
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['amountPercentage'] = $data['amountPercentage'] ?? null;
        $this->container['desc'] = $data['desc'] ?? null;
        $this->container['royaltyScene'] = $data['royaltyScene'] ?? null;
        $this->container['royaltyType'] = $data['royaltyType'] ?? null;
        $this->container['transIn'] = $data['transIn'] ?? null;
        $this->container['transInName'] = $data['transInName'] ?? null;
        $this->container['transInType'] = $data['transInType'] ?? null;
        $this->container['transOut'] = $data['transOut'] ?? null;
        $this->container['transOutType'] = $data['transOutType'] ?? null;
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
     * Gets amount
     *
     * @return string|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string|null $amount 分账的金额，单位为元
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amountPercentage
     *
     * @return int|null
     */
    public function getAmountPercentage()
    {
        return $this->container['amountPercentage'];
    }

    /**
     * Sets amountPercentage
     *
     * @param int|null $amountPercentage 分账信息中分账百分比。取值范围为大于0，少于或等于100的整数。
     *
     * @return self
     */
    public function setAmountPercentage($amountPercentage)
    {
        $this->container['amountPercentage'] = $amountPercentage;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 分账描述
     *
     * @return self
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets royaltyScene
     *
     * @return string|null
     */
    public function getRoyaltyScene()
    {
        return $this->container['royaltyScene'];
    }

    /**
     * Sets royaltyScene
     *
     * @param string|null $royaltyScene 可选值：达人佣金、平台服务费、技术服务费、其他
     *
     * @return self
     */
    public function setRoyaltyScene($royaltyScene)
    {
        $this->container['royaltyScene'] = $royaltyScene;

        return $this;
    }

    /**
     * Gets royaltyType
     *
     * @return string|null
     */
    public function getRoyaltyType()
    {
        return $this->container['royaltyType'];
    }

    /**
     * Sets royaltyType
     *
     * @param string|null $royaltyType 分账类型.
     *
     * @return self
     */
    public function setRoyaltyType($royaltyType)
    {
        $this->container['royaltyType'] = $royaltyType;

        return $this;
    }

    /**
     * Gets transIn
     *
     * @return string|null
     */
    public function getTransIn()
    {
        return $this->container['transIn'];
    }

    /**
     * Sets transIn
     *
     * @param string|null $transIn 收入方账户。如果收入方账户类型为userId，本参数为收入方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果收入方类型为cardAliasNo，本参数为收入方在支付宝绑定的卡编号；如果收入方类型为loginName，本参数为收入方的支付宝登录号；
     *
     * @return self
     */
    public function setTransIn($transIn)
    {
        $this->container['transIn'] = $transIn;

        return $this;
    }

    /**
     * Gets transInName
     *
     * @return string|null
     */
    public function getTransInName()
    {
        return $this->container['transInName'];
    }

    /**
     * Sets transInName
     *
     * @param string|null $transInName 分账收款方姓名，上送则进行姓名与支付宝账号的一致性校验，校验不一致则分账失败。不上送则不进行姓名校验
     *
     * @return self
     */
    public function setTransInName($transInName)
    {
        $this->container['transInName'] = $transInName;

        return $this;
    }

    /**
     * Gets transInType
     *
     * @return string|null
     */
    public function getTransInType()
    {
        return $this->container['transInType'];
    }

    /**
     * Sets transInType
     *
     * @param string|null $transInType 收入方账户类型。
     *
     * @return self
     */
    public function setTransInType($transInType)
    {
        $this->container['transInType'] = $transInType;

        return $this;
    }

    /**
     * Gets transOut
     *
     * @return string|null
     */
    public function getTransOut()
    {
        return $this->container['transOut'];
    }

    /**
     * Sets transOut
     *
     * @param string|null $transOut 支出方账户。如果支出方账户类型为userId，本参数为支出方的支付宝账号对应的支付宝唯一用户号，以2088开头的纯16位数字；如果支出方类型为loginName，本参数为支出方的支付宝登录号。 泛金融类商户分账时，该字段不要上送。
     *
     * @return self
     */
    public function setTransOut($transOut)
    {
        $this->container['transOut'] = $transOut;

        return $this;
    }

    /**
     * Gets transOutType
     *
     * @return string|null
     */
    public function getTransOutType()
    {
        return $this->container['transOutType'];
    }

    /**
     * Sets transOutType
     *
     * @param string|null $transOutType 支出方账户类型。
     *
     * @return self
     */
    public function setTransOutType($transOutType)
    {
        $this->container['transOutType'] = $transOutType;

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


