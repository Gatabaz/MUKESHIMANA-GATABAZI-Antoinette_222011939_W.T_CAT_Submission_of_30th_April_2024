<!DOCTYPE html>
<html lang="en">
<head>
<!-- official website designed by G8 on 24th march 2024-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> account</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
         .p1{
            font-family: Arial, sans-serif;;
            font-weight: bold;
            font-size: 20px;
            align-items: center;
        }
        form{
          
            width: 500px;
            height:600px;
            color:white;
            margin-top:50px;
        }
        tr{
            color: deeppink;
            font-size: 25px;
        }
        tr td{
            font-size: 20px;
            color: white;
            width: 300px;
            height: 40px;
        }
        tr td input{
            font-size: 20px;
            color: black;
            width: 300px;
            height: 40px;
        }
        body{
            background-color: Gray;
        }
        .gorilla{
            width: 500px;
            height: 250px;
            margin-top:0px;
            margin-left:25px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="create.php" method="POST">
                    <h3 class="p1"><i>CREATE YOUR  ACCOUNT</i></h3>
                    <div class="form-group">
                        <label for="firstname">Firstname</label>
                        <input type="text" class="form-control" name="firstname" id="fname">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname</label>
                        <input type="text" class="form-control" name="lastname" id="lname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" required="">
                    </div>
                    <div class="form-group">
                        <label for="birth">Date of Birth</label>
                        <input type="date" class="form-control" name="birth" required="">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" required="">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" style="width: 150px;">Sign Up</button>
                        <button type="button" class="btn btn-secondary" style="width: 150px;">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <center>
       
        <footer style="background-color:blue;text-align: center;width:100%;height:auto; color: white;font-size: 25px;"><p>&copy Designed by Mukeshimana Gatabazi Antoinette   222011939</p></footer>
    </center>
    
</body>
</html>
