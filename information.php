<?php require_once'inc/header.php' ?>
<?php 

require_once'inc/nav.php';


if(strlen($_SESSION['login'])==0)
    {   
header('location:sign_in.php');
}
else{


?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">

<?php
    update_user_record();
    display_message(); 
?>
		<form method="post" >

			
		

	</div>
</div><!-- /.shopping-cart-table -->				<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Enter your Informations</span>
					<p>Enter your destination to get shipping and tax.</p>
				</th>
				</tr>
		</thead>
		<tbody>
				<tr>
					<td>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $_SESSION['id'] ?>">
					
						<div class="form-group">
							<label class="info-title control-label">Phone</label>
							<input type="text" class="form-control unicase-form-control text-input" name="phone" value="<?php echo $_SESSION['phone'] ?>" placeholder="" required >
						</div>
						<div class="form-group">
							<label class="info-title control-label">City</label>
							<input type="text" class="form-control unicase-form-control text-input" name="city" value="<?php echo $_SESSION['shopping_state'] ?>" placeholder="" required >
						</div>
						<div class="form-group">
							<label class="info-title control-label">Full address</label>
							<textarea type="text" class="form-control unicase-form-control text-input" name="address" placeholder="" required ><?php echo $_SESSION['shopping_address'] ?></textarea>
						</div>
						<div class="radio radio-checkout-unicase">  
					        <input id="guest" type="radio" name="payment" value="deli" checked>  
					        <label class="radio-button guest-check" for="guest">deli</label> 
							 
					          <br>
							  <input id="guest" type="radio" name="payment" value="degital" checked>  
					        <label class="radio-button guest-check" for="guest">Degital</label>  
					    </div>  
						
					</td>
				</tr>
		</tbody><!-- /thead -->
		
	</table>
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">

<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Discount Code</span>
					<p>Enter your coupon code if you have one..</p>
				</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td>
					<span class="estimate-title">Discount Code</span>
					<p>Enter your coupon code if you have one..</p>
						
					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table>


</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					
					<div class="cart-grand-total">
						<input name="total_price" type="hidden" value="<?php echo $_SESSION['tp']="$totalprice"; ?>" >
						Grand Total<span class="inner-left-md"><?php echo $_SESSION['tp']="$totalprice". ".KS"; ?></span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
					<div class="cart-checkout-btn pull-right">
							<button  name="user_btn_edit" class="btn btn-primary checkout-btn"><a>PROCCED TO CHEKOUT</a></button>
							
						</div>

					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table>
	
</div>			</div>
		</div> 
		</form>

	<!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
<?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<?php require_once'inc/footer.php' ?>
<?php } ?>