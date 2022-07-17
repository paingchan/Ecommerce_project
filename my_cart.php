<?php require_once'inc/header.php' ?>
<?php 


require_once'inc/nav.php';

if(isset($_POST['submit'])){
	if(!empty($_SESSION['cart'])){
	foreach($_POST['quantity'] as $key => $val){
		if($val==0){
			unset($_SESSION['cart'][$key]);
		}else{
			$_SESSION['cart'][$key]['quantity']=$val;

		}
	}
		echo "<script>alert('Your Cart hasbeen Updated');</script>";
	}
}


if(isset($_POST['remove_code']))
	{

if(!empty($_SESSION['cart'])){
		foreach($_POST['remove_code'] as $key){
			
				unset($_SESSION['cart'][$key]);
		}
			echo "<script>alert('Your Cart has been Updated');</script>";
	}
}




if(isset($_POST['ordersubmit'])) 
{
	$str = str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);

	
	$quantity=$_POST['quantity'];
	$total_price = $_POST['total_price'];
	$pdd=$_SESSION['pid'];
	$value=array_combine($pdd,$quantity);

		foreach($value as $qty=> $val34){

mysqli_query( $con , "INSERT into orders (userId, code ,  productId,quantity , Total_price , paymentMethod , orderStatus ) values('".$_SESSION['id']."', '$str'  ,'$qty'  ,'$val34' , '$total_price' , 'deli' , '0' )");


	//unset($_SESSION['cart']);
 header('location:information.php');
}

}



?>
<!-- ============================================== HEADER : END ============================================== -->
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="#">Home</a></li>
				<li class='active'>Shopping Cart</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content outer-top-xs">
	<div class="container">
		<div class="row ">
			<div class="shopping-cart">
				<div class="shopping-cart-table ">
	<div class="table-responsive">




		<form method="post" name="cart"  >
			
		<?php
			if(!empty($_SESSION['cart'])){
		?>

		<table class="table">
			<thead>
				<tr>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Price</th>
					<th class="cart-total last-item">Total</th>
					<th class="cart-total last-item">function</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>

			<?php

 				$pdtid=array();
    			$sql = "SELECT * FROM products WHERE id IN(";
				foreach($_SESSION['cart'] as $id => $value)
				{
					$sql .=$id. ",";
				}
				$sql=substr($sql,0,-1) . ") ORDER BY id ASC";
				$query = mysqli_query($con,$sql);
				$totalprice=0;
				$totalqunty=0;
				if(!empty($query))
				{
					while($row = mysqli_fetch_array($query))
				{
				$quantity=$_SESSION['cart'][$row['id']]['quantity'];
				$subtotal= $_SESSION['cart'][$row['id']]['quantity']*$row['price'];
				$totalprice += $subtotal;
				$_SESSION['qnty']=$totalqunty+=$quantity;

				array_push($pdtid,$row['id']);
//print_r($_SESSION['pid'])=$pdtid;exit;
			?>



				<tr>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="admin/img/products/<?php echo $row['img1'];?>"  alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'];


						 ?></a></h4>
						
						<div class="cart-product-info">
											<span class="product-color">Code:<span><?php echo $row['code'];?></span></span>
						</div>
					</td>
					
					<td class="cart-product-quantity">
						<div class="quant-input">
				                <div class="arrows">
				                  <div class="arrow plus gradient"><span class="ir"><i class="icon fa fa-sort-asc"></i></span></div>
				                  <div class="arrow minus gradient"><span class="ir"><i class="icon fa fa-sort-desc"></i></span></div>
				                </div>
				             <input type="text" value="<?php echo $_SESSION['cart'][$row['id']]['quantity']; ?>" name="quantity[<?php echo $row['id']; ?>]">
				             
			              </div>
		            </td>
					<td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo " ".$row['price']; ?>.Ks</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo ($_SESSION['cart'][$row['id']]['quantity']*$row['price']); ?>.Ks</span></td>
					<td>
						<input type="submit" name="submit"  value="Update"  class="btn btn-upper btn-primary pull-right outer-right-xs">
						<input type="hidden"    value="" class="btn btn-upper btn-primary pull-right outer-right-xs">

						<i class="fa fa" ><input type="submit"    value="<?php echo htmlentities($row['id']);?>" name="remove_code[]"  class="btn btn-upper btn-danger pull-right outer-right-xs"></i></td>

				</tr>
				<?php } }
$_SESSION['pid']=$pdtid;
				?>
				
			</tbody><!-- /tbody -->
            
            
		</table> 
		<!-- /table -->
	</div>
</div><!-- /.shopping-cart-table -->
	
	<div class="col-md-4 col-sm-12 estimate-ship-tax">
	<table class="table">
		<thead>
			<tr>
				<th>
					<span class="estimate-title">Enter your Informations</span>
					<p>Enter your destination to get shipping and tax.</p>
				</th>
				
				
				
				</tr>
				<tr>
				<th>
					
					<p>Enter your destination to get shipping and tax Enter your destination to get shipping and tax. Enter your destination to get shipping and tax Enter your destination to get shipping and tax </p>
				</th>
				
				
				
				</tr>
		</thead>
		<tbody>
				<tr>
				
				</tr>
		</tbody><!-- /thead -->
		
	</table>
</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 estimate-ship-tax">




</div><!-- /.estimate-ship-tax -->

<div class="col-md-4 col-sm-12 cart-shopping-total">
	<table class="table">
		<thead>
			<tr>
				<th>
					
					<div class="cart-grand-total">
						<input name="total_price" type="hidden" value="<?php echo $_SESSION['tp']="$totalprice"; ?>" >
						Grand Total<span class="inner-left-md"><?php echo $_SESSION['tp']="$totalprice". ".KS"; ?></span>
					</div>
				</th>
			</tr>
		</thead><!-- /thead -->
		<tbody>
				<tr>
					<td>
					<div class="cart-checkout-btn pull-right">
							<button  name="ordersubmit" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</button>
							
						</div>

					</td>
				</tr>
		</tbody><!-- /tbody -->
	</table>
	<?php } else {
echo "Your shopping Cart is empty";
		}?>
</div>			</div>
		</div> 
		</form>

	<!-- /table -->
</div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
		</div> <!-- /.row -->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->

<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->

        <!-- ============================================== INFO BOXES ============================================== -->
    <?php require_once'inc/footer_bar.php' ?>
        <!-- /.info-boxes --> 
        <!-- ============================================== INFO BOXES : END ============================================== --> 

<?php require_once'inc/footer.php' ?>