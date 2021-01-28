<?php
include "conn.php";	
echo $delete_name=$_GET['name'];
$sql="DELETE FROM product_detail WHERE name='$delete_name'";
mysqli_query($conn,$sql);
echo "<script>var person = confirm('Are you sure you want to Delete Data of ".$delete_name."');
  if (person != null) {
  alert('Data Deleted');
  }</script>";
header("refresh:0; url = upload.php");
?>