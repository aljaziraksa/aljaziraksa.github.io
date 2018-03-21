<?php
// Include Language File and Header
	require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/om.jpg" class="img-responsive page-title-img" alt="career">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"> <?php echo $services[$lang]; ?> </h3> <!-- Page Heading -->

	<div class="row row-modified media-container"> <!-- Sub-Container -->
	
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!-- Sister Page Menu Links -->
			<ul class="nav nav-pills nav-stacked" style="padding-top: 2rem;">
			    <li><a href="o&m_services.php"><strong> <?php echo $operation[$lang]; ?> </strong></a></li>
			    <li><a href="man_out.php"><strong> <?php echo $outsourcing[$lang]; ?> </strong></a></li>
			    <li><a href="cleaning-services.php"><strong> <?php echo $cleaning[$lang]; ?> </strong></a></li>
			</ul>	
		</div>

		<!-- Page Content -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 separator"> <!-- Page Content Container -->

			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $operation[$lang]; ?> </h3>
			<h3 class="color-heading">
				<small> <?php echo $page_body4_para1[$lang]; ?>		
				
					<ul class="list-group">
					  	<li class="list-group-item"> <?php echo $service1[$lang]; ?> </li>
					  	<li class="list-group-item"> <?php echo $service2[$lang]; ?> </li>
					  	<li class="list-group-item"><?php echo $service3[$lang]; ?></li>
					   	<li class="list-group-item"><?php echo $service4[$lang]; ?></li>
					  	<li class="list-group-item"><?php echo $service5[$lang]; ?></li>
					   	<li class="list-group-item"><?php echo $service6[$lang]; ?></li>
					</ul>
				
					<strong><?php echo $page_body4_para2[$lang]; ?> </strong><br><br>

					<ul class="list-group">
					  	<li class="list-group-item"><?php echo $service7[$lang]; ?></li>
					  	<li class="list-group-item"><?php echo $service8[$lang]; ?></li>
					  	<li class="list-group-item"><?php echo $service9[$lang]; ?></li>
					  	<li class="list-group-item"><?php echo $service10[$lang]; ?></li>
					</ul>	
				</small>
			</h3>
		</div> <!-- Page Content Container Ends -->

	</div> <!-- Sub-Container Ends-->
</div> <!-- Main Container Ends -->



<?php
	require 'include/footer.php';
?>