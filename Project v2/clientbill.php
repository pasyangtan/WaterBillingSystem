
<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="clientlogin.php"</script>';
	
	}
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM clients where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['username'];

  }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css"  href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Billing System</title>
<style type="text/css">
#wrapper{
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
 height:700px;
 background-color:rgba(11,127,171,0.1);
 backdrop-filter: blur(20px);
}
#wrapper:hover{
  background-color:rgba(255,255,255,0.1);
}
#header { 
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  width:900px; height:100px;}
table th {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  background:#999;}
#form {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
width:400px;
float:left;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:5%;
	
}
#ryt {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
float:right;
 border:3px solid rgba(0,0,0,0);
-webkit-border-radius:5px;
-moz-border-radius:5px;
 border-radius:5px;
-webkit-box-shadow:0 0 18px rgba(0,0,0,0.4);
-moz-box-shadow:0 0 18px rgba(0,0,0,0.4);
 box-shadow:0 0 18px rgba(0,0,0,0.4);
 margin-top:5%;
}
#header ul li{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	list-style:none;
	float:left; margin-top:30px; margin-left:10px;}
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
body{
      background-image: url("water.png");
      height: 100%;
      background-repeat: no-repeat;
      background-size: cover;
    }
</style>
</head>

<body>
<a href="clientbill.php"><img id="logo" src="http://localhost/wbs/img/Logo.png"></a>
<div class="container">
<div id="wrapper">
  <h1><center><b>Water Billing System</b></center></h1>
  <div style="color:#F00; font-size:12px; margin-left:900px;"> 
  <span><?php echo $sessionname;?>&nbsp;</span><a href="logout.php"><span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
  </div>
  <ul class="nav nav-pills">
    <li><a href="clienthome.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li class="btn btn-default btn-xs"><a href="clientbill.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Bill</a></li>
    
  </ul>
<hr color="#999999" />
<div  style="overflow:scroll; height:350px;">
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <!-------- home panel ----------------------------->
      
      
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5>Billing Details</h5></div>
            </div>
              <div class="panel-body">
              <div class="login">
            <h4 style="font-size:30px;">Enter Your Meter Id</h4>
            <form id="details" action="clientbill.php" method="post">
                <label>Meter Id</label>
                <input type="text" id="mi" name="mi" required>
                <input type="submit" value="Enter">
            </form>
        </div>
        <?php
        error_reporting(E_ALL ^ E_WARNING); 
include 'db.php';
$login = mysqli_query($conn,"SELECT * FROM owners WHERE mi = '" .$_POST['mi'] . "'");
$row=mysqli_fetch_array($login);  
$result = mysqli_query($conn,"SELECT * FROM owners");
echo "<table class=\"table\" bgcolor=\"#003399\">
<tr>
<th>Id</th>
<th>Firstname</th>
<th>Lastname</th>
<th>Mi</th>
<th>Address</th>
<th>Contact</th>
<th>Action</th>
</tr>";

  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['mi'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
 echo "<td><a rel='facebox' href='viewbillclient.php?id=".$row['id']."'><span class=\"btn btn-danger  btn-xs glyphicon glyphicon-eye-open\">View</span></td>";
  echo "</tr>";
echo "</table>";

?>

              
              </div>
           </div>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
   

</div>
</body>

</html>
 <script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
