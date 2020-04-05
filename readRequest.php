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

$sql = "SELECT requestID,
    start_date,
    end_date,
    id_employee,
    id_offsite,
    id_dept,
    id_notification
FROM request;";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "requestID: " . $row["requestID"]. " - Start Date: " . $row["start_date"]. 
        "  - End Date" . $row["end_date"]. 
        "- EmployeeID" . $row["id_employee"].
        "- OffsiteID" . $row["id_offsite"].
        "- DeptID" . $row["id_dept"].
        "- notificationID" . $row["id_notification"]."<br>";
    }
} else {
    echo "0 results";
}

?>