<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $telephone=$_POST["telephone"];
  $language=$_POST["language"];
  if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($language)) {
    $errorMessage = "All fields are required";
}
else{
  $sql="INSERT INTO actors(firstname, lastname, email,telephone,language)" . "VALUES('$firstname','$lastname','$email','$telephone','$language')";
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