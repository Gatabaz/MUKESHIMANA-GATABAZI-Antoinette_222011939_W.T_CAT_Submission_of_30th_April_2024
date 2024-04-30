<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "filmmaker_system";

// Create connection
$connection = new mysqli($servername, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$id = "";
$firstname = "";
$lastname = "";
$email = "";
$telephone = "";
$nationality="";
$time_arrival = "";
$tourist_residental = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // GET method: show the data of the tourist
    if (!isset($_GET["id"])) {
        header("location: /filmmakersystem/index.php");
        exit;
    }
    $id = $_GET["id"];

    // Read the row of the selected tourist from the database
    $sql = "SELECT * FROM investment WHERE id=$id";
    $result = $connection->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $telephone = $row["telephone"];
        $projectname = $row["projectname"];
        $investmentAmount = $row["investmentAmount"];
        
    } else {
        header("location: /filmmakersystem/investment.php"); // Corrected typo
        exit;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // POST method: update the data of the tourist
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $projectname = $_POST["projectname"];
    $investmentAmount = $_POST["investmentAmount"];
   
    
   
    // Removed unused $CreateAt variable
    
    if (empty($id) || empty($firstname) || empty($lastname) || empty($email) || empty($telephone)|| empty($projectname) || empty($investmentAmount)) {
        echo "All fields are required";
    } else {
        $sql = "UPDATE investment SET firstname='$firstname', lastname='$lastname', email='$email', telephone='$telephone', projectname='$projectname', investmentAmount='$investmentAmount' WHERE id='$id'";
        if ($connection->query($sql) === TRUE) {
            header("location: /filmmakersystem/investmentview.php");
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
    <title>Investors Update</title>
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
                <label for="firstname">Firstname</label>
                <div>
                    <input class="fn" type="text" name="firstname" value="<?php echo $firstname ?>" placeholder="Enter first Name">
                </div>
            </div>
            <div>
                <label for="lastname">Lastname</label>
                <div>
                    <input class="ln" type="text" name="lastname" value="<?php echo $lastname ?>" placeholder="Enter last name" >
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
                <label for="projectname">Project Name</label>
                <div>
                    <input class="tel" type="text" name="projectname" value="<?php echo $projectname ?>" placeholder="Enter projectname ">
                </div>
            </div>
            <div>
                <label for="investmentAmount">Investment Amount</label>
                <div>
                    <input class="company" type="text" name="investmentAmount" value="<?php echo $investmentAmount ?>">
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
