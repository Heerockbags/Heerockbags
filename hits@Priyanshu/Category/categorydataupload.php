<?php
  // Create database connection
  include "conn.php";	
  if (isset($_POST['upload'])) {
	  $name=$_POST['name'];
	  $section=$_POST['category'];
	  $sql = "INSERT INTO sectiondetails (name, section) VALUES ('$name', '$section')";
	  mysqli_query($conn, $sql);
  }
  $result = mysqli_query($conn, "SELECT * FROM sectiondetails");
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
<table class="table table-hover table-striped">
<tbody>
	<tr>
		<th>Name </th>
		<th>Section</th>
    </tr>
  <?php
    while ($row = mysqli_fetch_array($result)) {
		$res_name=$row['name']; 
		$res_sec=$row['section']; 
     echo "<tr>";
	 echo "<td>$res_name</td>";
	 echo "<td>$res_sec</td>";
	 echo "</tr>";

    }
  ?>
  <form method="POST" action="categorydataupload.php" enctype="multipart/form-data">
  	<label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  	<div>
  	 <label for="category">Category</label>
  <input type="text" id="category" name="category"><br><br>
  	</div>
  	
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>