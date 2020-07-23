<?php 
		if (isset($_POST['submit']))
		{

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "login";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
		}

		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = md5($_POST['pass']);

		$sql = "INSERT INTO user (name,username,password,email) VALUES ('$name','$username','$password','$email')";

		if ($conn->query($sql) === TRUE) {
			echo "Registration successfull";
    		header("Location: login.html");
		} else {
    		echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}
?>