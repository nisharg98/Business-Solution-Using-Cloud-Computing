<?php
include("include/header.php");
if(isset($_REQUEST['id']))
{
	$select=mysqli_query($con,"select * from product where product_id='$_REQUEST[id]'");
	$data=mysqli_fetch_array($select);
	$p_name=$data['product_name'];
	$p_des=$data['product_description'];
	$stock=$data['stock'];
	$price=$data['price'];
}
if(isset($_POST['submit']))
{
	if(isset($_REQUEST['id']))
	{
		$update=mysqli_query($con,"update product set product_name='$_POST[product_name]', product_description='$_POST[product_description]', stock='$_POST[stock]', price='$_POST[price]' where product_id='$_REQUEST[id]'");
		if($update)
		{
			echo "<script> alert('Product Update Sucessfully...'); location='product-list.php'; </script>";
		}
		else
		{
			echo "<script> alert('Product Not Updated!'); </script>";
		}
	}
	else
	{
		$image=$_FILES['image']['name'];
		$insert=mysqli_query($con,"insert into product values('','$_POST[product_name]','$_POST[product_description]','','','$_POST[stock]','$_POST[price]','$image')");
		move_uploaded_file($_FILES['image']['tmp_name'],"img/product/".$_FILES['image']['name']);
		if($insert)
		{
			echo "<script> alert('Product Added Sucessfully...'); location='product-list.php'; </script>";
		}
		else
		{
			echo "<script> alert('Product Not Added!'); </script>";
		}
	}
}
?>
<!-- Single pro tab start-->
<div class="single-product-tab-area mg-tb-15">
	<!-- Single pro tab review Start-->
	<div class="single-pro-review-area">
		<div class="container-fluid">
			<div class="row">
				<center>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="review-tab-pro-inner">
						<ul id="myTab3" class="tab-review-design">
							<li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>Add Product</a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<form action="" method="post" enctype="multipart/form-data">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:none;">
										<div class="review-content-section">
											
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Product Name" name="product_name" required="" value="<?php if(isset($p_name)){ echo $p_name; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
												<textarea rows="3" class="form-control" placeholder="Product Description" name="product_description" required="" style="resize:none;"><?php if(isset($p_des)){ echo $p_des; } ?></textarea>
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Stock" name="stock" required="" value="<?php if(isset($stock)){ echo $stock; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Sale Price" name="price" required="" value="<?php if(isset($price)){ echo $price; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></span>
												<input type="file" class="form-control" name="image">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<div class="text-center mg-b-pro-edt custom-pro-edt-ds">
											<input type="submit" name="submit" class="btn btn-primary waves-effect waves-light m-r-10" value="Save" />&nbsp &nbsp
											<a href="product-list.php" class="btn btn-warning waves-effect waves-light">Discard</a>
										</div>
									</div>
								</div>
							</div>
							</form>
						</div>
					</div>
				</div>
				</center>
			</div>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>