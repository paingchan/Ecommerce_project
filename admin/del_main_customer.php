<?php

require_once 'inc/header.php';

    if (isset($_GET['id']))
    {
        $del_id = $_GET['id'];
        $query = "delete from main_customer where id='$del_id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header ('location:main_customer_list.php');
        }
    }

 ?>