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
if(!isset($_REQUEST['Verify']))
{

if($_POST["submit"]=="Add")
{
$_SESSION['sellerid']=11;
$pd=$_POST["pdetail"];
$sid=$_SESSION['sellerid'];
$type=$_POST["type"];
$pn=$_POST["pname"];
$qty=$_POST["quantity"];
$pri=$_POST["price"];
$date = date('Y/m/d', time());
//photo Upload
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
	  $tmp = explode('.',$_FILES['image']['name']);
	  $file_extension = end($tmp);  
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_extension,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"productimages/".$file_name);
         
		 $photo= $_FILES['image']['name'];
      }else{
         print_r($errors);
      }
   } // upload image completed

$sql = "INSERT INTO productdb (pname,ptype, pdesc,quantity, price, sellerid, dateinserted, status,image)
VALUES ('$pn','$type','$pd','$qty','$pri', '$sid', '$date' , 'unverified','$photo')";
}


if($_POST["submit"]=="Update")
{
	$type=$_POST["type"];
$pn=$_POST["pname"];
$qn=$_POST["quantity"];
$pri=$_POST["price"];

$pid=$_SESSION['pid'];
$sql = "UPDATE productdb SET pname='$pn',quantity='$qn',price='$pri',ptype='$type' WHERE productid=$pid";
}
if($_POST["submit"]=="DeleteItem")
{
	$pid=$_SESSION['pid'];
$sql = "DELETE FROM productdb WHERE productid=$pid";
}
}
else
{	$pid=$_REQUEST['Verify'];	
	$sql = "UPDATE productdb SET status='verified' WHERE productid=$pid";
}


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header('Location:adminviewpro.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>