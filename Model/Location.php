<?php
/**
 * Location
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
 * OpenAPI spec version: 1.0.2
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
 * Class representing the Location model.
 *
 * @package GoogleApi\Server\Model
 * @author  Swagger Codegen team
 */
class Location 
{
        /**
     * @var float|null
     * @SerializedName("lat")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected $lat;

    /**
     * @var float|null
     * @SerializedName("lng")
     * @Assert\Type("float")
     * @Type("float")
     */
    protected $lng;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->lat = isset($data['lat']) ? $data['lat'] : null;
        $this->lng = isset($data['lng']) ? $data['lng'] : null;
    }

    /**
     * Gets lat.
     * @return float|null
     */
    public function getLat() 
    {
        return $this->lat;
    }

    /**
     * Sets lat.
     *
     * @param float|null $lat
     * 
     * @return $this
     */
    public function setLat( $lat = null)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Gets lng.
     * @return float|null
     */
    public function getLng() 
    {
        return $this->lng;
    }

    /**
     * Sets lng.
     *
     * @param float|null $lng
     * 
     * @return $this
     */
    public function setLng( $lng = null)
    {
        $this->lng = $lng;

        return $this;
    }
}


