<?php
/**
 * PlusCode
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
 * Class representing the PlusCode model.
 *
 * @package GoogleApi\Server\Model
 * @author  Swagger Codegen team
 */
class PlusCode 
{
        /**
     * @var string|null
     * @SerializedName("compound_code")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $compoundCode;

    /**
     * @var string|null
     * @SerializedName("global_code")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $globalCode;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->compoundCode = isset($data['compoundCode']) ? $data['compoundCode'] : null;
        $this->globalCode = isset($data['globalCode']) ? $data['globalCode'] : null;
    }

    /**
     * Gets compoundCode.
     * @return string|null
     */
    public function getCompoundCode() 
    {
        return $this->compoundCode;
    }

    /**
     * Sets compoundCode.
     *
     * @param string|null $compoundCode
     * 
     * @return $this
     */
    public function setCompoundCode( $compoundCode = null)
    {
        $this->compoundCode = $compoundCode;

        return $this;
    }

    /**
     * Gets globalCode.
     * @return string|null
     */
    public function getGlobalCode() 
    {
        return $this->globalCode;
    }

    /**
     * Sets globalCode.
     *
     * @param string|null $globalCode
     * 
     * @return $this
     */
    public function setGlobalCode( $globalCode = null)
    {
        $this->globalCode = $globalCode;

        return $this;
    }
}


