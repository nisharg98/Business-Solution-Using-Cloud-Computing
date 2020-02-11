<?php
include("include/header.php");
if(isset($_REQUEST['id']))
{
	$select=mysqli_query($con,"select * from employee where emp_id='$_REQUEST[id]'");
	$data=mysqli_fetch_array($select);
	$fname=$data['first_name'];
	$lname=$data['last_name'];
	$email=$data['email_id'];
	$mobile=$data['mobile_no'];
	$salary=$data['salary'];
	$designation=$data['designation'];
}
if(isset($_POST['submit']))
{
	if(isset($_REQUEST['id']))
	{
		$update=mysqli_query($con,"update employee set first_name='$_POST[first_name]', last_name='$_POST[last_name]', email_id='$_POST[email]', mobile_no='$_POST[mobile]', salary='$_POST[salary]', designation='$_POST[designation]' where emp_id='$_REQUEST[id]'");
		if($update)
		{
			echo "<script> alert('Employee Update Sucessfully...'); location='employee-list.php'; </script>";
		}
		else
		{
			echo "<script> alert('Employee Not Updated!'); </script>";
		}
	}
	else
	{
		$image=$_FILES['image']['name'];
		$insert=mysqli_query($con,"insert into employee values('','$_POST[first_name]','$_POST[last_name]','$_POST[gender]','$_POST[email]','$_POST[mobile]','$_POST[hire_date]','$_POST[salary]','$_POST[designation]','$image')");
		move_uploaded_file($_FILES['image']['tmp_name'],"img/employee/".$_FILES['image']['name']);
		if($insert)
		{
			echo "<script> alert('Employee Added Sucessfully...'); location='employee-list.php'; </script>";
		}
		else
		{
			echo "<script> alert('Employee Not Added!'); </script>";
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
							<li class="active"><a href="#description"><i class="fa fa-pencil" aria-hidden="true"></i>Add Employee</a></li>
						</ul>
						<div id="myTabContent" class="tab-content custom-product-edit">
							<form action="" method="post" enctype="multipart/form-data">
							<div class="product-tab-list tab-pane fade active in" id="description">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="float:none;">
										<div class="review-content-section">
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="First Name" name="first_name" required="" value="<?php if(isset($fname)){ echo $fname; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Last Name" name="last_name" required="" value="<?php if(isset($lname)){ echo $lname; } ?>">
											</div>
											<div style="text-align:left;">
											<b>Gender:</b>&nbsp;&nbsp;
											<input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;
											<input type="radio" name="gender" value="Female"> Female
											</div><br/>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
												<input type="email" class="form-control" placeholder="Email Id" name="email" required="" value="<?php if(isset($email)){ echo $email; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Mobile No." name="mobile" required="" value="<?php if(isset($mobile)){ echo $mobile; } ?>">
											</div>
											<div style="text-align:left;">
											<b>Hire Date:</b>&nbsp;&nbsp;
												<input type="date" name="hire_date"/>
											</div><br/>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Salary" name="salary" required="" value="<?php if(isset($salary)){ echo $salary; } ?>">
											</div>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
												<input type="text" class="form-control" placeholder="Designation" name="designation" required="" value="<?php if(isset($designation)){ echo $designation; } ?>">
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
											<a href="employee-list.php" class="btn btn-warning waves-effect waves-light">Discard</a>
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