<?php require_once'inc/header.php' ?>
<?php


if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
$IP = $_SERVER["HTTP_CLIENT_IP"];
}
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"]))
{
$IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
}
else
{
  $IP  = $_SERVER["REMOTE_ADDR"];
  $log=mysqli_query($con,"insert into visitors(ip_address) values('$IP')");

}


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
			header('location:index.php');
		}else{
			$message="Product ID is invalid";
		}
	}
}



require_once'inc/nav.php';
$value=view_brand1();
$brand=view_brand();
$value2=view_brand2();
$products=view_products();
$future_products=future_products();

?>

<!-- ============================================== HEADER : END ============================================== -->
<div class="body-content outer-top-vs" id="top-banner-and-menu">
  <div class="container">
    <div class="row"> 
      <!-- ============================================== SIDEBAR ============================================== -->
      <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
        

  <?php require_once'inc/nav_select.php' ?>
        <div class="sidebar-widget product-tag">
          <h3 class="section-title">Product tags</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="tag-list"> 
                <?php $sql=mysqli_query($con,"select * from add_category where cat_id");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?id=<?php echo $row['cat_id'];?>" class="item">
                <?php echo $row['cat_name'];?></a>
                <?php }?></a> 
                
                   </div>
          </div>
        </div>
     
        <div class="sidebar-widget outer-bottom-small">
          <h3 class="section-title">Special Deals</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
              <div class="item">
                <div class="products special-product">
                  <div class="product">
                    <div class="product-micro">
                      <div class="row product-micro-row">
                        <div class="col col-xs-5">
                          <div class="product-image">
                            <div class="image"> <a href="#"> <img src="assets/images/products/p8.jpg"  alt=""> </a> </div>
                            <!-- /.image --> 
                            
                          </div>
                          <!-- /.product-image --> 
                        </div>
                        <!-- /.col -->
                        <div class="col col-xs-7">
                          <div class="product-info">
                            <h3 class="name"><a href="#">Floral Print Shirt</a></h3>
                            <div class="rating rateit-small"></div>
                            <div class="product-price"> <span class="price"> $450.99 </span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                        </div>
                        <!-- /.col --> 
                      </div>
                      <!-- /.product-micro-row --> 
                    </div>
                    <!-- /.product-micro --> 
                    
                  </div>
                  
                  
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== SPECIAL DEALS : END ============================================== --> 
        <!-- ============================================== NEWSLETTER ============================================== -->
        <div class="sidebar-widget newsletter outer-bottom-small">
          <h3 class="section-title">Newsletters</h3>
          <div class="sidebar-widget-body outer-top-xs">
            <p>Sign Up for Our Newsletter!</p>
            <form>
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Subscribe to our newsletter">
              </div>
              <button class="btn btn-primary">Subscribe</button>
            </form>
          </div>
          <!-- /.sidebar-widget-body --> 
        </div>
        <!-- /.sidebar-widget --> 
        <!-- ============================================== NEWSLETTER: END ============================================== --> 
        <?php
								
								
								if(isset($_SESSION['name'])) 
								{
									
									?>
        <div class="sidebar-widget outer-top-vs ">
          <div id="advertisement" class="advertisement">
            <div class="item">
              <div class="avatar"><img src="assets/images/testimonials/member1.png" alt="Image"></div>
              <div class="testimonials"><em>"</em>Welcome <?php echo $_SESSION['name'] ?> <em>"</em></div>
              <div class="clients_author"><?php echo $_SESSION['name'] ?> <span>customer</span> </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            

            <!-- /.item -->
            
            
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>

        <?php
            
          }
          else 
								{
                  ?>

                  
                  <?php
                              
                                  }            
                              ?>
       
        
        
      </div>
      
      <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder"> 
        
        <?php $setting = setting();
$row=mysqli_fetch_assoc($setting);
 ?>

        <div id="hero">
          <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
            <div class="item" style="background-image: url(admin/img/marazzo_website/<?php echo $row['ad_title_img_1'] ?>);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"><?php echo $row['text_1_1'] ?></div>
                  <div class="big-text fadeInDown-1"><?php echo $row['text_2_1'] ?></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span><?php echo $row['text_3_1'] ?></span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="<?php echo $row['link_1'] ?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item -->
            
            <div class="item" style="background-image: url(admin/img/marazzo_website/<?php echo $row['ad_title_img_2'] ?>);">
              <div class="container-fluid">
                <div class="caption bg-color vertical-center text-left">
                  <div class="slider-header fadeInDown-1"><?php echo $row['text_1_2'] ?></div>
                  <div class="big-text fadeInDown-1"><?php echo $row['text_2_2'] ?></div>
                  <div class="excerpt fadeInDown-2 hidden-xs"> <span><?php echo $row['text_3_2'] ?></span> </div>
                  <div class="button-holder fadeInDown-3"> <a href="<?php echo $row['link_2'] ?>" class="btn-lg btn btn-uppercase btn-primary shop-now-button">Shop Now</a> </div>
                </div>
                <!-- /.caption --> 
              </div>
              <!-- /.container-fluid --> 
            </div>
            <!-- /.item --> 
            
          </div>
          <!-- /.owl-carousel --> 
        </div>
        
        <!-- ========================================= SECTION – HERO : END ========================================= --> 
        

        <!-- ============================================== SCROLL TABS ============================================== -->
        <div id="product-tabs-slider" class="scroll-tabs outer-top-vs">
          <div class="more-info-tab clearfix ">
            <h3 class="new-product-title pull-left">Products</h3>
            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
              <li class="active"><a data-transition-type="backSlide" href="#all"  data-toggle="tab">All</a></li>
              <li><a style="color:#fd0505" data-transition-type="backSlide" href="#luggage"  data-toggle="tab">Luggage</a></li>
              <li><a style="color:#fdd922" data-transition-type="backSlide" href="#play"  data-toggle="tab">အရုပ်</a></li>
              <li><a style="color:blue" data-transition-type="backSlide" href="#kids" data-toggle="tab"> ကလေး အသုံးဆောင်</a></li>
            </ul>
            <!-- /.nav-tabs --> 
          </div>
          <div class="tab-content outer-top-xs">


          
             
          <div class="tab-pane in active" id="all">
                                 <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                 
                    

                   

                    <?php
                                
 
                                while($row = mysqli_fetch_assoc($products))
                            {

                                ?>
                                
                                 <div class="item item-carousel">
                                <div class="products">
 <div class="product">

                    <!-- /.product-image -->
                    <div class="product-image">

                        <!-- image -->
                        <div class="image">                       
                          <a href="detail.php?id=<?php echo $row['id'] ?>">
                             <img src="admin/img/products/<?php echo $row['img1'];?>" alt=""> 
                              <img src="admin/img/products/<?php echo $row['img1'];?>" alt="" class="hover-image">
                          </a> 
                        </div>
                          <!-- /.image -->
                          
                          
                    </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];?></a></h3>
                          
                          <span><?php echo $row['code'];?></span>
                          <div class="product-price"> <span class="price">K.<?php echo $row['price'];?></span></div>

                          <!-- /.product-price -->   
                        </div>
                        <!-- /.product-info -->
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
                        <!-- product info -->
                        </div>
                        </div>
                        </div>
                       
                        <?php

}

?>
  </div>
                        </div>
                        </div>
 
                   
 
                    <!-- /.products --> 
                 
                  
               


              <!-- /.product-slider --> 
         
          

            <!-- /.tab-pane -->
            
           

            <div class="tab-pane" id="luggage">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
                <?php  $query =mysqli_query($con , "SELECT * from products WHERE cat_id= '2' order by id desc ");
                                
 
                                while($row = mysqli_fetch_assoc($query))
                            {

                                ?>
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.php?id=<?php echo $row['id'] ?>">
                             <img src="admin/img/products/<?php echo $row['img1'];?>" alt=""> 
                              <img src="admin/img/products/<?php echo $row['img1'];?>" alt="" class="hover-image">
                          </a>
                          
                          </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];?></a></h3>
                          
                          <span><?php echo $row['code'];?></span>
                          <div class="product-price"> <span class="price">K.<?php echo $row['price'];?></span> </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
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
                  <!-- /.item -->
                  
              <?php } ?>    
                  <!-- /.item -->
                  
                  
                  <!-- /.item -->
                  
                  
                  
                  
                  <!-- /.item -->
                  
                  
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
           

            <div class="tab-pane" id="play">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                <?php  $query =mysqli_query($con , "SELECT * FROM products WHERE cat_id = '6'  ");
                                
 
                                while($row = mysqli_fetch_assoc($query))
                            {

                                ?>
                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.php?id=<?php echo $row['id'] ?>">
                             <img src="admin/img/products/<?php echo $row['img1'];?>" alt=""> 
                              <img src="admin/img/products/<?php echo $row['img1'];?>" alt="" class="hover-image">
                          </a>
                          
                          </div>
                          <!-- /.image -->
                          
                          
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];?></a></h3>
                          <span><?php echo $row['code'];?></span>
                          <div class="product-price"> <span class="price">K.<?php echo $row['price'];?></span>  </div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
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
                  <!-- /.item -->
                  
                  
                  <!-- /.item -->
                  
                  <?php } ?>
                  
                  
                  
                  
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane -->
            
            <div class="tab-pane" id="kids">
              <div class="product-slider">
                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">

                <?php  $query =mysqli_query($con , "SELECT * FROM products WHERE cat_id='9' order by id desc ");
                                
 
                                while($row = mysqli_fetch_assoc($query))
                            {

                                ?>

                  <div class="item item-carousel">
                    <div class="products">
                      <div class="product">
                        <div class="product-image">
                          <div class="image"> 
                          <a href="detail.php?id=<?php echo $row['id'] ?>">
                             <img src="admin/img/products/<?php echo $row['img1'];?>" alt=""> 
                              <img src="admin/img/products/<?php echo $row['img1'];?>" alt="" class="hover-image">
                          </a>
                          
                          </div>
                          <!-- /.image -->
                          
                        
                        </div>
                        <!-- /.product-image -->
                        
                        <div class="product-info text-left">
                          <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];?></a></h3>
                          <span><?php echo $row['code'];?></span>
                          <div class="product-price"> <span class="price">K.<?php echo $row['price'];?></span></div>
                          <!-- /.product-price --> 
                          
                        </div>
                        <!-- /.product-info -->
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
                  <!-- /.item -->
                  
                  
                  <?php } ?>
                  
                  
                  
                  
                  
                  
                  
                  <!-- /.item --> 
                </div>
                <!-- /.home-owl-carousel --> 
              </div>
              <!-- /.product-slider --> 
            </div>
            <!-- /.tab-pane --> 
            
          </div>
          <!-- /.tab-content --> 
        </div>

      
       <?php $setting = setting();
            $row=mysqli_fetch_assoc($setting);
        ?>
        <div class="wide-banners outer-bottom-xs">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="admin/img/marazzo_website/<?php echo $row['ad_img_1'] ?>" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="admin/img/marazzo_website/<?php echo $row['ad_img_2'] ?>" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            
            <!-- /.col -->
            <div class="col-md-4 col-sm-4">
              <div class="wide-banner cnt-strip">
                <div class="image"> <img class="img-responsive" src="admin/img/marazzo_website/<?php echo $row['ad_img_3'] ?>" alt=""> </div>
              </div>
              <!-- /.wide-banner --> 
            </div>
            <!-- /.col --> 
          </div>
          <!-- /.row --> 
        </div>

        <section class="section new-arriavls">
          <h3 class="section-title">Featured Products</h3>
          

          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
          <?php  
                                
 
                                while($row = mysqli_fetch_assoc($future_products))
                            {

                                ?>
                                

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">


                    <div class="image"> 
                          <a href="detail.php?id=<?php echo $row['id'] ?>">
                             <img src="admin/img/products/<?php echo $row['img1'];?>" alt=""> 
                              <img src="admin/img/products/<?php echo $row['img1'];?>" alt="" class="hover-image">
                          </a>
                          
                    </div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <h3 class="name"><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];?></a></h3>
                    <span><?php echo $row['code'];?></span>
                    <div class="product-price"> <span class="price">K.<?php echo $row['price'];?></span> </div>
                    
                    <!-- /.product-price --> 
                    
                  </div>
                  <!-- /.product-info -->
                  


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
           
                <?php 
                
                            }

                ?>
              </div>
    
        </section>
        <!-- /.section --> 
        <!-- ============================================== FEATURED PRODUCTS : END ============================================== --> 
        
        <!-- ============================================== BLOG SLIDER ============================================== -->
        

        <section class="section new-arriavls">
          <h3 class="section-title">Brand lists</h3>
          

          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
          <?php  
                                
 
                                while($row = mysqli_fetch_assoc($brand))
                            {

                                ?>
                                

            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">


                    <div class="image"> 
                          <a  href="brand.php?id=<?php echo $row['brand_id'];?>">
                             <img src="admin/img/<?php echo $row['brand_image'];?>" alt=""> 
                              <img width="100px" src="admin/img/<?php echo $row['brand_image'];?>" alt="" class="hover-image">
                          </a>
                          
                    </div>
                    <!-- /.image -->
                    
                    
                  </div>
                  <!-- /.product-image -->
                  
                  <div class="product-info text-left">
                  <h3 class="name"><a href="detail.html"><?php echo $row['brand_name'];?></a></h3>
                    
                    
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                     
                    </div>
                    <!-- /.action --> 
                  </div>
                  <!-- /.cart --> 
                </div>
                <!-- /.product --> 
                </div>
              <!-- /.products --> 
            </div>
           
                <?php 
                
                            }

                ?>
              </div>
    
        </section>


      </div>
   
  
    </div>
 
 
  </div>
  <!-- /.container --> 
</div>
<!-- /#top-banner-and-menu --> 

        <!-- ============================================== INFO BOXES ============================================== -->
<?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<!-- ============================================================= FOOTER ============================================================= -->
<?php require_once'inc/footer.php' ?>