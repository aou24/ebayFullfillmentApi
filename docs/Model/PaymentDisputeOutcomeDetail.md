# # PaymentDisputeOutcomeDetail

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fees** | [**\OpenAPI\Client\Model\SimpleAmount**](SimpleAmount.md) |  | [optional] 
**protection_status** | **string** | This enumeration value indicates if the seller is fully protected, partially protected, or not protected by eBay for the payment dispute. This field is always returned once the payment dispute is resolved. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/ProtectionStatusEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**reason_for_closure** | **string** | The enumeration value returned in this field indicates the outcome of the payment dispute for the seller. This field is always returned once the payment dispute is resolved. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/OutcomeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**recoup_amount** | [**\OpenAPI\Client\Model\SimpleAmount**](SimpleAmount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


