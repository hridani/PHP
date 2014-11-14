<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Form Data</title>
<style>
  div{
  	margin:5px;
  	
  }
</style>
</head>
<body>
	<form action="07GetFormData.php" method="get" >
   <div><input type="text" name="name" placeholder="Name"></div>
    <div><input type="text" name="age" placeholder="Age"></div>
    <div><input type='radio' name="gender" id="male" value="male">
    	<label for="male"> Male</label></div>
    <div><input type='radio' name="gender" id="famale" value="female">
    	<label for="female"> Female</label></div>
    	<div><input type="submit" value="Submit"></div>
	</form>
	<div>
	<?php
	
if(isset($_GET['name'])) {
echo "My name is {$_GET['name']}. I am {$_GET['age']} years old. I am {$_GET['gender']}.";
}
?>
	</div>
	</body>
	</html>
	