<?php
/**
 * PickupAtLocationAvailability
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
 * PickupAtLocationAvailability Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify/indicate the quantity of the inventory item that is available for an In-Store Pickup order at the merchant&#39;s physical store (specified by the &lt;strong&gt;merchantLocationKey&lt;/strong&gt; field).
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PickupAtLocationAvailability implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PickupAtLocationAvailability';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'availability_type' => 'string',
        'fulfillment_time' => '\OpenAPI\Client\Model\TimeDuration',
        'merchant_location_key' => 'string',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'availability_type' => null,
        'fulfillment_time' => null,
        'merchant_location_key' => null,
        'quantity' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'availability_type' => false,
        'fulfillment_time' => false,
        'merchant_location_key' => false,
        'quantity' => false
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
        'availability_type' => 'availabilityType',
        'fulfillment_time' => 'fulfillmentTime',
        'merchant_location_key' => 'merchantLocationKey',
        'quantity' => 'quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'availability_type' => 'setAvailabilityType',
        'fulfillment_time' => 'setFulfillmentTime',
        'merchant_location_key' => 'setMerchantLocationKey',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'availability_type' => 'getAvailabilityType',
        'fulfillment_time' => 'getFulfillmentTime',
        'merchant_location_key' => 'getMerchantLocationKey',
        'quantity' => 'getQuantity'
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
        $this->setIfExists('availability_type', $data ?? [], null);
        $this->setIfExists('fulfillment_time', $data ?? [], null);
        $this->setIfExists('merchant_location_key', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
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
     * Gets availability_type
     *
     * @return string|null
     */
    public function getAvailabilityType()
    {
        return $this->container['availability_type'];
    }

    /**
     * Sets availability_type
     *
     * @param string|null $availability_type The enumeration value in this field indicates the availability status of the inventory item at the merchant's physical store specified by the <strong>pickupAtLocationAvailability.merchantLocationKey</strong> field. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.  <br><br> See <a href=\"/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum\" target=\"_blank\">AvailabilityTypeEnum</a> for more information about how/when you use each enumeration value. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/inventory/types/slr:AvailabilityTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setAvailabilityType($availability_type)
    {
        if (is_null($availability_type)) {
            throw new \InvalidArgumentException('non-nullable availability_type cannot be null');
        }
        $this->container['availability_type'] = $availability_type;

        return $this;
    }

    /**
     * Gets fulfillment_time
     *
     * @return \OpenAPI\Client\Model\TimeDuration|null
     */
    public function getFulfillmentTime()
    {
        return $this->container['fulfillment_time'];
    }

    /**
     * Sets fulfillment_time
     *
     * @param \OpenAPI\Client\Model\TimeDuration|null $fulfillment_time fulfillment_time
     *
     * @return self
     */
    public function setFulfillmentTime($fulfillment_time)
    {
        if (is_null($fulfillment_time)) {
            throw new \InvalidArgumentException('non-nullable fulfillment_time cannot be null');
        }
        $this->container['fulfillment_time'] = $fulfillment_time;

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
     * @param string|null $merchant_location_key The unique identifier of a merchant's store where the In-Store Pickup inventory item is currently located, or where inventory will be sent to. If the merchant's store is currently awaiting for inventory, the <strong>availabilityType</strong> value should be <code>SHIP_TO_STORE</code>. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.<br><br>Use the <a href=\"/api-docs/sell/inventory/resources/location/methods/getInventoryLocations\" target=\"_blank\">getInventoryLocations</a> method to retrieve merchant location keys.<br><br><b>Max length</b>: 36
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
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity This integer value indicates the quantity of the inventory item that is available for In-Store Pickup at the store identified by the  <strong>merchantLocationKey</strong> value.  The value of <strong>quantity</strong> should be an integer value greater than <code>0</code>, unless the inventory item is out of stock. This field is required if the <strong>pickupAtLocationAvailability</strong> container is used, and is always returned with the <strong>pickupAtLocationAvailability</strong> container.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

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


