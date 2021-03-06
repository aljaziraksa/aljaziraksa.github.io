<?php
// Include Language File and Header
	require 'include/header.php';
	require 'language.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/quality-policy-img.jpg" class="img-responsive page-title-img" alt="quality_policy">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"><?php echo $about[$lang]; ?> </h3> <!-- Page Heading -->

	<div class="row row-modified"> <!-- Sub-Container -->

		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"> <!-- Sister Page Menu Links -->
			<ul class="nav nav-pills nav-stacked" style="padding-top: 2rem;">
			    <li><a href="company_profile.php"><strong> <?php echo $com_pro[$lang]; ?> </strong></a></li>
			    <li><a href="president_message.php"><strong><?php echo $prez[$lang]; ?></strong></a></li>
			    <li><a href="management.php"><strong><?php echo $management[$lang]; ?></strong></a></li>
			    <li><a href="quality_policy.php"><strong><?php echo $quality_policy[$lang]; ?></strong></a></li>
			</ul>		
		</div>

	<!-- Page Content -->
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 separator">
			<h3 class="color-heading" style="padding-bottom: 2rem;"> <?php echo $quality_policy[$lang]; ?> </h3>
			<h3><small> <?php echo $page_body3[$lang]; ?> </small></h3>
		</div>

	</div> <!-- Sub-Container Ends -->

</div> <!-- Main Container Ends -->

<?php
	require 'include/footer.php';
?>