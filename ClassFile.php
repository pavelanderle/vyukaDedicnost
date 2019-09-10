<?php
class Obdelnik{

  private $stranaA;
  private $stranaB;

  public function __construct($a,$b){
      // TODO: code
  }

  // TODO: gettry

  // TODO: settry

  public function uhlopricka(){
      // TODO: code
    }
}

class Kvadr extends Obdelnik{

  private $stranaC;

  // TODO: gettry

  // TODO: settry

  public function __construct($a,$b,$c){
    parent::__construct($a,$b);
      $this->stranaC;
    }

  public function uhlopricka(){
    $uhloprickaStrana = parent::uhlopricka();
    return sqrt($uhloprickaStrana*$uhloprickaStrana+$this->stranaC*$this->stranaC);
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

$obdelnik1 = new Obdelnik(4,4);
echo $obdelnik1->uhlopricka();
 ?>
