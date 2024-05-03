

<?php
//this class is used to get database record in order to login.
class enter_system{
  private $error="";
  
  public function retrieve_db(){
  
    $email=$_POST['email'];
  
    $pin=$_POST['pin'];
   
    
      $query="SELECT * FROM admin_table WHERE  email='$email' limit 1";
     //this part is used to call the database for retriving or inserting there,to the previous class we have created.

     $tip= new Datab();
    $outcome=$tip->QueryRead($query);
   
    print_r($outcome);
    /*we check if we get anything at position 0, or the inputs are equal to whats in the databse
    ,we start a session with any Name,the userid is passed in that session so that the browser remember me  */
   if($outcome)
   {$row=$outcome[0];
  if($pin==$row['pin'] && $row['email']==$email)
  {  
    $_SESSION['acstudio']=$row['email'];
    header("Location:admin.php");
  }elseif($pin!=$row['pin'])
  {$this->error.='wrong pin';}
  } 
else{$this->error.="  "."   ".'incorrect inputs plese try again!';}
   //else{$this->error.='no email found';}
  return $this->error; }

  

  function check_into($id){
    $query="SELECT * FROM admin_table WHERE  email=$id";
    $tip= new Datab();
    $outcome=$tip->QueryRead($query);
    if($outcome)

    {
      return $outcome;
      header("Location:admin.php");die;
   }
    else{
      return false;
    }
  }


}