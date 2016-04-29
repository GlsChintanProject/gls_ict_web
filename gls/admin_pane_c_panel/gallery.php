<?php include('admin_config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Welcome To GLS University, M.Sc. (IT)</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include('admin_header_menu.php'); ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            Event Gallery
                        </h1>
                    </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="col-lg-5">
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="album" style="margin-top:-10px">Album Name:</label>
                    <div class="col-lg-9">
                    <input type="text" class="form-control" id="album" placeholder="Create New Album" name="name_album">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="date" for="submit" style="margin-top:-10px">Create Album:</label>
                    <div class="col-lg-9">
                    <input type="submit" class="btn btn-primary" id="submit" value="Create New Album" name="create_album">
                    </div>
                    </div>
                </div>
                </form>
                    <?php 
                        if(isset($_REQUEST['create_album']))
                        {
                            $a_name = $_POST['name_album'];
                            $query = "INSERT INTO album (a_id,a_name) VALUES (NULL,'$a_name')";
                            $result = $sql->query($query);
                            header("location:upload_gallery.php");
                         }
                    ?>
                <div class="col-lg-7">
                    <table class="table table-bordered">
                        <tr>
                            <td>Album Name</td>
                            <td>Delete Album</td>
                        </tr>
                        <?php 
                        $query = "SELECT * FROM album";
                        $result = $sql->query($query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                        <tr>
                            <td><a href="upload_gallery.php"><?php echo $row['a_name']; ?></a></td>
                            <td><a class="btn btn-danger text-center" href="delete.php?a_name=<?php echo $row['a_name'];?>">Delete album</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                        
                    </table>
                </div>
                    
                        
                    </div>
                </div>
                <!-- /.row -->  
            </div>
            <!-- /.container-fluid -->ew 

        </div>
        <!-- /#page-wrapper -->

   
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>