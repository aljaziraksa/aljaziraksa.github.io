<?php
//include database connection file
require 'db.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['submit'])) {

        $input_name= $_POST['name'];
        $email= $_POST['email'];
        $subject = $_POST['subj'];
        $cover = $_POST['cover'];

         /*   mysqli_query($conn, "INSERT INTO job_enquiry (Name, Email, Subject, Cover) VALUES ('$input_name', '$email', '$subject', '$cover')") or die('unable to query data');  */

        if (isset($_FILES['cv'])) {
         
            $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/newProject/uploads/ ";
            $file_name = $_FILES['cv']['name'];
            $file_tmp = $_FILES['cv']['tmp_name'];
            $error    = $_FILES['cv']['error'];
            $size     = $_FILES['cv']['size'];

            $errors = array();
            $value = explode('.', $file_name);
            $ext = strtolower(end($value));
            $allowed_ext = array('docx', 'doc', 'pdf', 'txt');
            $filepath = $target_dir.$file_name;

            if(in_array($ext, $allowed_ext) === false){
                $errors[]= "This file format is not supported." ;
            }
            
            if ( $size/1024/1024 > 2 ){
                $errors[] = 'File size is exceeding maximum allowed size.';
            }

            if(empty($errors) == true){
                move_uploaded_file($file_tmp, $target_dir . $file_name);
                header( 'Location: upload.php' ); 
                mysqli_query($conn, "INSERT INTO job_enquiry (Name, Email, Subject, Cover, CV_Filename, CV_Filepath) VALUES ('$input_name', '$email', '$subject', '$cover', '$file_name', '$filepath' )") or die('unable to query data');
            }

        }
    }
}

// Include Header Page
require 'include/header.php'; 

?>

<!-- Page Heading/Main Image -->				  
<div>
    <img src="images/career-img.jpg" class="img-responsive page-title-img" alt="career">
</div>

<!-- Main Container -->
<div class="container media-container"> <!-- Main Container -->

	<h3 class="color-heading heading-main"> <?php echo $career[$lang];?> </h3>

	<div class="row row-modified"> <!-- Sub-Container -->
		<div class="col-xs-12 col-sm-12 col-mg-6 col-lg-6">

			<h3 ><small> <?php echo $page_body7_para1[$lang]; ?> </small></h3>
			<h3 ><small> <?php echo $page_body7_para2[$lang]; ?> </small></h3>
			<h3 ><small> <?php echo $page_body7_para3[$lang]; ?> </small></h3>
			<h3><small> <?php echo $page_body7_para4[$lang]; ?> </small></h3>			
		</div>

		<div class="col-xs-12 col-sm-12 col-mg-6 col-lg-6" style="padding-top: 2rem;"> <!-- Page Content Container -->

		    <!-- Form to submit CV -->  
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">

            <?php

                if (isset($_POST['submit'])) {
                    if (isset($_FILES['cv'])) {
         
                        $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/newProject/uploads/ ";
                        $file_name = $_FILES['cv']['name'];
                        $file_tmp = $_FILES['cv']['tmp_name'];
                        $error    = $_FILES['cv']['error'];
                        $size     = $_FILES['cv']['size'];

                        $errors = array();
                        $value = explode('.', $file_name);
                        $ext = strtolower(end($value));
                        $allowed_ext = array('docx', 'doc', 'pdf', 'txt');

                        if(in_array($ext, $allowed_ext) === false){
                            $errors[]= "This file format is not supported." ;
                        }
            
                        if ( $size/1024/1024 > 2 ) {
                            $errors[] = 'File size is exceeding maximum allowed size.';
                        }

                        if(empty($errors) == true){
                            move_uploaded_file($file_tmp, $target_dir . $file_name);
                        }

                    else {
                        foreach ($errors as $key => $val) { ?>
                        <span style="color: red;">
                        <?php  echo $val;  ?> </span>

                        <?php }
                        }
                    }
                }
        
 ?>

    			<div class="form-group">
    				<label for="name"> <?php echo $name[$lang]; ?> <span class="text-danger">*</span> </label>
    				<input type="text" class="form-control" name="name" id="name" required="on" placeholder="<?php  echo $plc_hold1[$lang];?>">
    			</div>


    			<div class="form-group">
    				<label for="email"> <?php echo $email[$lang]; ?> <span class="text-danger">*</span> </label>
    				<input type="email" class="form-control" name="email" id="email" required="on" placeholder="<?php  echo $plc_hold2[$lang];?>">
    			</div>


    			<div class="form-group">
    				<label for="subject"> <?php echo $sub[$lang]; ?>  </label>
    				<input type="text" class="form-control" name="subj" id="subject" placeholder="<?php  echo $plc_hold3[$lang];?>">
    			</div>

    			<div class="form-group">
    				<label for="name"> <?php echo $cover[$lang]; ?> <span class="text-danger">*</span> </label>
    				<textarea class="form-control" rows="5" name="cover" id="cover" placeholder="<?php  echo $plc_hold4[$lang];?>" maxlength="500"></textarea>
    				<i> <?php echo $char_limit[$lang]; ?>  </i>
    			</div>

    			<div class="form-group">
    				<label> <?php echo $upload[$lang]; ?>  <span class="text-danger small">(<?php echo $req[$lang]; ?>)</span></label> 
    				<input type="file" name="cv" required="on">
    			</div>

    		    <button type="submit" name="submit" class="btn btn-primary"> <?php echo $submit[$lang]; ?> </button>
		    </form> <!-- Form Ends -->

        </div> <!-- Page Content Container Ends-->
    </div> <!-- Sub-Container Ends -->
</div> <!-- Main Container Ends -->

<?php
require 'include/footer.php'; 
?>
