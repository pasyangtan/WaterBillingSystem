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

?>
<style>
  #logo {
        float: left;
        border-radius: 10px;
        height: 38px;
        width: 75px;
        opacity:0.7;
    }
#logo:hover{
      opacity:1;
      }
body{
  width:100%;
 margin:0 auto;
 
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:40px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:2%;
 padding:10px;
 height:350px;
 width:400px;
 background-color:#d0e9f5;
 
 /*backdrop-filter: blur(20px);*/
}
  </style>
<body>
<a href="clienthome.php"><span ></span><img id="logo" src="http://localhost/wbs/img/Logo.png"></a>
<p><h1>Owners Update</h1></p>
  <form method="post" action="clienteditexe.php">
<table width="342" border="0">
  <tr>
    <td width="107">Owners Id:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
    
  </tr>
  <tr>
    <td>Last Name:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>"/></td>
    </tr>
    <tr>
    <td>First Name:</td>
    <td><input type="text" name="fname"value="<?php echo $fname; ?>" /></td>
    </tr>
    <tr>
    <td>MI:</td>
    <td><input type="text" name="mi" value="<?php echo $mi; ?>"/></td>
 
  </tr>
  <tr>
    <td>Address:</td>
    <td><input type="text" name="address" value="<?php echo $address; ?>" /></td>
  
  </tr>
  <tr>
  <td>Contact:</td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="Edit"  /></td>
	</tr>
</table>
  </body>