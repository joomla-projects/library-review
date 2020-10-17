# Joomla/Filesystem Package version 1.6.0

Joomla Filesystem Package

## The Joomla\Filesystem\Support\StringController Class

String Controller

### Methods

#### `Joomla\Filesystem\Support\StringController::_getArray`

Defines a variable as an array

This method has been deprecated and gets removed in version 2.0. 
Use `getArray` instead..

Does not need to be replaced.

#### `Joomla\Filesystem\Support\StringController::getArray`

Defines a variable as an array

##### Signature

```php
public static Joomla\Filesystem\Support\StringController::getArray ( void ) : array
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
 * Defines a variable as an array
 *
 * @return  array
 *
 * @since   1.4.0
 */
public static function getArray() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Support\StringController::createRef`

Create a reference

##### Signature

```php
public static Joomla\Filesystem\Support\StringController::createRef ( string $reference, string $string  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `reference` | `string` | The key |
| `string` | `string` | The value |

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
 * Create a reference
 *
 * @param   string  $reference  The key
 * @param   string  $string     The value
 *
 * @return  void
 *
 * @since   1.0
 */
public static function createRef(string $reference, string $string) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Support\StringController::getRef`

Get reference

##### Signature

```php
public static Joomla\Filesystem\Support\StringController::getRef ( string $reference  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `reference` | `string` | The key for the reference. |

##### Return Values

`mixed` False if not set, reference if it exists

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get reference
 *
 * @param   string  $reference  The key for the reference.
 *
 * @return  mixed  False if not set, reference if it exists
 *
 * @since   1.0
 */
public static function getRef(string $reference) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Folder Class

A Folder handling class

### Methods

#### `Joomla\Filesystem\Folder::copy`

Copy a folder.

##### Signature

```php
public static Joomla\Filesystem\Folder::copy ( string $src, string $dest [, string $path = &#039;&#039; [, bool $force = false [, bool $useStreams = false ]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The path to the source folder. |
| `dest` | `string` | The path to the destination folder. |
| `path` | `string` | An optional base path to prefix to the file names. Defaults to `''`. |
| `force` | `bool` | Force copy. Defaults to `false`. |
| `useStreams` | `bool` | Optionally force folder/file overwrites. Defaults to `false`. |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Copy a folder.
 *
 * @param   string   $src         The path to the source folder.
 * @param   string   $dest        The path to the destination folder.
 * @param   string   $path        An optional base path to prefix to the file names.
 * @param   boolean  $force       Force copy.
 * @param   boolean  $useStreams  Optionally force folder/file overwrites.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public static function copy(string $src, string $dest, string $path = '', bool $force = false, bool $useStreams = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::create`

Create a folder -- and all necessary parent folders.

##### Signature

```php
public static Joomla\Filesystem\Folder::create ( [ string $path = &#039;&#039; [, int $mode = 493 ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | A path to create from the base path. Defaults to `''`. |
| `mode` | `int` | Directory permissions to set for folders created. 0755 by default. Defaults to `493`. |

##### Return Values

`bool` True if successful.

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a folder -- and all necessary parent folders.
 *
 * @param   string   $path  A path to create from the base path.
 * @param   integer  $mode  Directory permissions to set for folders created. 0755 by default.
 *
 * @return  boolean  True if successful.
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public static function create(string $path = '', int $mode = 493) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::delete`

Delete a folder.

##### Signature

```php
public static Joomla\Filesystem\Folder::delete ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The path to the folder to delete. |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />
Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Delete a folder.
 *
 * @param   string  $path  The path to the folder to delete.
 *
 * @return  boolean  True on success.
 *
 * @since   1.0
 * @throws  FilesystemException
 * @throws  \UnexpectedValueException
 */
public static function delete(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::move`

Moves a folder.

##### Signature

```php
public static Joomla\Filesystem\Folder::move ( string $src, string $dest [, string $path = &#039;&#039; [, bool $useStreams = false ]] ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The path to the source folder. |
| `dest` | `string` | The path to the destination folder. |
| `path` | `string` | An optional base path to prefix to the file names. Defaults to `''`. |
| `useStreams` | `bool` | Optionally use streams. Defaults to `false`. |

##### Return Values

`string` or `bool` Error message on false or boolean true on success.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Moves a folder.
 *
 * @param   string   $src         The path to the source folder.
 * @param   string   $dest        The path to the destination folder.
 * @param   string   $path        An optional base path to prefix to the file names.
 * @param   boolean  $useStreams  Optionally use streams.
 *
 * @return  string|boolean  Error message on false or boolean true on success.
 *
 * @since   1.0
 */
public static function move(string $src, string $dest, string $path = '', bool $useStreams = false) : string|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::files`

Utility function to read the files in a folder.

##### Signature

```php
public static Joomla\Filesystem\Folder::files ( string $path [, string $filter = &#039;.&#039; [, mixed $recurse = false [, bool $full = false [, array $exclude = [ &#039;.svn&#039;, &#039;CVS&#039;, &#039;.DS_Store&#039;, &#039;__MACOSX&#039; ] [, array $excludeFilter = [ &#039;^\..*&#039;, &#039;.*~&#039; ] ]]]]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The path of the folder to read. |
| `filter` | `string` | A filter for file names. Defaults to `'.'`. |
| `recurse` | `mixed` | True to recursively search into sub-folders, or an integer to specify the maximum depth. Defaults to `false`. |
| `full` | `bool` | True to return the full path to the file. Defaults to `false`. |
| `exclude` | `array` | Array with names of files which should not be shown in the result. Defaults to `[ '.svn', 'CVS', '.DS_Store', '__MACOSX' ]`. |
| `excludeFilter` | `array` | Array of filter to exclude Defaults to `[ '^\..*', '.*~' ]`. |

##### Return Values

`array` Files in the given folder.

##### Errors/Exceptions

Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Utility function to read the files in a folder.
 *
 * @param   string   $path           The path of the folder to read.
 * @param   string   $filter         A filter for file names.
 * @param   mixed    $recurse        True to recursively search into sub-folders, or an integer to specify the maximum depth.
 * @param   boolean  $full           True to return the full path to the file.
 * @param   array    $exclude        Array with names of files which should not be shown in the result.
 * @param   array    $excludeFilter  Array of filter to exclude
 *
 * @return  array  Files in the given folder.
 *
 * @since   1.0
 * @throws  \UnexpectedValueException
 */
public static function files(string $path, string $filter = '.', mixed $recurse = false, bool $full = false, array $exclude = [ '.svn', 'CVS', '.DS_Store', '__MACOSX' ], array $excludeFilter = [ '^\..*', '.*~' ]) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::folders`

Utility function to read the folders in a folder.

##### Signature

```php
public static Joomla\Filesystem\Folder::folders ( string $path [, string $filter = &#039;.&#039; [, mixed $recurse = false [, bool $full = false [, array $exclude = [ &#039;.svn&#039;, &#039;CVS&#039;, &#039;.DS_Store&#039;, &#039;__MACOSX&#039; ] [, array $excludeFilter = [ &#039;^\..*&#039; ] ]]]]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The path of the folder to read. |
| `filter` | `string` | A filter for folder names. Defaults to `'.'`. |
| `recurse` | `mixed` | True to recursively search into sub-folders, or an integer to specify the maximum depth. Defaults to `false`. |
| `full` | `bool` | True to return the full path to the folders. Defaults to `false`. |
| `exclude` | `array` | Array with names of folders which should not be shown in the result. Defaults to `[ '.svn', 'CVS', '.DS_Store', '__MACOSX' ]`. |
| `excludeFilter` | `array` | Array with regular expressions matching folders which should not be shown in the result. Defaults to `[ '^\..*' ]`. |

##### Return Values

`array` Folders in the given folder.

##### Errors/Exceptions

Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Utility function to read the folders in a folder.
 *
 * @param   string   $path           The path of the folder to read.
 * @param   string   $filter         A filter for folder names.
 * @param   mixed    $recurse        True to recursively search into sub-folders, or an integer to specify the maximum depth.
 * @param   boolean  $full           True to return the full path to the folders.
 * @param   array    $exclude        Array with names of folders which should not be shown in the result.
 * @param   array    $excludeFilter  Array with regular expressions matching folders which should not be shown in the result.
 *
 * @return  array  Folders in the given folder.
 *
 * @since   1.0
 * @throws  \UnexpectedValueException
 */
public static function folders(string $path, string $filter = '.', mixed $recurse = false, bool $full = false, array $exclude = [ '.svn', 'CVS', '.DS_Store', '__MACOSX' ], array $excludeFilter = [ '^\..*' ]) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::_items`

Function to read the files/folders in a folder.

##### Signature

```php
protected static Joomla\Filesystem\Folder::_items ( string $path, string $filter, mixed $recurse, bool $full, array $exclude, string $excludeFilterString, bool $findfiles  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The path of the folder to read. |
| `filter` | `string` | A filter for file names. |
| `recurse` | `mixed` | True to recursively search into sub-folders, or an integer to specify the maximum depth. |
| `full` | `bool` | True to return the full path to the file. |
| `exclude` | `array` | Array with names of files which should not be shown in the result. |
| `excludeFilterString` | `string` | Regexp of files to exclude |
| `findfiles` | `bool` | True to read the files, false to read the folders |

##### Return Values

`array` Files.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Function to read the files/folders in a folder.
 *
 * @param   string   $path                 The path of the folder to read.
 * @param   string   $filter               A filter for file names.
 * @param   mixed    $recurse              True to recursively search into sub-folders, or an integer to specify the maximum depth.
 * @param   boolean  $full                 True to return the full path to the file.
 * @param   array    $exclude              Array with names of files which should not be shown in the result.
 * @param   string   $excludeFilterString  Regexp of files to exclude
 * @param   boolean  $findfiles            True to read the files, false to read the folders
 *
 * @return  array  Files.
 *
 * @since   1.0
 */
protected static function _items(string $path, string $filter, mixed $recurse, bool $full, array $exclude, string $excludeFilterString, bool $findfiles) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::listFolderTree`

Lists folder in format suitable for tree display.

##### Signature

```php
public static Joomla\Filesystem\Folder::listFolderTree ( string $path, string $filter [, int $maxLevel = 3 [, int $level = 0 [, int $parent = 0 ]]] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The path of the folder to read. |
| `filter` | `string` | A filter for folder names. |
| `maxLevel` | `int` | The maximum number of levels to recursively read, defaults to three. Defaults to `3`. |
| `level` | `int` | The current level, optional. Defaults to `0`. |
| `parent` | `int` | Unique identifier of the parent folder, if any. Defaults to `0`. |

##### Return Values

`array` Folders in the given folder.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Lists folder in format suitable for tree display.
 *
 * @param   string   $path      The path of the folder to read.
 * @param   string   $filter    A filter for folder names.
 * @param   integer  $maxLevel  The maximum number of levels to recursively read, defaults to three.
 * @param   integer  $level     The current level, optional.
 * @param   integer  $parent    Unique identifier of the parent folder, if any.
 *
 * @return  array  Folders in the given folder.
 *
 * @since   1.0
 */
public static function listFolderTree(string $path, string $filter, int $maxLevel = 3, int $level = 0, int $parent = 0) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Folder::makeSafe`

Makes path name safe to use.

##### Signature

```php
public static Joomla\Filesystem\Folder::makeSafe ( string $path  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The full path to sanitise. |

##### Return Values

`string` The sanitised string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Makes path name safe to use.
 *
 * @param   string  $path  The full path to sanitise.
 *
 * @return  string  The sanitised string.
 *
 * @since   1.0
 */
public static function makeSafe(string $path) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Clients\FtpClient Class

FTP client class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected static `$instances` | `Joomla\Filesystem\Clients\FtpClient[]` | FtpClient instances container. |    

### Methods

#### `Joomla\Filesystem\Clients\FtpClient::__construct`

FtpClient object constructor

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::__construct ( [ array $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Associative array of options to set Defaults to `[]`. |

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
 * FtpClient object constructor
 *
 * @param   array  $options  Associative array of options to set
 *
 * @since   1.0
 */
public function __construct(array $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::__destruct`

FtpClient object destructor

Closes an existing connection, if we have one

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::__destruct ( void ) : void
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
 * FtpClient object destructor
 *
 * Closes an existing connection, if we have one
 *
 * @since   1.0
 */
public function __destruct() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::getInstance`

Returns the global FTP connector object, only creating it

if it doesn't already exist.

You may optionally specify a username and password in the parameters. If you do so,
you may not login() again with different credentials using the same object.
If you do not use this option, you must quit() the current connection when you
are done, to free it for use by others.

##### Signature

```php
public static Joomla\Filesystem\Clients\FtpClient::getInstance ( [ string $host = &#039;127.0.0.1&#039; [, string $port = &#039;21&#039; [, array $options = [] [, string $user = null [, string $pass = null ]]]]] ) : Joomla\Filesystem\Clients\FtpClient
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `host` | `string` | Host to connect to Defaults to `'127.0.0.1'`. |
| `port` | `string` | Port to connect to Defaults to `'21'`. |
| `options` | `array` | Array with any of these options: type=>[FTP_AUTOASCII|FTP_ASCII|FTP_BINARY], timeout=>(int) Defaults to `[]`. |
| `user` | `string` | Username to use for a connection Defaults to `null`. |
| `pass` | `string` | Password to use for a connection Defaults to `null`. |

##### Return Values

`Joomla\Filesystem\Clients\FtpClient` The FTP Client object.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns the global FTP connector object, only creating it
 * if it doesn't already exist.
 *
 * You may optionally specify a username and password in the parameters. If you do so,
 * you may not login() again with different credentials using the same object.
 * If you do not use this option, you must quit() the current connection when you
 * are done, to free it for use by others.
 *
 * @param   string  $host     Host to connect to
 * @param   string  $port     Port to connect to
 * @param   array   $options  Array with any of these options: type=>[FTP_AUTOASCII|FTP_ASCII|FTP_BINARY], timeout=>(int)
 * @param   string  $user     Username to use for a connection
 * @param   string  $pass     Password to use for a connection
 *
 * @return  FtpClient  The FTP Client object.
 *
 * @since   1.0
 */
public static function getInstance(string $host = '127.0.0.1', string $port = '21', array $options = [], string $user = null, string $pass = null) : Joomla\Filesystem\Clients\FtpClient{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::setOptions`

Set client options

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::setOptions ( array $options  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` | Associative array of options to set |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set client options
 *
 * @param   array  $options  Associative array of options to set
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 */
public function setOptions(array $options) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::connect`

Connect to a FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::connect ( [ string $host = &#039;127.0.0.1&#039; [, int $port = 21 ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `host` | `string` | Host to connect to [Default: 127.0.0.1] Defaults to `'127.0.0.1'`. |
| `port` | `int` | Port to connect on [Default: port 21] Defaults to `21`. |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Connect to a FTP server
 *
 * @param   string   $host  Host to connect to [Default: 127.0.0.1]
 * @param   integer  $port  Port to connect on [Default: port 21]
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function connect(string $host = '127.0.0.1', int $port = 21) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::isConnected`

Determine if the object is connected to an FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::isConnected ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if connected

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine if the object is connected to an FTP server
 *
 * @return  boolean  True if connected
 *
 * @since   1.0
 */
public function isConnected() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::login`

Login to a server once connected

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::login ( [ string $user = &#039;anonymous&#039; [, string $pass = &#039;jftp@joomla.org&#039; ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `user` | `string` | Username to login to the server Defaults to `'anonymous'`. |
| `pass` | `string` | Password to login to the server Defaults to `'jftp@joomla.org'`. |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Login to a server once connected
 *
 * @param   string  $user  Username to login to the server
 * @param   string  $pass  Password to login to the server
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function login(string $user = 'anonymous', string $pass = 'jftp@joomla.org') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::quit`

Quit and close the connection

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::quit ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if successful

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Quit and close the connection
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 */
public function quit() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::pwd`

Retrieve the current working directory on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::pwd ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` Current working directory

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve the current working directory on the FTP server
 *
 * @return  string   Current working directory
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function pwd() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::syst`

System string from the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::syst ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` System identifier string

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * System string from the FTP server
 *
 * @return  string   System identifier string
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function syst() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::chdir`

Change the current working directory on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::chdir ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path to change into on the server |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Change the current working directory on the FTP server
 *
 * @param   string  $path  Path to change into on the server
 *
 * @return  boolean True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function chdir(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::reinit`

Reinitialise the server, ie. need to login again

NOTE: This command not available on all servers

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::reinit ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Reinitialise the server, ie. need to login again
 *
 * NOTE: This command not available on all servers
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function reinit() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::rename`

Rename a file/folder on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::rename ( string $from, string $to  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `from` | `string` | Path to change file/folder from |
| `to` | `string` | Path to change file/folder to |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Rename a file/folder on the FTP server
 *
 * @param   string  $from  Path to change file/folder from
 * @param   string  $to    Path to change file/folder to
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function rename(string $from, string $to) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::chmod`

Change mode for a path on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::chmod ( string $path, mixed $mode  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path to change mode on |
| `mode` | `mixed` | Octal value to change mode to, e.g. '0777', 0777 or 511 (string or integer) |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Change mode for a path on the FTP server
 *
 * @param   string  $path  Path to change mode on
 * @param   mixed   $mode  Octal value to change mode to, e.g. '0777', 0777 or 511 (string or integer)
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function chmod(string $path, mixed $mode) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::delete`

Delete a path [file/folder] on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::delete ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path to delete |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Delete a path [file/folder] on the FTP server
 *
 * @param   string  $path  Path to delete
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function delete(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::mkdir`

Create a directory on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::mkdir ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Directory to create |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a directory on the FTP server
 *
 * @param   string  $path  Directory to create
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function mkdir(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::restart`

Restart data transfer at a given byte

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::restart ( int $point  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `point` | `int` | Byte to restart transfer at |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Restart data transfer at a given byte
 *
 * @param   integer  $point  Byte to restart transfer at
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function restart(int $point) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::create`

Create an empty file on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::create ( string $path  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path local file to store on the FTP server |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create an empty file on the FTP server
 *
 * @param   string  $path  Path local file to store on the FTP server
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function create(string $path) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::read`

Read a file from the FTP server's contents into a buffer

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::read ( string $remote, string $buffer  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `remote` | `string` | Path to remote file to read on the FTP server |
| `buffer` | `string` | Buffer variable to read file contents into |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Read a file from the FTP server's contents into a buffer
 *
 * @param   string  $remote  Path to remote file to read on the FTP server
 * @param   string  $buffer  Buffer variable to read file contents into
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function read(string $remote, string $buffer) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::get`

Get a file from the FTP server and save it to a local file

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::get ( string $local, string $remote  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `local` | `string` | Local path to save remote file to |
| `remote` | `string` | Path to remote file to get on the FTP server |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a file from the FTP server and save it to a local file
 *
 * @param   string  $local   Local path to save remote file to
 * @param   string  $remote  Path to remote file to get on the FTP server
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function get(string $local, string $remote) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::store`

Store a file to the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::store ( string $local [, string $remote = null ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `local` | `string` | Path to local file to store on the FTP server |
| `remote` | `string` | FTP path to file to create Defaults to `null`. |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Store a file to the FTP server
 *
 * @param   string  $local   Path to local file to store on the FTP server
 * @param   string  $remote  FTP path to file to create
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function store(string $local, string $remote = null) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::write`

Write a string to the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::write ( string $remote, string $buffer  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `remote` | `string` | FTP path to file to write to |
| `buffer` | `string` | Contents to write to the FTP server |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Write a string to the FTP server
 *
 * @param   string  $remote  FTP path to file to write to
 * @param   string  $buffer  Contents to write to the FTP server
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function write(string $remote, string $buffer) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::listNames`

List the filenames of the contents of a directory on the FTP server

Note: Some servers also return folder names. However, to be sure to list folders on all
servers, you should use listDetails() instead if you also need to deal with folders

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::listNames ( [ string $path = null ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path local file to store on the FTP server Defaults to `null`. |

##### Return Values

`string` Directory listing

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * List the filenames of the contents of a directory on the FTP server
 *
 * Note: Some servers also return folder names. However, to be sure to list folders on all
 * servers, you should use listDetails() instead if you also need to deal with folders
 *
 * @param   string  $path  Path local file to store on the FTP server
 *
 * @return  string  Directory listing
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function listNames(string $path = null) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::listDetails`

List the contents of a directory on the FTP server

##### Signature

```php
public Joomla\Filesystem\Clients\FtpClient::listDetails ( [ string $path = null [, string $type = &#039;all&#039; ]] ) : string[]
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path to the local file to be stored on the FTP server Defaults to `null`. |
| `type` | `string` | Return type [raw|all|folders|files] Defaults to `'all'`. |

##### Return Values

`string[]` If $type is raw: string Directory listing, otherwise array of string with file-names

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * List the contents of a directory on the FTP server
 *
 * @param   string  $path  Path to the local file to be stored on the FTP server
 * @param   string  $type  Return type [raw|all|folders|files]
 *
 * @return  string[]  If $type is raw: string Directory listing, otherwise array of string with file-names
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function listDetails(string $path = null, string $type = 'all') : string[]{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::_putCmd`

Send command to the FTP server and validate an expected response code

##### Signature

```php
protected Joomla\Filesystem\Clients\FtpClient::_putCmd ( string $cmd, mixed $expectedResponse  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `cmd` | `string` | Command to send to the FTP server |
| `expectedResponse` | `mixed` | Integer response code or array of integer response codes |

##### Return Values

`bool` True if command executed successfully

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Send command to the FTP server and validate an expected response code
 *
 * @param   string  $cmd               Command to send to the FTP server
 * @param   mixed   $expectedResponse  Integer response code or array of integer response codes
 *
 * @return  boolean  True if command executed successfully
 *
 * @since   1.0
 * @throws  FilesystemException
 */
protected function _putCmd(string $cmd, mixed $expectedResponse) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::_verifyResponse`

Verify the response code from the server and log response if flag is set

##### Signature

```php
protected Joomla\Filesystem\Clients\FtpClient::_verifyResponse ( mixed $expected  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `expected` | `mixed` | Integer response code or array of integer response codes |

##### Return Values

`bool` True if response code from the server is expected

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Verify the response code from the server and log response if flag is set
 *
 * @param   mixed  $expected  Integer response code or array of integer response codes
 *
 * @return  boolean  True if response code from the server is expected
 *
 * @since   1.0
 * @throws  FilesystemException
 */
protected function _verifyResponse(mixed $expected) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::_passive`

Set server to passive mode and open a data port connection

##### Signature

```php
protected Joomla\Filesystem\Clients\FtpClient::_passive ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set server to passive mode and open a data port connection
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
protected function _passive() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::_findMode`

Find out the correct transfer mode for a specific file

##### Signature

```php
protected Joomla\Filesystem\Clients\FtpClient::_findMode ( string $fileName  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `fileName` | `string` | Name of the file |

##### Return Values

`int` Transfer-mode for this filetype [FTP_ASCII|FTP_BINARY]

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Find out the correct transfer mode for a specific file
 *
 * @param   string  $fileName  Name of the file
 *
 * @return  integer Transfer-mode for this filetype [FTP_ASCII|FTP_BINARY]
 *
 * @since   1.0
 */
protected function _findMode(string $fileName) : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Clients\FtpClient::_mode`

Set transfer mode

##### Signature

```php
protected Joomla\Filesystem\Clients\FtpClient::_mode ( int $mode  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `mode` | `int` | Integer representation of data transfer mode [1:Binary|0:Ascii]  Defined constants can also be used [FTP_BINARY|FTP_ASCII] |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set transfer mode
 *
 * @param   integer  $mode  Integer representation of data transfer mode [1:Binary|0:Ascii]
 *                          Defined constants can also be used [FTP_BINARY|FTP_ASCII]
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  FilesystemException
 */
protected function _mode(int $mode) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Exception\FilesystemException Class

Exception class for handling errors in the Filesystem package

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$message` | `` |  |
| protected `$code` | `` |  |
| protected `$file` | `` |  |
| protected `$line` | `` |  |    

### Methods

#### `Joomla\Filesystem\Exception\FilesystemException::__construct`

##### Signature

```php
public Joomla\Filesystem\Exception\FilesystemException::__construct ( [  $message = null [,  $code = null [,  $previous = null ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `message` | `` |  Defaults to `null`. |
| `code` | `` |  Defaults to `null`. |
| `previous` | `` |  Defaults to `null`. |

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
public function __construct( $message = null,  $code = null,  $previous = null) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::__wakeup`

##### Signature

```php
public Joomla\Filesystem\Exception\FilesystemException::__wakeup ( void ) : void
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
public function __wakeup() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getMessage`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getMessage ( void ) : void
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
final public function getMessage() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getCode`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getCode ( void ) : void
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
final public function getCode() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getFile`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getFile ( void ) : void
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
final public function getFile() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getLine`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getLine ( void ) : void
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
final public function getLine() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getTrace`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getTrace ( void ) : void
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
final public function getTrace() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getPrevious`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getPrevious ( void ) : void
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
final public function getPrevious() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::getTraceAsString`

##### Signature

```php
final public Joomla\Filesystem\Exception\FilesystemException::getTraceAsString ( void ) : void
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
final public function getTraceAsString() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Exception\FilesystemException::__toString`

##### Signature

```php
public Joomla\Filesystem\Exception\FilesystemException::__toString ( void ) : void
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
public function __toString() : void{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Stream Class

Joomla! Stream Interface

The Joomla! stream interface is designed to handle files as streams
where as the legacy JFile static class treated files in a rather
atomic manner.

This class adheres to the stream wrapper operations:

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$filemode` | `int` | File Mode |
| protected `$dirmode` | `int` | Directory Mode |
| protected `$chunksize` | `int` | Default Chunk Size |
| protected `$filename` | `string` | Filename |
| protected `$writeprefix` | `string` | Prefix of the connection for writing |
| protected `$readprefix` | `string` | Prefix of the connection for reading |
| protected `$processingmethod` | `string` | gz, bz, f 
If a scheme is detected, fopen will be defaulted
To use compression with a network stream use a filter |
| protected `$filters` | `array` | Filters applied to the current stream |
| protected `$fh` | `resource` | File Handle |
| protected `$filesize` | `int` | File size |
| protected `$context` | `string` | Context to use when opening the connection |
| protected `$contextOptions` | `array` | Context options; used to rebuild the context |
| protected `$openmode` | `string` | The mode under which the file was opened |    

### Methods

#### `Joomla\Filesystem\Stream::__construct`

Constructor

##### Signature

```php
public Joomla\Filesystem\Stream::__construct ( [ string $writeprefix = &#039;&#039; [, string $readprefix = &#039;&#039; [, array $context = [] ]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `writeprefix` | `string` | Prefix of the stream (optional). Unlike the JPATH_*, this has a final path separator! Defaults to `''`. |
| `readprefix` | `string` | The read prefix (optional). Defaults to `''`. |
| `context` | `array` | The context options (optional). Defaults to `[]`. |

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
 * Constructor
 *
 * @param   string  $writeprefix  Prefix of the stream (optional). Unlike the JPATH_*, this has a final path separator!
 * @param   string  $readprefix   The read prefix (optional).
 * @param   array   $context      The context options (optional).
 *
 * @since   1.0
 */
public function __construct(string $writeprefix = '', string $readprefix = '', array $context = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::__destruct`

Destructor

##### Signature

```php
public Joomla\Filesystem\Stream::__destruct ( void ) : void
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
 * Destructor
 *
 * @since   1.0
 */
public function __destruct() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::getStream`

Creates a new stream object with appropriate prefix

##### Signature

```php
public static Joomla\Filesystem\Stream::getStream ( [ bool $usePrefix = true [, string $ua = null [, bool $uamask = false ]]] ) : Joomla\Filesystem\Stream
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `usePrefix` | `bool` | Prefix the connections for writing Defaults to `true`. |
| `ua` | `string` | UA User agent to use Defaults to `null`. |
| `uamask` | `bool` | User agent masking (prefix Mozilla) Defaults to `false`. |

##### Return Values

`Joomla\Filesystem\Stream` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Creates a new stream object with appropriate prefix
 *
 * @param   boolean  $usePrefix  Prefix the connections for writing
 * @param   string   $ua         UA User agent to use
 * @param   boolean  $uamask     User agent masking (prefix Mozilla)
 *
 * @return  Stream
 *
 * @see     Stream
 * @since   1.0
 */
public static function getStream(bool $usePrefix = true, string $ua = null, bool $uamask = false) : Joomla\Filesystem\Stream{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::open`

Generic File Operations

Open a stream with some lazy loading smarts

##### Signature

```php
public Joomla\Filesystem\Stream::open ( string $filename [, string $mode = &#039;r&#039; [, bool $useIncludePath = false [, resource $context = null [, bool $usePrefix = false [, bool $relative = false [, bool $detectprocessingmode = false ]]]]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | Filename |
| `mode` | `string` | Mode string to use Defaults to `'r'`. |
| `useIncludePath` | `bool` | Use the PHP include path Defaults to `false`. |
| `context` | `resource` | Context to use when opening Defaults to `null`. |
| `usePrefix` | `bool` | Use a prefix to open the file Defaults to `false`. |
| `relative` | `bool` | Filename is a relative path (if false, strips JPATH_ROOT to make it relative) Defaults to `false`. |
| `detectprocessingmode` | `bool` | Detect the processing method for the file and use the appropriate function  to handle output automatically Defaults to `false`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Generic File Operations
 *
 * Open a stream with some lazy loading smarts
 *
 * @param   string    $filename              Filename
 * @param   string    $mode                  Mode string to use
 * @param   boolean   $useIncludePath        Use the PHP include path
 * @param   resource  $context               Context to use when opening
 * @param   boolean   $usePrefix             Use a prefix to open the file
 * @param   boolean   $relative              Filename is a relative path (if false, strips JPATH_ROOT to make it relative)
 * @param   boolean   $detectprocessingmode  Detect the processing method for the file and use the appropriate function
 *                                           to handle output automatically
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function open(string $filename, string $mode = 'r', bool $useIncludePath = false, resource $context = null, bool $usePrefix = false, bool $relative = false, bool $detectprocessingmode = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::close`

Attempt to close a file handle

Will return false if it failed and true on success
If the file is not open the system will return true, this function destroys the file handle as well

##### Signature

```php
public Joomla\Filesystem\Stream::close ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Attempt to close a file handle
 *
 * Will return false if it failed and true on success
 * If the file is not open the system will return true, this function destroys the file handle as well
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function close() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::eof`

Work out if we're at the end of the file for a stream

##### Signature

```php
public Joomla\Filesystem\Stream::eof ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Work out if we're at the end of the file for a stream
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function eof() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::filesize`

Retrieve the file size of the path

##### Signature

```php
public Joomla\Filesystem\Stream::filesize ( void ) : int|bool
```
##### Parameters

This method has no parameters.

##### Return Values

`int` or `bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Retrieve the file size of the path
 *
 * @return  integer|boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function filesize() : int|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::gets`

Get a line from the stream source.

##### Signature

```php
public Joomla\Filesystem\Stream::gets ( [ int $length = 0 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `length` | `int` | The number of bytes (optional) to read. Defaults to `0`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a line from the stream source.
 *
 * @param   integer  $length  The number of bytes (optional) to read.
 *
 * @return  string
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function gets(int $length = 0) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::read`

Read a file

Handles user space streams appropriately otherwise any read will return 8192

##### Signature

```php
public Joomla\Filesystem\Stream::read ( [ int $length = 0 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `length` | `int` | Length of data to read Defaults to `0`. |

##### Return Values

`string` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Read a file
 *
 * Handles user space streams appropriately otherwise any read will return 8192
 *
 * @param   integer  $length  Length of data to read
 *
 * @return  string
 *
 * @link    https://www.php.net/manual/en/function.fread.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function read(int $length = 0) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::seek`

Seek the file

Note: the return value is different to that of fseek

##### Signature

```php
public Joomla\Filesystem\Stream::seek ( int $offset [, int $whence = 0 ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `int` | Offset to use when seeking. |
| `whence` | `int` | Seek mode to use. Defaults to `0`. |

##### Return Values

`bool` True on success, false on failure

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Seek the file
 *
 * Note: the return value is different to that of fseek
 *
 * @param   integer  $offset  Offset to use when seeking.
 * @param   integer  $whence  Seek mode to use.
 *
 * @return  boolean  True on success, false on failure
 *
 * @link    https://www.php.net/manual/en/function.fseek.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function seek(int $offset, int $whence = 0) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::tell`

Returns the current position of the file read/write pointer.

##### Signature

```php
public Joomla\Filesystem\Stream::tell ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns the current position of the file read/write pointer.
 *
 * @return  integer
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function tell() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::write`

File write

Whilst this function accepts a reference, the underlying fwrite
will do a copy! This will roughly double the memory allocation for
any write you do. Specifying chunked will get around this by only
writing in specific chunk sizes. This defaults to 8192 which is a
sane number to use most of the time (change the default with
Stream::set('chunksize', newsize);)
Note: This doesn't support gzip/bzip2 writing like reading does

##### Signature

```php
public Joomla\Filesystem\Stream::write ( string $string [, int $length = 0 [, int $chunk = 0 ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | Reference to the string to write. |
| `length` | `int` | Length of the string to write. Defaults to `0`. |
| `chunk` | `int` | Size of chunks to write in. Defaults to `0`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * File write
 *
 * Whilst this function accepts a reference, the underlying fwrite
 * will do a copy! This will roughly double the memory allocation for
 * any write you do. Specifying chunked will get around this by only
 * writing in specific chunk sizes. This defaults to 8192 which is a
 * sane number to use most of the time (change the default with
 * Stream::set('chunksize', newsize);)
 * Note: This doesn't support gzip/bzip2 writing like reading does
 *
 * @param   string   $string  Reference to the string to write.
 * @param   integer  $length  Length of the string to write.
 * @param   integer  $chunk   Size of chunks to write in.
 *
 * @return  boolean
 *
 * @link    https://www.php.net/manual/en/function.fwrite.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function write(string $string, int $length = 0, int $chunk = 0) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::chmod`

Chmod wrapper

##### Signature

```php
public Joomla\Filesystem\Stream::chmod ( [ string $filename = &#039;&#039; [, mixed $mode = 0 ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | File name. Defaults to `''`. |
| `mode` | `mixed` | Mode to use. Defaults to `0`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Chmod wrapper
 *
 * @param   string  $filename  File name.
 * @param   mixed   $mode      Mode to use.
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function chmod(string $filename = '', mixed $mode = 0) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::get_meta_data`

Get the stream metadata

##### Signature

```php
public Joomla\Filesystem\Stream::get_meta_data ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` header/metadata

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the stream metadata
 *
 * @return  array  header/metadata
 *
 * @link    https://www.php.net/manual/en/function.stream-get-meta-data.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function get_meta_data() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::_buildContext`

Stream contexts

Builds the context from the array

##### Signature

```php
public Joomla\Filesystem\Stream::_buildContext ( void ) : void
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
 * Stream contexts
 * Builds the context from the array
 *
 * @return  void
 *
 * @since   1.0
 */
public function _buildContext() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::setContextOptions`

Updates the context to the array

Format is the same as the options for stream_context_create

##### Signature

```php
public Joomla\Filesystem\Stream::setContextOptions ( array $context  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `context` | `array` | Options to create the context with |

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
 * Updates the context to the array
 *
 * Format is the same as the options for stream_context_create
 *
 * @param   array  $context  Options to create the context with
 *
 * @return  void
 *
 * @link    https://www.php.net/stream_context_create
 * @since   1.0
 */
public function setContextOptions(array $context) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::addContextEntry`

Adds a particular options to the context

##### Signature

```php
public Joomla\Filesystem\Stream::addContextEntry ( string $wrapper, string $name, string $value  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `wrapper` | `string` | The wrapper to use |
| `name` | `string` | The option to set |
| `value` | `string` | The value of the option |

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
 * Adds a particular options to the context
 *
 * @param   string  $wrapper  The wrapper to use
 * @param   string  $name     The option to set
 * @param   string  $value    The value of the option
 *
 * @return  void
 *
 * @link    https://www.php.net/stream_context_create Stream Context Creation
 * @link    https://www.php.net/manual/en/context.php Context Options for various streams
 * @since   1.0
 */
public function addContextEntry(string $wrapper, string $name, string $value) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::deleteContextEntry`

Deletes a particular setting from a context

##### Signature

```php
public Joomla\Filesystem\Stream::deleteContextEntry ( string $wrapper, string $name  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `wrapper` | `string` | The wrapper to use |
| `name` | `string` | The option to unset |

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
 * Deletes a particular setting from a context
 *
 * @param   string  $wrapper  The wrapper to use
 * @param   string  $name     The option to unset
 *
 * @return  void
 *
 * @link    https://www.php.net/stream_context_create
 * @since   1.0
 */
public function deleteContextEntry(string $wrapper, string $name) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::applyContextToStream`

Applies the current context to the stream

Use this to change the values of the context after you've opened a stream

##### Signature

```php
public Joomla\Filesystem\Stream::applyContextToStream ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Applies the current context to the stream
 *
 * Use this to change the values of the context after you've opened a stream
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function applyContextToStream() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::appendFilter`

Stream filters

Append a filter to the chain

##### Signature

```php
public Joomla\Filesystem\Stream::appendFilter ( string $filtername [, int $readWrite = 1 [, array $params = [] ]] ) : resource|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filtername` | `string` | The key name of the filter. |
| `readWrite` | `int` | Optional. Defaults to STREAM_FILTER_READ. Defaults to `1`. |
| `params` | `array` | An array of params for the stream_filter_append call. Defaults to `[]`. |

##### Return Values

`resource` or `bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Stream filters
 * Append a filter to the chain
 *
 * @param   string   $filtername  The key name of the filter.
 * @param   integer  $readWrite   Optional. Defaults to STREAM_FILTER_READ.
 * @param   array    $params      An array of params for the stream_filter_append call.
 *
 * @return  resource|boolean
 *
 * @link    https://www.php.net/manual/en/function.stream-filter-append.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function appendFilter(string $filtername, int $readWrite = 1, array $params = []) : resource|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::prependFilter`

Prepend a filter to the chain

##### Signature

```php
public Joomla\Filesystem\Stream::prependFilter ( string $filtername [, int $readWrite = 1 [, array $params = [] ]] ) : resource|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filtername` | `string` | The key name of the filter. |
| `readWrite` | `int` | Optional. Defaults to STREAM_FILTER_READ. Defaults to `1`. |
| `params` | `array` | An array of params for the stream_filter_prepend call. Defaults to `[]`. |

##### Return Values

`resource` or `bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Prepend a filter to the chain
 *
 * @param   string   $filtername  The key name of the filter.
 * @param   integer  $readWrite   Optional. Defaults to STREAM_FILTER_READ.
 * @param   array    $params      An array of params for the stream_filter_prepend call.
 *
 * @return  resource|boolean
 *
 * @link    https://www.php.net/manual/en/function.stream-filter-prepend.php
 * @since   1.0
 * @throws  FilesystemException
 */
public function prependFilter(string $filtername, int $readWrite = 1, array $params = []) : resource|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::removeFilter`

Remove a filter, either by resource (handed out from the append or prepend function)

or via getting the filter list)

##### Signature

```php
public Joomla\Filesystem\Stream::removeFilter ( resource $resource [, bool $byindex = false ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `resource` | `resource` | The resource. |
| `byindex` | `bool` | The index of the filter. Defaults to `false`. |

##### Return Values

`bool` Result of operation

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove a filter, either by resource (handed out from the append or prepend function)
 * or via getting the filter list)
 *
 * @param   resource  $resource  The resource.
 * @param   boolean   $byindex   The index of the filter.
 *
 * @return  boolean   Result of operation
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function removeFilter(resource $resource, bool $byindex = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::copy`

Copy a file from src to dest

##### Signature

```php
public Joomla\Filesystem\Stream::copy ( string $src, string $dest [, resource $context = null [, bool $usePrefix = true [, bool $relative = false ]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The file path to copy from. |
| `dest` | `string` | The file path to copy to. |
| `context` | `resource` | A valid context resource (optional) created with stream_context_create. Defaults to `null`. |
| `usePrefix` | `bool` | Controls the use of a prefix (optional). Defaults to `true`. |
| `relative` | `bool` | Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped. Defaults to `false`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Copy a file from src to dest
 *
 * @param   string    $src        The file path to copy from.
 * @param   string    $dest       The file path to copy to.
 * @param   resource  $context    A valid context resource (optional) created with stream_context_create.
 * @param   boolean   $usePrefix  Controls the use of a prefix (optional).
 * @param   boolean   $relative   Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped.
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function copy(string $src, string $dest, resource $context = null, bool $usePrefix = true, bool $relative = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::move`

Moves a file

##### Signature

```php
public Joomla\Filesystem\Stream::move ( string $src, string $dest [, resource $context = null [, bool $usePrefix = true [, bool $relative = false ]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The file path to move from. |
| `dest` | `string` | The file path to move to. |
| `context` | `resource` | A valid context resource (optional) created with stream_context_create. Defaults to `null`. |
| `usePrefix` | `bool` | Controls the use of a prefix (optional). Defaults to `true`. |
| `relative` | `bool` | Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped. Defaults to `false`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Moves a file
 *
 * @param   string    $src        The file path to move from.
 * @param   string    $dest       The file path to move to.
 * @param   resource  $context    A valid context resource (optional) created with stream_context_create.
 * @param   boolean   $usePrefix  Controls the use of a prefix (optional).
 * @param   boolean   $relative   Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped.
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function move(string $src, string $dest, resource $context = null, bool $usePrefix = true, bool $relative = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::delete`

Delete a file

##### Signature

```php
public Joomla\Filesystem\Stream::delete ( string $filename [, resource $context = null [, bool $usePrefix = true [, bool $relative = false ]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | The file path to delete. |
| `context` | `resource` | A valid context resource (optional) created with stream_context_create. Defaults to `null`. |
| `usePrefix` | `bool` | Controls the use of a prefix (optional). Defaults to `true`. |
| `relative` | `bool` | Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped. Defaults to `false`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Delete a file
 *
 * @param   string    $filename   The file path to delete.
 * @param   resource  $context    A valid context resource (optional) created with stream_context_create.
 * @param   boolean   $usePrefix  Controls the use of a prefix (optional).
 * @param   boolean   $relative   Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped.
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function delete(string $filename, resource $context = null, bool $usePrefix = true, bool $relative = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::upload`

Upload a file

##### Signature

```php
public Joomla\Filesystem\Stream::upload ( string $src, string $dest [, resource $context = null [, bool $usePrefix = true [, bool $relative = false ]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The file path to copy from (usually a temp folder). |
| `dest` | `string` | The file path to copy to. |
| `context` | `resource` | A valid context resource (optional) created with stream_context_create. Defaults to `null`. |
| `usePrefix` | `bool` | Controls the use of a prefix (optional). Defaults to `true`. |
| `relative` | `bool` | Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped. Defaults to `false`. |

##### Return Values

`bool` 

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Upload a file
 *
 * @param   string    $src        The file path to copy from (usually a temp folder).
 * @param   string    $dest       The file path to copy to.
 * @param   resource  $context    A valid context resource (optional) created with stream_context_create.
 * @param   boolean   $usePrefix  Controls the use of a prefix (optional).
 * @param   boolean   $relative   Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped.
 *
 * @return  boolean
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public function upload(string $src, string $dest, resource $context = null, bool $usePrefix = true, bool $relative = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::writeFile`

Writes a chunk of data to a file.

##### Signature

```php
public Joomla\Filesystem\Stream::writeFile ( string $filename, string $buffer [, bool $appendToFile = false ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | The file name. |
| `buffer` | `string` | The data to write to the file. |
| `appendToFile` | `bool` | Append to the file and not overwrite it. Defaults to `false`. |

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
 * Writes a chunk of data to a file.
 *
 * @param   string   $filename      The file name.
 * @param   string   $buffer        The data to write to the file.
 * @param   boolean  $appendToFile  Append to the file and not overwrite it.
 *
 * @return  boolean
 *
 * @since   1.0
 */
public function writeFile(string $filename, string $buffer, bool $appendToFile = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::_getFilename`

Determine the appropriate 'filename' of a file

##### Signature

```php
public Joomla\Filesystem\Stream::_getFilename ( string $filename, string $mode, bool $usePrefix, bool $relative  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | Original filename of the file |
| `mode` | `string` | Mode string to retrieve the filename |
| `usePrefix` | `bool` | Controls the use of a prefix |
| `relative` | `bool` | Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped. |

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
 * Determine the appropriate 'filename' of a file
 *
 * @param   string   $filename   Original filename of the file
 * @param   string   $mode       Mode string to retrieve the filename
 * @param   boolean  $usePrefix  Controls the use of a prefix
 * @param   boolean  $relative   Determines if the filename given is relative. Relative paths do not have JPATH_ROOT stripped.
 *
 * @return  string
 *
 * @since   1.0
 */
public function _getFilename(string $filename, string $mode, bool $usePrefix, bool $relative) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::getFileHandle`

Return the internal file handle

##### Signature

```php
public Joomla\Filesystem\Stream::getFileHandle ( void ) : Joomla\Filesystem\File
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Filesystem\File` handler

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Return the internal file handle
 *
 * @return  File handler
 *
 * @since   1.0
 */
public function getFileHandle() : Joomla\Filesystem\File{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::set`

Modifies a property of the object, creating it if it does not already exist.

##### Signature

```php
public Joomla\Filesystem\Stream::set ( string $property [, mixed $value = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the property. |
| `value` | `mixed` | The value of the property to set. Defaults to `null`. |

##### Return Values

`mixed` Previous value of the property.

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
 * @param   string  $property  The name of the property.
 * @param   mixed   $value     The value of the property to set.
 *
 * @return  mixed  Previous value of the property.
 *
 * @since   1.0
 */
public function set(string $property, mixed $value = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream::get`

Returns a property of the object or the default value if the property is not set.

##### Signature

```php
public Joomla\Filesystem\Stream::get ( string $property [, mixed $default = null ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `property` | `string` | The name of the property. |
| `default` | `mixed` | The default value. Defaults to `null`. |

##### Return Values

`mixed` The value of the property.

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
 * @param   string  $property  The name of the property.
 * @param   mixed   $default   The default value.
 *
 * @return  mixed    The value of the property.
 *
 * @since   1.0
 */
public function get(string $property, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\File Class

A File handling class

### Methods

#### `Joomla\Filesystem\File::stripExt`

Strips the last extension off of a file name

##### Signature

```php
public static Joomla\Filesystem\File::stripExt ( string $file  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` | The file name |

##### Return Values

`string` The file name without the extension

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Strips the last extension off of a file name
 *
 * @param   string  $file  The file name
 *
 * @return  string  The file name without the extension
 *
 * @since   1.0
 */
public static function stripExt(string $file) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::makeSafe`

Makes the file name safe to use

##### Signature

```php
public static Joomla\Filesystem\File::makeSafe ( string $file [, array $stripChars = [ &#039;#^\.#&#039; ] ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` | The name of the file [not full path] |
| `stripChars` | `array` | Array of regex (by default will remove any leading periods) Defaults to `[ '#^\.#' ]`. |

##### Return Values

`string` The sanitised string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Makes the file name safe to use
 *
 * @param   string  $file        The name of the file [not full path]
 * @param   array   $stripChars  Array of regex (by default will remove any leading periods)
 *
 * @return  string  The sanitised string
 *
 * @since   1.0
 */
public static function makeSafe(string $file, array $stripChars = [ '#^\.#' ]) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::copy`

Copies a file

##### Signature

```php
public static Joomla\Filesystem\File::copy ( string $src, string $dest [, string $path = null [, bool $useStreams = false ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The path to the source file |
| `dest` | `string` | The path to the destination file |
| `path` | `string` | An optional base path to prefix to the file names Defaults to `null`. |
| `useStreams` | `bool` | True to use streams Defaults to `false`. |

##### Return Values

`bool` True on success

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />
Throws UnexpectedValueException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Copies a file
 *
 * @param   string   $src         The path to the source file
 * @param   string   $dest        The path to the destination file
 * @param   string   $path        An optional base path to prefix to the file names
 * @param   boolean  $useStreams  True to use streams
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 * @throws  FilesystemException
 * @throws  \UnexpectedValueException
 */
public static function copy(string $src, string $dest, string $path = null, bool $useStreams = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::delete`

Delete a file or array of files

##### Signature

```php
public static Joomla\Filesystem\File::delete ( mixed $file  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `mixed` | The file name or an array of file names |

##### Return Values

`bool` True on success

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Delete a file or array of files
 *
 * @param   mixed  $file  The file name or an array of file names
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public static function delete(mixed $file) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::move`

Moves a file

##### Signature

```php
public static Joomla\Filesystem\File::move ( string $src, string $dest [, string $path = &#039;&#039; [, bool $useStreams = false ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The path to the source file |
| `dest` | `string` | The path to the destination file |
| `path` | `string` | An optional base path to prefix to the file names Defaults to `''`. |
| `useStreams` | `bool` | True to use streams Defaults to `false`. |

##### Return Values

`bool` True on success

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Moves a file
 *
 * @param   string   $src         The path to the source file
 * @param   string   $dest        The path to the destination file
 * @param   string   $path        An optional base path to prefix to the file names
 * @param   boolean  $useStreams  True to use streams
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public static function move(string $src, string $dest, string $path = '', bool $useStreams = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::write`

Write contents to a file

##### Signature

```php
public static Joomla\Filesystem\File::write ( string $file, string $buffer [, bool $useStreams = false [, bool $appendToFile = false ]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `file` | `string` | The full file path |
| `buffer` | `string` | The buffer to write |
| `useStreams` | `bool` | Use streams Defaults to `false`. |
| `appendToFile` | `bool` | Append to the file and not overwrite it. Defaults to `false`. |

##### Return Values

`bool` True on success

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Write contents to a file
 *
 * @param   string   $file          The full file path
 * @param   string   $buffer        The buffer to write
 * @param   boolean  $useStreams    Use streams
 * @param   boolean  $appendToFile  Append to the file and not overwrite it.
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 */
public static function write(string $file, string $buffer, bool $useStreams = false, bool $appendToFile = false) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\File::upload`

Moves an uploaded file to a destination folder

##### Signature

```php
public static Joomla\Filesystem\File::upload ( string $src, string $dest [, bool $useStreams = false ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The name of the php (temporary) uploaded file |
| `dest` | `string` | The path (including filename) to move the uploaded file to |
| `useStreams` | `bool` | True to use streams Defaults to `false`. |

##### Return Values

`bool` True on success

##### Errors/Exceptions

Throws Joomla\Filesystem\Exception\FilesystemException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Moves an uploaded file to a destination folder
 *
 * @param   string   $src         The name of the php (temporary) uploaded file
 * @param   string   $dest        The path (including filename) to move the uploaded file to
 * @param   boolean  $useStreams  True to use streams
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 * @throws  FilesystemException
 */
public static function upload(string $src, string $dest, bool $useStreams = false) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Buffer Class

Generic Buffer stream handler

This class provides a generic buffer stream.  It can be used to store/retrieve/manipulate
string buffers with the standard PHP filesystem I/O methods.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| public `$position` | `int` | Stream position |
| public `$name` | `string` | Buffer name |
| public `$buffers` | `array` | Buffer hash |    

### Methods

#### `Joomla\Filesystem\Buffer::stream_open`

Function to open file or url

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_open ( string $path, string $mode, int $options, string $openedPath  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The URL that was passed |
| `mode` | `string` | Mode used to open the file @see fopen |
| `options` | `int` | Flags used by the API, may be STREAM_USE_PATH and STREAM_REPORT_ERRORS |
| `openedPath` | `string` | Full path of the resource. Used with STREAN_USE_PATH option |

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
 * Function to open file or url
 *
 * @param   string   $path        The URL that was passed
 * @param   string   $mode        Mode used to open the file @see fopen
 * @param   integer  $options     Flags used by the API, may be STREAM_USE_PATH and STREAM_REPORT_ERRORS
 * @param   string   $openedPath  Full path of the resource. Used with STREAN_USE_PATH option
 *
 * @return  boolean
 *
 * @since   1.0
 * @see     streamWrapper::stream_open
 */
public function stream_open(string $path, string $mode, int $options, string $openedPath) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Buffer::stream_read`

Read stream

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_read ( int $count  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` | How many bytes of data from the current position should be returned. |

##### Return Values

`mixed` The data from the stream up to the specified number of bytes (all data if 
the total number of bytes in the stream is less than $count. Null if
the stream is empty.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Read stream
 *
 * @param   integer  $count  How many bytes of data from the current position should be returned.
 *
 * @return  mixed    The data from the stream up to the specified number of bytes (all data if
 *                   the total number of bytes in the stream is less than $count. Null if
 *                   the stream is empty.
 *
 * @see     streamWrapper::stream_read
 * @since   1.0
 */
public function stream_read(int $count) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Buffer::stream_write`

Write stream

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_write ( string $data  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data to write to the stream. |

##### Return Values

`int` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Write stream
 *
 * @param   string  $data  The data to write to the stream.
 *
 * @return  integer
 *
 * @see     streamWrapper::stream_write
 * @since   1.0
 */
public function stream_write(string $data) : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Buffer::stream_tell`

Function to get the current position of the stream

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_tell ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Function to get the current position of the stream
 *
 * @return  integer
 *
 * @see     streamWrapper::stream_tell
 * @since   1.0
 */
public function stream_tell() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Buffer::stream_eof`

Function to test for end of file pointer

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_eof ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if the pointer is at the end of the stream

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Function to test for end of file pointer
 *
 * @return  boolean  True if the pointer is at the end of the stream
 *
 * @see     streamWrapper::stream_eof
 * @since   1.0
 */
public function stream_eof() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Buffer::stream_seek`

The read write position updates in response to $offset and $whence

##### Signature

```php
public Joomla\Filesystem\Buffer::stream_seek ( int $offset, int $whence  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `int` | The offset in bytes |
| `whence` | `int` | Position the offset is added to  Options are SEEK_SET, SEEK_CUR, and SEEK_END |

##### Return Values

`bool` True if updated

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * The read write position updates in response to $offset and $whence
 *
 * @param   integer  $offset  The offset in bytes
 * @param   integer  $whence  Position the offset is added to
 *                            Options are SEEK_SET, SEEK_CUR, and SEEK_END
 *
 * @return  boolean  True if updated
 *
 * @see     streamWrapper::stream_seek
 * @since   1.0
 */
public function stream_seek(int $offset, int $whence) : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Stream\StringWrapper Class

String Stream Wrapper

This class allows you to use a PHP string in the same way that you would normally use a regular stream wrapper

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$currentString` | `string` | The current string |
| protected `$path` | `string` | The path |
| protected `$mode` | `string` | The mode |
| protected `$options` | `string` | Enter description here ... |
| protected `$openedPath` | `string` | Enter description here ... |
| protected `$pos` | `int` | Current position |
| protected `$len` | `string` | Length of the string |
| protected `$stat` | `array` | Statistics for a file |    

### Methods

#### `Joomla\Filesystem\Stream\StringWrapper::stream_open`

Open a file or URL.

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_open ( string $path, string $mode, int $options, string $openedPath  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | The stream path. |
| `mode` | `string` | Not used. |
| `options` | `int` | Not used. |
| `openedPath` | `string` | Not used. |

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
 * Open a file or URL.
 *
 * @param   string   $path        The stream path.
 * @param   string   $mode        Not used.
 * @param   integer  $options     Not used.
 * @param   string   $openedPath  Not used.
 *
 * @return  boolean
 *
 * @since   1.3.0
 */
public function stream_open(string $path, string $mode, int $options, string $openedPath) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_stat`

Retrieve information from a file resource

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_stat ( void ) : array
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
 * Retrieve information from a file resource
 *
 * @return  array
 *
 * @link    https://www.php.net/manual/en/streamwrapper.stream-stat.php
 * @since   1.3.0
 */
public function stream_stat() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::url_stat`

Retrieve information about a file.

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::url_stat ( string $path [, int $flags = 0 ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | File path or URL to stat |
| `flags` | `int` | Additional flags set by the streams API Defaults to `0`. |

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
 * Retrieve information about a file.
 *
 * @param   string   $path   File path or URL to stat
 * @param   integer  $flags  Additional flags set by the streams API
 *
 * @return  array
 *
 * @link    https://www.php.net/manual/en/streamwrapper.url-stat.php
 * @since   1.3.0
 */
public function url_stat(string $path, int $flags = 0) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_read`

Read a given number of bytes starting at the current position

and moving to the end of the string defined by the current position plus the
given number.

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_read ( int $count  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` | Bytes of data from the current position should be returned. |

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
 * Read a given number of bytes starting at the current position
 * and moving to the end of the string defined by the current position plus the
 * given number.
 *
 * @param   integer  $count  Bytes of data from the current position should be returned.
 *
 * @return  string
 *
 * @link    https://www.php.net/manual/en/streamwrapper.stream-read.php
 * @since   1.3.0
 */
public function stream_read(int $count) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_write`

Stream write, always returning false.

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_write ( string $data  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The data to write. |

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
 * Stream write, always returning false.
 *
 * @param   string  $data  The data to write.
 *
 * @return  boolean
 *
 * @since   1.3.0
 * @note    Updating the string is not supported.
 */
public function stream_write(string $data) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_tell`

Get the current position

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_tell ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The position

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the current position
 *
 * @return  integer  The position
 *
 * @since   1.3.0
 */
public function stream_tell() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_eof`

End of field check

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_eof ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if at end of field.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * End of field check
 *
 * @return  boolean  True if at end of field.
 *
 * @since   1.3.0
 */
public function stream_eof() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_seek`

Stream offset

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_seek ( int $offset, int $whence  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `offset` | `int` | The starting offset. |
| `whence` | `int` | SEEK_SET, SEEK_CUR, SEEK_END |

##### Return Values

`bool` True on success.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Stream offset
 *
 * @param   integer  $offset  The starting offset.
 * @param   integer  $whence  SEEK_SET, SEEK_CUR, SEEK_END
 *
 * @return  boolean  True on success.
 *
 * @since   1.3.0
 */
public function stream_seek(int $offset, int $whence) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Stream\StringWrapper::stream_flush`

Stream flush, always returns true.

##### Signature

```php
public Joomla\Filesystem\Stream\StringWrapper::stream_flush ( void ) : bool
```
##### Parameters

This method has no parameters.

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
 * Stream flush, always returns true.
 *
 * @return  boolean
 *
 * @since   1.3.0
 * @note    Data storage is not supported
 */
public function stream_flush() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Patcher Class

A Unified Diff Format Patcher class

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `SRC_FILE` | `string` | &#039;/^---\s+(\S+)\s+\d{1,4}-\d{1,2}-\d{1,2}\s+\d{1,2}:\d{1,2}:\d{1,2}(\.\d+)?\s+(\+|-)\d{4}/A&#039; | Regular expression for searching source files |
| public `DST_FILE` | `string` | &#039;/^\+\+\+\s+(\S+)\s+\d{1,4}-\d{1,2}-\d{1,2}\s+\d{1,2}:\d{1,2}:\d{1,2}(\.\d+)?\s+(\+|-)\d{4}/A&#039; | Regular expression for searching destination files |
| public `HUNK` | `string` | &#039;/@@ -(\d+)(,(\d+))?\s+\+(\d+)(,(\d+))?\s+@@($)/A&#039; | Regular expression for searching hunks of differences |
| public `SPLIT` | `string` | &#039;/(\r\n)|(\r)|(\n)/&#039; | Regular expression for splitting lines |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$sources` | `array` | Source files |
| protected `$destinations` | `array` | Destination files |
| protected `$removals` | `array` | Removal files |
| protected `$patches` | `array` | Patches |
| protected static `$instance` | `Joomla\Filesystem\Patcher` | Singleton instance of this class |    

### Methods

#### `Joomla\Filesystem\Patcher::__construct`

Constructor

The constructor is protected to force the use of Patcher::getInstance()

##### Signature

```php
protected Joomla\Filesystem\Patcher::__construct ( void ) : void
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
 * Constructor
 *
 * The constructor is protected to force the use of Patcher::getInstance()
 *
 * @since   1.0
 */
protected function __construct() : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::getInstance`

Get a patcher

##### Signature

```php
public static Joomla\Filesystem\Patcher::getInstance ( void ) : Joomla\Filesystem\Patcher
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Filesystem\Patcher` an instance of the patcher

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a patcher
 *
 * @return  Patcher  an instance of the patcher
 *
 * @since   1.0
 */
public static function getInstance() : Joomla\Filesystem\Patcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::reset`

Reset the pacher

##### Signature

```php
public Joomla\Filesystem\Patcher::reset ( void ) : Joomla\Filesystem\Patcher
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Filesystem\Patcher` This object for chaining

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Reset the pacher
 *
 * @return  Patcher  This object for chaining
 *
 * @since   1.0
 */
public function reset() : Joomla\Filesystem\Patcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::apply`

Apply the patches

##### Signature

```php
public Joomla\Filesystem\Patcher::apply ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The number of files patched

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Apply the patches
 *
 * @return  integer  The number of files patched
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function apply() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::addFile`

Add a unified diff file to the patcher

##### Signature

```php
public Joomla\Filesystem\Patcher::addFile ( string $filename [, string $root = &#039;JPATH_ROOT&#039; [, int $strip = 0 ]] ) : Joomla\Filesystem\Patcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | Path to the unified diff file |
| `root` | `string` | The files root path Defaults to `'JPATH_ROOT'`. |
| `strip` | `int` | The number of '/' to strip Defaults to `0`. |

##### Return Values

`Joomla\Filesystem\Patcher` $this for chaining

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add a unified diff file to the patcher
 *
 * @param   string   $filename  Path to the unified diff file
 * @param   string   $root      The files root path
 * @param   integer  $strip     The number of '/' to strip
 *
 * @returnPatcher  $this for chaining
 *
 * @since   1.0
 */
public function addFile(string $filename, string $root = 'JPATH_ROOT', int $strip = 0) : Joomla\Filesystem\Patcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::add`

Add a unified diff string to the patcher

##### Signature

```php
public Joomla\Filesystem\Patcher::add ( string $udiff [, string $root = &#039;JPATH_ROOT&#039; [, int $strip = 0 ]] ) : Joomla\Filesystem\Patcher
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `udiff` | `string` | Unified diff input string |
| `root` | `string` | The files root path Defaults to `'JPATH_ROOT'`. |
| `strip` | `int` | The number of '/' to strip Defaults to `0`. |

##### Return Values

`Joomla\Filesystem\Patcher` $this for chaining

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Add a unified diff string to the patcher
 *
 * @param   string   $udiff  Unified diff input string
 * @param   string   $root   The files root path
 * @param   integer  $strip  The number of '/' to strip
 *
 * @returnPatcher  $this for chaining
 *
 * @since   1.0
 */
public function add(string $udiff, string $root = 'JPATH_ROOT', int $strip = 0) : Joomla\Filesystem\Patcher{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::splitLines`

Separate CR or CRLF lines

##### Signature

```php
protected static Joomla\Filesystem\Patcher::splitLines ( string $data  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | Input string |

##### Return Values

`array` The lines of the input destination file

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Separate CR or CRLF lines
 *
 * @param   string  $data  Input string
 *
 * @return  array  The lines of the input destination file
 *
 * @since   1.0
 */
protected static function splitLines(string $data) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::findHeader`

Find the diff header

The internal array pointer of $lines is on the next line after the finding

##### Signature

```php
protected static Joomla\Filesystem\Patcher::findHeader ( array $lines, string $src, string $dst  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lines` | `array` | The udiff array of lines |
| `src` | `string` | The source file |
| `dst` | `string` | The destination file |

##### Return Values

`bool` TRUE in case of success, FALSE in case of failure

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Find the diff header
 *
 * The internal array pointer of $lines is on the next line after the finding
 *
 * @param   array   $lines  The udiff array of lines
 * @param   string  $src    The source file
 * @param   string  $dst    The destination file
 *
 * @return  boolean  TRUE in case of success, FALSE in case of failure
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected static function findHeader(array $lines, string $src, string $dst) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::findHunk`

Find the next hunk of difference

The internal array pointer of $lines is on the next line after the finding

##### Signature

```php
protected static Joomla\Filesystem\Patcher::findHunk ( array $lines, string $srcLine, string $srcSize, string $dstLine, string $dstSize  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lines` | `array` | The udiff array of lines |
| `srcLine` | `string` | The beginning of the patch for the source file |
| `srcSize` | `string` | The size of the patch for the source file |
| `dstLine` | `string` | The beginning of the patch for the destination file |
| `dstSize` | `string` | The size of the patch for the destination file |

##### Return Values

`bool` TRUE in case of success, false in case of failure

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Find the next hunk of difference
 *
 * The internal array pointer of $lines is on the next line after the finding
 *
 * @param   array   $lines    The udiff array of lines
 * @param   string  $srcLine  The beginning of the patch for the source file
 * @param   string  $srcSize  The size of the patch for the source file
 * @param   string  $dstLine  The beginning of the patch for the destination file
 * @param   string  $dstSize  The size of the patch for the destination file
 *
 * @return  boolean  TRUE in case of success, false in case of failure
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected static function findHunk(array $lines, string $srcLine, string $srcSize, string $dstLine, string $dstSize) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::applyHunk`

Apply the patch

##### Signature

```php
protected Joomla\Filesystem\Patcher::applyHunk ( array $lines, string $src, string $dst, string $srcLine, string $srcSize, string $dstLine, string $dstSize  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lines` | `array` | The udiff array of lines |
| `src` | `string` | The source file |
| `dst` | `string` | The destination file |
| `srcLine` | `string` | The beginning of the patch for the source file |
| `srcSize` | `string` | The size of the patch for the source file |
| `dstLine` | `string` | The beginning of the patch for the destination file |
| `dstSize` | `string` | The size of the patch for the destination file |

##### Return Values

No value is returned.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Apply the patch
 *
 * @param   array   $lines    The udiff array of lines
 * @param   string  $src      The source file
 * @param   string  $dst      The destination file
 * @param   string  $srcLine  The beginning of the patch for the source file
 * @param   string  $srcSize  The size of the patch for the source file
 * @param   string  $dstLine  The beginning of the patch for the destination file
 * @param   string  $dstSize  The size of the patch for the destination file
 *
 * @return  void
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function applyHunk(array $lines, string $src, string $dst, string $srcLine, string $srcSize, string $dstLine, string $dstSize) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::getSource`

Get the lines of a source file

##### Signature

```php
protected Joomla\Filesystem\Patcher::getSource ( string $src  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `src` | `string` | The path of a file |

##### Return Values

`array` The lines of the source file

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the lines of a source file
 *
 * @param   string  $src  The path of a file
 *
 * @return  array  The lines of the source file
 *
 * @since   1.0
 */
protected function getSource(string $src) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Patcher::getDestination`

Get the lines of a destination file

##### Signature

```php
protected Joomla\Filesystem\Patcher::getDestination ( string $dst, string $src  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dst` | `string` | The path of a destination file |
| `src` | `string` | The path of a source file |

##### Return Values

`array` The lines of the destination file

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the lines of a destination file
 *
 * @param   string  $dst  The path of a destination file
 * @param   string  $src  The path of a source file
 *
 * @return  array  The lines of the destination file
 *
 * @since   1.0
 */
protected function getDestination(string $dst, string $src) : array{
    // @todo Add adapter code.
}
```

## The Joomla\Filesystem\Helper Class

File system helper

Holds support functions for the filesystem, particularly the stream

### Methods

#### `Joomla\Filesystem\Helper::remotefsize`

Remote file size function for streams that don't support it

##### Signature

```php
public static Joomla\Filesystem\Helper::remotefsize ( string $url  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | TODO Add text |

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
 * Remote file size function for streams that don't support it
 *
 * @param   string  $url  TODO Add text
 *
 * @return  mixed
 *
 * @link    https://www.php.net/manual/en/function.filesize.php#71098
 * @since   1.0
 */
public static function remotefsize(string $url) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::ftpChmod`

Quick FTP chmod

##### Signature

```php
public static Joomla\Filesystem\Helper::ftpChmod ( string $url, int $mode  ) : int|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `url` | `string` | Link identifier |
| `mode` | `int` | The new permissions, given as an octal value. |

##### Return Values

`int` or `bool` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Quick FTP chmod
 *
 * @param   string   $url   Link identifier
 * @param   integer  $mode  The new permissions, given as an octal value.
 *
 * @return  integer|boolean
 *
 * @link    https://www.php.net/manual/en/function.ftp-chmod.php
 * @since   1.0
 */
public static function ftpChmod(string $url, int $mode) : int|bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::getWriteModes`

Modes that require a write operation

##### Signature

```php
public static Joomla\Filesystem\Helper::getWriteModes ( void ) : array
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
 * Modes that require a write operation
 *
 * @return  array
 *
 * @since   1.0
 */
public static function getWriteModes() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::getSupported`

Stream and Filter Support Operations

Returns the supported streams, in addition to direct file access
Also includes Joomla! streams as well as PHP streams

##### Signature

```php
public static Joomla\Filesystem\Helper::getSupported ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` Streams

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Stream and Filter Support Operations
 *
 * Returns the supported streams, in addition to direct file access
 * Also includes Joomla! streams as well as PHP streams
 *
 * @return  array  Streams
 *
 * @since   1.0
 */
public static function getSupported() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::getTransports`

Returns a list of transports

##### Signature

```php
public static Joomla\Filesystem\Helper::getTransports ( void ) : array
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
 * Returns a list of transports
 *
 * @return  array
 *
 * @since   1.0
 */
public static function getTransports() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::getFilters`

Returns a list of filters

##### Signature

```php
public static Joomla\Filesystem\Helper::getFilters ( void ) : array
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
 * Returns a list of filters
 *
 * @return  array
 *
 * @since   1.0
 */
public static function getFilters() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::getJStreams`

Returns a list of J! streams

##### Signature

```php
public static Joomla\Filesystem\Helper::getJStreams ( void ) : array
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
 * Returns a list of J! streams
 *
 * @return  array
 *
 * @since   1.0
 */
public static function getJStreams() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filesystem\Helper::isJoomlaStream`

Determine if a stream is a Joomla stream.

##### Signature

```php
public static Joomla\Filesystem\Helper::isJoomlaStream ( string $streamname  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `streamname` | `string` | The name of a stream |

##### Return Values

`bool` True for a Joomla Stream

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine if a stream is a Joomla stream.
 *
 * @param   string  $streamname  The name of a stream
 *
 * @return  boolean  True for a Joomla Stream
 *
 * @since   1.0
 */
public static function isJoomlaStream(string $streamname) : bool{
    // @todo Add adapter code.
}
```
