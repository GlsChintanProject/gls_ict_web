<?php

include('admin_config.php'); 
$id = $_REQUEST['id'];
$qu = $sql->query("select * from new_announcement where n_id = $id");
$row = mysqli_fetch_assoc($qu);


?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <?php include('admin_header_menu.php'); ?>
        <!-- Navigation -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <div class="col-lg-5">
<form class="form-horizontal" method="post">
                            <div class="form-group">
                            <label class="control-label col-lg-2" for="link">Link URL:</label>
                            <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $row['n_link']; ?>" id="link" placeholder="Enter Link URL" name="new_link">
                            </div>
                            </div>
                            <div class="form-group dropdown">
                            <label class="control-label col-sm-2" for="link_type">Link type:</label>
                            <div class="col-lg-10">
                                
                                <?php
                                if($row['n_link_type'] == "_self")
                                {
                                ?>
                                <select class="form-control" name="link_type">
                                  <option value="_self">Internal</option>
                                  <option value="_blank">External</option>
                                </select>
                                <?php
                                }
                                else
                                {
                                    ?>
                                <select class="form-control" name="link_type">
                                    <option value="_blank">External</option>
                                  <option value="_self">Internal</option>
                                </select>
                                
                                <?php
                                }
                                ?>
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-2" for="link">News Title:</label>
                            <div class="col-lg-10">
                            <input type="text" class="form-control" value="<?php echo $row['n_title']; ?>" id="link" placeholder="Enter News title" name="title">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-lg-2 control-label" style="margin-right:15px;">Submit Your Details:</label>
                            <button type="submit" name="submit_news" class="btn btn-primary">Update News</button>
                            </div>
                        </form>
                        <?php
                        if(isset($_REQUEST['submit_news']))
                        {
                            $link = $_REQUEST['new_link'];
                            $link_type = $_REQUEST['link_type'];
                            $title = $_REQUEST['title'];
                            $query = "update new_announcement set n_link = '$link' , n_link_type='$link_type' , n_title='$title' where n_id= $id";
                            $sql->query($query);
                            echo "<script type='text/javascript'>window.location.href = 'news_and_announcement.php';</script>";
                        }
                        ?>
                            </div>
                    </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
