<!DOCTYPE html>
<html>
<head>
   <!-- ICONS,,,, -->
   <link rel="stylesheet" href="css/all.min.css"> 
    <script src="https://kit.fontawesome.com/654a5792a1.js" crossorigin="anonymous"></script>
    
  <title>UPLOAD | EDUCARE</title>
  <!-- css link -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<style>
body{
  background-image: linear-gradient(to right top, #eb5bad, #df55b9, #d052c5, #bb52d2, #a154de, #b54cd6, #c743cd, #d738c3, #fe2a99, #ff426f, #ff6848, #fc8c26);
  background-size: cover no-repeate;
  background-size: cover;
  height:150vh;

}



.form{
width: 100%;
display: inline-block;
position: inherit;
padding: 6px;
}

.label {
padding: 10px;
width: 10%;
}
.input{
position: inherit;
padding: 3px;
margin-left: 2.3%;
}

.btn{
margin-left: 6.5%;
background-color: blue;
color: white;
}
.rem{
    font-size: 23px;
    color: black;
    margin-left: 40%;
}
table {
  width: 50%;
  margin: auto;
  text-align: center;
}
.table{
  width: 60%;
}
label{
  color: black;
  font-size: 25px;
}
.butn{
  float: right;
  margin-right: 5%;
  margin-top: -5%;
  width: 10%;
}
.butn button{
width: 100px;
height: 40px;
border-radius: 10px;
color: white;
background-color: black;
font-weight: 700;
} 
.butn1{
  float: left;
  margin-left: 5%;
  margin-top: -5%;
  width: 10%;
}
.butn1 button{
width: 100px;
height: 40px;
border-radius: 10px;
color: white;
background-color: black;
font-weight: 700;
} 


</style>


<?php
$conn = mysqli_connect("localhost","root","","cms");

if (mysqli_connect_errno()) {
echo "Unable to connect to MySQL! ". mysqli_connect_error();
}

if (isset($_POST['save'])) {
$target_dir = "Uploaded_Files/";
$target_file = $target_dir . date("dmYhis") . basename($_FILES["file"]["name"]);

$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if($imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "gif" ) {
if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
$files = date("dmYhis") . basename($_FILES["file"]["name"]);
}
else
{
echo "Error Uploading File";
exit;
}
}
else
{
echo "File Not Supported";
exit;
}

$filename = $_POST['filename']; 
$location = "Uploaded_Files/" . $files;
$sqli = "INSERT INTO `tblfiles` (`FileName`, `Location`) VALUES ('{$filename}','{$location}')";
$result = mysqli_query($conn,$sqli);
if ($result) {
echo "File has been uploaded";
};
}
?>



<center>

<br/>
<h1> UPLOAD NOTES </h1><br/>

<a href="remove-notes.php"><div class="butn"><button>Remove</button></div></a>
<a href="teacher-home.php"><div class="butn1"><button>HOME</button></div></a>

<form class="form" method="post" action="" enctype="multipart/form-data">
<label>File Name:</label>
<input type="text" name="filename" placeholder="Enter File Name" required> <br/>
<div style="margin-left: 9%">
<label>Choose File:</label>
<input type="file" name="file" required> <br/><br/>
</div>
<button type="submit" name="save" class="btn"><i class="fa fa-upload fw-fa"></i> Upload</button>
</form>
</center>
<br><br/>


<div class="container">
<table id="demo" class="table table-bordered">
<thead>
<tr>
<th>FILE NAME</td>
<th> DOWNLOAD</th>
</tr>
</thead>
<tbody>
 

<?php
$sqli = "SELECT * FROM `tblfiles`";
$res = mysqli_query($conn, $sqli);
while ($row = mysqli_fetch_array($res)) 
{
echo '<tr>';
echo '<th>'.$row['FileName'].'</th>';
echo '<td><a class="btn" href="'.$row['Location'].'">Download</a></td>';
}
mysqli_close($conn);

?>

</tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>
</body>
</html>