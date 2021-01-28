<?php
  // Create database connection
  include "conn.php";	
  // Initialize message variable
  $msg = "";
$delete_name="";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	//$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
	//Get image name
	$image_name=$_POST['image_name'];
	$price=$_POST['price'];
	$releasedate=$_POST['releasedate'];
	$details=$_POST['details'];
	$category=$_POST['category'];
	$subcategory=$_POST['subcategory'];
	$discount=$_POST['discount'];
	$sold=$_POST['sold'];
	

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO product_detail (image, name,  price,releasedate,details,category,subcategory,discount,sold) VALUES 
	('$image', '$image_name',  '$price','$releasedate', '$details','$category','$subcategory','$discount','$sold')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  //if delete button is clicked....
  if(isset($_POST['delete']))
	{
		header("refresh:0; url = upload.php");
		echo $delete_name= $_POST['image_name'];
		
	}
  $result = mysqli_query($conn, "SELECT * FROM product_detail");
  $result_Cat = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='Category'");
  $result_Sub = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='SubCategory'");
  //deleteProduct.php?name=".$row['name']."
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
  
  <form method="POST" action="upload.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	Image:
  	  <input type="file" name="image">
  	</div>
	<div>
	Image_name:
  	  <input type="text" name="image_name">
  	</div>
	<div>
	price:
  	  <input type="number" name="price">
  	</div>
	<div>
	releasedate:
  	  <input type="date" name="releasedate">
  	</div>
	<div>
	details:
  	  <input type="text" name="details">
  	</div>
	<div>
	category:
  	 <select name="category" id="category">
	<?php
			while ($row = mysqli_fetch_array($result_Cat)) {
			echo $res_Cat=$row['name']; 
			 echo "<option value='$res_Cat'>$res_Cat</option>";
			 }
		?>
	</select>
  	</div>
	<div>
	subcategory:
  	 <select name="subcategory" id="subcategory">
	<?php
			while ($row = mysqli_fetch_array($result_Sub)) {
			echo $res_sub=$row['name']; 
			 echo "<option value='$res_sub'>$res_sub</option>";
			 }
		?>
	</select>
  	</div>
	<div>
	discount:
  	  <input type="number" name="discount">
  	</div>
	<div>
	sold(Number of items sold):
  	  <input type="text" name="sold">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
  <table class="table table-hover table-striped">
        <tbody>
            <tr>
				<th>Product ID </th><th>Item </th>
				<th>Item Name</th>
                <th>Price</th>
                <th>releasedate</th>
                <th>details</th>
                <th>category</th>
                <th>subcategory</th>
                <th>agegroup</th>
                <th>discount</th>
				<th>sold</th>
                <th></th>
            </tr>
  <?php
  
    while ($row = mysqli_fetch_array($result)) {
		echo "<tr class='productitm'>";
      //echo "<td><div id='img_div'></td>";
      	echo "<td>".$row['PID']."</td>";
      	echo "<td><img src='images/".$row['image']."' ></td>";
      	echo "<td>".$row['name']."</td>";
		echo "<td>".$row['price']."</td>";
		echo "<td>".$row['releasedate']."</td>";
		echo "<td>".$row['details']."</td>";
		echo "<td>".$row['category']."</td>";
		echo "<td>".$row['subcategory']."</td>";
		echo "<td>".$row['agegroup']."</td>";
		echo "<td>".$row['discount']."</td>";
		echo "<td>".$row['sold']."</td>";
		echo "<td><div><a href='edit.php?name=".$row['PID']."'>
  		<button type='submit' name='edit'>Edit</button></a>
  	</div></td>";
	echo "<td><div><a href='deleteProduct.php?name=".$row['name']."'>
  		<button type='submit' name='delete'>Delete</button></a>
  	</div></td>";
	echo "<td>$delete_name<td>";
     // echo "</div>";
    }
  ?>
</div>
</body>
</html>