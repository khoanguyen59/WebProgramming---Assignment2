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
<h3>Update Data</h3>

<?php

$conn = mysqli_connect("localhost","root","","examples");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$idg = $_GET['id']; 
$qry = mysqli_query($conn,"select * from services where id='$idg'");

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $edit = mysqli_query($conn,"update services set name='$name', price='$price', detail='$detail' where id='$id'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:admin_manage_service.php"); // redirects to all records pyear
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>
<form method="POST" action="edit_service.php">
  <input type="text" name="id" value="<?php echo $data['id'] ?>" placeholder="ID" Required>
  <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Name" Required>
  <input type="text" name="price" value="<?php echo $data['price'] ?>" placeholder="Enter Price" Required>
  <input type="text" name="detail" value="<?php echo $data['detail'] ?>" placeholder="Enter Detail" Required>
  <input type="submit" name="update" value="Update">
</form>
</body>
</html>

