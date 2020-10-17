# Joomla/Data Package version 1.2.0

Joomla Data Package

## The Joomla\Data\DumpableInterface Interface

An interface to define if an object is dumpable.

### Methods

#### `Joomla\Data\DumpableInterface::dump`

Dumps the object properties into a stdClass object, recursively if appropriate.

##### Signature

```php
abstract public Joomla\Data\DumpableInterface::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : stdClass
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion.  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`stdClass` The data properties as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the object properties into a stdClass object, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion.
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  \stdClass  The data properties as a simple PHP stdClass object.
 *
 * @since   1.0
 */
abstract public function dump(int $depth = 3, SplObjectStorage $dumped = null) : stdClass;
```

## The Joomla\Data\DataSet Class

DataSet is a collection class that allows the developer to operate on a set of DataObject objects as if they were in a

typical PHP array.

### Methods

#### `Joomla\Data\DataSet::__construct`

The class constructor.

##### Signature

```php
public Joomla\Data\DataSet::__construct ( [ array $objects = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `objects` | `array` | An array of DataObject objects to bind to the data set. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException if an object is not an instance of Data\Object.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The class constructor.
 *
 * @param   DataObject[]  $objects  An array of DataObject objects to bind to the data set.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException if an object is not an instance of Data\Object.
 */
public function __construct(array $objects = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::__call`

The magic call method is used to call object methods using the iterator.

Example: $array = $objectList->foo('bar');

The object list will iterate over its objects and see if each object has a callable 'foo' method.
If so, it will pass the argument list and assemble any return values. If an object does not have
a callable method no return value is recorded.
The keys of the objects and the result array are maintained.

##### Signature

```php
public Joomla\Data\DataSet::__call ( string $method [, array $arguments = [] ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The name of the method called. |
| `arguments` | `array` | The arguments of the method called. Defaults to `[]`. |

##### Return Values

`array` An array of values returned by the methods called on the objects in the data set.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic call method is used to call object methods using the iterator.
 *
 * Example: $array = $objectList->foo('bar');
 *
 * The object list will iterate over its objects and see if each object has a callable 'foo' method.
 * If so, it will pass the argument list and assemble any return values. If an object does not have
 * a callable method no return value is recorded.
 * The keys of the objects and the result array are maintained.
 *
 * @param   string  $method     The name of the method called.
 * @param   array   $arguments  The arguments of the method called.
 *
 * @return  array   An array of values returned by the methods called on the objects in the data set.
 *
 * @since   1.0
 */
public function __call(string $method, array $arguments = []) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::__get`

The magic get method is used to get a list of properties from the objects in the data set.

Example: $array = $dataSet->foo;

This will return a column of the values of the 'foo' property in all the objects
(or values determined by custom property setters in the individual Data\Object's).
The result array will contain an entry for each object in the list (compared to __call which may not).
The keys of the objects and the result array are maintained.

##### Signature

```php
public Joomla\Data\DataSet::__get ( string $property  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`array` An associative array of the values.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic get method is used to get a list of properties from the objects in the data set.
 *
 * Example: $array = $dataSet->foo;
 *
 * This will return a column of the values of the 'foo' property in all the objects
 * (or values determined by custom property setters in the individual Data\Object's).
 * The result array will contain an entry for each object in the list (compared to __call which may not).
 * The keys of the objects and the result array are maintained.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  array  An associative array of the values.
 *
 * @since   1.0
 */
public function __get(string $property) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::__isset`

The magic isset method is used to check the state of an object property using the iterator.

Example: $array = isset($objectList->foo);

##### Signature

```php
public Joomla\Data\DataSet::__isset ( string $property  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the property. |

##### Return Values

`bool` True if the property is set in any of the objects in the data set.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic isset method is used to check the state of an object property using the iterator.
 *
 * Example: $array = isset($objectList->foo);
 *
 * @param   string  $property  The name of the property.
 *
 * @return  boolean  True if the property is set in any of the objects in the data set.
 *
 * @since   1.0
 */
public function __isset(string $property) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::__set`

The magic set method is used to set an object property using the iterator.

Example: $objectList->foo = 'bar';

This will set the 'foo' property to 'bar' in all of the objects
(or a value determined by custom property setters in the Data\Object).

##### Signature

```php
public Joomla\Data\DataSet::__set ( string $property, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the property. |
| `value` | `mixed` | The value to give the data property. |

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
 * The magic set method is used to set an object property using the iterator.
 *
 * Example: $objectList->foo = 'bar';
 *
 * This will set the 'foo' property to 'bar' in all of the objects
 * (or a value determined by custom property setters in the Data\Object).
 *
 * @param   string  $property  The name of the property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __set(string $property, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::__unset`

The magic unset method is used to unset an object property using the iterator.

Example: unset($objectList->foo);

This will unset all of the 'foo' properties in the list of Data\Object's.

##### Signature

```php
public Joomla\Data\DataSet::__unset ( string $property  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the property. |

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
 * The magic unset method is used to unset an object property using the iterator.
 *
 * Example: unset($objectList->foo);
 *
 * This will unset all of the 'foo' properties in the list of Data\Object's.
 *
 * @param   string  $property  The name of the property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __unset(string $property) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::getObjectsKeys`

Gets an array of keys, existing in objects

##### Signature

```php
public Joomla\Data\DataSet::getObjectsKeys ( [ string $type = &#039;all&#039; ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | Selection type 'all' or 'common' Defaults to `'all'`. |

##### Return Values

`array` Array of keys

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an array of keys, existing in objects
 *
 * @param   string  $type  Selection type 'all' or 'common'
 *
 * @return  array   Array of keys
 *
 * @since   1.2.0
 * @throws  \InvalidArgumentException
 */
public function getObjectsKeys(string $type = 'all') : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::toArray`

Gets all objects as an array

##### Signature

```php
public Joomla\Data\DataSet::toArray ( [ bool $associative = true [, string $k = null ]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `associative` | `bool` | Option to set return mode: associative or numeric array. Defaults to `true`. |
| `k` | `string` | Unlimited optional property names to extract from objects. Defaults to `null`. |

##### Return Values

`array` Returns an array according to defined options.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets all objects as an array
 *
 * @param   boolean  $associative  Option to set return mode: associative or numeric array.
 * @param   string   $k            Unlimited optional property names to extract from objects.
 *
 * @return  array    Returns an array according to defined options.
 *
 * @since   1.2.0
 */
public function toArray(bool $associative = true, string $k = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::count`

Gets the number of data objects in the set.

##### Signature

```php
public Joomla\Data\DataSet::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of objects.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the number of data objects in the set.
 *
 * @return  integer  The number of objects.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::clear`

Clears the objects in the data set.

##### Signature

```php
public Joomla\Data\DataSet::clear ( void ) : Joomla\Data\DataSet
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Data\DataSet` Returns itself to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Clears the objects in the data set.
 *
 * @return  DataSet  Returns itself to allow chaining.
 *
 * @since   1.0
 */
public function clear() : Joomla\Data\DataSet{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::current`

Get the current data object in the set.

##### Signature

```php
public Joomla\Data\DataSet::current ( void ) : Joomla\Data\DataObject
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Data\DataObject` The current object, or false if the array is empty or the pointer is beyond the end of the elements.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the current data object in the set.
 *
 * @return  DataObject  The current object, or false if the array is empty or the pointer is beyond the end of the elements.
 *
 * @since   1.0
 */
public function current() : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::dump`

Dumps the data object in the set, recursively if appropriate.

##### Signature

```php
public Joomla\Data\DataSet::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion (default = 3).  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`array` An associative array of the data objects in the set, dumped as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the data object in the set, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion (default = 3).
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  array  An associative array of the data objects in the set, dumped as a simple PHP stdClass object.
 *
 * @see     DataObject::dump()
 * @since   1.0
 */
public function dump(int $depth = 3, SplObjectStorage $dumped = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::jsonSerialize`

Gets the data set in a form that can be serialised to JSON format.

Note that this method will not return an associative array, otherwise it would be encoded into an object.
JSON decoders do not consistently maintain the order of associative keys, whereas they do maintain the order of arrays.

##### Signature

```php
public Joomla\Data\DataSet::jsonSerialize ( [ mixed $serialized = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `serialized` | `mixed` | An array of objects that have already been serialized that is used to infinite loops  (null on first call). Defaults to `null`. |

##### Return Values

`array` An array that can be serialised by json_encode().

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the data set in a form that can be serialised to JSON format.
 *
 * Note that this method will not return an associative array, otherwise it would be encoded into an object.
 * JSON decoders do not consistently maintain the order of associative keys, whereas they do maintain the order of arrays.
 *
 * @param   mixed  $serialized  An array of objects that have already been serialized that is used to infinite loops
 *                              (null on first call).
 *
 * @return  array  An array that can be serialised by json_encode().
 *
 * @since   1.0
 */
public function jsonSerialize(mixed $serialized = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::key`

Gets the key of the current object in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::key ( void ) : scalar
```
##### Parameters

This method has no parameters.

##### Return Values

`scalar` The object key on success; null on failure.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the key of the current object in the iterator.
 *
 * @return  scalar  The object key on success; null on failure.
 *
 * @since   1.0
 */
public function key() : scalar{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::keys`

Gets the array of keys for all the objects in the iterator (emulates array_keys).

##### Signature

```php
public Joomla\Data\DataSet::keys ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` The array of keys

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the array of keys for all the objects in the iterator (emulates array_keys).
 *
 * @return  array  The array of keys
 *
 * @since   1.0
 */
public function keys() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::walk`

Applies a function to every object in the set (emulates array_walk).

##### Signature

```php
public Joomla\Data\DataSet::walk ( callable $funcname  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `funcname` | `callable` | Callback function. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Applies a function to every object in the set (emulates array_walk).
 * 
 * @param   callable  $funcname  Callback function.  
 * 
 * @return  boolean
 * 
 * @since   1.2.0
 * @throws  \InvalidArgumentException
 */
public function walk(callable $funcname) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::next`

Advances the iterator to the next object in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::next ( void ) : void
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
 * Advances the iterator to the next object in the iterator.
 *
 * @return  void
 *
 * @since   1.0
 */
public function next() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::offsetExists`

Checks whether an offset exists in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::offsetExists ( mixed $offset  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The object offset. |

##### Return Values

`bool` True if the object exists, false otherwise.

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
 * @param   mixed  $offset  The object offset.
 *
 * @return  boolean  True if the object exists, false otherwise.
 *
 * @since   1.0
 */
public function offsetExists(mixed $offset) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::offsetGet`

Gets an offset in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::offsetGet ( mixed $offset  ) : Joomla\Data\DataObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The object offset. |

##### Return Values

`Joomla\Data\DataObject` The object if it exists, null otherwise.

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
 * @param   mixed  $offset  The object offset.
 *
 * @return  DataObject  The object if it exists, null otherwise.
 *
 * @since   1.0
 */
public function offsetGet(mixed $offset) : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::offsetSet`

Sets an offset in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::offsetSet ( mixed $offset, Joomla\Data\DataObject $object  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The object offset. |
| `object` | `Joomla\Data\DataObject` | The object object. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException if an object is not an instance of Data\Object.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets an offset in the iterator.
 *
 * @param   mixed       $offset  The object offset.
 * @param   DataObject  $object  The object object.
 *
 * @return  void
 *
 * @since   1.0
 * @throws  \InvalidArgumentException if an object is not an instance of Data\Object.
 */
public function offsetSet(mixed $offset, Joomla\Data\DataObject $object) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::offsetUnset`

Unsets an offset in the iterator.

##### Signature

```php
public Joomla\Data\DataSet::offsetUnset ( mixed $offset  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `mixed` | The object offset. |

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
 * @param   mixed  $offset  The object offset.
 *
 * @return  void
 *
 * @since   1.0
 */
public function offsetUnset(mixed $offset) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::rewind`

Rewinds the iterator to the first object.

##### Signature

```php
public Joomla\Data\DataSet::rewind ( void ) : void
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
 * Rewinds the iterator to the first object.
 *
 * @return  void
 *
 * @since   1.0
 */
public function rewind() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataSet::valid`

Validates the iterator.

##### Signature

```php
public Joomla\Data\DataSet::valid ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if valid, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Validates the iterator.
 *
 * @return  boolean  True if valid, false otherwise.
 *
 * @since   1.0
 */
public function valid() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Data\DataObject Class

DataObject is a class that is used to store data but allowing you to access the data

by mimicking the way PHP handles class properties.

### Methods

#### `Joomla\Data\DataObject::__construct`

The class constructor.

##### Signature

```php
public Joomla\Data\DataObject::__construct ( [ mixed $properties = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | Either an associative array or another object  by which to set the initial properties of the new object. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The class constructor.
 *
 * @param   mixed  $properties  Either an associative array or another object
 *                              by which to set the initial properties of the new object.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct(mixed $properties = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::__get`

The magic get method is used to get a data property.

This method is a public proxy for the protected getProperty method.

Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
__get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
the object, it will cause a recursion into __get.

##### Signature

```php
public Joomla\Data\DataObject::__get ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property, or null if the data property does not exist.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic get method is used to get a data property.
 *
 * This method is a public proxy for the protected getProperty method.
 *
 * Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
 * __get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
 * requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
 * the object, it will cause a recursion into __get.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property, or null if the data property does not exist.
 *
 * @see     DataObject::getProperty()
 * @since   1.0
 */
public function __get(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::__isset`

The magic isset method is used to check the state of an object property.

##### Signature

```php
public Joomla\Data\DataObject::__isset ( string $property  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`bool` True if set, otherwise false is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic isset method is used to check the state of an object property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  boolean  True if set, otherwise false is returned.
 *
 * @since   1.0
 */
public function __isset(string $property) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::__set`

The magic set method is used to set a data property.

This is a public proxy for the protected setProperty method.

##### Signature

```php
public Joomla\Data\DataObject::__set ( string $property, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

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
 * The magic set method is used to set a data property.
 *
 * This is a public proxy for the protected setProperty method.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  void
 *
 * @see     DataObject::setProperty()
 * @since   1.0
 */
public function __set(string $property, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::__unset`

The magic unset method is used to unset a data property.

##### Signature

```php
public Joomla\Data\DataObject::__unset ( string $property  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

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
 * The magic unset method is used to unset a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __unset(string $property) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::bind`

Binds an array or object to this object.

##### Signature

```php
public Joomla\Data\DataObject::bind ( mixed $properties [, bool $updateNulls = true ] ) : Joomla\Data\DataObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | An associative array of properties or an object. |
| `updateNulls` | `bool` | True to bind null values, false to ignore null values. Defaults to `true`. |

##### Return Values

`Joomla\Data\DataObject` Returns itself to allow chaining.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Binds an array or object to this object.
 *
 * @param   mixed    $properties   An associative array of properties or an object.
 * @param   boolean  $updateNulls  True to bind null values, false to ignore null values.
 *
 * @return  DataObject  Returns itself to allow chaining.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function bind(mixed $properties, bool $updateNulls = true) : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::dump`

Dumps the data properties into a stdClass object, recursively if appropriate.

##### Signature

```php
public Joomla\Data\DataObject::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : stdClass
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion (default = 3).  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`stdClass` The data properties as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the data properties into a stdClass object, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion (default = 3).
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  \stdClass  The data properties as a simple PHP stdClass object.
 *
 * @since   1.0
 */
public function dump(int $depth = 3, SplObjectStorage $dumped = null) : stdClass{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be access via a foreach statement.

##### Signature

```php
public Joomla\Data\DataObject::getIterator ( void ) : ArrayIterator
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
 * This allows the data properties to be access via a foreach statement.
 *
 * @return  \ArrayIterator  This object represented as an ArrayIterator.
 *
 * @see     IteratorAggregate::getIterator()
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::jsonSerialize`

Gets the data properties in a form that can be serialised to JSON format.

##### Signature

```php
public Joomla\Data\DataObject::jsonSerialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` An object that can be serialised by json_encode().

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the data properties in a form that can be serialised to JSON format.
 *
 * @return  string  An object that can be serialised by json_encode().
 *
 * @since   1.0
 */
public function jsonSerialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::dumpProperty`

Dumps a data property.

If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
convert a Date object to a string; and it will convert a Registry to an object.

##### Signature

```php
protected Joomla\Data\DataObject::dumpProperty ( string $property, int $depth, SplObjectStorage $dumped  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `depth` | `int` | The current depth of recursion (a value of 0 will ignore recursion). |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. |

##### Return Values

`mixed` The value of the dumped property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps a data property.
 *
 * If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
 * convert a Date object to a string; and it will convert a Registry to an object.
 *
 * @param   string             $property  The name of the data property.
 * @param   integer            $depth     The current depth of recursion (a value of 0 will ignore recursion).
 * @param   \SplObjectStorage  $dumped    An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  mixed  The value of the dumped property.
 *
 * @since   1.0
 */
protected function dumpProperty(string $property, int $depth, SplObjectStorage $dumped) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::getProperty`

Gets a data property.

##### Signature

```php
protected Joomla\Data\DataObject::getProperty ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__get()
 * @since   1.0
 */
protected function getProperty(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::setProperty`

Sets a data property.

If the name of the property starts with a null byte, this method will return null.

##### Signature

```php
protected Joomla\Data\DataObject::setProperty ( string $property, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets a data property.
 *
 * If the name of the property starts with a null byte, this method will return null.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__set()
 * @since   1.0
 */
protected function setProperty(string $property, mixed $value) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\DataObject::count`

Count the number of data properties.

##### Signature

```php
public Joomla\Data\DataObject::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of data properties.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of data properties.
 *
 * @return  integer  The number of data properties.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Data\Tests\JDataVostok Class

Derived Data\DataObject class for testing.

### Methods

#### `Joomla\Data\Tests\JDataVostok::launch`

An array method.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::launch ( string $status  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `status` | `string` | A method argument. |

##### Return Values

`string` The return value for the method.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * An array method.
 *
 * @param   string  $status  A method argument.
 *
 * @return  string  The return value for the method.
 *
 * @since   1.0
 */
public function launch(string $status) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::setProperty`

Set an object property.

##### Signature

```php
protected Joomla\Data\Tests\JDataVostok::setProperty ( string $property, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The property name. |
| `value` | `mixed` | The property value. |

##### Return Values

`mixed` The property value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an object property.
 *
 * @param   string  $property  The property name.
 * @param   mixed   $value     The property value.
 *
 * @return  mixed  The property value.
 *
 * @since   1.0
 */
protected function setProperty(string $property, mixed $value) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::__construct`

The class constructor.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::__construct ( [ mixed $properties = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | Either an associative array or another object  by which to set the initial properties of the new object. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The class constructor.
 *
 * @param   mixed  $properties  Either an associative array or another object
 *                              by which to set the initial properties of the new object.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct(mixed $properties = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::__get`

The magic get method is used to get a data property.

This method is a public proxy for the protected getProperty method.

Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
__get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
the object, it will cause a recursion into __get.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::__get ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property, or null if the data property does not exist.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic get method is used to get a data property.
 *
 * This method is a public proxy for the protected getProperty method.
 *
 * Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
 * __get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
 * requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
 * the object, it will cause a recursion into __get.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property, or null if the data property does not exist.
 *
 * @see     DataObject::getProperty()
 * @since   1.0
 */
public function __get(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::__isset`

The magic isset method is used to check the state of an object property.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::__isset ( string $property  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`bool` True if set, otherwise false is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic isset method is used to check the state of an object property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  boolean  True if set, otherwise false is returned.
 *
 * @since   1.0
 */
public function __isset(string $property) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::__set`

The magic set method is used to set a data property.

This is a public proxy for the protected setProperty method.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::__set ( string $property, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

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
 * The magic set method is used to set a data property.
 *
 * This is a public proxy for the protected setProperty method.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  void
 *
 * @see     DataObject::setProperty()
 * @since   1.0
 */
public function __set(string $property, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::__unset`

The magic unset method is used to unset a data property.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::__unset ( string $property  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

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
 * The magic unset method is used to unset a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __unset(string $property) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::bind`

Binds an array or object to this object.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::bind ( mixed $properties [, bool $updateNulls = true ] ) : Joomla\Data\DataObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | An associative array of properties or an object. |
| `updateNulls` | `bool` | True to bind null values, false to ignore null values. Defaults to `true`. |

##### Return Values

`Joomla\Data\DataObject` Returns itself to allow chaining.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Binds an array or object to this object.
 *
 * @param   mixed    $properties   An associative array of properties or an object.
 * @param   boolean  $updateNulls  True to bind null values, false to ignore null values.
 *
 * @return  DataObject  Returns itself to allow chaining.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function bind(mixed $properties, bool $updateNulls = true) : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::dump`

Dumps the data properties into a stdClass object, recursively if appropriate.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : stdClass
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion (default = 3).  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`stdClass` The data properties as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the data properties into a stdClass object, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion (default = 3).
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  \stdClass  The data properties as a simple PHP stdClass object.
 *
 * @since   1.0
 */
public function dump(int $depth = 3, SplObjectStorage $dumped = null) : stdClass{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be access via a foreach statement.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::getIterator ( void ) : ArrayIterator
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
 * This allows the data properties to be access via a foreach statement.
 *
 * @return  \ArrayIterator  This object represented as an ArrayIterator.
 *
 * @see     IteratorAggregate::getIterator()
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::jsonSerialize`

Gets the data properties in a form that can be serialised to JSON format.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::jsonSerialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` An object that can be serialised by json_encode().

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the data properties in a form that can be serialised to JSON format.
 *
 * @return  string  An object that can be serialised by json_encode().
 *
 * @since   1.0
 */
public function jsonSerialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::dumpProperty`

Dumps a data property.

If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
convert a Date object to a string; and it will convert a Registry to an object.

##### Signature

```php
protected Joomla\Data\Tests\JDataVostok::dumpProperty ( string $property, int $depth, SplObjectStorage $dumped  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `depth` | `int` | The current depth of recursion (a value of 0 will ignore recursion). |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. |

##### Return Values

`mixed` The value of the dumped property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps a data property.
 *
 * If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
 * convert a Date object to a string; and it will convert a Registry to an object.
 *
 * @param   string             $property  The name of the data property.
 * @param   integer            $depth     The current depth of recursion (a value of 0 will ignore recursion).
 * @param   \SplObjectStorage  $dumped    An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  mixed  The value of the dumped property.
 *
 * @since   1.0
 */
protected function dumpProperty(string $property, int $depth, SplObjectStorage $dumped) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::getProperty`

Gets a data property.

##### Signature

```php
protected Joomla\Data\Tests\JDataVostok::getProperty ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__get()
 * @since   1.0
 */
protected function getProperty(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataVostok::count`

Count the number of data properties.

##### Signature

```php
public Joomla\Data\Tests\JDataVostok::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of data properties.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of data properties.
 *
 * @return  integer  The number of data properties.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Data\Tests\JDataCapitaliser Class

Joomla Framework Capitaliser DataObject Class

### Methods

#### `Joomla\Data\Tests\JDataCapitaliser::setProperty`

Set an object property.

##### Signature

```php
protected Joomla\Data\Tests\JDataCapitaliser::setProperty ( string $property, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The property name. |
| `value` | `mixed` | The property value. |

##### Return Values

`mixed` The property value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an object property.
 *
 * @param   string  $property  The property name.
 * @param   mixed   $value     The property value.
 *
 * @return  mixed  The property value.
 *
 * @since   1.0
 */
protected function setProperty(string $property, mixed $value) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::__construct`

The class constructor.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::__construct ( [ mixed $properties = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | Either an associative array or another object  by which to set the initial properties of the new object. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The class constructor.
 *
 * @param   mixed  $properties  Either an associative array or another object
 *                              by which to set the initial properties of the new object.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct(mixed $properties = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::__get`

The magic get method is used to get a data property.

This method is a public proxy for the protected getProperty method.

Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
__get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
the object, it will cause a recursion into __get.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::__get ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property, or null if the data property does not exist.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic get method is used to get a data property.
 *
 * This method is a public proxy for the protected getProperty method.
 *
 * Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
 * __get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
 * requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
 * the object, it will cause a recursion into __get.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property, or null if the data property does not exist.
 *
 * @see     DataObject::getProperty()
 * @since   1.0
 */
public function __get(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::__isset`

The magic isset method is used to check the state of an object property.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::__isset ( string $property  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`bool` True if set, otherwise false is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic isset method is used to check the state of an object property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  boolean  True if set, otherwise false is returned.
 *
 * @since   1.0
 */
public function __isset(string $property) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::__set`

The magic set method is used to set a data property.

This is a public proxy for the protected setProperty method.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::__set ( string $property, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

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
 * The magic set method is used to set a data property.
 *
 * This is a public proxy for the protected setProperty method.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  void
 *
 * @see     DataObject::setProperty()
 * @since   1.0
 */
public function __set(string $property, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::__unset`

The magic unset method is used to unset a data property.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::__unset ( string $property  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

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
 * The magic unset method is used to unset a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __unset(string $property) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::bind`

Binds an array or object to this object.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::bind ( mixed $properties [, bool $updateNulls = true ] ) : Joomla\Data\DataObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | An associative array of properties or an object. |
| `updateNulls` | `bool` | True to bind null values, false to ignore null values. Defaults to `true`. |

##### Return Values

`Joomla\Data\DataObject` Returns itself to allow chaining.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Binds an array or object to this object.
 *
 * @param   mixed    $properties   An associative array of properties or an object.
 * @param   boolean  $updateNulls  True to bind null values, false to ignore null values.
 *
 * @return  DataObject  Returns itself to allow chaining.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function bind(mixed $properties, bool $updateNulls = true) : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::dump`

Dumps the data properties into a stdClass object, recursively if appropriate.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : stdClass
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion (default = 3).  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`stdClass` The data properties as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the data properties into a stdClass object, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion (default = 3).
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  \stdClass  The data properties as a simple PHP stdClass object.
 *
 * @since   1.0
 */
public function dump(int $depth = 3, SplObjectStorage $dumped = null) : stdClass{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be access via a foreach statement.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::getIterator ( void ) : ArrayIterator
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
 * This allows the data properties to be access via a foreach statement.
 *
 * @return  \ArrayIterator  This object represented as an ArrayIterator.
 *
 * @see     IteratorAggregate::getIterator()
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::jsonSerialize`

Gets the data properties in a form that can be serialised to JSON format.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::jsonSerialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` An object that can be serialised by json_encode().

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the data properties in a form that can be serialised to JSON format.
 *
 * @return  string  An object that can be serialised by json_encode().
 *
 * @since   1.0
 */
public function jsonSerialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::dumpProperty`

Dumps a data property.

If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
convert a Date object to a string; and it will convert a Registry to an object.

##### Signature

```php
protected Joomla\Data\Tests\JDataCapitaliser::dumpProperty ( string $property, int $depth, SplObjectStorage $dumped  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `depth` | `int` | The current depth of recursion (a value of 0 will ignore recursion). |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. |

##### Return Values

`mixed` The value of the dumped property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps a data property.
 *
 * If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
 * convert a Date object to a string; and it will convert a Registry to an object.
 *
 * @param   string             $property  The name of the data property.
 * @param   integer            $depth     The current depth of recursion (a value of 0 will ignore recursion).
 * @param   \SplObjectStorage  $dumped    An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  mixed  The value of the dumped property.
 *
 * @since   1.0
 */
protected function dumpProperty(string $property, int $depth, SplObjectStorage $dumped) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::getProperty`

Gets a data property.

##### Signature

```php
protected Joomla\Data\Tests\JDataCapitaliser::getProperty ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__get()
 * @since   1.0
 */
protected function getProperty(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataCapitaliser::count`

Count the number of data properties.

##### Signature

```php
public Joomla\Data\Tests\JDataCapitaliser::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of data properties.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of data properties.
 *
 * @return  integer  The number of data properties.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Data\Tests\JDataBuran Class

Derived Data\DataObject class for testing.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$rocket` | `` |  |    

### Methods

#### `Joomla\Data\Tests\JDataBuran::setTestValue`

Set the test_value.

##### Signature

```php
protected Joomla\Data\Tests\JDataBuran::setTestValue ( string $value  ) : Joomla\Data\Tests\Object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `string` | The test value. |

##### Return Values

`Joomla\Data\Tests\Object` Chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the test_value.
 *
 * @param   string  $value  The test value.
 *
 * @return  Object  Chainable.
 *
 * @since   1.0
 */
protected function setTestValue(string $value) : Joomla\Data\Tests\Object{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::__construct`

The class constructor.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::__construct ( [ mixed $properties = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | Either an associative array or another object  by which to set the initial properties of the new object. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The class constructor.
 *
 * @param   mixed  $properties  Either an associative array or another object
 *                              by which to set the initial properties of the new object.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct(mixed $properties = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::__get`

The magic get method is used to get a data property.

This method is a public proxy for the protected getProperty method.

Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
__get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
the object, it will cause a recursion into __get.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::__get ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property, or null if the data property does not exist.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic get method is used to get a data property.
 *
 * This method is a public proxy for the protected getProperty method.
 *
 * Note: Magic __get does not allow recursive calls. This can be tricky because the error generated by recursing into
 * __get is "Undefined property:  {CLASS}::{PROPERTY}" which is misleading. This is relevant for this class because
 * requesting a non-visible property can trigger a call to a sub-function. If that references the property directly in
 * the object, it will cause a recursion into __get.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property, or null if the data property does not exist.
 *
 * @see     DataObject::getProperty()
 * @since   1.0
 */
public function __get(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::__isset`

The magic isset method is used to check the state of an object property.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::__isset ( string $property  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`bool` True if set, otherwise false is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The magic isset method is used to check the state of an object property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  boolean  True if set, otherwise false is returned.
 *
 * @since   1.0
 */
public function __isset(string $property) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::__set`

The magic set method is used to set a data property.

This is a public proxy for the protected setProperty method.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::__set ( string $property, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

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
 * The magic set method is used to set a data property.
 *
 * This is a public proxy for the protected setProperty method.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  void
 *
 * @see     DataObject::setProperty()
 * @since   1.0
 */
public function __set(string $property, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::__unset`

The magic unset method is used to unset a data property.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::__unset ( string $property  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

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
 * The magic unset method is used to unset a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function __unset(string $property) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::bind`

Binds an array or object to this object.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::bind ( mixed $properties [, bool $updateNulls = true ] ) : Joomla\Data\DataObject
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `properties` | `mixed` | An associative array of properties or an object. |
| `updateNulls` | `bool` | True to bind null values, false to ignore null values. Defaults to `true`. |

##### Return Values

`Joomla\Data\DataObject` Returns itself to allow chaining.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Binds an array or object to this object.
 *
 * @param   mixed    $properties   An associative array of properties or an object.
 * @param   boolean  $updateNulls  True to bind null values, false to ignore null values.
 *
 * @return  DataObject  Returns itself to allow chaining.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function bind(mixed $properties, bool $updateNulls = true) : Joomla\Data\DataObject{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::dump`

Dumps the data properties into a stdClass object, recursively if appropriate.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::dump ( [ int $depth = 3 [, SplObjectStorage $dumped = null ]] ) : stdClass
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `depth` | `int` | The maximum depth of recursion (default = 3).  For example, a depth of 0 will return a stdClass with all the properties in native form. A depth of 1 will recurse into the first level of properties only. Defaults to `3`. |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. Defaults to `null`. |

##### Return Values

`stdClass` The data properties as a simple PHP stdClass object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps the data properties into a stdClass object, recursively if appropriate.
 *
 * @param   integer            $depth   The maximum depth of recursion (default = 3).
 *                                      For example, a depth of 0 will return a stdClass with all the properties in native
 *                                      form. A depth of 1 will recurse into the first level of properties only.
 * @param   \SplObjectStorage  $dumped  An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  \stdClass  The data properties as a simple PHP stdClass object.
 *
 * @since   1.0
 */
public function dump(int $depth = 3, SplObjectStorage $dumped = null) : stdClass{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::getIterator`

Gets this object represented as an ArrayIterator.

This allows the data properties to be access via a foreach statement.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::getIterator ( void ) : ArrayIterator
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
 * This allows the data properties to be access via a foreach statement.
 *
 * @return  \ArrayIterator  This object represented as an ArrayIterator.
 *
 * @see     IteratorAggregate::getIterator()
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::jsonSerialize`

Gets the data properties in a form that can be serialised to JSON format.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::jsonSerialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` An object that can be serialised by json_encode().

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the data properties in a form that can be serialised to JSON format.
 *
 * @return  string  An object that can be serialised by json_encode().
 *
 * @since   1.0
 */
public function jsonSerialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::dumpProperty`

Dumps a data property.

If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
convert a Date object to a string; and it will convert a Registry to an object.

##### Signature

```php
protected Joomla\Data\Tests\JDataBuran::dumpProperty ( string $property, int $depth, SplObjectStorage $dumped  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `depth` | `int` | The current depth of recursion (a value of 0 will ignore recursion). |
| `dumped` | `SplObjectStorage` | An array of already serialized objects that is used to avoid infinite loops. |

##### Return Values

`mixed` The value of the dumped property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Dumps a data property.
 *
 * If recursion is set, this method will dump any object implementing Data\Dumpable (like Data\Object and Data\Set); it will
 * convert a Date object to a string; and it will convert a Registry to an object.
 *
 * @param   string             $property  The name of the data property.
 * @param   integer            $depth     The current depth of recursion (a value of 0 will ignore recursion).
 * @param   \SplObjectStorage  $dumped    An array of already serialized objects that is used to avoid infinite loops.
 *
 * @return  mixed  The value of the dumped property.
 *
 * @since   1.0
 */
protected function dumpProperty(string $property, int $depth, SplObjectStorage $dumped) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::getProperty`

Gets a data property.

##### Signature

```php
protected Joomla\Data\Tests\JDataBuran::getProperty ( string $property  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a data property.
 *
 * @param   string  $property  The name of the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__get()
 * @since   1.0
 */
protected function getProperty(string $property) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::setProperty`

Sets a data property.

If the name of the property starts with a null byte, this method will return null.

##### Signature

```php
protected Joomla\Data\Tests\JDataBuran::setProperty ( string $property, mixed $value  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the data property. |
| `value` | `mixed` | The value to give the data property. |

##### Return Values

`mixed` The value of the data property.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets a data property.
 *
 * If the name of the property starts with a null byte, this method will return null.
 *
 * @param   string  $property  The name of the data property.
 * @param   mixed   $value     The value to give the data property.
 *
 * @return  mixed  The value of the data property.
 *
 * @see     DataObject::__set()
 * @since   1.0
 */
protected function setProperty(string $property, mixed $value) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Data\Tests\JDataBuran::count`

Count the number of data properties.

##### Signature

```php
public Joomla\Data\Tests\JDataBuran::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of data properties.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of data properties.
 *
 * @return  integer  The number of data properties.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
