<?php
$file_path = 'links.txt';

if (file_exists($file_path)) {
  $links_file = fopen($file_path, 'r');
  
  if ($links_file) {
    echo '<ul>';

    while (($line = fgets($links_file)) !== false) {
      $line = trim($line);
      list($url, $description) = explode(';', $line, 2);

      echo '<li><a href="' . $url . '">' . $description . '</a></li>';
    }

    echo '</ul>';

    fclose($links_file);
  } else {
    echo 'Error opening file.';
  }
} else {
  echo 'File not found.';
}
?>
