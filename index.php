<?php

// 328/hello-fat-free/index.php
// This is my CONTROLLER!

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require autoload.php
require_once ('vendor/autoload.php');

// Instantiate the F3 base class
$f3 = Base::instance();

// Define a default route
$f3->route('GET /', function() {
   echo '<h1>Hello Fat-Free!</h1>';
});

// Run Fat-Free
$f3->run();