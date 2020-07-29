<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		table,tr,td,th{
		border: 3px solid;
		
		height: 50;
		border-collapse: collapse;
		text-align: center;
	}
	th
	{
		color: red;
	}
	
	th:hover{
		background-color: yellow;
	}
	
	tr{
		color: black;
	}

	</style>
</head>
<body>

<h1 style="    text-align: center;
    color: red;
    font-style: italic;">DISPLAY DATA:</h1>
 <center>
<table class="container" >
	<tr>
		<td>
			
			<th>student name</th>
			<th>Email</th>
			<th>mobile</th>
			<th>address</th>
			<th>Gender</th>
			<th>Collage</th>
			<th>Qualification</th>
			<th>Branch</th>
			<th>semester</th>
			<th>course</th>
			<th>Action</th>

		</td>
	</tr>

	<?php
	include('dbcon.php');
	$q= "select * from reg";
	 $query = mysqli_query($con, $q);

	while ($result= mysqli_fetch_array($query)) {
		



	?>


	<tr>
		<td><?php echo $result['id']?></td>
		<td><?php echo $result['sname']?></td>
		<td><?php echo $result['email']?></td>
		<td><?php echo $result['mno']?></td>
		<td><?php echo $result['address']?></td>
		<td><?php echo $result['gender']?></td>
		<td><?php echo $result['collage']?></td>
		<td><?php echo $result['qualification']?></td>
		<td><?php echo $result['branch']?></td>
		<td><?php echo $result['sem']?></td>
		<td><?php echo $result['Icourse']?></td>


		<td>Action</td>
	</tr>

	<?php
		}
	?>
</table>

</center>



</body>
</html>