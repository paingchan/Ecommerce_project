<?php require_once'inc/header.php' ?>
<?php

require_once'inc/nav.php';
$brand = view_brand();

$value=view_brand1();

$value2=view_brand2();
$id=intval($_GET['id']);

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
<!-- ============================================== HEADER : END ============================================== --> 

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
                <h4 class="widget-title">Sub-Category</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li>
                  <?php $sql=mysqli_query($con,"select sub_id,sub_name  from sub_category where cat_id='$id'");
                                
 
                                while($row = mysqli_fetch_assoc($sql))
                            {

                                ?>  
                  <a href="sub-category.php?id=<?php echo $row['sub_id'] ?>"><?php echo $row['sub_name']; ?></a>
                <?php } ?></li>
                  
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
            <div class="image"> <img src="admin/img/marazzo_website/<?php echo $row['category_img'] ?>" alt="" class="img-responsive"> </div>
            <div class="container-fluid">
              <div class="caption vertical-top text-left">
                <div class="big-text"><?php echo $row['c_text_1'] ?></div>
                <div class="excerpt hidden-sm hidden-md"><?php echo $row['c_text_2'] ?></div>
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
                                <button data-toggle="tooltip" class="btn btn-primary icon" type="button" title="Add Cart"> <a href="index.php?page=product&action=add&id=<?php echo $row['id'];?>" ><i class="fa fa-shopping-cart"></i></a> </button>
                                <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                              </li>
                              <li class="lnk"> <a data-toggle="tooltip" class="add-to-cart" href="detail.php?id=<?php echo $row['id'] ?>" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                            </ul>
                            </div>  
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
    <!-- /.row --> 
    <!-- ============================================== BRANDS CAROUSEL ============================================== -->
   
    <!-- /.logo-slider --> 
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
  <!-- /.container --> 
  
</div>
<!-- /.body-content --> 
<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
  <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once'inc/footer.php' ?>