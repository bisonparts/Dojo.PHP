<?php
/**
 * AutoExpireAction
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Payment Service
 *
 * # Introduction  The Dojo API is RESTful. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body.  ## Base URLs  Use the following base URL when making requests to the API:  https://api.dojo.tech/  ## Looking for no-code solutions?  Try one of our [pre-built solutions](../docs/plugins/) for your site.  ## Authentication  The Dojo API uses [Basic HTTP auth](https://en.wikipedia.org/wiki/Basic_access_authentication). You can generate API keys in [Developer Portal](https://developer.dojo.tech). Secret keys for the test environment have the prefix `sk_sandbox_` and for production have the prefix `sk_prod_`.  You must include your secret API key in the header of all requests, for example:  ```curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\ ... ```  API requests without authentication will fail.  ## HTTP Responses  The API returns standard HTTP response codes [RFC 7231](https://tools.ietf.org/html/rfc7231#section-6) on each request to indicate the success or otherwise of API requests. HTTP status codes summary are listed below:  * `200 OK`—The request was successful.  * `201 Created`—The request was successful, and a new resource was created as a result.  * `204 No Content`—The request was successful, but there is no content to send.  * `400 Bad Request`—Bad request, probably due to a syntax error.  * `401 Unauthorized`—Authentication required.  * `403 Forbidden`—The API key doesn't have permissions.  * `404 Not Found`—The resource doesn't exist.  * `405 Method Not Allowed`—The request method is known by the server but isn't supported by the target resource.  * `409 Conflict`—The request couldn't be completed because it conflicted with another request or the server's configuration.  * `500`, `502`, `503`, `504` `Server Errors`—An error occurred with our API.  ## Errors  Dojo follows the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807) also known as Problem Details for HTTP APIs. All errors are returned in the form of JSON.  ### Error Schema  In case of an error, the response object contains the following fields:  * `errors` [object]—A human-readable explanation of errors.  * `type` [string]— A URI reference RFC 3986 that identifies the problem type.  * `title` [string]—A short, human-readable summary of the error.  * `status` [integer]—The HTTP status code.  * `detail` [string]—A human-readable message giving more details about the error. Not always present.  * `traceId` [string]—The unique identifier of the failing request.  The following example shows a possible error response:  ```json {     \"errors\": {         \"Reference\": [             \"The Reference field is required.\"         ]     },     \"type\": \"https://tools.ietf.org/html/rfc7231#section-6.5.1\",     \"title\": \"One or more validation errors occurred.\",     \"status\": 400,     \"traceId\": \"00-a405f077df056a498323ffbcec05923f-aa63e6f4dbbc734a-01\", } ```  ## Versioning  Dojo API uses the yyyy-mm-dd API version-naming scheme. You have to pass the version as the `version` header in all API calls, for example:  ``` curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\   --header 'version: 2022-04-07' \\ ```  When we make [breaking changes](../docs/development-resources/versioning-overview#breaking-changes) to the API, we release new dated versions.  The current version is `2022-04-07`.  ## Postman collection  You can run the API collection in Postman:   [![Run in Postman](https://run.pstmn.io/button.svg)](https://god.gw.postman.com/run-collection/16735701-b218f555-a7ad-46c4-8ad8-1f11c0aee443?action=collection%2Ffork&collection-url=entityId%3D16735701-b218f555-a7ad-46c4-8ad8-1f11c0aee443%26entityType%3Dcollection%26workspaceId%3Dfdd152df-0154-428c-aeb4-1b90e46b8523)
 *
 * The version of the OpenAPI document: 2022-04-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dojo_PHP\Model;
use \Dojo_PHP\ObjectSerializer;

/**
 * AutoExpireAction Class Doc Comment
 *
 * @category Class
 * @description The action that happens with this payment intent after the date set in the &#x60;autoExpireAt&#x60; parameter. Only available and required if &#x60;captureMode: Manual&#x60;.
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AutoExpireAction
{
    /**
     * Possible values of this enum
     */
    public const RELEASE = 'Release';

    public const CAPTURE = 'Capture';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RELEASE,
            self::CAPTURE
        ];
    }
}


