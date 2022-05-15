<?php
include 'db.php';
$staff_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	mysqli_query($conn,"UPDATE emp SET id ='$id', fname ='$fname', lname ='$lname', address ='$address', contact ='$contact', username ='$username',
		 password ='$password' WHERE id = '$staff_id'");
			

		 echo "<script>windows: location='staff.php'</script>";				
			