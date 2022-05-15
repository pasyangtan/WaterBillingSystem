<?php
include 'db.php';
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	if($prev>$pres){
		$totalcun=$prev;
	}
	else{
		$totalcun = $pres - $prev;
	}
	$tax = 0.13;
	$price = $_POST['price'];
	$pricetotal = ($totalcun * $price);
	$pricetotal = $pricetotal + ($tax*$pricetotal);
	$date=$_POST['date'] ;
	

	mysqli_query($conn,"INSERT INTO  bill (owners_id,prev,pres,tax,price,date) 
		 VALUES ('$owners_id','$prev','$pres','$tax','$pricetotal','$date')"); 
		 
	mysqli_query($conn,"UPDATE tempo_bill SET Prev = '$pres' where id ='$owners_id'");
				
				echo '<script>alert("success")</script>';
				echo '<script>windows: location="empbill.php"</script>';
	