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
  <tbody0 >
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
      <td  bgcolor="#69D054" height="42"><?php 
//include 'Sidebar.php';?></td>
     <td colspan="2" rowspan="2">
    <form method="post"  action="addcropdetailexe.php" enctype="multipart/form-data" name="form1" id="form1">
  <p>
    <label for="cropname">Crop Name:</label>
    <input type="text" name="cropname" id="cropname" required>
  </p>
  <p>Scientific Name
    <input type="text" name="sname" id="sname" required>
  </p>
  <p><br> 
    <label for="cropdetail">Crop Details:</label>
    <textarea name="cropdetail" id="cropdetail" required></textarea>
  </p>
  <p>
    <label for="category">Crop Category:</label>
    <select name="category" id="category">
      <option selected="selected">Cereals</option>
      <option>Fruits</option>
      <option>Vegetables</option>
    </select>
  </p>
  <p>
    <label for="harvest">Harvesting:</label>
    <textarea name="harvest" id="harvest"></textarea>
  </p>
  <p>
    <label for="uses">Uses:</label>
    <textarea name="uses" id="uses"></textarea>
  </p>
  <p>
    <label for="fileField">Crop Image:</label>
  <input type = "file" name = "image"  required/>
  </p>
  <p>
    <input name="submit" type="submit" id="submit" formaction="addcropdetailexe.php" value="Submit">
    <br>
  </p>
</form></td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td height="44" colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
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
