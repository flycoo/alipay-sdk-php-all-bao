<?php
/**
 * AlipayIserviceCcmSwArticleBatchqueryModel
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
 * AlipayIserviceCcmSwArticleBatchqueryModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayIserviceCcmSwArticleBatchqueryModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayIserviceCcmSwArticleBatchqueryModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'categoryId' => 'int',
        'ccsInstanceId' => 'string',
        'endTime' => 'string',
        'ids' => 'int[]',
        'keyword' => 'string',
        'keywords' => 'string[]',
        'libraryId' => 'int',
        'pageNum' => 'int',
        'pageSize' => 'int',
        'searchAllCategory' => 'bool',
        'searchCategoryType' => 'string',
        'startTime' => 'string',
        'status' => 'string'
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
        'ccsInstanceId' => null,
        'endTime' => null,
        'ids' => null,
        'keyword' => null,
        'keywords' => null,
        'libraryId' => null,
        'pageNum' => null,
        'pageSize' => null,
        'searchAllCategory' => null,
        'searchCategoryType' => null,
        'startTime' => null,
        'status' => null
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
        'ccsInstanceId' => 'ccs_instance_id',
        'endTime' => 'end_time',
        'ids' => 'ids',
        'keyword' => 'keyword',
        'keywords' => 'keywords',
        'libraryId' => 'library_id',
        'pageNum' => 'page_num',
        'pageSize' => 'page_size',
        'searchAllCategory' => 'search_all_category',
        'searchCategoryType' => 'search_category_type',
        'startTime' => 'start_time',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'categoryId' => 'setCategoryId',
        'ccsInstanceId' => 'setCcsInstanceId',
        'endTime' => 'setEndTime',
        'ids' => 'setIds',
        'keyword' => 'setKeyword',
        'keywords' => 'setKeywords',
        'libraryId' => 'setLibraryId',
        'pageNum' => 'setPageNum',
        'pageSize' => 'setPageSize',
        'searchAllCategory' => 'setSearchAllCategory',
        'searchCategoryType' => 'setSearchCategoryType',
        'startTime' => 'setStartTime',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'categoryId' => 'getCategoryId',
        'ccsInstanceId' => 'getCcsInstanceId',
        'endTime' => 'getEndTime',
        'ids' => 'getIds',
        'keyword' => 'getKeyword',
        'keywords' => 'getKeywords',
        'libraryId' => 'getLibraryId',
        'pageNum' => 'getPageNum',
        'pageSize' => 'getPageSize',
        'searchAllCategory' => 'getSearchAllCategory',
        'searchCategoryType' => 'getSearchCategoryType',
        'startTime' => 'getStartTime',
        'status' => 'getStatus'
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
        $this->container['ccsInstanceId'] = $data['ccsInstanceId'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['ids'] = $data['ids'] ?? null;
        $this->container['keyword'] = $data['keyword'] ?? null;
        $this->container['keywords'] = $data['keywords'] ?? null;
        $this->container['libraryId'] = $data['libraryId'] ?? null;
        $this->container['pageNum'] = $data['pageNum'] ?? null;
        $this->container['pageSize'] = $data['pageSize'] ?? null;
        $this->container['searchAllCategory'] = $data['searchAllCategory'] ?? null;
        $this->container['searchCategoryType'] = $data['searchCategoryType'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
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
     * @param int|null $categoryId 所属类目ID，如果search_all_category为true则不用填
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets ccsInstanceId
     *
     * @return string|null
     */
    public function getCcsInstanceId()
    {
        return $this->container['ccsInstanceId'];
    }

    /**
     * Sets ccsInstanceId
     *
     * @param string|null $ccsInstanceId 子部门ID，不传为默认部门
     *
     * @return self
     */
    public function setCcsInstanceId($ccsInstanceId)
    {
        $this->container['ccsInstanceId'] = $ccsInstanceId;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return string|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param string|null $endTime 结束时间，并且开始时间不能为空
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return int[]|null
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param int[]|null $ids 文章ID集合
     *
     * @return self
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets keyword
     *
     * @return string|null
     */
    public function getKeyword()
    {
        return $this->container['keyword'];
    }

    /**
     * Sets keyword
     *
     * @param string|null $keyword 关键字
     *
     * @return self
     */
    public function setKeyword($keyword)
    {
        $this->container['keyword'] = $keyword;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return string[]|null
     */
    public function getKeywords()
    {
        return $this->container['keywords'];
    }

    /**
     * Sets keywords
     *
     * @param string[]|null $keywords 标签
     *
     * @return self
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

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
     * Gets pageNum
     *
     * @return int|null
     */
    public function getPageNum()
    {
        return $this->container['pageNum'];
    }

    /**
     * Sets pageNum
     *
     * @param int|null $pageNum 页数，page_size不能为空
     *
     * @return self
     */
    public function setPageNum($pageNum)
    {
        $this->container['pageNum'] = $pageNum;

        return $this;
    }

    /**
     * Gets pageSize
     *
     * @return int|null
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
     * Sets pageSize
     *
     * @param int|null $pageSize 页大小，page_num不能为空
     *
     * @return self
     */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /**
     * Gets searchAllCategory
     *
     * @return bool|null
     */
    public function getSearchAllCategory()
    {
        return $this->container['searchAllCategory'];
    }

    /**
     * Sets searchAllCategory
     *
     * @param bool|null $searchAllCategory 是否搜索所有类目，如果为true则不用填写category_id值
     *
     * @return self
     */
    public function setSearchAllCategory($searchAllCategory)
    {
        $this->container['searchAllCategory'] = $searchAllCategory;

        return $this;
    }

    /**
     * Gets searchCategoryType
     *
     * @return string|null
     */
    public function getSearchCategoryType()
    {
        return $this->container['searchCategoryType'];
    }

    /**
     * Sets searchCategoryType
     *
     * @param string|null $searchCategoryType Current（搜索当前节点）； Children（搜索当前节点以及子节点）
     *
     * @return self
     */
    public function setSearchCategoryType($searchCategoryType)
    {
        $this->container['searchCategoryType'] = $searchCategoryType;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return string|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param string|null $startTime 开始时间，并且结束时间不能为空
     *
     * @return self
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * @param string|null $status 状态，PUBLISHED（已发布），UNPUBLISH（未发布），EXPIRED（失效），DELETED（已删除）
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


