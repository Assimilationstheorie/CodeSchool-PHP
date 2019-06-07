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
