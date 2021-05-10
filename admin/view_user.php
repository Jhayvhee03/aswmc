<?php 
	include('../functions.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1 align="center">Automated Solid Waste Management Characterization</h1>
	<h3 align="center">(ASWMC)</h3>
	<?php $results = mysqli_query($db, "SELECT * FROM users"); ?>

<table border="1" width="100%">
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['username']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td>
				<a href="../functions.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>
<div class="input-group" align="center">
			<a href="home.php"><button  class="btn" name="register_btn">Back</button></a>
		</div>
</body>
</html>