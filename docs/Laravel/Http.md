# Joomla/Http Package version 1.3.3

Joomla HTTP Package

## The Joomla\Http\TransportInterface Interface

HTTP transport class interface.

### Methods

#### `Joomla\Http\TransportInterface::__construct`

Constructor.

##### Signature

```php
abstract public Joomla\Http\TransportInterface::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options object. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor.
 *
 * @param   array|\ArrayAccess  $options  Client options object.
 *
 * @since   1.0
 */
abstract public function __construct( $options = []) : void;
```
#### `Joomla\Http\TransportInterface::request`

Send a request to the server and return a Response object with the response.

##### Signature

```php
abstract public Joomla\Http\TransportInterface::request ( string $method, Joomla\Uri\UriInterface $uri [, mixed $data = null [, array $headers = null [, int $timeout = null [, string $userAgent = null ]]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The HTTP method for sending the request. |
| `uri` | `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `null`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |
| `userAgent` | `string` | The optional user agent string to send with the request. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a request to the server and return a Response object with the response.
 *
 * @param   string        $method     The HTTP method for sending the request.
 * @param   UriInterface  $uri        The URI to the resource to request.
 * @param   mixed         $data       Either an associative array or a string to be sent with the request.
 * @param   array         $headers    An array of request headers to send with the request.
 * @param   integer       $timeout    Read timeout in seconds.
 * @param   string        $userAgent  The optional user agent string to send with the request.
 *
 * @return  Response
 *
 * @since   1.0
 */
abstract public function request(string $method, Joomla\Uri\UriInterface $uri, mixed $data = null, array $headers = null, int $timeout = null, string $userAgent = null) : Joomla\Http\Response;
```
#### `Joomla\Http\TransportInterface::isSupported`

Check if HTTP transport layer available for using

##### Signature

```php
abstract public static Joomla\Http\TransportInterface::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if available else false

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if HTTP transport layer available for using
 *
 * @return  boolean  True if available else false
 *
 * @since   1.0
 */
abstract public static function isSupported() : bool;
```

## The Joomla\Http\Exception\InvalidResponseCodeException Class

Exception representing an invalid or undefined HTTP response code

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$message` | `` |  |
| protected `$code` | `` |  |
| protected `$file` | `` |  |
| protected `$line` | `` |  |    

### Methods

#### `Joomla\Http\Exception\InvalidResponseCodeException::__construct`

##### Signature

```php
public Joomla\Http\Exception\InvalidResponseCodeException::__construct ( [  $message = null [,  $code = null [,  $previous = null ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `` |  Defaults to `null`. |
| `code` | `` |  Defaults to `null`. |
| `previous` | `` |  Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
public function __construct( $message = null,  $code = null,  $previous = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::__wakeup`

##### Signature

```php
public Joomla\Http\Exception\InvalidResponseCodeException::__wakeup ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
public function __wakeup() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getMessage`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getMessage ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getMessage() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getCode`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getCode ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getCode() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getFile`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getFile ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getFile() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getLine`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getLine ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getLine() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getTrace`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getTrace ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getTrace() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getPrevious`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getPrevious ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getPrevious() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::getTraceAsString`

##### Signature

```php
final public Joomla\Http\Exception\InvalidResponseCodeException::getTraceAsString ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getTraceAsString() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\InvalidResponseCodeException::__toString`

##### Signature

```php
public Joomla\Http\Exception\InvalidResponseCodeException::__toString ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
public function __toString() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Http\Exception\UnexpectedResponseException Class

Exception representing an unexpected response

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$message` | `` |  |
| protected `$code` | `` |  |
| protected `$file` | `` |  |
| protected `$line` | `` |  |    

### Methods

#### `Joomla\Http\Exception\UnexpectedResponseException::__construct`

Constructor

##### Signature

```php
public Joomla\Http\Exception\UnexpectedResponseException::__construct ( Joomla\Http\Response $response [, string $message = &#039;&#039; [, int $code = 0 [, Exception $previous = null ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `response` | `Joomla\Http\Response` | The Response object. |
| `message` | `string` | The Exception message to throw. Defaults to `''`. |
| `code` | `int` | The Exception code. Defaults to `0`. |
| `previous` | `Exception` | The previous exception used for the exception chaining. Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor
 *
 * @param   Response    $response  The Response object.
 * @param   string      $message   The Exception message to throw.
 * @param   integer     $code      The Exception code.
 * @param   \Exception  $previous  The previous exception used for the exception chaining.
 *
 * @since   1.2.0
 */
public function __construct(Joomla\Http\Response $response, string $message = '', int $code = 0, Exception $previous = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getResponse`

Get the Response object.

##### Signature

```php
public Joomla\Http\Exception\UnexpectedResponseException::getResponse ( void ) : Joomla\Http\Response
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Response object.
 *
 * @return  Response
 *
 * @since   1.2.0
 */
public function getResponse() : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::__wakeup`

##### Signature

```php
public Joomla\Http\Exception\UnexpectedResponseException::__wakeup ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
public function __wakeup() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getMessage`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getMessage ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getMessage() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getCode`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getCode ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getCode() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getFile`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getFile ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getFile() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getLine`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getLine ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getLine() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getTrace`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getTrace ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getTrace() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getPrevious`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getPrevious ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getPrevious() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::getTraceAsString`

##### Signature

```php
final public Joomla\Http\Exception\UnexpectedResponseException::getTraceAsString ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
final public function getTraceAsString() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Exception\UnexpectedResponseException::__toString`

##### Signature

```php
public Joomla\Http\Exception\UnexpectedResponseException::__toString ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 *
 */
public function __toString() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Http\Transport\Curl Class

HTTP transport class for using cURL.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | The client options. |    

### Methods

#### `Joomla\Http\Transport\Curl::__construct`

Constructor. CURLOPT_FOLLOWLOCATION must be disabled when open_basedir or safe_mode are enabled.

##### Signature

```php
public Joomla\Http\Transport\Curl::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options array. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor. CURLOPT_FOLLOWLOCATION must be disabled when open_basedir or safe_mode are enabled.
 *
 * @param   array|\ArrayAccess  $options  Client options array.
 *
 * @link    https://secure.php.net/manual/en/function.curl-setopt.php
 * @since   1.0
 * @throws  \InvalidArgumentException
 * @throws  \RuntimeException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Curl::request`

Send a request to the server and return a Response object with the response.

##### Signature

```php
public Joomla\Http\Transport\Curl::request ( string $method, Joomla\Uri\UriInterface $uri [, mixed $data = null [, array $headers = null [, int $timeout = null [, string $userAgent = null ]]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The HTTP method for sending the request. |
| `uri` | `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `null`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |
| `userAgent` | `string` | The optional user agent string to send with the request. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a request to the server and return a Response object with the response.
 *
 * @param   string        $method     The HTTP method for sending the request.
 * @param   UriInterface  $uri        The URI to the resource to request.
 * @param   mixed         $data       Either an associative array or a string to be sent with the request.
 * @param   array         $headers    An array of request headers to send with the request.
 * @param   integer       $timeout    Read timeout in seconds.
 * @param   string        $userAgent  The optional user agent string to send with the request.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function request(string $method, Joomla\Uri\UriInterface $uri, mixed $data = null, array $headers = null, int $timeout = null, string $userAgent = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Curl::setCAOptionAndValue`

Configure the cURL resources with the appropriate root certificates.

##### Signature

```php
protected Joomla\Http\Transport\Curl::setCAOptionAndValue ( resource $ch  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `ch` | `resource` | The cURL resource you want to configure the certificates on. |

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Configure the cURL resources with the appropriate root certificates.
 *
 * @param   resource  $ch  The cURL resource you want to configure the certificates on.
 *
 * @return  void
 *
 * @since   1.3.2
 */
protected function setCAOptionAndValue(resource $ch) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Curl::getResponse`

Get a response object from a server response.

##### Signature

```php
protected Joomla\Http\Transport\Curl::getResponse ( string $content, array $info  ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `content` | `string` | The complete server response, including headers  as a string if the response has no errors. |
| `info` | `array` | The cURL request information. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws Joomla\Http\Exception\InvalidResponseCodeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a response object from a server response.
 *
 * @param   string  $content  The complete server response, including headers
 *                            as a string if the response has no errors.
 * @param   array   $info     The cURL request information.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  InvalidResponseCodeException
 */
protected function getResponse(string $content, array $info) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Curl::isSupported`

Check if HTTP transport cURL is available for use

##### Signature

```php
public static Joomla\Http\Transport\Curl::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if available, else false

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if HTTP transport cURL is available for use
 *
 * @return  boolean  True if available, else false
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Http\Transport\Stream Class

HTTP transport class for using PHP streams.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | The client options. |    

### Methods

#### `Joomla\Http\Transport\Stream::__construct`

Constructor.

##### Signature

```php
public Joomla\Http\Transport\Stream::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options array. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor.
 *
 * @param   array|\ArrayAccess  $options  Client options array.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Stream::request`

Send a request to the server and return a Response object with the response.

##### Signature

```php
public Joomla\Http\Transport\Stream::request ( string $method, Joomla\Uri\UriInterface $uri [, mixed $data = null [, array $headers = null [, int $timeout = null [, string $userAgent = null ]]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The HTTP method for sending the request. |
| `uri` | `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `null`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |
| `userAgent` | `string` | The optional user agent string to send with the request. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a request to the server and return a Response object with the response.
 *
 * @param   string        $method     The HTTP method for sending the request.
 * @param   UriInterface  $uri        The URI to the resource to request.
 * @param   mixed         $data       Either an associative array or a string to be sent with the request.
 * @param   array         $headers    An array of request headers to send with the request.
 * @param   integer       $timeout    Read timeout in seconds.
 * @param   string        $userAgent  The optional user agent string to send with the request.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function request(string $method, Joomla\Uri\UriInterface $uri, mixed $data = null, array $headers = null, int $timeout = null, string $userAgent = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Stream::getResponse`

Get a response object from a server response.

##### Signature

```php
protected Joomla\Http\Transport\Stream::getResponse ( array $headers, string $body  ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `headers` | `array` | The response headers as an array. |
| `body` | `string` | The response body as a string. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws Joomla\Http\Exception\InvalidResponseCodeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a response object from a server response.
 *
 * @param   array   $headers  The response headers as an array.
 * @param   string  $body     The response body as a string.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  InvalidResponseCodeException
 */
protected function getResponse(array $headers, string $body) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Stream::isSupported`

Check if http transport stream available for use

##### Signature

```php
public static Joomla\Http\Transport\Stream::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if available else false

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if http transport stream available for use
 *
 * @return  boolean  True if available else false
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Http\Transport\Socket Class

HTTP transport class for using sockets directly.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$connections` | `array` | Reusable socket connections. |
| protected `$options` | `array` or `ArrayAccess` | The client options. |    

### Methods

#### `Joomla\Http\Transport\Socket::__construct`

Constructor.

##### Signature

```php
public Joomla\Http\Transport\Socket::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options array. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor.
 *
 * @param   array|\ArrayAccess  $options  Client options array.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Socket::request`

Send a request to the server and return a Response object with the response.

##### Signature

```php
public Joomla\Http\Transport\Socket::request ( string $method, Joomla\Uri\UriInterface $uri [, mixed $data = null [, array $headers = null [, int $timeout = null [, string $userAgent = null ]]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The HTTP method for sending the request. |
| `uri` | `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `null`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |
| `userAgent` | `string` | The optional user agent string to send with the request. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a request to the server and return a Response object with the response.
 *
 * @param   string        $method     The HTTP method for sending the request.
 * @param   UriInterface  $uri        The URI to the resource to request.
 * @param   mixed         $data       Either an associative array or a string to be sent with the request.
 * @param   array         $headers    An array of request headers to send with the request.
 * @param   integer       $timeout    Read timeout in seconds.
 * @param   string        $userAgent  The optional user agent string to send with the request.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function request(string $method, Joomla\Uri\UriInterface $uri, mixed $data = null, array $headers = null, int $timeout = null, string $userAgent = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Socket::getResponse`

Get a response object from a server response.

##### Signature

```php
protected Joomla\Http\Transport\Socket::getResponse ( string $content  ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `content` | `string` | The complete server response, including headers. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws UnexpectedValueException <br />
Throws Joomla\Http\Exception\InvalidResponseCodeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a response object from a server response.
 *
 * @param   string  $content  The complete server response, including headers.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  \UnexpectedValueException
 * @throws  InvalidResponseCodeException
 */
protected function getResponse(string $content) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Socket::connect`

Connect to a server and get the resource.

##### Signature

```php
protected Joomla\Http\Transport\Socket::connect ( Joomla\Uri\UriInterface $uri [, int $timeout = null ] ) : resource
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `Joomla\Uri\UriInterface` | The URI to connect with. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`resource` Socket connection resource.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Connect to a server and get the resource.
 *
 * @param   UriInterface  $uri      The URI to connect with.
 * @param   integer       $timeout  Read timeout in seconds.
 *
 * @return  resource  Socket connection resource.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function connect(Joomla\Uri\UriInterface $uri, int $timeout = null) : resource{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Transport\Socket::isSupported`

Check if http transport socket available for use

##### Signature

```php
public static Joomla\Http\Transport\Socket::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if available else false

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if http transport socket available for use
 *
 * @return  boolean   True if available else false
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Http\HttpFactory Class

HTTP factory class.

### Methods

#### `Joomla\Http\HttpFactory::getHttp`

Create an Http instance.

##### Signature

```php
public static Joomla\Http\HttpFactory::getHttp ( [ array|ArrayAccess $options = [] [, array|string $adapters = null ]] ) : Joomla\Http\Http
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options array. Defaults to `[]`. |
| `adapters` | `array` or `string` | Adapter (string) or queue of adapters (array) to use for communication. Defaults to `null`. |

##### Return Values

`Joomla\Http\Http` 

##### Errors/Exceptions

Throws InvalidArgumentException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create an Http instance.
 *
 * @param   array|\ArrayAccess  $options   Client options array.
 * @param   array|string        $adapters  Adapter (string) or queue of adapters (array) to use for communication.
 *
 * @return  Http
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 * @throws  \RuntimeException
 */
public static function getHttp( $options = [],  $adapters = null) : Joomla\Http\Http{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\HttpFactory::getAvailableDriver`

Finds an available TransportInterface object for communication

##### Signature

```php
public static Joomla\Http\HttpFactory::getAvailableDriver ( [ array|ArrayAccess $options = [] [, array|string $default = null ]] ) : Joomla\Http\TransportInterface|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Options for creating TransportInterface object Defaults to `[]`. |
| `default` | `array` or `string` | Adapter (string) or queue of adapters (array) to use Defaults to `null`. |

##### Return Values

`Joomla\Http\TransportInterface` or `bool` Interface sub-class or boolean false if no adapters are available

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Finds an available TransportInterface object for communication
 *
 * @param   array|\ArrayAccess  $options  Options for creating TransportInterface object
 * @param   array|string        $default  Adapter (string) or queue of adapters (array) to use
 *
 * @return  TransportInterface|boolean  Interface sub-class or boolean false if no adapters are available
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public static function getAvailableDriver( $options = [],  $default = null) : Joomla\Http\TransportInterface|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\HttpFactory::getHttpTransports`

Get the HTTP transport handlers

##### Signature

```php
public static Joomla\Http\HttpFactory::getHttpTransports ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` An array of available transport handlers

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the HTTP transport handlers
 *
 * @return  array  An array of available transport handlers
 *
 * @since   1.0
 */
public static function getHttpTransports() : array{
    // @todo Add adapter code.
}
```

## The Joomla\Http\Response Class

HTTP response data object class.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$code` | `int` | The server response code. |
| public `$headers` | `array` | Response headers. |
| public `$body` | `string` | Server response body. |

## The Joomla\Http\Http Class

HTTP client class.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | Options for the HTTP client. |
| protected `$transport` | `Joomla\Http\TransportInterface` | The HTTP transport object to use in sending HTTP requests. |    

### Methods

#### `Joomla\Http\Http::__construct`

Constructor.

##### Signature

```php
public Joomla\Http\Http::__construct ( [ array|ArrayAccess $options = [] [, Joomla\Http\TransportInterface $transport = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | Client options array. If the registry contains any headers.* elements,  these will be added to the request headers. Defaults to `[]`. |
| `transport` | `Joomla\Http\TransportInterface` | The HTTP transport object. Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

###### Direct Instantiation With Default Parameters

Joomla/Http:
```php
use Joomla\Http\Http;

$http = new Http();

$response = $http->get('https://jsonplaceholder.typicode.com/posts/1');
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```

###### Direct Instantiation With Specific Transport

Joomla/Http:
```php
use Joomla\Http\Http;
use Joomla\Http\Transport\Stream as StreamTransport;

$options   = [];
$transport = new StreamTransport($options);

$http = new Http($options, $transport);

$response = $http->get('https://jsonplaceholder.typicode.com/posts/1');
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor.
 *
 * @param   array|\ArrayAccess  $options    Client options array. If the registry contains any headers.* elements,
 *                                          these will be added to the request headers.
 * @param   TransportInterface  $transport  The HTTP transport object.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = [], Joomla\Http\TransportInterface $transport = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::getOption`

Get an option from the HTTP client.

##### Signature

```php
public Joomla\Http\Http::getOption ( string $key  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the option to get. |

##### Return Values

`mixed` The option value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an option from the HTTP client.
 *
 * @param   string  $key  The name of the option to get.
 *
 * @return  mixed  The option value.
 *
 * @since   1.0
 */
public function getOption(string $key) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::setOption`

Set an option for the HTTP client.

##### Signature

```php
public Joomla\Http\Http::setOption ( string $key, mixed $value  ) : Joomla\Http\Http
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the option to set. |
| `value` | `mixed` | The option value to set. |

##### Return Values

`Joomla\Http\Http` This object for method chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an option for the HTTP client.
 *
 * @param   string  $key    The name of the option to set.
 * @param   mixed   $value  The option value to set.
 *
 * @return  Http  This object for method chaining.
 *
 * @since   1.0
 */
public function setOption(string $key, mixed $value) : Joomla\Http\Http{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::options`

Send the OPTIONS command to the server.

##### Signature

```php
public Joomla\Http\Http::options ( string|Joomla\Uri\UriInterface $url [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the OPTIONS command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function options( $url, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::head`

Send the HEAD command to the server.

##### Signature

```php
public Joomla\Http\Http::head ( string|Joomla\Uri\UriInterface $url [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the HEAD command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function head( $url, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::get`

Send the GET command to the server.

##### Signature

```php
public Joomla\Http\Http::get ( string|Joomla\Uri\UriInterface $url [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the GET command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function get( $url, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::post`

Send the POST command to the server.

##### Signature

```php
public Joomla\Http\Http::post ( string|Joomla\Uri\UriInterface $url, mixed $data [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the POST command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   mixed                $data     Either an associative array or a string to be sent with the request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function post( $url, mixed $data, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::put`

Send the PUT command to the server.

##### Signature

```php
public Joomla\Http\Http::put ( string|Joomla\Uri\UriInterface $url, mixed $data [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the PUT command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   mixed                $data     Either an associative array or a string to be sent with the request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function put( $url, mixed $data, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::delete`

Send the DELETE command to the server.

##### Signature

```php
public Joomla\Http\Http::delete ( string|Joomla\Uri\UriInterface $url [, array $headers = [] [, int $timeout = null [, mixed $data = null ]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the DELETE command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 * @param   mixed                $data     Either an associative array or a string to be sent with the request.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function delete( $url, array $headers = [], int $timeout = null, mixed $data = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::trace`

Send the TRACE command to the server.

##### Signature

```php
public Joomla\Http\Http::trace ( string|Joomla\Uri\UriInterface $url [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the TRACE command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function trace( $url, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::patch`

Send the PATCH command to the server.

##### Signature

```php
public Joomla\Http\Http::patch ( string|Joomla\Uri\UriInterface $url, mixed $data [, array $headers = [] [, int $timeout = null ]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the PATCH command to the server.
 *
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   mixed                $data     Either an associative array or a string to be sent with the request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 */
public function patch( $url, mixed $data, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\Http\Http::makeTransportRequest`

Send a request to the server and return a Response object with the response.

##### Signature

```php
protected Joomla\Http\Http::makeTransportRequest ( string $method, string|Joomla\Uri\UriInterface $url [, mixed $data = null [, array $headers = [] [, int $timeout = null ]]] ) : Joomla\Http\Response
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The HTTP method for sending the request. |
| `url` | `string` or `Joomla\Uri\UriInterface` | The URI to the resource to request. |
| `data` | `mixed` | Either an associative array or a string to be sent with the request. Defaults to `null`. |
| `headers` | `array` | An array of request headers to send with the request. Defaults to `[]`. |
| `timeout` | `int` | Read timeout in seconds. Defaults to `null`. |

##### Return Values

`Joomla\Http\Response` 

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a request to the server and return a Response object with the response.
 *
 * @param   string               $method   The HTTP method for sending the request.
 * @param   string|UriInterface  $url      The URI to the resource to request.
 * @param   mixed                $data     Either an associative array or a string to be sent with the request.
 * @param   array                $headers  An array of request headers to send with the request.
 * @param   integer              $timeout  Read timeout in seconds.
 *
 * @return  Response
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
protected function makeTransportRequest(string $method,  $url, mixed $data = null, array $headers = [], int $timeout = null) : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
