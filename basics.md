# :books: Basics

> Wir fangen bei Buch Mose an...

### :four_leaf_clover: Einfache Ausgabe
```sh
<?php
  echo "Hallo Welt?";
?>
```
Gibt Hallo Welt aus. Variablen und Zahlen werden ohne "" geschrieben!

---

```sh
Ich habe einen <?="Apfel"?>
```
Die kurze Schreibweise.

---

```sh
<?php
  echo "Diese Ausgabe geht über
  mehrere Zeilen. Verstehst du das?";
?>
```
Für mehr Übersicht sorgt das Schreiben in mehreren Zeilen.

---

### :four_leaf_clover: Variablen

```sh
<?php
  $name = "Konny";
?>
```
Eine einfache Variable mit einem String als Wert.

---

```sh
<?php
  $name = ["Konny", "Tim", 2];
?>
```
Eine Variable, die einen Array als Wert hat.

---

```sh
<?php
  $obst = "Apfel";
  echo $obst;
?>
```
So kann eine Variable ausgegeben.

---

```sh
<?php
  $obst = "Apfel";
  $gemuese =& $obst;
  echo $gemuese; //Ausgabe: Apfel
?>
```
Die Variable $gemuese verweist nun auf den selben Inhalt wie $obst.
