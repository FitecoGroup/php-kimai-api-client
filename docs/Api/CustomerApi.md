# Fiteco\KimaiClient\CustomerApi

All URIs are relative to https://tt.fiteco.fi:443.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCustomersGet()**](CustomerApi.md#apiCustomersGet) | **GET** /api/customers | Returns a collection of customers
[**apiCustomersIdGet()**](CustomerApi.md#apiCustomersIdGet) | **GET** /api/customers/{id} | Returns one customer
[**apiCustomersIdMetaPatch()**](CustomerApi.md#apiCustomersIdMetaPatch) | **PATCH** /api/customers/{id}/meta | Sets the value of a meta-field for an existing customer
[**apiCustomersIdPatch()**](CustomerApi.md#apiCustomersIdPatch) | **PATCH** /api/customers/{id} | Update an existing customer
[**apiCustomersIdRatesGet()**](CustomerApi.md#apiCustomersIdRatesGet) | **GET** /api/customers/{id}/rates | Returns a collection of all rates for one customer
[**apiCustomersIdRatesPost()**](CustomerApi.md#apiCustomersIdRatesPost) | **POST** /api/customers/{id}/rates | Adds a new rate to a customer
[**apiCustomersIdRatesRateIdDelete()**](CustomerApi.md#apiCustomersIdRatesRateIdDelete) | **DELETE** /api/customers/{id}/rates/{rateId} | Deletes one rate for an customer
[**apiCustomersPost()**](CustomerApi.md#apiCustomersPost) | **POST** /api/customers | Creates a new customer


## `apiCustomersGet()`

```php
apiCustomersGet($visible, $order, $orderBy, $term): \Fiteco\KimaiClient\Model\CustomerCollection[]
```

Returns a collection of customers

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$visible = 'visible_example'; // string | Visibility status to filter activities (1=visible, 2=hidden, 3=both)
$order = 'order_example'; // string | The result order. Allowed values: ASC, DESC (default: ASC)
$orderBy = 'orderBy_example'; // string | The field by which results will be ordered. Allowed values: id, name (default: name)
$term = 'term_example'; // string | Free search term

try {
    $result = $apiInstance->apiCustomersGet($visible, $order, $orderBy, $term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **visible** | **string**| Visibility status to filter activities (1&#x3D;visible, 2&#x3D;hidden, 3&#x3D;both) | [optional]
 **order** | **string**| The result order. Allowed values: ASC, DESC (default: ASC) | [optional]
 **orderBy** | **string**| The field by which results will be ordered. Allowed values: id, name (default: name) | [optional]
 **term** | **string**| Free search term | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\CustomerCollection[]**](../Model/CustomerCollection.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdGet()`

```php
apiCustomersIdGet($id): \Fiteco\KimaiClient\Model\CustomerEntity
```

Returns one customer

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiCustomersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Fiteco\KimaiClient\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdMetaPatch()`

```php
apiCustomersIdMetaPatch($id, $body): \Fiteco\KimaiClient\Model\CustomerEntity
```

Sets the value of a meta-field for an existing customer

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Customer record ID to set the meta-field value for
$body = new \Fiteco\KimaiClient\Model\InlineObject1(); // \Fiteco\KimaiClient\Model\InlineObject1

try {
    $result = $apiInstance->apiCustomersIdMetaPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdMetaPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Customer record ID to set the meta-field value for |
 **body** | [**\Fiteco\KimaiClient\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\Fiteco\KimaiClient\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdPatch()`

```php
apiCustomersIdPatch($id, $body): \Fiteco\KimaiClient\Model\CustomerEntity
```

Update an existing customer

Update an existing customer, you can pass all or just a subset of all attributes

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Customer ID to update
$body = new \Fiteco\KimaiClient\Model\CustomerEditForm(); // \Fiteco\KimaiClient\Model\CustomerEditForm

try {
    $result = $apiInstance->apiCustomersIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Customer ID to update |
 **body** | [**\Fiteco\KimaiClient\Model\CustomerEditForm**](../Model/CustomerEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdRatesGet()`

```php
apiCustomersIdRatesGet($id): \Fiteco\KimaiClient\Model\CustomerRate[]
```

Returns a collection of all rates for one customer

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The customer whose rates will be returned

try {
    $result = $apiInstance->apiCustomersIdRatesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The customer whose rates will be returned |

### Return type

[**\Fiteco\KimaiClient\Model\CustomerRate[]**](../Model/CustomerRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdRatesPost()`

```php
apiCustomersIdRatesPost($id, $body): \Fiteco\KimaiClient\Model\CustomerRate
```

Adds a new rate to a customer

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The customer to add the rate for
$body = new \Fiteco\KimaiClient\Model\CustomerRateForm(); // \Fiteco\KimaiClient\Model\CustomerRateForm

try {
    $result = $apiInstance->apiCustomersIdRatesPost($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The customer to add the rate for |
 **body** | [**\Fiteco\KimaiClient\Model\CustomerRateForm**](../Model/CustomerRateForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\CustomerRate**](../Model/CustomerRate.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiCustomersIdRatesRateIdDelete()`

```php
apiCustomersIdRatesRateIdDelete($id, $rateId)
```

Deletes one rate for an customer

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The customer whose rate will be removed
$rateId = 56; // int | The rate to remove

try {
    $apiInstance->apiCustomersIdRatesRateIdDelete($id, $rateId);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersIdRatesRateIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The customer whose rate will be removed |
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

## `apiCustomersPost()`

```php
apiCustomersPost($body): \Fiteco\KimaiClient\Model\CustomerEntity
```

Creates a new customer

Creates a new customer and returns it afterwards

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


$apiInstance = new Fiteco\KimaiClient\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Fiteco\KimaiClient\Model\CustomerEditForm(); // \Fiteco\KimaiClient\Model\CustomerEditForm

try {
    $result = $apiInstance->apiCustomersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->apiCustomersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Fiteco\KimaiClient\Model\CustomerEditForm**](../Model/CustomerEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\CustomerEntity**](../Model/CustomerEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
