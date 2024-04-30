<?php 
include "dbconnection.php";
if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $position=$_POST["position"];
  $firstname=$_POST["firstname"];

  $lastname=$_POST["lastname"];
  $email=$_POST["email"];
  $telephone=$_POST["telephone"];
  $contract_date=$_POST["contract_date"];
  $contract_text=$_POST["contract_text"];

$nationality=$_POST["nationality"];

  if (empty($position) || empty($firstname) || empty($lastname) || empty($email) || empty($telephone) || empty($contract_date) || empty($contract_text) || empty($nationality) ) {
    $errorMessage = "All fields are required";
}
else{
  $sql="INSERT INTO contract(position,firstname, lastname, email,telephone,contract_date, contract_text,nationality)" . "VALUES('$position','$firstname','$lastname','$email','$telephone','$contract_date','$contract_text','$nationality')";
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