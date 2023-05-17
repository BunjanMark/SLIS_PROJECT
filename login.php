<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
     
      $myusername = mysqli_real_escape_string($conn,$_POST['studentid']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM accounts WHERE studentid = '$myusername' and password = '$mypassword'";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);  
 
      if($count == 1) {
      
         $_SESSION['login_user'] = $myusername;
         
         header("location: mainform.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>


<html>
   
   <head>
      
      <title>Login Page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="style.css" rel="stylesheet" type="text/css">

   </head>
   <div class = "register">
   <h1> STUDENT INTEGRATED LEARNING SYSTEM </h1>    
            <h1>Login</h1>
               <form action = "" method = "POST">
               <label for="sid">
                     <i cla`  ss="fa-solid fa-id-card"></i>
				</label>
                  <input type = "text" name = "studentid" class = "box" placeholder="School ID"/> 
                  <label for="password">
					<i class="fas fa-lock"></i>
				</label>
                  <input type = "password" name = "password" class = "box" placeholder="Password" /> 
                  <input type = "submit" value = "Login"/><br />
                  <input type=  "button" onclick="window.location.href='signup.php';" value="Add Account"/>
                  <br>
             
               </form>
              
               <center>
              <a href = "update.php">Forget Password? </href>
                </center>
                <br>
				
                



                
            </div>		
            	
       </div>		
      </div>



   </body>
</html>