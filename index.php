<?php

session_start();

include_once './services/ThuongHieuService.php';
include_once './services/SanPhamService.php';

if (isset($_SESSION['user'])){
    $user=$_SESSION['user'];
}


$ds_thuonghieu = ThuongHieuService::findAll();
$ds_sanpham = SanPhamService::findAll();

include './views/homepage.php';