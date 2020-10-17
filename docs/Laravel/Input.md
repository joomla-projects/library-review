# Joomla/Input Package version 1.4.0

Joomla Input Package

## The Joomla\Input\Cookie Class

Joomla! Input Cookie Class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` | Options array for the Input instance. |
| protected `$filter` | `Filter\InputFilter` | Filter object to use. |
| protected `$data` | `array` | Input data. |
| protected `$inputs` | `Joomla\Input\Input[]` | Input objects |
| protected static `$loaded` | `bool` | Is all GLOBAL added |    

### Methods

#### `Joomla\Input\Cookie::__construct`

Constructor.

##### Signature

```php
public Joomla\Input\Cookie::__construct ( [ array $source = null [, array $options = [] ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `array` | Ignored. Defaults to `null`. |
| `options` | `array` | Array of configuration parameters (Optional) Defaults to `[]`. |

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
 * @param   array  $source   Ignored.
 * @param   array  $options  Array of configuration parameters (Optional)
 *
 * @since   1.0
 */
public function __construct(array $source = null, array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::set`

Sets a value

##### Signature

```php
public Joomla\Input\Cookie::set ( string $name, mixed $value [, array $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to set. |
| `value` | `mixed` | Value to assign to the input. |
| `options` | `array` | An associative array which may have any of the keys expires, path, domain,  secure, httponly and samesite. The values have the same meaning as described for the parameters with the same name. The value of the samesite element should be either Lax or Strict. If any of the allowed options are not given, their default values are the same as the default values of the explicit parameters. If the samesite element is omitted, no SameSite cookie attribute is set. Defaults to `[]`. |

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
 * Sets a value
 *
 * @param   string   $name      Name of the value to set.
 * @param   mixed    $value     Value to assign to the input.
 * @param   array    $options   An associative array which may have any of the keys expires, path, domain,
 *                              secure, httponly and samesite. The values have the same meaning as described
 *                              for the parameters with the same name. The value of the samesite element
 *                              should be either Lax or Strict. If any of the allowed options are not given,
 *                              their default values are the same as the default values of the explicit
 *                              parameters. If the samesite element is omitted, no SameSite cookie attribute
 *                              is set.
 *
 * @return  void
 *
 * @link    https://www.ietf.org/rfc/rfc2109.txt
 * @link    https://php.net/manual/en/function.setcookie.php
 *
 * @since   1.0
 *
 * @note    As of 1.4.0, the (name, value, expire, path, domain, secure, httpOnly) signature is deprecated and will not be supported
 *          when support for PHP 7.2 and earlier is dropped
 */
public function set(string $name, mixed $value, array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::__get`

Magic method to get an input object

##### Signature

```php
public Joomla\Input\Cookie::__get ( mixed $name  ) : Joomla\Input\Input
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `mixed` | Name of the input object to retrieve. |

##### Return Values

`Joomla\Input\Input` The request input object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get an input object
 *
 * @param   mixed  $name  Name of the input object to retrieve.
 *
 * @return  Input  The request input object
 *
 * @since   1.0
 */
public function __get(mixed $name) : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::count`

Get the number of variables.

##### Signature

```php
public Joomla\Input\Cookie::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of variables in the input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the number of variables.
 *
 * @return  integer  The number of variables in the input.
 *
 * @since   1.0
 * @see     Countable::count()
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::get`

Gets a value from the input data.

##### Signature

```php
public Joomla\Input\Cookie::get ( string $name [, mixed $default = null [, string $filter = &#039;cmd&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to get. |
| `default` | `mixed` | Default value to return if variable does not exist. Defaults to `null`. |
| `filter` | `string` | Filter to apply to the value. Defaults to `'cmd'`. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a value from the input data.
 *
 * @param   string  $name     Name of the value to get.
 * @param   mixed   $default  Default value to return if variable does not exist.
 * @param   string  $filter   Filter to apply to the value.
 *
 * @return  mixed  The filtered input value.
 *
 * @see     \Joomla\Filter\InputFilter::clean()
 * @since   1.0
 */
public function get(string $name, mixed $default = null, string $filter = 'cmd') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::getArray`

Gets an array of values from the request.

##### Signature

```php
public Joomla\Input\Cookie::getArray ( [ array $vars = [] [, mixed $datasource = null ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `vars` | `array` | Associative array of keys and filter types to apply.  If empty and datasource is null, all the input data will be returned but filtered using the default case in JFilterInput::clean. Defaults to `[]`. |
| `datasource` | `mixed` | Array to retrieve data from, or null Defaults to `null`. |

##### Return Values

`mixed` The filtered input data.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an array of values from the request.
 *
 * @param   array  $vars        Associative array of keys and filter types to apply.
 *                              If empty and datasource is null, all the input data will be returned
 *                              but filtered using the default case in JFilterInput::clean.
 * @param   mixed  $datasource  Array to retrieve data from, or null
 *
 * @return  mixed  The filtered input data.
 *
 * @since   1.0
 */
public function getArray(array $vars = [], mixed $datasource = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::getInputForRequestMethod`

Get the Input instance holding the data for the current request method

##### Signature

```php
public Joomla\Input\Cookie::getInputForRequestMethod ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Input instance holding the data for the current request method
 *
 * @return  Input
 *
 * @since   1.3.0
 */
public function getInputForRequestMethod() : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::def`

Define a value. The value will only be set if there's no value for the name or if it is null.

##### Signature

```php
public Joomla\Input\Cookie::def ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to define. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Define a value. The value will only be set if there's no value for the name or if it is null.
 *
 * @param   string  $name   Name of the value to define.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function def(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::exists`

Check if a value name exists.

##### Signature

```php
public Joomla\Input\Cookie::exists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Value name |

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
 * Check if a value name exists.
 *
 * @param   string  $name  Value name
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public function exists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::__call`

Magic method to get filtered input data.

##### Signature

```php
public Joomla\Input\Cookie::__call ( string $name, array $arguments  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the filter type prefixed with 'get'. |
| `arguments` | `array` | [0] The name of the variable [1] The default value. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get filtered input data.
 *
 * @param   string  $name       Name of the filter type prefixed with 'get'.
 * @param   array   $arguments  [0] The name of the variable [1] The default value.
 *
 * @return  mixed   The filtered input value.
 *
 * @since   1.0
 */
public function __call(string $name, array $arguments) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::getMethod`

Gets the request method.

##### Signature

```php
public Joomla\Input\Cookie::getMethod ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The request method.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the request method.
 *
 * @return  string   The request method.
 *
 * @since   1.0
 */
public function getMethod() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::serialize`

Serialize the input.

##### Signature

```php
public Joomla\Input\Cookie::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the input.
 *
 * @return  string  The serialized input.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::unserialize`

Unserialize the input.

##### Signature

```php
public Joomla\Input\Cookie::unserialize ( string $input  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The serialized input. |

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
 * Unserialize the input.
 *
 * @param   string  $input  The serialized input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $input) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Cookie::loadAllInputs`

Load all of the global inputs.

##### Signature

```php
protected Joomla\Input\Cookie::loadAllInputs ( void ) : void
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
 * Load all of the global inputs.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function loadAllInputs() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Input\Input Class

Joomla! Input Base Class

This is an abstracted input class used to manage retrieving data from the application environment.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` | Options array for the Input instance. |
| protected `$filter` | `Filter\InputFilter` | Filter object to use. |
| protected `$data` | `array` | Input data. |
| protected `$inputs` | `Joomla\Input\Input[]` | Input objects |
| protected static `$loaded` | `bool` | Is all GLOBAL added |    

### Methods

#### `Joomla\Input\Input::__construct`

Constructor.

##### Signature

```php
public Joomla\Input\Input::__construct ( [ array $source = null [, array $options = [] ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `array` | Optional source data. If omitted, a copy of the server variable '_REQUEST' is used. Defaults to `null`. |
| `options` | `array` | An optional associative array of configuration parameters:  filter: An instance of Filter\Input. If omitted, a default filter is initialised. Defaults to `[]`. |

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
 * @param   array  $source   Optional source data. If omitted, a copy of the server variable '_REQUEST' is used.
 * @param   array  $options  An optional associative array of configuration parameters:
 *                           filter: An instance of Filter\Input. If omitted, a default filter is initialised.
 *
 * @since   1.0
 */
public function __construct(array $source = null, array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::__get`

Magic method to get an input object

##### Signature

```php
public Joomla\Input\Input::__get ( mixed $name  ) : Joomla\Input\Input
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `mixed` | Name of the input object to retrieve. |

##### Return Values

`Joomla\Input\Input` The request input object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get an input object
 *
 * @param   mixed  $name  Name of the input object to retrieve.
 *
 * @return  Input  The request input object
 *
 * @since   1.0
 */
public function __get(mixed $name) : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::count`

Get the number of variables.

##### Signature

```php
public Joomla\Input\Input::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of variables in the input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the number of variables.
 *
 * @return  integer  The number of variables in the input.
 *
 * @since   1.0
 * @see     Countable::count()
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::get`

Gets a value from the input data.

##### Signature

```php
public Joomla\Input\Input::get ( string $name [, mixed $default = null [, string $filter = &#039;cmd&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to get. |
| `default` | `mixed` | Default value to return if variable does not exist. Defaults to `null`. |
| `filter` | `string` | Filter to apply to the value. Defaults to `'cmd'`. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a value from the input data.
 *
 * @param   string  $name     Name of the value to get.
 * @param   mixed   $default  Default value to return if variable does not exist.
 * @param   string  $filter   Filter to apply to the value.
 *
 * @return  mixed  The filtered input value.
 *
 * @see     \Joomla\Filter\InputFilter::clean()
 * @since   1.0
 */
public function get(string $name, mixed $default = null, string $filter = 'cmd') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::getArray`

Gets an array of values from the request.

##### Signature

```php
public Joomla\Input\Input::getArray ( [ array $vars = [] [, mixed $datasource = null ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `vars` | `array` | Associative array of keys and filter types to apply.  If empty and datasource is null, all the input data will be returned but filtered using the default case in JFilterInput::clean. Defaults to `[]`. |
| `datasource` | `mixed` | Array to retrieve data from, or null Defaults to `null`. |

##### Return Values

`mixed` The filtered input data.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an array of values from the request.
 *
 * @param   array  $vars        Associative array of keys and filter types to apply.
 *                              If empty and datasource is null, all the input data will be returned
 *                              but filtered using the default case in JFilterInput::clean.
 * @param   mixed  $datasource  Array to retrieve data from, or null
 *
 * @return  mixed  The filtered input data.
 *
 * @since   1.0
 */
public function getArray(array $vars = [], mixed $datasource = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::getInputForRequestMethod`

Get the Input instance holding the data for the current request method

##### Signature

```php
public Joomla\Input\Input::getInputForRequestMethod ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Input instance holding the data for the current request method
 *
 * @return  Input
 *
 * @since   1.3.0
 */
public function getInputForRequestMethod() : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::set`

Sets a value

##### Signature

```php
public Joomla\Input\Input::set ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to set. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Sets a value
 *
 * @param   string  $name   Name of the value to set.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function set(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::def`

Define a value. The value will only be set if there's no value for the name or if it is null.

##### Signature

```php
public Joomla\Input\Input::def ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to define. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Define a value. The value will only be set if there's no value for the name or if it is null.
 *
 * @param   string  $name   Name of the value to define.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function def(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::exists`

Check if a value name exists.

##### Signature

```php
public Joomla\Input\Input::exists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Value name |

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
 * Check if a value name exists.
 *
 * @param   string  $name  Value name
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public function exists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::__call`

Magic method to get filtered input data.

##### Signature

```php
public Joomla\Input\Input::__call ( string $name, array $arguments  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the filter type prefixed with 'get'. |
| `arguments` | `array` | [0] The name of the variable [1] The default value. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get filtered input data.
 *
 * @param   string  $name       Name of the filter type prefixed with 'get'.
 * @param   array   $arguments  [0] The name of the variable [1] The default value.
 *
 * @return  mixed   The filtered input value.
 *
 * @since   1.0
 */
public function __call(string $name, array $arguments) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::getMethod`

Gets the request method.

##### Signature

```php
public Joomla\Input\Input::getMethod ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The request method.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the request method.
 *
 * @return  string   The request method.
 *
 * @since   1.0
 */
public function getMethod() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::serialize`

Serialize the input.

##### Signature

```php
public Joomla\Input\Input::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the input.
 *
 * @return  string  The serialized input.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::unserialize`

Unserialize the input.

##### Signature

```php
public Joomla\Input\Input::unserialize ( string $input  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The serialized input. |

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
 * Unserialize the input.
 *
 * @param   string  $input  The serialized input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $input) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Input::loadAllInputs`

Load all of the global inputs.

##### Signature

```php
protected Joomla\Input\Input::loadAllInputs ( void ) : void
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
 * Load all of the global inputs.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function loadAllInputs() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Input\Files Class

Joomla! Input Files Class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$decodedData` | `array` | The pivoted data from a $_FILES or compatible array. |
| protected `$options` | `array` | Options array for the Input instance. |
| protected `$filter` | `Filter\InputFilter` | Filter object to use. |
| protected `$data` | `array` | Input data. |
| protected `$inputs` | `Joomla\Input\Input[]` | Input objects |
| protected static `$loaded` | `bool` | Is all GLOBAL added |    

### Methods

#### `Joomla\Input\Files::__construct`

The class constructor.

##### Signature

```php
public Joomla\Input\Files::__construct ( [ array $source = null [, array $options = [] ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `array` | The source argument is ignored. $_FILES is always used. Defaults to `null`. |
| `options` | `array` | An optional array of configuration options:  filter : a custom JFilterInput object. Defaults to `[]`. |

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
 * The class constructor.
 *
 * @param   array  $source   The source argument is ignored. $_FILES is always used.
 * @param   array  $options  An optional array of configuration options:
 *                           filter : a custom JFilterInput object.
 *
 * @since   1.0
 */
public function __construct(array $source = null, array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::get`

Gets a value from the input data.

##### Signature

```php
public Joomla\Input\Files::get ( string $name [, mixed $default = null [, string $filter = &#039;cmd&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the input property (usually the name of the files INPUT tag) to get. |
| `default` | `mixed` | The default value to return if the named property does not exist. Defaults to `null`. |
| `filter` | `string` | The filter to apply to the value. Defaults to `'cmd'`. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a value from the input data.
 *
 * @param   string  $name     The name of the input property (usually the name of the files INPUT tag) to get.
 * @param   mixed   $default  The default value to return if the named property does not exist.
 * @param   string  $filter   The filter to apply to the value.
 *
 * @return  mixed  The filtered input value.
 *
 * @see     \Joomla\Filter\InputFilter::clean()
 * @since   1.0
 */
public function get(string $name, mixed $default = null, string $filter = 'cmd') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::decodeData`

Decode a data array.

##### Signature

```php
protected Joomla\Input\Files::decodeData ( array $data  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `array` | The data array to decode. |

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
 * Decode a data array.
 *
 * @param   array  $data  The data array to decode.
 *
 * @return  array
 *
 * @since   1.0
 */
protected function decodeData(array $data) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::set`

Sets a value.

##### Signature

```php
public Joomla\Input\Files::set ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the input property to set. |
| `value` | `mixed` | The value to assign to the input property. |

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
 * Sets a value.
 *
 * @param   string  $name   The name of the input property to set.
 * @param   mixed   $value  The value to assign to the input property.
 *
 * @return  void
 *
 * @since   1.0
 */
public function set(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::__get`

Magic method to get an input object

##### Signature

```php
public Joomla\Input\Files::__get ( mixed $name  ) : Joomla\Input\Input
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `mixed` | Name of the input object to retrieve. |

##### Return Values

`Joomla\Input\Input` The request input object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get an input object
 *
 * @param   mixed  $name  Name of the input object to retrieve.
 *
 * @return  Input  The request input object
 *
 * @since   1.0
 */
public function __get(mixed $name) : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::count`

Get the number of variables.

##### Signature

```php
public Joomla\Input\Files::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of variables in the input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the number of variables.
 *
 * @return  integer  The number of variables in the input.
 *
 * @since   1.0
 * @see     Countable::count()
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::getArray`

Gets an array of values from the request.

##### Signature

```php
public Joomla\Input\Files::getArray ( [ array $vars = [] [, mixed $datasource = null ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `vars` | `array` | Associative array of keys and filter types to apply.  If empty and datasource is null, all the input data will be returned but filtered using the default case in JFilterInput::clean. Defaults to `[]`. |
| `datasource` | `mixed` | Array to retrieve data from, or null Defaults to `null`. |

##### Return Values

`mixed` The filtered input data.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an array of values from the request.
 *
 * @param   array  $vars        Associative array of keys and filter types to apply.
 *                              If empty and datasource is null, all the input data will be returned
 *                              but filtered using the default case in JFilterInput::clean.
 * @param   mixed  $datasource  Array to retrieve data from, or null
 *
 * @return  mixed  The filtered input data.
 *
 * @since   1.0
 */
public function getArray(array $vars = [], mixed $datasource = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::getInputForRequestMethod`

Get the Input instance holding the data for the current request method

##### Signature

```php
public Joomla\Input\Files::getInputForRequestMethod ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Input instance holding the data for the current request method
 *
 * @return  Input
 *
 * @since   1.3.0
 */
public function getInputForRequestMethod() : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::def`

Define a value. The value will only be set if there's no value for the name or if it is null.

##### Signature

```php
public Joomla\Input\Files::def ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to define. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Define a value. The value will only be set if there's no value for the name or if it is null.
 *
 * @param   string  $name   Name of the value to define.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function def(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::exists`

Check if a value name exists.

##### Signature

```php
public Joomla\Input\Files::exists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Value name |

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
 * Check if a value name exists.
 *
 * @param   string  $name  Value name
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public function exists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::__call`

Magic method to get filtered input data.

##### Signature

```php
public Joomla\Input\Files::__call ( string $name, array $arguments  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the filter type prefixed with 'get'. |
| `arguments` | `array` | [0] The name of the variable [1] The default value. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get filtered input data.
 *
 * @param   string  $name       Name of the filter type prefixed with 'get'.
 * @param   array   $arguments  [0] The name of the variable [1] The default value.
 *
 * @return  mixed   The filtered input value.
 *
 * @since   1.0
 */
public function __call(string $name, array $arguments) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::getMethod`

Gets the request method.

##### Signature

```php
public Joomla\Input\Files::getMethod ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The request method.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the request method.
 *
 * @return  string   The request method.
 *
 * @since   1.0
 */
public function getMethod() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::serialize`

Serialize the input.

##### Signature

```php
public Joomla\Input\Files::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the input.
 *
 * @return  string  The serialized input.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::unserialize`

Unserialize the input.

##### Signature

```php
public Joomla\Input\Files::unserialize ( string $input  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The serialized input. |

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
 * Unserialize the input.
 *
 * @param   string  $input  The serialized input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $input) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Files::loadAllInputs`

Load all of the global inputs.

##### Signature

```php
protected Joomla\Input\Files::loadAllInputs ( void ) : void
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
 * Load all of the global inputs.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function loadAllInputs() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Input\Json Class

Joomla! Input JSON Class

This class decodes a JSON string from the raw request data and makes it available via
the standard Input interface.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` | Options array for the Input instance. |
| protected `$filter` | `Filter\InputFilter` | Filter object to use. |
| protected `$data` | `array` | Input data. |
| protected `$inputs` | `Joomla\Input\Input[]` | Input objects |
| protected static `$loaded` | `bool` | Is all GLOBAL added |    

### Methods

#### `Joomla\Input\Json::__construct`

Constructor.

##### Signature

```php
public Joomla\Input\Json::__construct ( [ array $source = null [, array $options = [] ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `array` | Source data (Optional, default is the raw HTTP input decoded from JSON) Defaults to `null`. |
| `options` | `array` | Array of configuration parameters (Optional) Defaults to `[]`. |

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
 * @param   array  $source   Source data (Optional, default is the raw HTTP input decoded from JSON)
 * @param   array  $options  Array of configuration parameters (Optional)
 *
 * @since   1.0
 */
public function __construct(array $source = null, array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::getRaw`

Gets the raw JSON string from the request.

##### Signature

```php
public Joomla\Input\Json::getRaw ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The raw JSON string from the request.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the raw JSON string from the request.
 *
 * @return  string  The raw JSON string from the request.
 *
 * @since   1.0
 */
public function getRaw() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::__get`

Magic method to get an input object

##### Signature

```php
public Joomla\Input\Json::__get ( mixed $name  ) : Joomla\Input\Input
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `mixed` | Name of the input object to retrieve. |

##### Return Values

`Joomla\Input\Input` The request input object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get an input object
 *
 * @param   mixed  $name  Name of the input object to retrieve.
 *
 * @return  Input  The request input object
 *
 * @since   1.0
 */
public function __get(mixed $name) : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::count`

Get the number of variables.

##### Signature

```php
public Joomla\Input\Json::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of variables in the input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the number of variables.
 *
 * @return  integer  The number of variables in the input.
 *
 * @since   1.0
 * @see     Countable::count()
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::get`

Gets a value from the input data.

##### Signature

```php
public Joomla\Input\Json::get ( string $name [, mixed $default = null [, string $filter = &#039;cmd&#039; ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to get. |
| `default` | `mixed` | Default value to return if variable does not exist. Defaults to `null`. |
| `filter` | `string` | Filter to apply to the value. Defaults to `'cmd'`. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets a value from the input data.
 *
 * @param   string  $name     Name of the value to get.
 * @param   mixed   $default  Default value to return if variable does not exist.
 * @param   string  $filter   Filter to apply to the value.
 *
 * @return  mixed  The filtered input value.
 *
 * @see     \Joomla\Filter\InputFilter::clean()
 * @since   1.0
 */
public function get(string $name, mixed $default = null, string $filter = 'cmd') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::getArray`

Gets an array of values from the request.

##### Signature

```php
public Joomla\Input\Json::getArray ( [ array $vars = [] [, mixed $datasource = null ]] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `vars` | `array` | Associative array of keys and filter types to apply.  If empty and datasource is null, all the input data will be returned but filtered using the default case in JFilterInput::clean. Defaults to `[]`. |
| `datasource` | `mixed` | Array to retrieve data from, or null Defaults to `null`. |

##### Return Values

`mixed` The filtered input data.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an array of values from the request.
 *
 * @param   array  $vars        Associative array of keys and filter types to apply.
 *                              If empty and datasource is null, all the input data will be returned
 *                              but filtered using the default case in JFilterInput::clean.
 * @param   mixed  $datasource  Array to retrieve data from, or null
 *
 * @return  mixed  The filtered input data.
 *
 * @since   1.0
 */
public function getArray(array $vars = [], mixed $datasource = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::getInputForRequestMethod`

Get the Input instance holding the data for the current request method

##### Signature

```php
public Joomla\Input\Json::getInputForRequestMethod ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Input instance holding the data for the current request method
 *
 * @return  Input
 *
 * @since   1.3.0
 */
public function getInputForRequestMethod() : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::set`

Sets a value

##### Signature

```php
public Joomla\Input\Json::set ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to set. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Sets a value
 *
 * @param   string  $name   Name of the value to set.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function set(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::def`

Define a value. The value will only be set if there's no value for the name or if it is null.

##### Signature

```php
public Joomla\Input\Json::def ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the value to define. |
| `value` | `mixed` | Value to assign to the input. |

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
 * Define a value. The value will only be set if there's no value for the name or if it is null.
 *
 * @param   string  $name   Name of the value to define.
 * @param   mixed   $value  Value to assign to the input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function def(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::exists`

Check if a value name exists.

##### Signature

```php
public Joomla\Input\Json::exists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Value name |

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
 * Check if a value name exists.
 *
 * @param   string  $name  Value name
 *
 * @return  boolean
 *
 * @since   1.2.0
 */
public function exists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::__call`

Magic method to get filtered input data.

##### Signature

```php
public Joomla\Input\Json::__call ( string $name, array $arguments  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the filter type prefixed with 'get'. |
| `arguments` | `array` | [0] The name of the variable [1] The default value. |

##### Return Values

`mixed` The filtered input value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get filtered input data.
 *
 * @param   string  $name       Name of the filter type prefixed with 'get'.
 * @param   array   $arguments  [0] The name of the variable [1] The default value.
 *
 * @return  mixed   The filtered input value.
 *
 * @since   1.0
 */
public function __call(string $name, array $arguments) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::getMethod`

Gets the request method.

##### Signature

```php
public Joomla\Input\Json::getMethod ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The request method.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets the request method.
 *
 * @return  string   The request method.
 *
 * @since   1.0
 */
public function getMethod() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::serialize`

Serialize the input.

##### Signature

```php
public Joomla\Input\Json::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized input.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the input.
 *
 * @return  string  The serialized input.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::unserialize`

Unserialize the input.

##### Signature

```php
public Joomla\Input\Json::unserialize ( string $input  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The serialized input. |

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
 * Unserialize the input.
 *
 * @param   string  $input  The serialized input.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $input) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Input\Json::loadAllInputs`

Load all of the global inputs.

##### Signature

```php
protected Joomla\Input\Json::loadAllInputs ( void ) : void
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
 * Load all of the global inputs.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function loadAllInputs() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Input\Cli Class

Joomla! Input CLI Class

This class has been deprecated and gets removed in version 2.0.
Use a Symfony\Component\Console\Input\InputInterface implementation when using the `joomla/console` package

Does not need to be replaced.
