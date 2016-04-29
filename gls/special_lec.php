<?php include('admin_pane_c_panel/admin_config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('include_source_lib.php'); ?>
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <style>
        .table-hover
        {
            color: black;
        }
    </style>
</head>
<body style="overflow-x:hidden;">
    <!-- Navigation -->
    <?php include('gls_common_head_menu.php'); ?>
    <!--    About us tab pane begins here-->
    <div class="container" id="top_container">
  <h2 class="text-primary">Special Lectures</h2>
        <table class="table table-hover" style="margin-top:0;">
          
    <?php
        $query = "select * from event_year group by event_year order by event_year desc";   
        $result = $sql->query($query);
//        print_r($row);
        while($row = mysqli_fetch_assoc($result))
        {
            $date = $row['event_year'];
            echo "<tr>";
            echo "<td>Distinguished Guest Speakers ".$date."</td>";
            echo "</tr>";
        ?>
        <?php 
            $q = $sql->query("select * from event_year where event_year = '$date'");
            while($row2 = mysqli_fetch_assoc($q))
            { 
                ?>
                        <tr>
                        <td class="text-primary"><span class="glyphicon glyphicon-bullhorn text-info"></span> <?php echo $row2['event_title']; ?></td>
                        </tr>
                <?php
            }
        echo "<br>";
        }
        ?>
               
        </table>
        <footer>
                    <?php include('footer.php');?>
        </footer>
</div>
<!--    for the low resolution devices-->
    <?php include('low_resolution_collapse_menu.php');?>
        
</body>
</html>