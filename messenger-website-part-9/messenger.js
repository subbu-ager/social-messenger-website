$(document).ready(function(){
      
   //setting open and close
    
    $(document).on('click','.setting',function(){
        
        $('.messenger-setting').toggle();
        
    });
    
    //profile image click
    
    $(document).on('click','#profile-image-user',function(){
        
        $('#profile-image').trigger('click');
        
    });
    
     $(document).on('change','#profile-image',function(){
         
         var file = document.getElementById('profile-image').files[0];
         
         var formData = new FormData();
         
         formData.append("upload_image", file);
         
         $.ajax({
             
             url: 'action_messenger.php',
             
             method:'post',
             
             data:formData,
             
             contentType: false,
             
             cache:false,
             
             processData:false,
             
             success:function(data){
                 
                 fetch_profile_image();
             }
         });
    
    });
    
    
    // fetch profile image
    
    fetch_profile_image();
     
    function fetch_profile_image(){
       
        var action = 'fetch_profile_image';
        
        $.ajax({
             
             url: 'action_messenger.php',
             
             method:'post',
             
             data:{fetch_profile_image:action},
             
             success:function(data){
                 
                $('.messenger-top-nav-image').html(data);
                 
               
             }
         });
        
    }
    
    //fetch search users
    
     $(document).on('focus','#search-users',function(){
         
         $('.messenger-user-search-container').hide();
         
         $('.messenger-search-user-container').show();
         
     });
    
     $(document).on('blur','#search-users',function(){     
        
        var searchUsers = $('#search-users').val();
        
        if(searchUsers != ''){
        
         $('.messenger-user-search-container').hide();
         
         $('.messenger-search-user-container').show();
         
        }else{
            
          $('.messenger-user-search-container').show();
         
          $('.messenger-search-user-container').hide();
           
        }
          
     });
    
    
    $(document).on('keyup','#search-users',function(){
        
        var searchUsers = $('#search-users').val();
        
        if(searchUsers != ''){
           
          $('.messenger-user-search-container').hide();
         
          $('.messenger-search-user-container').show();
         
           fetch_search_users(searchUsers);
            
        }else{
            
            $('.messenger-user-search-container').show();
         
            $('.messenger-search-user-container').hide();
             
            
        }
             
     });
    
    fetch_search_users();
     
    function fetch_search_users(searchUsers){
       
        var action = 'fetch_search_users';
        
        $.ajax({
             
             url: 'action_messenger.php',
             
             method:'post',
             
             data:{fetch_search_users:action, search_users: searchUsers},
             
             success:function(data){
                 
               $('.messenger-search-user-container').html(data);
                 
             }
         });
        
    }
    
    // search users profile click
    
    
     $(document).on('click','.messenger-search-user-inside',function(){
         
         var usersId = $(this).attr('id');
         
         fetch_search_users_profile(usersId);
        
    });
    
    
     
    function fetch_search_users_profile(usersId){
       
        var action = 'fetch_search_users_profile';
        
        $.ajax({
             
             url: 'action_messenger.php',
             
             method:'post',
             
             data:{fetch_search_users_profile:action, search_users_id: usersId},
             
             success:function(data){
                 
               $('.messenger-right').html(data);
                   
             }
         });
        
    }
    
});



























