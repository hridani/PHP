<!DOCTYPE html>
<html>
<head>
<title>TextColorer</title>
<meta charset="UTF-8">

</head>
<body>
   <form method="post">
<textarea name="text"></textarea><br>
<input type="submit" value="Color text"/>
</form>

 <?php
if (isset ($_POST['text'])) {
    $text=$_POST['text'];
    $color='';
    $output='';
    for($i=0; $i< strlen($text) ;$i++){
    $char=$text[$i];
    if (ord($char) % 2) {
           $color="blue";}
    else {
           $color="red";}
    $output.= '<span style="color:' . $color . '">' . $char . " </span>";
    }
    echo $output;
   
}
?>
</body>
</html>
