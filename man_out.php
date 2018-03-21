<?php
// Include Language File and Header
	require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/man-out.jpg" class="img-responsive page-title-img" alt="career">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"> <?php echo $services[$lang]; ?> </h3>

	<div class="row row-modified media-container"> <!-- Sub-Container -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">  <!-- Sister Page Menu Links -->
			<ul class="nav nav-pills nav-stacked" style="padding-top: 2rem;">
			    <li><a href="o&m_services.php"><strong> <?php echo $operation[$lang]; ?> </strong></a></li>
			    <li><a href="man_out.php"><strong> <?php echo $outsourcing[$lang]; ?> </strong></a></li>
			    <li><a href="cleaning-services.php"><strong> <?php echo $cleaning[$lang]; ?> </strong></a></li>    
			</ul>	
		</div>
		
		<!-- Page Content -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 separator"> <!-- Page Content Container -->

			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $outsourcing[$lang]; ?> </h3>

			<h3 class="color-heading">
				<small><?php echo $page_body5_para1[$lang]; ?> <br><br>
					<ul class="list-group">
						<li class="list-group-item"><strong> <?php echo $item1[$lang]; ?> </strong></li>
						<li class="list-group-item"><strong><?php echo $item2[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item3[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item4[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item5[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item6[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item7[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item8[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item9[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item10[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item11[$lang]; ?></strong></li>
						<li class="list-group-item"><strong><?php echo $item12[$lang]; ?></strong></li>
					</ul>	
				</small>
			</h3>
		</div> <!-- Page Content Container Ends -->
	</div> <!-- Sub-Container Ends -->
</div> <!-- Main Container Ends-->

<?php
	require 'include/footer.php';
?>
