# :fire: Opreatoren

> Was nicht passt....

### :four_leaf_clover: Was sind Vergleichs-Operatoren?

Vergleichs-Operatoren erlauben es – wie der Name schon sagt – zwei Werte zu vergleichen. 

```sh
<?php
  $a == $b // Gibt TRUE zurück, wenn $a gleich $b ist
?>
```

### :four_leaf_clover: Null-Coalescing-Operator

Im Beispiel: Der Wert von "$_POST['action']" wird ausgegeben wenn es existiert und nicht NULL ist. 
```sh
<?php
  $action = $_POST['action'] ?? 'standard';
?>
```
ist wie:
```sh
<?php
  if (isset($_POST['action'])) {
    $action = $_POST['action'];
  } else {
    $action = 'standard';
  }
?>
```
