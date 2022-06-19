<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_Academic";
// Create connection
$conn = new mysqli($servername, $username, $password,
$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
//receive the value of the id
$id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM student WHERE id=".$id;
if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
//redirectig to the display page. In our case, it is

header("Location: ListStudents.php");
} else {
 echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>