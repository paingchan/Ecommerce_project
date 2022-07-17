
<?php require_once 'inc/header.php'; ?>

<?php
 
    require_once 'inc/nav.php'; 
    $brand = view_brand();
    $cat = view_category();
    $edit_sub = edit_sub_record();

     while($row=mysqli_fetch_assoc($edit_sub))
     {
         $sub_id = $row['sub_id'];
         $brand_id = $row['brand_id'];
         $cat_id = $row['cat_id'];
         $sub_name = $row['sub_name'];
        
        
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
                            <h2 class="content-header-title float-left mb-0">Edit Sub-Category Menu</h2>
                            
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
                                
                                    <form class="needs-validation"  method="post" novalidate="novalidate"  enctype="multipart/form-data">

                                    <?php


update_sub_record();
display_message(); 
?>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-addon-name">Update Your Sub-Category Name</label>
                                            <input class="form-control" type="hidden" name="sub_id" placeholder="Sub name" value="<?php echo $sub_id ?>">

                                            <input type="text" id="basic-addon-name" class="form-control" aria-label="Name" aria-describedby="basic-addon-name" name="sub_name" value=" <?php echo $sub_name ?>" required />
                                            
                                           
                                        </div>
                                        
                                        <div class="col-md-6 mb-1">
                                            <label>Select Brand</label>
                                            <select class="select2 form-control form-control-lg" name="brand_id">
                                                
                                                
                                                <?php

while($row =mysqli_fetch_assoc($brand))
{

    if($brand_id==$row['brand_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
    <?php
    }
}

?>


                                            </select>
                                        </div>

                                        <div class="col-md-6 mb-1">
                                            <label>Select Category</label>
                                            <select class="select2 form-control form-control-lg" name="cat_id">
                                                
                                                <?php

while($row =mysqli_fetch_assoc($cat))
{

    if($cat_id==$row['cat_id'])
    {

    
    ?>
         <option selected value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
    }
    else
    {
        ?>
        <option  value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
    }
}

?>



                                            </select>
                                        </div>
                                        
                                       
                                        
                                        
                                       
                                       
                                       
                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" name="sub_btn_edit" class="btn btn-primary">Submit</button>
                                                <button   class="btn btn-outline-primary"><a href="add_subcategories.php">Back</a></button>
                                   

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