# Joomla/String Package version 1.4.4

Joomla String Package

## Interfaces


## Classes

### The Joomla\String\StringHelper Class

String handling class for UTF-8 data wrapping the phputf8 library. All functions assume the validity of UTF-8 strings.

#### `Joomla\String\StringHelper::increment`

Increments a trailing number in a string.

Used to easily create distinct labels when copying objects. The method has the following styles:

default: "Label" becomes "Label (2)" 
dash:    "Label" becomes "Label-2"

##### Signature

```php
public static Joomla\String\StringHelper::increment ( string $string [, string $style [, int $n ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The source string. |
| `style` | `string` | The the style (default|dash). Defaults to `'default'`. |
| `n` | `int` | If supplied, this number is used for the copy, otherwise it is the 'next' number. Defaults to `0`. |

##### Return Values

`string` The incremented string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Increments a trailing number in a string.
 *
 * Used to easily create distinct labels when copying objects. The method has the following styles:
 *
 * default: "Label" becomes "Label (2)"
 * dash:    "Label" becomes "Label-2"
 *
 * @param   string   $string  The source string.
 * @param   string   $style   The the style (default|dash).
 * @param   integer  $n       If supplied, this number is used for the copy, otherwise it is the 'next' number.
 *
 * @return  string  The incremented string.
 *
 * @since   1.3.0
 */ 
public static increment(string $string, string $style = 'default', int $n = 0) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::is_ascii`

Tests whether a string contains only 7bit ASCII bytes.

You might use this to conditionally check whether a string needs handling as UTF-8 or not, potentially offering performance 
benefits by using the native PHP equivalent if it's just ASCII e.g.;

<code> 
if (StringHelper::is_ascii($someString)) 
{ 
    // It's just ASCII - use the native PHP version 
    $someString = strtolower($someString); 
} 
else 
{ 
    $someString = StringHelper::strtolower($someString); 
} 
</code>

##### Signature

```php
public static Joomla\String\StringHelper::is_ascii ( string $str  ) : bool
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

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether a string contains only 7bit ASCII bytes.
 *
 * You might use this to conditionally check whether a string needs handling as UTF-8 or not, potentially offering performance
 * benefits by using the native PHP equivalent if it's just ASCII e.g.;
 *
 * <code>
 * if (StringHelper::is_ascii($someString))
 * {
 *     // It's just ASCII - use the native PHP version
 *     $someString = strtolower($someString);
 * }
 * else
 * {
 *     $someString = StringHelper::strtolower($someString);
 * }
 * </code>
 *
 * @param   string  $str  The string to test.
 *
 * @return  boolean True if the string is all ASCII
 *
 * @since   1.3.0
 */ 
public static is_ascii(string $str) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::ord`

UTF-8 aware alternative to ord()

Returns the unicode ordinal for a character.

##### Signature

```php
public static Joomla\String\StringHelper::ord ( string $chr  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `chr` | `string` | UTF-8 encoded character. |

##### Return Values

`int` Unicode ordinal for the character

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to ord()
 *
 * Returns the unicode ordinal for a character.
 *
 * @param   string  $chr  UTF-8 encoded character
 *
 * @return  integer Unicode ordinal for the character
 *
 * @link    https://www.php.net/ord
 * @since   1.4.0
 */ 
public static ord(string $chr) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strpos`

UTF-8 aware alternative to strpos()

Find position of first occurrence of a string.

##### Signature

```php
public static Joomla\String\StringHelper::strpos ( string $str, string $search [, int $offset ] ) : int|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String being examined. |
| `search` | `string` | String being searched for. |
| `offset` | `int` | Optional, specifies the position from which the search should be performed. Defaults to `false`. |

##### Return Values

`int` or `bool` Number of characters before the first match or FALSE on failure

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strpos()
 *
 * Find position of first occurrence of a string.
 *
 * @param   string   $str     String being examined
 * @param   string   $search  String being searched for
 * @param   integer  $offset  Optional, specifies the position from which the search should be performed
 *
 * @return  integer|boolean  Number of characters before the first match or FALSE on failure
 *
 * @link    https://www.php.net/strpos
 * @since   1.3.0
 */ 
public static strpos(string $str, string $search, int $offset = false) : int|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strrpos`

UTF-8 aware alternative to strrpos()

Finds position of last occurrence of a string.

##### Signature

```php
public static Joomla\String\StringHelper::strrpos ( string $str, string $search [, int $offset ] ) : int|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String being examined. |
| `search` | `string` | String being searched for. |
| `offset` | `int` | Offset from the left of the string. Defaults to `0`. |

##### Return Values

`int` or `bool` Number of characters before the last match or false on failure

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strrpos()
 *
 * Finds position of last occurrence of a string.
 *
 * @param   string   $str     String being examined.
 * @param   string   $search  String being searched for.
 * @param   integer  $offset  Offset from the left of the string.
 *
 * @return  integer|boolean  Number of characters before the last match or false on failure
 *
 * @link    https://www.php.net/strrpos
 * @since   1.3.0
 */ 
public static strrpos(string $str, string $search, int $offset = 0) : int|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::substr`

UTF-8 aware alternative to substr()

Return part of a string given character offset (and optionally length).

##### Signature

```php
public static Joomla\String\StringHelper::substr ( string $str, int $offset [, int $length ] ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String being processed. |
| `offset` | `int` | Number of UTF-8 characters offset (from left). |
| `length` | `int` | Optional length in UTF-8 characters from offset. Defaults to `false`. |

##### Return Values

`string` or `bool` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to substr()
 *
 * Return part of a string given character offset (and optionally length).
 *
 * @param   string   $str     String being processed
 * @param   integer  $offset  Number of UTF-8 characters offset (from left)
 * @param   integer  $length  Optional length in UTF-8 characters from offset
 *
 * @return  string|boolean
 *
 * @link    https://www.php.net/substr
 * @since   1.3.0
 */ 
public static substr(string $str, int $offset, int $length = false) : string|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strtolower`

UTF-8 aware alternative to strtolower()

Make a string lowercase

Note: The concept of a characters "case" only exists is some alphabets such as Latin, Greek, Cyrillic, Armenian and archaic Georgian - it does 
not exist in the Chinese alphabet, for example. See Unicode Standard Annex #21: Case Mappings

##### Signature

```php
public static Joomla\String\StringHelper::strtolower ( string $str  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String being processed. |

##### Return Values

`string` or `bool` Either string in lowercase or FALSE is UTF-8 invalid

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strtolower()
 *
 * Make a string lowercase
 *
 * Note: The concept of a characters "case" only exists is some alphabets such as Latin, Greek, Cyrillic, Armenian and archaic Georgian - it does
 * not exist in the Chinese alphabet, for example. See Unicode Standard Annex #21: Case Mappings
 *
 * @param   string  $str  String being processed
 *
 * @return  string|boolean  Either string in lowercase or FALSE is UTF-8 invalid
 *
 * @link    https://www.php.net/strtolower
 * @since   1.3.0
 */ 
public static strtolower(string $str) : string|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strtoupper`

UTF-8 aware alternative to strtoupper()

Make a string uppercase

Note: The concept of a characters "case" only exists is some alphabets such as Latin, Greek, Cyrillic, Armenian and archaic Georgian - it does 
not exist in the Chinese alphabet, for example. See Unicode Standard Annex #21: Case Mappings

##### Signature

```php
public static Joomla\String\StringHelper::strtoupper ( string $str  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String being processed. |

##### Return Values

`string` or `bool` Either string in uppercase or FALSE is UTF-8 invalid

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strtoupper()
 *
 * Make a string uppercase
 *
 * Note: The concept of a characters "case" only exists is some alphabets such as Latin, Greek, Cyrillic, Armenian and archaic Georgian - it does
 * not exist in the Chinese alphabet, for example. See Unicode Standard Annex #21: Case Mappings
 *
 * @param   string  $str  String being processed
 *
 * @return  string|boolean  Either string in uppercase or FALSE is UTF-8 invalid
 *
 * @link    https://www.php.net/strtoupper
 * @since   1.3.0
 */ 
public static strtoupper(string $str) : string|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strlen`

UTF-8 aware alternative to strlen()

Returns the number of characters in the string (NOT THE NUMBER OF BYTES).

##### Signature

```php
public static Joomla\String\StringHelper::strlen ( string $str  ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | UTF-8 string. |

##### Return Values

`int` Number of UTF-8 characters in string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strlen()
 *
 * Returns the number of characters in the string (NOT THE NUMBER OF BYTES).
 *
 * @param   string  $str  UTF-8 string.
 *
 * @return  integer  Number of UTF-8 characters in string.
 *
 * @link    https://www.php.net/strlen
 * @since   1.3.0
 */ 
public static strlen(string $str) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::str_ireplace`

UTF-8 aware alternative to str_ireplace()

Case-insensitive version of str_replace()

##### Signature

```php
public static Joomla\String\StringHelper::str_ireplace ( string $search, string $replace, string $str [, int $count ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `search` | `string` | String to search. |
| `replace` | `string` | Existing string to replace. |
| `str` | `string` | New string to replace with. |
| `count` | `int` | Optional count value to be passed by referene. Defaults to `null`. |

##### Return Values

`string` UTF-8 String

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to str_ireplace()
 *
 * Case-insensitive version of str_replace()
 *
 * @param   string   $search   String to search
 * @param   string   $replace  Existing string to replace
 * @param   string   $str      New string to replace with
 * @param   integer  $count    Optional count value to be passed by referene
 *
 * @return  string  UTF-8 String
 *
 * @link    https://www.php.net/str_ireplace
 * @since   1.3.0
 */ 
public static str_ireplace(string $search, string $replace, string $str, int $count = null) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::str_pad`

UTF-8 aware alternative to str_pad()

Pad a string to a certain length with another string. 
$padStr may contain multi-byte characters.

##### Signature

```php
public static Joomla\String\StringHelper::str_pad ( string $input, int $length [, string $padStr [, int $type ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The input string. |
| `length` | `int` | If the value is negative, less than, or equal to the length of the input string, no padding takes place. |
| `padStr` | `string` | The string may be truncated if the number of padding characters can't be evenly divided by the string's length. Defaults to `' '`. |
| `type` | `int` | The type of padding to apply. Defaults to `1`. |

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to str_pad()
 *
 * Pad a string to a certain length with another string.
 * $padStr may contain multi-byte characters.
 *
 * @param   string   $input   The input string.
 * @param   integer  $length  If the value is negative, less than, or equal to the length of the input string, no padding takes place.
 * @param   string   $padStr  The string may be truncated if the number of padding characters can't be evenly divided by the string's length.
 * @param   integer  $type    The type of padding to apply
 *
 * @return  string
 *
 * @link    https://www.php.net/str_pad
 * @since   1.4.0
 */ 
public static str_pad(string $input, int $length, string $padStr = ' ', int $type = 1) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::str_split`

UTF-8 aware alternative to str_split()

Convert a string to an array.

##### Signature

```php
public static Joomla\String\StringHelper::str_split ( string $str [, int $splitLen ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | UTF-8 encoded string to process. |
| `splitLen` | `int` | Number to characters to split string by. Defaults to `1`. |

##### Return Values

`array` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to str_split()
 *
 * Convert a string to an array.
 *
 * @param   string   $str       UTF-8 encoded string to process
 * @param   integer  $splitLen  Number to characters to split string by
 *
 * @return  array
 *
 * @link    https://www.php.net/str_split
 * @since   1.3.0
 */ 
public static str_split(string $str, int $splitLen = 1) : array
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strcasecmp`

UTF-8/LOCALE aware alternative to strcasecmp()

A case insensitive string comparison.

##### Signature

```php
public static Joomla\String\StringHelper::strcasecmp ( string $str1, string $str2 [, mixed $locale ] ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str1` | `string` | string 1 to compare. |
| `str2` | `string` | string 2 to compare. |
| `locale` | `mixed` | The locale used by strcoll or false to use classical comparison. Defaults to `false`. |

##### Return Values

`int` < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8/LOCALE aware alternative to strcasecmp()
 *
 * A case insensitive string comparison.
 *
 * @param   string  $str1    string 1 to compare
 * @param   string  $str2    string 2 to compare
 * @param   mixed   $locale  The locale used by strcoll or false to use classical comparison
 *
 * @return  integer   < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 *
 * @link    https://www.php.net/strcasecmp
 * @link    https://www.php.net/strcoll
 * @link    https://www.php.net/setlocale
 * @since   1.3.0
 */ 
public static strcasecmp(string $str1, string $str2, mixed $locale = false) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strcmp`

UTF-8/LOCALE aware alternative to strcmp()

A case sensitive string comparison.

##### Signature

```php
public static Joomla\String\StringHelper::strcmp ( string $str1, string $str2 [, mixed $locale ] ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str1` | `string` | string 1 to compare. |
| `str2` | `string` | string 2 to compare. |
| `locale` | `mixed` | The locale used by strcoll or false to use classical comparison. Defaults to `false`. |

##### Return Values

`int` < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8/LOCALE aware alternative to strcmp()
 *
 * A case sensitive string comparison.
 *
 * @param   string  $str1    string 1 to compare
 * @param   string  $str2    string 2 to compare
 * @param   mixed   $locale  The locale used by strcoll or false to use classical comparison
 *
 * @return  integer  < 0 if str1 is less than str2; > 0 if str1 is greater than str2, and 0 if they are equal.
 *
 * @link    https://www.php.net/strcmp
 * @link    https://www.php.net/strcoll
 * @link    https://www.php.net/setlocale
 * @since   1.3.0
 */ 
public static strcmp(string $str1, string $str2, mixed $locale = false) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strcspn`

UTF-8 aware alternative to strcspn()

Find length of initial segment not matching mask.

##### Signature

```php
public static Joomla\String\StringHelper::strcspn ( string $str, string $mask [, int $start [, int $length ]] ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The string to process. |
| `mask` | `string` | The mask. |
| `start` | `int` | Optional starting character position (in characters). Defaults to `null`. |
| `length` | `int` | Optional length. Defaults to `null`. |

##### Return Values

`int` The length of the initial segment of str1 which does not contain any of the characters in str2

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strcspn()
 *
 * Find length of initial segment not matching mask.
 *
 * @param   string   $str     The string to process
 * @param   string   $mask    The mask
 * @param   integer  $start   Optional starting character position (in characters)
 * @param   integer  $length  Optional length
 *
 * @return  integer  The length of the initial segment of str1 which does not contain any of the characters in str2
 *
 * @link    https://www.php.net/strcspn
 * @since   1.3.0
 */ 
public static strcspn(string $str, string $mask, int $start = null, int $length = null) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::stristr`

UTF-8 aware alternative to stristr()

Returns all of haystack from the first occurrence of needle to the end. Needle and haystack are examined in a case-insensitive manner to 
find the first occurrence of a string using case insensitive comparison.

##### Signature

```php
public static Joomla\String\StringHelper::stristr ( string $str, string $search  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The haystack. |
| `search` | `string` | The needle. |

##### Return Values

`string` the sub string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to stristr()
 *
 * Returns all of haystack from the first occurrence of needle to the end. Needle and haystack are examined in a case-insensitive manner to
 * find the first occurrence of a string using case insensitive comparison.
 *
 * @param   string  $str     The haystack
 * @param   string  $search  The needle
 *
 * @return string the sub string
 *
 * @link    https://www.php.net/stristr
 * @since   1.3.0
 */ 
public static stristr(string $str, string $search) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strrev`

UTF-8 aware alternative to strrev()

Reverse a string.

##### Signature

```php
public static Joomla\String\StringHelper::strrev ( string $str  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String to be reversed. |

##### Return Values

`string` The string in reverse character order

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strrev()
 *
 * Reverse a string.
 *
 * @param   string  $str  String to be reversed
 *
 * @return  string   The string in reverse character order
 *
 * @link    https://www.php.net/strrev
 * @since   1.3.0
 */ 
public static strrev(string $str) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::strspn`

UTF-8 aware alternative to strspn()

Find length of initial segment matching mask.

##### Signature

```php
public static Joomla\String\StringHelper::strspn ( string $str, string $mask [, int $start [, int $length ]] ) : int
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The haystack. |
| `mask` | `string` | The mask. |
| `start` | `int` | Start optional. Defaults to `null`. |
| `length` | `int` | Length optional. Defaults to `null`. |

##### Return Values

`int` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to strspn()
 *
 * Find length of initial segment matching mask.
 *
 * @param   string   $str     The haystack
 * @param   string   $mask    The mask
 * @param   integer  $start   Start optional
 * @param   integer  $length  Length optional
 *
 * @return  integer
 *
 * @link    https://www.php.net/strspn
 * @since   1.3.0
 */ 
public static strspn(string $str, string $mask, int $start = null, int $length = null) : int
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::substr_replace`

UTF-8 aware alternative to substr_replace()

Replace text within a portion of a string.

##### Signature

```php
public static Joomla\String\StringHelper::substr_replace ( string $str, string $repl, int $start [, int $length ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The haystack. |
| `repl` | `string` | The replacement string. |
| `start` | `int` | Start. |
| `length` | `int` | Length (optional). Defaults to `null`. |

##### Return Values

`string` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to substr_replace()
 *
 * Replace text within a portion of a string.
 *
 * @param   string   $str     The haystack
 * @param   string   $repl    The replacement string
 * @param   integer  $start   Start
 * @param   integer  $length  Length (optional)
 *
 * @return  string
 *
 * @link    https://www.php.net/substr_replace
 * @since   1.3.0
 */ 
public static substr_replace(string $str, string $repl, int $start, int $length = null) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::ltrim`

UTF-8 aware replacement for ltrim()

Strip whitespace (or other characters) from the beginning of a string. You only need to use this if you are supplying the charlist 
optional arg and it contains UTF-8 characters. Otherwise ltrim will work normally on a UTF-8 string.

##### Signature

```php
public static Joomla\String\StringHelper::ltrim ( string $str [, string $charlist ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The string to be trimmed. |
| `charlist` | `string` | The optional charlist of additional characters to trim. Defaults to `false`. |

##### Return Values

`string` The trimmed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware replacement for ltrim()
 *
 * Strip whitespace (or other characters) from the beginning of a string. You only need to use this if you are supplying the charlist
 * optional arg and it contains UTF-8 characters. Otherwise ltrim will work normally on a UTF-8 string.
 *
 * @param   string  $str       The string to be trimmed
 * @param   string  $charlist  The optional charlist of additional characters to trim
 *
 * @return  string  The trimmed string
 *
 * @link    https://www.php.net/ltrim
 * @since   1.3.0
 */ 
public static ltrim(string $str, string $charlist = false) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::rtrim`

UTF-8 aware replacement for rtrim()

Strip whitespace (or other characters) from the end of a string. You only need to use this if you are supplying the charlist 
optional arg and it contains UTF-8 characters. Otherwise rtrim will work normally on a UTF-8 string.

##### Signature

```php
public static Joomla\String\StringHelper::rtrim ( string $str [, string $charlist ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The string to be trimmed. |
| `charlist` | `string` | The optional charlist of additional characters to trim. Defaults to `false`. |

##### Return Values

`string` The trimmed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware replacement for rtrim()
 *
 * Strip whitespace (or other characters) from the end of a string. You only need to use this if you are supplying the charlist
 * optional arg and it contains UTF-8 characters. Otherwise rtrim will work normally on a UTF-8 string.
 *
 * @param   string  $str       The string to be trimmed
 * @param   string  $charlist  The optional charlist of additional characters to trim
 *
 * @return  string  The trimmed string
 *
 * @link    https://www.php.net/rtrim
 * @since   1.3.0
 */ 
public static rtrim(string $str, string $charlist = false) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::trim`

UTF-8 aware replacement for trim()

Strip whitespace (or other characters) from the beginning and end of a string. You only need to use this if you are supplying the charlist 
optional arg and it contains UTF-8 characters. Otherwise trim will work normally on a UTF-8 string

##### Signature

```php
public static Joomla\String\StringHelper::trim ( string $str [, string $charlist ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | The string to be trimmed. |
| `charlist` | `string` | The optional charlist of additional characters to trim. Defaults to `false`. |

##### Return Values

`string` The trimmed string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware replacement for trim()
 *
 * Strip whitespace (or other characters) from the beginning and end of a string. You only need to use this if you are supplying the charlist
 * optional arg and it contains UTF-8 characters. Otherwise trim will work normally on a UTF-8 string
 *
 * @param   string  $str       The string to be trimmed
 * @param   string  $charlist  The optional charlist of additional characters to trim
 *
 * @return  string  The trimmed string
 *
 * @link    https://www.php.net/trim
 * @since   1.3.0
 */ 
public static trim(string $str, string $charlist = false) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::ucfirst`

UTF-8 aware alternative to ucfirst()

Make a string's first character uppercase or all words' first character uppercase.

##### Signature

```php
public static Joomla\String\StringHelper::ucfirst ( string $str [, string $delimiter [, string $newDelimiter ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String to be processed. |
| `delimiter` | `string` | The words delimiter (null means do not split the string). Defaults to `null`. |
| `newDelimiter` | `string` | The new words delimiter (null means equal to $delimiter). Defaults to `null`. |

##### Return Values

`string` If $delimiter is null, return the string with first character as upper case (if applicable)

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to ucfirst()
 *
 * Make a string's first character uppercase or all words' first character uppercase.
 *
 * @param   string  $str           String to be processed
 * @param   string  $delimiter     The words delimiter (null means do not split the string)
 * @param   string  $newDelimiter  The new words delimiter (null means equal to $delimiter)
 *
 * @return  string  If $delimiter is null, return the string with first character as upper case (if applicable)
 *                  else consider the string of words separated by the delimiter, apply the ucfirst to each words
 *                  and return the string with the new delimiter
 *
 * @link    https://www.php.net/ucfirst
 * @since   1.3.0
 */ 
public static ucfirst(string $str, string $delimiter = null, string $newDelimiter = null) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::ucwords`

UTF-8 aware alternative to ucwords()

Uppercase the first character of each word in a string.

##### Signature

```php
public static Joomla\String\StringHelper::ucwords ( string $str  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | String to be processed. |

##### Return Values

`string` String with first char of each word uppercase

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * UTF-8 aware alternative to ucwords()
 *
 * Uppercase the first character of each word in a string.
 *
 * @param   string  $str  String to be processed
 *
 * @return  string  String with first char of each word uppercase
 *
 * @link    https://www.php.net/ucwords
 * @since   1.3.0
 */ 
public static ucwords(string $str) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::transcode`

Transcode a string.

##### Signature

```php
public static Joomla\String\StringHelper::transcode ( string $source, string $fromEncoding, string $toEncoding  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `source` | `string` | The string to transcode. |
| `fromEncoding` | `string` | The source encoding. |
| `toEncoding` | `string` | The target encoding. |

##### Return Values

`mixed` The transcoded string, or null if the source was not a string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Transcode a string.
 *
 * @param   string  $source        The string to transcode.
 * @param   string  $fromEncoding  The source encoding.
 * @param   string  $toEncoding    The target encoding.
 *
 * @return  mixed  The transcoded string, or null if the source was not a string.
 *
 * @link    https://bugs.php.net/bug.php?id=48147
 *
 * @since   1.3.0
 */ 
public static transcode(string $source, string $fromEncoding, string $toEncoding) : mixed
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::valid`

Tests a string as to whether it's valid UTF-8 and supported by the Unicode standard.

Note: this function has been modified to simple return true or false.

##### Signature

```php
public static Joomla\String\StringHelper::valid ( string $str  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | UTF-8 encoded string. |

##### Return Values

`bool` true if valid

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests a string as to whether it's valid UTF-8 and supported by the Unicode standard.
 *
 * Note: this function has been modified to simple return true or false.
 *
 * @param   string  $str  UTF-8 encoded string.
 *
 * @return  boolean  true if valid
 *
 * @author  <hsivonen@iki.fi>
 * @link    https://hsivonen.fi/php-utf8/
 * @see     compliant
 * @since   1.3.0
 */ 
public static valid(string $str) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::compliant`

Tests whether a string complies as UTF-8.

This will be much faster than StringHelper::valid() but will pass five and six octet UTF-8 sequences, which are not supported by Unicode and 
so cannot be displayed correctly in a browser. In other words it is not as strict as StringHelper::valid() but it's faster. If you use it to 
validate user input, you place yourself at the risk that attackers will be able to inject 5 and 6 byte sequences (which may or may not be a 
significant risk, depending on what you are are doing).

##### Signature

```php
public static Joomla\String\StringHelper::compliant ( string $str  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | UTF-8 string to check. |

##### Return Values

`bool` TRUE if string is valid UTF-8

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Tests whether a string complies as UTF-8.
 *
 * This will be much faster than StringHelper::valid() but will pass five and six octet UTF-8 sequences, which are not supported by Unicode and
 * so cannot be displayed correctly in a browser. In other words it is not as strict as StringHelper::valid() but it's faster. If you use it to
 * validate user input, you place yourself at the risk that attackers will be able to inject 5 and 6 byte sequences (which may or may not be a
 * significant risk, depending on what you are are doing).
 *
 * @param   string  $str  UTF-8 string to check
 *
 * @return  boolean  TRUE if string is valid UTF-8
 *
 * @see     StringHelper::valid
 * @link    https://www.php.net/manual/en/reference.pcre.pattern.modifiers.php#54805
 * @since   1.3.0
 */ 
public static compliant(string $str) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::unicode_to_utf8`

Converts Unicode sequences to UTF-8 string.

##### Signature

```php
public static Joomla\String\StringHelper::unicode_to_utf8 ( string $str  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | Unicode string to convert. |

##### Return Values

`string` UTF-8 string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts Unicode sequences to UTF-8 string.
 *
 * @param   string  $str  Unicode string to convert
 *
 * @return  string  UTF-8 string
 *
 * @since   1.3.0
 */ 
public static unicode_to_utf8(string $str) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\StringHelper::unicode_to_utf16`

Converts Unicode sequences to UTF-16 string.

##### Signature

```php
public static Joomla\String\StringHelper::unicode_to_utf16 ( string $str  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `str` | `string` | Unicode string to convert. |

##### Return Values

`string` UTF-16 string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts Unicode sequences to UTF-16 string.
 *
 * @param   string  $str  Unicode string to convert
 *
 * @return  string  UTF-16 string
 *
 * @since   1.3.0
 */ 
public static unicode_to_utf16(string $str) : string
{
    // @todo Add adapter code.
}
```
### The Joomla\String\Inflector Class

Joomla Framework String Inflector Class

The Inflector transforms words

#### `Joomla\String\Inflector::__construct`

Protected constructor.

##### Signature

```php
protected Joomla\String\Inflector::__construct ( void ) : void
```
##### Parameters

This method has no parameters.

##### Return Values

No value is returned.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Protected constructor.
 *
 * @since  1.0
 */ 
protected __construct() : void
{
    // @todo Add adapter code.
}
```





#### `Joomla\String\Inflector::addCountableRule`

Adds a countable word.

##### Signature

```php
public Joomla\String\Inflector::addCountableRule ( mixed $data  ) : Joomla\String\Inflector
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `mixed` | A string or an array of strings to add. |

##### Return Values

`Joomla\String\Inflector` Returns this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a countable word.
 *
 * @param   mixed  $data  A string or an array of strings to add.
 *
 * @return  Inflector  Returns this object to support chaining.
 *
 * @since   1.0
 */ 
public addCountableRule(mixed $data) : Joomla\String\Inflector
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::addWord`

Adds a specific singular-plural pair for a word.

##### Signature

```php
public Joomla\String\Inflector::addWord ( string $singular [, string $plural ] ) : Joomla\String\Inflector
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `singular` | `string` | The singular form of the word. |
| `plural` | `string` | The plural form of the word. If omitted, it is assumed the singular and plural are identical. Defaults to `null`. |

##### Return Values

`Joomla\String\Inflector` Returns this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a specific singular-plural pair for a word.
 *
 * @param   string  $singular  The singular form of the word.
 * @param   string  $plural    The plural form of the word. If omitted, it is assumed the singular and plural are identical.
 *
 * @return  Inflector  Returns this object to support chaining.
 *
 * @since   1.0
 */ 
public addWord(string $singular, string $plural = null) : Joomla\String\Inflector
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::addPluraliseRule`

Adds a pluralisation rule.

##### Signature

```php
public Joomla\String\Inflector::addPluraliseRule ( mixed $data  ) : Joomla\String\Inflector
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `mixed` | A string or an array of regex rules to add. |

##### Return Values

`Joomla\String\Inflector` Returns this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a pluralisation rule.
 *
 * @param   mixed  $data  A string or an array of regex rules to add.
 *
 * @return  Inflector  Returns this object to support chaining.
 *
 * @since   1.0
 */ 
public addPluraliseRule(mixed $data) : Joomla\String\Inflector
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::addSingulariseRule`

Adds a singularisation rule.

##### Signature

```php
public Joomla\String\Inflector::addSingulariseRule ( mixed $data  ) : Joomla\String\Inflector
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `data` | `mixed` | A string or an array of regex rules to add. |

##### Return Values

`Joomla\String\Inflector` Returns this object to support chaining.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Adds a singularisation rule.
 *
 * @param   mixed  $data  A string or an array of regex rules to add.
 *
 * @return  Inflector  Returns this object to support chaining.
 *
 * @since   1.0
 */ 
public addSingulariseRule(mixed $data) : Joomla\String\Inflector
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::getInstance`

Gets an instance of the JStringInflector singleton.

##### Signature

```php
public static Joomla\String\Inflector::getInstance ( [ bool $new ] ) : Joomla\String\Inflector
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `new` | `bool` | If true (default is false), returns a new instance regardless if one exists. Defaults to `false`. |

##### Return Values

`Joomla\String\Inflector` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Gets an instance of the JStringInflector singleton.
 *
 * @param   boolean  $new  If true (default is false), returns a new instance regardless if one exists.
 *                         This argument is mainly used for testing.
 *
 * @return  Inflector
 *
 * @since   1.0
 */ 
public static getInstance(bool $new = false) : Joomla\String\Inflector
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::isCountable`

Checks if a word is countable.

##### Signature

```php
public Joomla\String\Inflector::isCountable ( string $word  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `word` | `string` | The string input. |

##### Return Values

`bool` True if word is countable, false otherwise.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if a word is countable.
 *
 * @param   string  $word  The string input.
 *
 * @return  boolean  True if word is countable, false otherwise.
 *
 * @since   1.0
 */ 
public isCountable(string $word) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::isPlural`

Checks if a word is in a plural form.

##### Signature

```php
public Joomla\String\Inflector::isPlural ( string $word  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `word` | `string` | The string input. |

##### Return Values

`bool` True if word is plural, false if not.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if a word is in a plural form.
 *
 * @param   string  $word  The string input.
 *
 * @return  boolean  True if word is plural, false if not.
 *
 * @since   1.0
 */ 
public isPlural(string $word) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::isSingular`

Checks if a word is in a singular form.

##### Signature

```php
public Joomla\String\Inflector::isSingular ( string $word  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `word` | `string` | The string input. |

##### Return Values

`bool` True if word is singular, false if not.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if a word is in a singular form.
 *
 * @param   string  $word  The string input.
 *
 * @return  boolean  True if word is singular, false if not.
 *
 * @since   1.0
 */ 
public isSingular(string $word) : bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::toPlural`

Converts a word into its plural form.

##### Signature

```php
public Joomla\String\Inflector::toPlural ( string $word  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `word` | `string` | The singular word to pluralise. |

##### Return Values

`string` or `bool` An inflected string, or false if no rule could be applied.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts a word into its plural form.
 *
 * @param   string  $word  The singular word to pluralise.
 *
 * @return  string|boolean  An inflected string, or false if no rule could be applied.
 *
 * @since   1.0
 */ 
public toPlural(string $word) : string|bool
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Inflector::toSingular`

Converts a word into its singular form.

##### Signature

```php
public Joomla\String\Inflector::toSingular ( string $word  ) : string|bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `word` | `string` | The plural word to singularise. |

##### Return Values

`string` or `bool` An inflected string, or false if no rule could be applied.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Converts a word into its singular form.
 *
 * @param   string  $word  The plural word to singularise.
 *
 * @return  string|boolean  An inflected string, or false if no rule could be applied.
 *
 * @since   1.0
 */ 
public toSingular(string $word) : string|bool
{
    // @todo Add adapter code.
}
```
### The Joomla\String\Normalise Class

Joomla Framework String Normalise Class

#### `Joomla\String\Normalise::fromCamelCase`

Convert a string from camel case.

This method offers two modes. Grouped allows for splitting on groups of uppercase characters as follows:

"FooBarABCDef"            becomes  array("Foo", "Bar", "ABC", "Def") 
"JFooBar"                 becomes  array("J", "Foo", "Bar") 
"J001FooBar002"           becomes  array("J001", "Foo", "Bar002") 
"abcDef"                  becomes  array("abc", "Def") 
"abc_defGhi_Jkl"          becomes  array("abc_def", "Ghi_Jkl") 
"ThisIsA_NASAAstronaut"   becomes  array("This", "Is", "A_NASA", "Astronaut")) 
"JohnFitzgerald_Kennedy"  becomes  array("John", "Fitzgerald_Kennedy"))

Non-grouped will split strings at each uppercase character.

##### Signature

```php
public static Joomla\String\Normalise::fromCamelCase ( string $input [, bool $grouped ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |
| `grouped` | `bool` | Optionally allows splitting on groups of uppercase characters. Defaults to `false`. |

##### Return Values

`string` The space separated string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string from camel case.
 *
 * This method offers two modes. Grouped allows for splitting on groups of uppercase characters as follows:
 *
 * "FooBarABCDef"            becomes  array("Foo", "Bar", "ABC", "Def")
 * "JFooBar"                 becomes  array("J", "Foo", "Bar")
 * "J001FooBar002"           becomes  array("J001", "Foo", "Bar002")
 * "abcDef"                  becomes  array("abc", "Def")
 * "abc_defGhi_Jkl"          becomes  array("abc_def", "Ghi_Jkl")
 * "ThisIsA_NASAAstronaut"   becomes  array("This", "Is", "A_NASA", "Astronaut"))
 * "JohnFitzgerald_Kennedy"  becomes  array("John", "Fitzgerald_Kennedy"))
 *
 * Non-grouped will split strings at each uppercase character.
 *
 * @param   string   $input    The string input (ASCII only).
 * @param   boolean  $grouped  Optionally allows splitting on groups of uppercase characters.
 *
 * @return  string  The space separated string.
 *
 * @since   1.0
 */ 
public static fromCamelCase(string $input, bool $grouped = false) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toCamelCase`

Convert a string into camel case.

##### Signature

```php
public static Joomla\String\Normalise::toCamelCase ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The camel case string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into camel case.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The camel case string.
 *
 * @since   1.0
 */ 
public static toCamelCase(string $input) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toDashSeparated`

Convert a string into dash separated form.

##### Signature

```php
public static Joomla\String\Normalise::toDashSeparated ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The dash separated string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into dash separated form.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The dash separated string.
 *
 * @since   1.0
 */ 
public static toDashSeparated(string $input) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toSpaceSeparated`

Convert a string into space separated form.

##### Signature

```php
public static Joomla\String\Normalise::toSpaceSeparated ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The space separated string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into space separated form.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The space separated string.
 *
 * @since   1.0
 */ 
public static toSpaceSeparated(string $input) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toUnderscoreSeparated`

Convert a string into underscore separated form.

##### Signature

```php
public static Joomla\String\Normalise::toUnderscoreSeparated ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The underscore separated string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into underscore separated form.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The underscore separated string.
 *
 * @since   1.0
 */ 
public static toUnderscoreSeparated(string $input) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toVariable`

Convert a string into variable form.

##### Signature

```php
public static Joomla\String\Normalise::toVariable ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The variable string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into variable form.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The variable string.
 *
 * @since   1.0
 */ 
public static toVariable(string $input) : string
{
    // @todo Add adapter code.
}
```
#### `Joomla\String\Normalise::toKey`

Convert a string into key form.

##### Signature

```php
public static Joomla\String\Normalise::toKey ( string $input  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `input` | `string` | The string input (ASCII only). |

##### Return Values

`string` The key string.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

###### Test Title

Joomla/String:
```php
// @todo (Automatically) add code from test
```

Laravel:
```php
// @todo Rewrite test code using Laravel
```
    
##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Convert a string into key form.
 *
 * @param   string  $input  The string input (ASCII only).
 *
 * @return  string  The key string.
 *
 * @since   1.0
 */ 
public static toKey(string $input) : string
{
    // @todo Add adapter code.
}
```

## Traits

