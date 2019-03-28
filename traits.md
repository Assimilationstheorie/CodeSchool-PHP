# :ghost: Traits

> Recycling...

### :four_leaf_clover: Was sind Traits?
```sh
<?php
trait eineWichtigeInfo {
  function returnType() { /* CODE */ }
  function returnBeschreibung() { /* CODE*/ }
}
?>
```

Eine Methode der Wiederverwendung von Code, Traits genannt. Traits sind ein Mechanismus zur Wiederverwendung von Code, der in Programmiersprachen mit einfacher Vererbung verwendet wird.  Es ist nicht möglich einen Trait alleinstehend zu instantiieren. Es handelt sich um einen Zusatz zur traditionellen Vererbung.

### :four_leaf_clover: Ein Beispiel...

```sh
<?php
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'Welt!';
    }
}

class Base {
    public function sayHello() {
        echo 'Hallo ';
    }
}

class MyHelloWorld extends Base {
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
```

Die Klasse "MyHelloWorld" erbt von der Klasse "Base" und bindet den Trait "SayWorld" ein. Die Variable "$o" instanziiert ein Objekt und ruft die Methode "sayHello()" (die in dem Trait zu finden ist!) auf.
Die Methode "sayHello()" in dem Trait, die mit der Einbindung "use" in der Kindklasse "MyHelloWorld" stattfindet, kann somit auf die Elternklasse zugreifen (weil von dieser ja geerbt wird) und hat somit die Möglichkeit die Methode "sayHello" der "Base"-Klasse aufzurufen.
Da in der Reihnfolge zuerst die Methode der Elternklasse aufgerufen wird und danach die im Trait, wird "Hallo Welt!" ausgegeben.
