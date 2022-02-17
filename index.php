<?php

//session_start();


//$_SESSION['name'] = 'BITM';
//$_SESSION['city'] = 'Dhaka';
//$_SESSION['country'] = 'Bangladesh';
//$_SESSION['mobile'] = '012345678';


require_once 'vendor/autoload.php';

use App\classes\Home;
use App\classes\Student;

//$home = new Home();
//$home->index();

$student = new Student();
$student->manage();