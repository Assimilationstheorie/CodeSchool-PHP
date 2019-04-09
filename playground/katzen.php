<?php
class Katzen
{
  private CONST numbers = [
    'min' => 1,
    'max' => 31
  ];

  private CONST items = [
    'kat' => 3,
    'zen' => 5,
    'katzen'
  ];

  public function sayHello()
  {
    for($i=$this->giveNumbers()['min']; $i < $this->giveNumbers()['max']; $i++) {
      $this->calculate($i);
    }
  }

  private function calculate($i)
  {
    //Durch 3
    if(!is_double($i / $this->giveItems()['kat']) && $this->calculateKatzen($i) == FALSE) {
      echo array_search($this->giveItems()['kat'], $this->giveItems()) ." ";
      return true;
    }

    //Durch 5
    if(!is_double($i / $this->giveItems()['zen']) && $this->calculateKatzen($i) == FALSE) {
      echo array_search($this->giveItems()['zen'], $this->giveItems()) . " ";
      return true;
    }

    //Durch 3 und 5
    if($this->calculateKatzen($i) == TRUE) {
      echo $this->giveItems()[0] . " ";
      return true;
    }
    echo $i . " ";
  }

  private function calculateKatzen($i)
  {
    if(!is_double($i / $this->giveItems()['kat']) && !is_double($i / $this->giveItems()['zen']) ) {
      return true;
    }
  }

  private function giveNumbers()
  {
    return self::numbers;
  }

  private function giveItems()
  {
    return self::items;
  }
}

$parship = new Katzen();
$parship->sayHello();

//Ausgabe: 1 2 kat 4 zen kat 7 8 kat zen 11 kat 13 14 katzen 16 17 kat 19 zen kat 22 23 kat zen 26 kat 28 29 katzen
