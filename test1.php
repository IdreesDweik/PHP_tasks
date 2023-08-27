<?php 
class students  {
    protected $name;
    public $age=22;
    protected $gender;
    protected $avarage;

    public function setName($name){
        $this -> name = $name;
        echo "this is the parent class welcome ". $this->name;
    }

    public function getName(){
        echo $this->name;
    }
}

    // $userno = new students();
    // $userno->name = "ahmad";

    $obj = new students();
    $obj -> setName("baidaa<br>");

class user extends students{
    public function setName($name){
        $this->name  =$name;
        echo "this is the sub class welcome ".$this->name;
    }

    public function getAge($age){
        echo $this->age;
    }

    public function getName(){
        echo $this->name;
    }
}

    $obj1 = new user();
    $obj1->setName("yazeed<br>");
    
    // $obj->getName();
    // $obj1->getName();
