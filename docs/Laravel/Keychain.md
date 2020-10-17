# Joomla/Keychain Package version 1.2.0

Joomla Keychain Package

## The Joomla\Keychain\Keychain Class

Keychain Class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$method` | `string` | Use for encryption. |
| public `$iv` | `string` | Initialisation vector for encryption method. |
| protected `$data` | `stdClass` | Registry Object |
| protected `$initialized` | `bool` | Flag if the Registry data object has been initialized |
| protected static `$instances` | `Joomla\Keychain\Registry[]` | Registry instances container. |
| public `$separator` | `string` | Path separator |    
### Methods

#### `Joomla\Keychain\Keychain::createPassphraseFile`

Create a passphrase file

##### Signature

```php
public Joomla\Keychain\Keychain::createPassphraseFile ( string $passphrase, string $passphraseFile, string $privateKeyFile, string $privateKeyPassphrase  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `passphrase` | `string` | The passphrase to store in the passphrase file. |
| `passphraseFile` | `string` | Path to the passphrase file to create. |
| `privateKeyFile` | `string` | Path to the private key file to encrypt the passphrase file. |
| `privateKeyPassphrase` | `string` | The passphrase for the private key. |

##### Return Values

`bool` Result of writing the passphrase file to disk.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a passphrase file
 *
 * @param   string  $passphrase            The passphrase to store in the passphrase file.
 * @param   string  $passphraseFile        Path to the passphrase file to create.
 * @param   string  $privateKeyFile        Path to the private key file to encrypt the passphrase file.
 * @param   string  $privateKeyPassphrase  The passphrase for the private key.
 *
 * @return  boolean  Result of writing the passphrase file to disk.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function createPassphraseFile(string $passphrase, string $passphraseFile, string $privateKeyFile, string $privateKeyPassphrase) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::deleteValue`

Delete a registry value (very simple method)

This method has been deprecated and gets removed in version 2.0. 
Use `Registry::remove()` instead..

Does not need to be replaced.

#### `Joomla\Keychain\Keychain::loadKeychain`

Load a keychain file into this object.

##### Signature

```php
public Joomla\Keychain\Keychain::loadKeychain ( string $keychainFile, string $passphraseFile, string $publicKeyFile  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `keychainFile` | `string` | Path to the keychain file. |
| `passphraseFile` | `string` | The path to the passphrase file to decript the keychain. |
| `publicKeyFile` | `string` | The file containing the public key to decrypt the passphrase file. |

##### Return Values

`bool` Result of loading the object.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Load a keychain file into this object.
 *
 * @param   string  $keychainFile    Path to the keychain file.
 * @param   string  $passphraseFile  The path to the passphrase file to decript the keychain.
 * @param   string  $publicKeyFile   The file containing the public key to decrypt the passphrase file.
 *
 * @return  boolean  Result of loading the object.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function loadKeychain(string $keychainFile, string $passphraseFile, string $publicKeyFile) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::saveKeychain`

Save this keychain to a file.

##### Signature

```php
public Joomla\Keychain\Keychain::saveKeychain ( string $keychainFile, string $passphraseFile, string $publicKeyFile  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `keychainFile` | `string` | The path to the keychain file. |
| `passphraseFile` | `string` | The path to the passphrase file to encrypt the keychain. |
| `publicKeyFile` | `string` | The file containing the public key to decrypt the passphrase file. |

##### Return Values

`bool` Result of storing the file.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Save this keychain to a file.
 *
 * @param   string  $keychainFile    The path to the keychain file.
 * @param   string  $passphraseFile  The path to the passphrase file to encrypt the keychain.
 * @param   string  $publicKeyFile   The file containing the public key to decrypt the passphrase file.
 *
 * @return  boolean  Result of storing the file.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function saveKeychain(string $keychainFile, string $passphraseFile, string $publicKeyFile) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::getPassphraseFromFile`

Get the passphrase for this keychain

##### Signature

```php
protected Joomla\Keychain\Keychain::getPassphraseFromFile ( string $passphraseFile, string $publicKeyFile  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `passphraseFile` | `string` | The file containing the passphrase to encrypt and decrypt. |
| `publicKeyFile` | `string` | The file containing the public key to decrypt the passphrase file. |

##### Return Values

`string` The passphrase in from passphraseFile

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the passphrase for this keychain
 *
 * @param   string  $passphraseFile  The file containing the passphrase to encrypt and decrypt.
 * @param   string  $publicKeyFile   The file containing the public key to decrypt the passphrase file.
 *
 * @return  string  The passphrase in from passphraseFile
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function getPassphraseFromFile(string $passphraseFile, string $publicKeyFile) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::__construct`

Constructor

##### Signature

```php
public Joomla\Keychain\Keychain::__construct ( [ mixed $data = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `mixed` | The data to bind to the new Registry object. Defaults to `null`. |

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
 * @param   mixed  $data  The data to bind to the new Registry object.
 *
 * @since   1.0
 */
public function __construct(mixed $data = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::__clone`

Clone the registry object.

##### Signature

```php
public Joomla\Keychain\Keychain::__clone ( void ) : void
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
 * Clone the registry object.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __clone() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::__toString`

Render this object as a string using default args of toString method.

##### Signature

```php
public Joomla\Keychain\Keychain::__toString ( void ) : string
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
 * Render this object as a string using default args of toString method.
 *
 * @return  string
 *
 * @since   1.0
 */
public function __toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::count`

Count elements of the data object

##### Signature

```php
public Joomla\Keychain\Keychain::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The custom count as an integer.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count elements of the data object
 *
 * @return  integer  The custom count as an integer.
 *
 * @link    https://www.php.net/manual/en/countable.count.php
 * @since   1.3.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::jsonSerialize`

Implementation for the JsonSerializable interface.

Allows us to pass Registry objects to json_encode.

##### Signature

```php
public Joomla\Keychain\Keychain::jsonSerialize ( void ) : object
```
##### Parameters

This method has no parameters.

##### Return Values

`object` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Implementation for the JsonSerializable interface.
 * Allows us to pass Registry objects to json_encode.
 *
 * @return  object
 *
 * @since   1.0
 * @note    The interface is only present in PHP 5.4 and up.
 */
public function jsonSerialize() : object{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::def`

Sets a default value if not already assigned.

##### Signature

```php
public Joomla\Keychain\Keychain::def ( string $key [, mixed $default = &#039;&#039; ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the parameter. |
| `default` | `mixed` | An optional value for the parameter. Defaults to `''`. |

##### Return Values

`mixed` The value set, or the default if the value was not previously set (or null).

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets a default value if not already assigned.
 *
 * @param   string  $key      The name of the parameter.
 * @param   mixed   $default  An optional value for the parameter.
 *
 * @return  mixed  The value set, or the default if the value was not previously set (or null).
 *
 * @since   1.0
 */
public function def(string $key, mixed $default = '') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::exists`

Check if a registry path exists.

##### Signature

```php
public Joomla\Keychain\Keychain::exists ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor) |

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
 * Check if a registry path exists.
 *
 * @param   string  $path  Registry path (e.g. joomla.content.showauthor)
 *
 * @return  boolean
 *
 * @since   1.0
 */
public function exists(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::get`

Get a registry value.

##### Signature

```php
public Joomla\Keychain\Keychain::get ( string $path [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor) |
| `default` | `mixed` | Optional default value, returned if the internal value is null. Defaults to `null`. |

##### Return Values

`mixed` Value of entry or null

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a registry value.
 *
 * @param   string  $path     Registry path (e.g. joomla.content.showauthor)
 * @param   mixed   $default  Optional default value, returned if the internal value is null.
 *
 * @return  mixed  Value of entry or null
 *
 * @since   1.0
 */
public function get(string $path, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::getInstance`

Returns a reference to a global Registry object, only creating it

if it doesn't already exist.

This method must be invoked as:
```php
$registry = Registry::getInstance($id);
```

This method has been deprecated and gets removed in version 2.0. 
Instantiate a new Registry instance instead.

Does not need to be replaced.

#### `Joomla\Keychain\Keychain::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be accessed via a foreach statement.

##### Signature

```php
public Joomla\Keychain\Keychain::getIterator ( void ) : ArrayIterator
```
##### Parameters

This method has no parameters.

##### Return Values

`ArrayIterator` This object represented as an ArrayIterator.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets this object represented as an ArrayIterator.
 *
 * This allows the data properties to be accessed via a foreach statement.
 *
 * @return  \ArrayIterator  This object represented as an ArrayIterator.
 *
 * @see     IteratorAggregate::getIterator()
 * @since   1.3.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::loadArray`

Load an associative array of values into the default namespace

##### Signature

```php
public Joomla\Keychain\Keychain::loadArray ( array $array [, bool $flattened = false [, string $separator = null ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | Associative array of value to load |
| `flattened` | `bool` | Load from a one-dimensional array Defaults to `false`. |
| `separator` | `string` | The key separator Defaults to `null`. |

##### Return Values

`Joomla\Registry\Registry` Return this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Load an associative array of values into the default namespace
 *
 * @param   array    $array      Associative array of value to load
 * @param   boolean  $flattened  Load from a one-dimensional array
 * @param   string   $separator  The key separator
 *
 * @return  Registry  Return this object to support chaining.
 *
 * @since   1.0
 */
public function loadArray(array $array, bool $flattened = false, string $separator = null) : Joomla\Registry\Registry{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::loadObject`

Load the public variables of the object into the default namespace.

##### Signature

```php
public Joomla\Keychain\Keychain::loadObject ( object $object  ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | The object holding the publics to load |

##### Return Values

`Joomla\Registry\Registry` Return this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Load the public variables of the object into the default namespace.
 *
 * @param   object  $object  The object holding the publics to load
 *
 * @return  Registry  Return this object to support chaining.
 *
 * @since   1.0
 */
public function loadObject(object $object) : Joomla\Registry\Registry{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::loadFile`

Load the contents of a file into the registry

##### Signature

```php
public Joomla\Keychain\Keychain::loadFile ( string $file [, string $format = &#039;JSON&#039; [, array $options = [] ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` | Path to file to load |
| `format` | `string` | Format of the file [optional: defaults to JSON] Defaults to `'JSON'`. |
| `options` | `array` | Options used by the formatter Defaults to `[]`. |

##### Return Values

`Joomla\Registry\Registry` Return this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Load the contents of a file into the registry
 *
 * @param   string  $file     Path to file to load
 * @param   string  $format   Format of the file [optional: defaults to JSON]
 * @param   array   $options  Options used by the formatter
 *
 * @return  Registry  Return this object to support chaining.
 *
 * @since   1.0
 */
public function loadFile(string $file, string $format = 'JSON', array $options = []) : Joomla\Registry\Registry{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::loadString`

Load a string into the registry

##### Signature

```php
public Joomla\Keychain\Keychain::loadString ( string $data [, string $format = &#039;JSON&#039; [, array $options = [] ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | String to load into the registry |
| `format` | `string` | Format of the string Defaults to `'JSON'`. |
| `options` | `array` | Options used by the formatter Defaults to `[]`. |

##### Return Values

`Joomla\Registry\Registry` Return this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Load a string into the registry
 *
 * @param   string  $data     String to load into the registry
 * @param   string  $format   Format of the string
 * @param   array   $options  Options used by the formatter
 *
 * @return  Registry  Return this object to support chaining.
 *
 * @since   1.0
 */
public function loadString(string $data, string $format = 'JSON', array $options = []) : Joomla\Registry\Registry{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::merge`

Merge a Registry object into this one

##### Signature

```php
public Joomla\Keychain\Keychain::merge ( Joomla\Registry\Registry $source [, bool $recursive = false ] ) : Joomla\Registry\Registry|false
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `Joomla\Registry\Registry` | Source Registry object to merge. |
| `recursive` | `bool` | True to support recursive merge the children values. Defaults to `false`. |

##### Return Values

`Joomla\Registry\Registry` or `false` Return this object to support chaining or false if $source is not an instance of Registry.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Merge a Registry object into this one
 *
 * @param   Registry  $source     Source Registry object to merge.
 * @param   boolean   $recursive  True to support recursive merge the children values.
 *
 * @return  Registry|false  Return this object to support chaining or false if $source is not an instance of Registry.
 *
 * @since   1.0
 */
public function merge(Joomla\Registry\Registry $source, bool $recursive = false) : Joomla\Registry\Registry|false{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::extract`

Extract a sub-registry from path

##### Signature

```php
public Joomla\Keychain\Keychain::extract ( string $path  ) : Joomla\Registry\Registry|null
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor) |

##### Return Values

`Joomla\Registry\Registry` or `null` Registry object if data is present

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a sub-registry from path
 *
 * @param   string  $path  Registry path (e.g. joomla.content.showauthor)
 *
 * @return  Registry|null  Registry object if data is present
 *
 * @since   1.2.0
 */
public function extract(string $path) : Joomla\Registry\Registry|null{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::offsetExists`

Checks whether an offset exists in the iterator.

##### Signature

```php
public Joomla\Keychain\Keychain::offsetExists ( mixed $offset  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The array offset. |

##### Return Values

`bool` True if the offset exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks whether an offset exists in the iterator.
 *
 * @param   mixed  $offset  The array offset.
 *
 * @return  boolean  True if the offset exists, false otherwise.
 *
 * @since   1.0
 */
public function offsetExists(mixed $offset) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::offsetGet`

Gets an offset in the iterator.

##### Signature

```php
public Joomla\Keychain\Keychain::offsetGet ( mixed $offset  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The array offset. |

##### Return Values

`mixed` The array value if it exists, null otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an offset in the iterator.
 *
 * @param   mixed  $offset  The array offset.
 *
 * @return  mixed  The array value if it exists, null otherwise.
 *
 * @since   1.0
 */
public function offsetGet(mixed $offset) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::offsetSet`

Sets an offset in the iterator.

##### Signature

```php
public Joomla\Keychain\Keychain::offsetSet ( mixed $offset, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The array offset. |
| `value` | `mixed` | The array value. |

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
 * Sets an offset in the iterator.
 *
 * @param   mixed  $offset  The array offset.
 * @param   mixed  $value   The array value.
 *
 * @return  void
 *
 * @since   1.0
 */
public function offsetSet(mixed $offset, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::offsetUnset`

Unsets an offset in the iterator.

##### Signature

```php
public Joomla\Keychain\Keychain::offsetUnset ( mixed $offset  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The array offset. |

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
 * Unsets an offset in the iterator.
 *
 * @param   mixed  $offset  The array offset.
 *
 * @return  void
 *
 * @since   1.0
 */
public function offsetUnset(mixed $offset) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::set`

Set a registry value.

##### Signature

```php
public Joomla\Keychain\Keychain::set ( string $path, mixed $value [, string $separator = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry Path (e.g. joomla.content.showauthor) |
| `value` | `mixed` | Value of entry |
| `separator` | `string` | The key separator Defaults to `null`. |

##### Return Values

`mixed` The value of the that has been set.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set a registry value.
 *
 * @param   string  $path       Registry Path (e.g. joomla.content.showauthor)
 * @param   mixed   $value      Value of entry
 * @param   string  $separator  The key separator
 *
 * @return  mixed  The value of the that has been set.
 *
 * @since   1.0
 */
public function set(string $path, mixed $value, string $separator = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::append`

Append value to a path in registry

##### Signature

```php
public Joomla\Keychain\Keychain::append ( string $path, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Parent registry Path (e.g. joomla.content.showauthor) |
| `value` | `mixed` | Value of entry |

##### Return Values

`mixed` The value of the that has been set.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Append value to a path in registry
 *
 * @param   string  $path   Parent registry Path (e.g. joomla.content.showauthor)
 * @param   mixed   $value  Value of entry
 *
 * @return  mixed  The value of the that has been set.
 *
 * @since   1.4.0
 */
public function append(string $path, mixed $value) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::remove`

Delete a registry value

##### Signature

```php
public Joomla\Keychain\Keychain::remove ( string $path  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry Path (e.g. joomla.content.showauthor) |

##### Return Values

`mixed` The value of the removed node or null if not set

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Delete a registry value
 *
 * @param   string  $path  Registry Path (e.g. joomla.content.showauthor)
 *
 * @return  mixed  The value of the removed node or null if not set
 *
 * @since   1.6.0
 */
public function remove(string $path) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::toArray`

Transforms a namespace to an array

##### Signature

```php
public Joomla\Keychain\Keychain::toArray ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` An associative array holding the namespace data

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Transforms a namespace to an array
 *
 * @return  array  An associative array holding the namespace data
 *
 * @since   1.0
 */
public function toArray() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::toObject`

Transforms a namespace to an object

##### Signature

```php
public Joomla\Keychain\Keychain::toObject ( void ) : object
```
##### Parameters

This method has no parameters.

##### Return Values

`object` An an object holding the namespace data

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Transforms a namespace to an object
 *
 * @return  object   An an object holding the namespace data
 *
 * @since   1.0
 */
public function toObject() : object{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::toString`

Get a namespace in a given string format

##### Signature

```php
public Joomla\Keychain\Keychain::toString ( [ string $format = &#039;JSON&#039; [, mixed $options = [] ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `format` | `string` | Format to return the string in Defaults to `'JSON'`. |
| `options` | `mixed` | Parameters used by the formatter, see formatters for more info Defaults to `[]`. |

##### Return Values

`string` Namespace in string format

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a namespace in a given string format
 *
 * @param   string  $format   Format to return the string in
 * @param   mixed   $options  Parameters used by the formatter, see formatters for more info
 *
 * @return  string   Namespace in string format
 *
 * @since   1.0
 */
public function toString(string $format = 'JSON', mixed $options = []) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::bindData`

Recursively bind data to a parent object.

##### Signature

```php
protected Joomla\Keychain\Keychain::bindData ( object $parent, mixed $data [, bool $recursive = true [, bool $allowNull = true ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `parent` | `object` | The parent object on which to attach the data values. |
| `data` | `mixed` | An array or object of data to bind to the parent object. |
| `recursive` | `bool` | True to support recursive bindData. Defaults to `true`. |
| `allowNull` | `bool` | True to allow null values. Defaults to `true`. |

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
 * Recursively bind data to a parent object.
 *
 * @param   object   $parent     The parent object on which to attach the data values.
 * @param   mixed    $data       An array or object of data to bind to the parent object.
 * @param   boolean  $recursive  True to support recursive bindData.
 * @param   boolean  $allowNull  True to allow null values.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function bindData(object $parent, mixed $data, bool $recursive = true, bool $allowNull = true) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::asArray`

Recursively convert an object of data to an array.

##### Signature

```php
protected Joomla\Keychain\Keychain::asArray ( object $data  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `object` | An object of data to return as an array. |

##### Return Values

`array` Array representation of the input object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Recursively convert an object of data to an array.
 *
 * @param   object  $data  An object of data to return as an array.
 *
 * @return  array  Array representation of the input object.
 *
 * @since   1.0
 */
protected function asArray(object $data) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::flatten`

Dump to one dimension array.

##### Signature

```php
public Joomla\Keychain\Keychain::flatten ( [ string $separator = null ] ) : string[]
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `separator` | `string` | The key separator. Defaults to `null`. |

##### Return Values

`string[]` Dumped array.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dump to one dimension array.
 *
 * @param   string  $separator  The key separator.
 *
 * @return  string[]  Dumped array.
 *
 * @since   1.3.0
 */
public function flatten(string $separator = null) : string[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Keychain\Keychain::toFlatten`

Recursively convert data to one dimension array.

##### Signature

```php
protected Joomla\Keychain\Keychain::toFlatten ( [ string $separator = null [, array|object $data = null [, array $array = [] [, string $prefix = &#039;&#039; ]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `separator` | `string` | The key separator. Defaults to `null`. |
| `data` | `array` or `object` | Data source of this scope. Defaults to `null`. |
| `array` | `array` | The result array, it is passed by reference. Defaults to `[]`. |
| `prefix` | `string` | Last level key prefix. Defaults to `''`. |

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
 * Recursively convert data to one dimension array.
 *
 * @param   string        $separator  The key separator.
 * @param   array|object  $data       Data source of this scope.
 * @param   array         $array      The result array, it is passed by reference.
 * @param   string        $prefix     Last level key prefix.
 *
 * @return  void
 *
 * @since   1.3.0
 */
protected function toFlatten(string $separator = null,  $data = null, array $array = [], string $prefix = '') : void{
    // @todo Add adapter code.
}
```
