
<?php 

require_once 'inc/header.php';
$brand=view_brand(); 
$cat=view_category();
$sub=view_sub();
$warehouse=view_warehouse();
$suppliers=view_suppliers();

$edit_customer =view_products_record();

     while($row=mysqli_fetch_assoc($edit_customer))
     {
         $id = $row['id'];
         $name = $row['name'];
         $code = $row['code'];
         $brand1 = $row['brand_id'];
         $category = $row['cat_id'];
         $sub_category = $row['sub_id'];
         $warehouse_id = $row['warehouse_id'];
         $suppliers_id = $row['suppliers_id'];
         $suppliers_price = $row['suppliers_price'];
         $price = $row['price'];
         $qty = $row['qty'];
         $parkin_price = $row['parkin_price'];
         $parkin_qty = $row['parkin_qty'];
         $link = $row['link'];
         $imgae = $row['img1'];
         $description = $row['description'];
         $tag = $row['tag'];

         
         
         
        
        
     }


?>

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
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">John Doe</span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
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
                                    update_products_record();
                                    ?>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            <?php

// add_category();
display_message(); 
?>
                                                <div class="form-group">
                                                    <label for="first-name-column">Product Name</label>
                                                    <input class="form-control" type="hidden" name="product_id"  value="<?php echo $id ?>">
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Product Name" name="product_name" value="<?php echo $name ?>" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="first-name-column">Code</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="code" name="code" value="<?php echo $code ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                            <label>Select Brand</label>
                                            <select class="select2 form-control form-control-lg" name="brand_id">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($brand))
{

    if($brand1==$row['brand_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
    <?php
    }
}

?>
                                                
                                                
                                            </select>
                                        </div>

                                            <div class="col-md-6 mb-1">
                                            <label>Select Category</label>
                                            <select class="select2 form-control form-control-lg" name="cat_id">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($cat))
{

    if($category==$row['cat_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
    }
}

?>
                                                
                                                
                                            </select>
                                        </div>

                                            <div class="col-md-6 mb-1">
                                            <label>Select Sub-Category</label>
                                            <select class="select2 form-control form-control-lg" name="sub_id">
                                                
                                            <?php



while($row =mysqli_fetch_assoc($sub))
{

    if($sub_category==$row['sub_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['sub_id'] ?>" ><?php echo $row['sub_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['sub_id'] ?>" ><?php echo $row['sub_name'] ?></option>
    <?php
    }
}

?>
                                                
                                                
                                            </select>
                                        </div>

                                           <div class="col-md-6 mb-1">
                                            <label>Select Warehouse</label>
                                            <select class="select2 form-control form-control-lg" name="warehouse_id">
                                            <?php

while($row =mysqli_fetch_assoc($warehouse))
{

    if($warehouse_id==$row['warehouse_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['id'] ?>" ><?php echo $row['warehouse'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['id'] ?>" ><?php echo $row['warehouse'] ?></option>
    <?php
    }
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

    if($suppliers_id==$row['sup_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['sup_id'] ?>" ><?php echo $row['sup_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['sup_id'] ?>" ><?php echo $row['sup_name'] ?></option>
    <?php
    }
}

?>      
                                                
                                                
                                            </select>
                                        </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Suppliers Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="suppliers price" name="sup_price" value="<?php echo $suppliers_price ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Normal Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="price" name="price" value="<?php echo $price ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Parkin Price</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="parkin price" name="parkin_price" value="<?php echo $parkin_price ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Qty</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Qty" name="qty" value="<?php echo $qty ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Parkin Qty</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Parkin Qty" name="parkin_qty" value="<?php echo $parkin_qty ?>" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Product Video Link</label>
                                                    <input type="text" id="city-column" class="form-control" placeholder="Youtube Video Link" name="link" value="<?php echo $link ?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="customFile1">Add image For show in website</label>
                                      
                                                    <div  class="custom-file">
                                                        <input type="file" class="custom-file-input" name="img0" required value="<?php echo $imgae ?>" />
                                                    <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>

                                            </div>
                                            </div>

                                           
                               
                                <div class="card-body">
                                
                                
                                <div class="col-sm-10">
                                <img height="140px" src="img/products/<?php echo $imgae ?>" >
                                   
                                
                            </div>
                                </div>

                                           

                                            

                                            
                                            
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Descriptions</label>
                                                    <textarea type="text"  class="form-control" name="description" placeholder="Description"  ><?php echo $description ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Tag</label>
                                                    <textarea type="text"  class="form-control" name="tag" placeholder=""  ><?php echo $tag ?></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button  class="btn btn-primary mr-1" name="pro_btn" >Submit</button>
                                                <button  class="btn btn-outline-secondary"><a href="products_list.php">Cancel</a></button>
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


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>