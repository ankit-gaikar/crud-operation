<!DOCTYPE html>
<html>
    <head>
       <?php
         include_once('admin_header.php');
         include_once('connection.php');
       ?>
    </head>
<body>
    <?php
     $id=$_GET['id'];
     $query="select * from events where id='$id'";
     $result=(mysqli_query($conn,$query));
     while($row=mysqli_fetch_array($result))
     {
         $id=$row['id']; 
         $name=$row['event_name'];
         $date=$row['event_date'];
         $details=$row['event_details'];
         $organizer=$row['event_organizer'];
         $email=$row['event_orga_email'];
         $address=$row['event_address'];
         $photo=$row['event_photo'];
    
     }
    ?>
    <div class="container">
        <h2 align="center">UPDATE EVENTS</h2><br>
        <form class="form-horizontal" action="db_update.php" method="POST" enctype="multipart/form-data" style="border:1px solid #000;padding:10px;">
             <input type="hidden" name="id" value="<?= $id;?>">
             <input type="hidden" name="old_photo" value="<?= $photo; ?>">
             <div class="form-group">
                <label class="control-label col-sm-2">Event Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Event Name" required name="event_name" value="<?= $name;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" value="<?= $date;?>" required name="event_date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                <textarea class="form-control" placeholder="Enter Event Address" required name="event_address"><?= $address;?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Organized By</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Name of Organizer" required name="event_organizer" value="<?= $organizer;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Organizer's E-mail</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="Enter E-mail of Organizer" required name="event_orga_email" value="<?= $email;?>">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Upload Photo</label>
                <div class="col-sm-10">
                <input type="file" class="form-control" name="event_photo">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Details</label>
                <div class="col-sm-10">
                <textarea class="form-control" placeholder="Enter Event Details" required name="event_details"><?= $details;?></textarea>
                </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn" style="background-color:black;color:white">UPDATE</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>