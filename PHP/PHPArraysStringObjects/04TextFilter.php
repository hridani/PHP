<!DOCTYPE html>
<html>
<head>
<title>TextFilter</title>
<meta charset="UTF-8">
</head>
<body>
   <form method="post">
<textarea name="text"></textarea><br>
<input type="text" name="banlist">
<input type="submit" value="Submit"/>
</form>

 <?php
 if (isset ($_POST['text']) && isset ($_POST['banlist']))  {
     $banlist=$_POST['banlist'];
     $text=$_POST['text'];
     $reg='/[A-za-z]+/';

     preg_match_all($reg,($banlist),$arrbanlist,PREG_SET_ORDER);
     $firstWords=[];
     $secondWords=[];
     
     foreach($arrbanlist as $match){
       array_push($secondWords,str_repeat("*", strlen($match[0])));
       array_push($firstWords,$match[0]);
       }
       echo $newphrase = str_replace($firstWords, $secondWords, $text);
  }
 ?>
 </body>
</html>