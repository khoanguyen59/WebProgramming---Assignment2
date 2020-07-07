<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="fluid-container" style="margin-top: 15px;">
		<div class="fluid-container contact">
			<div class="row row-no-gutters">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<span class="glyphicon glyphicon-envelope"></span> soitbackstage@gmail.com
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<span class="glyphicon glyphicon-phone-alt"></span> 0359681552
				</div>
			</div>
		</div>
		<?php 
			require "sesssion.php";
		?>
		<nav class="navbar navbar-default navbar-fixed-top ">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Home</a>
			</div>
			<form class="navbar-form navbar-right dropdown"style="margin-right : -15px;" role="search" method="GET">
					<button type="submit"  data-toggle="dropdown"  class="dropdown-toggle btn btn-default btnsearch">				
						<?php echo $type, ' ', $name ?>
					</button>
					<ul class="dropdown-menu">
  						<li><a href="<?php echo $link1 ?>"><?php echo $function1 ?></a></li>
    					<li><a href="<?php echo $link2 ?>"><?php echo $function2 ?></a></li>
  					</ul>
			</form>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="admin_manage_user.php">Người dùng</a></li>
					<li><a href="admin_manage_service.php">Dịch vụ</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
	</div>
    <br>
    <div class="container">
    <?php
		$conn = mysqli_connect("localhost","root","","examples");

		if(!$conn)
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$abc = '/^[_a-zA-Z ]+$/';
		$number = '/^[0-9]+$/';

		if(isset($_POST['submit'])){
			$id = $_POST['id'];		
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
			if (!preg_match($number, $id)){
				$message = "Só thứ tự phải là số nguyên";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else if (strlen($username) < 5 || strlen($username) > 40){
				$message = "Độ dài tên từ 5 đến 40 ký tự";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else if (strlen($username) < 4 || strlen($username) > 24){
				$message = "Độ dài mật khẩu từ 4 đến 24 ký tự";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else if (!preg_match($number, $phone)){
				$message = "Số điện thoại không chứa chữ cái";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$sql = "SELECT id, username, email, phone FROM users";
				$result = mysqli_query($conn, $sql);
				$total = mysqli_num_rows($result) + 1;
				$insert = mysqli_query($conn,"INSERT INTO `users`(`id`, `username`, `password`, `email`, `phone`, `type`) VALUES ($id,'$username','$password','$email','$phone','member')");

				if(!$insert)
				{
					echo mysqli_error($conn);
				}
				else
				{
					echo "Records added successfully.";
			}
			}
		}
		mysqli_close($conn); // Close connection
	?>

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
			$showRecordPerPage = 5;
			if(isset($_GET['page']) && !empty($_GET['page'])){
				$currentPage = $_GET['page'];
			}else{
				$currentPage = 1;
			}
			$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
			$totalEmpSQL = "SELECT * FROM users";
			$allEmpResult = mysqli_query($conn, $totalEmpSQL);
			$totalEmployee = mysqli_num_rows($allEmpResult);
			$lastPage = ceil($totalEmployee/$showRecordPerPage);
			$firstPage = 1;
			$nextPage = $currentPage + 1;
			$previousPage = $currentPage - 1;
			$empSQL = "SELECT id, username, email, phone FROM `users` LIMIT $startFrom, $showRecordPerPage";
			$empResult = mysqli_query($conn, $empSQL);
		?>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên người dùng</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
              </tr>
			</thead>
			
            <tbody>
			<?php
			while($emp = mysqli_fetch_assoc($empResult)){
				?>
				<tr>
				<th scope="row"><?php echo $emp['id']; ?></th>
				<td><?php echo $emp['username']; ?></td>
                <td><?php echo $emp['email']; ?></td>
                <td><?php echo $emp['phone']; ?></td>
				<th><a href="<?php echo "delete_user.php?id=".$emp['id'];?>">Delete</a></th>
				</tr>
			<?php } ?>
            </tbody>
        </table>

        <nav aria-label="Page navigation">
			<ul class="pagination justify-content-end">
				<?php if($currentPage != $firstPage) { ?>
				<li class="page-item">
					<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
						<span aria-hidden="true">First</span>
					</a>
				</li>
				<?php } ?>
				<?php if($currentPage >= 2) { ?>
				<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
				<?php } ?>
				<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
				<?php if($currentPage != $lastPage) { ?>
				<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
				<li class="page-item">
					<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
						<span aria-hidden="true">Last</span>
					</a>
				</li>
				<?php } ?>
            </ul>
        </nav>
        <div>
            <form method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="id" placeholder="Số thứ tự">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Tên người dùng">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="SDT">
                </div> 
                <button type="submit" class="btn btn-primary" name="submit" value="Add new user">Add new user</button>
            </form>
        </div>
    </div>

</body>
</html>