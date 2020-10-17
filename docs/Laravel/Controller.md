# Joomla/Controller Package version 1.1.2

Joomla Controller Package

## The Joomla\Controller\ControllerInterface Interface

Joomla Framework Controller Interface

### Methods

#### `Joomla\Controller\ControllerInterface::execute`

Execute the controller.

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::execute ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if controller finished execution, false if the controller did not 
finish execution. A controller might return false if some precondition for
the controller to run has not been satisfied.

##### Errors/Exceptions

Throws LogicException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Execute the controller.
 *
 * @return  boolean  True if controller finished execution, false if the controller did not
 *                   finish execution. A controller might return false if some precondition for
 *                   the controller to run has not been satisfied.
 *
 * @since   1.0
 * @throws  \LogicException
 * @throws  \RuntimeException
 */
abstract public function execute() : bool;
```
#### `Joomla\Controller\ControllerInterface::getApplication`

Get the application object.

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::getApplication ( void ) : Joomla\Application\AbstractApplication
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Application\AbstractApplication` The application object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the application object.
 *
 * @return  AbstractApplication  The application object.
 *
 * @since   1.0
 */
abstract public function getApplication() : Joomla\Application\AbstractApplication;
```
#### `Joomla\Controller\ControllerInterface::getInput`

Get the input object.

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::getInput ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` The input object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the input object.
 *
 * @return  Input  The input object.
 *
 * @since   1.0
 */
abstract public function getInput() : Joomla\Input\Input;
```
#### `Joomla\Controller\ControllerInterface::setApplication`

Set the application object.

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::setApplication ( Joomla\Application\AbstractApplication $app  ) : Joomla\Controller\ControllerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `app` | `Joomla\Application\AbstractApplication` | The application object. |

##### Return Values

`Joomla\Controller\ControllerInterface` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the application object.
 *
 * @param   AbstractApplication  $app  The application object.
 *
 * @return  ControllerInterface  Returns itself to support chaining.
 *
 * @since   1.0
 */
abstract public function setApplication(Joomla\Application\AbstractApplication $app) : Joomla\Controller\ControllerInterface;
```
#### `Joomla\Controller\ControllerInterface::setInput`

Set the input object.

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::setInput ( Joomla\Input\Input $input  ) : Joomla\Controller\ControllerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | The input object. |

##### Return Values

`Joomla\Controller\ControllerInterface` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the input object.
 *
 * @param   Input  $input  The input object.
 *
 * @return  ControllerInterface  Returns itself to support chaining.
 *
 * @since   1.0
 */
abstract public function setInput(Joomla\Input\Input $input) : Joomla\Controller\ControllerInterface;
```
#### `Joomla\Controller\ControllerInterface::serialize`

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::serialize ( void ) : void
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
abstract public function serialize() : void;
```
#### `Joomla\Controller\ControllerInterface::unserialize`

##### Signature

```php
abstract public Joomla\Controller\ControllerInterface::unserialize (  $serialized  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `serialized` | `` |  |

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
abstract public function unserialize( $serialized) : void;
```

## The Joomla\Controller\AbstractController Class

Joomla Framework Base Controller Class

### Methods

#### `Joomla\Controller\AbstractController::__construct`

Instantiate the controller.

##### Signature

```php
public Joomla\Controller\AbstractController::__construct ( [ Joomla\Input\Input $input = null [, Joomla\Application\AbstractApplication $app = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | The input object. Defaults to `null`. |
| `app` | `Joomla\Application\AbstractApplication` | The application object. Defaults to `null`. |

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
 * Instantiate the controller.
 *
 * @param   Input                $input  The input object.
 * @param   AbstractApplication  $app    The application object.
 *
 * @since  1.0
 */
public function __construct(Joomla\Input\Input $input = null, Joomla\Application\AbstractApplication $app = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::getApplication`

Get the application object.

##### Signature

```php
public Joomla\Controller\AbstractController::getApplication ( void ) : Joomla\Application\AbstractApplication
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Application\AbstractApplication` The application object.

##### Errors/Exceptions

Throws UnexpectedValueException if the application has not been set.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the application object.
 *
 * @return  AbstractApplication  The application object.
 *
 * @since   1.0
 * @throws  \UnexpectedValueException if the application has not been set.
 */
public function getApplication() : Joomla\Application\AbstractApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::getInput`

Get the input object.

##### Signature

```php
public Joomla\Controller\AbstractController::getInput ( void ) : Joomla\Input\Input
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Input\Input` The input object.

##### Errors/Exceptions

Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the input object.
 *
 * @return  Input  The input object.
 *
 * @since   1.0
 * @throws  \UnexpectedValueException
 */
public function getInput() : Joomla\Input\Input{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::serialize`

Serialize the controller.

##### Signature

```php
public Joomla\Controller\AbstractController::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized controller.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the controller.
 *
 * @return  string  The serialized controller.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::setApplication`

Set the application object.

##### Signature

```php
public Joomla\Controller\AbstractController::setApplication ( Joomla\Application\AbstractApplication $app  ) : Joomla\Controller\AbstractController
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `app` | `Joomla\Application\AbstractApplication` | The application object. |

##### Return Values

`Joomla\Controller\AbstractController` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the application object.
 *
 * @param   AbstractApplication  $app  The application object.
 *
 * @return  AbstractController  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setApplication(Joomla\Application\AbstractApplication $app) : Joomla\Controller\AbstractController{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::setInput`

Set the input object.

##### Signature

```php
public Joomla\Controller\AbstractController::setInput ( Joomla\Input\Input $input  ) : Joomla\Controller\AbstractController
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | The input object. |

##### Return Values

`Joomla\Controller\AbstractController` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the input object.
 *
 * @param   Input  $input  The input object.
 *
 * @return  AbstractController  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setInput(Joomla\Input\Input $input) : Joomla\Controller\AbstractController{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::unserialize`

Unserialize the controller.

##### Signature

```php
public Joomla\Controller\AbstractController::unserialize ( string $input  ) : Joomla\Controller\AbstractController
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The serialized controller. |

##### Return Values

`Joomla\Controller\AbstractController` Returns itself to support chaining.

##### Errors/Exceptions

Throws UnexpectedValueException if input is not the right class.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Unserialize the controller.
 *
 * @param   string  $input  The serialized controller.
 *
 * @return  AbstractController  Returns itself to support chaining.
 *
 * @since   1.0
 * @throws  \UnexpectedValueException if input is not the right class.
 */
public function unserialize(string $input) : Joomla\Controller\AbstractController{
    // @todo Add adapter code.
}
```
#### `Joomla\Controller\AbstractController::execute`

Execute the controller.

##### Signature

```php
abstract public Joomla\Controller\AbstractController::execute ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if controller finished execution, false if the controller did not 
finish execution. A controller might return false if some precondition for
the controller to run has not been satisfied.

##### Errors/Exceptions

Throws LogicException <br />
Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Execute the controller.
 *
 * @return  boolean  True if controller finished execution, false if the controller did not
 *                   finish execution. A controller might return false if some precondition for
 *                   the controller to run has not been satisfied.
 *
 * @since   1.0
 * @throws  \LogicException
 * @throws  \RuntimeException
 */
abstract public function execute() : bool;
```
