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

    
 <ul>
  <li class="current-menu-item"><a href="SellerMain.php">Home</a></li>
  <li><a href="viewnews.php">NEWS</a>
   </li>
     
      
  
  <li><a href="#">PRODUCTS</a>
    <ul>
       <li> <a href="Addproduct.php">View Products</a></li>      
       <li> <a href="Sellerviewpro.php">View Products</a></li>
    </ul>
  

  <li><a href="#">CONTACTS</a></li></ul>
 <ul style="float:right;list-style-type:none;">
  <li><a href="#">ABOUT</a></li>
  <li ><a href="logout.php">LOGOUT</a> </li>
</ul>
 
</nav>
</body>
</html>
