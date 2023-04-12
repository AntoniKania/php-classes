<!DOCTYPE html>
<html>
<head>
	<title>Directory Handler</title>
</head>
<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
		<label for="path">Path:</label>
		<input type="text" id="path" name="path" placeholder="./php/images/network/"><br>

		<label for="directoryName">Directory Name:</label>
		<input type="text" id="directoryName" name="directoryName" placeholder="directoryName"><br>

		<label for="operation">Operation:</label>
		<input type="text" id="operation" name="operation" placeholder="read | delete | create"><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>

<?php
function handleDirectory($path, $directoryName, $operation = 'read') {
  if (substr($path, -1) != '/') {
      $path .= '/';
  }

  if ($operation != 'create' && !file_exists($path . $directoryName)) {
      echo "Directory '$directoryName' does not exist";
      return;
  }

  switch ($operation) {
      case 'read':
          echo "Directory contents of '$directoryName':\n";
          $files = scandir($path . $directoryName);
          foreach ($files as $file) {
              if ($file != '.' && $file != '..') {
                  echo "$file\n";
              }
          }
          break;
      case 'delete':
          if (!isDirEmpty($path . $directoryName)) {
              echo "Directory '$directoryName' is not empty";
              return;
          }
          if (!rmdir($path . $directoryName)) {
              echo "Failed to delete directory '$directoryName'";
              return;
          }
          echo "Directory '$directoryName' deleted successfully";
          break;
      case 'create':
          if (!mkdir($path . $directoryName)) {
              echo "Failed to create directory '$directoryName'";
              return;
          }
          echo "Directory '$directoryName' created successfully";
          break;
      default:
          echo "Invalid operation: '$operation'";
          break;
  }
}

function isDirEmpty($dir) {
  if (!is_readable($dir)) {
      return NULL;
  }
  return (count(scandir($dir)) == 2);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $path = $_POST['path'];
    $directoryName = $_POST['directoryName'];
    $operation = $_POST['operation'];

    handleDirectory($path, $directoryName, $operation);
}

?>