<!DOCTYPE html>
<html>
    <head>
       <?php
         include_once('header.php');
         include_once('connection.php');
       ?>
    </head>
<body>
    <div class="container">
      <?php 
      $id=$_GET['id'];
      $query="select * from events where id='$id'";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result))
      {
      ?>
        <div class="card bg-success" style="padding:10px;margin-bottom:10px">
          <div class="card-body">
                <h2><?= $row['event_name'];?></h2>
                <h5><?= $row['event_date'];?></h5>
                <img src="<?= $row['event_photo'];?>" width="50%" height="auto">
                <p><?= $row['event_details'];?></p>
                <p>Organized By : <?= $row['event_organizer'];?></p>
                <p>Organizer's email :<?= $row['event_orga_email'];?></p>
                <a href="index.php" class="btn" style="background-color:#000;color:#fff;">BACK TO LISTING</a>
          </div>
        </div>
      <?php } ?>
    </div>
</body>
</html>