# Joomla/Profiler Package version 1.2.0

Joomla Profiler Package

## The Joomla\Profiler\ProfilerInterface Interface

Interface for Profilers containing a sequence of ProfilePointInterface.

### Methods

#### `Joomla\Profiler\ProfilerInterface::getName`

Get the name of this profiler.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The name of this profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the name of this profiler.
 *
 * @return  string  The name of this profiler.
 *
 * @since   1.0
 */
abstract public function getName() : string;
```
#### `Joomla\Profiler\ProfilerInterface::mark`

Mark a profile point with the given name.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::mark ( string $name  ) : Joomla\Profiler\ProfilerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The profile point name. |

##### Return Values

`Joomla\Profiler\ProfilerInterface` This method is chainable.

##### Errors/Exceptions

Throws InvalidArgumentException If a point with that name already exists.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Mark a profile point with the given name.
 *
 * @param   string  $name  The profile point name.
 *
 * @return  ProfilerInterface  This method is chainable.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException  If a point with that name already exists.
 */
abstract public function mark(string $name) : Joomla\Profiler\ProfilerInterface;
```
#### `Joomla\Profiler\ProfilerInterface::hasPoint`

Check if the profiler has marked the given point.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::hasPoint ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the point. |

##### Return Values

`bool` True if the profiler has marked the point, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if the profiler has marked the given point.
 *
 * @param   string  $name  The name of the point.
 *
 * @return  boolean  True if the profiler has marked the point, false otherwise.
 *
 * @since   1.0
 */
abstract public function hasPoint(string $name) : bool;
```
#### `Joomla\Profiler\ProfilerInterface::getPoint`

Get the point identified by the given name.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::getPoint ( string $name [, mixed $default = null ] ) : Joomla\Profiler\ProfilePointInterface|mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the point. |
| `default` | `mixed` | The default value if the point hasn't been marked. Defaults to `null`. |

##### Return Values

`Joomla\Profiler\ProfilePointInterface` or `mixed` The profile point or the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the point identified by the given name.
 *
 * @param   string  $name     The name of the point.
 * @param   mixed   $default  The default value if the point hasn't been marked.
 *
 * @return  ProfilePointInterface|mixed  The profile point or the default value.
 *
 * @since   1.0
 */
abstract public function getPoint(string $name, mixed $default = null) : Joomla\Profiler\ProfilePointInterface|mixed;
```
#### `Joomla\Profiler\ProfilerInterface::getPoints`

Get the points in this profiler (in the order they were marked).

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::getPoints ( void ) : Joomla\Profiler\ProfilePointInterface[]
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Profiler\ProfilePointInterface[]` An array of points in this profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the points in this profiler (in the order they were marked).
 *
 * @return  ProfilePointInterface[]  An array of points in this profiler.
 *
 * @since   1.0
 */
abstract public function getPoints() : Joomla\Profiler\ProfilePointInterface[];
```
#### `Joomla\Profiler\ProfilerInterface::setRenderer`

Set the renderer to render this profiler.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::setRenderer ( Joomla\Profiler\ProfilerRendererInterface $renderer  ) : Joomla\Profiler\ProfilerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `renderer` | `Joomla\Profiler\ProfilerRendererInterface` | The renderer. |

##### Return Values

`Joomla\Profiler\ProfilerInterface` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the renderer to render this profiler.
 *
 * @param   ProfilerRendererInterface  $renderer  The renderer.
 *
 * @return  ProfilerInterface  This method is chainable.
 *
 * @since   1.0
 */
abstract public function setRenderer(Joomla\Profiler\ProfilerRendererInterface $renderer) : Joomla\Profiler\ProfilerInterface;
```
#### `Joomla\Profiler\ProfilerInterface::getRenderer`

Get the currently used renderer in this profiler.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::getRenderer ( void ) : Joomla\Profiler\ProfilerRendererInterface
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Profiler\ProfilerRendererInterface` The renderer.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the currently used renderer in this profiler.
 *
 * @return  ProfilerRendererInterface  The renderer.
 *
 * @since   1.0
 */
abstract public function getRenderer() : Joomla\Profiler\ProfilerRendererInterface;
```
#### `Joomla\Profiler\ProfilerInterface::render`

Render the profiler.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerInterface::render ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The rendered profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the profiler.
 *
 * @return  string  The rendered profiler.
 *
 * @since   1.0
 */
abstract public function render() : string;
```

## The Joomla\Profiler\ProfilerRendererInterface Interface

Interface for profiler renderers.

### Methods

#### `Joomla\Profiler\ProfilerRendererInterface::render`

Render the profiler.

##### Signature

```php
abstract public Joomla\Profiler\ProfilerRendererInterface::render ( Joomla\Profiler\ProfilerInterface $profiler  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `profiler` | `Joomla\Profiler\ProfilerInterface` | The profiler to render. |

##### Return Values

`string` The rendered profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the profiler.
 *
 * @param   ProfilerInterface  $profiler  The profiler to render.
 *
 * @return  string  The rendered profiler.
 *
 * @since   1.0
 */
abstract public function render(Joomla\Profiler\ProfilerInterface $profiler) : string;
```

## The Joomla\Profiler\ProfilePointInterface Interface

Interface for profile points.

A Profile point belongs to a ProfilerInterface and the values it holds (time and memory) are relative to the values
of the first marked point in that profiler.

### Methods

#### `Joomla\Profiler\ProfilePointInterface::getName`

Get the name of this profile point.

##### Signature

```php
abstract public Joomla\Profiler\ProfilePointInterface::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The name of this profile point.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the name of this profile point.
 *
 * @return  string  The name of this profile point.
 *
 * @since   1.0
 */
abstract public function getName() : string;
```
#### `Joomla\Profiler\ProfilePointInterface::getTime`

Get the elapsed time in seconds since the first point in the profiler it belongs to was marked.

##### Signature

```php
abstract public Joomla\Profiler\ProfilePointInterface::getTime ( void ) : float
```
##### Parameters

This method has no parameters.

##### Return Values

`float` The time in seconds.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the elapsed time in seconds since the first point in the profiler it belongs to was marked.
 *
 * @return  float  The time in seconds.
 *
 * @since   1.0
 */
abstract public function getTime() : float;
```
#### `Joomla\Profiler\ProfilePointInterface::getMemoryBytes`

Get the allocated amount of memory in bytes since the first point in the profiler it belongs to was marked.

##### Signature

```php
abstract public Joomla\Profiler\ProfilePointInterface::getMemoryBytes ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The amount of allocated memory in B.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the allocated amount of memory in bytes since the first point in the profiler it belongs to was marked.
 *
 * @return  integer  The amount of allocated memory in B.
 *
 * @since   1.0
 */
abstract public function getMemoryBytes() : int;
```
#### `Joomla\Profiler\ProfilePointInterface::getMemoryMegaBytes`

Get the allocated amount of memory in mega bytes since the first point in the profiler it belongs to was marked.

##### Signature

```php
abstract public Joomla\Profiler\ProfilePointInterface::getMemoryMegaBytes ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The amount of allocated memory in MB.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the allocated amount of memory in mega bytes since the first point in the profiler it belongs to was marked.
 *
 * @return  integer  The amount of allocated memory in MB.
 *
 * @since   1.0
 */
abstract public function getMemoryMegaBytes() : int;
```

## The Joomla\Profiler\Profiler Class

Implementation of ProfilerInterface.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$name` | `string` | The name of the profiler. |
| protected `$points` | `Joomla\Profiler\ProfilePointInterface[]` | An array of profiler points (from the first to last). |
| protected `$lookup` | `array` | A lookup array containing the names of the already marked points as keys * and their indexes in $points as value. |
| protected `$memoryRealUsage` | `bool` | A flag to see if we must get the real memory usage, or the usage of emalloc(). |
| protected `$startTimeStamp` | `float` | The timestamp with microseconds when the first point was marked. |
| protected `$startMemoryBytes` | `int` | The memory usage in bytes when the first point was marked. |
| protected `$memoryPeakBytes` | `int` | The memory peak in bytes during the profiler run. |
| protected `$renderer` | `Joomla\Profiler\ProfilerRendererInterface` | The profiler renderer. |    
### Methods

#### `Joomla\Profiler\Profiler::__construct`

Constructor.

##### Signature

```php
public Joomla\Profiler\Profiler::__construct ( string $name [, Joomla\Profiler\ProfilerRendererInterface $renderer = null [, array $points = [] [, bool $memoryRealUsage = false ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The profiler name. |
| `renderer` | `Joomla\Profiler\ProfilerRendererInterface` | The renderer. Defaults to `null`. |
| `points` | `array` | An array of profile points. Defaults to `[]`. |
| `memoryRealUsage` | `bool` | True to get the real memory usage. Defaults to `false`. |

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
 * Constructor.
 *
 * @param   string                     $name             The profiler name.
 * @param   ProfilerRendererInterface  $renderer         The renderer.
 * @param   ProfilePointInterface[]    $points           An array of profile points.
 * @param   boolean                    $memoryRealUsage  True to get the real memory usage.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct(string $name, Joomla\Profiler\ProfilerRendererInterface $renderer = null, array $points = [], bool $memoryRealUsage = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::setPoints`

Set the points in this profiler.

This function is called by the constructor when injecting an array of points (mostly for testing purposes).

##### Signature

```php
protected Joomla\Profiler\Profiler::setPoints ( array $points  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `points` | `array` | An array of profile points. |

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
 * Set the points in this profiler.
 *
 * This function is called by the constructor when injecting an array of points (mostly for testing purposes).
 *
 * @param   ProfilePointInterface[]  $points  An array of profile points.
 *
 * @return  void
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
protected function setPoints(array $points) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getName`

Get the name of this profiler.

##### Signature

```php
public Joomla\Profiler\Profiler::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The name of this profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the name of this profiler.
 *
 * @return  string  The name of this profiler.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::mark`

Mark a profile point.

##### Signature

```php
public Joomla\Profiler\Profiler::mark ( string $name  ) : Joomla\Profiler\ProfilerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The profile point name. |

##### Return Values

`Joomla\Profiler\ProfilerInterface` This method is chainable.

##### Errors/Exceptions

Throws InvalidArgumentException If the point already exists.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Mark a profile point.
 *
 * @param   string  $name  The profile point name.
 *
 * @return  ProfilerInterface  This method is chainable.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException  If the point already exists.
 */
public function mark(string $name) : Joomla\Profiler\ProfilerInterface{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::hasPoint`

Check if the profiler has marked the given point.

##### Signature

```php
public Joomla\Profiler\Profiler::hasPoint ( string $name  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the point. |

##### Return Values

`bool` True if the profiler has marked the point, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check if the profiler has marked the given point.
 *
 * @param   string  $name  The name of the point.
 *
 * @return  boolean  True if the profiler has marked the point, false otherwise.
 *
 * @since   1.0
 */
public function hasPoint(string $name) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getPoint`

Get the point identified by the given name.

##### Signature

```php
public Joomla\Profiler\Profiler::getPoint ( string $name [, mixed $default = null ] ) : Joomla\Profiler\ProfilePointInterface|mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the point. |
| `default` | `mixed` | The default value if the point hasn't been marked. Defaults to `null`. |

##### Return Values

`Joomla\Profiler\ProfilePointInterface` or `mixed` The profile point or the default value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the point identified by the given name.
 *
 * @param   string  $name     The name of the point.
 * @param   mixed   $default  The default value if the point hasn't been marked.
 *
 * @return  ProfilePointInterface|mixed  The profile point or the default value.
 *
 * @since   1.0
 */
public function getPoint(string $name, mixed $default = null) : Joomla\Profiler\ProfilePointInterface|mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getTimeBetween`

Get the elapsed time in seconds between the two points.

##### Signature

```php
public Joomla\Profiler\Profiler::getTimeBetween ( string $first, string $second  ) : float
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `first` | `string` | The name of the first point. |
| `second` | `string` | The name of the second point. |

##### Return Values

`float` The elapsed time between these points in seconds.

##### Errors/Exceptions

Throws LogicException If the points were not marked.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the elapsed time in seconds between the two points.
 *
 * @param   string  $first   The name of the first point.
 * @param   string  $second  The name of the second point.
 *
 * @return  float  The elapsed time between these points in seconds.
 *
 * @since   1.0
 * @throws  \LogicException  If the points were not marked.
 */
public function getTimeBetween(string $first, string $second) : float{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getMemoryBytesBetween`

Get the amount of allocated memory in bytes between the two points.

##### Signature

```php
public Joomla\Profiler\Profiler::getMemoryBytesBetween ( string $first, string $second  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `first` | `string` | The name of the first point. |
| `second` | `string` | The name of the second point. |

##### Return Values

`int` The amount of allocated memory between these points in bytes.

##### Errors/Exceptions

Throws LogicException If the points were not marked.<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the amount of allocated memory in bytes between the two points.
 *
 * @param   string  $first   The name of the first point.
 * @param   string  $second  The name of the second point.
 *
 * @return  integer  The amount of allocated memory between these points in bytes.
 *
 * @since   1.0
 * @throws  \LogicException  If the points were not marked.
 */
public function getMemoryBytesBetween(string $first, string $second) : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getMemoryPeakBytes`

Get the memory peak in bytes during the profiler run.

##### Signature

```php
public Joomla\Profiler\Profiler::getMemoryPeakBytes ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The memory peak in bytes.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the memory peak in bytes during the profiler run.
 *
 * @return  integer  The memory peak in bytes.
 *
 * @since   1.0
 */
public function getMemoryPeakBytes() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getPoints`

Get the points in this profiler (from the first to the last).

##### Signature

```php
public Joomla\Profiler\Profiler::getPoints ( void ) : Joomla\Profiler\ProfilePointInterface[]
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Profiler\ProfilePointInterface[]` An array of points in this profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the points in this profiler (from the first to the last).
 *
 * @return  ProfilePointInterface[]  An array of points in this profiler.
 *
 * @since   1.0
 */
public function getPoints() : Joomla\Profiler\ProfilePointInterface[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::setRenderer`

Set the renderer to render this profiler.

##### Signature

```php
public Joomla\Profiler\Profiler::setRenderer ( Joomla\Profiler\ProfilerRendererInterface $renderer  ) : Joomla\Profiler\Profiler
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `renderer` | `Joomla\Profiler\ProfilerRendererInterface` | The renderer. |

##### Return Values

`Joomla\Profiler\Profiler` This method is chainable.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the renderer to render this profiler.
 *
 * @param   ProfilerRendererInterface  $renderer  The renderer.
 *
 * @return  Profiler  This method is chainable.
 *
 * @since   1.0
 */
public function setRenderer(Joomla\Profiler\ProfilerRendererInterface $renderer) : Joomla\Profiler\Profiler{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getRenderer`

Get the currently used renderer in this profiler.

##### Signature

```php
public Joomla\Profiler\Profiler::getRenderer ( void ) : Joomla\Profiler\ProfilerRendererInterface
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Profiler\ProfilerRendererInterface` The renderer.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the currently used renderer in this profiler.
 *
 * @return  ProfilerRendererInterface  The renderer.
 *
 * @since   1.0
 */
public function getRenderer() : Joomla\Profiler\ProfilerRendererInterface{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::render`

Render the profiler.

##### Signature

```php
public Joomla\Profiler\Profiler::render ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The rendered profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the profiler.
 *
 * @return  string  The rendered profiler.
 *
 * @since   1.0
 */
public function render() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::__toString`

Cast the profiler to a string using the renderer.

##### Signature

```php
public Joomla\Profiler\Profiler::__toString ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The rendered profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Cast the profiler to a string using the renderer.
 *
 * @return  string  The rendered profiler.
 *
 * @since   1.0
 */
public function __toString() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::getIterator`

Get an iterator on the profiler points.

##### Signature

```php
public Joomla\Profiler\Profiler::getIterator ( void ) : ArrayIterator
```
##### Parameters

This method has no parameters.

##### Return Values

`ArrayIterator` An iterator on the profiler points.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get an iterator on the profiler points.
 *
 * @return  \ArrayIterator  An iterator on the profiler points.
 *
 * @since   1.0
 */
public function getIterator() : ArrayIterator{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::count`

Count the number of points in this profiler.

##### Signature

```php
public Joomla\Profiler\Profiler::count ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of points.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Count the number of points in this profiler.
 *
 * @return  integer  The number of points.
 *
 * @since   1.0
 */
public function count() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\Profiler::setStart`

Creates a profile point with the specified starting time and memory.

This method will only add a point if no other points have been added as the ProfilePointInterface objects created before changing
the start point would result in inaccurate measurements.

##### Signature

```php
public Joomla\Profiler\Profiler::setStart ( [ float $timeStamp = 0 [, int $memoryBytes = 0 ]] ) : Joomla\Profiler\ProfilerInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `timeStamp` | `float` | Unix timestamp in microseconds when the profiler should start measuring time. Defaults to `0`. |
| `memoryBytes` | `int` | Memory amount in bytes when the profiler should start measuring memory. Defaults to `0`. |

##### Return Values

`Joomla\Profiler\ProfilerInterface` This method is chainable.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Creates a profile point with the specified starting time and memory.
 *
 * This method will only add a point if no other points have been added as the ProfilePointInterface objects created before changing
 * the start point would result in inaccurate measurements.
 *
 * @param   float    $timeStamp    Unix timestamp in microseconds when the profiler should start measuring time.
 * @param   integer  $memoryBytes  Memory amount in bytes when the profiler should start measuring memory.
 *
 * @return  ProfilerInterface  This method is chainable.
 *
 * @since   1.2.0
 * @throws  \RuntimeException
 */
public function setStart(float $timeStamp = 0, int $memoryBytes = 0) : Joomla\Profiler\ProfilerInterface{
    // @todo Add adapter code.
}
```

## The Joomla\Profiler\ProfilePoint Class

Implementation of ProfilePointInterface.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$name` | `string` | The profile point name. |
| protected `$time` | `float` | The elapsed time in seconds since the first point in the profiler it belongs to was marked. |
| protected `$memoryBytes` | `int` | The allocated amount of memory in bytes since the first point in the profiler it belongs to was marked. |    
### Methods

#### `Joomla\Profiler\ProfilePoint::__construct`

Constructor.

##### Signature

```php
public Joomla\Profiler\ProfilePoint::__construct ( string $name [, float $time = 0 [, int $memoryBytes = 0 ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The point name. |
| `time` | `float` | The time in seconds. Defaults to `0`. |
| `memoryBytes` | `int` | The allocated amount of memory in bytes Defaults to `0`. |

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
 * @param   string   $name         The point name.
 * @param   float    $time         The time in seconds.
 * @param   integer  $memoryBytes  The allocated amount of memory in bytes
 *
 * @since   1.0
 */
public function __construct(string $name, float $time = 0, int $memoryBytes = 0) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\ProfilePoint::getName`

Get the name of this profile point.

##### Signature

```php
public Joomla\Profiler\ProfilePoint::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The name of this profile point.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the name of this profile point.
 *
 * @return  string  The name of this profile point.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\ProfilePoint::getTime`

Get the elapsed time in seconds since the first point in the profiler it belongs to was marked.

##### Signature

```php
public Joomla\Profiler\ProfilePoint::getTime ( void ) : float
```
##### Parameters

This method has no parameters.

##### Return Values

`float` The time in seconds.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the elapsed time in seconds since the first point in the profiler it belongs to was marked.
 *
 * @return  float  The time in seconds.
 *
 * @since   1.0
 */
public function getTime() : float{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\ProfilePoint::getMemoryBytes`

Get the allocated amount of memory in bytes since the first point in the profiler it belongs to was marked.

##### Signature

```php
public Joomla\Profiler\ProfilePoint::getMemoryBytes ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The amount of allocated memory in B.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the allocated amount of memory in bytes since the first point in the profiler it belongs to was marked.
 *
 * @return  integer  The amount of allocated memory in B.
 *
 * @since   1.0
 */
public function getMemoryBytes() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Profiler\ProfilePoint::getMemoryMegaBytes`

Get the allocated amount of memory in mega bytes

since the first point in the profiler it belongs to was marked.

##### Signature

```php
public Joomla\Profiler\ProfilePoint::getMemoryMegaBytes ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The amount of allocated memory in MB.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the allocated amount of memory in mega bytes
 * since the first point in the profiler it belongs to was marked.
 *
 * @return  integer  The amount of allocated memory in MB.
 *
 * @since   1.0
 */
public function getMemoryMegaBytes() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Profiler\Renderer\DefaultRenderer Class

Default profiler renderer.

### Methods

#### `Joomla\Profiler\Renderer\DefaultRenderer::render`

Render the profiler.

##### Signature

```php
public Joomla\Profiler\Renderer\DefaultRenderer::render ( Joomla\Profiler\ProfilerInterface $profiler  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `profiler` | `Joomla\Profiler\ProfilerInterface` | The profiler to render. |

##### Return Values

`string` The rendered profiler.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Render the profiler.
 *
 * @param   ProfilerInterface  $profiler  The profiler to render.
 *
 * @return  string  The rendered profiler.
 *
 * @since   1.0
 */
public function render(Joomla\Profiler\ProfilerInterface $profiler) : string{
    // @todo Add adapter code.
}
```
