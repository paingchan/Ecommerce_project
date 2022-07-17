
<?php require_once 'inc/header.php'; ?>

<?php


require_once 'inc/nav.php';

$value = view_suppliers();

?>

    <!-- BEGIN: Main Menu-->    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Suppliers menu</h2>
                            
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


                
                
<!-- ---------------------------------------- State Here --------------------------------------------------  -->



<?php
                                
 
                                while($row = mysqli_fetch_assoc($value))
                            {

                                ?>


               
<div class="col-xl-9 col-lg-8 col-md-7">
                            <div class="card user-card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                            <div class="user-avatar-section">
                                                <div class="d-flex justify-content-start">
                                                    <img class="img-fluid rounded" src="img/suppliers/<?php echo $row['sup_image'] ?>" height="104" width="104" alt="User avatar" />
                                                    <div class="d-flex flex-column ml-1">
                                                        <div class="user-info mb-1">
                                                            <h4 class="mb-0"><?php echo $row['sup_name']; ?></h4>
                                                            
                                                        </div>
                                                        <div class="d-flex flex-wrap">
                                                            <a href="suppliers_view.php?id=<?php echo $row['sup_id'] ?>" class="btn btn-primary">View</a>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                            <div class="user-info-wrapper">
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="user" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Username:-></span>
                                                    </div>
                                                    <p class="card-text mb-0"><?php echo $row['sup_name']; ?></p>
                                                </div>
                                                
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="star" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Role:--></span>
                                                    </div>
                                                    <p class="card-text mb-0">Supplier</p>
                                                </div>
                                                <div class="d-flex flex-wrap my-50">
                                                    <div class="user-info-title">
                                                        <i data-feather="flag" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">City:--></span>
                                                    </div>
                                                    <p class="card-text mb-0"><?php echo $row['sup_city']; ?></p>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <div class="user-info-title">
                                                        <i data-feather="phone" class="mr-1"></i>
                                                        <span class="card-text user-info-title font-weight-bold mb-0">Contact:--></span>
                                                    </div>
                                                    <p class="card-text mb-0"><a href="tel:<?php echo $row['sup_phone']; ?>" ><?php echo $row['sup_phone']; ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card Ends-->
                        <?php

}

?>



<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>