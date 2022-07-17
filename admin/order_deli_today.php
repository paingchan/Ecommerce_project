
<?php require_once 'inc/header.php'; ?>


<?php

require_once 'inc/nav.php';


$value = view_order_deli_today();


?>

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


                
                
 <!-- State Here  -->

               
 <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Delivery Order List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            
                                            <th>Code</th>
                                            <th>User</th>
                                            <th>Order Date</th>
                                      <!--      <th>User</th>
                                            
                                            <th>Total price</th>
                                            
                                            <th>Payment</th> -->
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                
 
                                while($row = mysqli_fetch_assoc($value))
                            {

                                ?>

<tr>
                          
                           
                            <td># <a><?php echo $row['code']; ?></a></td>
                            <th><?php echo $row['name'] ?></th>
                            <td><?php echo $row['orderDate']; ?></td>

                          <!--  <td><?php //echo $row['userId']; ?></td>

                            <td><?php //echo $row['Total_price']; ?>.KS</td>
                           
                            <td><?php //echo $row['paymentMethod']; ?></td> -->
                           



                            <td>  
                                         <?php

                                                if($row['orderStatus']==0)
                                                {
                                                    echo "<span class='badge badge-pill badge-light-primary mr-1'>New Order</span>";
                                                }
                                                else
                                                {
                                                    echo "<span class='badge badge-pill badge-light-warning mr-1'>Delivery</span";
                                                }
                                                
                                                ?>
                                                
                            </td>
                            
                            
                            
                                                </tr>
                            <?php

                        }

                        ?>

                                    
                                    
                                       
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



<!-- ------------------ End here ----------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>