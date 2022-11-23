<?php


include_once './vendor/autoload.php';

use Arif\Controllers\Student;

$studentObj = new Student();
$studentObj->destroy($_GET['id']);
header('Location: ./index.php');


// echo 'delete';
// session_start();

// $students = $_SESSION['students'];
// $id = $_GET['id'];

// foreach ($students as $key => $student) {
//     if ($student['id'] == $id) {
//         unset($_SESSION['students'][$key]);
//     }
// }

// header('Location: ./index.php'); 
