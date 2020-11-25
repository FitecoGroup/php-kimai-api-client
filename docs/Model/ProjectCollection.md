# # ProjectCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentTitle** | **string** |  | [optional]
**customer** | **int** |  | [optional]
**id** | **int** |  | [optional]
**name** | **string** |  |
**start** | [**\DateTime**](\DateTime.md) |  | [optional]
**end** | [**\DateTime**](\DateTime.md) |  | [optional]
**visible** | **bool** |  |
**metaFields** | [**\Fiteco\KimaiClient\Model\ProjectMeta[]**](ProjectMeta.md) | All visible meta (custom) fields registered with this project | [optional]
**teams** | [**\Fiteco\KimaiClient\Model\Team[]**](Team.md) | If no team is assigned, everyone can access the project (also depends on the teams of the customer) | [optional]
**color** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
