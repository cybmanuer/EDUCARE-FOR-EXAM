<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="rem_clinic.css">
	<meta charset="utf-8">
	<title>FEES UPDATE | EDUCARE</title>
    <!-- icons -->
    <link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>

</head>
<style>

body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background:rgb(104, 228, 247);
    background-image: url("https://images.pexels.com/photos/2847648/pexels-photo-2847648.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    height: 100vh;
    overflow: hidden;
}
p{
color: salmon;
}

h1{
color:black;
}


.center{
 position:absolute;
 top: 50%;
 left:50%;
 transform: translate(-50%,-50%);
 width: 400px;
 background: white;
 border-radius:10px;

}
.center h1{
padding: 0 0 20px 0;
border-bottom: 1px solid silver;
}

.center form{
 padding: 0 30px;
box-sizing:border-box;
}

form .txt_field{
position: relative;
border-bottom: 2px solid #adadad;
margin: 30px 0;
}

.txt_field input{
width: 100%;
padding: 0 5px;
height: 40px;
font-size: 16px;
border: none;
background: none;
outline: none;
}

.txt_field label{
position: absolute;
top: 50%;
left: 5px;
color:firebrick;
transform: translateY(-50%);
font-size: 16px;
pointer-events: none;
transition: .5s;

}

.txt_field span::before{
content: '';
position:absolute;
top: 40px;
left: 0;
width: 0%;
height: 3px;
transition:.5s;
}

.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
top: -5px;
color:firebrick;
}

.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
width: 100%;
color: pink;
}
.pass{
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}

.pass:hover{
text-decoration: underline;
}

input[type="submit"]{
width: 100%;
height: 50px;
border: 1px solid;
background: #2691d9;
border-radius: 25px;
font-size: 18px;
color: #e9f4fb;
font-weight: 700;
cursor: pointer;
outline: none;
}

input[type="submit"]:hover{

border-color:#2691d9; 
transition:.5s;
}

.signup_link{
margin: 30px 0;
text-align: center;
font-size: 16px;
color: #666666;
}



</style>
<body>

	<div class="center">
    <h1 align="center">UPDATE FEES</h1>

    <form action="fees_update.php" method="post">

    <div class="txt_field">
        <input type="text"  name="s_reg" required>
        <span></span>
        <label>REGISTER NUMBER</label>
    </div>
    <div class="txt_field">
        <input type="number"  name="s_fees" maxlength="5" minlength="1"  required>

        <span></span>
       <label>FEES</label>
    </div>

     <input type="submit" name='update' value="UPDATE FEES">
    <p class="login-register-text">Completed UPDATING? <a href="student_fees.php">Click Here</a>.</p>
        
    </div>
    </form>
    </div>  

</body>
</html>

<?php

    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, 'cms');

// validation
    error_reporting(0);
    if(isset($_POST['update']))
    {
    $s_reg = $_POST['s_reg'];
    $sql = "SELECT * FROM student WHERE s_reg= '$s_reg'";
    $result = $conn->query($sql);

    if ($result->num_rows < 1) 
    {
        echo "<script>alert('STUDENT NOT FOUND');</script>";
    }
    else
   
    {   
        if($result->num_rows >0)
        {
            while($row = $result-> fetch_assoc())
            {
             $s_fees=($row["s_fees"] + $_POST['s_fees']);     
             $s_reg = $_POST['s_reg'];
            }
        

       $query=" UPDATE `student` SET `s_fees`='$s_fees' WHERE s_reg='$s_reg'  ";
       $query_run =mysqli_query($conn,$query);
        }
       if($query_run)
       {
           echo "<script>alert('FEES UPDATED.')</script>";
       }
       else
       {
           
           echo "<script>alert('UNSUCESSFUL.')</script>";
       }
       
    }
    }


?>