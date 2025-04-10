<?php
include "db.php" ;
$category=$_POST['category'] ;
$subcategory=$_POST['subcategory'] ;
if($con){
	//echo "connected";
	$sql="insert into subcategory(subcategory,category) values('$subcategory','$category')";
	mysqli_query($con,$sql);
	//header('location:add-category.php');
?>

<script type="text/javascript">
	alert("category added");
	window.location="view-subcategory.php";
</script>


<?php
}

?>






