<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/about.css">
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    About us tab pane begins here-->
    <div class="container" id="top_container">
  <h2 class="text-primary"><blockquote>STUDENT ENQUIRY FORM</blockquote></h2>
        <script type="text/javascript">var submitted=false;</script>
<iframe name="hidden_iframe" id="hidden_iframe"
style="display:none;" onload="if(submitted)
{window.location='/chintan_tuts/gls/thank_you.php';}"></iframe>
<form role="form" class="form-horizontal" id="inquiry_form" action="https://docs.google.com/forms/d/1yBDvGhpVXVkud5CzeOPG1o2w1-dMECUtofB-hXkgpko/formResponse" method="post"
target="hidden_iframe" onsubmit="submitted=true;">
<!--        <form role="form" class="form-horizontal" id="inquiry_form" action="https://docs.google.com/forms/d/1yBDvGhpVXVkud5CzeOPG1o2w1-dMECUtofB-hXkgpko/formResponse" method="POST">-->
            <div class="form-group">
            <label class="col-sm-2 control-label">First Name:</label>
            <div class="col-lg-4">
            <input type="text" id="fname" class="form-control" name="entry.822092078" data-toggle="tooltip" data-placement="top" title="Enter your First Name" required>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Last Name:</label>
            <div class="col-lg-4">
            <input type="text" id="fname" class="form-control" name="entry.1754828219" data-toggle="tooltip" data-placement="top" title="Enter your Last Name" required>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Mobile Number:</label>
            <div class="col-lg-4">
            <input type="tel" id="fname" class="form-control" name="entry.594975203" data-toggle="tooltip" data-placement="top" title="Enter your 10 digit Mobile Number" required pattern="[789][0-9]{9}">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Email ID:</label>
            <div class="col-lg-4">
            <input type="text" id="fname" class="form-control" name="entry.2130145733" data-toggle="tooltip" data-placement="top" title="Example : username@mail.com" required pattern="^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$">
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">City:</label>
            <div class="col-lg-4">
            <input type="text" id="fname" class="form-control" name="entry.1134084694" data-toggle="tooltip" data-placement="top" title="Enter Your City" required>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Qualification:</label>
            <div class="col-lg-4">
            <select class="form-control" name="entry.436565695" required>
                <option value="">--Select Qualification--</option>
                <option value="BCA">BCA</option>
                <option value="BSCIT">BSCIT</option> 
                <option value="BSCCS">BSCCS</option> 
                <option value="PGDCA">PGDCA</option>
                <option value="OTHER">OTHER</option>
            </select>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Percentage/ CGPA :</label>
            <div class="col-lg-4">
            <input type="text" id="fname" class="form-control" name="entry.73307964" data-toggle="tooltip" data-placement="top" title="Enter your CGPA/Percentage" required><span class="text-danger">(If result not declared 
kindly enter aggregate Percentage/ CGPA
till previous semester.)</span>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Courses Interested In:</label>
            <div class="col-lg-4">
                <input type="radio" name="entry.1914515504" value="M.Sc(IT)"><span>M.Sc(IT)</span>
                <input type="radio" name="entry.1914515504" value="PGDCA"><span>PGDCA</span>
                <input type="radio" name="entry.1914515504" value="PGDMA"><span>PGDMA</span>
            </div>
            </div>
            <div class="form-group">
            <label class="col-sm-2 control-label">Submit Your Details:</label>
            <div class="col-lg-4">
            <input type="submit" class="btn btn-success btn-md" value="Submit Form">
            <input type="submit" class="btn btn-danger btn-md" value="Reset Form">
            </div>
            </div>
        </form>  
        
</div>
<!--    for the low resolution devices-->
    <?php include('low_resolution_collapse_menu.php');?>
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
    function myFunction()
        {
            document.getElementById("inquiry_form").reset();
        }
});
    </script>        
</body>