# Joomla/Test Package version 1.3.1

Joomla Test Helper Package

## The Joomla\Test\WebInspector Class

Inspector for the Joomla\Application\AbstractWebApplication class.

This class has been deprecated and gets removed in version 2.0.
Deprecated without replacement

Does not need to be replaced.

## The Joomla\Test\TestHelper Class

Static helper methods to assist unit testing PHP code.

### Methods

#### `Joomla\Test\TestHelper::assignMockCallbacks`

Assigns mock callbacks to methods.

This method assumes that the mock callback is named {mock}{method name}.

This method has been deprecated and gets removed in version 2.0. 
Manage callbacks within your test cases.

Does not need to be replaced.

#### `Joomla\Test\TestHelper::assignMockReturns`

Assigns mock values to methods.

This method has been deprecated and gets removed in version 2.0. 
Manage returns within your test cases.

Does not need to be replaced.

#### `Joomla\Test\TestHelper::getValue`

Helper method that gets a protected or private property in a class by relfection.

##### Signature

```php
public static Joomla\Test\TestHelper::getValue ( object $object, string $propertyName  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | The object from which to return the property value. |
| `propertyName` | `string` | The name of the property to return. |

##### Return Values

`mixed` The value of the property.

##### Errors/Exceptions

Throws InvalidArgumentException if property not available.<br />
Throws ReflectionException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Helper method that gets a protected or private property in a class by relfection.
 *
 * @param   object  $object        The object from which to return the property value.
 * @param   string  $propertyName  The name of the property to return.
 *
 * @return  mixed  The value of the property.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException if property not available.
 * @throws  \ReflectionException
 */
public static function getValue(object $object, string $propertyName) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Test\TestHelper::invoke`

Helper method that invokes a protected or private method in a class by reflection.

Example usage:

$this->assertTrue(TestHelper::invoke($this->object, 'methodName', 123));
where 123 is the input parameter for your method

##### Signature

```php
public static Joomla\Test\TestHelper::invoke ( object $object, string $methodName  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | The object on which to invoke the method. |
| `methodName` | `string` | The name of the method to invoke. |

##### Return Values

`mixed` 

##### Errors/Exceptions

Throws ReflectionException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Helper method that invokes a protected or private method in a class by reflection.
 *
 * Example usage:
 *
 * $this->assertTrue(TestHelper::invoke($this->object, 'methodName', 123));
 * where 123 is the input parameter for your method
 *
 * @param   object  $object      The object on which to invoke the method.
 * @param   string  $methodName  The name of the method to invoke.
 *
 * @return  mixed
 *
 * @since   1.0
 * @throws  \ReflectionException
 */
public static function invoke(object $object, string $methodName) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Test\TestHelper::setValue`

Helper method that sets a protected or private property in a class by relfection.

##### Signature

```php
public static Joomla\Test\TestHelper::setValue ( object $object, string $propertyName, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `object` | `object` | The object for which to set the property. |
| `propertyName` | `string` | The name of the property to set. |
| `value` | `mixed` | The value to set for the property. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws ReflectionException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Helper method that sets a protected or private property in a class by relfection.
 *
 * @param   object  $object        The object for which to set the property.
 * @param   string  $propertyName  The name of the property to set.
 * @param   mixed   $value         The value to set for the property.
 *
 * @return  void
 *
 * @since   1.0
 * @throws  \ReflectionException
 */
public static function setValue(object $object, string $propertyName, mixed $value) : void{
    // @todo Add adapter code.
}
```
