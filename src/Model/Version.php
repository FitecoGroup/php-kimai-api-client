<?php

/**
 *
 * Kimai API Client 2021 — NOTICE OF LICENSE
 * This source file is released under MIT license by copyright holders.
 * @copyright 2017-2021 (c) Niko Granö (https://granö.fi)
 * @copyright 2014-2021 (c) Fiteco Group Oy (https://group.fiteco.fi)
 *
 */

/**
 * Kimai - API Docs.
 *
 * JSON API for the Kimai time-tracking software: [API documentation](https://www.kimai.org/documentation/rest-api.html), [Swagger definition file](doc.json)
 *
 * The version of the OpenAPI document: 0.6
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
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
 * Version Class Doc Comment.
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
class Version implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'Version';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'version'   => 'string',
        'versionId' => 'int',
        'candidate' => 'string',
        'semver'    => 'string',
        'name'      => 'string',
        'copyright' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'version'   => null,
        'versionId' => null,
        'candidate' => null,
        'semver'    => null,
        'name'      => null,
        'copyright' => null,
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
        'version'   => 'version',
        'versionId' => 'versionId',
        'candidate' => 'candidate',
        'semver'    => 'semver',
        'name'      => 'name',
        'copyright' => 'copyright',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'version'   => 'setVersion',
        'versionId' => 'setVersionId',
        'candidate' => 'setCandidate',
        'semver'    => 'setSemver',
        'name'      => 'setName',
        'copyright' => 'setCopyright',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'version'   => 'getVersion',
        'versionId' => 'getVersionId',
        'candidate' => 'getCandidate',
        'semver'    => 'getSemver',
        'name'      => 'getName',
        'copyright' => 'getCopyright',
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
        $this->container['version'] = $data['version'] ?? null;
        $this->container['versionId'] = $data['versionId'] ?? null;
        $this->container['candidate'] = $data['candidate'] ?? null;
        $this->container['semver'] = $data['semver'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['copyright'] = $data['copyright'] ?? null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === \count($this->listInvalidProperties());
    }

    /**
     * Gets version.
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version.
     *
     * @param string|null $version version
     *
     * @return self
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets versionId.
     *
     * @return int|null
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId.
     *
     * @param int|null $versionId Follows the same logic as PHP_VERSION_ID, see https://www.php.net/manual/de/function.phpversion.php
     *
     * @return self
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets candidate.
     *
     * @return string|null
     */
    public function getCandidate()
    {
        return $this->container['candidate'];
    }

    /**
     * Sets candidate.
     *
     * @param string|null $candidate candidate
     *
     * @return self
     */
    public function setCandidate($candidate)
    {
        $this->container['candidate'] = $candidate;

        return $this;
    }

    /**
     * Gets semver.
     *
     * @return string|null
     */
    public function getSemver()
    {
        return $this->container['semver'];
    }

    /**
     * Sets semver.
     *
     * @param string|null $semver semver
     *
     * @return self
     */
    public function setSemver($semver)
    {
        $this->container['semver'] = $semver;

        return $this;
    }

    /**
     * Gets name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string|null $name name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets copyright.
     *
     * @return string|null
     */
    public function getCopyright()
    {
        return $this->container['copyright'];
    }

    /**
     * Sets copyright.
     *
     * @param string|null $copyright copyright
     *
     * @return self
     */
    public function setCopyright($copyright)
    {
        $this->container['copyright'] = $copyright;

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
            \JSON_PRETTY_PRINT
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
