# Joomla/Archive Package version 1.1.6

Joomla Archive Package

## The Joomla\Archive\ExtractableInterface Interface

Archive class interface

### Methods

#### `Joomla\Archive\ExtractableInterface::extract`

Extract a compressed file to a given path

##### Signature

```php
abstract public Joomla\Archive\ExtractableInterface::extract ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to archive to extract |
| `destination` | `string` | Path to extract archive to |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a compressed file to a given path
 *
 * @param   string  $archive      Path to archive to extract
 * @param   string  $destination  Path to extract archive to
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
abstract public function extract(string $archive, string $destination) : bool;
```
#### `Joomla\Archive\ExtractableInterface::isSupported`

Tests whether this adapter can unpack files on this computer.

##### Signature

```php
abstract public static Joomla\Archive\ExtractableInterface::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if supported

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether this adapter can unpack files on this computer.
 *
 * @return  boolean  True if supported
 *
 * @since   1.0
 */
abstract public static function isSupported() : bool;
```

## The Joomla\Archive\Gzip Class

Gzip format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | Holds the options array. |    
### Methods

#### `Joomla\Archive\Gzip::__construct`

Create a new Archive object.

##### Signature

```php
public Joomla\Archive\Gzip::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | An array of options Defaults to `[]`. |

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
 * Create a new Archive object.
 *
 * @param   array|\ArrayAccess  $options  An array of options
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Gzip::extract`

Extract a Gzip compressed file to a given path

##### Signature

```php
public Joomla\Archive\Gzip::extract ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to ZIP archive to extract |
| `destination` | `string` | Path to extract archive to |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a Gzip compressed file to a given path
 *
 * @param   string  $archive      Path to ZIP archive to extract
 * @param   string  $destination  Path to extract archive to
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function extract(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Gzip::isSupported`

Tests whether this adapter can unpack files on this computer.

##### Signature

```php
public static Joomla\Archive\Gzip::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if supported

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether this adapter can unpack files on this computer.
 *
 * @return  boolean  True if supported
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Gzip::getFilePosition`

Get file data offset for archive

##### Signature

```php
public Joomla\Archive\Gzip::getFilePosition ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` Data position marker for archive

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get file data offset for archive
 *
 * @return  integer  Data position marker for archive
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function getFilePosition() : int{
    // @todo Add adapter code.
}
```

## The Joomla\Archive\Archive Class

An Archive handling class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$adapters` | `Joomla\Archive\ExtractableInterface[]` | The array of instantiated archive adapters. |
| public `$options` | `array` or `ArrayAccess` | Holds the options array. |    
### Methods

#### `Joomla\Archive\Archive::__construct`

Create a new Archive object.

##### Signature

```php
public Joomla\Archive\Archive::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | An array of options Defaults to `[]`. |

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
 * Create a new Archive object.
 *
 * @param   array|\ArrayAccess  $options  An array of options
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Archive::extract`

Extract an archive file to a directory.

##### Signature

```php
public Joomla\Archive\Archive::extract ( string $archivename, string $extractdir  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archivename` | `string` | The name of the archive file |
| `extractdir` | `string` | Directory to unpack into |

##### Return Values

`bool` True for success

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract an archive file to a directory.
 *
 * @param   string  $archivename  The name of the archive file
 * @param   string  $extractdir   Directory to unpack into
 *
 * @return  boolean  True for success
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function extract(string $archivename, string $extractdir) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Archive::setAdapter`

Override the provided adapter with your own implementation.

##### Signature

```php
public Joomla\Archive\Archive::setAdapter ( string $type, string $class [, bool $override = true ] ) : Joomla\Archive\Archive
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | Name of the adapter to set. |
| `class` | `string` | FQCN of your class which implements ExtractableInterface. |
| `override` | `bool` | True to force override the adapter type. Defaults to `true`. |

##### Return Values

`Joomla\Archive\Archive` This object for chaining.

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Override the provided adapter with your own implementation.
 *
 * @param   string   $type      Name of the adapter to set.
 * @param   string   $class     FQCN of your class which implements ExtractableInterface.
 * @param   boolean  $override  True to force override the adapter type.
 *
 * @return  Archive  This object for chaining.
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function setAdapter(string $type, string $class, bool $override = true) : Joomla\Archive\Archive{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Archive::getAdapter`

Get a file compression adapter.

##### Signature

```php
public Joomla\Archive\Archive::getAdapter ( string $type  ) : Joomla\Archive\ExtractableInterface
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `type` | `string` | The type of adapter (bzip2|gzip|tar|zip). |

##### Return Values

`Joomla\Archive\ExtractableInterface` Adapter for the requested type

##### Errors/Exceptions

Throws InvalidArgumentException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a file compression adapter.
 *
 * @param   string  $type  The type of adapter (bzip2|gzip|tar|zip).
 *
 * @return  ExtractableInterface  Adapter for the requested type
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function getAdapter(string $type) : Joomla\Archive\ExtractableInterface{
    // @todo Add adapter code.
}
```

## The Joomla\Archive\Zip Class

ZIP format adapter for the Archive package

The ZIP compression code is partially based on code from:
Eric Mueller <eric@themepark.com>
http://www.zend.com/codex.php?id=535&single=1

Deins125 <webmaster@atlant.ru>
http://www.zend.com/codex.php?id=470&single=1

The ZIP compression date code is partially based on code from
Peter Listiak <mlady@users.sourceforge.net>

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | Holds the options array. |    
### Methods

#### `Joomla\Archive\Zip::__construct`

Create a new Archive object.

##### Signature

```php
public Joomla\Archive\Zip::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | An array of options or an object that implements \ArrayAccess Defaults to `[]`. |

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
 * Create a new Archive object.
 *
 * @param   array|\ArrayAccess  $options  An array of options or an object that implements \ArrayAccess
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::create`

Create a ZIP compressed file from an array of file data.

##### Signature

```php
public Joomla\Archive\Zip::create ( string $archive, array $files  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to save archive. |
| `files` | `array` | Array of files to add to archive. |

##### Return Values

`bool` True if successful.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Create a ZIP compressed file from an array of file data.
 *
 * @param   string  $archive  Path to save archive.
 * @param   array   $files    Array of files to add to archive.
 *
 * @return  boolean  True if successful.
 *
 * @since   1.0
 * @todo    Finish Implementation
 */
public function create(string $archive, array $files) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::extract`

Extract a ZIP compressed file to a given path

##### Signature

```php
public Joomla\Archive\Zip::extract ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to ZIP archive to extract |
| `destination` | `string` | Path to extract archive into |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a ZIP compressed file to a given path
 *
 * @param   string  $archive      Path to ZIP archive to extract
 * @param   string  $destination  Path to extract archive into
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function extract(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::isSupported`

Tests whether this adapter can unpack files on this computer.

##### Signature

```php
public static Joomla\Archive\Zip::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if supported

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether this adapter can unpack files on this computer.
 *
 * @return  boolean  True if supported
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::hasNativeSupport`

Determine if the server has native zip support for faster handling

##### Signature

```php
public static Joomla\Archive\Zip::hasNativeSupport ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if php has native ZIP support

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine if the server has native zip support for faster handling
 *
 * @return  boolean  True if php has native ZIP support
 *
 * @since   1.0
 */
public static function hasNativeSupport() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::checkZipData`

Checks to see if the data is a valid ZIP file.

##### Signature

```php
public Joomla\Archive\Zip::checkZipData ( string $data  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | ZIP archive data buffer. |

##### Return Values

`bool` True if valid, false if invalid.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks to see if the data is a valid ZIP file.
 *
 * @param   string  $data  ZIP archive data buffer.
 *
 * @return  boolean  True if valid, false if invalid.
 *
 * @since   1.0
 */
public function checkZipData(string $data) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::extractCustom`

Extract a ZIP compressed file to a given path using a php based algorithm that only requires zlib support

##### Signature

```php
protected Joomla\Archive\Zip::extractCustom ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to ZIP archive to extract. |
| `destination` | `string` | Path to extract archive into. |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a ZIP compressed file to a given path using a php based algorithm that only requires zlib support
 *
 * @param   string  $archive      Path to ZIP archive to extract.
 * @param   string  $destination  Path to extract archive into.
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function extractCustom(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::extractNative`

Extract a ZIP compressed file to a given path using native php api calls for speed

##### Signature

```php
protected Joomla\Archive\Zip::extractNative ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to ZIP archive to extract |
| `destination` | `string` | Path to extract archive into |

##### Return Values

`bool` True on success

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a ZIP compressed file to a given path using native php api calls for speed
 *
 * @param   string  $archive      Path to ZIP archive to extract
 * @param   string  $destination  Path to extract archive into
 *
 * @return  boolean  True on success
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function extractNative(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Zip::unix2DosTime`

Converts a UNIX timestamp to a 4-byte DOS date and time format

(date in high 2-bytes, time in low 2-bytes allowing magnitude
comparison).

##### Signature

```php
protected Joomla\Archive\Zip::unix2DosTime ( [ int $unixtime = null ] ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `unixtime` | `int` | The current UNIX timestamp. Defaults to `null`. |

##### Return Values

`int` The current date in a 4-byte DOS format.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts a UNIX timestamp to a 4-byte DOS date and time format
 * (date in high 2-bytes, time in low 2-bytes allowing magnitude
 * comparison).
 *
 * @param   integer  $unixtime  The current UNIX timestamp.
 *
 * @return  integer  The current date in a 4-byte DOS format.
 *
 * @since   1.0
 */
protected function unix2DosTime(int $unixtime = null) : int{
    // @todo Add adapter code.
}
```

## The Joomla\Archive\Bzip2 Class

Bzip2 format adapter for the Archive package

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | Holds the options array. |    
### Methods

#### `Joomla\Archive\Bzip2::__construct`

Create a new Archive object.

##### Signature

```php
public Joomla\Archive\Bzip2::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | An array of options Defaults to `[]`. |

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
 * Create a new Archive object.
 *
 * @param   array|\ArrayAccess  $options  An array of options
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Bzip2::extract`

Extract a Bzip2 compressed file to a given path

##### Signature

```php
public Joomla\Archive\Bzip2::extract ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to Bzip2 archive to extract |
| `destination` | `string` | Path to extract archive to |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a Bzip2 compressed file to a given path
 *
 * @param   string  $archive      Path to Bzip2 archive to extract
 * @param   string  $destination  Path to extract archive to
 *
 * @return  boolean  True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function extract(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Bzip2::isSupported`

Tests whether this adapter can unpack files on this computer.

##### Signature

```php
public static Joomla\Archive\Bzip2::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if supported

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether this adapter can unpack files on this computer.
 *
 * @return  boolean  True if supported
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```

## The Joomla\Archive\Tar Class

Tar format adapter for the Archive package

This class is inspired from and draws heavily in code and concept from the Compress package of
The Horde Project <http://www.horde.org>

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$options` | `array` or `ArrayAccess` | Holds the options array. |    
### Methods

#### `Joomla\Archive\Tar::__construct`

Create a new Archive object.

##### Signature

```php
public Joomla\Archive\Tar::__construct ( [ array|ArrayAccess $options = [] ] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `options` | `array` or `ArrayAccess` | An array of options or an object that implements \ArrayAccess Defaults to `[]`. |

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
 * Create a new Archive object.
 *
 * @param   array|\ArrayAccess  $options  An array of options or an object that implements \ArrayAccess
 *
 * @since   1.0
 * @throws  \InvalidArgumentException
 */
public function __construct( $options = []) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Tar::extract`

Extract a ZIP compressed file to a given path

##### Signature

```php
public Joomla\Archive\Tar::extract ( string $archive, string $destination  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `archive` | `string` | Path to ZIP archive to extract |
| `destination` | `string` | Path to extract archive into |

##### Return Values

`bool` True if successful

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Extract a ZIP compressed file to a given path
 *
 * @param   string  $archive      Path to ZIP archive to extract
 * @param   string  $destination  Path to extract archive into
 *
 * @return  boolean True if successful
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function extract(string $archive, string $destination) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Tar::isSupported`

Tests whether this adapter can unpack files on this computer.

##### Signature

```php
public static Joomla\Archive\Tar::isSupported ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True if supported

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether this adapter can unpack files on this computer.
 *
 * @return  boolean  True if supported
 *
 * @since   1.0
 */
public static function isSupported() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Archive\Tar::getTarInfo`

Get the list of files/data from a Tar archive buffer.

##### Signature

```php
protected Joomla\Archive\Tar::getTarInfo ( string $data  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `string` | The Tar archive buffer. |

##### Return Values

`array` Archive metadata array 
<pre>
KEY: Position in the array
VALUES: 'attr'  --  File attributes
'data'  --  Raw file contents
'date'  --  File modification time
'name'  --  Filename
'size'  --  Original file size
'type'  --  File type
</pre>

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the list of files/data from a Tar archive buffer.
 *
 * @param   string  $data  The Tar archive buffer.
 *
 * @return  array  Archive metadata array
 * <pre>
 * KEY: Position in the array
 * VALUES: 'attr'  --  File attributes
 * 'data'  --  Raw file contents
 * 'date'  --  File modification time
 * 'name'  --  Filename
 * 'size'  --  Original file size
 * 'type'  --  File type
 * </pre>
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
protected function getTarInfo(string $data) : array{
    // @todo Add adapter code.
}
```
