<?php
/**
 * InventoryLocationResponse
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
 * InventoryLocationResponse Class Doc Comment
 *
 * @category Class
 * @description This type is used by the base response of the &lt;strong&gt;getInventoryLocation&lt;/strong&gt; and &lt;strong&gt;getInventoryLocations&lt;/strong&gt; calls. These responses provide details about inventory location(s) defined for the merchant&#39;s account.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class InventoryLocationResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryLocationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'location' => '\OpenAPI\Client\Model\Location',
        'location_additional_information' => 'string',
        'location_instructions' => 'string',
        'location_types' => 'string[]',
        'location_web_url' => 'string',
        'merchant_location_key' => 'string',
        'merchant_location_status' => 'string',
        'name' => 'string',
        'operating_hours' => '\OpenAPI\Client\Model\OperatingHours[]',
        'phone' => 'string',
        'special_hours' => '\OpenAPI\Client\Model\SpecialHours[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'location' => null,
        'location_additional_information' => null,
        'location_instructions' => null,
        'location_types' => null,
        'location_web_url' => null,
        'merchant_location_key' => null,
        'merchant_location_status' => null,
        'name' => null,
        'operating_hours' => null,
        'phone' => null,
        'special_hours' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'location' => false,
        'location_additional_information' => false,
        'location_instructions' => false,
        'location_types' => false,
        'location_web_url' => false,
        'merchant_location_key' => false,
        'merchant_location_status' => false,
        'name' => false,
        'operating_hours' => false,
        'phone' => false,
        'special_hours' => false
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
        'location' => 'location',
        'location_additional_information' => 'locationAdditionalInformation',
        'location_instructions' => 'locationInstructions',
        'location_types' => 'locationTypes',
        'location_web_url' => 'locationWebUrl',
        'merchant_location_key' => 'merchantLocationKey',
        'merchant_location_status' => 'merchantLocationStatus',
        'name' => 'name',
        'operating_hours' => 'operatingHours',
        'phone' => 'phone',
        'special_hours' => 'specialHours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'location' => 'setLocation',
        'location_additional_information' => 'setLocationAdditionalInformation',
        'location_instructions' => 'setLocationInstructions',
        'location_types' => 'setLocationTypes',
        'location_web_url' => 'setLocationWebUrl',
        'merchant_location_key' => 'setMerchantLocationKey',
        'merchant_location_status' => 'setMerchantLocationStatus',
        'name' => 'setName',
        'operating_hours' => 'setOperatingHours',
        'phone' => 'setPhone',
        'special_hours' => 'setSpecialHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'location' => 'getLocation',
        'location_additional_information' => 'getLocationAdditionalInformation',
        'location_instructions' => 'getLocationInstructions',
        'location_types' => 'getLocationTypes',
        'location_web_url' => 'getLocationWebUrl',
        'merchant_location_key' => 'getMerchantLocationKey',
        'merchant_location_status' => 'getMerchantLocationStatus',
        'name' => 'getName',
        'operating_hours' => 'getOperatingHours',
        'phone' => 'getPhone',
        'special_hours' => 'getSpecialHours'
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
        $this->setIfExists('location', $data ?? [], null);
        $this->setIfExists('location_additional_information', $data ?? [], null);
        $this->setIfExists('location_instructions', $data ?? [], null);
        $this->setIfExists('location_types', $data ?? [], null);
        $this->setIfExists('location_web_url', $data ?? [], null);
        $this->setIfExists('merchant_location_key', $data ?? [], null);
        $this->setIfExists('merchant_location_status', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('operating_hours', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('special_hours', $data ?? [], null);
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
     * Gets location
     *
     * @return \OpenAPI\Client\Model\Location|null
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \OpenAPI\Client\Model\Location|null $location location
     *
     * @return self
     */
    public function setLocation($location)
    {
        if (is_null($location)) {
            throw new \InvalidArgumentException('non-nullable location cannot be null');
        }
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets location_additional_information
     *
     * @return string|null
     */
    public function getLocationAdditionalInformation()
    {
        return $this->container['location_additional_information'];
    }

    /**
     * Sets location_additional_information
     *
     * @param string|null $location_additional_information This text field provides additional information about an inventory location. This field is returned if it is set for the inventory location. <br><br><b>Max length</b>: 256
     *
     * @return self
     */
    public function setLocationAdditionalInformation($location_additional_information)
    {
        if (is_null($location_additional_information)) {
            throw new \InvalidArgumentException('non-nullable location_additional_information cannot be null');
        }
        $this->container['location_additional_information'] = $location_additional_information;

        return $this;
    }

    /**
     * Gets location_instructions
     *
     * @return string|null
     */
    public function getLocationInstructions()
    {
        return $this->container['location_instructions'];
    }

    /**
     * Sets location_instructions
     *
     * @param string|null $location_instructions This text field is used by the merchant to provide special pickup instructions for the store location. This field can help create a pleasant and easy pickup experience for In-Store Pickup and Click and Collect orders. If this field was not set up through a <strong>createInventoryLocation</strong> or a <strong>updateInventoryLocation</strong> call, eBay will use the default pickup instructions contained in the merchant's profile.<br><br><b>Max length</b>: 1000
     *
     * @return self
     */
    public function setLocationInstructions($location_instructions)
    {
        if (is_null($location_instructions)) {
            throw new \InvalidArgumentException('non-nullable location_instructions cannot be null');
        }
        $this->container['location_instructions'] = $location_instructions;

        return $this;
    }

    /**
     * Gets location_types
     *
     * @return string[]|null
     */
    public function getLocationTypes()
    {
        return $this->container['location_types'];
    }

    /**
     * Sets location_types
     *
     * @param string[]|null $location_types This container defines the function of the inventory location. Typically, an inventory location will serve as a store or a warehouse, but in some cases, an inventory location may be both.<br><br>For In-Store Pickup inventory set <b>StoreTypeEnum</b> to <code>STORE</code>.<br><br>The location type of an inventory location defaults to <code>WAREHOUSE</code> if a location type is not specified when a merchant creates an inventory location.
     *
     * @return self
     */
    public function setLocationTypes($location_types)
    {
        if (is_null($location_types)) {
            throw new \InvalidArgumentException('non-nullable location_types cannot be null');
        }
        $this->container['location_types'] = $location_types;

        return $this;
    }

    /**
     * Gets location_web_url
     *
     * @return string|null
     */
    public function getLocationWebUrl()
    {
        return $this->container['location_web_url'];
    }

    /**
     * Sets location_web_url
     *
     * @param string|null $location_web_url This text field shows the  Website address (URL) associated with the inventory location. This field is returned if defined for the inventory location. <br><br><b>Max length</b>: 512
     *
     * @return self
     */
    public function setLocationWebUrl($location_web_url)
    {
        if (is_null($location_web_url)) {
            throw new \InvalidArgumentException('non-nullable location_web_url cannot be null');
        }
        $this->container['location_web_url'] = $location_web_url;

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
     * @param string|null $merchant_location_key The unique identifier of the inventory location. This identifier is set up by the merchant when the inventory location is first created with the <strong>createInventoryLocation</strong> call. Once this value is set for an inventory location, it cannot be modified.<br><br><b>Max length</b>: 36
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
     * Gets merchant_location_status
     *
     * @return string|null
     */
    public function getMerchantLocationStatus()
    {
        return $this->container['merchant_location_status'];
    }

    /**
     * Sets merchant_location_status
     *
     * @param string|null $merchant_location_status This field indicates whether the inventory location is enabled (inventory can be loaded to location) or disabled (inventory can not be loaded to location). The merchant can use the <strong>enableInventoryLocation</strong> call to enable an inventory location in disabled status, or the <strong>disableInventoryLocation</strong> call to disable an inventory location in enabled status. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/api:StatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setMerchantLocationStatus($merchant_location_status)
    {
        if (is_null($merchant_location_status)) {
            throw new \InvalidArgumentException('non-nullable merchant_location_status cannot be null');
        }
        $this->container['merchant_location_status'] = $merchant_location_status;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the inventory location. This name should be a human-friendly name as it will be displayed in In-Store Pickup and Click and Collect listings. For store inventory locations, this field is not required for the <strong>createInventoryLocation</strong> call, but a store inventory location must have a defined <strong>name</strong> value before an In-Store Pickup and Click and Collect enabled offer is published. So, if the seller omits this field in the <strong>createInventoryLocation</strong> call, it will have to be added later through a <strong>updateInventoryLocation</strong> call.<br><br><b>Max length</b>: 1000
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets operating_hours
     *
     * @return \OpenAPI\Client\Model\OperatingHours[]|null
     */
    public function getOperatingHours()
    {
        return $this->container['operating_hours'];
    }

    /**
     * Sets operating_hours
     *
     * @param \OpenAPI\Client\Model\OperatingHours[]|null $operating_hours This container shows the regular operating hours for a store location during the days of the week. A <strong>dayOfWeekEnum</strong> field and an <strong>intervals</strong> container is shown for each day of the week that the store location is open.
     *
     * @return self
     */
    public function setOperatingHours($operating_hours)
    {
        if (is_null($operating_hours)) {
            throw new \InvalidArgumentException('non-nullable operating_hours cannot be null');
        }
        $this->container['operating_hours'] = $operating_hours;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone The phone number for an inventory location. This field will typically only be set and returned for store locations.<br><br><b>Max length</b>: 36
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets special_hours
     *
     * @return \OpenAPI\Client\Model\SpecialHours[]|null
     */
    public function getSpecialHours()
    {
        return $this->container['special_hours'];
    }

    /**
     * Sets special_hours
     *
     * @param \OpenAPI\Client\Model\SpecialHours[]|null $special_hours This container shows the special operating hours for a store location on a specific date or dates.
     *
     * @return self
     */
    public function setSpecialHours($special_hours)
    {
        if (is_null($special_hours)) {
            throw new \InvalidArgumentException('non-nullable special_hours cannot be null');
        }
        $this->container['special_hours'] = $special_hours;

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


