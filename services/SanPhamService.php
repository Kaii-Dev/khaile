<?php

include_once dirname(__DIR__).'/dao/SanPhamDAO.php';

class SanPhamService {

    public static function findAll() {
        return SanPhamDAO::findAll();
    }

    // public static function findAll() {
    //     $cthds = CTDH_DAO::findByMaHd($mahd);
    //     ....
    //     $tongtien;

    //     return $tongtien;
    // }

}