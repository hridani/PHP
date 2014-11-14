
<!DOCTYPE html>
<html>
<head>
    <title>02MostFrequentTag</title>
</head>
<body>
<form action="02MostFrequentTag.php" method="get">
    Enter tags:<br>
<input type='text' name="tags" />
<input type="submit" value="Submit" />
</form>
</body>
</html>
<?php
if(isset($_GET['tags'])){
    $valueTag=explode(",",$_GET['tags']);
    $sortTags=array();
    foreach($valueTag as $value){
       if( array_key_exists($value, $sortTags)){
           $sortTags[$value]++;
       }
       else {
          $sortTags[$value]=1; 
       }
    }
    arsort($sortTags);
    foreach ($sortTags as $key => $value) {
        echo "$key : $value times <br>"; 
    }
    $mostTag=key(array_slice($sortTags, 0,1,TRUE));
    echo "<p>Most Frequent Tag is: $mostTag </p>";
   
}
?>