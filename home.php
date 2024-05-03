<!--<?php 
session_start();

include("backend/db_connect.php");
include("backend/systemlogo.php");
include("backend/postco.php");
$id=$_SESSION['acstudio'];

$th= new enter_system();
$result=$th->check_into($id);
if($result !=""){
  header("Location:admin.php");die;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
  var_dump($_FILES);
  $call= new posts();
  $call->create_video();
  
  //print_r($getting_videos[0]);
}
?>-->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="CSS/fontawesome.min.css">
        <link rel="stylesheet" href="FS5/all.min.css">
        <link rel="stylesheet" href="FS5/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/61c11735db.js" crossorigin="anonymous"></script>
<style>
* {
  box-sizing: border-box;
}

video {
  width: 100%;
  height: auto;
}

.row:after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 15px;
  width: 100%;
}

  .col-s-1 {width: 99.33%;}
 

@media only screen and (min-width: 768px) {
  .col-1 {width: 100%;}

}

html {
  font-family: "Lucida Sans", sans-serif;
}

.header {

  
}

.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.menu li {
  padding: 8px;
  margin-bottom: 7px;
  background-color: #33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}

#robot{width :10%;height: auto;border-radius: 70px;margin-bottom: -25px;}

.aside {

  padding: 15px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12),
}
body{background-color: #ffffff;}
.footer {

  text-align: center;
  font-size: 12px;
  padding: 15px;
}
#disp{border-radius: 30px;}
.gallery{margin-top: 20px;padding-top: 20px;
    border: 1px solid  #242c39;;border-radius: 30px;height: auto;
    padding:10px 5px;background-color: #242c39; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
#st{width:100%;margin-bottom: 10px;}
.soft{background-color: #eaeaec;border-radius: 30px;margin-bottom: 10px;
  border: 0px grey;padding: 20px;box-shadow: 0 3px 4px rgba(0,0,0,0.24);
}
p3{padding:20px;font-size: 17px;color:#33b5e5}
#more{border-radius:5px ;padding: 10px 7px;background-color: #e54533;}
#more:hover{background-color: #33b5e5;}
</style>
</head>
<body>

<div class="header">
  <h1><nav>
    <label class="logo"><p4>ACYA</p4><p6>INFORTECH COMPANY<img src="0001.png" id="robot" ></p6></label>
    
<ul><li><a class="active" href="services.html">services offered </a></li>
    <li><a href="apply.html">Apply</a></li>
  
  
<li><a href="hire.php">Hire</a></li>   

    </ul></nav></h1>
</div>

<div class="row">
 

 <!--this is the video icons
<?php
 $call= new posts();
      
 $getting_videos=$call->get_videos(); 
if($getting_videos){
  foreach( $getting_videos as $item_row){
 //  print_r($item_row); 
  include('views/vd.php');}}

?>
 this is the video icons-->

  </div>
<div class="soft">
  <img src="0001.png" id="st">
  <p3>we provide website,standby softwares development that dont require internet and IT CONSULTANT,hire us 
    <p3></p3>
<button id="more"> more images</button>
</div>

</div>
<div class="soft">
  <img src="img2.png" id="st">
  <p3>we provide website,standby softwares development that dont require internet and IT CONSULTANT,hire us 
    to develop your system and we assure you that your need will be accomplished.
  </p3>
<button id="more"> more images</button>
</div>

</body>

<!-- Mirrored from www.w3schools.com/css/tryit.asp?filename=tryresponsive_video3 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:35:44 GMT -->
</html>
