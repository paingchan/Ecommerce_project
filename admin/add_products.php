
<?php 

require_once 'inc/header.php';
$brand=view_brand(); 
$cat=view_category();
$sub=view_sub();
$warehouse=view_warehouse();
$suppliers=view_suppliers();



?>

<script>
	   
       function getSubcat(val) {
           $.ajax({
           type: "POST",
           url: "get_subcat.php",
           data:'cat_id='+val,
           success: function(data){
               $("#subcategory").html(data);
           }
           });
       }

</script>

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
                </ul>
                <ul class="nav navbar-nav bookmark-icons">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon" data-feather="mail"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon" data-feather="message-square"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calendar.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon" data-feather="calendar"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon" data-feather="check-square"></i></a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon text-warning" data-feather="star"></i></a>
                        <div class="bookmark-input search-input">
                            <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                            <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0" data-search="search">
                            <ul class="search-list search-list-bookmark"></ul>
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="nav navbar-nav align-items-center ml-auto">
               
                <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="sun"></i></a></li>
                
               
                </li>
                
                <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="page-profile.html"><i class="mr-50" data-feather="user"></i> Profile</a><a class="dropdown-item" href="app-email.html"><i class="mr-50" data-feather="mail"></i> Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="mr-50" data-feather="check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="mr-50" data-feather="message-square"></i> Chats</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings.html"><i class="mr-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="page-pricing.html"><i class="mr-50" data-feather="credit-card"></i> Pricing</a><a class="dropdown-item" href="page-faq.html"><i class="mr-50" data-feather="help-circle"></i> FAQ</a><a class="dropdown-item" href="page-auth-login-v2.html"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>





    
    <!-- END: Header-->




 



<?php require_once 'inc/nav.php'; ?>

    <!-- BEGIN: Main Menu-->
   











    

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Layout collapsed menu</h2>
                            
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
               <!-- Dashboard Ecommerce Starts -->


                
                
<!-- ---------------------------------------------------- State Here ------------------------------------------------------------------------------ -->
<section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Multiple Column</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" novalidate="novalidate"  enctype="multipart/form-data"  >
<?php
                                    save_product_btn();
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            <?php

// add_category();
display_message(); 
?>
                                                <div class="form-group">
                                                    <label for="first-name-column">Product Name</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Product Name" name="product_name" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="first-name-column">Code</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="code" name="code" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label>Select Brand</label>
                                            <select class="select2 form-control form-control-lg" name="brand_id">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($brand))
{
    ?>
         <option value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
    <?php
}

?>
                                                
                                                
                                            </select>
                                        </div>

                                            <div class="col-md-6 mb-1">
                                            <label>Select Category</label>
                                            <select onChange="getSubcat(this.value);" class="select2 form-control form-control-lg" name="cat_id">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($cat))
{
    ?>
         <option value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
}

?>
                                                
                                                
                                            </select>
                                        </div>
                                        
                                        

                                            <div class="col-md-6 mb-1">
                                            <label>Select Sub-Category</label>
                                            <select class="select2 form-control form-control-lg" name="sub_id" id="subcategory" >
                                                
                                          


                                                
                                                
                                            </select>
                                        </div>

                                           <div class="col-md-6 mb-1">
                                            <label>Select Warehouse</label>
                                            <select class="select2 form-control form-control-lg" name="warehouse_id">
                                            <?php

while($row =mysqli_fetch_assoc($warehouse))
{
    ?>
         <option value="<?php echo $row['id'] ?>" ><?php echo $row['warehouse'] ?></option>
    <?php
}

?>           
                                              
                                                
                                                
                                            </select>
                                        </div>

                                           <div class="col-md-6 mb-1">
                                            <label>Select Suppliers</label>
                                            <select class="select2 form-control form-control-lg" name="suppliers_id">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($suppliers))
{
    ?>
         <option value="<?php echo $row['sup_id'] ?>" ><?php echo $row['sup_name'] ?></option>
    <?php
}

?>      
                                                
                                                
                                            </select>
                                        </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Suppliers Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="suppliers price" name="sup_price" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Normal Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="price" name="price" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Parkin Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="parkin price" name="parkin_price" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Qty</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Qty" name="qty" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Parkin Qty</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Parkin Qty" name="parkin_qty" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Product Video Link</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Youtube Video Link" name="link" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Descriptions</label>
                                                    <textarea type="text"  class="form-control" name="description" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Tag</label>
                                                    <textarea type="text"  class="form-control" name="tag" placeholder=""></textarea>
                                                </div>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Products Image</h4>
                                                    <div class="media flex-column flex-md-row">
                                                        <img src="app-assets/images/slider/03.jpg" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                        <div class="media-body">
                                                            <h5 class="mb-0">Main image:</h5>
                                                            <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                            <p class="my-50">
                                                                <a href="javascript:void(0);" id="blog-image-text"></a>
                                                            </p>
                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img0" />
                                                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            
                                            
                                            
                                            
                                            <div class="col-12">
                                                <button  class="btn btn-primary mr-1" name="save_pro_btn" >Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               







<!-- ----------------------------------------------------- End here --------------------------------------------------------------------- -->  

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://facebook.com/paing3218" target="_blank">Paing Chan</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Made with<i data-feather="heart"></i> Paing Chan</span></p>
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