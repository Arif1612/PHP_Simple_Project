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
        // echo '<pre>';
        // print_r($_SESSION);
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
