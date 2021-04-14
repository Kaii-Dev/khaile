<?php

include_once 'dbconnect.php';

include_once './models/StudentModel.php';

class StudentDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listStudent = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listStudent, new StudentModel($row));
        }

        return $listStudent;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new StudentModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findById($id) {
        $sql = "SELECT * FROM student WHERE id = $id";
        return StudentDAO::queryTop($sql);
    }

    public static function findAll() {
        $sql = "SELECT * FROM student";
        return StudentDAO::queryAll($sql);
    }

    public static function findAllLimit($limit, $offset) {
        $sql = "SELECT * FROM student LIMIT $limit OFFSET $offset";
        return StudentDAO::queryAll($sql);
    }

    public static function findAllByIds($listId) {
        $result = array();
        foreach ($listId as $id) {
            $student = StudentDAO::findById($id);

            if ($student != null) {
                array_push($result, $student);
            }
        }
        return result;
    }

    // findAllOrderBy

    // findAllByUsernameAndPassword


    // insertHoadon()

    // updateHoadon()

}
