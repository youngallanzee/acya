<?php 
session_start();

include("backend/db_connect.php");
include("backend/save.php");

$id=$_SESSION['acstudio'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
  $call= new job_hire();
 $t=$call->verify();


}
?>

<!DOCTYPE html>
<html>
  <head>  <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="FS5/all.min.css">
    <link rel="stylesheet" href="FS5/fontawesome.min.css">
    <style>
    h1,#HI{ color :#1da9cc;}
    #si{font-size: 10;padding-top: 50px;color: #1da9cc;}
    h2{ color: #1da9cc;font-size: 40px;margin-left: 300px;}
   body{width: 50%;height: 70%;margin-left: 200px;
     background: #242c39;
     }
     #door{
      margin:auto;
     }
       input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 0px solid black;
        border-radius: 4px;
        box-sizing: border-box;
      }
      input[type=password]  {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
      }
      p1{display: flex;}
      input[type=submit] {
        width: 100%;
        background-color:  #1da9cc;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color:  #1da9cc;
      }
      #dove{font-size: 60px;color: #1da9cc;}
      div {
        border-radius: 5px;
        background-color:  #242c39;
        padding: 20px;
      }
      spam{color: #ffff;}
      </style>
      <body >
      <p1>
        <i  class="fas fa-door-open" id="dove"></i> <h1>Please fill a given form to hire us</h1>
       
      </p1>
      <div> 
        <form  id="sd" method="post" action="backend/save.php">


        
          <label for="fname"><spam>Applicant Name</spam></label>
          <input type="text" id="fname" name="aname" placeholder="Your name.." value="">
      
      
          <label for="lname"><spam>E Mail</spam></label>
          <input type="text" id="lname" name="email" placeholder="Your Email.."value="">
          <label for="fname"><spam>Phone Number</spam></label>
          <input type="text" id="phone" name="phone" placeholder="Your No.."value="">
      
          <input type="checkbox" id="che" name="gender" value='company' /><spam>Company</spam><br>
          <input type="checkbox" id="f" name="gender" value='individual'/><spam>Individual</spam><br><br>
          <tr><td style="color: #d8a927;"><spam>Choose your Request</spam></td><td> <select type="option" id="f" name="opt">
            <option>website</option>
            <option>standby software</option>
            <option>IT Consultant</option>
            <option>existing system</option>
                                </select>
         
          <label for="lname"><spam>Enter Location</spam></label>
          <input type="password" id="lname" name="location" placeholder="confirm Please.." value="">
          <input type="submit" value="Submit">
        </form>
      </div>
      
      </body>
      
</html>