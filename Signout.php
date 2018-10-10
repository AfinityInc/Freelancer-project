<?php
session_start();
if(isset($_SESSION['loginstatus'])){
unset($_SESSION['loginstatus']);
session_destroy();
 header('location:index.php');


}else {
	header('location:index.php');
}

?>
