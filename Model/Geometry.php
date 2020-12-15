<?php
/**
 * Geometry
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
 * OpenAPI spec version: 0.0.1
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
 * Class representing the Geometry model.
 *
 * @package GoogleApi\Server\Model
 * @author  Swagger Codegen team
 */
class Geometry 
{
        /**
     * @var GoogleApi\Server\Model\Location|null
     * @SerializedName("location")
     * @Assert\Type("GoogleApi\Server\Model\Location")
     * @Type("GoogleApi\Server\Model\Location")
     */
    protected $location;

    /**
     * @var string|null
     * @SerializedName("location_type")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $locationType;

    /**
     * @var GoogleApi\Server\Model\Viewport|null
     * @SerializedName("viewport")
     * @Assert\Type("GoogleApi\Server\Model\Viewport")
     * @Type("GoogleApi\Server\Model\Viewport")
     */
    protected $viewport;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->location = isset($data['location']) ? $data['location'] : null;
        $this->locationType = isset($data['locationType']) ? $data['locationType'] : null;
        $this->viewport = isset($data['viewport']) ? $data['viewport'] : null;
    }

    /**
     * Gets location.
     * @return GoogleApi\Server\Model\Location|null
     */
    public function getLocation() 
    {
        return $this->location;
    }

    /**
     * Sets location.
     *
     * @param GoogleApi\Server\Model\Location|null $location
     * 
     * @return $this
     */
    public function setLocation(Location $location = null)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets locationType.
     * @return string|null
     */
    public function getLocationType() 
    {
        return $this->locationType;
    }

    /**
     * Sets locationType.
     *
     * @param string|null $locationType
     * 
     * @return $this
     */
    public function setLocationType( $locationType = null)
    {
        $this->locationType = $locationType;

        return $this;
    }

    /**
     * Gets viewport.
     * @return GoogleApi\Server\Model\Viewport|null
     */
    public function getViewport() 
    {
        return $this->viewport;
    }

    /**
     * Sets viewport.
     *
     * @param GoogleApi\Server\Model\Viewport|null $viewport
     * 
     * @return $this
     */
    public function setViewport(Viewport $viewport = null)
    {
        $this->viewport = $viewport;

        return $this;
    }
}

