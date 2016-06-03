<!doctype html>
<html>
<head>


<link href="Css/font.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:url(pics/quatrefoil-pattern-background-green_shop_preview.png)
}
a {
    color: #025331;
	text-decoration: none;
}
</style>
<meta charset="utf-8">
<title>Agricultural management</title>
</head>

<body>

<?php
session_start();


?>
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td  height="175" colspan="4"
      >
      <img height="175px" width="100%" src="pics/image_2.jpg"/></td>
    </tr>
    <tr>
      <td height="60" colspan="4">
      
      <?php 
include 'navigbar.php';?>
      </td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="34%">  <?php 
include 'searching.php';?>      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td  bgcolor="#69D054" height="42"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2" rowspan="2">
      <?php 
	  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture_mgnt_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_REQUEST['cname']))
$cname=$_REQUEST['cname'];
else
$cname=$_SESSION['searchresult'];

$result = mysqli_query($conn,"SELECT * FROM cropdetaildb where cropname='$cname'");
$row = mysqli_fetch_array($result);
  $cname=$row['cropname'];
  $id=$row['cropid'];
  $photo=$row['image'];
  $sn=$row['scientific_name'];
  $cd=$row['cropdetail'];
  $harvesting=$row['Harvesting']; 
  $uses=$row['Uses'];
  $cat=$row['category'];
  echo "<h1>",$cname,"</h1><br>";
  ?>
  <div class="img" align="right">
    <a target="_blank" href="img_fjords.jpg">
      <img src="cropimages/<?php echo $photo?>" alt="Trolltunga Norway" width="300" height="200">
      </a>
    <div class="desc"><?php echo $cname?></div>
</div>
  <?php
  echo "<h2>Scientific Name</h2><h3>",$sn,"</h3><br><h2>Details</h2><h3><p>",$cd,"</p></h3><br><h2>Harvesting</h2><h3>",$harvesting,"</h3><br><h2>Uses</h2><h3>",$uses,"<br>";
  
  echo $harvesting;
  echo $uses;
  echo $cat;

 
?></td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="44" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="106">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="39%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
