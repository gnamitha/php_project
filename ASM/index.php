<!doctype html>
<html>
<head>



<style type="text/css">
input[type=text] {
    width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url(pics/toolbar_find.png);
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:url(pics/quatrefoil-pattern-background-green_shop_preview.png)
}
input[type=text] {
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding-left: 40px;
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
include 'navigbar.php';?>
      </td>
    </tr>
    <tr>
      <td width="16%">&nbsp;</td>
      <td width="26%">  <?php 
	  include 'searching.php';?>      </td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td ><?php 
	  include 'Sidebar.php';?></td>
      <td colspan="2" rowspan="2"><script language="JavaScript">
var i = 0;
var path = new Array();
 
// LIST OF IMAGES
path[0] = "pics/image_1.jpg";
path[1] = "pics/image_2.jpg";
path[2] = "pics/image_3.jpg";
path[2] = "pics/image_4.jpg";

function swapImage()
{
   document.slide.src = path[i];
   if(i < path.length - 1) i++; else i = 0;
   setTimeout("swapImage()",6000);
}
window.onload=swapImage;
</script>
<img height="350" name="slide" src="pics/image_1.jpg" width="650" />
</td>
      <td width="14%" rowspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2"><h1><font color="#2A6B27">Agricultural Systems Management</font></h1>
        <font color="#123A0F"><p>
      The Agricultural Systems Management program emphasises integrated applied economic and biophysical research with a systems orientation. The program recognises the need for researchers drawn from both the social and biophysical sciences to work with each other, and with research users, to develop effective agricultural production and marketing practices and resource management strategies. This is achieved through: applying farming systems research principles which recognise the central role of the farmer; making extension systems more effective, and marketing systems research within a whole-of-chain framework.</p> </font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="44%">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
</body>
</html>
