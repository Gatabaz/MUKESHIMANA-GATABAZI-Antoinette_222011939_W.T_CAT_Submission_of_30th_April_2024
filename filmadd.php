<?php 
$server="localhost";
$username="root";
$password="";
$database="filmmaker_system";
$connection = new mysqli($server, $username,$password,$database);
if ($connection->connect_error) {
  die ("connection failed". $connection->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $telephone=$_POST["telephone"];
  $nationality=$_POST["nationality"];
  if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($nationality)) {
    $errorMessage = "All fields are required";
}
else{
  $sql="INSERT INTO filmmaker(firstname, lastname, email,telephone,nationality)" . "VALUES('$firstname','$lastname','$email','$telephone','$nationality')";
  $result = $connection->query($sql);
}
if (!$result) {
  $errorMessage="Invalid query" . $connection->error;
   
  } else{
   echo " added correctly";
   header("location: /filmmakersystem/filmmaker.php");
  exit;
  }
   
  }
  


?>