# # TimesheetCollectionExpanded

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user** | **int** |  | [optional]
**tags** | **string[]** |  | [optional]
**id** | **int** |  | [optional]
**begin** | [**\DateTime**](\DateTime.md) |  |
**end** | [**\DateTime**](\DateTime.md) |  | [optional]
**duration** | **int** |  | [optional]
**activity** | [**\Fiteco\KimaiClient\Model\ActivityExpanded**](ActivityExpanded.md) |  |
**project** | [**\Fiteco\KimaiClient\Model\ProjectExpanded**](ProjectExpanded.md) |  |
**description** | **string** |  | [optional]
**rate** | **float** |  | [optional]
**internalRate** | **float** |  | [optional]
**exported** | **bool** |  |
**billable** | **bool** |  |
**metaFields** | [**\Fiteco\KimaiClient\Model\TimesheetMeta[]**](TimesheetMeta.md) | All visible meta (custom) fields registered with this timesheet | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
