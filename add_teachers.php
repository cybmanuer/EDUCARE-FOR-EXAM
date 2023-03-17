<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'config.php';
    $t_name = $_POST["t_name"];
    $t_phno = $_POST["t_phno"];
    $t_address = $_POST["t_address"];
    $t_dept = $_POST["t_dept"];
    $t_pass = $_POST["t_pass"];

    $exists=false;

    $sql = "SELECT * FROM teacher WHERE t_name = '$t_name' OR t_phno='$t_phno'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    echo "<script>alert(' Teacher Name or Phone Number Alredy Exists');</script>";
    }
  else
    if((true) && $exists==false){
        $sql = "INSERT INTO `teacher` (`t_name`, `t_phno`, `t_address`, `t_dept`,`t_pass`) VALUES ('$t_name','$t_phno', '$t_address', '$t_dept','$t_pass')";
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
    <title>ADD_TECH | ADMIN</title>
    
  <!-- icons -->
    <link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

  </head>
  <body>
      
<?php
    if($showAlert)
    {
    echo "<script>alert('Teacher Added Sucessfuly.')</script>";
    }
    if($showError)
    {
    echo "<script>alert('ADDING FAILED....')</script>";
    }
 ?>


<div class= "container" >
<div class="title">ADD TEACHER</div>

<form action="add_teachers.php" method="POST" >
    <div class="user-details">
        
        <div class="input-box">
            <span class="details">NAME</span>
            <input type="text" placeholder="Enter Name" name="t_name"  required>
        </div>
        <div class="input-box">
             <span class="details">PHONENUMBER</span>
             <input type="tel" placeholder="Enter Phonenumber" name="t_phno" maxlength="10" minlength="10" required>
        </div>
        <div class="input-box">
             <span class="details">ADDRESS</span>
              <input type="text" placeholder="Enter Address" name="t_address"  required>
         </div>

         <div class="input-box">
             <span class="details">DEPARTMENT</span>
              <input type="text" placeholder="Enter Department" name="t_dept" required>
        </div>

         
        <div class="input-box">
              <span class="details">Password</span>
              <input type="Password" placeholder="Enter Password" name="t_pass" maxlength="20" minlength="6" required>
        </div>

    </div>
 

     <div class="button">
        <input type="submit"  value="ADD TEACHER">
     </div>
      <p class="login-register-text">Completed Adding? <a href="teachers_list.php">Click Here</a>.</p>
</form>

</div>
</div>
  </body>
</html>