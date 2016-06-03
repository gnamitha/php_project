<!doctype html>
<html>
<head>

<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
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
$pid=$_REQUEST['pid'];
$_SESSION['pid']=$pid;
$result = mysqli_query($conn,"SELECT * FROM productdb where productid=$pid" );
$row = mysqli_fetch_array($result);
  
  $pn=$row['pname'];
  $qn=$row['quantity'];
  $price=$row['price'];
  $pd=$row['pdesc'];
  $status=$row['status'];?>



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
      <td height="100" rowspan="4"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><h3>
      <form action="Addproductexe.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><table width="524" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
        <td>
        TYPE of Product
        </td>
        <td>
          <select name="type" id="type" >
            <option value="Seeds">Seeds</option>
            <option value="Fertiliser">Fertiliser</option>
            <option value="Pesticide">Pesticide</option>
            <option value="FruitsVegetables">Fruits&amp;Vegetables</option>
          </select>
        </td>
        </tr>
          <tr>
            <td width="31%">Product Name</td>
            <td width="69%">
              <input type="text" name="pname" id="pname" value="<?php echo $pn; ?>"></td>
          </tr>
          <tr>
            <td>Quantity</td>
            <td>              <input type="number" value="<?php echo $qn; ?>" name="quantity" id="quantity"  required></td>
          </tr>
          <tr>
            <td>Price</td>
            <td>
              <input type="number" name="price"  value="<?php echo $price; ?>" id="price"></td>
          </tr>
          <tr>
            <td colspan="2" align="center"> <input  name="submit" type="submit" formnovalidate id="submit" formaction="Addproductexe.php" value="Update">
              <input  name="submit" type="submit" formnovalidate id="submit" formaction="Addproductexe.php" value="DeleteItem">            </tr>
        </tbody>
      </table></form></h3></td>
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
