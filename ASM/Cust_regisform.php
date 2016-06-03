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
      <form action="loginexe.php" method="post" name="login" id="login">
  <table  width="302" border="0">
    <tbody>
      <tr>
        <td height="234" colspan="2"><center>Already a User</center> <br>LOGIN
          <input type="text" name="uname" id="uname" required>
          PASSWORD
          <input type="password" name="password" id="password" required>          <center>
            <input  name="submit" type="submit" formnovalidate id="submit" formaction="loginexe.php" value="LOGIN"></center></td>
      </tr>
      </tbody>
  </table>
</form></td>
      <td width="24%" rowspan="7"><center>New USER</center><form id="form2" action="Cust_regisformexe.php" name="form1" method="post">
<table align="center" width="275" border="0">
  <tbody>
    <tr>
      <td width="69">First Name</td>
      <td width="190"><input type="text" name="fname" id="fname" ></td>
    </tr>
    <tr>
      <td><p>Last Name</p></td>
      <td><input type="text" name="lname" id="lname"></td>
    </tr>
    <tr>
      <td>UserName*</td>
      <td><input type="text" name="uname" id="uname" required></td>
    </tr>
    <tr>
      <td>Password*</td>
      <td><input type="password" name="password" id="password" required></td>
    </tr>
    <tr>
      <td>Full Address</td>
      <td><textarea name="adrs" id="adrs" required></textarea></td>
    </tr>
    <tr>
      <td>DateOfBith*</td>
      <td><input type="date" name="date" id="date" required></td>
    </tr>
    <tr>
      <td>Phone Number*</td>
      <td><input type="text" name="phno" id="phno" maxlength="10" required></td>
    </tr>
    <tr>
      <td>Email*</td>
      <td><input name="email" type="email" id="email" autocomplete="on" required></td>
    </tr>
    <tr>
      <td colspan="2"><center><input name="submit" type="submit" id="submit" formaction="Cust_regisformexe.php" value="SUBMIT" align="middle"></center></td>
      </tr>
  </tbody>
</table>
</form>
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
    <tr>
      <td colspan="4" align=right><a href="adminsellerlogin.php">Admin/SellerLogin</td>
    </tr>
  </tbody>
</table>
</body>
</html>
