<?php 
include "dbconnection.php";
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
  $sql="INSERT INTO investors(firstname, lastname, email,telephone,nationality)" . "VALUES('$firstname','$lastname','$email','$telephone','$nationality')";
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