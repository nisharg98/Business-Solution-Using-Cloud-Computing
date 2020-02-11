<?php
include("include/header.php");
if(isset($_POST['submit']))
{
	$select=mysqli_query($con,"select * from product where product_id='$_POST[id]'");
	$data1=mysqli_fetch_array($select);
	if($data1['purchases'] == null && $data1['product_sales'] == null)
	{
		$purchases=0;
		$product_sales=0;
	}
	else
	{
		$purchases=$data1['purchases'];
		$product_sales=$data1['product_sales'];
	}
	$stock=$data1['stock'] - $_POST['sell'];
	$purchases_new=$purchases + $_POST['sell'];
	$product_sales_new=$product_sales + ($data1['price'] * $_POST['sell']);
	
	$sell=mysqli_query($con,"update product set purchases='$purchases_new', product_sales='$product_sales_new', stock='$stock' where product_id='$_POST[id]'");
	if($sell)
	{
		echo "<script> alert('Product Sell Sucessfully...'); location='sales-list.php'; </script>";
	}
	else
	{
		echo "<script> alert('Product Not Sell!'); </script>";
	}
}
?>
<div class="product-status mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap">
					<h4>Products List</h4>
					<table>
						<tr>
							<th>Image</th>
							<th>Product Title</th>
							<th>Purchases</th>
							<th>Product sales</th>
							<th>Stock</th>
							<th>Price</th>
							<th>Update</th>
						</tr>
						<?php
						$select=mysqli_query($con,"select * from product ORDER BY product_id desc");
						while($data=mysqli_fetch_array($select))
						{
						?>
						<tr>
							<td><img src="<?php echo "img/product/".$data['image']; ?>" alt="" /></td>
							<td><a href="product-detail.php?id=<?php echo $data['product_id']; ?>" ><?php echo $data['product_name']; ?></a></td>
							<td><?php echo $data['purchases']; ?></td>
							<td>₹<?php echo $data['product_sales']; ?></td>
							<td><?php echo $data['stock']; ?></td>
							<td>₹<?php echo $data['price']; ?></td>
							<td>
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $data['product_id']; ?>"/>
								<input type="text" name="sell" placeholder="No. of Product Sell" required=""/>
								<input type="submit" name="submit" value="Update"/>
							</form>
							</td>
						</tr>
						<?php } ?>
					</table>
					<div class="custom-pagination">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
								<li class="page-item"><a class="page-link" href="#">Previous</a></li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item"><a class="page-link" href="#">Next</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>