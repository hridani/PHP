<!DOCTYPE html>
<html>
<head>
<title>Word Mapper</title>
<meta charset="UTF-8">

</head>
<body>
   <form method="post">
<textarea name="text"></textarea><br>
<input type="submit" value="Count words"/>
</form>
 <?php
if (isset ($_POST['text'])) :
    $text=$_POST['text'];
    $reg='/[A-za-z]+/';
    preg_match_all($reg,strtolower($text),$arrWords);
    $countWords=array_count_values($arrWords[0]);
?>
    <table border=1>
    <?php foreach ($countWords as $word => $count) : ?>
    <tr>
        <td><?=$word?></td>
        <td><?=$count?></td>
    </tr>
    <?php endforeach; ?>
    </table>
 <?php endif; ?>

</body>
</html>
   
