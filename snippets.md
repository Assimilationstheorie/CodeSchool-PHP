# :milky_way: Basics

> NO WAY....

### :four_leaf_clover: Vergleich von zwei Strings, unabhängig von Groß/Kleinschreibung ohne strtolwr oder ähnliches.
```sh
<?php
  $obst1 = "Zitrone";
  $obst2 = "ZITRONE";
  if (strcasecmp($obst1, $obst2) == 0) {
      echo 'Gleich! :)';
  }
?>
```
Gibt das Wort "Gleich! :)" aus.

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
