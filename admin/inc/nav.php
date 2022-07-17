
<?php 


if(!isset($_SESSION['ADMIN']))
    {
        header("location:../index.php");

    }


    require_once 'function/functions.php';
    
?>


<body class="vertical-layout vertical-menu-modern dark-layout  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-dark navbar-shadow">
        <div class="navbar-container d-flex content">
            <div class="bookmark-wrapper d-flex align-items-center">
                <ul class="nav navbar-nav d-xl-none">
                    <li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon" data-feather="menu"></i></a></li>
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
                        <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder"><?php echo $_SESSION['admin_name'] ?></span><span class="user-status">Admin</span></div><span class="avatar"><img class="round" src="img/admin/<?php echo $_SESSION['image'] ?>" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user"><a class="dropdown-item" href="admin_profile.php"><i class="mr-50" data-feather="user"></i> Profile</a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="page-account-settings.html"><i class="mr-50" data-feather="settings"></i> Settings</a><a class="dropdown-item" href="logout.php"><i class="mr-50" data-feather="power"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>




<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="#"><span > 
                           <!-- <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="24">c-->
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill:currentColor"></path>
                                            <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">Admin Panel</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="dashboard.php"><i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboards</span><span class="badge badge-light-warning badge-pill ml-auto mr-1">1</span></a>
                    
                </li>
                


                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Apps &amp; Pages</span><i data-feather="more-horizontal"></i>


                </li>
    <!-- -------------- ecommerce -------------------- -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="shopping-cart"></i><span class="menu-title text-truncate" data-i18n="eCommerce">Item manager</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="add_brands.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Add Brands</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="add_categories.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Add Categories</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="add_subcategories.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Add Sub-Categories</span></a>
                        </li>

                        <li><a class="d-flex align-items-center" href="add_products.php"><i data-feather='box'></i></i><span class="menu-item" data-i18n="Details">Add Products</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="products_list.php"><i data-feather='box'></i><span class="menu-item" data-i18n="Wish List">Products List</span></a>
                        </li>
                        
                    </ul>
                </li>


<!-- ------------------------- order ------------------ -->

<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='shopping-bag'></i><span class="menu-title text-truncate" data-i18n="eCommerce">Order Manager</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="order_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Today Order list</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="order_deli_today.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop"> Today Deli Order</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="pending_order.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Pending Order</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="order_deli.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Delivered Order</span></a>
                        </li>
                       
                        
                    </ul>
                </li>




    
<!-- ----------------------------- WareHouses ---------------------------- -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='home'></i><span class="menu-title text-truncate" data-i18n="eCommerce">WareHouse</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="add_warehouse.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="Shop">Add WareHouse</span></a>
                        </li>
                       
                        
                        
                    </ul>

                </li>

                <!-- ------------------------------------ Admin ------------------------------------------- -->


<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="User">Admin</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="add_admin.php"><i data-feather='user-plus'></i><span class="menu-item" data-i18n="List">Add Admin</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="admin_list.php"><i data-feather='user-check'></i><span class="menu-item" data-i18n="View">Admin list</span></a>
                        </li>
                       
                    </ul>
                </li>

                <!-- ------------------ User ------------------------ -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">User</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="today_register.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Today Register</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="user_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">User List</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="today_user_log.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Today log</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="user_log.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">User log</span></a>
                        </li>
                        
                        
                    </ul>
                </li>


               


                <!-- ------------------------ Visitor -------------------- -->
                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Visitors</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="today_visitors.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Today Visitors</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="visitors_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Visitors List</span></a>
                        </li>
                       
                        
                        
                    </ul>
                </li>

<!-- ------------------------------ Supplilers------------------------------------>

                <li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='users'></i><span class="menu-title text-truncate" data-i18n="User">Suppliers</span></a>
                    <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="add_social_media.php"><i data-feather='twitter'></i><span class="menu-item" data-i18n="List">Add Social Media</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="add_suppliers.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Add Suppliers</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="Suppliers_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="View">Suppliers list</span></a>
                        </li>
                        
                    </ul>
                </li>

<!-- -------------------------- Main Customer ----------------------------------------------- -->


<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="User">Main Customer</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="add_main_customer.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Add Main Customer</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="main_customer_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="View">Main Customers ist</span></a>
                        </li>
                        
                    </ul>
                </li>


<!-- -------------------------------- Message -------------------------------------------- --> 

<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='message-square'></i><span class="menu-title text-truncate" data-i18n="User">Content Msg</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="content_list.php"><i data-feather="user"></i><span class="menu-item" data-i18n="List">User Content</span></a>
                        </li>
                        
                        
                    </ul>
                </li>



<!-- ------------------------------- Blog ------------------------------------------------- -->

<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='archive'></i><span class="menu-title text-truncate" data-i18n="circle">Blog</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="add_blog.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Add Blog</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="main_customer_list.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="View">Lists Blog</span></a>
                        </li>
                        
                    </ul>
                </li>




<!-- --------------------------------- Website setting --------------------------------------------- -->

<li class=" nav-item"><a class="d-flex align-items-center" href="#"><i data-feather='settings'></i><span class="menu-title text-truncate" data-i18n="circle">Website setting</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="marazzo_setting.php"><i data-feather="circle"></i><span class="menu-item" data-i18n="List">Marazzo website</span></a>
                        </li>
                        
                    </ul>
                </li>




                
               
               
               
                
                






               
               
        </div>
    </div>
    <!-- END: Main Menu-->
    