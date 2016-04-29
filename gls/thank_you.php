<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <style>
    #back_to
        {
            color: white;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    About us tab pane begins here-->
    <div class="container" id="top_container">
  <h2 class="text-primary"><blockquote>Thank you for contacting us.</blockquote></h2>
  <h2 class="text-primary"><blockquote></blockquote></h2>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="panel panel-default" style="border-radius:21px;">
                <div class="panel-heading" style="border-radius:20px; text-align:center;">
                    <a href="/chintan_tuts/gls/home.php" id="back_to">Back to Homepage</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6">
            <div class="panel panel-default" style="border-radius:21px;">
                <div class="panel-heading" style="border-radius:20px; text-align:center;">
                    <a href="" id="back_to">Visit Our Campus Gallery</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--    for the low resolution devices-->
    <?php include('low_resolution_collapse_menu.php');?>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>        
</body>