# Joomla/Session Package version 1.5.0

Joomla Session Package

## The Joomla\Session\Session Class

Class for managing HTTP sessions

Provides access to session-state values as well as session-level
settings and lifetime management methods.
Based on the standard PHP session handling mechanism it provides
more advanced features such as expire timeouts.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$state` | `string` | Internal state. |
| protected `$expire` | `string` | Maximum age of unused session in minutes |
| protected `$store` | `Joomla\Session\Storage` | The session store object. |
| protected `$security` | `array` | Security policy. |
| protected `$force_ssl` | `bool` | Force cookies to be SSL only |
| protected `$cookie_domain` | `mixed` | The domain to use when setting cookies. |
| protected `$cookie_path` | `mixed` | The path to use when setting cookies. |
| protected `$cookie_httponly` | `mixed` | The configuration of the HttpOnly cookie. |
| protected `$cookie_samesite` | `mixed` | The configuration of the SameSite cookie. |
| protected static `$instance` | `Joomla\Session\Session` | Session instances container. |
| protected `$storeName` | `string` | The type of storage for the session. |    

### Methods

#### `Joomla\Session\Session::__construct`

Constructor

##### Signature

```php
public Joomla\Session\Session::__construct ( [ string $store = &#039;none&#039; [, array $options = [] ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `store` | `string` | The type of storage for the session. Defaults to `'none'`. |
| `options` | `array` | Optional parameters Defaults to `[]`. |

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
 * @param   string  $store    The type of storage for the session.
 * @param   array   $options  Optional parameters
 *
 * @since   1.0
 */
public function __construct(string $store = 'none', array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::__get`

Magic method to get read-only access to properties.

This method has been deprecated and gets removed in version 2.0. 
Use get methods for non-deprecated properties.

Does not need to be replaced.

#### `Joomla\Session\Session::getInstance`

Returns the global Session object, only creating it

if it doesn't already exist.

This method has been deprecated and gets removed in version 2.0. 
A singleton object store will no longer be supported.

Does not need to be replaced.

#### `Joomla\Session\Session::getState`

Get current state of session

##### Signature

```php
public Joomla\Session\Session::getState ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The session state

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get current state of session
 *
 * @return  string  The session state
 *
 * @since   1.0
 */
public function getState() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getExpire`

Get expiration time in minutes

##### Signature

```php
public Joomla\Session\Session::getExpire ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The session expiration time in minutes

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get expiration time in minutes
 *
 * @return  integer  The session expiration time in minutes
 *
 * @since   1.0
 */
public function getExpire() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getToken`

Get a session token, if a token isn't set yet one will be generated.

Tokens are used to secure forms from spamming attacks. Once a token
has been generated the system will check the post request to see if
it is present, if not it will invalidate the session.

##### Signature

```php
public Joomla\Session\Session::getToken ( [ bool $forceNew = false ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `forceNew` | `bool` | If true, force a new token to be created Defaults to `false`. |

##### Return Values

`string` The session token

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a session token, if a token isn't set yet one will be generated.
 *
 * Tokens are used to secure forms from spamming attacks. Once a token
 * has been generated the system will check the post request to see if
 * it is present, if not it will invalidate the session.
 *
 * @param   boolean  $forceNew  If true, force a new token to be created
 *
 * @return  string  The session token
 *
 * @since   1.0
 */
public function getToken(bool $forceNew = false) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::hasToken`

Determine if a token exists in the session. If not the

session will be set to expired

##### Signature

```php
public Joomla\Session\Session::hasToken ( string $tCheck [, bool $forceExpire = true ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `tCheck` | `string` | Hashed token to be verified |
| `forceExpire` | `bool` | If true, expires the session Defaults to `true`. |

##### Return Values

`bool` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine if a token exists in the session. If not the
 * session will be set to expired
 *
 * @param   string   $tCheck       Hashed token to be verified
 * @param   boolean  $forceExpire  If true, expires the session
 *
 * @return  boolean
 *
 * @since   1.0
 */
public function hasToken(string $tCheck, bool $forceExpire = true) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getIterator`

Retrieve an external iterator.

##### Signature

```php
public Joomla\Session\Session::getIterator ( void ) : ArrayIterator
```
##### Parameters

This method has no parameters.

##### Return Values

`ArrayIterator` Return an ArrayIterator of $_SESSION.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve an external iterator.
 *
 * @return  \ArrayIterator  Return an ArrayIterator of $_SESSION.
 *
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getName`

Get session name

##### Signature

```php
public Joomla\Session\Session::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The session name

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get session name
 *
 * @return  string  The session name
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getId`

Get session id

##### Signature

```php
public Joomla\Session\Session::getId ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The session name

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get session id
 *
 * @return  string  The session name
 *
 * @since   1.0
 */
public function getId() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::getStores`

Get the session handlers

This method has been deprecated and gets removed in version 2.0. 
The Storage class chain will be removed.

Does not need to be replaced.

#### `Joomla\Session\Session::isActive`

Shorthand to check if the session is active

##### Signature

```php
public Joomla\Session\Session::isActive ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Shorthand to check if the session is active
 *
 * @return  boolean
 *
 * @since   1.0
 */
public function isActive() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::isNew`

Check whether this session is currently created

##### Signature

```php
public Joomla\Session\Session::isNew ( void ) : bool
```
##### Parameters

This method has no parameters.

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
 * Check whether this session is currently created
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 */
public function isNew() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::initialise`

Check whether this session is currently created

This method has been deprecated and gets removed in version 2.0. 
In 2.0 the DispatcherInterface should be injected via the object constructor.

Does not need to be replaced.

#### `Joomla\Session\Session::get`

Get data from the session store

##### Signature

```php
public Joomla\Session\Session::get ( string $name [, mixed $default = null [, string $namespace = &#039;default&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of a variable |
| `default` | `mixed` | Default value of a variable if not set Defaults to `null`. |
| `namespace` | `string` | Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.} Defaults to `'default'`. |

##### Return Values

`mixed` Value of a variable

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get data from the session store
 *
 * @param   string  $name       Name of a variable
 * @param   mixed   $default    Default value of a variable if not set
 * @param   string  $namespace  Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.}
 *
 * @return  mixed  Value of a variable
 *
 * @since   1.0
 */
public function get(string $name, mixed $default = null, string $namespace = 'default') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::set`

Set data into the session store.

##### Signature

```php
public Joomla\Session\Session::set ( string $name [, mixed $value = null [, string $namespace = &#039;default&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of a variable. |
| `value` | `mixed` | Value of a variable. Defaults to `null`. |
| `namespace` | `string` | Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.} Defaults to `'default'`. |

##### Return Values

`mixed` Old value of a variable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set data into the session store.
 *
 * @param   string  $name       Name of a variable.
 * @param   mixed   $value      Value of a variable.
 * @param   string  $namespace  Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.}
 *
 * @return  mixed  Old value of a variable.
 *
 * @since   1.0
 */
public function set(string $name, mixed $value = null, string $namespace = 'default') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::has`

Check whether data exists in the session store

##### Signature

```php
public Joomla\Session\Session::has ( string $name [, string $namespace = &#039;default&#039; ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of variable |
| `namespace` | `string` | Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.} Defaults to `'default'`. |

##### Return Values

`bool` True if the variable exists

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check whether data exists in the session store
 *
 * @param   string  $name       Name of variable
 * @param   string  $namespace  Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.}
 *
 * @return  boolean  True if the variable exists
 *
 * @since   1.0
 */
public function has(string $name, string $namespace = 'default') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::clear`

Unset data from the session store

##### Signature

```php
public Joomla\Session\Session::clear ( string $name [, string $namespace = &#039;default&#039; ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of variable |
| `namespace` | `string` | Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.} Defaults to `'default'`. |

##### Return Values

`mixed` The value from session or NULL if not set

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Unset data from the session store
 *
 * @param   string  $name       Name of variable
 * @param   string  $namespace  Namespace to use, default to 'default' {@deprecated 2.0 Namespace support will be removed.}
 *
 * @return  mixed   The value from session or NULL if not set
 *
 * @since   1.0
 */
public function clear(string $name, string $namespace = 'default') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::start`

Start a session.

##### Signature

```php
public Joomla\Session\Session::start ( void ) : void
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
 * Start a session.
 *
 * @return  void
 *
 * @since   1.0
 */
public function start() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_start`

Start a session.

Creates a session (or resumes the current one based on the state of the session)

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Session\Session::destroy`

Frees all session variables and destroys all data registered to a session

This method resets the $_SESSION variable and destroys all of the data associated
with the current session in its storage (file or DB). It forces new session to be
started after this method is called. It does not unset the session cookie.

##### Signature

```php
public Joomla\Session\Session::destroy ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Frees all session variables and destroys all data registered to a session
 *
 * This method resets the $_SESSION variable and destroys all of the data associated
 * with the current session in its storage (file or DB). It forces new session to be
 * started after this method is called. It does not unset the session cookie.
 *
 * @return  boolean  True on success
 *
 * @see     session_destroy()
 * @see     session_unset()
 * @since   1.0
 */
public function destroy() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::restart`

Restart an expired or locked session.

##### Signature

```php
public Joomla\Session\Session::restart ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Restart an expired or locked session.
 *
 * @return  boolean  True on success
 *
 * @see     destroy
 * @since   1.0
 */
public function restart() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::fork`

Create a new session and copy variables from the old one

##### Signature

```php
public Joomla\Session\Session::fork ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` $result true on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a new session and copy variables from the old one
 *
 * @return  boolean $result true on success
 *
 * @since   1.0
 */
public function fork() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::close`

Writes session data and ends session

Session data is usually stored after your script terminated without the need
to call JSession::close(), but as session data is locked to prevent concurrent
writes only one script may operate on a session at any time. When using
framesets together with sessions you will experience the frames loading one
by one due to this locking. You can reduce the time needed to load all the
frames by ending the session as soon as all changes to session variables are
done.

##### Signature

```php
public Joomla\Session\Session::close ( void ) : void
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
 * Writes session data and ends session
 *
 * Session data is usually stored after your script terminated without the need
 * to call JSession::close(), but as session data is locked to prevent concurrent
 * writes only one script may operate on a session at any time. When using
 * framesets together with sessions you will experience the frames loading one
 * by one due to this locking. You can reduce the time needed to load all the
 * frames by ending the session as soon as all changes to session variables are
 * done.
 *
 * @return  void
 *
 * @see     session_write_close()
 * @since   1.0
 */
public function close() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::setExpire`

Set the session expiration

##### Signature

```php
protected Joomla\Session\Session::setExpire ( int $expire  ) : Joomla\Session\$this
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expire` | `int` | Maximum age of unused session in minutes |

##### Return Values

`Joomla\Session\$this` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the session expiration
 *
 * @param   integer  $expire  Maximum age of unused session in minutes
 *
 * @return  $this
 *
 * @since   1.3.0
 */
protected function setExpire(int $expire) : Joomla\Session\$this{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::setState`

Set the session state

##### Signature

```php
protected Joomla\Session\Session::setState ( string $state  ) : Joomla\Session\$this
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `state` | `string` | Internal state |

##### Return Values

`Joomla\Session\$this` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the session state
 *
 * @param   string  $state  Internal state
 *
 * @return  $this
 *
 * @since   1.3.0
 */
protected function setState(string $state) : Joomla\Session\$this{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_setCookieParams`

Set session cookie parameters

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Session\Session::_createToken`

Create a token-string

This method has been deprecated and gets removed in version 2.0. 
Use createToken instead.

Does not need to be replaced.

#### `Joomla\Session\Session::createToken`

Create a token-string

##### Signature

```php
protected Joomla\Session\Session::createToken ( [ int $length = 32 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `length` | `int` | Length of string Defaults to `32`. |

##### Return Values

`string` Generated token

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a token-string
 *
 * @param   integer  $length  Length of string
 *
 * @return  string  Generated token
 *
 * @since   1.3.1
 */
protected function createToken(int $length = 32) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_setCounter`

Set counter of session usage

This method has been deprecated and gets removed in version 2.0. 
Use setCounter instead.

Does not need to be replaced.

#### `Joomla\Session\Session::setCounter`

Set counter of session usage

##### Signature

```php
protected Joomla\Session\Session::setCounter ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set counter of session usage
 *
 * @return  boolean  True on success
 *
 * @since   1.3.0
 */
protected function setCounter() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_setTimers`

Set the session timers

This method has been deprecated and gets removed in version 2.0. 
Use setTimers instead.

Does not need to be replaced.

#### `Joomla\Session\Session::setTimers`

Set the session timers

##### Signature

```php
protected Joomla\Session\Session::setTimers ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the session timers
 *
 * @return  boolean  True on success
 *
 * @since   1.3.0
 */
protected function setTimers() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_setOptions`

Set additional session options

This method has been deprecated and gets removed in version 2.0. 
Use setOptions instead.

Does not need to be replaced.

#### `Joomla\Session\Session::setOptions`

Set additional session options

##### Signature

```php
protected Joomla\Session\Session::setOptions ( array $options  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | List of parameter |

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set additional session options
 *
 * @param   array  $options  List of parameter
 *
 * @return  boolean  True on success
 *
 * @since   1.3.0
 */
protected function setOptions(array $options) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Session\Session::_validate`

Do some checks for security reason

- timeout check (expire)
- ip-fixiation
- browser-fixiation

If one check failed, session data has to be cleaned.

This method has been deprecated and gets removed in version 2.0. 
Use validate instead.

Does not need to be replaced.

#### `Joomla\Session\Session::validate`

Do some checks for security reason

- timeout check (expire)
- ip-fixiation
- browser-fixiation

If one check failed, session data has to be cleaned.

##### Signature

```php
protected Joomla\Session\Session::validate ( [ bool $restart = false ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `restart` | `bool` | Reactivate session Defaults to `false`. |

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Do some checks for security reason
 *
 * - timeout check (expire)
 * - ip-fixiation
 * - browser-fixiation
 *
 * If one check failed, session data has to be cleaned.
 *
 * @param   boolean  $restart  Reactivate session
 *
 * @return  boolean  True on success
 *
 * @link    http://shiflett.org/articles/the-truth-about-sessions
 * @since   1.3.0
 */
protected function validate(bool $restart = false) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Session\Storage Class

Custom session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed.

Does not need to be replaced.

## The Joomla\Session\Storage\Database Class

Database session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.

## The Joomla\Session\Storage\Apcu Class

APCU session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed.

Does not need to be replaced.

## The Joomla\Session\Storage\Memcache Class

Memcache session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.

## The Joomla\Session\Storage\Memcached Class

Memcached session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.

## The Joomla\Session\Storage\Apc Class

APC session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed.

Does not need to be replaced.

## The Joomla\Session\Storage\None Class

Default PHP configured session handler for Joomla!

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.

## The Joomla\Session\Storage\Wincache Class

WINCACHE session storage handler for PHP

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.

## The Joomla\Session\Storage\Xcache Class

XCache session storage handler

This class has been deprecated and gets removed in version 2.0.
The Storage class chain will be removed

Does not need to be replaced.
