  <?php
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        echo 'only post method allowed';
        die();
    }
    // include_once './app/Controllers/Student.php';

    include_once './vendor/autoload.php';

    use Arif\Controllers\Student;

    $studentObj = new Student();
    $studentObj->store($_POST);
    header('Location: ./index.php');


    ?>