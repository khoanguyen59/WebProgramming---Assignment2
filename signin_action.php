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
        $name = $password = '';

        $name = $_POST['username'];
        $pass  = $_POST['password'];
        $sql = "SELECT * FROM users WHERE username='$name' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0)
        {
	    while($row = mysqli_fetch_assoc($result))
        {
            $type = $row["type"];
            $name  = $row["username"];
            $mail  = $row["email"];
            $phone  = $row["phone"];
            $pass = $row["password"];
            $id = $row["id"];
            session_start();
            $_SESSION['type'] = $type;
            $_SESSION['username'] = $name;
            $_SESSION['email'] = $mail;
            $_SESSION['password'] = $pass;
            $_SESSION['phone'] = $phone;
            $_SESSION['id']=$id;
            
        }
	    header("Location: index.php");
        }
        else
        {
            echo "Invalid email or password";
        }
?>