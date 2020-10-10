<?php

 include('connect.php');

 //error_reporting(0);

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

?>










