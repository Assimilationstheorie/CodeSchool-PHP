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
instanceof kann auch verwendet werden, um zu bestimmen, ob ein Variable ein Exemplar einer Klasse ist, die von einer Elternklasse erbt


