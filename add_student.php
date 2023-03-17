<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $s_name = $_POST["s_name"];
    $s_reg = $_POST["s_reg"];
    $s_phno = $_POST["s_phno"];
    $s_sem = $_POST["s_sem"];
    $s_comb = $_POST["s_comb"];
    $s_pass = $_POST["s_pass"];
    $exists=false;


    
    $sql = "SELECT * FROM student WHERE s_reg = '$s_reg'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<script>alert(' REGISTER NUMBER ALREDY EXISTS');</script>";
    }
  else
    if((true) && $exists==false){
        $sql = "INSERT INTO `student` (`s_name`, `s_reg`, `s_phno`, `s_sem`,`s_comb`,`s_pass`) VALUES ('$s_name','$s_reg', '$s_phno', '$s_sem','$s_comb','$s_pass')";
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

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="css/register.css">
    <title>ADD_STUD| ADMIN</title>
  <!-- icons -->
    <link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

  </head>
  <style>
    .input-box select{
        width: 100%;
        height: 40px;
        padding-left: 50px;
        font-size: 16px;
    }
  </style>
  <body>
      
<?php
    if($showAlert){
    echo "<script>alert('STUDENT ADDED SUCESSFULY.')</script>";
    }
    if($showError){
    echo "<script>alert('ADDING FAILED....')</script>";
    }
    ?>

     <div class= "container" >
    <div class="title">ADD STUDENT</div>

<form action="add_student.php" method="POST" >
    <div class="user-details">
        
        <div class="input-box">
            <span class="details">NAME</span>
            <input type="text" placeholder="Enter Name" name="s_name"  required>
        </div>
        <div class="input-box">
             <span class="details">REG. NUMBER</span>
             <input type="text" placeholder="Enter Register Number" name="s_reg"  minlength="5" maxlength="15" required>
        </div>

        <div class="input-box">
             <span class="details">PHONENUMBER</span>
             <input type="tel" placeholder="Enter Phonenumber" name="s_phno" minlength="10" maxlength="10" required>
        </div>

        <div class="input-box">
        <span class="details">SEMISTER</span>
        <select name="s_sem">
        <option selected>SELECT</option>
        <option name="s_sem">1 SEM</option>
        <option name="s_sem">2 SEM</option>
        <option name="s_sem">3 SEM</option>
        <option name="s_sem">4 SEM</option>
        <option name="s_sem">5 SEM</option>
        <option name="s_sem">6 SEM</option>
        </select>
        </div>

        
        <div class="input-box">
        <span class="details">COMBINATION</span>
        <select name="s_comb">
        <option selected>SELECT</option>
        <option name="s_comb">BCA</option>
        <option name="s_comb">BCOM</option>
        <option name="s_comb">BBM</option>
        

        </select>
        </div>

        <div class="input-box">
              <span class="details">Password</span>
              <input type="Password" placeholder="Enter Password" name="s_pass" minlength="6" maxlength="20" required>
        </div>

  </div>
 

  <div class="button">
    <input type="submit"  value="ADD STUDENT">
  </div>
<p class="login-register-text">Completed Adding? <a href="student_list.php">Click Here</a>.</p>
    </form>
</div>
  </body>
</html>