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
$id = $_POST['idd'];
 $fn=$_POST['fn'];
 $ln=$_POST['ln'];
 $gg=$_POST['gg'];

 // checking empty fields
 if(empty($fn) || empty($ln) || empty($gg)) {
 if(empty($fn)) {
 echo "<font color='red'>First Name field is
empty.</font><br/>";
 }

 if(empty($ln)) {
 echo "<font color='red'>Last Name field is
empty.</font><br/>";
 }

 if(empty($gg)) {
    echo "<font color='red'>Grade field is
    empty.</font><br/>";
     }
     } else {
     //updating the table
     $sql = "UPDATE student SET
    firstname='".$fn."',lastname='".$ln."', grade='".$gg."'
    WHERE id='".$id."'";
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    header("Location: ListStudents.php");
    } else {
    echo "Error updating record: " . $conn->error;
    }
    
     }
    $conn->close();
    ?>