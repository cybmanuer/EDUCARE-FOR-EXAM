<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include'config.php';
    $a_name = $_POST["a_name"];
    $a_pass = $_POST["a_pass"]; 
    
     
    $sql = "Select * from `admin` where `a_name`='$_POST[a_name]' AND `a_pass`='$_POST[a_pass]'";
    $result = mysqli_query($conn, $sql);
    
    $num = mysqli_num_rows($result);
    if ($num == 1)
    {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['a_name'] = $a_name;
        header("location:admin-home.php");

    } 
    else{
        $showError = true;
    }
}

    if($login)
    {
       echo  "<script>alert(' Success! you are logged in.')</script>";
    }
    if($showError)
    {
         echo "<script>alert(' Email or Password is Wrong.')</script>";
    }
?>
