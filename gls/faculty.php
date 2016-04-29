<?php include('admin_pane_c_panel/admin_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    
    <style>
        #top_container
        {   
            margin-top:65px !important;
        }
        .default_title
        {
            border-radius:21px;
        }
        .title
        {
            border-top-left-radius: 10px;
            border-top-right-radius: 20px;
            text-align: center;
        }
        .faculty-ico
        {
            font-size: 60px;
            background-color:#2e639e;
            height: 80px;
            width: 80px;
            text-align: center;
            line-height: 70px;
            border-radius: 80px;
        }
        .faculty-info
        {
            float: left;
        }
        .clearfix .faculty_back > img
        {
            height: 130px;
            width: 130px;
            margin-top:10px;
            margin-right: 10px;
            margin-left: 0px;     
        }
        .faculty_back
        {
            height: 150px;
            background-color: #195088 !important;   
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-bottom: 10px;
        }
        .faculty_back p
        {
            margin-top: 15px;
            margin-left: 50px;
            color: white;
            text-align: left;
            line-height: 15px;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    About us tab pane begins here-->
    <div class="container" id="top_container">
  <h2 class="text-primary"><blockquote>Faculty Members</blockquote></h2>
        <?php 
        $query = "select * from faculty";
        $result = $sql->query($query);
        while($row = mysqli_fetch_assoc($result))
        {
            ?>
            <div class="clearfix">
            <div class="faculty_back col-lg-6 col-md-8 col-sm-10 col-xs-12">
            <img src="<?php echo "admin_pane_c_panel/".$row['f_image'];?>" class="img-responsive img-thumbnail pull-left gap-right" />
            <p><span>Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> : <?php echo $row['f_name']?></p>
            <p><span>Specialization : </span> <?php echo $row['f_specialization']?></p>
            <p><span>Qualification &nbsp; : </span> <?php echo $row['f_qualification']?></p>
            <p><span>Experience &nbsp;&nbsp;&nbsp;&nbsp;: </span> <?php echo $row['f_experience']?></p>
            </div>
        </div>
        <?php
        }
        ?>
        <footer>
                    <?php include('footer.php');?>
        </footer>       
</div>
<!--    for the low resolution devices-->
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
</html>