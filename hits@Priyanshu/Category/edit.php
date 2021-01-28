<?php
  // Create database connection
  include "conn.php";	
  echo $Edit_ID=$_GET['name'];
  $result = mysqli_query($conn, "SELECT * FROM product_detail WHERE PID='$Edit_ID'");
  $row = mysqli_fetch_array($result);
  $name=$row['name'];
  $category=$row['category'];
  $subcategory=$row['subcategory'];
  $agegroup=$row['agegroup'];
  $result_Cat = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='Category'");
  $result_Sub = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='SubCategory'");
  $result_age = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='agegroup'");
 $sql = "";

  // If update button is clicked ...
  if (isset($_POST['update'])) {
  	// Get image name
	if (!empty($_FILES['image']['name']))
	{
		echo $image = $_FILES['image']['name'];
		$target = "images/".basename($image);

		$sql = "UPDATE product_detail SET image='$image' WHERE PID='$Edit_ID'";
		// execute query
		mysqli_query($conn, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			echo $msg = "Image uploaded successfully";
		}else{
			echo $msg = "Failed to upload image";
		}
	}
  	// Get text
  	//$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
	//Get image name
	
	if (!empty($_POST['image_name']))
	{
	echo $image_name=$_POST['image_name'];
	$sql = "UPDATE product_detail SET name='$image_name' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	
	if (!empty($_POST['price']))
	{
	echo $price=$_POST['price'];
	$sql = "UPDATE product_detail SET price='$price' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['releasedate']))
	{
	echo $releasedate=$_POST['releasedate'];
	$sql = "UPDATE product_detail SET releasedate='$releasedate' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['details']))
	{
	echo $details=$_POST['details'];
	$sql = "UPDATE product_detail SET details='$details' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['category']))
	{
	echo $category=$_POST['category'];
	$sql = "UPDATE product_detail SET category='$category' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['subcategory']))
	{
	echo $subcategory=$_POST['subcategory'];
	$sql = "UPDATE product_detail SET subcategory='$subcategory' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['agegroup']))
	{
	echo $agegroup=$_POST['agegroup'];
	$sql = "UPDATE product_detail SET agegroup='$agegroup' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['discount']))
	{
	echo $discount=$_POST['discount'];
	$sql = "UPDATE product_detail SET discount='$discount' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	if (!empty($_POST['sold']))
	{
	echo $sold=$_POST['sold'];
	$sql = "UPDATE product_detail SET sold='$sold' WHERE PID='$Edit_ID'";
  	// execute query
  	mysqli_query($conn, $sql);
	}
	echo "<script>alert('DATA UPDATED');
  </script>";
	header("refresh:0; url = upload.php");
  }
	

  	// image file directory
  	
  //}
  /*//if delete button is clicked....
  
  $result = mysqli_query($conn, "SELECT * FROM product_detail");
  $result_Cat = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='Category'");
  $result_Sub = mysqli_query($conn, "SELECT * FROM `sectiondetails`where section='SubCategory'");
  //deleteProduct.php?name=".$row['name']."*/
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
<div><a href='upload.php'>
  		<button type='submit' name='back'>Go Back</button></a>
  	</div>
<div id="content">
  
  <form method="POST" action="edit.php?name=<?php echo $Edit_ID; ?>" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
	<?php
	echo "<img src='images/".$row['image']."'>";
	?>
	Image:
	
  	  <input type="file" name="image" placeholder="">
  	</div>
	<div>
	Image_name:
	<?php
  	  echo "<input type='text' name='image_name' placeholder=".$row['name'].">";?>
  	</div>
	<div>
	price:
	<?php
  	  echo "
  	  <input type='number' name='price' placeholder=".$row['price'].">
	  ";?>
  	</div>
	<div>
	releasedate:
	
  	  <input placeholder="<?php echo $row['releasedate']; ?>" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="releasedate" name="releasedate" />
  	</div>
	<div>
	details:
  	  <input type="text" name="details" placeholder="<?php echo $row['details']; ?>">
  	</div>
	<div>
	category:
	<select name="category" id="category"><?php
     // or whatever you want
    while($res = mysqli_fetch_array($result_Cat)){
		$res_Cat=$res['name'];
        ?><option value="<?php echo $res['name']; ?>"<?php
            if($res_Cat==$category)echo ' selected';
        ?>
		><?php echo $res['name']; ?></option><?php
    }
?></select>
  	 
  	</div>
	<div>
	subcategory:
  	 <select name="subcategory" id="subcategory">
	<?php
     // or whatever you want
    while($res_sub = mysqli_fetch_array($result_Sub)){
		$res_subCat=$res_sub['name'];
        ?><option value="<?php echo $res_sub['name']; ?>"<?php
            if($res_subCat==$subcategory)echo ' selected';
        ?>
		><?php echo $res_sub['name']; ?></option><?php
    }
?>
	</select>
  	</div><div>
	agegroup:
  	 <select name="agegroup" id="agegroup">
	<?php
     // or whatever you want
    while($res_sub = mysqli_fetch_array($result_age)){
		$res_subCat=$res_sub['name'];
        ?><option value="<?php echo $res_sub['name']; ?>"<?php
            if($res_subCat==$agegroup)echo ' selected';
        ?>
		><?php echo $res_sub['name']; ?></option><?php
    }
?>
	</select>
  	</div>
	<div>
	discount:
  	  <input type="number" name="discount" placeholder="<?php echo $row['discount']; ?>">
  	</div>
	<div>
	sold(Number of items sold):
  	  <input type="text" name="sold" placeholder="<?php echo $row['sold']; ?>">
  	</div>
  	<div>
  		<button type="submit" name="update">UPDATE</button>
  	</div>
  </form>
  </body>
  </html>