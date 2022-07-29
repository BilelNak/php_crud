<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodjek";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//create sql request 
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$adresse = $_POST["adresse"];

$sql = "INSERT INTO client( name, email, phone, adresse) VALUES ('".$name."','".$email."','".$phone."','".$adresse."')";


//execute request 
if ($conn->query($sql) === TRUE) {
    header( 'Location: ./index.php' ) ;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//close connection 
$conn->close();
?>