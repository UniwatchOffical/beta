<?php
echo '<h1> -- <br> -- </h1>';

$path    = 'movies/';
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach(glob('includes/*.php') as $file){
  echo "<a href='movies/$file'>$file</a>";
}

?>