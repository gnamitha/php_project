<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture_mgnt_system";
session_start();
$fn=$_POST["fname"];
$ln=$_POST["lname"];
$un=$_POST["uname"];
$pwd=$_POST["password"];
$adrs=$_POST["adrs"];
$dob=$_POST["date"];
$phno=$_POST["phno"];
$mail=$_POST["email"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO customer (Cust_fname, Cust_lname, uname, password, Cust_adrs, Cust_bdate, Cust_phno,Cust_email)
VALUES ('$fn', '$ln', '$un' , '$pwd', '$adrs', '$dob' , '$phno' , '$mail')";

if (mysqli_query($conn, $sql)) {
   $_SESSION['customer']=1;
$_SESSION['uname']=$un;
$_SESSION['custid']=$id;
$_SESSION['fname']=$fn;
header('Location:CustAcc.php');

} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>