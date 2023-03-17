<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ATTENDENCE| EDUCARE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>
</head>
	<style>


body{
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background:rgb(104, 228, 247);
    height: 150vh;
    background-image: url("https://images.pexels.com/photos/2847648/pexels-photo-2847648.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500");
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
   }



* {
  box-sizing: border-box;
  align-content: center;
}



h1{
  margin-left: 45%;
  padding-top: 35px;
  font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.nav-area {
  float: right;
  list-style: none;
  margin-top: 30px;
  margin-right: 40px;
}
.nav-area li {
  display: inline-block;
  padding: 10px;
  background-color: #ba68c8;
  border-radius: 10px;
  margin-left: 20px;
}

.nav-area li a {
  color: black;
  text-decoration: none;
  padding: 5px 20px;
  font-family: poppins;
  font-size: 26px;
  text-transform: uppercase;
  background-color:transparent;
  padding-right:20px;
}
.nav-area li a:hover {
  background: #fff;
  color: black;
  border-radius:40px;
}

table{
 position: relative;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%,-50%);
 width: 60%; 
 border-collapse: collapse;
 border-spacing: 0;
 box-shadow: 0 2px 15px rgba(64,64,64,.7);
 border-radius: 12px 12px 0 0;
 overflow: hidden;
 margin-top:-15%;

}
td , th{
 padding: 15px 20px;
 text-align: center;
 

}
th{
 background-color: #ba68c8;
 color: #fafafa;
 font-family: 'Open Sans',Sans-serif;
 font-weight: 200;
 text-transform: uppercase;

}
tr{
 width: 100%;
 background-color: #fafafa;
 font-family: 'Montserrat', sans-serif;
}
tr:nth-child(even){
 background-color: #eeeeee;
}
form input{
    margin-top: -15%;
    margin-left: 45%;
    width: 12%;
    height: 30px;
    background-color:darkseagreen;
    font-size: 13px;
    font-weight: 900;
}

button{
    width: 70px;
    height: 30px;
    margin-bottom: -10px;
}

.header #i2{
    font-size: 30px;
    float: right;
    margin-right: 5%;
    color: black;
    margin-top:1%;
   }
</style>
</head>
<body>
    <div class="header">
    <a href="student-home.php"><i class="fa-solid fa-right-from-bracket" id="i2"></i></a>
      <h1> <i class=""></i>ATTENDENCE</h1> 
     
      <form action="attendence2.php">
  
       <input type="month" value="months"/>
        

        <button type="submit">CHECK</button>
      </form>

     
      
   
    </div>

         <table>
             <tr>
                 <th>Student Name</th>
                 <th>Register Number</th>
                 <th>Total Days</th>
                 <th>Attended Days</th>
             </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "","cms");
            if($conn-> connect_error){
               die("connection failed:" .$conn-> connect_error);
            }
            
            $sql= "SELECT s_name,s_reg,s_phno from student";
            $result = $conn-> query($sql);
            
            if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()){
                $total=25;
                $random_number = rand(15, 24);
                echo "<tr><td>". $row["s_name"] . "</td><td>" . $row["s_reg"] . "</td><td>$total</td><td>$random_number</td>   <tr>";
              }

              echo "</table>";

            }
            else{
               echo "0 result";
            }
            $conn->close();
            ?>
         </table>
</body>
</html>