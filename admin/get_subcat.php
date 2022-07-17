<?php

require_once 'inc/header.php';
include('function/config.php');

if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysqli_query($con,"SELECT * FROM sub_category WHERE cat_id=$id");
?>
<option value="">Select Subcategory</option>
<?php
 while($row=mysqli_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['sub_id']); ?>"><?php echo htmlentities($row['sub_name']); ?></option>
  <?php
 }
}



?>