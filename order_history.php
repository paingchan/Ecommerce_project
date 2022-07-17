<?php require_once'inc/header.php' ?>
<?php 


require_once'inc/nav.php';


if(strlen($_SESSION['login'])==0)
    {   
header('location:sign_in.php');
}
else{



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




		<form method="post" name="cart" >
		

		<table class="table">
			<thead>
				<tr>
					<th class="cart-romove item">  Order code</th>
					<th class="cart-description item">Image</th>
					<th class="cart-product-name item">Product Name</th>
					
					<th class="cart-qty item">Quantity</th>
					<th class="cart-sub-total item">Price</th>
					<th class="cart-total last-item">Total</th>
				</tr>
			</thead><!-- /thead -->
			
			<tbody>

            <?php $query=mysqli_query($con,"select products.code , products.img1 as pimg1,products.name as pname,products.id as proid,orders.productId as opid,orders.quantity as qty,products.price  as paym,orders.orderDate as odate,orders.id as orderid,orders.code as ocode,orders.Total_price as total_price from orders join products on orders.productId=products.id  where orders.userId='".$_SESSION['id']."' and orders.paymentMethod is not null");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>			


				<tr>
				<td class="romove-item"><h3><?php echo $ocode=$row['ocode'];?></h3></td>
					<td class="cart-image">
						<a class="entry-thumbnail" href="detail.html">
						    <img src="admin/img/products/<?php echo $row['pimg1'];?>"  alt="">
						</a>
					</td>
					<td class="cart-product-name-info">
						<h4 class='cart-product-description'><a href="detail.php?id=<?php echo $row['id'] ?>"><?php echo $row['pname'];


						 ?></a></h4>
						
						<div class="cart-product-info">
											<span class="product-color">Code:<span><?php echo $code=$row['code'];?></span></span>
						</div>
					</td>
					
					<td class="cart-product-quantity">
						<?php echo $qty=$row['qty']; ?>   
		            </td>
                    <input type="hidden" value="<?php echo $total_price=$row['total_price']; ?>" >
                    
					<td class="cart-product-sub-total"><span class="cart-sub-total-price"><?php echo $price=$row['paym']; ?>.KS</span></td>
					<td class="cart-product-grand-total"><span class="cart-grand-total-price"><?php echo $total=(($qty*$price));?>.KS</span></td>
				</tr>
				
                <?php $cnt=$cnt+1;} ?>		
			</tbody><!-- /tbody -->
            
            <tfoot>
				<tr>
					<td colspan="7">
						
					</td>
				</tr>
			</tfoot>
		</table> 
		<!-- /table -->
	</div>

  
			</div>
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
<?php } ?>