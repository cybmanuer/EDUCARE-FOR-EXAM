<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: teacher_login.php");
  exit;
}
?> 



<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>TEACHER | EDUCARE </title>
        <!-- icons... -->
        <link rel="stylesheet" href="css/all.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="home1.css">
           

            
    </head>
    <style>
      .fonts li a{
        font-size: 30px;
      }
      .wrapper .sidebar{    
        border: 1px black solid;
        margin-left: 0%;
     }
     .wrapper .sidebar .fonts p{  
       padding-left: 30px;
      
     }


     .sidebar .fonts p{
      font-size: 20px;
      color: black;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      
     }
     .header span{
      font-size: 22px;
      /* background-color: #b1b1b18f; */
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     }
     .wrapper .sidebar ul li:hover{
    background-color: #e76c0e;
    }
    .wrapper .sidebar ul li:hover a{
    color: #fff;
    }
    .header #i2{
    font-size: 30px;
    float: right;
    margin-right: 5%;
    color: black;
   }


    </style>
    <body>
        <div class="wrapper">
            <div class="sidebar">
                <div class="logo">
                <img src="./img/Educare-Logo-1.png" width="90%" height="50px"/><br/><br/><br/>
                <!-- <h2>MY DASHBOARD</h2> --></div>
                <ul class="fonts">
                    <li><a href="#"><p> <i class="fa-solid fa-house"></i> HOME </p></h3></a></li>
                
                    <li><a href="notes_upload.php"><p><i class="fa-solid fa-upload"></i> UPLOAD</p></a></li>
                    <li><a href="attendence1.php"><p><i class="fa-solid fa-clipboard-user"></i> ATTENDENCE</p></a></li>
                    <li><a href="t_notification.php"><p><i class="fa-regular fa-bell"></i> NOTIFICATIONS</p></a></li>
                    <li><a href="aboutus.html"><p><i class="fa-solid fa-people-group"></i> ABOUT US</p></a></li>
                   <li><a href="contactus.php"><p><i class="fa-regular fa-comments"></i> CONTACT US</p></a></li>
                </ul>
            </div>

            
            <div class="main_content">
                <!-- <div class="header"><h3>WELCOME [UESR NAME--php] </h3></div> -->
                <!-- <div class="info"> -->
                    <section class="home-section">
                        <!-- <div class="user"></div> -->

                        <!-- php code is to fetch and display the session logged in user name -->
                        <div class="header"><h3>WELCOME <i class="fa-solid fa-hand-point-right"></i> <span>`<?php echo strtoupper($_SESSION['t_name'] )?>` </span>
                        <a href="index.php"><i class="fa-solid fa-right-from-bracket" id="i2"></i></a>
                      </h3></div>



                        <div class="row1-container">
                      
                          <!-- <div class="box box-down cyan"> -->
                          <div class="box cyan">                       
                             <a href="notes_upload.php">

                            <h2>Uploads</h2>
                            <!-- <p>Monitors activity to identify project roadblocks</p> -->
                            <img src="./img/uploads.jpg" alt=""  height="70px"  width="90px">
                          </div></a>
                      
                          <div class="box red"><a href="attendence1.php">
                            <h2>Attendence</h2>
                            <!-- <p>Scans our talent network to create the optimal team for your project</p> -->
                            <img src="./img/atten.jpg" alt=""  height="70px"  width="90px">
                          </div>
                        </a>
                      
                          <!-- <div class="box box-down blue"> -->
                        
                          <div class="box cyan"><a href="t_notification.php">
                            <h2>Notifications</h2>
                            <!-- <p>Uses data from past projects to provide better delivery estimates</p> -->
                            <img src="./img/noti.jpg" alt=""  height="70px"  width="60px">
                          </div></a>
                          <div class="box red"><a href="student_list.php">
                            <h2>   Students</h2>
                            <!-- <p>Scans our talent network to create the optimal team for your project</p> -->
                            <img src="./img/s1.jpg" alt=""  height="70px"  width="90px">
                          </div>
                        </a>
                      
                    
                        </div>
                             
                            </div>
                          </div>
                        </section>
                    

                </div>
            </div>
        </div>
    </body>
</html>