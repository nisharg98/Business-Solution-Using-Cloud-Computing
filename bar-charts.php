<?php include("include/header.php"); ?>
<!-- Charts Start-->
<div class="charts-area mg-tb-15">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="charts-single-pro responsive-mg-b-30">
					<div class="alert-title">
						<h2>Bar Chart</h2>
						<p>A bar chart provides a way of showing data values. It is sometimes used to show trend data. we create a bar chart for a single dataset and render that in our page.</p>
					</div>
					<div id="bar1-chart">
						<canvas id="barchart1"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="charts-single-pro">
					<div class="alert-title">
						<h2>Bar Chart vertical</h2>
						<p>A bar chart provides a way of showing data values represented as vertical bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
					</div>
					<div id="line2-chart">
						<canvas id="barchart2"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="charts-single-pro mg-tb-30 responsive-mg-b-0">
					<div class="alert-title">
						<h2>Bar Chart Horizontal</h2>
						<p>A bar chart provides a way of showing data values represented as Horizontal bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
					</div>
					<div id="bar3-chart">
						<canvas id="barchart3"></canvas>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="charts-single-pro mg-tb-30">
					<div class="alert-title">
						<h2>Bar Chart Multi axis</h2>
						<p>This sample illustrates how you can display a data series, using multiple axes in your business chart. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
					</div>
					<div id="bar4-chart">
						<canvas id="barchart4"></canvas>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="charts-single-pro">
					<div class="alert-title">
						<h2>Bar Chart Stacked</h2>
						<p>A bar chart provides a way of showing data values represented as Stacked bars. It is sometimes used to show trend data, and the comparison of multiple data sets</p>
					</div>
					<div id="bar5-chart">
						<canvas id="barchart5"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Charts End-->
<?php include("include/footer.php"); ?>