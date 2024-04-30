<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <script>
        function confirmInsert() {
          return confirm('do you want to record?'); 
        }
    </script>
    <style>
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 10;
            padding: 10;
        }
.navigation a:link{
    color: white;
    background-color:none;
    padding: 5px;
    margin: 5px;
      border-radius: 15px;

}
.navigation a:visited{
    color: white;
    background-color:none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}
.navigation a:hover{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
     border-radius: 15px;
}
 .navigation a:active{
    color: white;
    background-color: none;
     padding: 5px;
     margin: 5px;
       border-radius: 15px;
}

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: rgb(9, 188, 88);
            border-bottom: 5px solid black;
        }
        .logo {
            width: 60px; /* Adjust logo size */
            height: auto;
        }
        .navigation {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align:none;
            flex-grow: 2; 
        }
        .navigation li {
            display: inline-block;
            margin-right: 5px;
            padding: 5px;
        }
        .navigation li:last-child {
            margin-right: 0;
        }
        .navigation li a {
            text-decoration: none;
            color: #333;
        }
        .p1{
            font-size: 20px;
            color: black;
            text-align: center;

        }
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
      }
      .dropdown-contents{
  display: none;
  position: absolute;
  background-color:deeppink;
 text-decoration: none;
}
.dropdown-contents a{
  color: black;
  text-decoration: none;
  display: block;
}
.dropdown-contents a :hover{
 background-color: red;
}
.dropdown:hover .dropdown-contents{
  display:block;
}
.tu{
  color: rgb(237, 237, 18);
}
.size{
    width: 250px;
}

    </style>
    <link rel="stylesheet" type="text/css" href="style1.css" title="style1" media="screen,tv,print,handheld"/>
</head>
<body><header>
<div class="header">
    <img class="logo" src="logo.jpg" alt="Logo">
        <h3 class="tu"><i>logo script <br> Film connect </i></h3>
    <ul class="navigation">
      <li><a href="home.php">Home</a></li>
        <li><a href="about us.php">About Us</a></li>
        <li><a href="contactus.html">Contact Us</a></li>
        <li class="dropdown">
          <a href="#">Form</a>
          <div class="dropdown-contents">
          <a href="filmmaker.php">Filmmaker Form</a>
            <a href="actor.php">Actor Form</a>
            <a href="investor.php">Investors Form</a>
            <a href="investment.php">Investment Form</a>
            <a href="project.php">Project Form</a>
            <a href="contract.php">Contract Form</a>
          </div>
        </li>
        <li class="dropdown">
        <a href="#">Table</a>
        <div class="dropdown-contents">
        <a href="filmview.php">Filmmaker table</a>
          <a href="actorview.php">Actors Table</a>
          <a href="investorview.php">Investors Table</a>
          <a href="investmentview.php">Investment Table</a>
          <a href="projectview.php">Project Table</a>  
          <a href="contractview.php">Contract Table</a>
        </div>
      </li>
        <li class="dropdown">
      <a href="#">Settings</a>
      <div class="dropdown-contents">
      <a href="signin.php">sign in</a>
        <a href="logout.php">Logout</a>
      </div>
    </li>
    </ul>
</div>
    <br>
 <form action="search.php" method="GET">
      <input type="search" name="query" placeholder="search here!!!!!!!">&nbsp;&nbsp;&nbsp;<button type="submit" style="background-color: blue;width: 100px;">search</button>
    </form></div></li></ul></div></header>

    <center>

    <form action="projectadd.php" method="POST" onsubmit=" return confirmInsert();">
        <table>
            <tr>
                <h3 style="font-size: 20px;color: white;"><i>Project Form</i></h3>
            </tr>
            <tr>
                <td>Projectname</td>
                <td><select class="size" name="projectname" required>
                    <option value="chose">Select</option>
                        <option value="The Hero">hero</option>
                        <option value="Bamenya">Bamenya</option>
                        <option value="Papasava">papa sava</option>
                        
                    </select>
                </td> <br><br>
            </tr>
            
            <tr>
                <td>Email</td>
                <td><input class="size" type="text" name="email" required="" placeholder="Enter Email"></td><br><br>
            </tr>
            <tr>
                <td>Telephone</td>
                <td><input class="size" type="text" name="telephone" required="" placeholder="Enter Email"></td><br><br>
            </tr>
            <tr>
                <td>Language</td>
                <td>
                    
                <select class="size" name="language" required>
                <option value="chose">Select</option>
                        <option value="English">English</option>
                        <option value="Kinyarwanda">Kinyarwanda</option>
                        <option value="Swahili">Kiswahili</option>
                        <option value="french">French</option>
                        
                    </select>
                
                </td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td>
                    
                <select class="size" name="nationality" required>
                <option value="chose">Select</option>
                        <option value="Usa">Usa</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="german">German</option>
                        <option value="british">British</option>
                        <option value="kenya">Kenya</option>
                        <option value="soutafrica">South Africa</option>
                        <option value="russian">Russian</option>
                        <option value="austraria">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="india">India</option>
                    </select>
                
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="send" value="New Add" style="width: 150px;background-color: black;color: white;font-size: 30px;">
                    <input type="submit" name="send" value="Cancel" style="width: 150px;background-color: black;color: white;font-size: 30px;">
                </td>
            </tr>
        </table>
    </form> <br><br>

    <footer style="background-color:black;text-align: center;width:100%;height:auto; color: white;font-size: 25px;">
        <p>&copy Designed by Mukeshimana Gatabazi Antoinette 222011939</p>
    </footer>
    </center>
</body>
</html>
