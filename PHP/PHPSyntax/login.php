

 <form method="post">
 <input type='text' name="user">
 <input type="password" name="pass">
 <input type="submit">
 </form>
 
 <?php
 if(isset($_POST['user'])){
     $user=$_POST['user'];
     $pass=$_POST['pass'];
     if($user=='dani' && $pass=="lubolubo"){
     session_start();
     $_SESSION['user']=$user;
     header("Location: sessions.php");
     }
     else{
         echo "Invalid user/pass";
     }
 }
?>