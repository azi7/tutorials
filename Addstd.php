<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_Academic";
$conn = new mysqli($servername, $username, $password,
$dbname);
if ($conn->connect_error)
 die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
echo "<h1> <font color = red>List of students</font>
</h1>";
echo "<table border=1 cellspacing =0>";
echo "<tr bgcolor=lightblue><th>ID</th><th>First
Name</th><th>Last
Name</th><th>Grade</th><th>Action</th></tr>";
while($row = $result->fetch_assoc()) {
 echo "<tr bgcolor = lightgreen>";
echo "<td>". $row["ID"]."</td>";
echo "<td>". $row["FirstName"]."</td>";
echo "<td>". $row["LastName"]."</td>";
echo "<td>". $row["Grade"]."</td>";
echo "<td><a href=\"Edit.php?id=$row[id]\">Edit</a> |
<a href=\"Delete.php?id=$row[id]\"onClick=\"returnconfirm('Are you sure you want todelete?')\">Delete</a></td>";
echo "</tr>";
}
echo "</table>";
echo "<br><a href=\"AddStudent.htm\">Click here to add new
student</a>";
$conn->close();
?>