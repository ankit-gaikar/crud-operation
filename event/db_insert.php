<?php
include_once('connection.php');

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
    $photo = "";
}

$query="insert into events(event_name,event_date,event_details,event_organizer,event_orga_email,event_address,event_photo)
values('$name','$date','$details','$organizer','$email','$address','$photo')";
if(mysqli_query($conn,$query))
{
    echo '<script type="text/javascript">';
    echo 'alert("record inserted succesfully");';
    echo 'window.location.href="admin.php";';
    echo '</script>';  
}
else{
    echo '<script type="text/javascript">';
        echo 'alert("failed to insert");';
        echo 'window.location.href="new_event.php";';
        echo '</script>';
}





?>