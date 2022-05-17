<?php

define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'admin');
define('DB_NAME', 'web_dev_php');

$mysql = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($mysql->connect_error) {
    die("Connection error: {$mysql->connect_error}");
}