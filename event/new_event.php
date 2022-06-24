<!DOCTYPE html>
<html>
    <head>
       <?php
         include_once('admin_header.php');
       ?>
    </head>
<body>
    <div class="container">
        <h2 align="center">ADD NEW EVENTS</h2><br>
        <form class="form-horizontal" action="db_insert.php" enctype="multipart/form-data" method="POST" style="border:1px solid #000;padding:10px;">
            <div class="form-group">
                <label class="control-label col-sm-2">Event Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Event Name" required name="event_name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Date</label>
                <div class="col-sm-10">
                <input type="date" class="form-control" value="<?php echo date('Y-m-d');?>" required name="event_date">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Address</label>
                <div class="col-sm-10">
                <textarea class="form-control" placeholder="Enter Event Address" required name="event_address"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Organized By</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Name of Organizer" required name="event_organizer">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Organizer's E-mail</label>
                <div class="col-sm-10">
                <input type="email" class="form-control" placeholder="Enter E-mail of Organizer" required name="event_orga_email">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Upload Photo</label>
                <div class="col-sm-10">
                <input type="file" class="form-control"  name="event_photo">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Event Details</label>
                <div class="col-sm-10">
                <textarea class="form-control" placeholder="Enter Event Details" required name="event_details"></textarea>
                </div>
            </div>
           
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn" style="background-color:black;color:white">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>