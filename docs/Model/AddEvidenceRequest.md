# # AddEvidenceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**evidence_type** | **string** | This field is used to indicate the type of evidence being provided through one or more evidence files. All evidence files (if more than one) should be associated with the evidence type passed in this field. See the EvidenceTypeEnum type for the supported evidence types. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/EvidenceTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**files** | [**\OpenAPI\Client\Model\FileEvidence[]**](FileEvidence.md) | This array is used to specify one or more evidence files that will become part of a new evidence set associated with a payment dispute. At least one evidence file must be specified in the files array. The unique identifier of an evidence file is returned in the response payload of the uploadEvidence method. | [optional] 
**line_items** | [**\OpenAPI\Client\Model\OrderLineItems[]**](OrderLineItems.md) | This required array identifies the order line item(s) for which the evidence file(s) will be applicable. Both the itemId and lineItemID fields are needed to identify each order line item, and both of these values are returned under the evidenceRequests.lineItems array in the getPaymentDispute response. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


