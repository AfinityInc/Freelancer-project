<?php
include_once('config/db.php');
session_start();
if(isset($_SESSION['loginstatus']) && $_SESSION['loginstatus'] == TRUE){
header('location:dashboard.php');
}

?>

<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
<title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
<!-- Bootstrap Core CSS -->
<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- animation CSS -->
<link href="css/animate.css" rel="stylesheet">
<!-- Wizard CSS -->
<link href="plugins/bower_components/register-steps/steps.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet">
<!-- color CSS -->
<link href="css/colors/default.css" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="step-register">
  <div class="register-box">
    <div class="">
       <a href="javascript:void(0)" class="text-center db m-b-40"><img src="plugins/images/admin-logo-dark.png" alt="Home" /><br/><img src="plugins/images/admin-text-dark.png" alt="Home" /></a>
      <!-- multistep form -->
        <form enctype="multipart/form-data" id="msform" method="post" action="signup.php">
        <!-- progressbar -->
        <ul id="eliteregister">
        <li class="active">Account Setup</li>
        <li>Personal Details</li>
        <li>More Details</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
        <h2 class="fs-title">Create your account</h2>
        <h3 class="fs-subtitle">This is step 1</h3>
        <input type="text" name="username" placeholder="User Name" required="" />
        <input type="password" name="pass" placeholder="Password" />
        
        <input type="button" name="next" class="next action-button" value="Next" required="" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">Personal Details</h2>
        <h3 class="fs-subtitle">This is step 2</h3>
         <input type="text" name="email" placeholder="Email" required="" />
          <input type="text" name="country" placeholder="Country" required="" />
       <select  id='select' name="gender" required="">
					    <option >Male</option>
						<option>Female</option>
					    </select>
        <input type="file" name="uploaded_file" placeholder="" required="" />
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input type="button" name="next" class="next action-button" value="Next" />
        </fieldset>
        <fieldset>
        <h2 class="fs-title">More Details</h2>
        <h3 class="fs-subtitle">This is step 3</h3>
        <select  id='select' name="skills" required="">
					    <option >WEbsite,IT and Software</option>
						<option>Mobile phone and computing</option>
						<option>Sales and marketing</option>
						<option>Data Entry and admin</option>
						<option>Buisness Accounting</option>
						<option>Writing and Content</option>
					    </select>
        <select  id='select' name="qualification" required="">
					    <option >Matric</option>
						<option>Intermediate</option>
						<option>Bachelor</option>
						<option>Master</option>
						<option>P.H.D.</option>
					    </select>
        <textarea name="description" placeholder="Description" required=""></textarea>
        <textarea name="address" placeholder="Address" required=""></textarea>        
        <input type="button" name="previous" class="previous action-button" value="Previous" />
        <input id="submit" type="submit" name="submit"  value="Submit" />
        </fieldset>
        </form>
        <div class="clear"></div>
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<script src="plugins/bower_components/register-steps/jquery.easing.min.js"></script>
<script src="plugins/bower_components/register-steps/register-init.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<!--Style Switcher -->
<script src="plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>
