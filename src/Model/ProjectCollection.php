<?php

/**
 *
 * Kimai API Client 2020 — NOTICE OF LICENSE
 * This source file is released under MIT license by copyright holders.
 * @copyright 2017-2020 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2020 (c) Fiteco Group Oy (https://group.fiteco.fi)
 *
 */

/**
 * Kimai 2 - API Docs.
 *
 * JSON API for the Kimai 2 time-tracking software. Read more about its usage in the [API documentation](https://www.kimai.org/documentation/rest-api.html) and then download a [Swagger file](doc.json) for import e.g. in Postman. Be aware: it is not yet considered stable and BC breaks might happen, especially when using code generation. The order of JSON attributes is not guaranteed.
 *
 * The version of the OpenAPI document: 0.6
 *
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Fiteco\KimaiClient\Model;

use ArrayAccess;
use Fiteco\KimaiClient\ObjectSerializer;

/**
 * ProjectCollection Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProjectCollection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'ProjectCollection';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'parentTitle' => 'string',
        'customer'    => 'int',
        'id'          => 'int',
        'name'        => 'string',
        'start'       => '\DateTime',
        'end'         => '\DateTime',
        'visible'     => 'bool',
        'metaFields'  => '\Fiteco\KimaiClient\Model\ProjectMeta[]',
        'teams'       => '\Fiteco\KimaiClient\Model\Team[]',
        'color'       => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'parentTitle' => null,
        'customer'    => null,
        'id'          => null,
        'name'        => null,
        'start'       => 'date-time',
        'end'         => 'date-time',
        'visible'     => null,
        'metaFields'  => null,
        'teams'       => null,
        'color'       => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'parentTitle' => 'parentTitle',
        'customer'    => 'customer',
        'id'          => 'id',
        'name'        => 'name',
        'start'       => 'start',
        'end'         => 'end',
        'visible'     => 'visible',
        'metaFields'  => 'metaFields',
        'teams'       => 'teams',
        'color'       => 'color',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'parentTitle' => 'setParentTitle',
        'customer'    => 'setCustomer',
        'id'          => 'setId',
        'name'        => 'setName',
        'start'       => 'setStart',
        'end'         => 'setEnd',
        'visible'     => 'setVisible',
        'metaFields'  => 'setMetaFields',
        'teams'       => 'setTeams',
        'color'       => 'setColor',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'parentTitle' => 'getParentTitle',
        'customer'    => 'getCustomer',
        'id'          => 'getId',
        'name'        => 'getName',
        'start'       => 'getStart',
        'end'         => 'getEnd',
        'visible'     => 'getVisible',
        'metaFields'  => 'getMetaFields',
        'teams'       => 'getTeams',
        'color'       => 'getColor',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['parentTitle'] = $data['parentTitle'] ?? null;
        $this->container['customer'] = $data['customer'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['start'] = $data['start'] ?? null;
        $this->container['end'] = $data['end'] ?? null;
        $this->container['visible'] = $data['visible'] ?? null;
        $this->container['metaFields'] = $data['metaFields'] ?? null;
        $this->container['teams'] = $data['teams'] ?? null;
        $this->container['color'] = $data['color'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 150)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 150.";
        }

        if ((mb_strlen($this->container['name']) < 2)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }

        if (null === $this->container['visible']) {
            $invalidProperties[] = "'visible' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === \count($this->listInvalidProperties());
    }

    /**
     * Gets parentTitle.
     *
     * @return string|null
     */
    public function getParentTitle()
    {
        return $this->container['parentTitle'];
    }

    /**
     * Sets parentTitle.
     *
     * @param string|null $parentTitle parentTitle
     *
     * @return self
     */
    public function setParentTitle($parentTitle)
    {
        $this->container['parentTitle'] = $parentTitle;

        return $this;
    }

    /**
     * Gets customer.
     *
     * @return int|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer.
     *
     * @param int|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name name
     *
     * @return self
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 150)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProjectCollection., must be smaller than or equal to 150.');
        }
        if ((mb_strlen($name) < 2)) {
            throw new \InvalidArgumentException('invalid length for $name when calling ProjectCollection., must be bigger than or equal to 2.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets start.
     *
     * @return \DateTime|null
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start.
     *
     * @param \DateTime|null $start start
     *
     * @return self
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets end.
     *
     * @return \DateTime|null
     */
    public function getEnd()
    {
        return $this->container['end'];
    }

    /**
     * Sets end.
     *
     * @param \DateTime|null $end end
     *
     * @return self
     */
    public function setEnd($end)
    {
        $this->container['end'] = $end;

        return $this;
    }

    /**
     * Gets visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible.
     *
     * @param bool $visible visible
     *
     * @return self
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets metaFields.
     *
     * @return \Fiteco\KimaiClient\Model\ProjectMeta[]|null
     */
    public function getMetaFields()
    {
        return $this->container['metaFields'];
    }

    /**
     * Sets metaFields.
     *
     * @param \Fiteco\KimaiClient\Model\ProjectMeta[]|null $metaFields All visible meta (custom) fields registered with this project
     *
     * @return self
     */
    public function setMetaFields($metaFields)
    {
        $this->container['metaFields'] = $metaFields;

        return $this;
    }

    /**
     * Gets teams.
     *
     * @return \Fiteco\KimaiClient\Model\Team[]|null
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams.
     *
     * @param \Fiteco\KimaiClient\Model\Team[]|null $teams If no team is assigned, everyone can access the project (also depends on the teams of the customer)
     *
     * @return self
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets color.
     *
     * @return string|null
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color.
     *
     * @param string|null $color color
     *
     * @return self
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed|null
     */
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
    public function offsetSet($offset, $value)
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object.
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
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
