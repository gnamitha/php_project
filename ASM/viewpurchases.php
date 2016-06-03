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
input[type=button], input[type=submit], input[type=reset] {
	border-radius:25px;
    background-color: #115B3A;
    border: none;
    color: white;
	font-size:24px;
    padding: 30px 100px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
<meta charset="utf-8">
<title>Agricultural management</title>
</head>

<body>

<?php
session_start();
include 'dbconnect.php';
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
include 'sellernavi.php';?>
      </td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="34%">  <?php 
	  include 'searching.php';?>      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="100"  bgcolor="#69D054"rowspan="4"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      
      
      
      </td></tr><tr>
      <td height="44" colspan="2"><table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tbody>
          <tr align="center">
            <th>Orderid</th>
            <th>CustomerId</th>
            <th>Item</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total Price</th>
            <th>Status</th>
            <th>Granting</th>
          </tr>
<?php            
$sid=$_SESSION['sellerid'];
echo $sid;
$result = mysqli_query($conn,"SELECT * FROM orderdb where sellerid=$sid" );
while($row = mysqli_fetch_array($result))
  {
	  $oid=$row['orderid'];
$pid=$row['productid'];
  $pn=$row['productname'];
  $qn=$row['quantity'];
  $price=$row['price'];
  $photo=$row['photo'];
$cid=$row['custid'];
$cs=$row['checkoutstatus'];
$_SESSION['pid']=$pid;
$_SESSION['qn']=$qn;?>

          
          <tr>
            <td><?php echo $oid; ?></td>
            <td><?php echo $cid; ?></td>
            <td><?php echo $pn; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $qn; ?></td>
            <td><?php echo $qn*$price; ?></td>
            <td><?php echo $cs; ?></td>

            <td><a href="orderdetails.php?oid=<?php echo $oid; ?>">ViewDetails</a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table></td>
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
