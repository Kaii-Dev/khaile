<?php
class ThuongHieuModel {

    public $id;
    public $name;
    public $code;

    // $data la mot array
    function __construct($data) {
        $this->id = $data['TH_ID'];
        $this->name = $data['TH_TEN'];
        $this->code = $data['TH_CODE'];
    }

}