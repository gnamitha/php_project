<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
#primary_nav_wrap
{
height:50px;
width:auto;
background:#3e8e41;
}

#primary_nav_wrap ul
{

	list-style:none;
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul a
{
	display:block;
	color:#FFFFFF;
	text-decoration:none;
	font-weight:700;
	font-size:20px;
	line-height:50px;
	padding:0 15px;
	font-family:"HelveticaNeue","Helvetica Neue",Helvetica,Arial,sans-serif
}

#primary_nav_wrap ul li
{
	
	position:relative;
	float:left;
	margin:0;
	padding:0
}

#primary_nav_wrap ul li.current-menu-item
{
	background:#3e8e41
}

#primary_nav_wrap ul li:hover
{
	background:#3D901F;
}

#primary_nav_wrap ul ul
{
	display:none;
	position:absolute;
	top:100%;
	left:0;
	background:#4C8F52;
	padding:0
}

#primary_nav_wrap ul ul li
{
	float:none;
	width:200px
}

#primary_nav_wrap ul ul a
{
		font-size:16px;
	line-height:120%;
	padding:10px 15px
}

#primary_nav_wrap ul ul ul
{
	top:0;
	left:100%
}

#primary_nav_wrap ul li:hover > ul
{
	display:block
}</style>
<body>
 <nav id="primary_nav_wrap">

<?php
    if(!isset($_SESSION['customer']))
{
	?>
<ul>
  <li class="current-menu-item"><a href="index.php">Home</a></li>
  <li><a href="viewnews.php">NEWS</a></li>  
  <li><a href="crpnav.php">CROPS</a>
    <ul>
      <li> <a href="Crops.php?type=Cereals">Cerials</a></li>
      <li><a href="Crops.php?type=Vegetables">Vegetables</a></li>
      <li> <a href="Crops.php?type=Fruits">Fruits</a></li>
    </ul>
  </li>
  <li><a href="#">PRODUCTS</a>
    <ul>
       <li> <a  href="Products.php?type=Seeds">Seeds</a></li>
      <li>  <a  href="Products.php?type=Fertiliser">Fertiliser</a></li> 
      <li>  <a href="Products.php?type=Pesticide">Pesticides</a></li>
       <li> <a href="Products.php?type=FruitsVegetables">Fruits&Vegetables</a></li>
    </ul>
  </li>

  <li><a href="ContactUs.php">CONTACTS</a></li></ul>
 <ul style="float:right;list-style-type:none;">
  <li><a href="AboutUs.php">ABOUT</a></li>
  <li ><a href="Cust_regisform.php">SignUp/Login</a>    </li>
</ul>
<?php } else {?>
<ul>
  <li class="current-menu-item"><a href="index.php">Home</a></li>
  <li><a href="viewnews.php">NEWS</a></li>  
  <li><a href="crpnav.php">CROPS</a>
    <ul>
      <li> <a href="Crops.php?type=Cereals">Cerials</a></li>
      <li><a href="Crops.php?type=Vegetables">Vegetables</a></li>
      <li> <a href="Crops.php?type=Fruits">Fruits</a></li>
    </ul>
  </li>
  <li><a href="#">PRODUCTS</a>
    <ul>
       <li> <a  href="Products.php?type=Seeds">Seeds</a></li>
      <li>  <a  href="Products.php?type=Fertiliser">Fertiliser</a></li> 
      <li>  <a href="Products.php?type=Pesticide">Pesticides</a></li>
       <li> <a href="Products.php?type=FruitsVegetables">Fruits&Vegetables</a></li>
    </ul>
  </li>

  <li><a href="ContactUs.php">CONTACTS</a></li></ul>
 <ul style="float:right;list-style-type:none;">
  <li><a href="AboutUs.php">ABOUT</a></li>
  <li ><a href="#">MY ACCOUNT</a>
  <ul>
       <li> <a  href="CustAcc.php">View profile</a></li>
      <li>  <a  href="Cart.php">My Cart</a></li> 
      <li>  <a  href="vieworders.php">My Orders</a></li> 
      <li>  <a href="logout.php">LogOut</a></li>
         </ul>
    </li>
</ul>
<?php } ?>

</nav>
</body>
</html>
