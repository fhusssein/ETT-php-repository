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


$offsiteID = $_GET['offsiteID'];
/* preg_match_all('!\d+!', $offsiteID, $matches); */



$sql = "DELETE FROM offsite WHERE offsiteID='$offsiteID'";
if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully"; 
} else {
    echo "Error deleting record: " . $con->error;
}
?>