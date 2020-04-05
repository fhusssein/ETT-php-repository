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

$offsiteID = $_GET['requestID'];
preg_match_all('!\d+!', $requestID, $matches);



$sql = "DELETE FROM request WHERE requestID='$requestID'";
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}
?>