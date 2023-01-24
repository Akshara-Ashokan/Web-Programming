<?php

include "dbconnection.php";
// sql to create table
$sql = "CREATE TABLE student (
student_id INT(6) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(20) NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(20) NOT NULL,
dob VARCHAR(30) NOT NULL,
mobile VARCHAR(20) NOT NULL,
email VARCHAR(50),
gender varchar(20))";
if ($conn->query($sql) === TRUE) {
 	header("Location:register_19.php");
} else {
echo "Error creating table: ";
}
$conn->close();
?>
