<?php
 session_start();
 
include 'db.php';    
  
 $login = mysqli_query($conn,"SELECT * FROM emp WHERE username = '" .$_POST['username'] . "'");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['username'] = $row['username'];
 mysqli_query($conn,"UPDATE emp SET password = '".$_POST['password'] ."' WHERE username = '" .$_SESSION['username'] . "'");
 echo '<script>windows: location="index.php"</script>';
 }
	else {
		header ("location: empforgotpass.php?err");
		}
 
 
?>
