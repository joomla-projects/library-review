# Joomla/Language Package version 1.4.0

Joomla Language Package

## The Joomla\Language\StemmerInterface Interface

Stemmer interface.

### Methods

#### `Joomla\Language\StemmerInterface::stem`

Stem a token and return the root.

##### Signature

```php
abstract public Joomla\Language\StemmerInterface::stem ( string $token, string $lang  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `token` | `string` | The token to stem. |
| `lang` | `string` | The language of the token. |

##### Return Values

`string` The root token.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Stem a token and return the root.
 *
 * @param   string  $token  The token to stem.
 * @param   string  $lang   The language of the token.
 *
 * @return  string  The root token.
 *
 * @since   1.4.0
 */
abstract public function stem(string $token, string $lang) : string;
```

## The Joomla\Language\LanguageFactory Class

Language package factory

### Methods

#### `Joomla\Language\LanguageFactory::getDefaultLanguage`

Get the application's default language

##### Signature

```php
public Joomla\Language\LanguageFactory::getDefaultLanguage ( void ) : string
```
##### Parameters

This method has no parameters.

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
 * Get the application's default language
 *
 * @return  string
 *
 * @since   1.3.0
 */
public function getDefaultLanguage() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\LanguageFactory::getLanguage`

Returns a language object.

##### Signature

```php
public Joomla\Language\LanguageFactory::getLanguage ( [ string $lang = null [, string $path = null [, bool $debug = false ]]] ) : Joomla\Language\Language
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `string` | The language to use. Defaults to `null`. |
| `path` | `string` | The base path to the language folder.  Unused in 1.x, Language uses JPATH_ROOT constant Defaults to `null`. |
| `debug` | `bool` | The debug mode. Defaults to `false`. |

##### Return Values

`Joomla\Language\Language` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a language object.
 *
 * @param   string   $lang   The language to use.
 * @param   string   $path   The base path to the language folder.  Unused in 1.x, Language uses JPATH_ROOT constant
 * @param   boolean  $debug  The debug mode.
 *
 * @return  Language
 *
 * @since   1.3.0
 */
public function getLanguage(string $lang = null, string $path = null, bool $debug = false) : Joomla\Language\Language{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\LanguageFactory::getLanguageDirectory`

Get the path to the directory containing the application's language folder

##### Signature

```php
public Joomla\Language\LanguageFactory::getLanguageDirectory ( void ) : string
```
##### Parameters

This method has no parameters.

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
 * Get the path to the directory containing the application's language folder
 *
 * @return  string
 *
 * @since   1.3.0
 */
public function getLanguageDirectory() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\LanguageFactory::getStemmer`

Get a stemmer, creating it if necessary.

##### Signature

```php
public Joomla\Language\LanguageFactory::getStemmer ( string $adapter  ) : Joomla\Language\Stemmer
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `adapter` | `string` | The type of stemmer to load. |

##### Return Values

`Joomla\Language\Stemmer` 

##### Errors/Exceptions

Throws RuntimeException on invalid stemmer<br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get a stemmer, creating it if necessary.
 *
 * @param   string  $adapter  The type of stemmer to load.
 *
 * @return  Stemmer
 *
 * @since   1.3.0
 * @throws  \RuntimeException on invalid stemmer
 */
public function getStemmer(string $adapter) : Joomla\Language\Stemmer{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\LanguageFactory::setDefaultLanguage`

Set the application's default language

##### Signature

```php
public Joomla\Language\LanguageFactory::setDefaultLanguage ( string $language  ) : Joomla\Language\$this
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `language` | `string` | Language code for the application's default language |

##### Return Values

`Joomla\Language\$this` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the application's default language
 *
 * @param   string  $language  Language code for the application's default language
 *
 * @return  $this
 *
 * @since   1.3.0
 */
public function setDefaultLanguage(string $language) : Joomla\Language\$this{
    // @todo Add adapter code.
}
```

## The Joomla\Language\Text Class

Text handling class.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected static `$strings` | `array` | JavaScript strings |
| protected static `$lang` | `Joomla\Language\Language` | Language instance |    
### Methods

#### `Joomla\Language\Text::getLanguage`

Get Text Language

##### Signature

```php
public static Joomla\Language\Text::getLanguage ( void ) : Joomla\Language\Language
```
##### Parameters

This method has no parameters.

##### Return Values

`Joomla\Language\Language` 

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get Text Language
 *
 * @return  Language
 */
public static function getLanguage() : Joomla\Language\Language{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::setLanguage`

Set Text languge

##### Signature

```php
public static Joomla\Language\Text::setLanguage ( Joomla\Language\Language $lang  ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `Joomla\Language\Language` | Language instance |

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
 * Set Text languge
 *
 * @param   Language  $lang  Language instance
 *
 * @return  void
 */
public static function setLanguage(Joomla\Language\Language $lang) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::_`

Translates a string into the current language.

Examples:
<script>alert(Joomla.JText._('<?php echo JText::_("JDEFAULT", array("script"=>true));?>'));</script>
will generate an alert message containing 'Default'
<?php echo JText::_("JDEFAULT");?> it will generate a 'Default' string

This method has been deprecated and gets removed in version 2.0. 
Will be replaced with a `translate` method..

Does not need to be replaced.

#### `Joomla\Language\Text::alt`

Translates a string into the current language.

Examples:
<?php echo JText::alt("JALL","language");?> it will generate a 'All' string in English but a "Toutes" string in French
<?php echo JText::alt("JALL","module");?> it will generate a 'All' string in English but a "Tous" string in French

##### Signature

```php
public static Joomla\Language\Text::alt ( string $string, string $alt [, mixed $jsSafe = false [, bool $interpretBackSlashes = true [, bool $script = false ]]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The string to translate. |
| `alt` | `string` | The alternate option for global string |
| `jsSafe` | `mixed` | Boolean: Make the result javascript safe. Defaults to `false`. |
| `interpretBackSlashes` | `bool` | To interpret backslashes (\\=\, \n=carriage return, \t=tabulation) Defaults to `true`. |
| `script` | `bool` | To indicate that the string will be pushed in the javascript language store [@deprecated 2.0] Defaults to `false`. |

##### Return Values

`string` The translated string or the key if $script is true

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Translates a string into the current language.
 *
 * Examples:
 * <?php echo JText::alt("JALL","language");?> it will generate a 'All' string in English but a "Toutes" string in French
 * <?php echo JText::alt("JALL","module");?> it will generate a 'All' string in English but a "Tous" string in French
 *
 * @param   string   $string                The string to translate.
 * @param   string   $alt                   The alternate option for global string
 * @param   mixed    $jsSafe                Boolean: Make the result javascript safe.
 * @param   boolean  $interpretBackSlashes  To interpret backslashes (\\=\, \n=carriage return, \t=tabulation)
 * @param   boolean  $script                To indicate that the string will be pushed in the javascript language store [@deprecated 2.0]
 *
 * @return  string  The translated string or the key if $script is true
 *
 * @since   1.0
 */
public static function alt(string $string, string $alt, mixed $jsSafe = false, bool $interpretBackSlashes = true, bool $script = false) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::plural`

Like JText::sprintf but tries to pluralise the string.

Note that this method can take a mixed number of arguments as for the sprintf function.

The last argument can take an array of options:

array('jsSafe'=>boolean, 'interpretBackSlashes'=>boolean, 'script'=>boolean)

where:

jsSafe is a boolean to generate a javascript safe strings.
interpretBackSlashes is a boolean to interpret backslashes \\->\, \n->new line, \t->tabulation.
script is a boolean to indicate that the string will be push in the javascript language store.

Examples:
<script>alert(Joomla.JText._('<?php echo JText::plural("COM_PLUGINS_N_ITEMS_UNPUBLISHED", 1, array("script"=>true));?>'));</script>
will generate an alert message containing '1 plugin successfully disabled'
<?php echo JText::plural("COM_PLUGINS_N_ITEMS_UNPUBLISHED", 1);?> it will generate a '1 plugin successfully disabled' string

##### Signature

```php
public static Joomla\Language\Text::plural ( string $string, int $n  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The format string. |
| `n` | `int` | The number of items |

##### Return Values

`string` The translated strings or the key if 'script' is true in the array of options

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Like JText::sprintf but tries to pluralise the string.
 *
 * Note that this method can take a mixed number of arguments as for the sprintf function.
 *
 * The last argument can take an array of options:
 *
 * array('jsSafe'=>boolean, 'interpretBackSlashes'=>boolean, 'script'=>boolean)
 *
 * where:
 *
 * jsSafe is a boolean to generate a javascript safe strings.
 * interpretBackSlashes is a boolean to interpret backslashes \\->\, \n->new line, \t->tabulation.
 * script is a boolean to indicate that the string will be push in the javascript language store.
 *
 * Examples:
 * <script>alert(Joomla.JText._('<?php echo JText::plural("COM_PLUGINS_N_ITEMS_UNPUBLISHED", 1, array("script"=>true));?>'));</script>
 * will generate an alert message containing '1 plugin successfully disabled'
 * <?php echo JText::plural("COM_PLUGINS_N_ITEMS_UNPUBLISHED", 1);?> it will generate a '1 plugin successfully disabled' string
 *
 * @param   string   $string  The format string.
 * @param   integer  $n       The number of items
 *
 * @return  string  The translated strings or the key if 'script' is true in the array of options
 *
 * @since   1.0
 */
public static function plural(string $string, int $n) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::sprintf`

Passes a string thru a sprintf.

Note that this method can take a mixed number of arguments as for the sprintf function.

The last argument can take an array of options:

array('jsSafe'=>boolean, 'interpretBackSlashes'=>boolean, 'script'=>boolean)

where:

jsSafe is a boolean to generate a javascript safe strings.
interpretBackSlashes is a boolean to interpret backslashes \\->\, \n->new line, \t->tabulation.
script is a boolean to indicate that the string will be push in the javascript language store.

##### Signature

```php
public static Joomla\Language\Text::sprintf ( string $string  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The format string. |

##### Return Values

`string` The translated strings or the key if 'script' is true in the array of options.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Passes a string thru a sprintf.
 *
 * Note that this method can take a mixed number of arguments as for the sprintf function.
 *
 * The last argument can take an array of options:
 *
 * array('jsSafe'=>boolean, 'interpretBackSlashes'=>boolean, 'script'=>boolean)
 *
 * where:
 *
 * jsSafe is a boolean to generate a javascript safe strings.
 * interpretBackSlashes is a boolean to interpret backslashes \\->\, \n->new line, \t->tabulation.
 * script is a boolean to indicate that the string will be push in the javascript language store.
 *
 * @param   string  $string  The format string.
 *
 * @return  string  The translated strings or the key if 'script' is true in the array of options.
 *
 * @since   1.0
 */
public static function sprintf(string $string) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::printf`

Passes a string thru an printf.

Note that this method can take a mixed number of arguments as for the sprintf function.

##### Signature

```php
public static Joomla\Language\Text::printf ( string $string  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The format string. |

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
 * Passes a string thru an printf.
 *
 * Note that this method can take a mixed number of arguments as for the sprintf function.
 *
 * @param   string  $string  The format string.
 *
 * @return  mixed
 *
 * @since   1.0
 */
public static function printf(string $string) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Text::script`

Translate a string into the current language and stores it in the JavaScript language store.

This method has been deprecated and gets removed in version 2.0. 
Deprecated without replacement.

Does not need to be replaced.

## The Joomla\Language\Stemmer Class

Stemmer base class.

This class has been deprecated and gets removed in version 2.0.
Stemmer objects should directly implement the StemmerInterface

Does not need to be replaced.

## The Joomla\Language\Transliterate Class

Class to transliterate strings

### Methods

#### `Joomla\Language\Transliterate::utf8_latin_to_ascii`

Returns strings transliterated from UTF-8 to Latin

##### Signature

```php
public static Joomla\Language\Transliterate::utf8_latin_to_ascii ( string $string [, int $case = 0 ] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | String to transliterate |
| `case` | `int` | Optionally specify upper or lower case. Default to 0 (both). Defaults to `0`. |

##### Return Values

`string` Transliterated string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns strings transliterated from UTF-8 to Latin
 *
 * @param   string  $string  String to transliterate
 * @param   int     $case    Optionally specify upper or lower case. Default to 0 (both).
 *
 * @return  string  Transliterated string
 *
 * @since   1.0
 */
public static function utf8_latin_to_ascii(string $string, int $case = 0) : string{
    // @todo Add adapter code.
}
```

## The Joomla\Language\Language Class

Languages/translation handler class

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected static `$languages` | `array` | Language instance container |
| protected static `$languageFactory` | `Joomla\Language\LanguageFactory` | Cached LanguageFactory object |
| protected `$debug` | `bool` | Debug language, If true, highlights if string isn&#039;t found. |
| protected `$default` | `string` | The default language, used when a language file in the requested language does not exist. |
| protected `$orphans` | `array` | An array of orphaned text. |
| protected `$metadata` | `array` | Array holding the language metadata. |
| protected `$locale` | `array` or `bool` | Array holding the language locale or boolean null if none. |
| protected `$lang` | `string` | The language to load. |
| protected `$paths` | `array` | A nested array of language files that have been loaded |
| protected `$errorfiles` | `array` | List of language files that are in error state |
| protected `$strings` | `array` | Translations |
| protected `$used` | `array` | An array of used text, used during debugging. |
| protected `$counter` | `int` | Counter for number of loads. |
| protected `$override` | `array` | An array used to store overrides. |
| protected `$transliterator` | `string` | Name of the transliterator function for this language. |
| protected `$pluralSuffixesCallback` | `callable` | Name of the pluralSuffixesCallback function for this language. |
| protected `$ignoredSearchWordsCallback` | `callable` | Name of the ignoredSearchWordsCallback function for this language. |
| protected `$lowerLimitSearchWordCallback` | `callable` | Name of the lowerLimitSearchWordCallback function for this language. |
| protected `$upperLimitSearchWordCallback` | `callable` | Name of the uppperLimitSearchWordCallback function for this language |
| protected `$searchDisplayedCharactersNumberCallback` | `callable` | Name of the searchDisplayedCharactersNumberCallback function for this language. |    
### Methods

#### `Joomla\Language\Language::__construct`

Constructor activating the default information of the language.

##### Signature

```php
public Joomla\Language\Language::__construct ( [ string $lang = null [, bool $debug = false ]] ) : void
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `string` | The language Defaults to `null`. |
| `debug` | `bool` | Indicates if language debugging is enabled. Defaults to `false`. |

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
 * Constructor activating the default information of the language.
 *
 * @param   string   $lang   The language
 * @param   boolean  $debug  Indicates if language debugging is enabled.
 *
 * @since   1.0
 */
public function __construct(string $lang = null, bool $debug = false) : void{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getInstance`

Returns a language object.

This method has been deprecated and gets removed in version 2.0. 
Use LanguageFactory::getLanguage() instead.

Does not need to be replaced.

#### `Joomla\Language\Language::_`

Translate function, mimics the php gettext (alias _) function.

The function checks if $jsSafe is true, then if $interpretBackslashes is true.

##### Signature

```php
public Joomla\Language\Language::_ ( string $string [, bool $jsSafe = false [, bool $interpretBackSlashes = true ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The string to translate |
| `jsSafe` | `bool` | Make the result javascript safe Defaults to `false`. |
| `interpretBackSlashes` | `bool` | Interpret \t and \n Defaults to `true`. |

##### Return Values

`string` The translation of the string

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Translate function, mimics the php gettext (alias _) function.
 *
 * The function checks if $jsSafe is true, then if $interpretBackslashes is true.
 *
 * @param   string   $string                The string to translate
 * @param   boolean  $jsSafe                Make the result javascript safe
 * @param   boolean  $interpretBackSlashes  Interpret \t and \n
 *
 * @return  string  The translation of the string
 *
 * @since   1.0
 */
public function _(string $string, bool $jsSafe = false, bool $interpretBackSlashes = true) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::transliterate`

Transliterate function

This method processes a string and replaces all accented UTF-8 characters by unaccented
ASCII-7 "equivalents".

##### Signature

```php
public Joomla\Language\Language::transliterate ( string $string  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The string to transliterate. |

##### Return Values

`string` The transliteration of the string.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Transliterate function
 *
 * This method processes a string and replaces all accented UTF-8 characters by unaccented
 * ASCII-7 "equivalents".
 *
 * @param   string  $string  The string to transliterate.
 *
 * @return  string  The transliteration of the string.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public function transliterate(string $string) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getTransliterator`

Getter for transliteration function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setTransliterator`

Set the transliteration function.

This method has been deprecated and gets removed in version 2.0. 
The transliterator must be set in a language&#039;s localise file..

Does not need to be replaced.

#### `Joomla\Language\Language::getPluralSuffixes`

Returns an array of suffixes for plural rules.

##### Signature

```php
public Joomla\Language\Language::getPluralSuffixes ( int $count  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `count` | `int` | The count number the rule is for. |

##### Return Values

`array` The array of suffixes.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns an array of suffixes for plural rules.
 *
 * @param   integer  $count  The count number the rule is for.
 *
 * @return  array    The array of suffixes.
 *
 * @since   1.0
 */
public function getPluralSuffixes(int $count) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getPluralSuffixesCallback`

Getter for pluralSuffixesCallback function.

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setPluralSuffixesCallback`

Set the pluralSuffixes function.

This method has been deprecated and gets removed in version 2.0. 
The plural suffix method must be set in a language&#039;s localise file..

Does not need to be replaced.

#### `Joomla\Language\Language::getIgnoredSearchWords`

Returns an array of ignored search words

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getIgnoredSearchWordsCallback`

Getter for ignoredSearchWordsCallback function.

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setIgnoredSearchWordsCallback`

Setter for the ignoredSearchWordsCallback function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getLowerLimitSearchWord`

Returns a lower limit integer for length of search words

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getLowerLimitSearchWordCallback`

Getter for lowerLimitSearchWordCallback function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setLowerLimitSearchWordCallback`

Setter for the lowerLimitSearchWordCallback function.

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getUpperLimitSearchWord`

Returns an upper limit integer for length of search words

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getUpperLimitSearchWordCallback`

Getter for upperLimitSearchWordCallback function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setUpperLimitSearchWordCallback`

Setter for the upperLimitSearchWordCallback function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getSearchDisplayedCharactersNumber`

Returns the number of characters displayed in search results.

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getSearchDisplayedCharactersNumberCallback`

Getter for searchDisplayedCharactersNumberCallback function

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::setSearchDisplayedCharactersNumberCallback`

Setter for the searchDisplayedCharactersNumberCallback function.

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::exists`

Checks if a language exists.

This is a simple, quick check for the directory that should contain language files for the given user.

##### Signature

```php
public static Joomla\Language\Language::exists ( string $lang [, string $basePath = &#039;JPATH_ROOT&#039; ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `string` | Language to check. |
| `basePath` | `string` | Optional path to check. Defaults to `'JPATH_ROOT'`. |

##### Return Values

`bool` True if the language exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Checks if a language exists.
 *
 * This is a simple, quick check for the directory that should contain language files for the given user.
 *
 * @param   string  $lang      Language to check.
 * @param   string  $basePath  Optional path to check.
 *
 * @return  boolean  True if the language exists.
 *
 * @since   1.0
 */
public static function exists(string $lang, string $basePath = 'JPATH_ROOT') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::load`

Loads a single language file and appends the results to the existing strings

##### Signature

```php
public Joomla\Language\Language::load ( [ string $extension = &#039;joomla&#039; [, string $basePath = &#039;JPATH_ROOT&#039; [, string $lang = null [, bool $reload = false [, bool $default = true ]]]]] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `extension` | `string` | The extension for which a language file should be loaded. Defaults to `'joomla'`. |
| `basePath` | `string` | The basepath to use. Defaults to `'JPATH_ROOT'`. |
| `lang` | `string` | The language to load, default null for the current language. Defaults to `null`. |
| `reload` | `bool` | Flag that will force a language to be reloaded if set to true. Defaults to `false`. |
| `default` | `bool` | Flag that force the default language to be loaded if the current does not exist. Defaults to `true`. |

##### Return Values

`bool` True if the file has successfully loaded.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Loads a single language file and appends the results to the existing strings
 *
 * @param   string   $extension  The extension for which a language file should be loaded.
 * @param   string   $basePath   The basepath to use.
 * @param   string   $lang       The language to load, default null for the current language.
 * @param   boolean  $reload     Flag that will force a language to be reloaded if set to true.
 * @param   boolean  $default    Flag that force the default language to be loaded if the current does not exist.
 *
 * @return  boolean  True if the file has successfully loaded.
 *
 * @since   1.0
 */
public function load(string $extension = 'joomla', string $basePath = 'JPATH_ROOT', string $lang = null, bool $reload = false, bool $default = true) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::loadLanguage`

Loads a language file.

This method will not note the successful loading of a file - use load() instead.

##### Signature

```php
protected Joomla\Language\Language::loadLanguage ( string $filename [, string $extension = &#039;unknown&#039; ] ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | The name of the file. |
| `extension` | `string` | The name of the extension. Defaults to `'unknown'`. |

##### Return Values

`bool` True if new strings have been added to the language

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Loads a language file.
 *
 * This method will not note the successful loading of a file - use load() instead.
 *
 * @param   string  $filename   The name of the file.
 * @param   string  $extension  The name of the extension.
 *
 * @return  boolean  True if new strings have been added to the language
 *
 * @see     Language::load()
 * @since   1.0
 */
protected function loadLanguage(string $filename, string $extension = 'unknown') : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::parse`

Parses a language file.

##### Signature

```php
protected Joomla\Language\Language::parse ( string $filename  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `filename` | `string` | The name of the file. |

##### Return Values

`array` The array of parsed strings.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parses a language file.
 *
 * @param   string  $filename  The name of the file.
 *
 * @return  array  The array of parsed strings.
 *
 * @since   1.0
 * @note    As of 2.0, this method will no longer support parsing _QQ_ into quotes
 */
protected function parse(string $filename) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::get`

Get a metadata language property.

##### Signature

```php
public Joomla\Language\Language::get ( string $property [, mixed $default = null ] ) : mixed
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
 * Get a metadata language property.
 *
 * @param   string  $property  The name of the property.
 * @param   mixed   $default   The default value.
 *
 * @return  mixed  The value of the property.
 *
 * @since   1.0
 */
public function get(string $property, mixed $default = null) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getCallerInfo`

Determine who called Language or Text.

##### Signature

```php
protected Joomla\Language\Language::getCallerInfo ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` Caller information.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determine who called Language or Text.
 *
 * @return  array  Caller information.
 *
 * @since   1.0
 */
protected function getCallerInfo() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getName`

Getter for Name.

##### Signature

```php
public Joomla\Language\Language::getName ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` Official name element of the language.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Getter for Name.
 *
 * @return  string  Official name element of the language.
 *
 * @since   1.0
 */
public function getName() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getPaths`

Get a list of language files that have been loaded.

##### Signature

```php
public Joomla\Language\Language::getPaths ( [ string $extension = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `extension` | `string` | An optional extension name. Defaults to `null`. |

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
 * Get a list of language files that have been loaded.
 *
 * @param   string  $extension  An optional extension name.
 *
 * @return  array
 *
 * @since   1.0
 */
public function getPaths(string $extension = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getErrorFiles`

Get a list of language files that are in error state.

##### Signature

```php
public Joomla\Language\Language::getErrorFiles ( void ) : array
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
 * Get a list of language files that are in error state.
 *
 * @return  array
 *
 * @since   1.0
 */
public function getErrorFiles() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getTag`

Getter for the language tag (as defined in RFC 3066)

##### Signature

```php
public Joomla\Language\Language::getTag ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The language tag.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Getter for the language tag (as defined in RFC 3066)
 *
 * @return  string  The language tag.
 *
 * @since   1.0
 */
public function getTag() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::isRtl`

Get the RTL property.

##### Signature

```php
public Joomla\Language\Language::isRtl ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True is it an RTL language.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the RTL property.
 *
 * @return  boolean  True is it an RTL language.
 *
 * @since   1.0
 */
public function isRtl() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::setDebug`

Set the Debug property.

##### Signature

```php
public Joomla\Language\Language::setDebug ( bool $debug  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `debug` | `bool` | The debug setting. |

##### Return Values

`bool` Previous value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the Debug property.
 *
 * @param   boolean  $debug  The debug setting.
 *
 * @return  boolean  Previous value.
 *
 * @since   1.0
 */
public function setDebug(bool $debug) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getDebug`

Get the Debug property.

##### Signature

```php
public Joomla\Language\Language::getDebug ( void ) : bool
```
##### Parameters

This method has no parameters.

##### Return Values

`bool` True is in debug mode.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the Debug property.
 *
 * @return  boolean  True is in debug mode.
 *
 * @since   1.0
 */
public function getDebug() : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getDefault`

Get the default language code.

##### Signature

```php
public Joomla\Language\Language::getDefault ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` Language code.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the default language code.
 *
 * @return  string  Language code.
 *
 * @since   1.0
 */
public function getDefault() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::setDefault`

Set the default language code.

##### Signature

```php
public Joomla\Language\Language::setDefault ( string $lang  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `string` | The language code. |

##### Return Values

`string` Previous value.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Set the default language code.
 *
 * @param   string  $lang  The language code.
 *
 * @return  string  Previous value.
 *
 * @since   1.0
 */
public function setDefault(string $lang) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getOrphans`

Get the list of orphaned strings if being tracked.

##### Signature

```php
public Joomla\Language\Language::getOrphans ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` Orphaned text.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the list of orphaned strings if being tracked.
 *
 * @return  array  Orphaned text.
 *
 * @since   1.0
 */
public function getOrphans() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getUsed`

Get the list of used strings.

Used strings are those strings requested and found either as a string or a constant.

##### Signature

```php
public Joomla\Language\Language::getUsed ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` Used strings.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the list of used strings.
 *
 * Used strings are those strings requested and found either as a string or a constant.
 *
 * @return  array  Used strings.
 *
 * @since   1.0
 */
public function getUsed() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::hasKey`

Determines is a key exists.

##### Signature

```php
public Joomla\Language\Language::hasKey ( string $string  ) : bool
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `string` | `string` | The key to check. |

##### Return Values

`bool` True, if the key exists.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Determines is a key exists.
 *
 * @param   string  $string  The key to check.
 *
 * @return  boolean  True, if the key exists.
 *
 * @since   1.0
 */
public function hasKey(string $string) : bool{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getMetadata`

Returns a associative array holding the metadata.

##### Signature

```php
public static Joomla\Language\Language::getMetadata ( string $lang  ) : mixed
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `lang` | `string` | The name of the language. |

##### Return Values

`mixed` If $lang exists return key/value pair with the language metadata, otherwise return NULL.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a associative array holding the metadata.
 *
 * @param   string  $lang  The name of the language.
 *
 * @return  mixed  If $lang exists return key/value pair with the language metadata, otherwise return NULL.
 *
 * @since   1.0
 */
public static function getMetadata(string $lang) : mixed{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getKnownLanguages`

Returns a list of known languages for an area

##### Signature

```php
public static Joomla\Language\Language::getKnownLanguages ( [ string $basePath = &#039;JPATH_ROOT&#039; ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `basePath` | `string` | The basepath to use Defaults to `'JPATH_ROOT'`. |

##### Return Values

`array` key/value pair with the language file and real name.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Returns a list of known languages for an area
 *
 * @param   string  $basePath  The basepath to use
 *
 * @return  array  key/value pair with the language file and real name.
 *
 * @since   1.0
 */
public static function getKnownLanguages(string $basePath = 'JPATH_ROOT') : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getLanguagePath`

Get the path to a language

##### Signature

```php
public static Joomla\Language\Language::getLanguagePath ( [ string $basePath = &#039;JPATH_ROOT&#039; [, string $language = null ]] ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `basePath` | `string` | The basepath to use. Defaults to `'JPATH_ROOT'`. |
| `language` | `string` | The language tag. Defaults to `null`. |

##### Return Values

`string` language related path or null.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the path to a language
 *
 * @param   string  $basePath  The basepath to use.
 * @param   string  $language  The language tag.
 *
 * @return  string  language related path or null.
 *
 * @since   1.0
 */
public static function getLanguagePath(string $basePath = 'JPATH_ROOT', string $language = null) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getLanguage`

Get the current language code.

##### Signature

```php
public Joomla\Language\Language::getLanguage ( void ) : string
```
##### Parameters

This method has no parameters.

##### Return Values

`string` The language code

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the current language code.
 *
 * @return  string  The language code
 *
 * @since   1.0
 */
public function getLanguage() : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::setLanguage`

Set the language attributes to the given language.

Once called, the language still needs to be loaded using Language::load().

This method has been deprecated and gets removed in version 2.0. 
.

Does not need to be replaced.

#### `Joomla\Language\Language::getLocale`

Get the language locale based on current language.

##### Signature

```php
public Joomla\Language\Language::getLocale ( void ) : array
```
##### Parameters

This method has no parameters.

##### Return Values

`array` The locale according to the language.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the language locale based on current language.
 *
 * @return  array  The locale according to the language.
 *
 * @since   1.0
 */
public function getLocale() : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::getFirstDay`

Get the first day of the week for this language.

##### Signature

```php
public Joomla\Language\Language::getFirstDay ( void ) : int
```
##### Parameters

This method has no parameters.

##### Return Values

`int` The first day of the week according to the language

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Get the first day of the week for this language.
 *
 * @return  integer  The first day of the week according to the language
 *
 * @since   1.0
 */
public function getFirstDay() : int{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::parseLanguageFiles`

Searches for language directories within a certain base dir.

##### Signature

```php
public static Joomla\Language\Language::parseLanguageFiles ( [ string $dir = null ] ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `dir` | `string` | directory of files. Defaults to `null`. |

##### Return Values

`array` Array holding the found languages as filename => real name pairs.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Searches for language directories within a certain base dir.
 *
 * @param   string  $dir  directory of files.
 *
 * @return  array  Array holding the found languages as filename => real name pairs.
 *
 * @since   1.0
 */
public static function parseLanguageFiles(string $dir = null) : array{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Language::parseXmlLanguageFile`

Parse XML file for language information.

##### Signature

```php
public static Joomla\Language\Language::parseXmlLanguageFile ( string $path  ) : array
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `path` | `string` | Path to the XML files. |

##### Return Values

`array` Array holding the found metadata as a key => value pair.

##### Errors/Exceptions

Throws RuntimeException <br />

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Parse XML file for language information.
 *
 * @param   string  $path  Path to the XML files.
 *
 * @return  array  Array holding the found metadata as a key => value pair.
 *
 * @since   1.0
 * @throws  \RuntimeException
 */
public static function parseXmlLanguageFile(string $path) : array{
    // @todo Add adapter code.
}
```

## The Joomla\Language\Stemmer\Porteren Class

Porter English stemmer class.

This class was adapted from one written by Richard Heyes.
See copyright and link information above.

### Properties

| Property | Type | Description |
|----------|------|-------------|
| protected `$cache` | `array` | An internal cache of stemmed tokens. |
| protected static `$instances` | `Joomla\Language\Stemmer\Stemmer[]` | Stemmer instances. |    
### Methods

#### `Joomla\Language\Stemmer\Porteren::stem`

Stem a token and return the root.

##### Signature

```php
public Joomla\Language\Stemmer\Porteren::stem ( string $token, string $lang  ) : string
```
##### Parameters

| Parameter | Type | Description |
|----------|------|-------------|
| `token` | `string` | The token to stem. |
| `lang` | `string` | The language of the token. |

##### Return Values

`string` The root token.

##### Errors/Exceptions

No errors or exceptions are thrown.

##### Examples

##### Drop-In Adapter

The drop-in adapter has the same signature as the original  method,
but leverages the corresponding Laravel package behind the scene.
 
```php
/**
 * Stem a token and return the root.
 *
 * @param   string  $token  The token to stem.
 * @param   string  $lang   The language of the token.
 *
 * @return  string  The root token.
 *
 * @since   1.0
 */
public function stem(string $token, string $lang) : string{
    // @todo Add adapter code.
}
```
#### `Joomla\Language\Stemmer\Porteren::getInstance`

Get a stemmer, creating it if necessary.

This method has been deprecated and gets removed in version 2.0. 
Use LanguageFactory::getStemmer() instead.

Does not need to be replaced.
