<?php
/**
 * Direct instantiation with default parameters
 *
 * @covers  Joomla\Http\Http::__construct
 */

require_once dirname(__DIR__, 4) . '/vendor/autoload.php';

use Joomla\Http\Http;

$http = new Http();

$response = $http->get('https://jsonplaceholder.typicode.com/posts/1');

print_r($response);
