<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category Class
 * @description This type is used to define the product details, such as a title, a product description, product aspects/item specifics, and links to images for the product. Optionally, in a &lt;strong&gt;createOrReplaceInventoryItem&lt;/strong&gt; call, a seller can pass in an eBay Product Identifier (ePID) or a Global Trade Item Number (GTIN) value, such as an EAN, an ISBN, a UPC, to identify a product to be matched with a product in the eBay Catalog. The information in this type is also returned in the &lt;strong&gt;getInventoryItem&lt;/strong&gt;, &lt;strong&gt;getInventoryItems&lt;/strong&gt;, and &lt;strong&gt;bulkGetInventoryItem&lt;/strong&gt; calls if defined.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Product implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'aspects' => 'string',
        'brand' => 'string',
        'description' => 'string',
        'ean' => 'string[]',
        'epid' => 'string',
        'image_urls' => 'string[]',
        'isbn' => 'string[]',
        'mpn' => 'string',
        'subtitle' => 'string',
        'title' => 'string',
        'upc' => 'string[]',
        'video_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'aspects' => null,
        'brand' => null,
        'description' => null,
        'ean' => null,
        'epid' => null,
        'image_urls' => null,
        'isbn' => null,
        'mpn' => null,
        'subtitle' => null,
        'title' => null,
        'upc' => null,
        'video_ids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'aspects' => false,
        'brand' => false,
        'description' => false,
        'ean' => false,
        'epid' => false,
        'image_urls' => false,
        'isbn' => false,
        'mpn' => false,
        'subtitle' => false,
        'title' => false,
        'upc' => false,
        'video_ids' => false
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
        'aspects' => 'aspects',
        'brand' => 'brand',
        'description' => 'description',
        'ean' => 'ean',
        'epid' => 'epid',
        'image_urls' => 'imageUrls',
        'isbn' => 'isbn',
        'mpn' => 'mpn',
        'subtitle' => 'subtitle',
        'title' => 'title',
        'upc' => 'upc',
        'video_ids' => 'videoIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aspects' => 'setAspects',
        'brand' => 'setBrand',
        'description' => 'setDescription',
        'ean' => 'setEan',
        'epid' => 'setEpid',
        'image_urls' => 'setImageUrls',
        'isbn' => 'setIsbn',
        'mpn' => 'setMpn',
        'subtitle' => 'setSubtitle',
        'title' => 'setTitle',
        'upc' => 'setUpc',
        'video_ids' => 'setVideoIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aspects' => 'getAspects',
        'brand' => 'getBrand',
        'description' => 'getDescription',
        'ean' => 'getEan',
        'epid' => 'getEpid',
        'image_urls' => 'getImageUrls',
        'isbn' => 'getIsbn',
        'mpn' => 'getMpn',
        'subtitle' => 'getSubtitle',
        'title' => 'getTitle',
        'upc' => 'getUpc',
        'video_ids' => 'getVideoIds'
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
        $this->setIfExists('aspects', $data ?? [], null);
        $this->setIfExists('brand', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('epid', $data ?? [], null);
        $this->setIfExists('image_urls', $data ?? [], null);
        $this->setIfExists('isbn', $data ?? [], null);
        $this->setIfExists('mpn', $data ?? [], null);
        $this->setIfExists('subtitle', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('upc', $data ?? [], null);
        $this->setIfExists('video_ids', $data ?? [], null);
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
     * Gets aspects
     *
     * @return string|null
     */
    public function getAspects()
    {
        return $this->container['aspects'];
    }

    /**
     * Sets aspects
     *
     * @param string|null $aspects This is a collection of item specifics (aka product aspects) name-value pairs that provide more information about the product and might make it easier for buyers to find. To view required/recommended product aspects/item specifics names (and corresponding values) for a specific eBay category, sellers can use the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory\" target=\"_blank\">getItemAspectsForCategory</a> method of the Taxonomy API. Alternatively, sellers can view similar items on eBay.com in the same category to get an idea of what other sellers are using for product aspects/item specifics.<br><br>Sellers also have the option of specifying an eBay Product ID (ePID) or optionally, a Global Trade Item Number (GTIN) through the corresponding fields in the <strong>product</strong> container in an attempt to find a product match in the eBay Catalog. If a match is found based on the ePID or GTIN value, the product aspects that are defined for the eBay Catalog product will automatically get picked up by the newly created/updated inventory item. <br><br>Below is an example of the proper JSON syntax to use when manually inputting item specifics. Note that one item specific name, such as 'Features', can have more than one value. If an item specific name has more than one value, each value is delimited with a comma.<br><br> <pre><code>\"aspects\": {<br> \"Brand\": [\"GoPro\"],<br> \"Storage Type\": [\"Removable\"]<br> }</code></pre><br>Note that inventory items that will become part of an inventory item group and multiple-variation listing should have the same attributes that are defined for the inventory item group.<br><br>This container will be returned if one or more item specific pairs are defined for the inventory item.<br><br><strong>Max Length for Aspect Name</strong>: 40<br><br><strong>Max Length for Aspect Value</strong>: 50
     *
     * @return self
     */
    public function setAspects($aspects)
    {
        if (is_null($aspects)) {
            throw new \InvalidArgumentException('non-nullable aspects cannot be null');
        }
        $this->container['aspects'] = $aspects;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string|null $brand The brand of the product. This field is often paired with the <strong>mpn</strong> field to identify a specific product by Manufacture Part Number. This field is conditionally required if the eBay category requires a Manufacturer Part Number (MPN) value. If eBay is able to find a product match in the eBay Catalog when an eBay Product ID (ePID) or GTIN value (UPC, ISBN, or EAN) is supplied, all product details of that eBay Catalog product is picked up by the inventory item record (including brand) if the <strong>createOrReplaceInventoryItem</strong> call is successful. <br><br>This field is returned if defined for an inventory item. If a brand was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>brand</strong> field.<br><br><strong>Max Length</strong>: 65
     *
     * @return self
     */
    public function setBrand($brand)
    {
        if (is_null($brand)) {
            throw new \InvalidArgumentException('non-nullable brand cannot be null');
        }
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The description of the product. The description of an existing inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. The description of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>Note that this field is optional but recommended. If a <strong>listingDescription</strong> field is omitted when creating and publishing a single-variation offer, the text in this field will be used instead. If neither the <strong>product.description</strong> field for the inventory item nor the <strong>listingDescription</strong> field for the offer exist, the <strong>publishOffer</strong> call will fail. If the inventory item will be part of an inventory item group/multiple-variation listing, this field should definitely be used to specify how the corresponding product variation is different (e.g. <em>This is the green, extra-large version of the shirt</em>). However, in the case of an inventory item group, the text in the <strong>description</strong> field of the inventory item group will become the listing description of the actual eBay listing instead of the text in this field.<br><br>Basic HTML tags are supported, including the following tags:<ul><li>&lt;b&gt;</li><li>&lt;strong&gt;</li><li>&lt;br&gt;</li><li>&lt;ol&gt;</li><li>&lt;ul&gt;</li><li>&lt;li&gt;</li><li>Table tags including &lt;table&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;th&gt;, &lt;thead&gt;, &lt;tfoot&gt;, &lt;tbody&gt;, &lt;caption&gt;, &lt;colgroup&gt;, and &lt;col&gt;</li></ul>A seller can not use any active content in their listing description. Active content includes animation or video via JavaScript, Flash, plug-ins, or form actions.<br><br>This field is returned if defined for an inventory item. If one of the GTIN types (e.g. UPC) was passed in when the inventory item was created/modified and a product match was found in the eBay catalog, product description is one of the details that gets picked up from the catalog product.<br><br><strong>Max Length</strong>: 4000
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string[]|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string[]|null $ean The European Article Number/International Article Number (EAN) for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified EAN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an EAN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>ean</strong> field.
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            throw new \InvalidArgumentException('non-nullable ean cannot be null');
        }
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets epid
     *
     * @return string|null
     */
    public function getEpid()
    {
        return $this->container['epid'];
    }

    /**
     * Sets epid
     *
     * @param string|null $epid The eBay Product Identifier (ePID) for the product. This field can be used to directly identify an eBay Catalog product. Based on its specified ePID value, eBay will search for the product in the eBay Catalog, and if a match is found, the inventory item is automatically populated with available product details such as product title, product description, product aspects, and a link to any stock image that exists for the catalog product.<br><br>In an attempt to find a eBay Catalog product match, an ePID value is always preferred over the other product identifiers, since it is possible that one GTIN value can be associated with multiple eBay Catalog products, and if multiple products are found, product details will not be picked up by the Inventory Item object.<br><br>This field is returned if defined for an inventory item.
     *
     * @return self
     */
    public function setEpid($epid)
    {
        if (is_null($epid)) {
            throw new \InvalidArgumentException('non-nullable epid cannot be null');
        }
        $this->container['epid'] = $epid;

        return $this;
    }

    /**
     * Gets image_urls
     *
     * @return string[]|null
     */
    public function getImageUrls()
    {
        return $this->container['image_urls'];
    }

    /**
     * Sets image_urls
     *
     * @param string[]|null $image_urls An array of one or more links to images for the product. URLs must use the \"HTTPS\" protocol. Images can be self-hosted by the seller, or sellers can use the <a href=\"/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html \"  target=\"_blank\">UploadSiteHostedPictures</a> call of the Trading API to upload images to an eBay Picture Server. If successful, the response of the <a href=\"/Devzone/XML/docs/Reference/eBay/UploadSiteHostedPictures.html \" target=\"_blank\">UploadSiteHostedPictures</a> call will contain a full URL to the image on an eBay Picture Server. This is the URL that will be passed in through the <strong>imageUrls</strong> array. Before an offer can be published, at least one image must exist for the inventory item. In almost any category at no cost, sellers can include up to 24 pictures in one listing. For inventory items that are a part of an inventory item group/multiple-variation listings, a maximum of 12 pictures may be used per inventory item in the group. Motor vehicle listings are an exception. The number of included pictures in motor vehicle listings depend on the selected vehicle package (see <a href=\"https://www.ebay.com/help/selling/fees-credits-invoices/motors-fees?id=4127 \" target=\"_blank\">Fees for selling vehicles on eBay Motors</a>).<br><br>A link to a stock image for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog.<br><br>This container will always be returned for an inventory item that is part of a published offer since a published offer will always have at least one picture, but this container will only be returned if defined for inventory items that are not a part of a published offer.
     *
     * @return self
     */
    public function setImageUrls($image_urls)
    {
        if (is_null($image_urls)) {
            throw new \InvalidArgumentException('non-nullable image_urls cannot be null');
        }
        $this->container['image_urls'] = $image_urls;

        return $this;
    }

    /**
     * Gets isbn
     *
     * @return string[]|null
     */
    public function getIsbn()
    {
        return $this->container['isbn'];
    }

    /**
     * Sets isbn
     *
     * @param string[]|null $isbn The International Standard Book Number (ISBN) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified ISBN value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If an ISBN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>isbn</strong> field.
     *
     * @return self
     */
    public function setIsbn($isbn)
    {
        if (is_null($isbn)) {
            throw new \InvalidArgumentException('non-nullable isbn cannot be null');
        }
        $this->container['isbn'] = $isbn;

        return $this;
    }

    /**
     * Gets mpn
     *
     * @return string|null
     */
    public function getMpn()
    {
        return $this->container['mpn'];
    }

    /**
     * Sets mpn
     *
     * @param string|null $mpn The Manufacturer Part Number (MPN) of a product. This field is paired with the <strong>brand</strong> field to identify a product. Some eBay categories require MPN values. The <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getItemAspectsForCategory\" target=\"_blank\">getItemAspectsForCategory</a> method in the Taxonomy API can be used to see if a category requires an MPN. The MPN value for a product may automatically be populated for an inventory item if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. <br><br>This field is returned if defined for an inventory item. If an MPN was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>mpn</strong> field.<br><br><strong>Max Length</strong>: 65
     *
     * @return self
     */
    public function setMpn($mpn)
    {
        if (is_null($mpn)) {
            throw new \InvalidArgumentException('non-nullable mpn cannot be null');
        }
        $this->container['mpn'] = $mpn;

        return $this;
    }

    /**
     * Gets subtitle
     *
     * @return string|null
     */
    public function getSubtitle()
    {
        return $this->container['subtitle'];
    }

    /**
     * Sets subtitle
     *
     * @param string|null $subtitle A subtitle is an optional listing feature that allows the seller to provide more information about the product, possibly including keywords that may assist with search results. An additional listing fee will be charged to the seller if a subtitle is used. For more information on using listing subtitles on the US site, see the <a href=\"https://pages.ebay.com/help/sell/itemsubtitle.html \" target=\"_blank\">Adding a subtitle to your listings</a> help page. The subtitle of an existing inventory item can added, modified, or removed with a <strong>createOrReplaceInventoryItem</strong> call.<br><br>Note that the same <strong>subtitle</strong> text should be used for each inventory item that will be part of an inventory item group, and ultimately become one product variation within a multiple-variation listing.<br><br>This field will only be returned if set for an inventory item.<br><br><strong>Max Length</strong>: 55
     *
     * @return self
     */
    public function setSubtitle($subtitle)
    {
        if (is_null($subtitle)) {
            throw new \InvalidArgumentException('non-nullable subtitle cannot be null');
        }
        $this->container['subtitle'] = $subtitle;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of an inventory item can be added or modified with a <strong>createOrReplaceInventoryItem</strong> call. Although not immediately required, a title will be needed before an offer with the inventory item is published. The title of an inventory item is automatically populated if the seller specifies an eBay Product ID (ePID) or a Global Trade Item Number (GTIN) and eBay is able to find a matching product in the eBay Catalog. If the inventory item will become part of a single-variation offer, and the listing is not a product-based listing, the text in this field will become the actual listing title for the published offer. However, if the inventory item will become part of a multiple-variation offer, the text in <strong>title</strong> field of the inventory item group entity will actually become the listing title for the published offer instead, although a title can still be provided for the inventory item, and it will actually become the title of the variation.<br><br>This field will always be returned for an inventory item that is part of a published offer since a published offer will always have a listing title, but this field will only be returned if defined for inventory items that are not a part of a published offer.<br><br><strong>Max Length</strong>: 80
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string[]|null
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string[]|null $upc The Universal Product Code (UPC) value for the product. Although an ePID value is preferred when trying to find a product match in the eBay Catalog, this field can also be used in an attempt to find a product match in the eBay Catalog. If a product match is found in the eBay Catalog, the inventory item is automatically populated with available product details such as a title, a product description, product aspects (including the specified UPC value), and a link to any stock image that exists for the catalog product.<br><br>This field is returned if defined for an inventory item. If a UPC was passed in as an item specific name-value pair through the <strong>aspects</strong> array in a <strong>createOrReplaceInventoryItem</strong> call, this value is also picked up by the <strong>upc</strong> field.
     *
     * @return self
     */
    public function setUpc($upc)
    {
        if (is_null($upc)) {
            throw new \InvalidArgumentException('non-nullable upc cannot be null');
        }
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets video_ids
     *
     * @return string[]|null
     */
    public function getVideoIds()
    {
        return $this->container['video_ids'];
    }

    /**
     * Sets video_ids
     *
     * @param string[]|null $video_ids An array of one or more <b>videoId</b> values for the product. A video ID is a unique identifier that is automatically created by eBay when a seller successfully uploads a video to eBay using the  <a href=\"/api-docs/commerce/media/resources/video/methods/uploadVideo \" target=\"_blank\">uploadVideo</a> method of the <a href=\"/api-docs/commerce/media/overview.html \" target=\"_blank\">Media API</a>.<br><br>For information on supported marketplaces and platforms, as well as other requirements and limitations of video support, please refer to <a href=\"/api-docs/sell/static/inventory/managing-video-media.html \" target=\"_blank\">Managing videos</a>.<br><br><span class=\"tablenote\"><b>Note:</b> Only one video per listing is supported.</span>
     *
     * @return self
     */
    public function setVideoIds($video_ids)
    {
        if (is_null($video_ids)) {
            throw new \InvalidArgumentException('non-nullable video_ids cannot be null');
        }
        $this->container['video_ids'] = $video_ids;

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


