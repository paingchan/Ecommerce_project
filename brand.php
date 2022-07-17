<?php require_once'inc/header.php' ?>
<?php

require_once'inc/nav.php';
$brand = view_brand();

?>
<!-- ============================================== HEADER : END ============================================== --> 

<?php

		$brand_id = '';
		if (isset($_GET['id']))
		{
			$brand_id =mysqli_real_escape_string($con,$_GET['id']);
		}
		
		$particular_product = get_brand_product($brand_id);
		$display_brand_link = display_brand_link($brand_id);
		$result = mysqli_fetch_assoc($display_brand_link);


?>




<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12 col-sm-12 col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->

     <?php require_once'inc/nav_select.php' ?>


        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
           
            <div class="sidebar-widget">
              <div class="widget-header">
                <h4 class="widget-title">Brand lists</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li>
                  <?php $sql=mysqli_query($con,"select * from add_brand");

while($row=mysqli_fetch_array($sql))
{
    ?>
                    <a href="brand.php?id=<?php echo $row['brand_id'];?>"> <?php echo $row['brand_name'];?></a>
                <?php } ?>  </li>
                  
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
           
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
            
           
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>
      <!-- /.sidebar -->
      <div class="col-xs-12 col-sm-12 col-md-9 rht-col"> 
        <!-- ========================================== SECTION – HERO ========================================= -->
        
        <?php $setting = setting();
          $row=mysqli_fetch_assoc($setting);
        ?>

        <div id="category" class="category-carousel hidden-xs">
          <div class="item">
            <div class="image"> <img src="admin/img/marazzo_website/<?php echo $row['brand_img'] ?>" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"><?php echo $row['b_text_1'] ?></div>
                <div class="excerpt hidden-sm hidden-md"><?php echo $row['b_text_1'] ?></div>
                <div class="excerpt-normal hidden-sm hidden-md"><?php echo $row['c_text_3'] ?></div>
                <div class="buy-btn"><a href="#" class="lnk btn btn-primary">Show Now</a></div>
              </div>
              <!-- /.caption --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </div>
        
     
        <div class="clearfix filters-container m-t-10">
          <div class="row">
            <div class="col col-sm-6 col-md-3 col-lg-3 col-xs-6">
              <div class="filter-tabs">
                <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                  <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                  <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-bars"></i>List</a></li>
                </ul>
              </div>
              <!-- /.filter-tabs --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-12 col-md-5 col-lg-5 hidden-sm">
              <div class="col col-sm-6 col-md-6 no-padding">
                
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-6 col-md-6 no-padding hidden-sm hidden-md">
                
                <!-- /.lbl-cnt --> 
              </div>
              <!-- /.col --> 
            </div>
            <!-- /.col -->
            <div class="col col-sm-6 col-md-4 col-xs-6 col-lg-4 text-right">
              
              <!-- /.pagination-container --> </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>

      



        <div class="search-result-container ">

        
          <div id="myTabContent" class="tab-content category-list">
         

            <div class="tab-pane active " id="grid-container">

            
              <div class="category-product">
              
                <div class="row">
                <?php
						
						
						while($row=mysqli_fetch_assoc($particular_product))
						{
							?>

                  <div class="col-sm-6 col-md-4 col-lg-3">

                    <div class="item">

                        <div class="products">

                            <div class="product">

                            <!-- /.product-image -->
                                <div class="product-image">

                                    <div class="image"> 
                                        <a href="detail.php?id=<?php echo $row['id'] ?>">
                                        <img src="admin/img/products/<?php echo $row['img1'] ?>" alt=""> 
                                        <img src="admin/img/products/<?php echo $row['img1'] ?>" alt="" class="hover-image">
                                        </a> 
                                    </div>
                                    <!-- /.image -->
                          
                                    
                                </div>
                        <!-- /.product-image -->
                        <!-- /.product-info -->
                                <div class="product-info text-left">
                                    <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name']; ?></a></h3>
                                    <span><?php echo $row['code'];?></span>
                                    <div class="product-price"> <span class="price">K.<?php echo $row['price']; ?></span>  </div>
                          <!-- /.product-price --> 
                                 </div>
                        <!-- /.product-info -->

                        <!-- /.cart --> 
                                <div class="cart clearfix animate-effect">
                                <div class="action">
                                    <ul class="list-unstyled">
                                    <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                    </ul>
                                </div>
                                <!-- /.action --> 
                                </div>
                        <!-- /.cart --> 
                    </div>
                      <!-- /.product --> 
                      
                </div>
                    <!-- /.products --> 
            </div>
        </div>
                  <!-- /.item -->
                  <?php
						}
						
						
						?>	
                </div>
               
              </div>
             
            </div>
            
          </div>
          	
        </div>
                  

             
               














                
              </div>
              <!-- /.category-product --> 
            </div>
            <!-- /.tab-pane #list-container --> 
          </div>
          <!-- /.tab-content -->

        
        
        <!-- /.search-result-container --> 
        
      </div>
      <!-- /.col --> 
    </div>
  
</div>

        <!-- ============================================== INFO BOXES ============================================== -->
  <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once'inc/footer.php' ?>