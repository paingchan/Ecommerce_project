 
 <?php require_once 'inc/header.php'; ?>



<?php 


require_once 'inc/nav.php';
$social = view_social_media();
$edit_customer =view_main_customer_record();

     while($row=mysqli_fetch_assoc($edit_customer))
     {
         $cus_id = $row['id'];
         $cus_name = $row['name'];
         $cus_phone = $row['phone'];
         $img = $row['image'];
         $cus_address = $row['address'];
         
         $social_media = $row['social_media'];
         $social_link = $row['social_link'];
         
        
        
     }



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
                            <h2 class="content-header-title float-left mb-0">View and Edit Main Customer Menu</h2>
                            
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
 
 
 
 <!--   -------------------------------------- Start Here ----------------------------- --->
 
 <!-- account setting page -->
 <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        
                        <!--/ left menu section -->

                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <!-- general tab -->
                                        <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                            <!-- header media -->
                                            <div class="media">
                                                <a href="javascript:void(0);" class="mr-25">
                                                    <img src="img/maincustomer/<?php echo $img ?>" id="account-upload-img" class="rounded mr-50" alt="profile image" height="80" width="80" />
                                                </a>
                                                <!-- upload and reset button -->
                                               
                                                <!--/ upload and reset button -->
                                            </div>
                                            <!--/ header media -->

                                            <!-- form -->
                                            <form class="validate-form mt-2" method="post" novalidate="novalidate"  enctype="multipart/form-data" >
                                            <?php


update_main_customer_record();
                                            ?>
                                                <div class="row">
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                        <?php



display_message(); 
?>
                                                            <label for="account-username">Username</label>
                                                            <input class="form-control" type="hidden" name="cus_id"  value="<?php echo $cus_id ?>">
                                                            <input type="text" class="form-control"  name="name" placeholder="Username" value="<?php echo $cus_name ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-name">Social link</label>
                                                            <input type="text" class="form-control"  name="social_link" placeholder="Name" value="<?php echo $social_link ?>" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-e-mail">Phone</label>
                                                            <input type="tel" class="form-control"  name="phone" placeholder="Phone" value="<?php echo $cus_phone ?>" />
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-6 mb-1">
                                            <label>Select Social Media</label>
                                            <select class="select2 form-control form-control-lg" name="social_media">
                                                
                                            <?php

while($row =mysqli_fetch_assoc($social))
{

    if($social_media==$row['id'])
    {

    
    ?>
         <option selected value="<?php echo $row['id'] ?>" ><?php echo $row['social_media'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['id'] ?>" ><?php echo $row['social_media'] ?></option>
    <?php
    }
}

?>
                                            </select>
                                        </div>
                                                    <div class="col-12 col-sm-6">
                                                        <div class="form-group">
                                                            <label for="account-company">Full Address</label>
                                                            <textarea type="text" class="form-control"  name="address" placeholder="Company name" ><?php echo $cus_address ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                            <label for="customFile1">Update Your Suppliers Image</label>
                                            <div class="custom-file">
                                                <input type="file"  class="custom-file-input" name="img" required />
                                                <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>
                                        </div>
                                                   
                                                    <div class="col-12">
                                                        <button  name="main_cus_btn_edit" class="btn btn-primary mt-2 mr-1">Save changes</button>
                                                        <a class="btn btn-danger mt-2 mr-1" href="del_main_customer.php?id=<?php echo $cus_id ?>">Delete</a>

                                                        <button  class="btn btn-outline-secondary mt-2"><a href="main_customer_list.php">Back</a></button>
                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                        <!--/ general tab -->

                                        <!-- change password -->
                                       
                                        <!--/ notifications -->
                                  
                           
                        <!--/ right content section -->
                    </div>
                </section>
        
        
        
 <!-----------------------  End Here ------------------------------------ -->       

 </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>