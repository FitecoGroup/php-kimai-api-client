# # CustomerEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**number** | **string** |  | [optional]
**comment** | **string** |  | [optional]
**visible** | **bool** |  |
**company** | **string** |  | [optional]
**vatId** | **string** |  | [optional]
**contact** | **string** |  | [optional]
**address** | **string** |  | [optional]
**country** | **string** |  |
**currency** | **string** |  |
**phone** | **string** |  | [optional]
**fax** | **string** |  | [optional]
**mobile** | **string** |  | [optional]
**email** | **string** | Limited via RFC to 254 chars | [optional]
**homepage** | **string** |  | [optional]
**timezone** | **string** | Length was determined by a MySQL column via \&quot;use mysql;describe time_zone_name;\&quot; |
**budget** | **float** |  |
**timeBudget** | **int** |  |
**metaFields** | [**\Fiteco\KimaiClient\Model\CustomerMeta[]**](CustomerMeta.md) | All visible meta (custom) fields registered with this customer | [optional]
**teams** | [**\Fiteco\KimaiClient\Model\Team[]**](Team.md) | If no team is assigned, everyone can access the customer | [optional]
**color** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
