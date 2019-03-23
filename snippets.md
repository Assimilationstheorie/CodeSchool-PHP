# :milky_way: Basics

> NO WAY....

### :four_leaf_clover: Vergleich von zwei Strings, unabhängig von Groß/Kleinschreibung ohne strtolwr oder ähnliches
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
