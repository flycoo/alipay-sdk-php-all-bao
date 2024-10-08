<?php
/**
 * AlipayOpenMiniIndividualBusinessApi
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

namespace Alipay\OpenAPISDK\Api;

use Alipay\OpenAPISDK\Util\AlipayConfigUtil;
use Alipay\OpenAPISDK\Util\AlipayLogger;
use Alipay\OpenAPISDK\Util\Model\CustomizedParams;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Alipay\OpenAPISDK\ApiException;
use Alipay\OpenAPISDK\Configuration;
use Alipay\OpenAPISDK\HeaderSelector;
use Alipay\OpenAPISDK\ObjectSerializer;

/**
 * AlipayOpenMiniIndividualBusinessApi Class Doc Comment
 *
 * @category Class
 * @package  Alipay\OpenAPISDK
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AlipayOpenMiniIndividualBusinessApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @var AlipayConfigUtil
     */
    protected $alipayConfigUtil;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0,
        AlipayConfigUtil $alipayConfigUtil = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
        $this->alipayConfigUtil = $alipayConfigUtil ?: new AlipayConfigUtil();
    }

    /**
     * @return AlipayConfigUtil
     */
    public function getAlipayConfigUtil(): AlipayConfigUtil
    {
        return $this->alipayConfigUtil;
    }

    /**
     * @param AlipayConfigUtil $alipayConfigUtil
     */
    public function setAlipayConfigUtil(AlipayConfigUtil $alipayConfigUtil): void
    {
        $this->alipayConfigUtil = $alipayConfigUtil;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation certify
     *
     * 个人账户升级为个体工商户
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyModel $alipayOpenMiniIndividualBusinessCertifyModel alipayOpenMiniIndividualBusinessCertifyModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel|\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse
     */
    public function certify($alipayOpenMiniIndividualBusinessCertifyModel = null, CustomizedParams $customizedParams = null)
    {
        list($response) = $this->certifyWithHttpInfo($alipayOpenMiniIndividualBusinessCertifyModel, $customizedParams);
        return $response;
    }

    /**
     * Operation certifyWithHttpInfo
     *
     * 个人账户升级为个体工商户
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyModel $alipayOpenMiniIndividualBusinessCertifyModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \Alipay\OpenAPISDK\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel|\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function certifyWithHttpInfo($alipayOpenMiniIndividualBusinessCertifyModel = null, CustomizedParams $customizedParams = null)
    {
        $request = $this->certifyRequest($alipayOpenMiniIndividualBusinessCertifyModel, $customizedParams);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                if ($e->getResponse()) {
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$e->getResponse()->getBody(),
                        $e->getResponse()->getHeaders(), true);
                }
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                AlipayLogger::logBizError("code:{$e->getCode()}, message:{$e->getMessage()}");
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                //验签
                $bodyStr = (string)$response->getBody();
                $this->alipayConfigUtil->verifyResponse($bodyStr, $response->getHeaders(), true);
                AlipayLogger::logBizError("code:{$statusCode}, message:{$bodyStr}");
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $bodyStr
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                                
                default:
                    if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), true);
                        if ('\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse' !== 'string') {
                            $content = json_decode($content);
                        }
                    }
                    AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

                    return [
                        //ObjectSerializer::deserialize($content, '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse', []),
                        $content,
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                //验签
                $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                //解密
                $content = $this->alipayConfigUtil->decrypt($content);
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }
            AlipayLogger::logBizResponseInfo($response->getStatusCode(), $content, $response->getHeaders());

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                                
                default:
                    //$data = ObjectSerializer::deserialize(
                    //    $e->getResponseBody(),
                    //    '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyDefaultResponse',
                    //    $e->getResponseHeaders()
                    //);
                    //$e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation certifyAsync
     *
     * 个人账户升级为个体工商户
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyModel $alipayOpenMiniIndividualBusinessCertifyModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function certifyAsync($alipayOpenMiniIndividualBusinessCertifyModel = null, CustomizedParams $customizedParams = null)
    {
        return $this->certifyAsyncWithHttpInfo($alipayOpenMiniIndividualBusinessCertifyModel, $customizedParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation certifyAsyncWithHttpInfo
     *
     * 个人账户升级为个体工商户
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyModel $alipayOpenMiniIndividualBusinessCertifyModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     * @deprecated
     */
    public function certifyAsyncWithHttpInfo($alipayOpenMiniIndividualBusinessCertifyModel = null, CustomizedParams $customizedParams = null)
    {
        $returnType = '\Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyResponseModel';
        $request = $this->certifyRequest($alipayOpenMiniIndividualBusinessCertifyModel, $customizedParams);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        //验签
                        $this->alipayConfigUtil->verifyResponse($content, $response->getHeaders(), false);
                        //解密
                        $content = $this->alipayConfigUtil->decrypt($content);
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    //验签
                    $this->alipayConfigUtil->verifyResponse((string)$response->getBody(), $response->getHeaders(), true);
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'certify'
     *
     * @param  \Alipay\OpenAPISDK\Model\AlipayOpenMiniIndividualBusinessCertifyModel $alipayOpenMiniIndividualBusinessCertifyModel (optional)
     * @param CustomizedParams $customizedParams
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function certifyRequest($alipayOpenMiniIndividualBusinessCertifyModel = null, CustomizedParams $customizedParams = null)
    {

        $resourcePath = '/v3/alipay/open/mini/individual/business/certify';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;
        $signContent = '';
        $isEncrypt = $this->alipayConfigUtil->isEncrypt();





        $headers = $this->headerSelector->selectHeaders(
            ['application/json'],
            ['application/json']
        );
        if ($headers['Content-Type'] === 'multipart/form-data') {
            $multipart = true;
            unset($headers['Content-Type']);
        }

        // for model (json/xml)
        //自定义body内容
        if (($customizedParams != null && !$this->getAlipayConfigUtil()->checkEmpty($customizedParams->getBodyContent()))
            && ($headers['Content-Type'] === 'application/json' || $isEncrypt)) {
            $signContent = $this->alipayConfigUtil->encrypt($customizedParams->getBodyContent(), $headers, $multipart);
            $httpBody = $signContent;
        } elseif (isset($alipayOpenMiniIndividualBusinessCertifyModel)) {
            $signContent = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($alipayOpenMiniIndividualBusinessCertifyModel), JSON_UNESCAPED_UNICODE);
            if ($headers['Content-Type'] === 'application/json' || $isEncrypt) {
                $signContent = $this->alipayConfigUtil->encrypt($signContent, $headers, $multipart);
                $httpBody = $signContent;
            } else {
                $httpBody = $alipayOpenMiniIndividualBusinessCertifyModel;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        if (is_string($formParamValueItem)) {
                            $signContent = $formParamValueItem;
                        }
                        //加密时非文件字段对应的Content-Type类型为text/plain
                        if ($isEncrypt && is_string($formParamValueItem)) {
                            $signContent = $this->alipayConfigUtil->encrypt($formParamValueItem, $headers, true);
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $signContent,
                                'headers' => ['Content-Type' => 'text/plain']
                            ];
                        } else {
                            $multipartContents[] = [
                                'name' => $formParamName,
                                'contents' => $formParamValueItem,
                                'headers' => ['Content-Type' => 'application/json']
                            ];
                        }
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $signContent = $this->alipayConfigUtil->encrypt(\GuzzleHttp\json_encode($formParams, JSON_UNESCAPED_UNICODE), $headers);
                $httpBody = $signContent;

            } else {
                // for HTTP post (form)
                $signContent = $this->alipayConfigUtil->encrypt(ObjectSerializer::buildQuery($formParams), $headers);
                $httpBody = $signContent;
            }
        }


        if ($isEncrypt) {
            $headers['alipay-encrypt-type'] = $this->alipayConfigUtil->getEncryptType();
            //除文件上传接口，加密后Content-Type均为"text/plain"
            if (!$multipart) {
                $headers['Content-Type'] = 'text/plain';
            }
        }

        if ($customizedParams != null) {
            //额外query参数
            if (is_array($customizedParams->getQueryParams()) && count($customizedParams->getQueryParams()) >= 0) {
                foreach ($customizedParams->getQueryParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue($v, $k) ?? []);
                }
            }

            if (!$this->alipayConfigUtil->checkEmpty($customizedParams->getAppAuthToken())) {
                $headerParams["alipay-app-auth-token"] = $customizedParams->getAppAuthToken();
            }

            //额外非全局header参数
            if (is_array($customizedParams->getHeaderParams()) && count($customizedParams->getHeaderParams()) >= 0) {
                foreach ($customizedParams->getHeaderParams() as $k => $v) {
                    if (is_array($v)) {
                        $v = ObjectSerializer::serializeCollection($v, 'form');
                    }
                    $headerParams[$k] = ObjectSerializer::toHeaderValue($v);
                }
            }
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }
        if ($this->config->getSdkVersion()) {
            $defaultHeaders['alipay-sdk-version'] = $this->config->getSdkVersion();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        if (!array_key_exists('alipay-request-id', $headers)) {
            $headers['alipay-request-id'] = $this->alipayConfigUtil->createUuid();
        }

        $query = ObjectSerializer::buildQuery($queryParams);
        $url = $resourcePath . ($query ? "?{$query}" : '');
        //加签
        $this->alipayConfigUtil->sign('POST', $url, $signContent, $headers);

        $basePath = $this->alipayConfigUtil->checkEmpty($this->alipayConfigUtil->getServerUrl()) ? $this->config->getHost() : $this->alipayConfigUtil->getServerUrl();
        AlipayLogger::logBizInfo($basePath . $url, $signContent, 'POST', $multipart ? "multipart/form-data" : $headers['Content-Type'], $headers['alipay-request-id']);
        return new Request(
            'POST',
            $basePath . $url,
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
