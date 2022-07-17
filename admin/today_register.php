
<?php require_once 'inc/header.php'; ?>


<?php

require_once 'inc/nav.php';

active_verifity_user();
$value = view_user_today();


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
                                <h4 class="card-title">Today User Register  List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>IP</th>
                                            <th>Status</th>
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
                           
                            <td><?php echo $row['name']; ?></td>

                            <td><?php echo $row['phone']; ?></td>

                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['ip_address']; ?></td>



                            <td>  
                                         <?php

                                                if($row['verifity']==1)
                                                {
                                                    echo "<span class='badge badge-pill badge-light-primary mr-1'>Active</span>";
                                                }
                                                else
                                                {
                                                    echo "<span class='badge badge-pill badge-light-warning mr-1'>Pending</span";
                                                }
                                                
                                                ?>
                                                
                            </td>
                            <td class="text-center">
                                                <?php
                                                if($row['verifity']==1)
                                                {
                                                echo " <a href='user_list.php?opr=deactive&id=".$row['id']."'class='btn btn-danger' >Deactive</a>";
                                                }
                                                else
                                                {
                                                echo " <a href='user_list.php?opr=active&id=".$row['id']."'class='btn btn-success' >Active</a>";
                                                }
                                                
                                                ?>
                                                
                                                
                                                <a href="edit_category.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                                                <a href="del_user.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
                                                
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