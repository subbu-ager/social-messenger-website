<?php

 include('connect.php');

 error_reporting(0);

 session_start();

 if(isset($_POST['submit'])){
     
    $username = $_POST['username'];
    
    $email    = $_POST['email'];
     
    $password = $_POST['password'];
     
    if(empty($username)|| empty($email) || empty($password)) {
       
        
        $message = "<h6>"."Plss fill all the feilds.."."</h6>";
        
    }else{
        
        $sql = "SELECT * FROM `user` WHERE `username`='$username'";
        
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result)>0){
              
           $message = "<h6>"."username already excist."."</h6>";
           
        }else{
            
            $query ="INSERT INTO `user`( `username`, `email`, `password`) VALUES
            
                    ('$username','$email','$password')";
            
            $query_result = mysqli_query($conn, $query);
            
            if($query_result){
                
               $sql = "SELECT * FROM `user` WHERE `username`='$username'";
        
               $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_assoc($result)){
                    
                    $_SESSION['user_id'] = $row['user_id'];
                    
                    header('location:home.php');
                    
                }
        
            }
        }
    }
     
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>messenger signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style>
        *{
            
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            
            width: 100%;
            height: 100%;
            background-color: white;
        }
        .signup-top-nav{
            
            width: 100%;
            max-width: 1000px;
            margin: auto;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .signup-top-nav-icon{
            
            flex: 1;
        }
        .signup-top-nav-link{
            
            flex: 1;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 20px;
            color: #aaa;
        }
        .signup-top-nav-icon img{
            
            width: 40px;
            height:40px;
        }
        .signup-container{
            
            width: 100%;
            max-width: 1000px;
            margin: auto;
            height: 100%;
            display: flex;
            justify-content: center;
            margin-top: 50px;
            
        }
        .singup-input{
            
            flex: 1;
        }
        .signup-logo{
            
            flex:1;
        }
        .singup-logo-image{
            
            width: 100%;
        }
        .singup-logo-image img{
            
            width: 100%;
        }
        .signup-input-inside{
            
            width: 60%;
            height: 100%;
            
        }
        .signup-input-inside p{
        
            font-size: 30px;
            margin-bottom: 15px;
        }
        .signup-input-inside a{
        
            font-size: 20px;
            color: #aaa;
        }
        .signup-input-inside input[type=email],input[type=password],input[type=text]{
            
            width: 100%;
            padding: 15px;
            border: none;
            background-color: #eee;
            margin-top: 10px;
            border-radius: 10px;
            font-size: 17px;
        }
        .signup-input-inside button{
            
            width: 100px;
            padding: 10px;
            border: none;
            background-color: #0084ff;
            margin-top: 15px;
            border-radius: 30px;
            font-size: 17px;
            color:white;
            cursor: pointer;
            font-weight: bold;
            
        }
        .signup-input-inside .link-account{
            
            font-size: 20px;
            margin-top: 15px;
        }
        h6{
            
            font-size: 20px;
            margin-top: 10px;
            color: red;
        }
    </style>
    
</head>
<body>
   
   <div class="container">
      
      <div class="signup-top-nav">
          
           <div class="signup-top-nav-icon">
              
              <img src="icon/messenger.png" alt="">
               
           </div>
           
           <div class="signup-top-nav-link">
              
             <a>Rooms</a>
			 
			 <a>Features</a>
			 
			 <a>Privacy & safety</a>
			 
			 <a>For developers</a>
               
           </div>
           
      </div>
      
      <div class="signup-container">
          
            <div class="singup-input">
               
               <div class="signup-input-inside">
                  
                   <form action="" method="post">
         
                   <p><b>Be together, <br/>whenever.</b></p>
                   
                   <a >A simple way to text, video chat and plan things all in one place.</a>
                   
                   <?php echo $message;  ?>
                   
                   <input type="email" name="email" placeholder="Email address or phone number">
                   
                   <input type="text" name="username" placeholder="Username">
                   
                   <input type="password" name="password" placeholder="Password">
                   
                   <button type="submit" name="submit">Sign Up</button>
                   
                   <p class="link-account">Have an account? <a href="signin.php" style="text-decoration:none;color:#0084ff;">Sign In</a></p>
                   
               </div>
                
            </div>
            
            <div class="signup-logo">
               
               <div class="singup-logo-image">
                   
                   <img src="icon/logo.jpg" alt="">
                   
               </div>
                
            </div>
            
            </form>
            
      </div>
       
       
   </div>
    
</body>
</html>






