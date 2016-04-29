<?php include('admin_pane_c_panel/admin_config.php'); ?>
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
            margin-left:15px; 
            margin-bottom:20px; 
            height:200px; 
            width:350px; 
            float:left;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <div class="container">
    <?php include('gls_common_head_menu.php'); ?>
        <?php
        $album_id = $_GET['g_name'];
        echo "<h2>".$album_id."</h2>";
        $query = $sql->query("SELECT * FROM gallery where g_name = '$album_id'");
        while($row = mysqli_fetch_assoc($query))
        {
            ?>
        <img id="images" style="" class="fill img-responsive" src="<?php echo "admin_pane_c_panel/".$row['g_images']; ?>" >
        <?php
        }
        ?>
    
    </div>

                
           
        <!-- ontrols -->
        
   
	 <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->  
    </body>
</html>