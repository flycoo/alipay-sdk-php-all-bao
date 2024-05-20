<?php
/**
 * SearchBoxActivityVideoInfo
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
 * SearchBoxActivityVideoInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SearchBoxActivityVideoInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SearchBoxActivityVideoInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'videoBtnText' => 'string',
        'videoCoverimgId' => 'string',
        'videoSubTitle' => 'string',
        'videoTitle' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'videoBtnText' => null,
        'videoCoverimgId' => null,
        'videoSubTitle' => null,
        'videoTitle' => null
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
        'videoBtnText' => 'video_btn_text',
        'videoCoverimgId' => 'video_coverimg_id',
        'videoSubTitle' => 'video_sub_title',
        'videoTitle' => 'video_title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'videoBtnText' => 'setVideoBtnText',
        'videoCoverimgId' => 'setVideoCoverimgId',
        'videoSubTitle' => 'setVideoSubTitle',
        'videoTitle' => 'setVideoTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'videoBtnText' => 'getVideoBtnText',
        'videoCoverimgId' => 'getVideoCoverimgId',
        'videoSubTitle' => 'getVideoSubTitle',
        'videoTitle' => 'getVideoTitle'
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
        $this->container['videoBtnText'] = $data['videoBtnText'] ?? null;
        $this->container['videoCoverimgId'] = $data['videoCoverimgId'] ?? null;
        $this->container['videoSubTitle'] = $data['videoSubTitle'] ?? null;
        $this->container['videoTitle'] = $data['videoTitle'] ?? null;
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
     * Gets videoBtnText
     *
     * @return string|null
     */
    public function getVideoBtnText()
    {
        return $this->container['videoBtnText'];
    }

    /**
     * Sets videoBtnText
     *
     * @param string|null $videoBtnText 视频按钮文案，2-4个汉字
     *
     * @return self
     */
    public function setVideoBtnText($videoBtnText)
    {
        $this->container['videoBtnText'] = $videoBtnText;

        return $this;
    }

    /**
     * Gets videoCoverimgId
     *
     * @return string|null
     */
    public function getVideoCoverimgId()
    {
        return $this->container['videoCoverimgId'];
    }

    /**
     * Sets videoCoverimgId
     *
     * @param string|null $videoCoverimgId 视频封面图片id，图片id可以通过调用接口alipay.open.file.upload上传图片，获取图片id。图片规范：https://opendocs.alipay.com/mini/operation/atmospheredesign
     *
     * @return self
     */
    public function setVideoCoverimgId($videoCoverimgId)
    {
        $this->container['videoCoverimgId'] = $videoCoverimgId;

        return $this;
    }

    /**
     * Gets videoSubTitle
     *
     * @return string|null
     */
    public function getVideoSubTitle()
    {
        return $this->container['videoSubTitle'];
    }

    /**
     * Sets videoSubTitle
     *
     * @param string|null $videoSubTitle 视频副标题，2-16个汉字
     *
     * @return self
     */
    public function setVideoSubTitle($videoSubTitle)
    {
        $this->container['videoSubTitle'] = $videoSubTitle;

        return $this;
    }

    /**
     * Gets videoTitle
     *
     * @return string|null
     */
    public function getVideoTitle()
    {
        return $this->container['videoTitle'];
    }

    /**
     * Sets videoTitle
     *
     * @param string|null $videoTitle 视频主标题，2-10个汉字
     *
     * @return self
     */
    public function setVideoTitle($videoTitle)
    {
        $this->container['videoTitle'] = $videoTitle;

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


