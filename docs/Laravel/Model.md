# Joomla/Model Package version 1.3.0

Joomla Model Package

## The Joomla\Model\ModelInterface Interface

Joomla Framework Model Interface

This interface has been deprecated and gets removed in version 2.0.
Use the StatefulModelInterface instead

Does not need to be replaced.

## The Joomla\Model\StatefulModelInterface Interface

Joomla Framework Stateful Model Interface

### Methods

#### `Joomla\Model\StatefulModelInterface::getState`

Get the model state.

##### Signature

```php
abstract public Joomla\Model\StatefulModelInterface::getState ( void ) : Joomla\Registry\Registry
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Registry\Registry` The state object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the model state.
 *
 * @return  Registry  The state object.
 *
 * @since   1.3.0
 */
abstract public function getState() : Joomla\Registry\Registry;
```

## The Joomla\Model\DatabaseModelInterface Interface

Joomla Framework Database Model Interface

### Methods

#### `Joomla\Model\DatabaseModelInterface::getDb`

Get the database driver.

##### Signature

```php
abstract public Joomla\Model\DatabaseModelInterface::getDb ( void ) : Joomla\Database\DatabaseDriver
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Database\DatabaseDriver` The database driver.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the database driver.
 *
 * @return  DatabaseDriver  The database driver.
 *
 * @since   1.3.0
 */
abstract public function getDb() : Joomla\Database\DatabaseDriver;
```

## The Joomla\Model\AbstractModel Class

Joomla Framework Base Model Class

This class has been deprecated and gets removed in version 2.0.
Implement the model interfaces directly; the concrete implementations are provided as traits

Does not need to be replaced.

## The Joomla\Model\AbstractDatabaseModel Class

Joomla Framework Database Model Class

This class has been deprecated and gets removed in version 2.0.
Implement the model interfaces directly; the concrete implementations are provided as traits

Does not need to be replaced.

## The Joomla\Model\DatabaseModelTrait Trait

Trait representing a model holding a database reference

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$db` | `Joomla\Database\DatabaseDriver` | The database driver. |    
### Methods

#### `Joomla\Model\DatabaseModelTrait::getDb`

Get the database driver.

##### Signature

```php
public Joomla\Model\DatabaseModelTrait::getDb ( void ) : Joomla\Database\DatabaseDriver
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Database\DatabaseDriver` The database driver.

##### Errors/Exceptions

Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the database driver.
 *
 * @return  DatabaseDriver  The database driver.
 *
 * @since   1.3.0
 * @throws  \UnexpectedValueException
 */
public function getDb() : Joomla\Database\DatabaseDriver{
    // @todo Add adapter code.
}
```
#### `Joomla\Model\DatabaseModelTrait::setDb`

Set the database driver.

##### Signature

```php
public Joomla\Model\DatabaseModelTrait::setDb ( Joomla\Database\DatabaseDriver $db  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `db` | `Joomla\Database\DatabaseDriver` | The database driver. |

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
 * Set the database driver.
 *
 * @param   DatabaseDriver  $db  The database driver.
 *
 * @return  void
 *
 * @since   1.3.0
 */
public function setDb(Joomla\Database\DatabaseDriver $db) : void{
    // @todo Add adapter code.
}
```

## The Joomla\Model\StatefulModelTrait Trait

Trait representing a model holding a state

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$state` | `Joomla\Registry\Registry` | The model state. |    
### Methods

#### `Joomla\Model\StatefulModelTrait::getState`

Get the model state.

##### Signature

```php
public Joomla\Model\StatefulModelTrait::getState ( void ) : Joomla\Registry\Registry
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Registry\Registry` The state object.

##### Errors/Exceptions

Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the model state.
 *
 * @return  Registry  The state object.
 *
 * @since   1.3.0
 * @throws  \UnexpectedValueException
 */
public function getState() : Joomla\Registry\Registry{
    // @todo Add adapter code.
}
```
#### `Joomla\Model\StatefulModelTrait::setState`

Set the model state.

##### Signature

```php
public Joomla\Model\StatefulModelTrait::setState ( Joomla\Registry\Registry $state  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `state` | `Joomla\Registry\Registry` | The state object. |

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
 * Set the model state.
 *
 * @param   Registry  $state  The state object.
 *
 * @return  void
 *
 * @since   1.3.0
 */
public function setState(Joomla\Registry\Registry $state) : void{
    // @todo Add adapter code.
}
```
