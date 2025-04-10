<?php
include "db.php" ;
$id=$_GET['catid'];
$sql="delete from category where id='$id'";
mysqli_query($con,$sql);
header("location:view-category.php");

?>