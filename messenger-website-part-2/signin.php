<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>messenger signin</title>
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
                  
                   <p><b>Be together, <br/>whenever.</b></p>
                   
                   <a >A simple way to text, video chat and plan things all in one place.</a>
                   
                   <input type="email" placeholder="Email address or phone number">
                   
                   <input type="password" placeholder="Password">
                   
                   <button>Sign Up</button>
                   
                   <p class="link-account">Don't have an account? <a href="signup.php" style="text-decoration:none;color:#0084ff;">Sign Up</a></p>
                   
               </div>
                
            </div>
            
            <div class="signup-logo">
               
               <div class="singup-logo-image">
                   
                   <img src="icon/logo.jpg" alt="">
                   
               </div>
                
            </div>
            
      </div>
       
       
   </div>
    
</body>
</html>