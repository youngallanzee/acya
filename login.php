
<?php 
session_start();

include("backend/db_connect.php");
include("backend/systemlogo.php");
//include("phpf/db_connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$th= new enter_system();
$result=$th->retrieve_db();

}?>

<!DOCTYPE html>
<html>
  <head>  <link rel="stylesheet" href="CSS/all.min.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
    <link rel="stylesheet" href="FS5/all.min.css">
    <link rel="stylesheet" href="FS5/fontawesome.min.css">
    <style>
    h1{ color:#ffa500;}
   body{width: 50%;height: 70%;margin-left: 200px;
     background: #242c39;
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
        background-color:  #ffa500;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
      
      input[type=submit]:hover {
        background-color: :#4c81af;
      }
      #dove{font-size: 60px;color: #eba715;}
      div {
        border-radius: 5px;
        background-color:  #242c39;
        padding: 20px;
      }
      spam,#key{color:#d8a927;}
#lname{}      
      </style>
      <script>

      </script>
    </head>
      <body>
      <p1>
        <i  class="fa fa-dove" id="dove"></i> <h1>Ac Studio</h1>
      </p1>
      <div id="">
    
    </div>
      <div>
      <form  id="sd" method="post" >
       
          
          <label for="fname"><spam>E Mail</spam></label>
          <input type="text" id="fname" name="email" placeholder="Use email if you want">
          <label for="lname"><spam>Login Pin</spam></label>
          <input type="password" id="lname" name="pin" placeholder="Pin Please..">
          <input type="submit" value="Submit">
          <i class="fa fa-key" id='key'></i><a id="menu" href="grid.php">back</a></i><br><br><br>
          <i class="fas fa-house-user" id='key'></i><a id="menu" href="home.php">Return Home</a></i>
        </form>
      </div>
      
      </body>
      
</html>