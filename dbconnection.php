<?php  
$servername="localhost";
$username="gatabazi";
$password="222011939";
$databasename="filmmaker_system";
$connection=new mysqli($servername,$username,$password,$databasename);
if ($connection->connect_error) {
	die("connection failed.".$connection->connect_error);
}
?>