<?php
$sd_id = $_POST['sid'];
$sd_name = $_POST['sname'];
$sd_course = $_POST['scourse'];

include "config.php";

$sql = "UPDATE profile1 SET sname='$sd_name',scourse='$sd_course' WHERE sid = {$sd_id}";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:index.php");

mysqli_close($conn);
?>
