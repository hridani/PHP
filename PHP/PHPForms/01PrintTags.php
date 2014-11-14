<!DOCTYPE html>
<html>
<head>
    <title>Print Tags</title>
</head>
<body>
<form action="01PrintTags.php" method="get">
Enter tags:<br>
<input type='text' name="tags" />
<input type="submit" value="Submit" />
</form>
</body>
</html>
<?php
if(isset($_GET['tags'])){
    $valueTag=array_filter(explode(",",$_GET['tags']));
    $count=0;
    foreach($valueTag as $value){
       echo $count++.":". $value;
    echo "<br />";
    }
}
?>