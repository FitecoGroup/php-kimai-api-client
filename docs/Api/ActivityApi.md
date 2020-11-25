# Fiteco\KimaiClient\ActivityApi

All URIs are relative to https://tt.fiteco.fi:443.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiActivitiesGet()**](ActivityApi.md#apiActivitiesGet) | **GET** /api/activities | Returns a collection of activities
[**apiActivitiesIdGet()**](ActivityApi.md#apiActivitiesIdGet) | **GET** /api/activities/{id} | Returns one activity
[**apiActivitiesIdMetaPatch()**](ActivityApi.md#apiActivitiesIdMetaPatch) | **PATCH** /api/activities/{id}/meta | Sets the value of a meta-field for an existing activity
[**apiActivitiesIdPatch()**](ActivityApi.md#apiActivitiesIdPatch) | **PATCH** /api/activities/{id} | Update an existing activity
[**apiActivitiesIdRatesGet()**](ActivityApi.md#apiActivitiesIdRatesGet) | **GET** /api/activities/{id}/rates | Returns a collection of all rates for one activity
[**apiActivitiesIdRatesPost()**](ActivityApi.md#apiActivitiesIdRatesPost) | **POST** /api/activities/{id}/rates | Adds a new rate to an activity
[**apiActivitiesIdRatesRateIdDelete()**](ActivityApi.md#apiActivitiesIdRatesRateIdDelete) | **DELETE** /api/activities/{id}/rates/{rateId} | Deletes one rate for an activity
[**apiActivitiesPost()**](ActivityApi.md#apiActivitiesPost) | **POST** /api/activities | Creates a new activity


## `apiActivitiesGet()`

```php
apiActivitiesGet($project, $projects, $visible, $globals, $globalsFirst, $orderBy, $order, $term): \Fiteco\KimaiClient\Model\ActivityCollection[]
```

Returns a collection of activities

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$project = 'project_example'; // string | Project ID to filter activities
$projects = 'projects_example'; // string | Comma separated list of project IDs to filter activities
$visible = 'visible_example'; // string | Visibility status to filter activities. Allowed values: 1=visible, 2=hidden, 3=all (default: 1)
$globals = 'globals_example'; // string | Use if you want to fetch only global activities. Allowed values: true (default: false)
$globalsFirst = 'globalsFirst_example'; // string | Deprecated parameter, value is not used any more
$orderBy = 'orderBy_example'; // string | The field by which results will be ordered. Allowed values: id, name, project (default: name)
$order = 'order_example'; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$term = 'term_example'; // string | Free search term

try {
    $result = $apiInstance->apiActivitiesGet($project, $projects, $visible, $globals, $globalsFirst, $orderBy, $order, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project** | **string**| Project ID to filter activities | [optional]
 **projects** | **string**| Comma separated list of project IDs to filter activities | [optional]
 **visible** | **string**| Visibility status to filter activities. Allowed values: 1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;all (default: 1) | [optional]
 **globals** | **string**| Use if you want to fetch only global activities. Allowed values: true (default: false) | [optional]
 **globalsFirst** | **string**| Deprecated parameter, value is not used any more | [optional]
 **orderBy** | **string**| The field by which results will be ordered. Allowed values: id, name, project (default: name) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\ActivityCollection[]**](../Model/ActivityCollection.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdGet()`

```php
apiActivitiesIdGet($id): \Fiteco\KimaiClient\Model\ActivityEntity
```

Returns one activity

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Activity ID to fetch

try {
    $result = $apiInstance->apiActivitiesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Activity ID to fetch |

### Return type

[**\Fiteco\KimaiClient\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdMetaPatch()`

```php
apiActivitiesIdMetaPatch($id, $body): \Fiteco\KimaiClient\Model\ActivityEntity
```

Sets the value of a meta-field for an existing activity

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Activity record ID to set the meta-field value for
$body = new \Fiteco\KimaiClient\Model\InlineObject(); // \Fiteco\KimaiClient\Model\InlineObject

try {
    $result = $apiInstance->apiActivitiesIdMetaPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdMetaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Activity record ID to set the meta-field value for |
 **body** | [**\Fiteco\KimaiClient\Model\InlineObject**](../Model/InlineObject.md)|  | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdPatch()`

```php
apiActivitiesIdPatch($id, $body): \Fiteco\KimaiClient\Model\ActivityEntity
```

Update an existing activity

Update an existing activity, you can pass all or just a subset of all attributes

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Activity ID to update
$body = new \Fiteco\KimaiClient\Model\ActivityEditForm(); // \Fiteco\KimaiClient\Model\ActivityEditForm

try {
    $result = $apiInstance->apiActivitiesIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Activity ID to update |
 **body** | [**\Fiteco\KimaiClient\Model\ActivityEditForm**](../Model/ActivityEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdRatesGet()`

```php
apiActivitiesIdRatesGet($id): \Fiteco\KimaiClient\Model\ActivityRate[]
```

Returns a collection of all rates for one activity

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The activity whose rates will be returned

try {
    $result = $apiInstance->apiActivitiesIdRatesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The activity whose rates will be returned |

### Return type

[**\Fiteco\KimaiClient\Model\ActivityRate[]**](../Model/ActivityRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdRatesPost()`

```php
apiActivitiesIdRatesPost($id, $body): \Fiteco\KimaiClient\Model\ActivityRate
```

Adds a new rate to an activity

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The activity to add the rate for
$body = new \Fiteco\KimaiClient\Model\ActivityRateForm(); // \Fiteco\KimaiClient\Model\ActivityRateForm

try {
    $result = $apiInstance->apiActivitiesIdRatesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdRatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The activity to add the rate for |
 **body** | [**\Fiteco\KimaiClient\Model\ActivityRateForm**](../Model/ActivityRateForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ActivityRate**](../Model/ActivityRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiActivitiesIdRatesRateIdDelete()`

```php
apiActivitiesIdRatesRateIdDelete($id, $rateId)
```

Deletes one rate for an activity

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The activity whose rate will be removed
$rateId = 56; // int | The rate to remove

try {
    $apiInstance->apiActivitiesIdRatesRateIdDelete($id, $rateId);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesIdRatesRateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The activity whose rate will be removed |
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

## `apiActivitiesPost()`

```php
apiActivitiesPost($body): \Fiteco\KimaiClient\Model\ActivityEntity
```

Creates a new activity

Creates a new activity and returns it afterwards

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


$apiInstance = new Fiteco\KimaiClient\Api\ActivityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Fiteco\KimaiClient\Model\ActivityEditForm(); // \Fiteco\KimaiClient\Model\ActivityEditForm

try {
    $result = $apiInstance->apiActivitiesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityApi->apiActivitiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Fiteco\KimaiClient\Model\ActivityEditForm**](../Model/ActivityEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\ActivityEntity**](../Model/ActivityEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
