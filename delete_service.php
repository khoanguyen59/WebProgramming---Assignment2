<?php
$conn = mysqli_connect("localhost","root","","examples");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn, "delete from services where id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:admin_manage_service.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>