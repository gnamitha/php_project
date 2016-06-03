<!doctype html>
<html>
<head>


<link href="Css/Menu.css" rel="stylesheet" type="text/css"/>
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
      <td  height="100" valign="top" rowspan="4" style="margin-top:0px"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
	  
<table width="100%" cellspacing="0" cellpadding="0">
  <tbody align="center">
  <tr>
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
$type=$_REQUEST["type"];
$result = mysqli_query($conn,"SELECT * FROM cropdetaildb where category='$type'");
  $i=0;
  while($row = mysqli_fetch_array($result))
  {$i=$i+1;
	  $cname=$row['cropname'];
  $id=$row['cropid'];
  $photo=$row['image']; 
?>
      <td width="33%" height="350px" >
      <div class="img">
<a href="Crop_Details.php?cname=<?php echo $cname;?>"/>
    <img src="cropimages/<?php echo $photo;?>" height="150" width="150" >
  </a>
  <div  class="desc"><?php echo "<p>",$cname,"</p>"; ?></div>
</div>
</td>
<?php
if($i%3==0)
echo "</tr><tr>";
 }//WHILE
echo "</tr>";  
?>
</tbody>
</table>


</td>
    </tr>
    <tr>
      <td height="44" colspan="2">&nbsp;</td>
    </tr>
    <tr>
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
