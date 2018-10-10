<?php
include_once('config/db.php');

if(isset($_POST['submit'])){
	
	if(isset($_POST['submit'])){
$image=$_FILES['uploaded_file']['name'];
$image_tmp=$_FILES['uploaded_file']['tmp_name'];

move_uploaded_file($image_tmp,"images/$image");
}

$name=$_POST['username'];
$pass=$_POST['pass'];
$email=$_POST['email'];
$country=$_POST['country'];
$gender=$_POST['gender'];
$skills=$_POST['skills'];
$qualification=$_POST['qualification'];
$description=$_POST['description'];
$address=$_POST['address'];


 $sql="insert into tbl_seller (SELLER_NAME,SELLER_EMAIL,SELLER_PASSWORD,GENDER,SKILLS,QUALIFICATION,DESCRIPTION,ADDRESS,IMAGE )values('$name' ,'$email','$pass','$gender','$skills','$qualification','$description','$address','$image')";

$res=$conn->query($sql);
header('location:register.php?success=success');
}
else{
	header('location:register.php?error=error');
}
?>