# Code Samples

This directory contains code samples for

* integration in the documentation
* auto-generation of compatibility tests

## General structure

```php
/**
 * Title
 *
 * @covers Namespace\Class::method
 */

require_once 'path/to/vendor/autoload.php';

// use statements, if any

// sample code

print_r($testVar);
```

The title is used as a section header in the documentation and as a `@testdox` hint
in generated tests.

The `@covers` hint defines to which part of the documentation this code sample belongs.

Requiring the composer generated autoload file makes it possible to run the code sample
during development. It is removed, when integrated into the documentation or a test.

`use` statements declare the classes utilised in the code sample and optionally
assign aliases. They are included in the documentation and moved into an appropriate
position in test files.

The `print_r($testvar);` statement outputs the result when running the code sample
during development. For documentation use, the statement gets removed. For 
compatibility tests, it defines the test variable to compare with the result of
the corresponding replacement implementation.
