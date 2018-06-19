# Anonyme Funktionen

> Ein Mädchen hat keinen Namen...

### Erläuterung
Anonyme Funktionen, auch bekannt als Closures, ermöglichen es Funktionen ohne Funktionsnamen zu schreiben.

---

```sh
<?php
    $hello = function(string $name)
    {
        echo "Hallo " . $name;
    };
    $hello('Konny');
    //Ergibt: Hallo Konny
?>
```
Die Zuweisung einer Closure an eine Variable verwendet die selbe Syntax wie andere Zuweisungen, einschließlich des abschließenden Semikolon.

---

```sh
<?php
    $fruits = function() {
        return ['Apfel', 'Birne', 'Milch'];
    };
    echo $fruits()[1];
    //Ergibt: Birne
?>
```
So können auch Elemente aus einem Array wiedergegeben werden.

---

```sh
<?php
    $welcome = 'Willkommen';
    $hello = function(string $name) use ($welcome) {
        return $welcome . ' ' . $name . '.';
    };
    echo $hello('Konny');
    //Ergibt: Willkommen Konny.
?>
```
Closures können ebenfalls Variablen aus dem Eltern-Gültigkeitsbereich erben. Jede solche Variable muss an das use-Sprachkonstrukt übergeben werden.

---
   
```sh
<?php
    $data = ['Apfel', 'Birne'];
    $addFruit = function(string $fruit) use (&$data) {
        array_push($data, $fruit);
    };
    $addFruit('Kirsche');
    echo $data[2];
    //Ergbit: Kirsche
?>
```
Durch das "&" vor $data in dem use wird eine Referenz erzeugt und diese dann in der anonymen Funktion um den Inthalt des Parameters $fruit erweitert. Somit kann man nach dem Funktionsaufruf auf das 3 Element der Arrays zugreifen.
