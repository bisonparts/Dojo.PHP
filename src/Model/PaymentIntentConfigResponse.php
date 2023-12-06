<?php
/**
 * PaymentIntentConfigResponse
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
 * # Introduction  The Dojo API is RESTful. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body.  ## Base URLs  Use the following base URL when making requests to the API:  https://api.dojo.tech/  ## Looking for no-code solutions?  Try one of our [pre-built solutions](../payments/plugins/) for your site.  ## Authentication  The Dojo API uses [Basic HTTP auth](https://en.wikipedia.org/wiki/Basic_access_authentication). You can generate API keys in [Developer Portal](https://developer.dojo.tech). Secret keys for the test environment have the prefix `sk_sandbox_` and for production have the prefix `sk_prod_`.  You must include your secret API key in the header of all requests, for example:  ```curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\ ... ```  API requests without authentication will fail.  ## HTTP Responses  The API returns standard HTTP response codes [RFC 7231](https://tools.ietf.org/html/rfc7231#section-6) on each request to indicate the success or otherwise of API requests. HTTP status codes summary are listed below:  * `200 OK`—The request was successful.  * `201 Created`—The request was successful, and a new resource was created as a result.  * `204 No Content`—The request was successful, but there is no content to send.  * `400 Bad Request`—Bad request, probably due to a syntax error.  * `401 Unauthorized`—Authentication required.  * `403 Forbidden`—The API key doesn't have permissions.  * `404 Not Found`—The resource doesn't exist.  * `405 Method Not Allowed`—The request method is known by the server but isn't supported by the target resource.  * `409 Conflict`—The request couldn't be completed because it conflicted with another request or the server's configuration.  * `500`, `502`, `503`, `504` `Server Errors`—An error occurred with our API.  ## Errors  Dojo follows the error response format proposed in [RFC 7807](https://tools.ietf.org/html/rfc7807) also known as Problem Details for HTTP APIs. All errors are returned in the form of JSON.  ### Error Schema  In case of an error, the response object contains the following fields:  * `errors` [object]—A human-readable explanation of errors.  * `type` [string]— A URI reference RFC 3986 that identifies the problem type.  * `title` [string]—A short, human-readable summary of the error.  * `status` [integer]—The HTTP status code.  * `detail` [string]—A human-readable message giving more details about the error. Not always present.  * `traceId` [string]—The unique identifier of the failing request.  The following example shows a possible error response:  ```json {     \"errors\": {         \"Reference\": [             \"The Reference field is required.\"         ]     },     \"type\": \"https://tools.ietf.org/html/rfc7231#section-6.5.1\",     \"title\": \"One or more validation errors occurred.\",     \"status\": 400,     \"traceId\": \"00-a405f077df056a498323ffbcec05923f-aa63e6f4dbbc734a-01\", } ```  ## Versioning  Dojo API uses the yyyy-mm-dd API version-naming scheme. You have to pass the version as the `version` header in all API calls, for example:  ``` curl curl   --header 'content-type: application/json' \\   --header 'Authorization: Basic sk_prod_your_key' \\   --header 'version: 2022-04-07' \\ ```  When we make [breaking changes](../payments/development-resources/versioning-overview#breaking-changes) to the API, we release new dated versions.  The current version is `2022-04-07`.
 *
 * The version of the OpenAPI document: 2022-04-07
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Dojo_PHP\Model;

use \ArrayAccess;
use \Dojo_PHP\ObjectSerializer;

/**
 * PaymentIntentConfigResponse Class Doc Comment
 *
 * @category Class
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentIntentConfigResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentIntentConfigResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'redirect_url' => 'string',
        'cancel_url' => 'string',
        'customer_email' => '\Dojo_PHP\Model\PaymentIntentConfigRequestCustomerEmail',
        'details' => '\Dojo_PHP\Model\PaymentIntentConfigRequestDetails',
        'billing_address' => '\Dojo_PHP\Model\PaymentIntentConfigRequestBillingAddress',
        'shipping_details' => '\Dojo_PHP\Model\PaymentIntentConfigRequestShippingDetails',
        'payment' => '\Dojo_PHP\Model\PaymentIntentConfigRequestPayment'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'title' => null,
        'redirect_url' => 'uri',
        'cancel_url' => 'uri',
        'customer_email' => null,
        'details' => null,
        'billing_address' => null,
        'shipping_details' => null,
        'payment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'title' => true,
		'redirect_url' => true,
		'cancel_url' => true,
		'customer_email' => true,
		'details' => true,
		'billing_address' => true,
		'shipping_details' => true,
		'payment' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'title' => 'title',
        'redirect_url' => 'redirectUrl',
        'cancel_url' => 'cancelUrl',
        'customer_email' => 'customerEmail',
        'details' => 'details',
        'billing_address' => 'billingAddress',
        'shipping_details' => 'shippingDetails',
        'payment' => 'payment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'redirect_url' => 'setRedirectUrl',
        'cancel_url' => 'setCancelUrl',
        'customer_email' => 'setCustomerEmail',
        'details' => 'setDetails',
        'billing_address' => 'setBillingAddress',
        'shipping_details' => 'setShippingDetails',
        'payment' => 'setPayment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'redirect_url' => 'getRedirectUrl',
        'cancel_url' => 'getCancelUrl',
        'customer_email' => 'getCustomerEmail',
        'details' => 'getDetails',
        'billing_address' => 'getBillingAddress',
        'shipping_details' => 'getShippingDetails',
        'payment' => 'getPayment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('redirect_url', $data ?? [], null);
        $this->setIfExists('cancel_url', $data ?? [], null);
        $this->setIfExists('customer_email', $data ?? [], null);
        $this->setIfExists('details', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('shipping_details', $data ?? [], null);
        $this->setIfExists('payment', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 100)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 100.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The [checkout page’s title](../payments/accept-payments/checkout-page/configuration#add-information-about-your-company).
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            array_push($this->openAPINullablesSetToNull, 'title');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('title', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($title) && (mb_strlen($title) > 100)) {
            throw new \InvalidArgumentException('invalid length for $title when calling PaymentIntentConfigResponse., must be smaller than or equal to 100.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets redirect_url
     *
     * @return string|null
     */
    public function getRedirectUrl()
    {
        return $this->container['redirect_url'];
    }

    /**
     * Sets redirect_url
     *
     * @param string|null $redirect_url The URL where the customer will be directed to after the payment.
     *
     * @return self
     */
    public function setRedirectUrl($redirect_url)
    {
        if (is_null($redirect_url)) {
            array_push($this->openAPINullablesSetToNull, 'redirect_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redirect_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['redirect_url'] = $redirect_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url The URL where the customer will be directed to when canceling the payment.
     *
     * @return self
     */
    public function setCancelUrl($cancel_url)
    {
        if (is_null($cancel_url)) {
            array_push($this->openAPINullablesSetToNull, 'cancel_url');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cancel_url', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets customer_email
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfigRequestCustomerEmail|null
     */
    public function getCustomerEmail()
    {
        return $this->container['customer_email'];
    }

    /**
     * Sets customer_email
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfigRequestCustomerEmail|null $customer_email customer_email
     *
     * @return self
     */
    public function setCustomerEmail($customer_email)
    {
        if (is_null($customer_email)) {
            array_push($this->openAPINullablesSetToNull, 'customer_email');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_email', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_email'] = $customer_email;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfigRequestDetails|null
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfigRequestDetails|null $details details
     *
     * @return self
     */
    public function setDetails($details)
    {
        if (is_null($details)) {
            array_push($this->openAPINullablesSetToNull, 'details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfigRequestBillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfigRequestBillingAddress|null $billing_address billing_address
     *
     * @return self
     */
    public function setBillingAddress($billing_address)
    {
        if (is_null($billing_address)) {
            array_push($this->openAPINullablesSetToNull, 'billing_address');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('billing_address', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets shipping_details
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfigRequestShippingDetails|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfigRequestShippingDetails|null $shipping_details shipping_details
     *
     * @return self
     */
    public function setShippingDetails($shipping_details)
    {
        if (is_null($shipping_details)) {
            array_push($this->openAPINullablesSetToNull, 'shipping_details');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shipping_details', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shipping_details'] = $shipping_details;

        return $this;
    }

    /**
     * Gets payment
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfigRequestPayment|null
     */
    public function getPayment()
    {
        return $this->container['payment'];
    }

    /**
     * Sets payment
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfigRequestPayment|null $payment payment
     *
     * @return self
     */
    public function setPayment($payment)
    {
        if (is_null($payment)) {
            array_push($this->openAPINullablesSetToNull, 'payment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment'] = $payment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


