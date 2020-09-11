<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Facebook</title>
    
    <link rel="stylesheet" href="style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
   
   <div class="container">
       
       <div class="main">
          
          <div class="main-left">
             
             <p class="facebook-logo">facebook</p>
             
             <p class="facebook-status">Facebook helps you connect and share with the people in your life.</p>
              
          </div>
          
          <div class="main-right">
             
             <div class="main-right-login">
                 
                   <div class="main-right-email">
                       
                     <input type="email" placeholder="Email address or phone number">
                       
                   </div>
                   
                   <div class="main-right-password">
                       
                     <input type="password" placeholder="Password">
                       
                   </div>
                   
                   <div class="main-right-button">
                       
                       <button>
                           Log In
                       </button>
                       
                   </div>
                   
                   <div class="main-right-link">
                       
                       <a href="">Forgotten account?</a>
                       
                   </div>
                   
                   <div class="main-right-line">
                       
                   </div>
                   
                   <div class="main-right-account">
                       
                       <button id="signup-account">Create New Account</button>
                       
                   </div>
                   
                   <div class="main-right-page-link">
                 
                    <a href="">create a Page </a><p>for a celebrity, band or business.</p>
                 
                   </div>
                   
             </div>
              
          </div>
           
       </div>
       
       <div class="footer">
           
            <?php include('footer.php'); ?>
            
       </div>
       
       <div class="modal">
          
          <div class="modal-signup">
             
             <div class="modal-close">
                 X
             </div>
             
             <div class="modal-signup-heading">
                 
                 <p class="modal-signup-name">Sign Up</p>
                 
                 <p class="modal-signup-child-name">It's quick and easy.</p>
                 
             </div>
             
             <div class="modal-signup-name">
                       
                <input type="text" placeholder="First name">
                
                <input type="text" placeholder="Surname">
                           
             </div>
             
             <div class="modal-signup-email">
                       
                <input type="email" placeholder="Email address or phone number">
                       
             </div>
                   
             <div class="modal-signup-password">
                       
                 <input type="password" placeholder="Password">
                       
              </div>
                   
              <div class="modal-date-birth">
                 
                 <label for="">Date of birth</label>
                 
                 <div class="modal-date-alert">
                     
                     <a >&#63;</a>
                     
                 </div>
                  
              </div>
              
              <div class="modal-date-selection">
                  
                   <?php include('date_birth.php'); ?>
                   
              </div>
              
              <div class="modal-gender">
                 
                 <label for="">Gender</label>
                 
                 <div class="modal-gender-alert">
                     
                     <a >&#63;</a>
                     
                 </div>
                  
              </div>
              
              <div class="modal-gender-choice">
                 
                 <div class="modal-gender-name">
                     
                     <label for="">Femal</label>
                     
                     <input type="radio">
                     
                 </div>
                 
                 <div class="modal-gender-name">
                     
                     <label for="">Male</label>
                     
                     <input type="radio">
                     
                 </div>
                 
                 <div class="modal-gender-name">
                     
                     <label for="">Custom</label>
                     
                     <input type="radio">
                     
                 </div>
                  
              </div>
              
              <div class="modal-signup-terms">
                  
                  <p> By clicking Sign Up, you agree to our Terms, Data Policy and Cookie Policy. You may receive SMS notifications from us and can opt out at any time.  
                    </p>
                    
              </div>
              
              <div class="modal-signup-button">
                  
                  <button>Sign Up</button>
                  
              </div>
              
          </div>
           
       </div>
        
   </div>
   
   <script>
       
       $(document).ready(function(){
           
          $('#signup-account').click(function(){
           
           
              $('.modal').show();
           
          }); 
           
          $('.modal-close').click(function(){
           
           
              $('.modal').hide();
           
          }); 
           
       });
    
    
    </script>
    
</body>
</html>