# Joomla/Application Package version 1.9.2

Joomla Application Package

## The Joomla\Application\Cli\Output\Processor\ProcessorInterface Interface

Class ProcessorInterface.

This interface has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\AbstractCliApplication Class

Base class for a Joomla! command line application.

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Web\WebClient Class

Class to model a Web Client.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `WINDOWS` | `int` | 1 |  |
| public `WINDOWS_PHONE` | `int` | 2 |  |
| public `WINDOWS_CE` | `int` | 3 |  |
| public `IPHONE` | `int` | 4 |  |
| public `IPAD` | `int` | 5 |  |
| public `IPOD` | `int` | 6 |  |
| public `MAC` | `int` | 7 |  |
| public `BLACKBERRY` | `int` | 8 |  |
| public `ANDROID` | `int` | 9 |  |
| public `LINUX` | `int` | 10 |  |
| public `TRIDENT` | `int` | 11 |  |
| public `WEBKIT` | `int` | 12 |  |
| public `GECKO` | `int` | 13 |  |
| public `PRESTO` | `int` | 14 |  |
| public `KHTML` | `int` | 15 |  |
| public `AMAYA` | `int` | 16 |  |
| public `IE` | `int` | 17 |  |
| public `FIREFOX` | `int` | 18 |  |
| public `CHROME` | `int` | 19 |  |
| public `SAFARI` | `int` | 20 |  |
| public `OPERA` | `int` | 21 |  |
| public `ANDROIDTABLET` | `int` | 22 |  |
| public `EDGE` | `int` | 23 |  |
| public `BLINK` | `int` | 24 |  |
| public `EDG` | `int` | 25 |  |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$platform` | `int` | The detected platform on which the web client runs. |
| protected `$mobile` | `bool` | True if the web client is a mobile device. |
| protected `$engine` | `int` | The detected rendering engine used by the web client. |
| protected `$browser` | `int` | The detected browser used by the web client. |
| protected `$browserVersion` | `string` | The detected browser version used by the web client. |
| protected `$languages` | `array` | The priority order detected accepted languages for the client. |
| protected `$encodings` | `array` | The priority order detected accepted encodings for the client. |
| protected `$userAgent` | `string` | The web client&#039;s user agent string. |
| protected `$acceptEncoding` | `string` | The web client&#039;s accepted encoding string. |
| protected `$acceptLanguage` | `string` | The web client&#039;s accepted languages string. |
| protected `$robot` | `bool` | True if the web client is a robot. |
| protected `$detection` | `array` | An array of flags determining whether or not a detection routine has been run. |
| protected `$headers` | `array` | An array of headers sent by client |    
### Methods

#### `Joomla\Application\Web\WebClient::__construct`

Class constructor.

##### Signature

```php
public Joomla\Application\Web\WebClient::__construct ( [ string $userAgent = null [, string $acceptEncoding = null [, string $acceptLanguage = null ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `userAgent` | `string` | The optional user-agent string to parse. Defaults to `null`. |
| `acceptEncoding` | `string` | The optional client accept encoding string to parse. Defaults to `null`. |
| `acceptLanguage` | `string` | The optional client accept language string to parse. Defaults to `null`. |

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
 * Class constructor.
 *
 * @param   string  $userAgent       The optional user-agent string to parse.
 * @param   string  $acceptEncoding  The optional client accept encoding string to parse.
 * @param   string  $acceptLanguage  The optional client accept language string to parse.
 *
 * @since   1.0
 */
public function __construct(string $userAgent = null, string $acceptEncoding = null, string $acceptLanguage = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::__get`

Magic method to get an object property's value by name.

##### Signature

```php
public Joomla\Application\Web\WebClient::__get ( string $name  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | Name of the property for which to return a value. |

##### Return Values

`mixed` The requested value if it exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Magic method to get an object property's value by name.
 *
 * @param   string  $name  Name of the property for which to return a value.
 *
 * @return  mixed  The requested value if it exists.
 *
 * @since   1.0
 */
public function __get(string $name) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectBrowser`

Detects the client browser and version in a user agent string.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectBrowser ( string $userAgent  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `userAgent` | `string` | The user-agent string to parse. |

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
 * Detects the client browser and version in a user agent string.
 *
 * @param   string  $userAgent  The user-agent string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectBrowser(string $userAgent) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectEncoding`

Detect the accepted response encoding by the client.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectEncoding ( string $acceptEncoding  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `acceptEncoding` | `string` | The client accept encoding string to parse. |

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
 * Detect the accepted response encoding by the client.
 *
 * @param   string  $acceptEncoding  The client accept encoding string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectEncoding(string $acceptEncoding) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectEngine`

Detects the client rendering engine in a user agent string.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectEngine ( string $userAgent  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `userAgent` | `string` | The user-agent string to parse. |

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
 * Detects the client rendering engine in a user agent string.
 *
 * @param   string  $userAgent  The user-agent string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectEngine(string $userAgent) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectLanguage`

Detect the accepted languages by the client.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectLanguage ( mixed $acceptLanguage  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `acceptLanguage` | `mixed` | The client accept language string to parse. |

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
 * Detect the accepted languages by the client.
 *
 * @param   mixed  $acceptLanguage  The client accept language string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectLanguage(mixed $acceptLanguage) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectPlatform`

Detects the client platform in a user agent string.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectPlatform ( string $userAgent  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `userAgent` | `string` | The user-agent string to parse. |

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
 * Detects the client platform in a user agent string.
 *
 * @param   string  $userAgent  The user-agent string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectPlatform(string $userAgent) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectRobot`

Determines if the browser is a robot or not.

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectRobot ( string $userAgent  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `userAgent` | `string` | The user-agent string to parse. |

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
 * Determines if the browser is a robot or not.
 *
 * @param   string  $userAgent  The user-agent string to parse.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function detectRobot(string $userAgent) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\Web\WebClient::detectHeaders`

Fills internal array of headers

##### Signature

```php
protected Joomla\Application\Web\WebClient::detectHeaders ( void ) : void
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
 * Fills internal array of headers
 *
 * @return  void
 *
 * @since   1.3.0
 */
protected function detectHeaders() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Application\AbstractDaemonApplication Class

Class to turn Cli applications into daemons.  It requires CLI and PCNTL support built into PHP.

This class has been deprecated and gets removed in version 2.0.
Deprecated without replacement

Does not need to be replaced.

## The Joomla\Application\AbstractApplication Class

Joomla Framework Base Application Class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$config` | `Joomla\Registry\Registry` | The application configuration object. |
| public `$input` | `Joomla\Input\Input` | The application input object. |    
### Methods

#### `Joomla\Application\AbstractApplication::__construct`

Class constructor.

##### Signature

```php
public Joomla\Application\AbstractApplication::__construct ( [ Joomla\Input\Input $input = null [, Joomla\Registry\Registry $config = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | An optional argument to provide dependency injection for the application's input object.  If the argument is an  Input object that object will become the application's input object, otherwise a default input object is created. Defaults to `null`. |
| `config` | `Joomla\Registry\Registry` | An optional argument to provide dependency injection for the application's config object.  If the argument  is a Registry object that object will become the application's config object, otherwise a default config object is created. Defaults to `null`. |

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
 * Class constructor.
 *
 * @param   Input     $input   An optional argument to provide dependency injection for the application's input object.  If the argument is an
 *                             Input object that object will become the application's input object, otherwise a default input object is created.
 * @param   Registry  $config  An optional argument to provide dependency injection for the application's config object.  If the argument
 *                             is a Registry object that object will become the application's config object, otherwise a default config
 *                             object is created.
 *
 * @since   1.0
 */
public function __construct(Joomla\Input\Input $input = null, Joomla\Registry\Registry $config = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::close`

Close the application.

##### Signature

```php
public Joomla\Application\AbstractApplication::close ( [ int $code = 0 ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `code` | `int` | The exit code (optional; default is 0). Defaults to `0`. |

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
 * Close the application.
 *
 * @param   integer  $code  The exit code (optional; default is 0).
 *
 * @return  void
 *
 * @codeCoverageIgnore
 * @since   1.0
 */
public function close(int $code = 0) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::doExecute`

Run the application routines.  Most likely you will want to instantiate a controller

and execute it, or perform some sort of task directly.

##### Signature

```php
abstract protected Joomla\Application\AbstractApplication::doExecute ( void ) : mixed
```
##### Parameters

This method has no parameters.

##### Return Values

`mixed` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Run the application routines.  Most likely you will want to instantiate a controller
 * and execute it, or perform some sort of task directly.
 *
 * @return  mixed
 *
 * @since   1.0
 */
abstract protected function doExecute() : mixed;
```
#### `Joomla\Application\AbstractApplication::execute`

Execute the application.

##### Signature

```php
public Joomla\Application\AbstractApplication::execute ( void ) : void
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
 * Execute the application.
 *
 * @return  void
 *
 * @since   1.0
 */
public function execute() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::get`

Returns a property of the object or the default value if the property is not set.

##### Signature

```php
public Joomla\Application\AbstractApplication::get ( string $key [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the property. |
| `default` | `mixed` | The default value (optional) if none is set. Defaults to `null`. |

##### Return Values

`mixed` The value of the configuration.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a property of the object or the default value if the property is not set.
 *
 * @param   string  $key      The name of the property.
 * @param   mixed   $default  The default value (optional) if none is set.
 *
 * @return  mixed   The value of the configuration.
 *
 * @since   1.0
 */
public function get(string $key, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::getLogger`

Get the logger.

##### Signature

```php
public Joomla\Application\AbstractApplication::getLogger ( void ) : Psr\Log\LoggerInterface
```
##### Parameters

This method has no parameters.

##### Return Values

`Psr\Log\LoggerInterface` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the logger.
 *
 * @return  LoggerInterface
 *
 * @since   1.0
 */
public function getLogger() : Psr\Log\LoggerInterface{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::initialise`

Custom initialisation method.

Called at the end of the AbstractApplication::__construct method.
This is for developers to inject initialisation code for their application classes.

##### Signature

```php
protected Joomla\Application\AbstractApplication::initialise ( void ) : void
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
 * Custom initialisation method.
 *
 * Called at the end of the AbstractApplication::__construct method.
 * This is for developers to inject initialisation code for their application classes.
 *
 * @return  void
 *
 * @codeCoverageIgnore
 * @since   1.0
 */
protected function initialise() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::set`

Modifies a property of the object, creating it if it does not already exist.

##### Signature

```php
public Joomla\Application\AbstractApplication::set ( string $key [, mixed $value = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the property. |
| `value` | `mixed` | The value of the property to set (optional). Defaults to `null`. |

##### Return Values

`mixed` Previous value of the property

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Modifies a property of the object, creating it if it does not already exist.
 *
 * @param   string  $key    The name of the property.
 * @param   mixed   $value  The value of the property to set (optional).
 *
 * @return  mixed   Previous value of the property
 *
 * @since   1.0
 */
public function set(string $key, mixed $value = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::setConfiguration`

Sets the configuration for the application.

##### Signature

```php
public Joomla\Application\AbstractApplication::setConfiguration ( Joomla\Registry\Registry $config  ) : Joomla\Application\AbstractApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `config` | `Joomla\Registry\Registry` | A registry object holding the configuration. |

##### Return Values

`Joomla\Application\AbstractApplication` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets the configuration for the application.
 *
 * @param   Registry  $config  A registry object holding the configuration.
 *
 * @return  AbstractApplication  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setConfiguration(Joomla\Registry\Registry $config) : Joomla\Application\AbstractApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractApplication::setLogger`

Set the logger.

##### Signature

```php
public Joomla\Application\AbstractApplication::setLogger ( Psr\Log\LoggerInterface $logger  ) : Joomla\Application\AbstractApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `logger` | `Psr\Log\LoggerInterface` | The logger. |

##### Return Values

`Joomla\Application\AbstractApplication` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the logger.
 *
 * @param   LoggerInterface  $logger  The logger.
 *
 * @return  AbstractApplication  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setLogger(Psr\Log\LoggerInterface $logger) : Joomla\Application\AbstractApplication{
    // @todo Add adapter code.
}
```

## The Joomla\Application\Cli\ColorStyle Class

Class ColorStyle

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\ColorProcessor Class

Class ColorProcessor.

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\CliInput Class

Class CliInput

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\Output\Processor\ColorProcessor Class

Class ColorProcessor.

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\Output\Xml Class

Class Xml.

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\Output\Stdout Class

Class Stdout.

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\Cli\CliOutput Class

Class CliOutput

This class has been deprecated and gets removed in version 2.0.
Use the `joomla/console` package instead

Does not need to be replaced.

## The Joomla\Application\AbstractWebApplication Class

Base class for a Joomla! Web application.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$charSet` | `string` | Character encoding string. |
| public `$mimeType` | `string` | Response mime type. |
| public `$httpVersion` | `string` | HTTP protocol version. |
| public `$modifiedDate` | `DateTime` | The body modified date for response headers. |
| public `$client` | `Web\WebClient` | The application client object. |
| protected `$response` | `object` | The application response object. |
| protected `$config` | `Joomla\Registry\Registry` | The application configuration object. |
| public `$input` | `Joomla\Input\Input` | The application input object. |    
### Methods

#### `Joomla\Application\AbstractWebApplication::__construct`

Class constructor.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::__construct ( [ Joomla\Input\Input $input = null [, Joomla\Registry\Registry $config = null [, Joomla\Application\Web\WebClient $client = null ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `Joomla\Input\Input` | An optional argument to provide dependency injection for the application's input object.  If the argument  is an Input object that object will become the application's input object, otherwise a default input object is created. Defaults to `null`. |
| `config` | `Joomla\Registry\Registry` | An optional argument to provide dependency injection for the application's config object.  If the argument  is a Registry object that object will become the application's config object, otherwise a default config object is created. Defaults to `null`. |
| `client` | `Joomla\Application\Web\WebClient` | An optional argument to provide dependency injection for the application's client object.  If the argument  is a Web\WebClient object that object will become the application's client object, otherwise a default client object is created. Defaults to `null`. |

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
 * Class constructor.
 *
 * @param   Input          $input   An optional argument to provide dependency injection for the application's input object.  If the argument
 *                                  is an Input object that object will become the application's input object, otherwise a default input
 *                                  object is created.
 * @param   Registry       $config  An optional argument to provide dependency injection for the application's config object.  If the argument
 *                                  is a Registry object that object will become the application's config object, otherwise a default config
 *                                  object is created.
 * @param   Web\WebClient  $client  An optional argument to provide dependency injection for the application's client object.  If the argument
 *                                  is a Web\WebClient object that object will become the application's client object, otherwise a default client
 *                                  object is created.
 *
 * @since   1.0
 */
public function __construct(Joomla\Input\Input $input = null, Joomla\Registry\Registry $config = null, Joomla\Application\Web\WebClient $client = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::execute`

Execute the application.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::execute ( void ) : void
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
 * Execute the application.
 *
 * @return  void
 *
 * @since   1.0
 */
public function execute() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::compress`

Checks the accept encoding of the browser and compresses the data before

sending it to the client if possible.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::compress ( void ) : void
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
 * Checks the accept encoding of the browser and compresses the data before
 * sending it to the client if possible.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function compress() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::respond`

Send the application response to the client.  All headers will be sent prior to the main

application output data.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::respond ( void ) : void
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
 * Send the application response to the client.  All headers will be sent prior to the main
 * application output data.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function respond() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::redirect`

Redirect to another URL.

If the headers have not been sent the redirect will be accomplished using a "301 Moved Permanently"
or "303 See Other" code in the header pointing to the new location. If the headers have already been
sent this will be accomplished using a JavaScript statement.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::redirect ( string $url [, int $status = 303 ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | The URL to redirect to. Can only be http/https URL |
| `status` | `int` | The HTTP status code to be provided. 303 is assumed by default. Defaults to `303`. |

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
 * Redirect to another URL.
 *
 * If the headers have not been sent the redirect will be accomplished using a "301 Moved Permanently"
 * or "303 See Other" code in the header pointing to the new location. If the headers have already been
 * sent this will be accomplished using a JavaScript statement.
 *
 * @param   string   $url     The URL to redirect to. Can only be http/https URL
 * @param   integer  $status  The HTTP status code to be provided. 303 is assumed by default.
 *
 * @return  void
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function redirect(string $url, int $status = 303) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::allowCache`

Set/get cachable state for the response.  If $allow is set, sets the cachable state of the

response.  Always returns the current state.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::allowCache ( [ bool $allow = null ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `allow` | `bool` | True to allow browser caching. Defaults to `null`. |

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
 * Set/get cachable state for the response.  If $allow is set, sets the cachable state of the
 * response.  Always returns the current state.
 *
 * @param   boolean  $allow  True to allow browser caching.
 *
 * @return  boolean
 *
 * @since   1.0
 */
public function allowCache(bool $allow = null) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::setHeader`

Set a response header.  If the replace flag is set then all headers

with the given name will be replaced by the new one.  The headers are stored
in an internal array to be sent when the site is sent to the browser.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::setHeader ( string $name, string $value [, bool $replace = false ] ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `name` | `string` | The name of the header to set. |
| `value` | `string` | The value of the header to set. |
| `replace` | `bool` | True to replace any headers with the same name. Defaults to `false`. |

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set a response header.  If the replace flag is set then all headers
 * with the given name will be replaced by the new one.  The headers are stored
 * in an internal array to be sent when the site is sent to the browser.
 *
 * @param   string   $name     The name of the header to set.
 * @param   string   $value    The value of the header to set.
 * @param   boolean  $replace  True to replace any headers with the same name.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function setHeader(string $name, string $value, bool $replace = false) : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getHeaders`

Get the array of response headers to be sent when the response is sent

to the client.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::getHeaders ( void ) : array
```
##### Parameters

This method has no parameters.

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
 * Get the array of response headers to be sent when the response is sent
 * to the client.
 *
 * @return  array
 *
 * @since   1.0
 */
public function getHeaders() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::clearHeaders`

Clear any set response headers.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::clearHeaders ( void ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Clear any set response headers.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function clearHeaders() : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::sendHeaders`

Send the response headers.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::sendHeaders ( void ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send the response headers.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function sendHeaders() : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::setBody`

Set body content.  If body content already defined, this will replace it.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::setBody ( string $content  ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `content` | `string` | The content to set as the response body. |

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set body content.  If body content already defined, this will replace it.
 *
 * @param   string  $content  The content to set as the response body.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function setBody(string $content) : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::prependBody`

Prepend content to the body content

##### Signature

```php
public Joomla\Application\AbstractWebApplication::prependBody ( string $content  ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `content` | `string` | The content to prepend to the response body. |

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Prepend content to the body content
 *
 * @param   string  $content  The content to prepend to the response body.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function prependBody(string $content) : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::appendBody`

Append content to the body content

##### Signature

```php
public Joomla\Application\AbstractWebApplication::appendBody ( string $content  ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `content` | `string` | The content to append to the response body. |

##### Return Values

`Joomla\Application\AbstractWebApplication` Instance of $this to allow chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Append content to the body content
 *
 * @param   string  $content  The content to append to the response body.
 *
 * @return  AbstractWebApplication  Instance of $this to allow chaining.
 *
 * @since   1.0
 */
public function appendBody(string $content) : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getBody`

Return the body content

##### Signature

```php
public Joomla\Application\AbstractWebApplication::getBody ( [ bool $asArray = false ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `asArray` | `bool` | True to return the body as an array of strings. Defaults to `false`. |

##### Return Values

`mixed` The response body either as an array or concatenated string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Return the body content
 *
 * @param   boolean  $asArray  True to return the body as an array of strings.
 *
 * @return  mixed  The response body either as an array or concatenated string.
 *
 * @since   1.0
 */
public function getBody(bool $asArray = false) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getSession`

Get the application session object.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::getSession ( void ) : Joomla\Session\Session
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Session\Session` The session object

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the application session object.
 *
 * @return  Session  The session object
 *
 * @since   1.0
 */
public function getSession() : Joomla\Session\Session{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getHttpStatusValue`

Check if a given value can be successfully mapped to a valid http status value

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::getHttpStatusValue ( string|int $value  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `value` | `string` or `int` | The given status as int or string |

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
 * Check if a given value can be successfully mapped to a valid http status value
 *
 * @param   string|int  $value  The given status as int or string
 *
 * @return  string
 *
 * @since   1.8.0
 */
protected function getHttpStatusValue( $value) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::isValidHttpStatus`

Check if the value is a valid HTTP status code

##### Signature

```php
public Joomla\Application\AbstractWebApplication::isValidHttpStatus ( int $code  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `code` | `int` | The potential status code |

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
 * Check if the value is a valid HTTP status code
 *
 * @param   integer  $code  The potential status code
 *
 * @return  boolean
 *
 * @since   1.8.1
 */
public function isValidHttpStatus(int $code) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::checkConnectionAlive`

Check the current client connection status to ensure that it is alive.  We are

wrapping this to isolate the connection_status() function from our code base for testing reasons.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::checkConnectionAlive ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if the connection is valid and normal.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check the current client connection status to ensure that it is alive.  We are
 * wrapping this to isolate the connection_status() function from our code base for testing reasons.
 *
 * @return  boolean  True if the connection is valid and normal.
 *
 * @codeCoverageIgnore
 * @see     connection_status()
 * @since   1.0
 */
protected function checkConnectionAlive() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::checkHeadersSent`

Check to see if headers have already been sent.  We are wrapping this to isolate the

headers_sent() function from our code base for testing reasons.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::checkHeadersSent ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if the headers have already been sent.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Check to see if headers have already been sent.  We are wrapping this to isolate the
 * headers_sent() function from our code base for testing reasons.
 *
 * @return  boolean  True if the headers have already been sent.
 *
 * @codeCoverageIgnore
 * @see     headers_sent()
 * @since   1.0
 */
protected function checkHeadersSent() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::detectRequestUri`

Detect the requested URI from server environment variables.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::detectRequestUri ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The requested URI

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Detect the requested URI from server environment variables.
 *
 * @return  string  The requested URI
 *
 * @since   1.0
 */
protected function detectRequestUri() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::header`

Send a header to the client.  We are wrapping this to isolate the header() function

from our code base for testing reasons.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::header ( string $string [, bool $replace = true [, int $code = null ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The header string. |
| `replace` | `bool` | The optional replace parameter indicates whether the header should  replace a previous similar header, or add a second header of the same type. Defaults to `true`. |
| `code` | `int` | Forces the HTTP response code to the specified value. Note that  this parameter only has an effect if the string is not empty. Defaults to `null`. |

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
 * Send a header to the client.  We are wrapping this to isolate the header() function
 * from our code base for testing reasons.
 *
 * @param   string   $string   The header string.
 * @param   boolean  $replace  The optional replace parameter indicates whether the header should
 *                             replace a previous similar header, or add a second header of the same type.
 * @param   integer  $code     Forces the HTTP response code to the specified value. Note that
 *                             this parameter only has an effect if the string is not empty.
 *
 * @return  void
 *
 * @codeCoverageIgnore
 * @see     header()
 * @since   1.0
 */
protected function header(string $string, bool $replace = true, int $code = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::isRedirectState`

Checks if a state is a redirect state

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::isRedirectState ( int $state  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `state` | `int` | The HTTP status code. |

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
 * Checks if a state is a redirect state
 *
 * @param   integer  $state  The HTTP status code.
 *
 * @return  boolean
 *
 * @since   1.8.0
 */
protected function isRedirectState(int $state) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::isSslConnection`

Determine if we are using a secure (SSL) connection.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::isSslConnection ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if using SSL, false if not.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine if we are using a secure (SSL) connection.
 *
 * @return  boolean  True if using SSL, false if not.
 *
 * @since   1.0
 */
public function isSslConnection() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::setSession`

Sets the session for the application to use, if required.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::setSession ( Joomla\Session\Session $session  ) : Joomla\Application\AbstractWebApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `session` | `Joomla\Session\Session` | A session object. |

##### Return Values

`Joomla\Application\AbstractWebApplication` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets the session for the application to use, if required.
 *
 * @param   Session  $session  A session object.
 *
 * @return  AbstractWebApplication  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setSession(Joomla\Session\Session $session) : Joomla\Application\AbstractWebApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::loadSystemUris`

Load the system URI strings for the application.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::loadSystemUris ( [ string $requestUri = null ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `requestUri` | `string` | An optional request URI to use instead of detecting one from the  server environment variables. Defaults to `null`. |

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
 * Load the system URI strings for the application.
 *
 * @param   string  $requestUri  An optional request URI to use instead of detecting one from the
 *                               server environment variables.
 *
 * @return  void
 *
 * @since   1.0
 */
protected function loadSystemUris(string $requestUri = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::checkToken`

Checks for a form token in the request.

Use in conjunction with getFormToken.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::checkToken ( [ string $method = &#039;post&#039; ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `method` | `string` | The request method in which to look for the token key. Defaults to `'post'`. |

##### Return Values

`bool` True if found and valid, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks for a form token in the request.
 *
 * Use in conjunction with getFormToken.
 *
 * @param   string  $method  The request method in which to look for the token key.
 *
 * @return  boolean  True if found and valid, false otherwise.
 *
 * @since   1.0
 */
public function checkToken(string $method = 'post') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getFormToken`

Determine a hash for anti-spoofing variable names

##### Signature

```php
public Joomla\Application\AbstractWebApplication::getFormToken ( [ bool $forceNew = false ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `forceNew` | `bool` | If true, force a new token to be created Defaults to `false`. |

##### Return Values

`string` Hashed var name

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine a hash for anti-spoofing variable names
 *
 * @param   boolean  $forceNew  If true, force a new token to be created
 *
 * @return  string  Hashed var name
 *
 * @since   1.0
 */
public function getFormToken(bool $forceNew = false) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::isAscii`

Tests whether a string contains only 7bit ASCII bytes.

You might use this to conditionally check whether a string
needs handling as UTF-8 or not, potentially offering performance
benefits by using the native PHP equivalent if it's just ASCII e.g.;

##### Signature

```php
public static Joomla\Application\AbstractWebApplication::isAscii ( string $str  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The string to test. |

##### Return Values

`bool` True if the string is all ASCII

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether a string contains only 7bit ASCII bytes.
 *
 * You might use this to conditionally check whether a string
 * needs handling as UTF-8 or not, potentially offering performance
 * benefits by using the native PHP equivalent if it's just ASCII e.g.;
 *
 * @param   string  $str  The string to test.
 *
 * @return  boolean True if the string is all ASCII
 *
 * @since   1.4.0
 */
public static function isAscii(string $str) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::close`

Close the application.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::close ( [ int $code = 0 ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `code` | `int` | The exit code (optional; default is 0). Defaults to `0`. |

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
 * Close the application.
 *
 * @param   integer  $code  The exit code (optional; default is 0).
 *
 * @return  void
 *
 * @codeCoverageIgnore
 * @since   1.0
 */
public function close(int $code = 0) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::doExecute`

Run the application routines.  Most likely you will want to instantiate a controller

and execute it, or perform some sort of task directly.

##### Signature

```php
abstract protected Joomla\Application\AbstractWebApplication::doExecute ( void ) : mixed
```
##### Parameters

This method has no parameters.

##### Return Values

`mixed` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Run the application routines.  Most likely you will want to instantiate a controller
 * and execute it, or perform some sort of task directly.
 *
 * @return  mixed
 *
 * @since   1.0
 */
abstract protected function doExecute() : mixed;
```
#### `Joomla\Application\AbstractWebApplication::get`

Returns a property of the object or the default value if the property is not set.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::get ( string $key [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the property. |
| `default` | `mixed` | The default value (optional) if none is set. Defaults to `null`. |

##### Return Values

`mixed` The value of the configuration.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a property of the object or the default value if the property is not set.
 *
 * @param   string  $key      The name of the property.
 * @param   mixed   $default  The default value (optional) if none is set.
 *
 * @return  mixed   The value of the configuration.
 *
 * @since   1.0
 */
public function get(string $key, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::getLogger`

Get the logger.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::getLogger ( void ) : Joomla\Application\LoggerInterface
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Application\LoggerInterface` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the logger.
 *
 * @return  LoggerInterface
 *
 * @since   1.0
 */
public function getLogger() : Joomla\Application\LoggerInterface{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::initialise`

Custom initialisation method.

Called at the end of the AbstractApplication::__construct method.
This is for developers to inject initialisation code for their application classes.

##### Signature

```php
protected Joomla\Application\AbstractWebApplication::initialise ( void ) : void
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
 * Custom initialisation method.
 *
 * Called at the end of the AbstractApplication::__construct method.
 * This is for developers to inject initialisation code for their application classes.
 *
 * @return  void
 *
 * @codeCoverageIgnore
 * @since   1.0
 */
protected function initialise() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::set`

Modifies a property of the object, creating it if it does not already exist.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::set ( string $key [, mixed $value = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `key` | `string` | The name of the property. |
| `value` | `mixed` | The value of the property to set (optional). Defaults to `null`. |

##### Return Values

`mixed` Previous value of the property

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Modifies a property of the object, creating it if it does not already exist.
 *
 * @param   string  $key    The name of the property.
 * @param   mixed   $value  The value of the property to set (optional).
 *
 * @return  mixed   Previous value of the property
 *
 * @since   1.0
 */
public function set(string $key, mixed $value = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::setConfiguration`

Sets the configuration for the application.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::setConfiguration ( Joomla\Registry\Registry $config  ) : Joomla\Application\AbstractApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `config` | `Joomla\Registry\Registry` | A registry object holding the configuration. |

##### Return Values

`Joomla\Application\AbstractApplication` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Sets the configuration for the application.
 *
 * @param   Registry  $config  A registry object holding the configuration.
 *
 * @return  AbstractApplication  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setConfiguration(Joomla\Registry\Registry $config) : Joomla\Application\AbstractApplication{
    // @todo Add adapter code.
}
```
#### `Joomla\Application\AbstractWebApplication::setLogger`

Set the logger.

##### Signature

```php
public Joomla\Application\AbstractWebApplication::setLogger ( Psr\Log\LoggerInterface $logger  ) : Joomla\Application\AbstractApplication
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `logger` | `Psr\Log\LoggerInterface` | The logger. |

##### Return Values

`Joomla\Application\AbstractApplication` Returns itself to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the logger.
 *
 * @param   LoggerInterface  $logger  The logger.
 *
 * @return  AbstractApplication  Returns itself to support chaining.
 *
 * @since   1.0
 */
public function setLogger(Psr\Log\LoggerInterface $logger) : Joomla\Application\AbstractApplication{
    // @todo Add adapter code.
}
```
