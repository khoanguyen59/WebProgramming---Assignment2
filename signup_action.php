<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "examples";

			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$name = $mail = $pass = $phone = $id='';
			$name = $_POST['username'];
			$mail = $_POST['email'];
			$pass = $_POST['password'];
            $phone = $_POST['phone_number'];
			$sql="INSERT INTO users (username,password,email,phone,type) VALUES ('$name','$pass','$mail','$phone','member')";
			$result = mysqli_query($conn,$sql);
			if ($result)
			{
				header("Location: signin.php");
			}
			else {
				echo mysqli_error($conn);
			}

?>