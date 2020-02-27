<?php
class Rectangle{

  private $sideA;
  private $sideB;

  public function __construct($a,$b){
      // TODO: code
  }

  // TODO: gettry

  // TODO: settry

  public function diagonal(){
      // TODO: code
    }
}

class Block extends Rectangle{

  private $sideC;

  // TODO: gettry

  // TODO: settry

  public function __construct($a,$b,$c){
    parent::__construct($a,$b);
      // todo
    }

  public function diagonal(){
    $diagonalSide = parent::diagonal();
    //todo
  }
}

class person{
    private $firstname;
    private $surname;
    private $age;

    public function __construct($fn,$sn,$ag){
        $this->firstname = $fn;
        $this->surname = $sn;
        $this->age = $ag;
    }

    public function getFirstname(){
        return $this->firstname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getAge(){
        return $this->age;
    }

    public function setFirstname($fn){
        $this->firstname = $fn;
    }

    public function setSurname($sn){
        $this->firstname = $sn;
    }

    public function setAge($ag){
        if ($ag>0) $this->age = $ag;
    }

    public function getInfoPerson(){
        echo $this->firstname." ".$this->surname." ".$this->age;
    }
}

// todo class employee extends Person

$obdelnik1 = new Obdelnik(4,4);
echo $obdelnik1->uhlopricka();

//todo create object Block from class Kvadr
//todo use method diagonal from object Kvadr1 
//todo create object employee1 from class Employee
//todo use your methods from object emp1oyee
 ?>
