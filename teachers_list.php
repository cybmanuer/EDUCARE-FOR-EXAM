<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
   	<title>TEACHERS | EDUCARE</title>
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
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
    height: 100vh;
    overflow: hidden;
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
  margin-left: 35%;
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
 position: absolute;
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
 margin-top:4%;

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

</style>
</head>
<body>
<div class="menu-bar"><ul class="nav-area">
<li><a href="add_teachers.php">ADD</a></li>
<li><a href="teacher_remove.php">REMOVE</a></li>

<li><a href="admin-home.php"> <i class="fa-solid fa-right-from-bracket"></i></a></li>
</ul>
      <h1>TEACHERS LIST </h1>
        <table>
             <tr>
                 <th>Teacher Name</th>
                  <th>PhoneNumber</th>
                  <th>Address</th>
                  <th>Department</th>
             </tr>
            <?php
              include 'config.php';

            $sql= "SELECT t_name, t_phno,t_address,t_dept from teacher";
            $result = $conn-> query($sql);

            if($result-> num_rows >0){
              while($row = $result-> fetch_assoc()){
                echo "<tr><td>". $row["t_name"] . "</td><td>" . $row["t_phno"] . "</td><td>" . $row["t_address"] ."</td><td>" . $row["t_dept"] ."</td><tr>";
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