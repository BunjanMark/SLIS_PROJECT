<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="whole.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIS</title>
    <style>
    </style>
</head>
<body>


    <div class="sidebar">
    <div class="wrapper">
        <!--Top menu -->
        
        <div class="sidebar">
            
        <div class="profile">
               <br>
               <span class="icon"><i class="fas fa-user-circle fa-10x"></i></span>
               <br></br>
              
               <p style="color:white">
              
               <?php echo $login_session; ?>
                  
               </p>
                   
                <p>Student</p>
               
            </div>
 
            <!--menu item-->
            <ul>
                <li>
                    <a href="mainform.php" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-info-circle"></i></span>
                        <span class="item">About</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Courses</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-md"></i></span>
                        <span class="item">Health</span>
                     
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-phone"></i></span>
                        <span class="item">Contact Us</span>
                    </a>
                </li>
              
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
    </div>

        <div class="main-content">
       
        <div class="head">
  <header>
    <h1>SLIS</h1>
    <form class="search-form" action="#" method="get">
      <input type="text" placeholder="Search...">
      <button type="submit">Go</button>
    </form>
  </header>
</div>

    <div class="concept">
        <h2>Quick Option</h2>
        <br>
        <div class="module-container">
        <div class="module">
            <p>PENDING MODULES</p>
            
        </div>
        <div class="module">
            <p>PENDING MODULES</p>
        </div>
        <div class="module">
            <p>PENDING MODULES</p>
        </div>
        </div>
    </div>
</div>
</body>
</html>










