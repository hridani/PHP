<!DOCTYPE html>
<html>
<head>

<title>SUM</title>

</head>
<body>
    
    
   <script>
   var nextId=0;
        function addInput() {
            nextId++;
            var newDiv=document.createElement("div");
            newDiv.setAttribute('id',"inputBox" + nextId);
            newDiv.innerHTML=
            "<input type=\"text\" name=\"nums[]\">" +
        "<a href=\"javascript:removeInput("+nextId +")\">[Remove]</a><br>";
            document.getElementById('parent').appendChild(newDiv);
        }
        function removeInput(id) {
            var inputBox=document.getElementById('inputBox' + id)
            document.getElementById('parent').removeChild(inputBox);
        }
   </script>
   
   <form method="post">
    <div id="parent">
    </div>
        <a href="javascript:addInput()">[Add]</a>
        <br>
        <input type="submit">
    </form>
    <script>addInput()</script>

<?php
if(isset ($_POST['nums'])){
    $sum=0;
    foreach ($_POST['nums'] as $n) {
        $sum=$sum+$n; 
     
    }
    echo "The sum is $sum.";
    if($sum==15){
        header("Location: http://15.com");
    }
}
?>
</body>
</html>
