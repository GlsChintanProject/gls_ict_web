<?php include('admin_pane_c_panel/admin_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <style>
        h2
        {
            margin-top: 90px !important;
            font-family: 'Pacifico', cursive;
            text-decoration: underline;
        }
        .main_head
        {
            font-size: 30px;
            color: #195088;
        }
        blockquote
        {
            clear: both;
            color: #195088;
            font-family: 'Pacifico', cursive;
            text-decoration: underline;
        }
        #images{
            opacity: 0.5;
        }
        #images:hover
        {
            cursor: pointer;
            transform: scale(1.5);
            transition: 2s;
            opacity: 1.0;
        }
        #view_more
        {
            height: 100px;
            width: 151px;
            background-color: lightgray;
            float: left;
            margin-top: -10px;
            margin-left: 1px;
            margin-bottom: 20px;
            text-align: center;
            line-height: 100px;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <div class="container" id="top_container">
  <h2 class="text-primary text-center"><blockquote class="main_head">Event Gallery</blockquote></h2>
        
        <?php
            $query = "select * from gallery group by g_name order by g_name desc";
            $result = $sql->query($query);
            while($row = mysqli_fetch_assoc($result))
            {
                $album_id = $row['g_id'];
                $album_name  = $row['g_name'];
                echo "<blockquote>".$album_name."</blockquote>"; 
        ?>
            <?php 
                $query1 = $sql->query("select * from gallery where g_name = '$album_name' LIMIT 7");
                while($row1 = mysqli_fetch_assoc($query1))
                {
            ?>
            <img id="images" style="margin-top:-10px; margin-left:1px; margin-bottom:20px; height:100px; width:151px; float:left;" class="img-responsive" src="<?php echo "/admin_pane_c_panel/".$row1['g_images']; ?>" >
        <?php
               }
        ?>
        <div id="view_more">
            <a href="cap_view_gallery.php?g_name=<?php echo $row['g_name']; ?>">+View-More Images</a>
        </div>
        <?php
            }
        ?>   
    </div>
    <div class="container">
    <?php include('footer.php');?>
    </div>
    </body>
</html>