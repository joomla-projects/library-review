# Joomla/Crypt Package version 1.4.0

Joomla Crypt Package

## The Joomla\Crypt\CipherInterface Interface

Joomla Framework Cipher interface.

### Methods

#### `Joomla\Crypt\CipherInterface::decrypt`

Decrypt a data string.

##### Signature

```php
abstract public Joomla\Crypt\CipherInterface::decrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The encrypted string to decrypt. |
| `key` | `Joomla\Crypt\Key` | The key[/pair] object to use for decryption. |

##### Return Values

`string` The decrypted data string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Decrypt a data string.
 *
 * @param   string  $data  The encrypted string to decrypt.
 * @param   Key     $key   The key[/pair] object to use for decryption.
 *
 * @return  string  The decrypted data string.
 *
 * @since   1.0
 */
abstract public function decrypt(string $data, Joomla\Crypt\Key $key) : string;
```
#### `Joomla\Crypt\CipherInterface::encrypt`

Encrypt a data string.

##### Signature

```php
abstract public Joomla\Crypt\CipherInterface::encrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data string to encrypt. |
| `key` | `Joomla\Crypt\Key` | The key[/pair] object to use for encryption. |

##### Return Values

`string` The encrypted data string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Encrypt a data string.
 *
 * @param   string  $data  The data string to encrypt.
 * @param   Key     $key   The key[/pair] object to use for encryption.
 *
 * @return  string  The encrypted data string.
 *
 * @since   1.0
 */
abstract public function encrypt(string $data, Joomla\Crypt\Key $key) : string;
```
#### `Joomla\Crypt\CipherInterface::generateKey`

Generate a new encryption key[/pair] object.

##### Signature

```php
abstract public Joomla\Crypt\CipherInterface::generateKey ( [ array $options = [] ] ) : Joomla\Crypt\Key
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Key generation options. Defaults to `[]`. |

##### Return Values

`Joomla\Crypt\Key` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a new encryption key[/pair] object.
 *
 * @param   array  $options  Key generation options.
 *
 * @return  Key
 *
 * @since   1.0
 */
abstract public function generateKey(array $options = []) : Joomla\Crypt\Key;
```

## The Joomla\Crypt\PasswordInterface Interface

Joomla Framework Password Hashing Interface

This interface has been deprecated and gets removed in version 2.0.
Use PHP 5.5&#039;s native password hashing API

Does not need to be replaced.

## The Joomla\Crypt\Exception\InvalidKeyTypeException Class

Exception representing an invalid Joomla\Crypt\Key type for a cipher

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$message` | `` |  |
| protected `$code` | `` |  |
| protected `$file` | `` |  |
| protected `$line` | `` |  |    

### Methods

#### `Joomla\Crypt\Exception\InvalidKeyTypeException::__construct`

InvalidKeyTypeException constructor.

##### Signature

```php
public Joomla\Crypt\Exception\InvalidKeyTypeException::__construct ( string $expectedKeyType, string $actualKeyType  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedKeyType` | `string` | The expected key type. |
| `actualKeyType` | `string` | The actual key type. |

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
 * InvalidKeyTypeException constructor.
 *
 * @param   string  $expectedKeyType  The expected key type.
 * @param   string  $actualKeyType    The actual key type.
 *
 * @since   1.4.0
 */
public function __construct(string $expectedKeyType, string $actualKeyType) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::__wakeup`

##### Signature

```php
public Joomla\Crypt\Exception\InvalidKeyTypeException::__wakeup ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getMessage`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getMessage ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getCode`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getCode ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getFile`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getFile ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getLine`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getLine ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getTrace`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getTrace ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getPrevious`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getPrevious ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::getTraceAsString`

##### Signature

```php
final public Joomla\Crypt\Exception\InvalidKeyTypeException::getTraceAsString ( void ) : void
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
#### `Joomla\Crypt\Exception\InvalidKeyTypeException::__toString`

##### Signature

```php
public Joomla\Crypt\Exception\InvalidKeyTypeException::__toString ( void ) : void
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

## The Joomla\Crypt\Crypt Class

Crypt is a Joomla Framework class for handling basic encryption/decryption of data.

### Methods

#### `Joomla\Crypt\Crypt::__construct`

Object Constructor takes an optional key to be used for encryption/decryption. If no key is given then the

secret word from the configuration object is used.

##### Signature

```php
public Joomla\Crypt\Crypt::__construct ( [ Joomla\Crypt\CipherInterface $cipher = null [, Joomla\Crypt\Key $key = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `cipher` | `Joomla\Crypt\CipherInterface` | The encryption cipher object. Defaults to `null`. |
| `key` | `Joomla\Crypt\Key` | The encryption key[/pair)]. Defaults to `null`. |

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
 * Object Constructor takes an optional key to be used for encryption/decryption. If no key is given then the
 * secret word from the configuration object is used.
 *
 * @param   CipherInterface  $cipher  The encryption cipher object.
 * @param   Key              $key     The encryption key[/pair)].
 *
 * @since   1.0
 */
public function __construct(Joomla\Crypt\CipherInterface $cipher = null, Joomla\Crypt\Key $key = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Crypt::decrypt`

Decrypt a data string.

##### Signature

```php
public Joomla\Crypt\Crypt::decrypt ( string $data  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The encrypted string to decrypt. |

##### Return Values

`string` The decrypted data string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Decrypt a data string.
 *
 * @param   string  $data  The encrypted string to decrypt.
 *
 * @return  string  The decrypted data string.
 *
 * @since   1.0
 */
public function decrypt(string $data) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Crypt::encrypt`

Encrypt a data string.

##### Signature

```php
public Joomla\Crypt\Crypt::encrypt ( string $data  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data string to encrypt. |

##### Return Values

`string` The encrypted data string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Encrypt a data string.
 *
 * @param   string  $data  The data string to encrypt.
 *
 * @return  string  The encrypted data string.
 *
 * @since   1.0
 */
public function encrypt(string $data) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Crypt::generateKey`

Generate a new encryption key[/pair] object.

##### Signature

```php
public Joomla\Crypt\Crypt::generateKey ( [ array $options = [] ] ) : Joomla\Crypt\Key
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Key generation options. Defaults to `[]`. |

##### Return Values

`Joomla\Crypt\Key` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a new encryption key[/pair] object.
 *
 * @param   array  $options  Key generation options.
 *
 * @return  Key
 *
 * @since   1.0
 */
public function generateKey(array $options = []) : Joomla\Crypt\Key{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Crypt::setKey`

Set the encryption key[/pair] object.

##### Signature

```php
public Joomla\Crypt\Crypt::setKey ( Joomla\Crypt\Key $key  ) : Joomla\Crypt\Crypt
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `Joomla\Crypt\Key` | The key object to set. |

##### Return Values

`Joomla\Crypt\Crypt` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the encryption key[/pair] object.
 *
 * @param   Key  $key  The key object to set.
 *
 * @return  Crypt  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function setKey(Joomla\Crypt\Key $key) : Joomla\Crypt\Crypt{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Crypt::genRandomBytes`

Generate random bytes.

##### Signature

```php
public static Joomla\Crypt\Crypt::genRandomBytes ( [ int $length = 16 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `length` | `int` | Length of the random data to generate Defaults to `16`. |

##### Return Values

`string` Random binary data

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate random bytes.
 *
 * @param   integer  $length  Length of the random data to generate
 *
 * @return  string  Random binary data
 *
 * @since   1.0
 */
public static function genRandomBytes(int $length = 16) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Crypt\Tests\CryptTest Class

Test class for JCrypt.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$object` | `Joomla\Crypt\Crypt` |  |
| protected `$backupGlobals` | `bool` |  |
| protected `$backupGlobalsBlacklist` | `array` |  |
| protected `$backupStaticAttributes` | `bool` |  |
| protected `$backupStaticAttributesBlacklist` | `array` |  |
| protected `$runTestInSeparateProcess` | `bool` |  |
| protected `$preserveGlobalState` | `bool` |  |    

### Methods

#### `Joomla\Crypt\Tests\CryptTest::setUp`

Sets up the fixture, for example, opens a network connection.

This method is called before a test is executed.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::setUp ( void ) : void
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
 * Sets up the fixture, for example, opens a network connection.
 * This method is called before a test is executed.
 *
 * @return void
 */
protected function setUp() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::test__construct`

Test __construct()

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::test__construct ( void ) : void
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
 * Test __construct()
 *
 * @covers  Joomla\Crypt\Crypt::__construct()
 *
 * @return  void
 */
public function test__construct() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::testDecrypt`

Test...

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::testDecrypt ( void ) : void
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
 * Test...
 *
 * @covers Joomla\Crypt\Crypt::decrypt
 * @todo Implement testDecrypt().
 *
 * @return void
 */
public function testDecrypt() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::testEncrypt`

Test...

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::testEncrypt ( void ) : void
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
 * Test...
 *
 * @covers Joomla\Crypt\Crypt::encrypt
 * @todo Implement testEncrypt().
 *
 * @return void
 */
public function testEncrypt() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::testGenerateKey`

Test...

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::testGenerateKey ( void ) : void
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
 * Test...
 *
 * @covers Joomla\Crypt\Crypt::generateKey
 *
 * @return void
 */
public function testGenerateKey() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::testSetKey`

Test...

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::testSetKey ( void ) : void
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
 * Test...
 *
 * @covers Joomla\Crypt\Crypt::setKey
 *
 * @return void
 */
public function testSetKey() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::testGenRandomBytes`

Test...

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::testGenRandomBytes ( void ) : void
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
 * Test...
 *
 * @covers Joomla\Crypt\Crypt::genRandomBytes
 *
 * @return void
 */
public function testGenRandomBytes() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::any`

Returns a matcher that matches when the method is executed

zero or more times.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::any ( void ) : PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
public static function any() : PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::never`

Returns a matcher that matches when the method is never executed.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::never ( void ) : PHPUnit\Framework\MockObject\Matcher\InvokedCount
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is never executed.
     */
public static function never() : PHPUnit\Framework\MockObject\Matcher\InvokedCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::atLeast`

Returns a matcher that matches when the method is executed

at least N times.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::atLeast ( int $requiredInvocations  ) : PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastCount
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `requiredInvocations` | `int` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */
public static function atLeast(int $requiredInvocations) : PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::atLeastOnce`

Returns a matcher that matches when the method is executed at least once.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::atLeastOnce ( void ) : PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed at least once.
     */
public static function atLeastOnce() : PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::once`

Returns a matcher that matches when the method is executed exactly once.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::once ( void ) : PHPUnit\Framework\MockObject\Matcher\InvokedCount
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed exactly once.
     */
public static function once() : PHPUnit\Framework\MockObject\Matcher\InvokedCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::exactly`

Returns a matcher that matches when the method is executed

exactly $count times.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::exactly ( int $count  ) : PHPUnit\Framework\MockObject\Matcher\InvokedCount
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */
public static function exactly(int $count) : PHPUnit\Framework\MockObject\Matcher\InvokedCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::atMost`

Returns a matcher that matches when the method is executed

at most N times.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::atMost ( int $allowedInvocations  ) : PHPUnit\Framework\MockObject\Matcher\InvokedAtMostCount
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `allowedInvocations` | `int` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedAtMostCount` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */
public static function atMost(int $allowedInvocations) : PHPUnit\Framework\MockObject\Matcher\InvokedAtMostCount{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::at`

Returns a matcher that matches when the method is executed

at the given index.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::at ( int $index  ) : PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `index` | `int` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     */
public static function at(int $index) : PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::returnValue`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::returnValue (  $value  ) : PHPUnit\Framework\MockObject\Stub\ReturnStub
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ReturnStub` 

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
public static function returnValue( $value) : PHPUnit\Framework\MockObject\Stub\ReturnStub{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::returnValueMap`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::returnValueMap ( array $valueMap  ) : PHPUnit\Framework\MockObject\Stub\ReturnValueMap
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `valueMap` | `array` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ReturnValueMap` 

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
public static function returnValueMap(array $valueMap) : PHPUnit\Framework\MockObject\Stub\ReturnValueMap{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::returnArgument`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::returnArgument ( int $argumentIndex  ) : PHPUnit\Framework\MockObject\Stub\ReturnArgument
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `argumentIndex` | `int` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ReturnArgument` 

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
public static function returnArgument(int $argumentIndex) : PHPUnit\Framework\MockObject\Stub\ReturnArgument{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::returnCallback`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::returnCallback (  $callback  ) : PHPUnit\Framework\MockObject\Stub\ReturnCallback
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `callback` | `` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ReturnCallback` 

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
public static function returnCallback( $callback) : PHPUnit\Framework\MockObject\Stub\ReturnCallback{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::returnSelf`

Returns the current object.

This method is useful when mocking a fluent interface.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::returnSelf ( void ) : PHPUnit\Framework\MockObject\Stub\ReturnSelf
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ReturnSelf` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */
public static function returnSelf() : PHPUnit\Framework\MockObject\Stub\ReturnSelf{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::throwException`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::throwException ( PHPUnit\Framework\Throwable $exception  ) : PHPUnit\Framework\MockObject\Stub\Exception
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `exception` | `PHPUnit\Framework\Throwable` |  |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\Exception` 

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
public static function throwException(PHPUnit\Framework\Throwable $exception) : PHPUnit\Framework\MockObject\Stub\Exception{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::onConsecutiveCalls`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::onConsecutiveCalls ( [  $args = null ] ) : PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `args` | `` |  Defaults to `null`. |

##### Return Values

`PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls` 

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
public static function onConsecutiveCalls( $args = null) : PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::__construct`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::__construct ( [ string $name = null [, array $data = [] [, string $dataName = &#039;&#039; ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` |  Defaults to `null`. |
| `data` | `array` |  Defaults to `[]`. |
| `dataName` | `string` |  Defaults to `''`. |

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
     * @param string $name
     * @param string $dataName
     */
public function __construct(string $name = null, array $data = [], string $dataName = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setUpBeforeClass`

This method is called before the first test of this test class is run.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::setUpBeforeClass ( void ) : void
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
     * This method is called before the first test of this test class is run.
     */
public static function setUpBeforeClass() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::tearDownAfterClass`

This method is called after the last test of this test class is run.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::tearDownAfterClass ( void ) : void
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
     * This method is called after the last test of this test class is run.
     */
public static function tearDownAfterClass() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::tearDown`

This method is called after each test.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::tearDown ( void ) : void
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
     * This method is called after each test.
     */
protected function tearDown() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::toString`

Returns a string representation of the test case.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />
Throws ReflectionException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \ReflectionException
     */
public function toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::count`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

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
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getGroups`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getGroups ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` 

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
public function getGroups() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setGroups`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setGroups ( array $groups  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `groups` | `array` |  |

##### Return Values

`void` 

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
public function setGroups(array $groups) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getAnnotations`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getAnnotations ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` 

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
public function getAnnotations() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getName`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getName ( [ bool $withDataSet = true ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `withDataSet` | `bool` |  Defaults to `true`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function getName(bool $withDataSet = true) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getSize`

Returns the size of the test.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getSize ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns the size of the test.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function getSize() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::hasSize`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::hasSize ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function hasSize() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isSmall`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::isSmall ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function isSmall() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isMedium`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::isMedium ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function isMedium() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isLarge`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::isLarge ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function isLarge() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getActualOutput`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getActualOutput ( void ) : string
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
 *
 */
public function getActualOutput() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::hasOutput`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::hasOutput ( void ) : bool
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
 *
 */
public function hasOutput() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::doesNotPerformAssertions`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::doesNotPerformAssertions ( void ) : bool
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
 *
 */
public function doesNotPerformAssertions() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectOutputRegex`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectOutputRegex ( string $expectedRegex  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedRegex` | `string` |  |

##### Return Values

`void` 

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
public function expectOutputRegex(string $expectedRegex) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectOutputString`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectOutputString ( string $expectedString  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedString` | `string` |  |

##### Return Values

`void` 

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
public function expectOutputString(string $expectedString) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::hasExpectationOnOutput`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::hasExpectationOnOutput ( void ) : bool
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
 *
 */
public function hasExpectationOnOutput() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getExpectedException`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getExpectedException ( void ) : string
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
 *
 */
public function getExpectedException() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getExpectedExceptionCode`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getExpectedExceptionCode ( void ) : null|int|string
```
##### Parameters

This method has no parameters.

##### Return Values

`null` or `int` or `string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @return null|int|string
     */
public function getExpectedExceptionCode() : null|int|string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getExpectedExceptionMessage`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getExpectedExceptionMessage ( void ) : string
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
 *
 */
public function getExpectedExceptionMessage() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getExpectedExceptionMessageRegExp`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getExpectedExceptionMessageRegExp ( void ) : string
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
 *
 */
public function getExpectedExceptionMessageRegExp() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectException`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectException ( string $exception  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `exception` | `string` |  |

##### Return Values

`void` 

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
public function expectException(string $exception) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectExceptionCode`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectExceptionCode ( int|string $code  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `code` | `int` or `string` |  |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @param int|string $code
     */
public function expectExceptionCode( $code) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectExceptionMessage`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectExceptionMessage ( string $message  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `string` |  |

##### Return Values

`void` 

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
public function expectExceptionMessage(string $message) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectExceptionMessageRegExp`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectExceptionMessageRegExp ( string $messageRegExp  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `messageRegExp` | `string` |  |

##### Return Values

`void` 

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
public function expectExceptionMessageRegExp(string $messageRegExp) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectExceptionObject`

Sets up an expectation for an exception to be raised by the code under test.

Information for expected exception class, expected exception message, and
expected exception code are retrieved from a given Exception object.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectExceptionObject ( Exception $exception  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `exception` | `Exception` |  |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
public function expectExceptionObject(Exception $exception) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::expectNotToPerformAssertions`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::expectNotToPerformAssertions ( void ) : void
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
public function expectNotToPerformAssertions() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setRegisterMockObjectsFromTestArgumentsRecursively`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setRegisterMockObjectsFromTestArgumentsRecursively ( bool $flag  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `flag` | `bool` |  |

##### Return Values

`void` 

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
public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setUseErrorHandler`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setUseErrorHandler ( bool $useErrorHandler  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `useErrorHandler` | `bool` |  |

##### Return Values

`void` 

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
public function setUseErrorHandler(bool $useErrorHandler) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getStatus`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getStatus ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

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
public function getStatus() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::markAsRisky`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::markAsRisky ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

`void` 

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
public function markAsRisky() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getStatusMessage`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getStatusMessage ( void ) : string
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
 *
 */
public function getStatusMessage() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::hasFailed`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::hasFailed ( void ) : bool
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
 *
 */
public function hasFailed() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::run`

Runs the test case and collects the results in a TestResult object.

If no TestResult object is passed a new one will be created.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::run ( [ PHPUnit\Framework\TestResult $result = null ] ) : PHPUnit\Framework\TestResult
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `result` | `PHPUnit\Framework\TestResult` |  Defaults to `null`. |

##### Return Values

`PHPUnit\Framework\TestResult` 

##### Errors/Exceptions

Throws PHPUnit\Framework\CodeCoverageException <br />
Throws ReflectionException <br />
Throws SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException <br />
Throws SebastianBergmann\CodeCoverage\InvalidArgumentException <br />
Throws SebastianBergmann\CodeCoverage\MissingCoversAnnotationException <br />
Throws SebastianBergmann\CodeCoverage\RuntimeException <br />
Throws SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws CodeCoverageException
     * @throws ReflectionException
     * @throws \SebastianBergmann\CodeCoverage\CoveredCodeNotExecutedException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\MissingCoversAnnotationException
     * @throws \SebastianBergmann\CodeCoverage\RuntimeException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public function run(PHPUnit\Framework\TestResult $result = null) : PHPUnit\Framework\TestResult{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::runBare`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::runBare ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

`void` 

##### Errors/Exceptions

Throws Throwable <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @throws \Throwable
     */
public function runBare() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setName`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setName ( string $name  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` |  |

##### Return Values

`void` 

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
public function setName(string $name) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setDependencies`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setDependencies ( array $dependencies  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dependencies` | `array` |  |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @param string[] $dependencies
     */
public function setDependencies(array $dependencies) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getDependencies`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getDependencies ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` 

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
public function getDependencies() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::hasDependencies`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::hasDependencies ( void ) : bool
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
 *
 */
public function hasDependencies() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setDependencyInput`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setDependencyInput ( array $dependencyInput  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dependencyInput` | `array` |  |

##### Return Values

`void` 

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
public function setDependencyInput(array $dependencyInput) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setBeStrictAboutChangesToGlobalState`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setBeStrictAboutChangesToGlobalState ( bool $beStrictAboutChangesToGlobalState  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `beStrictAboutChangesToGlobalState` | `bool` |  |

##### Return Values

`void` 

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
public function setBeStrictAboutChangesToGlobalState(bool $beStrictAboutChangesToGlobalState) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setBackupGlobals`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setBackupGlobals ( bool $backupGlobals  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `backupGlobals` | `bool` |  |

##### Return Values

`void` 

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
public function setBackupGlobals(bool $backupGlobals) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setBackupStaticAttributes`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setBackupStaticAttributes ( bool $backupStaticAttributes  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `backupStaticAttributes` | `bool` |  |

##### Return Values

`void` 

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
public function setBackupStaticAttributes(bool $backupStaticAttributes) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setRunTestInSeparateProcess`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setRunTestInSeparateProcess ( bool $runTestInSeparateProcess  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `runTestInSeparateProcess` | `bool` |  |

##### Return Values

`void` 

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
public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setRunClassInSeparateProcess`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setRunClassInSeparateProcess ( bool $runClassInSeparateProcess  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `runClassInSeparateProcess` | `bool` |  |

##### Return Values

`void` 

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
public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setPreserveGlobalState`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setPreserveGlobalState ( bool $preserveGlobalState  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `preserveGlobalState` | `bool` |  |

##### Return Values

`void` 

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
public function setPreserveGlobalState(bool $preserveGlobalState) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setInIsolation`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setInIsolation ( bool $inIsolation  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `inIsolation` | `bool` |  |

##### Return Values

`void` 

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
public function setInIsolation(bool $inIsolation) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isInIsolation`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::isInIsolation ( void ) : bool
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
 *
 */
public function isInIsolation() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getResult`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getResult ( void ) : void
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
public function getResult() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setResult`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setResult (  $result  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `result` | `` |  |

##### Return Values

`void` 

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
public function setResult( $result) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setOutputCallback`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setOutputCallback ( callable $callback  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `callback` | `callable` |  |

##### Return Values

`void` 

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
public function setOutputCallback(callable $callback) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getTestResultObject`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getTestResultObject ( void ) : PHPUnit\Framework\TestResult
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\TestResult` 

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
public function getTestResultObject() : PHPUnit\Framework\TestResult{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setTestResultObject`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::setTestResultObject ( PHPUnit\Framework\TestResult $result  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `result` | `PHPUnit\Framework\TestResult` |  |

##### Return Values

`void` 

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
public function setTestResultObject(PHPUnit\Framework\TestResult $result) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::registerMockObject`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::registerMockObject ( PHPUnit\Framework\MockObject\MockObject $mockObject  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `mockObject` | `PHPUnit\Framework\MockObject\MockObject` |  |

##### Return Values

`void` 

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
public function registerMockObject(PHPUnit\Framework\MockObject\MockObject $mockObject) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getMockBuilder`

Returns a builder object to create mock objects using a fluent interface.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getMockBuilder ( string|string[] $className  ) : PHPUnit\Framework\MockObject\MockBuilder
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `className` | `string` or `string[]` |  |

##### Return Values

`PHPUnit\Framework\MockObject\MockBuilder` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @param string|string[] $className
     */
public function getMockBuilder( $className) : PHPUnit\Framework\MockObject\MockBuilder{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::addToAssertionCount`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::addToAssertionCount ( int $count  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` |  |

##### Return Values

`void` 

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
public function addToAssertionCount(int $count) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getNumAssertions`

Returns the number of assertions performed by this test.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getNumAssertions ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns the number of assertions performed by this test.
     */
public function getNumAssertions() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::usesDataProvider`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::usesDataProvider ( void ) : bool
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
 *
 */
public function usesDataProvider() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::dataDescription`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::dataDescription ( void ) : string
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
 *
 */
public function dataDescription() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::dataName`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::dataName ( void ) : int|string
```
##### Parameters

This method has no parameters.

##### Return Values

`int` or `string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @return int|string
     */
public function dataName() : int|string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::registerComparator`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::registerComparator ( SebastianBergmann\Comparator\Comparator $comparator  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `comparator` | `SebastianBergmann\Comparator\Comparator` |  |

##### Return Values

`void` 

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
public function registerComparator(SebastianBergmann\Comparator\Comparator $comparator) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getDataSetAsString`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getDataSetAsString ( [ bool $includeData = true ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `includeData` | `bool` |  Defaults to `true`. |

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
 *
 */
public function getDataSetAsString(bool $includeData = true) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getProvidedData`

Gets the data set of a TestCase.

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::getProvidedData ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Gets the data set of a TestCase.
     */
public function getProvidedData() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::addWarning`

##### Signature

```php
public Joomla\Crypt\Tests\CryptTest::addWarning ( string $warning  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `warning` | `string` |  |

##### Return Values

`void` 

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
public function addWarning(string $warning) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::runTest`

Override to run the test and assert its state.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::runTest ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws PHPUnit\Framework\AssertionFailedError <br />
Throws Exception <br />
Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\ObjectEnumerator\InvalidArgumentException <br />
Throws PHPUnit\Framework\Throwable <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Override to run the test and assert its state.
     *
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws Throwable
     */
protected function runTest() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::iniSet`

This method is a wrapper for the ini_set() function that automatically

resets the modified php.ini setting to its original value after the
test is run.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::iniSet ( string $varName,  $newValue  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `varName` | `string` |  |
| `newValue` | `` |  |

##### Return Values

`void` 

##### Errors/Exceptions

Throws Exception <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */
protected function iniSet(string $varName,  $newValue) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::setLocale`

This method is a wrapper for the setlocale() function that automatically

resets the locale to its original value after the test is run.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::setLocale ( [  $args = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `args` | `` |  Defaults to `null`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws Exception <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
protected function setLocale( $args = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::createMock`

Returns a test double for the specified class.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::createMock ( string|string[] $originalClassName  ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` or `string[]` |  |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     */
protected function createMock( $originalClassName) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::createConfiguredMock`

Returns a configured test double for the specified class.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::createConfiguredMock ( string|string[] $originalClassName, array $configuration  ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` or `string[]` |  |
| `configuration` | `array` |  |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a configured test double for the specified class.
     *
     * @param string|string[] $originalClassName
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     */
protected function createConfiguredMock( $originalClassName, array $configuration) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::createPartialMock`

Returns a partial test double for the specified class.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::createPartialMock ( string|string[] $originalClassName, array $methods  ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` or `string[]` |  |
| `methods` | `array` |  |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a partial test double for the specified class.
     *
     * @param string|string[] $originalClassName
     * @param string[]        $methods
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     */
protected function createPartialMock( $originalClassName, array $methods) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::createTestProxy`

Returns a test proxy for the specified class.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::createTestProxy ( string $originalClassName [, array $constructorArguments = [] ] ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` |  |
| `constructorArguments` | `array` |  Defaults to `[]`. |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a test proxy for the specified class.
     *
     * @throws Exception
     * @throws \InvalidArgumentException
     */
protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getMockClass`

Mocks the specified class and returns the name of the mocked class.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::getMockClass ( string $originalClassName [, array $methods = [] [, array $arguments = [] [, string $mockClassName = &#039;&#039; [, bool $callOriginalConstructor = false [, bool $callOriginalClone = true [, bool $callAutoload = true [, bool $cloneArguments = false ]]]]]]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` |  |
| `methods` | `array` |  Defaults to `[]`. |
| `arguments` | `array` |  Defaults to `[]`. |
| `mockClassName` | `string` |  Defaults to `''`. |
| `callOriginalConstructor` | `bool` |  Defaults to `false`. |
| `callOriginalClone` | `bool` |  Defaults to `true`. |
| `callAutoload` | `bool` |  Defaults to `true`. |
| `cloneArguments` | `bool` |  Defaults to `false`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws Exception <br />
Throws ReflectionException <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param string $originalClassName
     * @param array  $methods
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
protected function getMockClass(string $originalClassName, array $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = false, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = false) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getMockForAbstractClass`

Returns a mock object for the specified abstract class with all abstract

methods of the class mocked. Concrete methods are not mocked by default.
To mock concrete methods, use the 7th parameter ($mockedMethods).

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::getMockForAbstractClass ( string $originalClassName [, array $arguments = [] [, string $mockClassName = &#039;&#039; [, bool $callOriginalConstructor = true [, bool $callOriginalClone = true [, bool $callAutoload = true [, array $mockedMethods = [] [, bool $cloneArguments = false ]]]]]]] ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `originalClassName` | `string` |  |
| `arguments` | `array` |  Defaults to `[]`. |
| `mockClassName` | `string` |  Defaults to `''`. |
| `callOriginalConstructor` | `bool` |  Defaults to `true`. |
| `callOriginalClone` | `bool` |  Defaults to `true`. |
| `callAutoload` | `bool` |  Defaults to `true`. |
| `mockedMethods` | `array` |  Defaults to `[]`. |
| `cloneArguments` | `bool` |  Defaults to `false`. |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws ReflectionException <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @param string $originalClassName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getMockFromWsdl`

Returns a mock object based on the given WSDL file.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::getMockFromWsdl ( string $wsdlFile [, string $originalClassName = &#039;&#039; [, string $mockClassName = &#039;&#039; [, array $methods = [] [, bool $callOriginalConstructor = true [, array $options = [] ]]]]] ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `wsdlFile` | `string` |  |
| `originalClassName` | `string` |  Defaults to `''`. |
| `mockClassName` | `string` |  Defaults to `''`. |
| `methods` | `array` |  Defaults to `[]`. |
| `callOriginalConstructor` | `bool` |  Defaults to `true`. |
| `options` | `array` | An array of options passed to SOAPClient::_construct Defaults to `[]`. |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws ReflectionException <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a mock object based on the given WSDL file.
     *
     * @param string $wsdlFile
     * @param string $originalClassName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param array  $options                 An array of options passed to SOAPClient::_construct
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
protected function getMockFromWsdl(string $wsdlFile, string $originalClassName = '', string $mockClassName = '', array $methods = [], bool $callOriginalConstructor = true, array $options = []) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getMockForTrait`

Returns a mock object for the specified trait with all abstract methods

of the trait mocked. Concrete methods to mock can be specified with the
`$mockedMethods` parameter.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::getMockForTrait ( string $traitName [, array $arguments = [] [, string $mockClassName = &#039;&#039; [, bool $callOriginalConstructor = true [, bool $callOriginalClone = true [, bool $callAutoload = true [, array $mockedMethods = [] [, bool $cloneArguments = false ]]]]]]] ) : PHPUnit\Framework\MockObject\MockObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `traitName` | `string` |  |
| `arguments` | `array` |  Defaults to `[]`. |
| `mockClassName` | `string` |  Defaults to `''`. |
| `callOriginalConstructor` | `bool` |  Defaults to `true`. |
| `callOriginalClone` | `bool` |  Defaults to `true`. |
| `callAutoload` | `bool` |  Defaults to `true`. |
| `mockedMethods` | `array` |  Defaults to `[]`. |
| `cloneArguments` | `bool` |  Defaults to `false`. |

##### Return Values

`PHPUnit\Framework\MockObject\MockObject` 

##### Errors/Exceptions

Throws Exception <br />
Throws ReflectionException <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @param string $traitName
     * @param string $mockClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     * @param array  $mockedMethods
     * @param bool   $cloneArguments
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     */
protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : PHPUnit\Framework\MockObject\MockObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getObjectForTrait`

Returns an object for the specified trait.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::getObjectForTrait ( string $traitName [, array $arguments = [] [, string $traitClassName = &#039;&#039; [, bool $callOriginalConstructor = true [, bool $callOriginalClone = true [, bool $callAutoload = true ]]]]] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `traitName` | `string` |  |
| `arguments` | `array` |  Defaults to `[]`. |
| `traitClassName` | `string` |  Defaults to `''`. |
| `callOriginalConstructor` | `bool` |  Defaults to `true`. |
| `callOriginalClone` | `bool` |  Defaults to `true`. |
| `callAutoload` | `bool` |  Defaults to `true`. |

##### Return Values

`object` 

##### Errors/Exceptions

Throws Exception <br />
Throws ReflectionException <br />
Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Returns an object for the specified trait.
     *
     * @param string $traitName
     * @param string $traitClassName
     * @param bool   $callOriginalConstructor
     * @param bool   $callOriginalClone
     * @param bool   $callAutoload
     *
     * @throws Exception
     * @throws ReflectionException
     * @throws \InvalidArgumentException
     *
     * @return object
     */
protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true) : object{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::prophesize`

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::prophesize ( [ null|string $classOrInterface = null ] ) : Prophecy\Prophecy\ObjectProphecy
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `classOrInterface` | `null` or `string` |  Defaults to `null`. |

##### Return Values

`Prophecy\Prophecy\ObjectProphecy` 

##### Errors/Exceptions

Throws Prophecy\Exception\Doubler\ClassNotFoundException <br />
Throws Prophecy\Exception\Doubler\DoubleException <br />
Throws Prophecy\Exception\Doubler\InterfaceNotFoundException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @param null|string $classOrInterface
     *
     * @throws Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws Prophecy\Exception\Doubler\DoubleException
     * @throws Prophecy\Exception\Doubler\InterfaceNotFoundException
     */
protected function prophesize( $classOrInterface = null) : Prophecy\Prophecy\ObjectProphecy{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::createResult`

Creates a default TestResult object.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::createResult ( void ) : PHPUnit\Framework\TestResult
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\TestResult` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Creates a default TestResult object.
     */
protected function createResult() : PHPUnit\Framework\TestResult{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertPreConditions`

Performs assertions shared by all tests of a test case.

This method is called between setUp() and test.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::assertPreConditions ( void ) : void
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
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     */
protected function assertPreConditions() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertPostConditions`

Performs assertions shared by all tests of a test case.

This method is called between test and tearDown().

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::assertPostConditions ( void ) : void
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
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     */
protected function assertPostConditions() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::onNotSuccessfulTest`

This method is called when a test method did not execute successfully.

##### Signature

```php
protected Joomla\Crypt\Tests\CryptTest::onNotSuccessfulTest ( PHPUnit\Framework\Throwable $t  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `t` | `PHPUnit\Framework\Throwable` |  |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws PHPUnit\Framework\Throwable <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
protected function onNotSuccessfulTest(PHPUnit\Framework\Throwable $t) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertArrayHasKey`

Asserts that an array has a specified key.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertArrayHasKey ( int|string $key, array|PHPUnit\Framework\ArrayAccess $array [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `int` or `string` |  |
| `array` | `array` or `PHPUnit\Framework\ArrayAccess` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that an array has a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertArrayHasKey( $key,  $array, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertArraySubset`

Asserts that an array has a specified subset.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3494. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertArrayNotHasKey`

Asserts that an array does not have a specified key.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertArrayNotHasKey ( int|string $key, array|PHPUnit\Framework\ArrayAccess $array [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `int` or `string` |  |
| `array` | `array` or `PHPUnit\Framework\ArrayAccess` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertArrayNotHasKey( $key,  $array, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertContains`

Asserts that a haystack contains a needle.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertContains (  $needle,  $haystack [, string $message = &#039;&#039; [, bool $ignoreCase = false [, bool $checkForObjectIdentity = true [, bool $checkForNonObjectIdentity = false ]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `` |  |
| `haystack` | `` |  |
| `message` | `string` |  Defaults to `''`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |
| `checkForObjectIdentity` | `bool` |  Defaults to `true`. |
| `checkForNonObjectIdentity` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertContains( $needle,  $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeContains`

Asserts that a haystack that is stored in a static attribute of a class

or an attribute of an object contains a needle.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotContains`

Asserts that a haystack does not contain a needle.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotContains (  $needle,  $haystack [, string $message = &#039;&#039; [, bool $ignoreCase = false [, bool $checkForObjectIdentity = true [, bool $checkForNonObjectIdentity = false ]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `` |  |
| `haystack` | `` |  |
| `message` | `string` |  Defaults to `''`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |
| `checkForObjectIdentity` | `bool` |  Defaults to `true`. |
| `checkForNonObjectIdentity` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotContains( $needle,  $haystack, string $message = '', bool $ignoreCase = false, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotContains`

Asserts that a haystack that is stored in a static attribute of a class

or an attribute of an object does not contain a needle.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertContainsOnly`

Asserts that a haystack contains only values of a given type.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertContainsOnly ( string $type, iterable $haystack [, bool $isNativeType = null [, string $message = &#039;&#039; ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` |  |
| `haystack` | `iterable` |  |
| `isNativeType` | `bool` |  Defaults to `null`. |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertContainsOnly(string $type, iterable $haystack, bool $isNativeType = null, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertContainsOnlyInstancesOf`

Asserts that a haystack contains only instances of a given class name.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertContainsOnlyInstancesOf ( string $className, iterable $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `className` | `string` |  |
| `haystack` | `iterable` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeContainsOnly`

Asserts that a haystack that is stored in a static attribute of a class

or an attribute of an object contains only values of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotContainsOnly`

Asserts that a haystack does not contain only values of a given type.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotContainsOnly ( string $type, iterable $haystack [, bool $isNativeType = null [, string $message = &#039;&#039; ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` |  |
| `haystack` | `iterable` |  |
| `isNativeType` | `bool` |  Defaults to `null`. |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotContainsOnly(string $type, iterable $haystack, bool $isNativeType = null, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotContainsOnly`

Asserts that a haystack that is stored in a static attribute of a class

or an attribute of an object does not contain only values of a given
type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertCount`

Asserts the number of elements of an array, Countable or Traversable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertCount ( int $expectedCount, PHPUnit\Framework\Countable|iterable $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedCount` | `int` |  |
| `haystack` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertCount(int $expectedCount,  $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeCount`

Asserts the number of elements of an array, Countable or Traversable

that is stored in an attribute.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotCount`

Asserts the number of elements of an array, Countable or Traversable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotCount ( int $expectedCount, PHPUnit\Framework\Countable|iterable $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedCount` | `int` |  |
| `haystack` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotCount(int $expectedCount,  $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotCount`

Asserts the number of elements of an array, Countable or Traversable

that is stored in an attribute.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertEquals`

Asserts that two variables are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEquals (  $expected,  $actual [, string $message = &#039;&#039; [, float $delta = 0 [, int $maxDepth = 10 [, bool $canonicalize = false [, bool $ignoreCase = false ]]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |
| `delta` | `float` |  Defaults to `0`. |
| `maxDepth` | `int` |  Defaults to `10`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEquals( $expected,  $actual, string $message = '', float $delta = 0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertEqualsCanonicalizing`

Asserts that two variables are equal (canonicalizing).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEqualsCanonicalizing (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEqualsCanonicalizing( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertEqualsIgnoringCase`

Asserts that two variables are equal (ignoring case).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEqualsIgnoringCase (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEqualsIgnoringCase( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertEqualsWithDelta`

Asserts that two variables are equal (with delta).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEqualsWithDelta (  $expected,  $actual, float $delta [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `delta` | `float` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEqualsWithDelta( $expected,  $actual, float $delta, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeEquals`

Asserts that a variable is equal to an attribute of an object.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotEquals`

Asserts that two variables are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotEquals (  $expected,  $actual [, string $message = &#039;&#039; [, float $delta = 0 [, int $maxDepth = 10 [, bool $canonicalize = false [, bool $ignoreCase = false ]]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |
| `delta` | `float` |  Defaults to `0`. |
| `maxDepth` | `int` |  Defaults to `10`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are not equal.
     *
     * @param float $delta
     * @param int   $maxDepth
     * @param bool  $canonicalize
     * @param bool  $ignoreCase
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotEquals( $expected,  $actual, string $message = '', float $delta = 0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotEqualsCanonicalizing`

Asserts that two variables are not equal (canonicalizing).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotEqualsCanonicalizing (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotEqualsCanonicalizing( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotEqualsIgnoringCase`

Asserts that two variables are not equal (ignoring case).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotEqualsIgnoringCase (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotEqualsIgnoringCase( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotEqualsWithDelta`

Asserts that two variables are not equal (with delta).

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotEqualsWithDelta (  $expected,  $actual, float $delta [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `delta` | `float` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotEqualsWithDelta( $expected,  $actual, float $delta, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotEquals`

Asserts that a variable is not equal to an attribute of an object.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertEmpty`

Asserts that a variable is empty.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEmpty (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEmpty( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeEmpty`

Asserts that a static attribute of a class or an attribute of an object

is empty.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotEmpty`

Asserts that a variable is not empty.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotEmpty (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotEmpty( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotEmpty`

Asserts that a static attribute of a class or an attribute of an object

is not empty.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertGreaterThan`

Asserts that a value is greater than another value.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertGreaterThan (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertGreaterThan( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeGreaterThan`

Asserts that an attribute is greater than another value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertGreaterThanOrEqual`

Asserts that a value is greater than or equal to another value.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertGreaterThanOrEqual (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertGreaterThanOrEqual( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeGreaterThanOrEqual`

Asserts that an attribute is greater than or equal to another value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertLessThan`

Asserts that a value is smaller than another value.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertLessThan (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertLessThan( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeLessThan`

Asserts that an attribute is smaller than another value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertLessThanOrEqual`

Asserts that a value is smaller than or equal to another value.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertLessThanOrEqual (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertLessThanOrEqual( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeLessThanOrEqual`

Asserts that an attribute is smaller than or equal to another value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertFileEquals`

Asserts that the contents of one file is equal to the contents of another

file.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileEquals ( string $expected, string $actual [, string $message = &#039;&#039; [, bool $canonicalize = false [, bool $ignoreCase = false ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `string` |  |
| `actual` | `string` |  |
| `message` | `string` |  Defaults to `''`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileNotEquals`

Asserts that the contents of one file is not equal to the contents of

another file.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileNotEquals ( string $expected, string $actual [, string $message = &#039;&#039; [, bool $canonicalize = false [, bool $ignoreCase = false ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `string` |  |
| `actual` | `string` |  |
| `message` | `string` |  Defaults to `''`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileNotEquals(string $expected, string $actual, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringEqualsFile`

Asserts that the contents of a string is equal

to the contents of a file.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringEqualsFile ( string $expectedFile, string $actualString [, string $message = &#039;&#039; [, bool $canonicalize = false [, bool $ignoreCase = false ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualString` | `string` |  |
| `message` | `string` |  Defaults to `''`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringNotEqualsFile`

Asserts that the contents of a string is not equal

to the contents of a file.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringNotEqualsFile ( string $expectedFile, string $actualString [, string $message = &#039;&#039; [, bool $canonicalize = false [, bool $ignoreCase = false ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualString` | `string` |  |
| `message` | `string` |  Defaults to `''`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '', bool $canonicalize = false, bool $ignoreCase = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsReadable`

Asserts that a file/dir is readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsReadable ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertIsReadable(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotIsReadable`

Asserts that a file/dir exists and is not readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotIsReadable ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotIsReadable(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsWritable`

Asserts that a file/dir exists and is writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsWritable ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertIsWritable(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotIsWritable`

Asserts that a file/dir exists and is not writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotIsWritable ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotIsWritable(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryExists`

Asserts that a directory exists.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryExists ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryExists(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryNotExists`

Asserts that a directory does not exist.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryNotExists ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryNotExists(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryIsReadable`

Asserts that a directory exists and is readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryIsReadable ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryIsReadable(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryNotIsReadable`

Asserts that a directory exists and is not readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryNotIsReadable ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryNotIsReadable(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryIsWritable`

Asserts that a directory exists and is writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryIsWritable ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryIsWritable(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertDirectoryNotIsWritable`

Asserts that a directory exists and is not writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertDirectoryNotIsWritable ( string $directory [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `directory` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertDirectoryNotIsWritable(string $directory, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileExists`

Asserts that a file exists.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileExists ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileExists(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileNotExists`

Asserts that a file does not exist.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileNotExists ( string $filename [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileNotExists(string $filename, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileIsReadable`

Asserts that a file exists and is readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileIsReadable ( string $file [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileIsReadable(string $file, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileNotIsReadable`

Asserts that a file exists and is not readable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileNotIsReadable ( string $file [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileNotIsReadable(string $file, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileIsWritable`

Asserts that a file exists and is writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileIsWritable ( string $file [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileIsWritable(string $file, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFileNotIsWritable`

Asserts that a file exists and is not writable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFileNotIsWritable ( string $file [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFileNotIsWritable(string $file, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertTrue`

Asserts that a condition is true.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertTrue (  $condition [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `condition` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertTrue( $condition, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotTrue`

Asserts that a condition is not true.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotTrue (  $condition [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `condition` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotTrue( $condition, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFalse`

Asserts that a condition is false.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFalse (  $condition [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `condition` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFalse( $condition, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotFalse`

Asserts that a condition is not false.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotFalse (  $condition [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `condition` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotFalse( $condition, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNull`

Asserts that a variable is null.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNull (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNull( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotNull`

Asserts that a variable is not null.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotNull (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotNull( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertFinite`

Asserts that a variable is finite.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertFinite (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertFinite( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertInfinite`

Asserts that a variable is infinite.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertInfinite (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertInfinite( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNan`

Asserts that a variable is nan.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNan (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNan( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertClassHasAttribute`

Asserts that a class has a specified attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertClassHasAttribute ( string $attributeName, string $className [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `className` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertClassHasAttribute(string $attributeName, string $className, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertClassNotHasAttribute`

Asserts that a class does not have a specified attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertClassNotHasAttribute ( string $attributeName, string $className [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `className` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertClassHasStaticAttribute`

Asserts that a class has a specified static attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertClassHasStaticAttribute ( string $attributeName, string $className [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `className` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertClassNotHasStaticAttribute`

Asserts that a class does not have a specified static attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertClassNotHasStaticAttribute ( string $attributeName, string $className [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `className` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertObjectHasAttribute`

Asserts that an object has a specified attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertObjectHasAttribute ( string $attributeName, object $object [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `object` | `object` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertObjectHasAttribute(string $attributeName, object $object, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertObjectNotHasAttribute`

Asserts that an object does not have a specified attribute.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertObjectNotHasAttribute ( string $attributeName, object $object [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |
| `object` | `object` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertObjectNotHasAttribute(string $attributeName, object $object, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertSame`

Asserts that two variables have the same type and value.

Used on objects, it asserts that two variables reference
the same object.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertSame (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertSame( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeSame`

Asserts that a variable and an attribute of an object have the same type

and value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotSame`

Asserts that two variables do not have the same type and value.

Used on objects, it asserts that two variables do not reference
the same object.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotSame (  $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotSame( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotSame`

Asserts that a variable and an attribute of an object do not have the

same type and value.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertInstanceOf`

Asserts that a variable is of a given type.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertInstanceOf ( string $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `string` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertInstanceOf(string $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeInstanceOf`

Asserts that an attribute is of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertNotInstanceOf`

Asserts that a variable is not of a given type.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotInstanceOf ( string $expected,  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `string` |  |
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotInstanceOf(string $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotInstanceOf`

Asserts that an attribute is of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertInternalType`

Asserts that a variable is of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3369. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertAttributeInternalType`

Asserts that an attribute is of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertIsArray`

Asserts that a variable is of type array.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsArray (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type array.
     */
public static function assertIsArray( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsBool`

Asserts that a variable is of type bool.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsBool (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type bool.
     */
public static function assertIsBool( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsFloat`

Asserts that a variable is of type float.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsFloat (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type float.
     */
public static function assertIsFloat( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsInt`

Asserts that a variable is of type int.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsInt (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type int.
     */
public static function assertIsInt( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNumeric`

Asserts that a variable is of type numeric.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNumeric (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type numeric.
     */
public static function assertIsNumeric( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsObject`

Asserts that a variable is of type object.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsObject (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type object.
     */
public static function assertIsObject( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsResource`

Asserts that a variable is of type resource.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsResource (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type resource.
     */
public static function assertIsResource( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsString`

Asserts that a variable is of type string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsString (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type string.
     */
public static function assertIsString( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsScalar`

Asserts that a variable is of type scalar.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsScalar (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type scalar.
     */
public static function assertIsScalar( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsCallable`

Asserts that a variable is of type callable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsCallable (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type callable.
     */
public static function assertIsCallable( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsIterable`

Asserts that a variable is of type iterable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsIterable (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is of type iterable.
     */
public static function assertIsIterable( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotInternalType`

Asserts that a variable is not of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3369. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertIsNotArray`

Asserts that a variable is not of type array.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotArray (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type array.
     */
public static function assertIsNotArray( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotBool`

Asserts that a variable is not of type bool.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotBool (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type bool.
     */
public static function assertIsNotBool( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotFloat`

Asserts that a variable is not of type float.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotFloat (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type float.
     */
public static function assertIsNotFloat( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotInt`

Asserts that a variable is not of type int.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotInt (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type int.
     */
public static function assertIsNotInt( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotNumeric`

Asserts that a variable is not of type numeric.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotNumeric (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type numeric.
     */
public static function assertIsNotNumeric( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotObject`

Asserts that a variable is not of type object.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotObject (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type object.
     */
public static function assertIsNotObject( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotResource`

Asserts that a variable is not of type resource.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotResource (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type resource.
     */
public static function assertIsNotResource( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotString`

Asserts that a variable is not of type string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotString (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type string.
     */
public static function assertIsNotString( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotScalar`

Asserts that a variable is not of type scalar.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotScalar (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type scalar.
     */
public static function assertIsNotScalar( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotCallable`

Asserts that a variable is not of type callable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotCallable (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type callable.
     */
public static function assertIsNotCallable( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertIsNotIterable`

Asserts that a variable is not of type iterable.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertIsNotIterable (  $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actual` | `` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a variable is not of type iterable.
     */
public static function assertIsNotIterable( $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertAttributeNotInternalType`

Asserts that an attribute is of a given type.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::assertRegExp`

Asserts that a string matches a given regular expression.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertRegExp ( string $pattern, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `pattern` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertRegExp(string $pattern, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotRegExp`

Asserts that a string does not match a given regular expression.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotRegExp ( string $pattern, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `pattern` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotRegExp(string $pattern, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertSameSize`

Assert that the size of two arrays (or `Countable` or `Traversable` objects)

is the same.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertSameSize ( PHPUnit\Framework\Countable|iterable $expected, PHPUnit\Framework\Countable|iterable $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `actual` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertSameSize( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertNotSameSize`

Assert that the size of two arrays (or `Countable` or `Traversable` objects)

is not the same.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertNotSameSize ( PHPUnit\Framework\Countable|iterable $expected, PHPUnit\Framework\Countable|iterable $actual [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `actual` | `PHPUnit\Framework\Countable` or `iterable` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertNotSameSize( $expected,  $actual, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringMatchesFormat`

Asserts that a string matches a given format string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringMatchesFormat ( string $format, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `format` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringMatchesFormat(string $format, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringNotMatchesFormat`

Asserts that a string does not match a given format string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringNotMatchesFormat ( string $format, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `format` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringNotMatchesFormat(string $format, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringMatchesFormatFile`

Asserts that a string matches a given format file.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringMatchesFormatFile ( string $formatFile, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `formatFile` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringNotMatchesFormatFile`

Asserts that a string does not match a given format string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringNotMatchesFormatFile ( string $formatFile, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `formatFile` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringStartsWith`

Asserts that a string starts with a given prefix.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringStartsWith ( string $prefix, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `prefix` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringStartsWith(string $prefix, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringStartsNotWith`

Asserts that a string starts not with a given prefix.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringStartsNotWith ( string $prefix, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `prefix` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringStartsNotWith(string $prefix, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringContainsString`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringContainsString ( string $needle, string $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `string` |  |
| `haystack` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

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
public static function assertStringContainsString(string $needle, string $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringContainsStringIgnoringCase`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringContainsStringIgnoringCase ( string $needle, string $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `string` |  |
| `haystack` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

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
public static function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringNotContainsString`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringNotContainsString ( string $needle, string $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `string` |  |
| `haystack` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

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
public static function assertStringNotContainsString(string $needle, string $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringNotContainsStringIgnoringCase`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringNotContainsStringIgnoringCase ( string $needle, string $haystack [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `string` |  |
| `haystack` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

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
public static function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringEndsWith`

Asserts that a string ends with a given suffix.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringEndsWith ( string $suffix, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `suffix` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringEndsWith(string $suffix, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertStringEndsNotWith`

Asserts that a string ends not with a given suffix.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertStringEndsNotWith ( string $suffix, string $string [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `suffix` | `string` |  |
| `string` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlFileEqualsXmlFile`

Asserts that two XML files are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlFileEqualsXmlFile ( string $expectedFile, string $actualFile [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualFile` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlFileNotEqualsXmlFile`

Asserts that two XML files are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlFileNotEqualsXmlFile ( string $expectedFile, string $actualFile [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualFile` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlStringEqualsXmlFile`

Asserts that two XML documents are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlStringEqualsXmlFile ( string $expectedFile, DOMDocument|string $actualXml [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualXml` | `DOMDocument` or `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlStringEqualsXmlFile(string $expectedFile,  $actualXml, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlStringNotEqualsXmlFile`

Asserts that two XML documents are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlStringNotEqualsXmlFile ( string $expectedFile, DOMDocument|string $actualXml [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualXml` | `DOMDocument` or `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlStringNotEqualsXmlFile(string $expectedFile,  $actualXml, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlStringEqualsXmlString`

Asserts that two XML documents are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlStringEqualsXmlString ( DOMDocument|string $expectedXml, DOMDocument|string $actualXml [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedXml` | `DOMDocument` or `string` |  |
| `actualXml` | `DOMDocument` or `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlStringEqualsXmlString( $expectedXml,  $actualXml, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertXmlStringNotEqualsXmlString`

Asserts that two XML documents are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertXmlStringNotEqualsXmlString ( DOMDocument|string $expectedXml, DOMDocument|string $actualXml [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedXml` | `DOMDocument` or `string` |  |
| `actualXml` | `DOMDocument` or `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertXmlStringNotEqualsXmlString( $expectedXml,  $actualXml, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertEqualXMLStructure`

Asserts that a hierarchy of DOMElements matches.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertEqualXMLStructure ( DOMElement $expectedElement, DOMElement $actualElement [, bool $checkAttributes = false [, string $message = &#039;&#039; ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedElement` | `DOMElement` |  |
| `actualElement` | `DOMElement` |  |
| `checkAttributes` | `bool` |  Defaults to `false`. |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\AssertionFailedError <br />
Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertEqualXMLStructure(DOMElement $expectedElement, DOMElement $actualElement, bool $checkAttributes = false, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertThat`

Evaluates a PHPUnit\Framework\Constraint matcher object.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertThat (  $value, PHPUnit\Framework\Constraint\Constraint $constraint [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |
| `constraint` | `PHPUnit\Framework\Constraint\Constraint` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertThat( $value, PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJson`

Asserts that a string is a valid JSON string.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJson ( string $actualJson [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `actualJson` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJson(string $actualJson, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonStringEqualsJsonString`

Asserts that two given JSON encoded objects or arrays are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonStringEqualsJsonString ( string $expectedJson, string $actualJson [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedJson` | `string` |  |
| `actualJson` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonStringNotEqualsJsonString`

Asserts that two given JSON encoded objects or arrays are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonStringNotEqualsJsonString ( string $expectedJson, string $actualJson [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedJson` | `string` |  |
| `actualJson` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonStringNotEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonStringEqualsJsonFile`

Asserts that the generated JSON encoded object and the content of the given file are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonStringEqualsJsonFile ( string $expectedFile, string $actualJson [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualJson` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonStringNotEqualsJsonFile`

Asserts that the generated JSON encoded object and the content of the given file are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonStringNotEqualsJsonFile ( string $expectedFile, string $actualJson [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualJson` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonFileEqualsJsonFile`

Asserts that two JSON files are equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonFileEqualsJsonFile ( string $expectedFile, string $actualFile [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualFile` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::assertJsonFileNotEqualsJsonFile`

Asserts that two JSON files are not equal.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::assertJsonFileNotEqualsJsonFile ( string $expectedFile, string $actualFile [, string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expectedFile` | `string` |  |
| `actualFile` | `string` |  |
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\ExpectationFailedException <br />
Throws SebastianBergmann\RecursionContext\InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
public static function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::logicalAnd`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::logicalAnd ( void ) : PHPUnit\Framework\Constraint\LogicalAnd
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\LogicalAnd` 

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
public static function logicalAnd() : PHPUnit\Framework\Constraint\LogicalAnd{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::logicalOr`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::logicalOr ( void ) : PHPUnit\Framework\Constraint\LogicalOr
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\LogicalOr` 

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
public static function logicalOr() : PHPUnit\Framework\Constraint\LogicalOr{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::logicalNot`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::logicalNot ( PHPUnit\Framework\Constraint\Constraint $constraint  ) : PHPUnit\Framework\Constraint\LogicalNot
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `constraint` | `PHPUnit\Framework\Constraint\Constraint` |  |

##### Return Values

`PHPUnit\Framework\Constraint\LogicalNot` 

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
public static function logicalNot(PHPUnit\Framework\Constraint\Constraint $constraint) : PHPUnit\Framework\Constraint\LogicalNot{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::logicalXor`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::logicalXor ( void ) : PHPUnit\Framework\Constraint\LogicalXor
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\LogicalXor` 

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
public static function logicalXor() : PHPUnit\Framework\Constraint\LogicalXor{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::anything`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::anything ( void ) : PHPUnit\Framework\Constraint\IsAnything
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsAnything` 

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
public static function anything() : PHPUnit\Framework\Constraint\IsAnything{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isTrue`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isTrue ( void ) : PHPUnit\Framework\Constraint\IsTrue
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsTrue` 

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
public static function isTrue() : PHPUnit\Framework\Constraint\IsTrue{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::callback`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::callback ( callable $callback  ) : PHPUnit\Framework\Constraint\Callback
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `callback` | `callable` |  |

##### Return Values

`PHPUnit\Framework\Constraint\Callback` 

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
public static function callback(callable $callback) : PHPUnit\Framework\Constraint\Callback{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isFalse`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isFalse ( void ) : PHPUnit\Framework\Constraint\IsFalse
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsFalse` 

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
public static function isFalse() : PHPUnit\Framework\Constraint\IsFalse{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isJson`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isJson ( void ) : PHPUnit\Framework\Constraint\IsJson
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsJson` 

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
public static function isJson() : PHPUnit\Framework\Constraint\IsJson{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isNull`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isNull ( void ) : PHPUnit\Framework\Constraint\IsNull
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsNull` 

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
public static function isNull() : PHPUnit\Framework\Constraint\IsNull{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isFinite`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isFinite ( void ) : PHPUnit\Framework\Constraint\IsFinite
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsFinite` 

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
public static function isFinite() : PHPUnit\Framework\Constraint\IsFinite{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isInfinite`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isInfinite ( void ) : PHPUnit\Framework\Constraint\IsInfinite
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsInfinite` 

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
public static function isInfinite() : PHPUnit\Framework\Constraint\IsInfinite{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isNan`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isNan ( void ) : PHPUnit\Framework\Constraint\IsNan
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsNan` 

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
public static function isNan() : PHPUnit\Framework\Constraint\IsNan{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::attribute`

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::contains`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::contains (  $value [, bool $checkForObjectIdentity = true [, bool $checkForNonObjectIdentity = false ]] ) : PHPUnit\Framework\Constraint\TraversableContains
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |
| `checkForObjectIdentity` | `bool` |  Defaults to `true`. |
| `checkForNonObjectIdentity` | `bool` |  Defaults to `false`. |

##### Return Values

`PHPUnit\Framework\Constraint\TraversableContains` 

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
public static function contains( $value, bool $checkForObjectIdentity = true, bool $checkForNonObjectIdentity = false) : PHPUnit\Framework\Constraint\TraversableContains{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::containsOnly`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::containsOnly ( string $type  ) : PHPUnit\Framework\Constraint\TraversableContainsOnly
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\TraversableContainsOnly` 

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
public static function containsOnly(string $type) : PHPUnit\Framework\Constraint\TraversableContainsOnly{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::containsOnlyInstancesOf`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::containsOnlyInstancesOf ( string $className  ) : PHPUnit\Framework\Constraint\TraversableContainsOnly
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `className` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\TraversableContainsOnly` 

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
public static function containsOnlyInstancesOf(string $className) : PHPUnit\Framework\Constraint\TraversableContainsOnly{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::arrayHasKey`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::arrayHasKey ( int|string $key  ) : PHPUnit\Framework\Constraint\ArrayHasKey
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `int` or `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\ArrayHasKey` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * @param int|string $key
     */
public static function arrayHasKey( $key) : PHPUnit\Framework\Constraint\ArrayHasKey{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::equalTo`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::equalTo (  $value [, float $delta = 0 [, int $maxDepth = 10 [, bool $canonicalize = false [, bool $ignoreCase = false ]]]] ) : PHPUnit\Framework\Constraint\IsEqual
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |
| `delta` | `float` |  Defaults to `0`. |
| `maxDepth` | `int` |  Defaults to `10`. |
| `canonicalize` | `bool` |  Defaults to `false`. |
| `ignoreCase` | `bool` |  Defaults to `false`. |

##### Return Values

`PHPUnit\Framework\Constraint\IsEqual` 

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
public static function equalTo( $value, float $delta = 0, int $maxDepth = 10, bool $canonicalize = false, bool $ignoreCase = false) : PHPUnit\Framework\Constraint\IsEqual{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::attributeEqualTo`

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::isEmpty`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isEmpty ( void ) : PHPUnit\Framework\Constraint\IsEmpty
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsEmpty` 

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
public static function isEmpty() : PHPUnit\Framework\Constraint\IsEmpty{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isWritable`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isWritable ( void ) : PHPUnit\Framework\Constraint\IsWritable
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsWritable` 

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
public static function isWritable() : PHPUnit\Framework\Constraint\IsWritable{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isReadable`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isReadable ( void ) : PHPUnit\Framework\Constraint\IsReadable
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\IsReadable` 

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
public static function isReadable() : PHPUnit\Framework\Constraint\IsReadable{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::directoryExists`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::directoryExists ( void ) : PHPUnit\Framework\Constraint\DirectoryExists
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\DirectoryExists` 

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
public static function directoryExists() : PHPUnit\Framework\Constraint\DirectoryExists{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::fileExists`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::fileExists ( void ) : PHPUnit\Framework\Constraint\FileExists
```
##### Parameters

This method has no parameters.

##### Return Values

`PHPUnit\Framework\Constraint\FileExists` 

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
public static function fileExists() : PHPUnit\Framework\Constraint\FileExists{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::greaterThan`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::greaterThan (  $value  ) : PHPUnit\Framework\Constraint\GreaterThan
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\GreaterThan` 

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
public static function greaterThan( $value) : PHPUnit\Framework\Constraint\GreaterThan{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::greaterThanOrEqual`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::greaterThanOrEqual (  $value  ) : PHPUnit\Framework\Constraint\LogicalOr
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\LogicalOr` 

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
public static function greaterThanOrEqual( $value) : PHPUnit\Framework\Constraint\LogicalOr{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::classHasAttribute`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::classHasAttribute ( string $attributeName  ) : PHPUnit\Framework\Constraint\ClassHasAttribute
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\ClassHasAttribute` 

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
public static function classHasAttribute(string $attributeName) : PHPUnit\Framework\Constraint\ClassHasAttribute{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::classHasStaticAttribute`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::classHasStaticAttribute ( string $attributeName  ) : PHPUnit\Framework\Constraint\ClassHasStaticAttribute
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\ClassHasStaticAttribute` 

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
public static function classHasStaticAttribute(string $attributeName) : PHPUnit\Framework\Constraint\ClassHasStaticAttribute{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::objectHasAttribute`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::objectHasAttribute (  $attributeName  ) : PHPUnit\Framework\Constraint\ObjectHasAttribute
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attributeName` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\ObjectHasAttribute` 

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
public static function objectHasAttribute( $attributeName) : PHPUnit\Framework\Constraint\ObjectHasAttribute{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::identicalTo`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::identicalTo (  $value  ) : PHPUnit\Framework\Constraint\IsIdentical
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\IsIdentical` 

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
public static function identicalTo( $value) : PHPUnit\Framework\Constraint\IsIdentical{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isInstanceOf`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isInstanceOf ( string $className  ) : PHPUnit\Framework\Constraint\IsInstanceOf
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `className` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\IsInstanceOf` 

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
public static function isInstanceOf(string $className) : PHPUnit\Framework\Constraint\IsInstanceOf{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::isType`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::isType ( string $type  ) : PHPUnit\Framework\Constraint\IsType
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\IsType` 

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
public static function isType(string $type) : PHPUnit\Framework\Constraint\IsType{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::lessThan`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::lessThan (  $value  ) : PHPUnit\Framework\Constraint\LessThan
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\LessThan` 

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
public static function lessThan( $value) : PHPUnit\Framework\Constraint\LessThan{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::lessThanOrEqual`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::lessThanOrEqual (  $value  ) : PHPUnit\Framework\Constraint\LogicalOr
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\LogicalOr` 

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
public static function lessThanOrEqual( $value) : PHPUnit\Framework\Constraint\LogicalOr{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::matchesRegularExpression`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::matchesRegularExpression ( string $pattern  ) : PHPUnit\Framework\Constraint\RegularExpression
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `pattern` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\RegularExpression` 

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
public static function matchesRegularExpression(string $pattern) : PHPUnit\Framework\Constraint\RegularExpression{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::matches`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::matches ( string $string  ) : PHPUnit\Framework\Constraint\StringMatchesFormatDescription
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\StringMatchesFormatDescription` 

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
public static function matches(string $string) : PHPUnit\Framework\Constraint\StringMatchesFormatDescription{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::stringStartsWith`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::stringStartsWith (  $prefix  ) : PHPUnit\Framework\Constraint\StringStartsWith
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `prefix` | `` |  |

##### Return Values

`PHPUnit\Framework\Constraint\StringStartsWith` 

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
public static function stringStartsWith( $prefix) : PHPUnit\Framework\Constraint\StringStartsWith{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::stringContains`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::stringContains ( string $string [, bool $case = true ] ) : PHPUnit\Framework\Constraint\StringContains
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` |  |
| `case` | `bool` |  Defaults to `true`. |

##### Return Values

`PHPUnit\Framework\Constraint\StringContains` 

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
public static function stringContains(string $string, bool $case = true) : PHPUnit\Framework\Constraint\StringContains{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::stringEndsWith`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::stringEndsWith ( string $suffix  ) : PHPUnit\Framework\Constraint\StringEndsWith
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `suffix` | `string` |  |

##### Return Values

`PHPUnit\Framework\Constraint\StringEndsWith` 

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
public static function stringEndsWith(string $suffix) : PHPUnit\Framework\Constraint\StringEndsWith{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::countOf`

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::countOf ( int $count  ) : PHPUnit\Framework\Constraint\Count
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` |  |

##### Return Values

`PHPUnit\Framework\Constraint\Count` 

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
public static function countOf(int $count) : PHPUnit\Framework\Constraint\Count{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::fail`

Fails a test with the given message.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::fail ( [ string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\AssertionFailedError <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     */
public static function fail(string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::readAttribute`

Returns the value of an attribute of a class or an object.

This also works for attributes that are declared protected or private.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::getStaticAttribute`

Returns the value of a static attribute.

This also works for attributes that are declared protected or private.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::getObjectAttribute`

Returns the value of an object's attribute.

This also works for attributes that are declared protected or private.

This method has been deprecated and gets removed in version https://github.com/sebastianbergmann/phpunit/issues/3338. 
.

Does not need to be replaced.

#### `Joomla\Crypt\Tests\CryptTest::markTestIncomplete`

Mark the test as incomplete.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::markTestIncomplete ( [ string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\IncompleteTestError <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     */
public static function markTestIncomplete(string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::markTestSkipped`

Mark the test as skipped.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::markTestSkipped ( [ string $message = &#039;&#039; ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `string` |  Defaults to `''`. |

##### Return Values

`void` 

##### Errors/Exceptions

Throws PHPUnit\Framework\SkippedTestError <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Mark the test as skipped.
     *
     * @throws SkippedTestError
     */
public static function markTestSkipped(string $message = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::getCount`

Return the current assertion count.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::getCount ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Return the current assertion count.
     */
public static function getCount() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Tests\CryptTest::resetCount`

Reset the assertion counter.

##### Signature

```php
public static Joomla\Crypt\Tests\CryptTest::resetCount ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

`void` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
     * Reset the assertion counter.
     */
public static function resetCount() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Crypt\Password\Simple Class

Joomla Framework Password Crypter

This class has been deprecated and gets removed in version 2.0.
Use PHP 5.5&#039;s native password hashing API

Does not need to be replaced.

## The Joomla\Crypt\Key Class

Encryption key object for the Joomla Framework.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$private` | `string` | The private key. |
| public `$public` | `string` | The public key. |
| read-only `$type` | `string` | The key type. |    

### Methods

#### `Joomla\Crypt\Key::__construct`

Constructor.

##### Signature

```php
public Joomla\Crypt\Key::__construct ( string $type [, string $private = null [, string $public = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | The key type. |
| `private` | `string` | The private key. Defaults to `null`. |
| `public` | `string` | The public key. Defaults to `null`. |

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
 * @param   string  $type     The key type.
 * @param   string  $private  The private key.
 * @param   string  $public   The public key.
 *
 * @since   1.0
 */
public function __construct(string $type, string $private = null, string $public = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Key::__get`

Magic method to return some protected property values.

##### Signature

```php
public Joomla\Crypt\Key::__get ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the property to return. |

##### Return Values

`mixed` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to return some protected property values.
 *
 * @param   string  $name  The name of the property to return.
 *
 * @return  mixed
 *
 * @since   1.0
 */
public function __get(string $name) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Crypt\Cipher_Sodium Class

Cipher for sodium algorithm encryption, decryption and key generation.

### Methods

#### `Joomla\Crypt\Cipher_Sodium::decrypt`

Decrypt a data string.

##### Signature

```php
public Joomla\Crypt\Cipher_Sodium::decrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The encrypted string to decrypt. |
| `key` | `Joomla\Crypt\Key` | The key object to use for decryption. |

##### Return Values

`string` The decrypted data string.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Decrypt a data string.
 *
 * @param   string  $data  The encrypted string to decrypt.
 * @param   Key     $key   The key object to use for decryption.
 *
 * @return  string  The decrypted data string.
 *
 * @since   1.4.0
 * @throws  \RuntimeException
 */
public function decrypt(string $data, Joomla\Crypt\Key $key) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Cipher_Sodium::encrypt`

Encrypt a data string.

##### Signature

```php
public Joomla\Crypt\Cipher_Sodium::encrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data string to encrypt. |
| `key` | `Joomla\Crypt\Key` | The key object to use for encryption. |

##### Return Values

`string` The encrypted data string.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Encrypt a data string.
 *
 * @param   string  $data  The data string to encrypt.
 * @param   Key     $key   The key object to use for encryption.
 *
 * @return  string  The encrypted data string.
 *
 * @since   1.4.0
 * @throws  \RuntimeException
 */
public function encrypt(string $data, Joomla\Crypt\Key $key) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Cipher_Sodium::generateKey`

Generate a new encryption key object.

##### Signature

```php
public Joomla\Crypt\Cipher_Sodium::generateKey ( [ array $options = [] ] ) : Joomla\Crypt\Key
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Key generation options. Defaults to `[]`. |

##### Return Values

`Joomla\Crypt\Key` 

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a new encryption key object.
 *
 * @param   array  $options  Key generation options.
 *
 * @return  Key
 *
 * @since   1.4.0
 * @throws  RuntimeException
 */
public function generateKey(array $options = []) : Joomla\Crypt\Key{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Cipher_Sodium::setNonce`

Set the nonce to use for encrypting/decrypting messages

##### Signature

```php
public Joomla\Crypt\Cipher_Sodium::setNonce ( string $nonce  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `nonce` | `string` | The message nonce |

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
 * Set the nonce to use for encrypting/decrypting messages
 *
 * @param   string  $nonce  The message nonce
 *
 * @return  void
 *
 * @since   1.4.0
 */
public function setNonce(string $nonce) : void{
    // @todo Add adapter code.
}
```

## The Joomla\Crypt\Cipher_Blowfish Class

Cipher class for Blowfish encryption, decryption and key generation.

This class has been deprecated and gets removed in version 2.0.
Use \Joomla\Crypt\Cipher_Crypto instead

Does not need to be replaced.

## The Joomla\Crypt\Cipher_Simple Class

Cipher class for Simple encryption, decryption and key generation.

This class has been deprecated and gets removed in version 2.0.
Use \Joomla\Crypt\Cipher_Crypto instead

Does not need to be replaced.

## The Joomla\Crypt\Cipher_Mcrypt Class

Cipher class for mcrypt algorithm encryption, decryption and key generation.

This class has been deprecated and gets removed in version 2.0.
Use \Joomla\Crypt\Cipher_Crypto instead

Does not need to be replaced.

## The Joomla\Crypt\Cipher_Rijndael256 Class

Cipher class for Rijndael 256 encryption, decryption and key generation.

This class has been deprecated and gets removed in version 2.0.
Use \Joomla\Crypt\Cipher_Crypto instead

Does not need to be replaced.

## The Joomla\Crypt\Cipher_Crypto Class

Joomla cipher for encryption, decryption and key generation via the php-encryption library.

### Methods

#### `Joomla\Crypt\Cipher_Crypto::decrypt`

Decrypt a data string.

##### Signature

```php
public Joomla\Crypt\Cipher_Crypto::decrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The encrypted string to decrypt. |
| `key` | `Joomla\Crypt\Key` | The key object to use for decryption. |

##### Return Values

`string` The decrypted data string.

##### Errors/Exceptions

Throws InvalidArgumentException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Decrypt a data string.
 *
 * @param   string  $data  The encrypted string to decrypt.
 * @param   Key     $key   The key object to use for decryption.
 *
 * @return  string  The decrypted data string.
 *
 * @since   1.3.0
 * @throws  \InvalidArgumentException
 * @throws  \RuntimeException
 */
public function decrypt(string $data, Joomla\Crypt\Key $key) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Cipher_Crypto::encrypt`

Encrypt a data string.

##### Signature

```php
public Joomla\Crypt\Cipher_Crypto::encrypt ( string $data, Joomla\Crypt\Key $key  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data string to encrypt. |
| `key` | `Joomla\Crypt\Key` | The key object to use for encryption. |

##### Return Values

`string` The encrypted data string.

##### Errors/Exceptions

Throws InvalidArgumentException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Encrypt a data string.
 *
 * @param   string  $data  The data string to encrypt.
 * @param   Key     $key   The key object to use for encryption.
 *
 * @return  string  The encrypted data string.
 *
 * @since   1.3.0
 * @throws  \InvalidArgumentException
 * @throws  \RuntimeException
 */
public function encrypt(string $data, Joomla\Crypt\Key $key) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Crypt\Cipher_Crypto::generateKey`

Generate a new encryption key object.

##### Signature

```php
public Joomla\Crypt\Cipher_Crypto::generateKey ( [ array $options = [] ] ) : Joomla\Crypt\Key
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Key generation options. Defaults to `[]`. |

##### Return Values

`Joomla\Crypt\Key` 

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generate a new encryption key object.
 *
 * @param   array  $options  Key generation options.
 *
 * @return  Key
 *
 * @since   1.3.0
 * @throws  \RuntimeException
 */
public function generateKey(array $options = []) : Joomla\Crypt\Key{
    // @todo Add adapter code.
}
```

## The Joomla\Crypt\Cipher_3DES Class

Cipher class for Triple DES encryption, decryption and key generation.

This class has been deprecated and gets removed in version 2.0.
Use \Joomla\Crypt\Cipher_Crypto instead

Does not need to be replaced.
