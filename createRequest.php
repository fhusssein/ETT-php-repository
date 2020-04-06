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

$sql ="INSERT INTO request
    (start_date,end_date,id_employee,id_offsite,id_dept,id_notification)
VALUES ('2020-04-06', '2020-05-06', 1, 1, 1, 1)";

if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}



?>