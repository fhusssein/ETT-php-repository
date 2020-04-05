<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="ett_db";


$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());

/*$fName = $_GET['fname'];
$lName = $_GET['lname'];
$email = $_GET['email'];
$eStatus = $_GET['eStatus'];
$googleID = $_GET['gId'];
$deptID = $_GET['deptID'];
preg_match_all('!\d+!', $deptID, $matches);
$img = $_GET['img']; */

$sql = "UPDATE employee SET first_name = $fName, last_name = $lName,
    email = $email, employee_status = $eStatus, deptID = $deptID,
    WHERE googleID = $googleID";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}


?>