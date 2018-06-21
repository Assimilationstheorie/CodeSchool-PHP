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
  echo $obst; // Ausgabe: Apfel
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

### :four_leaf_clover: Assoziative Arrays

Bei sehr vielen Werten in einem Array, wird eine inkrementele Zuweisung von Keys zum Problem. Eine Zählung von Werten ist zwar mit einer Ausgabe von "var_dump()" trotzdem nicht notwendig, schöner ist es aber, wenn man einen bestimmten Wert ausgeben kann.

```sh
<?php
  $tage = [
  "Mo" => "Montag",
  "Di" => "Dienstag",
  "Mi" => "Mittwoch",
  "Do" => "Donnerstag",
  "Fr" => "Freitag",
  "Sa" => "Samstag",
  "So" => "Sonntag"
  ];
  echo $tage["Mi"]; // Ausgabe: Mittwoch
?>
```
So wird ein assoziatives Arrays geschrieben und ausgegeben.

---

```sh
<?php
  $people = [
  "Friend" => "Me",
  "Enemy" => "You",
  "Unknown" => "The Cat"
  ];
  $people["Friend"] = "The Dog";
  echo $people["Friend"]; // Ausgabe: The Dog
?>
```
Einträge in einem Array lassen sich ändern, wenn man einen Array-Key einen neuen Wert zuweist.

---

```sh
<?php
  $people = [
  "Friend" => "Me",
  "Enemy" => "You",
  "Unknown" => "The Cat"
  ];
  $people["BestFriend"] = "The Dog";
  echo "<pre>";
  var_dump($people);
  echo "</pre>";

  /* Ausgabe
  array(4) {
    ["Friend"]=> string(2) "Me"
    ["Enemy"]=> string(3) "You"
    ["Unknown"]=> string(7) "The Cat"
    ["BestFriend"]=> string(7) "The Dog"
  }
  */
?>
```
Es lassen sich auch Werte zum Array hinzufügen.
