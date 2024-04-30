<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "filmmaker_system";
$connection = new mysqli($server, $username, $password, $database);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];
    $sql = "SELECT * FROM signin WHERE email='$emailInput'";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($passwordInput, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            echo "Logged Successfully";
            header("location: /filmmakersystem/filmmaker.php");
            exit();
        } else {
            echo "Email or password are incorrect.";
        }
    } else {
        echo "User not found.";
        header("location: /filmmakersystem/filmmaker.php");

    }
}
?>
