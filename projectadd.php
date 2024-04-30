<?php 
include "dbconnection.php";if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $projectname=$_POST["projectname"];
 
  $email=$_POST["email"];
  $telephone=$_POST["telephone"];
   $language=$_POST["language"];
  $nationality=$_POST["nationality"];
  if (empty($projectname) || empty($email) || empty($telephone) || empty($language) || empty($nationality)) {
    $errorMessage = "All fields are required";
}
else{
  $sql="INSERT INTO projects(projectname, email, telephone, language, nationality)" . "VALUES('$projectname','$email','$telephone', '$language', '$nationality')";
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