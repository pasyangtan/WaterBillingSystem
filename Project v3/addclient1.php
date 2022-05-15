<?php
if (isset($_POST['add']))
	{	   


include 'db.php';
			 		
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					$username=$_POST['username'] ;
					$password=$_POST['password'] ;
					$meterReader = $_POST['meterReader'];
					
		 mysqli_query($conn,"INSERT INTO  owners (lname,fname,mi,address,contact,username,password) 
		 VALUES ('$lname','$fname','$mi','$address','$contact','$username', '$password')"); 
		 mysqli_query($conn,"INSERT INTO  tempo_bill (Client,Prev)
		 VALUES ('$fname','$meterReader')");
				
				header("Location: clients.php");
				
				
	        }
	
?>