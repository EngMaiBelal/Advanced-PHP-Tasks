<?php
// <!-- (1- MySQLi Object-Orianted) -->
$servername = "localhost";
$username = "root";
$password = "";

////////////////////////////////////////////////////////////////////////////////////////////
// Create connection
$connOOP = new mysqli($servername, $username, $password);

// Check connection
if ($connOOP->connect_error) {
  die("Connection failed: " . $connOOP->connect_error);
}
echo "MySQLi Object-Orianted Connected successfully <br>";

///////////////////////////////////////////////////////////////////////////////////////////
// Create database by code

$sql = "CREATE DATABASE sqli_DB";
if ($connOOP->query($sql) === TRUE) {
  echo "Database created successfully <br>";
} else {
  echo "Error creating database: " . $connOOP->error;
}

//////////////////////////////////////////////////////////////////////////////////////////////
// close connection

$connOOP->close();

?>