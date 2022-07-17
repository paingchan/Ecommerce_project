
<?php 

require_once 'inc/header.php';
active_status_brand();
//$value = view_brand();


if(isset($_GET['page']))
    {
        $page = $_GET['page'];
    }
    else
    {
        $page = 1;
    }

    $num_per_page = 05;
    $start_from = ($page-1)*05;
    
    $query = "select * from add_brand order by brand_id desc limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);


?>

<!-- BEGIN: Body-->






    
    <!-- END: Header-->




 



<?php require_once 'inc/nav.php'; ?>

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
                            <h2 class="content-header-title float-left mb-0">Add/List Brands menu</h2>
                            
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
                                    <h4 class="card-title">Added Your Brand</h4>
                                </div>
                                
                                <div class="card-body">
                                    <form class="form" method="POST" novalidate="novalidate"  enctype="multipart/form-data" >
                                    <?php
                                    
                                    save_brand();
                                 ?>
                                   <?php

// add_category();
display_message(); 
?>
                                        <div class="row">


                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Brand Name</label>
                                                    <input type="text" name="brand_name" class="form-control" placeholder="Brand" name="fname-column" />
                                                </div>
                                            </div>

                                            <div class="col-12 mb-2">
                                                <div class="border rounded p-2">
                                                    <h4 class="mb-1">Brand Image</h4>
                                                    <div class="media flex-column flex-md-row">
                                                        <img src="app-assets/images/slider/03.jpg" id="blog-feature-image" class="rounded mr-2 mb-1 mb-md-0" width="170" height="110" alt="Blog Featured Image" />
                                                        <div class="media-body">
                                                            <h5 class="mb-0">Main image:</h5>
                                                            <small class="text-muted">Required image resolution 800x400, image size 10mb.</small>
                                                            <p class="my-50">
                                                                <a href="javascript:void(0);" id="blog-image-text"></a>
                                                            </p>
                                                            <div class="d-inline-block">
                                                                <div class="form-group mb-0">
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input" id="blogCustomFile" accept="image/*" name="img" />
                                                                        <label class="custom-file-label" for="blogCustomFile">Choose file</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                            <div class="col-12">
                                                <button  class="btn btn-primary mr-1" name="brand_btn">Submit</button>
                                                <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


<!-- -------------------------------------------------------------------------- table ------------------------------- -->

                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Brands List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Brane</th>
                                            
                                            <th>Status</th>
                                            <th>Options</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                
 
                                        while($row = mysqli_fetch_assoc($result))
                                    {

                                        ?>

<tr>
                                    <td><?php echo $row['brand_id']; ?></td>
                                    <td><img height="100px" width="100px" src="img/<?php echo $row['brand_image'] ?>" ></td>
                                    <td><?php echo $row['brand_name']; ?></td>
                                   



                                    <td>  
                                                 <?php

                                                        if($row['status']==1)
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
                                                        if($row['status']==1)
                                                        {
                                                        echo " <a href='add_brands.php?opr=deactive&id=".$row['brand_id']."'class='btn btn-danger' >Deactive</a>";
                                                        }
                                                        else
                                                        {
                                                        echo " <a href='add_brands.php?opr=active&id=".$row['brand_id']."'class='btn btn-success' >Active</a>";
                                                        }
                                                        
                                                        ?>
                                                        
                                                        
                                                        <a href="edit_brand.php?id=<?php echo $row['brand_id'] ?>" class="btn btn-primary">Edit</a>
                                                        <a href="del_brands.php?id=<?php echo $row['brand_id'] ?>" class="btn btn-danger">Delete</a>
                                                        
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

                <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                    
                                    <?php 
        
                                        $pr_query = "select * from add_brand  ";
                                        $pr_result = mysqli_query($con,$pr_query);
                                        $total_record = mysqli_num_rows($pr_result );
                
                                        $total_page = ceil($total_record/$num_per_page);

                                        

                                        if($page>1)
                                        {
                                            echo "<li class='page-item prev-item'><a href='add_brands.php?page=".($page-1)."' class='page-link'>Previous</a></li>";
                                        }
                        
                                        
                                        for($i=1;$i<$total_page;$i++)
                                        {
                                            echo "<li class='page-item'><a href='add_brands.php?page=".$i."' class='page-link'>$i</a></li>";
                                        }
                        
                                        if($i>$page)
                                        {
                                            echo "<li class='page-item next-item'><a href='add_brands.php?page=".($page+1)."' class='page-link'>Next</a></li>";
                                        }

    
                                    
                                     ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>


                <!-- Basic Tables end -->
<!-- ----------------------------------- End ----------------------------- -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <footer class="footer footer-static footer-light">
        <p class="clearfix mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="ml-25" href="https://facebook.com/paing3218" target="_blank">Paing Chan</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-right d-none d-md-block">Made with<i data-feather="heart"></i> Paing Chan</span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/page-blog-edit.js"></script>
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>
<!-- END: Body-->

</html>