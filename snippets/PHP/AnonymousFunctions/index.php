<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>References</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>

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
