<?php

ob_start();
session_start();

defined("DS") ? null: define('DS', DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null: define('TEMPLATE_FRONT',__DIR__ . DS . 'templates/front');
defined("TEMPLATE_BACK") ? null: define('TEMPLATE_BACK',__DIR__ . DS . 'templates/back');
$db['db_host'] = "localhost:8889";
$db['db_creds'] = "root";
$db['name'] = 'ecommerce';

foreach($db as $key => $value) {
    define(strtoupper($key), $value);
};


$connection = mysqli_connect(DB_HOST,DB_CREDS,DB_CREDS,NAME); 
if(!$connection) {
    die('Error Accessing the Database');
}
require_once('functions.php');

?>