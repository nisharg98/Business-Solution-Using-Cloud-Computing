<?php
include("include/header.php");
if(isset($_REQUEST['delete']))
{
	$delete=mysqli_query($con,"delete from product where product_id='$_REQUEST[delete]'");
	if($delete)
	{
		echo "<script> alert('Product Deleted...'); location='product-list.php'; </script>";
	}
	else
	{
		echo "<script> alert('Product Not Deleted!'); </script>";
	}
}
?>
<div class="product-status mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap">
					<h4>Products List</h4>
					<div class="add-product">
						<a href="product-edit.php">Add Product</a>
					</div>
					<table>
						<tr>
							<th>Image</th>
							<th>Product Title</th>
							<th>Purchases</th>
							<th>Product sales</th>
							<th>Stock</th>
							<th>Price</th>
							<th>Setting</th>
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
								<a href="product-edit.php?id=<?php echo $data['product_id']; ?>" style="color:black;"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<a href="product-list.php?delete=<?php echo $data['product_id']; ?>" style="color:black;"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
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