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
          
           if($userImage == null){
               
              $user_image = '<img id="profile-image-user" src="icon/profile_image.jpg">';
               
           }else{
               
              $user_image = '<img id="profile-image-user" src="'.$userImage.'">';
              
           }
          
          echo ' <div class="messenger-search-user-inside">
               
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

?>










