<?php
// <!-- (3- PDO) -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PDO_DB"; //must be exist
try {
    /////////////////////////////////////////////////////////////////////////////////////////////////////
    // create db manual, connection
    $connPDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "PDO Connected successfully <br>";

    /////////////////////////////////////////////////////////////////////////////////////////////////////
    // sql to create table
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    // use exec() because no results are returned
    $connPDO->exec($sql);
    echo "Table MyGuests created successfully";
    } catch(PDOException $e) {
    echo "PDO Connection failed: " . $e->getMessage();
    }

// /////////////////////////////////////////////////////////////////////////////////////////////////
// create database by code
// try {
//   $connPDO2 = new PDO("mysql:host=$servername", $username, $password);
//   // set the PDO error mode to exception
//   $connPDO2->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $sql = "CREATE DATABASE PDO_DB_by_code";
//   // use exec() because no results are returned
//   $connPDO2->exec($sql);
//   echo "Database created successfully <br>";
// } catch(PDOException $e) {
//   echo $sql . "<br>" . $e->getMessage();
// }

/////////////////////////////////////////////////////////////////////////////////////////////////////
// close connection
$connPDO = null;
?>
