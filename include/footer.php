
<?php
  // Include Language File
  require 'language.php';
?>

<div class="jumbotron jumbotron-footer">  <!-- Footer Main Container -->

  <div class="row"> <!-- row starts -->

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding-modified1"> <!-- Column 1 begins -->
      <div class="footer-col">
        <div class="footer-heading"><img src="images/jazz-logo3.png" class="img-responsive img-footer"> <h4 class="h4-footer-inline"> <?php echo $jazira[$lang]; ?> </h4>
          <div class="footer-txt-color"> 
            <h6> <?php echo $nav_heading[$lang]; ?> </h6>
            <address>
              <h6> <?php echo $address[$lang]; ?> </h6>
            </address>
            <i class="fas fa-phone i-padding"></i><i>966571883608</i><br>
            <i class="fas fa-envelope i-padding"></i><i>info@aljaziraksa.com</i>
          </div>
        </div>
      </div>
    </div>  <!-- Column 1 ends -->


    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding-modified1"> <!-- Column 2 begins -->
      <div class="footer-col">
        <h4 class="footer-heading"> <?php echo $about[$lang]; ?> </h4>
        <div class="footer-txt-color">
          <h6><a href="company_profile.php"> <?php echo $com_pro[$lang]; ?> </a></h6>
          <h6><a href="president_message.php"> <?php echo $prez[$lang]; ?> </a></h6>
          <h6><a href="management.php"> <?php echo $management[$lang]; ?> </a></h6>
          <h6><a href="quality_policy.php"> <?php echo $quality_policy[$lang]; ?> </a></h6>
        </div>
      </div>
    </div>  <!-- Column 2 ends -->

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding-modified1"> <!-- Column 3 begins -->
      <div class="footer-col">
        <h4 class="footer-heading"> <?php echo $com[$lang]; ?>  </h4>
        <div class="footer-txt-color">
          <h6><a href="project_on.php"> <?php echo $projects_on[$lang]; ?> </a></h6>
          <h6><a href="project_com.php"> <?php echo $projects_com[$lang]; ?> </a></h6>
          <h6><a href="clients.php"> <?php echo $our_clients[$lang]; ?> </a> </h6>
        </div>
      </div>
    </div>  <!-- Column 3 ends -->

    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 padding-modified1"> <!-- Column 4 begins -->
      <div class="footer-col">
        <h4 class="footer-heading"> <?php echo $sis_com[$lang]; ?> </h4>
        <div class="footer-txt-color">
          <h6> <?php echo $jad[$lang]; ?> </h6>
          <h6> <?php echo $manzu[$lang]; ?> </h6>
        </div> 
      </div>
    </div>  <!-- Column 4 ends -->

    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 padding-modified1"> <!-- Column 5 begins -->
      <div class="footer-col">
        <h4 class="footer-heading"> <?php echo $social[$lang]; ?> </h4>
        <span class="fab fa-facebook fab-footer"></span>
        <span class="fab fa-twitter fab-footer"></span>
        <span class="fab fa-whatsapp fab-footer"></span>
      </div>
    </div>  <!-- Column 5 ends -->

  </div> <!-- row ends -->

  <div class="row footer-strip">  <!-- Footer Copyright Strip -->
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 part-l">
      <div class="text-center">
        <h6 class="footer-txt-color">&copy; <?php echo date('Y'); ?>  <?php echo $copyright_note[$lang]; ?> </h6>
      </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 part-r">
      <div class="text-center"><h6 class="footer-txt-color"> <?php echo $designer[$lang]; ?> <a href="https://enggaamir45.github.io" id="mylink"> <?php echo $myname[$lang]; ?> </a></h6></div>
    </div>
  </div>  <!-- Footer Copyright Strip Ends -->

</div> <!-- Footer Main Container Ends -->

<!-- Javascript and Jquery for the Website -->
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
 
<!-- Javascript to display Map -->
<script>
  function myMap() {
    var myCenter = new google.maps.LatLng(24.732577, 46.760968);
    var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    var marker = new google.maps.Marker({position:myCenter});
    marker.setMap(map);
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdOgJfcYhoEdhSBnL_r5u_zfw6jckJMzQ&callback=myMap"></script>
       
<!-- Javascript to change Webpage Language -->   
<script>
  function changeLang(){
    document.getElementById('form_lang').submit();
  }
</script>

<!-- Jquery to Highlight Current Active Page -->
<script type="text/javascript">

  $(document).ready(function () {

    if (window.location.href.indexOf('?') > -1) {
        history.pushState('', document.title, window.location.pathname);
    }
  
    // To remove default active class from the home page
    $('li.active').removeClass('active');
    $('a[href="' + location.pathname + '"]').closest('li').addClass('active'); 

    var url = window.location;
    // To highlight current active pages without dropdown menu
    $('ul.nav li a[href="' + this.location.pathname + '"]').parent().addClass('active');
 
    // To highlight current active pages with dropdown 
    $('ul.nav li a').filter(function () {
        return this.href == url;
    }).parent().addClass('active').parent().parent().addClass('active');

    $('ul.nav li.dropdown a').on('click', function(){
      $(this).css("background-color", "#428bca");
    });  

});

</script>

</body>
</html>
