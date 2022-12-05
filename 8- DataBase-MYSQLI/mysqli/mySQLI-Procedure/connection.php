<?php
// <!-- (2- MySQLi Procedural) -->
$servername = "localhost";
$username = "root";
$password = "";

//////////////////////////////////////////////////////////////////////////////////////////////
// Create connection

$connProced = mysqli_connect($servername, $username, $password);

// Check connection
if (!$connProced) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "MySQLi Procedural Connected successfully <br>";
//////////////////////////////////////////////////////////////////////////////////////////////
// Create database by code

$sql = "CREATE DATABASE Procedural_DB";
if (mysqli_query($connProced, $sql)) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . mysqli_error($connProced);
}

// close connection
mysqli_close($connProced);

?>