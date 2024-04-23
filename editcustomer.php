<?php
include "db.php";
$id=$_GET['id'];
$sql = "SELECT * FROM tracking WHERE id=$id";
$row = mysqli_fetch_assoc($conn->query($sql) );
$name = $row['name'];
$dob = $row['city'];

?>
<html>
<head>
<title>Add Employee</title>
</head>
<body>
<form method="post" action="editprocess.php">
<input type="hidden" name="id" value="<?php echo $id ?>" required>
Employee Name <input type="text" name="name" value="<?php echo $name ?>" required>
Employee Dob <input type="date" name="city"  value="<?php echo $city ?>">
<input type="submit" value="Register">
</form>
</body>
</html>