<?php
//include("backend/db_connect.php");
class job_hire{
  private $error="";
  //this function is used to check if the inputs are not empyt if any must redirect the same page to retry!!
  function verifying(){

  foreach($_POST as $item=>$key){
    if(empty($key))
    {echo $this->error=$this->error.$item."empy";}
  if($item=="aname")
  {if(is_numeric($key))
    { echo $this->error=$this->error."Only letters and white space allowed";}}//
    
      if($item=="email "){ if(!preg_match("/^[a-zA-Z ]*$/",$key))
        {echo $this->error=$this->error. "Only letters and white space allowed";}}
    
if($this->error==""){
  // if all is okay no errors,then we create the user by calling the function!   
     $this->verify();
    header("Location:hire.php");
    die;
}
    else{return $this->error;}
  }}
public function verify(){
 
//all the inputs from the form are been put in a variables to insert in the database.
$aname=$_POST['aname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$opt=$_POST['opt'];
//$gender=$_POST['gender'];
$location=$_POST['location'];

  $query="INSERT INTO hires (aplicant,,email,phone,demand,locations)
  values('$aname','$email','$phone','$opt','$location')";

 $tips= new Datab();
$q=$tips->QuerySave($query);
print_r($q);
header("Location:hire.php");
die;
}}


