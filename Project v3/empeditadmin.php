<?php session_start(); ?>
<?php
include 'db.php';
$staff_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM emp WHERE id  = '$staff_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
        $fname=$test['fname'] ;
        $lname=$test['lname'] ;
        $address=$test['address'] ;
        $contact=$test['contact'] ;
				$username= $test['username'] ;					
				$password=$test['password'] ;				

?>

<p><h1>Staff Update</h1></p>
  <form method="post" action="empeditadmindb.php">
<table width="342" border="0">
  <tr>
    <td width="107"></td>
    <td width="315"><input type="hidden" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname" value="<?php echo $fname; ?>"/></td>
    <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>"/></td>
    <tr>
    <td>Address:</td>
    <td><input type="text" name="address" value="<?php echo $address; ?>"/></td>
    <tr>
    <td>Contact:</td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>"/></td>
  <tr>
    <td>Username:</td>
    <td><input type="text" name="username" value="<?php echo $username; ?>"/></td>
    </tr>
    <tr>
    <td>Password:</td>
    <td><input type="text" name="password"value="<?php echo $password; ?>" /></td>
    </tr>
  </tr>
 
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>