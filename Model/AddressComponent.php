<?php
/**
 * AddressComponent
 *
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Google GeoCode API
 *
 * API for handling of the geocode
 *
 * OpenAPI spec version: 1.0.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GoogleApi\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the AddressComponent model.
 *
 * @package GoogleApi\Server\Model
 * @author  Swagger Codegen team
 */
class AddressComponent 
{
        /**
     * @var string|null
     * @SerializedName("long_name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $longName;

    /**
     * @var string|null
     * @SerializedName("short_name")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $shortName;

    /**
     * @var string[]|null
     * @SerializedName("types")
     * @Assert\All({
     *   @Assert\Type("string")
     * })
     * @Type("array<string>")
     */
    protected $types;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->longName = isset($data['longName']) ? $data['longName'] : null;
        $this->shortName = isset($data['shortName']) ? $data['shortName'] : null;
        $this->types = isset($data['types']) ? $data['types'] : null;
    }

    /**
     * Gets longName.
     * @return string|null
     */
    public function getLongName() 
    {
        return $this->longName;
    }

    /**
     * Sets longName.
     *
     * @param string|null $longName
     * 
     * @return $this
     */
    public function setLongName( $longName = null)
    {
        $this->longName = $longName;

        return $this;
    }

    /**
     * Gets shortName.
     * @return string|null
     */
    public function getShortName() 
    {
        return $this->shortName;
    }

    /**
     * Sets shortName.
     *
     * @param string|null $shortName
     * 
     * @return $this
     */
    public function setShortName( $shortName = null)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Gets types.
     * @return string[]|null
     */
    public function getTypes() 
    {
        return $this->types;
    }

    /**
     * Sets types.
     *
     * @param string[]|null $types
     * 
     * @return $this
     */
    public function setTypes(array $types = null)
    {
        $this->types = $types;

        return $this;
    }
}


