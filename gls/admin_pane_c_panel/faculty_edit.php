<?php

include('admin_config.php'); 
$f_id = $_REQUEST['f_id'];
$qu = $sql->query("select * from faculty where f_id = $f_id");
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
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group dropdown">
                            <label class="control-label col-lg-3" for="link_type">Faculty Name:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="link_type" placeholder="Enter Faculty Name" name="f_name_u" value="<?php echo $row['f_name']; ?>">
                            </div>
                            </div>  
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="">Specialization:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty specialization" name="f_specialization" value="<?php echo $row['f_specialization']; ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3 text-left" for="">Qualification:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty Qualification" name="f_qualification_u" value="<?php echo $row['f_qualification']; ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="">Experience:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty Experience" name="f_experience_u" value="<?php echo $row['f_experience']; ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="link">Faculty Image:</label>
                            <div class="col-lg-9">
                            <input type="file" class="form-control" id="link" name="f_img_u" value="<?php echo $row['f_image']; ?>">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="col-lg-3 control-label" style="margin-right:15px;">Submit Details:</label>
                            <button type="submit" name="submit_profile" class="btn btn-primary">Update Faculty Profile</button>
                            </div>
                        </form>
                        <?php
                        if(isset($_REQUEST['submit_profile']))
                        {
                            $name = $_REQUEST['f_name_u'];
                            $specialization = $_REQUEST['f_specialization'];
                            $qualification = $_REQUEST['f_qualification_u'];
                            $experience = $_REQUEST['f_experience_u'];
                            $f_img_name = $_FILES['f_img_u']['name'];
                            $update_img = "";
                            if($f_img_name == "")
                            {
                                $update_img = $row['f_image'];
                            }
                            else
                            {
                                $update_img = "img_faculty/".$f_img_name;
                                $f_tmp_name = $_FILES['f_img_u']['tmp_name'];
                                $store = "img_faculty/".$f_img_name;
                                $move = move_uploaded_file($f_tmp_name,$store);
                                unlink($row['f_image']);
                            }
                            
                            $query = "update faculty set f_name = '$name' , f_specialization='$specialization' , f_qualification='$qualification' , f_experience = '$experience' , f_image = '$update_img' where f_id= $f_id";
                            $sql->query($query);
                            echo "<script type='text/javascript'>window.location.href = 'faculty.php';</script>";
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