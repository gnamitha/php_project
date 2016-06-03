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
$search=$_REQUEST['search'];
echo $search;

$sql1 = "SELECT * FROM cropdetaildb where cropname='$search'";
$sql2 = "SELECT * FROM pestfertdb where name='$search'";
$sql3 = "SELECT * FROM productdb where pname='$search'";

$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result1) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result1)) 
	{
       echo "cropdet";
	   $_SESSION['searchresult']=$search;
	   header('Location:Crop_Details.php');
}
}
elseif (mysqli_num_rows($result2) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result2)) {
        echo "pestfert";
		$_SESSION['searchresult']=$search;
		header('Location:pertfestdetail.php');
	}
	}
	elseif (mysqli_num_rows($result3) > 0) 
{
    // output data of each row
    while($row = mysqli_fetch_assoc($result3)) {
		$_SESSION["pid"]=$row['productid'];
		header('Location:productIn.php');
	}
	}

 else 
    echo "0 results";


mysqli_close($conn);
?>



