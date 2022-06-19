<?php
$servername = "localhost";
$username = "root"; //user name
$password = ""; //password (empty)
$dbname = "db_Academic"; //database name
//Create connection
$conn = new mysqli($servername, $username, $password,
$dbname);
//Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<h1> <font color = red>List of students</font>
</h1>";
echo "<table border=1 cellspacing =0>";
echo "<tr bgcolor=lightblue><th>ID</th><th>First
Name</th><th>Last Name</th><th>Grade</th></tr>";
while($row = $result->fetch_assoc()) {
 echo "<tr bgcolor = lightgreen>";
echo "<td>". $row["id"]."</td>";
echo "<td>". $row["firstname"]."</td>";
echo "<td>". $row["lastname"]."</td>";
echo "<td>". $row["grade"]."</td>";
echo "</tr>";
}
echo "</table>";
$conn->close();
?>