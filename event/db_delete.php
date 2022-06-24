<?php
include_once('connection.php');
$id=$_GET['id'];
$query="delete from events where id='$id'";
if(mysqli_query($conn,$query))
{
    echo '<script type="text/javascript">';
        echo 'alert("Record deleted succesfully");';
        echo 'window.location.href="admin.php";';
        echo '</script>';
}
else{
    echo '<script type="text/javascript">';
        echo 'alert("Failed to delete");';
        echo 'window.location.href="admin.php";';
        echo '</script>';
}




?>