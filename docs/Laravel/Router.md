# Joomla/Router Package version 1.2.0

Joomla Router Package

## The Joomla\Router\Router Class

A path router.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$controllerPrefix` | `string` | Controller class name prefix for creating controller objects by name. |
| protected `$default` | `string` | The default page controller name for an empty route. |
| protected `$input` | `Joomla\Input\Input` | An input object from which to derive the route. |
| protected `$maps` | `array` | An array of rules, each rule being an associative array('regex'=> $regex, 'vars' => $vars, 'controller' => $controller) |    

### Methods

#### `Joomla\Router\Router::__construct`

Constructor.

##### Signature

```php
public Joomla\Router\Router::__construct ( [ Joomla\Input\Input $input = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | An optional input object from which to derive the route. Defaults to `null`. |

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
 * @param   Input  $input  An optional input object from which to derive the route.
 *
 * @since   1.0
 */
public function __construct(Joomla\Input\Input $input = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Router\Router::addMap`

Add a route map to the router. If the pattern already exists it will be overwritten.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::addMaps`

Add an array of route maps to the router.  If the pattern already exists it will be overwritten.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::getController`

Find and execute the appropriate controller based on a given route.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::setControllerPrefix`

Set the controller name prefix.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::setDefaultController`

Set the default controller name.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::fetchController`

Get a Controller object for a given name.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

#### `Joomla\Router\Router::parseRoute`

Parse the given route and return the name of a controller mapped to the given route.

##### Signature

```php
protected Joomla\Router\Router::parseRoute ( string $route  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `route` | `string` | The route string for which to find and execute a controller. |

##### Return Values

`string` The controller name for the given route excluding prefix.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse the given route and return the name of a controller mapped to the given route.
 *
 * @param   string  $route  The route string for which to find and execute a controller.
 *
 * @return  string  The controller name for the given route excluding prefix.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
protected function parseRoute(string $route) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Router\RestRouter Class

RESTful Web application router class for the Joomla Framework.

This class has been deprecated and gets removed in version 2.0.
Use the base Router class instead

Does not need to be replaced.
