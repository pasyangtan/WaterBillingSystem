<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.min.css" />
</head>
<style>
  #logo {
        float: left;
        border-radius: 4px;
        height: 58px;
        width: 115px;
        opacity:0.7;
    }
#logo:hover{
      opacity:1;
      }
  table {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  background:#000000;}
  </style>

<a href="clienthome.php"><img id="logo" src="http://localhost/wbs/img/Logo.png"></a>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where owners_id='$id'");

echo "<table class=\"table table-striped table-hover table-bordered\">
<tr>
<th>Bill Id</th>
<th>Previous Reading</th>
<th>Present Reading</th>
<th>Consuption</th>
<th>Price</th>
<th>Date</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $prev . "</td>";
  echo "<td>" . $pres . "</td>";
  echo "<td>". $totalcons."</td>";
  echo "<td>" . $price . "</td>";
  echo "<td>" . $row['date'] . "</td>";
 echo "<td><a rel='facebox' href='uviewpayment.php?id=".$row['id']."'><span style= color:#333333 class=\"glyphicon glyphicon-eye-open\">View </a> ";
  echo "</tr>";
  }
echo "</table>";

?>


</html>
