
<?php require_once 'inc/header.php'; ?>


<?php 

require_once 'inc/nav.php';
$social = view_social_media();

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
                            <h2 class="content-header-title float-left mb-0">Add Main Customer menu</h2>
                            
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

               

                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Your Main Customer</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" method="post" novalidate="novalidate"  enctype="multipart/form-data"  >
                                    <?php
                                    
                                    save_main_customer();
                                 ?>
                                   
                                        <div class="form-group">
                                        <?php

// add_category();
display_message(); 
?>
                                            <label class="form-label" for="basic-addon-name">Name</label>

                                            <input type="text"  class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name"  required name="name" />
                                            
                                            
                                        </div>
                                        
                                        
                                       
                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="phone-number">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">MM (+95)</span>
                                                </div>
                                                <input type="tel" class="form-control phone-number-mask"  name="phone" placeholder="09 449 456 089"/>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="customFile1">Profile pic</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"  name="img" required />
                                                <label class="custom-file-label" for="customFile1">Choose profile pic</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                       
                                            <div class="col-md-6 mb-1">
                                            <label>Select Social Media</label>
                                            <select class="select2 form-control form-control-lg" name="social">
                                            <?php

while($row =mysqli_fetch_assoc($social))
{
    ?>
         <option value="<?php echo $row['id'] ?>" ><?php echo $row['social_media'] ?></option>
    <?php
}

?>
                                                
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Enter Social Media link</label>
                                                    <input   class="form-control" name="social_link" placeholder="Enter Social Media Link" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="d-block" for="validationBioBootstrap">Address (or) Shop locations</label>
                                            <textarea class="form-control"  name="address" rows="3" required></textarea>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-12">
                                                <button  class="btn btn-primary" name="main_cus_btn" >Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        



<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>