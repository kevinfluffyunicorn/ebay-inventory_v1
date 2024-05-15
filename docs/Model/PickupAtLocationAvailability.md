# # PickupAtLocationAvailability

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_type** | **string** | The enumeration value in this field indicates the availability status of the inventory item at the merchant&#39;s physical store specified by the &lt;strong&gt;pickupAtLocationAvailability.merchantLocationKey&lt;/strong&gt; field. This field is required if the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container is used, and is always returned with the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container.  &lt;br&gt;&lt;br&gt; See &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum\&quot; target&#x3D;\&quot;_blank\&quot;&gt;AvailabilityTypeEnum&lt;/a&gt; for more information about how/when you use each enumeration value. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]
**fulfillment_time** | [**\OpenAPI\Client\Model\TimeDuration**](TimeDuration.md) |  | [optional]
**merchant_location_key** | **string** | The unique identifier of a merchant&#39;s store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant&#39;s store is currently awaiting for inventory, the &lt;strong&gt;availabilityType&lt;/strong&gt; value should be &lt;code&gt;SHIP_TO_STORE&lt;/code&gt;. This field is required if the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container is used, and is always returned with the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container.&lt;br&gt;&lt;br&gt;Use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/location/methods/getInventoryLocations\&quot; target&#x3D;\&quot;_blank\&quot;&gt;getInventoryLocations&lt;/a&gt; method to retrieve merchant location keys.&lt;br&gt;&lt;br&gt;&lt;b&gt;Max length&lt;/b&gt;: 36 | [optional]
**quantity** | **int** | This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  &lt;strong&gt;merchantLocationKey&lt;/strong&gt; value.  The value of &lt;strong&gt;quantity&lt;/strong&gt; should be an integer value greater than &lt;code&gt;0&lt;/code&gt;, unless the inventory item is out of stock. This field is required if the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container is used, and is always returned with the &lt;strong&gt;pickupAtLocationAvailability&lt;/strong&gt; container. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)