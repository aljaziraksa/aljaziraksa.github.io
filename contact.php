
<?php
// Include Language File and Header
	require 'include/header.php';
?>

<!-- Page Heading/Main Image -->
<div>
    <img src="images/contact-img.jpg" class="img-responsive page-title-img" alt="career">
</div>

<div class="container"> <!-- Main Container -->

	<h3 class="heading-main color-heading"> <?php  echo $contact[$lang];?> </h3>  <!-- Page Heading -->
	
	<!-- Page Content -->
	<div class="row row-modified"> <!-- Page Content Container -->

		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 container-modified container-separator"> <!-- Contact Form container -->

			<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

				<?php 
					require 'db.php';

					if($_SERVER['REQUEST_METHOD'] == 'POST'){
							
						if(isset($_POST['submit'])){
								
							$name1= $_POST['name1'];
							$email1= $_POST['email1'];
							$phone = $_POST['phone1'];
							$org1 = $_POST['org1'];
							$subject = $_POST['sub1'];
							$msg1 = $_POST['msg1'];
								
							mysqli_query($conn, "INSERT INTO bussiness_query (Name, Email, Phone, Organization, Subject, Message) VALUES ('$name1', '$email1', '$phone', '$org1', '$subject', '$msg1')") or die('unable to query data');
							echo '<div><i class="fas fa-check-circle"></i> <span style="font-weight: bolder">'. $query_contact[$lang].'</span></div>';
						} 
								
					}
				?>

				<h3 class="color-heading"> <?php  echo $buss_enq[$lang];?> </h3>
				<h4><small> <?php  echo $page_body8[$lang];?> </small></h4>

				<div class="form-group">
				    <label for="name1" class="color-heading3"> <?php  echo $name[$lang];?> <span class="text-danger">*</span></label>
				    <input type="text" name="name1" class="form-control" id="name1" required="on">
				</div>


				<div class="form-group">
				    <label for="email1"> <?php  echo $email[$lang];?> <span class="text-danger">*</span> </label>
				    <input type="email" name="email1" class="form-control" id="email1" required="on">
				</div>

				<div class="form-group">
				    <label for="mobile1"> <?php  echo $phn[$lang];?> </label>
				    <input type="number" name="phone1" class="form-control" id="mobile1" required="on">
				</div>

				<div class="form-group">
				    <label> <?php  echo $org[$lang]; ?> <span class="text-danger">*</span> </label>
				    <input type="text" name="org1" class="form-control" required="on">
				</div>

				<div class="form-group">
				    <label for="subject1"> <?php  echo $sub[$lang];?> </label>
				    <input type="text" name="sub1" class="form-control" id="subject1" required="on">
				</div>

				<div class="form-group">
				    <label for="message1"> <?php  echo $msg[$lang];?> <span class="text-danger">*</span> </label>
				    <textarea class="form-control" name="msg1" rows="5" id="message1" maxlength="1000"></textarea>
				</div>

				<input type="submit" name="submit" value="Submit" class="btn btn-primary">

			</form>
		</div> <!-- Contact Form container Ends -->
	
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"> <!-- Address Container -->

			<div class="container-modified">
				<h3 class="color-heading"> <?php echo $head_ofc[$lang]; ?> </h3>
				<address>
			        <h3 class="color-heading2"><small> <?php echo $address2[$lang]; ?> </small></h3>
	   			</address>
		
				<div class="contact-detail">
					<i class="fas fa-phone"></i>  <span><h5>966571883608</h5></span><br>
					<i class="fas fa-fax"></i>  <span><h5>966571883608</h5></span><br>
					<i class="fas fa-envelope"></i>  <span><h5>info@aljaziraksa.com</h5></span>
				</div>
	  		</div>

			<strong class="color-heading3"> <?php echo $map[$lang]; ?> </strong>
			<div class="map-container">
				<div id="googleMap" style="height:300px; padding: 20px 0; "></div>
			</div>

	  	</div> <!-- Address Container Ends-->
  		 

	</div> <!-- Page Content Container Ends -->

</div> <!-- Main Container Ends-->

<?php 
require 'include/footer.php';
?>