<?php

// Add Language file
require 'language.php';

session_start();

// Set Language variable
if(isset($_GET['lang']) && !empty($_GET['lang'])){
  $_SESSION['lang'] = $_GET['lang'];

  if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
    echo "<script type='text/javascript'> location.reload(); </script>";
  }
}

$lang = 0;
$textdir = '';

// Include Language Translation and Direction
if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){
    $lang = 1;
    $textdir = 'rtl';
}else{
    $lang = 0;
    $textdir = 'ltr';
}
?>

<!DOCTYPE html>
<html lang="en" dir="<?php echo $textdir;?>">

  <head>  <!-- Head Section Starts -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php echo $title[$lang] ?> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php if($textdir == 'rtl') { ?>

    <!-- Styles for Right to Left Layout -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/rtl-main.css" />
    <link rel="stylesheet" type="text/css" href="css/boot-rtl/3.3.7/bootstrap.rtl.min.css">
    <link rel='stylesheet' id='bootstrap-rtl-css' href='css/boot-rtl/3.3.7/bootstrap.rtl.full.min.css?ver=3.3.7.3' type='text/css' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <script src="https://cdn.rtlcss.com/mdl/1.2.1/material.min.js"
            integrity="sha384-Llr4wcq+yhgKO4ZQRN7Sx88cvQneoOOxcysisJKroD8nKQA7y0NyriabEaMYsvWW"
            crossorigin="anonymous">
    </script>

    <?php } else { ?>
    
    <!-- Styles for Left to Right Layout -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />  
    <?php }?>
    
  </head> <!-- Head Section Ends -->

  <body>

    <nav class="navbar navbar-default"> <!-- Navigation Bar Starts -->

      <div class="row row-header"> <!-- Language Selection Strip -->
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right"  style="border-bottom: 1px solid lightgray;"> <!-- container for Top Header strip -->
          <span class="col-xs-8 col-sm-8 col-md-6 col-lg-6 contact-header">
            <span class="fas fa-phone hidden-xs hidden-sm span-styled1"><span class="span-styled2">00966571883608</span></span>
            <span class="fas fa-envelope"><span class="span-styled2">info@aljaziraksa.com</span></span>
          </span>

          <span class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contact-header text-center hidden-sm hidden-xs">
            <span class="fab fa-facebook fab-header" style="color: darkblue!important;"></span>
            <span class="fab fa-twitter fab-header"></span>
            <span class="fab fa-whatsapp fab-header"></span>
          </span>

          <span class="col-xs-4 col-sm-4 col-md-2 col-lg-2 text-center">  <!-- container for Language Selector  -->
            <form method='get' action='' class="form-modified" id='form_lang'>
              <select name='lang' onchange='changeLang();' >
                <option value='en' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){ echo "selected"; } ?> >English</option>
                <option value='ar' <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'ar'){ echo "selected"; } ?> > عربى  </option>
              </select>
            </form>
          </span>  <!-- container for Language Selector Ends  -->
        </div>  <!-- Container for Top Header Strip Ends -->
      </div>  <!-- Language Selection Strip container Ends -->

      <div class="col-xs-8 col-sm-8 col-md-2 col-lg-2">  <!-- Website Logo Container -->
        <a href="index.php"><img class="img-responsive logo-image" src="images/jazz-logo3.png" alt="logo"></a>
      </div>

      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 site-heading-lg-pos hidden-xs hidden-sm">  <!-- Website Title -->
        <h5 class="site-heading-lg"> <?php echo $nav_heading[$lang] ?> </h5>
      </div>   

      <!-- Navbar sandwich type toggle button -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">  <!-- Navbar Menu Items Container Starts -->

        <div class="collapse navbar-collapse navbar-right" id="myNavbar">   <!-- Navbar  -->
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php" class="nav-link"> <?php echo $home[$lang]; ?> </a></li>  <!-- Home -->

            <li class="dropdown"> <!-- About -->
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $about[$lang]; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="company_profile.php"> <?php echo $com_pro[$lang]; ?> </a></li>
                  <li><a href="president_message.php"> <?php echo $prez[$lang]; ?> </a></li>
                  <li><a href="management.php"> <?php echo $management[$lang]; ?> </a></li>
                  <li><a href="quality_policy.php"> <?php echo $quality_policy[$lang]; ?> </a></li>
                </ul>
            </li>

            <li class="dropdown">  <!-- Services -->
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $services[$lang]; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="o&m_services.php" class="nav-link"> <?php echo $operation[$lang]; ?> </a></li>
                  <li><a href="man_out.php" class="nav-link"> <?php echo $outsourcing[$lang]; ?> </a></li>
                  <li><a href="cleaning-services.php" class="nav-link"> <?php echo $cleaning[$lang]; ?> </a></li>
                </ul>
            </li>

            <li class="dropdown">  <!-- Projects -->
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $projects[$lang]; ?> <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="project_on.php"> <?php echo $projects_on[$lang]; ?> </a></li>
                  <li><a href="project_com.php"> <?php echo $projects_com[$lang]; ?> </a></li>
                </ul>
            </li>

            <li><a href="clients.php" class="nav-link"> <?php echo $clients[$lang]; ?> </a></li>  <!-- Clients -->
            <li><a href="career.php" class="nav-link"> <?php echo $career[$lang]; ?> </a></li>    <!-- Career -->
            <li><a href="contact.php" class="nav-link"> <?php echo $contact[$lang]; ?> </a></li>  <!-- Contact -->
          </ul>
        </div>  <!-- Navbar Ends -->
      </div> <!-- Navbar Menu Items Container Ends -->
    </nav> <!-- Navigation Bar Ends -->