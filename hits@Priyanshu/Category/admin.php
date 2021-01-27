<?php
include "conn.php";

?>
<html>
<head>
</head>
<body>
<h3>Registered Users List</h3>
<table >
        <thead>
          <tr>
            <th >Rid</th>
            <th >FirstName</th>
            <th >LastName</th>
            <th >Email</th>
            <th >PhoneNumber</th>
            <th >Gender</th>
            <th >Age</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
<?php
	$query="SELECT * FROM register";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) {
		$type=$row['Rid'];
		$firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$phone=$row['phone'];
		$gender=$row['gender'];
		$age=$row['age'];
		
		echo "<tr>";
		echo  " <td> $type</td>";
		echo " <td> $firstname</td>";
		echo " <td>$lastname</td>";
		echo " <td> $email</td>";
		echo " <td> $phone</td>";
		echo " <td> $gender</td>";
		echo " <td>$age</td>";
		echo "</tr>";
	}
	
		?>
		</tbody>
		</table>
<h3>Contact Responses</h3>
<table id="contact">
        <thead>
          <tr>
            <th >Type</th>
            <th >FirstName</th>
            <th >LastName</th>
            <th >Email</th>
            <th >PhoneNumber</th>
            <th >Address</th>
            <th >Message</th>
            <th>&nbsp;</th>
          </tr>
        </thead>
        <tbody>
<?php
	$query="SELECT * FROM contact";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
	while ($row = mysqli_fetch_array($result)) {
		$type=$row['type'];
		$firstname=$row['firstname'];
		$lastname=$row['lastname'];
		$email=$row['email'];
		$phonenumber=$row['phonenumber'];
		$address=$row['address'];
		$message=$row['message'];
		
		echo "<tr>";
		echo  " <td> $type</td>";
		echo " <td> $firstname</td>";
		echo " <td>$lastname</td>";
		echo " <td> $email</td>";
		echo " <td> $phonenumber</td>";
		echo " <td> $address</td>";
		echo " <td>$message</td>";
		echo "</tr>";
	}
	
		?>
		</tbody>
		</table>
</body>
</html>
