<?php
include_once('config/db.php');

$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];

 $sql="select * from tbl_seller where SELLER_NAME='$name' and SELLER_PASSWORD='$pass' ";

$res=$conn->query($sql);
$rec=$res->fetch_array();
if(mysqli_num_rows($res)==1){
session_start();
$_SESSION['loginstatus']=TRUE;
$_SESSION['name']=$rec['SELLER_ID'];
 header('location:dashboard.php?login=succesfully');

}
else{
header('location:login.php?error=error');
}

?>
