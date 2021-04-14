<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/SanPhamModel.php';

class SanPhamDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listStudent = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listStudent, new SanPhamModel($row));
        }

        return $listStudent;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new SanPhamModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findAll() {
        $sql = "SELECT * FROM SAN_PHAM";
        return SanPhamDAO::queryAll($sql);
    }
    
}
