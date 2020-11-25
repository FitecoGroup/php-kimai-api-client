# # TeamEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**name** | **string** |  |
**teamlead** | [**\Fiteco\KimaiClient\Model\User**](User.md) |  |
**users** | [**\Fiteco\KimaiClient\Model\User[]**](User.md) | All team member, including the teamlead | [optional]
**customers** | [**\Fiteco\KimaiClient\Model\Customer[]**](Customer.md) | All customers assigned to the team | [optional]
**projects** | [**\Fiteco\KimaiClient\Model\Project[]**](Project.md) | All projects assigned to the team | [optional]
**activities** | [**\Fiteco\KimaiClient\Model\Activity[]**](Activity.md) | All activities assigned to the team | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
