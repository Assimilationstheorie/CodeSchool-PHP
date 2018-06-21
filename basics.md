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

### :four_leaf_clover: Arrays

Ein Array ist eine geordnete Liste. Eine Liste kann Zahlen (Integer) und Texte (Strings) enthalten. Tatsächlich ist ein Array eine Map. Eine Map ist ein Typ, der Werte (Values) zu Schlüsseln (Keys) zuordnet.

```sh
<?php
  $tage = ["Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag"];
?>
```
Ein Arrays mit Wochentagen. Möchte man nun auf einen Tag zugreifen, so muss der Schlüssel angesprochen werden! Jeder Wert hat inkrementel einen Schlüssel zugeordnet! Beginnend ab 0!

---

```sh
<?php
  $tage = ["Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag", "Sonntag"];
  echo $tage[0]; // Ausgabe: Montag
?>
```
Ein einfaches Array beginnt immer mit dem Schlüssel (Key) 0. Somit gibt das "echo $tage[0];" auch Montag aus.

---

```sh
<?php
  $zahlen = [1, 2, 3, 4, 5];
  echo $zahlen[2]; // Ausgabe: 3
?>
```
Selbstverständlich können so auch Zahlen ausgegeben werden!
