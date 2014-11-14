<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>URL Replacer</title>
<style>
    textarea{
        width:300px;
    }
</style>
</head>
<body>
<form action="" method="post">
<textarea name="text" placeholder="Input text"></textarea><br>
<input type="submit" name="submit" value="Submit">
</form>

<?php
if(isset($_POST['text'])){
    $text=$_POST['text'];
    $reg='/<a href=[\'\"]([^<>]+)[\'\"]>([^<>]+)<\/a>/';
    preg_match_all($reg,$text,$sentece);
    $text = preg_replace($reg,'[URL=$1]$2[/URL]',$text);
    echo htmlentities($text);

}
?>
</body>
</html>