<?php 
class students  {
    protected $name;
    public $age=22;
    protected $gender;
    protected $avarage;


    public function setName($name){
        $this->name  =$name;
        echo "this is the parent class welcome ". $this->name;
    }


    public function getName(){
        echo $this->name;
    }
}

    // $userno = new students();
    // $userno->name = "ahmad";

    $obj=new students();
    $obj->setName("idrees<br>");

class student extends students{
public function setName($name){
    $this->name  =$name;
    echo "this ius the sub class welcome ".$this->name;
}
public function getAge($age){
    echo $this->age;

}
public function getName(){
    echo $this->name;

}
}
$obj1=new student();
$obj1->setName("hussain<br>");
$obj1->getName();
$obj->getName();

?>
