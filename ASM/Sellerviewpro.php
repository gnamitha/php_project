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
      <?php 
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

?></td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="34%">  <?php 
include 'searching.php';?>      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td height="100" rowspan="4"><?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><table width="734" border="0" cellspacing="0" cellpadding="0">
        <tbody align="center">
          <tr>
            <th height="25" width="56">Pid</th>
            <th width="105">ProductName</th>
            <th width="123">ProductQuantity</th>
            <th width="63">Price</th>
            <th width="112">DateAdded</th>
            <th width="92">Status</th>
            <th width="183" ></th>
            </tr>
          <?php
		  $result = mysqli_query($conn,"SELECT * FROM productdb ORDER BY dateinserted DESC" );
while($row = mysqli_fetch_array($result))
  {
$pid=$row['productid'];
  $pn=$row['pname'];
  $qn=$row['quantity'];
  $price=$row['price'];
  $date=$row['dateinserted'];
  $status=$row['status'];?>
          <tr>
            <td height="30"><?php echo $pid;?></td>
            <td><?php echo $pn;?></td>
            <td><?php echo $qn;?></td>
            <td><?php echo $price;?></td>
            <td><?php echo $date;?></td>
            <td><?php echo $status;?></td>
             <td><a href="editpro.php?pid=<?php echo $pid;?>">EDIT/DELETE ITEM</a></td>
            </tr>
   
  <?php 
  }
?>
          
        </tbody>
      </table></td>
    </tr>
    <tr>
      <td height="44" colspan="2"></a></td>
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
