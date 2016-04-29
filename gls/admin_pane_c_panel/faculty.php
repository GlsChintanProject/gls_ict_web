<?php include('admin_config.php');?>
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
                            Faculty
                        </h1>
                        <div class="col-lg-5">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group dropdown">
                            <label class="control-label col-lg-3" for="link_type">Faculty Name:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="link_type" placeholder="Enter Faculty Name" name="f_name">
                            </div>
                            </div>  
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="">Specialization:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty specialization" name="f_specialization">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3 text-left" for="">Qualification:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty Qualification" name="f_qualification">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="">Experience:</label>
                            <div class="col-lg-9">
                            <input type="text" class="form-control" id="" placeholder="Enter Faculty Experience" name="f_experience">
                            </div>
                            </div>
                            <div class="form-group">
                            <label class="control-label col-lg-3" for="link">Faculty Image:</label>
                            <div class="col-lg-9">
                            <input type="file" class="form-control" id="link" name="f_img">
                            </div>
                            </div>

                            <div class="form-group">
                            <label class="col-lg-3 control-label" style="margin-right:15px;">Submit Details:</label>
                            <button type="submit" name="submit_profile" class="btn btn-primary">Create Faculty Profile</button>
                            </div>
                        </form>
                            <?php 
                            if(isset($_POST['submit_profile']))
                            {
                                $f_name = $_POST['f_name'];
                                $f_specialization = $_POST['f_specialization'];
                                $f_qualification = $_POST['f_qualification'];
                                $f_experience = $_POST['f_experience'];
                                $f_img_name = $_FILES['f_img']['name'];
                                $f_tmp_name = $_FILES['f_img']['tmp_name'];
                                $store = "img_faculty/".$f_img_name;
                                $move = move_uploaded_file($f_tmp_name,$store);
                                $query = "INSERT INTO faculty (f_name,f_specialization,f_qualification,f_experience,f_image) VALUES ('$f_name','$f_specialization','$f_qualification','$f_experience','$store')";
                                $sql->query($query);
                                echo "<script type='text/javascript'>window.location.href = 'faculty.php';</script>";
                            }
                            ?>
                        </div>
                        <div class="col-lg-7">
                            <table class="table table-bordered">
                                <tr>
                                    <td>Faculty Name</td>
                                    <td>Faculty Specialization</td>
                                    <td>Faculty Qualification</td>
                                    <td>Faculty Experience</td>
                                    <td>Faculty Image</td>
                                    <td>Edit</td>
                                    <td>Delete</td>
                                </tr>
                               <?php 
                            $query = "SELECT * from faculty";
                            $result = $sql->query($query);
                        
                            while($row = mysqli_fetch_assoc($result))
                            {
                                ?>
    <tr>
        <td><?php echo $row['f_name']; ?></td>
        <td><?php echo $row['f_specialization']; ?></td>
        <td><?php echo $row['f_qualification']; ?></td>
        <td><?php echo $row['f_experience']; ?></td>
        <td><?php echo $row['f_image']; ?></td>
        <td class="text-center"><a class="btn-sm btn-primary" href="faculty_edit.php?f_id=<?php echo $row['f_id'];?>">EDIT</a></td>
        <td class="text-center"><a class="btn-sm btn-danger" href="delete.php?f_id=<?php echo $row['f_id'];?>">DELETE</a></td>
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
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
