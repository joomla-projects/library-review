# Joomla/View Package version 1.3.0

Joomla View Package

## The Joomla\View\ViewInterface Interface

Joomla Framework View Interface

### Methods

#### `Joomla\View\ViewInterface::escape`

Escape output.

This method has been deprecated and gets removed in version 2.0. 
Output escaping will no longer be required by the interface..

Does not need to be replaced.

#### `Joomla\View\ViewInterface::render`

Render the view.

##### Signature

```php
abstract public Joomla\View\ViewInterface::render ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The rendered view.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the view.
 *
 * @return  string  The rendered view.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
abstract public function render() : string;
```

## The Joomla\View\AbstractView Class

Joomla Framework Abstract View Class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$model` | `Joomla\Model\ModelInterface` | The model object. |    
### Methods

#### `Joomla\View\AbstractView::__construct`

Instantiate the view.

##### Signature

```php
public Joomla\View\AbstractView::__construct ( Joomla\Model\ModelInterface $model  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `model` | `Joomla\Model\ModelInterface` | The model object. |

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
 * Instantiate the view.
 *
 * @param   ModelInterface  $model  The model object.
 *
 * @since   1.0
 */
public function __construct(Joomla\Model\ModelInterface $model) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\View\AbstractView::escape`

Escape output.

This method has been deprecated and gets removed in version 2.0. 
Interface method is deprecated without replacement..

Does not need to be replaced.

#### `Joomla\View\AbstractView::render`

Render the view.

##### Signature

```php
abstract public Joomla\View\AbstractView::render ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The rendered view.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the view.
 *
 * @return  string  The rendered view.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
abstract public function render() : string;
```

## The Joomla\View\AbstractHtmlView Class

Joomla Framework HTML View Class

This class has been deprecated and gets removed in version 2.0.
Will become BaseHtmlView in 2.0

Does not need to be replaced.
