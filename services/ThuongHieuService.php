<?php

include_once dirname(__DIR__).'/dao/ThuongHieuDAO.php';

class ThuongHieuService {

    public static function findAll() {
        return ThuongHieuDAO::findAll();
    }

    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}