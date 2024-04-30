<?php
include "dbconnection.php";
$id = "";
$firstname = "";
$lastname = "";
$email = "";
$telephone = "";
$nationality="";
$time_arrival = "";
$tourist_residental = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the project
    if (!isset($_GET["id"])) {
        header("location: /filmmakersyatem/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Read the row of the selected project from the database
    $sql = "SELECT * FROM projects WHERE id=$id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $projectname = $row["projectname"];
       
        $email = $row["email"];
        $telephone = $row["telephone"];
        $language = $row["language"];
        $nationality = $row["nationality"];
        
    } else {
        header("location: /filmmakersystem/project.php"); // Corrected typo
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the tourist
    $id = $_POST["id"];
    $projectname = $_POST["projectname"];
   
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $language = $_POST["language"];
    $nationality = $_POST["nationality"];
   
    
   
    // Removed unused $CreateAt variable
    
    if (empty($id) || empty($projectname) || empty($email) || empty($telephone) || empty($language) || empty($nationality)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE projects SET projectname='$projectname', email='$email', telephone='$telephone', language='$language', nationality='$nationality' WHERE id='$id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /filmmakersystem/projectview.php");
            exit;
        } else {
            $errorMessage = "Error updating record: " . $connection->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Update</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Add your CSS styles here */
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        
        center {
            margin-top: 50px;
        }
        
        h1 {
            color: #333;
        }
        
        form {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        
        input[type="submit"],
        input[type="reset"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <center>
        <div>
            <h1>Update information</h1>
        </div>
        <form method="POST">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div>
                <label for="projectname">Projectname</label>
                <div>
                    <input class="fn" type="text" name="projectname" value="<?php echo $projectname ?>" placeholder="Enter Project Name">
                </div>
            </div>
            
            <div>
                <label for="email">Email</label>
                <div>
                    <input class="em" type="text" name="email" value="<?php echo $email ?>" placeholder="Enter email">
                </div>
            </div>
            <div>
                <label for="telephone">Telephone</label>
                <div>
                    <input class="tel" type="text" name="telephone" value="<?php echo $telephone ?>" placeholder="Enter telephone ">
                </div>
            </div>
            <div>
                <label for="language">Language</label>
                <div>
                    <input class="tel" type="text" name="language" value="<?php echo $language ?>" placeholder="Enter language ">
                </div>
            </div>
            <div>
                <label for="nationality">Nationality</label>
                <div>
                    <input class="company" type="text" name="nationality" value="<?php echo $nationality ?>">
                </div>
            </div>
              
            <!-- Moved the submit buttons inside the form -->
            <div>
                <input  class="submit" type="submit" value="Update">
              
            </div>
        </form>
    </center>
</body>

</html>
