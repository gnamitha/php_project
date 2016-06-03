<?php



session_start();

 $cid=$_SESSION['custid'];
$did=$_SESSION['$deliveryid'];
include 'dbconnect.php';

  $result = mysqli_query($conn,"SELECT * FROM cart where custid=$cid" );
while($row = mysqli_fetch_array($result))
  {
$pid=$row['productid'];
  $pn=$row['productname'];
  $quan=$row['quantity'];
  $price=$row['price'];
  $photo=$row['photo'];
  $sid=$row['sellerid'];
  $cartid=$row['cartid'];

$date = date('Y/m/d', time());


$sql = "INSERT INTO orderdb (productid, sellerid  , price, productname, quantity, dateadded,checkoutstatus,custid,photo,deliveryid)
VALUES ('$pid', '$sid',' $price ' , '$pn', '$quan', '$date' ,'processing',$cid,'$photo',$did)";
  


if(mysqli_query($conn, $sql)) 
{

$sql1 = "DELETE FROM cart WHERE cartid=$cartid";
 
mysqli_query($conn, $sql1);
	
	//header('Location:Cart.php');	
	
	}
else
echo "Error: " . $sql . "<br>" . mysqli_error($conn);



  }?>
<center><h1 style="color:#22AC7F">ORDER PLACED</h1></center>
<center><h1 style="color:#22AC7F">Ready Payment for Cash On Delivery</h1></center>

<button onclick="window.location.href='index.php'">Continue</button>