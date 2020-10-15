# Joomla/Registry Package version 1.6.3

Joomla Registry Package

## Interfaces

### The Joomla\Registry\FormatInterface Interface

Interface defining a format object

#### `Joomla\Registry\FormatInterface::objectToString`

Converts an object into a formatted string.

##### Signature

```php
abstract public Joomla\Registry\FormatInterface::objectToString ( object $object [, array $options ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data Source Object. |
| `options` | `array` | An array of options for the formatter. Defaults to `null`. |

##### Return Values

`string` Formatted string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into a formatted string.
 *
 * @param   object  $object   Data Source Object.
 * @param   array   $options  An array of options for the formatter.
 *
 * @return  string  Formatted string.
 *
 * @since   1.5.0
 */ 
abstract public objectToString(object $object, array $options = null) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\FormatInterface::stringToObject`

Converts a formatted string into an object.

##### Signature

```php
abstract public Joomla\Registry\FormatInterface::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | Formatted string. |
| `options` | `array` | An array of options for the formatter. Defaults to `[]`. |

##### Return Values

`object` Data Object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts a formatted string into an object.
 *
 * @param   string  $data     Formatted string
 * @param   array   $options  An array of options for the formatter.
 *
 * @return  object  Data Object
 *
 * @since   1.5.0
 */ 
abstract public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```

## Classes

### The Joomla\Registry\Factory Class

Factory class to fetch Registry objects

#### `Joomla\Registry\Factory::getFormat`

Returns an AbstractRegistryFormat object, only creating it if it doesn't already exist.

##### Signature

```php
public static Joomla\Registry\Factory::getFormat ( string $type [, array $options ] ) : Joomla\Registry\FormatInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | The format to load. |
| `options` | `array` | Additional options to configure the object. Defaults to `[]`. |

##### Return Values

`Joomla\Registry\FormatInterface` Registry format handler

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns an AbstractRegistryFormat object, only creating it if it doesn't already exist.
 *
 * @param   string  $type     The format to load
 * @param   array   $options  Additional options to configure the object
 *
 * @return  FormatInterface  Registry format handler
 *
 * @since   1.5.0
 * @throws  \InvalidArgumentException
 */ 
public static getFormat(string $type, array $options = []) : Joomla\Registry\FormatInterface
{
    // @todo Add adapter code.
}
```
### The Joomla\Registry\Registry Class

Registry class

#### `Joomla\Registry\Registry::__construct`

Constructor

##### Signature

```php
public Joomla\Registry\Registry::__construct ( [ mixed $data ] ) : void
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
public __construct(mixed $data = null) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::__clone`

Magic function to clone the registry object.

##### Signature

```php
public Joomla\Registry\Registry::__clone ( void ) : void
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
 * Magic function to clone the registry object.
 *
 * @return  void
 *
 * @since   1.0
 */ 
public __clone() : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::__toString`

Magic function to render this object as a string using default args of toString method.

##### Signature

```php
public Joomla\Registry\Registry::__toString ( void ) : string
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
 * Magic function to render this object as a string using default args of toString method.
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
#### `Joomla\Registry\Registry::count`

Count elements of the data object

##### Signature

```php
public Joomla\Registry\Registry::count ( void ) : int
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
public count() : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::jsonSerialize`

Implementation for the JsonSerializable interface. 
Allows us to pass Registry objects to json_encode.

##### Signature

```php
public Joomla\Registry\Registry::jsonSerialize ( void ) : object
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
public jsonSerialize() : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::def`

Sets a default value if not already assigned.

##### Signature

```php
public Joomla\Registry\Registry::def ( string $key [, mixed $default ] ) : mixed
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
public def(string $key, mixed $default = '') : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::exists`

Check if a registry path exists.

##### Signature

```php
public Joomla\Registry\Registry::exists ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor). |

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
public exists(string $path) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::get`

Get a registry value.

##### Signature

```php
public Joomla\Registry\Registry::get ( string $path [, mixed $default ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor). |
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
public get(string $path, mixed $default = null) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::getInstance`

Returns a reference to a global Registry object, only creating it 
if it doesn't already exist.

This method must be invoked as: 
```php
$registry = Registry::getInstance($id);
```

##### Signature

```php
public static Joomla\Registry\Registry::getInstance ( string $id  ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `id` | `string` | An ID for the registry instance. |

##### Return Values

`Joomla\Registry\Registry` The Registry object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a reference to a global Registry object, only creating it
 * if it doesn't already exist.
 *
 * This method must be invoked as:
 * <pre>$registry = Registry::getInstance($id);</pre>
 *
 * @param   string  $id  An ID for the registry instance
 *
 * @return  Registry  The Registry object.
 *
 * @since   1.0
 * @deprecated  2.0  Instantiate a new Registry instance instead
 */ 
public static getInstance(string $id) : Joomla\Registry\Registry
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be accessed via a foreach statement.

##### Signature

```php
public Joomla\Registry\Registry::getIterator ( void ) : ArrayIterator
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
public getIterator() : ArrayIterator
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::loadArray`

Load an associative array of values into the default namespace

##### Signature

```php
public Joomla\Registry\Registry::loadArray ( array $array [, bool $flattened [, string $separator ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | Associative array of value to load. |
| `flattened` | `bool` | Load from a one-dimensional array. Defaults to `false`. |
| `separator` | `string` | The key separator. Defaults to `null`. |

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
public loadArray(array $array, bool $flattened = false, string $separator = null) : Joomla\Registry\Registry
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::loadObject`

Load the public variables of the object into the default namespace.

##### Signature

```php
public Joomla\Registry\Registry::loadObject ( object $object  ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | The object holding the publics to load. |

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
public loadObject(object $object) : Joomla\Registry\Registry
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::loadFile`

Load the contents of a file into the registry

##### Signature

```php
public Joomla\Registry\Registry::loadFile ( string $file [, string $format [, array $options ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` | Path to file to load. |
| `format` | `string` | Format of the file [optional: defaults to JSON]. Defaults to `'JSON'`. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

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
public loadFile(string $file, string $format = 'JSON', array $options = []) : Joomla\Registry\Registry
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::loadString`

Load a string into the registry

##### Signature

```php
public Joomla\Registry\Registry::loadString ( string $data [, string $format [, array $options ]] ) : Joomla\Registry\Registry
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | String to load into the registry. |
| `format` | `string` | Format of the string. Defaults to `'JSON'`. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

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
public loadString(string $data, string $format = 'JSON', array $options = []) : Joomla\Registry\Registry
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::merge`

Merge a Registry object into this one

##### Signature

```php
public Joomla\Registry\Registry::merge ( Joomla\Registry\Registry $source [, bool $recursive ] ) : Joomla\Registry\Registry|false
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
public merge(Joomla\Registry\Registry $source, bool $recursive = false) : Joomla\Registry\Registry|false
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::extract`

Extract a sub-registry from path

##### Signature

```php
public Joomla\Registry\Registry::extract ( string $path  ) : Joomla\Registry\Registry|null
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry path (e.g. joomla.content.showauthor). |

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
public extract(string $path) : Joomla\Registry\Registry|null
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::offsetExists`

Checks whether an offset exists in the iterator.

##### Signature

```php
public Joomla\Registry\Registry::offsetExists ( mixed $offset  ) : bool
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
public offsetExists(mixed $offset) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::offsetGet`

Gets an offset in the iterator.

##### Signature

```php
public Joomla\Registry\Registry::offsetGet ( mixed $offset  ) : mixed
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
public offsetGet(mixed $offset) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::offsetSet`

Sets an offset in the iterator.

##### Signature

```php
public Joomla\Registry\Registry::offsetSet ( mixed $offset, mixed $value  ) : void
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
public offsetSet(mixed $offset, mixed $value) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::offsetUnset`

Unsets an offset in the iterator.

##### Signature

```php
public Joomla\Registry\Registry::offsetUnset ( mixed $offset  ) : void
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
public offsetUnset(mixed $offset) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::set`

Set a registry value.

##### Signature

```php
public Joomla\Registry\Registry::set ( string $path, mixed $value [, string $separator ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry Path (e.g. joomla.content.showauthor). |
| `value` | `mixed` | Value of entry. |
| `separator` | `string` | The key separator. Defaults to `null`. |

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
public set(string $path, mixed $value, string $separator = null) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::append`

Append value to a path in registry

##### Signature

```php
public Joomla\Registry\Registry::append ( string $path, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Parent registry Path (e.g. joomla.content.showauthor). |
| `value` | `mixed` | Value of entry. |

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
public append(string $path, mixed $value) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::remove`

Delete a registry value

##### Signature

```php
public Joomla\Registry\Registry::remove ( string $path  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Registry Path (e.g. joomla.content.showauthor). |

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
public remove(string $path) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::toArray`

Transforms a namespace to an array

##### Signature

```php
public Joomla\Registry\Registry::toArray ( void ) : array
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
public toArray() : array
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::toObject`

Transforms a namespace to an object

##### Signature

```php
public Joomla\Registry\Registry::toObject ( void ) : object
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
public toObject() : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::toString`

Get a namespace in a given string format

##### Signature

```php
public Joomla\Registry\Registry::toString ( [ string $format [, mixed $options ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `format` | `string` | Format to return the string in. Defaults to `'JSON'`. |
| `options` | `mixed` | Parameters used by the formatter, see formatters for more info. Defaults to `[]`. |

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
public toString(string $format = 'JSON', mixed $options = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::bindData`

Recursively bind data to a parent object.

##### Signature

```php
protected Joomla\Registry\Registry::bindData ( object $parent, mixed $data [, bool $recursive [, bool $allowNull ]] ) : void
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
protected bindData(object $parent, mixed $data, bool $recursive = true, bool $allowNull = true) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::asArray`

Recursively convert an object of data to an array.

##### Signature

```php
protected Joomla\Registry\Registry::asArray ( object $data  ) : array
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
protected asArray(object $data) : array
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::flatten`

Dump to one dimension array.

##### Signature

```php
public Joomla\Registry\Registry::flatten ( [ string $separator ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `separator` | `string` | The key separator. Defaults to `null`. |

##### Return Values

`string` Dumped array.

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
public flatten(string $separator = null) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Registry::toFlatten`

Recursively convert data to one dimension array.

##### Signature

```php
protected Joomla\Registry\Registry::toFlatten ( [ string $separator [, array|object $data [, array $array [, string $prefix ]]]] ) : void
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
protected toFlatten(string $separator = null, array|object $data = null, array $array = [], string $prefix = '') : void
{
    // @todo Add adapter code.
}
```
### The Joomla\Registry\AbstractRegistryFormat Class

Abstract Format for Registry

#### `Joomla\Registry\AbstractRegistryFormat::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

##### Signature

```php
public static Joomla\Registry\AbstractRegistryFormat::getInstance ( string $type [, array $options ] ) : Joomla\Registry\AbstractRegistryFormat
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | The format to load. |
| `options` | `array` | Additional options to configure the object. Defaults to `[]`. |

##### Return Values

`Joomla\Registry\AbstractRegistryFormat` Registry format handler

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a reference to a Format object, only creating it
 * if it doesn't already exist.
 *
 * @param   string  $type     The format to load
 * @param   array   $options  Additional options to configure the object
 *
 * @return  AbstractRegistryFormat  Registry format handler
 *
 * @deprecated  2.0  Use Factory::getFormat() instead
 * @since   1.0
 * @throws  \InvalidArgumentException
 */ 
public static getInstance(string $type, array $options = []) : Joomla\Registry\AbstractRegistryFormat
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\AbstractRegistryFormat::objectToString`

Converts an object into a formatted string.

This method is inherited from `Joomla\Registry\FormatInterface`.

#### `Joomla\Registry\AbstractRegistryFormat::stringToObject`

Converts a formatted string into an object.

This method is inherited from `Joomla\Registry\FormatInterface`.

### The Joomla\Registry\Format\Php Class

PHP class format handler for Registry

#### `Joomla\Registry\Format\Php::objectToString`

Converts an object into a php class string. 
- NOTE: Only one depth level is supported.

##### Signature

```php
public Joomla\Registry\Format\Php::objectToString ( object $object [, array $params ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data Source Object. |
| `params` | `array` | Parameters used by the formatter. Defaults to `[]`. |

##### Return Values

`string` Config class formatted string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into a php class string.
 * - NOTE: Only one depth level is supported.
 *
 * @param   object  $object  Data Source Object
 * @param   array   $params  Parameters used by the formatter
 *
 * @return  string  Config class formatted string
 *
 * @since   1.0
 */ 
public objectToString(object $object, array $params = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Php::stringToObject`

Parse a PHP class formatted string and convert it into an object.

##### Signature

```php
public Joomla\Registry\Format\Php::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | PHP Class formatted string to convert. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`object` Data object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a PHP class formatted string and convert it into an object.
 *
 * @param   string  $data     PHP Class formatted string to convert.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  object   Data object.
 *
 * @since   1.0
 */ 
public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Php::getArrayString`

Get an array as an exported string.

##### Signature

```php
protected Joomla\Registry\Format\Php::getArrayString ( array $a  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `a` | `array` | The array to get as a string. |

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
 * Get an array as an exported string.
 *
 * @param   array  $a  The array to get as a string.
 *
 * @return  string
 *
 * @since   1.0
 */ 
protected getArrayString(array $a) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Php::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

This method is inherited from `Joomla\Registry\AbstractRegistryFormat`.

### The Joomla\Registry\Format\Xml Class

XML format handler for Registry.

#### `Joomla\Registry\Format\Xml::objectToString`

Converts an object into an XML formatted string. 
-	If more than two levels of nested groups are necessary, since INI is not 
useful, XML or another format should be used.

##### Signature

```php
public Joomla\Registry\Format\Xml::objectToString ( object $object [, array $options ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data source object. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`string` XML formatted string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into an XML formatted string.
 * -If more than two levels of nested groups are necessary, since INI is not
 * useful, XML or another format should be used.
 *
 * @param   object  $object   Data source object.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  string  XML formatted string.
 *
 * @since   1.0
 */ 
public objectToString(object $object, array $options = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Xml::stringToObject`

Parse a XML formatted string and convert it into an object.

##### Signature

```php
public Joomla\Registry\Format\Xml::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | XML formatted string to convert. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`object` Data object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a XML formatted string and convert it into an object.
 *
 * @param   string  $data     XML formatted string to convert.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  object   Data object.
 *
 * @since   1.0
 */ 
public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Xml::getValueFromNode`

Get a PHP native value for a SimpleXMLElement object. -- called recursively

##### Signature

```php
protected Joomla\Registry\Format\Xml::getValueFromNode ( object $node  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `node` | `object` | SimpleXMLElement object for which to get the native value. |

##### Return Values

`mixed` Native value of the SimpleXMLElement object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a PHP native value for a SimpleXMLElement object. -- called recursively
 *
 * @param   object  $node  SimpleXMLElement object for which to get the native value.
 *
 * @return  mixed  Native value of the SimpleXMLElement object.
 *
 * @since   1.0
 */ 
protected getValueFromNode(object $node) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Xml::getXmlChildren`

Build a level of the XML string -- called recursively

##### Signature

```php
protected Joomla\Registry\Format\Xml::getXmlChildren ( SimpleXMLElement $node, object $var, string $nodeName  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `node` | `SimpleXMLElement` | SimpleXMLElement object to attach children. |
| `var` | `object` | Object that represents a node of the XML document. |
| `nodeName` | `string` | The name to use for node elements. |

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
 * Build a level of the XML string -- called recursively
 *
 * @param   SimpleXMLElement  $node      SimpleXMLElement object to attach children.
 * @param   object            $var       Object that represents a node of the XML document.
 * @param   string            $nodeName  The name to use for node elements.
 *
 * @return  void
 *
 * @since   1.0
 */ 
protected getXmlChildren(SimpleXMLElement $node, object $var, string $nodeName) : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Xml::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

This method is inherited from `Joomla\Registry\AbstractRegistryFormat`.

### The Joomla\Registry\Format\Json Class

JSON format handler for Registry.

#### `Joomla\Registry\Format\Json::objectToString`

Converts an object into a JSON formatted string.

##### Signature

```php
public Joomla\Registry\Format\Json::objectToString ( object $object [, array $options ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data source object. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`string` JSON formatted string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into a JSON formatted string.
 *
 * @param   object  $object   Data source object.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  string  JSON formatted string.
 *
 * @since   1.0
 */ 
public objectToString(object $object, array $options = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Json::stringToObject`

Parse a JSON formatted string and convert it into an object.

If the string is not in JSON format, this method will attempt to parse it as INI format.

##### Signature

```php
public Joomla\Registry\Format\Json::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | JSON formatted string to convert. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`object` Data object.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a JSON formatted string and convert it into an object.
 *
 * If the string is not in JSON format, this method will attempt to parse it as INI format.
 *
 * @param   string  $data     JSON formatted string to convert.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  object   Data object.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */ 
public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Json::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

This method is inherited from `Joomla\Registry\AbstractRegistryFormat`.

### The Joomla\Registry\Format\Yaml Class

YAML format handler for Registry.

#### `Joomla\Registry\Format\Yaml::__construct`

Construct to set up the parser and dumper

##### Signature

```php
public Joomla\Registry\Format\Yaml::__construct ( void ) : void
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
 * Construct to set up the parser and dumper
 *
 * @since   1.0
 */ 
public __construct() : void
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Yaml::objectToString`

Converts an object into a YAML formatted string. 
We use json_* to convert the passed object to an array.

##### Signature

```php
public Joomla\Registry\Format\Yaml::objectToString ( object $object [, array $options ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data source object. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`string` YAML formatted string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into a YAML formatted string.
 * We use json_* to convert the passed object to an array.
 *
 * @param   object  $object   Data source object.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  string  YAML formatted string.
 *
 * @since   1.0
 */ 
public objectToString(object $object, array $options = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Yaml::stringToObject`

Parse a YAML formatted string and convert it into an object. 
We use the json_* methods to convert the parsed YAML array to an object.

##### Signature

```php
public Joomla\Registry\Format\Yaml::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | YAML formatted string to convert. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`object` Data object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse a YAML formatted string and convert it into an object.
 * We use the json_* methods to convert the parsed YAML array to an object.
 *
 * @param   string  $data     YAML formatted string to convert.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  object  Data object.
 *
 * @since   1.0
 */ 
public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Yaml::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

This method is inherited from `Joomla\Registry\AbstractRegistryFormat`.

### The Joomla\Registry\Format\Ini Class

INI format handler for Registry.

#### `Joomla\Registry\Format\Ini::objectToString`

Converts an object into an INI formatted string 
- Unfortunately, there is no way to have ini values nested further than two 
levels deep.  Therefore we will only go through the first two levels of 
the object.

##### Signature

```php
public Joomla\Registry\Format\Ini::objectToString ( object $object [, array $options ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | Data source object. |
| `options` | `array` | Options used by the formatter. Defaults to `[]`. |

##### Return Values

`string` INI formatted string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts an object into an INI formatted string
 * - Unfortunately, there is no way to have ini values nested further than two
 * levels deep.  Therefore we will only go through the first two levels of
 * the object.
 *
 * @param   object  $object   Data source object.
 * @param   array   $options  Options used by the formatter.
 *
 * @return  string  INI formatted string.
 *
 * @since   1.0
 */ 
public objectToString(object $object, array $options = []) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Ini::stringToObject`

Parse an INI formatted string and convert it into an object.

##### Signature

```php
public Joomla\Registry\Format\Ini::stringToObject ( string $data [, array $options ] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | INI formatted string to convert. |
| `options` | `array` | An array of options used by the formatter, or a boolean setting to process sections. Defaults to `[]`. |

##### Return Values

`object` Data object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse an INI formatted string and convert it into an object.
 *
 * @param   string  $data     INI formatted string to convert.
 * @param   array   $options  An array of options used by the formatter, or a boolean setting to process sections.
 *
 * @return  object   Data object.
 *
 * @since   1.0
 */ 
public stringToObject(string $data, array $options = []) : object
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Ini::getValueAsIni`

Get a value in an INI format.

##### Signature

```php
protected Joomla\Registry\Format\Ini::getValueAsIni ( mixed $value  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `mixed` | The value to convert to INI format. |

##### Return Values

`string` The value in INI format.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a value in an INI format.
 *
 * @param   mixed  $value  The value to convert to INI format.
 *
 * @return  string  The value in INI format.
 *
 * @since   1.0
 */ 
protected getValueAsIni(mixed $value) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\Registry\Format\Ini::getInstance`

Returns a reference to a Format object, only creating it 
if it doesn't already exist.

This method is inherited from `Joomla\Registry\AbstractRegistryFormat`.


## Traits

