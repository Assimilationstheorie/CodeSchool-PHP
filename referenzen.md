# Referenzen

> Eine Person, doch mit mehreren Namen.

### Erläuterung
Referenzen sind in PHP ein Mechanismus um verschiedene Namen für den gleichen Inhalt von Variablen zu ermöglichen.

---

```sh
$a =& $b;
```
 $a ist nun gleichwertig wie $b. $a zeigt nicht auf $b, sondern beide zeigen auf denseblen "Platz".

---

```sh
<?php
      function rechneUm(int &$euro)
      {
        $euro = $euro * 2;
      }
      $dollar = 20;
      rechneUm($dollar);
      echo $dollar;
?>
```

Ohne das & vor dem Funktionsparameter ist das Ergenis 20.
$dollar = 20; wird an die Funktion übergeben. In der Funktion wird mit der Zahl gerechnet. Setzt man return vor $euro = $euro * 2 und ein echo vor rechneUm($dollat); so ist das Ergebnis 40!
Nun wird die Variable $dollar nicht den neuen Wert annehmen, da die Funktion für sich gekappselt ist und die Variable nichts von der Rechnung mitbekommen hat.

Möchte man nun aber mit dem berechneten Ergebnis der Funktion weiterarbeiten, so erzeugt man eine Referenz. Bei dem Funktionsaufruf, zeigt der Parameter &$euro auf den Wert von $dollar und somit 20. In der Funktion ist es nun wichtig, dass man mit dem selben Variablennamen arbeitet!

In der Funktion wird berechnet und der Variable $euro der neue Wert zugewiesen. Da die beiden Variablen nach wie vor auf den selben "Platz" zeigen, ist auch der Wert der Variable $dollar nun 40.

