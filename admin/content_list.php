
<?php require_once 'inc/header.php'; ?>


<?php

require_once 'inc/nav.php';
active_status_content();
?>

 

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            
            <div class="content-body">
               <!-- Dashboard Ecommerce Starts -->


                
                
<!-- ---------------------------------------- State Here --------------------------------------------------  -->


<section id="card-demo-example">
                    <div class="row match-height">
                    <?php $sql=mysqli_query($con,"select * from content order by id desc ");
                                
 
                                while($row = mysqli_fetch_assoc($sql))
                            {

                                ?>
                        <div class="col-md-2 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                <h4 class="card-title"><?php echo $row['name']; ?></h4>
                                <p><?php echo $row['date']; ?></p>
                                <h5><?php echo $row['title']; ?></h5>
                                    <p class="card-text">
                                    
                            
                                    <a href="tel:<?php echo $row['phone']; ?>"><?php echo $row['phone']; ?></a>
                                    </p>
                                    <p class="card-text">
                                    <?php echo $row['comment']; ?>
                                                                    </p>
                                    
                                    <?php
                                                        if($row['status']==1)
                                                        {
                                                        echo " <a href='content_list.php?opr=deactive&id=".$row['id']."'class='btn btn-success' >Done</a>";
                                                        }
                                                        else
                                                        {
                                                        echo " <a href='content_list.php?opr=active&id=".$row['id']."'class='btn btn-danger' >Not read</a>";
                                                        }
                                                        
                                                        ?>
                                    
                                    <a href="del_content.php?id=<?php echo $row['id'] ?>" class="btn btn-outline-primary">Delect</a>
                                    
                                </div>
                            </div>
                        </div>
                        <?php

}

?>
                       
                       
                    </div>
                </section>







<!-- ----------------------------------------End here -------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


 


   
    <!-- BEGIN: Footer-->
    <?php require_once 'inc/footer.php'; ?>