<?php

include_once 'dbconnect.php';

include_once dirname(__DIR__).'/models/UserModel.php';

class UserDAO {

    private static function queryAll($sql) {
        global $conn;

        $result = $conn->query($sql);

        $listUser = array();

        while ($row = $result->fetch_assoc()) { 
            array_push($listUser, new UserModel($row));
        }

        return $listUser;
    }

    private static function queryTop($sql) {
        
        global $conn;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // thanh cong
            $row = $result->fetch_assoc();
            return new UserModel($row);
        } else {
            // that bai
            return null;
        }

    }

    public static function findById($id) {
        $sql = "SELECT * FROM USER WHERE U_ID = $id";
        return UserDAO::queryTop($sql);
    }

    public static function findAll() {
        $sql = "SELECT * FROM USER";
        return UserDAO::queryAll($sql);
    }

    public static function findAllByEmailAndPassword($email, $password) {
        $sql = "SELECT * FROM USER WHERE U_EMAIL= '$email' AND U_PASSWORD='$password'";
        return UserDAO::queryAll($sql);
    }

    public static function save($user){
        
        global $conn;

        if($user->id ==NULL) {
            $sql= "INSERT INTO USER(U_EMAIL, U_PASSWORD,U_NAME, U_PHONE, U_ADDRESS, U_ROLE) 
                VALUE('$user->email','$user->password','$user->name','$user->phone','$user->address','$user->role')";

            $result = $conn->query($sql); 
            return $result;
        }

        return FALSE;
    }
}