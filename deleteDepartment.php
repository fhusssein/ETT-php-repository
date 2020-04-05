<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="ett_db";


$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close() 

// sql to delete a record
$sql = "DELETE FROM department WHERE departmentID=7";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}


?>