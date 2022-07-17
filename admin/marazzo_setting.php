
    <?php require_once 'inc/header.php'; ?>



    <?php require_once

    'inc/nav.php';



    $edit_website = marazzo_record();

        while($row=mysqli_fetch_assoc($edit_website))
        {
            $id = $row['id'];
            $site_name = $row['site_name'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];
            $Link = $row['Link'];
            $Deli = $row['Deli'];
            $footer_name = $row['footer_name'];
            $logo_image = $row['logo_img'];
            $title_image = $row['title_img'];
            $ad_image1 = $row['ad_img_1'];
            $ad_image2 = $row['ad_img_2'];
            $ad_image3 = $row['ad_img_3'];

            $ad_title_image_1 = $row['ad_title_img_1'];
            $text_1_1 = $row['text_1_1'];
            $text_2_1 = $row['text_2_1'];
            $text_3_1 = $row['text_3_1'];
            $link_1 = $row['link_1'];
            $ad_title_image_2 = $row['ad_title_img_2'];
            $text_1_2 = $row['text_1_2'];
            $text_2_2 = $row['text_2_2'];
            $text_3_2 = $row['text_3_2'];
            $link_2 = $row['link_2'];

            $category_img = $row['category_img'];
            $c_text_1 = $row['c_text_1'];
            $c_text_2 = $row['c_text_2'];
            $c_text_3 = $row['c_text_3'];

            $subcategory_img = $row['subcategory_img'];
            $s_text_1 = $row['s_text_1'];
            $s_text_2 = $row['s_text_2'];
            $s_text_3 = $row['s_text_3'];

            $search_img = $row['search_img'];
            $se_text_1 = $row['se_text_1'];
            $se_text_2 = $row['se_text_2'];
            $se_text_3 = $row['se_text_3'];

            $brand_img = $row['brand_img'];
            $b_text_1 = $row['b_text_1'];
            $b_text_2 = $row['b_text_2'];
            $b_text_3 = $row['b_text_3'];

                    
            //$img = $row['brand_image'];
            
            
        }

    ?>

        <!-- BEGIN: Main Menu-->
    


        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper">
                
                <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->


                    
                    
    <!-- ---------------------------------------- State Here --------------------------------------------------  -->


                <section class="bs-validation">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        update_logo_img();
                                        display_message(); 
                                        ?>
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                            <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />
    
                                                <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Logo Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $logo_image ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                
                                                    
                                                <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_img_update" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div>
    
                                
                            <!-- /Bootstrap Validation -->

                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_title_img();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Title logo Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $title_image ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_title_update" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 

                            <!-- ----->
                            </div>
                    </section>

    <!-- ------------------------------------------ End ------------------------------------------- -->

    <!--------------------------------------------- Ad image ----------------------------------- -->

    <section class="bs-validation">
                        <div class="row">
    <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_ads_img1();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          

                                                                
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Featured Image 1</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $ad_image1 ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>

                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_ads_update1" class="btn btn-primary">Submit</button>
                                    

                                                </div>
                                            </div>
                                        </form>

                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_ads_img2();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          

                                                                
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Featured Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $ad_image2 ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_ads_update2" class="btn btn-primary">Submit</button>
                                    

                                                </div>
                                            </div>
                                        </form>

                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_ads_img3();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          

                                                                
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Featured Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $ad_image3 ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_ads_update3" class="btn btn-primary">Submit</button>
                                    

                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <!-- /Bootstrap Validation -->
    <!-- ------------------------------------------- End Ads img ----------------------------- -->                       
    
    <!-- -------------------------------------------- Start input text -------------------------- -->
                                
                                    <div class="card-body">
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">
    <?php 

    update_mraazzo_text();
    display_message();
    ?>
    <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />
                            <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Website Name</label>
                                                        <input type="text" name="site_name" class="form-control" placeholder="site name" value="<?php echo $site_name ?>" name="fname-column" />

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Phone number</label>
                                                        <input type="text" name="phone" class="form-control" placeholder="phone number"  value="<?php echo $phone ?>" name="fname-column" />

                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Email</label>
                                                        <input type="email" name="email" class="form-control" placeholder="Email address"  value="<?php echo $email ?>" name="fname-column" />

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Footer name</label>
                                                        <textarea type="text" name="footer_name" class="form-control" placeholder="footer name"   name="fname-column"><?php echo $footer_name ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Address</label>
                                                        <textarea type="text" name="address" class="form-control" placeholder="address"   name="fname-column"><?php echo $address ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Deli</label>
                                                        <textarea type="text" name="deli" class="form-control" placeholder="Deli"   name="fname-column"><?php echo $Deli ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Link</label>
                                                        <input type="text" name="link" class="form-control" placeholder="Link"  value="<?php echo $Link ?>"  name="fname-column">

                                                        
                                                    </div>
                                                </div>

                                                <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_text_update" class="btn btn-primary">Submit</button>
                                    

                                                </div>
                                            </div>
                                                
                                        </form>
                                    </div>
    <!-- --------------------------------------- End input text  ---------------------------- -->                                    


    <section class="bs-validation">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        update_title_img1();
                                        display_message(); 
                                        ?>
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                            <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />
    
                                                <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Title Ads Image 1</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $ad_title_image_1 ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main 1 image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>                                                   
                                                <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_title_update1" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div>
    
                                
                            <!-- /Bootstrap Validation -->

                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_title_img2();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Title Ads image 2</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $ad_title_image_2 ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_title_update2" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 

                            <!-- ----->
                            </div>
                    </section>
    <!-- ------------------------------ End ----------------------------------------------- -->

                


                            <!-- ----->
                            </div>
                    </section>



                    <section class="bs-validation">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        update_title_text_1();
                                        display_message(); 
                                        ?>
                                        <h4 class="mb-1">Title Ads Text 1</h4>
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                            <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />
    
                                            <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="text_1_1" class="form-control" placeholder="Text_1_1"  value="<?php echo $text_1_1 ?>" name="fname-column" />

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <textarea type="text" name="text_2_1" class="form-control" placeholder="Text_2_1"   name="fname-column"><?php echo $text_2_1 ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="text_3_1" class="form-control" placeholder="Text_3_1"   name="fname-column"><?php echo $text_3_1 ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Link 1</label>
                                                        <input type="text" name="link_1" class="form-control" placeholder="link_1"   name="fname-column" value="<?php echo $link_1 ?>" />

                                                        
                                                    </div>
                                                </div>

                                                
                                                    
                                                <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_text_1" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div>
    
                                
                            <!-- /Bootstrap Validation -->

                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_title_text_2();
    display_message(); 
    ?>
    <h4 class="mb-1">Title Ads Text 2</h4>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                                        <div class="col-md-6 col-12">
                                                    <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="text_1_2" class="form-control" placeholder="Text_1_2"  value="<?php echo $text_1_2 ?>" name="fname-column" />

                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <textarea type="text" name="text_2_2" class="form-control" placeholder="text_2_2"   name="fname-column"><?php echo $text_2_2 ?></textarea>

                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="text_3_2" class="form-control" placeholder="text_3_2"  name="fname-column"><?php echo $text_3_2 ?></textarea>

                                                        
                                                    </div>
                                                </div>

                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Link 2</label>
                                                        <input type="text" name="link_2" class="form-control" placeholder="link_2"  name="fname-column" value="<?php echo $link_2 ?>" />

                                                        
                                                    </div>
                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_text_2" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 

                            <!-- ----->
                            </div>
                    </section>




                    <section class="bs-validation">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php
                                        update_category_img();
                                        display_message(); 
                                        ?>
                                
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">
                                            <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />
    
                                                <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Category Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $category_img ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main 1 image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <!-- ------------------------ -->
                                    <div class="row" >
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="c_text_1" class="form-control" placeholder=""  name="fname-column" value="<?php echo $c_text_1 ?>" />
                                                </div>
                                                </div>
                                    <!-- ----------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <input type="text" name="c_text_2" class="form-control" placeholder=""  name="fname-column" value="<?php echo $c_text_2 ?>" />
                                                    </div>
                                                </div>
                                    <!-- -------------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="c_text_3" class="form-control" placeholder=""  name="fname-column"  ><?php echo $c_text_3 ?></textarea>
                                                    </div>
                                                </div>
                                    </div>
                                    <!-- ------------------------- -->            
                                                </div>                                                   
                                                <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_category_img" class="btn btn-primary">Submit</button>
                                                </div>
                                                </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div>
    
                                
                            <!-- /Bootstrap Validation -->

                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_sub_category_img();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Sub_category Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $subcategory_img ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ------------------------ -->
                                    <div class="row" >
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="s_text_1" class="form-control" placeholder=""  name="fname-column" value="<?php echo $s_text_1 ?>" />
                                                </div>
                                                </div>
                                    <!-- ----------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <input type="text" name="s_text_2" class="form-control" placeholder=""  name="fname-column" value="<?php echo $s_text_2 ?>" />
                                                    </div>
                                                </div>
                                    <!-- -------------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="s_text_3" class="form-control" placeholder=""  name="fname-column" ><?php echo $s_text_3 ?></textarea>
                                                    </div>
                                                </div>
                                    </div>
                                    <!-- ------------------------- --> 



                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_subcategory_img" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 



                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_brand_img();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Brand Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $brand_img ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- ------------------------ -->
                                    <div class="row" >
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="b_text_1" class="form-control" placeholder=""  name="fname-column" value="<?php echo $b_text_1 ?>" />
                                                </div>
                                                </div>
                                    <!-- ----------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <input type="text" name="b_text_2" class="form-control" placeholder=""  name="fname-column" value="<?php echo $b_text_2 ?>" />
                                                    </div>
                                                </div>
                                    <!-- -------------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="b_text_3" class="form-control" placeholder=""  name="fname-column" ><?php echo $b_text_3 ?></textarea>
                                                    </div>
                                                </div>
                                    </div>
                                    <!-- ------------------------- --> 


                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_brand_img" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 



                            <div class="col-md-6 col-12">
                                <div class="card">
                                
                                    <div class="card-body">
                                    <?php



    ?>
                                        <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                        <?php


    update_search_img();
    display_message(); 
    ?>
                                                        <input type="hidden" name="id" class="form-control"   value="<?php echo $id ?>" name="fname-column" />          
                                            <div class="col-12 mb-2">
                                                    <div class="border rounded p-2">
                                                        <h4 class="mb-1">Search Image</h4>
                                                        <div class="media flex-column flex-md-row">
                                                            <img src="img/marazzo_website/<?php echo $search_img ?>" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                            <div class="media-body">
                                                                <h5 class="mb-0">Main image:</h5>
                                                                <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                                <p class="my-50">
                                                                    <a href="javascript:void(0);" id="blog-image-text"></a>
                                                                </p>
                                                                <div class="d-inline-block">
                                                                    <div class="form-group mb-0">
                                                                        <div class="custom-file">
                                                                            <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                            <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- ------------------------ -->
                                    <div class="row" >
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 1</label>
                                                        <input type="text" name="se_text_1" class="form-control" placeholder=""  name="fname-column" value="<?php echo $se_text_1 ?>" />
                                                </div>
                                                </div>
                                    <!-- ----------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 2</label>
                                                        <input type="text" name="se_text_2" class="form-control" placeholder=""  name="fname-column" value="<?php echo $se_text_2 ?>" />
                                                    </div>
                                                </div>
                                    <!-- -------------------------- -->            
                                                <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                        <label for="first-name-column">Text 3</label>
                                                        <textarea type="text" name="se_text_3" class="form-control" placeholder=""  name="fname-column" ><?php echo $se_text_3 ?></textarea>
                                                    </div>
                                                </div>
                                    </div>
                                    <!-- ------------------------- --> 


                                                </div>

                                                                                    
                                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" name="btn_search_img" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>

                                        </form>

                                        
                                    </div>
                                    
                                </div>
                            </div> 



                            <!-- ----->
                            </div>
                    </section>




                



    <!-- ----------------------------------------End here -------------------------------------------------------------------- -->

                </div>
            </div>
        </div>
        <!-- END: Content-->


    


    
        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
        </footer>
        <!-- END: Footer-->


        <!-- BEGIN: Vendor JS-->
        <script src="app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
        <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
        <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
        <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="app-assets/js/core/app-menu.js"></script>
        <script src="app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <script src="app-assets/js/scripts/pages/page-blog-edit.js"></script>
        <!-- END: Page JS-->

        <script>
            $(window).on('load', function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14
                    });
                }
            })
        </script>
    </body>
    <!-- END: Body-->

    </html>