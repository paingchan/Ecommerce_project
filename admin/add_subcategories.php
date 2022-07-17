
<?php require_once 'inc/header.php'; ?>




<?php 

require_once 'inc/nav.php'; 
active_status_sub();
$cat=view_category();
$brand=view_brand(); 
//$value=view_sub();



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
    
    $query = "SELECT  sub_category.sub_id, add_brand.brand_name, add_category.cat_name , sub_category.sub_name,  sub_category.status from sub_category INNER JOIN add_brand on sub_category.brand_id = add_brand.brand_id  INNER JOIN add_category on sub_category.cat_id = add_category.cat_id order by sub_id desc limit $start_from,$num_per_page";
    $result = mysqli_query($con,$query);


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
                            <h2 class="content-header-title float-left mb-0">Add/List Sub-Category Menu</h2>
                            
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
                                    <h4 class="card-title">Added Your Sub-Category</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" novalidate="novalidate"  enctype="multipart/form-data" >

                                   
                                

<?php
                                    
                                    save_subcategory();
                                 ?>
                                   <?php

// add_category();
display_message(); 
?>
                                        <div class="row">
                                       
                                        <!-- Basic -->
                                        <div class="col-md-6 mb-1">
                                            <label>Select Brand</label>
                                            <select class="select2 form-control form-control-lg" name="brand_id">
                                                
                                                <?php

                                            while($row =mysqli_fetch_assoc($brand))
                                            {
                                                ?>
                                                     <option value="<?php echo $row['brand_id'] ?>" ><?php echo $row['brand_name'] ?></option>
                                                <?php
                                            }

                                        ?>
                                      
                                      
                                                
                                                
                                            </select>
                                        </div>

                                        <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Enter Your Sub-Category</label>
                                                    <input type="text"  class="form-control" placeholder="Enter Sub-Category" name="sub_name" />
                                                </div>
                                            </div>
                                    
                                        <!-- Basic -->
                                        <div class="col-md-6 mb-1">
                                            <label>Select Category</label>
                                            <select class="select2 form-control form-control-lg" name="cat_id">
                                                
                                                <?php

while($row =mysqli_fetch_assoc($cat))
{
    ?>
         <option value="<?php echo $row['cat_id'] ?>" ><?php echo $row['cat_name'] ?></option>
    <?php
}

?>
                                            </select>
                                        </div>

                                          
                                            
                                            
                                            
                                            <div class="col-12">
                                                <button  name="sub_btn" class="btn btn-primary mr-1">Submit</button>
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

                <div class="row" id="basic-table">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sub-Category List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Brand name</th>
                                            <th>Category name</th>
                                            <th>Sub Category</th>
                                            <th>Actions</th>
                                            <th>Options</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                    
                                    <?php
                                
 
                                while($row = mysqli_fetch_assoc($result))
                            {

                                ?>

<tr>
                            <td><?php echo $row['sub_id']; ?></td>
                           
                            <td><?php echo $row['brand_name']; ?></td>
                            <td><?php echo $row['cat_name']; ?></td>
                            <td><?php echo $row['sub_name']; ?></td>
                           



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
                                                echo " <a href='add_subcategories.php?opr=deactive&id=".$row['sub_id']."'class='btn btn-danger' >Deactive</a>";
                                                }
                                                else
                                                {
                                                echo " <a href='add_subcategories.php?opr=active&id=".$row['sub_id']."'class='btn btn-success' >Active</a>";
                                                }
                                                
                                                ?>
                                                
                                                
                                                <a href="edit_subcategory.php?id=<?php echo $row['sub_id'] ?>" class="btn btn-primary">Edit</a>
                                                <a href="del_subcategory.php?id=<?php echo $row['sub_id'] ?>" class="btn btn-danger">Delete</a>
                                                
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
                
                <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                                    
                                    <?php 
        
                                        $pr_query = "select * from sub_category ";
                                        $pr_result = mysqli_query($con,$pr_query);
                                        $total_record = mysqli_num_rows($pr_result );
                
                                        $total_page = ceil($total_record/$num_per_page);

                                        

                                        if($page>1)
                                        {
                                            echo "<li class='page-item prev-item'><a href='add_subcategories.php?page=".($page-1)."' class='page-link'>Previous</a></li>";
                                        }
                        
                                        
                                        for($i=1;$i<$total_page;$i++)
                                        {
                                            echo "<li class='page-item'><a href='add_subcategories.php?page=".$i."' class='page-link'>$i</a></li>";
                                        }
                        
                                        if($i>$page)
                                        {
                                            echo "<li class='page-item next-item'><a href='add_subcategories.php?page=".($page+1)."' class='page-link'>Next</a></li>";
                                        }

    
                                    
                                     ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>





<!-- ----------------------------------- End ----------------------------- -->
            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>