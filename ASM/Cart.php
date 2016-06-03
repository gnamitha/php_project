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
 $custid=$_SESSION['custid'];

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
<td  bgcolor="#69D054" height="100" rowspan="4">
<?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      MY Cart</td>
    </tr>
    <tr>
      <td height="44" colspan="2">
      <form action="placeorder.php" method="post">
      <table width="100%" border="1" cellspacing="0" cellpadding="0">
        <tbody>
          <tr align="center">
            <td>ITEM</td>
            <td>QTY</td>
            <td>Price</td>
            <td>Delivery Detail</td>
            <td>SubTotal</td>
           
          </tr>
  <?php
  $subtotal=0;
  $result = mysqli_query($conn,"SELECT * FROM cart where custid=$custid" );
  if (mysqli_num_rows($result)>0)
  {
while($row = mysqli_fetch_array($result))
  {
$pid=$row['productid'];
$cid=$row['cartid'];

  $pn=$row['productname'];
  $qn=$row['quantity'];
  $price=$row['price'];
  $photo=$row['photo'];
  $sid=$row['sellerid'];?>

          <tr>
            <td>
            
            
            <div> <div style=" float:left"> <a href="ProductIn.php?pid=<?php echo $pid;?>"><img src="productimages/<?php echo $photo;?>" height="100" width="100"></a></div><div>Name:<?php echo $pn;?></div>
            <div>ProductID:<?php echo $pid;?></div>
            <div>Sellername:<?php echo $sid;?></div>
            <div><a href="addtocart.php?delpid=<?php echo $cid;?>">Removeitem</a></div></div>
            </td>
            <td><?php echo $qn; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo "FREE"; ?></td>
            <td><?php 
			$st=$qn*$price;
			$subtotal=$subtotal+$st;
			echo $st; ?></td>
           
          </tr>
          <?php }
  }
  else
  {?>
  <td colspan="5">NO ITEM ADDED</td>
  <?php }?>
          <tr>
            <td colspan="5"><div style="float:right">SubTotal:<?php echo $subtotal; ?></div></td>
          </tr>
          <tr>
            <td colspan="5"><button formaction="index.php" class="btn" >Continue shopping</button>
           
       <button formaction="deliverydetail.php" class="btn" >Place Order</button>
         </td>
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
