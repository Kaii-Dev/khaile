<?php
class StudentModel {
    public $id;
    public $name;
    public $major;
    public $age;

    // $data la mot array
    function __construct($data) {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->major = $data['major'];
        $this->age = $data['age'];
    }

}