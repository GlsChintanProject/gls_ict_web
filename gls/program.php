<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>
    <body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    program tab pane begins here-->
    <div class="container" id="top_container">
  <h2 class="text-primary"><blockquote>Programme at GLS University</blockquote></h2>
  <ul class="nav nav-tabs">
    <li class="active col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#mscit">MSCIT</a></li>
    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#pgdca">PGDMA</a></li>
    <li class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a data-toggle="tab" href="#pgdma">PGDCA</a></li>
  </ul>
        <?php include('programme_info.php'); ?>
        <footer>
                    <?php include('footer.php');?>
        </footer>
</div>
<!--    <script src="js/jquery.js"></script>-->
    <!-- Bootstrap Core JavaScript -->
<!--    <script src="js/bootstrap.min.js"></script>-->
    <!-- Script to Activate the Carousel -->
<!--
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>        
-->
</body>