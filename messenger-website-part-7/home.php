<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>messenger home</title>
    
    <!----add jquery link----> 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 
   <link rel="stylesheet" href="messengers.css">
        
    <script src="messengers.js"></script> 
        
</head>
<body>
   
   <div class="messenger-container">
      
       <div class="messenger-left">
          
          <div class="messenger-left-top-nav">
              
               <div class="messenger-top-nav-image">
                  
                 
                   
               </div>
               
               <div class="messenger-top-nav-name">
                  
                   <a><b>Chats</b></a>
                   
               </div>
               
               <div class="messenger-top-nav-icon">
                  
                  <div class="nav-icon-round">
                     
                     <div class="nav-icon-image">
                        
                        <img class="setting" src="icon/settings.png" alt="">
                        
                        <div class="messenger-setting">
                            
                            <div class="messenger-setting-text">
						       
							     <a>Settings</a>
								 
						      </div>
							  
							   <div class="messenger-setting-contact">
 
                                   <a>Active contacts</a>
							
							       <a>Message requests</a>
							
							       <a>Hidden chats</a>
							
							       <a>Unread Chats</a>
							
                                </div>
					  
					          <div class="messenger-setting-about">
 
                                  <a>About</a>
							
							      <a>Terms</a>
							
							     <a>Privacy Policy</a>
							
							     <a>Cookie Policy</a>
							
                             </div>
					  
					        <div class="messenger-setting-help">
 
                               <a>Help</a>
							
							   <a>Report a problem</a>
							
                             </div>
					  
					        <div class="messenger-setting-logout">
 
                               <a href="signout.php">Log Out</a>
							
                             </div>
                             
                        </div>
                         
                     </div>
                      
                  </div>
                  
                  <div class="nav-icon-round">
                     
                     <div class="nav-icon-image">
                        
                        <img src="icon/cam_add.png" alt="">
                         
                     </div>
                      
                  </div>
                  
                  <div class="nav-icon-round">
                     
                     <div class="nav-icon-image">
                        
                        <img src="icon/edit.png" alt="">
                         
                     </div>
                      
                  </div>
                    
               </div>
               
          </div>
          
            <div class="messenger-search-container">
               
               <div class="messenger-search-icon">
                  
                  <div class="messenger-search-image">
                      
                      <img src="icon/search.png" alt="">
                      
                  </div>
                   
               </div>
               
               <div class="messenger-search-input">
                   
                   <div class="messenger-search-input-inside">
                       
                    <input type="text" placeholder="Search Messenger" id="search-users" >
                       
                   </div>
                   
               </div>
                
            </div>
            
            <div class="messenger-user-search-container">
               
               <div class="messenger-user-search-icon">
                  
                  <div class="messenger-user-search-image">
                      
                      <img src="icon/profile_image.jpg" alt="">
                      
                  </div>
                   
               </div>
               
               <div class="messenger-user-search-name">
                   
                   <div class="messenger-user-search-name-inside">
                       
                        <a><b>username</b></a>
                        
                   </div>
                   
                   <div class="messenger-user-last-seen">
                       
                       <div class="messenger-last-seen-message">
                           
                           <a >Last seen Message</a>
                           
                       </div>
                       
                       <div class="messenger-last-seen-date">
                           
                            <a>date</a>
                            
                       </div>
                       
                   </div>
                   
               </div>
                
            </div>
            
            <div class="messenger-search-user-container">
             
            
                  
            </div>
           
       </div> 
       
       <div class="messenger-right">
          
          <div class="messenger-right-top-nav">
              
              <div class="messenger-right-top-nav-profile">
                 
                 <div class="messenger-right-top-nav-image">
                     
                     <img src="icon/profile_image.jpg" alt="">
                     
                 </div>
                  
              </div>
              
              <div class="messenger-right-top-nav-name">
                 
                 <div class="messenger-right-top-user-name">
                     
                     <a><b>Username</b></a>
                     
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
              
          </div>
          
          <div class="messenger-message-container">
             
             <div class="messenger-message-left">
                
                <div class="messenger-chat-container">
                    
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
                
                <div class="messenger-right-user-profile">
                    
                     <div class="messenger-user-right-user-image">
                         
                         <img src="icon/profile_image.jpg" alt="">
                         
                     </div>
                     
                     <div class="messenger-user-right-user-name">
                         
                         <a><b>Username</b></a>
                         
                     </div>
                     
                     <div class="messenger-user-right-user-status">
                         
                         <a>Status</a>
                         
                     </div>
                     
                </div>
                
                 
             </div>
              
          </div>
           
       </div>
       
   </div>
    
</body>
</html>




















