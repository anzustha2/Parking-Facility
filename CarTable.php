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
			<th>licencePlate</th>
			<th>Year</th>
			<th>Brand</th>
			<th>Model</th>
			<th>Color</th>
			</tr>";

	if($result=mysqli_query($con, "SELECT * FROM Car"))
	{
		while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			echo "<tr>";
		   echo "<td>" . $row['licensePlate'] . "</td>";
		   echo "<td>" . $row['Year'] . "</td>";
		   echo "<td>" . $row['brand'] . "</td>";
		   echo "<td>" . $row['model'] . "</td>";
		   echo "<td>" . $row['color'] . "</td>";
		   
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