<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';

	
	}
		
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
  
?>
<?php
include 'db.php';
  $results = mysqli_query($conn,"SELECT * FROM user");
  $users = mysqli_num_rows($results);
?>
<?php
include 'db.php';
  $results = mysqli_query($conn,"SELECT * FROM bill");
  $bill = mysqli_num_rows($results);
?>
<?php
include 'db.php';
  $jibu = mysqli_query($conn,"SELECT * FROM owners");
  $client = mysqli_num_rows($jibu);
?>

<?php
if (isset($_POST['add']))
	{	   
	include 'db.php';
			 		$id=$_POST['id'] ;
					$lname= $_POST['lname'] ;					
					$fname=$_POST['fname'] ;
					$mi=$_POST['mi'] ;
					$address=$_POST['address'] ;
					$contact=$_POST['contact'] ;
					
		 mysqli_query($conn,"INSERT INTO  owners (id,lname,fname,mi,address,contact) 
		 VALUES ('$id','$lname','$fname','$mi','$address','$contact')"); 
				
				echo '<script>alert("success")</script>';
				
				
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
<script type="text/javascript">
function addCommas(nStr){
 nStr += '';
 var x = nStr.split('.');
 var x1 = x[0];
 var x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}

</script>
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script src="css/bootstrap/dist/js/jquery.js"></script>
<script src="css/bootstrap/dist/js/bootstrap.min.js"></script>
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
<div class="container">
<div id="wrapper">
  <h1><center><b>Water Billing System</b></center></h1>
  <div style="color:#F00; font-size:12px; margin-left:900px;"> 
  <span><?php echo $sessionname;?>&nbsp;</span><a href="logout.php">   <span class="btn btn-danger  glyphicon glyphicon-log-out">&nbsp;Logout</span></a>
  </div>
  <ul class="nav nav-pills">
    <li class="btn btn-default btn-xs"><a href="billing.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
    <li><a href="bill.php"><span class="glyphicon glyphicon-usd"></span>&nbsp;Billing</a></li>
    <li><a href="staff.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Staffs</a></li>
    <li><a href="clients.php"><span class="glyphicon glyphicon-list"></span>&nbsp;Clients</a></li>
  </ul>
<hr color="#999999" />
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    <!-------- home panel ----------------------------->
      <h4>Welcome, <?php echo $sessionname; ?></4>
      <hr color="#000000" />
      
      <div class="col-md-4">
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5 style="font-size:24px; font-weight:bold;">Clients</h5></div>
            </div>
              <div class="panel-body">
               <h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;"><?php echo $client; ?></h1>
              </div>
              <a href="clients.php"><div class="panel-footer"><span class="alert-link glyphicon glyphicon-circle-arrow-right"></span>View</div></a>
         </div>
      </div>
    </div>
   <!-----  ######################################### -->
    <div class="col-md-4">
         <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title"><h5 style="font-size:24px; font-weight:bold;">Staffs</h5></div>
            </div>
              <div class="panel-body">
               <i><h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;"><?php echo $users; ?></h1>
              </div>
              <a href="staff.php"><div class="panel-footer"><span class="alert-link glyphicon glyphicon-circle-arrow-right"></span>View</div></a>
         </div>
      </div>
    </div>
  <!-----  ######################################### -->
    <div class="col-md-4">
         <div class="panel panel-info">

              <div class="panel-body">
              <h1 align="center" style="font:Verdana, Geneva, sans-serif; font-weight:bolder;">
              </h1>
      </div>
    </div>
   <!--------- ########################################### ------>
    
    <!-------------------------------- home ends ------------------------------>

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