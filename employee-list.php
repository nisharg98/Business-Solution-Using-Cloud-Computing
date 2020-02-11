<?php
include("include/header.php");
if(isset($_REQUEST['delete']))
{
	$delete=mysqli_query($con,"delete from employee where emp_id='$_REQUEST[delete]'");
	if($delete)
	{
		echo "<script> alert('Employee Deleted...'); location='employee-list.php'; </script>";
	}
	else
	{
		echo "<script> alert('Employee Not Deleted!'); </script>";
	}
}
?>
<div class="product-status mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="product-status-wrap">
					<h4>Employee List</h4>
					<div class="add-product">
						<a href="employee-edit.php">Add Employee</a>
					</div>
					<table>
						<tr>
							<th>Image</th>
							<th>Name</th>
							<th>Gender</th>
							<th>Email Id</th>
							<th>Mobile No</th>
							<th>Hire Date</th>
							<th>Salary</th>
							<th>Designation</th>
							<th>Setting</th>
						</tr>
						<?php
						$select=mysqli_query($con,"select * from employee ORDER BY emp_id desc");
						while($data=mysqli_fetch_array($select))
						{
						?>
						<tr>
							<td><img src="<?php echo "img/employee/".$data['image']; ?>" alt="" /></td>
							<td><?php echo $data['first_name']." ".$data['last_name']; ?></td>
							<td><?php echo $data['gender']; ?></td>
							<td><?php echo $data['email_id']; ?></td>
							<td><?php echo $data['mobile_no']; ?></td>
							<td><?php echo $data['hire_date']; ?></td>
							<td>₹<?php echo $data['salary']; ?></td>
							<td><?php echo $data['designation']; ?></td>
							<td>
								<a href="employee-edit.php?id=<?php echo $data['emp_id']; ?>" style="color:black;"><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<a href="employee-list.php?delete=<?php echo $data['emp_id']; ?>" style="color:black;"><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
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