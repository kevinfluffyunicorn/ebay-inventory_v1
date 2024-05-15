<?php
/**
 * CompatibleProduct
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
 * CompatibleProduct Class Doc Comment
 *
 * @category Class
 * @description This type is used to specify/indicate the motor vehicles that are compatible with the corresponding inventory item.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompatibleProduct implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CompatibleProduct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'compatibility_properties' => '\OpenAPI\Client\Model\NameValueList[]',
        'notes' => 'string',
        'product_family_properties' => '\OpenAPI\Client\Model\ProductFamilyProperties',
        'product_identifier' => '\OpenAPI\Client\Model\ProductIdentifier'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'compatibility_properties' => null,
        'notes' => null,
        'product_family_properties' => null,
        'product_identifier' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'compatibility_properties' => false,
        'notes' => false,
        'product_family_properties' => false,
        'product_identifier' => false
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
        'compatibility_properties' => 'compatibilityProperties',
        'notes' => 'notes',
        'product_family_properties' => 'productFamilyProperties',
        'product_identifier' => 'productIdentifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'compatibility_properties' => 'setCompatibilityProperties',
        'notes' => 'setNotes',
        'product_family_properties' => 'setProductFamilyProperties',
        'product_identifier' => 'setProductIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'compatibility_properties' => 'getCompatibilityProperties',
        'notes' => 'getNotes',
        'product_family_properties' => 'getProductFamilyProperties',
        'product_identifier' => 'getProductIdentifier'
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
        $this->setIfExists('compatibility_properties', $data ?? [], null);
        $this->setIfExists('notes', $data ?? [], null);
        $this->setIfExists('product_family_properties', $data ?? [], null);
        $this->setIfExists('product_identifier', $data ?? [], null);
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
     * Gets compatibility_properties
     *
     * @return \OpenAPI\Client\Model\NameValueList[]|null
     */
    public function getCompatibilityProperties()
    {
        return $this->container['compatibility_properties'];
    }

    /**
     * Sets compatibility_properties
     *
     * @param \OpenAPI\Client\Model\NameValueList[]|null $compatibility_properties This container consists of an array of motor vehicles that are compatible with the motor vehicle part or accessory specified by the SKU value in the call URI. Each motor vehicle is defined through a separate set of name/value pairs. In the <strong>name</strong> field, the vehicle aspect (such as 'make', 'model', 'year', 'trim', or 'engine') will be identified, and the <strong>value</strong> field will be used to identify the value of each aspect.<br><br>The <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityProperties\" target=\"_blank\">getCompatibilityProperties</a> method of the Taxonomy API can be used to retrieve applicable vehicle aspect names for a specified category, and the <a href=\"/api-docs/commerce/taxonomy/resources/category_tree/methods/getCompatibilityPropertyValues\" target=\"_blank\">getCompatibilityPropertyValues</a> method of the Taxonomy API can be used to retrieve possible values for these same vehicle aspect names.<br><br>Below is an example of identifying one motor vehicle using the <strong>compatibilityProperties</strong> container:<br><br><code>&quot;compatibilityProperties&quot; : &#91;<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;make&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Subaru&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;model&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;GL&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;year&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1983&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;trim&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;Base Wagon 4-Door&quot;<br>&nbsp;&nbsp;&#125;,<br>&nbsp;&nbsp;&#123;<br>&nbsp;&nbsp;&nbsp;&quot;name&quot; : &quot;engine&quot;,<br>&nbsp;&nbsp;&nbsp;&quot;value&quot; : &quot;1.8L Turbocharged&quot;<br>&nbsp;&nbsp;&#125;<br>&#93;</code><br><br>Typically, the make, model, and year of the motor vehicle are always required, with the trim and engine being necessary sometimes, but it will be dependent on the part or accessory, and on the vehicle class.<br><br><span class=\"tablenote\"> <strong>Note:</strong> The <strong>productFamilyProperties</strong> container is deprecated and should no longer be used. The <strong>compatibilityProperties</strong> container should be used instead.</span>
     *
     * @return self
     */
    public function setCompatibilityProperties($compatibility_properties)
    {
        if (is_null($compatibility_properties)) {
            throw new \InvalidArgumentException('non-nullable compatibility_properties cannot be null');
        }
        $this->container['compatibility_properties'] = $compatibility_properties;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes This field is used by the seller to input any notes pertaining to the compatible vehicle list being defined. The seller might use this field to specify the placement of the part on a vehicle or other applicable information.<br><br>This field will only be returned if specified by the seller.<br><br><strong>Max Length</strong>: 500<br>
     *
     * @return self
     */
    public function setNotes($notes)
    {
        if (is_null($notes)) {
            throw new \InvalidArgumentException('non-nullable notes cannot be null');
        }
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets product_family_properties
     *
     * @return \OpenAPI\Client\Model\ProductFamilyProperties|null
     */
    public function getProductFamilyProperties()
    {
        return $this->container['product_family_properties'];
    }

    /**
     * Sets product_family_properties
     *
     * @param \OpenAPI\Client\Model\ProductFamilyProperties|null $product_family_properties product_family_properties
     *
     * @return self
     */
    public function setProductFamilyProperties($product_family_properties)
    {
        if (is_null($product_family_properties)) {
            throw new \InvalidArgumentException('non-nullable product_family_properties cannot be null');
        }
        $this->container['product_family_properties'] = $product_family_properties;

        return $this;
    }

    /**
     * Gets product_identifier
     *
     * @return \OpenAPI\Client\Model\ProductIdentifier|null
     */
    public function getProductIdentifier()
    {
        return $this->container['product_identifier'];
    }

    /**
     * Sets product_identifier
     *
     * @param \OpenAPI\Client\Model\ProductIdentifier|null $product_identifier product_identifier
     *
     * @return self
     */
    public function setProductIdentifier($product_identifier)
    {
        if (is_null($product_identifier)) {
            throw new \InvalidArgumentException('non-nullable product_identifier cannot be null');
        }
        $this->container['product_identifier'] = $product_identifier;

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

