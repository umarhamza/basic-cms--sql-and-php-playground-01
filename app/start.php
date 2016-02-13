<?php

// display_errors
ini_set('display_errors', 'On');

// define the root of our app
define('APP_ROOT', __DIR__);

// define the root of our views
define('VIEW_ROOT', APP_ROOT . '/views');

//set the base url
define('BASE_URL', 'http://localhost/repos/projects/playground/basic-cms--sql-and-php-playground-01');

// connect to our database
$db = new PDO('mysql:host=localhost; dbname=cms', 'root', '');

// call in functions
require 'functions.php';

?>
