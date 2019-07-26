# :books: Typ-Operatoren

> Energie!

### :four_leaf_clover: instanceof
```sh
<?php
  class MyClass { /**/ }

  class NotMyClass{ /**/ }
  
  $a = new MyClass;

  var_dump($a instanceof MyClass); // bool(true)
  var_dump($a instanceof NotMyClass); //bool(false)
?>
```
instanceof wird dazu verwendet um festzustellen, ob ein gegebenes Objekt ein Objekt ist, das zu einer bestimmten Klasse gehört.

---

### :four_leaf_clover: instanceof mit ererbten Klassen
```sh
<?php
  class ParentClass { /**/ }

  class MyClass extends ParentClass { /**/ }

  $a = new MyClass;

  var_dump($a instanceof MyClass); // bool(true)
  var_dump($a instanceof ParentClass); // bool(true)
?>
```
instanceof kann auch verwendet werden, um zu bestimmen, ob ein Variable ein Exemplar einer Klasse ist, die von einer Elternklasse erbt.

---

### :four_leaf_clover: instanceof & "nicht Operator"
```sh
<?php
  class MyClass { /**/ }

  $a = new MyClass;
  var_dump(!($a instanceof stdClass)); // bool(true) - Da die Variable $a KEIN Exemplar der Klasse stdClass ist.
  var_dump(!($a instanceof MyClass)); // bool(false) - Das ist "false", weil $a die Instanz von MyClass ist.
?>
```
Um zu prüfen, ob ein Objekt nicht ein Exemplar einer Klasse ist, kann der logische "nicht Operator" verwendet werden.

# :zap: Protipp!
```sh
<?php
  class EineTolleKlasse { /**/ }
  $data = new EineTolleKlasse();
  echo "Der Name der Klasse ist " , get_class($data);
  // Der Name der Klasse ist EineTolleKlasse
?>
```
So kann der Klassenname ermittelt werden.

---
