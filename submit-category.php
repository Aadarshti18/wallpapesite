<?php
include "db.php" ;
$category=$_POST['category'] ;
if($con){
	//echo "connected";
	$sql="insert into category(category) values('$category')";
	mysqli_query($con,$sql);
	//header('location:add-category.php');
?>

<script type="text/javascript">
	alert("category added");
	window.location="add-category.php";
</script>


<?php
}

?>






