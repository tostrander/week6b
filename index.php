<?php
//This is my CONTROLLER

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require('model/data-layer.php');

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function($f3) {
    //echo "<h1>Week 6</h1>";

    //Save data to the "hive"
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67);
    $f3->set('color', 'purple');

    $fruits = array('apple', 'orange', 'banana');
    $f3->set('fruits', $fruits);

    $f3->set('desserts', getDesserts());

    //Display a list of radio buttons containing colors
        //Define a function in your model that returns an array of colors
        //Add the data to F3 hive
        //Display buttons in view page
    $f3->set('colors', getColors());

    $view = new Template();
    echo $view->render('views/info.html');
});

//Run fat-free
$f3->run();
