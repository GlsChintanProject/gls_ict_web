<?php 
include('admin_config.php');
?>
<?php
if(isset($_GET['id']))
{
$id=$_GET['id'];
$sql->query("delete from new_announcement where n_id='$id'");
header("location:news_and_announcement.php");
}
?>
<?php
    if(isset($_GET['f_id']))
    {
        $f_id = $_GET['f_id'];
        $sql->query("delete from faculty where f_id='$f_id'");
        header("location:faculty.php");
    }
?>
<?php
    if(isset($_GET['a_name']))
    {
        $a_name = $_GET['a_name'];
        $result = $sql->query("DELETE FROM album where a_name='$a_name'");
        if($result == 1)
        {
            $query = $sql->query("select * from gallery");
            while($row = mysqli_fetch_assoc($query))
            {
                $sql->query("DELETE FROM gallery where g_name='$a_name'");
                unlink($row['g_images']);
            } 
            header("location:gallery.php");
        }
        
    }
?>
<?php 
    if(isset($_GET['event_id']))
    {
        $e_id = $_GET['event_id'];
        $result = $sql->query("delete from event_year where event_id = '$e_id'");
        header("location:create_event_year.php");
    }
?>
<?php 
    if(isset($_GET['g_img']))
    {
        $g_img = $_GET['g_img'];
        $results = $sql->query("delete from gallery where g_images='$g_img'");
        if($results == 1)
        {
            $query = $sql->query("select * from gallery");
            $row = mysqli_fetch_assoc($query);
            $query1 = $sql->query("select * from gallery where g_images='$g_img'");
            unlink($row['g_images']);
            header("location:edit_gallery.php");
        }
    }
?>