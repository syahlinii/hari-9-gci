<?php
class animal{
    public $legs =4;
    public $cold_blooded ="no";
    public $yell="auooo";
    public $jump="hop-hop";
    public $name;
    public function __construct($name){
     $this->name=$name;     
    }
}