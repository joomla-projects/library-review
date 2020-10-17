# Joomla/Utilities Package version 1.6.1

Joomla Utilities Package

## The Joomla\Utilities\ArrayHelper Class

ArrayHelper is an array utility class for doing all sorts of odds and ends with arrays.

### Methods

#### `Joomla\Utilities\ArrayHelper::toInteger`

Function to convert array to integer values

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::toInteger ( array $array [, int|array $default = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The source array to convert |
| `default` | `int` or `array` | A default value to assign if $array is not an array Defaults to `null`. |

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
 * Function to convert array to integer values
 *
 * @param   array      $array    The source array to convert
 * @param   int|array  $default  A default value to assign if $array is not an array
 *
 * @return  array
 *
 * @since   1.0
 */
public static function toInteger(array $array,  $default = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::toObject`

Utility function to map an array to a stdClass object.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::toObject ( array $array [, string $class = &#039;stdClass&#039; [, bool $recursive = true ]] ) : object
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The array to map. |
| `class` | `string` | Name of the class to create Defaults to `'stdClass'`. |
| `recursive` | `bool` | Convert also any array inside the main array Defaults to `true`. |

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
 * Utility function to map an array to a stdClass object.
 *
 * @param   array    $array      The array to map.
 * @param   string   $class      Name of the class to create
 * @param   boolean  $recursive  Convert also any array inside the main array
 *
 * @return  object
 *
 * @since   1.0
 */
public static function toObject(array $array, string $class = 'stdClass', bool $recursive = true) : object{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::toString`

Utility function to map an array to a string.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::toString ( array $array [, string $innerGlue = &#039;=&#039; [, string $outerGlue = &#039; &#039; [, bool $keepOuterKey = false ]]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The array to map. |
| `innerGlue` | `string` | The glue (optional, defaults to '=') between the key and the value. Defaults to `'='`. |
| `outerGlue` | `string` | The glue (optional, defaults to ' ') between array elements. Defaults to `' '`. |
| `keepOuterKey` | `bool` | True if final key should be kept. Defaults to `false`. |

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
 * Utility function to map an array to a string.
 *
 * @param   array    $array         The array to map.
 * @param   string   $innerGlue     The glue (optional, defaults to '=') between the key and the value.
 * @param   string   $outerGlue     The glue (optional, defaults to ' ') between array elements.
 * @param   boolean  $keepOuterKey  True if final key should be kept.
 *
 * @return  string
 *
 * @since   1.0
 */
public static function toString(array $array, string $innerGlue = '=', string $outerGlue = ' ', bool $keepOuterKey = false) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::fromObject`

Utility function to map an object to an array

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::fromObject ( object $source [, bool $recurse = true [, string $regex = null ]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `object` | The source object |
| `recurse` | `bool` | True to recurse through multi-level objects Defaults to `true`. |
| `regex` | `string` | An optional regular expression to match on field names Defaults to `null`. |

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
 * Utility function to map an object to an array
 *
 * @param   object   $source   The source object
 * @param   boolean  $recurse  True to recurse through multi-level objects
 * @param   string   $regex    An optional regular expression to match on field names
 *
 * @return  array
 *
 * @since   1.0
 */
public static function fromObject(object $source, bool $recurse = true, string $regex = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::addColumn`

Adds a column to an array of arrays or objects

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::addColumn ( array $array, array $column, string $colName [, string $keyCol = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The source array |
| `column` | `array` | The array to be used as new column |
| `colName` | `string` | The index of the new column or name of the new object property |
| `keyCol` | `string` | The index of the column or name of object property to be used for mapping with the new column Defaults to `null`. |

##### Return Values

`array` An array with the new column added to the source array

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a column to an array of arrays or objects
 *
 * @param   array   $array    The source array
 * @param   array   $column   The array to be used as new column
 * @param   string  $colName  The index of the new column or name of the new object property
 * @param   string  $keyCol   The index of the column or name of object property to be used for mapping with the new column
 *
 * @return  array  An array with the new column added to the source array
 *
 * @since   1.5.0
 * @see     https://www.php.net/manual/en/language.types.array.php
 */
public static function addColumn(array $array, array $column, string $colName, string $keyCol = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::dropColumn`

Remove a column from an array of arrays or objects

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::dropColumn ( array $array, string $colName  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The source array |
| `colName` | `string` | The index of the column or name of object property to be removed |

##### Return Values

`array` Column of values from the source array

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove a column from an array of arrays or objects
 *
 * @param   array   $array    The source array
 * @param   string  $colName  The index of the column or name of object property to be removed
 *
 * @return  array  Column of values from the source array
 *
 * @since   1.5.0
 * @see     https://www.php.net/manual/en/language.types.array.php
 */
public static function dropColumn(array $array, string $colName) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::getColumn`

Extracts a column from an array of arrays or objects

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::getColumn ( array $array, string $valueCol [, string $keyCol = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The source array |
| `valueCol` | `string` | The index of the column or name of object property to be used as value  It may also be NULL to return complete arrays or objects (this is useful together with <var>$keyCol</var> to reindex the array). |
| `keyCol` | `string` | The index of the column or name of object property to be used as key Defaults to `null`. |

##### Return Values

`array` Column of values from the source array

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extracts a column from an array of arrays or objects
 *
 * @param   array   $array     The source array
 * @param   string  $valueCol  The index of the column or name of object property to be used as value
 *                             It may also be NULL to return complete arrays or objects (this is
 *                             useful together with <var>$keyCol</var> to reindex the array).
 * @param   string  $keyCol    The index of the column or name of object property to be used as key
 *
 * @return  array  Column of values from the source array
 *
 * @since   1.0
 * @see     https://www.php.net/manual/en/language.types.array.php
 * @see     https://www.php.net/manual/en/function.array-column.php
 */
public static function getColumn(array $array, string $valueCol, string $keyCol = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::getValue`

Utility function to return a value from a named array or a specified default

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::getValue ( array|ArrayAccess $array, string $name [, mixed $default = null [, string $type = &#039;&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` or `ArrayAccess` | A named array or object that implements ArrayAccess |
| `name` | `string` | The key to search for (this can be an array index or a dot separated key sequence as in Registry) |
| `default` | `mixed` | The default value to give if no key found Defaults to `null`. |
| `type` | `string` | Return type for the variable (INT, FLOAT, STRING, WORD, BOOLEAN, ARRAY) Defaults to `''`. |

##### Return Values

`mixed` 

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Utility function to return a value from a named array or a specified default
 *
 * @param   array|\ArrayAccess  $array    A named array or object that implements ArrayAccess
 * @param   string              $name     The key to search for (this can be an array index or a dot separated key sequence as in Registry)
 * @param   mixed               $default  The default value to give if no key found
 * @param   string              $type     Return type for the variable (INT, FLOAT, STRING, WORD, BOOLEAN, ARRAY)
 *
 * @return  mixed
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public static function getValue( $array, string $name, mixed $default = null, string $type = '') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::invert`

Takes an associative array of arrays and inverts the array keys to values using the array values as keys.

Example:
$input = array(
'New' => array('1000', '1500', '1750'),
'Used' => array('3000', '4000', '5000', '6000')
);
$output = ArrayHelper::invert($input);

Output would be equal to:
$output = array(
'1000' => 'New',
'1500' => 'New',
'1750' => 'New',
'3000' => 'Used',
'4000' => 'Used',
'5000' => 'Used',
'6000' => 'Used'
);

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::invert ( array $array  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The source array. |

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
 * Takes an associative array of arrays and inverts the array keys to values using the array values as keys.
 *
 * Example:
 * $input = array(
 *     'New' => array('1000', '1500', '1750'),
 *     'Used' => array('3000', '4000', '5000', '6000')
 * );
 * $output = ArrayHelper::invert($input);
 *
 * Output would be equal to:
 * $output = array(
 *     '1000' => 'New',
 *     '1500' => 'New',
 *     '1750' => 'New',
 *     '3000' => 'Used',
 *     '4000' => 'Used',
 *     '5000' => 'Used',
 *     '6000' => 'Used'
 * );
 *
 * @param   array  $array  The source array.
 *
 * @return  array
 *
 * @since   1.0
 */
public static function invert(array $array) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::isAssociative`

Determine if an array is an associative array.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::isAssociative ( array $array  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | An array to test. |

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
 * Determine if an array is an associative array.
 *
 * @param   array  $array  An array to test.
 *
 * @return  boolean
 *
 * @since   1.0
 */
public static function isAssociative(array $array) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::pivot`

Pivots an array to create a reverse lookup of an array of scalars, arrays or objects.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::pivot ( array $source [, string $key = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `array` | The source array. |
| `key` | `string` | Where the elements of the source array are objects or arrays, the key to pivot on. Defaults to `null`. |

##### Return Values

`array` An array of arrays pivoted either on the value of the keys, or an individual key of an object or array.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Pivots an array to create a reverse lookup of an array of scalars, arrays or objects.
 *
 * @param   array   $source  The source array.
 * @param   string  $key     Where the elements of the source array are objects or arrays, the key to pivot on.
 *
 * @return  array  An array of arrays pivoted either on the value of the keys, or an individual key of an object or array.
 *
 * @since   1.0
 */
public static function pivot(array $source, string $key = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::sortObjects`

Utility function to sort an array of objects on a given field

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::sortObjects ( array $a, mixed $k [, mixed $direction = 1 [, mixed $caseSensitive = true [, mixed $locale = false ]]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `a` | `array` | An array of objects |
| `k` | `mixed` | The key (string) or an array of keys to sort on |
| `direction` | `mixed` | Direction (integer) or an array of direction to sort in [1 = Ascending] [-1 = Descending] Defaults to `1`. |
| `caseSensitive` | `mixed` | Boolean or array of booleans to let sort occur case sensitive or insensitive Defaults to `true`. |
| `locale` | `mixed` | Boolean or array of booleans to let sort occur using the locale language or not Defaults to `false`. |

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
 * Utility function to sort an array of objects on a given field
 *
 * @param   array  $a              An array of objects
 * @param   mixed  $k              The key (string) or an array of keys to sort on
 * @param   mixed  $direction      Direction (integer) or an array of direction to sort in [1 = Ascending] [-1 = Descending]
 * @param   mixed  $caseSensitive  Boolean or array of booleans to let sort occur case sensitive or insensitive
 * @param   mixed  $locale         Boolean or array of booleans to let sort occur using the locale language or not
 *
 * @return  array
 *
 * @since   1.0
 */
public static function sortObjects(array $a, mixed $k, mixed $direction = 1, mixed $caseSensitive = true, mixed $locale = false) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::arrayUnique`

Multidimensional array safe unique test

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::arrayUnique ( array $array  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` | The array to make unique. |

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
 * Multidimensional array safe unique test
 *
 * @param   array  $array  The array to make unique.
 *
 * @return  array
 *
 * @see     https://www.php.net/manual/en/function.array-unique.php
 * @since   1.0
 */
public static function arrayUnique(array $array) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::arraySearch`

An improved array_search that allows for partial matching of strings values in associative arrays.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::arraySearch ( string $needle, array $haystack [, bool $caseSensitive = true ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `needle` | `string` | The text to search for within the array. |
| `haystack` | `array` | Associative array to search in to find $needle. |
| `caseSensitive` | `bool` | True to search case sensitive, false otherwise. Defaults to `true`. |

##### Return Values

`mixed` Returns the matching array $key if found, otherwise false.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * An improved array_search that allows for partial matching of strings values in associative arrays.
 *
 * @param   string   $needle         The text to search for within the array.
 * @param   array    $haystack       Associative array to search in to find $needle.
 * @param   boolean  $caseSensitive  True to search case sensitive, false otherwise.
 *
 * @return  mixed    Returns the matching array $key if found, otherwise false.
 *
 * @since   1.0
 */
public static function arraySearch(string $needle, array $haystack, bool $caseSensitive = true) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\ArrayHelper::flatten`

Recursively convert data to a one dimension array.

##### Signature

```php
public static Joomla\Utilities\ArrayHelper::flatten ( array|object $array [, string $separator = &#039;.&#039; [, string $prefix = &#039;&#039; ]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `array` | `array` or `object` | The array or object to convert. |
| `separator` | `string` | The key separator. Defaults to `'.'`. |
| `prefix` | `string` | Last level key prefix. Defaults to `''`. |

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
 * Recursively convert data to a one dimension array.
 *
 * @param   array|object  $array      The array or object to convert.
 * @param   string        $separator  The key separator.
 * @param   string        $prefix     Last level key prefix.
 *
 * @return  array
 *
 * @since   1.3.0
 * @note    As of 2.0, the result will not include the original array structure
 */
public static function flatten( $array, string $separator = '.', string $prefix = '') : array{
    // @todo Add adapter code.
}
```

## The Joomla\Utilities\IpHelper Class

IpHelper is a utility class for processing IP addresses

This class is adapted from the `FOFUtilsIp` class distributed with the Joomla! CMS as part of the FOF library by Akeeba Ltd.
The original class is copyright of Nicholas K. Dionysopoulos / Akeeba Ltd.

### Methods

#### `Joomla\Utilities\IpHelper::getIp`

Get the current visitor's IP address

##### Signature

```php
public static Joomla\Utilities\IpHelper::getIp ( void ) : string
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
 * Get the current visitor's IP address
 *
 * @return  string
 *
 * @since   1.6.0
 */
public static function getIp() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::setIp`

Set the IP address of the current visitor

##### Signature

```php
public static Joomla\Utilities\IpHelper::setIp ( string $ip  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `ip` | `string` | The visitor's IP address |

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
 * Set the IP address of the current visitor
 *
 * @param   string  $ip  The visitor's IP address
 *
 * @return  void
 *
 * @since   1.6.0
 */
public static function setIp(string $ip) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::isIPv6`

Is it an IPv6 IP address?

##### Signature

```php
public static Joomla\Utilities\IpHelper::isIPv6 ( string $ip  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `ip` | `string` | An IPv4 or IPv6 address |

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
 * Is it an IPv6 IP address?
 *
 * @param   string   $ip  An IPv4 or IPv6 address
 *
 * @return  boolean
 *
 * @since   1.6.0
 */
public static function isIPv6(string $ip) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::IPinList`

Checks if an IP is contained in a list of IPs or IP expressions

##### Signature

```php
public static Joomla\Utilities\IpHelper::IPinList ( string $ip [, array|string $ipTable = &#039;&#039; ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `ip` | `string` | The IPv4/IPv6 address to check |
| `ipTable` | `array` or `string` | An IP expression (or a comma-separated or array list of IP expressions) to check against Defaults to `''`. |

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
 * Checks if an IP is contained in a list of IPs or IP expressions
 *
 * @param   string        $ip       The IPv4/IPv6 address to check
 * @param   array|string  $ipTable  An IP expression (or a comma-separated or array list of IP expressions) to check against
 *
 * @return  boolean
 *
 * @since   1.6.0
 */
public static function IPinList(string $ip,  $ipTable = '') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::workaroundIPIssues`

Works around the REMOTE_ADDR not containing the user's IP

##### Signature

```php
public static Joomla\Utilities\IpHelper::workaroundIPIssues ( void ) : void
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
 * Works around the REMOTE_ADDR not containing the user's IP
 *
 * @return  void
 *
 * @since   1.6.0
 */
public static function workaroundIPIssues() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::setAllowIpOverrides`

Should I allow the remote client's IP to be overridden by an X-Forwarded-For or Client-Ip HTTP header?

##### Signature

```php
public static Joomla\Utilities\IpHelper::setAllowIpOverrides ( bool $newState  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `newState` | `bool` | True to allow the override |

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
 * Should I allow the remote client's IP to be overridden by an X-Forwarded-For or Client-Ip HTTP header?
 *
 * @param   boolean  $newState  True to allow the override
 *
 * @return  void
 *
 * @since   1.6.0
 */
public static function setAllowIpOverrides(bool $newState) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::detectAndCleanIP`

Gets the visitor's IP address.

Automatically handles reverse proxies reporting the IPs of intermediate devices, like load balancers. Examples:

- https://www.akeebabackup.com/support/admin-tools/13743-double-ip-adresses-in-security-exception-log-warnings.html
- https://stackoverflow.com/questions/2422395/why-is-request-envremote-addr-returning-two-ips

The solution used is assuming that the last IP address is the external one.

##### Signature

```php
protected static Joomla\Utilities\IpHelper::detectAndCleanIP ( void ) : string
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
 * Gets the visitor's IP address.
 *
 * Automatically handles reverse proxies reporting the IPs of intermediate devices, like load balancers. Examples:
 *
 * - https://www.akeebabackup.com/support/admin-tools/13743-double-ip-adresses-in-security-exception-log-warnings.html
 * - https://stackoverflow.com/questions/2422395/why-is-request-envremote-addr-returning-two-ips
 *
 * The solution used is assuming that the last IP address is the external one.
 *
 * @return  string
 *
 * @since   1.6.0
 */
protected static function detectAndCleanIP() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::detectIP`

Gets the visitor's IP address

##### Signature

```php
protected static Joomla\Utilities\IpHelper::detectIP ( void ) : string
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
 * Gets the visitor's IP address
 *
 * @return  string
 *
 * @since   1.6.0
 */
protected static function detectIP() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::inetToBits`

Converts inet_pton output to bits string

##### Signature

```php
protected static Joomla\Utilities\IpHelper::inetToBits ( string $inet  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `inet` | `string` | The in_addr representation of an IPv4 or IPv6 address |

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
 * Converts inet_pton output to bits string
 *
 * @param   string  $inet  The in_addr representation of an IPv4 or IPv6 address
 *
 * @return  string
 *
 * @since   1.6.0
 */
protected static function inetToBits(string $inet) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Utilities\IpHelper::checkIPv6CIDR`

Checks if an IPv6 address $ip is part of the IPv6 CIDR block $cidrnet

##### Signature

```php
protected static Joomla\Utilities\IpHelper::checkIPv6CIDR ( string $ip, string $cidrnet  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `ip` | `string` | The IPv6 address to check, e.g. 21DA:00D3:0000:2F3B:02AC:00FF:FE28:9C5A |
| `cidrnet` | `string` | The IPv6 CIDR block, e.g. 21DA:00D3:0000:2F3B::/64 |

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
 * Checks if an IPv6 address $ip is part of the IPv6 CIDR block $cidrnet
 *
 * @param   string  $ip       The IPv6 address to check, e.g. 21DA:00D3:0000:2F3B:02AC:00FF:FE28:9C5A
 * @param   string  $cidrnet  The IPv6 CIDR block, e.g. 21DA:00D3:0000:2F3B::/64
 *
 * @return  boolean
 *
 * @since   1.6.0
 */
protected static function checkIPv6CIDR(string $ip, string $cidrnet) : bool{
    // @todo Add adapter code.
}
```
