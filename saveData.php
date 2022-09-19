<?php
$sd_name = $_POST['name'];
$sd_course = $_POST['course'];

include "config.php";

$sql = "INSERT INTO profile1(sname,scourse) VALUES('{$sd_name}','{$sd_course}')";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:index.php");

mysqli_close($conn);
?>
