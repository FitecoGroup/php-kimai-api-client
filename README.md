# Kimai PHP Api Client

JSON API for the Kimai 2 time-tracking software. 
Read more about its usage in the 
[API documentation](https://www.kimai.org/documentation/rest-api.html) 
and then download a [Swagger file](doc.json) for import e.g. in Postman.
Be aware: it is not yet considered stable and BC breaks might happen, 
especially when using code generation.
The order of JSON attributes is not guaranteed.



## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "require": {
    "fiteco-group/kimai-client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure host on which Kimai is running
$config = Fiteco\KimaiClient\Configuration::getDefaultConfiguration()->setHost('https://kimai.RememberToSetMe.com');

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

## API Endpoints

All URIs are relative to Kimai installation.

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityApi* | [**apiActivitiesGet**](docs/Api/ActivityApi.md#apiactivitiesget) | **GET** /api/activities | Returns a collection of activities
*ActivityApi* | [**apiActivitiesIdGet**](docs/Api/ActivityApi.md#apiactivitiesidget) | **GET** /api/activities/{id} | Returns one activity
*ActivityApi* | [**apiActivitiesIdMetaPatch**](docs/Api/ActivityApi.md#apiactivitiesidmetapatch) | **PATCH** /api/activities/{id}/meta | Sets the value of a meta-field for an existing activity
*ActivityApi* | [**apiActivitiesIdPatch**](docs/Api/ActivityApi.md#apiactivitiesidpatch) | **PATCH** /api/activities/{id} | Update an existing activity
*ActivityApi* | [**apiActivitiesIdRatesGet**](docs/Api/ActivityApi.md#apiactivitiesidratesget) | **GET** /api/activities/{id}/rates | Returns a collection of all rates for one activity
*ActivityApi* | [**apiActivitiesIdRatesPost**](docs/Api/ActivityApi.md#apiactivitiesidratespost) | **POST** /api/activities/{id}/rates | Adds a new rate to an activity
*ActivityApi* | [**apiActivitiesIdRatesRateIdDelete**](docs/Api/ActivityApi.md#apiactivitiesidratesrateiddelete) | **DELETE** /api/activities/{id}/rates/{rateId} | Deletes one rate for an activity
*ActivityApi* | [**apiActivitiesPost**](docs/Api/ActivityApi.md#apiactivitiespost) | **POST** /api/activities | Creates a new activity
*CustomerApi* | [**apiCustomersGet**](docs/Api/CustomerApi.md#apicustomersget) | **GET** /api/customers | Returns a collection of customers
*CustomerApi* | [**apiCustomersIdGet**](docs/Api/CustomerApi.md#apicustomersidget) | **GET** /api/customers/{id} | Returns one customer
*CustomerApi* | [**apiCustomersIdMetaPatch**](docs/Api/CustomerApi.md#apicustomersidmetapatch) | **PATCH** /api/customers/{id}/meta | Sets the value of a meta-field for an existing customer
*CustomerApi* | [**apiCustomersIdPatch**](docs/Api/CustomerApi.md#apicustomersidpatch) | **PATCH** /api/customers/{id} | Update an existing customer
*CustomerApi* | [**apiCustomersIdRatesGet**](docs/Api/CustomerApi.md#apicustomersidratesget) | **GET** /api/customers/{id}/rates | Returns a collection of all rates for one customer
*CustomerApi* | [**apiCustomersIdRatesPost**](docs/Api/CustomerApi.md#apicustomersidratespost) | **POST** /api/customers/{id}/rates | Adds a new rate to a customer
*CustomerApi* | [**apiCustomersIdRatesRateIdDelete**](docs/Api/CustomerApi.md#apicustomersidratesrateiddelete) | **DELETE** /api/customers/{id}/rates/{rateId} | Deletes one rate for an customer
*CustomerApi* | [**apiCustomersPost**](docs/Api/CustomerApi.md#apicustomerspost) | **POST** /api/customers | Creates a new customer
*DefaultApi* | [**apiConfigI18nGet**](docs/Api/DefaultApi.md#apiconfigi18nget) | **GET** /api/config/i18n | Returns the user specific locale configuration
*DefaultApi* | [**apiConfigTimesheetGet**](docs/Api/DefaultApi.md#apiconfigtimesheetget) | **GET** /api/config/timesheet | Returns the timesheet configuration
*DefaultApi* | [**apiPingGet**](docs/Api/DefaultApi.md#apipingget) | **GET** /api/ping | A testing route for the API
*DefaultApi* | [**apiPluginsGet**](docs/Api/DefaultApi.md#apipluginsget) | **GET** /api/plugins | Returns information about installed Plugins
*DefaultApi* | [**apiVersionGet**](docs/Api/DefaultApi.md#apiversionget) | **GET** /api/version | Returns information about the Kimai release
*ProjectApi* | [**apiProjectsGet**](docs/Api/ProjectApi.md#apiprojectsget) | **GET** /api/projects | Returns a collection of projects.
*ProjectApi* | [**apiProjectsIdGet**](docs/Api/ProjectApi.md#apiprojectsidget) | **GET** /api/projects/{id} | Returns one project
*ProjectApi* | [**apiProjectsIdMetaPatch**](docs/Api/ProjectApi.md#apiprojectsidmetapatch) | **PATCH** /api/projects/{id}/meta | Sets the value of a meta-field for an existing project
*ProjectApi* | [**apiProjectsIdPatch**](docs/Api/ProjectApi.md#apiprojectsidpatch) | **PATCH** /api/projects/{id} | Update an existing project
*ProjectApi* | [**apiProjectsIdRatesGet**](docs/Api/ProjectApi.md#apiprojectsidratesget) | **GET** /api/projects/{id}/rates | Returns a collection of all rates for one project
*ProjectApi* | [**apiProjectsIdRatesPost**](docs/Api/ProjectApi.md#apiprojectsidratespost) | **POST** /api/projects/{id}/rates | Adds a new rate to an project
*ProjectApi* | [**apiProjectsIdRatesRateIdDelete**](docs/Api/ProjectApi.md#apiprojectsidratesrateiddelete) | **DELETE** /api/projects/{id}/rates/{rateId} | Deletes one rate for an project
*ProjectApi* | [**apiProjectsPost**](docs/Api/ProjectApi.md#apiprojectspost) | **POST** /api/projects | Creates a new project
*TagApi* | [**apiTagsGet**](docs/Api/TagApi.md#apitagsget) | **GET** /api/tags | Fetch all existing tags
*TagApi* | [**apiTagsIdDelete**](docs/Api/TagApi.md#apitagsiddelete) | **DELETE** /api/tags/{id} | Delete a tag
*TagApi* | [**apiTagsPost**](docs/Api/TagApi.md#apitagspost) | **POST** /api/tags | Creates a new tag
*TeamApi* | [**apiTeamsGet**](docs/Api/TeamApi.md#apiteamsget) | **GET** /api/teams | Fetch all existing teams
*TeamApi* | [**apiTeamsIdActivitiesActivityIdDelete**](docs/Api/TeamApi.md#apiteamsidactivitiesactivityiddelete) | **DELETE** /api/teams/{id}/activities/{activityId} | Revokes access for an activity from a team
*TeamApi* | [**apiTeamsIdActivitiesActivityIdPost**](docs/Api/TeamApi.md#apiteamsidactivitiesactivityidpost) | **POST** /api/teams/{id}/activities/{activityId} | Grant the team access to an activity
*TeamApi* | [**apiTeamsIdCustomersCustomerIdDelete**](docs/Api/TeamApi.md#apiteamsidcustomerscustomeriddelete) | **DELETE** /api/teams/{id}/customers/{customerId} | Revokes access for a customer from a team
*TeamApi* | [**apiTeamsIdCustomersCustomerIdPost**](docs/Api/TeamApi.md#apiteamsidcustomerscustomeridpost) | **POST** /api/teams/{id}/customers/{customerId} | Grant the team access to a customer
*TeamApi* | [**apiTeamsIdDelete**](docs/Api/TeamApi.md#apiteamsiddelete) | **DELETE** /api/teams/{id} | Delete a team
*TeamApi* | [**apiTeamsIdGet**](docs/Api/TeamApi.md#apiteamsidget) | **GET** /api/teams/{id} | Returns one team
*TeamApi* | [**apiTeamsIdMembersUserIdDelete**](docs/Api/TeamApi.md#apiteamsidmembersuseriddelete) | **DELETE** /api/teams/{id}/members/{userId} | Removes a member from the team
*TeamApi* | [**apiTeamsIdMembersUserIdPost**](docs/Api/TeamApi.md#apiteamsidmembersuseridpost) | **POST** /api/teams/{id}/members/{userId} | Add a new member to a team
*TeamApi* | [**apiTeamsIdPatch**](docs/Api/TeamApi.md#apiteamsidpatch) | **PATCH** /api/teams/{id} | Update an existing team
*TeamApi* | [**apiTeamsIdProjectsProjectIdDelete**](docs/Api/TeamApi.md#apiteamsidprojectsprojectiddelete) | **DELETE** /api/teams/{id}/projects/{projectId} | Revokes access for a project from a team
*TeamApi* | [**apiTeamsIdProjectsProjectIdPost**](docs/Api/TeamApi.md#apiteamsidprojectsprojectidpost) | **POST** /api/teams/{id}/projects/{projectId} | Grant the team access to a project
*TeamApi* | [**apiTeamsPost**](docs/Api/TeamApi.md#apiteamspost) | **POST** /api/teams | Creates a new team
*TimesheetApi* | [**apiTimesheetsActiveGet**](docs/Api/TimesheetApi.md#apitimesheetsactiveget) | **GET** /api/timesheets/active | Returns the collection of active timesheet records
*TimesheetApi* | [**apiTimesheetsGet**](docs/Api/TimesheetApi.md#apitimesheetsget) | **GET** /api/timesheets | Returns a collection of timesheet records
*TimesheetApi* | [**apiTimesheetsIdDelete**](docs/Api/TimesheetApi.md#apitimesheetsiddelete) | **DELETE** /api/timesheets/{id} | Delete an existing timesheet record
*TimesheetApi* | [**apiTimesheetsIdDuplicatePatch**](docs/Api/TimesheetApi.md#apitimesheetsidduplicatepatch) | **PATCH** /api/timesheets/{id}/duplicate | Duplicates an existing timesheet record
*TimesheetApi* | [**apiTimesheetsIdExportPatch**](docs/Api/TimesheetApi.md#apitimesheetsidexportpatch) | **PATCH** /api/timesheets/{id}/export | Switch the export state of a timesheet record to (un-)lock it
*TimesheetApi* | [**apiTimesheetsIdGet**](docs/Api/TimesheetApi.md#apitimesheetsidget) | **GET** /api/timesheets/{id} | Returns one timesheet record
*TimesheetApi* | [**apiTimesheetsIdMetaPatch**](docs/Api/TimesheetApi.md#apitimesheetsidmetapatch) | **PATCH** /api/timesheets/{id}/meta | Sets the value of a meta-field for an existing timesheet.
*TimesheetApi* | [**apiTimesheetsIdPatch**](docs/Api/TimesheetApi.md#apitimesheetsidpatch) | **PATCH** /api/timesheets/{id} | Update an existing timesheet record
*TimesheetApi* | [**apiTimesheetsIdRestartPatch**](docs/Api/TimesheetApi.md#apitimesheetsidrestartpatch) | **PATCH** /api/timesheets/{id}/restart | Restarts a previously stopped timesheet record for the current user
*TimesheetApi* | [**apiTimesheetsIdStopPatch**](docs/Api/TimesheetApi.md#apitimesheetsidstoppatch) | **PATCH** /api/timesheets/{id}/stop | Stops an active timesheet record
*TimesheetApi* | [**apiTimesheetsPost**](docs/Api/TimesheetApi.md#apitimesheetspost) | **POST** /api/timesheets | Creates a new timesheet record
*TimesheetApi* | [**apiTimesheetsRecentGet**](docs/Api/TimesheetApi.md#apitimesheetsrecentget) | **GET** /api/timesheets/recent | Returns the collection of recent user activities
*UserApi* | [**apiUsersGet**](docs/Api/UserApi.md#apiusersget) | **GET** /api/users | Returns the collection of all registered users
*UserApi* | [**apiUsersIdGet**](docs/Api/UserApi.md#apiusersidget) | **GET** /api/users/{id} | Return one user entity
*UserApi* | [**apiUsersIdPatch**](docs/Api/UserApi.md#apiusersidpatch) | **PATCH** /api/users/{id} | Update an existing user
*UserApi* | [**apiUsersMeGet**](docs/Api/UserApi.md#apiusersmeget) | **GET** /api/users/me | Return the current user entity
*UserApi* | [**apiUsersPost**](docs/Api/UserApi.md#apiuserspost) | **POST** /api/users | Creates a new user

## Models

- [Activity](docs/Model/Activity.md)
- [ActivityCollection](docs/Model/ActivityCollection.md)
- [ActivityEditForm](docs/Model/ActivityEditForm.md)
- [ActivityEntity](docs/Model/ActivityEntity.md)
- [ActivityExpanded](docs/Model/ActivityExpanded.md)
- [ActivityMeta](docs/Model/ActivityMeta.md)
- [ActivityRate](docs/Model/ActivityRate.md)
- [ActivityRateForm](docs/Model/ActivityRateForm.md)
- [Customer](docs/Model/Customer.md)
- [CustomerCollection](docs/Model/CustomerCollection.md)
- [CustomerEditForm](docs/Model/CustomerEditForm.md)
- [CustomerEntity](docs/Model/CustomerEntity.md)
- [CustomerMeta](docs/Model/CustomerMeta.md)
- [CustomerRate](docs/Model/CustomerRate.md)
- [CustomerRateForm](docs/Model/CustomerRateForm.md)
- [I18nConfig](docs/Model/I18nConfig.md)
- [InlineObject](docs/Model/InlineObject.md)
- [InlineObject1](docs/Model/InlineObject1.md)
- [InlineObject2](docs/Model/InlineObject2.md)
- [InlineObject3](docs/Model/InlineObject3.md)
- [InlineObject4](docs/Model/InlineObject4.md)
- [Plugin](docs/Model/Plugin.md)
- [Project](docs/Model/Project.md)
- [ProjectCollection](docs/Model/ProjectCollection.md)
- [ProjectEditForm](docs/Model/ProjectEditForm.md)
- [ProjectEntity](docs/Model/ProjectEntity.md)
- [ProjectExpanded](docs/Model/ProjectExpanded.md)
- [ProjectMeta](docs/Model/ProjectMeta.md)
- [ProjectRate](docs/Model/ProjectRate.md)
- [ProjectRateForm](docs/Model/ProjectRateForm.md)
- [TagEditForm](docs/Model/TagEditForm.md)
- [TagEntity](docs/Model/TagEntity.md)
- [Team](docs/Model/Team.md)
- [TeamCollection](docs/Model/TeamCollection.md)
- [TeamEditForm](docs/Model/TeamEditForm.md)
- [TeamEntity](docs/Model/TeamEntity.md)
- [TimesheetCollection](docs/Model/TimesheetCollection.md)
- [TimesheetCollectionExpanded](docs/Model/TimesheetCollectionExpanded.md)
- [TimesheetConfig](docs/Model/TimesheetConfig.md)
- [TimesheetEditForm](docs/Model/TimesheetEditForm.md)
- [TimesheetEntity](docs/Model/TimesheetEntity.md)
- [TimesheetEntityExpanded](docs/Model/TimesheetEntityExpanded.md)
- [TimesheetMeta](docs/Model/TimesheetMeta.md)
- [User](docs/Model/User.md)
- [UserCollection](docs/Model/UserCollection.md)
- [UserCreateForm](docs/Model/UserCreateForm.md)
- [UserEditForm](docs/Model/UserEditForm.md)
- [UserEntity](docs/Model/UserEntity.md)
- [Version](docs/Model/Version.md)

## Authorization

### apiToken

- **Type**: API key
- **API key parameter name**: X-AUTH-TOKEN
- **Location**: HTTP header



### apiUser

- **Type**: API key
- **API key parameter name**: X-AUTH-USER
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.6`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
