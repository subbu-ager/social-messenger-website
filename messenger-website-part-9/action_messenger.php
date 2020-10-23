<?php

 include('connect.php');

 error_reporting(0);

 session_start();

if($_FILES['upload_image']['name'] != ''){
    
    $userId = $_SESSION['user_id'];
    
    $name = $_FILES['upload_image']['name'];
    
    $tmp_name = $_FILES['upload_image']['tmp_name'];
    
    $target_file = 'profile_image/'.$name;
    
    move_uploaded_file($tmp_name, $target_file);
    
    $image_url = "http://localhost/messenger/".$target_file;
    
    $sql = "UPDATE `user` SET `user_image`='$image_url' WHERE `user_id`='$userId'";
    
    $result = mysqli_query($conn, $sql);
    
    if( $result){
        
        echo "profile image upload successfully";
    }
    
}

// fetch profile image

 if(isset($_POST['fetch_profile_image'])){
     
      $userId = $_SESSION['user_id'];
    
      $sql ="SELECT * FROM `user` WHERE `user_id`=' $userId'";
     
      $result = mysqli_query($conn, $sql);
     
      while($row = mysqli_fetch_assoc($result)){
          
           $userImage = $row['user_image'];
          
           if($userImage == null){
               
              $user_image = '<img id="profile-image-user" src="icon/profile_image.jpg">';
               
           }else{
               
              $user_image = '<img id="profile-image-user" src="'.$userImage.'">';
              
           }
          
          echo '<div class="messenger-nav-image">
                     
                         '.$user_image.'
                         
                        <input type="file" id="profile-image">     
                         
                  </div>';
      }
 }


 // fetch search users

 if(isset($_POST['fetch_search_users'])){
     
      $userId = $_SESSION['user_id'];
     
      $userName = mysqli_real_escape_string($conn, $_POST['search_users'] );
    
      $sql ="SELECT * FROM `user` WHERE `username` LIKE '%".$userName."%' AND 
      
             `user_id` != '$userId'";
     
      $result = mysqli_query($conn, $sql);
     
      while($row = mysqli_fetch_assoc($result)){
          
           $userImage = $row['user_image'];
           
           $user_name = $row['username'];
          
           $user_id  = $row['user_id'];
          
           if($userImage == null){
               
              $user_image = '<img id="profile-image-user" src="icon/profile_image.jpg">';
               
           }else{
               
              $user_image = '<img id="profile-image-user" src="'.$userImage.'">';
              
           }
          
          echo ' <div class="messenger-search-user-inside" id="'.$user_id.'">
               
               <div class="messenger-search-user-icon">
                  
                  <div class="messenger-search-user-image">
                      
                      '.$user_image.'
                      
                  </div>
                   
               </div>
               
               <div class="messenger-search-user-name">
                   
                   <div class="messenger-search-user-name-inside">
                       
                        <a><b>'.$user_name.'</b></a>
                        
                   </div>
                   
               </div>
                 
              </div>';
       
      }
     
 }


 // fetch chat users profile and chat box

 if(isset($_POST['fetch_search_users_profile'])){
     
    $search_userId = $_POST['search_users_id'];
     
    if($search_userId != null){
        
        echo make_chat_users($conn, $search_userId);
            
    }else{
        
    }
     
 }

  function make_chat_users($conn, $search_userId){
      
     $output = ''.make_chat_user_top_nav($conn, $search_userId).'
          
          <div class="messenger-message-container">
             
             <div class="messenger-message-left">
                
                <div class="messenger-chat-container">
                   
                   <div class="messenger-chat-box">
                       
                       <div class="messenger-chat-box-right">
                          
                          <div class="messenger-chat-right">
                             
                             <div class="messenger-chat-right-inside">
                                
                                <div class="messenger-chat-right-text">
                                    
                                    <div class="messenger-chat-right-text-display">
                                       
                                       <p>Hi</p>
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="messenger-chat-right-icon">
                                    
                                    <div class="messenger-chat-right-icon-image">
                                        
                                        <img src="icon/check.png" alt="">
                                        
                                    </div>
                                    
                                </div>
                                 
                             </div>
                              
                          </div>
                           
                       </div>
                       
                       <div class="messenger-chat-box-left">
                          
                          <div class="messenger-chat-left">
                             
                             <div class="messenger-chat-left-inside">
                               
                               <div class="messenger-chat-left-icon">
                                    
                                    <div class="messenger-chat-left-icon-image">
                                        
                                        <img src="icon/profile_image.jpg" alt="">
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="messenger-chat-left-text">
                                    
                                    <div class="messenger-chat-left-text-display">
                                       
                                       <p>Hello</p>
                                        
                                    </div>
                                    
                                </div>
                                 
                             </div>
                              
                          </div>
                           
                       </div>
                       
                   </div>
                    
                </div>
                
                <div class="messenger-chat-bottom">
                   
                   <div class="messenger-chat-bottom-icon">
                      
                      <div class="messenger-chat-bottom-icon-inside">
                          
                          <img src="icon/add.png" alt="">
                          
                      </div>
                      
                      <div class="messenger-chat-bottom-icon-inside">
                          
                          <img src="icon/gif.png" alt="">
                          
                      </div>
                      
                      <div class="messenger-chat-bottom-icon-inside">
                          
                          <img src="icon/sticker.png" alt="">
                          
                      </div>
                      
                      <div class="messenger-chat-bottom-icon-inside">
                          
                          <img src="icon/file.png" alt="">
                          
                      </div>
                       
                   </div>
                   
                   <div class="messenger-chat-bottom-input">
                      
                      <div class="messenger-chat-bottom-input-inside">
                         
                         <div class="messenger-chat-input-type">
                            
                            <input type="text" placeholder="Type a message...">
                             
                         </div>
                         
                         <div class="messenger-chat-emoji">
                            
                            <div class="messenger-chat-emoji-image">
                                
                                <img src="icon/smile.png" alt="">
                                
                            </div>
                             
                         </div>
                          
                      </div>
                       
                   </div>
                   
                   <div class="messenger-chat-bottom-send">
                      
                      <div class="messenger-chat-bottom-send-inside">
                          
                          <img src="icon/like.png" alt="">
                          
                      </div>
                       
                   </div>
                    
                </div>
                 
             </div>
             
             <div class="messenger-message-right">
                
                '.make_chat_user_profile($conn, $search_userId).'
                
                <div class="messenger-setting-action">
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a>MORE ACTIONS</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/arrow_down.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a style="color:black; font-size:17px;">Search in Conversation</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/search.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a style="color:black; font-size:17px;">Edit Nicknames</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/edit_name.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a style="color:black; font-size:17px;">Change theme</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/color.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a style="color:black; font-size:17px;">Change Emoji</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/like.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                </div>
                
                <div class="messenger-post-action">
                    
                    <div class="messenger-action">
                       
                       <div class="messenger-action-text">
                          
                          <div class="messenger-action-text-inside">
                              
                              <a>SHARED PHOTOS</a>
									 
                          </div>
                           
                       </div>
                       
                       <div class="messenger-action-image">
                          
                          <div class="messenger-action-image-inside">
                             
                             <img src="icon/arrow_down.png" alt="">
                              
                          </div>
                           
                       </div>
                        
                    </div>
                    
                 </div>
                
                 
             </div>
              
          </div>' ;
      
     return  $output;
      
  }


 function make_chat_user_top_nav($conn, $search_userId){
     
     $sql ="SELECT * FROM `user` WHERE `user_id` = '$search_userId'";
     
      $result = mysqli_query($conn, $sql);
     
      while($row = mysqli_fetch_assoc($result)){
          
           $userImage = $row['user_image'];
           
           $user_name = $row['username'];
          
           $user_id  = $row['user_id'];
          
           if($userImage == null){
               
              $user_image = '<img id="profile-image-user" src="icon/profile_image.jpg">';
               
           }else{
               
              $user_image = '<img id="profile-image-user" src="'.$userImage.'">';
              
           }
          
        $output = '<div class="messenger-right-top-nav">
              
              <div class="messenger-right-top-nav-profile">
                 
                 <div class="messenger-right-top-nav-image">
                     
                     '.$user_image .'
                     
                 </div>
                  
              </div>
              
              <div class="messenger-right-top-nav-name">
                 
                 <div class="messenger-right-top-user-name">
                     
                     <a><b>'.$user_name.'</b></a>
                     
                 </div>
                 
                 <div class="messenger-right-top-user-status">
                     
                     <a>status</a>
                     
                 </div>
                  
              </div>
              
              <div class="messenger-right-top-nav-icon">
                 
                 <div class="messenger-right-top-image">
                     
                     <img src="icon/call.png" alt="">
                     
                 </div>
                  
              </div>
              
              <div class="messenger-right-top-nav-icon">
                 
                 <div class="messenger-right-top-image">
                     
                     <img src="icon/video_call.png" alt="">
                     
                 </div>
                  
              </div>
              
              <div class="messenger-right-top-nav-icon">
                 
                 <div class="messenger-right-top-image">
                     
                     <img src="icon/information.png" alt="">
                     
                 </div>
                  
              </div>
              
          </div>';
          
      }
     
     return $output;
     
 }


function make_chat_user_profile($conn, $search_userId){
    
    $sql ="SELECT * FROM `user` WHERE `user_id` = '$search_userId'";
     
      $result = mysqli_query($conn, $sql);
     
      while($row = mysqli_fetch_assoc($result)){
          
           $userImage = $row['user_image'];
           
           $user_name = $row['username'];
          
           $user_id  = $row['user_id'];
          
           if($userImage == null){
               
              $user_image = '<img id="profile-image-user" src="icon/profile_image.jpg">';
               
           }else{
               
              $user_image = '<img id="profile-image-user" src="'.$userImage.'">';
              
           }
          
        $output = '<div class="messenger-right-user-profile">
                    
                     <div class="messenger-user-right-user-image">
                         
                         '.$user_image.'
                         
                     </div>
                     
                     <div class="messenger-user-right-user-name">
                         
                         <a><b>'.$user_name.'</b></a>
                         
                     </div>
                     
                     <div class="messenger-user-right-user-status">
                         
                         <a>Status</a>
                         
                     </div>
                     
                </div>';
          
      }
    
    return $output;
}
  

?>










