<?php 
session_start();
if(!isset($_SESSION['customer']))
{
header('Location:Cust_regisform.php');
}
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
if(isset($_REQUEST['delpid']))
{
$cid=$_REQUEST['delpid'];
$sql = "DELETE FROM cart WHERE cartid=$cid";
mysqli_query($conn, $sql);
	header('Location:Cart.php');	

	}
else{



  $pid=$_SESSION["prid"];
  $pn=$_SESSION["pname"];
  $qua= $_SESSION["qua"];
 $sid=$_SESSION["sid"];
 $quan=$_REQUEST["quantity"];
$price=$_SESSION["price"];
$photo=$_SESSION["photo"];
$custid=$_SESSION['custid'];
$date = date('Y/m/d', time());

$sql = "INSERT INTO cart (productid, sellerid  , price, productname, quantity, dateadded,checkoutstatus,custid,photo)
VALUES ('$pid', '$sid',' $price ' , '$pn', '$quan', '$date' ,'processing',$custid,'$photo')";

if(mysqli_query($conn, $sql)) 
{
	echo "added to cart";
	header('Location:Cart.php');	
	
	}
else
echo "CART aaadiyilla error undu";
 //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>