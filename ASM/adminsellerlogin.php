<!doctype html>
<html>
<head>
<link href="Css/Menu.css" rel="stylesheet" type="text/css"/>
<link href="Css/formtype.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
background-image:url(pics/quatrefoil-pattern-background-green_shop_preview.png);
}
</style>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();
if(isset($_SESSION['customer']))
{
header('Location:CustAcc.php');
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
      <td  height="200" rowspan="4"></td>
      <td width="34%" height="276" rowspan="6">
      <form action="adminsellerloginexe.php" method="post" name="login" id="login">
  <table  width="302" border="0">
    <tbody>
      <tr>
        <td height="234" colspan="2"><center>Already a User</center> <br>LOGIN
          <input type="text" name="uname" id="uname" required>
          PASSWORD
          <input type="password" name="password" id="password" required>          <center>
            <input  name="submit" type="submit" formnovalidate id="submit" formaction="adminsellerloginexe.php" value="LOGIN"></center></td>
      </tr>
      </tbody>
  </table>
</form></td>
      <td width="24%" rowspan="7">
</td>
      <td width="30%" rowspan="6">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
  </tbody>
</table>
</body>
</html>
