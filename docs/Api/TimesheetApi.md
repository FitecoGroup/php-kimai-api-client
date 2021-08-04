# Fiteco\KimaiClient\TimesheetApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTimesheetsActiveGet()**](TimesheetApi.md#apiTimesheetsActiveGet) | **GET** /api/timesheets/active | Returns the collection of active timesheet records
[**apiTimesheetsGet()**](TimesheetApi.md#apiTimesheetsGet) | **GET** /api/timesheets | Returns a collection of timesheet records
[**apiTimesheetsIdDelete()**](TimesheetApi.md#apiTimesheetsIdDelete) | **DELETE** /api/timesheets/{id} | Delete an existing timesheet record
[**apiTimesheetsIdDuplicatePatch()**](TimesheetApi.md#apiTimesheetsIdDuplicatePatch) | **PATCH** /api/timesheets/{id}/duplicate | Duplicates an existing timesheet record
[**apiTimesheetsIdExportPatch()**](TimesheetApi.md#apiTimesheetsIdExportPatch) | **PATCH** /api/timesheets/{id}/export | Switch the export state of a timesheet record to (un-)lock it
[**apiTimesheetsIdGet()**](TimesheetApi.md#apiTimesheetsIdGet) | **GET** /api/timesheets/{id} | Returns one timesheet record
[**apiTimesheetsIdMetaPatch()**](TimesheetApi.md#apiTimesheetsIdMetaPatch) | **PATCH** /api/timesheets/{id}/meta | Sets the value of a meta-field for an existing timesheet.
[**apiTimesheetsIdPatch()**](TimesheetApi.md#apiTimesheetsIdPatch) | **PATCH** /api/timesheets/{id} | Update an existing timesheet record
[**apiTimesheetsIdRestartPatch()**](TimesheetApi.md#apiTimesheetsIdRestartPatch) | **PATCH** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
[**apiTimesheetsIdStopPatch()**](TimesheetApi.md#apiTimesheetsIdStopPatch) | **PATCH** /api/timesheets/{id}/stop | Stops an active timesheet record
[**apiTimesheetsPost()**](TimesheetApi.md#apiTimesheetsPost) | **POST** /api/timesheets | Creates a new timesheet record
[**apiTimesheetsRecentGet()**](TimesheetApi.md#apiTimesheetsRecentGet) | **GET** /api/timesheets/recent | Returns the collection of recent user activities


## `apiTimesheetsActiveGet()`

```php
apiTimesheetsActiveGet(): \Fiteco\KimaiClient\Model\TimesheetCollectionExpanded[]
```

Returns the collection of active timesheet records

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiTimesheetsActiveGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsActiveGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetCollectionExpanded[]**](../Model/TimesheetCollectionExpanded.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsGet()`

```php
apiTimesheetsGet($user, $customer, $customers, $project, $projects, $activity, $activities, $page, $size, $tags, $orderBy, $order, $begin, $end, $exported, $active, $full, $term, $modifiedAfter): \Fiteco\KimaiClient\Model\TimesheetCollection[]
```

Returns a collection of timesheet records

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | User ID to filter timesheets. Needs permission 'view_other_timesheet', pass 'all' to fetch data for all user (default: current user)
$customer = 'customer_example'; // string | DEPRECATED: Customer ID to filter timesheets (will be removed with 2.0)
$customers = 'customers_example'; // string | Comma separated list of customer IDs to filter timesheets
$project = 'project_example'; // string | DEPRECATED: Project ID to filter timesheets (will be removed with 2.0)
$projects = 'projects_example'; // string | Comma separated list of project IDs to filter timesheets
$activity = 'activity_example'; // string | DEPRECATED: Activity ID to filter timesheets (will be removed with 2.0)
$activities = 'activities_example'; // string | Comma separated list of activity IDs to filter timesheets
$page = 'page_example'; // string | The page to display, renders a 404 if not found (default: 1)
$size = 'size_example'; // string | The amount of entries for each page (default: 50)
$tags = 'tags_example'; // string | The name of tags which are in the datasets
$orderBy = 'orderBy_example'; // string | The field by which results will be ordered. Allowed values: id, begin, end, rate (default: begin)
$order = 'order_example'; // string | The result order. Allowed values: ASC, DESC (default: DESC)
$begin = 'begin_example'; // \DateTime | Only records after this date will be included (format: HTML5)
$end = 'end_example'; // \DateTime | Only records before this date will be included (format: HTML5)
$exported = 'exported_example'; // string | Use this flag if you want to filter for export state. Allowed values: 0=not exported, 1=exported (default: all)
$active = 'active_example'; // string | Filter for running/active records. Allowed values: 0=stopped, 1=active (default: all)
$full = 'full_example'; // string | Allows to fetch fully serialized objects including subresources. Allowed values: true (default: false)
$term = 'term_example'; // string | Free search term
$modifiedAfter = 'modifiedAfter_example'; // \DateTime | Only records changed after this date will be included (format: HTML5). Available since Kimai 1.10 and works only for records that were created/updated since then.

try {
    $result = $apiInstance->apiTimesheetsGet($user, $customer, $customers, $project, $projects, $activity, $activities, $page, $size, $tags, $orderBy, $order, $begin, $end, $exported, $active, $full, $term, $modifiedAfter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to filter timesheets. Needs permission &#39;view_other_timesheet&#39;, pass &#39;all&#39; to fetch data for all user (default: current user) | [optional]
 **customer** | **string**| DEPRECATED: Customer ID to filter timesheets (will be removed with 2.0) | [optional]
 **customers** | **string**| Comma separated list of customer IDs to filter timesheets | [optional]
 **project** | **string**| DEPRECATED: Project ID to filter timesheets (will be removed with 2.0) | [optional]
 **projects** | **string**| Comma separated list of project IDs to filter timesheets | [optional]
 **activity** | **string**| DEPRECATED: Activity ID to filter timesheets (will be removed with 2.0) | [optional]
 **activities** | **string**| Comma separated list of activity IDs to filter timesheets | [optional]
 **page** | **string**| The page to display, renders a 404 if not found (default: 1) | [optional]
 **size** | **string**| The amount of entries for each page (default: 50) | [optional]
 **tags** | **string**| The name of tags which are in the datasets | [optional]
 **orderBy** | **string**| The field by which results will be ordered. Allowed values: id, begin, end, rate (default: begin) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: DESC) | [optional]
 **begin** | **\DateTime**| Only records after this date will be included (format: HTML5) | [optional]
 **end** | **\DateTime**| Only records before this date will be included (format: HTML5) | [optional]
 **exported** | **string**| Use this flag if you want to filter for export state. Allowed values: 0&#x3D;not exported, 1&#x3D;exported (default: all) | [optional]
 **active** | **string**| Filter for running/active records. Allowed values: 0&#x3D;stopped, 1&#x3D;active (default: all) | [optional]
 **full** | **string**| Allows to fetch fully serialized objects including subresources. Allowed values: true (default: false) | [optional]
 **term** | **string**| Free search term | [optional]
 **modifiedAfter** | **\DateTime**| Only records changed after this date will be included (format: HTML5). Available since Kimai 1.10 and works only for records that were created/updated since then. | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetCollection[]**](../Model/TimesheetCollection.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdDelete()`

```php
apiTimesheetsIdDelete($id)
```

Delete an existing timesheet record

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to delete

try {
    $apiInstance->apiTimesheetsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to delete |

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

## `apiTimesheetsIdDuplicatePatch()`

```php
apiTimesheetsIdDuplicatePatch($id): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Duplicates an existing timesheet record

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to duplicate

try {
    $result = $apiInstance->apiTimesheetsIdDuplicatePatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdDuplicatePatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to duplicate |

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdExportPatch()`

```php
apiTimesheetsIdExportPatch($id): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Switch the export state of a timesheet record to (un-)lock it

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to switch export state

try {
    $result = $apiInstance->apiTimesheetsIdExportPatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdExportPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to switch export state |

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdGet()`

```php
apiTimesheetsIdGet($id): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Returns one timesheet record

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to fetch

try {
    $result = $apiInstance->apiTimesheetsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to fetch |

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdMetaPatch()`

```php
apiTimesheetsIdMetaPatch($id, $body): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Sets the value of a meta-field for an existing timesheet.

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to set the meta-field value for
$body = new \Fiteco\KimaiClient\Model\InlineObject4(); // \Fiteco\KimaiClient\Model\InlineObject4

try {
    $result = $apiInstance->apiTimesheetsIdMetaPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdMetaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to set the meta-field value for |
 **body** | [**\Fiteco\KimaiClient\Model\InlineObject4**](../Model/InlineObject4.md)|  | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdPatch()`

```php
apiTimesheetsIdPatch($id, $body): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Update an existing timesheet record

Update an existing timesheet record, you can pass all or just a subset of the attributes.

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to update
$body = new \Fiteco\KimaiClient\Model\TimesheetEditForm(); // \Fiteco\KimaiClient\Model\TimesheetEditForm

try {
    $result = $apiInstance->apiTimesheetsIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to update |
 **body** | [**\Fiteco\KimaiClient\Model\TimesheetEditForm**](../Model/TimesheetEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdRestartPatch()`

```php
apiTimesheetsIdRestartPatch($id, $body): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Restarts a previously stopped timesheet record for the current user

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to restart
$body = new \Fiteco\KimaiClient\Model\InlineObject3(); // \Fiteco\KimaiClient\Model\InlineObject3

try {
    $result = $apiInstance->apiTimesheetsIdRestartPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdRestartPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to restart |
 **body** | [**\Fiteco\KimaiClient\Model\InlineObject3**](../Model/InlineObject3.md)|  | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsIdStopPatch()`

```php
apiTimesheetsIdStopPatch($id): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Stops an active timesheet record

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Timesheet record ID to stop

try {
    $result = $apiInstance->apiTimesheetsIdStopPatch($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsIdStopPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Timesheet record ID to stop |

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsPost()`

```php
apiTimesheetsPost($body, $full): \Fiteco\KimaiClient\Model\TimesheetEntity
```

Creates a new timesheet record

Creates a new timesheet record for the current user and returns it afterwards.

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Fiteco\KimaiClient\Model\TimesheetEditForm(); // \Fiteco\KimaiClient\Model\TimesheetEditForm
$full = 'full_example'; // string | Allows to fetch fully serialized objects including subresources (TimesheetEntityExpanded). Allowed values: true (default: false)

try {
    $result = $apiInstance->apiTimesheetsPost($body, $full);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Fiteco\KimaiClient\Model\TimesheetEditForm**](../Model/TimesheetEditForm.md)|  |
 **full** | **string**| Allows to fetch fully serialized objects including subresources (TimesheetEntityExpanded). Allowed values: true (default: false) | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetEntity**](../Model/TimesheetEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTimesheetsRecentGet()`

```php
apiTimesheetsRecentGet($user, $begin, $size): \Fiteco\KimaiClient\Model\TimesheetCollectionExpanded[]
```

Returns the collection of recent user activities

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


$apiInstance = new Fiteco\KimaiClient\Api\TimesheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user = 'user_example'; // string | User ID to filter timesheets. Needs permission 'view_other_timesheet', pass 'all' to fetch data for all user (default: current user)
$begin = 'begin_example'; // \DateTime | Only records after this date will be included. Default: today - 1 year (format: HTML5)
$size = 'size_example'; // string | The amount of entries (default: 10)

try {
    $result = $apiInstance->apiTimesheetsRecentGet($user, $begin, $size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimesheetApi->apiTimesheetsRecentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user** | **string**| User ID to filter timesheets. Needs permission &#39;view_other_timesheet&#39;, pass &#39;all&#39; to fetch data for all user (default: current user) | [optional]
 **begin** | **\DateTime**| Only records after this date will be included. Default: today - 1 year (format: HTML5) | [optional]
 **size** | **string**| The amount of entries (default: 10) | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetCollectionExpanded[]**](../Model/TimesheetCollectionExpanded.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
