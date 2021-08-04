<?php

/**
 *
 * Kimai API Client 2020 — NOTICE OF LICENSE
 * This source file is released under MIT license by copyright holders.
 * @copyright 2017-2020 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2020 (c) Fiteco Group Oy (https://group.fiteco.fi)
 *
 */

/**
 * Kimai - API Docs.
 *
 * JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html), [Swagger definition file](doc.json)
 *
 * The version of the OpenAPI document: 0.6
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fiteco\KimaiClient\Api;

use Fiteco\KimaiClient\ApiException;
use Fiteco\KimaiClient\Configuration;
use Fiteco\KimaiClient\HeaderSelector;
use Fiteco\KimaiClient\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;

/**
 * TagApi Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */
class TagApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index.
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index.
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
     * Operation apiTagsGet.
     *
     * Fetch all existing tags
     *
     * @param string $name Search term to filter tag list (optional)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return string[]
     */
    public function apiTagsGet($name = null)
    {
        [$response] = $this->apiTagsGetWithHttpInfo($name);

        return $response;
    }

    /**
     * Operation apiTagsGetWithHttpInfo.
     *
     * Fetch all existing tags
     *
     * @param string $name Search term to filter tag list (optional)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of string[], HTTP status code, HTTP response headers (array of strings)
     */
    public function apiTagsGetWithHttpInfo($name = null)
    {
        $request = $this->apiTagsGetRequest($name);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('string[]' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, 'string[]', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = 'string[]';
            if ('\SplFileObject' === $returnType) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation apiTagsGetAsync.
     *
     * Fetch all existing tags
     *
     * @param string $name Search term to filter tag list (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsGetAsync($name = null)
    {
        return $this->apiTagsGetAsyncWithHttpInfo($name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiTagsGetAsyncWithHttpInfo.
     *
     * Fetch all existing tags
     *
     * @param string $name Search term to filter tag list (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsGetAsyncWithHttpInfo($name = null)
    {
        $returnType = 'string[]';
        $request = $this->apiTagsGetRequest($name);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ('\SplFileObject' === $returnType) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'apiTagsGet'.
     *
     * @param string $name Search term to filter tag list (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiTagsGetRequest($name = null)
    {
        $resourcePath = '/api/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (\is_array($name)) {
            $name = ObjectSerializer::serializeCollection($name, '', true);
        }
        if (null !== $name) {
            $queryParams['name'] = $name;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name'     => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-TOKEN');
        if (null !== $apiKey) {
            $headers['X-AUTH-TOKEN'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-USER');
        if (null !== $apiKey) {
            $headers['X-AUTH-USER'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

        return new Request(
            'GET',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiTagsIdDelete.
     *
     * Delete a tag
     *
     * @param int $id Tag ID to delete (required)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return void
     */
    public function apiTagsIdDelete($id)
    {
        $this->apiTagsIdDeleteWithHttpInfo($id);
    }

    /**
     * Operation apiTagsIdDeleteWithHttpInfo.
     *
     * Delete a tag
     *
     * @param int $id Tag ID to delete (required)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiTagsIdDeleteWithHttpInfo($id)
    {
        $request = $this->apiTagsIdDeleteRequest($id);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            return [null, $statusCode, $response->getHeaders()];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }

            throw $e;
        }
    }

    /**
     * Operation apiTagsIdDeleteAsync.
     *
     * Delete a tag
     *
     * @param int $id Tag ID to delete (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsIdDeleteAsync($id)
    {
        return $this->apiTagsIdDeleteAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiTagsIdDeleteAsyncWithHttpInfo.
     *
     * Delete a tag
     *
     * @param int $id Tag ID to delete (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsIdDeleteAsyncWithHttpInfo($id)
    {
        $returnType = '';
        $request = $this->apiTagsIdDeleteRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'apiTagsIdDelete'.
     *
     * @param int $id Tag ID to delete (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiTagsIdDeleteRequest($id)
    {
        // verify the required parameter 'id' is set
        if (null === $id || (\is_array($id) && 0 === \count($id))) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling apiTagsIdDelete');
        }

        $resourcePath = '/api/tags/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $id) {
            $resourcePath = str_replace(
                '{'.'id'.'}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name'     => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-TOKEN');
        if (null !== $apiKey) {
            $headers['X-AUTH-TOKEN'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-USER');
        if (null !== $apiKey) {
            $headers['X-AUTH-USER'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

        return new Request(
            'DELETE',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiTagsPost.
     *
     * Creates a new tag
     *
     * @param \Fiteco\KimaiClient\Model\TagEditForm $body body (required)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \Fiteco\KimaiClient\Model\TagEntity
     */
    public function apiTagsPost($body)
    {
        [$response] = $this->apiTagsPostWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation apiTagsPostWithHttpInfo.
     *
     * Creates a new tag
     *
     * @param \Fiteco\KimaiClient\Model\TagEditForm $body (required)
     *
     * @throws \Fiteco\KimaiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \Fiteco\KimaiClient\Model\TagEntity, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiTagsPostWithHttpInfo($body)
    {
        $request = $this->apiTagsPostRequest($body);

        try {
            $options = $this->createHttpClientOption();

            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", (int) $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? (string) $e->getResponse()->getBody() : null);
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, (string) $request->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
            }

            switch ($statusCode) {
                case 200:
                    if ('\Fiteco\KimaiClient\Model\TagEntity' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\Fiteco\KimaiClient\Model\TagEntity', []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
            }

            $returnType = '\Fiteco\KimaiClient\Model\TagEntity';
            if ('\SplFileObject' === $returnType) {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Fiteco\KimaiClient\Model\TagEntity',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);

                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation apiTagsPostAsync.
     *
     * Creates a new tag
     *
     * @param \Fiteco\KimaiClient\Model\TagEditForm $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsPostAsync($body)
    {
        return $this->apiTagsPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiTagsPostAsyncWithHttpInfo.
     *
     * Creates a new tag
     *
     * @param \Fiteco\KimaiClient\Model\TagEditForm $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiTagsPostAsyncWithHttpInfo($body)
    {
        $returnType = '\Fiteco\KimaiClient\Model\TagEntity';
        $request = $this->apiTagsPostRequest($body);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ('\SplFileObject' === $returnType) {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();

                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), (string) $response->getBody());
                }
            );
    }

    /**
     * Create request for operation 'apiTagsPost'.
     *
     * @param \Fiteco\KimaiClient\Model\TagEditForm $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    public function apiTagsPostRequest($body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (\is_array($body) && 0 === \count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling apiTagsPost');
        }

        $resourcePath = '/api/tags';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['*/*']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['*/*'],
                []
            );
        }

        // for model (json/xml)
        if (isset($body)) {
            if ('application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($body));
            } else {
                $httpBody = $body;
            }
        } elseif (\count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = \is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name'     => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-TOKEN');
        if (null !== $apiKey) {
            $headers['X-AUTH-TOKEN'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('X-AUTH-USER');
        if (null !== $apiKey) {
            $headers['X-AUTH-USER'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);

        return new Request(
            'POST',
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
