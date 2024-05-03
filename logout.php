<?php
//just help us to log out of the application by unseeting the seession since,
//session has the id of a user.
function exitp(){
    session_start();
    if(isset($_SESSION['acstudio']))
    {$_SESSION['acstudio']=Null;
    unset($_SESSION['acstudio']);}
header('Location:login.php');}
exitp();