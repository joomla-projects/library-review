# Joomla/Event Package version 1.3.0

Joomla Event Package

## The Joomla\Event\DispatcherAwareInterface Interface

Interface to be implemented by classes depending on a dispatcher.

### Methods

#### `Joomla\Event\DispatcherAwareInterface::setDispatcher`

Set the dispatcher to use.

##### Signature

```php
abstract public Joomla\Event\DispatcherAwareInterface::setDispatcher ( Joomla\Event\DispatcherInterface $dispatcher  ) : Joomla\Event\DispatcherAwareInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dispatcher` | `Joomla\Event\DispatcherInterface` | The dispatcher to use. |

##### Return Values

`Joomla\Event\DispatcherAwareInterface` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the dispatcher to use.
 *
 * @param   DispatcherInterface  $dispatcher  The dispatcher to use.
 *
 * @return  DispatcherAwareInterface  This method is chainable.
 *
 * @since   1.0
 */
abstract public function setDispatcher(Joomla\Event\DispatcherInterface $dispatcher) : Joomla\Event\DispatcherAwareInterface;
```

## The Joomla\Event\DispatcherInterface Interface

Interface for event dispatchers.

### Methods

#### `Joomla\Event\DispatcherInterface::triggerEvent`

Trigger an event.

##### Signature

```php
abstract public Joomla\Event\DispatcherInterface::triggerEvent ( Joomla\Event\EventInterface|string $event  ) : Joomla\Event\EventInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`Joomla\Event\EventInterface` The event after being passed through all listeners.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Trigger an event.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  EventInterface  The event after being passed through all listeners.
 *
 * @since   1.0
 */
abstract public function triggerEvent( $event) : Joomla\Event\EventInterface;
```

## The Joomla\Event\EventInterface Interface

Interface for events.

An event has a name and its propagation can be stopped (if the implementation supports it).

### Methods

#### `Joomla\Event\EventInterface::getName`

Get the event name.

##### Signature

```php
abstract public Joomla\Event\EventInterface::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The event name.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event name.
 *
 * @return  string  The event name.
 *
 * @since   1.0
 */
abstract public function getName() : string;
```
#### `Joomla\Event\EventInterface::isStopped`

Tell if the event propagation is stopped.

##### Signature

```php
abstract public Joomla\Event\EventInterface::isStopped ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if stopped, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the event propagation is stopped.
 *
 * @return  boolean  True if stopped, false otherwise.
 *
 * @since   1.0
 */
abstract public function isStopped() : bool;
```

## The Joomla\Event\AbstractEvent Class

Implementation of EventInterface.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$name` | `string` | The event name. |
| protected `$arguments` | `array` | The event arguments. |
| protected `$stopped` | `bool` | A flag to see if the event propagation is stopped. |    
### Methods

#### `Joomla\Event\AbstractEvent::__construct`

Constructor.

##### Signature

```php
public Joomla\Event\AbstractEvent::__construct ( string $name [, array $arguments = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The event name. |
| `arguments` | `array` | The event arguments. Defaults to `[]`. |

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
 * @param   string  $name       The event name.
 * @param   array   $arguments  The event arguments.
 *
 * @since   1.0
 */
public function __construct(string $name, array $arguments = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::getName`

Get the event name.

##### Signature

```php
public Joomla\Event\AbstractEvent::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The event name.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event name.
 *
 * @return  string  The event name.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::getArgument`

Get an event argument value.

##### Signature

```php
public Joomla\Event\AbstractEvent::getArgument ( string $name [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `default` | `mixed` | The default value if not found. Defaults to `null`. |

##### Return Values

`mixed` The argument value or the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name     The argument name.
 * @param   mixed   $default  The default value if not found.
 *
 * @return  mixed  The argument value or the default value.
 *
 * @since   1.0
 */
public function getArgument(string $name, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::hasArgument`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\AbstractEvent::hasArgument ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function hasArgument(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::getArguments`

Get all event arguments.

##### Signature

```php
public Joomla\Event\AbstractEvent::getArguments ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` An associative array of argument names as keys 
and their values as values.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get all event arguments.
 *
 * @return  array  An associative array of argument names as keys
 *                 and their values as values.
 *
 * @since   1.0
 */
public function getArguments() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::isStopped`

Tell if the event propagation is stopped.

##### Signature

```php
public Joomla\Event\AbstractEvent::isStopped ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if stopped, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the event propagation is stopped.
 *
 * @return  boolean  True if stopped, false otherwise.
 *
 * @since   1.0
 */
public function isStopped() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::count`

Count the number of arguments.

##### Signature

```php
public Joomla\Event\AbstractEvent::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of arguments.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of arguments.
 *
 * @return  integer  The number of arguments.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::serialize`

Serialize the event.

##### Signature

```php
public Joomla\Event\AbstractEvent::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized event.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the event.
 *
 * @return  string  The serialized event.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::unserialize`

Unserialize the event.

##### Signature

```php
public Joomla\Event\AbstractEvent::unserialize ( string $serialized  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `serialized` | `string` | The serialized event. |

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
 * Unserialize the event.
 *
 * @param   string  $serialized  The serialized event.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $serialized) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::offsetExists`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\AbstractEvent::offsetExists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function offsetExists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::offsetGet`

Get an event argument value.

##### Signature

```php
public Joomla\Event\AbstractEvent::offsetGet ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`mixed` The argument value or null if not existing.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name  The argument name.
 *
 * @return  mixed  The argument value or null if not existing.
 *
 * @since   1.0
 */
public function offsetGet(string $name) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\AbstractEvent::offsetSet`

##### Signature

```php
abstract public Joomla\Event\AbstractEvent::offsetSet (  $offset,  $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `` |  |
| `value` | `` |  |

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
abstract public function offsetSet( $offset,  $value) : void;
```
#### `Joomla\Event\AbstractEvent::offsetUnset`

##### Signature

```php
abstract public Joomla\Event\AbstractEvent::offsetUnset (  $offset  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `` |  |

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
abstract public function offsetUnset( $offset) : void;
```

## The Joomla\Event\Dispatcher Class

Implementation of a DispatcherInterface supporting

prioritized listeners.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$events` | `Joomla\Event\EventInterface[]` | An array of registered events indexed by |
| protected `$listenerFilter` | `string` | A regular expression that will filter listener method names. |
| protected `$listeners` | `Joomla\Event\ListenersPriorityQueue[]` | An array of ListenersPriorityQueue indexed |    
### Methods

#### `Joomla\Event\Dispatcher::setEvent`

Set an event to the dispatcher.

It will replace any event with the same name.

##### Signature

```php
public Joomla\Event\Dispatcher::setEvent ( Joomla\Event\EventInterface $event  ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` | The event. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set an event to the dispatcher.
 * It will replace any event with the same name.
 *
 * @param   EventInterface  $event  The event.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @since   1.0
 */
public function setEvent(Joomla\Event\EventInterface $event) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::setListenerFilter`

Sets a regular expression to filter the class methods when adding a listener.

This method has been deprecated and gets removed in version 1.1.0. 
Incorporate a method in your listener object such as `getEvents` to feed into the `setListener` method..

Does not need to be replaced.

#### `Joomla\Event\Dispatcher::addEvent`

Add an event to this dispatcher, only if it is not existing.

##### Signature

```php
public Joomla\Event\Dispatcher::addEvent ( Joomla\Event\EventInterface $event  ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` | The event. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add an event to this dispatcher, only if it is not existing.
 *
 * @param   EventInterface  $event  The event.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @since   1.0
 */
public function addEvent(Joomla\Event\EventInterface $event) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::hasEvent`

Tell if the given event has been added to this dispatcher.

##### Signature

```php
public Joomla\Event\Dispatcher::hasEvent ( Joomla\Event\EventInterface|string $event  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`bool` True if the listener has the given event, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event has been added to this dispatcher.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  boolean  True if the listener has the given event, false otherwise.
 *
 * @since   1.0
 */
public function hasEvent( $event) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::getEvent`

Get the event object identified by the given name.

##### Signature

```php
public Joomla\Event\Dispatcher::getEvent ( string $name [, mixed $default = null ] ) : Joomla\Event\EventInterface|mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The event name. |
| `default` | `mixed` | The default value if the event was not registered. Defaults to `null`. |

##### Return Values

`Joomla\Event\EventInterface` or `mixed` The event of the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event object identified by the given name.
 *
 * @param   string  $name     The event name.
 * @param   mixed   $default  The default value if the event was not registered.
 *
 * @return  EventInterface|mixed  The event of the default value.
 *
 * @since   1.0
 */
public function getEvent(string $name, mixed $default = null) : Joomla\Event\EventInterface|mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::removeEvent`

Remove an event from this dispatcher.

The registered listeners will remain.

##### Signature

```php
public Joomla\Event\Dispatcher::removeEvent ( Joomla\Event\EventInterface|string $event  ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove an event from this dispatcher.
 * The registered listeners will remain.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @since   1.0
 */
public function removeEvent( $event) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::getEvents`

Get the registered events.

##### Signature

```php
public Joomla\Event\Dispatcher::getEvents ( void ) : Joomla\Event\EventInterface[]
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Event\EventInterface[]` The registered event.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the registered events.
 *
 * @return  EventInterface[]  The registered event.
 *
 * @since   1.0
 */
public function getEvents() : Joomla\Event\EventInterface[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::clearEvents`

Clear all events.

##### Signature

```php
public Joomla\Event\Dispatcher::clearEvents ( void ) : Joomla\Event\EventInterface[]
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Event\EventInterface[]` The old events.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Clear all events.
 *
 * @return  EventInterface[]  The old events.
 *
 * @since   1.0
 */
public function clearEvents() : Joomla\Event\EventInterface[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::countEvents`

Count the number of registered event.

##### Signature

```php
public Joomla\Event\Dispatcher::countEvents ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The numer of registered events.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of registered event.
 *
 * @return  integer  The numer of registered events.
 *
 * @since   1.0
 */
public function countEvents() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::addListener`

Add a listener to this dispatcher, only if not already registered to these events.

If no events are specified, it will be registered to all events matching it's methods name.
In the case of a closure, you must specify at least one event name.

##### Signature

```php
public Joomla\Event\Dispatcher::addListener ( object|Closure $listener [, array $events = [] ] ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `object` or `Closure` | The listener |
| `events` | `array` | An associative array of event names as keys  and the corresponding listener priority as values. Defaults to `[]`. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add a listener to this dispatcher, only if not already registered to these events.
 * If no events are specified, it will be registered to all events matching it's methods name.
 * In the case of a closure, you must specify at least one event name.
 *
 * @param   object|Closure  $listener  The listener
 * @param   array           $events    An associative array of event names as keys
 *                                     and the corresponding listener priority as values.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @throws  InvalidArgumentException
 *
 * @since   1.0
 */
public function addListener( $listener, array $events = []) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::getListenerPriority`

Get the priority of the given listener for the given event.

##### Signature

```php
public Joomla\Event\Dispatcher::getListenerPriority ( object|Closure $listener, Joomla\Event\EventInterface|string $event  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `object` or `Closure` | The listener. |
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`mixed` The listener priority or null if the listener doesn't exist.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the priority of the given listener for the given event.
 *
 * @param   object|Closure         $listener  The listener.
 * @param   EventInterface|string  $event     The event object or name.
 *
 * @return  mixed  The listener priority or null if the listener doesn't exist.
 *
 * @since   1.0
 */
public function getListenerPriority( $listener,  $event) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::getListeners`

Get the listeners registered to the given event.

##### Signature

```php
public Joomla\Event\Dispatcher::getListeners ( Joomla\Event\EventInterface|string $event  ) : object[]
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`object[]` An array of registered listeners sorted according to their priorities.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the listeners registered to the given event.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  object[]  An array of registered listeners sorted according to their priorities.
 *
 * @since   1.0
 */
public function getListeners( $event) : object[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::hasListener`

Tell if the given listener has been added.

If an event is specified, it will tell if the listener is registered for that event.

##### Signature

```php
public Joomla\Event\Dispatcher::hasListener ( object|Closure $listener [, Joomla\Event\EventInterface|string $event = null ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `object` or `Closure` | The listener. |
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. Defaults to `null`. |

##### Return Values

`bool` True if the listener is registered, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given listener has been added.
 * If an event is specified, it will tell if the listener is registered for that event.
 *
 * @param   object|Closure         $listener  The listener.
 * @param   EventInterface|string  $event     The event object or name.
 *
 * @return  boolean  True if the listener is registered, false otherwise.
 *
 * @since   1.0
 */
public function hasListener( $listener,  $event = null) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::removeListener`

Remove the given listener from this dispatcher.

If no event is specified, it will be removed from all events it is listening to.

##### Signature

```php
public Joomla\Event\Dispatcher::removeListener ( object|Closure $listener [, Joomla\Event\EventInterface|string $event = null ] ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `object` or `Closure` | The listener to remove. |
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. Defaults to `null`. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove the given listener from this dispatcher.
 * If no event is specified, it will be removed from all events it is listening to.
 *
 * @param   object|Closure         $listener  The listener to remove.
 * @param   EventInterface|string  $event     The event object or name.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @since   1.0
 */
public function removeListener( $listener,  $event = null) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::clearListeners`

Clear the listeners in this dispatcher.

If an event is specified, the listeners will be cleared only for that event.

##### Signature

```php
public Joomla\Event\Dispatcher::clearListeners ( [ Joomla\Event\EventInterface|string $event = null ] ) : Joomla\Event\Dispatcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. Defaults to `null`. |

##### Return Values

`Joomla\Event\Dispatcher` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Clear the listeners in this dispatcher.
 * If an event is specified, the listeners will be cleared only for that event.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  Dispatcher  This method is chainable.
 *
 * @since   1.0
 */
public function clearListeners( $event = null) : Joomla\Event\Dispatcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::countListeners`

Count the number of registered listeners for the given event.

##### Signature

```php
public Joomla\Event\Dispatcher::countListeners ( Joomla\Event\EventInterface|string $event  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`int` The number of registered listeners for the given event.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of registered listeners for the given event.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  integer  The number of registered listeners for the given event.
 *
 * @since   1.0
 */
public function countListeners( $event) : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Dispatcher::triggerEvent`

Trigger an event.

##### Signature

```php
public Joomla\Event\Dispatcher::triggerEvent ( Joomla\Event\EventInterface|string $event  ) : Joomla\Event\EventInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `event` | `Joomla\Event\EventInterface` or `string` | The event object or name. |

##### Return Values

`Joomla\Event\EventInterface` The event after being passed through all listeners.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Trigger an event.
 *
 * @param   EventInterface|string  $event  The event object or name.
 *
 * @return  EventInterface  The event after being passed through all listeners.
 *
 * @since   1.0
 */
public function triggerEvent( $event) : Joomla\Event\EventInterface{
    // @todo Add adapter code.
}
```

## The Joomla\Event\Event Class

Default Event class.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$name` | `string` | The event name. |
| protected `$arguments` | `array` | The event arguments. |
| protected `$stopped` | `bool` | A flag to see if the event propagation is stopped. |    
### Methods

#### `Joomla\Event\Event::addArgument`

Add an event argument, only if it is not existing.

##### Signature

```php
public Joomla\Event\Event::addArgument ( string $name, mixed $value  ) : Joomla\Event\Event
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `value` | `mixed` | The argument value. |

##### Return Values

`Joomla\Event\Event` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add an event argument, only if it is not existing.
 *
 * @param   string  $name   The argument name.
 * @param   mixed   $value  The argument value.
 *
 * @return  Event  This method is chainable.
 *
 * @since   1.0
 */
public function addArgument(string $name, mixed $value) : Joomla\Event\Event{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::setArgument`

Set the value of an event argument.

If the argument already exists, it will be overridden.

##### Signature

```php
public Joomla\Event\Event::setArgument ( string $name, mixed $value  ) : Joomla\Event\Event
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `value` | `mixed` | The argument value. |

##### Return Values

`Joomla\Event\Event` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the value of an event argument.
 * If the argument already exists, it will be overridden.
 *
 * @param   string  $name   The argument name.
 * @param   mixed   $value  The argument value.
 *
 * @return  Event  This method is chainable.
 *
 * @since   1.0
 */
public function setArgument(string $name, mixed $value) : Joomla\Event\Event{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::removeArgument`

Remove an event argument.

##### Signature

```php
public Joomla\Event\Event::removeArgument ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`mixed` The old argument value or null if it is not existing.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove an event argument.
 *
 * @param   string  $name  The argument name.
 *
 * @return  mixed  The old argument value or null if it is not existing.
 *
 * @since   1.0
 */
public function removeArgument(string $name) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::clearArguments`

Clear all event arguments.

##### Signature

```php
public Joomla\Event\Event::clearArguments ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` The old arguments.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Clear all event arguments.
 *
 * @return  array  The old arguments.
 *
 * @since   1.0
 */
public function clearArguments() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::stop`

Stop the event propagation.

##### Signature

```php
public Joomla\Event\Event::stop ( void ) : void
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
 * Stop the event propagation.
 *
 * @return  void
 *
 * @since   1.0
 */
public function stop() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::offsetSet`

Set the value of an event argument.

##### Signature

```php
public Joomla\Event\Event::offsetSet ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `value` | `mixed` | The argument value. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws InvalidArgumentException If the argument name is null.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the value of an event argument.
 *
 * @param   string  $name   The argument name.
 * @param   mixed   $value  The argument value.
 *
 * @return  void
 *
 * @throws  InvalidArgumentException  If the argument name is null.
 *
 * @since   1.0
 */
public function offsetSet(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::offsetUnset`

Remove an event argument.

##### Signature

```php
public Joomla\Event\Event::offsetUnset ( string $name  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

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
 * Remove an event argument.
 *
 * @param   string  $name  The argument name.
 *
 * @return  void
 *
 * @since   1.0
 */
public function offsetUnset(string $name) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::__construct`

Constructor.

##### Signature

```php
public Joomla\Event\Event::__construct ( string $name [, array $arguments = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The event name. |
| `arguments` | `array` | The event arguments. Defaults to `[]`. |

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
 * @param   string  $name       The event name.
 * @param   array   $arguments  The event arguments.
 *
 * @since   1.0
 */
public function __construct(string $name, array $arguments = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::getName`

Get the event name.

##### Signature

```php
public Joomla\Event\Event::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The event name.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event name.
 *
 * @return  string  The event name.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::getArgument`

Get an event argument value.

##### Signature

```php
public Joomla\Event\Event::getArgument ( string $name [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `default` | `mixed` | The default value if not found. Defaults to `null`. |

##### Return Values

`mixed` The argument value or the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name     The argument name.
 * @param   mixed   $default  The default value if not found.
 *
 * @return  mixed  The argument value or the default value.
 *
 * @since   1.0
 */
public function getArgument(string $name, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::hasArgument`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\Event::hasArgument ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function hasArgument(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::getArguments`

Get all event arguments.

##### Signature

```php
public Joomla\Event\Event::getArguments ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` An associative array of argument names as keys 
and their values as values.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get all event arguments.
 *
 * @return  array  An associative array of argument names as keys
 *                 and their values as values.
 *
 * @since   1.0
 */
public function getArguments() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::isStopped`

Tell if the event propagation is stopped.

##### Signature

```php
public Joomla\Event\Event::isStopped ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if stopped, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the event propagation is stopped.
 *
 * @return  boolean  True if stopped, false otherwise.
 *
 * @since   1.0
 */
public function isStopped() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::count`

Count the number of arguments.

##### Signature

```php
public Joomla\Event\Event::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of arguments.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of arguments.
 *
 * @return  integer  The number of arguments.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::serialize`

Serialize the event.

##### Signature

```php
public Joomla\Event\Event::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized event.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the event.
 *
 * @return  string  The serialized event.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::unserialize`

Unserialize the event.

##### Signature

```php
public Joomla\Event\Event::unserialize ( string $serialized  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `serialized` | `string` | The serialized event. |

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
 * Unserialize the event.
 *
 * @param   string  $serialized  The serialized event.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $serialized) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::offsetExists`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\Event::offsetExists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function offsetExists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\Event::offsetGet`

Get an event argument value.

##### Signature

```php
public Joomla\Event\Event::offsetGet ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`mixed` The argument value or null if not existing.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name  The argument name.
 *
 * @return  mixed  The argument value or null if not existing.
 *
 * @since   1.0
 */
public function offsetGet(string $name) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Event\EventImmutable Class

Implementation of an immutable Event.

An immutable event cannot be modified after instanciation :

- its propagation cannot be stopped
- its arguments cannot be modified

You may want to use this event when you want to ensure that
the listeners won't manipulate it.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$name` | `string` | The event name. |
| protected `$arguments` | `array` | The event arguments. |
| protected `$stopped` | `bool` | A flag to see if the event propagation is stopped. |    
### Methods

#### `Joomla\Event\EventImmutable::__construct`

Constructor.

##### Signature

```php
public Joomla\Event\EventImmutable::__construct ( string $name [, array $arguments = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The event name. |
| `arguments` | `array` | The event arguments. Defaults to `[]`. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Constructor.
 *
 * @param   string  $name       The event name.
 * @param   array   $arguments  The event arguments.
 *
 * @throws  BadMethodCallException
 *
 * @since   1.0
 */
public function __construct(string $name, array $arguments = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::offsetSet`

Set the value of an event argument.

##### Signature

```php
public Joomla\Event\EventImmutable::offsetSet ( string $name, mixed $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `value` | `mixed` | The argument value. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the value of an event argument.
 *
 * @param   string  $name   The argument name.
 * @param   mixed   $value  The argument value.
 *
 * @return  void
 *
 * @throws  BadMethodCallException
 *
 * @since   1.0
 */
public function offsetSet(string $name, mixed $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::offsetUnset`

Remove an event argument.

##### Signature

```php
public Joomla\Event\EventImmutable::offsetUnset ( string $name  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws BadMethodCallException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove an event argument.
 *
 * @param   string  $name  The argument name.
 *
 * @return  void
 *
 * @throws  BadMethodCallException
 *
 * @since   1.0
 */
public function offsetUnset(string $name) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::getName`

Get the event name.

##### Signature

```php
public Joomla\Event\EventImmutable::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The event name.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event name.
 *
 * @return  string  The event name.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::getArgument`

Get an event argument value.

##### Signature

```php
public Joomla\Event\EventImmutable::getArgument ( string $name [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |
| `default` | `mixed` | The default value if not found. Defaults to `null`. |

##### Return Values

`mixed` The argument value or the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name     The argument name.
 * @param   mixed   $default  The default value if not found.
 *
 * @return  mixed  The argument value or the default value.
 *
 * @since   1.0
 */
public function getArgument(string $name, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::hasArgument`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\EventImmutable::hasArgument ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function hasArgument(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::getArguments`

Get all event arguments.

##### Signature

```php
public Joomla\Event\EventImmutable::getArguments ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` An associative array of argument names as keys 
and their values as values.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get all event arguments.
 *
 * @return  array  An associative array of argument names as keys
 *                 and their values as values.
 *
 * @since   1.0
 */
public function getArguments() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::isStopped`

Tell if the event propagation is stopped.

##### Signature

```php
public Joomla\Event\EventImmutable::isStopped ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if stopped, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the event propagation is stopped.
 *
 * @return  boolean  True if stopped, false otherwise.
 *
 * @since   1.0
 */
public function isStopped() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::count`

Count the number of arguments.

##### Signature

```php
public Joomla\Event\EventImmutable::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of arguments.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of arguments.
 *
 * @return  integer  The number of arguments.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::serialize`

Serialize the event.

##### Signature

```php
public Joomla\Event\EventImmutable::serialize ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The serialized event.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Serialize the event.
 *
 * @return  string  The serialized event.
 *
 * @since   1.0
 */
public function serialize() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::unserialize`

Unserialize the event.

##### Signature

```php
public Joomla\Event\EventImmutable::unserialize ( string $serialized  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `serialized` | `string` | The serialized event. |

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
 * Unserialize the event.
 *
 * @param   string  $serialized  The serialized event.
 *
 * @return  void
 *
 * @since   1.0
 */
public function unserialize(string $serialized) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::offsetExists`

Tell if the given event argument exists.

##### Signature

```php
public Joomla\Event\EventImmutable::offsetExists ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the given event argument exists.
 *
 * @param   string  $name  The argument name.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function offsetExists(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\EventImmutable::offsetGet`

Get an event argument value.

##### Signature

```php
public Joomla\Event\EventImmutable::offsetGet ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The argument name. |

##### Return Values

`mixed` The argument value or null if not existing.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an event argument value.
 *
 * @param   string  $name  The argument name.
 *
 * @return  mixed  The argument value or null if not existing.
 *
 * @since   1.0
 */
public function offsetGet(string $name) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Event\ListenersPriorityQueue Class

A class containing an inner listeners priority queue that can be iterated multiple times.

One instance of ListenersPriorityQueue is used per Event in the Dispatcher.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$queue` | `SplPriorityQueue` | The inner priority queue. |
| protected `$storage` | `SplObjectStorage` | A copy of the listeners contained in the queue |    
### Methods

#### `Joomla\Event\ListenersPriorityQueue::__construct`

Constructor.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::__construct ( void ) : void
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
 * Constructor.
 *
 * @since  1.0
 */
public function __construct() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::add`

Add a listener with the given priority only if not already present.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::add ( Closure|object $listener, int $priority  ) : Joomla\Event\ListenersPriorityQueue
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `Closure` or `object` | The listener. |
| `priority` | `int` | The listener priority. |

##### Return Values

`Joomla\Event\ListenersPriorityQueue` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add a listener with the given priority only if not already present.
 *
 * @param   \Closure|object  $listener  The listener.
 * @param   integer          $priority  The listener priority.
 *
 * @return  ListenersPriorityQueue  This method is chainable.
 *
 * @since   1.0
 */
public function add( $listener, int $priority) : Joomla\Event\ListenersPriorityQueue{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::remove`

Remove a listener from the queue.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::remove ( Closure|object $listener  ) : Joomla\Event\ListenersPriorityQueue
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `Closure` or `object` | The listener. |

##### Return Values

`Joomla\Event\ListenersPriorityQueue` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove a listener from the queue.
 *
 * @param   \Closure|object  $listener  The listener.
 *
 * @return  ListenersPriorityQueue  This method is chainable.
 *
 * @since   1.0
 */
public function remove( $listener) : Joomla\Event\ListenersPriorityQueue{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::has`

Tell if the listener exists in the queue.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::has ( Closure|object $listener  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `Closure` or `object` | The listener. |

##### Return Values

`bool` True if it exists, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tell if the listener exists in the queue.
 *
 * @param   \Closure|object  $listener  The listener.
 *
 * @return  boolean  True if it exists, false otherwise.
 *
 * @since   1.0
 */
public function has( $listener) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::getPriority`

Get the priority of the given listener.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::getPriority ( Closure|object $listener [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `listener` | `Closure` or `object` | The listener. |
| `default` | `mixed` | The default value to return if the listener doesn't exist. Defaults to `null`. |

##### Return Values

`mixed` The listener priority if it exists, null otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the priority of the given listener.
 *
 * @param   \Closure|object  $listener  The listener.
 * @param   mixed            $default   The default value to return if the listener doesn't exist.
 *
 * @return  mixed  The listener priority if it exists, null otherwise.
 *
 * @since   1.0
 */
public function getPriority( $listener, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::getAll`

Get all listeners contained in this queue, sorted according to their priority.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::getAll ( void ) : object[]
```
##### Parameters

This method has no parameters.

##### Return Values

`object[]` An array of listeners.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get all listeners contained in this queue, sorted according to their priority.
 *
 * @return  object[]  An array of listeners.
 *
 * @since   1.0
 */
public function getAll() : object[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::getIterator`

Get the inner queue with its cursor on top of the heap.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::getIterator ( void ) : SplPriorityQueue
```
##### Parameters

This method has no parameters.

##### Return Values

`SplPriorityQueue` The inner queue.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the inner queue with its cursor on top of the heap.
 *
 * @return  SplPriorityQueue  The inner queue.
 *
 * @since   1.0
 */
public function getIterator() : SplPriorityQueue{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\ListenersPriorityQueue::count`

Count the number of listeners in the queue.

##### Signature

```php
public Joomla\Event\ListenersPriorityQueue::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of listeners in the queue.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of listeners in the queue.
 *
 * @return  integer  The number of listeners in the queue.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Event\DelegatingDispatcher Class

A dispatcher delegating its methods to an other dispatcher.

This class has been deprecated and gets removed in version 2.0.
Create your own delegating (decorating) dispatcher as needed.

Does not need to be replaced.

## The Joomla\Event\Priority Class

An enumeration of priorities for event listeners,

that you are encouraged to use when adding them in the Dispatcher.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `MIN` | `int` | -3 |  |
| public `LOW` | `int` | -2 |  |
| public `BELOW_NORMAL` | `int` | -1 |  |
| public `NORMAL` | `int` | 0 |  |
| public `ABOVE_NORMAL` | `int` | 1 |  |
| public `HIGH` | `int` | 2 |  |
| public `MAX` | `int` | 3 |  |

## The Joomla\Event\DispatcherAwareTrait Trait

Defines the trait for a Dispatcher Aware Class.

### Methods

#### `Joomla\Event\DispatcherAwareTrait::getDispatcher`

Get the event dispatcher.

##### Signature

```php
public Joomla\Event\DispatcherAwareTrait::getDispatcher ( void ) : Joomla\Event\DispatcherInterface
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Event\DispatcherInterface` 

##### Errors/Exceptions

Throws UnexpectedValueException May be thrown if the dispatcher has not been set.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the event dispatcher.
 *
 * @return  DispatcherInterface
 *
 * @since   1.2.0
 * @throws  \UnexpectedValueException May be thrown if the dispatcher has not been set.
 */
public function getDispatcher() : Joomla\Event\DispatcherInterface{
    // @todo Add adapter code.
}
```
#### `Joomla\Event\DispatcherAwareTrait::setDispatcher`

Set the dispatcher to use.

##### Signature

```php
public Joomla\Event\DispatcherAwareTrait::setDispatcher ( Joomla\Event\DispatcherInterface $dispatcher  ) : Joomla\Event\$this
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dispatcher` | `Joomla\Event\DispatcherInterface` | The dispatcher to use. |

##### Return Values

`Joomla\Event\$this` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the dispatcher to use.
 *
 * @param   DispatcherInterface  $dispatcher  The dispatcher to use.
 *
 * @return  $this
 *
 * @since   1.2.0
 */
public function setDispatcher(Joomla\Event\DispatcherInterface $dispatcher) : Joomla\Event\$this{
    // @todo Add adapter code.
}
```
