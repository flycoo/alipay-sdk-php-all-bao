<?php
/**
 * AlipayOfflineMarketShopModifyModel
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
 * AlipayOfflineMarketShopModifyModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOfflineMarketShopModifyModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOfflineMarketShopModifyModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'address' => 'string',
        'auditImages' => 'string',
        'authLetter' => 'string',
        'avgPrice' => 'string',
        'bizVersion' => 'string',
        'box' => 'string',
        'branchShopName' => 'string',
        'brandLogo' => 'string',
        'brandName' => 'string',
        'businessCertificate' => 'string',
        'businessCertificateExpires' => 'string',
        'businessTime' => 'string',
        'categoryId' => 'string',
        'cityCode' => 'string',
        'contactNumber' => 'string',
        'districtCode' => 'string',
        'implementId' => 'string',
        'isOperatingOnline' => 'string',
        'isShow' => 'string',
        'latitude' => 'string',
        'licence' => 'string',
        'licenceCode' => 'string',
        'licenceExpires' => 'string',
        'licenceName' => 'string',
        'longitude' => 'string',
        'mainImage' => 'string',
        'mainShopName' => 'string',
        'noSmoking' => 'string',
        'notifyMobile' => 'string',
        'notifyUrl' => 'string',
        'onlineImage' => 'string',
        'onlineUrl' => 'string',
        'opId' => 'string',
        'opRole' => 'string',
        'operateNotifyUrl' => 'string',
        'otherAuthorization' => 'string',
        'parking' => 'string',
        'partnerId' => 'string',
        'payType' => 'string',
        'provinceCode' => 'string',
        'requestId' => 'string',
        'shopId' => 'string',
        'storeId' => 'string',
        'valueAdded' => 'string',
        'version' => 'string',
        'wifi' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'address' => null,
        'auditImages' => null,
        'authLetter' => null,
        'avgPrice' => null,
        'bizVersion' => null,
        'box' => null,
        'branchShopName' => null,
        'brandLogo' => null,
        'brandName' => null,
        'businessCertificate' => null,
        'businessCertificateExpires' => null,
        'businessTime' => null,
        'categoryId' => null,
        'cityCode' => null,
        'contactNumber' => null,
        'districtCode' => null,
        'implementId' => null,
        'isOperatingOnline' => null,
        'isShow' => null,
        'latitude' => null,
        'licence' => null,
        'licenceCode' => null,
        'licenceExpires' => null,
        'licenceName' => null,
        'longitude' => null,
        'mainImage' => null,
        'mainShopName' => null,
        'noSmoking' => null,
        'notifyMobile' => null,
        'notifyUrl' => null,
        'onlineImage' => null,
        'onlineUrl' => null,
        'opId' => null,
        'opRole' => null,
        'operateNotifyUrl' => null,
        'otherAuthorization' => null,
        'parking' => null,
        'partnerId' => null,
        'payType' => null,
        'provinceCode' => null,
        'requestId' => null,
        'shopId' => null,
        'storeId' => null,
        'valueAdded' => null,
        'version' => null,
        'wifi' => null
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
        'address' => 'address',
        'auditImages' => 'audit_images',
        'authLetter' => 'auth_letter',
        'avgPrice' => 'avg_price',
        'bizVersion' => 'biz_version',
        'box' => 'box',
        'branchShopName' => 'branch_shop_name',
        'brandLogo' => 'brand_logo',
        'brandName' => 'brand_name',
        'businessCertificate' => 'business_certificate',
        'businessCertificateExpires' => 'business_certificate_expires',
        'businessTime' => 'business_time',
        'categoryId' => 'category_id',
        'cityCode' => 'city_code',
        'contactNumber' => 'contact_number',
        'districtCode' => 'district_code',
        'implementId' => 'implement_id',
        'isOperatingOnline' => 'is_operating_online',
        'isShow' => 'is_show',
        'latitude' => 'latitude',
        'licence' => 'licence',
        'licenceCode' => 'licence_code',
        'licenceExpires' => 'licence_expires',
        'licenceName' => 'licence_name',
        'longitude' => 'longitude',
        'mainImage' => 'main_image',
        'mainShopName' => 'main_shop_name',
        'noSmoking' => 'no_smoking',
        'notifyMobile' => 'notify_mobile',
        'notifyUrl' => 'notify_url',
        'onlineImage' => 'online_image',
        'onlineUrl' => 'online_url',
        'opId' => 'op_id',
        'opRole' => 'op_role',
        'operateNotifyUrl' => 'operate_notify_url',
        'otherAuthorization' => 'other_authorization',
        'parking' => 'parking',
        'partnerId' => 'partner_id',
        'payType' => 'pay_type',
        'provinceCode' => 'province_code',
        'requestId' => 'request_id',
        'shopId' => 'shop_id',
        'storeId' => 'store_id',
        'valueAdded' => 'value_added',
        'version' => 'version',
        'wifi' => 'wifi'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'auditImages' => 'setAuditImages',
        'authLetter' => 'setAuthLetter',
        'avgPrice' => 'setAvgPrice',
        'bizVersion' => 'setBizVersion',
        'box' => 'setBox',
        'branchShopName' => 'setBranchShopName',
        'brandLogo' => 'setBrandLogo',
        'brandName' => 'setBrandName',
        'businessCertificate' => 'setBusinessCertificate',
        'businessCertificateExpires' => 'setBusinessCertificateExpires',
        'businessTime' => 'setBusinessTime',
        'categoryId' => 'setCategoryId',
        'cityCode' => 'setCityCode',
        'contactNumber' => 'setContactNumber',
        'districtCode' => 'setDistrictCode',
        'implementId' => 'setImplementId',
        'isOperatingOnline' => 'setIsOperatingOnline',
        'isShow' => 'setIsShow',
        'latitude' => 'setLatitude',
        'licence' => 'setLicence',
        'licenceCode' => 'setLicenceCode',
        'licenceExpires' => 'setLicenceExpires',
        'licenceName' => 'setLicenceName',
        'longitude' => 'setLongitude',
        'mainImage' => 'setMainImage',
        'mainShopName' => 'setMainShopName',
        'noSmoking' => 'setNoSmoking',
        'notifyMobile' => 'setNotifyMobile',
        'notifyUrl' => 'setNotifyUrl',
        'onlineImage' => 'setOnlineImage',
        'onlineUrl' => 'setOnlineUrl',
        'opId' => 'setOpId',
        'opRole' => 'setOpRole',
        'operateNotifyUrl' => 'setOperateNotifyUrl',
        'otherAuthorization' => 'setOtherAuthorization',
        'parking' => 'setParking',
        'partnerId' => 'setPartnerId',
        'payType' => 'setPayType',
        'provinceCode' => 'setProvinceCode',
        'requestId' => 'setRequestId',
        'shopId' => 'setShopId',
        'storeId' => 'setStoreId',
        'valueAdded' => 'setValueAdded',
        'version' => 'setVersion',
        'wifi' => 'setWifi'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'auditImages' => 'getAuditImages',
        'authLetter' => 'getAuthLetter',
        'avgPrice' => 'getAvgPrice',
        'bizVersion' => 'getBizVersion',
        'box' => 'getBox',
        'branchShopName' => 'getBranchShopName',
        'brandLogo' => 'getBrandLogo',
        'brandName' => 'getBrandName',
        'businessCertificate' => 'getBusinessCertificate',
        'businessCertificateExpires' => 'getBusinessCertificateExpires',
        'businessTime' => 'getBusinessTime',
        'categoryId' => 'getCategoryId',
        'cityCode' => 'getCityCode',
        'contactNumber' => 'getContactNumber',
        'districtCode' => 'getDistrictCode',
        'implementId' => 'getImplementId',
        'isOperatingOnline' => 'getIsOperatingOnline',
        'isShow' => 'getIsShow',
        'latitude' => 'getLatitude',
        'licence' => 'getLicence',
        'licenceCode' => 'getLicenceCode',
        'licenceExpires' => 'getLicenceExpires',
        'licenceName' => 'getLicenceName',
        'longitude' => 'getLongitude',
        'mainImage' => 'getMainImage',
        'mainShopName' => 'getMainShopName',
        'noSmoking' => 'getNoSmoking',
        'notifyMobile' => 'getNotifyMobile',
        'notifyUrl' => 'getNotifyUrl',
        'onlineImage' => 'getOnlineImage',
        'onlineUrl' => 'getOnlineUrl',
        'opId' => 'getOpId',
        'opRole' => 'getOpRole',
        'operateNotifyUrl' => 'getOperateNotifyUrl',
        'otherAuthorization' => 'getOtherAuthorization',
        'parking' => 'getParking',
        'partnerId' => 'getPartnerId',
        'payType' => 'getPayType',
        'provinceCode' => 'getProvinceCode',
        'requestId' => 'getRequestId',
        'shopId' => 'getShopId',
        'storeId' => 'getStoreId',
        'valueAdded' => 'getValueAdded',
        'version' => 'getVersion',
        'wifi' => 'getWifi'
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
        $this->container['address'] = $data['address'] ?? null;
        $this->container['auditImages'] = $data['auditImages'] ?? null;
        $this->container['authLetter'] = $data['authLetter'] ?? null;
        $this->container['avgPrice'] = $data['avgPrice'] ?? null;
        $this->container['bizVersion'] = $data['bizVersion'] ?? null;
        $this->container['box'] = $data['box'] ?? null;
        $this->container['branchShopName'] = $data['branchShopName'] ?? null;
        $this->container['brandLogo'] = $data['brandLogo'] ?? null;
        $this->container['brandName'] = $data['brandName'] ?? null;
        $this->container['businessCertificate'] = $data['businessCertificate'] ?? null;
        $this->container['businessCertificateExpires'] = $data['businessCertificateExpires'] ?? null;
        $this->container['businessTime'] = $data['businessTime'] ?? null;
        $this->container['categoryId'] = $data['categoryId'] ?? null;
        $this->container['cityCode'] = $data['cityCode'] ?? null;
        $this->container['contactNumber'] = $data['contactNumber'] ?? null;
        $this->container['districtCode'] = $data['districtCode'] ?? null;
        $this->container['implementId'] = $data['implementId'] ?? null;
        $this->container['isOperatingOnline'] = $data['isOperatingOnline'] ?? null;
        $this->container['isShow'] = $data['isShow'] ?? null;
        $this->container['latitude'] = $data['latitude'] ?? null;
        $this->container['licence'] = $data['licence'] ?? null;
        $this->container['licenceCode'] = $data['licenceCode'] ?? null;
        $this->container['licenceExpires'] = $data['licenceExpires'] ?? null;
        $this->container['licenceName'] = $data['licenceName'] ?? null;
        $this->container['longitude'] = $data['longitude'] ?? null;
        $this->container['mainImage'] = $data['mainImage'] ?? null;
        $this->container['mainShopName'] = $data['mainShopName'] ?? null;
        $this->container['noSmoking'] = $data['noSmoking'] ?? null;
        $this->container['notifyMobile'] = $data['notifyMobile'] ?? null;
        $this->container['notifyUrl'] = $data['notifyUrl'] ?? null;
        $this->container['onlineImage'] = $data['onlineImage'] ?? null;
        $this->container['onlineUrl'] = $data['onlineUrl'] ?? null;
        $this->container['opId'] = $data['opId'] ?? null;
        $this->container['opRole'] = $data['opRole'] ?? null;
        $this->container['operateNotifyUrl'] = $data['operateNotifyUrl'] ?? null;
        $this->container['otherAuthorization'] = $data['otherAuthorization'] ?? null;
        $this->container['parking'] = $data['parking'] ?? null;
        $this->container['partnerId'] = $data['partnerId'] ?? null;
        $this->container['payType'] = $data['payType'] ?? null;
        $this->container['provinceCode'] = $data['provinceCode'] ?? null;
        $this->container['requestId'] = $data['requestId'] ?? null;
        $this->container['shopId'] = $data['shopId'] ?? null;
        $this->container['storeId'] = $data['storeId'] ?? null;
        $this->container['valueAdded'] = $data['valueAdded'] ?? null;
        $this->container['version'] = $data['version'] ?? null;
        $this->container['wifi'] = $data['wifi'] ?? null;
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
     * Gets address
     *
     * @return string|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string|null $address 门店详细地址，地址字符长度在4-50个字符。门店详细地址，格式（不含省市区）：例1：道路+门牌号，“人民东路18号”；例2：道路+门牌号+标志性建筑+楼层；注：门店详细地址按规范格式填写地址，以免影响门店搜索及活动报名
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets auditImages
     *
     * @return string|null
     */
    public function getAuditImages()
    {
        return $this->container['auditImages'];
    }

    /**
     * Sets auditImages
     *
     * @param string|null $auditImages 门店审核时需要的图片; 至少包含一张门头照片，两张内景照片，必须反映真实的门店情况，审核才能够通过， 多个以英文逗号分隔。
     *
     * @return self
     */
    public function setAuditImages($auditImages)
    {
        $this->container['auditImages'] = $auditImages;

        return $this;
    }

    /**
     * Gets authLetter
     *
     * @return string|null
     */
    public function getAuthLetter()
    {
        return $this->container['authLetter'];
    }

    /**
     * Sets authLetter
     *
     * @param string|null $authLetter 门店授权函。
     *
     * @return self
     */
    public function setAuthLetter($authLetter)
    {
        $this->container['authLetter'] = $authLetter;

        return $this;
    }

    /**
     * Gets avgPrice
     *
     * @return string|null
     */
    public function getAvgPrice()
    {
        return $this->container['avgPrice'];
    }

    /**
     * Sets avgPrice
     *
     * @param string|null $avgPrice 人均消费价格，最少1元，最大不超过99999元，请按实际情况填写，单位元。
     *
     * @return self
     */
    public function setAvgPrice($avgPrice)
    {
        $this->container['avgPrice'] = $avgPrice;

        return $this;
    }

    /**
     * Gets bizVersion
     *
     * @return string|null
     */
    public function getBizVersion()
    {
        return $this->container['bizVersion'];
    }

    /**
     * Sets bizVersion
     *
     * @param string|null $bizVersion 店铺接口业务版本号，新接入的ISV，请统一传入2.0。
     *
     * @return self
     */
    public function setBizVersion($bizVersion)
    {
        $this->container['bizVersion'] = $bizVersion;

        return $this;
    }

    /**
     * Gets box
     *
     * @return string|null
     */
    public function getBox()
    {
        return $this->container['box'];
    }

    /**
     * Sets box
     *
     * @param string|null $box 包厢支持，T表示有包厢，F表示无包厢；不传值默认F。
     *
     * @return self
     */
    public function setBox($box)
    {
        $this->container['box'] = $box;

        return $this;
    }

    /**
     * Gets branchShopName
     *
     * @return string|null
     */
    public function getBranchShopName()
    {
        return $this->container['branchShopName'];
    }

    /**
     * Sets branchShopName
     *
     * @param string|null $branchShopName 分店名称，比如：万塘路店，与主门店名合并在客户端显示为：肯德基(万塘路店)。分店名长度需在2~20个字符之间。
     *
     * @return self
     */
    public function setBranchShopName($branchShopName)
    {
        $this->container['branchShopName'] = $branchShopName;

        return $this;
    }

    /**
     * Gets brandLogo
     *
     * @return string|null
     */
    public function getBrandLogo()
    {
        return $this->container['brandLogo'];
    }

    /**
     * Sets brandLogo
     *
     * @param string|null $brandLogo 品牌LOGO; 图片ID，不填写则默认为门店首图main_image。
     *
     * @return self
     */
    public function setBrandLogo($brandLogo)
    {
        $this->container['brandLogo'] = $brandLogo;

        return $this;
    }

    /**
     * Gets brandName
     *
     * @return string|null
     */
    public function getBrandName()
    {
        return $this->container['brandName'];
    }

    /**
     * Sets brandName
     *
     * @param string|null $brandName 品牌名称；不填写则默认为“其它品牌”。
     *
     * @return self
     */
    public function setBrandName($brandName)
    {
        $this->container['brandName'] = $brandName;

        return $this;
    }

    /**
     * Gets businessCertificate
     *
     * @return string|null
     */
    public function getBusinessCertificate()
    {
        return $this->container['businessCertificate'];
    }

    /**
     * Sets businessCertificate
     *
     * @param string|null $businessCertificate 许可证，各行业所需的证照资质参见<a href=\"https://doc.open.alipay.com/doc2/detail.htm?treeId=205&articleId=104497&docType=1\">商户入驻要求</a>；该字段只能上传一张许可证，一张以外的许可证、除营业执照和许可证之外其他证照请放在其他资质字段上传。
     *
     * @return self
     */
    public function setBusinessCertificate($businessCertificate)
    {
        $this->container['businessCertificate'] = $businessCertificate;

        return $this;
    }

    /**
     * Gets businessCertificateExpires
     *
     * @return string|null
     */
    public function getBusinessCertificateExpires()
    {
        return $this->container['businessCertificateExpires'];
    }

    /**
     * Sets businessCertificateExpires
     *
     * @param string|null $businessCertificateExpires 许可证有效期，格式：2020-03-20或长期。严格按照格式填写。
     *
     * @return self
     */
    public function setBusinessCertificateExpires($businessCertificateExpires)
    {
        $this->container['businessCertificateExpires'] = $businessCertificateExpires;

        return $this;
    }

    /**
     * Gets businessTime
     *
     * @return string|null
     */
    public function getBusinessTime()
    {
        return $this->container['businessTime'];
    }

    /**
     * Sets businessTime
     *
     * @param string|null $businessTime 请严格按\"周一-周五 09:00-20:00,周六-周日 10:00-22:00\"的格式进行填写，时间段不能重复，最多支持两个时间段，24小时营业请填写\"00:00-23:59\"
     *
     * @return self
     */
    public function setBusinessTime($businessTime)
    {
        $this->container['businessTime'] = $businessTime;

        return $this;
    }

    /**
     * Gets categoryId
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['categoryId'];
    }

    /**
     * Sets categoryId
     *
     * @param string|null $categoryId 废弃字段，不支持修改类目。  类目id，请参考<a href=\"https://doc.open.alipay.com/doc2/detail.htm?treeId=205&articleId=104497&docType=1\">商户入驻要求</a>。
     *
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->container['categoryId'] = $categoryId;

        return $this;
    }

    /**
     * Gets cityCode
     *
     * @return string|null
     */
    public function getCityCode()
    {
        return $this->container['cityCode'];
    }

    /**
     * Sets cityCode
     *
     * @param string|null $cityCode 城市编码，国标码，详见国家统计局数据 <a href=\"http://aopsdkdownload.cn-hangzhou.alipay-pub.aliyun-inc.com/doc/2016.xls\">点此下载</a>。
     *
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->container['cityCode'] = $cityCode;

        return $this;
    }

    /**
     * Gets contactNumber
     *
     * @return string|null
     */
    public function getContactNumber()
    {
        return $this->container['contactNumber'];
    }

    /**
     * Sets contactNumber
     *
     * @param string|null $contactNumber 门店电话号码；支持座机和手机，在客户端对用户展现，支持多个电话，以英文逗号分隔。
     *
     * @return self
     */
    public function setContactNumber($contactNumber)
    {
        $this->container['contactNumber'] = $contactNumber;

        return $this;
    }

    /**
     * Gets districtCode
     *
     * @return string|null
     */
    public function getDistrictCode()
    {
        return $this->container['districtCode'];
    }

    /**
     * Sets districtCode
     *
     * @param string|null $districtCode 区县编码，国标码，详见国家统计局数据 <a href=\"http://aopsdkdownload.cn-hangzhou.alipay-pub.aliyun-inc.com/doc/2016.xls\">点此下载</a>。
     *
     * @return self
     */
    public function setDistrictCode($districtCode)
    {
        $this->container['districtCode'] = $districtCode;

        return $this;
    }

    /**
     * Gets implementId
     *
     * @return string|null
     */
    public function getImplementId()
    {
        return $this->container['implementId'];
    }

    /**
     * Sets implementId
     *
     * @param string|null $implementId 店铺使用的机具编号，多个以英文逗号分隔。
     *
     * @return self
     */
    public function setImplementId($implementId)
    {
        $this->container['implementId'] = $implementId;

        return $this;
    }

    /**
     * Gets isOperatingOnline
     *
     * @return string|null
     */
    public function getIsOperatingOnline()
    {
        return $this->container['isOperatingOnline'];
    }

    /**
     * Sets isOperatingOnline
     *
     * @param string|null $isOperatingOnline 是否在其他平台开店，T表示有开店，F表示未开店。
     *
     * @return self
     */
    public function setIsOperatingOnline($isOperatingOnline)
    {
        $this->container['isOperatingOnline'] = $isOperatingOnline;

        return $this;
    }

    /**
     * Gets isShow
     *
     * @return string|null
     */
    public function getIsShow()
    {
        return $this->container['isShow'];
    }

    /**
     * Sets isShow
     *
     * @param string|null $isShow 废弃字段，T表示显示，F表示隐藏，默认为T。
     *
     * @return self
     */
    public function setIsShow($isShow)
    {
        $this->container['isShow'] = $isShow;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude 纬度，注：高德坐标系。经纬度是门店搜索和活动推荐的重要参数，录入时请确保经纬度参数准确。高德经纬度查询：http://lbs.amap.com/console/show/picker
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets licence
     *
     * @return string|null
     */
    public function getLicence()
    {
        return $this->container['licence'];
    }

    /**
     * Sets licence
     *
     * @param string|null $licence 门店营业执照图片，各行业所需的证照资质参见：https://doc.open.alipay.com/doc2/detail.htm?spm=a219a.7629140.0.0.NBvQVP&treeId=78&articleId=104497&docType=1。
     *
     * @return self
     */
    public function setLicence($licence)
    {
        $this->container['licence'] = $licence;

        return $this;
    }

    /**
     * Gets licenceCode
     *
     * @return string|null
     */
    public function getLicenceCode()
    {
        return $this->container['licenceCode'];
    }

    /**
     * Sets licenceCode
     *
     * @param string|null $licenceCode 门店营业执照编号。只支持输入中文，英文和数字。
     *
     * @return self
     */
    public function setLicenceCode($licenceCode)
    {
        $this->container['licenceCode'] = $licenceCode;

        return $this;
    }

    /**
     * Gets licenceExpires
     *
     * @return string|null
     */
    public function getLicenceExpires()
    {
        return $this->container['licenceExpires'];
    }

    /**
     * Sets licenceExpires
     *
     * @param string|null $licenceExpires 营业执照过期时间。格式：2020-10-20或长期。严格按照格式填写。
     *
     * @return self
     */
    public function setLicenceExpires($licenceExpires)
    {
        $this->container['licenceExpires'] = $licenceExpires;

        return $this;
    }

    /**
     * Gets licenceName
     *
     * @return string|null
     */
    public function getLicenceName()
    {
        return $this->container['licenceName'];
    }

    /**
     * Sets licenceName
     *
     * @param string|null $licenceName 门店营业执照名称。
     *
     * @return self
     */
    public function setLicenceName($licenceName)
    {
        $this->container['licenceName'] = $licenceName;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude 经度，注：高德坐标系。经纬度是门店搜索和活动推荐的重要参数，录入时请确保经纬度参数准确。高德经纬度查询：http://lbs.amap.com/console/show/picker
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets mainImage
     *
     * @return string|null
     */
    public function getMainImage()
    {
        return $this->container['mainImage'];
    }

    /**
     * Sets mainImage
     *
     * @param string|null $mainImage 门店首图；非常重要，推荐尺寸2000*1500。
     *
     * @return self
     */
    public function setMainImage($mainImage)
    {
        $this->container['mainImage'] = $mainImage;

        return $this;
    }

    /**
     * Gets mainShopName
     *
     * @return string|null
     */
    public function getMainShopName()
    {
        return $this->container['mainShopName'];
    }

    /**
     * Sets mainShopName
     *
     * @param string|null $mainShopName 主门店名  比如：肯德基；主店名里不要包含分店名，如“万塘路店”。主店名长度不能超过20个字符。【xxx店】、(xxx店)、（xxx店）、[xxx店]、<xxx店>、xxx店，等类似的主店名都是不合法的，如果需要录入分店，请填写到branch_shop_name字段中。
     *
     * @return self
     */
    public function setMainShopName($mainShopName)
    {
        $this->container['mainShopName'] = $mainShopName;

        return $this;
    }

    /**
     * Gets noSmoking
     *
     * @return string|null
     */
    public function getNoSmoking()
    {
        return $this->container['noSmoking'];
    }

    /**
     * Sets noSmoking
     *
     * @param string|null $noSmoking 无烟区支持，T表示禁烟，F表示不禁烟；不传值默认F。
     *
     * @return self
     */
    public function setNoSmoking($noSmoking)
    {
        $this->container['noSmoking'] = $noSmoking;

        return $this;
    }

    /**
     * Gets notifyMobile
     *
     * @return string|null
     */
    public function getNotifyMobile()
    {
        return $this->container['notifyMobile'];
    }

    /**
     * Sets notifyMobile
     *
     * @param string|null $notifyMobile 门店店长电话号码；用于接收门店状态变更通知，收款成功通知等通知消息，不在客户端展示；多个以引文逗号分隔。
     *
     * @return self
     */
    public function setNotifyMobile($notifyMobile)
    {
        $this->container['notifyMobile'] = $notifyMobile;

        return $this;
    }

    /**
     * Gets notifyUrl
     *
     * @return string|null
     */
    public function getNotifyUrl()
    {
        return $this->container['notifyUrl'];
    }

    /**
     * Sets notifyUrl
     *
     * @param string|null $notifyUrl 通知地址
     *
     * @return self
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->container['notifyUrl'] = $notifyUrl;

        return $this;
    }

    /**
     * Gets onlineImage
     *
     * @return string|null
     */
    public function getOnlineImage()
    {
        return $this->container['onlineImage'];
    }

    /**
     * Sets onlineImage
     *
     * @param string|null $onlineImage 废弃字段，请使用online_url字段替代。
     *
     * @return self
     */
    public function setOnlineImage($onlineImage)
    {
        $this->container['onlineImage'] = $onlineImage;

        return $this;
    }

    /**
     * Gets onlineUrl
     *
     * @return string|null
     */
    public function getOnlineUrl()
    {
        return $this->container['onlineUrl'];
    }

    /**
     * Sets onlineUrl
     *
     * @param string|null $onlineUrl 其他平台开店的店铺链接url,多个url使用英文逗号隔开，isv迁移到新接口使用此字段，与is_operating_online=T配套使用。
     *
     * @return self
     */
    public function setOnlineUrl($onlineUrl)
    {
        $this->container['onlineUrl'] = $onlineUrl;

        return $this;
    }

    /**
     * Gets opId
     *
     * @return string|null
     */
    public function getOpId()
    {
        return $this->container['opId'];
    }

    /**
     * Sets opId
     *
     * @param string|null $opId （支付宝内部参数）操作员的支付账号ID(服务商ID、城市经理ID)。
     *
     * @return self
     */
    public function setOpId($opId)
    {
        $this->container['opId'] = $opId;

        return $this;
    }

    /**
     * Gets opRole
     *
     * @return string|null
     */
    public function getOpRole()
    {
        return $this->container['opRole'];
    }

    /**
     * Sets opRole
     *
     * @param string|null $opRole 表示以系统集成商的身份开店，开放平台现在统一传入ISV。
     *
     * @return self
     */
    public function setOpRole($opRole)
    {
        $this->container['opRole'] = $opRole;

        return $this;
    }

    /**
     * Gets operateNotifyUrl
     *
     * @return string|null
     */
    public function getOperateNotifyUrl()
    {
        return $this->container['operateNotifyUrl'];
    }

    /**
     * Sets operateNotifyUrl
     *
     * @param string|null $operateNotifyUrl 通知发送url;当商户的门店审核状态发生变化时，会向该地址推送消息。
     *
     * @return self
     */
    public function setOperateNotifyUrl($operateNotifyUrl)
    {
        $this->container['operateNotifyUrl'] = $operateNotifyUrl;

        return $this;
    }

    /**
     * Gets otherAuthorization
     *
     * @return string|null
     */
    public function getOtherAuthorization()
    {
        return $this->container['otherAuthorization'];
    }

    /**
     * Sets otherAuthorization
     *
     * @param string|null $otherAuthorization 其他资质。用于上传营业证照、许可证照外的其他资质，除已上传许可证外的其他许可证也可以在该字段上传。
     *
     * @return self
     */
    public function setOtherAuthorization($otherAuthorization)
    {
        $this->container['otherAuthorization'] = $otherAuthorization;

        return $this;
    }

    /**
     * Gets parking
     *
     * @return string|null
     */
    public function getParking()
    {
        return $this->container['parking'];
    }

    /**
     * Sets parking
     *
     * @param string|null $parking 门店是否支持停车，T表示支持，F表示不支持，不传在客户端不作展示。
     *
     * @return self
     */
    public function setParking($parking)
    {
        $this->container['parking'] = $parking;

        return $this;
    }

    /**
     * Gets partnerId
     *
     * @return string|null
     */
    public function getPartnerId()
    {
        return $this->container['partnerId'];
    }

    /**
     * Sets partnerId
     *
     * @param string|null $partnerId （支付宝内部参数）服务商要操作的商户PID。
     *
     * @return self
     */
    public function setPartnerId($partnerId)
    {
        $this->container['partnerId'] = $partnerId;

        return $this;
    }

    /**
     * Gets payType
     *
     * @return string|null
     */
    public function getPayType()
    {
        return $this->container['payType'];
    }

    /**
     * Sets payType
     *
     * @param string|null $payType （支付宝内部参数）付款方式：code_scanned_pay：付款码   online_pay：在线买单。ISV不可以指定此字段，ISV泛行业开店默认为在线买单，云纵开店可以指定支付方式。
     *
     * @return self
     */
    public function setPayType($payType)
    {
        $this->container['payType'] = $payType;

        return $this;
    }

    /**
     * Gets provinceCode
     *
     * @return string|null
     */
    public function getProvinceCode()
    {
        return $this->container['provinceCode'];
    }

    /**
     * Sets provinceCode
     *
     * @param string|null $provinceCode 省份编码，国标码，详见国家统计局数据 <a href=\"http://aopsdkdownload.cn-hangzhou.alipay-pub.aliyun-inc.com/doc/2016.xls\">点此下载”</a>。
     *
     * @return self
     */
    public function setProvinceCode($provinceCode)
    {
        $this->container['provinceCode'] = $provinceCode;

        return $this;
    }

    /**
     * Gets requestId
     *
     * @return string|null
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     *
     * @param string|null $requestId 外部请求ID; 标识ISV本次修改的请求，由开发者自定义，不同的请求使用不同的ID，在门店notify消息中也会带有该参数，以此标明本次notify消息是对哪个请求的回应
     *
     * @return self
     */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return string|null
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param string|null $shopId 支付宝门店ID。
     *
     * @return self
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets storeId
     *
     * @return string|null
     */
    public function getStoreId()
    {
        return $this->container['storeId'];
    }

    /**
     * Sets storeId
     *
     * @param string|null $storeId 外部门店编号；最长32位字符，该编号将作为收单接口的入参， 请开发者自行确保其唯一性。
     *
     * @return self
     */
    public function setStoreId($storeId)
    {
        $this->container['storeId'] = $storeId;

        return $this;
    }

    /**
     * Gets valueAdded
     *
     * @return string|null
     */
    public function getValueAdded()
    {
        return $this->container['valueAdded'];
    }

    /**
     * Sets valueAdded
     *
     * @param string|null $valueAdded 门店其他的服务，门店与用户线下兑现。
     *
     * @return self
     */
    public function setValueAdded($valueAdded)
    {
        $this->container['valueAdded'] = $valueAdded;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version 废弃字段，使用biz_version字段替代。
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets wifi
     *
     * @return string|null
     */
    public function getWifi()
    {
        return $this->container['wifi'];
    }

    /**
     * Sets wifi
     *
     * @param string|null $wifi 门店是否支持WIFI，T表示支持，F表示不支持，不传在客户端不作展示。
     *
     * @return self
     */
    public function setWifi($wifi)
    {
        $this->container['wifi'] = $wifi;

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


