<?php
session_start();
include 'dbconnect.php';

  if(isset($_POST['submit']))
{
	$status=$_POST['RadioGroup1'];
$oid=$_SESSION['orderid'];
	$sql = "UPDATE orderdb SET checkoutstatus='$status' WHERE orderid=$oid";	
	
if (mysqli_query($conn, $sql)) {
    echo "status updated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

if($status=="approved")
{
	$qn=$_SESSION['qn'];
	$pid=$_SESSION['pid'];
	$sql1 = "UPDATE productdb SET quantity=quantity-$qn WHERE productid=$pid";	
	
if (mysqli_query($conn, $sql1)) {
    echo "productdb altered";
} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}
	
}
}

mysqli_close($conn);
