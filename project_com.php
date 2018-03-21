<?php
// Include Language File and Header
	require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/project-img.png" class="img-responsive page-title-img" alt="Projects">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"><?php echo $projects[$lang]; ?> </h3> <!-- Page Heading -->

	<div class="row row-modified media-container"> <!-- Sub-Container -->
	
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!-- Sister Page Menu Links -->

			<ul class="nav nav-pills nav-stacked" style="padding-top: 2rem;">
			    <li><a href="project_on.php"><strong> <?php echo $projects_on[$lang]; ?>  </strong></a></li>
			    <li><a href="project_com.php"><strong> <?php echo $projects_com[$lang]; ?> </strong></a></li>
			</ul>
		
		</div>

		<!-- Page Content -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 separator"> <!-- Page Content Container -->

			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $project_com_heading[$lang];?> </h3>
			
			<!-- Project Info  -->
			<div class="jumbotron">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<img src="images/kaab.png" class="img-responsive" style="height: 250px; width: 250px;">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				
			    		<div class="panel panel-primary">
			      			<div class="panel-heading"><h3> <?php echo $project_com1[$lang];?> </h3></div>
			      			<div class="panel-body">
					      		<h4 class="color-heading2"><?php echo $desc[$lang];?></h4>
					      		<h4 class="color-heading2"><small> <?php echo $project_com1_desc[$lang];?></small></h4>
			      			</div>
			    		</div>
					</div>
				</div>
			</div>

			<!-- Project Info  -->
			<div class="jumbotron">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<img src="images/civil-defense.jpg" class="img-responsive" style="height: 250px; width: 250px;">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				
			    		<div class="panel panel-primary">
			      			<div class="panel-heading"><h3><?php echo $project_com2[$lang];?></h3></div>
			     			 <div class="panel-body">
					      		<h4 class="color-heading2"><?php echo $desc[$lang];?></h4>
					      		<h4 class="color-heading2"><small><?php echo $project_com2_desc[$lang];?></small></h4>
			      			</div>
			    		</div>
					</div>
				</div>
			</div>

			<!-- Project Info  -->
			<div class="jumbotron">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<img src="images/sand.png" class="img-responsive" style="height: 250px; width: 250px;">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				
			    		<div class="panel panel-primary">
			      			<div class="panel-heading"><h3><?php echo $project_com3[$lang];?></h3></div>
			      			<div class="panel-body">
					      		<h4 class="color-heading2"><?php echo $desc[$lang];?></h4>
					      		<h4 class="color-heading2"><small> <?php echo $project_com3_desc[$lang];?></small></h4>
			      			</div>
			    		</div>
					</div>
				</div>
			</div>

			<!-- Project Info  -->
			<div class="jumbotron">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
						<img src="images/mishari.jpg" class="img-responsive" style="height: 250px; width: 250px;">
					</div>

					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
				
			    		<div class="panel panel-primary">
			      			<div class="panel-heading"><h3> <?php echo $project_com4[$lang];?></h3></div>
			      			<div class="panel-body">
					      		<h4 class="color-heading2"><?php echo $desc[$lang];?></h4>
					      		<h4 class="color-heading2"><small> <?php echo $project_com4_desc[$lang];?> </small></h4>
			      			</div>
			    		</div>
					</div>
				</div>
			</div>


		</div> <!-- Page Content Container Ends -->
	</div> <!-- Sub-Container Ends -->
</div> <!-- Main Container Ends -->

<?php
	require 'include/footer.php';
?>