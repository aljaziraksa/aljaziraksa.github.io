<?php
// Include Language File and Header
	require 'include/header.php';
	require 'language.php';
?>

<!-- Page Heading/Main Image -->
<div> 
    <img src="images/companyprofile-img.jpg" class="img-responsive page-title-img" alt="company profile">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"> <?php echo $about[$lang]; ?> </h3> <!-- Page Heading -->

	<div class="row row-modified">  <!-- Sub-Container -->
	
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">  <!-- Sister Page Menu Links -->

			<ul class="nav nav-pills nav-stacked" style="padding-top: 2rem;">
			    <li><a href="company_profile.php"><strong> <?php echo $com_pro[$lang]; ?> </strong></a></li>
			    <li><a href="president_message.php"><strong> <?php echo $prez[$lang]; ?> </strong></a></li>
			    <li><a href="management.php"><strong> <?php echo $management[$lang]; ?> </strong></a></li>
			    <li><a href="quality_policy.php"><strong> <?php echo $quality_policy[$lang]; ?> </strong></a></li>
			</ul>
		
		</div>

		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 separator">  <!-- Page Content -->
			<h3 class="color-heading"> <?php echo $com_pro[$lang]; ?> <br><br> <small> <?php echo $page_body[$lang]; ?><br><br></small></h3>
		</div>

	</div>	<!-- Sub-Container Ends -->

</div> <!-- Main Container Ends -->

<?php
	require 'include/footer.php';
?>