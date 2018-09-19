<?php 
include 'config.php';
if (isset($_POST['submits'])) {

	# code...
	$name = $_POST['uname'];
	$email = $_POST['emails'];
	$phno = $_POST['phnos'];
	$pwd = $_POST['pwd'];

	$sql = mysqli_query($conn,"INSERT INTO userss(name,email,phno,password) VALUES ('".$name."','".$email."','".$phno."','".$pwd."')");
		if($sql){
		echo "<script>alert('Inserted');</script>";
		echo "<script>location.href('index.html');</script>";
	}
	else{
		echo mysqli_error($conn);
	}
}
?>
