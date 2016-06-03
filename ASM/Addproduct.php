<!doctype html>
<html>
<head>

<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
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
      
  <?php include 'sellernavi.php';?>
      </td>
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
      <td colspan="2"><h3>
      <form action="Addproductexe.php" method="post" enctype="multipart/form-data" name="form1" id="form1"><table width="600" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
        <td>
        TYPE of Product
        </td>
        <td>
          <select name="type" id="type">
            <option value="Seeds">Seeds</option>
            <option value="Fertiliser">Fertiliser</option>
            <option value="Pesticide">Pesticide</option>
            <option value="FruitsVegetables">Fruits&amp;Vegetables</option>
          </select>
        </td>
        </tr>
          <tr>
            <td width="31%">Product Name</td>
            <td width="69%">
              <input type="text" name="pname" id="pname" required></td>
          </tr>
          <tr>
            <td>Product Details</td>
            <td>
              <textarea name="pdetail" id="pdetail" required></textarea></td>
          </tr>
          <tr>
            <td>Quantity</td>
            <td>              <input type="number" name="quantity" id="quantity" required></td>
          </tr>
          <tr>
            <td>Price</td>
            <td>
              <input type="number" name="price" id="price" required></td>
          </tr>
          <tr>
            <td>Image</td>
            <td>  <input type = "file" name = "image" required /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"> <input  name="submit" type="submit" formnovalidate id="submit" formaction="Addproductexe.php" value="Add"></tr>
        </tbody>
      </table></form></h3></td>
    </tr>
    <tr>
      <td height="44" colspan="2">&nbsp;</td>
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
