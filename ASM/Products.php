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
<td  valign="top" bgcolor="#69D054" height="100" rowspan="3">
<?php 
include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="4">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      <table width="100%" cellspacing="0" cellpadding="0">
  <tbody>
      <tr>
      <td colspan="3"><div align="right"><select name="arrange" id="arrange">
        <option value="HighToLow">High To Low</option>
        <option value="LowToHigh">Low To High</option>
        <option value="New">New</option>
      </select></div></td>
    </tr>
    <tr>

<?php
$type=$_REQUEST["type"];
$result = mysqli_query($conn,"SELECT * FROM productdb where ptype='$type' and quantity>0");
  $i=0;
  while($row = mysqli_fetch_array($result))
  {
	  $pid=$row['productid'];
	  $i=$i+1;
	  $pname=$row['pname'];
  $price=$row['price'];
  $photo=$row['image'];
?>
      <td width="33%" height="350px" >
      <div class="img">
  <a href="ProductIn.php?pid=<?php echo $pid;?>">
    <img src="productimages/<?php echo $photo;?>" >
  </a>
  <div class="desc"><?php echo "<p>",$pname,"</p><p>Price=",$price,"</p>"; ?></div>
</div>
</td>
<?php
if($i%3==0)
echo "</tr><tr>";
 }//WHILE
  
?>
  </tbody>
</table>
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
      <td>&nbsp;</td>
      <td width="39%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>


