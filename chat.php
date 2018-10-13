<?php
include_once('config/db.php');

session_start();
 $id= $_SESSION['name'];
if(isset($_SESSION['loginstatus']) && $_SESSION['loginstatus'] == TRUE){
?>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
     
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
      <?php
      include_once('layout.php');
      ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Chat Page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                        
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Chat Page</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- .chat-row -->
                <!-- .chat-row -->
                <div class="chat-main-box">
                    <!-- .chat-left-panel -->
                    <div class="chat-left-aside">
                        <div class="open-panel"><i class="ti-angle-right"></i></div>
                        <div class="chat-left-inner">
                        
                            <div class="form-material">
                                <h1 class="form-control p-20">ALL CONTACTS</h1>
                            </div>
                            <?php
			$sql = "select * from tbl_buyer";
	$res = $conn->query($sql);
	while($rec = $res->fetch_array()){
	extract($rec);
	
			
			?>
                            <ul class="chatonline style-none ">
                                <li>
                                    <a href="chat.php?name=<?=$BUYER_NAME?>"><img src="images/buyer/<?=$BUYER_IMAGE?>" alt="user-img" class="img-circle"> <span><?=$BUYER_NAME?> <small class="text-success"><?=$BUYER_STATUS?></small></span></a>
                                </li>
                                <?php
				if(isset($_GET['name'])){
			  $reciever=$_GET['name'];
			 $_SESSION['reciever']=$reciever;	
			 }
                            }
                            ?>
                                <li class="p-20"></li>
                            </ul>
                            
                        </div>
                    </div>
                    
                       <!-- /.row -->
                       <!-- /.row -->
                <?php
                function formatDate($date){
	return date('g:i a', strtotime($date));
}
                
                $sql="select * from tbl_seller where SELLER_ID='$id' ";
                $res=$conn->query($sql);
                 $rec=$res->fetch_array();
			   	extract($rec);
               
                ?>
                    <!-- .chat-left-panel -->
                    <!-- .chat-right-panel -->
                    <div class="chat-right-aside">
                        <div class="chat-main-header">
                            <div class="p-20 b-b">
                                <h3 class="box-title"><?=@$reciever?></h3> </div>
                        </div>
                        <div class="chat-box" >
                        <?php 
	
	$sender=$_SESSION['name1'];
@$reciever=$_SESSION['reciever'];
	 $query = "select * from tbl_chat where USER_FROM='$sender' and USER_TO='$reciever'  ORDER BY MESSAGE_TIME ";
	$run = $conn->query($query);
	while($row = $run->fetch_array()){
		
	
		?>
                            <ul class="chat-list slimscroll p-t-31" id="scroll" >
                                <li>
                                    <div class="chat-image"> <img alt="male" src="images/<?=$IMAGE?>"> </div>
                                    <div class="chat-body" >
                                        <div class="chat-text">
                                            <h4><?=$SELLER_NAME?></h4>
                                            <p> <?=$row['MESSAGE']?> </p> <b><?= date('g:i a', strtotime($row['MESSAGE_TIME']))?></b> </div>
                                    </div>
                                </li>
                                <?php
                                }
                                ?>
                               
                                 <?php 
	
		
	$sender=$_SESSION['name1'];
@$reciever=$_SESSION['reciever'];
	 $query = "select * from tbl_buyer where BUYER_NAME='$reciever' ";
	$run = $conn->query($query);
	$row1 = $run->fetch_array();
		
	
		?>
                                 <?php 
	
	$sender=$_SESSION['name1'];
@$reciever=$_SESSION['reciever'];
	 $query = "select * from tbl_chat where USER_FROM='$reciever' and USER_TO='$sender'  ORDER BY MESSAGE_TIME ";
	$run = $conn->query($query);
	while($row = $run->fetch_array()){
		
	
		?>
                                <li class="odd">
                                    <div class="chat-image"> <img alt="Female" src="images/buyer/<?=$row1['BUYER_IMAGE']?>"> </div>
                                    <div class="chat-body">
                                        <div class="chat-text">
                                            <h4><?=@$reciever?></h4>
                                            <p> <?=$row['MESSAGE']?> </p> <b><?=date('g:i a', strtotime($row['MESSAGE_TIME']))?></b> </div>
                                    </div>
                                </li>
                               <?php
                                }
                                ?>
                            </ul>
                            <div class="row send-chat-box">
                                <div class="col-sm-12">
                                <form method="post" action="chat1.php">
                                    <textarea class="form-control" name="msg" placeholder="Type your message"></textarea>
                                    <input class="btn btn-success btn-block" name="sent"  type="hidden" value="<?=$reciever?>">	
                                    <div class="custom-send">
                                        <button class="btn btn-danger btn-rounded" name="submit" type="submit">Send</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .chat-right-panel -->
                </div>
                <!-- /.chat-row -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-theme="default" class="default-theme working">1</a></li>
                                <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray" class="yellow-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                                <li><b>With Dark sidebar</b></li>
                                <br/>
                                <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                                <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-theme="gray-dark" class="yellow-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme">12</a></li>
                            </ul>
                            <ul class="m-t-20 all-demos">
                                <li><b>Choose other demos</b></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/genu.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/ritesh.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy;  Admin brought to you by AFFINITY INC. </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
  
  
  
  
  
  <?php
}else{
	header('location:Signout.php');
}

?>
  
  
  
  
  
  
  
  
  
  
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/chat.js"></script>
    <!--Style Switcher -->
    <script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>
