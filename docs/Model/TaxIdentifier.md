# # TaxIdentifier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**taxpayer_id** | **string** | This value is the unique tax ID associated with the buyer. The type of tax identification is shown in the taxIdentifierType field. | [optional] 
**tax_identifier_type** | **string** | This enumeration value indicates the type of tax identification being used for the buyer. The different tax types are defined in the TaxIdentifierTypeEnum type. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/TaxIdentifierTypeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**issuing_country** | **string** | This two-letter code indicates the country that issued the buyer&#39;s tax ID. The country that the two-letter code represents can be found in the CountryCodeEnum type, or in the ISO 3166 standard. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/devzone/rest/api-ref/fulfillment/types/CountryCodeEnum.html&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


