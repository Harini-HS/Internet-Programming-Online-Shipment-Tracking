<?php
include "db.php";
$name=$_POST['name'];
$city=$_POST['city'];
echo $name;
echo $city;

$sql = "INSERT INTO tracking (name, city)
VALUES ('$name', '$city')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
header("Location: viewemployee.php");
?>