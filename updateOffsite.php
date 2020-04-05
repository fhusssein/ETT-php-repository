<?php
$host="localhost";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="ett_db";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    or die ('Could not connect to the database server' . mysqli_connect_error());
    
   /*  $offsiteID = $_GET['offsiteID'];
    $category = $_GET['category'];
    $dayAmt = $_GET['dayAmt']; */

    $sql = "UPDATE offsite SET category = 'Vacation', amount_of_days = 21 WHERE offsiteID = 1";

    if ($con->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $con->error;
    }

?>