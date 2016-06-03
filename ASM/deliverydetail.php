<!doctype html>
<html>
<head>


<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:url(pics/quatrefoil-pattern-background-green_shop_preview.png)
}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}	

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
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
 $cid=$_SESSION['custid'];
include 'dbconnect.php';


if(isset($_POST['submit']))
{
	$pin=$_POST['pin'];
	$adrs=$_POST['address'];
	$lm=$_POST['landmark'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$ph=$_POST['phone'];
$sql1 = "INSERT INTO deliverydetails (pincode, address  , landmark, city, state, phone,custid)
VALUES ($pin, '$adrs',' $lm ' , '$city', '$state', $ph,$cid)";

if(mysqli_query($conn, $sql1)) 
{
	 $_SESSION['$deliveryid'] = $conn->insert_id;
	 
	header('Location:placeorder.php');	
	
	}
else
 echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}?>

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
<td  bgcolor="#69D054" height="100" rowspan="4">
<?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      DELIVERY DETAILS</td>
    </tr>
    <tr>
      <td height="44" colspan="2">
      <form action="deliverydetail.php" method="post">
     <table width="200" border="1" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td>Name</td>
      <td>
        <input type="text" name="name" id="textfield"></td>
    </tr>
    <tr>
      <td>Pincode</td>
      <td>
        <input name="pin" maxlength="6" type="number" id="search" placeholder="6-digt No."></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>
        <textarea name="address" id="address"></textarea></td>
    </tr>
    <tr>
      <td>Landmark</td>
      <td>
        <textarea name="landmark"  id="landmark"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td>
        <input type="text" name="city" id="city"></td>
    </tr>
    <tr>
      <td>State</td>
      <td><input type="text" name="state" id="state"></td>
    </tr>
     <tr>
      <td>Phone</td>
      <td>        <input type="number" name="phone" id="number"></td>
    </tr>
     <tr>
      <td colspan="2"><input type="submit" name="submit" id="submit" value="Continue"></td>
      </tr>
  </tbody>
</table>

</form>      
      
      </td>
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
