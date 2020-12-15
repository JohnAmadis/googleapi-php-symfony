<?php
/**
 * ApiServer
 *
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Google GeoCode API
 *
 * API for handling of the geocode
 *
 * OpenAPI spec version: 1.0.3
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

/**
 * ApiServer Class Doc Comment
 *
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ApiServer
{

    /**
     * @var array
     */
    private $apis = array();

    /**
     * Adds an API handler to the server.
     *
     * @param string $api An API name of the handle
     * @param mixed $handler A handler to set for the given API
     */
    public function addApiHandler($api, $handler)
    {
        if (isset($this->apis[$api])) {
            throw new \InvalidArgumentException('API has already a handler: '.$api);
        }

        $this->apis[$api] = $handler;
    }

    /**
     * Returns an API handler.
     *
     * @param string $api An API name of the handle
     * @return mixed Returns a handler
     * @throws \InvalidArgumentException When no such handler exists
     */
    public function getApiHandler($api)
    {
        if (!isset($this->apis[$api])) {
            throw new \InvalidArgumentException('No handler for '.$api.' implemented.');
        }

        return $this->apis[$api];
    }
}
