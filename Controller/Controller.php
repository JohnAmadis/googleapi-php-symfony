<?php
/**
 * Controller
 *
 * PHP version 5
 *
 * @category Class
 * @package  GoogleApi\Server\Controller
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

namespace GoogleApi\Server\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use GoogleApi\Server\Service\SerializerInterface;
use GoogleApi\Server\Service\ValidatorInterface;

/**
 * Controller Class Doc Comment
 *
 * @category Class
 * @package  GoogleApi\Server\Controller
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Controller
{
    protected $validator;
    protected $serializer;
    protected $apiServer;

    public function setValidator(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    public function setApiServer($server)
    {
        $this->apiServer = $server;
    }

    /**
     * This will return a response with code 400. Usage example:
     *     return $this->createBadRequestResponse('Unable to access this page!');
     *
     * @param string $message A message
     *
     * @return Response
     */
    public function createBadRequestResponse($message = 'Bad Request.')
    {
        return new Response($message, 400);
    }

    /**
     * This will return an error response. Usage example:
     *     return $this->createErrorResponse(new UnauthorizedHttpException());
     *
     * @param HttpException $exception An HTTP exception
     *
     * @return Response
     */
    public function createErrorResponse(HttpException $exception)
    {
        $statusCode = $exception->getStatusCode();
        $headers    = array_merge($exception->getHeaders(), ['Content-Type' => 'application/json']);

        $json = $this->exceptionToArray($exception);
        $json['statusCode'] = $statusCode;

        return new Response(json_encode($json, 15, 512), $statusCode, $headers);
    }

    /**
     * Serializes data to a given type format.
     *
     * @param mixed  $data   The data to serialize.
     * @param string $class  The source data class.
     * @param string $format The target serialization format.
     *
     * @return string A serialized data string.
     */
    protected function serialize($data, $format)
    {
        return $this->serializer->serialize($data, $format);
    }

    /**
     * Deserializes data from a given type format.
     *
     * @param string $data   The data to deserialize.
     * @param string $class  The target data class.
     * @param string $format The source serialization format.
     *
     * @return mixed A deserialized data.
     */
    protected function deserialize($data, $class, $format)
    {
        return $this->serializer->deserialize($data, $class, $format);
    }

    protected function validate($data, $asserts = null)
    {
        $errors = $this->validator->validate($data, $asserts);

        if (count($errors) > 0) {
            $errorsString = (string)$errors;
            return $this->createBadRequestResponse($errorsString);
        }
    }

    /**
     * Converts an exception to a serializable array.
     *
     * @param \Exception|null $exception
     *
     * @return array
     */
    private function exceptionToArray(\Exception $exception = null)
    {
        if (null === $exception) {
            return null;
        }

        if (!$this->container->get('kernel')->isDebug()) {
            return [
                'message'  => $exception->getMessage(),
            ];
        }

        return [
            'message'  => $exception->getMessage(),
            'type'     => get_class($exception),
            'previous' => $this->exceptionToArray($exception->getPrevious()),
        ];
    }
    
    /**
     * Splits the output format to group and type
     * @return array    associative array with 'group' and 'type' keys 
     */
    private function parseOutputFormat( string $outputFormat )
    {
        $elements = preg_split( "/[\/]/", $outputFormat );
        if ( count($elements) == 2 )
        {
            $parsed['group'] = $elements[0];
            $parsed['type'] = $elements[1];
            
            return $parsed;
        }
        else{
            return null;
        }
    }

    protected function getOutputFormat($accept, array $produced)
    {
        // Figure out what the client accepts
        $accept = preg_split("/[\s,;]+/", $accept);
        
        if (in_array('*/*', $accept) || in_array('application/*', $accept)) {
            // Prefer JSON if the client has no preference
            if (in_array('application/json', $produced)) {
                return 'application/json';
            }
            if (in_array('application/xml', $produced)) {
                return 'application/xml';
            }
        }

        if (in_array('application/json', $accept) && in_array('application/json', $produced)) {
            return 'application/json';
        }

        if (in_array('application/xml', $accept) && in_array('application/xml', $produced)) {
            return 'application/xml';
        }
        
        //
        //  Searching non standard media type
        //
        foreach ( $produced as $produceItem ) {
            if ( in_array($produceItem, $accept) || in_array('*/*', $accept) ){
                return $produceItem;
            }
            else {
                $producedItemParsed = $this->parseOutputFormat( $produceItem );
                if ( $producedItemParsed ) {
                    foreach ( $accept as $acceptItem ) {
                        $acceptItemParsed = $this->parseOutputFormat($acceptItem);
                        if ( $acceptItemParsed ) {
                            if ( $acceptItemParsed['group'] == "*" || $acceptItemParsed['group'] == $producedItemParsed['group'] ) {
                                if ( $acceptItemParsed['type'] == "*" || $acceptItemParsed['type'] == $producedItemParsed['type'] ) {
                                    return $produceItem;
                                }
                            }
                        }
                    }
                }
            }
        }

        // If we reach this point, we don't have a common ground between server and client
        return null;
    }
}
