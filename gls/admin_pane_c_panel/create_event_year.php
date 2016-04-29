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
                            Special Lectures
                        </h1>
                        <div class="col-lg-5">
                            <form class="form-horizontal" method="post">
                                <div class="form-group">
                                <label class="col-lg-3 control-label" for="year">Enter Event Name :</label>
                                <div class="col-lg-9">
                                <select name="select_year" class="form-control">
                                    <?php
                                    $current_year = date('Y');
                                    $current_year2 = date('Y');
                                    $min_year = 13;
                                    for($i=0; $i<$min_year; $i++)
                                    {
                                        $temp = $current_year;
                                        $temp2 = $current_year2;
                                    ?>
                                    <option value="<?php echo --$current_year2; ?>-<?php echo $temp2; ?>"><?php echo --$current_year; ?>-<?php echo $temp; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-lg-3 control-label" for="year">Enter Event Name :</label>
                                <div class="col-lg-9">
                                <input type="text" class="form-control" name="e_title" placeholder="Enter event Title">
                                </div>
                                </div>
                                <div class="form-group">
                                <label class="col-lg-3 control-label" for="submit">Create Event Year :</label>
                                <div class="col-lg-9">
                                <button type="submit" name="submit_event" class="btn btn-primary">Create New Event</button>
                                </div>
                                </div>
                                
                            </form>
                            <?php
                                if(isset($_POST['submit_event']))
                                {
                                    $year = $_POST['select_year'];
                                    $title = $_POST['e_title'];
                                    $time = strtotime("now");
                                    $query = "INSERT INTO event_year (event_year, event_title, event_timestamp) values ('$year','$title','$time')";
                                    $sql->query($query);
                                    echo "<script type='text/javascript'>window.location.href = 'create_event_year.php';</script>";
                                }
                            ?>
                        </div>
                        <div class="col-lg-7">
                            <table class="table table-bordered">
                                <tr class="text-center text-uppercase">
                                    <td>#</td>
                                    <td>Event Year</td>
                                    <td>Event Title</td>
                                    <td>Update</td>
                                    <td>Delete</td>
                                </tr>
                                <?php
                                $query = $sql->query("select * from event_year");
                                while($row = mysqli_fetch_assoc($query))
                                {
                                ?>
                                <tr>
                                    <td class="text-danger text-center"><?php echo $row['event_id']; ?></td>
                                    <td class="text-warning text-center"><?php echo $row['event_year']; ?></td>
                                    <td class="text-info text-center"><?php echo $row['event_title']; ?></td>
                                    <td class="text-info text-center"><a href="update_event.php?event_id=<?php echo $row['event_id']; ?>" class="btn btn-success btn-sm">Update</a></td>
                                    <td class="text-center"><a href="delete.php?event_id=<?php echo $row['event_id']; ?>" class="btn btn-danger btn-sm">Delete</a></td>
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
    <script src="js/bootstrap.min.js"></script><small>Subheading</small>
</body>
</html>
