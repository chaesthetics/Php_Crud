<?php 
include("config.php");
$sd_name = $_GET['id'];

$sql = "DELETE FROM profile1  WHERE sid = {$sd_name}";
$result = mysqli_query($conn,$sql) or die("query unsuccessful");

header("location:index.php");

mysqli_close($conn);
?>