<?php
/**
 * AlipayOpenMiniInnerversionUploadModel
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
 * AlipayOpenMiniInnerversionUploadModel Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class AlipayOpenMiniInnerversionUploadModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AlipayOpenMiniInnerversionUploadModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'appOrigin' => 'string',
        'buildAppType' => 'string',
        'buildExtraInfo' => 'string',
        'buildExtraMiniProjectConfig' => 'string',
        'buildJsPermission' => 'string',
        'buildMainUrl' => 'string',
        'buildMaxAndroidClientVersion' => 'string',
        'buildMaxIosClientVersion' => 'string',
        'buildMinAndroidClientVersion' => 'string',
        'buildMinIosClientVersion' => 'string',
        'buildPackageMd5' => 'string',
        'buildPackageName' => 'string',
        'buildPackageStream' => 'string',
        'buildQcloudInfo' => 'string',
        'buildSignedPkgUrl' => 'string',
        'buildSourcePkgSize' => 'string',
        'buildSourcePkgUrl' => 'string',
        'buildSubUrl' => 'string',
        'buildVersion' => 'string',
        'buildedPackageSize' => 'string',
        'buildedPackageUrl' => 'string',
        'bundleId' => 'string',
        'clientType' => 'string',
        'instCode' => 'string',
        'miniAppId' => 'string',
        'pluginRefs' => '\Alipay\OpenAPISDK\Model\MiniAppPluginReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'appOrigin' => null,
        'buildAppType' => null,
        'buildExtraInfo' => null,
        'buildExtraMiniProjectConfig' => null,
        'buildJsPermission' => null,
        'buildMainUrl' => null,
        'buildMaxAndroidClientVersion' => null,
        'buildMaxIosClientVersion' => null,
        'buildMinAndroidClientVersion' => null,
        'buildMinIosClientVersion' => null,
        'buildPackageMd5' => null,
        'buildPackageName' => null,
        'buildPackageStream' => null,
        'buildQcloudInfo' => null,
        'buildSignedPkgUrl' => null,
        'buildSourcePkgSize' => null,
        'buildSourcePkgUrl' => null,
        'buildSubUrl' => null,
        'buildVersion' => null,
        'buildedPackageSize' => null,
        'buildedPackageUrl' => null,
        'bundleId' => null,
        'clientType' => null,
        'instCode' => null,
        'miniAppId' => null,
        'pluginRefs' => null
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
        'appOrigin' => 'app_origin',
        'buildAppType' => 'build_app_type',
        'buildExtraInfo' => 'build_extra_info',
        'buildExtraMiniProjectConfig' => 'build_extra_mini_project_config',
        'buildJsPermission' => 'build_js_permission',
        'buildMainUrl' => 'build_main_url',
        'buildMaxAndroidClientVersion' => 'build_max_android_client_version',
        'buildMaxIosClientVersion' => 'build_max_ios_client_version',
        'buildMinAndroidClientVersion' => 'build_min_android_client_version',
        'buildMinIosClientVersion' => 'build_min_ios_client_version',
        'buildPackageMd5' => 'build_package_md_5',
        'buildPackageName' => 'build_package_name',
        'buildPackageStream' => 'build_package_stream',
        'buildQcloudInfo' => 'build_qcloud_info',
        'buildSignedPkgUrl' => 'build_signed_pkg_url',
        'buildSourcePkgSize' => 'build_source_pkg_size',
        'buildSourcePkgUrl' => 'build_source_pkg_url',
        'buildSubUrl' => 'build_sub_url',
        'buildVersion' => 'build_version',
        'buildedPackageSize' => 'builded_package_size',
        'buildedPackageUrl' => 'builded_package_url',
        'bundleId' => 'bundle_id',
        'clientType' => 'client_type',
        'instCode' => 'inst_code',
        'miniAppId' => 'mini_app_id',
        'pluginRefs' => 'plugin_refs'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'appOrigin' => 'setAppOrigin',
        'buildAppType' => 'setBuildAppType',
        'buildExtraInfo' => 'setBuildExtraInfo',
        'buildExtraMiniProjectConfig' => 'setBuildExtraMiniProjectConfig',
        'buildJsPermission' => 'setBuildJsPermission',
        'buildMainUrl' => 'setBuildMainUrl',
        'buildMaxAndroidClientVersion' => 'setBuildMaxAndroidClientVersion',
        'buildMaxIosClientVersion' => 'setBuildMaxIosClientVersion',
        'buildMinAndroidClientVersion' => 'setBuildMinAndroidClientVersion',
        'buildMinIosClientVersion' => 'setBuildMinIosClientVersion',
        'buildPackageMd5' => 'setBuildPackageMd5',
        'buildPackageName' => 'setBuildPackageName',
        'buildPackageStream' => 'setBuildPackageStream',
        'buildQcloudInfo' => 'setBuildQcloudInfo',
        'buildSignedPkgUrl' => 'setBuildSignedPkgUrl',
        'buildSourcePkgSize' => 'setBuildSourcePkgSize',
        'buildSourcePkgUrl' => 'setBuildSourcePkgUrl',
        'buildSubUrl' => 'setBuildSubUrl',
        'buildVersion' => 'setBuildVersion',
        'buildedPackageSize' => 'setBuildedPackageSize',
        'buildedPackageUrl' => 'setBuildedPackageUrl',
        'bundleId' => 'setBundleId',
        'clientType' => 'setClientType',
        'instCode' => 'setInstCode',
        'miniAppId' => 'setMiniAppId',
        'pluginRefs' => 'setPluginRefs'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'appOrigin' => 'getAppOrigin',
        'buildAppType' => 'getBuildAppType',
        'buildExtraInfo' => 'getBuildExtraInfo',
        'buildExtraMiniProjectConfig' => 'getBuildExtraMiniProjectConfig',
        'buildJsPermission' => 'getBuildJsPermission',
        'buildMainUrl' => 'getBuildMainUrl',
        'buildMaxAndroidClientVersion' => 'getBuildMaxAndroidClientVersion',
        'buildMaxIosClientVersion' => 'getBuildMaxIosClientVersion',
        'buildMinAndroidClientVersion' => 'getBuildMinAndroidClientVersion',
        'buildMinIosClientVersion' => 'getBuildMinIosClientVersion',
        'buildPackageMd5' => 'getBuildPackageMd5',
        'buildPackageName' => 'getBuildPackageName',
        'buildPackageStream' => 'getBuildPackageStream',
        'buildQcloudInfo' => 'getBuildQcloudInfo',
        'buildSignedPkgUrl' => 'getBuildSignedPkgUrl',
        'buildSourcePkgSize' => 'getBuildSourcePkgSize',
        'buildSourcePkgUrl' => 'getBuildSourcePkgUrl',
        'buildSubUrl' => 'getBuildSubUrl',
        'buildVersion' => 'getBuildVersion',
        'buildedPackageSize' => 'getBuildedPackageSize',
        'buildedPackageUrl' => 'getBuildedPackageUrl',
        'bundleId' => 'getBundleId',
        'clientType' => 'getClientType',
        'instCode' => 'getInstCode',
        'miniAppId' => 'getMiniAppId',
        'pluginRefs' => 'getPluginRefs'
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
        $this->container['appOrigin'] = $data['appOrigin'] ?? null;
        $this->container['buildAppType'] = $data['buildAppType'] ?? null;
        $this->container['buildExtraInfo'] = $data['buildExtraInfo'] ?? null;
        $this->container['buildExtraMiniProjectConfig'] = $data['buildExtraMiniProjectConfig'] ?? null;
        $this->container['buildJsPermission'] = $data['buildJsPermission'] ?? null;
        $this->container['buildMainUrl'] = $data['buildMainUrl'] ?? null;
        $this->container['buildMaxAndroidClientVersion'] = $data['buildMaxAndroidClientVersion'] ?? null;
        $this->container['buildMaxIosClientVersion'] = $data['buildMaxIosClientVersion'] ?? null;
        $this->container['buildMinAndroidClientVersion'] = $data['buildMinAndroidClientVersion'] ?? null;
        $this->container['buildMinIosClientVersion'] = $data['buildMinIosClientVersion'] ?? null;
        $this->container['buildPackageMd5'] = $data['buildPackageMd5'] ?? null;
        $this->container['buildPackageName'] = $data['buildPackageName'] ?? null;
        $this->container['buildPackageStream'] = $data['buildPackageStream'] ?? null;
        $this->container['buildQcloudInfo'] = $data['buildQcloudInfo'] ?? null;
        $this->container['buildSignedPkgUrl'] = $data['buildSignedPkgUrl'] ?? null;
        $this->container['buildSourcePkgSize'] = $data['buildSourcePkgSize'] ?? null;
        $this->container['buildSourcePkgUrl'] = $data['buildSourcePkgUrl'] ?? null;
        $this->container['buildSubUrl'] = $data['buildSubUrl'] ?? null;
        $this->container['buildVersion'] = $data['buildVersion'] ?? null;
        $this->container['buildedPackageSize'] = $data['buildedPackageSize'] ?? null;
        $this->container['buildedPackageUrl'] = $data['buildedPackageUrl'] ?? null;
        $this->container['bundleId'] = $data['bundleId'] ?? null;
        $this->container['clientType'] = $data['clientType'] ?? null;
        $this->container['instCode'] = $data['instCode'] ?? null;
        $this->container['miniAppId'] = $data['miniAppId'] ?? null;
        $this->container['pluginRefs'] = $data['pluginRefs'] ?? null;
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
     * Gets appOrigin
     *
     * @return string|null
     */
    public function getAppOrigin()
    {
        return $this->container['appOrigin'];
    }

    /**
     * Sets appOrigin
     *
     * @param string|null $appOrigin 业务来源，新接入方需要向支付宝申请专用来源，否则不予接入。https://yuque.antfin-inc.com/tinyapp-all/qddncu/bidushixiang
     *
     * @return self
     */
    public function setAppOrigin($appOrigin)
    {
        $this->container['appOrigin'] = $appOrigin;

        return $this;
    }

    /**
     * Gets buildAppType
     *
     * @return string|null
     */
    public function getBuildAppType()
    {
        return $this->container['buildAppType'];
    }

    /**
     * Sets buildAppType
     *
     * @param string|null $buildAppType IDE开发打包类型，写死tinyApp
     *
     * @return self
     */
    public function setBuildAppType($buildAppType)
    {
        $this->container['buildAppType'] = $buildAppType;

        return $this;
    }

    /**
     * Gets buildExtraInfo
     *
     * @return string|null
     */
    public function getBuildExtraInfo()
    {
        return $this->container['buildExtraInfo'];
    }

    /**
     * Sets buildExtraInfo
     *
     * @param string|null $buildExtraInfo 扩展信息，比如adaptorName、tinycliVersion、tinycliName、import-module、allowPrecompile、extJson、allowInstallDependency、aggregationMainAppId，如果没有特殊要求，tinycliVersion版本请用最新的： https://registry.npm.alibaba-inc.com/@alipay/tiny-cli/huoban-prod
     *
     * @return self
     */
    public function setBuildExtraInfo($buildExtraInfo)
    {
        $this->container['buildExtraInfo'] = $buildExtraInfo;

        return $this;
    }

    /**
     * Gets buildExtraMiniProjectConfig
     *
     * @return string|null
     */
    public function getBuildExtraMiniProjectConfig()
    {
        return $this->container['buildExtraMiniProjectConfig'];
    }

    /**
     * Sets buildExtraMiniProjectConfig
     *
     * @param string|null $buildExtraMiniProjectConfig 用于覆盖开发者配置字段，实现止血和灰度逻辑
     *
     * @return self
     */
    public function setBuildExtraMiniProjectConfig($buildExtraMiniProjectConfig)
    {
        $this->container['buildExtraMiniProjectConfig'] = $buildExtraMiniProjectConfig;

        return $this;
    }

    /**
     * Gets buildJsPermission
     *
     * @return string|null
     */
    public function getBuildJsPermission()
    {
        return $this->container['buildJsPermission'];
    }

    /**
     * Sets buildJsPermission
     *
     * @param string|null $buildJsPermission jsapi 权限文件,钉钉外请勿传
     *
     * @return self
     */
    public function setBuildJsPermission($buildJsPermission)
    {
        $this->container['buildJsPermission'] = $buildJsPermission;

        return $this;
    }

    /**
     * Gets buildMainUrl
     *
     * @return string|null
     */
    public function getBuildMainUrl()
    {
        return $this->container['buildMainUrl'];
    }

    /**
     * Sets buildMainUrl
     *
     * @param string|null $buildMainUrl 小程序页面主入口。/index.html#page/component/index，该值需要和extendInfo中的page参数保持一致
     *
     * @return self
     */
    public function setBuildMainUrl($buildMainUrl)
    {
        $this->container['buildMainUrl'] = $buildMainUrl;

        return $this;
    }

    /**
     * Gets buildMaxAndroidClientVersion
     *
     * @return string|null
     */
    public function getBuildMaxAndroidClientVersion()
    {
        return $this->container['buildMaxAndroidClientVersion'];
    }

    /**
     * Sets buildMaxAndroidClientVersion
     *
     * @param string|null $buildMaxAndroidClientVersion 最大Android客户端版本号，禁止使用，如果需要使用请联系小程序平台评估，否则端上会出现问题
     *
     * @return self
     */
    public function setBuildMaxAndroidClientVersion($buildMaxAndroidClientVersion)
    {
        $this->container['buildMaxAndroidClientVersion'] = $buildMaxAndroidClientVersion;

        return $this;
    }

    /**
     * Gets buildMaxIosClientVersion
     *
     * @return string|null
     */
    public function getBuildMaxIosClientVersion()
    {
        return $this->container['buildMaxIosClientVersion'];
    }

    /**
     * Sets buildMaxIosClientVersion
     *
     * @param string|null $buildMaxIosClientVersion 最大iOS客户单版本号，禁止使用，如果需要使用请联系小程序平台评估，否则端上会出现问题
     *
     * @return self
     */
    public function setBuildMaxIosClientVersion($buildMaxIosClientVersion)
    {
        $this->container['buildMaxIosClientVersion'] = $buildMaxIosClientVersion;

        return $this;
    }

    /**
     * Gets buildMinAndroidClientVersion
     *
     * @return string|null
     */
    public function getBuildMinAndroidClientVersion()
    {
        return $this->container['buildMinAndroidClientVersion'];
    }

    /**
     * Sets buildMinAndroidClientVersion
     *
     * @param string|null $buildMinAndroidClientVersion 最小Android客户端版本号，禁止使用，如果需要使用请联系小程序平台评估，否则端上会出现问题
     *
     * @return self
     */
    public function setBuildMinAndroidClientVersion($buildMinAndroidClientVersion)
    {
        $this->container['buildMinAndroidClientVersion'] = $buildMinAndroidClientVersion;

        return $this;
    }

    /**
     * Gets buildMinIosClientVersion
     *
     * @return string|null
     */
    public function getBuildMinIosClientVersion()
    {
        return $this->container['buildMinIosClientVersion'];
    }

    /**
     * Sets buildMinIosClientVersion
     *
     * @param string|null $buildMinIosClientVersion 最小iOS客户单版本号，禁止使用，如果需要使用请联系小程序平台评估，否则端上会出现问题
     *
     * @return self
     */
    public function setBuildMinIosClientVersion($buildMinIosClientVersion)
    {
        $this->container['buildMinIosClientVersion'] = $buildMinIosClientVersion;

        return $this;
    }

    /**
     * Gets buildPackageMd5
     *
     * @return string|null
     */
    public function getBuildPackageMd5()
    {
        return $this->container['buildPackageMd5'];
    }

    /**
     * Sets buildPackageMd5
     *
     * @param string|null $buildPackageMd5 源码包文件流的MD5字符串
     *
     * @return self
     */
    public function setBuildPackageMd5($buildPackageMd5)
    {
        $this->container['buildPackageMd5'] = $buildPackageMd5;

        return $this;
    }

    /**
     * Gets buildPackageName
     *
     * @return string|null
     */
    public function getBuildPackageName()
    {
        return $this->container['buildPackageName'];
    }

    /**
     * Sets buildPackageName
     *
     * @param string|null $buildPackageName 包名称
     *
     * @return self
     */
    public function setBuildPackageName($buildPackageName)
    {
        $this->container['buildPackageName'] = $buildPackageName;

        return $this;
    }

    /**
     * Gets buildPackageStream
     *
     * @return string|null
     */
    public function getBuildPackageStream()
    {
        return $this->container['buildPackageStream'];
    }

    /**
     * Sets buildPackageStream
     *
     * @param string|null $buildPackageStream base64编码后的小程序源码包文件流
     *
     * @return self
     */
    public function setBuildPackageStream($buildPackageStream)
    {
        $this->container['buildPackageStream'] = $buildPackageStream;

        return $this;
    }

    /**
     * Gets buildQcloudInfo
     *
     * @return string|null
     */
    public function getBuildQcloudInfo()
    {
        return $this->container['buildQcloudInfo'];
    }

    /**
     * Sets buildQcloudInfo
     *
     * @param string|null $buildQcloudInfo 打包平台扩展信息
     *
     * @return self
     */
    public function setBuildQcloudInfo($buildQcloudInfo)
    {
        $this->container['buildQcloudInfo'] = $buildQcloudInfo;

        return $this;
    }

    /**
     * Gets buildSignedPkgUrl
     *
     * @return string|null
     */
    public function getBuildSignedPkgUrl()
    {
        return $this->container['buildSignedPkgUrl'];
    }

    /**
     * Sets buildSignedPkgUrl
     *
     * @param string|null $buildSignedPkgUrl 已经构建加签过的包地址
     *
     * @return self
     */
    public function setBuildSignedPkgUrl($buildSignedPkgUrl)
    {
        $this->container['buildSignedPkgUrl'] = $buildSignedPkgUrl;

        return $this;
    }

    /**
     * Gets buildSourcePkgSize
     *
     * @return string|null
     */
    public function getBuildSourcePkgSize()
    {
        return $this->container['buildSourcePkgSize'];
    }

    /**
     * Sets buildSourcePkgSize
     *
     * @param string|null $buildSourcePkgSize 源码包大小
     *
     * @return self
     */
    public function setBuildSourcePkgSize($buildSourcePkgSize)
    {
        $this->container['buildSourcePkgSize'] = $buildSourcePkgSize;

        return $this;
    }

    /**
     * Gets buildSourcePkgUrl
     *
     * @return string|null
     */
    public function getBuildSourcePkgUrl()
    {
        return $this->container['buildSourcePkgUrl'];
    }

    /**
     * Sets buildSourcePkgUrl
     *
     * @param string|null $buildSourcePkgUrl 源码包地址，源码包大小不能超过20M且地址必须永久有效，若超20M，将限制业务来源调用。将源码文件夹整个用zip格式压缩成后缀amr文件传至文件服务器
     *
     * @return self
     */
    public function setBuildSourcePkgUrl($buildSourcePkgUrl)
    {
        $this->container['buildSourcePkgUrl'] = $buildSourcePkgUrl;

        return $this;
    }

    /**
     * Gets buildSubUrl
     *
     * @return string|null
     */
    public function getBuildSubUrl()
    {
        return $this->container['buildSubUrl'];
    }

    /**
     * Sets buildSubUrl
     *
     * @param string|null $buildSubUrl 子入口
     *
     * @return self
     */
    public function setBuildSubUrl($buildSubUrl)
    {
        $this->container['buildSubUrl'] = $buildSubUrl;

        return $this;
    }

    /**
     * Gets buildVersion
     *
     * @return string|null
     */
    public function getBuildVersion()
    {
        return $this->container['buildVersion'];
    }

    /**
     * Sets buildVersion
     *
     * @param string|null $buildVersion 小程序版本
     *
     * @return self
     */
    public function setBuildVersion($buildVersion)
    {
        $this->container['buildVersion'] = $buildVersion;

        return $this;
    }

    /**
     * Gets buildedPackageSize
     *
     * @return string|null
     */
    public function getBuildedPackageSize()
    {
        return $this->container['buildedPackageSize'];
    }

    /**
     * Sets buildedPackageSize
     *
     * @param string|null $buildedPackageSize 已经构建过的包大小，单位是字节，主要是给自行构建的场景使用
     *
     * @return self
     */
    public function setBuildedPackageSize($buildedPackageSize)
    {
        $this->container['buildedPackageSize'] = $buildedPackageSize;

        return $this;
    }

    /**
     * Gets buildedPackageUrl
     *
     * @return string|null
     */
    public function getBuildedPackageUrl()
    {
        return $this->container['buildedPackageUrl'];
    }

    /**
     * Sets buildedPackageUrl
     *
     * @param string|null $buildedPackageUrl 已经构建的包地址，目前主要自行构建的场景使用
     *
     * @return self
     */
    public function setBuildedPackageUrl($buildedPackageUrl)
    {
        $this->container['buildedPackageUrl'] = $buildedPackageUrl;

        return $this;
    }

    /**
     * Gets bundleId
     *
     * @return string|null
     */
    public function getBundleId()
    {
        return $this->container['bundleId'];
    }

    /**
     * Sets bundleId
     *
     * @param string|null $bundleId 一个端的标识，用于区分不同的客户端，每接入一个客户端，都需要向小程序应用中心申请bundleId入驻
     *
     * @return self
     */
    public function setBundleId($bundleId)
    {
        $this->container['bundleId'] = $bundleId;

        return $this;
    }

    /**
     * Gets clientType
     *
     * @return string|null
     */
    public function getClientType()
    {
        return $this->container['clientType'];
    }

    /**
     * Sets clientType
     *
     * @param string|null $clientType 多端类型，除了钉钉外其他业务方禁止使用
     *
     * @return self
     */
    public function setClientType($clientType)
    {
        $this->container['clientType'] = $clientType;

        return $this;
    }

    /**
     * Gets instCode
     *
     * @return string|null
     */
    public function getInstCode()
    {
        return $this->container['instCode'];
    }

    /**
     * Sets instCode
     *
     * @param string|null $instCode 上传调试版的接入租户类型。
     *
     * @return self
     */
    public function setInstCode($instCode)
    {
        $this->container['instCode'] = $instCode;

        return $this;
    }

    /**
     * Gets miniAppId
     *
     * @return string|null
     */
    public function getMiniAppId()
    {
        return $this->container['miniAppId'];
    }

    /**
     * Sets miniAppId
     *
     * @param string|null $miniAppId 小程序ID
     *
     * @return self
     */
    public function setMiniAppId($miniAppId)
    {
        $this->container['miniAppId'] = $miniAppId;

        return $this;
    }

    /**
     * Gets pluginRefs
     *
     * @return \Alipay\OpenAPISDK\Model\MiniAppPluginReference[]|null
     */
    public function getPluginRefs()
    {
        return $this->container['pluginRefs'];
    }

    /**
     * Sets pluginRefs
     *
     * @param \Alipay\OpenAPISDK\Model\MiniAppPluginReference[]|null $pluginRefs 小程序代码中引用的插件列表，包含插件id和插件版本信息，业务方需要自行解析源码包的app.json里面的plugins信息
     *
     * @return self
     */
    public function setPluginRefs($pluginRefs)
    {
        $this->container['pluginRefs'] = $pluginRefs;

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


