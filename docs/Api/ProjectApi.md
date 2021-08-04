# Fiteco\KimaiClient\ProjectApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProjectsGet()**](ProjectApi.md#apiProjectsGet) | **GET** /api/projects | Returns a collection of projects.
[**apiProjectsIdGet()**](ProjectApi.md#apiProjectsIdGet) | **GET** /api/projects/{id} | Returns one project
[**apiProjectsIdMetaPatch()**](ProjectApi.md#apiProjectsIdMetaPatch) | **PATCH** /api/projects/{id}/meta | Sets the value of a meta-field for an existing project
[**apiProjectsIdPatch()**](ProjectApi.md#apiProjectsIdPatch) | **PATCH** /api/projects/{id} | Update an existing project
[**apiProjectsIdRatesGet()**](ProjectApi.md#apiProjectsIdRatesGet) | **GET** /api/projects/{id}/rates | Returns a collection of all rates for one project
[**apiProjectsIdRatesPost()**](ProjectApi.md#apiProjectsIdRatesPost) | **POST** /api/projects/{id}/rates | Adds a new rate to an project
[**apiProjectsIdRatesRateIdDelete()**](ProjectApi.md#apiProjectsIdRatesRateIdDelete) | **DELETE** /api/projects/{id}/rates/{rateId} | Deletes one rate for an project
[**apiProjectsPost()**](ProjectApi.md#apiProjectsPost) | **POST** /api/projects | Creates a new project


## `apiProjectsGet()`

```php
apiProjectsGet($customer, $customers, $visible, $start, $end, $ignoreDates, $order, $orderBy, $term): \Fiteco\KimaiClient\Model\ProjectCollection[]
```

Returns a collection of projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer = 'customer_example'; // string | Customer ID to filter projects
$customers = 'customers_example'; // string | Comma separated list of customer IDs to filter projects
$visible = 'visible_example'; // string | Visibility status to filter projects. Allowed values: 1=visible, 2=hidden, 3=both (default: 1)
$start = 'start_example'; // \DateTime | Only projects that started before this date will be included. Allowed format: HTML5 (default: now, if end is also empty)
$end = 'end_example'; // \DateTime | Only projects that ended after this date will be included. Allowed format: HTML5 (default: now, if start is also empty)
$ignoreDates = 'ignoreDates_example'; // string | If set, start and end are completely ignored. Allowed values: 1 (default: off)
$order = 'order_example'; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$orderBy = 'orderBy_example'; // string | The field by which results will be ordered. Allowed values: id, name, customer (default: name)
$term = 'term_example'; // string | Free search term

try {
    $result = $apiInstance->apiProjectsGet($customer, $customers, $visible, $start, $end, $ignoreDates, $order, $orderBy, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer** | **string**| Customer ID to filter projects | [optional]
 **customers** | **string**| Comma separated list of customer IDs to filter projects | [optional]
 **visible** | **string**| Visibility status to filter projects. Allowed values: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;both (default: 1) | [optional]
 **start** | **\DateTime**| Only projects that started before this date will be included. Allowed format: HTML5 (default: now, if end is also empty) | [optional]
 **end** | **\DateTime**| Only projects that ended after this date will be included. Allowed format: HTML5 (default: now, if start is also empty) | [optional]
 **ignoreDates** | **string**| If set, start and end are completely ignored. Allowed values: 1 (default: off) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **orderBy** | **string**| The field by which results will be ordered. Allowed values: id, name, customer (default: name) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\ProjectCollection[]**](../Model/ProjectCollection.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdGet()`

```php
apiProjectsIdGet($id): \Fiteco\KimaiClient\Model\ProjectEntity
```

Returns one project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiProjectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Fiteco\KimaiClient\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdMetaPatch()`

```php
apiProjectsIdMetaPatch($id, $body): \Fiteco\KimaiClient\Model\ProjectEntity
```

Sets the value of a meta-field for an existing project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project record ID to set the meta-field value for
$body = new \Fiteco\KimaiClient\Model\InlineObject2(); // \Fiteco\KimaiClient\Model\InlineObject2

try {
    $result = $apiInstance->apiProjectsIdMetaPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdMetaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project record ID to set the meta-field value for |
 **body** | [**\Fiteco\KimaiClient\Model\InlineObject2**](../Model/InlineObject2.md)|  | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdPatch()`

```php
apiProjectsIdPatch($id, $body): \Fiteco\KimaiClient\Model\ProjectEntity
```

Update an existing project

Update an existing project, you can pass all or just a subset of all attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Project ID to update
$body = new \Fiteco\KimaiClient\Model\ProjectEditForm(); // \Fiteco\KimaiClient\Model\ProjectEditForm

try {
    $result = $apiInstance->apiProjectsIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Project ID to update |
 **body** | [**\Fiteco\KimaiClient\Model\ProjectEditForm**](../Model/ProjectEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdRatesGet()`

```php
apiProjectsIdRatesGet($id): \Fiteco\KimaiClient\Model\ProjectRate[]
```

Returns a collection of all rates for one project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The project whose rates will be returned

try {
    $result = $apiInstance->apiProjectsIdRatesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The project whose rates will be returned |

### Return type

[**\Fiteco\KimaiClient\Model\ProjectRate[]**](../Model/ProjectRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdRatesPost()`

```php
apiProjectsIdRatesPost($id, $body): \Fiteco\KimaiClient\Model\ProjectRate
```

Adds a new rate to an project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The project to add the rate for
$body = new \Fiteco\KimaiClient\Model\ProjectRateForm(); // \Fiteco\KimaiClient\Model\ProjectRateForm

try {
    $result = $apiInstance->apiProjectsIdRatesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdRatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The project to add the rate for |
 **body** | [**\Fiteco\KimaiClient\Model\ProjectRateForm**](../Model/ProjectRateForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ProjectRate**](../Model/ProjectRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsIdRatesRateIdDelete()`

```php
apiProjectsIdRatesRateIdDelete($id, $rateId)
```

Deletes one rate for an project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The project whose rate will be removed
$rateId = 56; // int | The rate to remove

try {
    $apiInstance->apiProjectsIdRatesRateIdDelete($id, $rateId);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsIdRatesRateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The project whose rate will be removed |
 **rateId** | **int**| The rate to remove |

### Return type

void (empty response body)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiProjectsPost()`

```php
apiProjectsPost($body): \Fiteco\KimaiClient\Model\ProjectEntity
```

Creates a new project

Creates a new project and returns it afterwards

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiToken
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-TOKEN', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-TOKEN', 'Bearer');

// Configure API key authorization: apiUser
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKey('X-AUTH-USER', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-AUTH-USER', 'Bearer');


$apiInstance = new Fiteco\KimaiClient\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Fiteco\KimaiClient\Model\ProjectEditForm(); // \Fiteco\KimaiClient\Model\ProjectEditForm

try {
    $result = $apiInstance->apiProjectsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->apiProjectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Fiteco\KimaiClient\Model\ProjectEditForm**](../Model/ProjectEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ProjectEntity**](../Model/ProjectEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
