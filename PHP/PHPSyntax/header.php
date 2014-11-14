<?php
session_start();
if(isset($_SESSION['user'])){
    echo "Welcome ". htmlentities($_SESSION['user']);
    //$_SESSION['count']=0;
    
}else{
    echo "Unautorized access";
die;
}