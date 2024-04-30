<?php 
include "dbconnection.php";
if ($connection->connect_error) {
  die ("connection failed". $connection->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $firstname=$_POST["firstname"];
  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $telephone=$_POST["telephone"];
  $projectname=$_POST["projectname"];
  $investmentAmount=$_POST["investmentAmount"];
  if (empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($projectname) || empty($investmentAmount) ) {
    $errorMessage = "All fields are required";
}
else{
  $sql="INSERT INTO investment(firstname, lastname, email,telephone,projectname,investmentAmount)" . "VALUES('$firstname','$lastname','$email','$telephone','$projectname','$investmentAmount')";
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