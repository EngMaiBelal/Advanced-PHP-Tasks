<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sqli_DB"; // must be exist


////////////////////////////////////////////////////////////////////////////////////////////
// Create connection
$connOOP = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connOOP->connect_error) {
  die("Connection failed: " . $connOOP->connect_error);
}
echo "MySQLi Object-Orianted Connected successfully <br>";

//////////////////////////////////////////////////////////////////////////////////////////////
// Create Data

// $createTable = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($connOOP->query($createTable) === TRUE) {
//   echo "Table MyGuests created successfully";
// } else {
//   echo "Error creating table: " . $connOOP->error;
// }
//////////////////////////////////////////////////////////////////////////////////////////////
// Insert Data

    /////////////////////////////////////////////////////////////////////
    //multi record
    // $insertTable = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com');";
    // $insertTable .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Mary', 'Moe', 'mary@example.com');";
    // $insertTable .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Julie', 'Dooley', 'julie@example.com')";

    ////////////////////////////////////////////////////////////////////
    //one record
    // $insertTable = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";

    // if ($connOOP->query($insertTable) === TRUE) {
    //   echo "New record created successfully <br>";

    // // if ($connOOP->multi_query($insertTable) === TRUE) {
    // //   echo "New records created successfully <br>";
      
    //   $last_id = $connOOP->insert_id; // get last ID
    //   echo "Last inserted ID is: " . $last_id ."<br>";
    // } else {
    //   echo "Error: " . $insertTable . "<br>" . $connOOP->error;
    // }
//////////////////////////////////////////////////////////////////////////////////////////////
// SelectData

    // Select Multi Record
    // $selectData= "SELECT id, firstname, lastname, email FROM MyGuests"; 
    // $result = $connOOP->query($selectData);'

    // Where
    // $selectRow = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='john'"; // specific record // 0 result
    // $selectRow = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'"; // specific record // all of them 
    // $result = $connOOP->query($selectRow);

    // limit & offest
    $limitData = "SELECT * FROM Orders LIMIT 10 OFFSET 15"; // start with record 15
    // $limitData = "SELECT * FROM Orders LIMIT 15, 10";

    // OrderBy
    $selectDataOrdered = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
    $result = $connOOP->query($selectDataOrdered);

    $sql = "DELETE FROM MyGuests WHERE id=3";

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
      }
    } else {
      echo "0 results <br>";
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////
//deleteData

$deleteData = "DELETE FROM MyGuests WHERE id=30"; // not check if id exist or not

if ($connOOP->query($deleteData) === TRUE) {
  echo "Record deleted successfully <br>";
} else {
  echo "Error deleting record: " . $conn->error;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////
//updateData

$updateData = "UPDATE MyGuests SET firstname='Mai' WHERE id=31";

if ($connOOP->query($updateData) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

// close connection
$connOOP->close();

?>