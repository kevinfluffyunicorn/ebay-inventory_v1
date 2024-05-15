<?php
/**
 * EbayOfferDetailsWithId
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Inventory API
 *
 * The Inventory API is used to create and manage inventory, and then to publish and manage this inventory on an eBay marketplace. There are also methods in this API that will convert eligible, active eBay listings into the Inventory API model.
 *
 * The version of the OpenAPI document: 1.17.4
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.5.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * EbayOfferDetailsWithId Class Doc Comment
 *
 * @category Class
 * @description &lt;This type provides details of an offer, and is used by the base request payload of the &lt;strong&gt;updateOffer&lt;/strong&gt; call. Every field that is currently set with the unpublished/published offer must also be passed into the &lt;strong&gt;updateOffer&lt;/strong&gt; call, even those fields whose values are not changing. Note that for published offers, a successful &lt;strong&gt;updateOffer&lt;/strong&gt; call will actually update the active eBay listing with whatever changes were made.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EbayOfferDetailsWithId implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EbayOfferDetailsWithId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_quantity' => 'int',
        'category_id' => 'string',
        'charity' => '\OpenAPI\Client\Model\Charity',
        'extended_producer_responsibility' => '\OpenAPI\Client\Model\ExtendedProducerResponsibility',
        'hide_buyer_details' => 'bool',
        'include_catalog_product_details' => 'bool',
        'listing_description' => 'string',
        'listing_duration' => 'string',
        'listing_policies' => '\OpenAPI\Client\Model\ListingPolicies',
        'listing_start_date' => 'string',
        'lot_size' => 'int',
        'merchant_location_key' => 'string',
        'pricing_summary' => '\OpenAPI\Client\Model\PricingSummary',
        'quantity_limit_per_buyer' => 'int',
        'regulatory' => '\OpenAPI\Client\Model\Regulatory',
        'secondary_category_id' => 'string',
        'store_category_names' => 'string[]',
        'tax' => '\OpenAPI\Client\Model\Tax'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_quantity' => 'int32',
        'category_id' => null,
        'charity' => null,
        'extended_producer_responsibility' => null,
        'hide_buyer_details' => null,
        'include_catalog_product_details' => null,
        'listing_description' => null,
        'listing_duration' => null,
        'listing_policies' => null,
        'listing_start_date' => null,
        'lot_size' => 'int32',
        'merchant_location_key' => null,
        'pricing_summary' => null,
        'quantity_limit_per_buyer' => 'int32',
        'regulatory' => null,
        'secondary_category_id' => null,
        'store_category_names' => null,
        'tax' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_quantity' => false,
        'category_id' => false,
        'charity' => false,
        'extended_producer_responsibility' => false,
        'hide_buyer_details' => false,
        'include_catalog_product_details' => false,
        'listing_description' => false,
        'listing_duration' => false,
        'listing_policies' => false,
        'listing_start_date' => false,
        'lot_size' => false,
        'merchant_location_key' => false,
        'pricing_summary' => false,
        'quantity_limit_per_buyer' => false,
        'regulatory' => false,
        'secondary_category_id' => false,
        'store_category_names' => false,
        'tax' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'available_quantity' => 'availableQuantity',
        'category_id' => 'categoryId',
        'charity' => 'charity',
        'extended_producer_responsibility' => 'extendedProducerResponsibility',
        'hide_buyer_details' => 'hideBuyerDetails',
        'include_catalog_product_details' => 'includeCatalogProductDetails',
        'listing_description' => 'listingDescription',
        'listing_duration' => 'listingDuration',
        'listing_policies' => 'listingPolicies',
        'listing_start_date' => 'listingStartDate',
        'lot_size' => 'lotSize',
        'merchant_location_key' => 'merchantLocationKey',
        'pricing_summary' => 'pricingSummary',
        'quantity_limit_per_buyer' => 'quantityLimitPerBuyer',
        'regulatory' => 'regulatory',
        'secondary_category_id' => 'secondaryCategoryId',
        'store_category_names' => 'storeCategoryNames',
        'tax' => 'tax'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_quantity' => 'setAvailableQuantity',
        'category_id' => 'setCategoryId',
        'charity' => 'setCharity',
        'extended_producer_responsibility' => 'setExtendedProducerResponsibility',
        'hide_buyer_details' => 'setHideBuyerDetails',
        'include_catalog_product_details' => 'setIncludeCatalogProductDetails',
        'listing_description' => 'setListingDescription',
        'listing_duration' => 'setListingDuration',
        'listing_policies' => 'setListingPolicies',
        'listing_start_date' => 'setListingStartDate',
        'lot_size' => 'setLotSize',
        'merchant_location_key' => 'setMerchantLocationKey',
        'pricing_summary' => 'setPricingSummary',
        'quantity_limit_per_buyer' => 'setQuantityLimitPerBuyer',
        'regulatory' => 'setRegulatory',
        'secondary_category_id' => 'setSecondaryCategoryId',
        'store_category_names' => 'setStoreCategoryNames',
        'tax' => 'setTax'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_quantity' => 'getAvailableQuantity',
        'category_id' => 'getCategoryId',
        'charity' => 'getCharity',
        'extended_producer_responsibility' => 'getExtendedProducerResponsibility',
        'hide_buyer_details' => 'getHideBuyerDetails',
        'include_catalog_product_details' => 'getIncludeCatalogProductDetails',
        'listing_description' => 'getListingDescription',
        'listing_duration' => 'getListingDuration',
        'listing_policies' => 'getListingPolicies',
        'listing_start_date' => 'getListingStartDate',
        'lot_size' => 'getLotSize',
        'merchant_location_key' => 'getMerchantLocationKey',
        'pricing_summary' => 'getPricingSummary',
        'quantity_limit_per_buyer' => 'getQuantityLimitPerBuyer',
        'regulatory' => 'getRegulatory',
        'secondary_category_id' => 'getSecondaryCategoryId',
        'store_category_names' => 'getStoreCategoryNames',
        'tax' => 'getTax'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('available_quantity', $data ?? [], null);
        $this->setIfExists('category_id', $data ?? [], null);
        $this->setIfExists('charity', $data ?? [], null);
        $this->setIfExists('extended_producer_responsibility', $data ?? [], null);
        $this->setIfExists('hide_buyer_details', $data ?? [], null);
        $this->setIfExists('include_catalog_product_details', $data ?? [], null);
        $this->setIfExists('listing_description', $data ?? [], null);
        $this->setIfExists('listing_duration', $data ?? [], null);
        $this->setIfExists('listing_policies', $data ?? [], null);
        $this->setIfExists('listing_start_date', $data ?? [], null);
        $this->setIfExists('lot_size', $data ?? [], null);
        $this->setIfExists('merchant_location_key', $data ?? [], null);
        $this->setIfExists('pricing_summary', $data ?? [], null);
        $this->setIfExists('quantity_limit_per_buyer', $data ?? [], null);
        $this->setIfExists('regulatory', $data ?? [], null);
        $this->setIfExists('secondary_category_id', $data ?? [], null);
        $this->setIfExists('store_category_names', $data ?? [], null);
        $this->setIfExists('tax', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets available_quantity
     *
     * @return int|null
     */
    public function getAvailableQuantity()
    {
        return $this->container['available_quantity'];
    }

    /**
     * Sets available_quantity
     *
     * @param int|null $available_quantity This integer value sets the quantity of the inventory item that will be available through the offer. Quantity must be set to <code>1</code> or more in order for the inventory item to be purchasable. This value should not be more than the quantity that is specified for the inventory item record. For auction listings, this value must be <code>1</code>. <br><br>If this field exists for the current unpublished or published offer, it should be provided again in the <strong>updateOffer</strong> call, even if the value is not changing. If this particular field is omitted in an <strong>updateOffer</strong> call, the general available quantity set for the inventory item record may be used instead, and this may not be accurate if the inventory item is being sold across multiple marketplaces.
     *
     * @return self
     */
    public function setAvailableQuantity($available_quantity)
    {
        if (is_null($available_quantity)) {
            throw new \InvalidArgumentException('non-nullable available_quantity cannot be null');
        }
        $this->container['available_quantity'] = $available_quantity;

        return $this;
    }

    /**
     * Gets category_id
     *
     * @return string|null
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param string|null $category_id The unique identifier of the eBay category that the inventory item is/will be listed under. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions \" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. The seller passes in a query string like \"<em>iPhone 6</em>\", and category ID values for suggested categories are returned in the response.<br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the eBay category is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur. The eBay category of an active eBay listing cannot be changed once the listing has one or more sales, or if the listing is scheduled to end in less than 12 hours.
     *
     * @return self
     */
    public function setCategoryId($category_id)
    {
        if (is_null($category_id)) {
            throw new \InvalidArgumentException('non-nullable category_id cannot be null');
        }
        $this->container['category_id'] = $category_id;

        return $this;
    }

    /**
     * Gets charity
     *
     * @return \OpenAPI\Client\Model\Charity|null
     */
    public function getCharity()
    {
        return $this->container['charity'];
    }

    /**
     * Sets charity
     *
     * @param \OpenAPI\Client\Model\Charity|null $charity charity
     *
     * @return self
     */
    public function setCharity($charity)
    {
        if (is_null($charity)) {
            throw new \InvalidArgumentException('non-nullable charity cannot be null');
        }
        $this->container['charity'] = $charity;

        return $this;
    }

    /**
     * Gets extended_producer_responsibility
     *
     * @return \OpenAPI\Client\Model\ExtendedProducerResponsibility|null
     */
    public function getExtendedProducerResponsibility()
    {
        return $this->container['extended_producer_responsibility'];
    }

    /**
     * Sets extended_producer_responsibility
     *
     * @param \OpenAPI\Client\Model\ExtendedProducerResponsibility|null $extended_producer_responsibility extended_producer_responsibility
     *
     * @return self
     */
    public function setExtendedProducerResponsibility($extended_producer_responsibility)
    {
        if (is_null($extended_producer_responsibility)) {
            throw new \InvalidArgumentException('non-nullable extended_producer_responsibility cannot be null');
        }
        $this->container['extended_producer_responsibility'] = $extended_producer_responsibility;

        return $this;
    }

    /**
     * Gets hide_buyer_details
     *
     * @return bool|null
     */
    public function getHideBuyerDetails()
    {
        return $this->container['hide_buyer_details'];
    }

    /**
     * Sets hide_buyer_details
     *
     * @param bool|null $hide_buyer_details This field is included and set to <code>true</code> if the seller wishes to update a published or unpublished offer with the private listing feature. Alternatively, the seller could also remove the private listing feature (if already set for a published or unpublished offer) by including this field and setting it to <code>false</code>. <br><br> Sellers may want to use this option when they believe that a listing's potential bidders/buyers would not want their obfuscated user IDs (and feedback scores) exposed to other users.
     *
     * @return self
     */
    public function setHideBuyerDetails($hide_buyer_details)
    {
        if (is_null($hide_buyer_details)) {
            throw new \InvalidArgumentException('non-nullable hide_buyer_details cannot be null');
        }
        $this->container['hide_buyer_details'] = $hide_buyer_details;

        return $this;
    }

    /**
     * Gets include_catalog_product_details
     *
     * @return bool|null
     */
    public function getIncludeCatalogProductDetails()
    {
        return $this->container['include_catalog_product_details'];
    }

    /**
     * Sets include_catalog_product_details
     *
     * @param bool|null $include_catalog_product_details This field indicates whether or not eBay product catalog details are applied to a listing. A value of <code>true</code> indicates the listing corresponds to the eBay product associated with the provided product identifier. The product identifier is provided in <strong>createOrReplaceInventoryItem</strong>.<p><span class=\"tablenote\"><strong>Note:</strong> Though the <strong>includeCatalogProductDetails</strong> parameter is not required to be submitted in the request, the parameter defaults to 'true' if omitted.</span></p>
     *
     * @return self
     */
    public function setIncludeCatalogProductDetails($include_catalog_product_details)
    {
        if (is_null($include_catalog_product_details)) {
            throw new \InvalidArgumentException('non-nullable include_catalog_product_details cannot be null');
        }
        $this->container['include_catalog_product_details'] = $include_catalog_product_details;

        return $this;
    }

    /**
     * Gets listing_description
     *
     * @return string|null
     */
    public function getListingDescription()
    {
        return $this->container['listing_description'];
    }

    /**
     * Sets listing_description
     *
     * @param string|null $listing_description The text in this field is (published offers), or will become (unpublished offers) the description of the eBay listing. This field is not immediately required for an unpublished offer, but will be required before publishing the offer. Note that if the <strong>listingDescription</strong> field was omitted in the <strong>createOffer</strong> call for the offer, the offer entity should have picked up the text provided in the <strong>product.description</strong> field of the inventory item record, or if the inventory item is part of a group, the offer entity should have picked up the text provided in the <strong>description</strong> field of the inventory item group record.<br><br>HTML tags and markup can be used in listing descriptions, but each character counts toward the max length limit.<br><br><span class=\"tablenote\"> <strong>Note:</strong> To ensure that their short listing description is optimized when viewed on mobile devices, sellers should strongly consider using eBay's <a href=\"https://pages.ebay.com/sell/itemdescription/customizeyoursummary.html \" target=\"_blank\">View Item description summary feature</a> when listing their items. Keep in mind that the 'short' listing description is what prospective buyers first see when they view the listing on a mobile device. The 'full' listing description is also available to mobile users when they click on the short listing description, but the full description is not automatically optimized for viewing in mobile devices, and many users won't even drill down to the full description.<br><br> Using HTML div and span tag attributes, this feature allows sellers to customize and fully control the short listing description that is displayed to prospective buyers when viewing the listing on a mobile device. The short listing description on mobile devices is limited to 800 characters, and whenever the full listing description (provided in this field, in UI, or seller tool) exceeds this limit, eBay uses a special algorithm to derive the best possible short listing description within the 800-character limit. However, due to some short listing description content being removed, it is definitely not ideal for the seller, and could lead to a bad buyer experience and possibly to a Significantly not as described (SNAD) case, since the buyer may not get complete details on the item when viewing the short listing description. See the eBay help page for more details on using the HTML div and span tags.</span><br><br>If this field exists for the current unpublished offer, it should be provided again in the <strong>updateOffer</strong> call, even if the text is not changing. For a published offer (aka active eBay listing), this field must be provided or an error may occur.<br><br><strong>Max length</strong>: 500000 (which includes HTML markup/tags)
     *
     * @return self
     */
    public function setListingDescription($listing_description)
    {
        if (is_null($listing_description)) {
            throw new \InvalidArgumentException('non-nullable listing_description cannot be null');
        }
        $this->container['listing_description'] = $listing_description;

        return $this;
    }

    /**
     * Gets listing_duration
     *
     * @return string|null
     */
    public function getListingDuration()
    {
        return $this->container['listing_duration'];
    }

    /**
     * Sets listing_duration
     *
     * @param string|null $listing_duration This field indicates the number of days that the listing will be active. For fixed-price listings, this value must be set to <code>GTC</code>, but auction listings support different listing durations.<br><br> The GTC (Good 'Til Cancelled) listings are automatically renewed each calendar month until the seller decides to end the listing.<br><br><span class=\"tablenote\"> <strong>Note:</strong> If the listing duration expires for an auction offer without a winning bidder, the listing then becomes available as a fixed-price offer and listing duration will be <code>GTC</code>.</span> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ListingDurationEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setListingDuration($listing_duration)
    {
        if (is_null($listing_duration)) {
            throw new \InvalidArgumentException('non-nullable listing_duration cannot be null');
        }
        $this->container['listing_duration'] = $listing_duration;

        return $this;
    }

    /**
     * Gets listing_policies
     *
     * @return \OpenAPI\Client\Model\ListingPolicies|null
     */
    public function getListingPolicies()
    {
        return $this->container['listing_policies'];
    }

    /**
     * Sets listing_policies
     *
     * @param \OpenAPI\Client\Model\ListingPolicies|null $listing_policies listing_policies
     *
     * @return self
     */
    public function setListingPolicies($listing_policies)
    {
        if (is_null($listing_policies)) {
            throw new \InvalidArgumentException('non-nullable listing_policies cannot be null');
        }
        $this->container['listing_policies'] = $listing_policies;

        return $this;
    }

    /**
     * Gets listing_start_date
     *
     * @return string|null
     */
    public function getListingStartDate()
    {
        return $this->container['listing_start_date'];
    }

    /**
     * Sets listing_start_date
     *
     * @param string|null $listing_start_date This field can be used with an unpublished offer if the seller wants to specify a time in the future that the listing will become active on eBay. The timestamp supplied in this field should be in UTC format, and it should be far enough in the future so that the seller will have enough time to publish the listing with the <strong>publishOffer</strong> method.<br><br> For example: 2023-05-30T19:08:00Z.<br><br> This field is optional, and it doesn't apply to offers where the corresponding listing is already active. If this field is not provided, the listing starts immediately after a successful <strong>publishOffer</strong> method.
     *
     * @return self
     */
    public function setListingStartDate($listing_start_date)
    {
        if (is_null($listing_start_date)) {
            throw new \InvalidArgumentException('non-nullable listing_start_date cannot be null');
        }
        $this->container['listing_start_date'] = $listing_start_date;

        return $this;
    }

    /**
     * Gets lot_size
     *
     * @return int|null
     */
    public function getLotSize()
    {
        return $this->container['lot_size'];
    }

    /**
     * Sets lot_size
     *
     * @param int|null $lot_size This field is only applicable if the listing is a lot listing. A lot listing is a listing that has multiple quantity of the same item, such as four identical tires being sold as a single offer, or it can be a mixed lot of similar items, such as used clothing items or an assortment of baseball cards. Whether the lot listing involved identical items or a mixed lot, the integer value passed into this field is the total number of items in the lot. Lots can be used for auction and fixed-price listings.
     *
     * @return self
     */
    public function setLotSize($lot_size)
    {
        if (is_null($lot_size)) {
            throw new \InvalidArgumentException('non-nullable lot_size cannot be null');
        }
        $this->container['lot_size'] = $lot_size;

        return $this;
    }

    /**
     * Gets merchant_location_key
     *
     * @return string|null
     */
    public function getMerchantLocationKey()
    {
        return $this->container['merchant_location_key'];
    }

    /**
     * Sets merchant_location_key
     *
     * @param string|null $merchant_location_key The unique identifier of a merchant's inventory location (where the inventory item in the offer is located).<br><br> To get more information about inventory locations, the <a href=\"/api-docs/sell/inventory/resources/location/methods/getInventoryLocations\" target=\"_blank\">getInventoryLocations</a> method can be used.br><br><span class=\"tablenote\"><b>Note:</b> This field is not initially required upon first creating an offer, but will become required before an offer can be published.</span><br><b>Max length</b>: 36
     *
     * @return self
     */
    public function setMerchantLocationKey($merchant_location_key)
    {
        if (is_null($merchant_location_key)) {
            throw new \InvalidArgumentException('non-nullable merchant_location_key cannot be null');
        }
        $this->container['merchant_location_key'] = $merchant_location_key;

        return $this;
    }

    /**
     * Gets pricing_summary
     *
     * @return \OpenAPI\Client\Model\PricingSummary|null
     */
    public function getPricingSummary()
    {
        return $this->container['pricing_summary'];
    }

    /**
     * Sets pricing_summary
     *
     * @param \OpenAPI\Client\Model\PricingSummary|null $pricing_summary pricing_summary
     *
     * @return self
     */
    public function setPricingSummary($pricing_summary)
    {
        if (is_null($pricing_summary)) {
            throw new \InvalidArgumentException('non-nullable pricing_summary cannot be null');
        }
        $this->container['pricing_summary'] = $pricing_summary;

        return $this;
    }

    /**
     * Gets quantity_limit_per_buyer
     *
     * @return int|null
     */
    public function getQuantityLimitPerBuyer()
    {
        return $this->container['quantity_limit_per_buyer'];
    }

    /**
     * Sets quantity_limit_per_buyer
     *
     * @param int|null $quantity_limit_per_buyer This field is only applicable and set if the seller wishes to set a restriction on the purchase quantity per seller. If this field is set by the seller for the offer, then each distinct buyer may purchase up to, but not exceeding the quantity specified for this field. So, if this field's value is <code>5</code>, each buyer may purchase between one to five of these products, and the purchases can occur in one multiple-quantity purchase, or over multiple transactions. If a buyer attempts to purchase one or more of these products, and the cumulative quantity will take the buyer beyond the quantity limit, that buyer will be blocked from that purchase.<br><br>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the value is not changing.<br>
     *
     * @return self
     */
    public function setQuantityLimitPerBuyer($quantity_limit_per_buyer)
    {
        if (is_null($quantity_limit_per_buyer)) {
            throw new \InvalidArgumentException('non-nullable quantity_limit_per_buyer cannot be null');
        }
        $this->container['quantity_limit_per_buyer'] = $quantity_limit_per_buyer;

        return $this;
    }

    /**
     * Gets regulatory
     *
     * @return \OpenAPI\Client\Model\Regulatory|null
     */
    public function getRegulatory()
    {
        return $this->container['regulatory'];
    }

    /**
     * Sets regulatory
     *
     * @param \OpenAPI\Client\Model\Regulatory|null $regulatory regulatory
     *
     * @return self
     */
    public function setRegulatory($regulatory)
    {
        if (is_null($regulatory)) {
            throw new \InvalidArgumentException('non-nullable regulatory cannot be null');
        }
        $this->container['regulatory'] = $regulatory;

        return $this;
    }

    /**
     * Gets secondary_category_id
     *
     * @return string|null
     */
    public function getSecondaryCategoryId()
    {
        return $this->container['secondary_category_id'];
    }

    /**
     * Sets secondary_category_id
     *
     * @param string|null $secondary_category_id The unique identifier for a secondary category. This field is applicable if the seller decides to list the item under two categories. Sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCategorySuggestions\" target=\"_blank\">getCategorySuggestions</a> method of the Taxonomy API to retrieve suggested category ID values. A fee may be charged when adding a secondary category to a listing. <br><br><span class=\"tablenote\"><strong>Note:</strong> You cannot list <strong>US eBay Motors</strong> vehicles in two categories. However, you can list <strong>Parts & Accessories</strong> in two categories.</span>
     *
     * @return self
     */
    public function setSecondaryCategoryId($secondary_category_id)
    {
        if (is_null($secondary_category_id)) {
            throw new \InvalidArgumentException('non-nullable secondary_category_id cannot be null');
        }
        $this->container['secondary_category_id'] = $secondary_category_id;

        return $this;
    }

    /**
     * Gets store_category_names
     *
     * @return string[]|null
     */
    public function getStoreCategoryNames()
    {
        return $this->container['store_category_names'];
    }

    /**
     * Sets store_category_names
     *
     * @param string[]|null $store_category_names This container is used if the seller would like to place the inventory item into one or two store categories that the seller has set up for their eBay store. The string value(s) passed in to this container will be the full path(s) to the store categories, as shown below:<br> <pre><code>\"storeCategoryNames\": [<br> \"/Fashion/Men/Shirts\", <br> \"/Fashion/Men/Accessories\" ], </pre></code>If this field currently exists for an unpublished or published offer, it should be provided again in an <strong>updateOffer</strong> call, even if the eBay categories are not changing.
     *
     * @return self
     */
    public function setStoreCategoryNames($store_category_names)
    {
        if (is_null($store_category_names)) {
            throw new \InvalidArgumentException('non-nullable store_category_names cannot be null');
        }
        $this->container['store_category_names'] = $store_category_names;

        return $this;
    }

    /**
     * Gets tax
     *
     * @return \OpenAPI\Client\Model\Tax|null
     */
    public function getTax()
    {
        return $this->container['tax'];
    }

    /**
     * Sets tax
     *
     * @param \OpenAPI\Client\Model\Tax|null $tax tax
     *
     * @return self
     */
    public function setTax($tax)
    {
        if (is_null($tax)) {
            throw new \InvalidArgumentException('non-nullable tax cannot be null');
        }
        $this->container['tax'] = $tax;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

