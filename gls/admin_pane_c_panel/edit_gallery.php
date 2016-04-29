<?php include('admin_config.php'); ?>
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
                        <h1 class="page-header text-center">
                            Image Gallery Details
                        </h1>
                        
                        <div class="col-lg-10">
                            <table class="table table-bordered">
                                <tr class="text-center text-primary text-uppercase">
                                    <td>Image ID</td>
                                    <td>Image Album Name</td>
                                    <td>Image Album Date</td>
                                    <td>Image Album Description</td>
                                    <td>Album Image</td>
                                    <td>Action</td>
                                </tr>
                                
                                    <?php
                                        $query = $sql->query("select * from gallery");
                                        while($row = mysqli_fetch_assoc($query))
                                        {
                                    ?>
                                <tr>
                                    <td><?php echo $row['g_id']; ?></td>
                                    <td><?php echo $row['g_name']; ?></td>
                                    <td><?php echo $row['g_date']; ?></td>
                                    <td><?php echo $row['g_desc']; ?></td>
                                    <td><img src="<?php echo $row['g_images']; ?>" height="30" width="100" class="img img-responsive" /></td>
                                    <td><a href="delete.php?g_img=<?php echo $row['g_images']; ?>" class="btn btn-danger btn-sm">DELETE</a></td>
                                </tr>
                                    <?php
                                        }
                                    ?>
                                
                            </table>
                        </div>
                        <div class="col-lg-2">
                            <a href="upload_gallery.php" class="btn btn-primary">Back To Event Gallery</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script><small>Subheading</small>
</body>
</html>
