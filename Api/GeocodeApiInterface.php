<?php
/**
 * GeocodeApiInterface
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Google GeoCode API
 *
 * API for handling of the geocode
 *
 * OpenAPI spec version: 1.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GoogleApi\Server\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use GoogleApi\Server\Model\InlineResponse200;

/**
 * GeocodeApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  GoogleApi\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface GeocodeApiInterface extends GeocodeApiInterfaceBase
{

    /**
     * Operation getInformation
     *
     * Gets Geo-Information about the specified place
     *
     * @param  string $address  Address to convert into the latlng (optional)
     * @param  string $latlng  LatLng to convert into the address (optional)
     * @param  string $language  Language to return the results in (optional)
     * @param  string $key  Security key to use for authorization (optional)
     * @param  integer $responseCode     The HTTP response code to return
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return GoogleApi\Server\Model\InlineResponse200[]
     *
     */
    public function getInformation($address = null, $latlng = null, $language = null, $key = null, &$responseCode, array &$responseHeaders);
}
