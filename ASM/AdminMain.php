<!doctype html>
<html>
<head>

<link href="Css/navi.css" rel="stylesheet" type="text/css"/>
<link href="Css/Menu.css" rel="stylesheet" type="text/css"/>
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
}input[type=button], input[type=submit], input[type=reset] {
	border-radius:25px;
    background-color: #115B3A;
    border: none;
    color: white;
	font-size:24px;
    padding: 30px 100px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
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
<?php include 'adminnavi.php';?>     </td>
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
      <td colspan="2"></td>
    </tr>
    <tr>
      <td height="44" colspan="2"><form action="Addproduct.php" method="post" id="FRM1">
      <input  name="submit" type="submit"  id="submit" formaction="addcropdetail.php" value="ADDCROPS">
     <input  name="submit" type="submit"  id="submit" formaction="adminviewpro.php" value="VIEW PRODUCT">
    <input  name="submit" type="submit"  id="submit" formaction="adminviewpro.php" value="DELETE PROUCTS"></form></td>
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
