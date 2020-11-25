# Fiteco\KimaiClient\TeamApi

All URIs are relative to https://tt.fiteco.fi:443.

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiTeamsGet()**](TeamApi.md#apiTeamsGet) | **GET** /api/teams | Fetch all existing teams
[**apiTeamsIdActivitiesActivityIdDelete()**](TeamApi.md#apiTeamsIdActivitiesActivityIdDelete) | **DELETE** /api/teams/{id}/activities/{activityId} | Revokes access for an activity from a team
[**apiTeamsIdActivitiesActivityIdPost()**](TeamApi.md#apiTeamsIdActivitiesActivityIdPost) | **POST** /api/teams/{id}/activities/{activityId} | Grant the team access to an activity
[**apiTeamsIdCustomersCustomerIdDelete()**](TeamApi.md#apiTeamsIdCustomersCustomerIdDelete) | **DELETE** /api/teams/{id}/customers/{customerId} | Revokes access for a customer from a team
[**apiTeamsIdCustomersCustomerIdPost()**](TeamApi.md#apiTeamsIdCustomersCustomerIdPost) | **POST** /api/teams/{id}/customers/{customerId} | Grant the team access to a customer
[**apiTeamsIdDelete()**](TeamApi.md#apiTeamsIdDelete) | **DELETE** /api/teams/{id} | Delete a team
[**apiTeamsIdGet()**](TeamApi.md#apiTeamsIdGet) | **GET** /api/teams/{id} | Returns one team
[**apiTeamsIdMembersUserIdDelete()**](TeamApi.md#apiTeamsIdMembersUserIdDelete) | **DELETE** /api/teams/{id}/members/{userId} | Removes a member from the team
[**apiTeamsIdMembersUserIdPost()**](TeamApi.md#apiTeamsIdMembersUserIdPost) | **POST** /api/teams/{id}/members/{userId} | Add a new member to a team
[**apiTeamsIdPatch()**](TeamApi.md#apiTeamsIdPatch) | **PATCH** /api/teams/{id} | Update an existing team
[**apiTeamsIdProjectsProjectIdDelete()**](TeamApi.md#apiTeamsIdProjectsProjectIdDelete) | **DELETE** /api/teams/{id}/projects/{projectId} | Revokes access for a project from a team
[**apiTeamsIdProjectsProjectIdPost()**](TeamApi.md#apiTeamsIdProjectsProjectIdPost) | **POST** /api/teams/{id}/projects/{projectId} | Grant the team access to a project
[**apiTeamsPost()**](TeamApi.md#apiTeamsPost) | **POST** /api/teams | Creates a new team


## `apiTeamsGet()`

```php
apiTeamsGet(): \Fiteco\KimaiClient\Model\TeamCollection[]
```

Fetch all existing teams

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->apiTeamsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Fiteco\KimaiClient\Model\TeamCollection[]**](../Model/TeamCollection.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdActivitiesActivityIdDelete()`

```php
apiTeamsIdActivitiesActivityIdDelete($id, $activityId): \Fiteco\KimaiClient\Model\TeamEntity
```

Revokes access for an activity from a team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team whose permission will be revoked
$activityId = 56; // int | The activity to remove (Activity ID)

try {
    $result = $apiInstance->apiTeamsIdActivitiesActivityIdDelete($id, $activityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdActivitiesActivityIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team whose permission will be revoked |
 **activityId** | **int**| The activity to remove (Activity ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdActivitiesActivityIdPost()`

```php
apiTeamsIdActivitiesActivityIdPost($id, $activityId): \Fiteco\KimaiClient\Model\TeamEntity
```

Grant the team access to an activity

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team that is granted access
$activityId = 56; // int | The activity to grant acecess to (Activity ID)

try {
    $result = $apiInstance->apiTeamsIdActivitiesActivityIdPost($id, $activityId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdActivitiesActivityIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team that is granted access |
 **activityId** | **int**| The activity to grant acecess to (Activity ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdCustomersCustomerIdDelete()`

```php
apiTeamsIdCustomersCustomerIdDelete($id, $customerId): \Fiteco\KimaiClient\Model\TeamEntity
```

Revokes access for a customer from a team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team whose permission will be revoked
$customerId = 56; // int | The customer to remove (Customer ID)

try {
    $result = $apiInstance->apiTeamsIdCustomersCustomerIdDelete($id, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdCustomersCustomerIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team whose permission will be revoked |
 **customerId** | **int**| The customer to remove (Customer ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdCustomersCustomerIdPost()`

```php
apiTeamsIdCustomersCustomerIdPost($id, $customerId): \Fiteco\KimaiClient\Model\TeamEntity
```

Grant the team access to a customer

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team that is granted access
$customerId = 56; // int | The customer to grant acecess to (Customer ID)

try {
    $result = $apiInstance->apiTeamsIdCustomersCustomerIdPost($id, $customerId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdCustomersCustomerIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team that is granted access |
 **customerId** | **int**| The customer to grant acecess to (Customer ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdDelete()`

```php
apiTeamsIdDelete($id)
```

Delete a team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Team ID to delete

try {
    $apiInstance->apiTeamsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Team ID to delete |

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

## `apiTeamsIdGet()`

```php
apiTeamsIdGet($id): \Fiteco\KimaiClient\Model\TeamEntity
```

Returns one team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->apiTeamsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdMembersUserIdDelete()`

```php
apiTeamsIdMembersUserIdDelete($id, $userId): \Fiteco\KimaiClient\Model\TeamEntity
```

Removes a member from the team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team from which the member will be removed
$userId = 56; // int | The team member to remove (User ID)

try {
    $result = $apiInstance->apiTeamsIdMembersUserIdDelete($id, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdMembersUserIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team from which the member will be removed |
 **userId** | **int**| The team member to remove (User ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdMembersUserIdPost()`

```php
apiTeamsIdMembersUserIdPost($id, $userId): \Fiteco\KimaiClient\Model\TeamEntity
```

Add a new member to a team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team which will receive the new member
$userId = 56; // int | The team member to add (User ID)

try {
    $result = $apiInstance->apiTeamsIdMembersUserIdPost($id, $userId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdMembersUserIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team which will receive the new member |
 **userId** | **int**| The team member to add (User ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdPatch()`

```php
apiTeamsIdPatch($id, $body): \Fiteco\KimaiClient\Model\TeamEntity
```

Update an existing team

Update an existing team, you can pass all or just a subset of all attributes (passing users will replace all existing ones)

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Team ID to update
$body = new \Fiteco\KimaiClient\Model\TeamEditForm(); // \Fiteco\KimaiClient\Model\TeamEditForm

try {
    $result = $apiInstance->apiTeamsIdPatch($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Team ID to update |
 **body** | [**\Fiteco\KimaiClient\Model\TeamEditForm**](../Model/TeamEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdProjectsProjectIdDelete()`

```php
apiTeamsIdProjectsProjectIdDelete($id, $projectId): \Fiteco\KimaiClient\Model\TeamEntity
```

Revokes access for a project from a team

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team whose permission will be revoked
$projectId = 56; // int | The project to remove (Project ID)

try {
    $result = $apiInstance->apiTeamsIdProjectsProjectIdDelete($id, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdProjectsProjectIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team whose permission will be revoked |
 **projectId** | **int**| The project to remove (Project ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsIdProjectsProjectIdPost()`

```php
apiTeamsIdProjectsProjectIdPost($id, $projectId): \Fiteco\KimaiClient\Model\TeamEntity
```

Grant the team access to a project

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The team that is granted access
$projectId = 56; // int | The project to grant acecess to (Project ID)

try {
    $result = $apiInstance->apiTeamsIdProjectsProjectIdPost($id, $projectId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsIdProjectsProjectIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The team that is granted access |
 **projectId** | **int**| The project to grant acecess to (Project ID) |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `apiTeamsPost()`

```php
apiTeamsPost($body): \Fiteco\KimaiClient\Model\TeamEntity
```

Creates a new team

Creates a new team and returns it afterwards

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


$apiInstance = new Fiteco\KimaiClient\Api\TeamApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Fiteco\KimaiClient\Model\TeamEditForm(); // \Fiteco\KimaiClient\Model\TeamEditForm

try {
    $result = $apiInstance->apiTeamsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamApi->apiTeamsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Fiteco\KimaiClient\Model\TeamEditForm**](../Model/TeamEditForm.md)|  |

### Return type

[**\Fiteco\KimaiClient\Model\TeamEntity**](../Model/TeamEntity.md)

### Authorization

[apiToken](../../README.md#apiToken), [apiUser](../../README.md#apiUser)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
