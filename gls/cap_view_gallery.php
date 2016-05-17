<?php include('admin_pane_c_panel/admin_config.php'); ?>
<?php 
    $album_name = $_GET[g_name];
    $query_data = $sql->query("select * from gallery where g_name = '$album_name'");
    $query_row = mysqli_fetch_assoc($query_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php include('include_source_lib.php'); ?>
    <style>
        h2
        {
            margin-top: 90px;
            color: #195088;
            margin-bottom: 20px;
            text-align: center;
            font-family: 'Pacifico', cursive !important;
            text-decoration: underline;
        }
        #images
        {
            margin-top:-10px; 
/*            margin-left:15px; */ 
            margin-bottom:20px; 
            height:150px; 
/*            width:260px; */
            float:left; 
        }
        #popup{
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background-color: #195088;
            z-index: 9999;
            margin: 100px 100px;
            display: none;
        }
        #close{
            float: right;
            margin-right: -10px;
        }
        header.carousel {
            height: 80%;
            margin-top:-50px;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <div class="container">
    <?php include('gls_common_head_menu.php'); ?>
        <div id="popup" class="col-lg-10 col-md-10 popup">
                <div id="close" class="glyphicon glyphicon-remove close"></div>
            <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
                <?php
        $album_id = $_GET['g_name'];
        $query = $sql->query("SELECT * FROM gallery where g_name = '$album_id'" );
                $counter = 1;
        while($row = mysqli_fetch_assoc($query))
        {
            ?>
            <div class="item active">
                <div class="fill img-responsive" style="background-image: url(<?php echo "admin_pane_c_panel/".$row['g_images']; ?>);"></div>
                <div class="carousel-caption" id="back_head_gls_title">
                    <h2 style="color:#000"><?php echo $album_id; ?></h2>
                    <p style="text-align:center;"></p>
                </div>  
            </div>
            <?php
            $counter++;
        }
        ?>
                
            
                <?php
        $album_id = $_GET['g_name'];
        $query = $sql->query("SELECT * FROM gallery where g_name = '$album_id'" );
        while($row = mysqli_fetch_assoc($query))
        {
            ?>
            <div class="item">
                <div class="fill img-responsive" style="background-image: url(<?php echo "admin_pane_c_panel/".$row['g_images']; ?>);"></div>
                <div class="carousel-caption" id="back_head_gls_title">
                    <h2 style="color:#000"><?php echo $album_id; ?></h2>
                    <p style="text-align:center;"></p>
                </div>  
            </div>
            <?php
        }
        ?>
                
        </div>
        <!-- Controls -->
                <a class="right carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-next"></span>
        </a>
        <a class="left carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-prev"></span>
        </a>
        
    </header>
        </div>
        <?php
        
        $album_id = $_GET['g_name'];
        echo "<h2>".$album_id."</h2>";
        ?>
        <div class="well">
        <p class="text-primary"><?php echo $query_row['g_desc']; ?></p>
        </div>
        <?php
        $query = $sql->query("SELECT * FROM gallery where g_name = '$album_id'");
        while($row = mysqli_fetch_assoc($query))
        {
            ?>
        <img id="images" class="img-thumbnail col-lg-3 col-md-4 col-sm-6  col-xs-6 imgs" src="<?php echo "admin_pane_c_panel/".$row['g_images']; ?>" />
        <?php
        }
        ?>

        <footer>
                    <?php include('footer.php'); ?>
        </footer>

    </div>
    
    
    <!-- Bootstrap Core JavaScript -->
    
    <script>
        $(document).ready(function(){
            $(".imgs").click(function(){
                $(".popup").fadeIn();
            });
            $(".close").click(function(){
                $(".popup").fadeOut();
            });
        });
    $('.carousel').carousel({
        interval: 1000 //changes the speed
    });
    </script>
    
    <!-- Script to Activate the Carousel -->  
    </body>
</html>