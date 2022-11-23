<?php

namespace Arif\Controllers;

class Student
{
    public $id;
    public $name;

    public function __construct()
    {
        session_start();
    }

    public function store($data)
    {
        $_SESSION['students'][] = $data;
        $_SESSION['message'] = 'Successfully Created';
        // echo '<pre>';
        // print_r($_SESSION);
    }

    public function show($id)
    {
        $students = $_SESSION['students'];
        $studentInfo = null;
        foreach ($students as $key => $student) {
            if ($student['id'] == $id) {
                $studentInfo = ($_SESSION['students'][$key]);
            }
        }

        return ($studentInfo);
    }

    public function destroy($id)
    {
        $students = $_SESSION['students'];
        foreach ($students as $key => $student) {
            if ($student['id'] == $id) {
                unset($_SESSION['students'][$key]);
            }
        }

        $_SESSION['message'] = 'Successfully Deleted';
    }
}
