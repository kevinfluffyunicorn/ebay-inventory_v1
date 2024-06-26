# # WithdrawByInventoryItemGroupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inventory_item_group_key** | **string** | This is the unique identifier of the inventory item group. This identifier is automatically generated by eBay once an inventory item group is created.&lt;br&gt;&lt;br&gt;To retrieve an &lt;strong&gt;inventoryItemGroupKey&lt;/strong&gt; value, you can use the &lt;a href&#x3D;\&quot;/api-docs/sell/inventory/resources/inventory_item/methods/getInventoryItem \&quot; target&#x3D;\&quot;_blank\&quot;&gt;getInventoryItem&lt;/a&gt; method to retrieve an inventory item that is known to be in the inventory item group to publish, and then look for the inventory item group identifier under the &lt;strong&gt;groupIds&lt;/strong&gt; container in the response of that call. | [optional]
**marketplace_id** | **string** | This is the unique identifier of the eBay site for which the offer will be made available. See &lt;b&gt;MarketplaceEnum&lt;/b&gt; for supported values. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/inventory/types/slr:MarketplaceEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
