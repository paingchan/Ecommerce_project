<?php
//set session message 
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

 //-----------------------------------------Admin Login -----------------------------------------------//   
    function login_system()
    {
     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_login']))
     {
         global $con;
         $email = safe_value($con,$_POST['email']);
         $password = safe_value($con,$_POST['password']);
        
        if (empty($email) || empty($password))
        {
             set_message (display_error("Please fill in the blanks"));
        }
        else
        {
            $user_check="SELECT * FROM admin WHERE admin_email='$email'  ";
			$result=mysqli_query($con,$user_check);
			$user = mysqli_fetch_assoc($result);
			


            if(password_verify($password, $user['password'])  ){

                

                $_SESSION['ADMIN']=$user;
                $_SESSION['id']=$user['id'];
                $_SESSION['admin_name']=$user['admin_name'];
                $_SESSION['phone']=$user['phone'];
                $_SESSION['admin_email']=$user['admin_email'];
                
                $_SESSION['image']=$user['image'];



                header("location: ./dashboard.php");
            }
           

             else
             {
                 set_message(display_error("You have enter wrong password or username"));
             }
        }
     }
    }
 //---------------------------------------------End login ------------------------------------------//

//----------------------------------------------Add Brands -----------------------------------------//

function save_brand()
{
   global $con;

   

   if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['brand_btn']) )
   {
       
      
       $brand_name = safe_value($con , $_POST['brand_name']);
       
       
      $img = $_FILES['img']['name'];
      $type = $_FILES['img']['type'];
      $tmp_name = $_FILES['img']['tmp_name'];
      $size = $_FILES['img']['size'];
      
      

      $img_ext = explode('.' , $img);

      $img_correct_ext = strtolower(end($img_ext));
      $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
      $path  = "img/".$img;

     

     if(empty($brand_name) ||  empty($img) )
     {
       set_message(display_error("Please Fill in the blanks"));
     }
     else
     {
       if(in_array($img_correct_ext,$allow))
       {
           //image size only <5MB
            if($size<500000)
            {   
               
             
              
             
               
               $exit = "select * from add_brand where brand_name='$brand_name'";
               $sql = mysqli_query($con,$exit);

               if(mysqli_fetch_assoc($sql))
               {
                   set_message(display_error("Sorry! Product alread Exit"));
               }
               else
               {
                   $query = "INSERT INTO add_brand (brand_name ,  brand_image  , status ) values ('$brand_name' , '$img'  , '1' )";
                   $result = mysqli_query($con,$query);
                   
                   if($result)
                   {
                       set_message(display_success("Product has been save in the database"));
                       move_uploaded_file($tmp_name,$path);
                   }
               }

              

            }
            else 
            {
               set_message(display_error("You image size too large "));
            }
       }
       else
       {
        set_message(display_error("You can't store this file :("));
       }
     }
       
   }
}

//--------------------------------------- End Add brand ------------------------------------------------//

//---------------------------------------- Active brand ------------------------------------------------//

function active_status_brand()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $brand_id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update add_brand set status='$status' where brand_id='$brand_id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:add_brands.php");
        }
    }
}

 //--------------------------------------- End Active Brand --------------------------------------------------//

 //---------------------------------------- View Brand -------------------------------------------------------//

 function view_brand()
   {
       global $con;
       $sql = "SELECT * FROM add_brand";
       return mysqli_query($con,$sql);
   }



 //---------------------------------------- End View brand ---------------------------------------------------------//

//------------------------------------------ Edit Brand ------------------------------------------------------------//
function edit_brand_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $edit_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM add_brand where brand_id='$edit_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

// Update record

function update_brand_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['brand_btn_edit']))
     {
        
        $brand_id = safe_value($con,$_POST['brand_id']);
        $brand_name = safe_value($con , $_POST['brand_name']);
        
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/".$img;

       if(empty($brand_name)   )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if (empty($img))
        {


             
             $query = "UPDATE add_brand set  brand_name = '$brand_name'    WHERE  brand_id = '$brand_id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                 set_message(display_success("Record has been update "));
                 move_uploaded_file($tmp_name,$path);
             }
            

             //image size only <5MB
            
        
            }

            else 
            {

                if($size<500000)
                {   
                    if(in_array($img_correct_ext,$allow))
                    {
                        
                        $query = "UPDATE add_brand set   brand_name = '$brand_name' , brand_image ='$img'  WHERE  brand_id = '$brand_id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update "));
                            move_uploaded_file($tmp_name,$path);
                        }

                    }
                    else
                    {
                        set_message(display_error("You can't store this file :("));
                    }
                 
    
                }
                else 
                {
                   set_message(display_error("You image size too large "));
                }

               
            }
        }                

    }
}

//-------------------------------------------- End Edit Brand -----------------------------------------//

//-------------------------------------------- Add Category --------------------------------------------//

function add_category()
{
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cat_btn']))
    {
        global $con;
        $category = safe_value($con,$_POST['category']);
        
        if (empty($category))
        {
            
            set_message(display_error("Please enter category name"));
        }
        else
        {
           $sql = "select * from add_category where cat_name='$category'";
           $check =  mysqli_query($con , $sql);

           if (mysqli_fetch_assoc($check))
           {
             set_message(display_error("Category already exists :("));
           }
           else
           {
             $query  ="INSERT INTO add_category(cat_name,status) values('$category','1')";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 set_message(display_success("Category has been save in the database"));
                
             }
           }
        }
    }
}

//---------------------------------------------- End Add Category ----------------------------------------//

//---------------------------------------------- Active Category -----------------------------------------//

function active_status_category()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update add_category set status='$status' where cat_id='$id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:add_categories.php");
        }
    }
}

//----------------------------------------------- End Active Category ------------------------------------//

//------------------------------------------------ Start View Category -------------------------------------//


function view_category()
{
    global $con;
    $sql = "SELECT * FROM add_category order by cat_id desc ";
    return mysqli_query($con,$sql);
}

//------------------------------------------------ End Category ----------------------------------------------//

//------------------------------------------------- Update Category -------------------------------------------//

function update_cat()
{
    global $con;
   if (isset($_POST['cat_btn_up']))
   {
    $category_name = safe_value($con,$_POST['category_up']);
    $id = safe_value($con,$_POST['cat_id']);
    if(!empty($category_name))
    {
        $sql = "update add_category set cat_name='$category_name' where cat_id='$id'";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            header("location:add_categories.php");
        }

    }
   }
}

//---------------------------------------------------End update Category --------------------------------------//


//---------------------------------------------------- Add Sub-Category -----------------------------------------//

function save_subcategory()
 {
    global $con;

    

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub_btn']) )
    {
        
        $brand_id = safe_value($con, $_POST['brand_id']);
        $cat_id = safe_value($con, $_POST['cat_id']);
        $sub_name = safe_value($con , $_POST['sub_name']);
             

      if(empty($sub_name)  )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        
           
            
                
               if ($brand_id == 0 || $cat_id == 0 )
               {
                 set_message(display_error("Please select Brand or  Category"));
               }
               
               else
               {
                
                $exit = "select * from sub_category where sub_name='$sub_name'";
                $sql = mysqli_query($con,$exit);

                if(mysqli_fetch_assoc($sql))
                {
                    set_message(display_error("Sorry! Product alread Exit"));
                }
                else
                {
                    $query = "INSERT INTO sub_category (brand_id, cat_id , sub_name ,  status ) values ('$brand_id' , '$cat_id' , '$sub_name' , '1' )";
                    $result = mysqli_query($con,$query);
                    
                    if($result)
                    {
                        set_message(display_success("Product has been save in the database"));
                        
                    }
                }
 
               }
 
             }
             
        
      
      }
        
    }
 

//--------------------------------------------------- End Add Sub-Category ----------------------------------------//

//--------------------------------------------------- Start View Sub-Category -------------------------------------//

function view_sub()
 {
     global $con;
     $query = "SELECT  sub_category.sub_id, add_brand.brand_name, add_category.cat_name , sub_category.sub_name,  sub_category.status from sub_category INNER JOIN add_brand on sub_category.brand_id = add_brand.brand_id  INNER JOIN add_category on sub_category.cat_id = add_category.cat_id";
     return $result = mysqli_query($con,$query);
 }


//---------------------------------------------------End View Sub-Category ------------------------------------------//

//---------------------------------------------------Start Action Sub-Category --------------------------------------//

function active_status_sub()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update sub_category set status='$status' where sub_id='$id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:add_subcategories.php");
        }
    }
}

//---------------------------------------------------End Action Sub-Category -----------------------------------------//

//---------------------------------------------------- Start Edit Sub-Category ---------------------------------------//

function edit_sub_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $edit_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM sub_category where sub_id='$edit_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

// update record

function update_sub_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub_btn_edit']))
     {
        $brand_id = safe_value($con, $_POST['brand_id']);
        $cat_id = safe_value($con, $_POST['cat_id']);
        $sub_id = safe_value($con,$_POST['sub_id']);
        $sub_name = safe_value($con , $_POST['sub_name']);
        
        
       
       

       
       if(empty($sub_name) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        

            if ($brand_id == 0)
            {
              set_message(display_error("Please select Brand"));
            }
            if ($cat_id == 0)
            {
              set_message(display_error("Please select sub Category"));
            }
            else
            {
             
             $query = "UPDATE sub_category set brand_id ='$brand_id' , cat_id ='$cat_id' , sub_name = '$sub_name'  WHERE  sub_id = '$sub_id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                
                 set_message(display_success("Record has been update --> <a href='add_subcategories.php'>Go Back</a> "));
                
             }
            }

             //image size only <5MB
            
        
            

           
        }                

    }
}


//--------------------------------------------------- End Edit Sub-Category -------------------------------------------//


//--------------------------------------------------- Start Add Warehouse ---------------------------------------------//
function add_warehouse()
{
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cat_btn']))
    {
        global $con;
        $warehouse = safe_value($con,$_POST['warehouse']);
        
        if (empty($warehouse))
        {
            
            set_message(display_error("Please enter  Warehouse"));
        }
        else
        {
           $sql = "select * from warehouse where warehouse='$warehouse'";
           $check =  mysqli_query($con , $sql);

           if (mysqli_fetch_assoc($check))
           {
             set_message(display_error("Warehouse already exists :("));
           }
           else
           {
             $query  ="INSERT INTO warehouse(warehouse) values('$warehouse')";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 set_message(display_success("Warehouse has been save in the database"));
                
             }
           }
        }
    }
}

//--------------------------------------------------- End Add Warehouse ----------------------------------------------// 

//----------------------------------------------------Start View Warehouse ------------------------------------------------//

function view_warehouse()
{
    global $con;
    $sql = "SELECT * FROM warehouse";
    return mysqli_query($con,$sql);
}

//--------------------------------------------------- End View warehouse ---------------------------------------------//

//---------------------------------------------------Stare Edit Warehouse -------------------------------------------------//
function update_warehouse()
{
    global $con;
   if (isset($_POST['warehouse_btn_up']))
   {
    $warehouse = safe_value($con,$_POST['warehouse_up']);
    $id = safe_value($con,$_POST['id']);
    if(!empty($warehouse))
    {
        $sql = "update warehouse set warehouse='$warehouse' where id='$id'";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            header("location:add_warehouse.php");
        }

    }
   }
}

//---------------------------------------------------- End Edit Warehouse ------------------------------------------------//

//----------------------------------------------------Start Add Social Media --------------------------------------------//
function add_social_media()
{
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['social_btn']))
    {
        global $con;
        $social = safe_value($con,$_POST['social_media']);
        
        if (empty($social))
        {
            
            set_message(display_error("Please enter Social Media"));
        }
        else
        {
           $sql = "select * from social where social_media='$social'";
           $check =  mysqli_query($con , $sql);

           if (mysqli_fetch_assoc($check))
           {
             set_message(display_error("Social-Media already exists :("));
           }
           else
           {
             $query  ="INSERT INTO social(social_media) values('$social')";
             $result = mysqli_query($con,$query);
             if($result)
             {
                 set_message(display_success("social media has been save in the database"));
                
             }
           }
        }
    }
}



//--------------------------------------------------- End Add Social Media -----------------------------------------------//

//--------------------------------------------------- View Social Media --------------------------------------------------//

function view_social_media()
{
    global $con;
    $sql = "SELECT * FROM social";
    return mysqli_query($con,$sql);
}




//---------------------------------------------------- End Social Media --------------------------------------------------//

//----------------------------------------------------- Start Add Suppliers ----------------------------------------------//

function save_suppliers()
 {
    global $con;

    

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sup_btn']) )
    {
        
        $name = safe_value($con, $_POST['name']);
        $phone = safe_value($con, $_POST['phone']);
        $address = safe_value($con , $_POST['address']);
        $city = safe_value($con, $_POST['city']);
        $social = safe_value($con, $_POST['social']);
        $socail_link = safe_value($con, $_POST['social_link']);
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/suppliers/".$img;

      

      if(empty($name) || empty($phone)  )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if(in_array($img_correct_ext,$allow))
        {
            //image size only <5MB
             if($size<500000)
             {   
                
               
               
              
                
                $exit = "select * from suppliers where sup_name='$name' AND sup_phone='$phone' ";
                $sql = mysqli_query($con,$exit);

                if(mysqli_fetch_assoc($sql))
                {
                    set_message(display_error("Sorry! name or phone alread Exit"));
                }
                else
                {
                    $query = "INSERT INTO suppliers (sup_name , sup_phone , sup_image , sup_address , sup_city , social_media , social_link ) values ('$name' , '$phone' , '$img' , '$address' , '$city' , '$social' , '$socail_link'  )";
                    $result = mysqli_query($con,$query);
                    
                    if($result)
                    {
                        set_message(display_success("Product has been save in the database"));
                        move_uploaded_file($tmp_name,$path);
                    }
                }
 
               
 
             }
             else 
             {
                set_message(display_error("You image size too large "));
             }
        }
        else
        {
         set_message(display_error("You can't store this file :("));
        }
      }
        
    }
 }

//----------------------------------------------------- End Add Suppliers ------------------------------------------------//


//----------------------------------------------------- Start View Suppliers ---------------------------------------------//

function view_suppliers()
 {
     global $con;
     $query = "SELECT suppliers.sup_id, suppliers.sup_name,  suppliers.sup_phone,  suppliers.sup_image , suppliers.sup_address ,suppliers.sup_city , social.social_media , suppliers.social_link from suppliers INNER JOIN social on suppliers.social_media = social.id  ";
     return $result = mysqli_query($con,$query);
 }


//---------------------------------------------------- End View Suppliers -------------------------------------------------//

//----------------------------------------------------- Start View And Edit Suppliers--------------------------------------//

function view_suppliers_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $edit_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM suppliers where sup_id='$edit_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

// Update record

function update_suppliers_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sup_btn_edit']))
     {
        
        $sup_id = safe_value($con,$_POST['sup_id']);
        $sup_name = safe_value($con , $_POST['name']);
        $sup_phone = safe_value($con , $_POST['phone']);
        $sup_city = safe_value($con , $_POST['City']);
        $sup_address = safe_value($con , $_POST['address']);
        $social_media = safe_value($con , $_POST['social_media']);
        $social_link = safe_value($con , $_POST['social_link']);
        
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/suppliers/".$img;

       if(empty($sup_name) || empty($sup_phone) || empty($sup_city) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if (empty($img))
        {


             
             $query = "UPDATE suppliers set  sup_name = '$sup_name' , sup_phone='$sup_phone' , sup_address='$sup_address' , sup_city='$sup_city' , social_media='$social_media' , social_link='$social_link' WHERE  sup_id = '$sup_id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                 set_message(display_success("Record has been update "));
                 move_uploaded_file($tmp_name,$path);
                 header("location:suppliers_list.php");
             }
            

             //image size only <5MB
            
        
            }

            else 
            {

                if($size<500000)
                {   
                    if(in_array($img_correct_ext,$allow))
                    {
                        
                        $query = "UPDATE suppliers set  sup_name='$sup_name' , sup_phone='$sup_phone' , sup_image='$img'  ,   sup_address='$sup_address' , sup_city='$sup_city' , social_media='$social_media' , social_link='$social_link' WHERE  sup_id = '$sup_id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update "));
                            
                            move_uploaded_file($tmp_name,$path);
                            header("location:suppliers_list.php");
                        }

                    }
                    else
                    {
                        set_message(display_error("You can't store this file :("));
                    }
                 
    
                }
                else 
                {
                   set_message(display_error("You image size too large "));
                }

               
            }
        }                

    }
}

//---------------------------------------------------- End View and Edit Suppliers ----------------------------------------//

//----------------------------------------------------Start  Add Main Customer --------------------------------------------//

function save_main_customer()
 {
    global $con;

    

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['main_cus_btn']) )
    {
        
        $name = safe_value($con, $_POST['name']);
        $phone = safe_value($con, $_POST['phone']);
        
        $address = safe_value($con , $_POST['address']);
        $social = safe_value($con , $_POST['social']);
        $social_link = safe_value($con , $_POST['social_link']);
       
        
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/maincustomer/".$img;

      

      if(empty($name) || empty($phone)  )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if(in_array($img_correct_ext,$allow))
        {
            //image size only <5MB
             if($size<500000)
             {   


                
               
               
              
                
                $exit = "select * from main_customer where name='$name' AND phone='$phone' ";
                $sql = mysqli_query($con,$exit);

                if(mysqli_fetch_assoc($sql))
                {
                    set_message(display_error("Sorry! name or phone alread Exit"));
                }
                else
                {
                    $query = "INSERT INTO main_customer (name , phone , image ,  address , social_media , social_link ) values ('$name' , '$phone' , '$img' ,  '$address' , '$social' , '$social_link'  )";
                    $result = mysqli_query($con,$query);
                    
                    if($result)
                    {
                        set_message(display_success("Product has been save in the database"));
                        move_uploaded_file($tmp_name,$path);
                    }
                }
 
               
 
             }
             else 
             {
                set_message(display_error("You image size too large "));
             }
        }
        else
        {
         set_message(display_error("You can't store this file :("));
        }
      }
        
    }
 }

//----------------------------------------------------- End Add Main Customer ----------------------------------------------//

//----------------------------------------------------- Start View Main Customer -------------------------------------------//

function view_main_customer()
 {
     global $con;
     $query = "SELECT main_customer.id, main_customer.name, main_customer.phone, main_customer.image , main_customer.address , social.social_media , main_customer.social_link from main_customer INNER JOIN social on main_customer.social_media = social.id ";
     return $result = mysqli_query($con,$query);
 }


//---------------------------------------------------- End View Main Customer ----------------------------------------------//

//---------------------------------------------------- Start Edit Main Customer -------------------------------------------//

function view_main_customer_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $edit_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM main_customer where id='$edit_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

// Update record

function update_main_customer_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['main_cus_btn_edit']))
     {
        
        $cus_id = safe_value($con,$_POST['cus_id']);
        $cus_name = safe_value($con , $_POST['name']);
        $cus_phone = safe_value($con , $_POST['phone']);
       
        $cus_address = safe_value($con , $_POST['address']);
        $social_media = safe_value($con , $_POST['social_media']);
        $social_link = safe_value($con , $_POST['social_link']);
        
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/maincustomer/".$img;

       if(empty($cus_name) || empty($cus_phone) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if (empty($img))
        {


             
             $query = "UPDATE main_customer set  name = '$cus_name' , phone='$cus_phone' , address='$cus_address'  , social_media='$social_media' , social_link='$social_link' WHERE  id = '$cus_id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                 set_message(display_success("Record has been update "));
                 move_uploaded_file($tmp_name,$path);
                 header("location:main_customer_list.php");
             }
            

             //image size only <5MB
            
        
            }

            else 
            {

                if($size<500000)
                {   
                    if(in_array($img_correct_ext,$allow))
                    {
                        
                        $query = "UPDATE main_customer set  name='$cus_name' , phone='$cus_phone' , image='$img'  ,   address='$cus_address'  , social_media='$social_media' , social_link='$social_link' WHERE  id = '$cus_id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update "));
                            
                            move_uploaded_file($tmp_name,$path);
                            header("location:main_customer_list.php");
                        }

                    }
                    else
                    {
                        set_message(display_error("You can't store this file :("));
                    }
                 
    
                }
                else 
                {
                   set_message(display_error("You image size too large "));
                }

               
            }
        }                

    }
}

//---------------------------------------------------- End Edit Main Customer ---------------------------------------------//

//---------------------------------------------------- Start Add Products -------------------------------------------------//

function save_product_btn()
 {
    global $con;

    

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save_pro_btn']) )
    {
        
        $product_name = safe_value($con , $_POST['product_name']);
        $code = safe_value($con , $_POST['code']);
        $brand_id = safe_value($con, $_POST['brand_id']);
        $cat_id = safe_value($con, $_POST['cat_id']);
        $sub_id = safe_value($con, $_POST['sub_id']);
        $warehouse_id = safe_value($con, $_POST['warehouse_id']);
        $suppliers_id = safe_value($con, $_POST['suppliers_id']);

        $sup_price = safe_value($con, $_POST['sup_price']);
        $price = safe_value($con, $_POST['price']);
        $parkin_price = safe_value($con, $_POST['parkin_price']);
        $qty = safe_value($con, $_POST['qty']);
        $parkin_qty= safe_value($con, $_POST['parkin_qty']);
        $link= safe_value($con, $_POST['link']);
        $description = safe_value($con, $_POST['description']);
        $tag = safe_value($con, $_POST['tag']);
        
       $img0 = $_FILES['img0']['name'];
      


       $type0 = $_FILES['img0']['type'];
      


       $tmp_name0 = $_FILES['img0']['tmp_name'];
       

       $size0 = $_FILES['img0']['size'];
       

       $img_ext = explode('.' , $img0  );
      

       $img_correct_ext= strtolower(end($img_ext));
      
       
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       

       $path0  = "img/products/".$img0;
       


       

      if(empty($product_name) || empty($code) ||  empty($price) ||  empty($parkin_price) || empty($qty) || empty($parkin_qty) || empty($description) || empty($img0) || empty($tag) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if(in_array($img_correct_ext,  $allow ))
        {
            //image size only <5MB
             if($size0<500000 )
             {   
                
               if ( $brand_id == 0 ||  $cat_id == 0 || $sub_id == 0 || $warehouse_id == 0 || $suppliers_id == 0  )
               {
                 set_message(display_error("Please select  Category"));
               }
               
               else
               {
                
                $exit = "select * from products where name='$product_name'";
                $sql = mysqli_query($con,$exit);

                if(mysqli_fetch_assoc($sql))
                {
                    set_message(display_error("Sorry! Product alread Exit"));
                }
                else
                {
                    $query = "INSERT INTO products (name , code , brand_id ,cat_id, sub_id , warehouse_id , suppliers_id , suppliers_price , parkin_price , price , qty , parkin_qty , link , img1  , description , status , tag ) values ( '$product_name' , '$code' , '$brand_id' , '$cat_id' , '$sub_id' , '$warehouse_id' , '$suppliers_id' , '$sup_price' , '$price' , '$parkin_price' , '$qty' , '$parkin_qty' , '$link' , '$img0' , '$description' , '1' , '$tag' )";
                    $result = mysqli_query($con,$query);
                    
                    if($result)
                    {
                        set_message(display_success("Product has been save in the database"));
                        move_uploaded_file($tmp_name0,$path0);
                        
                    }
                }
 
               }
 
             }
             else 
             {
                set_message(display_error("You image size too large "));
             }
        }
        else
        {
         set_message(display_error("You can't store this file :("));
        }
      }
        
    }
 }
//----------------------------------------------------- End Add Products --------------------------------------------------//

//----------------------------------------------------- Start View Produects ----------------------------------------------//

function view_products()
 {
     global $con;
     $query = "SELECT products.id,  products.name, products.code , add_brand.brand_name , add_category.cat_name , sub_category.sub_name , warehouse.warehouse , suppliers.sup_name , products.suppliers_price , products.parkin_price , products.price , products.qty , products.parkin_qty , products.link , products.img1 , products.description , products.status from products INNER JOIN add_brand on products.brand_id = add_brand.brand_id INNER JOIN add_category on products.cat_id = add_category.cat_id INNER JOIN sub_category on products.sub_id = sub_category.sub_id INNER JOIN warehouse on products.warehouse_id = warehouse.id INNER JOIN suppliers on products.suppliers_id = suppliers.sup_id ";
     return $result = mysqli_query($con,$query);
 }

//---------------------------------------------------- End View Products --------------------------------------------------//


//---------------------------------------------------- Show Brand , Category , Sub-Category , Warehouse , suppliers ------------------//

//---- Display Brand Link --//

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

//--- End  Display Brand Link --// 




//---- Display cat Link --//

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

//-------------- Display Sub Category link -------------//

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

//-------------- End Sub Category link -----------------//

//-------------- Warehouse ----------------------------//

function get_warehouse_product($warehouse_id='' , $product_id=''   )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1  order by id desc";

    

    

    if($warehouse_id!='')
    {
        $query = "SELECT * FROM products WHERE warehouse_id=$warehouse_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}



function display_warehouse_link($warehouse_id="")
{
    global $con;
    $query = "SELECT products.id , products.warehouse_id , warehouse.warehouse FROM products INNER JOIN warehouse on products.warehouse_id=warehouse.id WHERE products.warehouse_id='$warehouse_id'";
    return $result = mysqli_query($con,$query);
}


//------------ End Warehouse ------------------------//

//----------- Display suppliers ---------------------//

function get_suppliers_product($suppliers_id='' , $product_id=''  )
{
    global $con;
    $query = "SELECT * FROM products WHERE status=1  order by id desc";

    

    

    if($suppliers_id!='')
    {
        $query = "SELECT * FROM products WHERE suppliers_id=$suppliers_id";
    }

    

    if($product_id!='')
    {
        $query = "SELECT * FROM products WHERE id=$product_id";
    }

    

    return $result = mysqli_query($con , $query);
}



function display_suppliers_link($suppliers_id="")
{
    global $con;
    $query = "SELECT products.id , products.suppliers_id , suppliers.sup_name FROM products INNER JOIN suppliers on products.suppliers_id=suppliers.sup_id WHERE products.suppliers_id='$suppliers_id'";
    return $result = mysqli_query($con,$query);
}

//------------ End Suppliers ------------------------//


//----------- Get Products ---------------------------//


function view_product_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $pro_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM products INNER JOIN suppliers on products.suppliers_id=suppliers.sup_id INNER JOIN add_brand on products.brand_id=add_brand.brand_id  where id='$pro_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

//---------- End Products ------------------------------//

//----------- Active product and disactive products ----------------------//

function active_status_products()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update products set status='$status' where id='$id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:products_list.php");
        }
    }
}

//----------- End Active products and disactive products -----------------//

//-------------- Edit Products -------------------------------------------//

function view_products_record()
{
    global $con; 
    if(isset($_GET['id']))
    {
        $edit_id = safe_value($con,$_GET['id']);
        $sql = "SELECT * FROM products where id='$edit_id'";
        $res = mysqli_query($con , $sql);
        return  $res;
    }
}

// Update record

function update_products_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['pro_btn']))
     {
        
        $product_id = safe_value($con , $_POST['product_id']);
        $code = safe_value($con , $_POST['code']);
        $product_name = safe_value($con , $_POST['product_name']);
        $brand_id = safe_value($con, $_POST['brand_id']);
        $cat_id = safe_value($con, $_POST['cat_id']);
        $sub_id = safe_value($con, $_POST['sub_id']);
        $warehouse_id = safe_value($con, $_POST['warehouse_id']);
        $suppliers_id = safe_value($con, $_POST['suppliers_id']);
        $sup_price = safe_value($con, $_POST['sup_price']);
        $price = safe_value($con, $_POST['price']);
        $parkin_price = safe_value($con, $_POST['parkin_price']);
        $qty = safe_value($con, $_POST['qty']);
        $parkin_qty= safe_value($con, $_POST['parkin_qty']);
        $link= safe_value($con, $_POST['link']);
        $description = safe_value($con, $_POST['description']);
        $tag = safe_value($con, $_POST['tag']);
        
        
        $img0 = $_FILES['img0']['name'];
      


        $type0 = $_FILES['img0']['type'];
       
 
 
        $tmp_name0 = $_FILES['img0']['tmp_name'];
        
 
        $size0 = $_FILES['img0']['size'];
        
 
        $img_ext = explode('.' , $img0  );
       
 
        $img_correct_ext= strtolower(end($img_ext));
       
        
        $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
        
 
        $path0  = "img/products/".$img0;

       if(empty($product_name) ||  empty($code) || empty($price) ||  empty($parkin_price) || empty($qty) || empty($parkin_qty) || empty($description) || empty($tag)  )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if (empty($img0))
        {


             
             $query = "UPDATE products set  name = '$product_name' , code = '$code' , brand_id='$brand_id' , cat_id='$cat_id' , sub_id='$sub_id' , warehouse_id='$warehouse_id' , suppliers_id='$suppliers_id' , suppliers_price='$sup_price' , parkin_price='$parkin_price' , price='$price' , qty='$qty' , parkin_qty='$parkin_qty' , link='$link' , description='$description' , tag='$tag' WHERE  id = '$product_id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                 set_message(display_success("Record has been update 1 "));
                 move_uploaded_file($tmp_name0,$path0);
                 //header("location:products_list.php");
             }
            

             //image size only <5MB
            
        
            }

            else 
            {

                if($size0<500000)
                {   
                    if(in_array($img_correct_ext,$allow))
                    {
                        
                        $query = "UPDATE products set  name = '$product_name' , code = '$code' , brand_id='$brand_id' , cat_id='$cat_id' , sub_id='$sub_id' , warehouse_id='$warehouse_id' , suppliers_id='$suppliers_id' , suppliers_price='$sup_price' , parkin_price='$parkin_price' , price='$price' , qty='$qty' , parkin_qty='$parkin_qty' , link='$link' , img1='$img0' , description='$description' , tag='$tag' WHERE  id = '$product_id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update 2"));
                            
                            move_uploaded_file($tmp_name0,$path0);
                            //header("location:products_list.php");
                        }

                    }
                    else
                    {
                        set_message(display_error("You can't store this file :("));
                    }
                 
    
                }
                else 
                {
                   set_message(display_error("You image size too large "));
                }

               
            }
        }                

    }
}
//--------------- End Edit Products --------------------------------------//

//---------------------------------- Add Blog --------------------------------------------------//

function save_blog()
 {
    global $con;

    

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['save_blog_btn']) )
    {
        
        
        $product_id = safe_value($con, $_POST['product']);
        $date = safe_value($con , $_POST['date']);
        $slug = safe_value($con , $_POST['slug']);
        $title = safe_value($con, $_POST['title']);
        $status = safe_value($con,$_POST['status']);
        
        
        $content = safe_value($con, $_POST['text_edit']);
        
       $img0 = $_FILES['img0']['name'];
      


       $type0 = $_FILES['img0']['type'];
      


       $tmp_name0 = $_FILES['img0']['tmp_name'];
       

       $size0 = $_FILES['img0']['size'];
       

       $img_ext = explode('.' , $img0  );
      

       $img_correct_ext= strtolower(end($img_ext));
      
       
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       

       $path0  = "img/Blog/".$img0;
       


      if(empty($title) ||  empty($date) ||  empty($slug) || empty($product_id) || empty($content) || empty($img0) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if(in_array($img_correct_ext,  $allow ))
        {
            //image size only <5MB
             if($size0<500000 )
             {   
                
               
                               
                $exit = "select * from blog where title='$title'";
                $sql = mysqli_query($con,$exit);

                if(mysqli_fetch_assoc($sql))
                {
                    set_message(display_error("Sorry! Title alread Exit"));
                }
                else
                {
                    $query = "INSERT INTO blog ( Date , name , title , slug , content ,  status , category ) values ( '$date' , 'Admin' , '$title' , '$slug' , '$content' , '$status' , '$product_id' )";
                    $result = mysqli_query($con,$query);
                    
                    if($result)
                    {
                        set_message(display_success("Blog has been save in the database"));
                        move_uploaded_file($tmp_name0,$path0);
                        
                    }
                }
 
               
 
             }
             else 
             {
                set_message(display_error("You image size too large "));
             }
        }
        else
        {
         set_message(display_error("You can't store this file :("));
        }
      }
        
    }
 }


//--------------------------------- End Add Blog ---------------------------------------------------//


//--------------------------------- user list ------------------------------------------------------//



function view_user()
{
    global $con;
    $sql = "SELECT * FROM user  order by id desc " ;
    return mysqli_query($con,$sql);
}


//-------------------------------- End user list --------------------------------------------------//

//--------------------------------- user verifity ----------------------------------------------//

function active_verifity_user()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update user set verifity='$status' where id='$id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:user_list.php");
        }
    }
}

//----------------------------------- end -----------------------------------------//

//----------------------------------- Add Admin ------------------------------------//


function admin_register()

{

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_register']))
    { 
    global $con;

    $email = safe_value($con,$_POST['email']);
    $name = safe_value($con,$_POST['name']);
    $phone = safe_value($con,$_POST['phone']);
    $password = safe_value($con,$_POST['password']);
   
    $img = $_FILES['img']['name'];
      


    $type = $_FILES['img']['type'];
   


    $tmp_name = $_FILES['img']['tmp_name'];
    

    $size = $_FILES['img']['size'];
    

    $img_ext = explode('.' , $img  );
   

    $img_correct_ext= strtolower(end($img_ext));
   
    
    $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
    

    $path  = "img/admin/".$img;


    if(empty($name) ||  empty($email) ||  empty($phone) || empty($password) ||  empty($img) )
    {
      set_message(display_error("Please Fill in the blanks"));
    }
    else
    {
      if(in_array($img_correct_ext,  $allow ))
      {
          //image size only <5MB
           if($size<500000 )
           {   
              
             
                             
              $exit = "select * from admin where phone='$phone' AND admin_email='$email'  ";
              $sql = mysqli_query($con,$exit);

              if(mysqli_fetch_assoc($sql))
              {
                  set_message(display_error("Sorry! email or phone alread Exit"));
              }
              else
              {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                  $query = "INSERT INTO admin ( admin_name , phone , image , admin_email , password  ) values ( '$name' , '$phone' , '$img' , '$email' , '$hash'  )";
                  $result = mysqli_query($con,$query);
                  
                  if($result)
                  {
                      set_message(display_success("Admin has been save in the database"));
                      move_uploaded_file($tmp_name,$path);
                      
                  }
              }

             

           }
           else 
           {
              set_message(display_error("You image size too large "));
           }
      }
      else
      {
       set_message(display_error("You can't store this file :("));
      }
    }
    
    }

}

//---------------------------------- End Add Admin ---------------------------------//

//---------------------------------- Edit Admin -------------------------------------//


function update_admin_record()
{
     global $con;

     if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['admin_btn_edit']))
     {
        
        $id = safe_value($con,$_POST['id']);
        $name = safe_value($con , $_POST['name']);
        $email = safe_value($con , $_POST['email']);
        $phone = safe_value($con , $_POST['phone']);


        
        
        
       $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/admin/".$img;

       if(empty($name) || empty($phone) || empty($email) )
      {
        set_message(display_error("Please Fill in the blanks"));
      }
      else
      {
        if (empty($img))
        {


             
             $query = "UPDATE admin set  admin_name = '$name' , phone='$phone' ,   admin_email='$email' WHERE  id = '$id' ";
             $result = mysqli_query($con, $query);

             if ($result)
             {
                 set_message(display_success("Record has been update Please Login again "));
                
                 move_uploaded_file($tmp_name,$path);
                 //header("location:admin_profile.php");
             }
            

             //image size only <5MB
            
        
            }

            else 
            {

                if($size<500000)
                {   
                    if(in_array($img_correct_ext,$allow))
                    {
                        
                        $query = "UPDATE admin set  admin_name='$name' , phone='$phone' , image='$img'  ,   admin_email='$email'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update Please Login again "));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }

                    }
                    else
                    {
                        set_message(display_error("You can't store this file :("));
                    }
                 
    
                }
                else 
                {
                   set_message(display_error("You image size too large "));
                }

               
            }
        }                

    }
}



//----------Admin Change password -------------------------// 



function change_password()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_pwd_update']))
    {

        $id = safe_value($con , $_POST['id']);
        $old_password = safe_value($con , $_POST['old_password']);
        $new_password = safe_value($con , $_POST['new_password']);
        $confirm_new_password = safe_value($con , $_POST['confirm_new_password']);

        if (empty($old_password) || empty($new_password) || empty($confirm_new_password) )
        {
             set_message (display_error("Please fill in the blanks"));
        }
        else
        {
            //$pwd = password_verify($old_password);
            $pwd_check="SELECT * FROM admin WHERE id='$id' ";
			$result=mysqli_query($con,$pwd_check);
			$user = mysqli_fetch_assoc($result);
			


            if(password_verify($old_password, $user['password'])  )
            {


                if( $new_password!=$confirm_new_password)
                {
                    set_message (display_error("password not some"));

                }
                else
                {

                    $hash = password_hash($confirm_new_password, PASSWORD_DEFAULT);
                    $query = "UPDATE admin set  password='$hash'   WHERE  id = '$id' ";
                    $result = mysqli_query($con, $query);
                    set_message (display_success("password update Please login again"));

                }


            }
            else
            {
                set_message (display_error("password not match"));
            }
        }


    }
}

//---------------------------------- Edit Admin ------------------------------------//

//--------------------------------- marazzo website setting ---------------------------------------------//

function marazzo_record()
{
    global $con; 
         
        $sql = "SELECT * FROM marazzo_website";
        $res = mysqli_query($con , $sql);
        return  $res;
  
}

function update_mraazzo_text()
{
    global $con;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_text_update']))
    {
        $id = safe_value($con , $_POST['id']);
        $site_name = safe_value($con , $_POST['site_name']);
        $phone = safe_value($con , $_POST['phone']);
        $email = safe_value($con , $_POST['email']);
        $address = safe_value($con , $_POST['address']);
        $deli = safe_value($con , $_POST['deli']);
        $link = safe_value($con , $_POST['link']);
        $footer_name = safe_value($con , $_POST['footer_name']);

        if(empty($site_name) || empty($phone) || empty($email) || empty($address) || empty($footer_name) || empty($deli) || empty($link) ) 
        {
            set_message(display_error("Please fill in the blank"));
        }
        else
        {
            $query="UPDATE marazzo_website set  site_name='$site_name' , phone='$phone' , email='$email' , address='$address' , Link='$link' , Deli='$deli' ,  footer_name='$footer_name'   WHERE  id = '$id' ";
            $result = mysqli_query($con, $query);
            set_message (display_success("Successfully update"));

        }


    }

}

//--------------- logo img ---------------------//

function update_logo_img()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_img_update']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  logo_img='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}

//-------------- End logo img ----------------//

//-------------- title logo img ----------------//
function update_title_img()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_title_update']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  title_img='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}

//----------------- End title img ----------------------------//
//----------------- Ads img 1 --------------------------------//

function update_ads_img1()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_ads_update1']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  ad_img_1='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}


//---------------- End 1 -------------------------------------//

//----------------- Ads img 2 -------------------------------//

function update_ads_img2()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_ads_update2']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  ad_img_2='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}


//----------------- End 2 -------------------------------------//
//----------------- Ads img 3 -------------------------------//

function update_ads_img3()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_ads_update3']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  ad_img_3='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}

//---------------- End 3 -----------------------------------//
//----------------update_title_img1 ------------------------//

function update_title_img1()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_title_update1']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  ad_title_img_1='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}


function update_title_text_1()
{
    global $con;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_text_1']))
    {
        $id = safe_value($con , $_POST['id']);
        $text_1_1 = safe_value($con , $_POST['text_1_1']);
        $text_2_1 = safe_value($con , $_POST['text_2_1']);
        $text_3_1 = safe_value($con , $_POST['text_3_1']);
        $link_1 = safe_value($con , $_POST['link_1']);
        

        if(empty($text_1_1) || empty($text_2_1) || empty($text_3_1) || empty($link_1) ) 
        {
            set_message(display_error("Please fill in the blank"));
        }
        else
        {
            $query="UPDATE marazzo_website set  text_1_1='$text_1_1' , text_2_1='$text_2_1' , text_3_1='$text_3_1' , link_1='$link_1'    WHERE  id = '$id' ";
            $result = mysqli_query($con, $query);
            set_message (display_success("Successfully update"));

        }


    }

}



function update_title_img2()
{
    global $con;

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_title_update2']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  ad_title_img_2='$img'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}


function update_title_text_2()
{
    global $con;
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_text_2']))
    {
        $id = safe_value($con , $_POST['id']);
        $text_1_2 = safe_value($con , $_POST['text_1_2']);
        $text_2_2 = safe_value($con , $_POST['text_2_2']);
        $text_3_2 = safe_value($con , $_POST['text_3_2']);
        $link_2 = safe_value($con , $_POST['link_2']);
        

        if(empty($text_1_2) || empty($text_2_2) || empty($text_3_2) || empty($link_2) ) 
        {
            set_message(display_error("Please fill in the blank"));
        }
        else
        {
            $query="UPDATE marazzo_website set  text_1_2='$text_1_2' , text_2_2='$text_2_2' , text_3_2='$text_3_2' , link_2='$link_2'   WHERE  id = '$id' ";
            $result = mysqli_query($con, $query);
            set_message (display_success("Successfully update"));

        }


    }

}
//------------------------------- -----------------------------------------------------//

function update_category_img()
{
    global $con;

   

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_category_img']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);
        $c_text_1 = safe_value( $con , $_POST['c_text_1']);
        $c_text_2 = safe_value( $con , $_POST['c_text_2']);
        $c_text_3 = safe_value( $con , $_POST['c_text_3']);
    


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;



            if(empty($c_text_1) || empty($c_text_2) || empty($c_text_3)   )
            {
                set_message(display_error("Please Fill in the blanks"));
            }
       else
       {
         if (empty($img))
         {             
              $query = "UPDATE  marazzo_website  set  c_text_1 = '$c_text_1' , c_text_2 = '$c_text_2' , c_text_3 = '$c_text_3'    WHERE  id = '$id' ";
              $result = mysqli_query($con, $query);
 
              if ($result)
              {
                  set_message(display_success("Record has been update "));
                  move_uploaded_file($tmp_name,$path);
              }
             
 
              //image size only <5MB
             
            
             }


             else 
             {
     


       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set   category_img='$img' , c_text_1 = '$c_text_1' , c_text_2 = '$c_text_2' , c_text_3 = '$c_text_3'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

                        }
                        else
                        {
                            set_message(display_error("You can't store this file :("));
                        }
           


                        }
                        else
                        {
                            set_message(display_error("You image size too large "));
                        }

                    }
        
                }
            }
}

function update_sub_category_img()
{
    global $con;

   


    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_subcategory_img']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);
        $s_text_1 = safe_value( $con , $_POST['s_text_1']);
        $s_text_2 = safe_value( $con , $_POST['s_text_2']);
        $s_text_3 = safe_value( $con , $_POST['s_text_3']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;


       if(empty($s_text_1) || empty($s_text_2) || empty($s_text_3)   )
       {
           set_message(display_error("Please Fill in the blanks"));
       }
  else
  {
    if (empty($img))
    {             
         $query = "UPDATE  marazzo_website  set  s_text_1 = '$s_text_1' , s_text_2 = '$s_text_2' , s_text_3 = '$s_text_3'    WHERE  id = '$id' ";
         $result = mysqli_query($con, $query);

         if ($result)
         {
             set_message(display_success("Record has been update "));
             move_uploaded_file($tmp_name,$path);
         }
        

         //image size only <5MB
        
       
        }


        else 
        {

       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set subcategory_img='$img' , s_text_1 = '$s_text_1' , s_text_2 = '$s_text_2' , s_text_3 = '$s_text_3'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }
}
    }

}

function update_brand_img()
{
    global $con;

   

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_brand_img']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);
        $b_text_1 = safe_value( $con , $_POST['b_text_1']);
        $b_text_2 = safe_value( $con , $_POST['b_text_2']);
        $b_text_3 = safe_value( $con , $_POST['b_text_3']);
    


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;


       if(empty($b_text_1) || empty($b_text_2) || empty($b_text_3)   )
       {
           set_message(display_error("Please Fill in the blanks"));
       }
  else
  {
    if (empty($img))
    {             
         $query = "UPDATE  marazzo_website  set  b_text_1 = '$b_text_1' , b_text_2 = '$b_text_2' , b_text_3 = '$b_text_3'    WHERE  id = '$id' ";
         $result = mysqli_query($con, $query);

         if ($result)
         {
             set_message(display_success("Record has been update "));
             move_uploaded_file($tmp_name,$path);
         }
        

         //image size only <5MB
        
       
        }


        else 
        {


       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  brand_img='$img' , b_text_1 = '$b_text_1' , b_text_2 = '$b_text_2' , b_text_3 = '$b_text_3'  WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }
}
    }

}

function update_search_img()
{
    global $con;

   


    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_search_img']))
    {
        $id = safe_value($con , $_POST['id']);
        //$img = safe_value($con , $_POST['id']);
        $se_text_1 = safe_value( $con , $_POST['se_text_1']);
        $se_text_2 = safe_value( $con , $_POST['se_text_2']);
        $se_text_3 = safe_value( $con , $_POST['se_text_3']);


        $img = $_FILES['img']['name'];
       $type = $_FILES['img']['type'];
       $tmp_name = $_FILES['img']['tmp_name'];
       $size = $_FILES['img']['size'];
       
       

       $img_ext = explode('.' , $img);

       $img_correct_ext = strtolower(end($img_ext));
       $allow = array ('jpg' , 'jpeg' , 'png' , 'gif');
       $path  = "img/marazzo_website/".$img;


       if(empty($se_text_1) || empty($se_text_2) || empty($se_text_3)   )
       {
           set_message(display_error("Please Fill in the blanks"));
       }
  else
  {
    if (empty($img))
    {             
         $query = "UPDATE  marazzo_website  set  se_text_1 = '$se_text_1' , se_text_2 = '$se_text_2' , se_text_3 = '$se_text_3'    WHERE  id = '$id' ";
         $result = mysqli_query($con, $query);

         if ($result)
         {
             set_message(display_success("Record has been update "));
             move_uploaded_file($tmp_name,$path);
         }
        

         //image size only <5MB
        
       
        }


        else 
        {


       if($size<500000)
       {   
           if(in_array($img_correct_ext,$allow))
           {

            $query = "UPDATE marazzo_website set  search_img='$img' , se_text_1 = '$se_text_1' , se_text_2 = '$se_text_2' , se_text_3 = '$se_text_3' WHERE  id = '$id' ";
                        $result = mysqli_query($con, $query);
           
                        if ($result)
                        {
                            set_message(display_success("Record has been update"));
                            
                            move_uploaded_file($tmp_name,$path);
                            //header("location:admin_profile.php");
                        }
                        else
                        {
                            set_message(display_error("Worring :("));
                        }
                       

           }
           else
           {
               set_message(display_error("You can't store this file :("));
           }
           


        }
        else
           {
            set_message(display_error("You image size too large "));
           }

    }

}
    }
}


//--------------------- -----------------------------------------------//



//----------------- Active content -------------------------//


function active_status_content()
{
    global $con;
    if(isset($_GET['opr']) && $_GET['opr']!="")
    {
        $operation = safe_value($con,$_GET['opr']);
        $id = safe_value($con,$_GET['id']);

        if($operation=='active')
        {
            $status = 1;
        }
        else
        {
            $status = 0;
        }
        $query = "update content set status='$status' where id='$id'";
        $result = mysqli_query($con,$query);

        if($result)
        {
            header("location:content_list.php");
        }
    }
}

//--------------------- Nothing --------------------------------------------------------//



//-------------------- Noting ------------------------------------------------------------//

//------------------ End ---------------------------------//
//-------------------------------- End marazzo website setting ------------------------------------------//


//----------------------------------------------------------------------//

function view_order_list()
{
    global $con;

    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;

    $sql = "SELECT orders.id , orders.userId , orders.code , orders.orderDate ,  orders.orderStatus ,  user.name  FROM orders INNER JOIN user on orders.userId = user.id  WHERE orderStatus=0 and orderDate Between '$from' and '$to' GROUP BY code  order by id desc ";
    return mysqli_query($con,$sql);

}


function view_order_pending()
{
    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
   
    $sql = "SELECT orders.id , orders.userId , orders.code , orders.orderDate ,  orders.orderStatus , user.name FROM orders INNER JOIN user on orders.userId = user.id where orderStatus=0 and orderDate < '$from' and '$to' GROUP BY code order by id desc ";
    return mysqli_query($con,$sql);
}

function view_order_deli()
{
    global $con;

    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
   
    $sql = "SELECT orders.id , orders.userId ,  orders.code , orders.orderDate ,  orders.orderStatus , user.name FROM orders INNER JOIN user on orders.userId = user.id where orderStatus=1 and orderDate < '$from' and '$to' GROUP BY code  order by id desc ";
    return mysqli_query($con,$sql);
}

function view_order_deli_today()
{
    global $con;

    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;

    $sql = "SELECT orders.id , orders.userId ,  orders.code , orders.orderDate ,  orders.orderStatus , user.name FROM orders INNER JOIN user on orders.userId = user.id  where orderStatus=1 and orderDate Between '$from' and '$to' GROUP BY code order by id desc ";
    return mysqli_query($con,$sql);
}

//------------------------------------------ End of order -----------------------------//


function view_user_today()
{
    global $con;

    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;

    $sql = "SELECT * FROM user where register_date Between '$from' and '$to' order by id desc ";
    return mysqli_query($con,$sql);
}

function view_userlog()
{
    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
    $sql = "SELECT * FROM userlog  where loginTime < '$from' and '$to' order by id desc ";
    return mysqli_query($con,$sql);
}

function view_user_today_log()
{
    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
    $sql = "SELECT * FROM userlog where loginTime  Between '$from' and '$to' order by id desc ";
    return mysqli_query($con,$sql);
}

//---------------------------------- End of user ----------------------------------------//

function view_visitor_today_log()
{
    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
    $sql = "SELECT * FROM visitors where visit_date   Between '$from' and '$to' GROUP BY ip_address order by id desc ";
    return mysqli_query($con,$sql);
}

function view_visitor_log()
{
    global $con;
    $f1="00:00:00";
    $from=date('Y-m-d')." ".$f1;
    $t1="23:59:59";
    $to=date('Y-m-d')." ".$t1;
    $sql = "SELECT * FROM visitors where visit_date  < '$from' and '$to' GROUP BY ip_address order by id desc ";
    return mysqli_query($con,$sql);
}

//--------------------------- End of Visitor ------------------------------- //

?>
