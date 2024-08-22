<?php
/**
 * SetupIntentResponse
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
 * SetupIntentResponse Class Doc Comment
 *
 * @category Class
 * @package  Dojo_PHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SetupIntentResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetupIntentResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'client_session_secret' => 'string',
        'client_session_secret_expiration_date' => '\DateTime',
        'status' => '\Dojo_PHP\Model\SetupIntentStatus',
        'payment_methods' => '\Dojo_PHP\Model\PaymentMethod[]',
        'customer' => '\Dojo_PHP\Model\CreatePaymentIntentRequestCustomer',
        'billing_address' => '\Dojo_PHP\Model\CreatePaymentIntentRequestBillingAddress',
        'shipping_details' => '\Dojo_PHP\Model\CreatePaymentIntentRequestShippingDetails',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'expire_at' => '\DateTime',
        'reference' => 'string',
        'description' => 'string',
        'merchant_config' => '\Dojo_PHP\Model\PaymentIntentMerchantConfig',
        'config' => '\Dojo_PHP\Model\PaymentIntentConfig',
        'metadata' => 'array<string,string>',
        'intended_amount' => '\Dojo_PHP\Model\CreateSetupIntentRequestIntendedAmount',
        'merchant_initiated_transaction_type' => '\Dojo_PHP\Model\MerchantInitiatedTransactionType',
        'terms' => 'string',
        'setup_events' => '\Dojo_PHP\Model\PaymentStatusResponse[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'client_session_secret' => null,
        'client_session_secret_expiration_date' => 'date-time',
        'status' => null,
        'payment_methods' => null,
        'customer' => null,
        'billing_address' => null,
        'shipping_details' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'expire_at' => 'date-time',
        'reference' => null,
        'description' => null,
        'merchant_config' => null,
        'config' => null,
        'metadata' => null,
        'intended_amount' => null,
        'merchant_initiated_transaction_type' => null,
        'terms' => null,
        'setup_events' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'id' => true,
		'client_session_secret' => true,
		'client_session_secret_expiration_date' => false,
		'status' => false,
		'payment_methods' => true,
		'customer' => true,
		'billing_address' => true,
		'shipping_details' => true,
		'created_at' => false,
		'updated_at' => false,
		'expire_at' => true,
		'reference' => true,
		'description' => true,
		'merchant_config' => true,
		'config' => true,
		'metadata' => true,
		'intended_amount' => true,
		'merchant_initiated_transaction_type' => false,
		'terms' => true,
		'setup_events' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

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
        'id' => 'id',
        'client_session_secret' => 'clientSessionSecret',
        'client_session_secret_expiration_date' => 'clientSessionSecretExpirationDate',
        'status' => 'status',
        'payment_methods' => 'paymentMethods',
        'customer' => 'customer',
        'billing_address' => 'billingAddress',
        'shipping_details' => 'shippingDetails',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'expire_at' => 'expireAt',
        'reference' => 'reference',
        'description' => 'description',
        'merchant_config' => 'merchantConfig',
        'config' => 'config',
        'metadata' => 'metadata',
        'intended_amount' => 'intendedAmount',
        'merchant_initiated_transaction_type' => 'merchantInitiatedTransactionType',
        'terms' => 'terms',
        'setup_events' => 'setupEvents'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'client_session_secret' => 'setClientSessionSecret',
        'client_session_secret_expiration_date' => 'setClientSessionSecretExpirationDate',
        'status' => 'setStatus',
        'payment_methods' => 'setPaymentMethods',
        'customer' => 'setCustomer',
        'billing_address' => 'setBillingAddress',
        'shipping_details' => 'setShippingDetails',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'expire_at' => 'setExpireAt',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'merchant_config' => 'setMerchantConfig',
        'config' => 'setConfig',
        'metadata' => 'setMetadata',
        'intended_amount' => 'setIntendedAmount',
        'merchant_initiated_transaction_type' => 'setMerchantInitiatedTransactionType',
        'terms' => 'setTerms',
        'setup_events' => 'setSetupEvents'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'client_session_secret' => 'getClientSessionSecret',
        'client_session_secret_expiration_date' => 'getClientSessionSecretExpirationDate',
        'status' => 'getStatus',
        'payment_methods' => 'getPaymentMethods',
        'customer' => 'getCustomer',
        'billing_address' => 'getBillingAddress',
        'shipping_details' => 'getShippingDetails',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'expire_at' => 'getExpireAt',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'merchant_config' => 'getMerchantConfig',
        'config' => 'getConfig',
        'metadata' => 'getMetadata',
        'intended_amount' => 'getIntendedAmount',
        'merchant_initiated_transaction_type' => 'getMerchantInitiatedTransactionType',
        'terms' => 'getTerms',
        'setup_events' => 'getSetupEvents'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('client_session_secret', $data ?? [], null);
        $this->setIfExists('client_session_secret_expiration_date', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('payment_methods', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('billing_address', $data ?? [], null);
        $this->setIfExists('shipping_details', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('expire_at', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('merchant_config', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('intended_amount', $data ?? [], null);
        $this->setIfExists('merchant_initiated_transaction_type', $data ?? [], null);
        $this->setIfExists('terms', $data ?? [], null);
        $this->setIfExists('setup_events', $data ?? [], null);
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Unique identifier for the setup intent.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets client_session_secret
     *
     * @return string|null
     */
    public function getClientSessionSecret()
    {
        return $this->container['client_session_secret'];
    }

    /**
     * Sets client_session_secret
     *
     * @param string|null $client_session_secret The client secret.
     *
     * @return self
     */
    public function setClientSessionSecret($client_session_secret)
    {
        if (is_null($client_session_secret)) {
            array_push($this->openAPINullablesSetToNull, 'client_session_secret');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('client_session_secret', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['client_session_secret'] = $client_session_secret;

        return $this;
    }

    /**
     * Gets client_session_secret_expiration_date
     *
     * @return \DateTime|null
     */
    public function getClientSessionSecretExpirationDate()
    {
        return $this->container['client_session_secret_expiration_date'];
    }

    /**
     * Sets client_session_secret_expiration_date
     *
     * @param \DateTime|null $client_session_secret_expiration_date The expiration date of `clientSessionSecret`.
     *
     * @return self
     */
    public function setClientSessionSecretExpirationDate($client_session_secret_expiration_date)
    {
        if (is_null($client_session_secret_expiration_date)) {
            throw new \InvalidArgumentException('non-nullable client_session_secret_expiration_date cannot be null');
        }
        $this->container['client_session_secret_expiration_date'] = $client_session_secret_expiration_date;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Dojo_PHP\Model\SetupIntentStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Dojo_PHP\Model\SetupIntentStatus|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets payment_methods
     *
     * @return \Dojo_PHP\Model\PaymentMethod[]|null
     */
    public function getPaymentMethods()
    {
        return $this->container['payment_methods'];
    }

    /**
     * Sets payment_methods
     *
     * @param \Dojo_PHP\Model\PaymentMethod[]|null $payment_methods The payment methods that customers can use to pay.
     *
     * @return self
     */
    public function setPaymentMethods($payment_methods)
    {
        if (is_null($payment_methods)) {
            array_push($this->openAPINullablesSetToNull, 'payment_methods');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('payment_methods', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['payment_methods'] = $payment_methods;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Dojo_PHP\Model\CreatePaymentIntentRequestCustomer|null
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Dojo_PHP\Model\CreatePaymentIntentRequestCustomer|null $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            array_push($this->openAPINullablesSetToNull, 'customer');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets billing_address
     *
     * @return \Dojo_PHP\Model\CreatePaymentIntentRequestBillingAddress|null
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Dojo_PHP\Model\CreatePaymentIntentRequestBillingAddress|null $billing_address billing_address
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
     * @return \Dojo_PHP\Model\CreatePaymentIntentRequestShippingDetails|null
     */
    public function getShippingDetails()
    {
        return $this->container['shipping_details'];
    }

    /**
     * Sets shipping_details
     *
     * @param \Dojo_PHP\Model\CreatePaymentIntentRequestShippingDetails|null $shipping_details shipping_details
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
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at The timestamp of the create date, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at The timestamp of the update date, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets expire_at
     *
     * @return \DateTime|null
     */
    public function getExpireAt()
    {
        return $this->container['expire_at'];
    }

    /**
     * Sets expire_at
     *
     * @param \DateTime|null $expire_at The timestamp and date of when a setup intent will be voided, in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) UTC format. This occurs when a setup intent is created and not yet authorized.
     *
     * @return self
     */
    public function setExpireAt($expire_at)
    {
        if (is_null($expire_at)) {
            array_push($this->openAPINullablesSetToNull, 'expire_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expire_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expire_at'] = $expire_at;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference Details of the reference for the payment.
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            array_push($this->openAPINullablesSetToNull, 'reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description The payment description.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets merchant_config
     *
     * @return \Dojo_PHP\Model\PaymentIntentMerchantConfig|null
     */
    public function getMerchantConfig()
    {
        return $this->container['merchant_config'];
    }

    /**
     * Sets merchant_config
     *
     * @param \Dojo_PHP\Model\PaymentIntentMerchantConfig|null $merchant_config merchant_config
     *
     * @return self
     */
    public function setMerchantConfig($merchant_config)
    {
        if (is_null($merchant_config)) {
            array_push($this->openAPINullablesSetToNull, 'merchant_config');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchant_config', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchant_config'] = $merchant_config;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \Dojo_PHP\Model\PaymentIntentConfig|null
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \Dojo_PHP\Model\PaymentIntentConfig|null $config config
     *
     * @return self
     */
    public function setConfig($config)
    {
        if (is_null($config)) {
            array_push($this->openAPINullablesSetToNull, 'config');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('config', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,string>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,string>|null $metadata A set of key-value pairs that you can use for storing additional information.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            array_push($this->openAPINullablesSetToNull, 'metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets intended_amount
     *
     * @return \Dojo_PHP\Model\CreateSetupIntentRequestIntendedAmount|null
     */
    public function getIntendedAmount()
    {
        return $this->container['intended_amount'];
    }

    /**
     * Sets intended_amount
     *
     * @param \Dojo_PHP\Model\CreateSetupIntentRequestIntendedAmount|null $intended_amount intended_amount
     *
     * @return self
     */
    public function setIntendedAmount($intended_amount)
    {
        if (is_null($intended_amount)) {
            array_push($this->openAPINullablesSetToNull, 'intended_amount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('intended_amount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['intended_amount'] = $intended_amount;

        return $this;
    }

    /**
     * Gets merchant_initiated_transaction_type
     *
     * @return \Dojo_PHP\Model\MerchantInitiatedTransactionType|null
     */
    public function getMerchantInitiatedTransactionType()
    {
        return $this->container['merchant_initiated_transaction_type'];
    }

    /**
     * Sets merchant_initiated_transaction_type
     *
     * @param \Dojo_PHP\Model\MerchantInitiatedTransactionType|null $merchant_initiated_transaction_type merchant_initiated_transaction_type
     *
     * @return self
     */
    public function setMerchantInitiatedTransactionType($merchant_initiated_transaction_type)
    {
        if (is_null($merchant_initiated_transaction_type)) {
            throw new \InvalidArgumentException('non-nullable merchant_initiated_transaction_type cannot be null');
        }
        $this->container['merchant_initiated_transaction_type'] = $merchant_initiated_transaction_type;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string|null
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string|null $terms The terms that customers are required to review before adding a card to setup intent.
     *
     * @return self
     */
    public function setTerms($terms)
    {
        if (is_null($terms)) {
            array_push($this->openAPINullablesSetToNull, 'terms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('terms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets setup_events
     *
     * @return \Dojo_PHP\Model\PaymentStatusResponse[]|null
     */
    public function getSetupEvents()
    {
        return $this->container['setup_events'];
    }

    /**
     * Sets setup_events
     *
     * @param \Dojo_PHP\Model\PaymentStatusResponse[]|null $setup_events Information of the setup intent.
     *
     * @return self
     */
    public function setSetupEvents($setup_events)
    {
        if (is_null($setup_events)) {
            array_push($this->openAPINullablesSetToNull, 'setup_events');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('setup_events', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['setup_events'] = $setup_events;

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


