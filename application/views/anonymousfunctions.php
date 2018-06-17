<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Anonyme Funktionen</h1>
    <p class="lead">Ein Mädchen hat keinen Namen...</p>
  </div>
</div>
<div class="container">
  <p>Anonyme Funktionen, auch bekannt als Closures, ermöglichen es Funktionen ohne Funktionsnamen zu schreiben. </p>
  <hr>
  <p>
    <code>
        $hello = function(string $name)<br>
        {<br>
            echo "Hallo " . $name;<br>
        };<br>
        $hello('Konny');<br>
        //Ergibt: Hallo Konny
    </code>
  </p>
  <p>Die Zuweisung einer Closure an eine Variable verwendet die selbe Syntax wie andere Zuweisungen, einschließlich des abschließenden Semikolon.</p>
  <hr>
  <p>
    <code>
      $fruits = function() { <br>
        return ['Apfel', 'Birne', 'Milch'];<br>
      };<br>
      echo $fruits()[1];<br>
      //Ergibt: Birne
    </code>
  </p>
  <p>So können auch Elemente aus einem Array wiedergegeben werden.</p>
  <hr>
  <p>
    <code>
      $welcome = 'Willkommen';<br>
      $hello = function(string $name) use ($welcome) {<br>
        return $welcome . ' ' . $name . '.';<br>
      };<br>
      echo $hello('Konny');<br>
      //Ergibt: Willkommen Konny.
    </code>
  </p>
  <p>Closures können ebenfalls Variablen aus dem Eltern-Gültigkeitsbereich erben. Jede solche Variable muss an das use-Sprachkonstrukt übergeben werden.</p>
  <hr>
  <p>
    <code>
      $data = ['Apfel', 'Birne'];<br>
      $addFruit = function(string $fruit) use (&$data) {<br>
        array_push($data, $fruit);<br>
      };<br>
      $addFruit('Kirsche');<br>
      echo $data[2];<br>
      //Ergbit: Kirsche
    </code>
  </p>
  <p>Durch das <mark>&</mark> vor <mark>$data</mark> in dem <mark>use</mark> wird eine Referenz erzeugt und diese dann in der anonymen Funktion um den Inthalt des Parameters <mark>$fruit</mark> erweitert. Somit kann man nach dem Funktionsaufruf auf das 3 Element der Arrays zugreifen.</p>
</div>


<?php
$test = function() {
  return ['kr' => 'zzz', 'rrr', 'ooo'];
};
foreach($test as $key => $value) {
  echo $value;
}
 ?>
