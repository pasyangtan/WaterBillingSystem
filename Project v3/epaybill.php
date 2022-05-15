<?php session_start(); ?>
<?php
  include 'db.php';
$owner_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

$q = mysqli_query($conn,"select Prev from tempo_bill where Client = '$fname'");
$results = mysqli_fetch_array($q);
$previous = $results['Prev'];
?>
<style>
  h1{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  p{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  form{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  </style>
<p><h1>Client Bill</h1></p>
 <h1>Name: <?php echo $lname.'&nbsp;' .$fname.'&nbsp;'.$mi;?></h1>
<p><?php $date=date('y/m/d');
 echo $date;?></p>
 <form method="post" action="eaddbill.php">
 <table width="346" border="1">
  <tr>
  <input type="hidden" name="owners_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">Previous Reading:</td>
    <td width="66"><input type="text" name="prev"  value="<?php echo $previous; ?>" /></td>
    <td>units</td>
  </tr>
  <tr>
    <td>Present Reading:</td>
    <td><input type="text" name="pres"  /></td>
    <td>units</td>
  </tr>
  <tr>
    <td>Tax</td>
    <td><input type="text" name="price" value="0.13"  /></td>
  </tr>
  <tr>
    <td>Price/unit</td>
    <td><input type="text" name="price" value="10"  /></td>
    <td>NRs.</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="Add"  /></td>
  </tr>
</table>
</form>