<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>HTML Table</title>
<link href="style.css" rel="stylesheet">
</head>
<body>
<?php
$name = 'Gosho';
$phoneNumber = '0882-321-423';
$age = 24;
$address = 'Hadji Dimitar';
?>
<table>
	<tr>
		<th>Name</th>
		<td><?php echo $name; ?></td>
	</tr>
	<tr>
		<th>Phone number</th>
		<td><?php echo $phoneNumber; ?></td>
	</tr>
		<th>Age</th>
		<td><?php echo $age; ?></td>
	</tr>
		<th>Address</th>
		<td><?php echo $address; ?></td>
	</tr>
</table>
</body>
</html>