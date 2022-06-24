<?php
include_once('connection.php');
$id=$_POST['id'];
$name=$_POST['event_name'];
$date=$_POST['event_date'];
$address=$_POST['event_address'];
$organizer=$_POST['event_organizer'];
$email=$_POST['event_orga_email'];
$details=$_POST['event_details'];

if($_FILES['event_photo']['error'] == 0){
    
    $path = "image/";
    $file_name = $_FILES['event_photo']['name'];
    $file_tmp = $_FILES['event_photo']['tmp_name'];
    //$file_ext = strtolower(end(explode('.',$file_name)));

    if(move_uploaded_file($file_tmp,$path.$file_name)){
        $photo = $path.$file_name;
    }
    else{
        echo "Fail to upload photo";
        
    }    
}
else{
    $photo = $_POST['old_photo'];
}

$query="update events SET event_name='$name',event_date='$date',event_details='$details',event_organizer='$organizer',event_orga_email='$email',event_address='$address',event_photo='$photo' where id='$id'";

if(mysqli_query($conn,$query))
{
    echo '<script type="text/javascript">';
    echo 'alert("Record Updated Succesfully");';
    echo 'window.location.href="admin.php";';
    echo '</script>';  
}
else{
    echo '<script type="text/javascript">';
    echo 'alert("Failed to Update");';
    echo 'window.location.href="edit_event.php";';
    echo '</script>';
}





?>