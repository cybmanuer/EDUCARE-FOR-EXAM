<?php
// Initialize the session
session_start();
$conn = mysqli_connect("localhost", "root", "","cms");


// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
  header("location: EDUCARE-LOGIN.php");
  exit;
}

?> 



<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>ADD NOTIFICATION</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <link rel="stylesheet" href="css/all.min.css"> 
        <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

</head>
<style>
    body{
        background-color: rgb(145, 120, 120);
    }
    .not{
        margin-top: 8%;
        margin-left: 40%;
    }
    .not input{
        font-size: 19px;
        width: 35%;
        height: 40px;
        border: 2px black solid; 

    }
    .not button{
        margin-left: 10%;
        width: 15%;
        height: 40px;
        font-size: 25px;
    }
    a h4{
        color: aqua;
        text-decoration: none;
        margin-left: 9%;
    }


    /* NOTIFICATION AREA CS */

    
  .not0{
    margin-left: 5%;
    margin-right: 5%;
    /* background-color: aqua; */
    display: flex;
    justify-content:space-around;
  }
  .not button{
    border-radius:10px ;
  }
  .not button:hover{
    background-color: black;
    color: white;
    font-size: 18px;
    border-radius: 10px;
 }

   .not1{
    border-radius: 10px;
    margin-top: 3%;
    width: 20%;
    height: 40px;
    background-color: #e76c0e;
    background-color: aquamarine;
    display: flex;
   }
   .not1 i{
    font-size: 25px;
    margin-left: -3%;
    margin-top: -2%;
    color: orangered;
   }
   .row1-container{
    margin-top: 5%;

   }
   .not1 p{
    margin-left: 10px;
    margin-top: 10px;
    font-size: 16px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
   }
 .butn{
    /* margin-left: -20%; */
    margin-left: 0%;
    font-size: 10px;
 }  

 .butn button{
    background-color: black;
    color: white;
    font-size: 15px;
    border-radius: 20px;  
 }

 .butn button:hover{
    background-color: white;
    color: black;
    font-size: 18px;
 }
</style>
<!-- TO INSIRTING MSG TO DATABAE -->
<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $msg = $_POST["msg"];
    $exists=false;

    if((true) && $exists==false){
        $sql = "INSERT INTO `notification` (`msg`) VALUES ('$msg')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "NOT ADDED";
    }
}
?>
<!-- FOR POP UP BOX AFTER ADDING THE MSG -->
<?php
    if($showAlert){
    echo "<script>alert(' ADDED SUCESSFULY.')</script>";
    }
    if($showError){
    echo "<script>alert('ADDING FAILED....')</script>";
    }
?>

<body>

    <center><h1>ADD NOTIFICATION</h1>
    <p style="color:red">YOU CAN ADD ONLY 3 NOTIFICATION<p>
    </center>

    <!-- NOTIFICATION DISPLAY AREA -->
    <div class="not0">
                        <!-- NOTIFICATION BOX 1 -->
                      <div class="not1"><i class="fa-solid fa-bell"></i>
                      <!-- PHP IS FOR FETCHING THE MSG FROM DATABASE -->
                      <?php
                      // to blpock the error msg
                      error_reporting(0);
                      ini_set('display_errors', 0);

                        //   $sql = "SELECT msg,id FROM notification WHERE id = '1' ";
                        $sql = "SELECT msg FROM notification LIMIT 1";
                          $result = $conn-> query($sql);
                           $row = mysqli_fetch_assoc($result);  
                      ?>
                     <!-- <p><?php echo $row['id'], " | " ,$row['msg']; ?></p> -->
                     <p><?php echo $row['msg']; ?></p>

                      </div>

                      <!-- NOTIFICATION BOX 2 -->
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

                    <!-- NOTIFICATION BOX 3 -->
                      <div class="not1">
                        <i class="fa-solid fa-bell"></i>
                        <?php
                        // to blpock the error msg
                        error_reporting(0);
                        ini_set('display_errors', 0);

                        $sql = "SELECT msg FROM notification LIMIT 2,1";
                          $result = $conn-> query($sql);
                          $row = mysqli_fetch_assoc($result);  
                        ?>
                     <p><?php echo $row['msg']; ?></p>
                    </div>
                </div>


<!-- INPUTT AREA TO ENTER THE MSG -->
    <div class="not">    
        <form action="t_notification.php" method="post">
            <input type="text" name="msg" id="msg" placeholder="ENTER THE MESSAGE" required /><br/><br/>
            <button type="submit" name="submit" value="ADD">ADD</button>
        </form><br/><br/><br/><br/>

        <div class="butn">
        <a href="teacher-home.php"><button>Home Page</button></a>
        <!-- <a href="remove-notification.php"><button>REMOVE</button></a> -->

        </div>
    </div>
</body>
</html>