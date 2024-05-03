<?php 


class Datab
{//we only neeed to access this variables inside this class for security purposes!
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dms="acstudio";
    
function database_com(){
   
      
// Create connection
$conn = mysqli_connect($this->servername, $this->username,$this-> password,$this->dms);

// Check connection
if (!$conn) {
    die("Connection failed: " .  mysqli_connect_error());
}
//echo "Connected successfully";
return $conn;
}
//this function is used to pass different queries like (insert,select etc)!
function QueryRead($query){

 $store=$this->database_com();
 $result=mysqli_query($store, $query);

 if (!$result){
     return false;
     echo"nothing was retrieved";
 }
 else { $data=false;
// here this will help us to get data in the database and display in an array(list)
    while($row=mysqli_fetch_assoc($result)){
        $data[]=$row;
    }return $data;  echo"data was retrieved";
}}

function QuerySave($query){

    $store=$this->database_com();
    $result=mysqli_query($store, $query);
    ECHO $result;
    echo "New record created successfully";
    if (!$result){
        return false;
    }
    else {return true;}}}
