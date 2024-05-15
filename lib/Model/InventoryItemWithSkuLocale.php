<?php
/**
 * InventoryItemWithSkuLocale
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
 * InventoryItemWithSkuLocale Class Doc Comment
 *
 * @category Class
 * @description This type is used to define/modify each inventory item record that is being created and/or updated with the &lt;strong&gt;bulkCreateOrReplaceInventoryItem&lt;/strong&gt; method. Up to 25 inventory item records can be created and/or updated with one call.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryItemWithSkuLocale implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryItemWithSkuLocale';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability' => '\OpenAPI\Client\Model\Availability',
        'condition' => 'string',
        'condition_description' => 'string',
        'condition_descriptors' => '\OpenAPI\Client\Model\ConditionDescriptor[]',
        'locale' => 'string',
        'package_weight_and_size' => '\OpenAPI\Client\Model\PackageWeightAndSize',
        'product' => '\OpenAPI\Client\Model\Product',
        'sku' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availability' => null,
        'condition' => null,
        'condition_description' => null,
        'condition_descriptors' => null,
        'locale' => null,
        'package_weight_and_size' => null,
        'product' => null,
        'sku' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availability' => false,
        'condition' => false,
        'condition_description' => false,
        'condition_descriptors' => false,
        'locale' => false,
        'package_weight_and_size' => false,
        'product' => false,
        'sku' => false
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
        'availability' => 'availability',
        'condition' => 'condition',
        'condition_description' => 'conditionDescription',
        'condition_descriptors' => 'conditionDescriptors',
        'locale' => 'locale',
        'package_weight_and_size' => 'packageWeightAndSize',
        'product' => 'product',
        'sku' => 'sku'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability' => 'setAvailability',
        'condition' => 'setCondition',
        'condition_description' => 'setConditionDescription',
        'condition_descriptors' => 'setConditionDescriptors',
        'locale' => 'setLocale',
        'package_weight_and_size' => 'setPackageWeightAndSize',
        'product' => 'setProduct',
        'sku' => 'setSku'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability' => 'getAvailability',
        'condition' => 'getCondition',
        'condition_description' => 'getConditionDescription',
        'condition_descriptors' => 'getConditionDescriptors',
        'locale' => 'getLocale',
        'package_weight_and_size' => 'getPackageWeightAndSize',
        'product' => 'getProduct',
        'sku' => 'getSku'
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
        $this->setIfExists('availability', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('condition_description', $data ?? [], null);
        $this->setIfExists('condition_descriptors', $data ?? [], null);
        $this->setIfExists('locale', $data ?? [], null);
        $this->setIfExists('package_weight_and_size', $data ?? [], null);
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('sku', $data ?? [], null);
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
     * Gets availability
     *
     * @return \OpenAPI\Client\Model\Availability|null
     */
    public function getAvailability()
    {
        return $this->container['availability'];
    }

    /**
     * Sets availability
     *
     * @param \OpenAPI\Client\Model\Availability|null $availability availability
     *
     * @return self
     */
    public function setAvailability($availability)
    {
        if (is_null($availability)) {
            throw new \InvalidArgumentException('non-nullable availability cannot be null');
        }
        $this->container['availability'] = $availability;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string|null $condition This enumeration value indicates the condition of the item. Supported item condition values will vary by eBay site and category. To see which item condition values that a particular eBay category supports, use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies\" target=\"_blank\">getItemConditionPolicies</a> method of the <strong>Metadata API</strong>. This method returns condition ID values that map to the enumeration values defined in the <a href=\"/api-docs/sell/inventory/types/slr:ConditionEnum\" target=\"_blank\">ConditionEnum</a> type. The <a href=\"/api-docs/sell/static/metadata/condition-id-values.html\" target=\"_blank\">Item condition ID and name values</a> topic in the <strong>Selling Integration Guide</strong> has a table that maps condition ID values to <strong>ConditionEnum</strong> values. The <strong>getItemConditionPolicies</strong> call reference page has more information.<br><br> A <strong>condition</strong> value is optional up until the seller is ready to publish an offer with the SKU, at which time it becomes required for most eBay categories. <br><br> <span class=\"tablenote\"> <strong>Note:</strong> The 'Manufacturer Refurbished' item condition is no longer a valid item condition on any eBay marketplace, and to reflect this change, the <code>MANUFACTURER_REFURBISHED</code> value is no longer applicable, and should not be used. With Version 1.13.0, the <code>CERTIFIED_REFURBISHED</code> enumeration value has been introduced, and CR-eligible sellers should make a note to start using <code>CERTIFIED_REFURBISHED</code> from this point forward. For the time being, if the <code>MANUFACTURER_REFURBISHED</code> enum is used for any of the SKUs in a <strong>bulkCreateOrReplaceInventoryItem</strong> method, it will be accepted but automatically converted by eBay to <code>CERTIFIED_REFURBISHED</code>. <br><br> To list an item as 'Certified Refurbished', a seller must be pre-qualified by eBay for this feature. Any seller who is not eligible for this feature will be blocked if they try to create a new listing or revise an existing listing with this item condition. <br><br> Any seller that is interested in eligibility requirements to list with 'Certified Refurbished' should see the <a href=\"https://pages.ebay.com/seller-center/listing-and-marketing/certified-refurbished-program.html \" target=\"_blank\">Certified refurbished program</a> page in Seller Center. </span><div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, LIKE_NEW (2750) can be used to specify the card as a Graded card and USED_VERY_GOOD (4000) can be used to specify the card as an Ungraded card. If either of these item conditions are used for the affected categories, the seller is then required to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs. See the conditionDescriptors field description for more information.</p><p>Beginning October 23, 2023, trading card listings in the affected categories must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition, and no other item conditions will be accepted. These item conditions and the  conditionDescriptors array will be required for all new listings. If not provided after this date, the publishOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p><p>By January 22 2024, all existing listings must be modified with either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition and applicable conditionDescriptors name-value pairs. The updateOffer method will fail if the inventory item object does not have one of these two item conditions along with applicable conditionDescriptors name-value pairs.</p></span></div> For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:ConditionEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets condition_description
     *
     * @return string|null
     */
    public function getConditionDescription()
    {
        return $this->container['condition_description'];
    }

    /**
     * Sets condition_description
     *
     * @param string|null $condition_description This string field is used by the seller to more clearly describe the condition of a used inventory item, or an inventory item whose <strong>condition</strong> value is not <code>NEW</code>, <code>LIKE_NEW</code>, <code>NEW_OTHER</code>, or <code>NEW_WITH_DEFECTS</code>.<br><br> The <strong>conditionDescription</strong> field is available for all eBay categories. If the <strong>conditionDescription</strong> field is used with an item in one of the new conditions (mentioned in previous paragraph), eBay will simply ignore this field if included, and eBay will return a warning message to the user. <br><br> This field should only be used to further clarify the condition of the used item. It should not be used for branding, promotions, shipping, returns, payment or other information unrelated to the condition of the used item. Make sure that the <strong>condition</strong> value, condition description, listing description, and the item's pictures do not contradict one another. <br><br> This field is not always required, but is required if an inventory item is being updated and a condition description already exists for that inventory item. <br><br> This field is returned in the <strong>getInventoryItem</strong>, <strong>bulkGetInventoryItem</strong>, and <strong>getInventoryItems</strong> calls if a condition description was provided for a used inventory item.<br><br><strong>Max Length</strong>: 1000.
     *
     * @return self
     */
    public function setConditionDescription($condition_description)
    {
        if (is_null($condition_description)) {
            throw new \InvalidArgumentException('non-nullable condition_description cannot be null');
        }
        $this->container['condition_description'] = $condition_description;

        return $this;
    }

    /**
     * Gets condition_descriptors
     *
     * @return \OpenAPI\Client\Model\ConditionDescriptor[]|null
     */
    public function getConditionDescriptors()
    {
        return $this->container['condition_descriptors'];
    }

    /**
     * Sets condition_descriptors
     *
     * @param \OpenAPI\Client\Model\ConditionDescriptor[]|null $condition_descriptors <div class=\"msgbox_important\"><p class=\"msgbox_importantInDiv\" data-mc-autonum=\"&lt;b&gt;&lt;span style=&quot;color: #dd1e31;&quot; class=&quot;mcFormatColor&quot;&gt;Important! &lt;/span&gt;&lt;/b&gt;\"><span class=\"autonumber\"><span><b><span style=\"color: #dd1e31;\" class=\"mcFormatColor\">Important!</span></b></span></span>For trading card listings in Non-Sport Trading Card Singles (183050), CCG Individual Cards (183454), and Sports Trading Card Singles (261328) categories, LIKE_NEW (2750) can be used to specify the card as a Graded card and USED_VERY_GOOD (4000) can be used to specify the card as an Ungraded card. If either of these item conditions are used for the affected categories, the seller is then required to use the conditionDescriptors array to provide one or more applicable Condition Descriptor name-value pairs.</p><p>Beginning October 23, 2023, trading card listings in the affected categories must use either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition, and no other item conditions will be accepted. These item conditions and the  conditionDescriptors array will be required for all new listings. If not provided after this date, the publishOffer, bulkPublishOffer, and publishOfferByInventoryItemGroup methods will fail when trying to create new listings.</p><p>By January 22 2024, all existing listings must be modified with either LIKE_NEW (2750) or USED_VERY_GOOD (4000) item condition and applicable conditionDescriptors name-value pairs. The updateOffer method will fail if the inventory item object does not have one of these two item conditions along with applicable conditionDescriptors name-value pairs.</p></span></div><br><br>This container is used by the seller to provide additional information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either close set or open text inputs.<br><br> To retrieve all condition descriptor numeric IDs for a category, use the <a href=\"/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies\" target=\"_blank\">getItemConditionPolicies</a> method of the Metadata API. <br><br>
     *
     * @return self
     */
    public function setConditionDescriptors($condition_descriptors)
    {
        if (is_null($condition_descriptors)) {
            throw new \InvalidArgumentException('non-nullable condition_descriptors cannot be null');
        }
        $this->container['condition_descriptors'] = $condition_descriptors;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale This request parameter sets the natural language that was provided in the field values of the request payload (i.e., en_AU, en_GB or de_DE). For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:LocaleEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setLocale($locale)
    {
        if (is_null($locale)) {
            throw new \InvalidArgumentException('non-nullable locale cannot be null');
        }
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets package_weight_and_size
     *
     * @return \OpenAPI\Client\Model\PackageWeightAndSize|null
     */
    public function getPackageWeightAndSize()
    {
        return $this->container['package_weight_and_size'];
    }

    /**
     * Sets package_weight_and_size
     *
     * @param \OpenAPI\Client\Model\PackageWeightAndSize|null $package_weight_and_size package_weight_and_size
     *
     * @return self
     */
    public function setPackageWeightAndSize($package_weight_and_size)
    {
        if (is_null($package_weight_and_size)) {
            throw new \InvalidArgumentException('non-nullable package_weight_and_size cannot be null');
        }
        $this->container['package_weight_and_size'] = $package_weight_and_size;

        return $this;
    }

    /**
     * Gets product
     *
     * @return \OpenAPI\Client\Model\Product|null
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param \OpenAPI\Client\Model\Product|null $product product
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku This is the seller-defined SKU value of the product that will be listed on the eBay site (specified in the <strong>marketplaceId</strong> field). Only one offer (in unpublished or published state) may exist for each <strong>sku</strong>/<strong>marketplaceId</strong>/<strong>format</strong> combination. This field is required.<br><br><strong>Max Length</strong>: 50<br>
     *
     * @return self
     */
    public function setSku($sku)
    {
        if (is_null($sku)) {
            throw new \InvalidArgumentException('non-nullable sku cannot be null');
        }
        $this->container['sku'] = $sku;

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


