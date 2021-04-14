<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/ThuongHieuModel.php';

class ThuongHieuDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listStudent = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listStudent, new ThuongHieuModel($row));
        }

        return $listStudent;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new ThuongHieuModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findAll() {
        $sql = "SELECT * FROM THUONG_HIEU";
        return ThuongHieuDAO::queryAll($sql);
    }
    
}
