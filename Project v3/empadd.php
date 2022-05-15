<?php
include 'db.php';
			 		$id=$_POST['id'];
					$username= $_POST['username'] ;					
					$password=$_POST['password'] ;
					$fname=$_POST['fname'];
                    $lname=$_POST['lname'] ;
                    $contact=$_POST['contact'] ;
                    $address=$_POST['address'] ;
					
		 mysqli_query($conn,"INSERT INTO  emp (id,fname,lname,address, contact, username, password ) 
		 VALUES ('$id','$fname', '$lname' ,'$address', '$contact', '$username','$password')"); 
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="staff.php"</script>';
				
				