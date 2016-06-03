<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriculture_mgnt_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$cn=$_POST["cropname"];
$sn=$_POST["sname"];
$cd=$_POST["cropdetail"];
$cat=$_POST["category"];
$har=$_POST["harvest"];
$use=$_POST["uses"];

//photo Upload
if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
	  
	  
	  $tmp = explode('.',$_FILES['image']['name']);
	  $file_extension = end($tmp);
     
	 
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_extension,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"cropimages/".$file_name);
         
		 $photo= $_FILES['image']['name'];
      }else{
         print_r($errors);
      }
   }
  
  
//  upload image completed




$sql = "INSERT INTO cropdetaildb (cropname, scientific_name,cropdetail, category, Harvesting, Uses, image)
VALUES ('$cn','$sn','$cd','$cat', '$har', '$use' , '$photo')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>