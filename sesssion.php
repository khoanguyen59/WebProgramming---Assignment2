<?php 
	session_start();
	if (isset($_SESSION["type"])) {
		if ($_SESSION['type'] =='admin')
		{	
		$type = $_SESSION['type'];
		$name = $_SESSION['username'];
		$link1 = 'admin_manage_service.php';
		$link2 = 'logout.php';
		$function1 = 'Quản lý';
		$function2 = 'Đăng xuất';
		}
    	else 
		{	
		$id = $_SESSION['id'];
		$type = $_SESSION['type'];
		$name = $_SESSION['username'];
		$phone = $_SESSION['phone'];
		$mail = $_SESSION['email'];
		$pass = $_SESSION['password'];
		$link1 = 'profile.php';
		$link2 = 'logout.php';
		$function1 = 'Tài khoản';
		$function2 = 'Đăng xuất';
		}
	} 
	else 
	{
		$type ='';
		$name = 'Tài khoản';
		$link1 = 'signin.php';
		$link2 = 'signup.php';
		$function1 = 'Đăng Nhập';
		$function2 = 'Đăng ký';
	}
?>