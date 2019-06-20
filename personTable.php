 <html>
<head>
<title>Anju’s phpTest</title>
</head>
<body>
<?php
	$con=mysqli_connect("localhost", "db_Spr19_ashrest3", "ashrest3", "db_Spr19_ashrest3");

	if(mysqli_connect_errno())
	{
		die('Could not connect: ' . mysqli_connect_error());
	}

	echo "<table border='1'>
			<tr>
			<th>personID</th>
			<th>firstName</th>
			<th>lastName</th>
			<th>licensePlate</th>
			<th>address</th>
			<th>phone</th>
			<th>email</th>
			<th>userName</th>
			<th>password</th>
			</th>";

	if($result=mysqli_query($con, "SELECT * FROM Person"))
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			echo "<tr>";
		   echo "<td>" . $row['personID'] . "</td>";
		   echo "<td>" . $row['firstName'] . "</td>";
		   echo "<td>" . $row['lastName'] . "</td>";
		   echo "<td>" . $row['licensePlate'] . "</td>";
		   echo "<td>" . $row['address'] . "</td>";
		   echo "<td>" . $row['phone'] . "</td>";
		   echo "<td>" . $row['email'] . "</td>";
		   echo "<td>" . $row['userName'] . "</td>";
		   echo "<td>" . $row['password'] . "</td>";
		   
		   
	       echo "</tr>";
			
		}
		mysqli_free_result($result);
	}
	else
	{
		die('Invalid query: ' . mysqli_error($con));
	}
	
	mysqli_close($con);
?>
</body>
</html>