<?php
include("include/header.php");
if(isset($_POST['submit']))
{
	$doc=$_FILES['doc']['name'];
	$sql=mysqli_query($con,"insert into document values('','$_SESSION[user_id]','$doc')");
	move_uploaded_file($_FILES['doc']['tmp_name'],"document/".$_FILES['doc']['name']);
	if($sql)
	{
		echo "<script> alert('Document Uploaded...'); </script>";
	}
	else
	{
		echo "<script> alert('Document Not Uploaded!'); </script>";
	}
}
?>
<div class="file-manager-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<center>
			<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="doc" style="margin-top:20px;"/>
			<input type="submit" name="submit" value="Upload" style="height:30px;width:65px;background-color:#e12503;color:white;border:0px;margin:20px 0px 30px 0"/>
			</form>
			<div class="col-md-9 col-md-9 col-sm-9 col-xs-12" style="float:none;">
				<div class="row">
					<?php
					$list=mysqli_query($con,"select * from document where user_id='$_SESSION[user_id]'");
					while($data=mysqli_fetch_array($list))
					{
					?>
					<div class="col-md-3" >
						<a href="document/<?php echo $data['doc_name']; ?>" target="_blank" title="<?php echo $data['doc_name']; ?>">
						<div class="hpanel mt-b-30">
							<div class="panel-body file-body file-cs-ctn">
								<i class="fa fa-file-pdf-o text-info"></i>
							</div>
							<div class="panel-footer" style="overflow:hidden;">
								<?php echo $data['doc_name']; ?>
							</div>
						</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
			</center>
		</div>
	</div>
</div>
<?php include("include/footer.php"); ?>