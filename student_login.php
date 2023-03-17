<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include'config.php';
    $s_reg = $_POST["s_reg"];
    $s_pass = $_POST["s_pass"]; 
    
     
    $sql = "Select * from `student` where `s_reg`='$_POST[s_reg]' AND `s_pass`='$_POST[s_pass]'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['s_reg'] = $s_reg;
        header("location:student-home.php");

    } 
    else{
        $showError = true;
    }
}
 


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