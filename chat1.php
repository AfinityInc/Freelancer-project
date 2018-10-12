<?php 
			include_once('config/db.php');
			
			if(isset($_POST['submit'])){ 
			session_start();
			 $sender=$_SESSION['name1'];
			$reciever=$_POST['sent'];
			
			$messsage = $_POST['msg'];
			
		 $sql="INSERT INTO tbl_chat (USER_FROM,USER_TO,MESSAGE) values ('$sender','$reciever','$messsage')";
			$res =$conn->query($sql);
			header('location:chat.php');
			}
			
			?>	