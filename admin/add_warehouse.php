
<?php require_once 'inc/header.php'; ?>



<?php 

require_once 'inc/nav.php';


$value = view_warehouse();

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
                            <h2 class="content-header-title float-left mb-0">Add/List WareHouse Menu</h2>
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


                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Added Your WareHouse Name</h4>
                                   
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" novalidate="novalidate" >
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                            <?php

add_warehouse();
display_message();
?>
                                                <div class="form-group">
                                                    <label for="first-name-column">Warehouse</label>
                                                    <input type="text" id="first-name-column" class="form-control" placeholder="Enter Wharehouse" name="warehouse" />
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            
                                            <div class="col-12">
                                                <button name="cat_btn" class="btn btn-primary mr-1">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- ---------------------------- table ------------------------------- -->

     <!-- Basic Tables start -->
     <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Warehouse List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>WareHouse</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    <?php
                                
 
                                while($row = mysqli_fetch_assoc($value))
                            {

                                ?>

<tr>
                            <td><?php echo $row['id']; ?></td>
                           
                            <td><?php echo $row['warehouse']; ?></td>
                           



                            <td>  
                                         
                                                
                                                
                                                <a href="edit_warehouse.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                                                <a href="del_warehouse.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                                
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
                <!-- Basic Tables end -->

                
 




<!-- ----------------------------------- End ----------------------------- -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>