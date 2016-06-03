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

if(empty($_POST["uname"])||empty($_POST["password"]))
{
die("please enter UserName and Password");
}


$a=$_POST["uname"];
$b=$_POST["password"];
if(($a=="AdminAMS")&&($b=="Admin12345678"))
{
header('Location:AdminMain.php');	
}
else{
	
$sql="select * from customer where uname='$a' and password='$b'";
$result =mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0) {
	$row=mysqli_fetch_assoc($result); 
echo "LOGIN SUCCESS";
$id=$row['Cust_id'];
$un=$row['uname'];
$fn=$row['Cust_name'];
echo $id;

$_SESSION['customer']=1;
$_SESSION['uname']=$un;
$_SESSION['custid']=$id;
$_SESSION['fname']=$fn;
header('Location:index.php');
}
 else {
    echo "Incorrect User NAme and Password";
}
}

?>