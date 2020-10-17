# Joomla/Oauth2 Package version 1.1.4

Joomla OAuth2 Package

## The Joomla\OAuth2\Client Class

Joomla Framework class for interacting with an OAuth 2.0 server.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` | Options for the Client object. |
| protected `$http` | `Joomla\Http\Http` | The HTTP client object to use in sending HTTP requests. |
| protected `$input` | `Joomla\Input\Input` | The input object to use in retrieving GET/POST data. |
| protected `$application` | `Joomla\Application\AbstractWebApplication` | The application object to send HTTP headers for redirects. |    

### Methods

#### `Joomla\OAuth2\Client::__construct`

Constructor.

##### Signature

```php
public Joomla\OAuth2\Client::__construct ( array $options, Joomla\Http\Http $http, Joomla\Input\Input $input [, Joomla\Application\AbstractWebApplication $application = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | OAuth2 Client options object |
| `http` | `Joomla\Http\Http` | The HTTP client object |
| `input` | `Joomla\Input\Input` | The input object |
| `application` | `Joomla\Application\AbstractWebApplication` | The application object Defaults to `null`. |

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
 * @param   array                   $options      OAuth2 Client options object
 * @param   Http                    $http         The HTTP client object
 * @param   Input                   $input        The input object
 * @param   AbstractWebApplication  $application  The application object
 *
 * @since   1.0
 */
public function __construct(array $options, Joomla\Http\Http $http, Joomla\Input\Input $input, Joomla\Application\AbstractWebApplication $application = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::authenticate`

Get the access token or redirect to the authentication URL.

##### Signature

```php
public Joomla\OAuth2\Client::authenticate ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The access token

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the access token or redirect to the authentication URL.
 *
 * @return  string  The access token
 *
 * @since   1.0
 * @throws  RuntimeException
 */
public function authenticate() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::isAuthenticated`

Verify if the client has been authenticated

##### Signature

```php
public Joomla\OAuth2\Client::isAuthenticated ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` Is authenticated

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Verify if the client has been authenticated
 *
 * @return  boolean  Is authenticated
 *
 * @since   1.0
 */
public function isAuthenticated() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::createUrl`

Create the URL for authentication.

##### Signature

```php
public Joomla\OAuth2\Client::createUrl ( void ) : Joomla\Http\Response
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Http\Response` The HTTP response

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create the URL for authentication.
 *
 * @return  \Joomla\Http\Response  The HTTP response
 *
 * @since   1.0
 * @throws  InvalidArgumentException
 */
public function createUrl() : Joomla\Http\Response{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::query`

Send a signed Oauth request.

##### Signature

```php
public Joomla\OAuth2\Client::query ( string $url [, mixed $data = null [, array $headers = [] [, string $method = &#039;get&#039; [, int $timeout = null ]]]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | The URL forf the request. |
| `data` | `mixed` | The data to include in the request Defaults to `null`. |
| `headers` | `array` | The headers to send with the request Defaults to `[]`. |
| `method` | `string` | The method with which to send the request Defaults to `'get'`. |
| `timeout` | `int` | The timeout for the request Defaults to `null`. |

##### Return Values

`string` The URL.

##### Errors/Exceptions

Throws InvalidArgumentException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send a signed Oauth request.
 *
 * @param   string  $url      The URL forf the request.
 * @param   mixed   $data     The data to include in the request
 * @param   array   $headers  The headers to send with the request
 * @param   string  $method   The method with which to send the request
 * @param   int     $timeout  The timeout for the request
 *
 * @return  string  The URL.
 *
 * @since   1.0
 * @throws  InvalidArgumentException
 * @throws  RuntimeException
 */
public function query(string $url, mixed $data = null, array $headers = [], string $method = 'get', int $timeout = null) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::getOption`

Get an option from the OAuth2 Client instance.

##### Signature

```php
public Joomla\OAuth2\Client::getOption ( string $key  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the option to get |

##### Return Values

`mixed` The option value

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an option from the OAuth2 Client instance.
 *
 * @param   string  $key  The name of the option to get
 *
 * @return  mixed  The option value
 *
 * @since   1.0
 */
public function getOption(string $key) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::setOption`

Set an option for the OAuth2 Client instance.

##### Signature

```php
public Joomla\OAuth2\Client::setOption ( string $key, mixed $value  ) : Joomla\OAuth2\Client
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the option to set |
| `value` | `mixed` | The option value to set |

##### Return Values

`Joomla\OAuth2\Client` This object for method chaining

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an option for the OAuth2 Client instance.
 *
 * @param   string  $key    The name of the option to set
 * @param   mixed   $value  The option value to set
 *
 * @return  Client  This object for method chaining
 *
 * @since   1.0
 */
public function setOption(string $key, mixed $value) : Joomla\OAuth2\Client{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::getToken`

Get the access token from the Client instance.

##### Signature

```php
public Joomla\OAuth2\Client::getToken ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` The access token

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the access token from the Client instance.
 *
 * @return  array  The access token
 *
 * @since   1.0
 */
public function getToken() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::setToken`

Set an option for the Client instance.

##### Signature

```php
public Joomla\OAuth2\Client::setToken ( array $value  ) : Joomla\OAuth2\Client
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `array` | The access token |

##### Return Values

`Joomla\OAuth2\Client` This object for method chaining

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an option for the Client instance.
 *
 * @param   array  $value  The access token
 *
 * @return  Client  This object for method chaining
 *
 * @since   1.0
 */
public function setToken(array $value) : Joomla\OAuth2\Client{
    // @todo Add adapter code.
}
```
#### `Joomla\OAuth2\Client::refreshToken`

Refresh the access token instance.

##### Signature

```php
public Joomla\OAuth2\Client::refreshToken ( [ string $token = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `token` | `string` | The refresh token Defaults to `null`. |

##### Return Values

`array` The new access token

##### Errors/Exceptions

Throws Exception <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Refresh the access token instance.
 *
 * @param   string  $token  The refresh token
 *
 * @return  array  The new access token
 *
 * @since   1.0
 * @throws  Exception
 * @throws  RuntimeException
 */
public function refreshToken(string $token = null) : array{
    // @todo Add adapter code.
}
```
