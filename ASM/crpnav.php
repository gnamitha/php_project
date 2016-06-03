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
//include 'navigbar.php';?>
      </td>
    </tr>
    <tr>
      <td width="11%">&nbsp;</td>
      <td width="34%">  <?php 
//include 'searching.php';?>      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td  bgcolor="#69D054" height="100" rowspan="4"><?php 
//include 'Sidebar.php';?></td>
     <td colspan="2"> </td>
      <td width="16%" rowspan="5">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2">
      <div class="img">
  <a target="_blank" href="Crops.php?type=Fruits">
    <img  src="pics/mango-150x150.jpg" alt="Trolltunga Norway" width="300" height="200">
  </a>
  <div class="desc">Fruits</div>
</div>

<div class="img">
  <a target="_blank" href="Crops.php?type=Cereals">
    <img src="pics/barley-150x150.jpg" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Cereals</div>
</div>

<div class="img">
  <a href="Crops.php?type=Vegetables">
    <img  src="pics/vegetables-in-market-150x150.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Vegetables</div>
</div>

      
      </td>
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
