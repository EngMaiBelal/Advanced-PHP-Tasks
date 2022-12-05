<?php
// <!-- (3- PDO) -->
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PDO_DB";

try {
  $connPDO = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $connPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  ////////////////////////////////////////////////////////////////////////////////////////////
  // Create Table

  // $createTable = "CREATE TABLE MyGuests (
  // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  // firstname VARCHAR(30) NOT NULL,
  // lastname VARCHAR(30) NOT NULL,
  // email VARCHAR(50),
  // reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  // )";

  
  // $connPDO->exec($createTable); // use exec() because no results are returned
  // echo "Table MyGuests created successfully <br>";

  ////////////////////////////////////////////////////////////////////////////////////////////
  // Insert Data
  // // 1) Insert One Record
  //   $insertData = "INSERT INTO MyGuests (firstname, lastname, email)
  //   VALUES ('John', 'Doe', 'john@example.com')";
  //   $connPDO->exec($insertData);       // use exec() because no results are returned 
  //   echo "New record created successfully <br>";

  //   $last_id = $connPDO->lastInsertId();  // last ID
  //   echo "Last inserted ID is: " . $last_id."<br>";

  // // 2) Insert Multiple Records
  //   // begin the transaction
  //   $connPDO->beginTransaction();
  //   // our SQL statements
  //   $connPDO->exec("INSERT INTO MyGuests (firstname, lastname, email)
  //   VALUES ('John', 'Doe', 'john@example.com')");
  //   $connPDO->exec("INSERT INTO MyGuests (firstname, lastname, email)
  //   VALUES ('Mary', 'Moe', 'mary@example.com')");
  //   $connPDO->exec("INSERT INTO MyGuests (firstname, lastname, email)
  //   VALUES ('Julie', 'Dooley', 'julie@example.com')");

  //   // commit the transaction
  //   $connPDO->commit();
  //   echo "New records created successfully <br>";

  ////////////////////////////////////////////////////////////////////////////////////////////
  // Select Data


  ////////////////////////////////////////////////////////////////////////////////////////////
  // Delete Data


  ////////////////////////////////////////////////////////////////////////////////////////////
  // Update Data


  ////////////////////////////////////////////////////////////////////////////////////////////
} catch(PDOException $error) {
  
  // roll back the transaction if something failed in multiple insert
  $connPDO->rollback();

  echo $createTable . "<br>" . $error->getMessage();
}
////////////////////////////////////////////////////////////////////////////////////////////
// Close Connection
$connPDO = null;
?>
