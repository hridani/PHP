<!DOCTYPE html>
<html>
<head>
<title>SentenceExtractor</title>
<meta charset="UTF-8">
</head>
<body>
   <form method="post">
    <input type="text" name="text"><br>
    <input type="text" name="word"><br>
    <input type="submit" value="Submit"/>
    </form>

 <?php
 if (isset ($_POST['text']) && isset ($_POST['word']))  {
     $text=$_POST['text'];
     $word=$_POST['word'];

        $reg='/[^!|?|.]+[!|?|.]/';
        preg_match_all($reg,($text),$sentence,PREG_SET_ORDER);
        $sentArray=[];
        foreach($sentence as $match){
            array_push($sentArray,$match[0]);
            $reg='/\b'.$word.'\b/';

            if (preg_match($reg,$match[0]))
                echo $match[0];
        }
 }
 ?>
 </body>
</html>
 