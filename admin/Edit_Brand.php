
<?php require_once 'inc/header.php'; ?>

<?php
 
    require_once 'inc/nav.php'; 
    $edit_brand = edit_brand_record();

     while($row=mysqli_fetch_assoc($edit_brand))
     {
         $brand_id = $row['brand_id'];
         $brand_name = $row['brand_name'];
                 
         $img = $row['brand_image'];
        
        
     }

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
                            <h2 class="content-header-title float-left mb-0">Edit Brand Menu</h2>
                            
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

               
  <!-- Bootstrap Validation -->

  <section class="bs-validation">
                    <div class="row">
  <div class="col-md-6 col-12">
                            <div class="card">
                               
                                <div class="card-body">
                                <?php


display_message(); 
?>
                                    <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                    <?php


update_brand_record();
?>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Update Your Brand Name</label>
                                            <input class="form-control" type="hidden" name="brand_id" placeholder="product name" value="<?php echo $brand_id ?>">

                                            <input type="text" id="basic-addon-name" class="form-control" aria-label="Name" aria-describedby="basic-addon-name" name="brand_name" value=" <?php echo $brand_name ?>" required />
                                            
                                           
                                        </div>
                                       
                                        
                                       
                                        
                                        <div class="form-group">
                                            <label for="customFile1">Update Your Brand Image</label>
                                            <div class="custom-file">
                                                <input type="file"  class="custom-file-input" name="img" required />
                                                <label class="custom-file-label" for="customFile1">Choose image</label>
                                            </div>
                                        </div>
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" name="brand_btn_edit" class="btn btn-primary">Submit</button>
                                                <button   class="btn btn-outline-primary"><a href="add_brands.php">Back</a></button>
                                   

                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- /Bootstrap Validation -->

                        <div class="col-md-6 col-12">
                            <div class="card">
                               
                                <div class="card-body">
                                
                                <div class="form-group row">
                                <div class="col-sm-10">
                                <img height="140px" src="img/<?php echo $img ?>" >
                                   
                                </div>
                            </div>

                                </div>
                            </div>
                        </div>


                        <!-- ----->
                        </div>
                </section>




<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>