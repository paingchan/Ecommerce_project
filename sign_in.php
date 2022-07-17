<?php require_once'inc/header.php' ?>
<?php

//$extra="my-cart.php";
require_once'inc/nav.php';

if(isset($_POST['login']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);


	//$pwd = password_verify($password, $user['password']);
$query=mysqli_query($con,"SELECT * FROM user WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="my_cart.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['phone']=$num['phone'];
$_SESSION['shopping_address']=$num['shopping_address'];
$_SESSION['shopping_state']=$num['shopping_state'];

$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];

$uip=$_SERVER['REMOTE_ADDR'];

$status=1;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else
{
$extra="sign_in.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($con,"insert into userlog(userEmail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}
}

?>




<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<div class="social-sign-in outer-top-xs">
	
	</div>
	
	<form class="register-form outer-top-xs" role="form" method="post" >
	<?php
                //user_login();
                //display_message(); 
				echo htmlentities($_SESSION['errmsg']);
				echo htmlentities($_SESSION['errmsg']="");
            
            ?>	
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email Address<span>*</span></label>
		    <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" >
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="password" >
		</div>
		<div class="radio outer-xs">
		  	<label>
		    	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
		  	</label>
		  	<a href="#" class="forgot-password pull-right">Forgot your Password?</a>
		</div>
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="login">Login</button>
	</form>					
</div>
<!-- Sign-in -->

<!-- create a new account -->
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<?php
                user_register();
                display_message();
				?> 
				
           	
	<form class="register-form outer-top-xs"   method="post"  >
	
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
	    	<input type="email" class="form-control unicase-form-control text-input" name="email" required >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="name" class="form-control unicase-form-control text-input" name="name" required >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
		    <input type="tel" class="form-control unicase-form-control text-input" name="phone"  >
		</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" name="password" required >
		</div>
		
        
	  	<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="btn_register" >Sign Up</button>
	</form>
	
	
</div>	
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
  
 <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once'inc/footer.php' ?>