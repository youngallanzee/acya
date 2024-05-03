<?php
class Search{
function search_post(){          
 if(isset($_POST['submit']) && !empty($_POST['searching']))
 {
    
     $inp=$_POST['searching'];
$query="SELECT * FROM makepost WHERE title LIKE '%$inp%' ";
        $result= new Datab();
        $outcome=$result->QueryRead($query);
        if(  $outcome){
            return  $outcome;}
            else{return false;}

}     
  

}

function search_friends() {
    if(isset($_POST['submit']) && !empty($_POST['searching']))
 {
    $inp=$_POST['searching'];
    $query="SELECT * FROM user WHERE  username LIKE  '%$inp%'";
    $tip= new Datab();
    $outcome=$tip->QueryRead($query);
    if(  $outcome){
    return  $outcome;}
    else{return false;}}
}

function view(){          
    if(isset($_GET['sid']) )
    {
       
        $inp=$_GET['sid'];
   $query="SELECT * FROM friends WHERE current_loged=$inp OR friend_id=$inp ";
           $result= new Datab();
           $outcome=$result->QueryRead($query);
           print_r($outcome);
           if(  $outcome){
               return  $outcome;}
               else{return false;}
   
   }     
     
   
   }


}