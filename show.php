<?php
include_once './vendor/autoload.php';

use Arif\Controllers\Student;

$studentObj = new Student();
$studentInfo = $studentObj->show($_GET['id']);;
// print_r($studentInfo);

?>
<a href="./index.php"> List</a>
<h1>Details Info </h1>
<p>Student Id: <?= $studentInfo['id'] ?></p>
<p>Student Name: <?= $studentInfo['name'] ?></p>