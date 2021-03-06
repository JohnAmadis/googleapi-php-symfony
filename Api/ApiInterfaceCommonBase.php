<?php
/**
 * 
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GoogleApi\Server\Api;

/**
 * ApiInterfaceBase Interface Doc Comment
 * Base interface for the class
 * @category Interface
 * @package  GoogleApi\Server\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
interface ApiInterfaceCommonBase
{
    /**
     * Version of API
     */
    const API_VERSION = "1.0.5";

    /**
     * The function returns an array of default headers to return for each response
     * @return array    Additional HTTP default headers to return with the response for each request
     */
    public function getDefaultHeaders();
    
    /**
     * Clears the requirements for the authentication methods 
     */
    public function clearAuthenticationMethodRequirements();
    
    /**
     * The function sets the given authentication method as required for the current request
     * @param string $methodName        name of the method to be required 
     * @param array  $scopes            array with required scopes
     */
    public function setAuthenticationMethodRequired( string $methodName, array $scopes );
}
