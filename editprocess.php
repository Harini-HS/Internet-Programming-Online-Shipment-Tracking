<?php
include "db.php";
$id=$_POST['id'];
$name=$_POST['ename'];
$city=$_POST['city'];

$sql = "UPDATE employee SET name='$name', city='$city' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
header("Location: viewemployee.php");
?>