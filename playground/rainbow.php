<?php
//Das Interface für die Klasse Rainbow
interface RainbowInterface
{
  public function generateColor();
}

//Ein Trait mit der Methode "generateColor", der benutzt werden kann um eine Zahl zu generieren
trait generateColor
{
  private $min = 000;
  private $max = 999;

  public function generateColor() {
    return rand($this->min, $this->max);
  }
}

//Abstrakte Klasse, die "showColor" von den Kindklassen erzwingt
abstract class Base
{
  abstract public function showColor(int $color);
}

//Rainbow...
class Rainbow extends Base implements RainbowInterface
{
  use generateColor;

  //Hier könnte man noch die generierten Zahlen manipulieren.
  public function showColor(int $color)
  {
    return $color;
  }
}
$rainbow = new Rainbow(); ?>

<!--Ein wenig HTML -->
<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Playground</title>
    <style>
      body {
        background-color: #<?php echo $rainbow->showColor($rainbow->generateColor()); ?>
      }
      h3 {
        color: #<?php echo $rainbow->showColor($rainbow->generateColor()); ?>;
      }
    </style>
  </head>
  <body>
    <h3>
      Hallo Freunde!
    </h3>
  </body>
</html>
