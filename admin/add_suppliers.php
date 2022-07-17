
<?php require_once 'inc/header.php'; ?>

<!-- BEGIN: Body-->
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
                            <h2 class="content-header-title float-left mb-0">Add Your Supplier</h2>
                            
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

               
<section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Supplier Form</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" novalidate="novalidate"  enctype="multipart/form-data" >
                                    <?php
                                    
                                    save_suppliers();
                                 ?>
                                   <?php

// add_category();
display_message(); 
?>
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Supplier Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Name"  />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">City</label>
                                                    <input type="text" name="city" class="form-control" placeholder="City"  />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Enter Social Media link</label>
                                                    <input type="email" id="email-id-column" class="form-control" name="social_link" placeholder="Enter Social Media Link" />
                                                </div>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-sm-12 mb-2">
                                            <label for="phone-number">Phone Number</label>
                                            <div class="input-group input-group-merge">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">MM (+95)</span>
                                                </div>
                                                <input type="tel" class="form-control phone-number-mask" name="phone" placeholder="09 449 456 089"/>
                                            </div>
                                        </div>
                                        
                                           


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
                                                <label for="customFile1">Upload Suppliers image</label>
                                      
                                                    <div  class="custom-file">
                                                        <input type="file" class="custom-file-input" name="img" required />
                                                    <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>

                                            </div>
                                            </div>


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Full address</label>
                                                    <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                                                </div>
                                            </div>
                                            


                                            <div class="col-12">
                                                <button  class="btn btn-primary mr-1" name="sup_btn" >Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>