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

$f3->route('GET|POST /survey', function ($f3)
{
    $questions = array('question1' => "This midterm is easy", 'questions2'=>'I like midterms', 'question3' =>
        'Today is monday');
    $f3->set('question', $questions);

    if($_SERVER['REQUEST_METHOD'] =='POST') {
        $_SESSION[name] = $_POST['name'];
        $_SESSION['checkboxes'] = $_POST['questions'];

        $f3->reroute('summary');
    }
    $view = new Template();
    echo $view->render('views/survey.html');
}
);


$f3->route('GET /summary', function ($f3)
{
    $view = new Template();
    echo $view->render('views/summary.html');
}
);

//run fat free
$f3->run();
?>