<?php 
include 'connection.php';

$id=$_GET['id'];

$q=" DELETE FROM `assignment_7` WHERE student_id=$id ";

mysqli_query($con,$q);

header('location:display.php');

?>