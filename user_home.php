 <?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>user_home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body >
	<h1 align="center">Automated Solid Waste Management Characterization</h1>
	<h3 align="center">(ASWMC)</h3>
	<br>
	<?php $results = mysqli_query($db, "SELECT * FROM trash"); ?>
	<table width="100%" border="1">
		<tr>
			<th><h2>Trash Number</h2></th>
			<th><h2>Trash Characterization</h2></th>
			<th><h2>Kilograms</h2></th>
			<th><h2>Date and time</h2></th>
		</tr>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr style="font-size: 20px;text-align: center;">
			<td><?php echo $row['trash_num']; ?></td>
			<td><?php echo $row['trash_char']; ?></td>
			<td><?php echo $row['kg']; ?></td>
			<td><?php echo $row['date&time']; ?></td>
		</tr>
	<?php } ?>
	</table>
	<div class="input-group" align="center">
			<a href="index.php"><button  class="btn" name="register_btn">Back</button></a>
		</div>
</body>
</html>