<?php require_once'inc/header.php' ?>
<!-- END: Head-->

<!-- BEGIN: Body-->

<?php

require_once'inc/nav.php';
active_status_products();
$subcategory = view_sub();
$brand = view_brand();



$id=intval($_GET['id']);




?>


<?php

		$cat_id = '';
		if (isset($_GET['id']))
		{
			$cat_id =mysqli_real_escape_string($con,$_GET['id']);
		}
		
		$particular_product = get_cat_product($cat_id);
		$display_cat_link = display_cat_link($cat_id);
		$result = mysqli_fetch_assoc($display_cat_link);


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
                            <h2 class="content-header-title float-left mb-0">Shop</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">eCommerce</a>
                                    </li>
                                    <li class="breadcrumb-item active"><?php echo $result['cat_name'] ?>
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



            <div class="content-detached content-right">
                <div class="content-body">
                    <!-- E-commerce Content Section Starts -->







                    
                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i data-feather="menu"></i></span>
                                        </button>
                                        
                                    </div>
                                    <div class="view-options d-flex">
                                        
                                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                            <label class="btn btn-icon btn-outline-primary view-btn grid-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option1" checked />
                                                <i data-feather="grid" class="font-medium-3"></i>
                                            </label>
                                            <label class="btn btn-icon btn-outline-primary view-btn list-view-btn">
                                                <input type="radio" name="radio_options" id="radio_option2" />
                                                <i data-feather="list" class="font-medium-3"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Content Section Starts -->

                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="body-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- E-commerce Search Bar Starts -->
                    <section id="ecommerce-searchbar" class="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <div class="input-group input-group-merge">
                                    <input type="text" class="form-control search-product" id="shop-search" placeholder="Search Product" aria-label="Search..." aria-describedby="shop-search" />
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- E-commerce Search Bar Ends -->

                    <!-- E-commerce Products Starts -->
                    <section id="ecommerce-products" class="grid-view">

                    <?php
						
						if(mysqli_num_rows($particular_product))

						{
						while($row=mysqli_fetch_assoc($particular_product))
						{
							?>





                        <div class="card ecommerce-card">
                            <div class="item-img text-center">
                                <a href="products_details.php?id=<?php echo $row['id'] ?>">
                                    <img class="img-fluid card-img-top" src="img/products/<?php echo $row['img1'] ?>" alt="img-placeholder" /></a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    
                                    <div>
                                        <h6 class="item-price"><?php echo $row['price']; ?>MMK</h6>
                                    </div>
                                </div>
                                <h6 class="item-name">
                                    <a class="text-body" href="products_details.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a>
                                    <span class="card-text item-company">By <a href="javascript:void(0)" class="company-name"><?php echo $row['brand_name']; ?></a></span>
                                </h6>
                                <p class="card-text item-description">
                                <?php echo $row['description']; ?>
                                </p>
                            </div>
                            <div class="item-options text-center">
                                <div class="item-wrapper">
                                    <div class="item-cost">
                                        <h4 class="item-price"><?php echo $row['price']; ?>MMK</h4>
                                    </div>
                                </div>
                                <a href="products_details.php?id=<?php echo $row['id'] ?>"  class="btn btn-light btn-wishlist">
                                    <i data-feather="view"></i>
                                    <span>View</span>
                                </a>
                                <?php
                                                if($row['status']==1)
                                                {
                                                echo " <a href='products_list.php?opr=deactive&id=".$row['id']."'class='btn btn-danger' >Deactive</a>";
                                                }
                                                else
                                                {
                                                echo " <a href='products_list.php?opr=active&id=".$row['id']."'class='btn btn-success' >Active</a>";
                                                }
                                                
                                                ?>
                            </div>
                        </div>


                        <?php
						}
						}
						else
						{
							echo	"Record Not Found";
						}
						?>		



                    
                    </section>
                    <!-- E-commerce Products Ends -->

                    <!-- E-commerce Pagination Starts -->
                    

              
                    
                    <!-- E-commerce Pagination Ends -->

                </div>
            </div>
            <div class="sidebar-detached sidebar-left">
                <div class="sidebar">



                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop">
                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">Filters</h6>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <!-- Price Filter starts -->
                                
                                <!-- Price Filter ends -->

                                <!-- Price Slider starts -->
                               

                               

                               


                                <div id="product-categories">
                                    <h6 class="filter-title">Sub-Categories</h6>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                        <?php $sql=mysqli_query($con,"select sub_id,sub_name  from sub_category where cat_id='$id'");
                                
 
                                while($row = mysqli_fetch_assoc($sql))
                            {

                                ?>

                                            <div >
                                            
                                            <button type="button" class="btn btn-flat-primary"><a href="products_subcategory_list.php?id=<?php echo $row['sub_id'] ?>"><?php echo $row['sub_name']; ?></a></button>
                                            </div>
                                        </li>
                                        
                                        <?php
                            }
                                         ?>
                                        
                                        
                                        
                                    </ul>
                                </div>

                                <div id="product-categories">
                                    <h6 class="filter-title">Brand</h6>
                                    <ul class="list-unstyled categories-list">
                                        <li>
                                        <?php
                                
 
                                while($row = mysqli_fetch_assoc($brand))
                            {

                                ?>

                                            <div >
                                            
                                            <button type="button" class="btn btn-flat-primary"><a href="products_brand_list.php?id=<?php echo $row['brand_id'] ?>"><?php echo $row['brand_name']; ?></a></button>
                                            </div>
                                        </li>
                                        
                                        <?php
                            }
                                         ?>
                                        
                                        
                                        
                                    </ul>
                                </div>


                                







                                <!-- Brands starts -->
                                
                                <!-- Brand ends -->

                                <!-- Rating starts -->

                                
                                <!-- Rating ends -->

                                <!-- Clear Filters Starts -->
                                <div id="clear-filters">
                                    <button type="button" class="btn btn-block btn-dark"><a href="products_list.php">Back</a></button>
                                </div>
                                
                                <!-- Clear Filters Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->
                </div>
                </div>
                </div>
    <!-- END: Content-->

    <?php require_once'inc/footer.php' ?>