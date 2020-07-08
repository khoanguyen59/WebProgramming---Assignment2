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
            session_start();
            if(isset($_POST['update']))
            {
                $id = $_SESSION['id'];
                $name = $_POST['username'];
                $mail = $_POST['email'];
                $pass = $_POST['password'];
                $phone = $_POST['phone_number'];

                $edit = mysqli_query($conn,"UPDATE users set username = '$name', email = '$mail', password= '$pass' , phone= '$phone' 
                WHERE id ='$id'");
                $_SESSION['email']=$mail;
                $_SESSION['username']=$name;
                $_SESSION['password']=$pass;
                $_SESSION['phone']=$phone;
                if($edit)
                {

                    mysqli_close($conn); // Close connection
                    header("location:index.php"); // redirects to all records pyear
                    exit;
                }
                else
                {
                    echo mysqli_error($conn);
                }    	
            }
?>