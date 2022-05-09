<?php
 session_start();
 
include 'db.php';    
  
 $login = mysqli_query($conn,"SELECT * FROM clients WHERE username = '" .$_POST['username'] . "'");
 $row=mysqli_fetch_array($login);  
 
 if($row){
 $_SESSION['username'] = $row['username'];
 mysqli_query($conn,"UPDATE clients SET password = '".$_POST['password'] ."' WHERE username = '" .$_SESSION['username'] . "'");
 echo '<script>windows: location="index.php"</script>';
 }
	else {
		header ("location: cforgotpass.php?err");
		}
 
 
?>
