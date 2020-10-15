<?php
/**
 * Direct instantiation with specific transport
 *
 * @covers  Joomla\Http\Http::__construct
 */

require_once dirname(__DIR__, 4) . '/vendor/autoload.php';

use Joomla\Http\Http;
use Joomla\Http\Transport\Stream as StreamTransport;

$options   = [];
$transport = new StreamTransport($options);

$http = new Http($options, $transport);

$response = $http->get('https://jsonplaceholder.typicode.com/posts/1');

print_r($response);
