<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include'config.php';
    $t_name = $_POST["t_name"];
    $t_pass = $_POST["t_pass"]; 
    
     
    $sql = "Select * from `teacher` where `t_name`='$_POST[t_name]' AND `t_pass`='$_POST[t_pass]'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['t_name'] = $t_name;
        header("location:teacher-home.php");

    } 
    else{
        $showError = true;
    }
}
 

//,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,

if($login){
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> You are logged in
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div> ';
}
if($showError){
               echo "<script>alert('Name or Password is Wrong.')</script>";
             }
?>