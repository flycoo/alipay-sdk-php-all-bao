<?php
/**
 * AlipayIserviceCcmSwKnowledgeModifyModel
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
 * AlipayIserviceCcmSwKnowledgeModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmSwKnowledgeModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmSwKnowledgeModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryId' => 'int',
        'categoryName' => 'string',
        'content' => 'string',
        'extId' => 'string',
        'extendTitles' => 'string[]',
        'icon' => 'string',
        'id' => 'int',
        'isDelete' => 'bool',
        'isSearchable' => 'bool',
        'libraryId' => 'int',
        'libraryName' => 'string',
        'spu' => '\Alipay\OpenAPISDK\Model\SpuDetail',
        'tags' => 'string[]',
        'title' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'categoryId' => null,
        'categoryName' => null,
        'content' => null,
        'extId' => null,
        'extendTitles' => null,
        'icon' => null,
        'id' => null,
        'isDelete' => null,
        'isSearchable' => null,
        'libraryId' => null,
        'libraryName' => null,
        'spu' => null,
        'tags' => null,
        'title' => null
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
        'categoryId' => 'category_id',
        'categoryName' => 'category_name',
        'content' => 'content',
        'extId' => 'ext_id',
        'extendTitles' => 'extend_titles',
        'icon' => 'icon',
        'id' => 'id',
        'isDelete' => 'is_delete',
        'isSearchable' => 'is_searchable',
        'libraryId' => 'library_id',
        'libraryName' => 'library_name',
        'spu' => 'spu',
        'tags' => 'tags',
        'title' => 'title'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'categoryName' => 'setCategoryName',
        'content' => 'setContent',
        'extId' => 'setExtId',
        'extendTitles' => 'setExtendTitles',
        'icon' => 'setIcon',
        'id' => 'setId',
        'isDelete' => 'setIsDelete',
        'isSearchable' => 'setIsSearchable',
        'libraryId' => 'setLibraryId',
        'libraryName' => 'setLibraryName',
        'spu' => 'setSpu',
        'tags' => 'setTags',
        'title' => 'setTitle'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'categoryName' => 'getCategoryName',
        'content' => 'getContent',
        'extId' => 'getExtId',
        'extendTitles' => 'getExtendTitles',
        'icon' => 'getIcon',
        'id' => 'getId',
        'isDelete' => 'getIsDelete',
        'isSearchable' => 'getIsSearchable',
        'libraryId' => 'getLibraryId',
        'libraryName' => 'getLibraryName',
        'spu' => 'getSpu',
        'tags' => 'getTags',
        'title' => 'getTitle'
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
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['categoryName'] = $data['categoryName'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['extId'] = $data['extId'] ?? null;
        $this->container['extendTitles'] = $data['extendTitles'] ?? null;
        $this->container['icon'] = $data['icon'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['isDelete'] = $data['isDelete'] ?? null;
        $this->container['isSearchable'] = $data['isSearchable'] ?? null;
        $this->container['libraryId'] = $data['libraryId'] ?? null;
        $this->container['libraryName'] = $data['libraryName'] ?? null;
        $this->container['spu'] = $data['spu'] ?? null;
        $this->container['tags'] = $data['tags'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
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
     * Gets categoryId
     *
     * @return int|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param int|null $categoryId 所属类目ID
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets categoryName
     *
     * @return string|null
     */
    public function getCategoryName()
    {
        return $this->container['categoryName'];
    }

    /**
     * Sets categoryName
     *
     * @param string|null $categoryName 知识点所属类目
     *
     * @return self
     */
    public function setCategoryName($categoryName)
    {
        $this->container['categoryName'] = $categoryName;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string|null $content 知识点答案内容
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets extId
     *
     * @return string|null
     */
    public function getExtId()
    {
        return $this->container['extId'];
    }

    /**
     * Sets extId
     *
     * @param string|null $extId 外部知识点ID
     *
     * @return self
     */
    public function setExtId($extId)
    {
        $this->container['extId'] = $extId;

        return $this;
    }

    /**
     * Gets extendTitles
     *
     * @return string[]|null
     */
    public function getExtendTitles()
    {
        return $this->container['extendTitles'];
    }

    /**
     * Sets extendTitles
     *
     * @param string[]|null $extendTitles 扩展标题（问法）
     *
     * @return self
     */
    public function setExtendTitles($extendTitles)
    {
        $this->container['extendTitles'] = $extendTitles;

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
     * @param string|null $icon 问答关联图片附件地址
     *
     * @return self
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id 知识点ID
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets isDelete
     *
     * @return bool|null
     */
    public function getIsDelete()
    {
        return $this->container['isDelete'];
    }

    /**
     * Sets isDelete
     *
     * @param bool|null $isDelete 默认为false，为true且id非空时，表示删除知识点
     *
     * @return self
     */
    public function setIsDelete($isDelete)
    {
        $this->container['isDelete'] = $isDelete;

        return $this;
    }

    /**
     * Gets isSearchable
     *
     * @return bool|null
     */
    public function getIsSearchable()
    {
        return $this->container['isSearchable'];
    }

    /**
     * Sets isSearchable
     *
     * @param bool|null $isSearchable 是否被检索到，默认false，系统希望为true
     *
     * @return self
     */
    public function setIsSearchable($isSearchable)
    {
        $this->container['isSearchable'] = $isSearchable;

        return $this;
    }

    /**
     * Gets libraryId
     *
     * @return int|null
     */
    public function getLibraryId()
    {
        return $this->container['libraryId'];
    }

    /**
     * Sets libraryId
     *
     * @param int|null $libraryId 知识库ID
     *
     * @return self
     */
    public function setLibraryId($libraryId)
    {
        $this->container['libraryId'] = $libraryId;

        return $this;
    }

    /**
     * Gets libraryName
     *
     * @return string|null
     */
    public function getLibraryName()
    {
        return $this->container['libraryName'];
    }

    /**
     * Sets libraryName
     *
     * @param string|null $libraryName 知识库名称
     *
     * @return self
     */
    public function setLibraryName($libraryName)
    {
        $this->container['libraryName'] = $libraryName;

        return $this;
    }

    /**
     * Gets spu
     *
     * @return \Alipay\OpenAPISDK\Model\SpuDetail|null
     */
    public function getSpu()
    {
        return $this->container['spu'];
    }

    /**
     * Sets spu
     *
     * @param \Alipay\OpenAPISDK\Model\SpuDetail|null $spu spu
     *
     * @return self
     */
    public function setSpu($spu)
    {
        $this->container['spu'] = $spu;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags 以逗号分割的字符串列表
     *
     * @return self
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 知识点标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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


