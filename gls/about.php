<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    About us tab pane begins here-->
    <div class="container" id="top_container">
  <h2>Welcome To GLS University, M.Sc. (IT)</h2>
  <ul class="nav nav-tabs">
    <li class="active col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#gls">Gujarat Law Society</a></li>
    <li class="col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#the_inst">The Institute</a></li>
    <li class="col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#msg_center">Message Center</a></li>
    <li class="col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#library_facility">Library Facility</a></li>
    <li class="col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#computing_facility">Computing Facility</a></li> 
    <li class="col-lg-2 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#other_resources">Other Resources</a></li>
  </ul>
  <?php include('gls_about_info.php'); ?>
        <footer>
                    <?php include('footer.php');?>
        </footer>
</div>
<!--    for the low resolution devices-->
<!--    <?php include('low_resolution_collapse_menu.php');?>-->
    <!--<script src="js/jquery.js"></script>
     Bootstrap Core JavaScript 
    <script src="js/bootstrap.min.js"></script>-->
    <!-- Script to Activate the Carousel -->
<!--
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>        
-->
    
</body>
</html>