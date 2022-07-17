<?php require_once'inc/header.php'; ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<?php

require_once 'inc/nav.php';

$product_id ="";
		if(isset($_GET['id']))
		{
			$product_id = $_GET['id'];
		}

		$products =view_product_record('',$product_id);
		$result = mysqli_fetch_assoc($products);

?>

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Product Details</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="app-ecommerce-shop.html">Shop</a>
                                    </li>
                                    <li class="breadcrumb-item active"><?php echo $result['name'] ?>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="app-todo.html"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">




                <!-- app e-commerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card">
                        <!-- Product Details starts -->
                        <div class="card-body">
                            <div class="row my-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="img/products/<?php echo $result['img1'] ?>" class="img-fluid product-img" alt="product image" />
                                    </div>
                                </div>
                                <div class="col-12 col-md-7">
                                    <h4><?php echo $result['name'] ?></h4>
                                    <span class="card-text item-company">By<a href="javascript:void(0)" class="company-name"><?php echo $result['brand_name'] ?></a></span>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Code = </h4>
                                        <h4 class="item-price mr-1"><?php echo $result['code'] ?></h4>
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Suppliers By = </h4>
                                        <h4 class="item-price mr-1"><?php echo $result['sup_name'] ?></h4>
                                        
                                        
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Qty = </h4>
                                        <h4 class="text-success"><?php echo $result['qty'] ?></h4>
                                        
                                        
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Parkin Qty = </h4>
                                        <h4 class="text-success"><?php echo $result['parkin_qty'] ?></h4>
                                        
                                        
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Suppliers price = </h4>
                                        <h4 class="item-price mr-1"><?php echo $result['suppliers_price'] ?>MMK</h4>
                                        
                                        
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Normal price = </h4>
                                        <h4 class="item-price mr-1"><?php echo $result['price'] ?>MMK</h4>
                                        
                                        
                                    </div>
                                    <div class="ecommerce-details-price d-flex flex-wrap mt-1">
                                    <h4>Parkin price = </h4>
                                    
                                        <h4 class="item-price mr-1"><?php echo $result['parkin_price'] ?>MMK</h4>

                                        
                                    </div>
                                          
                                    
                                    
                                    <p class="card-text">
                                    <?php echo $result['description'] ?>
                                    </p>
                                    <p class="card-text">
                                    <?php echo $result['tag'] ?>
                                    </p>
                                    <ul class="product-features list-unstyled">
                                        <li><i data-feather="shopping-cart"></i> <span>Free Shipping</span></li>
                                        <li>
                                            <i data-feather="dollar-sign"></i>
                                            <span>EMI options available</span>
                                        </li>
                                    </ul>
                                    <hr />
                                    
                                    <hr />
                                    <div class="d-flex flex-column flex-sm-row pt-1">
                                    <a href="products_list.php" class="btn btn-outline-secondary btn-gray mr-0 mr-sm-1 mb-1 mb-sm-0">
                                           
                                           <span>Back</span>
                                       </a>
                                       
                                        <a href="edit_products.php?id=<?php echo $result['id'] ?>" class="btn btn-primary btn-edit mr-0 mr-sm-1 mb-1 mb-sm-0">
                                            
                                            <span class="add-to-cart">Edit</span>
                                        </a>
                                        <a href="del_products.php?id=<?php echo $result['id'] ?>" class="btn btn-outline-secondary btn-danger mr-0 mr-sm-1 mb-1 mb-sm-0">
                                           
                                            <span>Delete</span>
                                        </a>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Details ends -->

                        <!-- Item features starts -->
                        <div class="item-features">
                            <div class="row text-center">
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="award"></i>
                                        <h4 class="mt-2 mb-1">100% Original</h4>
                                        <p class="card-text">Chocolate bar candy canes ice cream toffee. Croissant pie cookie halvah.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="clock"></i>
                                        <h4 class="mt-2 mb-1">10 Day Replacement</h4>
                                        <p class="card-text">Marshmallow biscuit donut dragée fruitcake. Jujubes wafer cupcake.</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 mb-md-0">
                                    <div class="w-75 mx-auto">
                                        <i data-feather="shield"></i>
                                        <h4 class="mt-2 mb-1">1 Year Warranty</h4>
                                        <p class="card-text">Cotton candy gingerbread cake I love sugar plum I love sweet croissant.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                       
                        <!-- Item features ends -->

                        <!-- Related Products starts -->
                        
                        <!-- Related Products ends -->
                    </div>
                </section>
                <!-- app e-commerce details end -->
                <div class="col-20">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Video</h4>
                                    <div class="video-player" id="plyr-video-player">
                                        <iframe src="<?php echo $result['link'] ?>" allowfullscreen allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>






                
            </div>
        </div>
    </div>
    <!-- END: Content-->

   <?php require_once 'inc/footer.php'; ?>