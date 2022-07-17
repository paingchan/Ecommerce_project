<?php
//session_start();
require_once'functions/functions.php';

$setting = setting();



if(isset($_Get['action'])){
  if(!empty($_SESSION['cart'])){
  foreach($_POST['quantity'] as $key => $val){
    if($val==0){
      unset($_SESSION['cart'][$key]);
    }else{
      $_SESSION['cart'][$key]['quantity']=$val;
    }
  }
  }
}



?>
<body class="cnt-home">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">

<!-- -------------------------------------------- -->



<!-- ------------------------------------------- -->
          <?php
								
								
								if(isset($_SESSION['login'])) 
								{
									
									?>
            <li class="myaccount"><a href="#"><span><?php echo $_SESSION['name'] ?></span></a></li>

            <?php
            
          }
          else 
								{

									?>

<li class="myaccount"><a href="#"><span>My Account</span></a></li>
<?php
            
                }            
            ?>


            
            <li class="header_cart hidden-xs"><a href="my_cart.php"><span>My Cart</span></a></li>
            <li class="check"><a href="order_history.php"><span>Checkout</span></a></li>


            <?php
								
								
								if(isset($_SESSION['login'])) 
								{
									
									?>
            <li class="login"><a href="logout.php"><span>Logout</span></a></li>
            <?php
            
          }
          else 
								{

									?>


                

<li class="login"><a href="sign_in.php"><span>Login</span></a></li>
<?php
            
          }            
      ?>
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        <div class="cnt-block">
          
          <!-- /.list-unstyled --> 
        </div>
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo">
          
          <?php $setting = setting();
              $row=mysqli_fetch_assoc($setting);
          ?>

             <!-- <a href="index.php"> <img src="admin/img/marazzo_website/logo0.png" alt="logo"> </a> -->
             <a href="index.php"> <img src="admin/img/marazzo_website/<?php echo $row['title_img'] ?>" alt="logo"> </a>
            
            </div> 
          
            
             <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-lg-7 col-md-6 col-sm-8 col-xs-12 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form id="form1"  method="post" action="search_result.php" >
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                      <li class="menu-header">Categories</li>
                      <li role="presentation">
                      <?php $sql=mysqli_query($con,"select *  from add_category");
                                
 
                                while($row = mysqli_fetch_assoc($sql))
                            {

                                ?>  
                        <a role="menuitem" tabindex="-1" href="category.php?id=<?php echo $row['cat_id'] ?>"><?php echo $row['cat_name']; ?></a>
                   <?php } ?>   </li>
                     
                    </ul>
                  </li>
                </ul>
                <input class="search-field" name="tag" placeholder="Search here..." />
                <a class="search-button"  href="javascript:;" onclick="document.getElementById('form1').submit();" ></a> 
              </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
      
      


          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
          <?php
          
if(!empty($_SESSION['cart'])){
	?>  
          <div class="items-cart-inner">
              <div class="basket">
              <div class="basket-item-count"><span class="count"><?php echo $_SESSION['qnty'];?></span></div>
              <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value"><?php echo $_SESSION['tp']; ?></span> </div>
              </div>
            </div>
            </a>
            <ul class="dropdown-menu">

            <?php
    $sql = "SELECT * FROM products WHERE id IN(";
			foreach($_SESSION['cart'] as $id => $value){
			$sql .=$id. ",";
			}
			$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
			$query = mysqli_query($con,$sql);
			$totalprice=0;
			$totalqunty=0;
			if(!empty($query)){
			while($row = mysqli_fetch_array($query)){
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

	?>



              <li>
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="my_cart.php"><img src="admin/img/products/<?php echo $row['img1'] ?>" alt=""></a> </div>
                    </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="my_cart.php"><?php echo $row['name']; ?></a></h3>
                      <div class="price"><?php echo ($row['price']); ?>*<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?></div>
                    </div>
                    
                  </div>
                </div>

                <?php } }?>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'><?php echo $_SESSION['tp']="$totalprice". ".KS"; ?></span> </div>
                  <div class="clearfix"></div>
                  <a href="my_cart.php" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <?php } else { ?>

            <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
        
          <div class="items-cart-inner">
              <div class="basket">
              <div class="basket-item-count"><span class="count">0</span></div>
              <div class="total-price-basket"> <span class="lbl">Shopping Cart</span> <span class="value">0.KS</span> </div>
              </div>
            </div>
            </a>
            <ul class="dropdown-menu">

          



              <li>
                
             
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>0.KS</span> </div>
                  <div class="clearfix"></div>
                  <a href="my_cart.php" class="btn btn-upper btn-primary btn-block m-t-20">My_Cart</a> </div>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
     


            <?php }?>
          <!-- /.dropdown-cart --> 
          



















          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
    <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="active dropdown"> <a href="index.php">Home</a> </li>
                <li class="dropdown hidden-sm"> 
                <?php $sql=mysqli_query($con,"select * from add_category where cat_id='12'");

while($row=mysqli_fetch_array($sql))
{
    ?>    
                <a href="category.php?id=<?php echo $row['cat_id'];?>">Home Accessories</a>
              
            <?php } ?>  </li>
                
                <li class="dropdown hidden-sm">
                <?php $sql=mysqli_query($con,"select * from add_category where cat_id='2'");

while($row=mysqli_fetch_array($sql))
{
    ?>        
                <a href="category.php?id=<?php echo $row['cat_id'];?>">Luggage </a>
            <?php } ?>   </li>
                  
               
                <li class="dropdown hidden-sm">
                <?php $sql=mysqli_query($con,"select * from add_category where cat_id='5'");

while($row=mysqli_fetch_array($sql))
{
    ?>        
                   <a href="category.php?id=<?php echo $row['cat_id'];?>">Kitchen<span class="menu-label new-menu hidden-xs">new</span> </a>
                  
                  <?php } ?></li>
                <li class="dropdown hidden-sm">
                <?php $sql=mysqli_query($con,"select * from add_category where cat_id='9'");

while($row=mysqli_fetch_array($sql))
{
    ?>       
                <a href="category.php?id=<?php echo $row['cat_id'];?>" >For Kid</a>
              
            <?php } ?>  </li>
                <li class="dropdown"> <a href="blog_list.php">Blog</a> </li>
                <li class="dropdown"> <a href="content.php">Content</a> </li>
                <li class="dropdown"> <a href="track_orders.php">Track Order</a> </li>
                
                  
               
              </ul>
              <!-- /.navbar-nav -->
              <div class="clearfix"></div>
            </div>
            <!-- /.nav-outer --> 
          </div>
          <!-- /.navbar-collapse --> 
          
        </div>
        <!-- /.nav-bg-class --> 
      </div>
      <!-- /.navbar-default --> 
    </div>
    <!-- /.container-class --> 
    
  </div>
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>
