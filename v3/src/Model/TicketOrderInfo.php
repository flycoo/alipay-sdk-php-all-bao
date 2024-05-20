<?php
/**
 * TicketOrderInfo
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
 * TicketOrderInfo Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TicketOrderInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TicketOrderInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'arrival' => '\Alipay\OpenAPISDK\Model\JourneyLocation',
        'content' => 'string',
        'departure' => '\Alipay\OpenAPISDK\Model\JourneyLocation',
        'effectiveNum' => 'int',
        'endTime' => 'string',
        'extInfo' => '\Alipay\OpenAPISDK\Model\OrderExtInfo[]',
        'faceValue' => 'string',
        'functionalServices' => '\Alipay\OpenAPISDK\Model\FunctionalService[]',
        'invalidReason' => 'string',
        'locations' => '\Alipay\OpenAPISDK\Model\JourneyLocation[]',
        'merchantTicketNo' => 'string',
        'seatInfos' => '\Alipay\OpenAPISDK\Model\SeatInfo[]',
        'serviceProvider' => '\Alipay\OpenAPISDK\Model\OrderParticipantInfo',
        'shops' => '\Alipay\OpenAPISDK\Model\OrderShopInfo[]',
        'startTime' => 'string',
        'status' => 'string',
        'ticketCreateTime' => 'string',
        'ticketModifyTime' => 'string',
        'ticketNum' => 'int',
        'ticketUsers' => '\Alipay\OpenAPISDK\Model\UserInfomation[]',
        'title' => 'string',
        'vehicleInfo' => '\Alipay\OpenAPISDK\Model\OrderVehicleInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'arrival' => null,
        'content' => null,
        'departure' => null,
        'effectiveNum' => null,
        'endTime' => null,
        'extInfo' => null,
        'faceValue' => null,
        'functionalServices' => null,
        'invalidReason' => null,
        'locations' => null,
        'merchantTicketNo' => null,
        'seatInfos' => null,
        'serviceProvider' => null,
        'shops' => null,
        'startTime' => null,
        'status' => null,
        'ticketCreateTime' => null,
        'ticketModifyTime' => null,
        'ticketNum' => null,
        'ticketUsers' => null,
        'title' => null,
        'vehicleInfo' => null
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
        'arrival' => 'arrival',
        'content' => 'content',
        'departure' => 'departure',
        'effectiveNum' => 'effective_num',
        'endTime' => 'end_time',
        'extInfo' => 'ext_info',
        'faceValue' => 'face_value',
        'functionalServices' => 'functional_services',
        'invalidReason' => 'invalid_reason',
        'locations' => 'locations',
        'merchantTicketNo' => 'merchant_ticket_no',
        'seatInfos' => 'seat_infos',
        'serviceProvider' => 'service_provider',
        'shops' => 'shops',
        'startTime' => 'start_time',
        'status' => 'status',
        'ticketCreateTime' => 'ticket_create_time',
        'ticketModifyTime' => 'ticket_modify_time',
        'ticketNum' => 'ticket_num',
        'ticketUsers' => 'ticket_users',
        'title' => 'title',
        'vehicleInfo' => 'vehicle_info'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arrival' => 'setArrival',
        'content' => 'setContent',
        'departure' => 'setDeparture',
        'effectiveNum' => 'setEffectiveNum',
        'endTime' => 'setEndTime',
        'extInfo' => 'setExtInfo',
        'faceValue' => 'setFaceValue',
        'functionalServices' => 'setFunctionalServices',
        'invalidReason' => 'setInvalidReason',
        'locations' => 'setLocations',
        'merchantTicketNo' => 'setMerchantTicketNo',
        'seatInfos' => 'setSeatInfos',
        'serviceProvider' => 'setServiceProvider',
        'shops' => 'setShops',
        'startTime' => 'setStartTime',
        'status' => 'setStatus',
        'ticketCreateTime' => 'setTicketCreateTime',
        'ticketModifyTime' => 'setTicketModifyTime',
        'ticketNum' => 'setTicketNum',
        'ticketUsers' => 'setTicketUsers',
        'title' => 'setTitle',
        'vehicleInfo' => 'setVehicleInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arrival' => 'getArrival',
        'content' => 'getContent',
        'departure' => 'getDeparture',
        'effectiveNum' => 'getEffectiveNum',
        'endTime' => 'getEndTime',
        'extInfo' => 'getExtInfo',
        'faceValue' => 'getFaceValue',
        'functionalServices' => 'getFunctionalServices',
        'invalidReason' => 'getInvalidReason',
        'locations' => 'getLocations',
        'merchantTicketNo' => 'getMerchantTicketNo',
        'seatInfos' => 'getSeatInfos',
        'serviceProvider' => 'getServiceProvider',
        'shops' => 'getShops',
        'startTime' => 'getStartTime',
        'status' => 'getStatus',
        'ticketCreateTime' => 'getTicketCreateTime',
        'ticketModifyTime' => 'getTicketModifyTime',
        'ticketNum' => 'getTicketNum',
        'ticketUsers' => 'getTicketUsers',
        'title' => 'getTitle',
        'vehicleInfo' => 'getVehicleInfo'
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
        $this->container['arrival'] = $data['arrival'] ?? null;
        $this->container['content'] = $data['content'] ?? null;
        $this->container['departure'] = $data['departure'] ?? null;
        $this->container['effectiveNum'] = $data['effectiveNum'] ?? null;
        $this->container['endTime'] = $data['endTime'] ?? null;
        $this->container['extInfo'] = $data['extInfo'] ?? null;
        $this->container['faceValue'] = $data['faceValue'] ?? null;
        $this->container['functionalServices'] = $data['functionalServices'] ?? null;
        $this->container['invalidReason'] = $data['invalidReason'] ?? null;
        $this->container['locations'] = $data['locations'] ?? null;
        $this->container['merchantTicketNo'] = $data['merchantTicketNo'] ?? null;
        $this->container['seatInfos'] = $data['seatInfos'] ?? null;
        $this->container['serviceProvider'] = $data['serviceProvider'] ?? null;
        $this->container['shops'] = $data['shops'] ?? null;
        $this->container['startTime'] = $data['startTime'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['ticketCreateTime'] = $data['ticketCreateTime'] ?? null;
        $this->container['ticketModifyTime'] = $data['ticketModifyTime'] ?? null;
        $this->container['ticketNum'] = $data['ticketNum'] ?? null;
        $this->container['ticketUsers'] = $data['ticketUsers'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['vehicleInfo'] = $data['vehicleInfo'] ?? null;
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
     * Gets arrival
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyLocation|null
     */
    public function getArrival()
    {
        return $this->container['arrival'];
    }

    /**
     * Sets arrival
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyLocation|null $arrival arrival
     *
     * @return self
     */
    public function setArrival($arrival)
    {
        $this->container['arrival'] = $arrival;

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
     * @param string|null $content 凭证内容
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets departure
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyLocation|null
     */
    public function getDeparture()
    {
        return $this->container['departure'];
    }

    /**
     * Sets departure
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyLocation|null $departure departure
     *
     * @return self
     */
    public function setDeparture($departure)
    {
        $this->container['departure'] = $departure;

        return $this;
    }

    /**
     * Gets effectiveNum
     *
     * @return int|null
     */
    public function getEffectiveNum()
    {
        return $this->container['effectiveNum'];
    }

    /**
     * Sets effectiveNum
     *
     * @param int|null $effectiveNum 凭证有效数
     *
     * @return self
     */
    public function setEffectiveNum($effectiveNum)
    {
        $this->container['effectiveNum'] = $effectiveNum;

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
     * @param string|null $endTime 凭证结束时间
     *
     * @return self
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets extInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null
     */
    public function getExtInfo()
    {
        return $this->container['extInfo'];
    }

    /**
     * Sets extInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderExtInfo[]|null $extInfo 扩展信息
     *
     * @return self
     */
    public function setExtInfo($extInfo)
    {
        $this->container['extInfo'] = $extInfo;

        return $this;
    }

    /**
     * Gets faceValue
     *
     * @return string|null
     */
    public function getFaceValue()
    {
        return $this->container['faceValue'];
    }

    /**
     * Sets faceValue
     *
     * @param string|null $faceValue 票面价
     *
     * @return self
     */
    public function setFaceValue($faceValue)
    {
        $this->container['faceValue'] = $faceValue;

        return $this;
    }

    /**
     * Gets functionalServices
     *
     * @return \Alipay\OpenAPISDK\Model\FunctionalService[]|null
     */
    public function getFunctionalServices()
    {
        return $this->container['functionalServices'];
    }

    /**
     * Sets functionalServices
     *
     * @param \Alipay\OpenAPISDK\Model\FunctionalService[]|null $functionalServices 功能服务信息
     *
     * @return self
     */
    public function setFunctionalServices($functionalServices)
    {
        $this->container['functionalServices'] = $functionalServices;

        return $this;
    }

    /**
     * Gets invalidReason
     *
     * @return string|null
     */
    public function getInvalidReason()
    {
        return $this->container['invalidReason'];
    }

    /**
     * Sets invalidReason
     *
     * @param string|null $invalidReason 凭证失效原因
     *
     * @return self
     */
    public function setInvalidReason($invalidReason)
    {
        $this->container['invalidReason'] = $invalidReason;

        return $this;
    }

    /**
     * Gets locations
     *
     * @return \Alipay\OpenAPISDK\Model\JourneyLocation[]|null
     */
    public function getLocations()
    {
        return $this->container['locations'];
    }

    /**
     * Sets locations
     *
     * @param \Alipay\OpenAPISDK\Model\JourneyLocation[]|null $locations 凭证可使用地点
     *
     * @return self
     */
    public function setLocations($locations)
    {
        $this->container['locations'] = $locations;

        return $this;
    }

    /**
     * Gets merchantTicketNo
     *
     * @return string|null
     */
    public function getMerchantTicketNo()
    {
        return $this->container['merchantTicketNo'];
    }

    /**
     * Sets merchantTicketNo
     *
     * @param string|null $merchantTicketNo 商户侧凭证ID或核销码
     *
     * @return self
     */
    public function setMerchantTicketNo($merchantTicketNo)
    {
        $this->container['merchantTicketNo'] = $merchantTicketNo;

        return $this;
    }

    /**
     * Gets seatInfos
     *
     * @return \Alipay\OpenAPISDK\Model\SeatInfo[]|null
     */
    public function getSeatInfos()
    {
        return $this->container['seatInfos'];
    }

    /**
     * Sets seatInfos
     *
     * @param \Alipay\OpenAPISDK\Model\SeatInfo[]|null $seatInfos 座位信息
     *
     * @return self
     */
    public function setSeatInfos($seatInfos)
    {
        $this->container['seatInfos'] = $seatInfos;

        return $this;
    }

    /**
     * Gets serviceProvider
     *
     * @return \Alipay\OpenAPISDK\Model\OrderParticipantInfo|null
     */
    public function getServiceProvider()
    {
        return $this->container['serviceProvider'];
    }

    /**
     * Sets serviceProvider
     *
     * @param \Alipay\OpenAPISDK\Model\OrderParticipantInfo|null $serviceProvider serviceProvider
     *
     * @return self
     */
    public function setServiceProvider($serviceProvider)
    {
        $this->container['serviceProvider'] = $serviceProvider;

        return $this;
    }

    /**
     * Gets shops
     *
     * @return \Alipay\OpenAPISDK\Model\OrderShopInfo[]|null
     */
    public function getShops()
    {
        return $this->container['shops'];
    }

    /**
     * Sets shops
     *
     * @param \Alipay\OpenAPISDK\Model\OrderShopInfo[]|null $shops 凭证可使用门店列表
     *
     * @return self
     */
    public function setShops($shops)
    {
        $this->container['shops'] = $shops;

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
     * @param string|null $startTime 凭证开始时间
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
     * @param string|null $status 凭证状态
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets ticketCreateTime
     *
     * @return string|null
     */
    public function getTicketCreateTime()
    {
        return $this->container['ticketCreateTime'];
    }

    /**
     * Sets ticketCreateTime
     *
     * @param string|null $ticketCreateTime 凭证创建时间
     *
     * @return self
     */
    public function setTicketCreateTime($ticketCreateTime)
    {
        $this->container['ticketCreateTime'] = $ticketCreateTime;

        return $this;
    }

    /**
     * Gets ticketModifyTime
     *
     * @return string|null
     */
    public function getTicketModifyTime()
    {
        return $this->container['ticketModifyTime'];
    }

    /**
     * Sets ticketModifyTime
     *
     * @param string|null $ticketModifyTime 凭证修改时间
     *
     * @return self
     */
    public function setTicketModifyTime($ticketModifyTime)
    {
        $this->container['ticketModifyTime'] = $ticketModifyTime;

        return $this;
    }

    /**
     * Gets ticketNum
     *
     * @return int|null
     */
    public function getTicketNum()
    {
        return $this->container['ticketNum'];
    }

    /**
     * Sets ticketNum
     *
     * @param int|null $ticketNum 凭证购买数
     *
     * @return self
     */
    public function setTicketNum($ticketNum)
    {
        $this->container['ticketNum'] = $ticketNum;

        return $this;
    }

    /**
     * Gets ticketUsers
     *
     * @return \Alipay\OpenAPISDK\Model\UserInfomation[]|null
     */
    public function getTicketUsers()
    {
        return $this->container['ticketUsers'];
    }

    /**
     * Sets ticketUsers
     *
     * @param \Alipay\OpenAPISDK\Model\UserInfomation[]|null $ticketUsers 凭证使用者信息
     *
     * @return self
     */
    public function setTicketUsers($ticketUsers)
    {
        $this->container['ticketUsers'] = $ticketUsers;

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
     * @param string|null $title 凭证标题
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets vehicleInfo
     *
     * @return \Alipay\OpenAPISDK\Model\OrderVehicleInfo|null
     */
    public function getVehicleInfo()
    {
        return $this->container['vehicleInfo'];
    }

    /**
     * Sets vehicleInfo
     *
     * @param \Alipay\OpenAPISDK\Model\OrderVehicleInfo|null $vehicleInfo vehicleInfo
     *
     * @return self
     */
    public function setVehicleInfo($vehicleInfo)
    {
        $this->container['vehicleInfo'] = $vehicleInfo;

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


