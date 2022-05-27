<?php
$servername = "localhost";
$username = "user";
$password = "password";
$dbname = "ruben";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO PERSONS (LastName, FirstName , Address, City)
VALUES ('ruben', 'verra', 'bree')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully\n";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT LastName, FirstName , Address, City FROM PERSONS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo " - LastName: " . $row["LastName"]. " - FirstName: " . $row["FirstName"]. " - Address" . $row["Address"]. " - City: " . $row["City"].  "<br>";
  }
} else {
  echo "0 results";
}


$conn->close();
?>
