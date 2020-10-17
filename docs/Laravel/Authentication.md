# Joomla/Authentication Package version 1.3.0

Joomla Authentication Package

## The Joomla\Authentication\AuthenticationStrategyInterface Interface

Joomla Framework AuthenticationStrategy Interface

### Methods

#### `Joomla\Authentication\AuthenticationStrategyInterface::authenticate`

Attempt authentication.

##### Signature

```php
abstract public Joomla\Authentication\AuthenticationStrategyInterface::authenticate ( void ) : string|bool
```
##### Parameters

This method has no parameters.

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt authentication.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.0
 */
abstract public function authenticate() : string|bool;
```
#### `Joomla\Authentication\AuthenticationStrategyInterface::getResult`

Get last authentication result.

##### Signature

```php
abstract public Joomla\Authentication\AuthenticationStrategyInterface::getResult ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` An integer from Authentication class constants with the authentication result.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get last authentication result.
 *
 * @return  integer  An integer from Authentication class constants with the authentication result.
 *
 * @since   1.0
 */
abstract public function getResult() : int;
```

## The Joomla\Authentication\Password\HandlerInterface Interface

Interface defining a password handler

### Methods

#### `Joomla\Authentication\Password\HandlerInterface::hashPassword`

Generate a hash for a plaintext password

##### Signature

```php
abstract public Joomla\Authentication\Password\HandlerInterface::hashPassword ( string $plaintext [, array $options = [] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plaintext password to validate |
| `options` | `array` | Options for the hashing operation Defaults to `[]`. |

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
 * Generate a hash for a plaintext password
 *
 * @param   string  $plaintext  The plaintext password to validate
 * @param   array   $options    Options for the hashing operation
 *
 * @return  string
 *
 * @since   1.2.0
 */
abstract public function hashPassword(string $plaintext, array $options = []) : string;
```
#### `Joomla\Authentication\Password\HandlerInterface::isSupported`

Check that the password handler is supported in this environment

##### Signature

```php
abstract public static Joomla\Authentication\Password\HandlerInterface::isSupported ( void ) : bool
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
 * Check that the password handler is supported in this environment
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
abstract public static function isSupported() : bool;
```
#### `Joomla\Authentication\Password\HandlerInterface::validatePassword`

Validate a password

##### Signature

```php
abstract public Joomla\Authentication\Password\HandlerInterface::validatePassword ( string $plaintext, string $hashed  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plain text password to validate |
| `hashed` | `string` | The password hash to validate against |

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
 * Validate a password
 *
 * @param   string  $plaintext  The plain text password to validate
 * @param   string  $hashed     The password hash to validate against
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
abstract public function validatePassword(string $plaintext, string $hashed) : bool;
```

## The Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy Class

Abstract AuthenticationStrategy for username/password based authentication

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler to validate the password against. |
| protected `$status` | `int` | The last authentication status. |    

### Methods

#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::__construct`

Constructor.

##### Signature

```php
public Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::__construct ( [ Joomla\Authentication\Password\HandlerInterface $passwordHandler = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler. Defaults to `null`. |

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
 * @param   HandlerInterface  $passwordHandler  The password handler.
 *
 * @since   1.2.0
 */
public function __construct(Joomla\Authentication\Password\HandlerInterface $passwordHandler = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::doAuthenticate`

Attempt to authenticate the username and password pair.

##### Signature

```php
protected Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::doAuthenticate ( string $username, string $password  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to authenticate the username and password pair.
 *
 * @param   string  $username  The username to authenticate.
 * @param   string  $password  The password to attempt authentication with.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.1.0
 */
protected function doAuthenticate(string $username, string $password) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::getHashedPassword`

Retrieve the hashed password for the specified user.

##### Signature

```php
abstract protected Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::getHashedPassword ( string $username  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | Username to lookup. |

##### Return Values

`string` or `bool` Hashed password on success or boolean false on failure.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve the hashed password for the specified user.
 *
 * @param   string  $username  Username to lookup.
 *
 * @return  string|boolean  Hashed password on success or boolean false on failure.
 *
 * @since   1.1.0
 */
abstract protected function getHashedPassword(string $username) : string|bool;
```
#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::getResult`

Get the status of the last authentication attempt.

##### Signature

```php
public Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::getResult ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` Authentication class constant result.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the status of the last authentication attempt.
 *
 * @return  integer  Authentication class constant result.
 *
 * @since   1.1.0
 */
public function getResult() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::verifyPassword`

Attempt to verify the username and password pair.

##### Signature

```php
protected Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::verifyPassword ( string $username, string $password, string $hashedPassword  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |
| `hashedPassword` | `string` | The hashed password to attempt authentication against. |

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
 * Attempt to verify the username and password pair.
 *
 * @param   string  $username        The username to authenticate.
 * @param   string  $password        The password to attempt authentication with.
 * @param   string  $hashedPassword  The hashed password to attempt authentication against.
 *
 * @return  boolean
 *
 * @since   1.1.0
 */
protected function verifyPassword(string $username, string $password, string $hashedPassword) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::authenticate`

Attempt authentication.

##### Signature

```php
abstract public Joomla\Authentication\AbstractUsernamePasswordAuthenticationStrategy::authenticate ( void ) : string|bool
```
##### Parameters

This method has no parameters.

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt authentication.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.0
 */
abstract public function authenticate() : string|bool;
```

## The Joomla\Authentication\Strategies\DatabaseStrategy Class

Joomla Framework Database Strategy Authentication class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler to validate the password against. |
| protected `$status` | `int` | The last authentication status. |    

### Methods

#### `Joomla\Authentication\Strategies\DatabaseStrategy::__construct`

Strategy Constructor

##### Signature

```php
public Joomla\Authentication\Strategies\DatabaseStrategy::__construct ( Joomla\Input\Input $input, Joomla\Database\DatabaseDriver $database [, array $options = [] [, Joomla\Authentication\Password\HandlerInterface $passwordHandler = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | The input object from which to retrieve the request credentials. |
| `database` | `Joomla\Database\DatabaseDriver` | DatabaseDriver for retrieving user credentials. |
| `options` | `array` | Optional options array for configuring the credential storage connection. Defaults to `[]`. |
| `passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler. Defaults to `null`. |

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
 * Strategy Constructor
 *
 * @param   Input             $input            The input object from which to retrieve the request credentials.
 * @param   DatabaseDriver    $database         DatabaseDriver for retrieving user credentials.
 * @param   array             $options          Optional options array for configuring the credential storage connection.
 * @param   HandlerInterface  $passwordHandler  The password handler.
 *
 * @since   1.1.0
 */
public function __construct(Joomla\Input\Input $input, Joomla\Database\DatabaseDriver $database, array $options = [], Joomla\Authentication\Password\HandlerInterface $passwordHandler = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\DatabaseStrategy::authenticate`

Attempt to authenticate the username and password pair.

##### Signature

```php
public Joomla\Authentication\Strategies\DatabaseStrategy::authenticate ( void ) : string|bool
```
##### Parameters

This method has no parameters.

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to authenticate the username and password pair.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.1.0
 */
public function authenticate() : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\DatabaseStrategy::getHashedPassword`

Retrieve the hashed password for the specified user.

##### Signature

```php
protected Joomla\Authentication\Strategies\DatabaseStrategy::getHashedPassword ( string $username  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | Username to lookup. |

##### Return Values

`string` or `bool` Hashed password on success or boolean false on failure.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve the hashed password for the specified user.
 *
 * @param   string  $username  Username to lookup.
 *
 * @return  string|boolean  Hashed password on success or boolean false on failure.
 *
 * @since   1.1.0
 */
protected function getHashedPassword(string $username) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\DatabaseStrategy::doAuthenticate`

Attempt to authenticate the username and password pair.

##### Signature

```php
protected Joomla\Authentication\Strategies\DatabaseStrategy::doAuthenticate ( string $username, string $password  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to authenticate the username and password pair.
 *
 * @param   string  $username  The username to authenticate.
 * @param   string  $password  The password to attempt authentication with.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.1.0
 */
protected function doAuthenticate(string $username, string $password) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\DatabaseStrategy::getResult`

Get the status of the last authentication attempt.

##### Signature

```php
public Joomla\Authentication\Strategies\DatabaseStrategy::getResult ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` Authentication class constant result.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the status of the last authentication attempt.
 *
 * @return  integer  Authentication class constant result.
 *
 * @since   1.1.0
 */
public function getResult() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\DatabaseStrategy::verifyPassword`

Attempt to verify the username and password pair.

##### Signature

```php
protected Joomla\Authentication\Strategies\DatabaseStrategy::verifyPassword ( string $username, string $password, string $hashedPassword  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |
| `hashedPassword` | `string` | The hashed password to attempt authentication against. |

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
 * Attempt to verify the username and password pair.
 *
 * @param   string  $username        The username to authenticate.
 * @param   string  $password        The password to attempt authentication with.
 * @param   string  $hashedPassword  The hashed password to attempt authentication against.
 *
 * @return  boolean
 *
 * @since   1.1.0
 */
protected function verifyPassword(string $username, string $password, string $hashedPassword) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Authentication\Strategies\LocalStrategy Class

Joomla Framework Local Strategy Authentication class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler to validate the password against. |
| protected `$status` | `int` | The last authentication status. |    

### Methods

#### `Joomla\Authentication\Strategies\LocalStrategy::__construct`

Strategy Constructor

##### Signature

```php
public Joomla\Authentication\Strategies\LocalStrategy::__construct ( Joomla\Input\Input $input, array $credentialStore [, Joomla\Authentication\Password\HandlerInterface $passwordHandler = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | The input object from which to retrieve the request credentials. |
| `credentialStore` | `array` | Hash of username and hash pairs. |
| `passwordHandler` | `Joomla\Authentication\Password\HandlerInterface` | The password handler. Defaults to `null`. |

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
 * Strategy Constructor
 *
 * @param   Input             $input            The input object from which to retrieve the request credentials.
 * @param   array             $credentialStore  Hash of username and hash pairs.
 * @param   HandlerInterface  $passwordHandler  The password handler.
 *
 * @since   1.0
 */
public function __construct(Joomla\Input\Input $input, array $credentialStore, Joomla\Authentication\Password\HandlerInterface $passwordHandler = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\LocalStrategy::authenticate`

Attempt to authenticate the username and password pair.

##### Signature

```php
public Joomla\Authentication\Strategies\LocalStrategy::authenticate ( void ) : string|bool
```
##### Parameters

This method has no parameters.

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to authenticate the username and password pair.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.0
 */
public function authenticate() : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\LocalStrategy::getHashedPassword`

Retrieve the hashed password for the specified user.

##### Signature

```php
protected Joomla\Authentication\Strategies\LocalStrategy::getHashedPassword ( string $username  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | Username to lookup. |

##### Return Values

`string` or `bool` Hashed password on success or boolean false on failure.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve the hashed password for the specified user.
 *
 * @param   string  $username  Username to lookup.
 *
 * @return  string|boolean  Hashed password on success or boolean false on failure.
 *
 * @since   1.1.0
 */
protected function getHashedPassword(string $username) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\LocalStrategy::doAuthenticate`

Attempt to authenticate the username and password pair.

##### Signature

```php
protected Joomla\Authentication\Strategies\LocalStrategy::doAuthenticate ( string $username, string $password  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to authenticate the username and password pair.
 *
 * @param   string  $username  The username to authenticate.
 * @param   string  $password  The password to attempt authentication with.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.1.0
 */
protected function doAuthenticate(string $username, string $password) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\LocalStrategy::getResult`

Get the status of the last authentication attempt.

##### Signature

```php
public Joomla\Authentication\Strategies\LocalStrategy::getResult ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` Authentication class constant result.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the status of the last authentication attempt.
 *
 * @return  integer  Authentication class constant result.
 *
 * @since   1.1.0
 */
public function getResult() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Strategies\LocalStrategy::verifyPassword`

Attempt to verify the username and password pair.

##### Signature

```php
protected Joomla\Authentication\Strategies\LocalStrategy::verifyPassword ( string $username, string $password, string $hashedPassword  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `username` | `string` | The username to authenticate. |
| `password` | `string` | The password to attempt authentication with. |
| `hashedPassword` | `string` | The hashed password to attempt authentication against. |

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
 * Attempt to verify the username and password pair.
 *
 * @param   string  $username        The username to authenticate.
 * @param   string  $password        The password to attempt authentication with.
 * @param   string  $hashedPassword  The hashed password to attempt authentication against.
 *
 * @return  boolean
 *
 * @since   1.1.0
 */
protected function verifyPassword(string $username, string $password, string $hashedPassword) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Authentication\Password\Argon2idHandler Class

Password handler for Argon2id hashed passwords

### Methods

#### `Joomla\Authentication\Password\Argon2idHandler::hashPassword`

Generate a hash for a plaintext password

##### Signature

```php
public Joomla\Authentication\Password\Argon2idHandler::hashPassword ( string $plaintext [, array $options = [] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plaintext password to validate |
| `options` | `array` | Options for the hashing operation Defaults to `[]`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws LogicException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a hash for a plaintext password
 *
 * @param   string  $plaintext  The plaintext password to validate
 * @param   array   $options    Options for the hashing operation
 *
 * @return  string
 *
 * @since   1.3.0
 * @throws  \LogicException
 */
public function hashPassword(string $plaintext, array $options = []) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\Argon2idHandler::isSupported`

Check that the password handler is supported in this environment

##### Signature

```php
public static Joomla\Authentication\Password\Argon2idHandler::isSupported ( void ) : bool
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
 * Check that the password handler is supported in this environment
 *
 * @return  boolean
 *
 * @since   1.3.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\Argon2idHandler::validatePassword`

Validate a password

##### Signature

```php
public Joomla\Authentication\Password\Argon2idHandler::validatePassword ( string $plaintext, string $hashed  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plain text password to validate |
| `hashed` | `string` | The password hash to validate against |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws LogicException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Validate a password
 *
 * @param   string  $plaintext  The plain text password to validate
 * @param   string  $hashed     The password hash to validate against
 *
 * @return  boolean
 *
 * @since   1.3.0
 * @throws  \LogicException
 */
public function validatePassword(string $plaintext, string $hashed) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Authentication\Password\BCryptHandler Class

Password handler for BCrypt hashed passwords

### Methods

#### `Joomla\Authentication\Password\BCryptHandler::hashPassword`

Generate a hash for a plaintext password

##### Signature

```php
public Joomla\Authentication\Password\BCryptHandler::hashPassword ( string $plaintext [, array $options = [] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plaintext password to validate |
| `options` | `array` | Options for the hashing operation Defaults to `[]`. |

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
 * Generate a hash for a plaintext password
 *
 * @param   string  $plaintext  The plaintext password to validate
 * @param   array   $options    Options for the hashing operation
 *
 * @return  string
 *
 * @since   1.2.0
 */
public function hashPassword(string $plaintext, array $options = []) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\BCryptHandler::isSupported`

Check that the password handler is supported in this environment

##### Signature

```php
public static Joomla\Authentication\Password\BCryptHandler::isSupported ( void ) : bool
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
 * Check that the password handler is supported in this environment
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\BCryptHandler::validatePassword`

Validate a password

##### Signature

```php
public Joomla\Authentication\Password\BCryptHandler::validatePassword ( string $plaintext, string $hashed  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plain text password to validate |
| `hashed` | `string` | The password hash to validate against |

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
 * Validate a password
 *
 * @param   string  $plaintext  The plain text password to validate
 * @param   string  $hashed     The password hash to validate against
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public function validatePassword(string $plaintext, string $hashed) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Authentication\Password\Argon2iHandler Class

Password handler for Argon2i hashed passwords

### Methods

#### `Joomla\Authentication\Password\Argon2iHandler::hashPassword`

Generate a hash for a plaintext password

##### Signature

```php
public Joomla\Authentication\Password\Argon2iHandler::hashPassword ( string $plaintext [, array $options = [] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plaintext password to validate |
| `options` | `array` | Options for the hashing operation Defaults to `[]`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws LogicException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a hash for a plaintext password
 *
 * @param   string  $plaintext  The plaintext password to validate
 * @param   array   $options    Options for the hashing operation
 *
 * @return  string
 *
 * @since   1.2.0
 * @throws  \LogicException
 */
public function hashPassword(string $plaintext, array $options = []) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\Argon2iHandler::isSupported`

Check that the password handler is supported in this environment

##### Signature

```php
public static Joomla\Authentication\Password\Argon2iHandler::isSupported ( void ) : bool
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
 * Check that the password handler is supported in this environment
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Password\Argon2iHandler::validatePassword`

Validate a password

##### Signature

```php
public Joomla\Authentication\Password\Argon2iHandler::validatePassword ( string $plaintext, string $hashed  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `plaintext` | `string` | The plain text password to validate |
| `hashed` | `string` | The password hash to validate against |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws LogicException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Validate a password
 *
 * @param   string  $plaintext  The plain text password to validate
 * @param   string  $hashed     The password hash to validate against
 *
 * @return  boolean
 *
 * @since   1.2.0
 * @throws  \LogicException
 */
public function validatePassword(string $plaintext, string $hashed) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Authentication\Authentication Class

Joomla Framework Authentication Class

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SUCCESS` | `int` | 1 | Authentication was successful. |
| public `INVALID_CREDENTIALS` | `int` | 2 | Credentials were provided but they were invalid. |
| public `NO_SUCH_USER` | `int` | 3 | Credentials were provided but the user did not exist in the credential store. |
| public `NO_CREDENTIALS` | `int` | 4 | There were no credentials found. |
| public `INCOMPLETE_CREDENTIALS` | `int` | 5 | There were partial credentials found but they were not complete. |    

### Methods

#### `Joomla\Authentication\Authentication::addStrategy`

Register a new strategy

##### Signature

```php
public Joomla\Authentication\Authentication::addStrategy ( string $strategyName, Joomla\Authentication\AuthenticationStrategyInterface $strategy  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `strategyName` | `string` | The name to use for the strategy. |
| `strategy` | `Joomla\Authentication\AuthenticationStrategyInterface` | The authentication strategy object to add. |

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
 * Register a new strategy
 *
 * @param   string                           $strategyName  The name to use for the strategy.
 * @param   AuthenticationStrategyInterface  $strategy      The authentication strategy object to add.
 *
 * @return  void
 *
 * @since   1.0
 */
public function addStrategy(string $strategyName, Joomla\Authentication\AuthenticationStrategyInterface $strategy) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Authentication::authenticate`

Perform authentication

##### Signature

```php
public Joomla\Authentication\Authentication::authenticate ( [ Joomla\Authentication\AuthenticationStrategyInterface[] $strategies = [] ] ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `strategies` | `Joomla\Authentication\AuthenticationStrategyInterface[]` | Array of strategies to try - empty to try all strategies. Defaults to `[]`. |

##### Return Values

`string` or `bool` A string containing a username if authentication is successful, false otherwise.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Perform authentication
 *
 * @param   AuthenticationStrategyInterface[]  $strategies  Array of strategies to try - empty to try all strategies.
 *
 * @return  string|boolean  A string containing a username if authentication is successful, false otherwise.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function authenticate(Joomla\Authentication\AuthenticationStrategyInterface[] $strategies = []) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Authentication\Authentication::getResults`

Get authentication results.

Use this if you want to get more detailed information about the results of an authentication attempts.

##### Signature

```php
public Joomla\Authentication\Authentication::getResults ( void ) : int[]
```
##### Parameters

This method has no parameters.

##### Return Values

`int[]` An array containing authentication results.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get authentication results.
 *
 * Use this if you want to get more detailed information about the results of an authentication attempts.
 *
 * @return  integer[]  An array containing authentication results.
 *
 * @since   1.0
 */
public function getResults() : int[]{
    // @todo Add adapter code.
}
```
