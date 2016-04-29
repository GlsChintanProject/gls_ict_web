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
  <h2>Placement at GLS University, M.Sc. (IT)</h2>
  <ul class="nav nav-tabs" style="margin-bottom:30px;">
    <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#pla_pro">Placement Process</a></li>
    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#cor_par">Corporate Participation</a></li>
    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#rec_sce">Recruitment Scenario</a></li>
  </ul>
  <?php include('placement_info.php'); ?>
        <footer>
                    <?php include('footer.php');?>
        </footer>
</div>
    
<!--    for the low resolution devices-->
    <?php include('low_resolution_collapse_menu.php');?>     
</body>
</html>