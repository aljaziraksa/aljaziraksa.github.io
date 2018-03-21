<?php
// Include Language File and Header
	require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/cleaning2.jpg" class="img-responsive page-title-img" alt="career">
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

			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $cleaning[$lang]; ?> </h3>

				<h3 class="color-heading" style="padding-bottom: 2rem;"> <small> <?php echo $page_body_cleaning[$lang]; ?> <br><br>
					<ul class="list-group">
						<li class="list-group-item"><strong> <?php echo $page_item1[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item2[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item3[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item4[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item5[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item6[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item7[$lang]; ?> </strong></li>
						
					</ul>	
				</small>
			</h3>

			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $gardening[$lang]; ?> </h3>

				<h3 class="color-heading"> <small> <?php echo $page_body_gardening[$lang]; ?> <br><br>
					<ul class="list-group">
						<li class="list-group-item"><strong> <?php echo $page_item8[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item9[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item10[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item11[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong> <?php echo $page_item12[$lang]; ?> </strong></li>
					</ul>	
				</small>
			</h3>

		</div>

	</div>
</div>


<?php
	require 'include/footer.php';
?>