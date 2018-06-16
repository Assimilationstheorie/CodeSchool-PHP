<?php
$dir    = './';
$files = array_diff(scandir($dir), array('..', '.', 'index.php'));
echo "<h2>Topics</h2>";
foreach($files as $file) {
  echo "<a href='$file' target='_blank'>".ucfirst($file)."</a><br>";
}
?>
