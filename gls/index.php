<?php include('admin_pane_c_panel/admin_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
</head>
<body style="overflow-x:hidden;">
    <?php include('gls_common_head_menu.php'); ?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill img-responsive" style="background-image:url(img/11.jpg);"></div>
                <div class="carousel-caption" id="back_head_gls_title">
                    <h2 style="color:#000">GLS at Glance......</h2>
                    <p style="text-align:center;">An exclusive environment for Information Technology</p>
                </div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url(img/13.jpg);"></div>
                <div class="carousel-caption" id="back_head_gls_title">
                    <h2 style="color:#000">GLS at Glance......</h2>
                    <p style="text-align:center;">An exclusive environment for Information Technology</p>
                </div>
            </div>
            <div class="item">
                <div class="fill img-responsive" style="background-image:url(img/SliderImage9.jpg);"></div>
                <div class="carousel-caption" id="back_head_gls_title">
                    <h2 style="color:#000">GLS at Glance......</h2>
                    <p style="text-align:center;">An exclusive environment for Information Technology</p>
                </div>
            </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    <!-- Page Content -->
    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row" >
            <div class="col-lg-12" style="left:-500px;" id="title1">
                <h1 class="page-header text-primary">
                    Welcome To GLS University, M.Sc. (IT)
                </h1>
            </div>
            <div class="col-md-4" style="left:1500px;" id="vision">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-education"></span> Admission 2016</h4>
                    </div>
                    <div class="panel-body" >
                        <p><a href=""><span class="glyphicon glyphicon-education"></span> Admission for M.Sc(IT).</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-education"></span> Admission for PGDCA.</a></p>
                        <p><a href=""><span class="glyphicon glyphicon-education"></span> Admission for PGDMA.</a></p>
                        <a href="/chintan_tuts/gls/registration.php" class="btn btn-default" style="margin-left:0px;">Register For Admission</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="left:1000px;" id="mission">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><span class="glyphicon glyphicon-bullhorn"></span> News &amp; Announcement</h4>
                    </div>
                    <div class="panel-body">
                        <marquee direction="up" height="200px" scrollamount="2" behavior="scroll" onmouseover="this.stop();" onmouseout="this.start();">
                        <?php 
                            $query = "SELECT * from new_announcement LIMIT 10";
                            $result = $sql->query($query);
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
                            <span class="glyphicon glyphicon-bullhorn text-primary"></span> <a href="<?php echo $row['n_link'];?>" target="<?php echo $row['n_link_type'];?>"><?php echo $row['n_title']."<br>"; ?></a>
                            <?php     
                                }   
                            ?>
                    </marquee>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="left:500px" id="located">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-map-marker"></i> Located us</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-info"><span class="glyphicon glyphicon-education"></span> Head of The Department,<br>
<span class="glyphicon glyphicon-map-marker"></span> M.Sc. (IT), GLS University<br>
GLS Campus, Opposite Law Garden,<br>
Ellisbridge, Ahmedabad <code>380 006</code>,<br>
Gujarat,India.<br>
<span class="glyphicon glyphicon-phone-alt"></span> Telephone:<code>+91(79)26447636,<br>+91(79)26447638</code><br>
<span class="glyphicon glyphicon-print"></span> Fax:<code>+91(79)26447658</code><br>
<span class="glyphicon glyphicon-envelope"></span> Mail at : <code>placement@gls.ac.in</code></p>
                        <a href="/chintan_tuts/gls/contact.php" class="btn btn-default" style="margin-left:0px;">For more Details</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- Footer -->
        <footer>
                    <?php include('footer.php');?>
        </footer>
    </div>
    <!-- /.container -->
    <!-- jQuery -->


    <!-- Bootstrap Core JavaScript -->
  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>
