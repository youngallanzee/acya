
                    <!--this is the video icons-->
                    <div class="col-1">
                     <p3>    <div class="another">
                       <div class="gallery">
                      <h1><?php echo $item_row['title'] ?></h1><br>
                         <video width="1300" controls  id="disp">
                           <source src="<?php echo $item_row['videos'] ?>" type="video/mp4">
                           <source src="<?php echo $item_row['videos'] ?>.ogg" type="video/ogg">
                         </video>
                      <div class="title"><?php echo $item_row['post'] ?> </div>
                      <a href=""> <span>like</span></a><a href=""><span>comment</span></a><a href=""><span>donate/support</span></a>  
                       </div>
                     </div>
                   </p3>
                    </div>