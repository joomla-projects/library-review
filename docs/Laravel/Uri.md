# Joomla/Uri Package version 1.2.0

Joomla Uri Package

## The Joomla\Uri\UriInterface Interface

Uri Interface

Interface for read-only access to Uris.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SCHEME` | `int` | 1 | Include the scheme (http, https, etc.) |
| public `USER` | `int` | 2 | Include the user |
| public `PASS` | `int` | 4 | Include the password |
| public `HOST` | `int` | 8 | Include the host |
| public `PORT` | `int` | 16 | Include the port |
| public `PATH` | `int` | 32 | Include the path |
| public `QUERY` | `int` | 64 | Include the query string |
| public `FRAGMENT` | `int` | 128 | Include the fragment |
| public `ALL` | `int` | 255 | Include all available url parts (scheme, user, pass, host, port, path, query, fragment) |    
### Methods

#### `Joomla\Uri\UriInterface::__toString`

Magic method to get the string representation of the URI object.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::__toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */
abstract public function __toString() : string;
```
#### `Joomla\Uri\UriInterface::toString`

Returns full uri string.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::toString ( [ array $parts = [ &#039;scheme&#039;, &#039;user&#039;, &#039;pass&#039;, &#039;host&#039;, &#039;port&#039;, &#039;path&#039;, &#039;query&#039;, &#039;fragment&#039; ] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */
abstract public function toString(array $parts = [ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]) : string;
```
#### `Joomla\Uri\UriInterface::hasVar`

Checks if variable exists.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::hasVar ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to check. |

##### Return Values

`bool` True if the variable exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */
abstract public function hasVar(string $name) : bool;
```
#### `Joomla\Uri\UriInterface::getVar`

Returns a query variable by name.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getVar ( string $name [, string $default = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to get. |
| `default` | `string` | Default value to return if the variable is not set. Defaults to `null`. |

##### Return Values

`array` Query variables.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  array   Query variables.
 *
 * @since   1.0
 */
abstract public function getVar(string $name, string $default = null) : array;
```
#### `Joomla\Uri\UriInterface::getQuery`

Returns flat query string.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getQuery ( [ bool $toArray = false ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `toArray` | `bool` | True to return the query as a key => value pair array. Defaults to `false`. |

##### Return Values

`string` Query string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string   Query string.
 *
 * @since   1.0
 */
abstract public function getQuery(bool $toArray = false) : string;
```
#### `Joomla\Uri\UriInterface::getScheme`

Get URI scheme (protocol)

ie. http, https, ftp, etc...

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getScheme ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI scheme.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */
abstract public function getScheme() : string;
```
#### `Joomla\Uri\UriInterface::getUser`

Get URI username

Returns the username, or null if no username was specified.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getUser ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI username.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */
abstract public function getUser() : string;
```
#### `Joomla\Uri\UriInterface::getPass`

Get URI password

Returns the password, or null if no password was specified.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getPass ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI password.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */
abstract public function getPass() : string;
```
#### `Joomla\Uri\UriInterface::getHost`

Get URI host

Returns the hostname/ip or null if no hostname/ip was specified.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getHost ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI host.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */
abstract public function getHost() : string;
```
#### `Joomla\Uri\UriInterface::getPort`

Get URI port

Returns the port number, or null if no port was specified.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getPort ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The URI port number.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */
abstract public function getPort() : int;
```
#### `Joomla\Uri\UriInterface::getPath`

Gets the URI path string.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getPath ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI path string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */
abstract public function getPath() : string;
```
#### `Joomla\Uri\UriInterface::getFragment`

Get the URI archor string

Everything after the "#".

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getFragment ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI anchor string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the URI archor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */
abstract public function getFragment() : string;
```
#### `Joomla\Uri\UriInterface::isSsl`

Checks whether the current URI is using HTTPS.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::isSsl ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if using SSL via HTTPS.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */
abstract public function isSsl() : bool;
```

## The Joomla\Uri\UriImmutable Class

Uri Class

This is an immutable version of the uri class.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SCHEME` | `int` | 1 | Include the scheme (http, https, etc.) |
| public `USER` | `int` | 2 | Include the user |
| public `PASS` | `int` | 4 | Include the password |
| public `HOST` | `int` | 8 | Include the host |
| public `PORT` | `int` | 16 | Include the port |
| public `PATH` | `int` | 32 | Include the path |
| public `QUERY` | `int` | 64 | Include the query string |
| public `FRAGMENT` | `int` | 128 | Include the fragment |
| public `ALL` | `int` | 255 | Include all available url parts (scheme, user, pass, host, port, path, query, fragment) |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$uri` | `string` | Original URI |
| protected `$scheme` | `string` | Protocol |
| protected `$host` | `string` | Host |
| protected `$port` | `int` | Port |
| protected `$user` | `string` | Username |
| protected `$pass` | `string` | Password |
| protected `$path` | `string` | Path |
| protected `$query` | `string` | Query |
| protected `$fragment` | `string` | Anchor |
| protected `$vars` | `array` | Query variable hash |    
### Methods

#### `Joomla\Uri\UriImmutable::__set`

Prevent setting undeclared properties.

##### Signature

```php
public Joomla\Uri\UriImmutable::__set ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | This is an immutable object, setting $name is not allowed. |
| `value` | `mixed` | This is an immutable object, setting $value is not allowed. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Prevent setting undeclared properties.
 *
 * @param   string  $name   This is an immutable object, setting $name is not allowed.
 * @param   mixed   $value  This is an immutable object, setting $value is not allowed.
 *
 * @return  void  This method always throws an exception.
 *
 * @since   1.0
 * @throws  \BadMethodCallException
 */
public function __set(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::__construct`

This is a special constructor that prevents calling the __construct method again.

##### Signature

```php
public Joomla\Uri\UriImmutable::__construct ( [ string $uri = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The optional URI string Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * This is a special constructor that prevents calling the __construct method again.
 *
 * @param   string  $uri  The optional URI string
 *
 * @since   1.0
 * @throws  \BadMethodCallException
 */
public function __construct(string $uri = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::__toString`

Magic method to get the string representation of the URI object.

##### Signature

```php
public Joomla\Uri\UriImmutable::__toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */
public function __toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::toString`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\UriImmutable::toString ( [ array $parts = [ &#039;scheme&#039;, &#039;user&#039;, &#039;pass&#039;, &#039;host&#039;, &#039;port&#039;, &#039;path&#039;, &#039;query&#039;, &#039;fragment&#039; ] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */
public function toString(array $parts = [ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::render`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\UriImmutable::render ( [ int $parts = 255 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `int` | A bitmask specifying the parts to render. Defaults to `255`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   integer  $parts  A bitmask specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.2.0
 */
public function render(int $parts = 255) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::hasVar`

Checks if variable exists.

##### Signature

```php
public Joomla\Uri\UriImmutable::hasVar ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to check. |

##### Return Values

`bool` True if the variable exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */
public function hasVar(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getVar`

Returns a query variable by name.

##### Signature

```php
public Joomla\Uri\UriImmutable::getVar ( string $name [, string $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to get. |
| `default` | `string` | Default value to return if the variable is not set. Defaults to `null`. |

##### Return Values

`mixed` Value of the specified query variable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  mixed   Value of the specified query variable.
 *
 * @since   1.0
 */
public function getVar(string $name, string $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getQuery`

Returns flat query string.

##### Signature

```php
public Joomla\Uri\UriImmutable::getQuery ( [ bool $toArray = false ] ) : string|array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `toArray` | `bool` | True to return the query as a key => value pair array. Defaults to `false`. |

##### Return Values

`string` or `array` Query string or Array of parts in query string depending on the function param

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string|array   Query string or Array of parts in query string depending on the function param
 *
 * @since   1.0
 */
public function getQuery(bool $toArray = false) : string|array{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getScheme`

Get URI scheme (protocol)

ie. http, https, ftp, etc...

##### Signature

```php
public Joomla\Uri\UriImmutable::getScheme ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI scheme.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */
public function getScheme() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getUser`

Get URI username

Returns the username, or null if no username was specified.

##### Signature

```php
public Joomla\Uri\UriImmutable::getUser ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI username.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */
public function getUser() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getPass`

Get URI password

Returns the password, or null if no password was specified.

##### Signature

```php
public Joomla\Uri\UriImmutable::getPass ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI password.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */
public function getPass() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getHost`

Get URI host

Returns the hostname/ip or null if no hostname/ip was specified.

##### Signature

```php
public Joomla\Uri\UriImmutable::getHost ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI host.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */
public function getHost() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getPort`

Get URI port

Returns the port number, or null if no port was specified.

##### Signature

```php
public Joomla\Uri\UriImmutable::getPort ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The URI port number.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */
public function getPort() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getPath`

Gets the URI path string.

##### Signature

```php
public Joomla\Uri\UriImmutable::getPath ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI path string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */
public function getPath() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::getFragment`

Get the URI anchor string

Everything after the "#".

##### Signature

```php
public Joomla\Uri\UriImmutable::getFragment ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI anchor string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the URI anchor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */
public function getFragment() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::isSsl`

Checks whether the current URI is using HTTPS.

##### Signature

```php
public Joomla\Uri\UriImmutable::isSsl ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if using SSL via HTTPS.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */
public function isSsl() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::buildQuery`

Build a query from an array (reverse of the PHP parse_str()).

##### Signature

```php
protected static Joomla\Uri\UriImmutable::buildQuery ( array $params  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `params` | `array` | The array of key => value pairs to return as a query string. |

##### Return Values

`string` The resulting query string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Build a query from an array (reverse of the PHP parse_str()).
 *
 * @param   array  $params  The array of key => value pairs to return as a query string.
 *
 * @return  string  The resulting query string.
 *
 * @see     parse_str()
 * @since   1.0
 */
protected static function buildQuery(array $params) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::parse`

Parse a given URI and populate the class fields.

##### Signature

```php
protected Joomla\Uri\UriImmutable::parse ( string $uri  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The URI string to parse. |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a given URI and populate the class fields.
 *
 * @param   string  $uri  The URI string to parse.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 */
protected function parse(string $uri) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::cleanPath`

Resolves //, ../ and ./ from a path and returns

the result. Eg:

/foo/bar/../boo.php	=> /foo/boo.php
/foo/bar/../../boo.php => /boo.php
/foo/bar/.././/boo.php => /foo/boo.php

##### Signature

```php
protected Joomla\Uri\UriImmutable::cleanPath ( string $path  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The URI path to clean. |

##### Return Values

`string` Cleaned and resolved URI path.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Resolves //, ../ and ./ from a path and returns
 * the result. Eg:
 *
 * /foo/bar/../boo.php=> /foo/boo.php
 * /foo/bar/../../boo.php => /boo.php
 * /foo/bar/.././/boo.php => /foo/boo.php
 *
 * @param   string  $path  The URI path to clean.
 *
 * @return  string  Cleaned and resolved URI path.
 *
 * @since   1.0
 */
protected function cleanPath(string $path) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Uri\UriHelper Class

Uri Helper

This class provides a UTF-8 safe version of parse_url().

### Methods

#### `Joomla\Uri\UriHelper::parse_url`

Does a UTF-8 safe version of PHP parse_url function

##### Signature

```php
public static Joomla\Uri\UriHelper::parse_url ( string $url  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | URL to parse |

##### Return Values

`mixed` Associative array or false if badly formed URL.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Does a UTF-8 safe version of PHP parse_url function
 *
 * @param   string  $url  URL to parse
 *
 * @return  mixed  Associative array or false if badly formed URL.
 *
 * @link    https://secure.php.net/manual/en/function.parse-url.php
 * @since   1.0
 */
public static function parse_url(string $url) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Uri\Uri Class

Uri Class

This class parses a URI and provides a common interface for the Joomla Framework
to access and manipulate a URI.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SCHEME` | `int` | 1 | Include the scheme (http, https, etc.) |
| public `USER` | `int` | 2 | Include the user |
| public `PASS` | `int` | 4 | Include the password |
| public `HOST` | `int` | 8 | Include the host |
| public `PORT` | `int` | 16 | Include the port |
| public `PATH` | `int` | 32 | Include the path |
| public `QUERY` | `int` | 64 | Include the query string |
| public `FRAGMENT` | `int` | 128 | Include the fragment |
| public `ALL` | `int` | 255 | Include all available url parts (scheme, user, pass, host, port, path, query, fragment) |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$uri` | `string` | Original URI |
| protected `$scheme` | `string` | Protocol |
| protected `$host` | `string` | Host |
| protected `$port` | `int` | Port |
| protected `$user` | `string` | Username |
| protected `$pass` | `string` | Password |
| protected `$path` | `string` | Path |
| protected `$query` | `string` | Query |
| protected `$fragment` | `string` | Anchor |
| protected `$vars` | `array` | Query variable hash |    
### Methods

#### `Joomla\Uri\Uri::setVar`

Adds a query variable and value, replacing the value if it

already exists and returning the old value.

##### Signature

```php
public Joomla\Uri\Uri::setVar ( string $name, string $value  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to set. |
| `value` | `string` | Value of the query variable. |

##### Return Values

`string` Previous value for the query variable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a query variable and value, replacing the value if it
 * already exists and returning the old value.
 *
 * @param   string  $name   Name of the query variable to set.
 * @param   string  $value  Value of the query variable.
 *
 * @return  string  Previous value for the query variable.
 *
 * @since   1.0
 */
public function setVar(string $name, string $value) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::delVar`

Removes an item from the query string variables if it exists.

##### Signature

```php
public Joomla\Uri\Uri::delVar ( string $name  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of variable to remove. |

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
 * Removes an item from the query string variables if it exists.
 *
 * @param   string  $name  Name of variable to remove.
 *
 * @return  void
 *
 * @since   1.0
 */
public function delVar(string $name) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setQuery`

Sets the query to a supplied string in format:

foo=bar&x=y

##### Signature

```php
public Joomla\Uri\Uri::setQuery ( mixed $query  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `query` | `mixed` | The query string or array. |

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
 * Sets the query to a supplied string in format:
 * foo=bar&x=y
 *
 * @param   mixed  $query  The query string or array.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setQuery(mixed $query) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setScheme`

Set URI scheme (protocol)

ie. http, https, ftp, etc...

##### Signature

```php
public Joomla\Uri\Uri::setScheme ( string $scheme  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `scheme` | `string` | The URI scheme. |

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
 * Set URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @param   string  $scheme  The URI scheme.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setScheme(string $scheme) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setUser`

Set URI username.

##### Signature

```php
public Joomla\Uri\Uri::setUser ( string $user  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `user` | `string` | The URI username. |

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
 * Set URI username.
 *
 * @param   string  $user  The URI username.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setUser(string $user) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setPass`

Set URI password.

##### Signature

```php
public Joomla\Uri\Uri::setPass ( string $pass  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `pass` | `string` | The URI password. |

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
 * Set URI password.
 *
 * @param   string  $pass  The URI password.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setPass(string $pass) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setHost`

Set URI host.

##### Signature

```php
public Joomla\Uri\Uri::setHost ( string $host  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `host` | `string` | The URI host. |

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
 * Set URI host.
 *
 * @param   string  $host  The URI host.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setHost(string $host) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setPort`

Set URI port.

##### Signature

```php
public Joomla\Uri\Uri::setPort ( int $port  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `port` | `int` | The URI port number. |

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
 * Set URI port.
 *
 * @param   integer  $port  The URI port number.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setPort(int $port) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setPath`

Set the URI path string.

##### Signature

```php
public Joomla\Uri\Uri::setPath ( string $path  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The URI path string. |

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
 * Set the URI path string.
 *
 * @param   string  $path  The URI path string.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setPath(string $path) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::setFragment`

Set the URI anchor string

everything after the "#".

##### Signature

```php
public Joomla\Uri\Uri::setFragment ( string $anchor  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `anchor` | `string` | The URI anchor string. |

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
 * Set the URI anchor string
 * everything after the "#".
 *
 * @param   string  $anchor  The URI anchor string.
 *
 * @return  void
 *
 * @since   1.0
 */
public function setFragment(string $anchor) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::__construct`

Constructor.

You can pass a URI string to the constructor to initialise a specific URI.

##### Signature

```php
public Joomla\Uri\Uri::__construct ( [ string $uri = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The optional URI string Defaults to `null`. |

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
 * You can pass a URI string to the constructor to initialise a specific URI.
 *
 * @param   string  $uri  The optional URI string
 *
 * @since   1.0
 */
public function __construct(string $uri = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::__toString`

Magic method to get the string representation of the URI object.

##### Signature

```php
public Joomla\Uri\Uri::__toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */
public function __toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::toString`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\Uri::toString ( [ array $parts = [ &#039;scheme&#039;, &#039;user&#039;, &#039;pass&#039;, &#039;host&#039;, &#039;port&#039;, &#039;path&#039;, &#039;query&#039;, &#039;fragment&#039; ] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */
public function toString(array $parts = [ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::render`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\Uri::render ( [ int $parts = 255 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `int` | A bitmask specifying the parts to render. Defaults to `255`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   integer  $parts  A bitmask specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.2.0
 */
public function render(int $parts = 255) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::hasVar`

Checks if variable exists.

##### Signature

```php
public Joomla\Uri\Uri::hasVar ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to check. |

##### Return Values

`bool` True if the variable exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */
public function hasVar(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getVar`

Returns a query variable by name.

##### Signature

```php
public Joomla\Uri\Uri::getVar ( string $name [, string $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to get. |
| `default` | `string` | Default value to return if the variable is not set. Defaults to `null`. |

##### Return Values

`mixed` Value of the specified query variable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  mixed   Value of the specified query variable.
 *
 * @since   1.0
 */
public function getVar(string $name, string $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getQuery`

Returns flat query string.

##### Signature

```php
public Joomla\Uri\Uri::getQuery ( [ bool $toArray = false ] ) : string|array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `toArray` | `bool` | True to return the query as a key => value pair array. Defaults to `false`. |

##### Return Values

`string` or `array` Query string or Array of parts in query string depending on the function param

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string|array   Query string or Array of parts in query string depending on the function param
 *
 * @since   1.0
 */
public function getQuery(bool $toArray = false) : string|array{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getScheme`

Get URI scheme (protocol)

ie. http, https, ftp, etc...

##### Signature

```php
public Joomla\Uri\Uri::getScheme ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI scheme.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */
public function getScheme() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getUser`

Get URI username

Returns the username, or null if no username was specified.

##### Signature

```php
public Joomla\Uri\Uri::getUser ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI username.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */
public function getUser() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getPass`

Get URI password

Returns the password, or null if no password was specified.

##### Signature

```php
public Joomla\Uri\Uri::getPass ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI password.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */
public function getPass() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getHost`

Get URI host

Returns the hostname/ip or null if no hostname/ip was specified.

##### Signature

```php
public Joomla\Uri\Uri::getHost ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI host.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */
public function getHost() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getPort`

Get URI port

Returns the port number, or null if no port was specified.

##### Signature

```php
public Joomla\Uri\Uri::getPort ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The URI port number.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */
public function getPort() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getPath`

Gets the URI path string.

##### Signature

```php
public Joomla\Uri\Uri::getPath ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI path string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */
public function getPath() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::getFragment`

Get the URI anchor string

Everything after the "#".

##### Signature

```php
public Joomla\Uri\Uri::getFragment ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI anchor string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the URI anchor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */
public function getFragment() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::isSsl`

Checks whether the current URI is using HTTPS.

##### Signature

```php
public Joomla\Uri\Uri::isSsl ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if using SSL via HTTPS.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */
public function isSsl() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::buildQuery`

Build a query from an array (reverse of the PHP parse_str()).

##### Signature

```php
protected static Joomla\Uri\Uri::buildQuery ( array $params  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `params` | `array` | The array of key => value pairs to return as a query string. |

##### Return Values

`string` The resulting query string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Build a query from an array (reverse of the PHP parse_str()).
 *
 * @param   array  $params  The array of key => value pairs to return as a query string.
 *
 * @return  string  The resulting query string.
 *
 * @see     parse_str()
 * @since   1.0
 */
protected static function buildQuery(array $params) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::parse`

Parse a given URI and populate the class fields.

##### Signature

```php
protected Joomla\Uri\Uri::parse ( string $uri  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The URI string to parse. |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a given URI and populate the class fields.
 *
 * @param   string  $uri  The URI string to parse.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 */
protected function parse(string $uri) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::cleanPath`

Resolves //, ../ and ./ from a path and returns

the result. Eg:

/foo/bar/../boo.php	=> /foo/boo.php
/foo/bar/../../boo.php => /boo.php
/foo/bar/.././/boo.php => /foo/boo.php

##### Signature

```php
protected Joomla\Uri\Uri::cleanPath ( string $path  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The URI path to clean. |

##### Return Values

`string` Cleaned and resolved URI path.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Resolves //, ../ and ./ from a path and returns
 * the result. Eg:
 *
 * /foo/bar/../boo.php=> /foo/boo.php
 * /foo/bar/../../boo.php => /boo.php
 * /foo/bar/.././/boo.php => /foo/boo.php
 *
 * @param   string  $path  The URI path to clean.
 *
 * @return  string  Cleaned and resolved URI path.
 *
 * @since   1.0
 */
protected function cleanPath(string $path) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Uri\AbstractUri Class

Uri Class

Abstract base for out uri classes.

This class should be considered an implementation detail. Typehint against UriInterface.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SCHEME` | `int` | 1 | Include the scheme (http, https, etc.) |
| public `USER` | `int` | 2 | Include the user |
| public `PASS` | `int` | 4 | Include the password |
| public `HOST` | `int` | 8 | Include the host |
| public `PORT` | `int` | 16 | Include the port |
| public `PATH` | `int` | 32 | Include the path |
| public `QUERY` | `int` | 64 | Include the query string |
| public `FRAGMENT` | `int` | 128 | Include the fragment |
| public `ALL` | `int` | 255 | Include all available url parts (scheme, user, pass, host, port, path, query, fragment) |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$uri` | `string` | Original URI |
| protected `$scheme` | `string` | Protocol |
| protected `$host` | `string` | Host |
| protected `$port` | `int` | Port |
| protected `$user` | `string` | Username |
| protected `$pass` | `string` | Password |
| protected `$path` | `string` | Path |
| protected `$query` | `string` | Query |
| protected `$fragment` | `string` | Anchor |
| protected `$vars` | `array` | Query variable hash |    
### Methods

#### `Joomla\Uri\AbstractUri::__construct`

Constructor.

You can pass a URI string to the constructor to initialise a specific URI.

##### Signature

```php
public Joomla\Uri\AbstractUri::__construct ( [ string $uri = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The optional URI string Defaults to `null`. |

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
 * You can pass a URI string to the constructor to initialise a specific URI.
 *
 * @param   string  $uri  The optional URI string
 *
 * @since   1.0
 */
public function __construct(string $uri = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::__toString`

Magic method to get the string representation of the URI object.

##### Signature

```php
public Joomla\Uri\AbstractUri::__toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */
public function __toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::toString`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\AbstractUri::toString ( [ array $parts = [ &#039;scheme&#039;, &#039;user&#039;, &#039;pass&#039;, &#039;host&#039;, &#039;port&#039;, &#039;path&#039;, &#039;query&#039;, &#039;fragment&#039; ] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */
public function toString(array $parts = [ 'scheme', 'user', 'pass', 'host', 'port', 'path', 'query', 'fragment' ]) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::render`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\AbstractUri::render ( [ int $parts = 255 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `int` | A bitmask specifying the parts to render. Defaults to `255`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns full uri string.
 *
 * @param   integer  $parts  A bitmask specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.2.0
 */
public function render(int $parts = 255) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::hasVar`

Checks if variable exists.

##### Signature

```php
public Joomla\Uri\AbstractUri::hasVar ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to check. |

##### Return Values

`bool` True if the variable exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */
public function hasVar(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getVar`

Returns a query variable by name.

##### Signature

```php
public Joomla\Uri\AbstractUri::getVar ( string $name [, string $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the query variable to get. |
| `default` | `string` | Default value to return if the variable is not set. Defaults to `null`. |

##### Return Values

`mixed` Value of the specified query variable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  mixed   Value of the specified query variable.
 *
 * @since   1.0
 */
public function getVar(string $name, string $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getQuery`

Returns flat query string.

##### Signature

```php
public Joomla\Uri\AbstractUri::getQuery ( [ bool $toArray = false ] ) : string|array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `toArray` | `bool` | True to return the query as a key => value pair array. Defaults to `false`. |

##### Return Values

`string` or `array` Query string or Array of parts in query string depending on the function param

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string|array   Query string or Array of parts in query string depending on the function param
 *
 * @since   1.0
 */
public function getQuery(bool $toArray = false) : string|array{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getScheme`

Get URI scheme (protocol)

ie. http, https, ftp, etc...

##### Signature

```php
public Joomla\Uri\AbstractUri::getScheme ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI scheme.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */
public function getScheme() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getUser`

Get URI username

Returns the username, or null if no username was specified.

##### Signature

```php
public Joomla\Uri\AbstractUri::getUser ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI username.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */
public function getUser() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getPass`

Get URI password

Returns the password, or null if no password was specified.

##### Signature

```php
public Joomla\Uri\AbstractUri::getPass ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI password.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */
public function getPass() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getHost`

Get URI host

Returns the hostname/ip or null if no hostname/ip was specified.

##### Signature

```php
public Joomla\Uri\AbstractUri::getHost ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI host.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */
public function getHost() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getPort`

Get URI port

Returns the port number, or null if no port was specified.

##### Signature

```php
public Joomla\Uri\AbstractUri::getPort ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The URI port number.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */
public function getPort() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getPath`

Gets the URI path string.

##### Signature

```php
public Joomla\Uri\AbstractUri::getPath ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI path string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */
public function getPath() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getFragment`

Get the URI anchor string

Everything after the "#".

##### Signature

```php
public Joomla\Uri\AbstractUri::getFragment ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The URI anchor string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the URI anchor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */
public function getFragment() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::isSsl`

Checks whether the current URI is using HTTPS.

##### Signature

```php
public Joomla\Uri\AbstractUri::isSsl ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if using SSL via HTTPS.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */
public function isSsl() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::buildQuery`

Build a query from an array (reverse of the PHP parse_str()).

##### Signature

```php
protected static Joomla\Uri\AbstractUri::buildQuery ( array $params  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `params` | `array` | The array of key => value pairs to return as a query string. |

##### Return Values

`string` The resulting query string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Build a query from an array (reverse of the PHP parse_str()).
 *
 * @param   array  $params  The array of key => value pairs to return as a query string.
 *
 * @return  string  The resulting query string.
 *
 * @see     parse_str()
 * @since   1.0
 */
protected static function buildQuery(array $params) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::parse`

Parse a given URI and populate the class fields.

##### Signature

```php
protected Joomla\Uri\AbstractUri::parse ( string $uri  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The URI string to parse. |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a given URI and populate the class fields.
 *
 * @param   string  $uri  The URI string to parse.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 */
protected function parse(string $uri) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::cleanPath`

Resolves //, ../ and ./ from a path and returns

the result. Eg:

/foo/bar/../boo.php	=> /foo/boo.php
/foo/bar/../../boo.php => /boo.php
/foo/bar/.././/boo.php => /foo/boo.php

##### Signature

```php
protected Joomla\Uri\AbstractUri::cleanPath ( string $path  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The URI path to clean. |

##### Return Values

`string` Cleaned and resolved URI path.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Resolves //, ../ and ./ from a path and returns
 * the result. Eg:
 *
 * /foo/bar/../boo.php=> /foo/boo.php
 * /foo/bar/../../boo.php => /boo.php
 * /foo/bar/.././/boo.php => /foo/boo.php
 *
 * @param   string  $path  The URI path to clean.
 *
 * @return  string  Cleaned and resolved URI path.
 *
 * @since   1.0
 */
protected function cleanPath(string $path) : string{
    // @todo Add adapter code.
}
```
