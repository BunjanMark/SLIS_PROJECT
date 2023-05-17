<?php
include "config.php";
if (isset($_POST['submit'])) { // button to save an information
    $id = $_POST['id']; // $id to $gender is a variable mao ang mag call sa table which is kanang green na letter 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $sql = "INSERT INTO `accounts`(`studentid`,`username`,`password`,`email`) VALUES ('$id','$username','$password','$email')";
    $result = $conn->query($sql);
 
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }   
    $conn->close(); 
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Add Account</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
	<body>
        
		<div class="register">
			<h1>Add Account</h1>
			<form action="" method="POST" autocomplete="off"> 
				<label for="sid">
                     <i class="fa-solid fa-id-card"></i>
				</label>
                <input type="text" name="id" placeholder="School ID" id="sid" required>
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<label for="email">
					<i class="fas fa-envelope"></i>
				</label>
                
				<input type="email" name="email" placeholder="Email" id="email" required>
				<input type="submit" name="submit" value="Register"> 
                <input type="button" onclick="window.location.href='login.php';" value="Login" />
			</form> 
<div class="footer">
<label for="footer">
<i class="fa-solid fa-copyright"></i>
2023 STUDENT LEARNING INTEGRATED SYSTEM | All Rights Reserved
</label>
</div>
	</body>
</html>