<?php
/**
 * @author Michael Britt
 * Date: 4/10/2019
 * A basic php index page calling the home page for a dating website
 * Includes the set up of our fate free framework
 */


//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload file
require_once('vendor/autoload.php');
//create an instance of the base class
$f3 = Base::instance();

//session starts
session_start();

$f3->route('GET /', function ()
{
    echo'<h1>Midterm Survey</h1>';
    echo'<a href="survey">Take my Midterm Survey</a>';
}
);

//run fat free
$f3->run();
?>