<!DOCTYPE html>
<html>
<head>
<style>

.dropbtn {
	height: auto;
	width: auto;
    background-color: #69D054;
    color: white;
    padding: 16px;
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	    font-size: 20px;
    border: none;
    cursor: pointer;
}

.dropdown {
	width:auto;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 130px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	display: block;
    color: #000000;
    padding: 8px 0 8px 16px;
    text-decoration: none;}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
	background-color: #555;
	font-size: 20px;
}
uls {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 100px;
    background-color: #f1f1f1;
}

lis a {
	font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
	display: block;
    color: #fff;
    padding: 8px 0 8px 16px;
    text-decoration: none;
}

/* Change the link color on hover */
lis a:hover {
    background-color: #555;
    color: white;
}
.sidecontainer {
	background-color:#69D054;
	height: auto;
	width: auto;
}
</style>
</head>
<body>

<h3>
<div class="sidecontainer">
<div class="dropdown">
  <button class="dropbtn">Crops&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
  <div class="dropdown-content">
    <a href="Crops.php?type=Cereals">Cerials</a>
    <a href="Crops.php?type=Vegetables">Vegetables</a>
    <a href="Crops.php?type=Fruits">Fruits</a>
  </div>
</div>

<uls>
  <lis><a href="PertFestnav.php?type=Fertilizer">Fertilizers</a></lis>
  <lis><a href="PertFestnav.php?type=Pesticide">Pestisides</a></lis>
  <lis><a href="Harvesting.php">Harvesting Methods</a></lis>
  <lis><a href="growingtech.php">Growing Techniques</a></lis>
</ul></div></h3>
</body>
</html>
