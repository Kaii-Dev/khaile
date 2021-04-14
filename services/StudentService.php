<?php

include_once './dao/StudentDAO.php';

class StudentService {

    public static function getOddStudents() {
        $students = StudentDAO::findAll();
        $result = array();
        foreach ($students as $student) {
            if ($student->id % 2 == 1) {
                array_push($result, $student);
            }
        }
        return $result;
    }

    public static function findAll() {
        return StudentDAO::findAll();
    }

    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}