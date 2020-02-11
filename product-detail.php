<?php
include("include/header.php");
if(isset($_REQUEST['id']))
{
	$select=mysqli_query($con,"select * from product where product_id='$_REQUEST[id]'");
	$data=mysqli_fetch_array($select);
}
?>
<!-- Single pro tab start-->
<div class="single-product-tab-area mg-t-15 mg-b-30">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
				<div id="myTabContent1" class="tab-content">
					<div class="product-tab-list tab-pane fade active in" id="single-tab1">
						<img src="<?php echo "img/product/".$data['image']; ?>" alt="" />
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
				<div class="single-product-details res-pro-tb">
					<h1><?php echo $data['product_name']; ?></h1>
					<span class="single-pro-star"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
					<div class="single-pro-price">
						<span class="single-regular">₹<?php echo $data['price']; ?></span>
					</div>
					<div class="color-quality-pro">
						<div class="clear"></div>
						<div class="clear"></div>
						<div class="single-social-area">
							<h3>share this on</h3>
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-feed"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
					<div class="single-pro-cn">
						<h3>OVERVIEW</h3>
						<p><?php echo $data['product_description']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Single pro tab End-->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<ul id="myTab" class="tab-review-design">
					<li class="active"><a href="#description">description</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="product-tab-list product-details-ect tab-pane fade active in" id="description">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="review-content-section">
									<p><?php echo $data['product_description']; ?></p>
									<p><?php echo $data['product_description']; ?></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>