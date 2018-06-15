<?php
$eins = function() {
  return 'Ganz einfach.';
};
echo $eins(); //Ganz einfach.

echo '<br>';

$zwei = function() {
  return ['Apfel', 'Birne', 'Milch'];
};
echo $zwei()[1]; //Birne

echo '<br>';

$drei = function(string $param) {
  return 'Hallo ' . $param . '.';
};
echo $drei("Tim"); // Hallo Tim.

echo '<br>';

$welcome = 'Willkommen';
$vier = function(string $name) use ($welcome) {
  return $welcome . ' ' . $name . '.';
};
echo $vier('Konny'); // Willkommen Konny.

echo '<br>';

$info = 'Die Auswertung ergab: ';
$sechs = function($name) use ($info) {
  $names = [
    'freund' => 'Konny',
    'feind' => 'Tim',
    'unbekannt' => 'John'
  ];

  return $info . $name . ' = ' . ucfirst(array_search($name, $names));
};
echo $sechs("Konny"); // Die Auswerung ergab: Konny = Freund
