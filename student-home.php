<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: login.php");
  exit;
}
?> 
<!-- CODE TO FETCH NOTIFICATION MESSAGE.... -->
<?php                
   $conn = mysqli_connect("localhost", "root", "","cms");

   if($conn-> connect_error){
      die("connection failed:" .$conn-> connect_error);
   }
?>





<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> STUDENT | EDUCARE </title>
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


  .not{
    width: 100%;
    height: 100px;
    /* background-color: aqua; */
    display: flex;
    justify-content:space-around;
    margin-left: 2%;
  }

   .not1{
    margin-top: 3%;
    width: 23%;
    height: 40px;
    background-color: #e76c0e;
    display: flex;
    border-radius: 10px;
   }
   .not1 i{
    font-size: 25px;
    margin-left: -3%;
    margin-top: -2%;
    color:black;
   }
   .row1-container{
    margin-top: 5%;

   }
   .not1 p{
    padding: 10px;
    font-size: 16px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
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
                    <li><a href="student-home.php"><p> <i class="fa-solid fa-house"></i> HOME </p></h3></a></li>
                    <li><a href="student_notes.php"><p><i class="fa-solid fa-note-sticky"></i> NOTES</p></a></li>
                    <li><a href="time-table.html"><p><i class="fa-regular fa-rectangle-list"></i> TIME-TABLE</p></a></li>
                    <li><a href="attendence2.php"><p> <i class="fa-solid fa-clipboard-user"></i> ATTENDENCE</p></a></li>
                    <li><a href="aboutus.html"><p><i class="fa-solid fa-people-group"></i> ABOUT US</p></a></li>
                   <li><a href="contactus.php"><p><i class="fa-regular fa-comments"></i> CONTACT US</p></a></li>
                </ul>
            </div>

            
            <div class="main_content">
                
                    <section class="home-section">
                        

                        <!-- php code is to fetch and display the session logged in user name -->
                        <div class="header"><h3>WELCOME <i class="fa-solid fa-bolt"></i> <span>`<?php echo strtoupper($_SESSION['s_reg'] )?>` </span>
                          <a href="index.php"><i class="fa-solid fa-right-from-bracket" id="i2"></i></a> </h3>
                        </div>
                      

                      <div class="not">

                      <div class="not1"><i class="fa-solid fa-bell"></i>
                      <?php
                      // to blpock the error msg
                      error_reporting(0);
                      ini_set('display_errors', 0);

                        $sql = "SELECT msg FROM notification LIMIT 1";
                          $result = $conn-> query($sql);
                           $row = mysqli_fetch_assoc($result);  
                      ?>
                     <p><?php echo $row['msg']; ?></p>
                      </div>

                      <!-- NOTIFICATION 2 -->
                      <div class="not1">
                        <i class="fa-solid fa-bell"></i>
                        <?php
                        // to blpock the error msg
                        error_reporting(0);
                        ini_set('display_errors', 0);

                        $sql = "SELECT msg FROM notification LIMIT 1,1";
                          $result = $conn-> query($sql);
                          $row = mysqli_fetch_assoc($result);  
                        ?>
                        <p><?php echo $row['msg']; ?></p>
                    </div>


                    <!-- NOTIFICATION 3 -->
                      <div class="not1">
                        <i class="fa-solid fa-bell"></i>
                        <?php
                        // to block the error msg
                        error_reporting(0);
                        ini_set('display_errors', 0);

                        $sql = "SELECT msg FROM notification LIMIT 2,1";
                          $result = $conn-> query($sql);
                          $row = mysqli_fetch_assoc($result);  
                        ?>
                        <p><?php echo $row['msg']; ?></p>    
                    </div>
                      </div>


                        <div class="row1-container">
                          <!-- <div class="box box-down cyan"> -->
                          <div class="box cyan">                       
                             <a href="student_notes.php">

                            <h2>Notes</h2>
                            <img src="./img/notes.jpg" alt=""  height="70px"  width="90px">
                          </div></a>
                      
                          <div class="box red"><a href="Timetable1.html">
                            <h2>Time-Table</h2>
                            <img src="./img/time.jpg" alt=""  height="70px"  width="90px">
                          </div>
                        </a>
                      
                          <!-- <div class="box box-down blue"> -->
                        
                          <div class="box cyan"><a href="attendence2.php">
                            <h2>Attendence</h2>
                            <!-- <p>Uses data from past projects to provide better delivery estimates</p> -->
                            <img src="./img/atten.jpg" alt=""  height="70px"  width="90px">
                          </div></a>
                      
                          
                         </div>
                             
                            </div>
                          </div>
                        </section>
                    

                </div>
            </div>
        </div>
    </body>
</html>