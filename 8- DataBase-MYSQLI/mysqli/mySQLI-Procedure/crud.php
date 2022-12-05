<?php
// <!-- (2- MySQLi Procedural) -->
$servername = "localhost";
$username = "root";
$password = "";
$database="Procedural_DB"; // must be exist
//////////////////////////////////////////////////////////////////////////////////////////////
// Create connection

$connProced = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connProced) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "MySQLi Procedural Connected successfully <br>";


//////////////////////////////////////////////////////////////////////////////////////////////
// Create Table

// $createTable = "CREATE TABLE MyGuests (
//   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//   firstname VARCHAR(30) NOT NULL,
//   lastname VARCHAR(30) NOT NULL,
//   email VARCHAR(50),
//   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//   )";
  
//   if (mysqli_query($connProced, $createTable)) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . mysqli_error($connProced);
//   }
//////////////////////////////////////////////////////////////////////////////////////////////
// InsertData
    // Insert one recored
    // $insertData = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";

    // if (mysqli_query($connProced, $insertData)) {
    //   echo "New record created successfully <br>";

    //   // last ID
    //   $last_id = mysqli_insert_id($connProced);
    //   echo "Last inserted ID is: " . $last_id."<br>";
    // } else {
    //   echo "Error: " . $insertData . "<br>" . mysqli_error($connProced);
    // }

    // //Insert MultiRecords
    // $insertMultiRecored = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com');";
    // $insertMultiRecored .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Mary', 'Moe', 'mary@example.com');";
    // $insertMultiRecored .= "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('Julie', 'Dooley', 'julie@example.com')";

    // if (mysqli_multi_query($connProced, $insertMultiRecored)) {
    //   echo "New records created successfully";
    // } else {
    //   echo "Error: " . $insertMultiRecored . "<br>" . mysqli_error($connProced);
    // }
/////////////////////////////////////////////////////////////////////////////////////////////
// SelectData
 
$selectData = "SELECT id, firstname, lastname FROM MyGuests";                   // All records
// $selectData = "SELECT id, firstname, lastname FROM MyGuests where id=1";        // Only one record 
// $selectData = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname"; // Oreded Data
// $selectData = "SELECT * FROM MyGuests LIMIT 5";                                   // limit 5
// $selectData = "SELECT * FROM MyGuests LIMIT 5 OFFSET 10";                         // leave the 10th no
// $selectData = "SELECT * FROM MyGuests LIMIT 15, 10";

$result = mysqli_query($connProced, $selectData);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


/////////////////////////////////////////////////////////////////////////////////////////////
// DeleteData

$deletedData = "DELETE FROM MyGuests WHERE id=3";

if (mysqli_query($connProced, $deletedData)) {
  echo "Record deleted successfully <br>";
} else {
  echo "Error deleting record: " . mysqli_error($connProced);
}
/////////////////////////////////////////////////////////////////////////////////////////////
// UpdateData

$updateData = "UPDATE MyGuests SET firstname='Mai' WHERE id=2";

if (mysqli_query($connProced, $updateData)) {
  echo "Record updated successfully <br>";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
//////////////////////////////////////////////////////////////////////////////////////////////
// close connection
mysqli_close($connProced);

?>