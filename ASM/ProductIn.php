<!doctype html>
<html>
<head>


<link href="Css/font.css" rel="stylesheet" type="text/css"/>
<style type="text/css">


div.ridge{border-style: ridge;
border-radius:30px;
width:auto;
height:300px;
}
	
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
<form action="addtocart.php" method="post">
     <div class="ridge"><?php 
	 
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

	if(isset($_REQUEST["pid"]))
	$pid=$_REQUEST["pid"];
	elseif(isset($_SESSION["pid"]))
	$pid= $_SESSION["pid"];
	
	 $result = mysqli_query($conn,"SELECT * FROM productdb where productid='$pid'");
$row = mysqli_fetch_array($result);
  $pn=$row['pname'];
  $photo=$row['image'];
  $type=$row['ptype'];
  $pd=$row['pdesc'];
  $qua=$row['quantity'];
  $price=$row['price'];
  $sid=$row['sellerid'];
  
  
  
  $_SESSION["price"]=$price;
  $_SESSION["sid"]=$sid;
  $_SESSION["prid"]=$pid;
  $_SESSION["pname"]=$pn;
  $_SESSION["type"]=$type;
  $_SESSION["qua"]=$qua;
  $_SESSION["photo"]=$photo;

?><div class="ridge">
      <div style=" float:right"> <a href="ProductIn.php?pid=<?php echo $pid;?>"><img src="productimages/<?php echo $photo;?>" height="250" width="250"></a></div>
       <div style=" margin-left:30px; font-size:42px; font-style:normal">
  <?php echo $pn;?>
</div>
<div>
<h3>Price:<?php echo $price;?></h3>
</div>
<div>
<h3>Quantity <input name="quantity" type="number" id="quantity"  value="1" style="width:30px">/<?php echo $qua;?>available</h3>
<p>&nbsp;</p>
</div>

<button formaction="addtocart.php?pid=<?php echo $pid;?>" class="button button1" >ADDTOCART</button>

</div></form></td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td height="201">&nbsp;</td>
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
