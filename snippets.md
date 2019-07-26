# :milky_way: Snippets

> NO WAY....

### :four_leaf_clover: Vergleich von zwei Strings, unabhängig von Groß/Kleinschreibung ohne strtolwr oder ähnliches.
```sh
<?php
  $obst1 = "Zitrone";
  $obst2 = "ZITRONE";
  if (strcasecmp($obst1, $obst2) == 0) {
      echo 'Gleich! :)';
  }
  
  // Gibt aus: Gleich! :)
?>
```

---

### :four_leaf_clover: Eine komfortable Möglichkeit um Währungs darzustellen.
```sh
<?php
  $preis = 1234.561;
  
  //Wir stellen die Währung auf USD
  setlocale(LC_MONETARY, 'en_US');
  
  echo money_format('%i', $preis); // Gibt aus: USD 1,234.56
  
  //Wir stellen die Währung auf € + "3n" bedeutet Dreistelling nach dem Punkt
  setlocale(LC_MONETARY, 'de_DE');
  
  echo money_format('%.3n', $preis); // Gibt aus: 1.234,561 EUR
?>
```
Der Punkt in der Ausgabe von $, wird in der Ausgabe von € auf ein Komma geändert!

---

### :four_leaf_clover: Berechnet die Ähnlichkeit zweier Strings
```sh
<?php
  $sim = similar_text('GitLab', 'GitHub', $perc);
  echo "Ähnlichkeit: $sim ($perc %)"; //Gibt aus: Ähnlichkeit: 4 (66.666666666667 %)
?>
```
Die Anzahl übereinstimmender Zeichen wird berechnet, indem die längste erste gemeinsame Teilzeichenkette gesucht wird, und dies dann rekursiv für die Prä- und Suffixe wiederholt wird. Die Längen aller gefundenen gemeinsamen Teilzeichenketten werden aufsummiert.

---

### :four_leaf_clover: Ersetzt alle Vorkommen des Suchstrings durch einen anderen String
```sh
<?php
  $text = "Sie sollten taeglich Fruechte, Gemuese und Ballaststoffe essen.";
  $daswirdgesucht = ["Fruechte", "Gemuese", "Ballaststoffe"];
  $damitwirdesersetzt = ["Pizza", "Bier", "Eiscreme"];

  $neuertext = str_replace($daswirdgesucht, $damitwirdesersetzt, $text);

  echo $neuertext; // Gibt aus: Sie sollten taeglich Pizza, Bier und Eiscreme essen.
?>
```
Sucht in einem Text nach den Worten und ersetzt es durch neue.

---

### :four_leaf_clover: Ein Array von 1 bis 12
```sh
<?php
  $data = range(0, 12);
  echo $data[1]; // 1
  
  foreach(range(0, 12) as $number) {
      echo $number; // Gibt aus: 0123456789101112
  }
?>
```

---

### :four_leaf_clover: Die Direktive!
```sh
<?php
  declare(strict_types=1);
?>
```
Mit Hilfe der Direktive, die am Anfang einer Datei gesetzt werden kann, wird der Strict-Mode aktiviert, der sowohl das Type Checking beim Input als auch beim Output von Funktionen beeinflußt.

---

### :four_leaf_clover: Erstellung eines URL-kodierten Query-Strings
```sh
<?php
$data = [
    'firstname'=>'tom',
    'lastname'=>'schmitzo'
    ];

echo http_build_query($data); // Gibt aus: firstname=tom&lastname=schmitzo
?>
```

---

### :four_leaf_clover: Analysiert eine URL und gibt ihre Bestandteile zurück
```sh
<?php
  $url = 'http://benutzername:passwort@hostname:9090/pfad?argument=wert#textanker';
  echo "<pre>";
  var_dump(parse_url($url));
  echo "</pre>";

  /* Gibt aus: array(8) {
    ["scheme"]=>
    string(4) "http"
    ["host"]=>
    string(8) "hostname"
    ["port"]=>
    int(9090)
    ["user"]=>
    string(12) "benutzername"
    ["pass"]=>
    string(8) "passwort"
    ["path"]=>
    string(5) "/pfad"
    ["query"]=>
    string(13) "argument=wert"
    ["fragment"]=>
    string(9) "textanker"
  }
  */
?>
```

---

### :four_leaf_clover: Inkrement- bzw. Dekrementoperatoren
```sh
<?php

// Post-Inkrement
$a = 5;
$a++ // $a ist noch immer 5!
echo $a; // Gibt 6 aus

// Pre-Inkrement
$a = 5;
++$a // $a ist 6!
echo $a; // Gibt 6 aus

?>
```

++$a	Prä-Inkrement	Erhöht $a um eins, und gibt dann $a zurück.
$a++	Post-Inkrement	Gibt $a zurück, und erhöht dann $a um eins.

--$a und $a-- subtrahiert nach dem selben Prinzip.

---

---
