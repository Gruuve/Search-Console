<?php 
 $qw = $_GET['id'];
 $u_id = $_GET['user_id'];

$qwe = "delete from websites where id=$qw";
include("db.php");
mysqli_query($con, $qwe);

echo "<script>window.location.href = \"dashboard.php?user_id=$u_id\";</script>";


?>