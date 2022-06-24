<!DOCTYPE html>
<html>
    <head>
       <?php
         include_once('header.php');
         include_once('connection.php');
       ?>
    </head>
<body>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/istockphoto-813637356-1024x1024.jpg" width="100%" alt="First slide">
    </div>
  </div>
</div>
    <div class="container">
      <h1 style="text-align: center;">Event Listing</h1>
      <?php
      $query="select * from events";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_array($result))
      {
      ?>
  
        <div class="card bg-success" style="padding:5px;background-color: #dff0d8;
    border: 2px solid red;
    margin-bottom: 10px;">
          <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                  <img src="<?= $row['event_photo'];?>">
                </div>
                <div class="col-md-9">
                  <h2><?= $row['event_name'];?></h2>
                  <h5> <?= $row['event_date'];?></h5>
                  <p><?= $row['event_details'];?></p>
                  <a href="event_details.php?id=<?= $row['id'];?>" class="btn btn-danger" style="background-color:#000;color:#fff;">READ MORE</a>
                </div>
            </div>
          </div>
        </div>
      
      <?php } ?>
    </div>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/istockphoto-1312742248-1024x1024.jpg" width="100%" alt="First slide">
    </div>
  </div>
</div>

</body>
</html>