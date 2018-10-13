
<?php 
	include_once('config/db.php');
	
	session_start();
	$sender=$_SESSION['name1'];
	$reciever=$_SESSION['reciever'];
echo	$query = "select * from tbl_chat where USER_FROM='$sender' and USER_TO='$reciever' or USER_FROM='$reciever'and USER_TO='$sender' ";
	$run = $conn->query($query);
	while($row = $run->fetch_array()) :
		?>
	
			<div id="chat_data">
				<span  class="btn btn-success glyphicon glyphicon-user">&nbsp;<b><?php echo $row['USER_FROM']; ?></b></span>:
				<span style="color:green;"><?php echo $row['MESSAGE']; ?></span>
				<span style="float:right;"><?php echo $row['MESSAGE_TIME']; ?></span>
			</div>
			<?php endwhile;?>
			
			
			
			