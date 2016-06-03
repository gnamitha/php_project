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
      <td height="100"  bgcolor="#69D054"rowspan="4"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      
      
      
      </td></tr><tr>
      <td height="44" colspan="2">
      
<?php 
if(isset($_SESSION['orderid']))
$oid=$_SESSION['orderid'];
if(isset($_REQUEST['oid']))
$oid=$_REQUEST['oid'];



$_SESSION['orderid']=$oid;
include 'dbconnect.php';
  $result = mysqli_query($conn,"SELECT * FROM orderdb where orderid=$oid" );
$row = mysqli_fetch_array($result);
$pid=$row['productid'];
$_SESSION['pid']=$pid;
  $pn=$row['productname'];
  $qn=$row['quantity'];
  $price=$row['price'];
  $photo=$row['photo'];
  $sid=$row['sellerid'];?>
<form action="orderdetailsexe.php" method="post">
<div> <div style=" float:left"> <a href="ProductIn.php?pid=<?php echo $pid;?>"><img src="productimages/<?php echo $photo;?>" height="150" width="155"></a></div><div><h2 style="color:#">
</h2><h3 style="color:#3E684B"><?php echo $pn;?></h3></div>
            <div><h2 style="color:#3364A6">ProductID:</h2><h3 style="color:#3E684B"><?php echo $pid;?></div>
            <div><h2 style="color:#3364A6">Quantity:</h2><h3 style="color:#3E684B"><?php echo $sid;?></div>
            <div><h2 style="color:#3364A6">Status Updation :-</h2> <h3 style="color:#3E684B">
                <label>
                <br><input type="radio" name="RadioGroup1" value="Approved" id="RadioGroup1_0">
                Approved</label>
                <br>
                <label>
                  <input type="radio" name="RadioGroup1" value="Packaging" id="RadioGroup1_1">
                  Packaging</label>
                <br>
                <label>
                  <input type="radio" name="RadioGroup1" value="Discard" id="RadioGroup1_2">
                  Discard</label>
                <br>
              <label>
                  <input type="radio" name="RadioGroup1" value="Delivered" id="RadioGroup1_2">
                  Delivered</label>
                <br>
              
          </div><div>
            <input  name="submit" type="submit" formnovalidate id="submit" formaction="orderdetailsexe.php" value="submit">
           </div></div>
          
     </form> </td>
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



	     ?></body>
</html>
