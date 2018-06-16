<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Referenzen</h1>
    <p class="lead">Eine Person, doch mit mehreren Namen.</p>
  </div>
</div>
<div class="container">
  <p>Referenzen sind in PHP ein Mechanismus um verschiedene Namen für den gleichen Inhalt von Variablen zu ermöglichen.</p>
  <p><code>$a =& $b;</code> $a ist nun gleichwertig wie $b. $a zeigt nicht auf $b, sondern beide zeigen auf denseblen Platz.</p>
  <hr>
  <p>
    <code>
      function rechneUm(int &$euro)<br>
      {<br>
        $euro = $euro * 2;<br>
      }<br>
      $dollar = 20;<br>
      rechneUm($dollar);<br>
      echo $dollar;<br>
    </code>
  </p>
  <p>Ohne das <code>&</code> vor dem Funktionsparameter ist das Ergenis <code>20</code>.<br>
    <code>$dollar = 20;</code> wird an die Funktion übergeben. In der Funktion wird mit der Zahl gerechnet. Setzt man <code>return</code> vor <code>$euro = $euro * 2</code> und ein <code>echo</code> vor <code>rechneUm($dollat);</code> so ist das Ergebnis <code>40</code>!</p>
  <p>Nun wird die Variable <code>$dollar</code> nicht den neuen Wert annehmen, da die Funktion für sich gekappselt ist und die Variable nichts von der Rechnung mitbekommen hat.</p>
  <p>Möchte man nun aber mit dem berechneten Ergebnis der Funktion weiterarbeiten, so erzeugt man eine Referenz. Bei dem Funktionsaufruf, zeigt der Parameter <code>&$euro</code> auf den Wert von <code>$dollar</code> und somit <code>20</code>. <mark>In der Funktion ist es nun wichtig, dass man mit dem selben Variablennamen arbeitet!</mark></p>
  <p>In der Funktion wird berechnet und der Variable <code>$euro</code> der neue Wert zugewiesen. Da die beiden Variablen nach wie vor auf den selben "Platz" zeigen, ist auch der Wert der Variable <code>$dollar</code> nun <code>40</code>.</p>
</div>
