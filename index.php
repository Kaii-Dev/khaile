<?php
include_once './services/ThuongHieuService.php';
include_once './services/SanPhamService.php';

$ds_thuonghieu = ThuongHieuService::findAll();
$ds_sanpham = SanPhamService::findAll();

include './views/homepage.php';