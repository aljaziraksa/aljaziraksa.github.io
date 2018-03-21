<?php
// Include Language File and Header
require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/client-img.jpg" class="img-responsive page-title-img" alt="clients">
</div>


<div class="container"> <!-- Main Container -->
	<h3 class="color-heading heading-main"> <?php echo $clients[$lang];?> </h3>  <!-- Page Heading -->
	<h3 class="color-heading"><small><?php echo $page_body6[$lang];?> </small></h3>

<!-- Clients name with their official logo image-->

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/ksab.png" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"><?php echo $ksab[$lang];?></h4>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/kfsc.png" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"><?php echo $kfsc[$lang];?></h4>
		</div>

	</div>

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/mod.png" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"><?php echo $mod[$lang];?></h4>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/mofa.jpg" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"> <?php echo $mofa[$lang];?> </h4>
		</div>

	</div>

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/stc.jpg" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"> <?php echo $stc[$lang];?> </h4>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/civil-defense.jpg" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"> <?php echo $cd[$lang];?> </h4>
		</div>
	
	</div>

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/shabab.png" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"><?php echo $shabab[$lang];?></h4>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/kaab.png" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"> <?php echo $project_com1[$lang];?> </h4>
		</div>

	</div>

	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/habib.jpg" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"> <?php echo $project8[$lang];?> </h4>		
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 box-padd">
			<img src="images/imam.jpg" class="img-responsive img-clients" alt="client">
			<h4 class="text-center color-heading"><?php echo $imam[$lang];?></h4>
		</div>
	
	</div>

</div> <!-- Main Container Ends-->

<?php
require 'include/footer.php';
?>