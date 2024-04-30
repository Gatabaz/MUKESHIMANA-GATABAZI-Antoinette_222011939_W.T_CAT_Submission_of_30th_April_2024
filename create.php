<?php 
include "dbconnection.php";

$errorMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $emailInput = $_POST["email"];
    $birth = $_POST["birth"];
    $passwordInput = $_POST["password"];
    $hashed_password = password_hash($passwordInput, PASSWORD_DEFAULT);

    if (empty($firstname) || empty($lastname) || empty($emailInput) || empty($birth) || empty($passwordInput)) {
        $errorMessage = "All fields are required";
    } else {
        $sql = "INSERT INTO signin (firstname, lastname, email, birth, password) VALUES ('$firstname', '$lastname', '$emailInput', '$birth', '$hashed_password')";
        $result = $connection->query($sql);
        
        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
        } else {
            echo "Added correctly";
            header("Location: /filmmakersystem/index.php");
            exit;
        }
    }
}
?>
