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
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css">
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
                        <div class="alert alert-success">Please upload <code>HORIZONTAL</code> photos only for best view !</div>
                    </div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="col-lg-9">
                    <div class="form-group dropdown">
                    <label class="control-label col-lg-3" for="album" style="margin-top:-10px">Album Name:</label>
                    <div class="col-lg-9">
                    <select name="al_name" class="form-control">
                        <option>--SELECT ALBUM NAME</option>    
                        <?php 
                        $query = "SELECT * from album";
                        $result = $sql->query($query);
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                        <option value="<?php echo $row['a_name']; ?>"><?php echo $row['a_name']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="album" style="">Album Date:</label>
                    <div class="col-lg-9">
                    <input type="text" class="form-control" id="datepicker" placeholder="Select Event Date" name="date_album">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="album" style="margin-top:-10px;">Album Description:</label>
                    <div class="col-lg-9">
                    <input type="text" class="form-control datepicker" id="datepicker" placeholder="Enter Event Description" name="desc_album">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="file_upload">Select Images:</label>
                    <div class="col-lg-9">
                    <input type="file" class="form-control" name="file_upload[]" multiple>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-lg-3" for="date" for="submit" style="margin-top:-10px">Create Album:</label>
                    <div class="col-lg-9">
                    <input type="submit" class="btn btn-primary" id="submit" value="Create New Album" name="create_album">
                    </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <a href="edit_gallery.php" class="btn btn-success">View In Details</a>
                </div>
                </form>
                    <?php
                    if(isset($_REQUEST['create_album']))
                    {
                         $album_name = $_POST['al_name'];
                         	$album_date = $_POST['date_album'];
                         $album_description = mysql_real_escape_string($_POST['desc_album']);
                        $dir = "img_faculty/";
                            foreach($_FILES['file_upload']['name'] as $key => $value)
                            {
                                 $tmp_name  = $_FILES['file_upload']['tmp_name'][$key];
                                 $full_path = $dir.$_FILES['file_upload']['name'][$key];
                                $qu = $sql->query("INSERT INTO gallery (g_name, g_date, g_desc, g_images) VALUES ('$album_name','$album_date','$album_description','$full_path')");
				if($qu)
{
$move = move_uploaded_file($tmp_name,$full_path);
}
else
{
echo 0;
}
                                
                            }
                    }
                    ?>
                </div>
                    
                        
                    </div>
                </div>
                <!-- /.row -->  
            </div>
            <!-- /.container-fluid -->

       
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script>
  $(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
  });
  </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    

</body>

</html>