# # ProjectEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentTitle** | **string** |  | [optional]
**customer** | **int** |  | [optional]
**id** | **int** |  | [optional]
**name** | **string** |  |
**orderNumber** | **string** |  | [optional]
**orderDate** | [**\DateTime**](\DateTime.md) |  | [optional]
**start** | [**\DateTime**](\DateTime.md) |  | [optional]
**end** | [**\DateTime**](\DateTime.md) |  | [optional]
**comment** | **string** |  | [optional]
**visible** | **bool** |  |
**budget** | **float** |  |
**timeBudget** | **int** |  |
**metaFields** | [**\Fiteco\KimaiClient\Model\ProjectMeta[]**](ProjectMeta.md) | All visible meta (custom) fields registered with this project | [optional]
**teams** | [**\Fiteco\KimaiClient\Model\Team[]**](Team.md) | If no team is assigned, everyone can access the project (also depends on the teams of the customer) | [optional]
**color** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
