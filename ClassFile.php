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

$obdelnik1 = new Obdelnik(4,4);
echo $obdelnik1->uhlopricka();
 ?>
