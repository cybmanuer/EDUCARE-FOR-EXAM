<!DOCTYPE html>
<html>
<head>
	<title>Database Records</title>
	<style>
        body{
            background-color:black;

        }
		table {
			border-collapse: collapse;
			width: 80%;
			margin-top: 20px;
            background-color:white;
            margin-left:10%;

		}
		th, td {
			padding: 15px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
		}
        h1{
            color:white;
        }
	</style>
</head>
<body>
    <center>
	<h1>MESSAGES</h1></center>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Message</th>
		</tr>
		<?php

    $conn = mysqli_connect("localhost", "root", "",'cms');

			// check connection
			if (mysqli_connect_errno()) {
                echo "Unable to connect to MySQL! ". mysqli_connect_error();
                }
			// fetch data from the database
			$sql = "SELECT * FROM contact";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				
					echo "<td>" . $row["c_name"] . "</td>";
					echo "<td>" . $row["c_mail"] . "</td>";
					echo "<td>" . $row["c_msg"] . "</td>";
					echo "</tr>";
				}
			} else {
				echo "0 results";
			}

			$conn->close();
		?>
	</table>
</body>
</html>