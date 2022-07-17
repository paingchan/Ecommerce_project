<!DOCTYPE html>
<html lang="en">

<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>ShinShin OnlineStore</title>

<!-- Bootstrap Core CSS -->
<?php require_once  'functions/config.php'; 


if(isset($_GET['action']) && $_GET['action']=="add"){
	$id=intval($_GET['id']);
	if(isset($_SESSION['cart'][$id])){
		$_SESSION['cart'][$id]['quantity']++;
	}else{
		$sql_p="SELECT * FROM products WHERE id={$id}";
		$query_p=mysqli_query($con,$sql_p);
		if(mysqli_num_rows($query_p)!=0){
			$row_p=mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']]=array("quantity" => 1, "price" => $row_p['productPrice']);
			header('location:my_cart.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}





?>

<link href="admin/img/marazzo_website/logo.jpg" rel="shortcut icon"/>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<!-- Customizable CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/blue.css">
<link rel="stylesheet" href="assets/css/owl.carousel.css">
<link rel="stylesheet" href="assets/css/owl.transitions.css">
<link rel="stylesheet" href="assets/css/animate.min.css">
<link rel="stylesheet" href="assets/css/rateit.css">
<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
<link href="assets/css/lightbox.css" rel="stylesheet">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="assets/css/font-awesome.css">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Barlow:200,300,300i,400,400i,500,500i,600,700,800" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->

  
  <!-- ============================================== NAVBAR ============================================== -->
 <?php 
 
 require_once 'inc/nav.php';
 
 $product_id ="";
		if(isset($_GET['id']))
		{
			$product_id = $_GET['id'];
		}

		$products =get_product('',$product_id);
		$result = mysqli_fetch_assoc($products);
 
 ?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li><a href="#">Clothing</a></li>
				<li class='active'>Floral Print Buttoned</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
	<div class='container'>
		<div class='row single-product'>
			<div class='col-xs-12 col-sm-12 col-md-3 sidebar'>
				<div class="sidebar-module-container">
				<div class="home-banner outer-top-n outer-bottom-xs">
<img src="assets/images/banners/LHS-banner.jpg" alt="Image">
</div>		
  
    
    
    	<!-- ============================================== HOT DEALS ============================================== -->

 

				</div>
			</div><!-- /.sidebar -->






			<div class='col-xs-12 col-sm-12 col-md-9 rht-col'>
            <div class="detail-block">
				<div class="row">
                
					     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 gallery-holder">
    <div class="product-item-holder size-big single-product-gallery small-gallery">

        <div id="owl-single-product">
          <!--   <div class="single-product-gallery-item" >
                <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p1.jpg">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="assets/images/products/p1.jpg" />
                </a>
            </div> -- --><!-- /.single-product-gallery-item -->

            <div class="single-product-gallery-item">
                <a data-lightbox="image-1" data-title="Gallery" href="admin/img/products/<?php echo $result['img1'] ?>">
                    <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="admin/img/products/<?php echo $result['img1'] ?>" />
                </a>
            </div><!-- /.single-product-gallery-item -->

        </div><!-- /.single-product-slider -->

    </div><!-- /.single-product-gallery -->
</div><!-- /.gallery-holder -->  

					<div class='col-sm-12 col-md-8 col-lg-8 product-info-block'>
						<div class="product-info">
							<h1 class="name"><?php echo $result['name']; ?></h1>
							
							<div class="rating-reviews m-t-20">
								<div class="row">
                                	
							</div><!-- /.rating-reviews -->

                            <div class="stock-container info-container m-t-10">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="stock-box">
											<span class="label">Code :</span>
										</div>	
									</div>
									<div class="pull-left">
										<div class="stock-box">
											<span class="value"><?php echo $result['code'] ?></span>
										</div>	
									</div>
                                    </div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="stock-container info-container m-t-10">
								<div class="row">
                                <div class="col-lg-12">
									<div class="pull-left">
										<div class="stock-box">
											<span class="label">Availability :</span>
										</div>	
									</div>
									<div class="pull-left">
										<div class="stock-box">
											<span class="value" ><?php echo $result['qty']; ?><span><span class="value" >In Stock</span>
										</div>	
									</div>
                                    </div>
								</div><!-- /.row -->	
							</div><!-- /.stock-container -->

							<div class="description-container m-t-20">
								<p><?php echo $result['description']; ?></p>
							</div><!-- /.description-container -->

							<div class="price-container info-container m-t-30">
								<div class="row">
									

									<div class="col-sm-6 col-xs-6">
										<div class="price-box">
											<span class="price">K.<?php echo $result['price']; ?></span>
											
										</div>
									</div>

									<div class="col-sm-6 col-xs-6">
										<div class="favorite-button m-t-5">
											
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#">
											   <i class="fa fa-signal"></i>
											</a>
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#">
											    <i class="fa fa-envelope"></i>
											</a>
										</div>
									</div>

								</div><!-- /.row -->
							</div><!-- /.price-container -->

							<div class="quantity-container info-container">
								<div class="row">
									
									<div class="qty">
										<span class="label">Qty :</span>
									</div>
									
											
									<div class="qty-count">
										<div class="cart-quantity">
											<div class="quant-input">
								                <div class="arrows">
								                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
								                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
								                </div>


												
												<!--<input type="hidden" value="<?php //echo $result['id'] ?>"  name="id"   ?>" > -->
								                <input type="text" value="1" name="qty"  value="<?php echo $result['qty'] ?>" >
							              </div>
							            </div>
									</div>

									<div class="add-btn">
										<button type="button"   class="btn btn-primary"    >
										<i class="fa fa-shopping-cart inner-right-vs"></i><a href="detail.php?page=product&action=add&id=<?php echo $result['id']; ?>" > ADD TO CART</a></button>
										
									</div>
									
									
								</div><!-- /.row -->
							</div><!-- /.quantity-container -->

							

							

							
						</div><!-- /.product-info -->
					</div><!-- /.col-sm-7 -->
				</div><!-- /.row -->
                </div>
				
				

		
			
			</div><!-- /.col -->
			<div class="clearfix"></div>
		</div><!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
 <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php  require_once'inc/footer.php' ?>