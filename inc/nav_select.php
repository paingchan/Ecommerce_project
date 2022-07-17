<div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
            <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-shopping-bag" aria-hidden="true"></i>Luggage</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li> <?php $sql=mysqli_query($con,"select * from add_category where cat_id='2'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                          <a href="category.php?id=<?php echo $row['cat_id'];?>" >  <h4>Brand Luggage</h4></a>
                            <?php }?> </li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='2'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>

<!--------- ---------------------- -------------->

             
                        </ul>


                      </div>


                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                        <li> <?php $sql=mysqli_query($con,"select * from add_category where cat_id='13'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                          <a href="category.php?id=<?php echo $row['cat_id'];?>" >  <h4>Luggage Cover </h4></a>
                            <?php }?> </li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='13'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>


                    
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira" aria-hidden="true"></i>Kitchan</a> 
                <!-- ================================== MEGAMENU VERTICAL ================================== -->
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-lg-4">
                        <ul>
                          <li><?php $sql=mysqli_query($con,"select * from add_category where cat_id='5'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                           <a href="category.php?id=<?php echo $row['cat_id'];?>"> <h4>Kitchan</h4></a>
                            <?php }?> </li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='5'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                          
                        </ul>
                      </div>
                      
                      <div class="dropdown-banner-holder"> <a href="#"><img alt="" src="assets/images/banners/banner-side.png" /></a> </div>
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
              
                      <!-- /.col -->
                 
                  <!-- /.yamm-content -->
               
              <!-- /.menu-item -->
              
              
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-diamond"></i>Brands</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>Luggage Brand </h4></li>
                          <li><?php

while($row=mysqli_fetch_array($value))
{
    ?>
                <a href="brand.php?id=<?php echo $row['brand_id'];?>" class="dropdown-toggle">
                <?php echo $row['brand_name'];?></a>
                <?php }?></li>
                          
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>China Brands</li>
                          <li><?php 

while($row=mysqli_fetch_array($value))
{
    ?>
                <a href="brand.php?id=<?php echo $row['brand_id'];?>" class="dropdown-toggle">
                <?php echo $row['brand_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>Other Brands</h4></li>
                          <li><?php

while($row=mysqli_fetch_array($value2))
{
    ?>
                <a href="brand.php?id=<?php echo $row['brand_id'];?>" class="dropdown-toggle">
                <?php echo $row['brand_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-heartbeat"></i>Health and Beauty</a>
              
              <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><?php $sql=mysqli_query($con,"select * from add_category where cat_id='8'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                           <a href="category.php?id=<?php echo $row['cat_id'];?>"><h4>ဆေးဝါးများ</h4></a>
                           <?php }?>
                          </li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='8'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                          
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li>
                          <?php $sql=mysqli_query($con,"select * from add_category where cat_id='14'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                            <a href="category.php?id=<?php echo $row['cat_id'];?>" ><h4>Beauty</h4></a>
                          <?php } ?></li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='8'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col -->
                      
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>

                <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="brand.php?id=9" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-paper-plane"></i>Kids and Babies</a> 
              
              <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><?php $sql=mysqli_query($con,"select * from add_category where cat_id='6'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                           <a href="category.php?id=<?php echo $row['cat_id'];?>" > <h4> အရုပ်များ</h4></a>
                            <?php }?>  </li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='6'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                          
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li>

                          <?php $sql=mysqli_query($con,"select * from add_category where cat_id='9'");

while($row=mysqli_fetch_array($sql))
{
    ?>

                           <a href="category.php?id=<?php echo $row['cat_id'];?>" ><h4>Baby accessories</h4></a>
<?php } ?></li>
                          <li><?php $sql=mysqli_query($con,"select * from sub_category where cat_id='9'");

while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="sub-category.php?id=<?php echo $row['sub_id'];?>" class="dropdown-toggle">
                <?php echo $row['sub_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col -->
                      
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
              
              <!-- /.dropdown-menu --> </li>
              <!-- /.menu-item -->
              
                <!-- ================================== MEGAMENU VERTICAL ================================== --> 
                <!-- /.dropdown-menu --> 
                <!-- ================================== MEGAMENU VERTICAL ================================== --> </li>
              <!-- /.menu-item -->
              
              <li class="dropdown menu-item"> <a href="category.php?id=12" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa fa-envira"></i>Home and Garden</a> 
              
              <ul class="dropdown-menu mega-menu">
                  <li class="yamm-content">
                    <div class="row">
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>Luggage Brand </h4></li>
                          <li><?php

while($row=mysqli_fetch_array($value))
{
    ?>
                <a href="brand.php?id=<?php echo $row['brand_id'];?>" class="dropdown-toggle">
                <?php echo $row['brand_name'];?></a>
                <?php }?></li>
                          
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>Electronics Brands</li>
                          <li><a href="#">Jwellery</a></li>
                          <li><a href="#">Swimwear </a></li>
                          <li><a href="#">Tops</a></li>
                          <li><a href="#">Flats</a></li>
                          <li><a href="#">Shoes</a></li>
                          <li><a href="#">Winter Wear</a></li>
                          <li><a href="#">Night Suits</a></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-12 col-md-3">
                        <ul class="links list-unstyled">
                          <li><h4>Other Brands</h4></li>
                          <li><?php

while($row=mysqli_fetch_array($value2))
{
    ?>
                <a href="brand.php?id=<?php echo $row['brand_id'];?>" class="dropdown-toggle">
                <?php echo $row['brand_name'];?></a>
                <?php }?></li>
                        </ul>
                      </div>
                      <!-- /.col -->
                      
                      <!-- /.col --> 
                    </div>
                    <!-- /.row --> 
                  </li>
                  <!-- /.yamm-content -->
                </ul>
              

              <!-- /.dropdown-menu --> </li>
                
              <!-- /.menu-item -->
              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        
