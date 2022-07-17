
<?php require_once 'inc/header.php'; ?>


<?php

require_once 'inc/nav.php';

$value = view_main_customer();

?>



    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Your Main Customer</h2>
                            
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



<section id="card-demo-example">
                    <div class="row match-height">
                    <?php
                                
 
                                while($row = mysqli_fetch_assoc($value))
                            {

                                ?>
                        <div class="col-md-2 col-lg-3">
                            <div class="card">
                                <img class="card-img-top" src="img/maincustomer/<?php echo $row['image'] ?>" alt="Card image cap" />
                                <div class="card-body">
                                <a href="view_main_customer.php?id=<?php echo $row['id'] ?>"><h4 class="card-title"><?php echo $row['name']; ?></h4></a>
                                    <p class="card-text">
                                    <a href="tel:<?php echo $row['phone']; ?>" ><?php echo $row['phone']; ?></a>
                                    </p>
                                    <a href="view_main_customer.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary">View</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php

}

?>
                       
                       
                    </div>
                </section>

               

<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>