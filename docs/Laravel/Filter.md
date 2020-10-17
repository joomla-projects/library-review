# Joomla/Filter Package version 1.4.0

Joomla Filter Package

## The Joomla\Filter\InputFilter Class

InputFilter is a class for filtering input from any data source

Forked from the php input filter library by: Daniel Morris <dan@rootcube.com>
Original Contributors: Gianpaolo Racca, Ghislain Picard, Marco Wandschneider, Chris Tobin and Andrew Eddie.

### Constants

| Constant | Type | Value | Description |
|----------|------|-------|-------------|
| public `TAGS_WHITELIST` | `int` | 0 | Defines the InputFilter instance should use a whitelist method for sanitising tags. |
| public `TAGS_BLACKLIST` | `int` | 1 | Defines the InputFilter instance should use a blacklist method for sanitising tags. |
| public `ATTR_WHITELIST` | `int` | 0 | Defines the InputFilter instance should use a whitelist method for sanitising attributes. |
| public `ATTR_BLACKLIST` | `int` | 1 | Defines the InputFilter instance should use a blacklist method for sanitising attributes. |
| public `ONLY_ALLOW_DEFINED_TAGS` | `int` | 0 | Defines the InputFilter instance should only allow the supplied list of HTML tags. |
| public `ONLY_BLOCK_DEFINED_TAGS` | `int` | 1 | Defines the InputFilter instance should block the defined list of tags and allow all others. |
| public `ONLY_ALLOW_DEFINED_ATTRIBUTES` | `int` | 0 | Defines the InputFilter instance should only allow the supplied list of attributes. |
| public `ONLY_BLOCK_DEFINED_ATTRIBUTES` | `int` | 1 | Defines the InputFilter instance should use a block all attributes. |    
### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected static `$instances` | `Joomla\Filter\InputFilter[]` | A container for InputFilter instances. |
| public `$tagsArray` | `array` | The array of permitted tags. |
| public `$attrArray` | `array` | The array of permitted tag attributes. |
| public `$tagsMethod` | `int` | The method for sanitising tags |
| public `$attrMethod` | `int` | The method for sanitising attributes |
| public `$xssAuto` | `int` | A flag for XSS checks. Only auto clean essentials = 0, Allow clean blocked tags/attr = 1 |
| public `$tagBlacklist` | `array` | The list of the default blocked tags. |
| public `$attrBlacklist` | `array` | The list of the default blacklisted tag attributes. All event handlers implicit. |    
### Methods

#### `Joomla\Filter\InputFilter::__construct`

Constructor for InputFilter class.

##### Signature

```php
public Joomla\Filter\InputFilter::__construct ( [ array $tagsArray = [] [, array $attrArray = [] [, int $tagsMethod = 0 [, int $attrMethod = 0 [, int $xssAuto = 1 ]]]]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `tagsArray` | `array` | List of user-defined tags Defaults to `[]`. |
| `attrArray` | `array` | List of user-defined attributes Defaults to `[]`. |
| `tagsMethod` | `int` | The constant static::ONLY_ALLOW_DEFINED_TAGS or static::BLOCK_DEFINED_TAGS Defaults to `0`. |
| `attrMethod` | `int` | The constant static::ONLY_ALLOW_DEFINED_ATTRIBUTES or static::BLOCK_DEFINED_ATTRIBUTES Defaults to `0`. |
| `xssAuto` | `int` | Only auto clean essentials = 0, Allow clean blocked tags/attributes = 1 Defaults to `1`. |

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
 * Constructor for InputFilter class.
 *
 * @param   array    $tagsArray   List of user-defined tags
 * @param   array    $attrArray   List of user-defined attributes
 * @param   integer  $tagsMethod  The constant static::ONLY_ALLOW_DEFINED_TAGS or static::BLOCK_DEFINED_TAGS
 * @param   integer  $attrMethod  The constant static::ONLY_ALLOW_DEFINED_ATTRIBUTES or static::BLOCK_DEFINED_ATTRIBUTES
 * @param   integer  $xssAuto     Only auto clean essentials = 0, Allow clean blocked tags/attributes = 1
 *
 * @since   1.0
 */
public function __construct(array $tagsArray = [], array $attrArray = [], int $tagsMethod = 0, int $attrMethod = 0, int $xssAuto = 1) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::clean`

Be called by another php script. Processes for XSS and

specified bad code.

##### Signature

```php
public Joomla\Filter\InputFilter::clean ( mixed $source [, string $type = &#039;string&#039; ] ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `mixed` | Input string/array-of-string to be 'cleaned' |
| `type` | `string` | The return type for the variable:  INT:       An integer, or an array of integers, UINT:      An unsigned integer, or an array of unsigned integers, FLOAT:     A floating point number, or an array of floating point numbers, BOOLEAN:   A boolean value, WORD:      A string containing A-Z or underscores only (not case sensitive), ALNUM:     A string containing A-Z or 0-9 only (not case sensitive), CMD:       A string containing A-Z, 0-9, underscores, periods or hyphens (not case sensitive), BASE64:    A string containing A-Z, 0-9, forward slashes, plus or equals (not case sensitive), STRING:    A fully decoded and sanitised string (default), HTML:      A sanitised string, ARRAY:     An array, PATH:      A sanitised file path, or an array of sanitised file paths, TRIM:      A string trimmed from normal, non-breaking and multibyte spaces USERNAME:  Do not use (use an application specific filter), RAW:       The raw string is returned with no filtering, unknown:   An unknown filter will act like STRING. If the input is an array it will return an array of fully decoded and sanitised strings. Defaults to `'string'`. |

##### Return Values

`mixed` 'Cleaned' version of input parameter

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Be called by another php script. Processes for XSS and
 * specified bad code.
 *
 * @param   mixed   $source  Input string/array-of-string to be 'cleaned'
 * @param   string  $type    The return type for the variable:
 *                           INT:       An integer, or an array of integers,
 *                           UINT:      An unsigned integer, or an array of unsigned integers,
 *                           FLOAT:     A floating point number, or an array of floating point numbers,
 *                           BOOLEAN:   A boolean value,
 *                           WORD:      A string containing A-Z or underscores only (not case sensitive),
 *                           ALNUM:     A string containing A-Z or 0-9 only (not case sensitive),
 *                           CMD:       A string containing A-Z, 0-9, underscores, periods or hyphens (not case sensitive),
 *                           BASE64:    A string containing A-Z, 0-9, forward slashes, plus or equals (not case sensitive),
 *                           STRING:    A fully decoded and sanitised string (default),
 *                           HTML:      A sanitised string,
 *                           ARRAY:     An array,
 *                           PATH:      A sanitised file path, or an array of sanitised file paths,
 *                           TRIM:      A string trimmed from normal, non-breaking and multibyte spaces
 *                           USERNAME:  Do not use (use an application specific filter),
 *                           RAW:       The raw string is returned with no filtering,
 *                           unknown:   An unknown filter will act like STRING. If the input is an array it will return an
 *                                      array of fully decoded and sanitised strings.
 *
 * @return  mixed  'Cleaned' version of input parameter
 *
 * @since   1.0
 */
public function clean(mixed $source, string $type = 'string') : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::checkAttribute`

Function to determine if contents of an attribute are safe

##### Signature

```php
public static Joomla\Filter\InputFilter::checkAttribute ( array $attrSubSet  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attrSubSet` | `array` | A 2 element array for attribute's name, value |

##### Return Values

`bool` True if bad code is detected

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Function to determine if contents of an attribute are safe
 *
 * @param   array  $attrSubSet  A 2 element array for attribute's name, value
 *
 * @return  boolean  True if bad code is detected
 *
 * @since   1.0
 */
public static function checkAttribute(array $attrSubSet) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::remove`

Internal method to iteratively remove all unwanted tags and attributes

##### Signature

```php
protected Joomla\Filter\InputFilter::remove ( string $source  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `string` | Input string to be 'cleaned' |

##### Return Values

`string` 'Cleaned' version of input parameter

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Internal method to iteratively remove all unwanted tags and attributes
 *
 * @param   string  $source  Input string to be 'cleaned'
 *
 * @return  string  'Cleaned' version of input parameter
 *
 * @since   1.0
 */
protected function remove(string $source) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::cleanTags`

Internal method to strip a string of certain tags

##### Signature

```php
protected Joomla\Filter\InputFilter::cleanTags ( string $source  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `string` | Input string to be 'cleaned' |

##### Return Values

`string` 'Cleaned' version of input parameter

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Internal method to strip a string of certain tags
 *
 * @param   string  $source  Input string to be 'cleaned'
 *
 * @return  string  'Cleaned' version of input parameter
 *
 * @since   1.0
 */
protected function cleanTags(string $source) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::cleanAttributes`

Internal method to strip a tag of certain attributes

##### Signature

```php
protected Joomla\Filter\InputFilter::cleanAttributes ( array $attrSet  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `attrSet` | `array` | Array of attribute pairs to filter |

##### Return Values

`array` Filtered array of attribute pairs

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Internal method to strip a tag of certain attributes
 *
 * @param   array  $attrSet  Array of attribute pairs to filter
 *
 * @return  array  Filtered array of attribute pairs
 *
 * @since   1.0
 */
protected function cleanAttributes(array $attrSet) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::decode`

Try to convert to plaintext

This method has been deprecated and gets removed in version This. 
method will be removed once support for PHP 5.3 is discontinued..

Does not need to be replaced.

#### `Joomla\Filter\InputFilter::escapeAttributeValues`

Escape < > and " inside attribute values

##### Signature

```php
protected Joomla\Filter\InputFilter::escapeAttributeValues ( string $source  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `string` | The source string. |

##### Return Values

`string` Filtered string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Escape < > and " inside attribute values
 *
 * @param   string  $source  The source string.
 *
 * @return  string  Filtered string
 *
 * @since   1.0
 */
protected function escapeAttributeValues(string $source) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\InputFilter::stripCssExpressions`

Remove CSS Expressions in the form of <property>:expression(...)

##### Signature

```php
protected Joomla\Filter\InputFilter::stripCssExpressions ( string $source  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `string` | The source string. |

##### Return Values

`string` Filtered string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Remove CSS Expressions in the form of <property>:expression(...)
 *
 * @param   string  $source  The source string.
 *
 * @return  string  Filtered string
 *
 * @since   1.0
 */
protected function stripCssExpressions(string $source) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Filter\OutputFilter Class

OutputFilter

### Methods

#### `Joomla\Filter\OutputFilter::objectHtmlSafe`

Makes an object safe to display in forms

Object parameters that are non-string, array, object or start with underscore
will be converted

##### Signature

```php
public static Joomla\Filter\OutputFilter::objectHtmlSafe ( object $mixed [, int $quoteStyle = 3 [, mixed $excludeKeys = &#039;&#039; ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `mixed` | `object` | An object to be parsed |
| `quoteStyle` | `int` | The optional quote style for the htmlspecialchars function Defaults to `3`. |
| `excludeKeys` | `mixed` | An optional string single field name or array of field names not to be parsed (eg, for a textarea) Defaults to `''`. |

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
 * Makes an object safe to display in forms
 *
 * Object parameters that are non-string, array, object or start with underscore
 * will be converted
 *
 * @param   object   $mixed        An object to be parsed
 * @param   integer  $quoteStyle   The optional quote style for the htmlspecialchars function
 * @param   mixed    $excludeKeys  An optional string single field name or array of field names not to be parsed (eg, for a textarea)
 *
 * @return  void
 *
 * @since   1.0
 */
public static function objectHtmlSafe(object $mixed, int $quoteStyle = 3, mixed $excludeKeys = '') : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::linkXhtmlSafe`

This method processes a string and replaces all instances of & with &amp; in links only.

##### Signature

```php
public static Joomla\Filter\OutputFilter::linkXhtmlSafe ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | String to process |

##### Return Values

`string` Processed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * This method processes a string and replaces all instances of & with &amp; in links only.
 *
 * @param   string  $input  String to process
 *
 * @return  string  Processed string
 *
 * @since   1.0
 */
public static function linkXhtmlSafe(string $input) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::stringUrlSafe`

This method processes a string and replaces all accented UTF-8 characters by unaccented

ASCII-7 "equivalents", whitespaces are replaced by hyphens and the string is lowercase.

##### Signature

```php
public static Joomla\Filter\OutputFilter::stringUrlSafe ( string $string [, string $language = &#039;&#039; ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | String to process |
| `language` | `string` | Language to transliterate to Defaults to `''`. |

##### Return Values

`string` Processed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * This method processes a string and replaces all accented UTF-8 characters by unaccented
 * ASCII-7 "equivalents", whitespaces are replaced by hyphens and the string is lowercase.
 *
 * @param   string  $string    String to process
 * @param   string  $language  Language to transliterate to
 *
 * @return  string  Processed string
 *
 * @since   1.0
 */
public static function stringUrlSafe(string $string, string $language = '') : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::stringUrlUnicodeSlug`

This method implements unicode slugs instead of transliteration.

##### Signature

```php
public static Joomla\Filter\OutputFilter::stringUrlUnicodeSlug ( string $string  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | String to process |

##### Return Values

`string` Processed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * This method implements unicode slugs instead of transliteration.
 *
 * @param   string  $string  String to process
 *
 * @return  string  Processed string
 *
 * @since   1.0
 */
public static function stringUrlUnicodeSlug(string $string) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::ampReplace`

Replaces &amp; with & for XHTML compliance

##### Signature

```php
public static Joomla\Filter\OutputFilter::ampReplace ( string $text  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `text` | `string` | Text to process |

##### Return Values

`string` Processed string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Replaces &amp; with & for XHTML compliance
 *
 * @param   string  $text  Text to process
 *
 * @return  string  Processed string.
 *
 * @since   1.0
 */
public static function ampReplace(string $text) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::cleanText`

Cleans text of all formatting and scripting code

##### Signature

```php
public static Joomla\Filter\OutputFilter::cleanText ( string $text  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `text` | `string` | Text to clean |

##### Return Values

`string` Cleaned text.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Cleans text of all formatting and scripting code
 *
 * @param   string  $text  Text to clean
 *
 * @return  string  Cleaned text.
 *
 * @since   1.0
 */
public static function cleanText(string $text) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::stripImages`

Strip img-tags from string

##### Signature

```php
public static Joomla\Filter\OutputFilter::stripImages ( string $string  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | Sting to be cleaned. |

##### Return Values

`string` Cleaned string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Strip img-tags from string
 *
 * @param   string  $string  Sting to be cleaned.
 *
 * @return  string  Cleaned string
 *
 * @since   1.0
 */
public static function stripImages(string $string) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Filter\OutputFilter::stripIframes`

Strip iframe-tags from string

##### Signature

```php
public static Joomla\Filter\OutputFilter::stripIframes ( string $string  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | Sting to be cleaned. |

##### Return Values

`string` Cleaned string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Strip iframe-tags from string
 *
 * @param   string  $string  Sting to be cleaned.
 *
 * @return  string  Cleaned string
 *
 * @since   1.0
 */
public static function stripIframes(string $string) : string{
    // @todo Add adapter code.
}
```
