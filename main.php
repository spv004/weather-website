<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
<style>

	html,
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}

</style>
</head>
<body>
<div class="container">
<?php
$con=mysqli_connect('localhost','root','','login');
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM data");

echo "<table border='1'>
<thead>
<tr>
<th>Date</th>
<th>Temperature (°C)</th>
<th>Humidity (%)</th>
</tr>
</thead>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['date'] . "</td>";
echo "<td>" . $row['temp'] . "</td>";
echo "<td>" . $row['humidity'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
</body>
</html>