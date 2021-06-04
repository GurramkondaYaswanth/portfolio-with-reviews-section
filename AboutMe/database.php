<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>database</title>
</head>
<body>
<?php


function connectionDB() {
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $dbname = "portfolio";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    return $conn;
}



?>
    
</body>
</html>