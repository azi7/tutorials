<html>
<head>
 <title>Edit Data</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_Academic";
// Create connection
$conn = new mysqli($servername, $username, $password,
$dbname);
// Check connection
if ($conn->connect_error)
 die("Connection failed: " . $conn->connect_error);
 //else
 //echo "Connection done ...";
//receive the value of the id
$id = $_GET['id'];
//selecting data associated with this particular id
$sql = "SELECT * FROM student WHERE id=".$id;
$result = $conn->query($sql);
while($res = mysqli_fetch_array($result))
{
 $fname = $res['firstname'];
$lname = $res['lastname'];
 $grade = $res['grade'];
}
?>
 <form method="post" action="update.php">
 <table border="0">
 <tr>
 <td>First Name</td>
 <td><input type="text" name="fn"
value="<?php echo $fname;?>"></td>
 </tr>
 <tr>
 <td>Last Name</td>
 <td><input type="text" name="ln"
value="<?php echo $lname;?>"></td>
 </tr>
 <tr>
 <td>Grade</td>
 <td><input type="text" name="gg"
value="<?php echo $grade;?>"></td>
 </tr>
 <tr>
 <td><input type="hidden" name="idd"
value=<?php echo $id;?>></td>
 <td><input type="submit" name="update"
value="Update"></td>
 </tr>
 </table>
 </form>
</body>
</html>