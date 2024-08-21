<?php
/**
 * ButtonObject
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
 * ButtonObject Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ButtonObject implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ButtonObject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actionParam' => 'string',
        'actionType' => 'string',
        'icon' => 'string',
        'name' => 'string',
        'subButton' => '\Alipay\OpenAPISDK\Model\SubButton[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actionParam' => null,
        'actionType' => null,
        'icon' => null,
        'name' => null,
        'subButton' => null
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
        'actionParam' => 'action_param',
        'actionType' => 'action_type',
        'icon' => 'icon',
        'name' => 'name',
        'subButton' => 'sub_button'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actionParam' => 'setActionParam',
        'actionType' => 'setActionType',
        'icon' => 'setIcon',
        'name' => 'setName',
        'subButton' => 'setSubButton'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actionParam' => 'getActionParam',
        'actionType' => 'getActionType',
        'icon' => 'getIcon',
        'name' => 'getName',
        'subButton' => 'getSubButton'
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
        $this->container['actionParam'] = $data['actionParam'] ?? null;
        $this->container['actionType'] = $data['actionType'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['subButton'] = $data['subButton'] ?? null;
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
     * Gets actionParam
     *
     * @return string|null
     */
    public function getActionParam()
    {
        return $this->container['actionParam'];
    }

    /**
     * Sets actionParam
     *
     * @param string|null $actionParam 当actionType为link时，该参数为url链接；  当actionType为out时，该参数为用户自定义参数；  当actionType为tel时，该参数为电话号码。  当action_type为map时，该参数为查看地图的关键字。  当action_type为consumption时，该参数可不传。  该参数最长255个字符，不允许冒号等特殊字符。
     *
     * @return self
     */
    public function setActionParam($actionParam)
    {
        $this->container['actionParam'] = $actionParam;

        return $this;
    }

    /**
     * Gets actionType
     *
     * @return string|null
     */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
     * Sets actionType
     *
     * @param string|null $actionType 菜单类型：  out——事件型菜单；  link——链接型菜单；  tel——点击拨打电话；  map——点击查看地图；  consumption——点击查看用户与生活号管理员账号之间的消费记录
     *
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon图片url，必须是http协议的url，尺寸为60X60，最大不超过5M，请先调用<a href=\"https://docs.open.alipay.com/api_3/alipay.offline.material.image.upload\"> 图片上传接口</a>获得图片url
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 菜单名称，icon菜单名称不超过5个汉字，文本菜单名称不超过9个汉字，编码格式为GBK
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subButton
     *
     * @return \Alipay\OpenAPISDK\Model\SubButton[]|null
     */
    public function getSubButton()
    {
        return $this->container['subButton'];
    }

    /**
     * Sets subButton
     *
     * @param \Alipay\OpenAPISDK\Model\SubButton[]|null $subButton 二级菜单数组，若sub_button为空，则一级菜单必须指定action_type和action_param的值，二级菜单个数可以为1~5个。
     *
     * @return self
     */
    public function setSubButton($subButton)
    {
        $this->container['subButton'] = $subButton;

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


