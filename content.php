<?php require_once'inc/header.php' ?>
<?php require_once'inc/nav.php' ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Contact</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
    <div class="contact-page">
		<div class="row">
			
				<div class="col-md-12 contact-map outer-bottom-vs">

					
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.0080692193424!2d80.29172299999996!3d13.098675000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526f446a1c3187%3A0x298011b0b0d14d47!2sTransvelo!5e0!3m2!1sen!2sin!4v1412844527190" width="600" height="450"  style="border:0"></iframe>
				
				</div>
                <form class="register-form" role="form" method="POST" >
               
				<div class="col-md-8 contact-form">
	<div class="col-md-12 contact-title">
		<h4>Contact Form</h4>
	</div>
	<div class="col-md-4 ">
    <?php
            content();
            display_message();
            ?>
           
			<div class="form-group">
		    <label class="info-title" for="exampleInputName">Your Name <span>*</span></label>
		    <input type="text"  class="form-control unicase-form-control text-input" id="exampleInputName" placeholder="" name="name" required >
		  </div>
		
	</div>
	<div class="col-md-4">
	
			<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Phone number <span>*</span></label>
		    <input type="tel" class="form-control unicase-form-control text-input" id="exampleInputEmail1" placeholder="" name="phone" required >
		  </div>
		
	</div>
	<div class="col-md-4">
		
			<div class="form-group">
		    <label class="info-title" for="exampleInputTitle">Title <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" id="exampleInputTitle" placeholder="Title" name="title" required >
		  </div>
		
	</div>
	<div class="col-md-12">
	
			<div class="form-group">
		    <label class="info-title" for="exampleInputComments">Your Comments <span>*</span></label>
		    <textarea class="form-control unicase-form-control" id="exampleInputComments" name="comment" required ></textarea>
		  </div>
	
	</div>
	<div class="col-md-12 outer-bottom-small m-t-20">
		<button type="submit" class="btn-upper btn btn-primary checkout-page-button" name="btn_content" >Send Message</button>
	</div>
                    </form>
</div>
<?php $setting = setting();
$row=mysqli_fetch_assoc($setting);
 ?>
<div class="col-md-4 contact-info">
	<div class="contact-title">
		<h4>Information</h4>
	</div>
	<div class="clearfix address">
		<span class="contact-i"><i class="fa fa-map-marker"></i></span>
		<span class="contact-span"><?php echo $row['address'] ?></span>
	</div>
	<div class="clearfix phone-no">
		<span class="contact-i"><i class="fa fa-mobile"></i></span>
		<span class="contact-span"><a href="tel:<?php echo $row['phone'] ?>"><?php echo $row['phone'] ?></a></span>
	</div>
	<div class="clearfix email">
		<span class="contact-i"><i class="fa fa-envelope"></i></span>
		<span class="contact-span"><a href="mailto:<?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></span>
	</div>
</div>			</div><!-- /.contact-page -->
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
   
  <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once'inc/footer.php' ?>