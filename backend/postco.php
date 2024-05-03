<?php
//include("phpf/db_connect.php");
?><?php
//this class is used to create a post either comments or posts.
class posts{
    private $error="";
function create_video(){
      
    if(isset($_FILES['file']['name']) && !empty($_POST['adm'])  && !empty($_POST['pst']) && !empty($_FILES['file']['name']))
    {

        $folder='upload/';
        if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
        } 
        $filename=$folder.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$filename);
       if(file_exists($filename) && !empty($filename)){
        $post=addslashes($_POST['adm']);
        $title=addslashes($_POST['pst']);
        $postid=$this->commitid();
    
        $query="INSERT INTO videopost(postid,post,videos,title)
  values('$postid','$post','$filename',' $title')";
  //this is ude to rint whats in the post.
   print_r($query);

    $tips= new Datab();
    $q=$tips->QuerySave($query);
    header("Location:admin.php");
    die;
    }elseif($post="" && $title="")
    {$erro=$this->error."all fiels must be field";
        echo $erro;
        echo "file does not exit";}
    
}else{$this->error='not set';}
   // else{return $this->error;}
}

//this function is used to get the post in the database.
   


function get_videos(){
$query="SELECT * FROM videopost  order by id desc ";
//$query="SELECT * FROM makepost  WHERE userid='$userid' order by id desc ";
        $tips= new Datab();
        $q=$tips->QueryRead($query);
        if($q){
        return $q;}
            else{return false;}
        
    }


 function img_pro($id){
        $userid=$id;
//$query="SELECT * FROM makepost  order by id desc ";
$query="SELECT * FROM makepost  WHERE userid='$userid' order by id desc ";
        $tips= new Datab();
        $q=$tips->QueryRead($query);
        if($q){
        return $q;}
            else{return false;}
        
    }
    //generate random number for id.
private function commitid(){
        $leng=rand(4,9);
        $numb="";
        for($i=0; $i<$leng; $i++)
        {$new_rand=rand(0,9);
            $numb=$numb.$new_rand;}
        return $numb;
        }
function video_post($userid){
         
    if(isset($_FILES['file']['name']) && !empty($_POST['vid_tit'])  && !empty($_POST['vid_des']) || !empty($_FILES['file']['name']))
    {

        $folder='upload/'.$userid .'/';
        if(!file_exists($folder))
        {
            mkdir($folder,0777,true);
        } 
        $filename=$folder.$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],$filename);
       
       
        if(file_exists($filename)  && !empty($filename) ){  
        $post=addslashes($_POST['vid_des']);
        $title=addslashes($_POST['vid_tit']);
        $postid=$this->commitid();

        $query="INSERT INTO videopost(post,post_id,userid,video,title)
  values('$post','$postid','$userid','$filename',' $title')";
  //this is ude to rint whats in the post.
   print_r($query);

    $tip= new Datab();
    $j=$tip->QuerySave($query);
    header("Location:homepage.php");
    die;
    } 
}
else{echo "all fields must be field,please try again";}
    
   // else{return $this->error;}
}

function get_v(){
    $query="SELECT * FROM videopost  order by vid desc ";
   // $query="SELECT * FROM videopost WHERE userid='$userid' order by id desc ";
            $ti= new Datab();
            $t=$ti->QueryRead($query);
           // print_r($t);
            if($t){
            return $t;}
                else{return false;}
            
        }

        function vid_pro($id){
            $userid=$id;
            $query="SELECT * FROM videopost WHERE userid='$userid' ";
                    $ti= new Datab();
                    $t=$ti->QueryRead($query);
                   // print_r($t);
                    if($t){
                    return $t;}
                        else{return false;}
                    
                }
}
