<!doctype html>
<html>
<head>

<link href="Css/font.css" rel="stylesheet" type="text/css"/>

<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:url(pics/quatrefoil-pattern-background-green_shop_preview.png)
}
</style>
<meta charset="utf-8">
<title>Agricultural management</title>
</head>

<body>

<?php
session_start();
// $custid=$_SESSION['custid'];

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
     NEWS</td>
    </tr>
    <tr>
      <td height="44" colspan="2">
<div style="height:500px; width:1000px; overflow:scroll; margin-left:30px">

<?php 
 $result = mysqli_query($conn,"SELECT * FROM news ORDER BY newsid DESC;" );
  
while($row = mysqli_fetch_array($result))
  {
$head=$row['newshead'];
$detail=$row['newsdetail'];
  echo '<h2>'.$head.'</h2>';
  echo '<p><h3>'.$detail.'</h3></p>';
  }

?>
<div style="height:500px; width:1000px; overflow:scroll">
</div>

      
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
