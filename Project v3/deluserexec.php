<?php
include 'db.php';
	$id = $_POST['id'];
	mysqli_query($conn,"DELETE from emp WHERE id='$id'");
			

		 echo "<script>windows: location='staff.php'</script>";				
			