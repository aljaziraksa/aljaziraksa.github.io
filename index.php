<?php
// Include Language File and Header
  require 'include/header.php';
  require 'language.php';
?>

<div class="carousel slide" id="mycarousel" data-ride="carousel">  <!-- carousel strats -->
		
  <!-- carousel indicator class is used to style that small dots on the bottom of images -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
  </ol>
    
  <!-- carousel-inner class to contain the images --> 
  <div class="carousel-inner">

    <div class="item active"> <!-- Carousel Image 1 -->
      <img src="images/hd-image1.jpg" alt="carousel_image" class="img-responsive">
      <div class="carousel-caption hidden-xs hidden-sm">
        <h3> <?php echo $carousel_item1_h[$lang]; ?> </h3>
        <p> <?php echo $carousel_item1_p[$lang]; ?> </p>
      </div>
    </div>

     <div class="item"> <!-- Carousel Image 2 -->
      <img src="images/hd-image4.jpg" alt="carousel_image" class="img-responsive">
      <div class="carousel-caption hidden-xs hidden-sm">
        <h3> <?php echo $carousel_item3_h[$lang]; ?> </h3>
        <p> <?php echo $carousel_item3_p[$lang]; ?> </p>
      </div>
    </div>
      
    <div class="item"> <!-- Carousel Image 3 -->
      <img src="images/hd-image2.jpg" alt="carousel_image" class="img-responsive">
      <div class="carousel-caption hidden-xs hidden-sm">
        <h3> <?php echo $carousel_item2_h[$lang]; ?> </h3>
        <p> <?php echo $carousel_item2_p[$lang]; ?> </p>
      </div>
    </div>
  
    <div class="item"> <!-- Carousel Image 4 -->
      <img src="images/hd-image3.jpg" alt="carousel_image" class="img-responsive">
      <div class="carousel-caption hidden-xs hidden-sm">
        <h3><?php echo $carousel_item4_h[$lang]; ?></h3>
        <p><?php echo $carousel_item4_p[$lang]; ?> </p>
      </div>
    </div>
    
  </div> <!-- Carousel Inner Ends -->
    
  <!-- left and right controls -->
  <a href="#mycarousel" class="left carousel-control" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
    
  <a href="#mycarousel" class="right carousel-control" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>

</div>	<!-- carousel Ends -->


<div class="container">  <!-- Main Container -->
  
  <!-- Company Intro -->

  <div class="text-center" style="padding-top: 2rem;">  <!-- Company Intro  -->
    <h2> <?php echo $welcome[$lang]; ?> <span style="color: #202574; font-weight: bolder;"> <?php echo $jazirah[$lang]; ?> </span></h2>
    <h3 class="text-justify"><small> <?php echo $para1[$lang]; ?> </small></h3>
  </div>  <!-- Company Intro Ends -->
  
  <!-- Company's Vision and Mission -->

  <div class="row" style="padding-top: 4rem;">  <!-- container for vision, mission -->

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <span class="fas fa-eye glyphicon-xl"></span>
          <h2> <?php echo $vision[$lang]; ?> </h2>
        </div>
        <div class="panel-body" style="height: 30rem;">
          <h3><small> <?php echo $para2[$lang]; ?> </small></h3>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <span class="fas fa-bullseye glyphicon-xl"></span>
          <h2> <?php echo $mission[$lang]; ?></h2>
        </div>
        <div class="panel-body" style="height: 30rem;">
          <h3><small><?php echo $para3[$lang]; ?></small></h3>
        </div>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <span class="fas fa-line-chart glyphicon-xl"></span>
          <h2> <?php echo $values[$lang]; ?> </h2>
        </div>
        <div class="panel-body" style="height: 30rem;">
          <h3><small> <?php echo $para4[$lang]; ?> </small></h3>
        </div>
      </div>
    </div>

  </div> <!-- container for vision, mission Ends-->
</div> <!-- Main Container Ends -->

  <!-- Services Overview -->
<div class="container-fluid" style="width: 100%; padding: 0rem;">
  <div class="jumbotron text-center" style="padding-top: 2rem; border-radius: 0rem; margin-bottom: 0rem;"> <!-- Services Overview Main Container -->

    <!--Section Heading -->
    <h2 class="color-heading1"> <?php echo $our[$lang]; ?> <span style="color: #202574; font-weight: bolder;"> <?php echo $services[$lang]; ?> </span> </h2>

    <!-- section container -->
    <div class="row" style="padding-top: 2rem;">  <!-- row starts -->

      <!-- Thumbnail 1 -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-bottom: 2rem;">
        <div class="wrapper"> 
          <div class="parent">
            <div class="image1">
              <a href="o&m_services.php" target="_blank" style="display: inline;"><i class="fas fa-link slideInDown animated"></i></a> <a href="images/hd-image3.jpg" style="display: inline;"> <i class="fas fa-search slideInUp animated"></i></a>
            </div>
          </div>

          <div class="caption">
            <h4> <?php echo $carousel_item3_h[$lang]; ?> </h4>
            <p><small> <?php echo $thumbnail_p1[$lang]; ?> </small></p>
          </div>
        </div>
      </div>
      
      <!-- Thumbnail 2 -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3" style="padding-bottom: 2rem;">
        <div class="wrapper"> 
          <div class="parent">
            <div class="image2">
              <a href="cleaning-services.php" target="_blank" style="display: inline;"> <i class="fas fa-link slideInDown animated"></i></a> <a href="images/hd-image3.jpg" style="display: inline;"><i class="fas fa-search slideInUp animated"></i></a>
            </div>
          </div>

          <div class="caption">
            <h4> <?php echo $thumbnail_h2[$lang]; ?> </h4>
            <p><small> <?php echo $thumbnail_p2[$lang]; ?> </small></p>
          </div>
        </div>
      </div>

      <!-- Thumbnail 3 -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="wrapper"> 
          <div class="parent">
            <div class="image3">
              <a href="man_out.php" target="_blank" style="display: inline;"><i class="fas fa-link slideInDown animated"></i></a> <a href="images/hd-image3.jpg" style="display: inline;"><i class="fas fa-search slideInUp animated"></i></a>
            </div>
          </div>

          <div class="caption">
            <h4><?php echo $carousel_item4_h[$lang]; ?></h4>
            <p><small> <?php echo $thumbnail_p3[$lang]; ?> </small></p>
          </div>
        </div>
      </div>

      <!-- Thumbnail 4 -->
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <div class="wrapper"> 
          <div class="parent">
            <div class="image4">
              <a href="cleaning-services.php" target="_blank" style="display: inline;"><i class="fas fa-link slideInDown animated"></i></a> <a href="images/gardening.jpg" style="display: inline;"><i class="fas fa-search slideInUp animated"></i></a>
            </div>
          </div>

          <div class="caption">
            <h4><?php echo $thumbnail_h4[$lang]; ?></h4>
            <p><small> <?php echo $thumbnail_p4[$lang]; ?> </small></p>
          </div>
        </div>
      </div>

    </div>  <!-- section container/ row Ends -->
  </div> <!-- Services Overview Main Container ENds -->
</div>


<?php require 'include/footer.php'; ?>
