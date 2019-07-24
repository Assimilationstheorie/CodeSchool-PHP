# :books: Arrays

> Ein Korb voller Früchte...

### :four_leaf_clover: Ausgabe eines Elementes
```sh
<?php
  $obst = ["Apfel", "Birne", "Kirsche"];
  echo $obst[0]; // Ausgabe: Apfel
?>
```

---

### :four_leaf_clover: Foreach-Schleife
```sh
<?php
  $obst = ["Apfel", "Birne", "Kirsche", "Zitronen"];
  foreach($obst as $frucht) {
    echo $frucht . " "; // Ausgabe: Apfel Birne Kirsche
  }
?>
```
Mit einer Foreach-Schleife kann man sehr einfach alle Werte (Values) eines Arrays ausgeben.

---

### :four_leaf_clover: Array als Konstante
```sh
<?php
  define('TIERE', [
    'Katze',
    'Hund',
    'Vogel'
  ]);

  echo TIERE[2]; // Ausgabe: Vogel
?>
```
Ab PHP7 können die Arrays nun die define()-Funktion benutzen und nicht mehr "const";

---

### :four_leaf_clover: Random Array + Array als Konstante
```sh
<?php
  define('TIERE', [
    'Katze',
    'Hund',
    'Vogel'
  ]);

  $index = array_rand(TIERE);
  echo TIERE[$index]; // Katze, Hund oder Vogel
?>
```
Wir definieren eine Array-Konstante mit Tieren. array_rand() gibt einen "zufälligen" Key aus dem Array (also 0, 1 oder 2) und mit "TIERE[0, 1 oder 2];" geben wir ein Array-Value aus. 

---

### :four_leaf_clover: Items in einem Array summieren
```sh
<?php
  $numbers = [1, 2, 3, 4, 5];
  echo array_sum($numbers); // 15
?>
``` 

---

### :four_leaf_clover: Schlüssel bei einigen Elementen anzugeben und bei anderen auszulassen:
```sh
<?php
  $array = [
   "a", "b", 6 => "c", "d"
  ];
  var_dump($array); // array(4) { [0]=> string(1) "a" [1]=> string(1) "b" [6]=> string(1) "c" [7]=> string(1) "d" }
?>
``` 

---

### :four_leaf_clover: Beispiel eines Arrays mit String, Int und der Verschachtelung:
```sh
<?php
  $array = [
      "dieeins" => "dieeins",
      2 => 2,
      "multi" => [
           "dimensional" => [
               "array" => "multidimensionalarray"
           ]
      ]
  ];

  var_dump($array["dieeins"]); // string(7) "dieeins"
  var_dump($array[2]); // int(2)
  var_dump($array["multi"]["dimensional"]["array"]); // string(21) "multidimensionalarray"
  // Komplette Ausgabe: string(7) "dieeins" int(2) string(21) "multidimensionalarray"
?>
``` 

---
