<?php
/**
 * AlipayOpenAppApiFieldApplyRequest
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
 * AlipayOpenAppApiFieldApplyRequest Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenAppApiFieldApplyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'alipay_open_app_api_field_apply_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'data' => '\Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel',
        'picture1' => '\SplFileObject',
        'picture2' => '\SplFileObject',
        'picture3' => '\SplFileObject',
        'picture4' => '\SplFileObject',
        'picture5' => '\SplFileObject',
        'video' => '\SplFileObject'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'data' => null,
        'picture1' => 'binary',
        'picture2' => 'binary',
        'picture3' => 'binary',
        'picture4' => 'binary',
        'picture5' => 'binary',
        'video' => 'binary'
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
        'data' => 'data',
        'picture1' => 'picture_1',
        'picture2' => 'picture_2',
        'picture3' => 'picture_3',
        'picture4' => 'picture_4',
        'picture5' => 'picture_5',
        'video' => 'video'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'data' => 'setData',
        'picture1' => 'setPicture1',
        'picture2' => 'setPicture2',
        'picture3' => 'setPicture3',
        'picture4' => 'setPicture4',
        'picture5' => 'setPicture5',
        'video' => 'setVideo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'data' => 'getData',
        'picture1' => 'getPicture1',
        'picture2' => 'getPicture2',
        'picture3' => 'getPicture3',
        'picture4' => 'getPicture4',
        'picture5' => 'getPicture5',
        'video' => 'getVideo'
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
        $this->container['data'] = $data['data'] ?? null;
        $this->container['picture1'] = $data['picture1'] ?? null;
        $this->container['picture2'] = $data['picture2'] ?? null;
        $this->container['picture3'] = $data['picture3'] ?? null;
        $this->container['picture4'] = $data['picture4'] ?? null;
        $this->container['picture5'] = $data['picture5'] ?? null;
        $this->container['video'] = $data['video'] ?? null;
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
     * Gets data
     *
     * @return \Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param \Alipay\OpenAPISDK\Model\AlipayOpenAppApiFieldApplyModel|null $data data
     *
     * @return self
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets picture1
     *
     * @return \SplFileObject|null
     */
    public function getPicture1()
    {
        return $this->container['picture1'];
    }

    /**
     * Sets picture1
     *
     * @param \SplFileObject|null $picture1 picture1
     *
     * @return self
     */
    public function setPicture1($picture1)
    {
        $this->container['picture1'] = $picture1;

        return $this;
    }

    /**
     * Gets picture2
     *
     * @return \SplFileObject|null
     */
    public function getPicture2()
    {
        return $this->container['picture2'];
    }

    /**
     * Sets picture2
     *
     * @param \SplFileObject|null $picture2 picture2
     *
     * @return self
     */
    public function setPicture2($picture2)
    {
        $this->container['picture2'] = $picture2;

        return $this;
    }

    /**
     * Gets picture3
     *
     * @return \SplFileObject|null
     */
    public function getPicture3()
    {
        return $this->container['picture3'];
    }

    /**
     * Sets picture3
     *
     * @param \SplFileObject|null $picture3 picture3
     *
     * @return self
     */
    public function setPicture3($picture3)
    {
        $this->container['picture3'] = $picture3;

        return $this;
    }

    /**
     * Gets picture4
     *
     * @return \SplFileObject|null
     */
    public function getPicture4()
    {
        return $this->container['picture4'];
    }

    /**
     * Sets picture4
     *
     * @param \SplFileObject|null $picture4 picture4
     *
     * @return self
     */
    public function setPicture4($picture4)
    {
        $this->container['picture4'] = $picture4;

        return $this;
    }

    /**
     * Gets picture5
     *
     * @return \SplFileObject|null
     */
    public function getPicture5()
    {
        return $this->container['picture5'];
    }

    /**
     * Sets picture5
     *
     * @param \SplFileObject|null $picture5 picture5
     *
     * @return self
     */
    public function setPicture5($picture5)
    {
        $this->container['picture5'] = $picture5;

        return $this;
    }

    /**
     * Gets video
     *
     * @return \SplFileObject|null
     */
    public function getVideo()
    {
        return $this->container['video'];
    }

    /**
     * Sets video
     *
     * @param \SplFileObject|null $video video
     *
     * @return self
     */
    public function setVideo($video)
    {
        $this->container['video'] = $video;

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


