# Adoption of Laravel HTTP Package for Joomla

## \Joomla\CMS\Http

### Interfaces

#### TransportInterface

HTTP transport class interface.

### Classes

#### Http
HTTP client class.

##### Methods

###### __construct

Constructor.

**Signature**

`__construct(\Joomla\Registry\Registry $options = null, \Joomla\CMS\Http\TransportInterface $transport = null)`

**Arguments**

| `$options` | `\Joomla\Registry\Registry` | Client options object. If the registry contains any headers.* elements, these will be added to the request headers. |
| `$transport` | `\Joomla\CMS\Http\TransportInterface` | The HTTP transport object. |

**Adapter**

```php
public function __construct(\Joomla\Registry\Registry $options = null, \Joomla\CMS\Http\TransportInterface $transport = null)
{
	...
}
```

###### delete

Method to send the DELETE command to the server.

**Signature**

`delete(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

**Adapter**

```php
public function delete(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response
{
	...
}
```

###### get

Method to send the GET command to the server.

**Signature**

`get(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### getOption

Get an option from the HTTP client.

**Signature**

`getOption(string $key) : mixed`

**Arguments**

| `$key` | `string` | The name of the option to get. |

**Response**

`mixed`	The option value.

###### head

Method to send the HEAD command to the server.

**Signature**

`head(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### options

Method to send the OPTIONS command to the server.

**Signature**

`options(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### patch

Method to send the PATCH command to the server.

**Signature**

`patch(string $url, mixed $data, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### post

Method to send the POST command to the server.

**Signature**

`post(string $url, mixed $data, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### put

Method to send the PUT command to the server.

**Signature**

`put(string $url, mixed $data, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$data` | `mixed` | Either an associative array or a string to be sent with the request. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

###### setOption

Set an option for the HTTP client.

**Signature**

`setOption(string $key, mixed $value) : \Joomla\CMS\Http\Http`

**Arguments**

| `$key` | `string` | The name of the option to set. |
| `$value` | `mixed` | The option value to set. |

**Response**

`\Joomla\CMS\Http\Http` This object for method chaining.

###### trace

Method to send the TRACE command to the server.

**Signature**

`trace(string $url, array $headers = null, integer $timeout = null) : \Joomla\CMS\Http\Response`

**Arguments**

| `$url` | `string` | Path to the resource. |
| `$headers` | `array` | An array of name-value pairs to include in the header of the request. |
| `$timeout` | `integer` | Read timeout in seconds. |

**Response**

`\Joomla\CMS\Http\Response`

##### Properties

###### options

Options for the HTTP client.

- Type(s)	`\Joomla\Registry\Registry`

###### transport

The HTTP transport object to use in sending HTTP requests.

- Type(s)	`\Joomla\CMS\Http\TransportInterface`

#### HttpFactory

HTTP factory class.

#### Response

HTTP response data object class.

## `\Joomla\CMS\Http\Transport`

### Classes

#### CurlTransport

HTTP transport class for using cURL.

#### SocketTransport

HTTP transport class for using sockets directly.

#### StreamTransport

HTTP transport class for using PHP streams.

## \Joomla\CMS\Http\Wrapper

### Classes

#### FactoryWrapper

Wrapper class for HttpFactory
