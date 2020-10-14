# Joomla/Uri Package version 1.2.0

Joomla Uri Package

## Interfaces

### The Joomla\Uri\UriInterface Interface

Uri Interface

Interface for read-only access to Uris.

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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */ 
abstract public __toString() : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriInterface::toString`

Returns full uri string.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::toString ( [ array $parts ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ scheme, user, pass, host, port, path, query, fragment ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */ 
abstract public toString(array $parts = [ scheme, user, pass, host, port, path, query, fragment ]) : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */ 
abstract public hasVar(string $name) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriInterface::getVar`

Returns a query variable by name.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getVar ( string $name [, string $default ] ) : array
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  array   Query variables.
 *
 * @since   1.0
 */ 
abstract public getVar(string $name, string $default = null) : array
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriInterface::getQuery`

Returns flat query string.

##### Signature

```php
abstract public Joomla\Uri\UriInterface::getQuery ( [ bool $toArray ] ) : string
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string   Query string.
 *
 * @since   1.0
 */ 
abstract public getQuery(bool $toArray = false) : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */ 
abstract public getScheme() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */ 
abstract public getUser() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */ 
abstract public getPass() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */ 
abstract public getHost() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */ 
abstract public getPort() : int
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */ 
abstract public getPath() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get the URI archor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */ 
abstract public getFragment() : string
{
    // @todo Add adapter code.
}
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */ 
abstract public isSsl() : bool
{
    // @todo Add adapter code.
}
```

## Classes

### The Joomla\Uri\UriImmutable Class

Uri Class

This is an immutable version of the uri class.

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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
public __set(string $name, mixed $value) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::__construct`

This is a special constructor that prevents calling the __construct method again.

##### Signature

```php
public Joomla\Uri\UriImmutable::__construct ( [ string $uri ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The optional URI string. Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * This is a special constructor that prevents calling the __construct method again.
 *
 * @param   string  $uri  The optional URI string
 *
 * @since   1.0
 * @throws  \BadMethodCallException
 */ 
public __construct(string $uri = null) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\UriImmutable::__toString`

Magic method to get the string representation of the URI object.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::toString`

Returns full uri string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::render`

Returns full uri string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::hasVar`

Checks if variable exists.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getVar`

Returns a query variable by name.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getQuery`

Returns flat query string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getScheme`

Get URI scheme (protocol) 
ie. http, https, ftp, etc...

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getUser`

Get URI username 
Returns the username, or null if no username was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getPass`

Get URI password 
Returns the password, or null if no password was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getHost`

Get URI host 
Returns the hostname/ip or null if no hostname/ip was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getPort`

Get URI port 
Returns the port number, or null if no port was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getPath`

Gets the URI path string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::getFragment`

Get the URI anchor string 
Everything after the "#".

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::isSsl`

Checks whether the current URI is using HTTPS.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::buildQuery`

Build a query from an array (reverse of the PHP parse_str()).

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::parse`

Parse a given URI and populate the class fields.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\UriImmutable::cleanPath`

Resolves //, ../ and ./ from a path and returns 
the result. Eg:

/foo/bar/../boo.php	=> /foo/boo.php 
/foo/bar/../../boo.php => /boo.php 
/foo/bar/.././/boo.php => /foo/boo.php

This method is inherited from `Joomla\Uri\AbstractUri`.

### The Joomla\Uri\UriHelper Class

Uri Helper

This class provides a UTF-8 safe version of parse_url().

#### `Joomla\Uri\UriHelper::parse_url`

Does a UTF-8 safe version of PHP parse_url function

##### Signature

```php
public static Joomla\Uri\UriHelper::parse_url ( string $url  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | URL to parse. |

##### Return Values

`mixed` Associative array or false if badly formed URL.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Does a UTF-8 safe version of PHP parse_url function
 *
 * @param   string  $url  URL to parse
 *
 * @return  mixed  Associative array or false if badly formed URL.
 *
 * @link    https://secure.php.net/manual/en/function.parse-url.php
 * @since   1.0
 */ 
public static parse_url(string $url) : mixed
{
    // @todo Add adapter code.
}
```
### The Joomla\Uri\Uri Class

Uri Class

This class parses a URI and provides a common interface for the Joomla Framework 
to access and manipulate a URI.

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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
public setVar(string $name, string $value) : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Removes an item from the query string variables if it exists.
 *
 * @param   string  $name  Name of variable to remove.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public delVar(string $name) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Sets the query to a supplied string in format:
 * foo=bar&x=y
 *
 * @param   mixed  $query  The query string or array.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setQuery(mixed $query) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @param   string  $scheme  The URI scheme.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setScheme(string $scheme) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set URI username.
 *
 * @param   string  $user  The URI username.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setUser(string $user) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set URI password.
 *
 * @param   string  $pass  The URI password.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setPass(string $pass) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set URI host.
 *
 * @param   string  $host  The URI host.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setHost(string $host) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set URI port.
 *
 * @param   integer  $port  The URI port number.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setPort(int $port) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set the URI path string.
 *
 * @param   string  $path  The URI path string.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setPath(string $path) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Set the URI anchor string
 * everything after the "#".
 *
 * @param   string  $anchor  The URI anchor string.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public setFragment(string $anchor) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\Uri::__construct`

Constructor. 
You can pass a URI string to the constructor to initialise a specific URI.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::__toString`

Magic method to get the string representation of the URI object.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::toString`

Returns full uri string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::render`

Returns full uri string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::hasVar`

Checks if variable exists.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getVar`

Returns a query variable by name.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getQuery`

Returns flat query string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getScheme`

Get URI scheme (protocol) 
ie. http, https, ftp, etc...

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getUser`

Get URI username 
Returns the username, or null if no username was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getPass`

Get URI password 
Returns the password, or null if no password was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getHost`

Get URI host 
Returns the hostname/ip or null if no hostname/ip was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getPort`

Get URI port 
Returns the port number, or null if no port was specified.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getPath`

Gets the URI path string.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::getFragment`

Get the URI anchor string 
Everything after the "#".

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::isSsl`

Checks whether the current URI is using HTTPS.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::buildQuery`

Build a query from an array (reverse of the PHP parse_str()).

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::parse`

Parse a given URI and populate the class fields.

This method is inherited from `Joomla\Uri\AbstractUri`.

#### `Joomla\Uri\Uri::cleanPath`

Resolves //, ../ and ./ from a path and returns 
the result. Eg:

/foo/bar/../boo.php	=> /foo/boo.php 
/foo/bar/../../boo.php => /boo.php 
/foo/bar/.././/boo.php => /foo/boo.php

This method is inherited from `Joomla\Uri\AbstractUri`.

### The Joomla\Uri\AbstractUri Class

Uri Class

Abstract base for out uri classes.

This class should be considered an implementation detail. Typehint against UriInterface.

#### `Joomla\Uri\AbstractUri::__construct`

Constructor. 
You can pass a URI string to the constructor to initialise a specific URI.

##### Signature

```php
public Joomla\Uri\AbstractUri::__construct ( [ string $uri ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `uri` | `string` | The optional URI string. Defaults to `null`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * You can pass a URI string to the constructor to initialise a specific URI.
 *
 * @param   string  $uri  The optional URI string
 *
 * @since   1.0
 */ 
public __construct(string $uri = null) : void
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Magic method to get the string representation of the URI object.
 *
 * @return  string
 *
 * @since   1.0
 */ 
public __toString() : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::toString`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\AbstractUri::toString ( [ array $parts ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parts` | `array` | An array of strings specifying the parts to render. Defaults to `[ scheme, user, pass, host, port, path, query, fragment ]`. |

##### Return Values

`string` The rendered URI string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns full uri string.
 *
 * @param   array  $parts  An array of strings specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.0
 */ 
public toString(array $parts = [ scheme, user, pass, host, port, path, query, fragment ]) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::render`

Returns full uri string.

##### Signature

```php
public Joomla\Uri\AbstractUri::render ( [ int $parts ] ) : string
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns full uri string.
 *
 * @param   integer  $parts  A bitmask specifying the parts to render.
 *
 * @return  string  The rendered URI string.
 *
 * @since   1.2.0
 */ 
public render(int $parts = 255) : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Checks if variable exists.
 *
 * @param   string  $name  Name of the query variable to check.
 *
 * @return  boolean  True if the variable exists.
 *
 * @since   1.0
 */ 
public hasVar(string $name) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getVar`

Returns a query variable by name.

##### Signature

```php
public Joomla\Uri\AbstractUri::getVar ( string $name [, string $default ] ) : mixed
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns a query variable by name.
 *
 * @param   string  $name     Name of the query variable to get.
 * @param   string  $default  Default value to return if the variable is not set.
 *
 * @return  mixed   Value of the specified query variable.
 *
 * @since   1.0
 */ 
public getVar(string $name, string $default = null) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Uri\AbstractUri::getQuery`

Returns flat query string.

##### Signature

```php
public Joomla\Uri\AbstractUri::getQuery ( [ bool $toArray ] ) : string|array
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Returns flat query string.
 *
 * @param   boolean  $toArray  True to return the query as a key => value pair array.
 *
 * @return  string|array   Query string or Array of parts in query string depending on the function param
 *
 * @since   1.0
 */ 
public getQuery(bool $toArray = false) : string|array
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI scheme (protocol)
 * ie. http, https, ftp, etc...
 *
 * @return  string  The URI scheme.
 *
 * @since   1.0
 */ 
public getScheme() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI username
 * Returns the username, or null if no username was specified.
 *
 * @return  string  The URI username.
 *
 * @since   1.0
 */ 
public getUser() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI password
 * Returns the password, or null if no password was specified.
 *
 * @return  string  The URI password.
 *
 * @since   1.0
 */ 
public getPass() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI host
 * Returns the hostname/ip or null if no hostname/ip was specified.
 *
 * @return  string  The URI host.
 *
 * @since   1.0
 */ 
public getHost() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get URI port
 * Returns the port number, or null if no port was specified.
 *
 * @return  integer  The URI port number.
 *
 * @since   1.0
 */ 
public getPort() : int
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Gets the URI path string.
 *
 * @return  string  The URI path string.
 *
 * @since   1.0
 */ 
public getPath() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Get the URI anchor string
 * Everything after the "#".
 *
 * @return  string  The URI anchor string.
 *
 * @since   1.0
 */ 
public getFragment() : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Checks whether the current URI is using HTTPS.
 *
 * @return  boolean  True if using SSL via HTTPS.
 *
 * @since   1.0
 */ 
public isSsl() : bool
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Build a query from an array (reverse of the PHP parse_str()).
 *
 * @param   array  $params  The array of key => value pairs to return as a query string.
 *
 * @return  string  The resulting query string.
 *
 * @see     parse_str()
 * @since   1.0
 */ 
protected static buildQuery(array $params) : string
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
 * Parse a given URI and populate the class fields.
 *
 * @param   string  $uri  The URI string to parse.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 */ 
protected parse(string $uri) : bool
{
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

###### Test Title

Joomla/Uri:
```php
// @todo (Automatically) add code from test
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
protected cleanPath(string $path) : string
{
    // @todo Add adapter code.
}
```

## Traits

