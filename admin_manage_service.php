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

		<nav class="navbar navbar-default navbar-fixed-top ">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Admin Site</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
                    <li><a href="admin_manage_user.php">Người dùng</a></li>
                    <li class="active"><a href="admin_manage_user.php">Dịch vụ</a></li>
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
			$name = $_POST['name'];
            $price = $_POST['price'];
            $detail = $_POST['detail'];
			if (!preg_match($number, $id)){
				$message = "Số thứ tự phải là số nguyên";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else if (strlen($name) > 200){
				$message = "Phần mô tả không quá 200 ký tự";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}
			else{
				$sql = "SELECT id, name, price, detail FROM services";
				$result = mysqli_query($conn, $sql);
				$total = mysqli_num_rows($result) + 1;
				$insert = mysqli_query($conn,"INSERT INTO `services`(`id`, `name`, `price`, `detail`) VALUES ($id,'$name','$price','$detail')");

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
			$totalEmpSQL = "SELECT * FROM services";
			$allEmpResult = mysqli_query($conn, $totalEmpSQL);
			$totalEmployee = mysqli_num_rows($allEmpResult);
			$lastPage = ceil($totalEmployee/$showRecordPerPage);
			$firstPage = 1;
			$nextPage = $currentPage + 1;
			$previousPage = $currentPage - 1;
			$empSQL = "SELECT id, name, price, detail FROM `services` LIMIT $startFrom, $showRecordPerPage";
			$empResult = mysqli_query($conn, $empSQL);
		?>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên hạng mục</th>
                <th scope="col">Giá thành</th>
                <th scope="col">Nội dung cung cấp</th>
              </tr>
			</thead>
			
            <tbody>
			<?php
			while($emp = mysqli_fetch_assoc($empResult)){
				?>
				<tr>
				<th scope="row"><?php echo $emp['id']; ?></th>
				<td><?php echo $emp['name']; ?></td>
                <td><?php echo $emp['price']; ?></td>
                <td><?php echo $emp['detail']; ?></td>
                <th><a href="<?php echo "edit_service.php?id=".$emp['id'];?>">Edit</a></th>
				<th><a href="<?php echo "delete_service.php?id=".$emp['id'];?>">Delete</a></th>
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
                    <input type="text" class="form-control" name="name" placeholder="Tên hạng mục">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="price" placeholder="Giá thành">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="detail" placeholder="Nội dung cung cấp">
                </div> 
                <button type="submit" class="btn btn-primary" name="submit" value="Add new service">Add new service</button>
            </form>
        </div>
    </div>

</body>
</html>