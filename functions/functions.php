<?php 

require_once'db.php';

function set_message($msg)
{
    if(!empty($msg))
    {
        $_SESSION['MESSAGE']=$msg;
    }
    else
    {
        $msg = "";
    }
}

    //Display Message
    function display_message()
    {
        if(isset($_SESSION['MESSAGE']))
        {
            echo $_SESSION['MESSAGE'];
            unset($_SESSION['MESSAGE']);
        }
    }

    //error message
    function display_error($error)
    {
        return "<span class='alert alert-danger text-center'>$error</span>";
    }

    //success message
    function display_success($success)
    {
        return "<span class='alert alert-success  text-center'>$success</span>";
    }

    //get safe  value
    function safe_value($con,$value)
    {
        return mysqli_real_escape_string($con,$value);
    }

//------------------------------------ -------------------------------------------------------//

function view_brand1()
 {
     global $con;
     $query = "SELECT  sub_category.sub_id, sub_category.brand_id , add_brand.brand_name,  sub_category.cat_id , sub_category.sub_name,  sub_category.status from sub_category INNER JOIN add_brand on sub_category.brand_id = add_brand.brand_id  Where cat_id='2' ";
     return $result = mysqli_query($con,$query);
 }

 function view_brand2()
 {
     global $con;
     $query = "SELECT sub_category.sub_id, sub_category.brand_id , add_brand.brand_name, sub_category.cat_id , sub_category.sub_name,  sub_category.status from sub_category INNER JOIN add_brand on sub_category.brand_id = add_brand.brand_id  Where cat_id='6' ";
     return $result = mysqli_query($con,$query);
 }

//--------------------------------------------  ------------------------------------//

 function view_products()
 {
     global $con;
     $query = "SELECT * FROM products order by id desc ";
     return $result = mysqli_query($con,$query);
 }


 function future_products()
 {
     global $con;
     $query = "SELECT * FROM products WHERE cat_id='5'   order by id desc ";
     return $result = mysqli_query($con,$query);
 }

//---------------------------------------- view brand -----------------------------//

function view_brand()
{
    global$con;
    $query = "SELECT * FROM add_brand WHERE status=1  ";
    return $result = mysqli_query($con,$query);

}


//--------------------------------------- user register ---------------------------//


function user_register()

{

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_register']))
    { 
    global $con;

    $email = safe_value($con,$_POST['email']);
    $name = safe_value($con,$_POST['name']);
    $phone = safe_value($con,$_POST['phone']);
    $password = safe_value($con,md5($_POST['password']));
    $uip=$_SERVER['REMOTE_ADDR'];
   

        $query = "SELECT * FROM user WHERE email='$email' OR phone='$phone' ";
    $result = mysqli_query($con,$query);
    if( mysqli_num_rows($result)  )
    {
        set_message (display_error("Email or Phone alddy exit"));
    }

         
            else
                {

                    //$hash = password_hash($password, PASSWORD_DEFAULT);

                    $query = "INSERT INTO user (name , email , phone , password , verifity , ip_address ) values('$name' , '$email' , '$phone' , '$password' , '0' ,'$uip' )";
                    $result = mysqli_query($con , $query);
  
                    if($result)
                    {
                        set_message (display_success("Done , Admin Chack you mail"));
                    }  
    }

    }

}

//------------------------------------------------- -------------------------------------------------//



//function user_login()
//{
 //if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login']))
 //{
     //global $con;
 //     $email = safe_value($con,$_POST['email']);
  //    $password = safe_value($con,$_POST['password']);
    
    



  //   if (empty($email) || empty($password))
    // {
     //     set_message (display_error("Please fill in the blanks"));
    // }
    // else
    // {
       //  $user_check="SELECT * FROM user WHERE email='$email'   ";
        // $result=mysqli_query($con,$user_check);
       //  $user = mysqli_fetch_assoc($result);
        


      //   if(password_verify($password, $user['password'])){

         //    $_SESSION['login']=$user['login'];
        // $_SESSION['id']=$user['id'];
        // $_SESSION['name']=$user['name'];
        // $_SESSION['email']=$user['email'];
        // $_SESSION['cart']=$user['cart'];
        



 //
  //       header("location:index.php");
 //}
 //         else
         //{
          //   set_message(display_error("You have enter wrong password or username"));
        // }
    //}
 //}
//}

//------------------ Setting --------------------------------- //

function setting()
{

    global $con;

    $sql = "SELECT * FROM marazzo_website ";
    $res = mysqli_query($con , $sql);
    return  $res;
  

}

//---------------- End setting -----------------------//


function get_brand_product($brand_id='' , $product_id=''   )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1  order by id desc";

    

    

    if($brand_id!='')
    {
        $query = "SELECT * FROM products WHERE brand_id=$brand_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}



function display_brand_link($brand_id="")
{
    global $con;
    $query = "SELECT products.id , products.brand_id , add_brand.brand_name FROM products INNER JOIN add_brand on products.brand_id=add_brand.brand_id WHERE products.brand_id='$brand_id'";
    return $result = mysqli_query($con,$query);
}


function get_cat_product($cat_id='' , $product_id=''   )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1  order by id desc";

    

    

    if($cat_id!='')
    {
        $query = "SELECT * FROM products WHERE cat_id=$cat_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}



function display_cat_link($cat_id="")
{
    global $con;
    $query = "SELECT products.id , products.cat_id , add_category.cat_name FROM products INNER JOIN add_category on products.cat_id=add_category.cat_id WHERE products.cat_id='$cat_id'";
    return $result = mysqli_query($con,$query);
}


function get_sub_product($sub_id='' , $product_id=''   )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1  order by id desc";

    

    

    if($sub_id!='')
    {
        $query = "SELECT * FROM products WHERE sub_id=$sub_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}



function display_sub_link($sub_id="")
{
    global $con;
    $query = "SELECT products.id , products.sub_id , sub_category.sub_name FROM products INNER JOIN sub_category on products.sub_id=sub_category.sub_id WHERE products.sub_id='$sub_id'";
    return $result = mysqli_query($con,$query);
}


//---------------------------------- --------------------------------------------------------------------//

function content()
{

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_content']))
    { 
    global $con;

    
    $name = safe_value($con,$_POST['name']);
    $phone = safe_value($con,$_POST['phone']);
    $title = safe_value($con,$_POST['title']);
    $comment = safe_value($con,$_POST['comment']);

   

    

                    $query = "INSERT INTO content (name ,   phone , title , comment , status ) values('$name' ,  '$phone' , '$title' , '$comment' , '0'  )";
                    $result = mysqli_query($con , $query);
  
                    if($result)
                    {
                        set_message (display_success("Done , Thank For content us"));
                    }  
    

    }

}

//----------------------------------------- -------------------------------------------------------------//

function view_product_records()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $pro_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM products  where id='$pro_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}


function get_product($cat_id='', $product_id=''  )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1 ";

    if($cat_id!='')
    {
        $query = "SELECT * FROM products WHERE category_name=$cat_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}

//-------------------- cart -----------------------------//


function add_cart()
{

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_cart']))
    {
        global $con;
        $id = safe_value($con , $_POST['id']);
        $qty = safe_value($con, $_POST['qty']);

        $_SESSION['CART'][$id]['qty']=$qty;

        



        
    }

}

//--------------- edit user record -------------------//


function update_user_record()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['user_btn_edit']))
    {
       
       $id = safe_value($con,$_POST['id']);
      
      
       $phone = safe_value($con , $_POST['phone']);
       $state = safe_value($con , $_POST['city']);
       $address = safe_value($con , $_POST['address']);

  
     

      if(  empty($phone) || empty($state) || empty($address)  )
     {
       set_message(display_error("Please Fill in the blanks"));
     }
     else
     {
      
       


            
            $query = "UPDATE user set    phone='$phone' ,   shopping_address='$address' , shopping_state='$address'  WHERE  id = '$id' ";
            $result = mysqli_query($con, $query);

            if ($result)
            {
                set_message(display_success("Record has been update  "));
                unset($_SESSION['cart']);
 header('location:order_conf1.php');
                
                
            }
           

            //image size only <5MB
           
       
           

           
       }                

   }

}



?>


