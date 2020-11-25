# Fiteco\KimaiClient\DefaultApi

All URIs are relative to https://tt.fiteco.fi:443.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiConfigI18nGet()**](DefaultApi.md#apiConfigI18nGet) | **GET** /api/config/i18n | Returns the user specific locale configuration
[**apiConfigTimesheetGet()**](DefaultApi.md#apiConfigTimesheetGet) | **GET** /api/config/timesheet | Returns the timesheet configuration
[**apiPingGet()**](DefaultApi.md#apiPingGet) | **GET** /api/ping | A testing route for the API
[**apiVersionGet()**](DefaultApi.md#apiVersionGet) | **GET** /api/version | Returns information about the Kimai release


## `apiConfigI18nGet()`

```php
apiConfigI18nGet(): \Fiteco\KimaiClient\Model\I18nConfig
```

Returns the user specific locale configuration

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


$apiInstance = new Fiteco\KimaiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiConfigI18nGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiConfigI18nGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fiteco\KimaiClient\Model\I18nConfig**](../Model/I18nConfig.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiConfigTimesheetGet()`

```php
apiConfigTimesheetGet(): \Fiteco\KimaiClient\Model\TimesheetConfig
```

Returns the timesheet configuration

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


$apiInstance = new Fiteco\KimaiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiConfigTimesheetGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiConfigTimesheetGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fiteco\KimaiClient\Model\TimesheetConfig**](../Model/TimesheetConfig.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiPingGet()`

```php
apiPingGet()
```

A testing route for the API

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


$apiInstance = new Fiteco\KimaiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiPingGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiPingGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `apiVersionGet()`

```php
apiVersionGet(): \Fiteco\KimaiClient\Model\Version
```

Returns information about the Kimai release

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


$apiInstance = new Fiteco\KimaiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiVersionGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fiteco\KimaiClient\Model\Version**](../Model/Version.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
