<?php
include "config.php";




$servername = "localhost";
$username = "root";
$password = "";
$db = "slis";

$conn = new mysqli($servername, $username, $password, $db);



$conn->close();


?>

<html>
   
   <head>
      <title>Update Account</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="style.css" rel="stylesheet" type="text/css">
   
      
   </head>
   
     
            <div class = "register">
            <h1>Update Account</h1>
            
            <form action="update.php" method="GET">
            <input id="search" type="text" name="search" placeholder="Search School ID..."> 
</form>
            <form action = "" method = "post"> 
               <label for="sid">
                     <i class="fa-solid fa-id-card"></i>
				</label>
                  <input type = "text" name = "studentid" class = "box" placeholder="School ID"/> 
                  <label for="password">
					<i class="fas fa-lock"></i>
				</label>
                  <input type = "password" name = "password" class = "box" placeholder="Password" /> 
                  <input type = "button" value = "Update" onclick="window.location.href='update.php';"  /><br />
                  <input type=  "button" onclick="window.location.href='login.php';" value="Login" />
             
             
               </form>

 
					
            </div>		
            	
       </div>		
      </div>


<div class="footer">
<label for="footer">
<i class="fa-solid fa-copyright"></i>
2023 STUDENT LEARNING INTEGRATED SYSTEM | All Rights Reserved
</label>
</div>
   </body>
</html>