<?php
/**
 * InlineResponse200Results
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
 * Class representing the InlineResponse200Results model.
 *
 * @package GoogleApi\Server\Model
 * @author  Swagger Codegen team
 */
class InlineResponse200Results 
{
        /**
     * @var GoogleApi\Server\Model\AddressComponent[]|null
     * @SerializedName("address_components")
     * @Assert\All({
     *   @Assert\Type("GoogleApi\Server\Model\AddressComponent")
     * })
     * @Type("array<GoogleApi\Server\Model\AddressComponent>")
     */
    protected $addressComponents;

    /**
     * @var string|null
     * @SerializedName("formatted_address")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $formattedAddress;

    /**
     * @var GoogleApi\Server\Model\Geometry|null
     * @SerializedName("geometry")
     * @Assert\Type("GoogleApi\Server\Model\Geometry")
     * @Type("GoogleApi\Server\Model\Geometry")
     */
    protected $geometry;

    /**
     * @var string|null
     * @SerializedName("place_id")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $placeId;

    /**
     * @var GoogleApi\Server\Model\PlusCode|null
     * @SerializedName("plus_code")
     * @Assert\Type("GoogleApi\Server\Model\PlusCode")
     * @Type("GoogleApi\Server\Model\PlusCode")
     */
    protected $plusCode;

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
        $this->addressComponents = isset($data['addressComponents']) ? $data['addressComponents'] : null;
        $this->formattedAddress = isset($data['formattedAddress']) ? $data['formattedAddress'] : null;
        $this->geometry = isset($data['geometry']) ? $data['geometry'] : null;
        $this->placeId = isset($data['placeId']) ? $data['placeId'] : null;
        $this->plusCode = isset($data['plusCode']) ? $data['plusCode'] : null;
        $this->types = isset($data['types']) ? $data['types'] : null;
    }

    /**
     * Gets addressComponents.
     * @return GoogleApi\Server\Model\AddressComponent[]|null
     */
    public function getAddressComponents() 
    {
        return $this->addressComponents;
    }

    /**
     * Sets addressComponents.
     *
     * @param GoogleApi\Server\Model\AddressComponent[]|null $addressComponents
     * 
     * @return $this
     */
    public function setAddressComponents(array $addressComponents = null)
    {
        $this->addressComponents = $addressComponents;

        return $this;
    }

    /**
     * Gets formattedAddress.
     * @return string|null
     */
    public function getFormattedAddress() 
    {
        return $this->formattedAddress;
    }

    /**
     * Sets formattedAddress.
     *
     * @param string|null $formattedAddress
     * 
     * @return $this
     */
    public function setFormattedAddress( $formattedAddress = null)
    {
        $this->formattedAddress = $formattedAddress;

        return $this;
    }

    /**
     * Gets geometry.
     * @return GoogleApi\Server\Model\Geometry|null
     */
    public function getGeometry() 
    {
        return $this->geometry;
    }

    /**
     * Sets geometry.
     *
     * @param GoogleApi\Server\Model\Geometry|null $geometry
     * 
     * @return $this
     */
    public function setGeometry(Geometry $geometry = null)
    {
        $this->geometry = $geometry;

        return $this;
    }

    /**
     * Gets placeId.
     * @return string|null
     */
    public function getPlaceId() 
    {
        return $this->placeId;
    }

    /**
     * Sets placeId.
     *
     * @param string|null $placeId
     * 
     * @return $this
     */
    public function setPlaceId( $placeId = null)
    {
        $this->placeId = $placeId;

        return $this;
    }

    /**
     * Gets plusCode.
     * @return GoogleApi\Server\Model\PlusCode|null
     */
    public function getPlusCode() 
    {
        return $this->plusCode;
    }

    /**
     * Sets plusCode.
     *
     * @param GoogleApi\Server\Model\PlusCode|null $plusCode
     * 
     * @return $this
     */
    public function setPlusCode(PlusCode $plusCode = null)
    {
        $this->plusCode = $plusCode;

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


