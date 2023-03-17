<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
 {
  header("location: login.php");
  exit;
 }
?> 



<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> EDUCARE | ADMIN-HOME </title>
        <!-- icons... -->
        <link rel="stylesheet" href="css/all.min.css"> 
        <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="home1.css">
           

            
    </head>
    <style>
      .fonts li a{
        font-size: 30px;
      }
      .wrapper .sidebar{    
        border: 1px black solid;
        /*  */
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
      color: black;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
     }
     .wrapper .sidebar ul li:hover{
    background-color: #e76c0e;
    margin-top
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
                </div>
                <ul class="fonts">
                    <li><a href="admin-home.php"><p> <i class="fa-solid fa-house"></i> HOME </p></h3></a></li>
                    <li><a href="teachers_list.php"><p><i class="fa-solid fa-chalkboard-user"></i> TEACHERS</p></a></li>
                    <li><a href="student_list.php"><p><i class="fa-solid fa-users"></i> STUDENTS</p></a></li>
                    <li><a href="student_fees.php"><p><i class="fa-solid fa-receipt"></i> FEES</p></a></li>
                    <li><a href="aboutus.html"><p><i class="fa-solid fa-people-group"></i> ABOUT US</p></a></li>
                   <li><a href="contactus.php"><p><i class="fa-regular fa-comments"></i> CONTACT US</p></a></li>
                  
                </ul>
            </div>

            
            <div class="main_content">
                 <section class="home-section">

                        <!-- php code is to fetch and display the session logged in user name -->
                        <div class="header"><h3>WELCOME <i class="fa-solid fa-hand-point-right"></i> 
                        <span>`<?php echo strtoupper($_SESSION['a_name'] )?>` </span> 
                        <a href="index.php"><i class="fa-solid fa-right-from-bracket" id="i2"></i></a>
                       </h3>
                      </div>



                        <div class="row1-container">
                      
                          
                          <div class="box cyan">                       
                             <a href="teachers_list.php">

                            <h2>   Teachers</h2>
                            <img src="./img/t1.png" alt=""  height="70px"  width="90px">
                          </div></a>
                      
                          <div class="box red"><a href="student_list.php">
                            <h2>   Students</h2>
                            <img src="./img/s1.jpg" alt="" height="70px"  width="90px">
                          </div>
                        </a>
                      
                        
                          <div class="box cyan"><a href="student_fees.php">
                            <h2>   Fees</h2>
                            <img src="./img/fee.jpg" alt="" height="70px"  width="90px">
                          </div></a>
                      
                          
                          <div class="box orange"><a href="view_contactus.php">
                            <h2>Responses</h2>
                            <img src="./img/response.jpg" alt="" height="70px"  width="90px">
                          </div> 
                        </div>
                             
                            </div>
                          </div>
                        </section>
                    

                </div>
            </div>
        </div>
    </body>
</html>